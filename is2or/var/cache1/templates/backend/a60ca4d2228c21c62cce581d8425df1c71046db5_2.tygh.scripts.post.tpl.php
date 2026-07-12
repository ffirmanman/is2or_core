<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:22
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/paypal_checkout/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd82973809_87412465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a60ca4d2228c21c62cce581d8425df1c71046db5' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/paypal_checkout/hooks/index/scripts.post.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd82973809_87412465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/paypal_checkout/configure.js"),$_smarty_tpl);?>

<?php }
}
