<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\PriceDataType;

use Tygh\RfStockParser\Exceptions\BrokenPrice;
use Tygh\RfStockParser\Exceptions\LabelsWrong;
use Tygh\RfStockParser\PriceDataType\ReadHelpers\LabelsHelper;
use Tygh\RfStockParser\ProcessingData;

class Csv extends Type
{
    /**
     * @throws LabelsWrong
     * @throws BrokenPrice
     */
    public function getData(ProcessingData $processingData): \Iterator
    {
        $data = [];
        $steps = 0;

        $file = new \SplFileObject($this->filePath, 'r');

        if (empty($processingData['process']['all_rows_count'])) {
            $file->seek($file->getSize());
            $processingData['process']['all_rows_count'] = $file->key();
            $file->rewind();
        }

        $labelsLineNumber = $this->columnSettings['labels_row'];
        if ($labelsLineNumber > -1) {
            $file->seek($labelsLineNumber);
            $labels = $file->fgetcsv($this->columnSettings['csv_delimiter'], $this->columnSettings['csv_enclosure'], $this->columnSettings['csv_escape']);

            $labelsHelper = new LabelsHelper();
            $labelsHelper->checkLabels($this->parserId, $labels, $this->columnSettings['labels_row_stop_update']);

            $file->rewind();
        }

        while (!$file->eof()) {
            $row = $file->fgetcsv($this->columnSettings['csv_delimiter'], $this->columnSettings['csv_enclosure'], $this->columnSettings['csv_escape']);
            $steps++;

            foreach ($this->columns as $k => $column) {
                if (isset($row[$k - 1])) {
                    $value = $row[$k - 1];

                    if (is_array($column)) {
                        foreach ($column as $aColumn) {
                            $data = $this->addColumnData($data, $this->firstRow, $aColumn, $value);
                        }
                    } else {
                        $data = $this->addColumnData($data, $this->firstRow, $column, $value);
                    }
                }
            }

            if (empty($data[$this->firstRow]['manufacturer_code'])) {
                unset($data[$this->firstRow]);
            }

            if (!isset($processingData['count'])) {
                $processingData['count'] = 0;
            }

            if (!empty($data[$this->firstRow])) {
                $processingData['count']++;
            }

            if ($steps && $steps % $this->getStep() == 0) {
                yield $data;
                $data = [];
            }

            $this->firstRow++;
        }

        yield $data;
    }
}
