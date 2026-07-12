<?php

namespace Tygh\RfStockParser\PriceDataType;

class Fabric
{
    public function getReader(string $type, int $parserId, string $filePath, array $columns, array $columnSettings): Type
    {
        $reader = null;

        switch ($type) {
        case 'xls':
            $reader = new Xls();
            break;
        case 'xml':
            $reader = new Xml();
            break;
        case 'csv':
            $reader = new Csv();
            break;
        }

        $reader
            ->setFilePatch($filePath)
            ->setParserId($parserId)
            ->setColumns($columns)
            ->setColumnSettings($columnSettings)
        ;

        return $reader;
    }
}
