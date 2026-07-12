<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:39
  from 'tygh:common/product_data.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49ff31ca94_87967097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3772a938db422b1b3bfa8bea77d31924d57264c0' => 
    array (
      0 => 'common/product_data.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
    'tygh:buttons/add_to_cart.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
    'tygh:buttons/add_to_compare_list.tpl' => 2,
    'tygh:views/products/components/product_features_short_list.tpl' => 2,
    'tygh:views/products/components/product_label.tpl' => 4,
    'tygh:common/price.tpl' => 16,
    'tygh:common/coming_soon_notice.tpl' => 2,
    'tygh:views/products/components/product_options.tpl' => 2,
    'tygh:views/companies/components/product_company_data.tpl' => 2,
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69fb49ff31ca94_87967097 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('text_out_of_stock','sku','copy','add_to_cart','add_to_cart','add_to_cart','add_to_cart','free_shipping','save_discount','save_discount','save_discount','enter_your_price','enter_your_price','contact_us_for_price','sign_in_to_view_price','inc_tax','including_tax','you_save','you_save','availability','items','on_backorder','in_stock','availability','availability','in_stock','on_backorder','availability','quantity','text_cart_min_qty','text_edp_product','text_out_of_stock','sku','copy','add_to_cart','add_to_cart','add_to_cart','add_to_cart','free_shipping','save_discount','save_discount','save_discount','enter_your_price','enter_your_price','contact_us_for_price','sign_in_to_view_price','inc_tax','including_tax','you_save','you_save','availability','items','on_backorder','in_stock','availability','availability','in_stock','on_backorder','availability','quantity','text_cart_min_qty','text_edp_product'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_data_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('out_of_stock_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_out_of_stock", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
$_smarty_tpl->assign('allow_negative_amount', (($tmp = $_smarty_tpl->getValue('allow_negative_amount') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['General']['allow_negative_amount'] ?? null : $tmp), false, NULL);?>

<?php if (($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) || $_smarty_tpl->getValue('product')['zero_price_action'] == "P" || $_smarty_tpl->getValue('product')['zero_price_action'] == "A" || (!$_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) && $_smarty_tpl->getValue('product')['zero_price_action'] == "R")) && !($_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart" && !$_smarty_tpl->getValue('auth')['user_id'])) {?>
    <?php $_smarty_tpl->assign('show_price_values', true, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('show_price_values', false, false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "show_price_values", null, null);
echo $_smarty_tpl->getValue('show_price_values');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->assign('cart_button_exists', false, false, NULL);
$_smarty_tpl->assign('show_qty', (($tmp = $_smarty_tpl->getValue('show_qty') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('obj_id', (($tmp = $_smarty_tpl->getValue('obj_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product')['product_id'] ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('product_amount', (($tmp = $_smarty_tpl->getValue('product')['inventory_amount'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product')['amount'] ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_sku_label', (($tmp = $_smarty_tpl->getValue('show_sku_label') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_amount_label', (($tmp = $_smarty_tpl->getValue('show_amount_label') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_out_of_stock_block', (($tmp = $_smarty_tpl->getValue('show_out_of_stock_block') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_add_to_cart_block', (($tmp = $_smarty_tpl->getValue('show_add_to_cart_block') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml'] && !$_smarty_tpl->getValue('no_ajax')) {?>
    <?php $_smarty_tpl->assign('is_ajax', true, false, NULL);
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "form_open_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
if (!$_smarty_tpl->getValue('hide_form')) {?>
<form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" name="product_form_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" class="cm-disable-empty-files <?php if ($_smarty_tpl->getValue('is_ajax')) {?> cm-ajax cm-ajax-full-render cm-ajax-status-middle<?php }?> <?php if ($_smarty_tpl->getValue('form_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('form_meta')), ENT_QUOTES, 'UTF-8');
}?>">
<input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__ut2_wishlist_count" />
<?php if (!$_smarty_tpl->getValue('stay_in_cart')) {?>
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('redirect_url') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('config')['current_url'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<input type="hidden" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "name_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if ($_smarty_tpl->getValue('show_name')) {?>
        <?php if ($_smarty_tpl->getValue('hide_links')) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) (preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('product')['product'])), ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:product:".((string)$_smarty_tpl->getValue('product')['product_id']),'phrase'=>$_smarty_tpl->getValue('product')['product']), $_smarty_tpl);?>
><?php }
if ($_smarty_tpl->getValue('show_labels_in_title')) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:dotd_product_label"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:dotd_product_label"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>
        <?php if ($_smarty_tpl->getValue('show_brand_name') && $_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'] > 0) {?>
            <?php $_smarty_tpl->assign('b_feature', $_smarty_tpl->getValue('product')['abt__ut2_features'][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);?>
            <?php if ($_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['variant']) {?><span class="brand-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['variant']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
        <?php }?>
        <?php echo $_smarty_tpl->getValue('product')['product'];
if ($_smarty_tpl->getValue('hide_links')) {?></strong><?php } else { ?></a><?php }?>
    <?php } elseif ($_smarty_tpl->getValue('show_trunc_name')) {?>
        <?php if ($_smarty_tpl->getValue('hide_links')) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) (preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('product')['product'])), ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:product:".((string)$_smarty_tpl->getValue('product')['product_id']),'phrase'=>$_smarty_tpl->getValue('product')['product']), $_smarty_tpl);?>
><?php }
if ($_smarty_tpl->getValue('show_labels_in_title')) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:dotd_product_label"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:dotd_product_label"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>
        <?php if ($_smarty_tpl->getValue('show_brand_name') && $_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'] > 0) {?>
            <?php $_smarty_tpl->assign('b_feature', $_smarty_tpl->getValue('product')['abt__ut2_features'][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);?>
            <?php if ($_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['variant']) {?><span class="brand-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['variant']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
        <?php }?>
        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('product')['product'],180,"...",true);?>
</span><?php if ($_smarty_tpl->getValue('hide_links')) {?></strong><?php } else { ?></a><?php }?>
    <?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "sku_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_sku')) {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:abt__sku"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <div class="ty-control-group ty-sku-item cm-hidden-wrapper<?php if (!$_smarty_tpl->getValue('product')['product_code']) {?> hidden<?php }?>" id="sku_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_sku]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_sku')), ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->getValue('show_sku_label')) {?>
                <label class="ty-control-group__label" id="sku_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sku", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
            <?php }?>
            <div class="ty-control-group__item cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
 ut2_copy" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("copy", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" id="product_code_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                <i class="ut2-icon-copy"></i>
                <div class="ut2--sku-text"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_code']), ENT_QUOTES, 'UTF-8');?>
</div>
                <!--product_code_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
-->
            </div>
        </div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:abt__sku"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "sku_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "rating_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:data_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:data_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
if ($_smarty_tpl->getValue('show_add_to_cart')) {?>
<div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('add_to_cart_class')), ENT_QUOTES, 'UTF-8');?>
" id="add_to_cart_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="appearance[show_add_to_cart]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_add_to_cart')), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="appearance[show_list_buttons]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_list_buttons')), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="appearance[but_role]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_role')), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="appearance[quick_view]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('quick_view')), ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "buttons_product", null, null);
if ($_REQUEST['redirect_url']) {
$_smarty_tpl->assign('current_url', $_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_REQUEST['redirect_url']), false, NULL);
} else {
$_smarty_tpl->assign('current_url', $_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url']), false, NULL);
}
if ($_smarty_tpl->getValue('details_page')) {?><div><?php }
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['allow_variations_selection'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['has_options'] && !$_smarty_tpl->getValue('show_product_options') && !$_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('force_show_add_to_cart_button') != "Y") {
$_smarty_tpl->assign('preselected_options', $_smarty_tpl->getValue('product')['combination'], false, NULL);
if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?><span class="ty-btn ut2-btn__options ty-btn__primary ty-btn__add-to-cart cm-ab-load-select-variation-content" data-ca-product-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('preselected_options')) {?> data-ca-combination="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('preselected_options')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><span class="ty-icon ut2-icon-use_icon_cart"></span><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</bdi></span><?php } else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('href', "products.ut2_select_variation?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&prev_url=".((string)$_smarty_tpl->getValue('current_url')), false, NULL);
if ($_smarty_tpl->getValue('preselected_options')) {
$_smarty_tpl->assign('href', ((string)$_smarty_tpl->getValue('href'))."&combination=".((string)$_smarty_tpl->getValue('preselected_options')), false, NULL);
}
$_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>$_smarty_tpl->getValue('href'),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'id'=>"ut2_select_options_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_icon'=>"ut2-icon-use_icon_cart",'link_icon_first'=>true,'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_meta'=>"ty-btn ut2-btn__options ty-btn__primary ty-btn__add-to-cart cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->getValue('product')['product_id'],"data-ca-dialog-purpose"=>"ut2_select_options")), (int) 0, $_smarty_current_dir);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->assign('cart_button_exists', true, false, NULL);
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart_but_id"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('_but_id', "button_cart_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart_but_id"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('extra_button')) {
echo $_smarty_tpl->getValue('extra_button');?>
&nbsp;<?php }
$_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->getValue('_but_id'),'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->getValue('obj_id'))."]",'but_role'=>$_smarty_tpl->getValue('but_role'),'block_width'=>$_smarty_tpl->getValue('block_width'),'obj_id'=>$_smarty_tpl->getValue('obj_id'),'product'=>$_smarty_tpl->getValue('product'),'but_meta'=>$_smarty_tpl->getValue('add_to_cart_meta')), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('cart_button_exists', true, false, NULL);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('details_page')) {?></div><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:buttons_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('show_add_to_cart_block') && ($_smarty_tpl->getValue('product')['zero_price_action'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductZeroPriceActions::NOT_ALLOW_ADD_TO_CART") || $_smarty_tpl->getValue('product')['price'] != 0) && ($_smarty_tpl->getValue('settings')['General']['inventory_tracking'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") || $_smarty_tpl->getValue('allow_negative_amount') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || ($_smarty_tpl->getValue('product_amount') > 0 && $_smarty_tpl->getValue('product_amount') >= $_smarty_tpl->getValue('product')['min_qty']) || $_smarty_tpl->getValue('product')['tracking'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductTracking::DO_NOT_TRACK") || $_smarty_tpl->getValue('product')['is_edp'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('product')['out_of_stock_actions'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE")) || ($_smarty_tpl->getValue('product')['has_options'] && !$_smarty_tpl->getValue('show_product_options'))) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'buttons_product')) != '&nbsp;') {
if ($_smarty_tpl->getValue('product')['avail_since'] <= (defined('TIME') ? constant('TIME') : null) || ($_smarty_tpl->getValue('product')['avail_since'] > (defined('TIME') ? constant('TIME') : null) && $_smarty_tpl->getValue('product')['out_of_stock_actions'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE"))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'buttons_product');
}
}
} elseif ($_smarty_tpl->getValue('show_out_of_stock_block') && $_smarty_tpl->getValue('settings')['General']['inventory_tracking'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && $_smarty_tpl->getValue('allow_negative_amount') !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && (($_smarty_tpl->getValue('product_amount') <= 0 || $_smarty_tpl->getValue('product_amount') < $_smarty_tpl->getValue('product')['min_qty']) && $_smarty_tpl->getValue('product')['tracking'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductTracking::DO_NOT_TRACK")) && $_smarty_tpl->getValue('product')['is_edp'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:out_of_stock_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('show_qty', false, false, NULL);
if (!$_smarty_tpl->getValue('details_page')) {
if ((!$_smarty_tpl->getValue('product')['hide_stock_info'] && !(($_smarty_tpl->getValue('product_amount') <= 0 || $_smarty_tpl->getValue('product_amount') < $_smarty_tpl->getValue('product')['min_qty']) && ($_smarty_tpl->getValue('product')['avail_since'] > (defined('TIME') ? constant('TIME') : null))))) {?><button disabled class="ty-btn ty-btn__tertiary"><span><i class="ut2-icon-use_icon_cart"></i><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('out_of_stock_text')), ENT_QUOTES, 'UTF-8');?>
</bdi></span></button><?php }
} elseif (($_smarty_tpl->getValue('product')['out_of_stock_actions'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::SUBSCRIBE"))) {?><div id="subscribe_form_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><!--subscribe_form_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div><?php echo '<script'; ?>
>(function(_, $) {$.ceAjax('request', fn_url('products.subscription_form?product_id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
&obj_id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');
echo ($_smarty_tpl->getValue('obj_prefix')) ? "&obj_prefix=".((string)$_smarty_tpl->getValue('obj_prefix')) : '';?>
'), {hidden: true,result_ids: 'subscribe_form_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
'});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"track_product_in_stock"), (int) 0, $_smarty_current_dir);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:out_of_stock_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
if ($_smarty_tpl->getValue('show_list_buttons')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_buy_now_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
$_smarty_tpl->assign('compare_product_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:buy_now"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->getValue('compare_product_id'),'but_id'=>"button_compare_".((string)$_smarty_tpl->getValue('obj_id'))), (int) 0, $_smarty_current_dir);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:buy_now"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->assign('capture_buy_now', "product_buy_now_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_buy_now')))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_buy_now'));
}
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:buttons_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
<!--add_to_cart_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'cart_button_exists')) {?>
    <?php $_smarty_tpl->assign('cart_button_exists', true, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_features_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_features"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if ($_smarty_tpl->getValue('show_features') && $_smarty_tpl->getValue('product')['abt__ut2_features']) {?>
        <?php $_smarty_tpl->assign('max_features', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['max_features'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp), false, NULL);?>
        <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="product_data_features_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_features]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_features')), ENT_QUOTES, 'UTF-8');?>
" />
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>$_smarty_tpl->getSmarty()->getModifierCallback('array_slice')($_smarty_tpl->getValue('product')['abt__ut2_features'],0,$_smarty_tpl->getValue('max_features')),'no_container'=>true), (int) 0, $_smarty_current_dir);
?>
        <!--product_data_features_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_features"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "product_features_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "prod_descr_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_descr')) {?>
        <?php if ($_smarty_tpl->getValue('product')['short_description']) {?>
            <div class="ut2-product-description" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:short_description:".((string)$_smarty_tpl->getValue('product')['product_id'])), $_smarty_tpl);?>
><?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('product')['short_description']);?>
</div>
        <?php } else { ?>
            <div class="ut2-product-description" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:full_description:".((string)$_smarty_tpl->getValue('product')['product_id']),'phrase'=>$_smarty_tpl->getValue('product')['full_description']), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('product')['full_description']),300);?>
</div>
        <?php }?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "prod_descr_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>


<?php $_smarty_tpl->assign('product_labels_position', (($tmp = $_smarty_tpl->getValue('product_labels_position') ?? null)===null||$tmp==='' ? "top-right" ?? null : $tmp), false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_product_labels')) {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "capture_product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_labels"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('show_shipping_label') && $_smarty_tpl->getValue('product')['free_shipping'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_meta'=>"ty-product-labels__item--shipping",'label_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("free_shipping", [], $_smarty_tpl->getSmarty()->getLanguage()),'label_mini'=>$_smarty_tpl->getValue('product_labels_mini'),'label_static'=>$_smarty_tpl->getValue('product_labels_static'),'label_rounded'=>$_smarty_tpl->getValue('product_labels_rounded')), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('show_discount_label') && ($_smarty_tpl->getValue('product')['discount_prc'] || $_smarty_tpl->getValue('product')['list_discount_prc']) && $_smarty_tpl->getValue('show_price_values')) {?>
                <?php if ($_smarty_tpl->getValue('product')['discount']) {?>
                    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("save_discount", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->assign('label_text', $_prefixVariable8." <bdi>".((string)$_smarty_tpl->getValue('product')['discount_prc'])."%</bdi>", false, NULL);?>
                <?php } else { ?>
                    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("save_discount", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable9=ob_get_clean();
$_smarty_tpl->assign('label_text', $_prefixVariable9." <bdi>".((string)$_smarty_tpl->getValue('product')['list_discount_prc'])."%</bdi>", false, NULL);?>
                <?php }?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_meta'=>"ty-product-labels__item--discount",'label_text'=>$_smarty_tpl->getValue('label_text'),'label_mini'=>$_smarty_tpl->getValue('product_labels_mini'),'label_static'=>$_smarty_tpl->getValue('product_labels_static'),'label_rounded'=>$_smarty_tpl->getValue('product_labels_rounded')), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_labels"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php $_smarty_tpl->assign('capture_product_labels', "capture_product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_product_labels')))) {?>
            <div class="ty-product-labels ty-product-labels--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_labels_position')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('product_labels_mini')) {?>ty-product-labels--mini<?php }?> <?php if ($_smarty_tpl->getValue('product_labels_static')) {?>ty-product-labels--static<?php }?> cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="product_labels_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_product_labels'));?>

                <!--product_labels_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php }?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>


<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "discount_label_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_discount_label') && ($_smarty_tpl->getValue('product')['discount_prc'] || $_smarty_tpl->getValue('product')['list_discount_prc']) && $_smarty_tpl->getValue('show_price_values')) {?>
        <span class="ty-discount-label cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="discount_label_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <span class="ty-discount-label__item" id="line_prc_discount_value_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><span class="ty-discount-label__value" id="prc_discount_value_label_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><em><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("save_discount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</em> <?php if ($_smarty_tpl->getValue('product')['discount']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['discount_prc']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['list_discount_prc']), ENT_QUOTES, 'UTF-8');
}?>%</span></span>
            <!--discount_label_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "discount_label_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>


<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "old_price_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_price_values') && $_smarty_tpl->getValue('show_old_price')) {?>
        <span class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="old_price_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_old_price]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_old_price')), ENT_QUOTES, 'UTF-8');?>
" />
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:old_price"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('product')['discount']) {?>
                <?php if (!$_smarty_tpl->getValue('product')['included_tax']) {?>
                    <span class="ty-list-price" id="line_old_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><span class="ty-strike"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->getValue('product')['original_price'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product')['base_price'] ?? null : $tmp)-$_smarty_tpl->getValue('product')['tax_value'],'span_id'=>"old_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-list-price ty-nowrap"), (int) 0, $_smarty_current_dir);
?></span></span>
                <?php } else { ?>
                    <span class="ty-list-price" id="line_old_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><span class="ty-strike"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->getValue('product')['original_price'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product')['base_price'] ?? null : $tmp),'span_id'=>"old_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-list-price ty-nowrap"), (int) 0, $_smarty_current_dir);
?></span></span>
                <?php }?>
            <?php } elseif ($_smarty_tpl->getValue('product')['list_discount']) {?>
                <?php if (!$_smarty_tpl->getValue('product')['included_tax']) {?>
                    <span class="ty-list-price" id="line_list_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><span class="ty-strike"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['list_price']-$_smarty_tpl->getValue('product')['tax_value'],'span_id'=>"list_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-list-price ty-nowrap"), (int) 0, $_smarty_current_dir);
?></span></span>
                <?php } else { ?>
                    <span class="ty-list-price" id="line_list_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><span class="ty-strike"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['list_price'],'span_id'=>"list_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-list-price ty-nowrap"), (int) 0, $_smarty_current_dir);
?></span></span>
            <?php }?>
            <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:old_price"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <!--old_price_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>


<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "price_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <span class="<?php if ($_smarty_tpl->getValue('product')['zero_price_action'] !== "A") {?>cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');
}?> ty-price-update" id="price_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_price_values]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_price_values')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[show_price]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_price')), ENT_QUOTES, 'UTF-8');?>
" />
        <?php if ($_smarty_tpl->getValue('show_price_values')) {?>
            <?php if ($_smarty_tpl->getValue('show_price')) {?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:prices_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable10=ob_get_clean();
if ($_smarty_tpl->getValue('auth')['tax_exempt'] === $_prefixVariable10 || !$_smarty_tpl->getValue('product')['clean_price']) {?>
                    <?php $_smarty_tpl->assign('price', $_smarty_tpl->getValue('product')['price'], false, NULL);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->assign('price', $_smarty_tpl->getValue('product')['clean_price'], false, NULL);?>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) || $_smarty_tpl->getValue('product')['zero_price_action'] == "P" || ($_smarty_tpl->getValue('hide_add_to_cart_button') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['zero_price_action'] == "A")) {?>
                    <span class="ty-price<?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) && !$_smarty_tpl->getValue('product')['zero_price_action']) {?> hidden<?php }?>" id="line_discounted_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['price'],'span_id'=>"discounted_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-price-num",'live_editor_name'=>"product:price:".((string)$_smarty_tpl->getValue('product')['product_id']),'live_editor_phrase'=>$_smarty_tpl->getValue('product')['base_price']), (int) 0, $_smarty_current_dir);
?></span>
                <?php } elseif ($_smarty_tpl->getValue('product')['zero_price_action'] == "A" && $_smarty_tpl->getValue('show_add_to_cart')) {?>
                    <?php $_smarty_tpl->assign('base_currency', $_smarty_tpl->getValue('currencies')[(defined('CART_PRIMARY_CURRENCY') ? constant('CART_PRIMARY_CURRENCY') : null)], false, NULL);?>
                    <div class="ty-price-curency-input">
                        <input
                            type="text"
                            name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][price]"
                            class="ty-price-curency__input cm-numeric"
                            title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("enter_your_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
                            data-a-sign="<?php echo $_smarty_tpl->getValue('base_currency')['symbol'];?>
"
                            data-a-dec="<?php if ($_smarty_tpl->getValue('base_currency')['decimals_separator']) {
echo $_smarty_tpl->getValue('base_currency')['decimals_separator'];
} else { ?>.<?php }?>"
                            data-a-sep="<?php if ($_smarty_tpl->getValue('base_currency')['thousands_separator']) {
echo $_smarty_tpl->getValue('base_currency')['thousands_separator'];
} else { ?>,<?php }?>"
                            data-p-sign="<?php if ($_smarty_tpl->getValue('base_currency')['after'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>s<?php } else { ?>p<?php }?>"
                            data-m-dec="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('base_currency')['decimals']), ENT_QUOTES, 'UTF-8');?>
"
                            size="10"
                            value=""
                        />
                    <i class="ty-icon ty-icon-help-circle cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("enter_your_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"></i>
                    </div>
                    </span>

                <?php } elseif ($_smarty_tpl->getValue('product')['zero_price_action'] == "R") {?>
                    <span class="ty-no-price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("contact_us_for_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    <?php $_smarty_tpl->assign('show_qty', false, false, NULL);?>
                <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:prices_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart" && !$_smarty_tpl->getValue('auth')['user_id']) {?>
            <span class="ty-price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in_to_view_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
        <?php }?>
    <!--price_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></span>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>


<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_price_values') && $_smarty_tpl->getValue('show_clean_price') && $_smarty_tpl->getValue('settings')['Appearance']['show_prices_taxed_clean'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('auth')['tax_exempt'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['taxed_price']) {?>
        <span class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="clean_price_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_price_values]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_price_values')), ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="appearance[show_clean_price]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_clean_price')), ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->getValue('product')['clean_price'] != $_smarty_tpl->getValue('product')['taxed_price'] && $_smarty_tpl->getValue('product')['included_tax']) {?>
                <span class="ty-list-price" id="line_product_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">(<?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['taxed_price'],'span_id'=>"product_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-list-price ty-nowrap"), (int) 0, $_smarty_current_dir);
?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("inc_tax", [], $_smarty_tpl->getSmarty()->getLanguage());?>
)</span>
            <?php } elseif ($_smarty_tpl->getValue('product')['clean_price'] != $_smarty_tpl->getValue('product')['taxed_price'] && !$_smarty_tpl->getValue('product')['included_tax']) {?>
                <span class="ty-list-price ty-tax-include">(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("including_tax", [], $_smarty_tpl->getSmarty()->getLanguage());?>
)</span>
            <?php }?>
        <!--clean_price_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>


<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "list_discount_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_price_values') && $_smarty_tpl->getValue('show_list_discount')) {?>
        <span class="<?php if (!$_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short" || $_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?>ut2-sld-short<?php }?> cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="line_discount_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_price_values]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_price_values')), ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="appearance[show_list_discount]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_list_discount')), ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->getValue('product')['discount']) {?>
                <span class="ty-list-price ty-save-price" id="line_discount_value_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php if (!$_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "full" || $_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "full") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("you_save", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['discount'],'span_id'=>"discount_value_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-list-price ty-nowrap"), (int) 0, $_smarty_current_dir);
} else {
if ($_smarty_tpl->getValue('product')['discount']) {
if ($_smarty_tpl->getValue('product')['discount_prc'] > 0) {?>-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['discount_prc']), ENT_QUOTES, 'UTF-8');?>
%<?php }
} else {
if ($_smarty_tpl->getValue('product')['list_discount_prc'] > 0) {?>-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['list_discount_prc']), ENT_QUOTES, 'UTF-8');?>
%<?php }
}
}?></span>
            <?php } elseif ($_smarty_tpl->getValue('product')['list_discount']) {?>
                <span class="ty-list-price ty-save-price" id="line_discount_value_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php if (!$_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "full" || $_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "full") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("you_save", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['list_discount'],'span_id'=>"discount_value_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id'))), (int) 0, $_smarty_current_dir);
} else {
if ($_smarty_tpl->getValue('product')['discount']) {
if ($_smarty_tpl->getValue('product')['discount_prc'] > 0) {?>-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['discount_prc']), ENT_QUOTES, 'UTF-8');?>
%<?php }
} else {
if ($_smarty_tpl->getValue('product')['list_discount_prc'] > 0) {?>-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['list_discount_prc']), ENT_QUOTES, 'UTF-8');?>
%<?php }
}
}?></span>
            <?php }?>
        <!--line_discount_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "list_discount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_amount"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('show_product_amount') && $_smarty_tpl->getValue('product')['is_edp'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['General']['inventory_tracking'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>
    <?php $_smarty_tpl->assign('is_tracking_product', $_smarty_tpl->getValue('settings')['General']['default_tracking'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductTracking::DO_NOT_TRACK") && $_smarty_tpl->getValue('product')['tracking'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductTracking::DO_NOT_TRACK") || $_smarty_tpl->getValue('product')['tracking'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductTracking::DO_NOT_TRACK"), false, NULL);?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
 stock-wrap" id="product_amount_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_product_amount]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_product_amount')), ENT_QUOTES, 'UTF-8');?>
" />
        <?php if (!$_smarty_tpl->getValue('product')['hide_stock_info']) {?>
            <?php if ($_smarty_tpl->getValue('settings')['Appearance']['in_stock_field'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                <?php if ($_smarty_tpl->getValue('is_tracking_product')) {?>
                    <?php if (($_smarty_tpl->getValue('product_amount') > 0 && $_smarty_tpl->getValue('product_amount') >= $_smarty_tpl->getValue('product')['min_qty']) || $_smarty_tpl->getValue('details_page')) {?>
                        <?php if (($_smarty_tpl->getValue('product_amount') > 0 && $_smarty_tpl->getValue('product_amount') >= $_smarty_tpl->getValue('product')['min_qty'] || $_smarty_tpl->getValue('product')['out_of_stock_actions'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
                            <div class="product-list-field">
                                <span class="ty-qty-in-stock ty-control-group__item"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("availability", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</span>
                                <span id="qty_in_stock_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-qty-in-stock ty-control-group__item">
                                    <?php if ($_smarty_tpl->getValue('product_amount') > 0) {?>
                                    	<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_amount')), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("items", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    <?php } else { ?>
                                    	<span class="on_backorder"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("on_backorder", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                    <?php }?>
                                </span>
                            </div>
                        <?php } elseif ($_smarty_tpl->getValue('allow_negative_amount') !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                            <div class="ty-control-group product-list-field">
                                <?php if ($_smarty_tpl->getValue('show_amount_label')) {?>
                                    <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("in_stock", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                                <?php }?>
                                <span class="ty-qty-out-of-stock ty-control-group__item"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('out_of_stock_text')), ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        <?php }?>
                    <?php } else { ?>
                        <div class="ty-control-group product-list-field">
                            <?php if ($_smarty_tpl->getValue('show_amount_label')) {?>
                                <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("availability", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                            <?php }?>
                            <span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('out_of_stock_text')), ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                    <?php }?>
                <?php }?>
            <?php } else { ?>
                <?php if (($_smarty_tpl->getValue('product_amount') > 0 && $_smarty_tpl->getValue('product_amount') >= $_smarty_tpl->getValue('product')['min_qty'] || $_smarty_tpl->getValue('product')['tracking'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductTracking::DO_NOT_TRACK")) && $_smarty_tpl->getValue('is_tracking_product') && $_smarty_tpl->getValue('allow_negative_amount') !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('is_tracking_product') && ($_smarty_tpl->getValue('allow_negative_amount') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('product')['out_of_stock_actions'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
                    <div class="ty-control-group product-list-field">
                        <?php if ($_smarty_tpl->getValue('show_amount_label') && $_smarty_tpl->getValue('settings')['Appearance']['in_stock_field'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("availability", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                        <?php }?>
                        <span class="ty-qty-in-stock ty-control-group__item" id="in_stock_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->getValue('product_amount') > 0) {?>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("in_stock", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                            <?php } else { ?>
                                <?php if ($_smarty_tpl->getValue('details_page')) {?><span class="on_backorder"><?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("on_backorder", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                            <?php }?>
                        </span>
                    </div>
                <?php } elseif (($_smarty_tpl->getValue('product_amount') <= 0 || $_smarty_tpl->getValue('product_amount') < $_smarty_tpl->getValue('product')['min_qty']) && $_smarty_tpl->getValue('is_tracking_product') && $_smarty_tpl->getValue('allow_negative_amount') !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                    <div class="ty-control-group product-list-field">
                        <?php if ($_smarty_tpl->getValue('show_amount_label')) {?>
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("availability", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                        <?php }?>
                        <span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('out_of_stock_text')), ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                <?php }?>
            <?php }?>
        <?php }?>
    <!--product_amount_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
   
    <?php if (($_smarty_tpl->getValue('product')['avail_since'] > (defined('TIME') ? constant('TIME') : null)) && $_smarty_tpl->getValue('details_page')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/coming_soon_notice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('avail_date'=>$_smarty_tpl->getValue('product')['avail_since'],'add_to_cart'=>$_smarty_tpl->getValue('product')['out_of_stock_actions']), (int) 0, $_smarty_current_dir);
?>
    <?php }
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_amount"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_options_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_product_options')) {?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
 js-product-options-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="product_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_product_options]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_product_options')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[force_show_add_to_cart_button]" value="Y">
        <input type="hidden" name="appearance[ut2_select_variation]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ut2_select_variation')), ENT_QUOTES, 'UTF-8');?>
">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_option_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('disable_ids')) {?>
                <?php $_smarty_tpl->assign('_disable_ids', ((string)$_smarty_tpl->getValue('disable_ids')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('_disable_ids', '', false, NULL);?>
            <?php }?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->getValue('obj_id'),'product_options'=>$_smarty_tpl->getValue('product')['product_options'],'name'=>"product_data",'capture_options_vs_qty'=>$_smarty_tpl->getValue('capture_options_vs_qty'),'disable_ids'=>$_smarty_tpl->getValue('_disable_ids')), (int) 0, $_smarty_current_dir);
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_option_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <!--product_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "product_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "advanced_options_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_product_options')) {?>
        <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="advanced_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/companies/components/product_company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_name'=>$_smarty_tpl->getValue('product')['company_name'],'company_id'=>$_smarty_tpl->getValue('product')['company_id']), (int) 0, $_smarty_current_dir);
?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_advanced"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_advanced"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <!--advanced_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "advanced_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "qty_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:qty"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="qty_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_qty]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_qty')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[capture_options_vs_qty]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('capture_options_vs_qty')), ENT_QUOTES, 'UTF-8');?>
" />
        <?php if (!( !true || empty($_smarty_tpl->getValue('product')['selected_amount']))) {?>
            <?php $_smarty_tpl->assign('default_amount', $_smarty_tpl->getValue('product')['selected_amount'], false, NULL);?>
        <?php } elseif (!( !true || empty($_smarty_tpl->getValue('product')['min_qty']))) {?>
            <?php $_smarty_tpl->assign('default_amount', $_smarty_tpl->getValue('product')['min_qty'], false, NULL);?>
        <?php } elseif (!( !true || empty($_smarty_tpl->getValue('product')['qty_step']))) {?>
            <?php $_smarty_tpl->assign('default_amount', $_smarty_tpl->getValue('product')['qty_step'], false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('default_amount', "1", false, NULL);?>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('show_qty') && $_smarty_tpl->getValue('product')['is_edp'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('cart_button_exists') == true && ($_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] == "allow_shopping" || $_smarty_tpl->getValue('auth')['user_id']) && $_smarty_tpl->getValue('product')['avail_since'] <= (defined('TIME') ? constant('TIME') : null) || ($_smarty_tpl->getValue('product')['avail_since'] > (defined('TIME') ? constant('TIME') : null) && $_smarty_tpl->getValue('product')['out_of_stock_actions'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
            <div class="ty-qty clearfix<?php if ($_smarty_tpl->getValue('settings')['Appearance']['quantity_changer'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> changer<?php }?>" id="qty_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                <?php if (!$_smarty_tpl->getValue('hide_qty_label')) {?><label class="ty-control-group__label" for="qty_count_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->getValue('quantity_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("quantity", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
:</label><?php }?>
                <?php if ($_smarty_tpl->getValue('product')['qty_content']) {?>
                <select name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][amount]" id="qty_count_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->assign('selected_amount', false, false, NULL);?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['qty_content'], 'var', true);
$_smarty_tpl->getVariable('var')->iteration = 0;
$foreach54DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach54DoElse = false;
$_smarty_tpl->getVariable('var')->iteration++;
$_smarty_tpl->getVariable('var')->last = $_smarty_tpl->getVariable('var')->iteration === $_smarty_tpl->getVariable('var')->total;
$foreach54Backup = clone $_smarty_tpl->getVariable('var');
?>
                        <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('product')['selected_amount'] && ($_smarty_tpl->getValue('product')['selected_amount'] == $_smarty_tpl->getValue('var') || ($_smarty_tpl->getVariable('var')->last && !$_smarty_tpl->getValue('selected_amount')))) {
$_smarty_tpl->assign('selected_amount', true, false, NULL);?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')), ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
$_smarty_tpl->setVariable('var', $foreach54Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
                <?php } else { ?>
                <div class="ty-center ty-value-changer cm-value-changer">
                    <?php if ($_smarty_tpl->getValue('settings')['Appearance']['quantity_changer'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                        <a class="cm-increase ty-value-changer__increase">&#43;</a>
                    <?php }?>
                    <input <?php if ($_smarty_tpl->getValue('product')['qty_step'] > 1) {?>readonly="readonly"<?php }?> type="text" size="5" class="ty-value-changer__input cm-amount cm-value-decimal" id="qty_count_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('default_amount')), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('product')['qty_step'] > 1) {?> data-ca-step="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['qty_step']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-min-qty="<?php if ($_smarty_tpl->getValue('product')['min_qty'] > 1) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['min_qty']), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" />
                    <?php if ($_smarty_tpl->getValue('settings')['Appearance']['quantity_changer'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                        <a class="cm-decrease ty-value-changer__decrease">&minus;</a>
                    <?php }?>
                </div>
                <?php }?>
            </div>
        <?php } elseif (!$_smarty_tpl->getValue('bulk_add')) {?>
            <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('default_amount')), ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
        <!--qty_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:qty"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "min_qty_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:qty_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('min_qty') && $_smarty_tpl->getValue('product')['min_qty']) {?>
            <p class="ty-min-qty-description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_cart_min_qty", array("[product]"=>$_smarty_tpl->getValue('product')['product'],"[quantity]"=>$_smarty_tpl->getValue('product')['min_qty']), $_smarty_tpl->getSmarty()->getLanguage()) > 'nofilter';?>
.</p>
        <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:qty_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "min_qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_edp_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_edp') && $_smarty_tpl->getValue('product')['is_edp'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <p class="ty-edp-description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_edp_product", [], $_smarty_tpl->getSmarty()->getLanguage());?>
.</p>
        <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][is_edp]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "product_edp_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "form_close_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
if (!$_smarty_tpl->getValue('hide_form')) {?>
</form>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "form_close_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('images'), 'image', false, 'object_id');
$foreach55DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('object_id')->value => $_smarty_tpl->getVariable('image')->value) {
$foreach55DoElse = false;
$_smarty_tpl->assign('product_link', $_smarty_tpl->getValue('image')['link'], false, NULL);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_images_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['obj_id']), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->getValue('product_link')) {?>
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_link')), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['link']), ENT_QUOTES, 'UTF-8');?>
" name="image[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
][link]" />
        <?php }?>
        <input type="hidden" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['obj_id']), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['width']), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['height']), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['type']), ENT_QUOTES, 'UTF-8');?>
" name="image[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
][data]" />
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('image')['width'],'image_height'=>$_smarty_tpl->getValue('image')['height'],'obj_id'=>$_smarty_tpl->getValue('object_id'),'images'=>$_smarty_tpl->getValue('product')['main_pair']), (int) 0, $_smarty_current_dir);
?>
        <?php if ($_smarty_tpl->getValue('image')['link']) {?>
            </a>
        <?php }?>
    <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_images_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_data_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/product_data.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/product_data.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_data_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('out_of_stock_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_out_of_stock", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
$_smarty_tpl->assign('allow_negative_amount', (($tmp = $_smarty_tpl->getValue('allow_negative_amount') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['General']['allow_negative_amount'] ?? null : $tmp), false, NULL);?>

<?php if (($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) || $_smarty_tpl->getValue('product')['zero_price_action'] == "P" || $_smarty_tpl->getValue('product')['zero_price_action'] == "A" || (!$_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) && $_smarty_tpl->getValue('product')['zero_price_action'] == "R")) && !($_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart" && !$_smarty_tpl->getValue('auth')['user_id'])) {?>
    <?php $_smarty_tpl->assign('show_price_values', true, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('show_price_values', false, false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "show_price_values", null, null);
echo $_smarty_tpl->getValue('show_price_values');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->assign('cart_button_exists', false, false, NULL);
$_smarty_tpl->assign('show_qty', (($tmp = $_smarty_tpl->getValue('show_qty') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('obj_id', (($tmp = $_smarty_tpl->getValue('obj_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product')['product_id'] ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('product_amount', (($tmp = $_smarty_tpl->getValue('product')['inventory_amount'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product')['amount'] ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_sku_label', (($tmp = $_smarty_tpl->getValue('show_sku_label') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_amount_label', (($tmp = $_smarty_tpl->getValue('show_amount_label') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_out_of_stock_block', (($tmp = $_smarty_tpl->getValue('show_out_of_stock_block') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_add_to_cart_block', (($tmp = $_smarty_tpl->getValue('show_add_to_cart_block') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
if (!$_smarty_tpl->getValue('config')['tweaks']['disable_dhtml'] && !$_smarty_tpl->getValue('no_ajax')) {?>
    <?php $_smarty_tpl->assign('is_ajax', true, false, NULL);
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "form_open_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
if (!$_smarty_tpl->getValue('hide_form')) {?>
<form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" name="product_form_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" class="cm-disable-empty-files <?php if ($_smarty_tpl->getValue('is_ajax')) {?> cm-ajax cm-ajax-full-render cm-ajax-status-middle<?php }?> <?php if ($_smarty_tpl->getValue('form_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('form_meta')), ENT_QUOTES, 'UTF-8');
}?>">
<input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__ut2_wishlist_count" />
<?php if (!$_smarty_tpl->getValue('stay_in_cart')) {?>
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('redirect_url') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('config')['current_url'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<input type="hidden" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "name_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if ($_smarty_tpl->getValue('show_name')) {?>
        <?php if ($_smarty_tpl->getValue('hide_links')) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) (preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('product')['product'])), ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:product:".((string)$_smarty_tpl->getValue('product')['product_id']),'phrase'=>$_smarty_tpl->getValue('product')['product']), $_smarty_tpl);?>
><?php }
if ($_smarty_tpl->getValue('show_labels_in_title')) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:dotd_product_label"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:dotd_product_label"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>
        <?php if ($_smarty_tpl->getValue('show_brand_name') && $_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'] > 0) {?>
            <?php $_smarty_tpl->assign('b_feature', $_smarty_tpl->getValue('product')['abt__ut2_features'][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);?>
            <?php if ($_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['variant']) {?><span class="brand-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['variant']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
        <?php }?>
        <?php echo $_smarty_tpl->getValue('product')['product'];
if ($_smarty_tpl->getValue('hide_links')) {?></strong><?php } else { ?></a><?php }?>
    <?php } elseif ($_smarty_tpl->getValue('show_trunc_name')) {?>
        <?php if ($_smarty_tpl->getValue('hide_links')) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) (preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('product')['product'])), ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:product:".((string)$_smarty_tpl->getValue('product')['product_id']),'phrase'=>$_smarty_tpl->getValue('product')['product']), $_smarty_tpl);?>
><?php }
if ($_smarty_tpl->getValue('show_labels_in_title')) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:dotd_product_label"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:dotd_product_label"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}?>
        <?php if ($_smarty_tpl->getValue('show_brand_name') && $_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'] > 0) {?>
            <?php $_smarty_tpl->assign('b_feature', $_smarty_tpl->getValue('product')['abt__ut2_features'][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);?>
            <?php if ($_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['variant']) {?><span class="brand-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_feature')['variants'][$_smarty_tpl->getValue('b_feature')['variant_id']]['variant']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
        <?php }?>
        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('product')['product'],180,"...",true);?>
</span><?php if ($_smarty_tpl->getValue('hide_links')) {?></strong><?php } else { ?></a><?php }?>
    <?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "sku_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_sku')) {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:abt__sku"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <div class="ty-control-group ty-sku-item cm-hidden-wrapper<?php if (!$_smarty_tpl->getValue('product')['product_code']) {?> hidden<?php }?>" id="sku_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_sku]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_sku')), ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->getValue('show_sku_label')) {?>
                <label class="ty-control-group__label" id="sku_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sku", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
            <?php }?>
            <div class="ty-control-group__item cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
 ut2_copy" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("copy", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" id="product_code_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                <i class="ut2-icon-copy"></i>
                <div class="ut2--sku-text"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_code']), ENT_QUOTES, 'UTF-8');?>
</div>
                <!--product_code_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
-->
            </div>
        </div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:abt__sku"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "sku_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "rating_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:data_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:data_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
if ($_smarty_tpl->getValue('show_add_to_cart')) {?>
<div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('add_to_cart_class')), ENT_QUOTES, 'UTF-8');?>
" id="add_to_cart_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="appearance[show_add_to_cart]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_add_to_cart')), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="appearance[show_list_buttons]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_list_buttons')), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="appearance[but_role]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_role')), ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="appearance[quick_view]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('quick_view')), ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "buttons_product", null, null);
if ($_REQUEST['redirect_url']) {
$_smarty_tpl->assign('current_url', $_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_REQUEST['redirect_url']), false, NULL);
} else {
$_smarty_tpl->assign('current_url', $_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url']), false, NULL);
}
if ($_smarty_tpl->getValue('details_page')) {?><div><?php }
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['allow_variations_selection'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['has_options'] && !$_smarty_tpl->getValue('show_product_options') && !$_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('force_show_add_to_cart_button') != "Y") {
$_smarty_tpl->assign('preselected_options', $_smarty_tpl->getValue('product')['combination'], false, NULL);
if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?><span class="ty-btn ut2-btn__options ty-btn__primary ty-btn__add-to-cart cm-ab-load-select-variation-content" data-ca-product-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('preselected_options')) {?> data-ca-combination="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('preselected_options')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><span class="ty-icon ut2-icon-use_icon_cart"></span><bdi><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</bdi></span><?php } else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('href', "products.ut2_select_variation?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&prev_url=".((string)$_smarty_tpl->getValue('current_url')), false, NULL);
if ($_smarty_tpl->getValue('preselected_options')) {
$_smarty_tpl->assign('href', ((string)$_smarty_tpl->getValue('href'))."&combination=".((string)$_smarty_tpl->getValue('preselected_options')), false, NULL);
}
$_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>$_smarty_tpl->getValue('href'),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'id'=>"ut2_select_options_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('product')['product_id']),'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_icon'=>"ut2-icon-use_icon_cart",'link_icon_first'=>true,'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'link_meta'=>"ty-btn ut2-btn__options ty-btn__primary ty-btn__add-to-cart cm-dialog-destroy-on-close",'content'=>'','dialog_additional_attrs'=>array("data-ca-product-id"=>$_smarty_tpl->getValue('product')['product_id'],"data-ca-dialog-purpose"=>"ut2_select_options")), (int) 0, $_smarty_current_dir);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->assign('cart_button_exists', true, false, NULL);
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart_but_id"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('_but_id', "button_cart_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart_but_id"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('extra_button')) {
echo $_smarty_tpl->getValue('extra_button');?>
&nbsp;<?php }
$_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->getValue('_but_id'),'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->getValue('obj_id'))."]",'but_role'=>$_smarty_tpl->getValue('but_role'),'block_width'=>$_smarty_tpl->getValue('block_width'),'obj_id'=>$_smarty_tpl->getValue('obj_id'),'product'=>$_smarty_tpl->getValue('product'),'but_meta'=>$_smarty_tpl->getValue('add_to_cart_meta')), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('cart_button_exists', true, false, NULL);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('details_page')) {?></div><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:buttons_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('show_add_to_cart_block') && ($_smarty_tpl->getValue('product')['zero_price_action'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductZeroPriceActions::NOT_ALLOW_ADD_TO_CART") || $_smarty_tpl->getValue('product')['price'] != 0) && ($_smarty_tpl->getValue('settings')['General']['inventory_tracking'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") || $_smarty_tpl->getValue('allow_negative_amount') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || ($_smarty_tpl->getValue('product_amount') > 0 && $_smarty_tpl->getValue('product_amount') >= $_smarty_tpl->getValue('product')['min_qty']) || $_smarty_tpl->getValue('product')['tracking'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductTracking::DO_NOT_TRACK") || $_smarty_tpl->getValue('product')['is_edp'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('product')['out_of_stock_actions'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE")) || ($_smarty_tpl->getValue('product')['has_options'] && !$_smarty_tpl->getValue('show_product_options'))) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'buttons_product')) != '&nbsp;') {
if ($_smarty_tpl->getValue('product')['avail_since'] <= (defined('TIME') ? constant('TIME') : null) || ($_smarty_tpl->getValue('product')['avail_since'] > (defined('TIME') ? constant('TIME') : null) && $_smarty_tpl->getValue('product')['out_of_stock_actions'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE"))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'buttons_product');
}
}
} elseif ($_smarty_tpl->getValue('show_out_of_stock_block') && $_smarty_tpl->getValue('settings')['General']['inventory_tracking'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && $_smarty_tpl->getValue('allow_negative_amount') !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && (($_smarty_tpl->getValue('product_amount') <= 0 || $_smarty_tpl->getValue('product_amount') < $_smarty_tpl->getValue('product')['min_qty']) && $_smarty_tpl->getValue('product')['tracking'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductTracking::DO_NOT_TRACK")) && $_smarty_tpl->getValue('product')['is_edp'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:out_of_stock_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('show_qty', false, false, NULL);
if (!$_smarty_tpl->getValue('details_page')) {
if ((!$_smarty_tpl->getValue('product')['hide_stock_info'] && !(($_smarty_tpl->getValue('product_amount') <= 0 || $_smarty_tpl->getValue('product_amount') < $_smarty_tpl->getValue('product')['min_qty']) && ($_smarty_tpl->getValue('product')['avail_since'] > (defined('TIME') ? constant('TIME') : null))))) {?><button disabled class="ty-btn ty-btn__tertiary"><span><i class="ut2-icon-use_icon_cart"></i><bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('out_of_stock_text')), ENT_QUOTES, 'UTF-8');?>
</bdi></span></button><?php }
} elseif (($_smarty_tpl->getValue('product')['out_of_stock_actions'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::SUBSCRIBE"))) {?><div id="subscribe_form_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><!--subscribe_form_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div><?php echo '<script'; ?>
>(function(_, $) {$.ceAjax('request', fn_url('products.subscription_form?product_id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
&obj_id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');
echo ($_smarty_tpl->getValue('obj_prefix')) ? "&obj_prefix=".((string)$_smarty_tpl->getValue('obj_prefix')) : '';?>
'), {hidden: true,result_ids: 'subscribe_form_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
'});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"track_product_in_stock"), (int) 0, $_smarty_current_dir);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:out_of_stock_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
if ($_smarty_tpl->getValue('show_list_buttons')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_buy_now_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
$_smarty_tpl->assign('compare_product_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:buy_now"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('settings')['General']['enable_compare_products'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->getValue('compare_product_id'),'but_id'=>"button_compare_".((string)$_smarty_tpl->getValue('obj_id'))), (int) 0, $_smarty_current_dir);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:buy_now"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->assign('capture_buy_now', "product_buy_now_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_buy_now')))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_buy_now'));
}
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:buttons_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
<!--add_to_cart_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'cart_button_exists')) {?>
    <?php $_smarty_tpl->assign('cart_button_exists', true, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_features_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_features"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if ($_smarty_tpl->getValue('show_features') && $_smarty_tpl->getValue('product')['abt__ut2_features']) {?>
        <?php $_smarty_tpl->assign('max_features', (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['max_features'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp), false, NULL);?>
        <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="product_data_features_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_features]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_features')), ENT_QUOTES, 'UTF-8');?>
" />
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>$_smarty_tpl->getSmarty()->getModifierCallback('array_slice')($_smarty_tpl->getValue('product')['abt__ut2_features'],0,$_smarty_tpl->getValue('max_features')),'no_container'=>true), (int) 0, $_smarty_current_dir);
?>
        <!--product_data_features_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_features"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "product_features_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "prod_descr_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_descr')) {?>
        <?php if ($_smarty_tpl->getValue('product')['short_description']) {?>
            <div class="ut2-product-description" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:short_description:".((string)$_smarty_tpl->getValue('product')['product_id'])), $_smarty_tpl);?>
><?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('product')['short_description']);?>
</div>
        <?php } else { ?>
            <div class="ut2-product-description" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:full_description:".((string)$_smarty_tpl->getValue('product')['product_id']),'phrase'=>$_smarty_tpl->getValue('product')['full_description']), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('product')['full_description']),300);?>
</div>
        <?php }?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "prod_descr_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>


<?php $_smarty_tpl->assign('product_labels_position', (($tmp = $_smarty_tpl->getValue('product_labels_position') ?? null)===null||$tmp==='' ? "top-right" ?? null : $tmp), false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_product_labels')) {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "capture_product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_labels"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('show_shipping_label') && $_smarty_tpl->getValue('product')['free_shipping'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_meta'=>"ty-product-labels__item--shipping",'label_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("free_shipping", [], $_smarty_tpl->getSmarty()->getLanguage()),'label_mini'=>$_smarty_tpl->getValue('product_labels_mini'),'label_static'=>$_smarty_tpl->getValue('product_labels_static'),'label_rounded'=>$_smarty_tpl->getValue('product_labels_rounded')), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('show_discount_label') && ($_smarty_tpl->getValue('product')['discount_prc'] || $_smarty_tpl->getValue('product')['list_discount_prc']) && $_smarty_tpl->getValue('show_price_values')) {?>
                <?php if ($_smarty_tpl->getValue('product')['discount']) {?>
                    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("save_discount", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable11=ob_get_clean();
$_smarty_tpl->assign('label_text', $_prefixVariable11." <bdi>".((string)$_smarty_tpl->getValue('product')['discount_prc'])."%</bdi>", false, NULL);?>
                <?php } else { ?>
                    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("save_discount", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable12=ob_get_clean();
$_smarty_tpl->assign('label_text', $_prefixVariable12." <bdi>".((string)$_smarty_tpl->getValue('product')['list_discount_prc'])."%</bdi>", false, NULL);?>
                <?php }?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_meta'=>"ty-product-labels__item--discount",'label_text'=>$_smarty_tpl->getValue('label_text'),'label_mini'=>$_smarty_tpl->getValue('product_labels_mini'),'label_static'=>$_smarty_tpl->getValue('product_labels_static'),'label_rounded'=>$_smarty_tpl->getValue('product_labels_rounded')), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_labels"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php $_smarty_tpl->assign('capture_product_labels', "capture_product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_product_labels')))) {?>
            <div class="ty-product-labels ty-product-labels--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_labels_position')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('product_labels_mini')) {?>ty-product-labels--mini<?php }?> <?php if ($_smarty_tpl->getValue('product_labels_static')) {?>ty-product-labels--static<?php }?> cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="product_labels_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_product_labels'));?>

                <!--product_labels_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php }?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>


<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "discount_label_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_discount_label') && ($_smarty_tpl->getValue('product')['discount_prc'] || $_smarty_tpl->getValue('product')['list_discount_prc']) && $_smarty_tpl->getValue('show_price_values')) {?>
        <span class="ty-discount-label cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="discount_label_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <span class="ty-discount-label__item" id="line_prc_discount_value_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><span class="ty-discount-label__value" id="prc_discount_value_label_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><em><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("save_discount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</em> <?php if ($_smarty_tpl->getValue('product')['discount']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['discount_prc']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['list_discount_prc']), ENT_QUOTES, 'UTF-8');
}?>%</span></span>
            <!--discount_label_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "discount_label_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>


<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "old_price_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_price_values') && $_smarty_tpl->getValue('show_old_price')) {?>
        <span class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="old_price_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_old_price]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_old_price')), ENT_QUOTES, 'UTF-8');?>
" />
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:old_price"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('product')['discount']) {?>
                <?php if (!$_smarty_tpl->getValue('product')['included_tax']) {?>
                    <span class="ty-list-price" id="line_old_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><span class="ty-strike"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->getValue('product')['original_price'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product')['base_price'] ?? null : $tmp)-$_smarty_tpl->getValue('product')['tax_value'],'span_id'=>"old_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-list-price ty-nowrap"), (int) 0, $_smarty_current_dir);
?></span></span>
                <?php } else { ?>
                    <span class="ty-list-price" id="line_old_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><span class="ty-strike"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->getValue('product')['original_price'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product')['base_price'] ?? null : $tmp),'span_id'=>"old_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-list-price ty-nowrap"), (int) 0, $_smarty_current_dir);
?></span></span>
                <?php }?>
            <?php } elseif ($_smarty_tpl->getValue('product')['list_discount']) {?>
                <?php if (!$_smarty_tpl->getValue('product')['included_tax']) {?>
                    <span class="ty-list-price" id="line_list_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><span class="ty-strike"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['list_price']-$_smarty_tpl->getValue('product')['tax_value'],'span_id'=>"list_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-list-price ty-nowrap"), (int) 0, $_smarty_current_dir);
?></span></span>
                <?php } else { ?>
                    <span class="ty-list-price" id="line_list_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><span class="ty-strike"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['list_price'],'span_id'=>"list_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-list-price ty-nowrap"), (int) 0, $_smarty_current_dir);
?></span></span>
            <?php }?>
            <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:old_price"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <!--old_price_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>


<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "price_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <span class="<?php if ($_smarty_tpl->getValue('product')['zero_price_action'] !== "A") {?>cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');
}?> ty-price-update" id="price_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_price_values]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_price_values')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[show_price]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_price')), ENT_QUOTES, 'UTF-8');?>
" />
        <?php if ($_smarty_tpl->getValue('show_price_values')) {?>
            <?php if ($_smarty_tpl->getValue('show_price')) {?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:prices_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")), ENT_QUOTES, 'UTF-8');
$_prefixVariable13=ob_get_clean();
if ($_smarty_tpl->getValue('auth')['tax_exempt'] === $_prefixVariable13 || !$_smarty_tpl->getValue('product')['clean_price']) {?>
                    <?php $_smarty_tpl->assign('price', $_smarty_tpl->getValue('product')['price'], false, NULL);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->assign('price', $_smarty_tpl->getValue('product')['clean_price'], false, NULL);?>
                <?php }?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) || $_smarty_tpl->getValue('product')['zero_price_action'] == "P" || ($_smarty_tpl->getValue('hide_add_to_cart_button') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['zero_price_action'] == "A")) {?>
                    <span class="ty-price<?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) && !$_smarty_tpl->getValue('product')['zero_price_action']) {?> hidden<?php }?>" id="line_discounted_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['price'],'span_id'=>"discounted_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-price-num",'live_editor_name'=>"product:price:".((string)$_smarty_tpl->getValue('product')['product_id']),'live_editor_phrase'=>$_smarty_tpl->getValue('product')['base_price']), (int) 0, $_smarty_current_dir);
?></span>
                <?php } elseif ($_smarty_tpl->getValue('product')['zero_price_action'] == "A" && $_smarty_tpl->getValue('show_add_to_cart')) {?>
                    <?php $_smarty_tpl->assign('base_currency', $_smarty_tpl->getValue('currencies')[(defined('CART_PRIMARY_CURRENCY') ? constant('CART_PRIMARY_CURRENCY') : null)], false, NULL);?>
                    <div class="ty-price-curency-input">
                        <input
                            type="text"
                            name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][price]"
                            class="ty-price-curency__input cm-numeric"
                            title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("enter_your_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
                            data-a-sign="<?php echo $_smarty_tpl->getValue('base_currency')['symbol'];?>
"
                            data-a-dec="<?php if ($_smarty_tpl->getValue('base_currency')['decimals_separator']) {
echo $_smarty_tpl->getValue('base_currency')['decimals_separator'];
} else { ?>.<?php }?>"
                            data-a-sep="<?php if ($_smarty_tpl->getValue('base_currency')['thousands_separator']) {
echo $_smarty_tpl->getValue('base_currency')['thousands_separator'];
} else { ?>,<?php }?>"
                            data-p-sign="<?php if ($_smarty_tpl->getValue('base_currency')['after'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>s<?php } else { ?>p<?php }?>"
                            data-m-dec="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('base_currency')['decimals']), ENT_QUOTES, 'UTF-8');?>
"
                            size="10"
                            value=""
                        />
                    <i class="ty-icon ty-icon-help-circle cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("enter_your_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"></i>
                    </div>
                    </span>

                <?php } elseif ($_smarty_tpl->getValue('product')['zero_price_action'] == "R") {?>
                    <span class="ty-no-price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("contact_us_for_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    <?php $_smarty_tpl->assign('show_qty', false, false, NULL);?>
                <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:prices_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart" && !$_smarty_tpl->getValue('auth')['user_id']) {?>
            <span class="ty-price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in_to_view_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
        <?php }?>
    <!--price_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></span>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>


<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_price_values') && $_smarty_tpl->getValue('show_clean_price') && $_smarty_tpl->getValue('settings')['Appearance']['show_prices_taxed_clean'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('auth')['tax_exempt'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['taxed_price']) {?>
        <span class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="clean_price_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_price_values]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_price_values')), ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="appearance[show_clean_price]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_clean_price')), ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->getValue('product')['clean_price'] != $_smarty_tpl->getValue('product')['taxed_price'] && $_smarty_tpl->getValue('product')['included_tax']) {?>
                <span class="ty-list-price" id="line_product_price_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">(<?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['taxed_price'],'span_id'=>"product_price_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-list-price ty-nowrap"), (int) 0, $_smarty_current_dir);
?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("inc_tax", [], $_smarty_tpl->getSmarty()->getLanguage());?>
)</span>
            <?php } elseif ($_smarty_tpl->getValue('product')['clean_price'] != $_smarty_tpl->getValue('product')['taxed_price'] && !$_smarty_tpl->getValue('product')['included_tax']) {?>
                <span class="ty-list-price ty-tax-include">(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("including_tax", [], $_smarty_tpl->getSmarty()->getLanguage());?>
)</span>
            <?php }?>
        <!--clean_price_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>


<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "list_discount_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_price_values') && $_smarty_tpl->getValue('show_list_discount')) {?>
        <span class="<?php if (!$_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short" || $_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "short") {?>ut2-sld-short<?php }?> cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="line_discount_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_price_values]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_price_values')), ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="appearance[show_list_discount]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_list_discount')), ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->getValue('product')['discount']) {?>
                <span class="ty-list-price ty-save-price" id="line_discount_value_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php if (!$_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "full" || $_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "full") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("you_save", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['discount'],'span_id'=>"discount_value_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-list-price ty-nowrap"), (int) 0, $_smarty_current_dir);
} else {
if ($_smarty_tpl->getValue('product')['discount']) {
if ($_smarty_tpl->getValue('product')['discount_prc'] > 0) {?>-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['discount_prc']), ENT_QUOTES, 'UTF-8');?>
%<?php }
} else {
if ($_smarty_tpl->getValue('product')['list_discount_prc'] > 0) {?>-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['list_discount_prc']), ENT_QUOTES, 'UTF-8');?>
%<?php }
}
}?></span>
            <?php } elseif ($_smarty_tpl->getValue('product')['list_discount']) {?>
                <span class="ty-list-price ty-save-price" id="line_discount_value_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php if (!$_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "full" || $_smarty_tpl->getValue('details_page') && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_you_save'][$_smarty_tpl->getValue('settings')['ab__device']] === "full") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("you_save", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['list_discount'],'span_id'=>"discount_value_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id'))), (int) 0, $_smarty_current_dir);
} else {
if ($_smarty_tpl->getValue('product')['discount']) {
if ($_smarty_tpl->getValue('product')['discount_prc'] > 0) {?>-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['discount_prc']), ENT_QUOTES, 'UTF-8');?>
%<?php }
} else {
if ($_smarty_tpl->getValue('product')['list_discount_prc'] > 0) {?>-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['list_discount_prc']), ENT_QUOTES, 'UTF-8');?>
%<?php }
}
}?></span>
            <?php }?>
        <!--line_discount_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "list_discount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_amount"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('show_product_amount') && $_smarty_tpl->getValue('product')['is_edp'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['General']['inventory_tracking'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>
    <?php $_smarty_tpl->assign('is_tracking_product', $_smarty_tpl->getValue('settings')['General']['default_tracking'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductTracking::DO_NOT_TRACK") && $_smarty_tpl->getValue('product')['tracking'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductTracking::DO_NOT_TRACK") || $_smarty_tpl->getValue('product')['tracking'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductTracking::DO_NOT_TRACK"), false, NULL);?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
 stock-wrap" id="product_amount_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_product_amount]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_product_amount')), ENT_QUOTES, 'UTF-8');?>
" />
        <?php if (!$_smarty_tpl->getValue('product')['hide_stock_info']) {?>
            <?php if ($_smarty_tpl->getValue('settings')['Appearance']['in_stock_field'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                <?php if ($_smarty_tpl->getValue('is_tracking_product')) {?>
                    <?php if (($_smarty_tpl->getValue('product_amount') > 0 && $_smarty_tpl->getValue('product_amount') >= $_smarty_tpl->getValue('product')['min_qty']) || $_smarty_tpl->getValue('details_page')) {?>
                        <?php if (($_smarty_tpl->getValue('product_amount') > 0 && $_smarty_tpl->getValue('product_amount') >= $_smarty_tpl->getValue('product')['min_qty'] || $_smarty_tpl->getValue('product')['out_of_stock_actions'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
                            <div class="product-list-field">
                                <span class="ty-qty-in-stock ty-control-group__item"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("availability", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</span>
                                <span id="qty_in_stock_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-qty-in-stock ty-control-group__item">
                                    <?php if ($_smarty_tpl->getValue('product_amount') > 0) {?>
                                    	<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_amount')), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("items", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    <?php } else { ?>
                                    	<span class="on_backorder"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("on_backorder", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                    <?php }?>
                                </span>
                            </div>
                        <?php } elseif ($_smarty_tpl->getValue('allow_negative_amount') !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                            <div class="ty-control-group product-list-field">
                                <?php if ($_smarty_tpl->getValue('show_amount_label')) {?>
                                    <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("in_stock", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                                <?php }?>
                                <span class="ty-qty-out-of-stock ty-control-group__item"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('out_of_stock_text')), ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        <?php }?>
                    <?php } else { ?>
                        <div class="ty-control-group product-list-field">
                            <?php if ($_smarty_tpl->getValue('show_amount_label')) {?>
                                <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("availability", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                            <?php }?>
                            <span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('out_of_stock_text')), ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                    <?php }?>
                <?php }?>
            <?php } else { ?>
                <?php if (($_smarty_tpl->getValue('product_amount') > 0 && $_smarty_tpl->getValue('product_amount') >= $_smarty_tpl->getValue('product')['min_qty'] || $_smarty_tpl->getValue('product')['tracking'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductTracking::DO_NOT_TRACK")) && $_smarty_tpl->getValue('is_tracking_product') && $_smarty_tpl->getValue('allow_negative_amount') !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('is_tracking_product') && ($_smarty_tpl->getValue('allow_negative_amount') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('product')['out_of_stock_actions'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
                    <div class="ty-control-group product-list-field">
                        <?php if ($_smarty_tpl->getValue('show_amount_label') && $_smarty_tpl->getValue('settings')['Appearance']['in_stock_field'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("availability", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                        <?php }?>
                        <span class="ty-qty-in-stock ty-control-group__item" id="in_stock_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->getValue('product_amount') > 0) {?>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("in_stock", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                            <?php } else { ?>
                                <?php if ($_smarty_tpl->getValue('details_page')) {?><span class="on_backorder"><?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("on_backorder", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                            <?php }?>
                        </span>
                    </div>
                <?php } elseif (($_smarty_tpl->getValue('product_amount') <= 0 || $_smarty_tpl->getValue('product_amount') < $_smarty_tpl->getValue('product')['min_qty']) && $_smarty_tpl->getValue('is_tracking_product') && $_smarty_tpl->getValue('allow_negative_amount') !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                    <div class="ty-control-group product-list-field">
                        <?php if ($_smarty_tpl->getValue('show_amount_label')) {?>
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("availability", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                        <?php }?>
                        <span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('out_of_stock_text')), ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                <?php }?>
            <?php }?>
        <?php }?>
    <!--product_amount_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
   
    <?php if (($_smarty_tpl->getValue('product')['avail_since'] > (defined('TIME') ? constant('TIME') : null)) && $_smarty_tpl->getValue('details_page')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/coming_soon_notice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('avail_date'=>$_smarty_tpl->getValue('product')['avail_since'],'add_to_cart'=>$_smarty_tpl->getValue('product')['out_of_stock_actions']), (int) 0, $_smarty_current_dir);
?>
    <?php }
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_amount"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_options_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_product_options')) {?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
 js-product-options-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="product_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_product_options]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_product_options')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[force_show_add_to_cart_button]" value="Y">
        <input type="hidden" name="appearance[ut2_select_variation]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ut2_select_variation')), ENT_QUOTES, 'UTF-8');?>
">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_option_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('disable_ids')) {?>
                <?php $_smarty_tpl->assign('_disable_ids', ((string)$_smarty_tpl->getValue('disable_ids')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('_disable_ids', '', false, NULL);?>
            <?php }?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->getValue('obj_id'),'product_options'=>$_smarty_tpl->getValue('product')['product_options'],'name'=>"product_data",'capture_options_vs_qty'=>$_smarty_tpl->getValue('capture_options_vs_qty'),'disable_ids'=>$_smarty_tpl->getValue('_disable_ids')), (int) 0, $_smarty_current_dir);
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_option_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <!--product_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "product_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "advanced_options_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_product_options')) {?>
        <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="advanced_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/companies/components/product_company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_name'=>$_smarty_tpl->getValue('product')['company_name'],'company_id'=>$_smarty_tpl->getValue('product')['company_id']), (int) 0, $_smarty_current_dir);
?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_advanced"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:options_advanced"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <!--advanced_options_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "advanced_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "qty_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:qty"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" id="qty_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_qty]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_qty')), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[capture_options_vs_qty]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('capture_options_vs_qty')), ENT_QUOTES, 'UTF-8');?>
" />
        <?php if (!( !true || empty($_smarty_tpl->getValue('product')['selected_amount']))) {?>
            <?php $_smarty_tpl->assign('default_amount', $_smarty_tpl->getValue('product')['selected_amount'], false, NULL);?>
        <?php } elseif (!( !true || empty($_smarty_tpl->getValue('product')['min_qty']))) {?>
            <?php $_smarty_tpl->assign('default_amount', $_smarty_tpl->getValue('product')['min_qty'], false, NULL);?>
        <?php } elseif (!( !true || empty($_smarty_tpl->getValue('product')['qty_step']))) {?>
            <?php $_smarty_tpl->assign('default_amount', $_smarty_tpl->getValue('product')['qty_step'], false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('default_amount', "1", false, NULL);?>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('show_qty') && $_smarty_tpl->getValue('product')['is_edp'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('cart_button_exists') == true && ($_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] == "allow_shopping" || $_smarty_tpl->getValue('auth')['user_id']) && $_smarty_tpl->getValue('product')['avail_since'] <= (defined('TIME') ? constant('TIME') : null) || ($_smarty_tpl->getValue('product')['avail_since'] > (defined('TIME') ? constant('TIME') : null) && $_smarty_tpl->getValue('product')['out_of_stock_actions'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
            <div class="ty-qty clearfix<?php if ($_smarty_tpl->getValue('settings')['Appearance']['quantity_changer'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> changer<?php }?>" id="qty_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                <?php if (!$_smarty_tpl->getValue('hide_qty_label')) {?><label class="ty-control-group__label" for="qty_count_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->getValue('quantity_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("quantity", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
:</label><?php }?>
                <?php if ($_smarty_tpl->getValue('product')['qty_content']) {?>
                <select name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][amount]" id="qty_count_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->assign('selected_amount', false, false, NULL);?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['qty_content'], 'var', true);
$_smarty_tpl->getVariable('var')->iteration = 0;
$foreach56DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach56DoElse = false;
$_smarty_tpl->getVariable('var')->iteration++;
$_smarty_tpl->getVariable('var')->last = $_smarty_tpl->getVariable('var')->iteration === $_smarty_tpl->getVariable('var')->total;
$foreach56Backup = clone $_smarty_tpl->getVariable('var');
?>
                        <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('product')['selected_amount'] && ($_smarty_tpl->getValue('product')['selected_amount'] == $_smarty_tpl->getValue('var') || ($_smarty_tpl->getVariable('var')->last && !$_smarty_tpl->getValue('selected_amount')))) {
$_smarty_tpl->assign('selected_amount', true, false, NULL);?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')), ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
$_smarty_tpl->setVariable('var', $foreach56Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
                <?php } else { ?>
                <div class="ty-center ty-value-changer cm-value-changer">
                    <?php if ($_smarty_tpl->getValue('settings')['Appearance']['quantity_changer'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                        <a class="cm-increase ty-value-changer__increase">&#43;</a>
                    <?php }?>
                    <input <?php if ($_smarty_tpl->getValue('product')['qty_step'] > 1) {?>readonly="readonly"<?php }?> type="text" size="5" class="ty-value-changer__input cm-amount cm-value-decimal" id="qty_count_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('default_amount')), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('product')['qty_step'] > 1) {?> data-ca-step="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['qty_step']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-min-qty="<?php if ($_smarty_tpl->getValue('product')['min_qty'] > 1) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['min_qty']), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" />
                    <?php if ($_smarty_tpl->getValue('settings')['Appearance']['quantity_changer'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                        <a class="cm-decrease ty-value-changer__decrease">&minus;</a>
                    <?php }?>
                </div>
                <?php }?>
            </div>
        <?php } elseif (!$_smarty_tpl->getValue('bulk_add')) {?>
            <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('default_amount')), ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
        <!--qty_update_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:qty"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "min_qty_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:qty_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('min_qty') && $_smarty_tpl->getValue('product')['min_qty']) {?>
            <p class="ty-min-qty-description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_cart_min_qty", array("[product]"=>$_smarty_tpl->getValue('product')['product'],"[quantity]"=>$_smarty_tpl->getValue('product')['min_qty']), $_smarty_tpl->getSmarty()->getLanguage()) > 'nofilter';?>
.</p>
        <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:qty_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "min_qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_edp_".((string)$_smarty_tpl->getValue('obj_id')), null, null);?>
    <?php if ($_smarty_tpl->getValue('show_edp') && $_smarty_tpl->getValue('product')['is_edp'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <p class="ty-edp-description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_edp_product", [], $_smarty_tpl->getSmarty()->getLanguage());?>
.</p>
        <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
][is_edp]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "product_edp_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "form_close_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
if (!$_smarty_tpl->getValue('hide_form')) {?>
</form>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('no_capture')) {?>
    <?php $_smarty_tpl->assign('capture_name', "form_close_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>

<?php }?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('images'), 'image', false, 'object_id');
$foreach57DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('object_id')->value => $_smarty_tpl->getVariable('image')->value) {
$foreach57DoElse = false;
$_smarty_tpl->assign('product_link', $_smarty_tpl->getValue('image')['link'], false, NULL);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_images_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['obj_id']), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->getValue('product_link')) {?>
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_link')), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['link']), ENT_QUOTES, 'UTF-8');?>
" name="image[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
][link]" />
        <?php }?>
        <input type="hidden" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['obj_id']), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['width']), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['height']), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['type']), ENT_QUOTES, 'UTF-8');?>
" name="image[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
][data]" />
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('image')['width'],'image_height'=>$_smarty_tpl->getValue('image')['height'],'obj_id'=>$_smarty_tpl->getValue('object_id'),'images'=>$_smarty_tpl->getValue('product')['main_pair']), (int) 0, $_smarty_current_dir);
?>
        <?php if ($_smarty_tpl->getValue('image')['link']) {?>
            </a>
        <?php }?>
    <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:list_images_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_data_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
