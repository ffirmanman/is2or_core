<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2021   *
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
$search = Tygh::$app['view']->getTemplateVars('search');
if (empty($search) && !empty($schema) && !empty($schema['pages'])) {
$schema['pages']['view']['search'] = [];
}
$schema['products']['view']['base_url'] = [
'fn_ab__so_ntp_get_canonical_base_url' => ['product', 'product_id', 'products.view?product_id=[id]'],
];
$schema['categories']['view']['base_url'] = [
'fn_ab__so_ntp_get_canonical_base_url' => ['category', 'category_id', 'categories.view?category_id=[id]'],
];
$schema['pages']['view']['base_url'] = [
'fn_ab__so_ntp_get_canonical_base_url' => ['page', 'page_id', 'pages.view?page_id=[id]'],
];
$schema['promotions']['view']['base_url'] = [
'fn_ab__so_ntp_get_canonical_base_url' => ['promotion', 'promotion_id', 'promotions.view?promotion_id=[id]'],
];
$schema['product_features']['view']['base_url'] = [
'fn_ab__so_ntp_get_canonical_base_url' => ['variant', 'variant_id', 'product_features.view?variant_id=[id]'],
];
$schema['tags']['view']['base_url'] = [
'fn_ab__so_ntp_get_canonical_base_url' => ['tag', 'tag_id', 'tags.view?tag_id=[id]'],
];
$schema['ab__seo_reviews']['view_category']['base_url'] = [
'fn_ab__so_ntp_get_canonical_base_url' => ['ab__seo_reviews', 'category_id', 'ab__seo_reviews.view_category?category_id=[id]'],
];
return $schema;
