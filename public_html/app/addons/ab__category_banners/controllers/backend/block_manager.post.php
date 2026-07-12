<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2026   *
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
use Tygh\BlockManager\SchemesManager;
if($mode === 'ab__cb_get_wrappers'){
if(defined('AJAX_REQUEST')){
if (!empty($_REQUEST['assign_to']) && !empty($_REQUEST['suffix'])) {
$block_scheme = SchemesManager::getBlockScheme($_REQUEST['type'], $_REQUEST['block_data'], true);
Tygh::$app['view']
->assign('suffix', $_REQUEST['suffix'])
->assign('wrappers', $block_scheme['wrappers']);
Tygh::$app['ajax']->assignHtml($_REQUEST['assign_to'], Tygh::$app['view']->fetch('addons/ab__category_banners/views/ab__category_banners/components/wrapper.tpl'));
}
return [CONTROLLER_STATUS_NO_CONTENT];
}
}elseif($mode === 'block_selection'){
if(isset($_REQUEST['ab__cb_is_cb'])){
$block_types = Tygh::$app['view']->getTemplateVars('block_types');
unset($block_types['products']);
Tygh::$app['view']->assign('block_types', $block_types);
}
}