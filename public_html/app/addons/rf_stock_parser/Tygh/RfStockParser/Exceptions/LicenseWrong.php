<?php

namespace Tygh\RfStockParser\Exceptions;

class LicenseWrong extends \Exception
{
    public function __construct()
    {
        parent::__construct(__('rf_stock_parser_license_expired'));
    }
}
