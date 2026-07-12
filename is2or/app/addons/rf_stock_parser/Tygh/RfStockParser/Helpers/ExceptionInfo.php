<?php

namespace Tygh\RfStockParser\Helpers;

class ExceptionInfo
{
    public static function get(\Throwable $e): string
    {
        if (mb_stripos($e->getMessage(), 'license') !== false) {
            $trace = '';
        } else {
            $trace = $e->getTraceAsString();
        }

        return implode(
            PHP_EOL,
            [
                $e->getMessage(),
                $trace,
            ]
        );
    }
}
