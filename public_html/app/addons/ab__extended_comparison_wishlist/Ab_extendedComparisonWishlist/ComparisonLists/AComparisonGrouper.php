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

class AComparisonGrouper implements IComparisonGrouper
{
private $group_by = '';

protected static $comparisonLists = [];

protected static $productsMap = [];

protected function getNotExistentFromMap($map_name, $ids, &$existent_to = [])
{
$not_existent = [];
foreach ($ids as $id) {
if (isset($this->$map_name[$id])) {
$existent_to[$id] = $this->$map_name[$id];
} else {
$not_existent[] = $id;
}
}
return $not_existent;
}

public function groupComparison(&$products = [], $clear_original_compare = false)
{
$comparisonLists = $this->getComparisonLists();
if (!empty($comparisonLists)) {

foreach ($comparisonLists as $key => $comparisonList) {
foreach ($comparisonList->getProductList() as $product_id) {
$this->addProductToMap($product_id, $key);
}
}
}
return $comparisonLists;
}

public function __construct($group_by)
{
$this->group_by = $group_by;
}

public function getGroupBy()
{
return $this->group_by;
}

public function addComparisonList($key = '', ComparisonList $comparisonList = null)
{
static::$comparisonLists[$key] = $comparisonList;
}

protected function getComparisonList($key)
{
if (!empty(static::$comparisonLists[$key])) {
return static::$comparisonLists[$key];
}
return null;
}

public function getComparisonLists()
{
return static::$comparisonLists;
}

public function addProductToMap($product_id, $comparison_list_key)
{
static::$productsMap[$product_id] = $comparison_list_key;
return $this;
}

public function getProductsMap()
{
return static::$productsMap;
}
}
