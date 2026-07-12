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
namespace Ab_extendedComparisonWishlist\ComparisonLists;
use Tygh\Registry;

class MainCategoryComparisonGrouper extends AComparisonGrouper
{

private $category_names = [];

private $category_ids = [];

public function groupComparison(&$products = [], $clear_original_compare = false)
{
$category_ids = $this->getProductsMainCategories($products);
$category_names = $this->getCategoryNames($category_ids);
$limiter = fn_ab__ecw_get_main_category_grouper_limiter();
foreach ($products as $key => $product) {
$product_main_category = $category_ids[$product];
$comparison_list = $this->getComparisonList($product_main_category);
if (is_null($comparison_list)) {
$is_active = isset($_REQUEST['category_id']) && $_REQUEST['category_id'] === $product_main_category;
$action = '';
if (Registry::get('runtime.controller') == 'product_features' && Registry::get('runtime.mode') == 'compare' && Registry::get('runtime.action') != '') {
$action = '.' . Registry::get('runtime.action');
}
$href = 'product_features.compare' . $action . '?category_id=' . $product_main_category;
$comparison_list = new ComparisonList($product_main_category,
$category_names[$product_main_category],
$href,
'categories.view?category_id=' . $product_main_category,
$is_active);
$this->addComparisonList($product_main_category, $comparison_list);
}
$comparison_list->addProduct($product);
if ($clear_original_compare && is_callable($limiter) && !$limiter($product_main_category)) {
unset($products[$key]);
}
}
parent::groupComparison();
return $this->getComparisonLists();
}

public function addComparisonList($key = '', ComparisonList $comparisonList = null)
{
parent::addComparisonList($key, $comparisonList);
}

private function getProductsMainCategories($product_ids)
{
$categories = [];
$not_existent = $this->getNotExistentFromMap('category_ids', $product_ids, $categories);
if (!empty($not_existent)) {
$not_existent = \Tygh::$app['db']->getSingleHash('SELECT product_id, category_id FROM ?:products_categories WHERE product_id IN (?n) AND link_type = ?s', ['product_id', 'category_id'], (array) $not_existent, 'M');
$this->category_ids = $not_existent + $this->category_ids;
$categories = $this->category_ids;
}
return $categories;
}

private function getCategoryNames($category_ids)
{
$categories = [];
$not_existent = $this->getNotExistentFromMap('category_names', $category_ids, $categories);
if (!empty($not_existent)) {
$not_existent = fn_get_category_name($not_existent);
$this->category_names = (array) $not_existent + $this->category_names;
$categories = $this->category_names;
}
return $categories;
}
}
