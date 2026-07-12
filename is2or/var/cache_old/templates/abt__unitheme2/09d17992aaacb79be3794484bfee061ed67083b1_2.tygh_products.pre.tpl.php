<?php
/* Smarty version 5.4.3, created on 2026-03-08 21:52:27
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/addons/vendor_communication/hooks/companies/products.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adc56b84cab9_47751163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09d17992aaacb79be3794484bfee061ed67083b1' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/addons/vendor_communication/hooks/companies/products.pre.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl' => 2,
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl' => 2,
  ),
))) {
function content_69adc56b84cab9_47751163 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/addons/vendor_communication/hooks/companies';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['vendor_communication']['show_on_vendor'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->getValue('company_id'),'show_form'=>true), (int) 0, $_smarty_current_dir);
?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->getValue('company_id'),'company_id'=>$_smarty_tpl->getValue('company_id'),'vendor_name'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_company_name')($_smarty_tpl->getValue('company_id'))), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/addons/vendor_communication/hooks/companies/products.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/addons/vendor_communication/hooks/companies/products.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['vendor_communication']['show_on_vendor'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->getValue('company_id'),'show_form'=>true), (int) 0, $_smarty_current_dir);
?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->getValue('company_id'),'company_id'=>$_smarty_tpl->getValue('company_id'),'vendor_name'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_company_name')($_smarty_tpl->getValue('company_id'))), (int) 0, $_smarty_current_dir);
}
}
}
}
