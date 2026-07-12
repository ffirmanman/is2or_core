<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:58:43
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__intelligent_accessories/overrides/views/products/components/notification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345773537228_20312203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a54d6366213c6aae44562598effad8b953d4023' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__intelligent_accessories/overrides/views/products/components/notification.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/product_notification_items.tpl' => 2,
    'tygh:addons/ab__intelligent_accessories/views/components/ab__ia_products_in_add_to_cart.tpl' => 2,
  ),
),false)) {
function content_68345773537228_20312203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-product-notification__body cm-notification-max-height"><?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_notification_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo $_smarty_tpl->tpl_vars['product_info']->value;
if ($_smarty_tpl->tpl_vars['addons']->value['ab__intelligent_accessories']['show_ia_in_added_to_cart'] == 'Y' && (($tmp = $_REQUEST['ab__ia_once'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "N") {
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__intelligent_accessories/views/components/ab__ia_products_in_add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?></div><div class="ty-product-notification__buttons clearfix"><?php echo $_smarty_tpl->tpl_vars['product_buttons']->value;?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__intelligent_accessories/overrides/views/products/components/notification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__intelligent_accessories/overrides/views/products/components/notification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-product-notification__body cm-notification-max-height"><?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_notification_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo $_smarty_tpl->tpl_vars['product_info']->value;
if ($_smarty_tpl->tpl_vars['addons']->value['ab__intelligent_accessories']['show_ia_in_added_to_cart'] == 'Y' && (($tmp = $_REQUEST['ab__ia_once'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "N") {
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__intelligent_accessories/views/components/ab__ia_products_in_add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?></div><div class="ty-product-notification__buttons clearfix"><?php echo $_smarty_tpl->tpl_vars['product_buttons']->value;?>
</div><?php }
}
}
