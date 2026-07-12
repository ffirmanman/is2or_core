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
use Tygh\Registry;
use Tygh\Languages\Languages;
function fn_ab__sft_fillup_tags_with_seo()
{
$data = fn_get_contents(Registry::get('config.dir.var') . '/ab__data/ab__seo_for_tags/demodata/data.json');
if (empty($data)) {
return __('ab__sft.autoinstall.no_demodata');
}
$result = [];
$data = json_decode($data, true);
$lang_codes_list = Languages::getAll();
$tags_list = db_get_hash_single_array('SELECT tag_id, tag FROM ?:tags', ['tag_id', 'tag']);
foreach ($tags_list as $tag_id => $tag) {
if (empty($data[$tag])) {
continue;
}
foreach ($lang_codes_list as $lang_code => $lang_data) {
if (empty($data[$tag][$lang_code])) {
continue;
}
$result[$tag_id] = '<a href="' . fn_url('ab__seo_for_tags.update?tag_id=' . $tag_id, 'A') . '">' . $tag . '</a>';
db_replace_into('ab__tag_descriptions', $data[$tag][$lang_code]);
}
}
return empty($result) ? __('ab__sft.autoinstall.tags_where_not_filled') : __('ab__sft.autoinstall.tags_where_filled', ['[tags]' => implode(', ', $result)]);
}
