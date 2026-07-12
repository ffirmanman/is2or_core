<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:53
  from 'tygh:addons/ab__extended_metadata/hooks/index/meta_keywords.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f697fd5d0_78682274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a69bb5798f3c769063b89d29bd22f227a21366a' => 
    array (
      0 => 'addons/ab__extended_metadata/hooks/index/meta_keywords.override.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f697fd5d0_78682274 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__extended_metadata/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['ab__extended_metadata']['exclude_keywords'] == 'Y') {?>
    <!-- Keywords tag has been cut -->
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__extended_metadata/hooks/index/meta_keywords.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__extended_metadata/hooks/index/meta_keywords.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['ab__extended_metadata']['exclude_keywords'] == 'Y') {?>
    <!-- Keywords tag has been cut -->
<?php }
}
}
}
