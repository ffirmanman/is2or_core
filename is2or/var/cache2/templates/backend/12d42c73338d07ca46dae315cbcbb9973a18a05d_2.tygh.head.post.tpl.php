<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:41:17
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/mobile_app/hooks/index/head.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe04d5f4899_60865695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12d42c73338d07ca46dae315cbcbb9973a18a05d' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/mobile_app/hooks/index/head.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe04d5f4899_60865695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] === "addons" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] === "update" && $_smarty_tpl->tpl_vars['addon']->value['addon'] === "mobile_app") {?>
    <?php echo smarty_function_style(array('src'=>"addons/mobile_app/styles.css"),$_smarty_tpl);?>

<?php }
}
}
