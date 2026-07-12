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
function fn_ab__so_ntp_insert_hook_into_meta_tpl()
{
if (!is_ab_theme()) {
$file_path = fn_get_theme_path('[themes]/' . Registry::get('config.base_theme') . '/templates/addons/seo/hooks/index/meta.post.tpl', 'C');
$replaces = [
$file_path => [
[
'from' => '{if !fn_seo_is_indexed_page($smarty.request)}',
'to' => '{hook name="index:ab__so_noindex"}'.PHP_EOL.'{if !$smarty.request|fn_seo_is_indexed_page}',
],
[
'from' => '{foreach $seo_alt_hreflangs_list as $seo_alt_lang_code => $seo_alt_lang}',
'to' => '{/hook}'.PHP_EOL.'{foreach $seo_alt_hreflangs_list as $seo_alt_lang_code => $seo_alt_lang}',
],
],
];
replace_in_files($replaces);
}
return __('ab__so_ntp.autoinstall.insert_hook_into_meta_tpl', ['[file_path]' => $file_path]);
}
