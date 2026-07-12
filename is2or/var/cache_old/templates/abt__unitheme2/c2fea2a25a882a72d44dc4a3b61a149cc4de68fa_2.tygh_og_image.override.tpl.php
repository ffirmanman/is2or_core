<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:28
  from 'tygh:addons/ab__extended_comparison_wishlist/hooks/abt__unitheme/og_image.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9470e72038_65139771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2fea2a25a882a72d44dc4a3b61a149cc4de68fa' => 
    array (
      0 => 'addons/ab__extended_comparison_wishlist/hooks/abt__unitheme/og_image.override.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9470e72038_65139771 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__extended_comparison_wishlist/hooks/abt__unitheme';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (((string)$_smarty_tpl->getValue('runtime')['controller']).".".((string)$_smarty_tpl->getValue('runtime')['mode']) == (defined('AB__ECW_PAGES_DISPATCH') ? constant('AB__ECW_PAGES_DISPATCH') : null) && $_smarty_tpl->getValue('page')['icon']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')['icon']['icon']['image_path']), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__extended_comparison_wishlist/hooks/abt__unitheme/og_image.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__extended_comparison_wishlist/hooks/abt__unitheme/og_image.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (((string)$_smarty_tpl->getValue('runtime')['controller']).".".((string)$_smarty_tpl->getValue('runtime')['mode']) == (defined('AB__ECW_PAGES_DISPATCH') ? constant('AB__ECW_PAGES_DISPATCH') : null) && $_smarty_tpl->getValue('page')['icon']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')['icon']['icon']['image_path']), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
}
}
}
