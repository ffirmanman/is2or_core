<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:37:29
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/csc_live_search/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345279cfc833_24488874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e958b9b7844c8991ea55b316f69dd426c2ae4aad' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/csc_live_search/hooks/index/scripts.post.tpl',
      1 => 1741593135,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68345279cfc833_24488874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/csc_live_search/synonyms.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/csc_live_search/backend.js"),$_smarty_tpl);?>

<?php }
}
