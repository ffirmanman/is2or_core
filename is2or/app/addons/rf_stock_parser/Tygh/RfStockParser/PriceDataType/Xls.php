<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\PriceDataType;

use Tygh\RfStockParser\PriceDataType\ReadHelpers\ExcelHelper;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Tygh\RfStockParser\PriceDataType\ReadHelpers\LabelsHelper;
use Tygh\RfStockParser\ProcessingData;
use Tygh\RfStockParser\Exceptions\LabelsWrong;

require_once dirname(__FILE__) . '/../../../lib/Autoloader.php';
require_once dirname(__FILE__) . '/../../../lib/PhpSpreadsheet_1_28/Autoloader.php';

class Xls extends Type
{
    /**
     * @throws LabelsWrong
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     * @throws \PhpOffice\PhpSpreadsheet\Reader\Exception
     */
    public function getData(ProcessingData $processingData): \Iterator
    {
        if ($this->firstRow == 0) {
            $this->firstRow = 1;
        }

        $data = [];

        $fileType = IOFactory::identify($this->filePath);
        if (!in_array($fileType, ['Xlsx', 'Xls', 'Ods'])) {
            throw new \Exception('xls parser wrong filetype ' . $fileType);
        }
        $objReader = IOFactory::createReader($fileType);
        $objReader->setReadDataOnly(true);

        $objReader->setReadFilter(
            new ExcelHelper(
                $this->firstRow,
                $this->getStep()
            )
        );

        $PHPExcel = $objReader->load($this->filePath);

        $sheet = $PHPExcel->setActiveSheetIndex(0);
        $lastRow = $sheet->getHighestRow();
        $lastColumn = $sheet->getHighestColumn();

        if (empty($processingData['process']['all_rows_count']) && method_exists($objReader, 'listWorksheetInfo')) {
            $worksheetData = $objReader->listWorksheetInfo($this->filePath);
            $processingData['process']['all_rows_count'] = $worksheetData[0]['totalRows'];
        }

        $alphabet = array_flip(self::getExcelColumnRange());
        $steps = 0;

        $labelsLineNumber = $this->columnSettings['labels_row'];
        if ($labelsLineNumber > -1) {
            $labels = $sheet->rangeToArray('A' . $labelsLineNumber . ':' . $lastColumn . $labelsLineNumber)[0] ?? [];

            $labelsHelper = new LabelsHelper();
            $labelsHelper->checkLabels($this->parserId, $labels, $this->columnSettings['labels_row_stop_update']);
        }

        for ($i = $this->firstRow; $i <= $lastRow; $i++) {
            $steps++;

            foreach ($this->columns as $k => $column) {
                if (!isset($alphabet[$k])) {
                    continue;
                }

                $value = $sheet->getCell($k . $i)->getValue();
                if (strpos($value, '=') === 0) {
                    $value = $sheet->getCell($k . $i)->getFormattedValue();
                }

                if (is_array($column)) {
                    foreach ($column as $aColumn) {
                        $data = $this->addColumnData($data, $i, $aColumn, $value);
                    }
                } else {
                    $data = $this->addColumnData($data, $i, $column, $value);
                }
            }

            if (empty($data[$i]['manufacturer_code'])) {
                unset($data[$i]);
            }

            if (!isset($processingData['count'])) {
                $processingData['count'] = 0;
            }

            if (!empty($data[$i])) {
                $processingData['count']++;
            }

            if ($steps && $steps % $this->getStep() == 0) {
                yield $data;

                $this->firstRow = $i + 1;

                $objReader->setReadFilter(
                    new ExcelHelper(
                        $i + 1,
                        $this->getStep()
                    )
                );

                $PHPExcel = $objReader->load($this->filePath);
                $sheet = $PHPExcel->setActiveSheetIndex(0);
                $lastRow = $sheet->getHighestRow();
                $data = [];
            }
        }

        yield $data;
    }

    public static function excelColumnRangeProvider($lower, $upper): \Generator
    {
        ++$upper;
        for ($i = $lower; $i !== $upper; ++$i) {
            yield $i;
        }
    }

    private static function excelColumnRange($lower, $upper): array
    {
        return iterator_to_array(self::excelColumnRangeProvider($lower, $upper));
    }

    public static function getExcelColumnRange(): array
    {
        return self::excelColumnRange('A', 'DZ');
    }

    protected function processCellValue($columnName, $value): string
    {
        if ($columnName == 'avail_since' && is_numeric($value)) {
            $value = Date::excelToTimestamp($value);
        } else {
            $value = parent::processCellValue($columnName, $value);
        }

        return $value;
    }
}
