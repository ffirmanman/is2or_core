<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:35
  from 'tygh:addons/store_locator/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fba63698_79189104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce36ab03642dc15bbec3c55b33fef20f71b29459' => 
    array (
      0 => 'addons/store_locator/hooks/index/scripts.post.tpl',
      1 => 1767831037,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fba63698_79189104 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/store_locator/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/store_locator/configure_shipping.js"), $_smarty_tpl);?>

<?php }
}
