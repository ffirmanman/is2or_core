<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\Currencies\Sources;

use Tygh\RfStockParser\Currencies\Currency;

class Cart extends Source
{
    public function getBase()
    {
        return Currency::getDefaultCurrency();
    }

    protected function getData()
    {
        return db_get_hash_single_array('SELECT currency_code, coefficient FROM ?:currencies', ['currency_code', 'coefficient']);
    }

    public static function getName()
    {
        return __('rf_stock_parser_store_currencies');
    }
}
