<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:36
  from 'tygh:addons/hw_infocenter/hooks/index/body.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fcad5bd2_99135658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49691e1567cd743157f2c58443a03c9026c75dde' => 
    array (
      0 => 'addons/hw_infocenter/hooks/index/body.pre.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fcad5bd2_99135658 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/hw_infocenter/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('extra_classes')) {?><div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('extra_classes')), ENT_QUOTES, 'UTF-8');?>
"><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hw_infocenter/hooks/index/body.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/hw_infocenter/hooks/index/body.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('extra_classes')) {?><div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('extra_classes')), ENT_QUOTES, 'UTF-8');?>
"><?php }
}
}
}
