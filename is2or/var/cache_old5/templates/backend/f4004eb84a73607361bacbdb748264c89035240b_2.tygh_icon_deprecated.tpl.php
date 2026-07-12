<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:common/icon_deprecated.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed2956ca2_86228492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4004eb84a73607361bacbdb748264c89035240b' => 
    array (
      0 => 'common/icon_deprecated.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed2956ca2_86228492 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
if ($_smarty_tpl->getValue('class')) {?><span class="cs-icon <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
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
$foreach24DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('data_name')->value => $_smarty_tpl->getVariable('data_value')->value) {
$foreach24DoElse = false;
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
