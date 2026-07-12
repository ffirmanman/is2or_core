<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2025   *
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
use Tygh\ABSF;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
define('ABSF_HASH_SEPARATE', ABSF::get_hash_separate());
define('ABSF_NEW_VERSION_UT2', ABSF::check_out_new_version_ut2());
fn_register_hooks('get_products_pre',
'url_post',
'get_categories_after_sql',
'get_route',
'delete_category_post',
'delete_company',
'ab__as_other_objects', 'sitemap_link_object',
'ajax_destruct_before_response',
'get_product_feature_variants',
'ab__fn_get_subcategory_items_post',
'exim_get_pattern_definition_export_fields'
);
