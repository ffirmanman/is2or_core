<?php
/* Smarty version 5.4.3, created on 2026-03-08 21:52:52
  from 'tygh:addons/reward_points/hooks/products/options_modifiers.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adc5841e4711_05264972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44af9373ce04e2d6799ccf2ce590735b7990a80f' => 
    array (
      0 => 'addons/reward_points/hooks/products/options_modifiers.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/reward_points/common/point_modifier.tpl' => 2,
  ),
))) {
function content_69adc5841e4711_05264972 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/reward_points/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('vr')['point_modifier'])) {?>&nbsp;<?php $_smarty_tpl->renderSubTemplate("tygh:addons/reward_points/common/point_modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->getValue('vr')['point_modifier_type'],'mod_value'=>$_smarty_tpl->getValue('vr')['point_modifier']), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/products/options_modifiers.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/reward_points/hooks/products/options_modifiers.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('vr')['point_modifier'])) {?>&nbsp;<?php $_smarty_tpl->renderSubTemplate("tygh:addons/reward_points/common/point_modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->getValue('vr')['point_modifier_type'],'mod_value'=>$_smarty_tpl->getValue('vr')['point_modifier']), (int) 0, $_smarty_current_dir);
}
}
}
}
