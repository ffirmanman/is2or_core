<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\Currencies\Sources;

class Ecb extends Source
{
    public const URL = 'https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml';

    public function getBase()
    {
        return 'EUR';
    }

    protected function getData()
    {
        $raw = file_get_contents(static::URL);
        $data = simplexml_load_string($raw);

        $result = [];

        foreach ($data->Cube->Cube->Cube as $datum) {
            $attrs = [];
            foreach ($datum->attributes() as $a => $b) {
                $attrs[$a] = (string) $b;
            }

            $code = $attrs['currency'];
            $result[$code] = (float) $attrs['rate'];
        }

        return $result;
    }

    public static function getName()
    {
        return self::URL;
    }
}
