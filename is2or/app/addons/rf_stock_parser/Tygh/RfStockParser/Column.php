<?php

// RF_OB_TRUE

namespace Tygh\RfStockParser;

use Tygh\RfStockParser\PriceDataType\Type;
use Tygh\Languages\Languages;
use Tygh\Registry;
use Tygh\RfStockParser\PriceDataType\Xls;
use Tygh\RfStockParser\Helpers\WarehouseHelper;

class Column
{
    public const MULTI_COLUMNS = [
        'feature',
        'image',
        'category',
        'product_field',
    ];
    public const COLUMNS = [
        'manufacturer_code',
        'price_usergroup0',
        'opt_price',
        'list_price',
        'amount',
        'vat',
        'currency',
        'min_qty',
    ];
    public const ADDITIONAL_COLUMNS = [
        'feature',
        'image',
        'category',
        'name',
        'short_description',
        'full_description',
        'promo_text',
        'avail_since',
        'weight',
        'shipping_freight',
        'min_items_in_box',
        'max_items_in_box',
        'box_length',
        'box_width',
        'box_height',
        //          'group', // added in getAdditionalColumns

        'page_title',
        'meta_description',
        'meta_keywords',

        'product_field',
    ];
    public const ADDITIONAL_COLUMNS_WITH_LANG = [
        'name',
        'short_description',
        'full_description',
        'promo_text',

        'page_title',
        'meta_description',
        'meta_keywords',
    ];
    public const WITH_MODIFIERS = [
        'feature',
        'image',
        'short_description',
        'full_description',
        'promo_text',

        'page_title',
        'meta_description',
        'meta_keywords',

        'buy_now_url',

        'group',
    ];
    public const WITH_FEATURES = [
        'feature',
        'group',
    ];
    public const COLUMN_ALIASES = [
        'name' => 'product',
    ];
    public const LINK_VENDOR_CODE = 1;
    public const LINK_VENDOR_CODE_WITH_BRANDS = 2;
    public const LINK_VENDOR_CODE_WITH_PARSER = 3;

    public static function getColumnTranslates($companyId): array
    {
        $data = [
            'manufacturer_code' => __('rf_product_code'),
            'opt_price' => __('rf_supplier_price'),
            'amount' => __('quantity'),
            'list_price' => __('list_price'),
            'feature' => __('feature'),
            'name' => '[' . __('description') . '] ' . __('name'),
            'image' => __('image'),
            'category' => __('category'),
            'vat' => __('rf_supplier_vat'),
            'short_description' => '[' . __('description') . '] ' . __('short_description'),
            'full_description' => '[' . __('description') . '] ' . __('full_description'),
            'promo_text' => '[' . __('description') . '] ' . __('promo_text'),
            'currency' => __('rf_stock_parser_currency'),
            'group' => __('group'),
            'avail_since' => __('available_since'),
            'weight' => '[' . __('shipping_properties') . '] ' . __('weight'),
            'shipping_freight' => '[' . __('shipping_properties') . '] ' . __('shipping_freight'),
            'min_items_in_box' => '[' . __('shipping_properties') . '] ' . __('items_in_box') . ' min',
            'max_items_in_box' => '[' . __('shipping_properties') . '] ' . __('items_in_box') . ' max',
            'box_length' => '[' . __('shipping_properties') . '] ' . __('box_length'),
            'box_width' => '[' . __('shipping_properties') . '] ' . __('box_width'),
            'box_height' => '[' . __('shipping_properties') . '] ' . __('box_height'),
            'page_title' => '[Seo] ' . __('page_title'),
            'meta_description' => '[Seo] ' . __('meta_description'),
            'meta_keywords' => '[Seo] ' . __('meta_keywords'),
            'seo_name' => '[Seo] ' . __('seo_name'),
            'buy_now_url' => '[' . __('catalog_mode') . '] ' . __('buy_now_url'),
            'product_field' => __('rf_stock_parser_product_field'),
            'min_qty' => __('min_order_qty'),
        ];
        $data += self::getUserGroups();
        $data += WarehouseHelper::getWarehouses($companyId);

        $langs = array_keys(Languages::getAll());
        if (count($langs) > 1) {
            foreach ($langs as $lang) {
                foreach (self::ADDITIONAL_COLUMNS_WITH_LANG as $item) {
                    $data[$item . '_' . $lang] = $data[$item] . ' [' . $lang . ']';
                }
            }
        }

        asort($data);

        return $data;
    }

    public static function getAttrTranslates(): array
    {
        return [
            'nodeValue' => __('rf_stock_parser_attr_translates_nodevalue'),
        ];
    }

    public static function getDefaultColumns($companyId, $type = Type::TYPE_XLS)
    {
        if (empty($type)) {
            $type = Type::TYPE_XLS;
        }

        $values = self::COLUMNS;

        $userGroups = self::getUserGroups(true);
        if (!empty($userGroups)) {
            $values += $userGroups;
        }

        $warehouses = WarehouseHelper::getWarehouses($companyId);
        if (!empty($warehouses)) {
            $values += $warehouses;
        }

        if ($type == Type::TYPE_XLS) {
            $letters = Xls::getExcelColumnRange();
            $keys = array_slice($letters, 0, count($values));
        } elseif ($type == Type::TYPE_CSV || $type == Type::TYPE_XML) {
            $keys = range(1, count($values));
        }

        if (empty($keys)) {
            return [];
        }

        return array_combine($keys, $values);
    }

    public static function getLangs()
    {
        static $langs = [];

        if (empty($langs)) {
            $langs = array_keys(Languages::getAll());
        }

        return $langs;
    }

    public static function getAdditionalColumnsWithLangs($group = false): array
    {
        $columns = [];
        $langs = self::getLangs();

        if (count($langs) < 2) {
            return [];
        }

        foreach ($langs as $lang) {
            foreach (self::ADDITIONAL_COLUMNS_WITH_LANG as $item) {
                if ($group) {
                    $columns[$lang][] = [
                        'field' => $item . '_' . $lang,
                        'original' => $item,
                    ];
                } else {
                    $columns[] = $item . '_' . $lang;
                }
            }
        }

        return $columns;
    }

    public static function getAdditionalColumns(): array
    {
        $columns = self::ADDITIONAL_COLUMNS;

        if (Registry::isExist('addons.product_variations')) {
            $columns[] = 'group';
        }

        if (Registry::isExist('addons.seo')) {
            $columns[] = 'seo_name';
        }

        if (Registry::isExist('addons.catalog_mode')) {
            $columns[] = 'buy_now_url';
        }

        $columns = array_merge($columns, self::getAdditionalColumnsWithLangs());
        asort($columns);

        return $columns;
    }

    public static function getUserGroups($withoutZero = false): array
    {
        $result = [];
        $name = __('rf_msrp') . ' [ ' . __('group') . ': %s ]';
        if (!$withoutZero) {
            $result['price_usergroup0'] = __('rf_msrp');
        }

        $usergroups = fn_get_usergroups(['type' => 'C', 'status' => 'A'], DESCR_SL);

        foreach ($usergroups as $usergroup) {
            $result['price_usergroup' . $usergroup['usergroup_id']] = sprintf($name, $usergroup['usergroup']);
        }

        return $result;
    }

    public static function getColumnsWithModifiers(): array
    {
        $columns = self::WITH_MODIFIERS;
        $langs = self::getLangs();

        $withLangs = array_intersect(self::ADDITIONAL_COLUMNS_WITH_LANG, $columns);

        foreach ($langs as $lang) {
            foreach ($withLangs as $item) {
                $columns[] = $item . '_' . $lang;
            }
        }

        return $columns;
    }

    public static function getUpdatedColumns($flat = false): array
    {
        $data = [
            'product_descriptions' => array_merge([
                'name',
                'short_description',
                'full_description',
                'page_title',
                'meta_description',
                'meta_keywords',
                'promo_text',
            ], self::getAdditionalColumnsWithLangs()),
            'avail_since' => true,
            'image' => true,
            'category' => true,
            'buy_now_url' => true,
            'seo_name' => true,
            'product_field' => true,
        ];

        if ($flat) {
            $flatData = array_merge(
                $data['product_descriptions'],
                ['image'],
                ['category'],
                ['avail_since'],
                ['buy_now_url'],
                ['seo_name'],
                ['product_field']
            );
            sort($flatData);
            return $flatData;
        }

        return $data;
    }
}
