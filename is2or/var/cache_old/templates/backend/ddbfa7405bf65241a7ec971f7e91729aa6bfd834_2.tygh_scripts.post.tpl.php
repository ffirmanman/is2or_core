<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:13
  from 'tygh:addons/vendor_rating/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad946105e480_31651956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddbfa7405bf65241a7ec971f7e91729aa6bfd834' => 
    array (
      0 => 'addons/vendor_rating/hooks/index/scripts.post.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad946105e480_31651956 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_rating/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_rating/formula.js"), $_smarty_tpl);?>

<?php }
}
