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
use Tygh\Settings;
defined('BOOTSTRAP') or die('Access denied');

function fn_ab__advanced_sitemap_install()
{
fn_ab__as_install_generate_cron_key();
fn_ab__as_install_add_db_fields();
}

function fn_ab__as_install_generate_cron_key()
{
$new_value = fn_generate_password(15);
Settings::instance()->updateValue('cron_key', $new_value, 'ab__advanced_sitemap');
}

function fn_ab__as_install_add_db_fields()
{
$columns = db_get_array('SHOW COLUMNS FROM ?:page_descriptions');
$columns_names = array_column($columns, 'Field');
if (!in_array('page_sitemap', $columns_names)) {
db_query('ALTER TABLE ?:page_descriptions ADD page_sitemap varchar(255) NOT NULL DEFAULT ""');
}
}
