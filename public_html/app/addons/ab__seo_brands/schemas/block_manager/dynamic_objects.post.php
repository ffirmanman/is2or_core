<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2022   *
* / /_\ | | _____  _| |_/ /_ __ __ _ _ __   __| |_ _ __   __ _   | |_ ___  __ _ _ __ ___   *
* |  _  | |/ _ \ \/ / ___ \ '__/ _` | '_ \ / _` | | '_ \ / _` |  | __/ _ \/ _` | '_ ` _ \  *
* | | | | |  __/>  <| |_/ / | | (_| | | | | (_| | | | | | (_| |  | ||  __/ (_| | | | | | | *
* \_| |_/_|\___/_/\_\____/|_|  \__,_|_| |_|\__,_|_|_| |_|\__, |  \___\___|\__,_|_| |_| |_| *
*                                                         __/ |                            *
*                                                        |___/                             *
* ---------------------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license and accept    *
* to the terms of the License Agreement can install and use this program.                  *
* ---------------------------------------------------------------------------------------- *
* website: https://cs-cart.alexbranding.com                                                *
*   email: info@alexbranding.com                                                           *
*******************************************************************************************/
use Tygh\Enum\ProductFeatures;
$schema['ab__product_feature_variant_view'] = [
'admin_dispatch' => 'ab__sb_feature_variants.update',
'customer_dispatch' => 'product_features.view',
'key' => 'variant_id',
'picker' => 'addons/ab__seo_brands/pickers/product_feature_variants/picker.tpl',
'picker_params' => [
'multiple' => true,
],
];
$schema['ab__view_all_product_features'] = [
'admin_dispatch' => 'product_filters.update',
'customer_dispatch' => 'product_features.view_all',
'key' => 'filter_id',
'picker' => 'pickers/filters/picker.tpl',
'picker_params' => [
'multiple' => true,
'extra_url' => '&' . http_build_query([
'status' => 'A',
'feature_type' => [ProductFeatures::EXTENDED],
]),
],
];
return $schema;
