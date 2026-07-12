<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:components/menu/get_secondary_items.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed2b873b3_26672373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc8d86125b710cad5b7f8e0bb34c37becc53ec6c' => 
    array (
      0 => 'components/menu/get_secondary_items.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed2b873b3_26672373 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/menu';
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "get_items", null, null);?>
        <?php if ((defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null)) {?>
        <?php $_smarty_tpl->assign('items', array(), false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('items', $_smarty_tpl->getValue('navigation')['static']['secondary'], false, NULL);?>
    <?php }?>
    <?php $_smarty_tpl->assign('secondary_items', $_smarty_tpl->getValue('items'), false, 2);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
