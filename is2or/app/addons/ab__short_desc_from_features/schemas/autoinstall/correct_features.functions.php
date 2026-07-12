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
use Tygh\Enum\ObjectStatuses;
function fn_correct_features($features_count)
{
$features = db_get_fields('SELECT feature_id FROM ?:product_features LIMIT ?n', $features_count);
$strs_array = [];
for ($i = 0; $i < count($features); $i++) {
$strs_array[] = db_quote('(?n, \'Y\')', $features[$i]);
}
db_query('REPLACE INTO ?:ab__short_desc_from_features_flags (feature_id, use_for_desc) VALUES ?p;', implode(',', $strs_array));
fn_ab__sdff_generate_descriptions(db_get_fields('SELECT product_id FROM ?:products WHERE status = ?s', ObjectStatuses::ACTIVE));
}
