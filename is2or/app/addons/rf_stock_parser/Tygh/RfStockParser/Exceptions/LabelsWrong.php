<?php

namespace Tygh\RfStockParser\Exceptions;

class LabelsWrong extends \Exception
{
    public function __construct()
    {
        parent::__construct(__('rf_stock_parser_price_labels_wrong_report'));
    }
}
