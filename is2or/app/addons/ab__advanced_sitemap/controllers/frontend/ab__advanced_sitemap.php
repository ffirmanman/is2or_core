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
use Tygh\Registry;
defined('BOOTSTRAP') or die('Access denied');
$path = fn_ab__as_get_sitemap_dir(Tygh::$app['storefront']->storefront_id);
if (Registry::get('runtime.mode') === 'sitemap') {
$filename = $path . 'sitemap.xml';
} elseif (Registry::get('runtime.mode') === 'sitemap_image' && !empty($_REQUEST['page'])) {
$filename = $path . 'images' . (int) ($_REQUEST['page']) . '.xml';
} elseif (in_array(Registry::get('runtime.mode'), ['products', 'categories', 'feature_variants', 'pages', 'custom_links', 'other_links', 'companies', 'blog'])) {
$filename = $path . Registry::get('runtime.mode') . (int) ($_REQUEST['page']) . '.xml';
}
if (!empty($filename) && file_exists($filename)) {
header('Content-Type: text/xml;charset=utf-8');
readfile($filename);
return [CONTROLLER_STATUS_NO_CONTENT];
}
return [CONTROLLER_STATUS_NO_PAGE];
