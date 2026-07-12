<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:21
  from 'tygh:addons/ab__stickers/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed1625da6_99088236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c463fe585f2eb41a96196a18c33f8896e76d2d98' => 
    array (
      0 => 'addons/ab__stickers/hooks/index/styles.post.tpl',
      1 => 1767831043,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed1625da6_99088236 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__stickers/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__stickers/styles.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"../../themes/responsive/css/addons/ab__stickers/styles.less"), $_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_sticker_get_ts_appearance_styles')(), 'appearance_style');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('appearance_style')->key => $_smarty_tpl->getVariable('appearance_style')->value) {
$foreach2DoElse = false;
$foreach2Backup = clone $_smarty_tpl->getVariable('appearance_style');
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"../../themes/responsive/css/addons/ab__stickers/".((string)$_smarty_tpl->getVariable('appearance_style')->key)."_stickers.less"), $_smarty_tpl);?>

<?php
$_smarty_tpl->setVariable('appearance_style', $foreach2Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->assign('theme', "responsive", false, NULL);
if ($_smarty_tpl->getValue('runtime')['layout']['theme_name'] == "abt__unitheme2" || $_smarty_tpl->getValue('runtime')['layout']['theme_name'] == "abt__youpitheme") {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('theme') == $_smarty_tpl->getValue('runtime')['layout']['theme_name']), ENT_QUOTES, 'UTF-8');?>

<?php }
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"../../themes/".((string)$_smarty_tpl->getValue('theme'))."/css/addons/ab__stickers/theme.less"), $_smarty_tpl);
}
}
