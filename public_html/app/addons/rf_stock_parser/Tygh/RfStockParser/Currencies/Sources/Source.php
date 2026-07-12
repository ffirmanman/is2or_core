<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\Currencies\Sources;

use Tygh\Registry;

abstract class Source
{
    public const URL = 'override!';

    abstract protected function getData();

    abstract public function getBase();

    abstract public static function getName();

    public function getList()
    {
        $cacheKey = 'parserDataCurrencies' . (new \ReflectionClass($this))->getShortName();
        Registry::registerCache($cacheKey, 1200, Registry::cacheLevel('time'));

        if (Registry::isExist($cacheKey) !== false) {
            $data = Registry::get($cacheKey);
        } else {
            $data = $this->getData();
            Registry::set($cacheKey, $data);
        }

        return $data;
    }

    // fabric
    public static function getSource($source)
    {
        $source = 'Tygh\RfStockParser\Currencies\Sources\\' . ucfirst($source);
        return new $source();
    }
}
