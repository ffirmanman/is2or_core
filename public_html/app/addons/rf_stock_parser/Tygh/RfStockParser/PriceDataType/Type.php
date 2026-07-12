<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\PriceDataType;

use Tygh\RfStockParser\Column;
use Tygh\RfStockParser\ProcessingData;

abstract class Type
{
    public const TYPE_XLS = 'xls';
    public const TYPE_XML = 'xml';
    public const TYPE_CSV = 'csv';

    protected $filePath;
    protected $columns;
    protected $firstRow;
    protected $columnSettings;
    protected $parserId;

    abstract public function getData(ProcessingData $processingData): \Iterator;

    public function setFilePatch(string $filePath): self
    {
        $this->filePath = $filePath;
        return $this;
    }

    public function setParserId(int $parserId): self
    {
        $this->parserId = $parserId;
        return $this;
    }

    public function setColumns(array $columns): self
    {
        $this->columns = $columns;
        return $this;
    }

    public function setColumnSettings(array $columnSettings): self
    {
        $this->columnSettings = $columnSettings;
        $this->firstRow = (int) ($columnSettings['first_row'] ?? 0);
        return $this;
    }

    public function getStep(): int
    {
        if (in_array('image', $this->columnSettings['renewable'] ?? [])) {
            return 100;
        }

        return 500;
    }

    protected function addColumnData($data, $key, $column, $value): array
    {
        list($multipleName, $multipleKey) = $this->getMultipleKey($column);

        if (strpos($column, '=') !== false) {
            $tempData = explode('=', $column);
            if (in_array($tempData[0], Column::MULTI_COLUMNS)) {
                $data[$key][$tempData[0]][] = [
                    'value' => $this->processCellValue($tempData[0], $value),
                    'eq' => $tempData[1],
                    'eq2' => $tempData[2] ?? null,
                ];
            } else {
                $data[$key][$tempData[0]] = [
                    'value' => $this->processCellValue($tempData[0], $value),
                    'eq' => $tempData[1],
                    'eq2' => $tempData[2] ?? null,
                ];
            }
        } elseif (in_array($multipleName, Column::MULTI_COLUMNS)) {
            if (!isset($data[$key][$multipleName])) {
                $data[$key][$multipleName] = [];
            }

            if (!is_array($value)) {
                $value = [$value];
            }
            foreach ($value as $val) {
                if (isset($multipleKey)) {
                    $data[$key][$multipleName][$multipleKey] = $this->processCellValue($multipleName, $val);
                } else {
                    $data[$key][$multipleName][] = $this->processCellValue($multipleName, $val);
                }
            }
        } else {
            $data[$key][$column] = $this->processCellValue($column, $value);
        }

        return $data;
    }

    private function getMultipleKey($str)
    {
        $data = explode('|', $str);
        if (isset($data[1])) {
            $data[1] = 'm' . $data[1];
        } else {
            $data[1] = null;
        }

        return $data;
    }

    protected function processCellValue($columnName, $value): string
    {
        if (!empty($this->columnSettings['encoding'])) {
            $value = mb_convert_encoding($value, 'utf-8', $this->columnSettings['encoding']);
        }

        if (in_array($columnName, ['opt_price', 'list_price', 'vat']) || strpos($columnName, 'price_usergroup') !== false) {
            // обычные и американские пробелы
            $tempValue = str_replace([' ', ' '], '', $value);
            $tempValue = preg_replace('/(\d+),(\d+)\.(\d+)/', '$1$2.$3', $tempValue);
            $tempValue = preg_replace('/(\d+),(\d+)/', '$1.$2', $tempValue);

            if (is_numeric($tempValue)) {
                $value = $tempValue;
            }

            if ($columnName === 'vat' && !is_numeric($tempValue)) {
                $value = null;
            }
        }

        if (strpos($columnName, 'short_description') !== false || strpos($columnName, 'full_description') !== false) {
            $value = str_replace('?:', '? :', $value);
        }

        return trim($value);
    }
}
