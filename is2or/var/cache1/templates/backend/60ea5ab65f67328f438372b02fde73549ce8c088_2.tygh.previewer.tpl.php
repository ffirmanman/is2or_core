<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:23
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__image_previewers/overrides/common/previewer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd83a66150_55059121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60ea5ab65f67328f438372b02fde73549ce8c088' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__image_previewers/overrides/common/previewer.tpl',
      1 => 1736835277,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd83a66150_55059121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
?>
<!--override with ab__image_previewers-->
<?php if (fn_ab__ip_is_ab_previewer()) {
echo smarty_function_script(array('src'=>"js/addons/ab__image_previewers/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>

<?php } else {
echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>

<?php }
}
}
