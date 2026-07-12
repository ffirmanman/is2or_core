<?php

namespace Tygh\RfStockParser;

class ProcessingData extends \ArrayObject
{
    public function __set($name, $val)
    {
        $this[$name] = $val;
    }

    public function __get($name)
    {
        return $this[$name];
    }
}
