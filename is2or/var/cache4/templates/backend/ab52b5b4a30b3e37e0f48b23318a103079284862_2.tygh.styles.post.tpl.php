<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:37:29
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__stickers/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834527955ba42_45046008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab52b5b4a30b3e37e0f48b23318a103079284862' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__stickers/hooks/index/styles.post.tpl',
      1 => 1736835237,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834527955ba42_45046008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/ab__stickers/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"../../themes/responsive/css/addons/ab__stickers/styles.less"),$_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_ab__stickers_sticker_get_ts_appearance_styles(), 'appearance_style');
$_smarty_tpl->tpl_vars['appearance_style']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['appearance_style']->key => $_smarty_tpl->tpl_vars['appearance_style']->value) {
$_smarty_tpl->tpl_vars['appearance_style']->do_else = false;
$__foreach_appearance_style_1_saved = $_smarty_tpl->tpl_vars['appearance_style'];
echo smarty_function_style(array('src'=>"../../themes/responsive/css/addons/ab__stickers/".((string)$_smarty_tpl->tpl_vars['appearance_style']->key)."_stickers.less"),$_smarty_tpl);?>

<?php
$_smarty_tpl->tpl_vars['appearance_style'] = $__foreach_appearance_style_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('theme', "responsive");
if ($_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name'] == "abt__unitheme2" || $_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name'] == "abt__youpitheme") {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value == $_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name'], ENT_QUOTES, 'UTF-8');?>

<?php }
echo smarty_function_style(array('src'=>"../../themes/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/css/addons/ab__stickers/theme.less"),$_smarty_tpl);
}
}
