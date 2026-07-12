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
defined('BOOTSTRAP') or die('Access denied');
$schema['ab__advanced_sitemap']['page_title'] = 'ab__advanced_sitemap';
$schema['ab__advanced_sitemap']['modes']['manage']['vendor_only'] = true;
$schema['ab__advanced_sitemap']['modes']['manage']['use_company'] = true;
$schema['ab__as_links']['page_title'] = 'ab__as_links.manage';
$schema['ab__as_links']['modes']['manage']['vendor_only'] = true;
$schema['ab__as_links']['modes']['manage']['use_company'] = true;
$schema['ab__advanced_sitemap']['modes']['generate_sitemap']['use_company'] = true;
$schema['ab__advanced_sitemap']['modes']['cron']['use_company'] = true;
return $schema;
