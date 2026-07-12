<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:25:51
  from 'tygh:addons/product_variations/hooks/products/qty.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94ffd48a38_05693933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31811bcd1d69103cbb656408d405260edc913c8c' => 
    array (
      0 => 'addons/product_variations/hooks/products/qty.override.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad94ffd48a38_05693933 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_variations/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('show_select_variations_button', (($tmp = $_smarty_tpl->getValue('show_select_variations_button') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php if (!$_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('product')['has_child_variations'] && $_smarty_tpl->getValue('show_select_variations_button')) {
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/qty.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_variations/hooks/products/qty.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('show_select_variations_button', (($tmp = $_smarty_tpl->getValue('show_select_variations_button') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php if (!$_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('product')['has_child_variations'] && $_smarty_tpl->getValue('show_select_variations_button')) {
}
}
}
}
