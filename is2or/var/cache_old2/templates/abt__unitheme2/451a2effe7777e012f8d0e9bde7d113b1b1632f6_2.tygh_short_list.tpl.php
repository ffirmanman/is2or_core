<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:47:52
  from 'tygh:blocks/product_list_templates/default_params/short_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb088f31e67_76696142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '451a2effe7777e012f8d0e9bde7d113b1b1632f6' => 
    array (
      0 => 'blocks/product_list_templates/default_params/short_list.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb088f31e67_76696142 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/product_list_templates/default_params';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('show_name', true, false, 2);
$_smarty_tpl->assign('show_sku', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, 2);
$_smarty_tpl->assign('show_rating', true, false, 2);
$_smarty_tpl->assign('show_rating_num', false, false, 2);
$_smarty_tpl->assign('show_price', true, false, 2);
$_smarty_tpl->assign('show_old_price', true, false, 2);
$_smarty_tpl->assign('show_clean_price', true, false, 2);
$_smarty_tpl->assign('show_qty', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, 2);
$_smarty_tpl->assign('show_amount_label', false, false, 2);
$_smarty_tpl->assign('show_product_amount', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, 2);
$_smarty_tpl->assign('show_add_to_cart', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none", false, 2);
$_smarty_tpl->assign('but_role', "action", false, 2);
$_smarty_tpl->assign('hide_form', true, false, 2);
$_smarty_tpl->assign('hide_qty_label', true, false, 2);
$_smarty_tpl->assign('show_product_labels', true, false, 2);
$_smarty_tpl->assign('show_discount_label', true, false, 2);
$_smarty_tpl->assign('show_shipping_label', true, false, 2);
$_smarty_tpl->assign('ut2_load_more', $_smarty_tpl->getValue('settings')['abt__ut2']['load_more']['product_list'] == 'Y', false, 2);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/default_params/short_list.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/product_list_templates/default_params/short_list.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('show_name', true, false, 2);
$_smarty_tpl->assign('show_sku', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_sku'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, 2);
$_smarty_tpl->assign('show_rating', true, false, 2);
$_smarty_tpl->assign('show_rating_num', false, false, 2);
$_smarty_tpl->assign('show_price', true, false, 2);
$_smarty_tpl->assign('show_old_price', true, false, 2);
$_smarty_tpl->assign('show_clean_price', true, false, 2);
$_smarty_tpl->assign('show_qty', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_qty'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, 2);
$_smarty_tpl->assign('show_amount_label', false, false, 2);
$_smarty_tpl->assign('show_product_amount', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_amount'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, 2);
$_smarty_tpl->assign('show_add_to_cart', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list'][$_smarty_tpl->getValue('tmpl')]['show_button_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']] !== "none", false, 2);
$_smarty_tpl->assign('but_role', "action", false, 2);
$_smarty_tpl->assign('hide_form', true, false, 2);
$_smarty_tpl->assign('hide_qty_label', true, false, 2);
$_smarty_tpl->assign('show_product_labels', true, false, 2);
$_smarty_tpl->assign('show_discount_label', true, false, 2);
$_smarty_tpl->assign('show_shipping_label', true, false, 2);
$_smarty_tpl->assign('ut2_load_more', $_smarty_tpl->getValue('settings')['abt__ut2']['load_more']['product_list'] == 'Y', false, 2);
}
}
}
