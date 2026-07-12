<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:41:17
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__motivation_block/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe04d981d60_16926994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333113ae2ec34b2ff87fb3121aa81a10d463949b' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__motivation_block/hooks/index/scripts.post.tpl',
      1 => 1736835084,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe04d981d60_16926994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'ab__motivation_block') {
echo smarty_function_script(array('src'=>"js/addons/ab__motivation_block/admin.js"),$_smarty_tpl);?>

<?php }
}
}
