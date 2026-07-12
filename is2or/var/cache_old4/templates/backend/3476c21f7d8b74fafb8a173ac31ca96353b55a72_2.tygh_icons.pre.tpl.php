<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:26
  from 'tygh:addons/ab__antibot/hooks/ab__antibot/icons.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5532a596b0_61315913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3476c21f7d8b74fafb8a173ac31ca96353b55a72' => 
    array (
      0 => 'addons/ab__antibot/hooks/ab__antibot/icons.pre.tpl',
      1 => 1767831042,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb5532a596b0_61315913 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__antibot/hooks/ab__antibot';
\Tygh\Languages\Helper::preloadLangVars(array('ab__ab.layout_block.hide_block.variants.a','ab__ab.layout_block.hide_block.variants.w'));
if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('block_data')['ab__ab_hide_block'],array('W','A'))) {?>
<div class="ab-antibot-bots_block">
<?php if ($_smarty_tpl->getValue('block_data')['ab__ab_hide_block'] == 'A') {?>
<div class="all" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ab.layout_block.hide_block.variants.a", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
<span class="white"></span>
<span class="black"></span>
</div>
<?php } else { ?>
<div class="black" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ab.layout_block.hide_block.variants.w", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
<span class="black"></span>
<span class="black"></span>
</div>
<?php }?>
</div>
<?php }
}
}
