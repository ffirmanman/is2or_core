<?php

use Tygh\Addons\ProductVariations\Product\Type\Type;

$rf_stock_parser_fields = [
    'my_supplier_id',
    'manufacturer_code',
    'rf_cost',
    'rf_stop_update_price',
    'rf_stop_update_amount',
    'rf_stop_update_status',
];

if (class_exists('Tygh\Addons\ProductVariations\Product\Type\Type', false) && !empty($schema[Type::PRODUCT_TYPE_VARIATION])) {
    $schema[Type::PRODUCT_TYPE_VARIATION]['fields'] = array_merge(
        $schema[Type::PRODUCT_TYPE_VARIATION]['fields'],
        $rf_stock_parser_fields
    );
}

if (defined('PRODUCT_TYPE_VENDOR_PRODUCT_OFFER') && !empty($schema[PRODUCT_TYPE_VENDOR_PRODUCT_OFFER])) {
    $schema[PRODUCT_TYPE_VENDOR_PRODUCT_OFFER]['fields'] = array_merge(
        $schema[PRODUCT_TYPE_VENDOR_PRODUCT_OFFER]['fields'],
        $rf_stock_parser_fields
    );
}

if (defined('PRODUCT_TYPE_PRODUCT_OFFER_VARIATION') && !empty($schema[PRODUCT_TYPE_PRODUCT_OFFER_VARIATION])) {
    $schema[PRODUCT_TYPE_PRODUCT_OFFER_VARIATION]['fields'] = array_merge(
        $schema[PRODUCT_TYPE_PRODUCT_OFFER_VARIATION]['fields'],
        $rf_stock_parser_fields
    );
}

return $schema;
