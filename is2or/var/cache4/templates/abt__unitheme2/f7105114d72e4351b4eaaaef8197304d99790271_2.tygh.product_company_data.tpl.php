<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:15
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/views/companies/components/product_company_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571baf6277_38018668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7105114d72e4351b4eaaaef8197304d99790271' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/views/companies/components/product_company_data.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_6834571baf6277_38018668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor','verified_by_paypal','vendor','verified_by_paypal'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['company_name']->value || $_smarty_tpl->tpl_vars['company_id']->value) && $_smarty_tpl->tpl_vars['settings']->value['Vendors']['display_vendor'] == "Y" && !$_smarty_tpl->tpl_vars['details_page']->value) {?>
    <div class="ty-control-group paypal-adaptive-vendor-name<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }
if (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified']) && $_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified'] == "verified") {?> paypal-adaptive-vendor-name-text<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("vendor");?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), ENT_QUOTES, 'UTF-8');
}?></a></span>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:product_company_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:product_company_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['main_pair'])) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['width'],'image_height'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['height'],'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['main_pair']), 0, false);
?>
            <?php } elseif (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified']) && $_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified'] == "verified") {?>
                <span class="ty-control-group__item"><?php echo $_smarty_tpl->__("verified_by_paypal");?>
</span>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:product_company_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/views/companies/components/product_company_data.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/views/companies/components/product_company_data.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['company_name']->value || $_smarty_tpl->tpl_vars['company_id']->value) && $_smarty_tpl->tpl_vars['settings']->value['Vendors']['display_vendor'] == "Y" && !$_smarty_tpl->tpl_vars['details_page']->value) {?>
    <div class="ty-control-group paypal-adaptive-vendor-name<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }
if (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified']) && $_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified'] == "verified") {?> paypal-adaptive-vendor-name-text<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("vendor");?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars((string) fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), ENT_QUOTES, 'UTF-8');
}?></a></span>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:product_company_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:product_company_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['main_pair'])) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['width'],'image_height'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['height'],'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['main_pair']), 0, true);
?>
            <?php } elseif (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified']) && $_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified'] == "verified") {?>
                <span class="ty-control-group__item"><?php echo $_smarty_tpl->__("verified_by_paypal");?>
</span>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:product_company_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php }
}
}
}
