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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
$group_id = isset($_REQUEST['group_id']) ? $_REQUEST['group_id'] : 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$suffix = '.manage';
$params = $_REQUEST;
if ($mode == 'update') {
if (isset($params['group_data'])) {
$group_id = fn_ab__ia_update_group($params['group_data'], $group_id);
}
} elseif ($mode == 'delete') {
fn_ab__ia_delete_group($group_id);
}
return [CONTROLLER_STATUS_OK, 'ab__ia_groups' . $suffix];
}
if ($mode == 'manage') {
list($groups, $search) = fn_ab__ia_get_groups();
Tygh::$app['view']->assign('ab__ia_groups', $groups)
->assign('search', $search);
} elseif ($mode == 'update') {
if ($group_id) {
list($groups, $search) = fn_ab__ia_get_groups(['group_id' => $group_id]);
if (isset($groups[$group_id])) {
Tygh::$app['view']->assign('group_data', $groups[$group_id]);
}
}
}
