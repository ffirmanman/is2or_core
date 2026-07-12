<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:37:29
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/mobile_app/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345279cd3fb9_01813086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50bff36ba81f354b5abf3831db36f01b3c780bb1' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/mobile_app/hooks/index/scripts.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68345279cd3fb9_01813086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/mobile_app/colors.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/mobile_app/settings.js"),$_smarty_tpl);
}
}
