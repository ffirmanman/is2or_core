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
$schema['ab__sf_rules']['page_title'] = 'ab__sf.rules';
$schema['ab__sf_rules']['modes']['manage']['vendor_only'] = true;
$schema['ab__sf_rules']['modes']['manage']['use_company'] = true;
$schema['ab__sf_rules']['modes']['update']['vendor_only'] = true;
$schema['ab__sf_rules']['modes']['update']['use_company'] = true;
$schema['ab__sf_rules']['modes']['delete']['vendor_only'] = true;
$schema['ab__sf_rules']['modes']['delete']['use_company'] = true;
$schema['ab__sf_names']['vendor_only'] = true;
$schema['ab__sf_names']['modes']['picker']['vendor_only'] = false;
$schema['ab__sf_names']['use_company'] = true;
$schema['ab__sf_names']['page_title'] = 'ab__sf.names';
$schema['ab__sf_patterns']['vendor_only'] = true;
$schema['ab__sf_patterns']['use_company'] = true;
$schema['ab__sf_patterns']['page_title'] = 'ab__sf.patterns';
$schema['ab__sf_sitemap']['vendor_only'] = true;
$schema['ab__sf_sitemap']['use_company'] = true;
$schema['ab__sf_sitemap']['page_title'] = 'ab__sf.sitemap';
return $schema;
