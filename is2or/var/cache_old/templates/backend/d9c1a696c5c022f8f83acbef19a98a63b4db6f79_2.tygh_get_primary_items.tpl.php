<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:12
  from 'tygh:components/menu/get_primary_items.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9460b3ce01_56934131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9c1a696c5c022f8f83acbef19a98a63b4db6f79' => 
    array (
      0 => 'components/menu/get_primary_items.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/menu/get_additional_items.tpl' => 1,
    'tygh:components/menu/get_block_manager_data.tpl' => 1,
  ),
))) {
function content_69ad9460b3ce01_56934131 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/menu';
\Tygh\Languages\Helper::preloadLangVars(array('home'));
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "get_items", null, null);?>
    <?php $_smarty_tpl->assign('additional_items', array(), false, NULL);?>
        <?php $_smarty_tpl->assign('navigation_home', array('home'=>array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("home", [], $_smarty_tpl->getSmarty()->getLanguage()),'position'=>10,'icon'=>"icon-home",'href'=>"index.index",'id_path'=>"home",'active'=>($_smarty_tpl->getValue('runtime')['controller'] === "index" && $_smarty_tpl->getValue('runtime')['mode'] === "index"))), false, NULL);?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:components/menu/get_additional_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php if ((defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null)) {?>
        <?php $_smarty_tpl->assign('items', $_smarty_tpl->getValue('navigation')['static']['central'], false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('items', $_smarty_tpl->getSmarty()->getModifierCallback('array_merge')($_smarty_tpl->getSmarty()->getModifierCallback('array_merge')($_smarty_tpl->getValue('navigation_home'),((($tmp = $_smarty_tpl->getValue('navigation')['static']['central'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp))),$_smarty_tpl->getValue('additional_items')), false, NULL);?>
    <?php }?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:components/menu/get_block_manager_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php $_smarty_tpl->assign('primary_items', $_smarty_tpl->getValue('items'), false, 2);?>
    <?php $_smarty_tpl->assign('attrs_wrapper', $_smarty_tpl->getValue('attrs_wrapper'), false, 2);?>
    <?php $_smarty_tpl->assign('show_collapse_default', $_smarty_tpl->getValue('show_collapse_default'), false, 2);?>
    <?php $_smarty_tpl->assign('main_menu_primary_class', $_smarty_tpl->getValue('main_menu_primary_class'), false, 2);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
