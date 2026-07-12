<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:03
  from 'tygh:addons/vendor_communication/hooks/products/view_main_info.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ef0f1f89_95215846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20607f359abb36322218c04c46f2b02a9fc9ccca' => 
    array (
      0 => 'addons/vendor_communication/hooks/products/view_main_info.post.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl' => 2,
    'tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl' => 2,
  ),
))) {
function content_69ada1ef0f1f89_95215846 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/vendor_communication/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('show_product_company_data', (($tmp = $_smarty_tpl->getValue('show_product_company_data') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('addons')['vendor_communication']['show_on_product'] == "Y" && $_smarty_tpl->getValue('show_product_company_data')) {?>
    <div class="hidden" id="product_vendor_communication_thread_form<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null),'object_id'=>$_smarty_tpl->getValue('product')['product_id'],'company_id'=>$_smarty_tpl->getValue('product')['company_id'],'vendor_name'=>$_smarty_tpl->getValue('product')['company_name']), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
    <!--product_vendor_communication_thread_form<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/products/view_main_info.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/vendor_communication/hooks/products/view_main_info.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('show_product_company_data', (($tmp = $_smarty_tpl->getValue('show_product_company_data') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('addons')['vendor_communication']['show_on_product'] == "Y" && $_smarty_tpl->getValue('show_product_company_data')) {?>
    <div class="hidden" id="product_vendor_communication_thread_form<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->getValue('auth')['user_id']) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null),'object_id'=>$_smarty_tpl->getValue('product')['product_id'],'company_id'=>$_smarty_tpl->getValue('product')['company_id'],'vendor_name'=>$_smarty_tpl->getValue('product')['company_name']), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
    <!--product_vendor_communication_thread_form<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
}
