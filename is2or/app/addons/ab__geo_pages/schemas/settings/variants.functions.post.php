<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2025   *
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
function fn_ab__gp_get_templates_for_settings()
{
$retval = [];
list($templates) = fn_ab__gp_get_templates([], 0, CART_LANGUAGE);
foreach ($templates as $template) {
$retval[$template['template_id']] = $template['template_name'];
}
return $retval;
}
function fn_settings_variants_addons_ab__geo_pages_default_template_id()
{
return fn_ab__gp_get_templates_for_settings();
}
function fn_settings_variants_addons_ab__geo_pages_index_page_template_id()
{
return fn_ab__gp_get_templates_for_settings();
}
