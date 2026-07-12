<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:30
  from 'tygh:common/icon.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9472b61d48_07664942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd60f95e9feaf48fd4856d1a6c02f8d40e0df065b' => 
    array (
      0 => 'common/icon.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9472b61d48_07664942 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('class')) {?><span class="ty-icon <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('title')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is_rtl_language')()) {?>dir="rtl" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('data')) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data'), 'data_value', false, 'data_name');
$foreach22DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('data_name')->value => $_smarty_tpl->getVariable('data_value')->value) {
$foreach22DoElse = false;
if ($_smarty_tpl->getValue('data_value')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_value')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?>><?php if ($_smarty_tpl->getValue('icon_text')) {
echo $_smarty_tpl->getValue('icon_text');
}?></span><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/icon.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/icon.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('class')) {?><span class="ty-icon <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('id')) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('title')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is_rtl_language')()) {?>dir="rtl" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('data')) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data'), 'data_value', false, 'data_name');
$foreach23DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('data_name')->value => $_smarty_tpl->getVariable('data_value')->value) {
$foreach23DoElse = false;
if ($_smarty_tpl->getValue('data_value')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_value')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?>><?php if ($_smarty_tpl->getValue('icon_text')) {
echo $_smarty_tpl->getValue('icon_text');
}?></span><?php }
}
}
}
