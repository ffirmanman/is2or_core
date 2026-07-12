<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/vendor_communication/hooks/products/buttons_block.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa9664c27_13964610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd2cd02e08f065821daed30cc85c21dc0c2a4cef' => 
    array (
      0 => 'addons/vendor_communication/hooks/products/buttons_block.post.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl' => 2,
  ),
))) {
function content_69afafa9664c27_13964610 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/vendor_communication/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE") && $_smarty_tpl->getValue('addons')['vendor_communication']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && $_smarty_tpl->getValue('addons')['vendor_communication']['show_on_product'] == "Y" && $_smarty_tpl->getValue('details_page')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->getValue('product')['product_id'],'show_form'=>false), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/products/buttons_block.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/vendor_communication/hooks/products/buttons_block.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE") && $_smarty_tpl->getValue('addons')['vendor_communication']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && $_smarty_tpl->getValue('addons')['vendor_communication']['show_on_product'] == "Y" && $_smarty_tpl->getValue('details_page')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->getValue('product')['product_id'],'show_form'=>false), (int) 0, $_smarty_current_dir);
}
}
}
}
