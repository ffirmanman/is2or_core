<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:28
  from 'tygh:addons/ab__extended_comparison_wishlist/hooks/abt__youpitheme/og_image.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9470e62705_67250611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06f859f5a6e660aa8a02d41cc6c74f4ec53b7418' => 
    array (
      0 => 'addons/ab__extended_comparison_wishlist/hooks/abt__youpitheme/og_image.override.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__extended_comparison_wishlist/hooks/abt__unitheme/og_image.override.tpl' => 2,
  ),
))) {
function content_69ad9470e62705_67250611 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__extended_comparison_wishlist/hooks/abt__youpitheme';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__extended_comparison_wishlist/hooks/abt__unitheme/og_image.override.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__extended_comparison_wishlist/hooks/abt__youpitheme/og_image.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__extended_comparison_wishlist/hooks/abt__youpitheme/og_image.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__extended_comparison_wishlist/hooks/abt__unitheme/og_image.override.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
}
