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

class ComparisonList
{

private $productList = [];

protected $href = '';

protected $viewMoreHref = '';

private $title = '';

private $id;

private $isActive;

public function getProductList()
{
return $this->productList;
}

public function addProduct($product)
{
if (!in_array($product, $this->productList)) {
$this->productList[] = $product;
}
}

public function getTitle()
{
return $this->title;
}

public function setTitle($title)
{
$this->title = $title;
}

public function getHref()
{
return $this->href;
}

private function setHref($href)
{
$this->href = $href;
}

private function setId($id)
{
$this->id = $id;
}

public function getViewMoreHref()
{
return $this->viewMoreHref;
}

public function setViewMoreHref($viewMoreHref)
{
$this->viewMoreHref = $viewMoreHref;
}
public function isActive()
{
return $this->isActive;
}

public function __construct($id, $title = '', $href = '', $viewMoreHref = '', $isActive = false)
{
$this->setId($id);
$this->setTitle($title);
$this->setHref($href);
$this->setViewMoreHref($viewMoreHref);
$this->isActive = $isActive;
}
}
