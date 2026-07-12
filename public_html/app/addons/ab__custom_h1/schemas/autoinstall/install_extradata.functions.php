<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2024   *
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
function fn_autoinstall_extradata_custom_h1()
{
$category_ids = db_get_fields('SELECT category_id
FROM ?:categories
WHERE level=1
AND status=\'A\'
AND is_trash=\'N\' ?p', fn_get_company_condition('company_id', true, '', true, false));
if (!empty($category_ids)) {
foreach (array_keys(fn_get_languages()) as $lang_code) {
$name = __('ab__custom_h1', [], $lang_code);
db_query('UPDATE ?:category_descriptions SET ab__custom_category_h1 = CONCAT(category, " ", ?s) WHERE lang_code = ?s AND category_id IN (?n)', $name, $lang_code, $category_ids);
}
return __('ab__ch1.autoinstall.done');
}
}
