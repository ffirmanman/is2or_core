<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:addons/product_reviews/hooks/index/actions.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed26b1f49_63144840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e815303f71d49f44c523e805e5e2568aca5d10bd' => 
    array (
      0 => 'addons/product_reviews/hooks/index/actions.pre.tpl',
      1 => 1767831039,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed26b1f49_63144840 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/product_reviews/hooks/index';
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE") && $_smarty_tpl->getValue('runtime')['controller'] === 'reviews' && ($_smarty_tpl->getValue('runtime')['mode'] === 'manage' && $_smarty_tpl->getValue('addons')['product_reviews']['split_reviews_by_storefronts'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('runtime')['mode'] === 'update')) {?>
    <?php $_smarty_tpl->assign('select_storefront', false, false, 2);
}
}
}
