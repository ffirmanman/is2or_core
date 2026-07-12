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
use Tygh\Enum\YesNo;
use Tygh\Enum\UserTypes;
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
function fn_ab__protection_content_copying_user_init()
{
$iplong = fn_get_ip(true);
$allowed_ips = trim(Registry::ifGet('addons.ab__protection_content_copying.non_protection_for_ips', ''));
$_SESSION['ab__pcc_status'] = 'ACTIVE';
if (AREA === \Tygh\Enum\SiteArea::STOREFRONT) {
if ((!empty($iplong)
&& YesNo::toBool(Registry::ifGet('addons.ab__protection_content_copying.activate_non_protection_for_ips', YesNo::NO))
&& in_array($iplong['host'], fn_ab__pcc_prepare_ips_for_comparison($allowed_ips)))
||
(in_array($_SESSION['auth']['user_type'], [UserTypes::ADMIN, UserTypes::VENDOR])
&& YesNo::toBool(Registry::Get('addons.ab__protection_content_copying.non_protection_for_admin')))) {
$_SESSION['ab__pcc_status'] = 'DISABLED';
}
}
}
function fn_ab__pcc_prepare_ips_for_comparison($ips = '')
{
$_ips = [];
foreach (explode(PHP_EOL, $ips) as $ip) {
$_ips[] = sprintf('%u', ip2long(trim($ip)));
}
return $_ips;
}
