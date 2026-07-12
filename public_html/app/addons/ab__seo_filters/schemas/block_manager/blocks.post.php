<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2023   *
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
$schema['products']['content']['items']['fillings']['ab__sf_when_no_main_products'] = [
'params' => [
'ab__sf_when_no_main_products' => true,
'sort_by' => 'price',
'sort_order' => 'desc',
],
];
$schema['breadcrumbs']['cache_overrides_by_dispatch']['products.view']['update_handlers'][] = 'ab__sf_names';
$schema['main']['cache_overrides_by_dispatch']['products.view']['update_handlers'][] = 'ab__sf_names';
$schema['product_filters']['cache']['callable_handlers']['ab__sf'] = ['fb_ab__sf_is_absf'];
$schema['product_filters']['cache']['disable_cache_when']['callable_handlers']['ab__sf'] = ['fb_ab__sf_is_not_absf'];
$schema['product_filters']['cache']['disable_cache_when']['callable_handlers']['ab__sf_ut2_disable_selected_filters_cache'] = ['fn_ab__sf_ut2_yt_disable_selected_filters_cache',['$block_data']];
$position = array_search('features_hash', $schema['product_filters']['cache']['disable_cache_when']['request_handlers']);
if ($position) {
unset($schema['product_filters']['cache']['disable_cache_when']['request_handlers'][$position]);
}
return $schema;
