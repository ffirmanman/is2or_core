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
use Tygh\ABSF;
function fn_ab__mcd_get_ab__seo_filters_linked_objects($links)
{
list($names) = ABSF::get_names(['sf_id' => array_keys($links), 'show_hash_tooltip' => true, 'get_all_companies' => true]);
foreach ($links as $key => $ab__mcd_link) {
if (isset($names[$key])) {
$links[$key]['storefront_url'] = "categories.view&category_id={$names[$key]['category_id']}&features_hash={$names[$key]['features_hash']}&company_id={$names[$key]['company_id']}&storefront_id={$names[$key]['company_id']}";
$links[$key]['admin_url'] = "ab__sf_names.update&sf_id={$ab__mcd_link['object_id']}&selected_section=ab__mcd_tab";
$links[$key]['description'] = fn_get_category_name($names[$key]['category_id']);
foreach ($names[$key]['tooltip'] as $f => $tt) {
$links[$key]['description'] .= ' ' . $f . ' ' . implode(', ', $tt);
}
}
}
return $links;
}
