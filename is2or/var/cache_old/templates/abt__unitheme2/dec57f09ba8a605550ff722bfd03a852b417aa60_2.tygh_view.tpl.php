<?php
/* Smarty version 5.4.3, created on 2026-03-10 03:55:57
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__custom_h1/overrides/views/product_features/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69af6c1d2eb645_17575777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dec57f09ba8a605550ff722bfd03a852b417aa60' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__custom_h1/overrides/views/product_features/view.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/product_features/components/feature_content.tpl' => 2,
  ),
))) {
function content_69af6c1d2eb645_17575777 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__custom_h1/overrides/views/product_features';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->renderSubTemplate("tygh:views/product_features/components/feature_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);?><span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant_data')['variant']), ENT_QUOTES, 'UTF-8');
if ($_REQUEST['page'] > 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__ch1.page_no', array('[page]'=>$_smarty_tpl->getValue('_REQUEST')['page']), $_smarty_tpl->getSmarty()->getLanguage());
}?></span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__custom_h1/overrides/views/product_features/view.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__custom_h1/overrides/views/product_features/view.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->renderSubTemplate("tygh:views/product_features/components/feature_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);?><span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant_data')['variant']), ENT_QUOTES, 'UTF-8');
if ($_REQUEST['page'] > 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__ch1.page_no', array('[page]'=>$_smarty_tpl->getValue('_REQUEST')['page']), $_smarty_tpl->getSmarty()->getLanguage());
}?></span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
