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

use Tygh\ContextMenu\Items\GroupItem;
defined('BOOTSTRAP') or die('Access denied!');
$selectable_statuses = fn_get_default_statuses('', false);
$schema = [
'selectable_statuses' => $selectable_statuses,
'items' => [
'status' => [
'name' => ['template' => 'status'],
'type' => GroupItem::class,
'items' => [],
'position' => 20,
],
'actions' => [
'name' => ['template' => 'actions'],
'type' => GroupItem::class,
'items' => [
'delete_selected' => [
'name' => ['template' => 'delete_selected'],
'dispatch' => 'ab__sfb_authors.m_delete',
'data' => [
'action_class' => 'cm-confirm',
],
'position' => 10,
],
],
'position' => 30,
],
],
];
$position = 10;
foreach ($selectable_statuses as $status => $status_name) {
$item = [
'name' => [
'template' => 'change_to_status',
'params' => [
'[status]' => $status_name,
],
],
'dispatch' => 'ab__sfb_authors.m_update_statuses',
'data' => [
'action_attributes' => [
'class' => 'cm-ajax cm-post cm-ajax-send-form',
'href' => fn_url('ab__sfb_authors.m_update_statuses?status=' . $status),
'data-ca-target-id' => 'pagination_contents',
'data-ca-target-form' => '#authors_form',
],
],
'position' => $position,
];
$schema['items']['status']['items']['change_to_status_' . $status] = $item;
$position += 10;
}
return $schema;
