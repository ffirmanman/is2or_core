<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:00
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/views/companies/components/product_company_data.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ecd35218_08299897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '647b658376c6e444c4f9aa5682c368fd501c4376' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/views/companies/components/product_company_data.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69ada1ecd35218_08299897 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/views/companies/components';
\Tygh\Languages\Helper::preloadLangVars(array('vendor','verified_by_paypal','vendor','verified_by_paypal'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && ($_smarty_tpl->getValue('company_name') || $_smarty_tpl->getValue('company_id')) && $_smarty_tpl->getValue('settings')['Vendors']['display_vendor'] == "Y" && !$_smarty_tpl->getValue('details_page')) {?>
    <div class="ty-control-group paypal-adaptive-vendor-name<?php if (!$_smarty_tpl->getValue('capture_options_vs_qty')) {?> product-list-field<?php }
if (!( !true || empty($_smarty_tpl->getValue('product')['paypal_verification']['verified'])) && $_smarty_tpl->getValue('product')['paypal_verification']['verified'] == "verified") {?> paypal-adaptive-vendor-name-text<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company_id')))), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('company_name')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_name')), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_company_name')($_smarty_tpl->getValue('company_id'))), ENT_QUOTES, 'UTF-8');
}?></a></span>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:product_company_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if (!( !true || empty($_smarty_tpl->getValue('product')['paypal_verification']['main_pair']))) {?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('product')['paypal_verification']['width'],'image_height'=>$_smarty_tpl->getValue('product')['paypal_verification']['height'],'obj_id'=>$_smarty_tpl->getValue('object_id'),'images'=>$_smarty_tpl->getValue('product')['paypal_verification']['main_pair']), (int) 0, $_smarty_current_dir);
?>
            <?php } elseif (!( !true || empty($_smarty_tpl->getValue('product')['paypal_verification']['verified'])) && $_smarty_tpl->getValue('product')['paypal_verification']['verified'] == "verified") {?>
                <span class="ty-control-group__item"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("verified_by_paypal", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:product_company_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/views/companies/components/product_company_data.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/views/companies/components/product_company_data.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && ($_smarty_tpl->getValue('company_name') || $_smarty_tpl->getValue('company_id')) && $_smarty_tpl->getValue('settings')['Vendors']['display_vendor'] == "Y" && !$_smarty_tpl->getValue('details_page')) {?>
    <div class="ty-control-group paypal-adaptive-vendor-name<?php if (!$_smarty_tpl->getValue('capture_options_vs_qty')) {?> product-list-field<?php }
if (!( !true || empty($_smarty_tpl->getValue('product')['paypal_verification']['verified'])) && $_smarty_tpl->getValue('product')['paypal_verification']['verified'] == "verified") {?> paypal-adaptive-vendor-name-text<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.products?company_id=".((string)$_smarty_tpl->getValue('company_id')))), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('company_name')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_name')), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_company_name')($_smarty_tpl->getValue('company_id'))), ENT_QUOTES, 'UTF-8');
}?></a></span>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:product_company_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if (!( !true || empty($_smarty_tpl->getValue('product')['paypal_verification']['main_pair']))) {?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('product')['paypal_verification']['width'],'image_height'=>$_smarty_tpl->getValue('product')['paypal_verification']['height'],'obj_id'=>$_smarty_tpl->getValue('object_id'),'images'=>$_smarty_tpl->getValue('product')['paypal_verification']['main_pair']), (int) 0, $_smarty_current_dir);
?>
            <?php } elseif (!( !true || empty($_smarty_tpl->getValue('product')['paypal_verification']['verified'])) && $_smarty_tpl->getValue('product')['paypal_verification']['verified'] == "verified") {?>
                <span class="ty-control-group__item"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("verified_by_paypal", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"companies:product_company_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
<?php }
}
}
}
