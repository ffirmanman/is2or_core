<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser\PriceDataType\XmlPreset;

class PresetYml extends PresetDefault
{
    public static function getPath()
    {
        return 'yml_catalog/shop/offers/offer';
    }

    public static function getCategoriesPath()
    {
        return 'yml_catalog/shop/categories';
    }
}
