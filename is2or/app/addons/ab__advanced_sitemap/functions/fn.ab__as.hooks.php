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
use Tygh\Enum\Addons\Ab_imagesSeo\AttributeTypes;
use Tygh\Enum\Addons\Ab_imagesSeo\ObjectTypes;
use Tygh\Enum\SiteArea;
use Tygh\Enum\YesNo;
defined('BOOTSTRAP') or die('Access denied');

function fn_ab__images_seo_ab__advanced_sitemap_product_images_title($image_id, $image_link, $product_id, $lang_code, &$product_name, $settings)
{
if ($settings['add_title_and_caption'] === YesNo::YES) {
fn_ab__is_get_object_attributes([
'lang_code' => $lang_code,
'object_type' => ObjectTypes::PRODUCT,
], SiteArea::STOREFRONT);
$features_variants = null;
if ($settings['add_variation_features_description'] === YesNo::YES) {
$features_variants = fn_ab__as_get_product_features_variants($product_id, $lang_code);
}
$num = fn_ab__is_get_image_count('title', $product_id, $image_id);
$product_name = fn_ab__is_generate_text(ObjectTypes::PRODUCT, AttributeTypes::TITLE, $product_name, $num, $features_variants, $lang_code);
}
}
