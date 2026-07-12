<?php

namespace Tygh\RfStockParser\Exceptions;

class EmptyPrice extends \Exception
{
    public function __construct()
    {
        parent::__construct('Price list is empty');
    }
}
