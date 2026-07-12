<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:14
  from 'tygh:/var/www/is2or/design/themes/responsive/templates/addons/ab__intelligent_accessories/overrides/views/products/components/notification.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1fa7874d4_68027751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fd96b7ac6644e4b27d5d3ec83af28fca5c6e0b9' => 
    array (
      0 => '/var/www/is2or/design/themes/responsive/templates/addons/ab__intelligent_accessories/overrides/views/products/components/notification.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/product_notification_items.tpl' => 2,
    'tygh:addons/ab__intelligent_accessories/views/components/ab__ia_products_in_add_to_cart.tpl' => 2,
  ),
))) {
function content_69ada1fa7874d4_68027751 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__intelligent_accessories/overrides/views/products/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="ty-product-notification__body cm-notification-max-height"><?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_notification_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getValue('product_info');
if ($_smarty_tpl->getValue('addons')['ab__intelligent_accessories']['show_ia_in_added_to_cart'] == 'Y' && (($tmp = $_REQUEST['ab__ia_once'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "N") {
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__intelligent_accessories/views/components/ab__ia_products_in_add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}?></div><div class="ty-product-notification__buttons clearfix"><?php echo $_smarty_tpl->getValue('product_buttons');?>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/responsive/templates/addons/ab__intelligent_accessories/overrides/views/products/components/notification.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/responsive/templates/addons/ab__intelligent_accessories/overrides/views/products/components/notification.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-product-notification__body cm-notification-max-height"><?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_notification_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getValue('product_info');
if ($_smarty_tpl->getValue('addons')['ab__intelligent_accessories']['show_ia_in_added_to_cart'] == 'Y' && (($tmp = $_REQUEST['ab__ia_once'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "N") {
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__intelligent_accessories/views/components/ab__ia_products_in_add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}?></div><div class="ty-product-notification__buttons clearfix"><?php echo $_smarty_tpl->getValue('product_buttons');?>
</div><?php }
}
}
