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
namespace Ab_extendedComparisonWishlist;
use Ab_extendedComparisonWishlist\ComparisonLists\IComparisonGrouper;

class Service
{

private $settings = [];

private $session;

private $comparison_map = [];

private $grouper;

public function __construct($settings, \Tygh\Web\Session $session)
{
$this->setSettings($settings);
$this->session = $session;
$grouper = '\\Ab_extendedComparisonWishlist\\ComparisonLists\\' . fn_camelize($this->settings['group_by']) . 'ComparisonGrouper';
if (class_exists($grouper)) {
$this->setGrouper(new $grouper($this->settings['group_by']));
} else {
throw new \Tygh\Exceptions\ClassNotFoundException('No such comparison grouper at ' . $grouper);
}
}

public function setGrouper(IComparisonGrouper $grouper)
{
$this->grouper = $grouper;
}

public function getGrouper()
{
return $this->grouper;
}

private function setSettings($settings = [])
{
$this->settings = $settings;
}

public function getSettings($key = null)
{
return $key === null ? $this->settings : $this->settings[$key];
}

public function groupComparisonLists($clear_original_compare = false)
{
$comparison_lists = [];
if (!empty($this->session['comparison_list'])) {
$this->session['ab__ecw_original_comparison'] = $this->session['comparison_list'];
$map_key = get_class($this->grouper) . implode($this->session['comparison_list']);
if (empty($this->comparison_map[$map_key])) {
$this->comparison_map[$map_key] = $comparison_lists = $this->grouper->groupComparison($this->session['comparison_list'], $clear_original_compare);
} else {
$comparison_lists = $this->comparison_map[$map_key];
}
}
return [$comparison_lists];
}
}
