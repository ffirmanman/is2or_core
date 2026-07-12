<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/required_products/hooks/products/options_advanced.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa99cd0a2_06341675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4023fed52bb54de21a7297a066bc4ccddc652640' => 
    array (
      0 => 'addons/required_products/hooks/products/options_advanced.pre.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa99cd0a2_06341675 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/required_products/hooks/products';
\Tygh\Languages\Helper::preloadLangVars(array('bought','bought'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('show_product_status') && $_smarty_tpl->getValue('product')['bought'] == "Y") {?>
<p><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bought", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</strong></p>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/required_products/hooks/products/options_advanced.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/required_products/hooks/products/options_advanced.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('show_product_status') && $_smarty_tpl->getValue('product')['bought'] == "Y") {?>
<p><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bought", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</strong></p>
<?php }
}
}
}
