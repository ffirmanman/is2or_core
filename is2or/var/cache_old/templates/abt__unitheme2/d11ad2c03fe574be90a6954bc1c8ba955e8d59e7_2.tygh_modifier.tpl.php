<?php
/* Smarty version 5.4.3, created on 2026-03-08 21:52:52
  from 'tygh:common/modifier.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adc5841cc899_42263440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd11ad2c03fe574be90a6954bc1c8ba955e8d59e7' => 
    array (
      0 => 'common/modifier.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
))) {
function content_69adc5841cc899_42263440 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/common';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('is_integer') == true) {
$_smarty_tpl->assign('mod_value', round((float) $_smarty_tpl->getValue('mod_value'), (int) 0, (int) 1), false, NULL);
}
if ($_smarty_tpl->getValue('display_sign')) {
if ($_smarty_tpl->getValue('class')) {?><span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->getValue('mod_value') > 0) {?>+<?php } else { ?>-<?php }
if ($_smarty_tpl->getValue('class')) {?></span><?php }
}
if ($_smarty_tpl->getValue('mod_type') == "A" || $_smarty_tpl->getValue('mod_type') == "F") {
$_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getSmarty()->getModifierCallback('abs')($_smarty_tpl->getValue('mod_value'))), (int) 0, $_smarty_current_dir);
} else {
if (($_smarty_tpl->getValue('span_id') && !$_smarty_tpl->getValue('no_ids')) || $_smarty_tpl->getValue('class')) {?><span id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('span_id')), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('abs')($_smarty_tpl->getValue('mod_value'))), ENT_QUOTES, 'UTF-8');
if (($_smarty_tpl->getValue('span_id') && !$_smarty_tpl->getValue('no_ids')) || $_smarty_tpl->getValue('class')) {?></span><?php }
if ($_smarty_tpl->getValue('class')) {?><span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"><?php }?>%<?php if ($_smarty_tpl->getValue('class')) {?></span><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/modifier.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/modifier.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('is_integer') == true) {
$_smarty_tpl->assign('mod_value', round((float) $_smarty_tpl->getValue('mod_value'), (int) 0, (int) 1), false, NULL);
}
if ($_smarty_tpl->getValue('display_sign')) {
if ($_smarty_tpl->getValue('class')) {?><span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->getValue('mod_value') > 0) {?>+<?php } else { ?>-<?php }
if ($_smarty_tpl->getValue('class')) {?></span><?php }
}
if ($_smarty_tpl->getValue('mod_type') == "A" || $_smarty_tpl->getValue('mod_type') == "F") {
$_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getSmarty()->getModifierCallback('abs')($_smarty_tpl->getValue('mod_value'))), (int) 0, $_smarty_current_dir);
} else {
if (($_smarty_tpl->getValue('span_id') && !$_smarty_tpl->getValue('no_ids')) || $_smarty_tpl->getValue('class')) {?><span id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('span_id')), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('abs')($_smarty_tpl->getValue('mod_value'))), ENT_QUOTES, 'UTF-8');
if (($_smarty_tpl->getValue('span_id') && !$_smarty_tpl->getValue('no_ids')) || $_smarty_tpl->getValue('class')) {?></span><?php }
if ($_smarty_tpl->getValue('class')) {?><span class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"><?php }?>%<?php if ($_smarty_tpl->getValue('class')) {?></span><?php }
}
}
}
}
