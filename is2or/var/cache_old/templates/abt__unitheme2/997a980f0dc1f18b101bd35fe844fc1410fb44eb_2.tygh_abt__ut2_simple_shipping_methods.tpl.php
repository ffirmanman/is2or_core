<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:11
  from 'tygh:addons/abt__unitheme2/blocks/lite_checkout/abt__ut2_simple_shipping_methods.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29b930fe0_13539095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '997a980f0dc1f18b101bd35fe844fc1410fb44eb' => 
    array (
      0 => 'addons/abt__unitheme2/blocks/lite_checkout/abt__ut2_simple_shipping_methods.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 4,
    'tygh:common/price.tpl' => 4,
  ),
))) {
function content_69aea29b930fe0_13539095 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/lite_checkout';
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.click_here_to_update_shipping','lite_checkout.shipping_method_for','na','free','lite_checkout.not_available','no_shipping_required','text_no_shipping_methods','text_no_shipping_methods','lite_checkout.click_here_to_update_shipping','lite_checkout.shipping_method_for','na','free','lite_checkout.not_available','no_shipping_required','text_no_shipping_methods','text_no_shipping_methods'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="b--ship-way b--pay-ship
    <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        b--ship-way_mode_select b--pay-ship_mode_select
    <?php } else { ?>
        b--ship-way_mode_radio-list b--pay-ship_mode_radio-list
    <?php }?>">

    <div class="b--ship-way__in b--pay-ship__in litecheckout__container">
        <?php if (!$_smarty_tpl->getValue('group')['all_edp_free_shipping'] && !$_smarty_tpl->getValue('group')['shipping_no_required']) {?>
            <?php $_smarty_tpl->assign('show_content', true, false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('show_content', false, false, NULL);?>
        <?php }?>

        <div class="litecheckout__group litecheckout__step" id="litecheckout_step_shipping">

            <label for="shipping_rates_list"
                   class="cm-required cm-multiple-radios cm-shipping-available-label hidden"></label>

            <div class="litecheckout__group litecheckout__shippings"
                 data-ca-lite-checkout-overlay-message="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("lite_checkout.click_here_to_update_shipping", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
                 data-ca-lite-checkout-overlay-class="litecheckout__overlay--active"
                 data-ca-lite-checkout-element="shipping-methods"
                 id="shipping_rates_list">

                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_rates"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

                    <input type="hidden"
                           name="additional_result_ids[]"
                           value="litecheckout_final_section,litecheckout_step_payment,checkout*"
                    />

                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_groups'), 'group', false, 'group_key');
$foreach28DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group_key')->value => $_smarty_tpl->getVariable('group')->value) {
$foreach28DoElse = false;
?>

                        <?php if ($_smarty_tpl->getValue('group')['shipping_by_marketplace']) {?>
                            <?php continue 1;?>
                        <?php }?>

                        <div class="b--ship-way__vendor b--ship-way__vendor-_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
">
                            <?php $_smarty_tpl->assign('show_content', true, false, NULL);?>

                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && $_smarty_tpl->getValue('show_vendor_info_if_shipping_no_required') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>
                                <?php if (!$_smarty_tpl->getValue('group')['all_edp_free_shipping'] && !$_smarty_tpl->getValue('group')['shipping_no_required']) {?>
                                    <?php $_smarty_tpl->assign('show_content', true, false, NULL);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->assign('show_content', false, false, NULL);?>
                                <?php }?>
                            <?php }?>

                                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product_groups')) > 1 && $_smarty_tpl->getValue('show_content')) {?>
                                <div class="b--ship-way__vendor__name-title litecheckout__group">
                                    <div class="litecheckout__item">
                                        <h2 class="litecheckout__step-title">
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("lite_checkout.shipping_method_for", array("[group_name]"=>$_smarty_tpl->getValue('group')['name']), $_smarty_tpl->getSmarty()->getLanguage());?>

                                        </h2>
                                    </div>
                                </div>
                            <?php }?>

                            <div class="<?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>b--ship-way__select b--pay-ship__select<?php }?>">

                                <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                    <label class="b--ship-way__opted b--pay-ship__opted" for="open-ship-way-list-dropdown-_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php if ($_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')]]['image']) {?>
                                            <div class="b--ship-way__opted__logo b--pay-ship__opted__logo">
                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')]]['image'],'class'=>"shipping-method__logo-image litecheckout__shipping-method__logo-image"), (int) 0, $_smarty_current_dir);
?>
                                            </div>
                                        <?php }?>
                                        <div class="b--ship-way__opted__text b--pay-ship__opted__text">
                                            <div class="b--ship-way__opted__text__title b--pay-ship__opted__text__title">
                                                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('all_shippings')[$_smarty_tpl->getValue('group_key')][$_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')]]['shipping']), ENT_QUOTES, 'UTF-8');?>

                                            </div>
                                        </div>
                                        <div class="b--ship-way__opted__icon b--pay-ship__opted__icon ut2-icon-outline-expand_more"></div>
                                    </label>                                                                        <input id="open-ship-way-list-dropdown-_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
" type="checkbox"/>
                                <?php }?>

                                <?php $_tmp_array = $_smarty_tpl->getValue('group') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping_disabled'] = false;
$_smarty_tpl->assign('group', $_tmp_array, false, NULL);?>

                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_methods_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                    <div class="b--ship-way__list b--pay-ship__list litecheckout__group">
                                                                                <?php if ($_smarty_tpl->getValue('group')['shippings'] && !$_smarty_tpl->getValue('group')['all_edp_free_shipping'] && !$_smarty_tpl->getValue('group')['shipping_no_required']) {?>

                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('all_shippings')[$_smarty_tpl->getValue('group_key')], 'item', false, 'shipping_id');
$foreach29DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shipping_id')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach29DoElse = false;
?>
                                                <?php if ($_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('shipping_id')]) {?>
                                                    <?php $_smarty_tpl->assign('shipping', $_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('shipping_id')], false, NULL);?>
                                                    <?php if (!$_smarty_tpl->getValue('shipping')['delivery_time'] && $_smarty_tpl->getValue('shipping')['service_delivery_time']) {?>
                                                        <?php $_tmp_array = $_smarty_tpl->getValue('shipping') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['delivery_time'] = $_smarty_tpl->getValue('shipping')['service_delivery_time'];
$_smarty_tpl->assign('shipping', $_tmp_array, false, NULL);?>
                                                    <?php }?>
                                                    <?php $_tmp_array = $_smarty_tpl->getValue('shipping') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping'] = $_smarty_tpl->getValue('item')['shipping'];
$_smarty_tpl->assign('shipping', $_tmp_array, false, NULL);?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->assign('shipping', $_smarty_tpl->getValue('item'), false, NULL);?>
                                                    <?php if ($_smarty_tpl->getValue('show_unavailable_shippings')) {?>
                                                        <?php $_tmp_array = $_smarty_tpl->getValue('shipping') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['rate_disabled'] = true;
$_smarty_tpl->assign('shipping', $_tmp_array, false, NULL);?>
                                                    <?php } else { ?>
                                                        <?php continue 1;?>
                                                    <?php }?>
                                                <?php }?>

                                                <?php if ($_smarty_tpl->getValue('shipping')['rate_disabled'] && $_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')] == $_smarty_tpl->getValue('shipping')['shipping_id']) {?>
                                                    <?php $_tmp_array = $_smarty_tpl->getValue('group') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping_disabled'] = true;
$_smarty_tpl->assign('group', $_tmp_array, false, NULL);?>
                                                <?php }?>

                                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_rate"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

                                                    <?php $_smarty_tpl->assign('delivery_time', '', false, NULL);?>
                                                    <?php if ($_smarty_tpl->getValue('shipping')['delivery_time'] || $_smarty_tpl->getValue('shipping')['rate_info']['delivery_time']) {?>
                                                        <?php $_smarty_tpl->assign('delivery_time', "(".((string)((($tmp = $_smarty_tpl->getValue('shipping')['rate_info']['delivery_time'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('shipping')['delivery_time'] ?? null : $tmp))).")", false, NULL);?>
                                                    <?php }?>

                                                    <?php if ($_smarty_tpl->getValue('shipping')['rate']) {?>
                                                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', "rate", null);
$_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('shipping')['rate']), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                                                        <?php if ($_smarty_tpl->getValue('shipping')['inc_tax']) {?>
                                                            <?php $_smarty_tpl->assign('rate', ((string)$_smarty_tpl->getValue('rate'))." (", false, NULL);?>
                                                            <?php if ($_smarty_tpl->getValue('shipping')['taxed_price'] && $_smarty_tpl->getValue('shipping')['taxed_price'] != $_smarty_tpl->getValue('shipping')['rate']) {?>
                                                                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', "tax", null);
$_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('shipping')['taxed_price'],'class'=>"ty-nowrap"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                                                                <?php $_smarty_tpl->assign('rate', ((string)$_smarty_tpl->getValue('rate')).((string)$_smarty_tpl->getValue('tax'))." ", false, NULL);?>
                                                            <?php }?>
                                                            <?php $_smarty_tpl->assign('inc_tax_lang', $_smarty_tpl->getSmarty()->getModifierCallback("__")('inc_tax', [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                                            <?php $_smarty_tpl->assign('rate', ((string)$_smarty_tpl->getValue('rate')).((string)$_smarty_tpl->getValue('inc_tax_lang')).")", false, NULL);?>
                                                        <?php }?>
                                                    <?php } elseif ($_smarty_tpl->getValue('shipping')['rate_disabled']) {?>
                                                        <?php $_smarty_tpl->assign('rate', $_smarty_tpl->getSmarty()->getModifierCallback("__")("na", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                                    <?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is_lang_var_exists')("free")) {?>
                                                        <?php $_smarty_tpl->assign('rate', $_smarty_tpl->getSmarty()->getModifierCallback("__")("free", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->assign('rate', '', false, NULL);?>
                                                    <?php }?>

                                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_rate"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                                                <div class="b--ship-way__unit b--pay-ship__unit <?php if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')] == $_smarty_tpl->getValue('shipping')['shipping_id']) {?>b--ship-way__unit_active b--pay-ship__unit_active<?php }?> litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">

                                                    <input
                                                            <?php if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')] == $_smarty_tpl->getValue('shipping')['shipping_id']) {?> checked<?php }?>
                                                            type="radio"
                                                            class="litecheckout__shipping-method__radio hidden"
                                                            id="sh_<?php echo $_smarty_tpl->getValue('group_key');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping_id']), ENT_QUOTES, 'UTF-8');?>
"
                                                            name="shipping_ids[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
]"
                                                            value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping_id']), ENT_QUOTES, 'UTF-8');?>
"
                                                            onclick="fn_calculate_total_shipping_cost(); $.ceLiteCheckout('toggleAddress', <?php if ($_smarty_tpl->getValue('shipping')['is_address_required'] == "Y") {?>true<?php } else { ?>false<?php }?>);"
                                                            data-ca-lite-checkout-element="shipping-method"
                                                            data-ca-lite-checkout-is-address-required="<?php if ($_smarty_tpl->getValue('shipping')['is_address_required'] == "Y") {?>true<?php } else { ?>false<?php }?>"
                                                            data-ca-lite-checkout-shipping-method-disabled="<?php if ($_smarty_tpl->getValue('shipping')['rate_disabled']) {?>true<?php } else { ?>false<?php }?>"
                                                    />

                                                    <label
                                                            for="sh_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping_id']), ENT_QUOTES, 'UTF-8');?>
"
                                                            class="b--ship-way__unit__label b--pay-ship__unit__label litecheckout__shipping-method__wrapper js-litecheckout-activate <?php if ($_smarty_tpl->getValue('shipping')['rate_disabled']) {?>litecheckout__shipping-method__wrapper--disabled<?php }?> <?php if ($_smarty_tpl->getValue('shipping_rates_changed')) {?>litecheckout__shipping-method__wrapper--highlight<?php }?>"
                                                            data-ca-activate="sd_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping_id']), ENT_QUOTES, 'UTF-8');?>
">

                                                        <?php if ($_smarty_tpl->getValue('shipping')['image']) {?>
                                                            <div class="b--ship-way__unit__label__logo b--pay-ship__unit__label__logo litecheckout__shipping-method__logo">
                                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('shipping_id'),'images'=>$_smarty_tpl->getValue('shipping')['image'],'class'=>"shipping-method__logo-image litecheckout__shipping-method__logo-image"), (int) 0, $_smarty_current_dir);
?>
                                                            </div>
                                                        <?php }?>

                                                        <div class="b--ship-way__unit__text b--pay-ship__unit__text">
                                                            <div class="litecheckout__shipping-method__title">
                                                                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('all_shippings')[$_smarty_tpl->getValue('group_key')][$_smarty_tpl->getValue('shipping')['shipping_id']]['shipping']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('rate') && !$_smarty_tpl->getValue('shipping')['rate_disabled']) {?> — <?php echo $_smarty_tpl->getValue('rate');
}?>
                                                            </div>
                                                            <div class="b--ship-way__unit__text__description b--pay-ship__unit__text__description">
                                                                <?php if ($_smarty_tpl->getValue('shipping')['rate_disabled']) {?>
                                                                    <div class="litecheckout__shipping-method__status litecheckout__shipping-method__status--error"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("lite_checkout.not_available", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                                                <?php } else { ?>
                                                                    <div class="litecheckout__shipping-method__delivery-time"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('delivery_time')), ENT_QUOTES, 'UTF-8');?>
</div>
                                                                <?php }?>
                                                            </div>
                                                            <div class="b--ship-way__unit__pseudo-radio b--pay-ship__unit__pseudo-radio"></div>
                                                        </div>

                                                    </label>

                                                    <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>

                                                            <div class="b--ship-way__unit__details b--pay-ship__unit__details">
                                                                <div class="b--ship-way__unit__details__in b--pay-ship__unit__details__in">

                                                                    <?php if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')] == $_smarty_tpl->getValue('shipping')['shipping_id']) {?>
                                                                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_method"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                                                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_method"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                                                        <?php if ($_smarty_tpl->getValue('shipping')['description']) {?>
                                                                            <div class="ty-wysiwyg-content">
                                                                                <?php echo $_smarty_tpl->getValue('shipping')['description'];?>

                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>

                                                                </div>                                                            </div>
                                                    <?php }?>

                                                </div>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        <?php } else { ?>

                                            <div class="litecheckout__item litecheckout__item--full">
                                                <?php if ($_smarty_tpl->getValue('group')['all_edp_free_shipping'] || $_smarty_tpl->getValue('group')['shipping_no_required']) {?>
                                                    <?php if ($_smarty_tpl->getValue('show_content')) {?>
                                                        <p class="litecheckout__shipping-method__text ty-error-text">
                                                                                                                                                                                    <?php if (!false == $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
                                                                <?php echo $_smarty_tpl->getValue('content');?>

                                                            <?php } else { ?>
                                                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_shipping_required", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                            <?php }?>
                                                        </p>
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <p class="litecheckout__shipping-method__text ty-error-text">
                                                                                                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_shipping_methods", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                    </p>
                                                <?php }?>
                                            </div>

                                        <?php }?>

                                        <?php if ($_smarty_tpl->getValue('cart')['all_shippings_disabled'] || $_smarty_tpl->getValue('group')['shipping_disabled']) {?>
                                            <div class="litecheckout__item litecheckout__item--full">
                                                <p class="litecheckout__shipping-method__text ty-error-text">
                                                                                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_shipping_methods", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                </p>
                                            </div>
                                        <?php }?>

                                    </div>
                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_methods_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                            </div>
                            <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                <div class="b--ship-way__select-details b--pay-ship__select-details">
                                    <div class="b--ship-way__select-details__in b--pay-ship__select-details__in">

                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('group')['shippings'], 'shipping');
$foreach30DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shipping')->value) {
$foreach30DoElse = false;
?>
                                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_method"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_method"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('group')['shippings'], 'shipping');
$foreach31DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shipping')->value) {
$foreach31DoElse = false;
?>
                                            <?php if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')] == $_smarty_tpl->getValue('shipping')['shipping_id']) {?>
                                                <div class="b--ship-way__select-details__description b--pay-ship__select-details__description litecheckout__shipping-method__description">
                                                    <?php echo $_smarty_tpl->getValue('all_shippings')[$_smarty_tpl->getValue('group_key')][$_smarty_tpl->getValue('shipping')['shipping_id']]['description'];?>

                                                </div>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                    </div>                                </div>                            <?php }?>

                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_rates"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            <!--shipping_rates_list--></div>

        </div>    </div></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/lite_checkout/abt__ut2_simple_shipping_methods.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/blocks/lite_checkout/abt__ut2_simple_shipping_methods.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="b--ship-way b--pay-ship
    <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        b--ship-way_mode_select b--pay-ship_mode_select
    <?php } else { ?>
        b--ship-way_mode_radio-list b--pay-ship_mode_radio-list
    <?php }?>">

    <div class="b--ship-way__in b--pay-ship__in litecheckout__container">
        <?php if (!$_smarty_tpl->getValue('group')['all_edp_free_shipping'] && !$_smarty_tpl->getValue('group')['shipping_no_required']) {?>
            <?php $_smarty_tpl->assign('show_content', true, false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('show_content', false, false, NULL);?>
        <?php }?>

        <div class="litecheckout__group litecheckout__step" id="litecheckout_step_shipping">

            <label for="shipping_rates_list"
                   class="cm-required cm-multiple-radios cm-shipping-available-label hidden"></label>

            <div class="litecheckout__group litecheckout__shippings"
                 data-ca-lite-checkout-overlay-message="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("lite_checkout.click_here_to_update_shipping", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
                 data-ca-lite-checkout-overlay-class="litecheckout__overlay--active"
                 data-ca-lite-checkout-element="shipping-methods"
                 id="shipping_rates_list">

                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_rates"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

                    <input type="hidden"
                           name="additional_result_ids[]"
                           value="litecheckout_final_section,litecheckout_step_payment,checkout*"
                    />

                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_groups'), 'group', false, 'group_key');
$foreach32DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group_key')->value => $_smarty_tpl->getVariable('group')->value) {
$foreach32DoElse = false;
?>

                        <?php if ($_smarty_tpl->getValue('group')['shipping_by_marketplace']) {?>
                            <?php continue 1;?>
                        <?php }?>

                        <div class="b--ship-way__vendor b--ship-way__vendor-_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
">
                            <?php $_smarty_tpl->assign('show_content', true, false, NULL);?>

                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && $_smarty_tpl->getValue('show_vendor_info_if_shipping_no_required') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>
                                <?php if (!$_smarty_tpl->getValue('group')['all_edp_free_shipping'] && !$_smarty_tpl->getValue('group')['shipping_no_required']) {?>
                                    <?php $_smarty_tpl->assign('show_content', true, false, NULL);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->assign('show_content', false, false, NULL);?>
                                <?php }?>
                            <?php }?>

                                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product_groups')) > 1 && $_smarty_tpl->getValue('show_content')) {?>
                                <div class="b--ship-way__vendor__name-title litecheckout__group">
                                    <div class="litecheckout__item">
                                        <h2 class="litecheckout__step-title">
                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("lite_checkout.shipping_method_for", array("[group_name]"=>$_smarty_tpl->getValue('group')['name']), $_smarty_tpl->getSmarty()->getLanguage());?>

                                        </h2>
                                    </div>
                                </div>
                            <?php }?>

                            <div class="<?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>b--ship-way__select b--pay-ship__select<?php }?>">

                                <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                    <label class="b--ship-way__opted b--pay-ship__opted" for="open-ship-way-list-dropdown-_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php if ($_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')]]['image']) {?>
                                            <div class="b--ship-way__opted__logo b--pay-ship__opted__logo">
                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')]]['image'],'class'=>"shipping-method__logo-image litecheckout__shipping-method__logo-image"), (int) 0, $_smarty_current_dir);
?>
                                            </div>
                                        <?php }?>
                                        <div class="b--ship-way__opted__text b--pay-ship__opted__text">
                                            <div class="b--ship-way__opted__text__title b--pay-ship__opted__text__title">
                                                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('all_shippings')[$_smarty_tpl->getValue('group_key')][$_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')]]['shipping']), ENT_QUOTES, 'UTF-8');?>

                                            </div>
                                        </div>
                                        <div class="b--ship-way__opted__icon b--pay-ship__opted__icon ut2-icon-outline-expand_more"></div>
                                    </label>                                                                        <input id="open-ship-way-list-dropdown-_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
" type="checkbox"/>
                                <?php }?>

                                <?php $_tmp_array = $_smarty_tpl->getValue('group') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping_disabled'] = false;
$_smarty_tpl->assign('group', $_tmp_array, false, NULL);?>

                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_methods_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                    <div class="b--ship-way__list b--pay-ship__list litecheckout__group">
                                                                                <?php if ($_smarty_tpl->getValue('group')['shippings'] && !$_smarty_tpl->getValue('group')['all_edp_free_shipping'] && !$_smarty_tpl->getValue('group')['shipping_no_required']) {?>

                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('all_shippings')[$_smarty_tpl->getValue('group_key')], 'item', false, 'shipping_id');
$foreach33DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shipping_id')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach33DoElse = false;
?>
                                                <?php if ($_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('shipping_id')]) {?>
                                                    <?php $_smarty_tpl->assign('shipping', $_smarty_tpl->getValue('group')['shippings'][$_smarty_tpl->getValue('shipping_id')], false, NULL);?>
                                                    <?php if (!$_smarty_tpl->getValue('shipping')['delivery_time'] && $_smarty_tpl->getValue('shipping')['service_delivery_time']) {?>
                                                        <?php $_tmp_array = $_smarty_tpl->getValue('shipping') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['delivery_time'] = $_smarty_tpl->getValue('shipping')['service_delivery_time'];
$_smarty_tpl->assign('shipping', $_tmp_array, false, NULL);?>
                                                    <?php }?>
                                                    <?php $_tmp_array = $_smarty_tpl->getValue('shipping') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping'] = $_smarty_tpl->getValue('item')['shipping'];
$_smarty_tpl->assign('shipping', $_tmp_array, false, NULL);?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->assign('shipping', $_smarty_tpl->getValue('item'), false, NULL);?>
                                                    <?php if ($_smarty_tpl->getValue('show_unavailable_shippings')) {?>
                                                        <?php $_tmp_array = $_smarty_tpl->getValue('shipping') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['rate_disabled'] = true;
$_smarty_tpl->assign('shipping', $_tmp_array, false, NULL);?>
                                                    <?php } else { ?>
                                                        <?php continue 1;?>
                                                    <?php }?>
                                                <?php }?>

                                                <?php if ($_smarty_tpl->getValue('shipping')['rate_disabled'] && $_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')] == $_smarty_tpl->getValue('shipping')['shipping_id']) {?>
                                                    <?php $_tmp_array = $_smarty_tpl->getValue('group') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['shipping_disabled'] = true;
$_smarty_tpl->assign('group', $_tmp_array, false, NULL);?>
                                                <?php }?>

                                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_rate"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

                                                    <?php $_smarty_tpl->assign('delivery_time', '', false, NULL);?>
                                                    <?php if ($_smarty_tpl->getValue('shipping')['delivery_time'] || $_smarty_tpl->getValue('shipping')['rate_info']['delivery_time']) {?>
                                                        <?php $_smarty_tpl->assign('delivery_time', "(".((string)((($tmp = $_smarty_tpl->getValue('shipping')['rate_info']['delivery_time'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('shipping')['delivery_time'] ?? null : $tmp))).")", false, NULL);?>
                                                    <?php }?>

                                                    <?php if ($_smarty_tpl->getValue('shipping')['rate']) {?>
                                                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', "rate", null);
$_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('shipping')['rate']), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                                                        <?php if ($_smarty_tpl->getValue('shipping')['inc_tax']) {?>
                                                            <?php $_smarty_tpl->assign('rate', ((string)$_smarty_tpl->getValue('rate'))." (", false, NULL);?>
                                                            <?php if ($_smarty_tpl->getValue('shipping')['taxed_price'] && $_smarty_tpl->getValue('shipping')['taxed_price'] != $_smarty_tpl->getValue('shipping')['rate']) {?>
                                                                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, 'default', "tax", null);
$_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('shipping')['taxed_price'],'class'=>"ty-nowrap"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                                                                <?php $_smarty_tpl->assign('rate', ((string)$_smarty_tpl->getValue('rate')).((string)$_smarty_tpl->getValue('tax'))." ", false, NULL);?>
                                                            <?php }?>
                                                            <?php $_smarty_tpl->assign('inc_tax_lang', $_smarty_tpl->getSmarty()->getModifierCallback("__")('inc_tax', [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                                            <?php $_smarty_tpl->assign('rate', ((string)$_smarty_tpl->getValue('rate')).((string)$_smarty_tpl->getValue('inc_tax_lang')).")", false, NULL);?>
                                                        <?php }?>
                                                    <?php } elseif ($_smarty_tpl->getValue('shipping')['rate_disabled']) {?>
                                                        <?php $_smarty_tpl->assign('rate', $_smarty_tpl->getSmarty()->getModifierCallback("__")("na", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                                    <?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is_lang_var_exists')("free")) {?>
                                                        <?php $_smarty_tpl->assign('rate', $_smarty_tpl->getSmarty()->getModifierCallback("__")("free", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->assign('rate', '', false, NULL);?>
                                                    <?php }?>

                                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_rate"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                                                <div class="b--ship-way__unit b--pay-ship__unit <?php if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')] == $_smarty_tpl->getValue('shipping')['shipping_id']) {?>b--ship-way__unit_active b--pay-ship__unit_active<?php }?> litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">

                                                    <input
                                                            <?php if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')] == $_smarty_tpl->getValue('shipping')['shipping_id']) {?> checked<?php }?>
                                                            type="radio"
                                                            class="litecheckout__shipping-method__radio hidden"
                                                            id="sh_<?php echo $_smarty_tpl->getValue('group_key');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping_id']), ENT_QUOTES, 'UTF-8');?>
"
                                                            name="shipping_ids[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
]"
                                                            value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping_id']), ENT_QUOTES, 'UTF-8');?>
"
                                                            onclick="fn_calculate_total_shipping_cost(); $.ceLiteCheckout('toggleAddress', <?php if ($_smarty_tpl->getValue('shipping')['is_address_required'] == "Y") {?>true<?php } else { ?>false<?php }?>);"
                                                            data-ca-lite-checkout-element="shipping-method"
                                                            data-ca-lite-checkout-is-address-required="<?php if ($_smarty_tpl->getValue('shipping')['is_address_required'] == "Y") {?>true<?php } else { ?>false<?php }?>"
                                                            data-ca-lite-checkout-shipping-method-disabled="<?php if ($_smarty_tpl->getValue('shipping')['rate_disabled']) {?>true<?php } else { ?>false<?php }?>"
                                                    />

                                                    <label
                                                            for="sh_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping_id']), ENT_QUOTES, 'UTF-8');?>
"
                                                            class="b--ship-way__unit__label b--pay-ship__unit__label litecheckout__shipping-method__wrapper js-litecheckout-activate <?php if ($_smarty_tpl->getValue('shipping')['rate_disabled']) {?>litecheckout__shipping-method__wrapper--disabled<?php }?> <?php if ($_smarty_tpl->getValue('shipping_rates_changed')) {?>litecheckout__shipping-method__wrapper--highlight<?php }?>"
                                                            data-ca-activate="sd_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('group_key')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping_id']), ENT_QUOTES, 'UTF-8');?>
">

                                                        <?php if ($_smarty_tpl->getValue('shipping')['image']) {?>
                                                            <div class="b--ship-way__unit__label__logo b--pay-ship__unit__label__logo litecheckout__shipping-method__logo">
                                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('shipping_id'),'images'=>$_smarty_tpl->getValue('shipping')['image'],'class'=>"shipping-method__logo-image litecheckout__shipping-method__logo-image"), (int) 0, $_smarty_current_dir);
?>
                                                            </div>
                                                        <?php }?>

                                                        <div class="b--ship-way__unit__text b--pay-ship__unit__text">
                                                            <div class="litecheckout__shipping-method__title">
                                                                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('all_shippings')[$_smarty_tpl->getValue('group_key')][$_smarty_tpl->getValue('shipping')['shipping_id']]['shipping']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('rate') && !$_smarty_tpl->getValue('shipping')['rate_disabled']) {?> — <?php echo $_smarty_tpl->getValue('rate');
}?>
                                                            </div>
                                                            <div class="b--ship-way__unit__text__description b--pay-ship__unit__text__description">
                                                                <?php if ($_smarty_tpl->getValue('shipping')['rate_disabled']) {?>
                                                                    <div class="litecheckout__shipping-method__status litecheckout__shipping-method__status--error"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("lite_checkout.not_available", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                                                <?php } else { ?>
                                                                    <div class="litecheckout__shipping-method__delivery-time"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('delivery_time')), ENT_QUOTES, 'UTF-8');?>
</div>
                                                                <?php }?>
                                                            </div>
                                                            <div class="b--ship-way__unit__pseudo-radio b--pay-ship__unit__pseudo-radio"></div>
                                                        </div>

                                                    </label>

                                                    <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>

                                                            <div class="b--ship-way__unit__details b--pay-ship__unit__details">
                                                                <div class="b--ship-way__unit__details__in b--pay-ship__unit__details__in">

                                                                    <?php if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')] == $_smarty_tpl->getValue('shipping')['shipping_id']) {?>
                                                                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_method"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                                                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_method"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                                                        <?php if ($_smarty_tpl->getValue('shipping')['description']) {?>
                                                                            <div class="ty-wysiwyg-content">
                                                                                <?php echo $_smarty_tpl->getValue('shipping')['description'];?>

                                                                            </div>
                                                                        <?php }?>
                                                                    <?php }?>

                                                                </div>                                                            </div>
                                                    <?php }?>

                                                </div>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        <?php } else { ?>

                                            <div class="litecheckout__item litecheckout__item--full">
                                                <?php if ($_smarty_tpl->getValue('group')['all_edp_free_shipping'] || $_smarty_tpl->getValue('group')['shipping_no_required']) {?>
                                                    <?php if ($_smarty_tpl->getValue('show_content')) {?>
                                                        <p class="litecheckout__shipping-method__text ty-error-text">
                                                                                                                                                                                    <?php if (!false == $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('content'))) {?>
                                                                <?php echo $_smarty_tpl->getValue('content');?>

                                                            <?php } else { ?>
                                                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_shipping_required", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                            <?php }?>
                                                        </p>
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <p class="litecheckout__shipping-method__text ty-error-text">
                                                                                                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_shipping_methods", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                    </p>
                                                <?php }?>
                                            </div>

                                        <?php }?>

                                        <?php if ($_smarty_tpl->getValue('cart')['all_shippings_disabled'] || $_smarty_tpl->getValue('group')['shipping_disabled']) {?>
                                            <div class="litecheckout__item litecheckout__item--full">
                                                <p class="litecheckout__shipping-method__text ty-error-text">
                                                                                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_no_shipping_methods", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                </p>
                                            </div>
                                        <?php }?>

                                    </div>
                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_methods_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                            </div>
                            <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                <div class="b--ship-way__select-details b--pay-ship__select-details">
                                    <div class="b--ship-way__select-details__in b--pay-ship__select-details__in">

                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('group')['shippings'], 'shipping');
$foreach34DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shipping')->value) {
$foreach34DoElse = false;
?>
                                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_method"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_method"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('group')['shippings'], 'shipping');
$foreach35DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shipping')->value) {
$foreach35DoElse = false;
?>
                                            <?php if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')] == $_smarty_tpl->getValue('shipping')['shipping_id']) {?>
                                                <div class="b--ship-way__select-details__description b--pay-ship__select-details__description litecheckout__shipping-method__description">
                                                    <?php echo $_smarty_tpl->getValue('all_shippings')[$_smarty_tpl->getValue('group_key')][$_smarty_tpl->getValue('shipping')['shipping_id']]['description'];?>

                                                </div>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                    </div>                                </div>                            <?php }?>

                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:shipping_rates"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            <!--shipping_rates_list--></div>

        </div>    </div></div><?php }
}
}
