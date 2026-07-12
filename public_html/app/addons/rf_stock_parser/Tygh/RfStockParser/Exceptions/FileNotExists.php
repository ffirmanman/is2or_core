<?php

namespace Tygh\RfStockParser\Exceptions;

class FileNotExists extends \Exception
{
    public function __construct()
    {
        parent::__construct('File does not exists');
    }
}
