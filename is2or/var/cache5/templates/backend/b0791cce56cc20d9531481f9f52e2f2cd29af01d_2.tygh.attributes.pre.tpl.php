<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:38:53
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__antibot/hooks/ab__antibot/attributes.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835c06d163780_10375389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0791cce56cc20d9531481f9f52e2f2cd29af01d' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__antibot/hooks/ab__antibot/attributes.pre.tpl',
      1 => 1741957648,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835c06d163780_10375389 (Smarty_Internal_Template $_smarty_tpl) {
if (in_array($_smarty_tpl->tpl_vars['block_data']->value['ab__ab_hide_block'],array('W','A'))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array('for_white_bots','for_black_and_other_bots'), 'ab__antibot_view');
$_smarty_tpl->tpl_vars['ab__antibot_view']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ab__antibot_view']->value) {
$_smarty_tpl->tpl_vars['ab__antibot_view']->do_else = false;
?>
data-ca-ab-antibot-view-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab__antibot_view']->value, ENT_QUOTES, 'UTF-8');?>
="<?php if ($_smarty_tpl->tpl_vars['ab__antibot_view']->value == 'for_white_bots' && $_smarty_tpl->tpl_vars['block_data']->value['ab__ab_hide_block'] == 'W') {?>true<?php } else { ?>false<?php }?>"
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
