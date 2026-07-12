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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}

function fn_seo_ab__ecw_update_comparison_page_post($comparison_page_id, $data, $lang_code, $exist)
{
fn_seo_update_object($data, $comparison_page_id, '~', $lang_code);
}

function fn_seo_ab__ecw_find_pages_post($params, $lang_code, &$pages)
{
if ($params['get_seo_name'] === true) {
foreach ($pages as &$page) {
$page['seo_name'] = fn_seo_get_name('~', $page['page_id'], '', null, $lang_code);
}
}
}

function fn_seo_ab__ecw_delete_comparison_page_post($comparison_page_id, $res)
{
fn_delete_seo_name($comparison_page_id, '~', '');
}
