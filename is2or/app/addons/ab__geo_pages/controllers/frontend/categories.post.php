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
if($mode === 'view' && $location_id = fn_ab__gp_is_location_page()){
$category_data = Tygh::$app['view']->getTemplateVars('category_data');
$object_id = $category_data['category_id'];
$object_type = 'category';
if (!empty($_SESSION['absf_page_id'])) {
$object_id = $_SESSION['absf_page_id'];
$object_type = 'ab__seo_filter';
}
if(!fn_ab__gp_is_location_available_for_object($location_id,$object_id,$object_type)){
return [CONTROLLER_STATUS_NO_PAGE];
}
}