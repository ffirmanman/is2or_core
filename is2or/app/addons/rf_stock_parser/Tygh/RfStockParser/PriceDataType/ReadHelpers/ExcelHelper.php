<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\PriceDataType\ReadHelpers;

use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;

class ExcelHelper implements IReadFilter
{
    private $startRow = 0;
    private $endRow = 0;

    public function __construct($startRow, $chunkSize)
    {
        $this->startRow = $startRow;
        $this->endRow = $startRow + $chunkSize;
    }

    public function readCell($column, $row, $worksheetName = '')
    {
        // читаем первые 50 строк всегда, там могут быть переменные
        if (($row < 50) || ($row >= $this->startRow && $row < $this->endRow)) {
            return true;
        }
        return false;
    }
}
