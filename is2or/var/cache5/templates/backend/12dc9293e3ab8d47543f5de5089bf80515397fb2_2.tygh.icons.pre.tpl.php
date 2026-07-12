<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:38:53
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__antibot/hooks/ab__antibot/icons.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835c06d17b217_83541565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12dc9293e3ab8d47543f5de5089bf80515397fb2' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__antibot/hooks/ab__antibot/icons.pre.tpl',
      1 => 1741957648,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835c06d17b217_83541565 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('ab__ab.layout_block.hide_block.variants.a','ab__ab.layout_block.hide_block.variants.w'));
if (in_array($_smarty_tpl->tpl_vars['block_data']->value['ab__ab_hide_block'],array('W','A'))) {?>
<div class="ab-antibot-bots_block">
<?php if ($_smarty_tpl->tpl_vars['block_data']->value['ab__ab_hide_block'] == 'A') {?>
<div class="all" title="<?php echo $_smarty_tpl->__("ab__ab.layout_block.hide_block.variants.a");?>
">
<span class="white"></span>
<span class="black"></span>
</div>
<?php } else { ?>
<div class="black" title="<?php echo $_smarty_tpl->__("ab__ab.layout_block.hide_block.variants.w");?>
">
<span class="black"></span>
<span class="black"></span>
</div>
<?php }?>
</div>
<?php }
}
}
