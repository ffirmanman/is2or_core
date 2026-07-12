<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:26
  from 'tygh:addons/ab__antibot/hooks/ab__antibot/attributes.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5532a0e463_35213634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b8fbb710fab5e9c735572c8e34d2a5e52af26c1' => 
    array (
      0 => 'addons/ab__antibot/hooks/ab__antibot/attributes.pre.tpl',
      1 => 1767831042,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb5532a0e463_35213634 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__antibot/hooks/ab__antibot';
if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('block_data')['ab__ab_hide_block'],array('W','A'))) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, array('for_white_bots','for_black_and_other_bots'), 'ab__antibot_view');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ab__antibot_view')->value) {
$foreach3DoElse = false;
?>
data-ca-ab-antibot-view-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ab__antibot_view')), ENT_QUOTES, 'UTF-8');?>
="<?php if ($_smarty_tpl->getValue('ab__antibot_view') == 'for_white_bots' && $_smarty_tpl->getValue('block_data')['ab__ab_hide_block'] == 'W') {?>true<?php } else { ?>false<?php }?>"
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
