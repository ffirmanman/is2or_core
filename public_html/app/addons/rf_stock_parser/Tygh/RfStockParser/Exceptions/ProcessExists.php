<?php

namespace Tygh\RfStockParser\Exceptions;

class ProcessExists extends \Exception
{
    public function __construct()
    {
        parent::__construct('Process already exists');
    }
}
