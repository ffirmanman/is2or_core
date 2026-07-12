<?php

namespace Tygh\RfStockParser\Exceptions;

class BrokenPrice extends \Exception
{
    public function __construct()
    {
        parent::__construct('Broken price list');
    }
}
