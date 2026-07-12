<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\Currencies\Sources;

class Cbr extends Source
{
    public const URL = 'http://www.cbr.ru/scripts/XML_daily.asp';

    public function getBase()
    {
        return 'RUB';
    }

    protected function getData()
    {
        $raw = file_get_contents(static::URL);
        $data = simplexml_load_string($raw);

        $result = [];

        foreach ($data->Valute as $datum) {
            $code = (string) $datum->CharCode;
            $result[$code] = ((float) str_replace(',', '.', $datum->Value) / (int) $datum->Nominal);
        }

        return $result;
    }

    public static function getName()
    {
        return self::URL;
    }
}
