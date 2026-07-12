<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2026   *
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
fn_register_hooks(
'fn_abt__ut2_check_versions_post'
,'check_company_permissions'
,'update_block_post'
,'get_blocks'
,'render_block_pre'
,'get_banners'
,'get_products_before_select'
,'get_products'
,'get_products_post'
,'gather_additional_products_data_post'
,['abt__ut2_mv_get_vendor_info', '', 'vendor_rating']
,'ajax_destruct_before_response'
,'get_company_data_post'
,'update_company_pre'
,'get_banner_data'
,'logo_types'
,'get_logos_post'
,'url_post'
,'get_route'
,'install_addon_post'
);
