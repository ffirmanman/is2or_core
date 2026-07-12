<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:35
  from 'tygh:addons/ab__motivation_block/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fbaee445_99931414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '105457d957bc22b7eb5f47a04d21a40274b53bb0' => 
    array (
      0 => 'addons/ab__motivation_block/hooks/index/scripts.post.tpl',
      1 => 1767831037,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fbaee445_99931414 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__motivation_block/hooks/index';
if ($_smarty_tpl->getValue('runtime')['controller'] == 'ab__motivation_block') {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__motivation_block/admin.js"), $_smarty_tpl);?>

<?php }
}
}
