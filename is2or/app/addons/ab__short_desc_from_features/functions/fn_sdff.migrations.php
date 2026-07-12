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

function fn_ab__sdff_migrate_v13_v12()
{
$is_exist = db_get_field('SHOW COLUMNS FROM ?:ab__short_desc_from_features_values LIKE ?s', 'company_id');
if (empty($is_exist)) {
db_query('ALTER TABLE ?:ab__short_desc_from_features_values ADD COLUMN company_id int(10) unsigned NOT NULL DEFAULT ?i', 0);
db_query('ALTER TABLE ?:ab__short_desc_from_features_values DROP PRIMARY KEY, ADD PRIMARY KEY (product_id, lang_code, company_id)');
}
}

function fn_ab__sdff_migrate_v190_v180()
{
$is_exist = db_get_field('SHOW COLUMNS FROM ?:ab__short_desc_from_features_values LIKE ?s', 'storefront_id');
if (empty($is_exist)) {
db_query('ALTER TABLE ?:ab__short_desc_from_features_values ADD COLUMN storefront_id int(10) unsigned NOT NULL DEFAULT ?i', 0);
db_query('ALTER TABLE ?:ab__short_desc_from_features_values DROP PRIMARY KEY, ADD PRIMARY KEY (product_id, lang_code, company_id, storefront_id)');
}
}