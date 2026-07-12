<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:53
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_checkout_page/overrides/blocks/grid_wrappers/abt__ut2_lite_checkout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb520529b863_73022570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62d78c163f7818825bb77f16025f2f5f9fff6e4d' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_checkout_page/overrides/blocks/grid_wrappers/abt__ut2_lite_checkout.tpl',
      1 => 1777299365,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/auth/login_form.tpl' => 2,
    'tygh:common/image.tpl' => 4,
    'tygh:common/options_info.tpl' => 2,
    'tygh:common/price.tpl' => 18,
    'tygh:addons/is2or_checkout_page/components/shipping_item.tpl' => 8,
  ),
))) {
function content_69fb520529b863_73022570 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_checkout_page/overrides/blocks/grid_wrappers';
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','checkout','delivering_to','recipient','phone','change','your_order','edit','vendor','unit_price','quantity','remove','choose_delivery_option','vendor','estimated_delivery','select_shipping_method','instant','same_day','regular','bulky_shipping','pay_with','use_promo','insert_promotion_code','apply','order_summary','amount','item','items','shipping','free','included','payment_surcharge','discount','order_total','place_order','by_placing_order_agree','terms_and_conditions','change_delivery_address','create_profile','add_new_address','recipient','phone','editing_profile_name','edit_address','delete','selected','choose','discount','sign_in','checkout','delivering_to','recipient','phone','change','your_order','edit','vendor','unit_price','quantity','remove','choose_delivery_option','vendor','estimated_delivery','select_shipping_method','instant','same_day','regular','bulky_shipping','pay_with','use_promo','insert_promotion_code','apply','order_summary','amount','item','items','shipping','free','included','payment_surcharge','discount','order_total','place_order','by_placing_order_agree','terms_and_conditions','change_delivery_address','create_profile','add_new_address','recipient','phone','editing_profile_name','edit_address','delete','selected','choose','discount'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?>
<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/abt__unitheme2/css/addons/is2or_checkout_page/checkout.css" />

<style>
/* ================================================================
   VENDOR SHIPPING BLOCK
================================================================ */

/* Wrapper antar vendor — beri jarak saat lebih dari 1 vendor */
.is2or-vendor-shipping {
    margin-top: 16px;
}
.is2or-vendor-shipping + .is2or-vendor-shipping {
    border-top: 1px solid #e8e8e8;
    padding-top: 16px;
    margin-top: 16px;
}

/* Label nama vendor */
.is2or-vendor-shipping__label {
    font-size: 13px;
    font-weight: 600;
    color: #555;
    margin-bottom: 8px;
    text-transform: uppercase;
    letter-spacing: 0.4px;
}

/* Error state pada selected header ketika belum pilih */
.is2or-shipping-selected--error {
    border: 1.5px solid #e53935 !important;
    border-radius: 8px;
}
.is2or-shipping-selected--error .is2or-shipping-selected__name--empty {
    color: #e53935;
}

/* Place Order button disabled */
.is2or-place-order-btn--disabled,
.is2or-place-order-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
    pointer-events: none;
}

/* ================================================================
   PROMO / COUPON INPUT ROW
================================================================ */

.is2or-promo-row {
    display: flex;
    gap: 8px;
    align-items: center;
}

.is2or-promo-input {
    flex: 1;
    min-width: 0;
}

.is2or-promo-apply-btn {
    flex-shrink: 0;
    padding: 0 18px;
    height: 38px;
    background: #f47b20;
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.2s;
    white-space: nowrap;
}
.is2or-promo-apply-btn:hover {
    background: #d9600a;
}
.is2or-promo-apply-btn:active {
    background: #c05509;
}

/* Feedback message bawah input */
.is2or-coupon-msg {
    margin-top: 6px;
    font-size: 12px;
    padding: 6px 10px;
    border-radius: 5px;
}
.is2or-coupon-msg--success {
    background: #e8f5e9;
    color: #2e7d32;
    border: 1px solid #a5d6a7;
}
.is2or-coupon-msg--error {
    background: #ffebee;
    color: #c62828;
    border: 1px solid #ef9a9a;
}
.is2or-promo-spinner {
    display: none;
    width: 16px;
    height: 16px;
    border: 2px solid #e0e0e0;
    border-top-color: #f47b20;
    border-radius: 50%;
    animation: is2or-spin 0.7s linear infinite;
    flex-shrink: 0;
}
.is2or-promo-spinner--visible {
    display: inline-block;
}
@keyframes is2or-spin {
    to { transform: rotate(360deg); }
}

.is2or-applied-promos {
    margin-top: 8px;
}

.is2or-applied-promo {
    display: flex;
    flex-direction: column;
    padding: 6px 10px;
    margin-top: 4px;
    background: #e8f5e9;
    border: 1px solid #a5d6a7;
    border-radius: 5px;
}

.is2or-applied-promo__name {
    font-size: 12px;
    font-weight: 600;
    color: #2e7d32;
}

.is2or-applied-promo__desc {
    font-size: 11px;
    color: #388e3c;
    margin-top: 2px;
}

</style>

<?php if (!$_smarty_tpl->getValue('auth')['user_id']) {?>
    <div id="litecheckout_login_block" class="hidden" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
        <div class="ty-login-popup">
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"popup",'id'=>"litecheckout_login_block_inner"), (int) 0, $_smarty_current_dir);
?>
        </div>
    </div>
<?php }?>

<div class="litecheckout litecheckout__form" id="litecheckout_form">
    <h1 class="litecheckout__page-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("checkout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h1>

    <div class="is2or-checkout-wrapper">

                <div class="is2or-checkout-left">

                        <?php if ($_smarty_tpl->getValue('cart')['user_data']) {?>
            <div class="row-fluid litecheckout__pm_sf">
                <div class="is2or-address-card">
                    <div class="is2or-address-card__icon">
                        <i class="ty-icon-location"></i>
                    </div>
                    <div class="is2or-address-card__body">
                        <div class="is2or-address-card__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("delivering_to", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
                        <?php if ($_smarty_tpl->getValue('cart')['user_data']['profile_name']) {?>
                            <div class="is2or-address-card__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cart')['user_data']['profile_name']), ENT_QUOTES, 'UTF-8');?>
</div>
                        <?php }?>
                        <?php if ($_smarty_tpl->getValue('cart')['user_data']['s_firstname'] || $_smarty_tpl->getValue('cart')['user_data']['s_lastname']) {?>
                            <?php $_smarty_tpl->assign('address_name', ((string)$_smarty_tpl->getValue('cart')['user_data']['s_firstname'])." ".((string)$_smarty_tpl->getValue('cart')['user_data']['s_lastname']), false, NULL);?>
                        <?php } elseif ($_smarty_tpl->getValue('cart')['user_data']['firstname'] || $_smarty_tpl->getValue('cart')['user_data']['lastname']) {?>
                            <?php $_smarty_tpl->assign('address_name', ((string)$_smarty_tpl->getValue('cart')['user_data']['firstname'])." ".((string)$_smarty_tpl->getValue('cart')['user_data']['lastname']), false, NULL);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->assign('address_name', '', false, NULL);?>
                        <?php }?>
                        <div class="is2or-address-card__detail">
                            <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_address'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_address'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>

                            <?php if ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_city'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_city'] ?? null : $tmp)) {?>
                                , <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_city'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_city'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                            <?php if ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_state'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_state'] ?? null : $tmp)) {?>
                                , <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_state'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_state'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                            <?php if ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_zipcode'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_zipcode'] ?? null : $tmp)) {?>
                                <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_zipcode'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_zipcode'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                            <?php if ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_country_descr'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_country_descr'] ?? null : $tmp)) {?>
                                , <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_country_descr'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_country_descr'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        </div>
                        <?php if ($_smarty_tpl->getValue('cart')['user_data']['phone']) {?>
                            <div class="is2or-address-card__detail">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("recipient", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('address_name'))), ENT_QUOTES, 'UTF-8');?>

                            </div>
                            <div class="is2or-address-card__detail">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("phone", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cart')['user_data']['phone']), ENT_QUOTES, 'UTF-8');?>

                            </div>
                        <?php }?>
                    </div>
                    <?php if ($_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('allow_multiple_profiles')) {?>
                        <button type="button"
                                class="is2or-address-card__change"
                                onclick="is2orOpenAddressPopup()">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("change", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        </button>
                    <?php }?>
                </div>
            </div>
            <?php }?>

                        <div class="is2or-card" id="cart_items">
                <div class="is2or-order-header">
                    <span class="is2or-card__title" style="margin-bottom:0;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("your_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.cart")), ENT_QUOTES, 'UTF-8');?>
" class="is2or-order-edit">
                        <i class="ty-icon-edit"></i>&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("edit", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </a>
                </div>

                <div class="is2or-products-list">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart_products'), 'product', false, 'key');
$foreach64DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach64DoElse = false;
?>
                        <?php if (!$_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['parent']) {?>
                            <div class="is2or-product-item">
                                                                <div class="is2or-product-item__image">
                                    <?php if ($_smarty_tpl->getValue('product')['main_pair']) {?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('product')['main_pair'],'obj_id'=>$_smarty_tpl->getValue('product')['product_id'],'image_width'=>72,'image_height'=>72,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
                                    <?php }?>
                                </div>

                                                                <div class="is2or-product-item__info">
                                    <span class="is2or-product-item__name">
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo $_smarty_tpl->getValue('product')['product'];?>

                                        </a>
                                    </span>
                                    <?php if ($_smarty_tpl->getValue('product')['variation_features']) {?>
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features'], 'v_feature');
$foreach65DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v_feature')->value) {
$foreach65DoElse = false;
?>
                                            <div class="is2or-product-item__meta">
                                                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['description']), ENT_QUOTES, 'UTF-8');?>
: <b><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['variant']), ENT_QUOTES, 'UTF-8');?>
</b>
                                            </div>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('product')['product_options']) {?>
                                        <div class="is2or-product-item__meta">
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product')['product_options'],'no_block'=>true), (int) 0, $_smarty_current_dir);
?>
                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('product')['company_name']) {?>
                                        <div class="is2or-product-item__meta">
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['company_name']), ENT_QUOTES, 'UTF-8');?>

                                        </div>
                                    <?php }?>
                                </div>

                                                                <div class="is2or-product-item__pricing">
                                    <span class="is2or-product-item__unit">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("unit_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price']), (int) 0, $_smarty_current_dir);
?>
                                    </span>
                                    <span class="is2or-product-item__qty">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quantity", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>

                                    </span>
                                    <span class="is2or-product-item__subtotal">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_subtotal']), (int) 0, $_smarty_current_dir);
?>
                                    </span>
                                </div>

                                                                <?php if (!$_smarty_tpl->getValue('product')['exclude_from_calculate']) {?>
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.delete?cart_id=".((string)$_smarty_tpl->getValue('key'))."&redirect_mode=checkout")), ENT_QUOTES, 'UTF-8');?>
"
                                       class="is2or-product-item__remove cm-ajax"
                                       data-ca-target-id="cart_items,checkout_totals,cart_status*"
                                       title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("remove", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                        <i class="ty-icon-cancel-circle"></i>
                                    </a>
                                <?php }?>
                            </div>
                        <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
            </div>

                        <?php if ($_smarty_tpl->getValue('cart')['shipping_required']) {?>
            <div class="is2or-card" id="shipping_rates_list">
                <span class="is2or-card__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("choose_delivery_option", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>

                <input type="hidden"
                    name="additional_result_ids[]"
                    value="litecheckout_final_section,litecheckout_step_payment,checkout*"
                    form="litecheckout_payments_form"
                />

                
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_groups'), 'group', false, 'group_key');
$foreach66DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group_key')->value => $_smarty_tpl->getVariable('group')->value) {
$foreach66DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('group')['shipping_by_marketplace']) {
continue 1;
}?>
                    <?php if (!$_smarty_tpl->getValue('group')['shippings'] || $_smarty_tpl->getValue('group')['all_edp_free_shipping'] || $_smarty_tpl->getValue('group')['shipping_no_required']) {
continue 1;
}?>

                                        <?php $_smarty_tpl->assign('v_cat_instant', array(), false, NULL);?>
                    <?php $_smarty_tpl->assign('v_cat_sameday', array(), false, NULL);?>
                    <?php $_smarty_tpl->assign('v_cat_regular', array(), false, NULL);?>
                    <?php $_smarty_tpl->assign('v_cat_bulky', array(), false, NULL);?>

                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('all_shippings')[$_smarty_tpl->getValue('group_key')], 'item', false, 'shipping_id');
$foreach67DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shipping_id')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach67DoElse = false;
?>
                        <?php if ($_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('shipping_id')]) {?>
                            <?php $_smarty_tpl->assign('s', $_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('shipping_id')], false, NULL);?>
                            <?php $_tmp_array = $_smarty_tpl->getValue('s') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping'] = $_smarty_tpl->getValue('item')['shipping'];
$_smarty_tpl->assign('s', $_tmp_array, false, NULL);?>
                            <?php if (!$_smarty_tpl->getValue('s')['delivery_time'] && $_smarty_tpl->getValue('s')['service_delivery_time']) {?>
                                <?php $_tmp_array = $_smarty_tpl->getValue('s') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['delivery_time'] = $_smarty_tpl->getValue('s')['service_delivery_time'];
$_smarty_tpl->assign('s', $_tmp_array, false, NULL);?>
                            <?php }?>
                            <?php $_tmp_array = $_smarty_tpl->getValue('s') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['group_key'] = $_smarty_tpl->getValue('group_key');
$_smarty_tpl->assign('s', $_tmp_array, false, NULL);?>

                                                        <?php if ($_smarty_tpl->getValue('s')['service_code'] == "sameDay") {?>
                                <?php $_smarty_tpl->assign('dt_lower', mb_strtolower((string) $_smarty_tpl->getValue('s')['delivery_time'], 'UTF-8'), false, NULL);?>
                                <?php if (($_smarty_tpl->getSmarty()->getModifierCallback('strstr')("hour",$_smarty_tpl->getValue('dt_lower')) || $_smarty_tpl->getSmarty()->getModifierCallback('strstr')("hr",$_smarty_tpl->getValue('dt_lower')))) {?>
                                    <?php $_smarty_tpl->assign('dt_num', $_smarty_tpl->getSmarty()->getModifierCallback('regex_replace')($_smarty_tpl->getValue('s')['delivery_time'],"/[^0-9].*/",''), false, NULL);?>
                                    <?php if ($_smarty_tpl->getValue('dt_num') <= 4) {?>
                                        <?php $_tmp_array = $_smarty_tpl->getValue('v_cat_instant') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('s');
$_smarty_tpl->assign('v_cat_instant', $_tmp_array, false, NULL);?>
                                    <?php } else { ?>
                                        <?php $_tmp_array = $_smarty_tpl->getValue('v_cat_sameday') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('s');
$_smarty_tpl->assign('v_cat_sameday', $_tmp_array, false, NULL);?>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php $_tmp_array = $_smarty_tpl->getValue('v_cat_sameday') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('s');
$_smarty_tpl->assign('v_cat_sameday', $_tmp_array, false, NULL);?>
                                <?php }?>
                            <?php } elseif ($_smarty_tpl->getValue('s')['service_code'] == "heavyAndBulky") {?>
                                <?php $_tmp_array = $_smarty_tpl->getValue('v_cat_bulky') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('s');
$_smarty_tpl->assign('v_cat_bulky', $_tmp_array, false, NULL);?>
                            <?php } elseif ($_smarty_tpl->getValue('s')['service_code'] == "express") {?>
                                <?php $_tmp_array = $_smarty_tpl->getValue('v_cat_regular') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('s');
$_smarty_tpl->assign('v_cat_regular', $_tmp_array, false, NULL);?>
                            <?php } else { ?>
                                <?php $_tmp_array = $_smarty_tpl->getValue('v_cat_regular') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('s');
$_smarty_tpl->assign('v_cat_regular', $_tmp_array, false, NULL);?>
                            <?php }?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        <?php $_smarty_tpl->assign('v_chosen', null, false, NULL);?>
                    <?php if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')] && $_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')]]) {?>
                        <?php $_smarty_tpl->assign('v_chosen', $_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')]], false, NULL);?>
                        <?php $_tmp_array = $_smarty_tpl->getValue('v_chosen') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping'] = $_smarty_tpl->getValue('all_shippings')[$_smarty_tpl->getValue('group_key')][$_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')]]['shipping'];
$_smarty_tpl->assign('v_chosen', $_tmp_array, false, NULL);?>
                        <?php if (!$_smarty_tpl->getValue('v_chosen')['delivery_time'] && $_smarty_tpl->getValue('v_chosen')['service_delivery_time']) {?>
                            <?php $_tmp_array = $_smarty_tpl->getValue('v_chosen') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['delivery_time'] = $_smarty_tpl->getValue('v_chosen')['service_delivery_time'];
$_smarty_tpl->assign('v_chosen', $_tmp_array, false, NULL);?>
                        <?php }?>
                    <?php }?>

                                        <?php if ($_smarty_tpl->getValue('v_cat_regular')) {?>
                        <?php $_smarty_tpl->assign('v_default_cat', "regular", false, NULL);?>
                    <?php } elseif ($_smarty_tpl->getValue('v_cat_sameday')) {?>
                        <?php $_smarty_tpl->assign('v_default_cat', "sameday", false, NULL);?>
                    <?php } elseif ($_smarty_tpl->getValue('v_cat_instant')) {?>
                        <?php $_smarty_tpl->assign('v_default_cat', "instant", false, NULL);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->assign('v_default_cat', "bulky", false, NULL);?>
                    <?php }?>

                                        <?php $_smarty_tpl->assign('v_company_name', (($tmp = (($tmp = $_smarty_tpl->getValue('group')['company_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('group')['name'] ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>

                                        <div class="is2or-vendor-shipping"
                         id="is2or_vendor_shipping_<?php echo $_smarty_tpl->getValue('group_key');?>
"
                         data-group-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
">

                                                <div class="is2or-vendor-shipping__label"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_company_name')), ENT_QUOTES, 'UTF-8');?>
</div>

                                                <div class="is2or-shipping-selected"
                             id="is2or_shipping_selected_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
"
                             onclick="is2orToggleVendorDropdown('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
')">
                            <div class="is2or-shipping-selected__row">
                                <div class="is2or-shipping-selected__left">
                                    <?php if ($_smarty_tpl->getValue('v_chosen')) {?>
                                        <?php if ($_smarty_tpl->getValue('v_chosen')['image']) {?>
                                            <div class="is2or-shipping-selected__logo">
                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('v_chosen')['shipping_id'],'images'=>$_smarty_tpl->getValue('v_chosen')['image'],'image_width'=>40,'image_height'=>20), (int) 0, $_smarty_current_dir);
?>
                                            </div>
                                        <?php }?>
                                        <div class="is2or-shipping-selected__info">
                                            <div class="is2or-shipping-selected__name"
                                                 id="is2or_vship_name_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_chosen')['shipping']), ENT_QUOTES, 'UTF-8');?>

                                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('v_chosen')['rate'])) {?>
                                                    (<?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('v_chosen')['rate']), (int) 0, $_smarty_current_dir);
?>)
                                                <?php }?>
                                            </div>
                                            <?php if ($_smarty_tpl->getValue('v_chosen')['delivery_time']) {?>
                                                <div class="is2or-shipping-selected__eta"
                                                     id="is2or_vship_eta_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
">
                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("estimated_delivery", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_chosen')['delivery_time']), ENT_QUOTES, 'UTF-8');?>

                                                </div>
                                            <?php }?>
                                        </div>
                                    <?php } else { ?>
                                        <div class="is2or-shipping-selected__info">
                                            <div class="is2or-shipping-selected__name is2or-shipping-selected__name--empty"
                                                 id="is2or_vship_name_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_shipping_method", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                            </div>
                                            <div class="is2or-shipping-selected__eta"
                                                 id="is2or_vship_eta_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
"></div>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="is2or-shipping-selected__chevron"
                                     id="is2or_shipping_chevron_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
">▾</div>
                            </div>
                        </div>

                                                <div class="is2or-shipping-dropdown"
                             id="is2or_shipping_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
"
                             style="display:none;">

                                                        <div class="is2or-shipping-cats">
                                <?php if ($_smarty_tpl->getValue('v_cat_instant')) {?>
                                    <button type="button"
                                            class="is2or-shipping-cat-btn<?php if ($_smarty_tpl->getValue('v_default_cat') == 'instant') {?> is2or-shipping-cat-btn--active<?php }?>"
                                            onclick="is2orShowVendorCat('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
', 'instant')">
                                        ⚡ <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("instant", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </button>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('v_cat_sameday')) {?>
                                    <button type="button"
                                            class="is2or-shipping-cat-btn<?php if ($_smarty_tpl->getValue('v_default_cat') == 'sameday') {?> is2or-shipping-cat-btn--active<?php }?>"
                                            onclick="is2orShowVendorCat('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
', 'sameday')">
                                        🕐 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("same_day", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </button>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('v_cat_regular')) {?>
                                    <button type="button"
                                            class="is2or-shipping-cat-btn<?php if ($_smarty_tpl->getValue('v_default_cat') == 'regular') {?> is2or-shipping-cat-btn--active<?php }?>"
                                            onclick="is2orShowVendorCat('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
', 'regular')">
                                        📦 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("regular", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </button>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('v_cat_bulky')) {?>
                                    <button type="button"
                                            class="is2or-shipping-cat-btn<?php if ($_smarty_tpl->getValue('v_default_cat') == 'bulky') {?> is2or-shipping-cat-btn--active<?php }?>"
                                            onclick="is2orShowVendorCat('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
', 'bulky')">
                                        🏗 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bulky_shipping", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </button>
                                <?php }?>
                            </div>

                                                        <?php if ($_smarty_tpl->getValue('v_cat_instant')) {?>
                                <div class="is2or-shipping-cat-list"
                                     id="is2or_vcat_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
_instant"
                                     style="<?php if ($_smarty_tpl->getValue('v_default_cat') != 'instant') {?>display:none;<?php }?>">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('v_cat_instant'), 's');
$foreach68DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach68DoElse = false;
?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_checkout_page/components/shipping_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping'=>$_smarty_tpl->getValue('s')), (int) 0, $_smarty_current_dir);
?>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>

                                                        <?php if ($_smarty_tpl->getValue('v_cat_sameday')) {?>
                                <div class="is2or-shipping-cat-list"
                                     id="is2or_vcat_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
_sameday"
                                     style="<?php if ($_smarty_tpl->getValue('v_default_cat') != 'sameday') {?>display:none;<?php }?>">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('v_cat_sameday'), 's');
$foreach69DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach69DoElse = false;
?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_checkout_page/components/shipping_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping'=>$_smarty_tpl->getValue('s')), (int) 0, $_smarty_current_dir);
?>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>

                                                        <?php if ($_smarty_tpl->getValue('v_cat_regular')) {?>
                                <div class="is2or-shipping-cat-list"
                                     id="is2or_vcat_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
_regular"
                                     style="<?php if ($_smarty_tpl->getValue('v_default_cat') != 'regular') {?>display:none;<?php }?>">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('v_cat_regular'), 's');
$foreach70DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach70DoElse = false;
?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_checkout_page/components/shipping_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping'=>$_smarty_tpl->getValue('s')), (int) 0, $_smarty_current_dir);
?>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>

                                                        <?php if ($_smarty_tpl->getValue('v_cat_bulky')) {?>
                                <div class="is2or-shipping-cat-list"
                                     id="is2or_vcat_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
_bulky"
                                     style="<?php if ($_smarty_tpl->getValue('v_default_cat') != 'bulky') {?>display:none;<?php }?>">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('v_cat_bulky'), 's');
$foreach71DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach71DoElse = false;
?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_checkout_page/components/shipping_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping'=>$_smarty_tpl->getValue('s')), (int) 0, $_smarty_current_dir);
?>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>

                        </div>
                        
                    </div>
                    
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                
            </div>
            <?php }?>            

                        <div data-ca-lite-checkout-element="form">
                <form name="litecheckout_payments_form"
                    id="litecheckout_payments_form"
                    action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.place_order")), ENT_QUOTES, 'UTF-8');?>
"
                    method="post"
                    data-ca-lite-checkout-element="checkout-form"
                    data-ca-lite-checkout-ready-for-checkout="false"
                    class="litecheckout__payment-methods">
                    <input type="hidden" value="1" name="ship_to_another"
                        data-ca-lite-checkout-field="ship_to_another"
                        data-ca-lite-checkout-auto-save-on-change="true">
                    <input type="hidden" name="dispatch" value="checkout.place_order" />
                    <input type="hidden" name="security_hash" class="cm-no-hide-input" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_generate_security_hash')('')), ENT_QUOTES, 'UTF-8');?>
" />
                    <div style="display:none;"><?php echo $_smarty_tpl->getValue('content');?>
</div>
                </form>
            </div>

        </div>
        

                <div class="is2or-checkout-right">

                
            <div class="row-fluid litecheckout__pm_sf">
                                <?php if ($_smarty_tpl->getValue('payment_methods')) {?>
                    <div style="border-bottom: 2px solid #c2c2c2; padding-bottom: 20px;">
                        <span class="is2or-card__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("pay_with", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>

                                                <?php $_smarty_tpl->assign('active_gateway', "cc", false, NULL);?>

                                                <div class="is2or-gateway-selected" id="is2or_gateway_selected" onclick="is2orToggleGatewayDropdown()">
                            <div class="is2or-gateway-selected__inner">
                                <div class="is2or-gateway-selected__logos" id="is2or_gateway_logos">
                                                                        <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/mastercard-logo.png" height="19" />
                                </div>
                                <div class="is2or-gateway-selected__name" id="is2or_gateway_name">Master Card</div>
                            </div>
                            <div class="is2or-gateway-selected__chevron" id="is2or_gateway_chevron">▾</div>
                        </div>

                                                <div class="is2or-gateway-dropdown" id="is2or_gateway_dropdown" style="display:none;">
                            
                                                        <label class="is2or-gateway-item is2or-gateway-item--active" onclick="is2orSelectGateway('cc', 'Visa', ['visa-logo.png'])">
                                <input type="radio" 
                                    name="payment_data[aps][gateway]" 
                                    value="cc"
                                    form="litecheckout_payments_form"
                                    checked
                                    style="display:none;" />
                                <div class="is2or-gateway-item__logos">
                                    <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/visa-logo.png" height="19" />
                                </div>
                                <div class="is2or-gateway-item__name">Visa</div>
                            </label>

                            <label class="is2or-gateway-item" onclick="is2orSelectGateway('cc', 'Master Card', ['mastercard-logo.png'])">
                                <input type="radio" 
                                    name="payment_data[aps][gateway]" 
                                    value="cc"
                                    form="litecheckout_payments_form"
                                    style="display:none;" />
                                <div class="is2or-gateway-item__logos">
                                    <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/mastercard-logo.png" height="19" />
                                </div>
                                <div class="is2or-gateway-item__name">MasterCard</div>
                            </label>

                            <label class="is2or-gateway-item" onclick="is2orSelectGateway('cc', 'American Express', ['amex-logo.png'])">
                                <input type="radio" 
                                    name="payment_data[aps][gateway]" 
                                    value="cc"
                                    form="litecheckout_payments_form"
                                    style="display:none;" />
                                <div class="is2or-gateway-item__logos">
                                    <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/amex-logo.png" height="19" />
                                </div>
                                <div class="is2or-gateway-item__name">American Express</div>
                            </label>

                            <label class="is2or-gateway-item" onclick="is2orSelectGateway('cc', 'Mada', ['mada-logo.png'])">
                                <input type="radio" 
                                    name="payment_data[aps][gateway]" 
                                    value="cc"
                                    form="litecheckout_payments_form"
                                    style="display:none;" />
                                <div class="is2or-gateway-item__logos">
                                    <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/mada-logo.png" height="19" />
                                </div>
                                <div class="is2or-gateway-item__name">Mada</div>
                            </label>

                        </div>

                        <select style="display:none;"
                                data-ca-lite-checkout-field="payment_id"
                                data-ca-lite-checkout-auto-save-on-change="true"
                                form="litecheckout_payments_form"
                                name="payment_id">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'payment');
$foreach72DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment')->value) {
$foreach72DoElse = false;
?>
                                <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->getValue('payment')['payment_id'] == $_smarty_tpl->getValue('cart')['payment_id']) {?>selected<?php }?>>
                                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment']), ENT_QUOTES, 'UTF-8');?>

                                </option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>

                    </div>
                <?php }?>

                                <?php if ($_smarty_tpl->getValue('cart')['coupons']) {?>
                    <?php $_smarty_tpl->assign('coupon_keys', $_smarty_tpl->getSmarty()->getModifierCallback('array_keys')($_smarty_tpl->getValue('cart')['coupons']), false, NULL);?>
                    <?php $_smarty_tpl->assign('coupon_str', $_smarty_tpl->getSmarty()->getModifierCallback('implode')(", ",$_smarty_tpl->getValue('coupon_keys')), false, NULL);?>
                <?php }?>
                <div style="border-bottom: 2px solid #c2c2c2; padding-bottom: 20px; padding-top: 20px;">
                    <span class="is2or-card__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("use_promo", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    <div class="is2or-promo-row">
                        <input type="text"
                            id="is2or_coupon_input"
                            name="coupon_code"
                            class="is2or-promo-input cm-hint"
                            placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("insert_promotion_code", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
                            value="<?php if ($_smarty_tpl->getValue('cart')['coupons']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('coupon_str')), ENT_QUOTES, 'UTF-8');
}?>" />
                        <button type="button"
                                id="is2or_coupon_apply_btn"
                                class="is2or-promo-apply-btn">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("apply", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        </button>
                        <span id="is2or_coupon_spinner" class="is2or-promo-spinner"></span>
                    </div>
                    <div id="is2or_coupon_msg" class="is2or-coupon-msg" style="display:none;"></div>
                                        <?php if ($_smarty_tpl->getValue('cart')['applied_promotions']) {?>
                        <div class="is2or-applied-promos">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['applied_promotions'], 'promo');
$foreach73DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('promo')->value) {
$foreach73DoElse = false;
?>
                                <div class="is2or-applied-promo">
                                    <span class="is2or-applied-promo__name">✓ <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promo')['name']), ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('promo')['detailed_description'])) {?>
                                        <span class="is2or-applied-promo__desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('promo')['detailed_description']);?>
</span>
                                    <?php }?>
                                </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                </div>

                                <div style="padding-bottom: 20px; padding-top: 20px;">
                    <span class="is2or-card__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_summary", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    <div class="is2or-summary-rows">

                                                <div class="is2or-summary-row">
                            <span class="is2or-summary-row__label">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("amount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 (<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cart')['amount']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('cart')['amount'] == 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("item", [], $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("items", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>)
                            </span>
                            <span class="is2or-summary-row__value">
                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['display_subtotal']), (int) 0, $_smarty_current_dir);
?>
                            </span>
                        </div>

                                                <?php if ($_smarty_tpl->getValue('cart')['shipping_required']) {?>
                            <div class="is2or-summary-row">
                                <span class="is2or-summary-row__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                <span class="is2or-summary-row__value">
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('cart')['display_shipping_cost'])) {?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['display_shipping_cost']), (int) 0, $_smarty_current_dir);
?>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("free", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    <?php }?>
                                </span>
                            </div>
                        <?php }?>

                                                <?php if ($_smarty_tpl->getValue('cart')['taxes']) {?>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['taxes'], 'tax');
$foreach74DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tax')->value) {
$foreach74DoElse = false;
?>
                                <div class="is2or-summary-row">
                                    <span class="is2or-summary-row__label">
                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tax')['description']), ENT_QUOTES, 'UTF-8');?>

                                        <?php if ($_smarty_tpl->getValue('tax')['price_includes_tax'] == "Y") {?> (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("included", [], $_smarty_tpl->getSmarty()->getLanguage());?>
)<?php }?>
                                    </span>
                                    <span class="is2or-summary-row__value">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('tax')['tax_subtotal']), (int) 0, $_smarty_current_dir);
?>
                                    </span>
                                </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php }?>

                                                <?php if ($_smarty_tpl->getValue('cart')['payment_surcharge'] && !$_smarty_tpl->getValue('take_surcharge_from_vendor')) {?>
                            <div class="is2or-summary-row">
                                <span class="is2or-summary-row__label">
                                    <?php echo (($tmp = $_smarty_tpl->getValue('cart')['payment_surcharge_title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("payment_surcharge", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>

                                </span>
                                <span class="is2or-summary-row__value">
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['payment_surcharge']), (int) 0, $_smarty_current_dir);
?>
                                </span>
                            </div>
                        <?php }?>

                                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('cart')['subtotal_discount'])) {?>
                            <div class="is2or-summary-row">
                                <span class="is2or-summary-row__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("discount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                <span class="is2or-summary-row__value is2or-summary-row__value--discount">
                                    -<?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['subtotal_discount']), (int) 0, $_smarty_current_dir);
?>
                                </span>
                            </div>
                        <?php }?>

                                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:summary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:summary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                        <div class="is2or-summary-divider" style="border-bottom: 1px solid #c2c2c2; padding-bottom: 5px;"></div>

                                                <div class="is2or-summary-total">
                            <span class="is2or-summary-total__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_total", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                            <span class="is2or-summary-total__value">
                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['total'],'span_id'=>"cart_total",'class'=>"ty-price"), (int) 0, $_smarty_current_dir);
?>
                            </span>
                        </div>

                    </div>
                </div>

                                <div>
                    <button type="submit"
                            form="litecheckout_payments_form"
                            class="is2or-place-order-btn"
                            style="border-radius:30px"
                            data-ca-lite-checkout-element="place-order-button">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("place_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </button>
                    <div class="is2or-place-order-terms">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("by_placing_order_agree", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['http_location']), ENT_QUOTES, 'UTF-8');?>
/terms-of-use" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("terms_and_conditions", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    
        <?php if ($_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('allow_multiple_profiles')) {?>
    <div id="is2or_address_popup" class="is2or-popup-overlay" style="display:none;" onclick="is2orCloseAddressPopupOutside(event)">
        <div class="is2or-popup">
            <div class="is2or-popup__header">
                <h2 class="is2or-popup__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("change_delivery_address", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h2>
                <button type="button" class="is2or-popup__close" onclick="is2orCloseAddressPopup()">
                    <i class="ty-icon-cancel"></i>
                </button>
            </div>
            <div class="is2or-popup__body">

                                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.update_profile")), ENT_QUOTES, 'UTF-8');?>
"
                class="is2or-popup__add-btn cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close"
                data-ca-target-id="create_user_profile"
                data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("create_profile", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_new_address", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                </a>

                                <div class="is2or-address-list">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user_profiles'), 'profile');
$foreach75DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('profile')->value) {
$foreach75DoElse = false;
?>
                        <div class="is2or-address-item <?php if ($_smarty_tpl->getValue('profile')['profile_id'] == $_smarty_tpl->getValue('cart')['profile_id']) {?>is2or-address-item--selected<?php }?>"
                            id="is2or_profile_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
">
                            <div class="is2or-address-item__body">
                                <?php if ($_smarty_tpl->getValue('profile')['profile_name']) {?>
                                    <div class="is2or-address-item__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_name']), ENT_QUOTES, 'UTF-8');?>
</div>
                                <?php }?>
                                <div class="is2or-address-item__detail">
                                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_address']), ENT_QUOTES, 'UTF-8');?>

                                    <?php if ($_smarty_tpl->getValue('profile')['s_city']) {?>, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_city']), ENT_QUOTES, 'UTF-8');
}?>
                                    <?php if ($_smarty_tpl->getValue('profile')['s_state_descr']) {?>, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_state_descr']), ENT_QUOTES, 'UTF-8');
}?>
                                    <?php if ($_smarty_tpl->getValue('profile')['s_zipcode']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_zipcode']), ENT_QUOTES, 'UTF-8');
}?>
                                    <?php if ($_smarty_tpl->getValue('profile')['s_country_descr']) {?>, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_country_descr']), ENT_QUOTES, 'UTF-8');
}?>
                                </div>
                                <?php if ($_smarty_tpl->getValue('profile')['s_firstname'] || $_smarty_tpl->getValue('profile')['s_lastname']) {?>
                                    <div class="is2or-address-item__meta">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("recipient", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_firstname']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_lastname']), ENT_QUOTES, 'UTF-8');?>

                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('profile')['phone']) {?>
                                    <div class="is2or-address-item__meta">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("phone", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['phone']), ENT_QUOTES, 'UTF-8');?>

                                    </div>
                                <?php }?>
                                <div class="is2or-address-item__actions">
                                    <a class="is2or-address-item__edit cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close"
                                    href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.update_profile?profile_id=".((string)$_smarty_tpl->getValue('profile')['profile_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-target-id="edit_user_profile_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("editing_profile_name", array('[name]'=>$_smarty_tpl->getValue('profile')['profile_name']), $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("edit_address", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </a>
                                    <?php if ($_smarty_tpl->getValue('profile')['profile_id'] != $_smarty_tpl->getValue('cart')['profile_id']) {?>
                                        <a class="is2or-address-item__delete cm-confirm"
                                        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.delete_profile?profile_id=".((string)$_smarty_tpl->getValue('profile')['profile_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("delete", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                        </a>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="is2or-address-item__right">
                                <?php if ($_smarty_tpl->getValue('profile')['profile_id'] == $_smarty_tpl->getValue('cart')['profile_id']) {?>
                                    <span class="is2or-address-item__selected-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("selected", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                <?php } else { ?>
                                    <button type="button"
                                            class="is2or-address-item__choose-btn"
                                            onclick="is2orSelectProfile(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
)">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("choose", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </button>
                                <?php }?>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>

            </div>
        </div>
    </div>
    <?php }?>

<?php echo '<script'; ?>
>
    // ================================================================
    // PER-VENDOR SHIPPING FUNCTIONS
    // ================================================================

    /**
     * Toggle dropdown untuk vendor tertentu.
     * Menutup dropdown vendor lain yang sedang terbuka.
     */
    function is2orToggleVendorDropdown(groupKey) {
        var dropdown = document.getElementById('is2or_shipping_dropdown_' + groupKey);
        var chevron  = document.getElementById('is2or_shipping_chevron_' + groupKey);
        if (!dropdown) return;

        var isOpen = dropdown.style.display !== 'none';

        // Tutup semua dropdown vendor lain
        document.querySelectorAll('.is2or-shipping-dropdown').forEach(function(d) {
            d.style.display = 'none';
        });
        document.querySelectorAll('[id^="is2or_shipping_chevron_"]').forEach(function(c) {
            c.classList.remove('is2or-shipping-selected__chevron--open');
        });

        // Toggle dropdown ini
        if (!isOpen) {
            dropdown.style.display = 'block';
            chevron.classList.add('is2or-shipping-selected__chevron--open');
        }
    }

    /**
     * Tampilkan kategori tertentu di dalam dropdown vendor.
     * Hanya mempengaruhi elemen di dalam vendor block yang sama.
     */
    function is2orShowVendorCat(groupKey, cat) {
        var dropdownEl = document.getElementById('is2or_shipping_dropdown_' + groupKey);
        if (!dropdownEl) return;

        // Sembunyikan semua cat-list dalam vendor ini
        dropdownEl.querySelectorAll('.is2or-shipping-cat-list').forEach(function(l) {
            l.style.display = 'none';
        });

        // Non-aktifkan semua tombol dalam vendor ini
        dropdownEl.querySelectorAll('.is2or-shipping-cat-btn').forEach(function(b) {
            b.classList.remove('is2or-shipping-cat-btn--active');
        });

        // Tampilkan list yang dipilih
        var target = document.getElementById('is2or_vcat_' + groupKey + '_' + cat);
        if (target) target.style.display = 'flex';

        // Aktifkan tombol yang diklik
        var activeBtn = dropdownEl.querySelector('[onclick="is2orShowVendorCat(\'' + groupKey + '\', \'' + cat + '\')"]');
        if (activeBtn) activeBtn.classList.add('is2or-shipping-cat-btn--active');
    }

    /**
     * Pilih shipping untuk vendor tertentu.
     * - Check radio button
     * - Update tampilan "selected" di header dropdown
     * - Update styling item aktif
     * - Recalculate CS-Cart shipping cost
     * - Tutup dropdown vendor ini
     * - Cek validasi semua vendor
     */
    function is2orSelectShipping(shippingId, groupKey) {
        var radio = document.getElementById('sh_' + groupKey + '_' + shippingId);
        if (radio) {
            radio.checked = true;
            radio.dispatchEvent(new Event('change', { bubbles: true }));
            fn_calculate_total_shipping_cost();
        }

        // Update active class pada shipping item di vendor ini
        var dropdown = document.getElementById('is2or_shipping_dropdown_' + groupKey);
        if (dropdown) {
            dropdown.querySelectorAll('.is2or-shipping-item').forEach(function(item) {
                item.classList.remove('is2or-shipping-item--active');
            });
            var activeLabel = dropdown.querySelector('label[for="sh_' + groupKey + '_' + shippingId + '"], label:has(#sh_' + groupKey + '_' + shippingId + ')');
            // Fallback: cari via radio parent
            if (!activeLabel && radio) {
                activeLabel = radio.closest('.is2or-shipping-item');
            }
            if (activeLabel) activeLabel.classList.add('is2or-shipping-item--active');
        }

        // Update teks display di header selected
        var nameEl = document.getElementById('is2or_vship_name_' + groupKey);
        var etaEl  = document.getElementById('is2or_vship_eta_' + groupKey);
        if (nameEl && radio) {
            var itemEl = radio.closest('.is2or-shipping-item');
            if (itemEl) {
                var itemNameEl  = itemEl.querySelector('.is2or-shipping-item__name');
                var itemEtaEl   = itemEl.querySelector('.is2or-shipping-item__eta');
                var itemPriceEl = itemEl.querySelector('.is2or-shipping-item__price');

                var shippingName  = itemNameEl  ? itemNameEl.textContent.trim()  : '';
                var shippingPrice = itemPriceEl ? itemPriceEl.textContent.trim() : '';

                nameEl.textContent = shippingName + (shippingPrice ? ' (' + shippingPrice + ')' : '');
                nameEl.classList.remove('is2or-shipping-selected__name--empty');

                if (etaEl) {
                    etaEl.textContent = itemEtaEl ? itemEtaEl.textContent.trim() : '';
                }
            }
        }

        // Tutup dropdown setelah memilih
        setTimeout(function() {
            var dd = document.getElementById('is2or_shipping_dropdown_' + groupKey);
            var ch = document.getElementById('is2or_shipping_chevron_' + groupKey);
            if (dd) dd.style.display = 'none';
            if (ch) ch.classList.remove('is2or-shipping-selected__chevron--open');
        }, 250);

        // Validasi semua vendor sudah dipilih
        is2orValidateAllVendorShipping();
    }

    /**
     * Validasi bahwa setiap vendor sudah memiliki shipping yang dipilih.
     * Jika ada yang belum, tampilkan indikator error dan disable Place Order button.
     */
    function is2orValidateAllVendorShipping() {
        var vendorBlocks = document.querySelectorAll('.is2or-vendor-shipping');
        var allSelected = true;

        vendorBlocks.forEach(function(block) {
            var groupKey = block.getAttribute('data-group-key');
            var radios   = block.querySelectorAll('input[type="radio"][name="shipping_ids[' + groupKey + ']"]');
            var isChecked = false;
            radios.forEach(function(r) { if (r.checked) isChecked = true; });

            var selectedEl = document.getElementById('is2or_shipping_selected_' + groupKey);
            if (isChecked) {
                if (selectedEl) selectedEl.classList.remove('is2or-shipping-selected--error');
            } else {
                if (selectedEl) selectedEl.classList.add('is2or-shipping-selected--error');
                allSelected = false;
            }
        });

        // Enable / disable Place Order button
        var placeOrderBtn = document.querySelector('[data-ca-lite-checkout-element="place-order-button"]');
        if (placeOrderBtn) {
            if (allSelected) {
                placeOrderBtn.disabled = false;
                placeOrderBtn.classList.remove('is2or-place-order-btn--disabled');
            } else {
                placeOrderBtn.disabled = true;
                placeOrderBtn.classList.add('is2or-place-order-btn--disabled');
            }
        }

        return allSelected;
    }

    /**
     * Intercept Place Order submit — blokir jika ada vendor yang belum pilih shipping.
     */
    document.addEventListener('DOMContentLoaded', function() {
        // Jalankan validasi awal saat halaman load
        is2orValidateAllVendorShipping();

        var placeOrderBtn = document.querySelector('[data-ca-lite-checkout-element="place-order-button"]');
        if (placeOrderBtn) {
            placeOrderBtn.addEventListener('click', function(e) {
                if (!is2orValidateAllVendorShipping()) {
                    e.preventDefault();
                    e.stopImmediatePropagation();

                    // Scroll ke vendor pertama yang belum pilih shipping
                    var errorEl = document.querySelector('.is2or-shipping-selected--error');
                    if (errorEl) {
                        errorEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                    return false;
                }
            }, true); // capture phase agar jalan sebelum CS-Cart handler
        }
    });

    function is2orOpenAddressPopup() {
        document.getElementById('is2or_address_popup').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function is2orCloseAddressPopup() {
        document.getElementById('is2or_address_popup').style.display = 'none';
        document.body.style.overflow = '';
    }

    function is2orCloseAddressPopupOutside(event) {
        if (event.target === document.getElementById('is2or_address_popup')) {
            is2orCloseAddressPopup();
        }
    }

    function is2orSelectProfile(profileId) {
        // Submit form to select profile via CS-Cart mechanism
        var form = document.createElement('form');
        form.method = 'post';
        form.action = '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
';

        var fields = {
            'dispatch': 'checkout.checkout',
            'profile_id': profileId,
            'result_ids': 'checkout*,cart_status*'
        };

        for (var key in fields) {
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = key;
            input.value = fields[key];
            form.appendChild(input);
        }

        document.body.appendChild(form);
        form.submit();
    }

    document.addEventListener('DOMContentLoaded', function() {
        document.addEventListener('submit', function(e) {
            var form = e.target;
            if (form.id === 'is2or_profile_form') {
                var billingWrapper = form.querySelector('.billing_address_fields');
                if (billingWrapper) {
                    var hiddenParent = billingWrapper.closest('.hidden');
                    if (hiddenParent) {
                        var requiredFields = hiddenParent.querySelectorAll('.cm-required, .cm-failed-field, .cm-failed-label');
                        requiredFields.forEach(function(el) {
                            el.classList.remove('cm-required');
                            el.classList.remove('cm-failed-field');
                            el.classList.remove('cm-failed-label');
                        });
                        var errorSpans = hiddenParent.querySelectorAll('.help-inline');
                        errorSpans.forEach(function(el) { el.remove(); });
                        var errorDivs = hiddenParent.querySelectorAll('.error');
                        errorDivs.forEach(function(el) { el.classList.remove('error'); });
                    }
                }
            }
        }, true); // true = capture phase, runs BEFORE CS-Cart validation

        // Auto-select shipping pertama untuk setiap vendor yang belum dipilih
        document.querySelectorAll('.is2or-vendor-shipping').forEach(function(block) {
            var groupKey = block.getAttribute('data-group-key');

            // Cek apakah vendor ini sudah ada yang ter-check
            var alreadyChecked = block.querySelector('input[type="radio"]:checked');
            if (alreadyChecked) return; // sudah ada pilihan, skip

            // Cari radio pertama dari default cat (regular → sameday → instant → bulky)
            var cats = ['regular', 'sameday', 'instant', 'bulky'];
            var firstRadio = null;
            for (var i = 0; i < cats.length; i++) {
                var catEl = document.getElementById('is2or_vcat_' + groupKey + '_' + cats[i]);
                if (catEl) {
                    firstRadio = catEl.querySelector('input[type="radio"]');
                    if (firstRadio) break;
                }
            }

            if (!firstRadio) return;

            firstRadio.checked = true;
            firstRadio.dispatchEvent(new Event('change', { bubbles: true }));
            fn_calculate_total_shipping_cost();

            // Update display header untuk vendor ini
            var label = firstRadio.closest('.is2or-shipping-item');
            if (label) {
                label.classList.add('is2or-shipping-item--active');

                var nameEl  = document.getElementById('is2or_vship_name_' + groupKey);
                var etaEl   = document.getElementById('is2or_vship_eta_' + groupKey);
                var itemNameEl  = label.querySelector('.is2or-shipping-item__name');
                var itemEtaEl   = label.querySelector('.is2or-shipping-item__eta');
                var itemPriceEl = label.querySelector('.is2or-shipping-item__price');

                if (nameEl && itemNameEl) {
                    var price = itemPriceEl ? itemPriceEl.textContent.trim() : '';
                    nameEl.textContent = itemNameEl.textContent.trim() + (price ? ' (' + price + ')' : '');
                    nameEl.classList.remove('is2or-shipping-selected__name--empty');
                }
                if (etaEl) {
                    etaEl.textContent = itemEtaEl ? itemEtaEl.textContent.trim() : '';
                }
            }
        });

        // Validasi awal setelah auto-select
        is2orValidateAllVendorShipping();

        var lcForm = document.getElementById('litecheckout_payments_form');
        if (lcForm) {
            lcForm.addEventListener('submit', function() {
                // Inject security_hash
                var existingHash = document.querySelector('input[name="security_hash"]');
                if (existingHash && existingHash.value) {
                    var hashInput = lcForm.querySelector('input[name="security_hash"]');
                    if (!hashInput) {
                        hashInput = document.createElement('input');
                        hashInput.type = 'hidden';
                        hashInput.name = 'security_hash';
                        hashInput.className = 'cm-no-hide-input';
                        lcForm.appendChild(hashInput);
                    }
                    hashInput.value = existingHash.value;
                }

                var dispatchInput = lcForm.querySelector('input[name="dispatch"]');
                if (!dispatchInput) {
                    dispatchInput = document.createElement('input');
                    dispatchInput.type = 'hidden';
                    dispatchInput.name = 'dispatch';
                    lcForm.appendChild(dispatchInput);
                }
                dispatchInput.value = 'checkout.place_order';
            });
        }
    });

    function is2orToggleGatewayDropdown() {
        var dropdown = document.getElementById('is2or_gateway_dropdown');
        var chevron = document.getElementById('is2or_gateway_chevron');
        if (dropdown.style.display === 'none') {
            dropdown.style.display = 'block';
            chevron.classList.add('is2or-gateway-selected__chevron--open');
        } else {
            dropdown.style.display = 'none';
            chevron.classList.remove('is2or-gateway-selected__chevron--open');
        }
    }

    function is2orSelectGateway(gatewayType, displayName, logos) {
        var baseUrl = '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/';
        
        // Update selected display
        var nameEl = document.getElementById('is2or_gateway_name');
        var logosEl = document.getElementById('is2or_gateway_logos');
        
        if (nameEl) nameEl.textContent = displayName;
        
        if (logosEl) {
            logosEl.innerHTML = '';
            logos.forEach(function(logo) {
                var img = document.createElement('img');
                img.src = baseUrl + logo;
                img.height = 22;
                logosEl.appendChild(img);
            });
        }

        // Check the correct radio button
        var radios = document.querySelectorAll('input[name="payment_data[aps][gateway]"]');
        radios.forEach(function(r) {
            if (r.value === gatewayType) {
                r.checked = true;
            }
        });

        // Update active state
        document.querySelectorAll('.is2or-gateway-item').forEach(function(item) {
            item.classList.remove('is2or-gateway-item--active');
        });
        event.currentTarget.classList.add('is2or-gateway-item--active');

        // Close dropdown
        document.getElementById('is2or_gateway_dropdown').style.display = 'none';
        document.getElementById('is2or_gateway_chevron').classList.remove('is2or-gateway-selected__chevron--open');
    }

    // ================================================================
    // COUPON / PROMO CODE LOGIC
    // ================================================================

    (function() {
        var _lastSubmittedCode = null;
        var _isLoading = false;

        function is2orShowMsg(type, text) {
            var msgEl = document.getElementById('is2or_coupon_msg');
            if (!msgEl) return;
            msgEl.className = 'is2or-coupon-msg is2or-coupon-msg--' + type;
            msgEl.textContent = text;
            msgEl.style.display = 'block';

            var promosEl = document.querySelector('.is2or-applied-promos');
            if (promosEl) {
                promosEl.style.display = type === 'error' ? 'none' : 'block';
            }
        }

        function is2orHideMsg() {
            var msgEl = document.getElementById('is2or_coupon_msg');
            if (msgEl) msgEl.style.display = 'none';

            var promosEl = document.querySelector('.is2or-applied-promos');
            if (promosEl) promosEl.style.display = 'block';
        }

        function is2orSetBtnLoading(loading) {
            var btn     = document.getElementById('is2or_coupon_apply_btn');
            var spinner = document.getElementById('is2or_coupon_spinner');
            if (!btn) return;
            btn.disabled = loading;
            if (spinner) {
                if (loading) {
                    spinner.classList.add('is2or-promo-spinner--visible');
                } else {
                    spinner.classList.remove('is2or-promo-spinner--visible');
                }
            }
        }

        function is2orGetSecurityHash() {
            var el = document.querySelector('input[name="security_hash"]');
            return el ? el.value : '';
        }

        function is2orSubmitCoupon() {
            var input = document.getElementById('is2or_coupon_input');
            if (!input || _isLoading) return;

            var code = input.value.trim();
            if (code === _lastSubmittedCode) return;

            is2orHideMsg();
            _isLoading = true;
            _lastSubmittedCode = code;
            is2orSetBtnLoading(true);

            $.ajax({
                url: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/',
                method: 'POST',
                dataType: 'json',
                data: {
                    dispatch: 'checkout.apply_coupon',
                    coupon_code: code,
                    result_ids: 'checkout*,cart_status*,cart_items,payment-methods,litecheckout_form',
                    redirect_url: 'index.php?dispatch=checkout.cart',
                    security_hash: is2orGetSecurityHash(),
                    full_render: 'Y',
                    is_ajax: '1'
                },
                success: function(response) {
                    if (!response) {
                        _lastSubmittedCode = null;
                        is2orShowMsg('error', '✗ Failed to apply promo code.');
                        return;
                    }

                    var isSuccess = false;
                    var errorMsg  = '';

                    if (response.notifications) {
                        $.each(response.notifications, function(key, notif) {
                            if (notif.extra === 'text_applied_promotions') {
                                isSuccess = true;
                                return false; // break
                            }
                            if (notif.type === 'W' || notif.type === 'E') {
                                errorMsg = notif.message || '';
                            }
                        });
                    }

                    if (isSuccess) {
                        if (response.html && response.html.checkout_totals) {
                            var $totals = $(response.html.checkout_totals);

                            var $discountValueEl = $totals.find('.ut2-cart-statistic__item_subtotal-discount .ut2-cart-statistic__value');
                            if ($discountValueEl.length) {
                                var discountNum = $discountValueEl.find('span[id], span:not([class])').last().text().trim();

                                var $existingPrice = $('#cart_total').closest('.ty-price, span').parent().clone();

                                var $discountRow = $('.is2or-summary-row__value--discount').closest('.is2or-summary-row');
                                if ($discountRow.length) {
                                    $discountRow.find('.is2or-summary-row__value--discount #cart_total, .is2or-summary-row__value--discount span[id]').text(discountNum);
                                } else {
                                    var $subtotalPrice = $('.is2or-summary-row__value').first().html();
                                    var $tempDiv = $('<div>').html($subtotalPrice);
                                    $tempDiv.find('span').last().text(discountNum);

                                    var newRow = '<div class="is2or-summary-row">' +
                                        '<span class="is2or-summary-row__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("discount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>' +
                                        '<span class="is2or-summary-row__value is2or-summary-row__value--discount">-' + $tempDiv.html() + '</span>' +
                                        '</div>';
                                    $('.is2or-summary-divider').before(newRow);
                                }
                            }

                            // Update order total
                            var newTotalNum = $totals.find('#cart_total').text().trim();
                            if (newTotalNum) {
                                $('#cart_total').text(newTotalNum);
                            }

                            // Update shipping
                            var $newShippingEl = $totals.find('.ut2-cart-statistic__item_shipping-method .ut2-cart-statistic__value');
                            if ($newShippingEl.length) {
                                var shippingNum = $newShippingEl.find('span[id], span:not([class])').last().text().trim();
                                $('.is2or-summary-row').filter(function() {
                                    return $(this).find('.is2or-summary-row__label').text().trim().toLowerCase() === 'shipping';
                                }).find('.is2or-summary-row__value span').last().text(shippingNum);
                            }

                            // Update subtotal
                            var $newSubtotalEl = $totals.find('.ut2-cart-statistic_subtotal .ut2-cart-statistic__value');
                            if ($newSubtotalEl.length) {
                                var subtotalNum = $newSubtotalEl.find('span[id], span:not([class])').last().text().trim();
                                $('.is2or-summary-row__value').first().find('span').last().text(subtotalNum);
                            }
                        }

                        is2orShowMsg('success', '✓ Promo code applied successfully!');

                    } else {
                        _lastSubmittedCode = null;
                        var displayMsg = errorMsg
                            ? errorMsg
                            : 'Invalid or expired promo code.';
                        is2orShowMsg('error', displayMsg);
                    }
                },
                error: function() {
                    _lastSubmittedCode = null;
                    is2orShowMsg('error', 'Failed to apply promo code. Please try again.');
                },
                complete: function() {
                    _isLoading = false;
                    is2orSetBtnLoading(false);
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            var input = document.getElementById('is2or_coupon_input');
            var btn   = document.getElementById('is2or_coupon_apply_btn');

            if (!input || !btn) return;

            if (input.value.trim() !== '') {
                _lastSubmittedCode = input.value.trim();
                var discountRow = document.querySelector('.is2or-summary-row__value--discount');
                if (discountRow) {
                    is2orShowMsg('success', '✓ Promo code applied successfully!');
                }
            }

            btn.addEventListener('click', function() {
                is2orSubmitCoupon();
            });

            input.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    is2orSubmitCoupon();
                }
            });

            input.addEventListener('input', function() {
                if (input.value.trim() === '') {
                    _lastSubmittedCode = null;
                    is2orHideMsg();
                    // Hapus baris discount jika input dikosongkan
                    $('.is2or-summary-row__value--discount').closest('.is2or-summary-row').remove();
                }
            });
        });
    })();
    
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/js/tygh/checkout.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/js/tygh/checkout/lite_checkout.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/js/tygh/checkout/pickup_selector.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/js/tygh/checkout/pickup_search.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/js/tygh/search_pickup_points.js"><?php echo '</script'; ?>
>

<input type="hidden" 
       name="security_hash" 
       class="cm-no-hide-input" 
       value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_generate_security_hash')('')), ENT_QUOTES, 'UTF-8');?>
"
       form="litecheckout_payments_form" />
       
<!--litecheckout_form--></div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_checkout_page/overrides/blocks/grid_wrappers/abt__ut2_lite_checkout.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_checkout_page/overrides/blocks/grid_wrappers/abt__ut2_lite_checkout.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/abt__unitheme2/css/addons/is2or_checkout_page/checkout.css" />

<style>
/* ================================================================
   VENDOR SHIPPING BLOCK
================================================================ */

/* Wrapper antar vendor — beri jarak saat lebih dari 1 vendor */
.is2or-vendor-shipping {
    margin-top: 16px;
}
.is2or-vendor-shipping + .is2or-vendor-shipping {
    border-top: 1px solid #e8e8e8;
    padding-top: 16px;
    margin-top: 16px;
}

/* Label nama vendor */
.is2or-vendor-shipping__label {
    font-size: 13px;
    font-weight: 600;
    color: #555;
    margin-bottom: 8px;
    text-transform: uppercase;
    letter-spacing: 0.4px;
}

/* Error state pada selected header ketika belum pilih */
.is2or-shipping-selected--error {
    border: 1.5px solid #e53935 !important;
    border-radius: 8px;
}
.is2or-shipping-selected--error .is2or-shipping-selected__name--empty {
    color: #e53935;
}

/* Place Order button disabled */
.is2or-place-order-btn--disabled,
.is2or-place-order-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
    pointer-events: none;
}

/* ================================================================
   PROMO / COUPON INPUT ROW
================================================================ */

.is2or-promo-row {
    display: flex;
    gap: 8px;
    align-items: center;
}

.is2or-promo-input {
    flex: 1;
    min-width: 0;
}

.is2or-promo-apply-btn {
    flex-shrink: 0;
    padding: 0 18px;
    height: 38px;
    background: #f47b20;
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.2s;
    white-space: nowrap;
}
.is2or-promo-apply-btn:hover {
    background: #d9600a;
}
.is2or-promo-apply-btn:active {
    background: #c05509;
}

/* Feedback message bawah input */
.is2or-coupon-msg {
    margin-top: 6px;
    font-size: 12px;
    padding: 6px 10px;
    border-radius: 5px;
}
.is2or-coupon-msg--success {
    background: #e8f5e9;
    color: #2e7d32;
    border: 1px solid #a5d6a7;
}
.is2or-coupon-msg--error {
    background: #ffebee;
    color: #c62828;
    border: 1px solid #ef9a9a;
}
.is2or-promo-spinner {
    display: none;
    width: 16px;
    height: 16px;
    border: 2px solid #e0e0e0;
    border-top-color: #f47b20;
    border-radius: 50%;
    animation: is2or-spin 0.7s linear infinite;
    flex-shrink: 0;
}
.is2or-promo-spinner--visible {
    display: inline-block;
}
@keyframes is2or-spin {
    to { transform: rotate(360deg); }
}

.is2or-applied-promos {
    margin-top: 8px;
}

.is2or-applied-promo {
    display: flex;
    flex-direction: column;
    padding: 6px 10px;
    margin-top: 4px;
    background: #e8f5e9;
    border: 1px solid #a5d6a7;
    border-radius: 5px;
}

.is2or-applied-promo__name {
    font-size: 12px;
    font-weight: 600;
    color: #2e7d32;
}

.is2or-applied-promo__desc {
    font-size: 11px;
    color: #388e3c;
    margin-top: 2px;
}

</style>

<?php if (!$_smarty_tpl->getValue('auth')['user_id']) {?>
    <div id="litecheckout_login_block" class="hidden" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
        <div class="ty-login-popup">
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"popup",'id'=>"litecheckout_login_block_inner"), (int) 0, $_smarty_current_dir);
?>
        </div>
    </div>
<?php }?>

<div class="litecheckout litecheckout__form" id="litecheckout_form">
    <h1 class="litecheckout__page-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("checkout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h1>

    <div class="is2or-checkout-wrapper">

                <div class="is2or-checkout-left">

                        <?php if ($_smarty_tpl->getValue('cart')['user_data']) {?>
            <div class="row-fluid litecheckout__pm_sf">
                <div class="is2or-address-card">
                    <div class="is2or-address-card__icon">
                        <i class="ty-icon-location"></i>
                    </div>
                    <div class="is2or-address-card__body">
                        <div class="is2or-address-card__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("delivering_to", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
                        <?php if ($_smarty_tpl->getValue('cart')['user_data']['profile_name']) {?>
                            <div class="is2or-address-card__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cart')['user_data']['profile_name']), ENT_QUOTES, 'UTF-8');?>
</div>
                        <?php }?>
                        <?php if ($_smarty_tpl->getValue('cart')['user_data']['s_firstname'] || $_smarty_tpl->getValue('cart')['user_data']['s_lastname']) {?>
                            <?php $_smarty_tpl->assign('address_name', ((string)$_smarty_tpl->getValue('cart')['user_data']['s_firstname'])." ".((string)$_smarty_tpl->getValue('cart')['user_data']['s_lastname']), false, NULL);?>
                        <?php } elseif ($_smarty_tpl->getValue('cart')['user_data']['firstname'] || $_smarty_tpl->getValue('cart')['user_data']['lastname']) {?>
                            <?php $_smarty_tpl->assign('address_name', ((string)$_smarty_tpl->getValue('cart')['user_data']['firstname'])." ".((string)$_smarty_tpl->getValue('cart')['user_data']['lastname']), false, NULL);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->assign('address_name', '', false, NULL);?>
                        <?php }?>
                        <div class="is2or-address-card__detail">
                            <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_address'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_address'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>

                            <?php if ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_city'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_city'] ?? null : $tmp)) {?>
                                , <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_city'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_city'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                            <?php if ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_state'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_state'] ?? null : $tmp)) {?>
                                , <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_state'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_state'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                            <?php if ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_zipcode'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_zipcode'] ?? null : $tmp)) {?>
                                <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_zipcode'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_zipcode'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                            <?php if ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_country_descr'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_country_descr'] ?? null : $tmp)) {?>
                                , <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cart')['user_data']['s_country_descr'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('cart')['user_data']['b_country_descr'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        </div>
                        <?php if ($_smarty_tpl->getValue('cart')['user_data']['phone']) {?>
                            <div class="is2or-address-card__detail">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("recipient", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('address_name'))), ENT_QUOTES, 'UTF-8');?>

                            </div>
                            <div class="is2or-address-card__detail">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("phone", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cart')['user_data']['phone']), ENT_QUOTES, 'UTF-8');?>

                            </div>
                        <?php }?>
                    </div>
                    <?php if ($_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('allow_multiple_profiles')) {?>
                        <button type="button"
                                class="is2or-address-card__change"
                                onclick="is2orOpenAddressPopup()">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("change", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        </button>
                    <?php }?>
                </div>
            </div>
            <?php }?>

                        <div class="is2or-card" id="cart_items">
                <div class="is2or-order-header">
                    <span class="is2or-card__title" style="margin-bottom:0;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("your_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.cart")), ENT_QUOTES, 'UTF-8');?>
" class="is2or-order-edit">
                        <i class="ty-icon-edit"></i>&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("edit", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </a>
                </div>

                <div class="is2or-products-list">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart_products'), 'product', false, 'key');
$foreach76DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach76DoElse = false;
?>
                        <?php if (!$_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['parent']) {?>
                            <div class="is2or-product-item">
                                                                <div class="is2or-product-item__image">
                                    <?php if ($_smarty_tpl->getValue('product')['main_pair']) {?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('product')['main_pair'],'obj_id'=>$_smarty_tpl->getValue('product')['product_id'],'image_width'=>72,'image_height'=>72,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
                                    <?php }?>
                                </div>

                                                                <div class="is2or-product-item__info">
                                    <span class="is2or-product-item__name">
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo $_smarty_tpl->getValue('product')['product'];?>

                                        </a>
                                    </span>
                                    <?php if ($_smarty_tpl->getValue('product')['variation_features']) {?>
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features'], 'v_feature');
$foreach77DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v_feature')->value) {
$foreach77DoElse = false;
?>
                                            <div class="is2or-product-item__meta">
                                                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['description']), ENT_QUOTES, 'UTF-8');?>
: <b><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['variant']), ENT_QUOTES, 'UTF-8');?>
</b>
                                            </div>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('product')['product_options']) {?>
                                        <div class="is2or-product-item__meta">
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product')['product_options'],'no_block'=>true), (int) 0, $_smarty_current_dir);
?>
                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('product')['company_name']) {?>
                                        <div class="is2or-product-item__meta">
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['company_name']), ENT_QUOTES, 'UTF-8');?>

                                        </div>
                                    <?php }?>
                                </div>

                                                                <div class="is2or-product-item__pricing">
                                    <span class="is2or-product-item__unit">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("unit_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price']), (int) 0, $_smarty_current_dir);
?>
                                    </span>
                                    <span class="is2or-product-item__qty">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("quantity", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>

                                    </span>
                                    <span class="is2or-product-item__subtotal">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_subtotal']), (int) 0, $_smarty_current_dir);
?>
                                    </span>
                                </div>

                                                                <?php if (!$_smarty_tpl->getValue('product')['exclude_from_calculate']) {?>
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.delete?cart_id=".((string)$_smarty_tpl->getValue('key'))."&redirect_mode=checkout")), ENT_QUOTES, 'UTF-8');?>
"
                                       class="is2or-product-item__remove cm-ajax"
                                       data-ca-target-id="cart_items,checkout_totals,cart_status*"
                                       title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("remove", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                        <i class="ty-icon-cancel-circle"></i>
                                    </a>
                                <?php }?>
                            </div>
                        <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
            </div>

                        <?php if ($_smarty_tpl->getValue('cart')['shipping_required']) {?>
            <div class="is2or-card" id="shipping_rates_list">
                <span class="is2or-card__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("choose_delivery_option", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>

                <input type="hidden"
                    name="additional_result_ids[]"
                    value="litecheckout_final_section,litecheckout_step_payment,checkout*"
                    form="litecheckout_payments_form"
                />

                
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_groups'), 'group', false, 'group_key');
$foreach78DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group_key')->value => $_smarty_tpl->getVariable('group')->value) {
$foreach78DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('group')['shipping_by_marketplace']) {
continue 1;
}?>
                    <?php if (!$_smarty_tpl->getValue('group')['shippings'] || $_smarty_tpl->getValue('group')['all_edp_free_shipping'] || $_smarty_tpl->getValue('group')['shipping_no_required']) {
continue 1;
}?>

                                        <?php $_smarty_tpl->assign('v_cat_instant', array(), false, NULL);?>
                    <?php $_smarty_tpl->assign('v_cat_sameday', array(), false, NULL);?>
                    <?php $_smarty_tpl->assign('v_cat_regular', array(), false, NULL);?>
                    <?php $_smarty_tpl->assign('v_cat_bulky', array(), false, NULL);?>

                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('all_shippings')[$_smarty_tpl->getValue('group_key')], 'item', false, 'shipping_id');
$foreach79DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shipping_id')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach79DoElse = false;
?>
                        <?php if ($_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('shipping_id')]) {?>
                            <?php $_smarty_tpl->assign('s', $_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('shipping_id')], false, NULL);?>
                            <?php $_tmp_array = $_smarty_tpl->getValue('s') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping'] = $_smarty_tpl->getValue('item')['shipping'];
$_smarty_tpl->assign('s', $_tmp_array, false, NULL);?>
                            <?php if (!$_smarty_tpl->getValue('s')['delivery_time'] && $_smarty_tpl->getValue('s')['service_delivery_time']) {?>
                                <?php $_tmp_array = $_smarty_tpl->getValue('s') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['delivery_time'] = $_smarty_tpl->getValue('s')['service_delivery_time'];
$_smarty_tpl->assign('s', $_tmp_array, false, NULL);?>
                            <?php }?>
                            <?php $_tmp_array = $_smarty_tpl->getValue('s') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['group_key'] = $_smarty_tpl->getValue('group_key');
$_smarty_tpl->assign('s', $_tmp_array, false, NULL);?>

                                                        <?php if ($_smarty_tpl->getValue('s')['service_code'] == "sameDay") {?>
                                <?php $_smarty_tpl->assign('dt_lower', mb_strtolower((string) $_smarty_tpl->getValue('s')['delivery_time'], 'UTF-8'), false, NULL);?>
                                <?php if (($_smarty_tpl->getSmarty()->getModifierCallback('strstr')("hour",$_smarty_tpl->getValue('dt_lower')) || $_smarty_tpl->getSmarty()->getModifierCallback('strstr')("hr",$_smarty_tpl->getValue('dt_lower')))) {?>
                                    <?php $_smarty_tpl->assign('dt_num', $_smarty_tpl->getSmarty()->getModifierCallback('regex_replace')($_smarty_tpl->getValue('s')['delivery_time'],"/[^0-9].*/",''), false, NULL);?>
                                    <?php if ($_smarty_tpl->getValue('dt_num') <= 4) {?>
                                        <?php $_tmp_array = $_smarty_tpl->getValue('v_cat_instant') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('s');
$_smarty_tpl->assign('v_cat_instant', $_tmp_array, false, NULL);?>
                                    <?php } else { ?>
                                        <?php $_tmp_array = $_smarty_tpl->getValue('v_cat_sameday') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('s');
$_smarty_tpl->assign('v_cat_sameday', $_tmp_array, false, NULL);?>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php $_tmp_array = $_smarty_tpl->getValue('v_cat_sameday') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('s');
$_smarty_tpl->assign('v_cat_sameday', $_tmp_array, false, NULL);?>
                                <?php }?>
                            <?php } elseif ($_smarty_tpl->getValue('s')['service_code'] == "heavyAndBulky") {?>
                                <?php $_tmp_array = $_smarty_tpl->getValue('v_cat_bulky') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('s');
$_smarty_tpl->assign('v_cat_bulky', $_tmp_array, false, NULL);?>
                            <?php } elseif ($_smarty_tpl->getValue('s')['service_code'] == "express") {?>
                                <?php $_tmp_array = $_smarty_tpl->getValue('v_cat_regular') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('s');
$_smarty_tpl->assign('v_cat_regular', $_tmp_array, false, NULL);?>
                            <?php } else { ?>
                                <?php $_tmp_array = $_smarty_tpl->getValue('v_cat_regular') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->getValue('s');
$_smarty_tpl->assign('v_cat_regular', $_tmp_array, false, NULL);?>
                            <?php }?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        <?php $_smarty_tpl->assign('v_chosen', null, false, NULL);?>
                    <?php if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')] && $_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')]]) {?>
                        <?php $_smarty_tpl->assign('v_chosen', $_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')]], false, NULL);?>
                        <?php $_tmp_array = $_smarty_tpl->getValue('v_chosen') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping'] = $_smarty_tpl->getValue('all_shippings')[$_smarty_tpl->getValue('group_key')][$_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')]]['shipping'];
$_smarty_tpl->assign('v_chosen', $_tmp_array, false, NULL);?>
                        <?php if (!$_smarty_tpl->getValue('v_chosen')['delivery_time'] && $_smarty_tpl->getValue('v_chosen')['service_delivery_time']) {?>
                            <?php $_tmp_array = $_smarty_tpl->getValue('v_chosen') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['delivery_time'] = $_smarty_tpl->getValue('v_chosen')['service_delivery_time'];
$_smarty_tpl->assign('v_chosen', $_tmp_array, false, NULL);?>
                        <?php }?>
                    <?php }?>

                                        <?php if ($_smarty_tpl->getValue('v_cat_regular')) {?>
                        <?php $_smarty_tpl->assign('v_default_cat', "regular", false, NULL);?>
                    <?php } elseif ($_smarty_tpl->getValue('v_cat_sameday')) {?>
                        <?php $_smarty_tpl->assign('v_default_cat', "sameday", false, NULL);?>
                    <?php } elseif ($_smarty_tpl->getValue('v_cat_instant')) {?>
                        <?php $_smarty_tpl->assign('v_default_cat', "instant", false, NULL);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->assign('v_default_cat', "bulky", false, NULL);?>
                    <?php }?>

                                        <?php $_smarty_tpl->assign('v_company_name', (($tmp = (($tmp = $_smarty_tpl->getValue('group')['company_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('group')['name'] ?? null : $tmp) ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);?>

                                        <div class="is2or-vendor-shipping"
                         id="is2or_vendor_shipping_<?php echo $_smarty_tpl->getValue('group_key');?>
"
                         data-group-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
">

                                                <div class="is2or-vendor-shipping__label"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_company_name')), ENT_QUOTES, 'UTF-8');?>
</div>

                                                <div class="is2or-shipping-selected"
                             id="is2or_shipping_selected_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
"
                             onclick="is2orToggleVendorDropdown('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
')">
                            <div class="is2or-shipping-selected__row">
                                <div class="is2or-shipping-selected__left">
                                    <?php if ($_smarty_tpl->getValue('v_chosen')) {?>
                                        <?php if ($_smarty_tpl->getValue('v_chosen')['image']) {?>
                                            <div class="is2or-shipping-selected__logo">
                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('v_chosen')['shipping_id'],'images'=>$_smarty_tpl->getValue('v_chosen')['image'],'image_width'=>40,'image_height'=>20), (int) 0, $_smarty_current_dir);
?>
                                            </div>
                                        <?php }?>
                                        <div class="is2or-shipping-selected__info">
                                            <div class="is2or-shipping-selected__name"
                                                 id="is2or_vship_name_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_chosen')['shipping']), ENT_QUOTES, 'UTF-8');?>

                                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('v_chosen')['rate'])) {?>
                                                    (<?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('v_chosen')['rate']), (int) 0, $_smarty_current_dir);
?>)
                                                <?php }?>
                                            </div>
                                            <?php if ($_smarty_tpl->getValue('v_chosen')['delivery_time']) {?>
                                                <div class="is2or-shipping-selected__eta"
                                                     id="is2or_vship_eta_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
">
                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("estimated_delivery", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_chosen')['delivery_time']), ENT_QUOTES, 'UTF-8');?>

                                                </div>
                                            <?php }?>
                                        </div>
                                    <?php } else { ?>
                                        <div class="is2or-shipping-selected__info">
                                            <div class="is2or-shipping-selected__name is2or-shipping-selected__name--empty"
                                                 id="is2or_vship_name_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_shipping_method", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                            </div>
                                            <div class="is2or-shipping-selected__eta"
                                                 id="is2or_vship_eta_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
"></div>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="is2or-shipping-selected__chevron"
                                     id="is2or_shipping_chevron_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
">▾</div>
                            </div>
                        </div>

                                                <div class="is2or-shipping-dropdown"
                             id="is2or_shipping_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
"
                             style="display:none;">

                                                        <div class="is2or-shipping-cats">
                                <?php if ($_smarty_tpl->getValue('v_cat_instant')) {?>
                                    <button type="button"
                                            class="is2or-shipping-cat-btn<?php if ($_smarty_tpl->getValue('v_default_cat') == 'instant') {?> is2or-shipping-cat-btn--active<?php }?>"
                                            onclick="is2orShowVendorCat('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
', 'instant')">
                                        ⚡ <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("instant", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </button>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('v_cat_sameday')) {?>
                                    <button type="button"
                                            class="is2or-shipping-cat-btn<?php if ($_smarty_tpl->getValue('v_default_cat') == 'sameday') {?> is2or-shipping-cat-btn--active<?php }?>"
                                            onclick="is2orShowVendorCat('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
', 'sameday')">
                                        🕐 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("same_day", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </button>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('v_cat_regular')) {?>
                                    <button type="button"
                                            class="is2or-shipping-cat-btn<?php if ($_smarty_tpl->getValue('v_default_cat') == 'regular') {?> is2or-shipping-cat-btn--active<?php }?>"
                                            onclick="is2orShowVendorCat('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
', 'regular')">
                                        📦 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("regular", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </button>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('v_cat_bulky')) {?>
                                    <button type="button"
                                            class="is2or-shipping-cat-btn<?php if ($_smarty_tpl->getValue('v_default_cat') == 'bulky') {?> is2or-shipping-cat-btn--active<?php }?>"
                                            onclick="is2orShowVendorCat('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
', 'bulky')">
                                        🏗 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bulky_shipping", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </button>
                                <?php }?>
                            </div>

                                                        <?php if ($_smarty_tpl->getValue('v_cat_instant')) {?>
                                <div class="is2or-shipping-cat-list"
                                     id="is2or_vcat_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
_instant"
                                     style="<?php if ($_smarty_tpl->getValue('v_default_cat') != 'instant') {?>display:none;<?php }?>">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('v_cat_instant'), 's');
$foreach80DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach80DoElse = false;
?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_checkout_page/components/shipping_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping'=>$_smarty_tpl->getValue('s')), (int) 0, $_smarty_current_dir);
?>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>

                                                        <?php if ($_smarty_tpl->getValue('v_cat_sameday')) {?>
                                <div class="is2or-shipping-cat-list"
                                     id="is2or_vcat_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
_sameday"
                                     style="<?php if ($_smarty_tpl->getValue('v_default_cat') != 'sameday') {?>display:none;<?php }?>">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('v_cat_sameday'), 's');
$foreach81DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach81DoElse = false;
?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_checkout_page/components/shipping_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping'=>$_smarty_tpl->getValue('s')), (int) 0, $_smarty_current_dir);
?>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>

                                                        <?php if ($_smarty_tpl->getValue('v_cat_regular')) {?>
                                <div class="is2or-shipping-cat-list"
                                     id="is2or_vcat_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
_regular"
                                     style="<?php if ($_smarty_tpl->getValue('v_default_cat') != 'regular') {?>display:none;<?php }?>">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('v_cat_regular'), 's');
$foreach82DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach82DoElse = false;
?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_checkout_page/components/shipping_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping'=>$_smarty_tpl->getValue('s')), (int) 0, $_smarty_current_dir);
?>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>

                                                        <?php if ($_smarty_tpl->getValue('v_cat_bulky')) {?>
                                <div class="is2or-shipping-cat-list"
                                     id="is2or_vcat_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
_bulky"
                                     style="<?php if ($_smarty_tpl->getValue('v_default_cat') != 'bulky') {?>display:none;<?php }?>">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('v_cat_bulky'), 's');
$foreach83DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value) {
$foreach83DoElse = false;
?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_checkout_page/components/shipping_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping'=>$_smarty_tpl->getValue('s')), (int) 0, $_smarty_current_dir);
?>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>

                        </div>
                        
                    </div>
                    
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                
            </div>
            <?php }?>            

                        <div data-ca-lite-checkout-element="form">
                <form name="litecheckout_payments_form"
                    id="litecheckout_payments_form"
                    action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.place_order")), ENT_QUOTES, 'UTF-8');?>
"
                    method="post"
                    data-ca-lite-checkout-element="checkout-form"
                    data-ca-lite-checkout-ready-for-checkout="false"
                    class="litecheckout__payment-methods">
                    <input type="hidden" value="1" name="ship_to_another"
                        data-ca-lite-checkout-field="ship_to_another"
                        data-ca-lite-checkout-auto-save-on-change="true">
                    <input type="hidden" name="dispatch" value="checkout.place_order" />
                    <input type="hidden" name="security_hash" class="cm-no-hide-input" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_generate_security_hash')('')), ENT_QUOTES, 'UTF-8');?>
" />
                    <div style="display:none;"><?php echo $_smarty_tpl->getValue('content');?>
</div>
                </form>
            </div>

        </div>
        

                <div class="is2or-checkout-right">

                
            <div class="row-fluid litecheckout__pm_sf">
                                <?php if ($_smarty_tpl->getValue('payment_methods')) {?>
                    <div style="border-bottom: 2px solid #c2c2c2; padding-bottom: 20px;">
                        <span class="is2or-card__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("pay_with", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>

                                                <?php $_smarty_tpl->assign('active_gateway', "cc", false, NULL);?>

                                                <div class="is2or-gateway-selected" id="is2or_gateway_selected" onclick="is2orToggleGatewayDropdown()">
                            <div class="is2or-gateway-selected__inner">
                                <div class="is2or-gateway-selected__logos" id="is2or_gateway_logos">
                                                                        <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/mastercard-logo.png" height="19" />
                                </div>
                                <div class="is2or-gateway-selected__name" id="is2or_gateway_name">Master Card</div>
                            </div>
                            <div class="is2or-gateway-selected__chevron" id="is2or_gateway_chevron">▾</div>
                        </div>

                                                <div class="is2or-gateway-dropdown" id="is2or_gateway_dropdown" style="display:none;">
                            
                                                        <label class="is2or-gateway-item is2or-gateway-item--active" onclick="is2orSelectGateway('cc', 'Visa', ['visa-logo.png'])">
                                <input type="radio" 
                                    name="payment_data[aps][gateway]" 
                                    value="cc"
                                    form="litecheckout_payments_form"
                                    checked
                                    style="display:none;" />
                                <div class="is2or-gateway-item__logos">
                                    <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/visa-logo.png" height="19" />
                                </div>
                                <div class="is2or-gateway-item__name">Visa</div>
                            </label>

                            <label class="is2or-gateway-item" onclick="is2orSelectGateway('cc', 'Master Card', ['mastercard-logo.png'])">
                                <input type="radio" 
                                    name="payment_data[aps][gateway]" 
                                    value="cc"
                                    form="litecheckout_payments_form"
                                    style="display:none;" />
                                <div class="is2or-gateway-item__logos">
                                    <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/mastercard-logo.png" height="19" />
                                </div>
                                <div class="is2or-gateway-item__name">MasterCard</div>
                            </label>

                            <label class="is2or-gateway-item" onclick="is2orSelectGateway('cc', 'American Express', ['amex-logo.png'])">
                                <input type="radio" 
                                    name="payment_data[aps][gateway]" 
                                    value="cc"
                                    form="litecheckout_payments_form"
                                    style="display:none;" />
                                <div class="is2or-gateway-item__logos">
                                    <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/amex-logo.png" height="19" />
                                </div>
                                <div class="is2or-gateway-item__name">American Express</div>
                            </label>

                            <label class="is2or-gateway-item" onclick="is2orSelectGateway('cc', 'Mada', ['mada-logo.png'])">
                                <input type="radio" 
                                    name="payment_data[aps][gateway]" 
                                    value="cc"
                                    form="litecheckout_payments_form"
                                    style="display:none;" />
                                <div class="is2or-gateway-item__logos">
                                    <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/mada-logo.png" height="19" />
                                </div>
                                <div class="is2or-gateway-item__name">Mada</div>
                            </label>

                        </div>

                        <select style="display:none;"
                                data-ca-lite-checkout-field="payment_id"
                                data-ca-lite-checkout-auto-save-on-change="true"
                                form="litecheckout_payments_form"
                                name="payment_id">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'payment');
$foreach84DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment')->value) {
$foreach84DoElse = false;
?>
                                <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->getValue('payment')['payment_id'] == $_smarty_tpl->getValue('cart')['payment_id']) {?>selected<?php }?>>
                                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment']), ENT_QUOTES, 'UTF-8');?>

                                </option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>

                    </div>
                <?php }?>

                                <?php if ($_smarty_tpl->getValue('cart')['coupons']) {?>
                    <?php $_smarty_tpl->assign('coupon_keys', $_smarty_tpl->getSmarty()->getModifierCallback('array_keys')($_smarty_tpl->getValue('cart')['coupons']), false, NULL);?>
                    <?php $_smarty_tpl->assign('coupon_str', $_smarty_tpl->getSmarty()->getModifierCallback('implode')(", ",$_smarty_tpl->getValue('coupon_keys')), false, NULL);?>
                <?php }?>
                <div style="border-bottom: 2px solid #c2c2c2; padding-bottom: 20px; padding-top: 20px;">
                    <span class="is2or-card__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("use_promo", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    <div class="is2or-promo-row">
                        <input type="text"
                            id="is2or_coupon_input"
                            name="coupon_code"
                            class="is2or-promo-input cm-hint"
                            placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("insert_promotion_code", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
                            value="<?php if ($_smarty_tpl->getValue('cart')['coupons']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('coupon_str')), ENT_QUOTES, 'UTF-8');
}?>" />
                        <button type="button"
                                id="is2or_coupon_apply_btn"
                                class="is2or-promo-apply-btn">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("apply", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        </button>
                        <span id="is2or_coupon_spinner" class="is2or-promo-spinner"></span>
                    </div>
                    <div id="is2or_coupon_msg" class="is2or-coupon-msg" style="display:none;"></div>
                                        <?php if ($_smarty_tpl->getValue('cart')['applied_promotions']) {?>
                        <div class="is2or-applied-promos">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['applied_promotions'], 'promo');
$foreach85DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('promo')->value) {
$foreach85DoElse = false;
?>
                                <div class="is2or-applied-promo">
                                    <span class="is2or-applied-promo__name">✓ <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('promo')['name']), ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('promo')['detailed_description'])) {?>
                                        <span class="is2or-applied-promo__desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('promo')['detailed_description']);?>
</span>
                                    <?php }?>
                                </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                </div>

                                <div style="padding-bottom: 20px; padding-top: 20px;">
                    <span class="is2or-card__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_summary", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    <div class="is2or-summary-rows">

                                                <div class="is2or-summary-row">
                            <span class="is2or-summary-row__label">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("amount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 (<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cart')['amount']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('cart')['amount'] == 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("item", [], $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("items", [], $_smarty_tpl->getSmarty()->getLanguage());
}?>)
                            </span>
                            <span class="is2or-summary-row__value">
                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['display_subtotal']), (int) 0, $_smarty_current_dir);
?>
                            </span>
                        </div>

                                                <?php if ($_smarty_tpl->getValue('cart')['shipping_required']) {?>
                            <div class="is2or-summary-row">
                                <span class="is2or-summary-row__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                <span class="is2or-summary-row__value">
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('cart')['display_shipping_cost'])) {?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['display_shipping_cost']), (int) 0, $_smarty_current_dir);
?>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("free", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    <?php }?>
                                </span>
                            </div>
                        <?php }?>

                                                <?php if ($_smarty_tpl->getValue('cart')['taxes']) {?>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['taxes'], 'tax');
$foreach86DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tax')->value) {
$foreach86DoElse = false;
?>
                                <div class="is2or-summary-row">
                                    <span class="is2or-summary-row__label">
                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tax')['description']), ENT_QUOTES, 'UTF-8');?>

                                        <?php if ($_smarty_tpl->getValue('tax')['price_includes_tax'] == "Y") {?> (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("included", [], $_smarty_tpl->getSmarty()->getLanguage());?>
)<?php }?>
                                    </span>
                                    <span class="is2or-summary-row__value">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('tax')['tax_subtotal']), (int) 0, $_smarty_current_dir);
?>
                                    </span>
                                </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php }?>

                                                <?php if ($_smarty_tpl->getValue('cart')['payment_surcharge'] && !$_smarty_tpl->getValue('take_surcharge_from_vendor')) {?>
                            <div class="is2or-summary-row">
                                <span class="is2or-summary-row__label">
                                    <?php echo (($tmp = $_smarty_tpl->getValue('cart')['payment_surcharge_title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("payment_surcharge", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>

                                </span>
                                <span class="is2or-summary-row__value">
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['payment_surcharge']), (int) 0, $_smarty_current_dir);
?>
                                </span>
                            </div>
                        <?php }?>

                                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('cart')['subtotal_discount'])) {?>
                            <div class="is2or-summary-row">
                                <span class="is2or-summary-row__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("discount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                <span class="is2or-summary-row__value is2or-summary-row__value--discount">
                                    -<?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['subtotal_discount']), (int) 0, $_smarty_current_dir);
?>
                                </span>
                            </div>
                        <?php }?>

                                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:summary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:summary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                        <div class="is2or-summary-divider" style="border-bottom: 1px solid #c2c2c2; padding-bottom: 5px;"></div>

                                                <div class="is2or-summary-total">
                            <span class="is2or-summary-total__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("order_total", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                            <span class="is2or-summary-total__value">
                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('cart')['total'],'span_id'=>"cart_total",'class'=>"ty-price"), (int) 0, $_smarty_current_dir);
?>
                            </span>
                        </div>

                    </div>
                </div>

                                <div>
                    <button type="submit"
                            form="litecheckout_payments_form"
                            class="is2or-place-order-btn"
                            style="border-radius:30px"
                            data-ca-lite-checkout-element="place-order-button">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("place_order", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </button>
                    <div class="is2or-place-order-terms">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("by_placing_order_agree", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['http_location']), ENT_QUOTES, 'UTF-8');?>
/terms-of-use" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("terms_and_conditions", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    
        <?php if ($_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('allow_multiple_profiles')) {?>
    <div id="is2or_address_popup" class="is2or-popup-overlay" style="display:none;" onclick="is2orCloseAddressPopupOutside(event)">
        <div class="is2or-popup">
            <div class="is2or-popup__header">
                <h2 class="is2or-popup__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("change_delivery_address", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h2>
                <button type="button" class="is2or-popup__close" onclick="is2orCloseAddressPopup()">
                    <i class="ty-icon-cancel"></i>
                </button>
            </div>
            <div class="is2or-popup__body">

                                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.update_profile")), ENT_QUOTES, 'UTF-8');?>
"
                class="is2or-popup__add-btn cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close"
                data-ca-target-id="create_user_profile"
                data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("create_profile", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("add_new_address", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                </a>

                                <div class="is2or-address-list">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user_profiles'), 'profile');
$foreach87DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('profile')->value) {
$foreach87DoElse = false;
?>
                        <div class="is2or-address-item <?php if ($_smarty_tpl->getValue('profile')['profile_id'] == $_smarty_tpl->getValue('cart')['profile_id']) {?>is2or-address-item--selected<?php }?>"
                            id="is2or_profile_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
">
                            <div class="is2or-address-item__body">
                                <?php if ($_smarty_tpl->getValue('profile')['profile_name']) {?>
                                    <div class="is2or-address-item__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_name']), ENT_QUOTES, 'UTF-8');?>
</div>
                                <?php }?>
                                <div class="is2or-address-item__detail">
                                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_address']), ENT_QUOTES, 'UTF-8');?>

                                    <?php if ($_smarty_tpl->getValue('profile')['s_city']) {?>, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_city']), ENT_QUOTES, 'UTF-8');
}?>
                                    <?php if ($_smarty_tpl->getValue('profile')['s_state_descr']) {?>, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_state_descr']), ENT_QUOTES, 'UTF-8');
}?>
                                    <?php if ($_smarty_tpl->getValue('profile')['s_zipcode']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_zipcode']), ENT_QUOTES, 'UTF-8');
}?>
                                    <?php if ($_smarty_tpl->getValue('profile')['s_country_descr']) {?>, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_country_descr']), ENT_QUOTES, 'UTF-8');
}?>
                                </div>
                                <?php if ($_smarty_tpl->getValue('profile')['s_firstname'] || $_smarty_tpl->getValue('profile')['s_lastname']) {?>
                                    <div class="is2or-address-item__meta">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("recipient", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_firstname']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['s_lastname']), ENT_QUOTES, 'UTF-8');?>

                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('profile')['phone']) {?>
                                    <div class="is2or-address-item__meta">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("phone", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['phone']), ENT_QUOTES, 'UTF-8');?>

                                    </div>
                                <?php }?>
                                <div class="is2or-address-item__actions">
                                    <a class="is2or-address-item__edit cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close"
                                    href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.update_profile?profile_id=".((string)$_smarty_tpl->getValue('profile')['profile_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-target-id="edit_user_profile_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("editing_profile_name", array('[name]'=>$_smarty_tpl->getValue('profile')['profile_name']), $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("edit_address", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </a>
                                    <?php if ($_smarty_tpl->getValue('profile')['profile_id'] != $_smarty_tpl->getValue('cart')['profile_id']) {?>
                                        <a class="is2or-address-item__delete cm-confirm"
                                        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.delete_profile?profile_id=".((string)$_smarty_tpl->getValue('profile')['profile_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("delete", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                        </a>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="is2or-address-item__right">
                                <?php if ($_smarty_tpl->getValue('profile')['profile_id'] == $_smarty_tpl->getValue('cart')['profile_id']) {?>
                                    <span class="is2or-address-item__selected-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("selected", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                <?php } else { ?>
                                    <button type="button"
                                            class="is2or-address-item__choose-btn"
                                            onclick="is2orSelectProfile(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('profile')['profile_id']), ENT_QUOTES, 'UTF-8');?>
)">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("choose", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </button>
                                <?php }?>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>

            </div>
        </div>
    </div>
    <?php }?>

<?php echo '<script'; ?>
>
    // ================================================================
    // PER-VENDOR SHIPPING FUNCTIONS
    // ================================================================

    /**
     * Toggle dropdown untuk vendor tertentu.
     * Menutup dropdown vendor lain yang sedang terbuka.
     */
    function is2orToggleVendorDropdown(groupKey) {
        var dropdown = document.getElementById('is2or_shipping_dropdown_' + groupKey);
        var chevron  = document.getElementById('is2or_shipping_chevron_' + groupKey);
        if (!dropdown) return;

        var isOpen = dropdown.style.display !== 'none';

        // Tutup semua dropdown vendor lain
        document.querySelectorAll('.is2or-shipping-dropdown').forEach(function(d) {
            d.style.display = 'none';
        });
        document.querySelectorAll('[id^="is2or_shipping_chevron_"]').forEach(function(c) {
            c.classList.remove('is2or-shipping-selected__chevron--open');
        });

        // Toggle dropdown ini
        if (!isOpen) {
            dropdown.style.display = 'block';
            chevron.classList.add('is2or-shipping-selected__chevron--open');
        }
    }

    /**
     * Tampilkan kategori tertentu di dalam dropdown vendor.
     * Hanya mempengaruhi elemen di dalam vendor block yang sama.
     */
    function is2orShowVendorCat(groupKey, cat) {
        var dropdownEl = document.getElementById('is2or_shipping_dropdown_' + groupKey);
        if (!dropdownEl) return;

        // Sembunyikan semua cat-list dalam vendor ini
        dropdownEl.querySelectorAll('.is2or-shipping-cat-list').forEach(function(l) {
            l.style.display = 'none';
        });

        // Non-aktifkan semua tombol dalam vendor ini
        dropdownEl.querySelectorAll('.is2or-shipping-cat-btn').forEach(function(b) {
            b.classList.remove('is2or-shipping-cat-btn--active');
        });

        // Tampilkan list yang dipilih
        var target = document.getElementById('is2or_vcat_' + groupKey + '_' + cat);
        if (target) target.style.display = 'flex';

        // Aktifkan tombol yang diklik
        var activeBtn = dropdownEl.querySelector('[onclick="is2orShowVendorCat(\'' + groupKey + '\', \'' + cat + '\')"]');
        if (activeBtn) activeBtn.classList.add('is2or-shipping-cat-btn--active');
    }

    /**
     * Pilih shipping untuk vendor tertentu.
     * - Check radio button
     * - Update tampilan "selected" di header dropdown
     * - Update styling item aktif
     * - Recalculate CS-Cart shipping cost
     * - Tutup dropdown vendor ini
     * - Cek validasi semua vendor
     */
    function is2orSelectShipping(shippingId, groupKey) {
        var radio = document.getElementById('sh_' + groupKey + '_' + shippingId);
        if (radio) {
            radio.checked = true;
            radio.dispatchEvent(new Event('change', { bubbles: true }));
            fn_calculate_total_shipping_cost();
        }

        // Update active class pada shipping item di vendor ini
        var dropdown = document.getElementById('is2or_shipping_dropdown_' + groupKey);
        if (dropdown) {
            dropdown.querySelectorAll('.is2or-shipping-item').forEach(function(item) {
                item.classList.remove('is2or-shipping-item--active');
            });
            var activeLabel = dropdown.querySelector('label[for="sh_' + groupKey + '_' + shippingId + '"], label:has(#sh_' + groupKey + '_' + shippingId + ')');
            // Fallback: cari via radio parent
            if (!activeLabel && radio) {
                activeLabel = radio.closest('.is2or-shipping-item');
            }
            if (activeLabel) activeLabel.classList.add('is2or-shipping-item--active');
        }

        // Update teks display di header selected
        var nameEl = document.getElementById('is2or_vship_name_' + groupKey);
        var etaEl  = document.getElementById('is2or_vship_eta_' + groupKey);
        if (nameEl && radio) {
            var itemEl = radio.closest('.is2or-shipping-item');
            if (itemEl) {
                var itemNameEl  = itemEl.querySelector('.is2or-shipping-item__name');
                var itemEtaEl   = itemEl.querySelector('.is2or-shipping-item__eta');
                var itemPriceEl = itemEl.querySelector('.is2or-shipping-item__price');

                var shippingName  = itemNameEl  ? itemNameEl.textContent.trim()  : '';
                var shippingPrice = itemPriceEl ? itemPriceEl.textContent.trim() : '';

                nameEl.textContent = shippingName + (shippingPrice ? ' (' + shippingPrice + ')' : '');
                nameEl.classList.remove('is2or-shipping-selected__name--empty');

                if (etaEl) {
                    etaEl.textContent = itemEtaEl ? itemEtaEl.textContent.trim() : '';
                }
            }
        }

        // Tutup dropdown setelah memilih
        setTimeout(function() {
            var dd = document.getElementById('is2or_shipping_dropdown_' + groupKey);
            var ch = document.getElementById('is2or_shipping_chevron_' + groupKey);
            if (dd) dd.style.display = 'none';
            if (ch) ch.classList.remove('is2or-shipping-selected__chevron--open');
        }, 250);

        // Validasi semua vendor sudah dipilih
        is2orValidateAllVendorShipping();
    }

    /**
     * Validasi bahwa setiap vendor sudah memiliki shipping yang dipilih.
     * Jika ada yang belum, tampilkan indikator error dan disable Place Order button.
     */
    function is2orValidateAllVendorShipping() {
        var vendorBlocks = document.querySelectorAll('.is2or-vendor-shipping');
        var allSelected = true;

        vendorBlocks.forEach(function(block) {
            var groupKey = block.getAttribute('data-group-key');
            var radios   = block.querySelectorAll('input[type="radio"][name="shipping_ids[' + groupKey + ']"]');
            var isChecked = false;
            radios.forEach(function(r) { if (r.checked) isChecked = true; });

            var selectedEl = document.getElementById('is2or_shipping_selected_' + groupKey);
            if (isChecked) {
                if (selectedEl) selectedEl.classList.remove('is2or-shipping-selected--error');
            } else {
                if (selectedEl) selectedEl.classList.add('is2or-shipping-selected--error');
                allSelected = false;
            }
        });

        // Enable / disable Place Order button
        var placeOrderBtn = document.querySelector('[data-ca-lite-checkout-element="place-order-button"]');
        if (placeOrderBtn) {
            if (allSelected) {
                placeOrderBtn.disabled = false;
                placeOrderBtn.classList.remove('is2or-place-order-btn--disabled');
            } else {
                placeOrderBtn.disabled = true;
                placeOrderBtn.classList.add('is2or-place-order-btn--disabled');
            }
        }

        return allSelected;
    }

    /**
     * Intercept Place Order submit — blokir jika ada vendor yang belum pilih shipping.
     */
    document.addEventListener('DOMContentLoaded', function() {
        // Jalankan validasi awal saat halaman load
        is2orValidateAllVendorShipping();

        var placeOrderBtn = document.querySelector('[data-ca-lite-checkout-element="place-order-button"]');
        if (placeOrderBtn) {
            placeOrderBtn.addEventListener('click', function(e) {
                if (!is2orValidateAllVendorShipping()) {
                    e.preventDefault();
                    e.stopImmediatePropagation();

                    // Scroll ke vendor pertama yang belum pilih shipping
                    var errorEl = document.querySelector('.is2or-shipping-selected--error');
                    if (errorEl) {
                        errorEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                    return false;
                }
            }, true); // capture phase agar jalan sebelum CS-Cart handler
        }
    });

    function is2orOpenAddressPopup() {
        document.getElementById('is2or_address_popup').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function is2orCloseAddressPopup() {
        document.getElementById('is2or_address_popup').style.display = 'none';
        document.body.style.overflow = '';
    }

    function is2orCloseAddressPopupOutside(event) {
        if (event.target === document.getElementById('is2or_address_popup')) {
            is2orCloseAddressPopup();
        }
    }

    function is2orSelectProfile(profileId) {
        // Submit form to select profile via CS-Cart mechanism
        var form = document.createElement('form');
        form.method = 'post';
        form.action = '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
';

        var fields = {
            'dispatch': 'checkout.checkout',
            'profile_id': profileId,
            'result_ids': 'checkout*,cart_status*'
        };

        for (var key in fields) {
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = key;
            input.value = fields[key];
            form.appendChild(input);
        }

        document.body.appendChild(form);
        form.submit();
    }

    document.addEventListener('DOMContentLoaded', function() {
        document.addEventListener('submit', function(e) {
            var form = e.target;
            if (form.id === 'is2or_profile_form') {
                var billingWrapper = form.querySelector('.billing_address_fields');
                if (billingWrapper) {
                    var hiddenParent = billingWrapper.closest('.hidden');
                    if (hiddenParent) {
                        var requiredFields = hiddenParent.querySelectorAll('.cm-required, .cm-failed-field, .cm-failed-label');
                        requiredFields.forEach(function(el) {
                            el.classList.remove('cm-required');
                            el.classList.remove('cm-failed-field');
                            el.classList.remove('cm-failed-label');
                        });
                        var errorSpans = hiddenParent.querySelectorAll('.help-inline');
                        errorSpans.forEach(function(el) { el.remove(); });
                        var errorDivs = hiddenParent.querySelectorAll('.error');
                        errorDivs.forEach(function(el) { el.classList.remove('error'); });
                    }
                }
            }
        }, true); // true = capture phase, runs BEFORE CS-Cart validation

        // Auto-select shipping pertama untuk setiap vendor yang belum dipilih
        document.querySelectorAll('.is2or-vendor-shipping').forEach(function(block) {
            var groupKey = block.getAttribute('data-group-key');

            // Cek apakah vendor ini sudah ada yang ter-check
            var alreadyChecked = block.querySelector('input[type="radio"]:checked');
            if (alreadyChecked) return; // sudah ada pilihan, skip

            // Cari radio pertama dari default cat (regular → sameday → instant → bulky)
            var cats = ['regular', 'sameday', 'instant', 'bulky'];
            var firstRadio = null;
            for (var i = 0; i < cats.length; i++) {
                var catEl = document.getElementById('is2or_vcat_' + groupKey + '_' + cats[i]);
                if (catEl) {
                    firstRadio = catEl.querySelector('input[type="radio"]');
                    if (firstRadio) break;
                }
            }

            if (!firstRadio) return;

            firstRadio.checked = true;
            firstRadio.dispatchEvent(new Event('change', { bubbles: true }));
            fn_calculate_total_shipping_cost();

            // Update display header untuk vendor ini
            var label = firstRadio.closest('.is2or-shipping-item');
            if (label) {
                label.classList.add('is2or-shipping-item--active');

                var nameEl  = document.getElementById('is2or_vship_name_' + groupKey);
                var etaEl   = document.getElementById('is2or_vship_eta_' + groupKey);
                var itemNameEl  = label.querySelector('.is2or-shipping-item__name');
                var itemEtaEl   = label.querySelector('.is2or-shipping-item__eta');
                var itemPriceEl = label.querySelector('.is2or-shipping-item__price');

                if (nameEl && itemNameEl) {
                    var price = itemPriceEl ? itemPriceEl.textContent.trim() : '';
                    nameEl.textContent = itemNameEl.textContent.trim() + (price ? ' (' + price + ')' : '');
                    nameEl.classList.remove('is2or-shipping-selected__name--empty');
                }
                if (etaEl) {
                    etaEl.textContent = itemEtaEl ? itemEtaEl.textContent.trim() : '';
                }
            }
        });

        // Validasi awal setelah auto-select
        is2orValidateAllVendorShipping();

        var lcForm = document.getElementById('litecheckout_payments_form');
        if (lcForm) {
            lcForm.addEventListener('submit', function() {
                // Inject security_hash
                var existingHash = document.querySelector('input[name="security_hash"]');
                if (existingHash && existingHash.value) {
                    var hashInput = lcForm.querySelector('input[name="security_hash"]');
                    if (!hashInput) {
                        hashInput = document.createElement('input');
                        hashInput.type = 'hidden';
                        hashInput.name = 'security_hash';
                        hashInput.className = 'cm-no-hide-input';
                        lcForm.appendChild(hashInput);
                    }
                    hashInput.value = existingHash.value;
                }

                var dispatchInput = lcForm.querySelector('input[name="dispatch"]');
                if (!dispatchInput) {
                    dispatchInput = document.createElement('input');
                    dispatchInput.type = 'hidden';
                    dispatchInput.name = 'dispatch';
                    lcForm.appendChild(dispatchInput);
                }
                dispatchInput.value = 'checkout.place_order';
            });
        }
    });

    function is2orToggleGatewayDropdown() {
        var dropdown = document.getElementById('is2or_gateway_dropdown');
        var chevron = document.getElementById('is2or_gateway_chevron');
        if (dropdown.style.display === 'none') {
            dropdown.style.display = 'block';
            chevron.classList.add('is2or-gateway-selected__chevron--open');
        } else {
            dropdown.style.display = 'none';
            chevron.classList.remove('is2or-gateway-selected__chevron--open');
        }
    }

    function is2orSelectGateway(gatewayType, displayName, logos) {
        var baseUrl = '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/';
        
        // Update selected display
        var nameEl = document.getElementById('is2or_gateway_name');
        var logosEl = document.getElementById('is2or_gateway_logos');
        
        if (nameEl) nameEl.textContent = displayName;
        
        if (logosEl) {
            logosEl.innerHTML = '';
            logos.forEach(function(logo) {
                var img = document.createElement('img');
                img.src = baseUrl + logo;
                img.height = 22;
                logosEl.appendChild(img);
            });
        }

        // Check the correct radio button
        var radios = document.querySelectorAll('input[name="payment_data[aps][gateway]"]');
        radios.forEach(function(r) {
            if (r.value === gatewayType) {
                r.checked = true;
            }
        });

        // Update active state
        document.querySelectorAll('.is2or-gateway-item').forEach(function(item) {
            item.classList.remove('is2or-gateway-item--active');
        });
        event.currentTarget.classList.add('is2or-gateway-item--active');

        // Close dropdown
        document.getElementById('is2or_gateway_dropdown').style.display = 'none';
        document.getElementById('is2or_gateway_chevron').classList.remove('is2or-gateway-selected__chevron--open');
    }

    // ================================================================
    // COUPON / PROMO CODE LOGIC
    // ================================================================

    (function() {
        var _lastSubmittedCode = null;
        var _isLoading = false;

        function is2orShowMsg(type, text) {
            var msgEl = document.getElementById('is2or_coupon_msg');
            if (!msgEl) return;
            msgEl.className = 'is2or-coupon-msg is2or-coupon-msg--' + type;
            msgEl.textContent = text;
            msgEl.style.display = 'block';

            var promosEl = document.querySelector('.is2or-applied-promos');
            if (promosEl) {
                promosEl.style.display = type === 'error' ? 'none' : 'block';
            }
        }

        function is2orHideMsg() {
            var msgEl = document.getElementById('is2or_coupon_msg');
            if (msgEl) msgEl.style.display = 'none';

            var promosEl = document.querySelector('.is2or-applied-promos');
            if (promosEl) promosEl.style.display = 'block';
        }

        function is2orSetBtnLoading(loading) {
            var btn     = document.getElementById('is2or_coupon_apply_btn');
            var spinner = document.getElementById('is2or_coupon_spinner');
            if (!btn) return;
            btn.disabled = loading;
            if (spinner) {
                if (loading) {
                    spinner.classList.add('is2or-promo-spinner--visible');
                } else {
                    spinner.classList.remove('is2or-promo-spinner--visible');
                }
            }
        }

        function is2orGetSecurityHash() {
            var el = document.querySelector('input[name="security_hash"]');
            return el ? el.value : '';
        }

        function is2orSubmitCoupon() {
            var input = document.getElementById('is2or_coupon_input');
            if (!input || _isLoading) return;

            var code = input.value.trim();
            if (code === _lastSubmittedCode) return;

            is2orHideMsg();
            _isLoading = true;
            _lastSubmittedCode = code;
            is2orSetBtnLoading(true);

            $.ajax({
                url: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/',
                method: 'POST',
                dataType: 'json',
                data: {
                    dispatch: 'checkout.apply_coupon',
                    coupon_code: code,
                    result_ids: 'checkout*,cart_status*,cart_items,payment-methods,litecheckout_form',
                    redirect_url: 'index.php?dispatch=checkout.cart',
                    security_hash: is2orGetSecurityHash(),
                    full_render: 'Y',
                    is_ajax: '1'
                },
                success: function(response) {
                    if (!response) {
                        _lastSubmittedCode = null;
                        is2orShowMsg('error', '✗ Failed to apply promo code.');
                        return;
                    }

                    var isSuccess = false;
                    var errorMsg  = '';

                    if (response.notifications) {
                        $.each(response.notifications, function(key, notif) {
                            if (notif.extra === 'text_applied_promotions') {
                                isSuccess = true;
                                return false; // break
                            }
                            if (notif.type === 'W' || notif.type === 'E') {
                                errorMsg = notif.message || '';
                            }
                        });
                    }

                    if (isSuccess) {
                        if (response.html && response.html.checkout_totals) {
                            var $totals = $(response.html.checkout_totals);

                            var $discountValueEl = $totals.find('.ut2-cart-statistic__item_subtotal-discount .ut2-cart-statistic__value');
                            if ($discountValueEl.length) {
                                var discountNum = $discountValueEl.find('span[id], span:not([class])').last().text().trim();

                                var $existingPrice = $('#cart_total').closest('.ty-price, span').parent().clone();

                                var $discountRow = $('.is2or-summary-row__value--discount').closest('.is2or-summary-row');
                                if ($discountRow.length) {
                                    $discountRow.find('.is2or-summary-row__value--discount #cart_total, .is2or-summary-row__value--discount span[id]').text(discountNum);
                                } else {
                                    var $subtotalPrice = $('.is2or-summary-row__value').first().html();
                                    var $tempDiv = $('<div>').html($subtotalPrice);
                                    $tempDiv.find('span').last().text(discountNum);

                                    var newRow = '<div class="is2or-summary-row">' +
                                        '<span class="is2or-summary-row__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("discount", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>' +
                                        '<span class="is2or-summary-row__value is2or-summary-row__value--discount">-' + $tempDiv.html() + '</span>' +
                                        '</div>';
                                    $('.is2or-summary-divider').before(newRow);
                                }
                            }

                            // Update order total
                            var newTotalNum = $totals.find('#cart_total').text().trim();
                            if (newTotalNum) {
                                $('#cart_total').text(newTotalNum);
                            }

                            // Update shipping
                            var $newShippingEl = $totals.find('.ut2-cart-statistic__item_shipping-method .ut2-cart-statistic__value');
                            if ($newShippingEl.length) {
                                var shippingNum = $newShippingEl.find('span[id], span:not([class])').last().text().trim();
                                $('.is2or-summary-row').filter(function() {
                                    return $(this).find('.is2or-summary-row__label').text().trim().toLowerCase() === 'shipping';
                                }).find('.is2or-summary-row__value span').last().text(shippingNum);
                            }

                            // Update subtotal
                            var $newSubtotalEl = $totals.find('.ut2-cart-statistic_subtotal .ut2-cart-statistic__value');
                            if ($newSubtotalEl.length) {
                                var subtotalNum = $newSubtotalEl.find('span[id], span:not([class])').last().text().trim();
                                $('.is2or-summary-row__value').first().find('span').last().text(subtotalNum);
                            }
                        }

                        is2orShowMsg('success', '✓ Promo code applied successfully!');

                    } else {
                        _lastSubmittedCode = null;
                        var displayMsg = errorMsg
                            ? errorMsg
                            : 'Invalid or expired promo code.';
                        is2orShowMsg('error', displayMsg);
                    }
                },
                error: function() {
                    _lastSubmittedCode = null;
                    is2orShowMsg('error', 'Failed to apply promo code. Please try again.');
                },
                complete: function() {
                    _isLoading = false;
                    is2orSetBtnLoading(false);
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            var input = document.getElementById('is2or_coupon_input');
            var btn   = document.getElementById('is2or_coupon_apply_btn');

            if (!input || !btn) return;

            if (input.value.trim() !== '') {
                _lastSubmittedCode = input.value.trim();
                var discountRow = document.querySelector('.is2or-summary-row__value--discount');
                if (discountRow) {
                    is2orShowMsg('success', '✓ Promo code applied successfully!');
                }
            }

            btn.addEventListener('click', function() {
                is2orSubmitCoupon();
            });

            input.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    is2orSubmitCoupon();
                }
            });

            input.addEventListener('input', function() {
                if (input.value.trim() === '') {
                    _lastSubmittedCode = null;
                    is2orHideMsg();
                    // Hapus baris discount jika input dikosongkan
                    $('.is2or-summary-row__value--discount').closest('.is2or-summary-row').remove();
                }
            });
        });
    })();
    
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/js/tygh/checkout.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/js/tygh/checkout/lite_checkout.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/js/tygh/checkout/pickup_selector.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/js/tygh/checkout/pickup_search.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
/js/tygh/search_pickup_points.js"><?php echo '</script'; ?>
>

<input type="hidden" 
       name="security_hash" 
       class="cm-no-hide-input" 
       value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_generate_security_hash')('')), ENT_QUOTES, 'UTF-8');?>
"
       form="litecheckout_payments_form" />
       
<!--litecheckout_form--></div>
<?php }
}
}
