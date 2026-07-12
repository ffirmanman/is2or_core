<?php

namespace Tygh\RfStockParser\Process;

use Tygh\RfStockParser\Process\Processes\NotFoundExport;
use Tygh\RfStockParser\Process\Processes\Parse;
use Tygh\RfStockParser\Process\Processes\Test;

class ProcessFabric
{
    public static function getProcess($type, $parserId): ?Process
    {
        if ($type == Process::TYPE_PARSE) {
            $obj = new Parse();
        } elseif ($type == Process::TYPE_NOT_FOUND_EXPORT) {
            $obj = new NotFoundExport();
        } else {
            $obj = new Test();
        }

        $obj->setParserId($parserId);
        return $obj;
    }
}
