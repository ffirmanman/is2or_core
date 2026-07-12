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
$schema['export_fields']['AB Noindex'] = [
'process_get' => ['fn_ab__so_ntp_exim_get_product_data', '#key', 'noindex'],
'process_put' => ['fn_ab__so_ntp_exim_set_product_data', '#key', 'noindex', '#this'],
'linked' => false,
];
$schema['export_fields']['AB Canonical ID'] = [
'process_get' => ['fn_ab__so_ntp_exim_get_product_data', '#key', 'canonical_id'],
'process_put' => ['fn_ab__so_ntp_exim_set_product_data', '#key', 'canonical_id', '#this'],
'linked' => false,
];
return $schema;
