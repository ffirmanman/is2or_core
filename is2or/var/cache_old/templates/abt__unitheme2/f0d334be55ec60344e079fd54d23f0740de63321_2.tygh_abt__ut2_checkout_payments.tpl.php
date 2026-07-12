<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:11
  from 'tygh:addons/abt__unitheme2/blocks/components/abt__ut2_checkout_payments.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29bbe4467_21183395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0d334be55ec60344e079fd54d23f0740de63321' => 
    array (
      0 => 'addons/abt__unitheme2/blocks/components/abt__ut2_checkout_payments.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 4,
  ),
))) {
function content_69aea29bbe4467_21183395 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/components';
\Tygh\Languages\Helper::preloadLangVars(array('checkout_terms_n_conditions_alert','checkout_terms_n_conditions_alert','checkout_terms_n_conditions_alert','checkout_terms_n_conditions_alert'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="<?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>b--pay-way__select b--pay-ship__select<?php }?>">

    <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <label class="b--pay-way__opted b--pay-ship__opted" for="open-pay-way-list-dropdown">
            <?php if ($_smarty_tpl->getValue('payment_methods')[$_smarty_tpl->getValue('cart')['payment_id']]['image']) {?>
                <div class="b--pay-way__opted__logo b--pay-ship__opted__logo">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('cart')['payment_id'],'images'=>$_smarty_tpl->getValue('payment_methods')[$_smarty_tpl->getValue('cart')['payment_id']]['image'],'class'=>"litecheckout__payment-method__logo-image"), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php }?>
            <div class="b--pay-way__opted__text b--pay-ship__opted__text">
                <div class="b--pay-way__opted__text__title b--pay-ship__opted__text__title">
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment_methods')[$_smarty_tpl->getValue('cart')['payment_id']]['payment']), ENT_QUOTES, 'UTF-8');?>

                </div>
            </div>
            <div class="b--pay-way__opted__icon b--pay-ship__opted__icon ut2-icon-outline-expand_more"></div>
        </label>                <input id="open-pay-way-list-dropdown" type="checkbox"/>
    <?php }?>

    <div class="b--pay-way__list b--pay-ship__list">

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'payment');
$foreach36DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment')->value) {
$foreach36DoElse = false;
?>
        <div class="b--pay-way__unit b--pay-ship__unit <?php if ($_smarty_tpl->getValue('payment')['payment_id'] == $_smarty_tpl->getValue('cart')['payment_id']) {?>b--pay-way__unit_active b--pay-ship__unit_active<?php }?> litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">
            <input type="radio"
                   name="selected_payment_method"
                   id="radio_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-target-form="litecheckout_payments_form"
                   data-ca-url="checkout.checkout"
                   data-ca-result-ids="litecheckout_final_section,litecheckout_step_payment,shipping_rates_list,litecheckout_terms,checkout*"
                   class="litecheckout__shipping-method__radio cm-select-payment hidden"
                   value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->getValue('payment')['payment_id'] == $_smarty_tpl->getValue('cart')['payment_id']) {?>checked<?php }?>
            />

            <label id="payments_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
" class="b--pay-way__unit__label b--pay-ship__unit__label litecheckout__shipping-method__wrapper js-litecheckout-toggle"
                    for="radio_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-toggling="payments_form_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-hide-all-in=".litecheckout__payment-methods"
            >

                <?php if ($_smarty_tpl->getValue('payment')['image']) {?>
                    <div class="b--pay-way__unit__label__logo b--pay-ship__unit__label__logo litecheckout__payment-method__logo">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('payment')['payment_id'],'images'=>$_smarty_tpl->getValue('payment')['image'],'class'=>"litecheckout__payment-method__logo-image"), (int) 0, $_smarty_current_dir);
?>
                    </div>
                <?php }?>

                <div class="b--pay-way__unit__text b--pay-ship__unit__text">
                    <div class="litecheckout__shipping-method__title">
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment']), ENT_QUOTES, 'UTF-8');?>

                    </div>
                    <div class="b--pay-way__unit__text__description b--pay-ship__unit__text__description">
                        <div class="litecheckout__shipping-method__delivery-time">
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['description']), ENT_QUOTES, 'UTF-8');?>

                        </div>
                    </div>
                    <div class="b--pay-way__unit__pseudo-radio b--pay-ship__unit__pseudo-radio"></div>
                </div>

            </label>

            <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>

                <div class="b--pay-way__unit__details b--pay-ship__unit__details">
                    <div class="b--pay-way__unit__details__in b--pay-ship__unit__details__in">

                        <?php if ($_smarty_tpl->getValue('payment')['payment_id'] == $_smarty_tpl->getValue('cart')['payment_id']) {?>

                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "payment_template", null, null);?>
                                <?php if ($_smarty_tpl->getValue('payment')['template']) {?>
                                    <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('payment')['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('card_id'=>$_smarty_tpl->getValue('payment')['payment_id']), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                            <div
                                    class="litecheckout__group litecheckout__payment-method<?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'payment_template')) && !$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('payment')['instructions'])) {?> hidden<?php }?>"
                                    data-ca-toggling-by="payments_form_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-hideble="true"
                            >
                                <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment_id')), ENT_QUOTES, 'UTF-8');?>
"/>
                                <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('result_ids')), ENT_QUOTES, 'UTF-8');?>
"/>
                                <input type="hidden" name="dispatch" value="checkout.place_order"/>
                                <input type="hidden" name="customer_notes" value=""/>

                                <?php if ($_smarty_tpl->getValue('order_id')) {?>
                                    <input type="hidden" name="order_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('order_id')), ENT_QUOTES, 'UTF-8');?>
"/>
                                <?php }?>

                                <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"/>

                                <?php if ($_smarty_tpl->getValue('payment')['instructions']) {?>
                                    <div class="litecheckout__item litecheckout__payment-instructions">
                                        <?php echo $_smarty_tpl->getValue('payment')['instructions'];?>

                                    </div>
                                <?php }?>

                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'payment_template');?>

                            </div>

                            <?php if ($_smarty_tpl->getValue('iframe_mode')) {?>
                                <div class="ty-payment-method-iframe__box">
                                    <iframe width="100%" height="700"
                                            id="order_iframe_<?php echo htmlspecialchars((string) ((defined('TIME') ? constant('TIME') : null)), ENT_QUOTES, 'UTF-8');?>
"
                                            src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_checkout_url')("checkout.process_payment",(defined('AREA') ? constant('AREA') : null))), ENT_QUOTES, 'UTF-8');?>
"
                                            style="border: 0px" frameBorder="0"
                                    ></iframe>
                                    <?php if ($_smarty_tpl->getValue('is_terms_and_conditions_agreement_required')) {?>
                                        <div id="payment_method_iframe_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                                             class="ty-payment-method-iframe"
                                        >
                                            <div class="ty-payment-method-iframe__label">
                                                <div class="ty-payment-method-iframe__text">
                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("checkout_terms_n_conditions_alert", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            <?php }?>

                        <?php }?>

                    </div>                </div>
            <?php }?>

            </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    </div>
</div>

<?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>

    <div class="b--pay-way__select-details b--pay-ship__select-details">
        <div class="b--pay-way__select-details__in b--pay-ship__select-details__in">

            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'payment');
$foreach37DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment')->value) {
$foreach37DoElse = false;
?>

                <?php if ($_smarty_tpl->getValue('payment')['payment_id'] != $_smarty_tpl->getValue('cart')['payment_id']) {?>
                    <?php continue 1;?>
                <?php }?>
                <div class="litecheckout__group litecheckout__payment-method"
                     data-ca-toggling-by="payments_form_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                     data-ca-hideble="true"
                >
                    <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment_id')), ENT_QUOTES, 'UTF-8');?>
"/>
                    <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('result_ids')), ENT_QUOTES, 'UTF-8');?>
"/>
                    <input type="hidden" name="dispatch" value="checkout.place_order"/>
                    <input type="hidden" name="customer_notes" value=""/>

                    <?php if ($_smarty_tpl->getValue('order_id')) {?>
                        <input type="hidden" name="order_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('order_id')), ENT_QUOTES, 'UTF-8');?>
"/>
                    <?php }?>

                    <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"/>

                    <?php if ($_smarty_tpl->getValue('payment')['template']) {?>
                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "payment_template", null, null);?>
                            <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('payment')['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('card_id'=>$_smarty_tpl->getValue('payment')['payment_id']), (int) 0, $_smarty_current_dir);
?>
                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->getValue('payment')['instructions']) {?>
                        <div class="litecheckout__item litecheckout__payment-instructions">
                            <?php echo $_smarty_tpl->getValue('payment')['instructions'];?>

                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->getValue('payment')['template'] && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'payment_template')) != '') {?>
                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'payment_template');?>

                    <?php }?>
                </div>
                <?php if ($_smarty_tpl->getValue('iframe_mode')) {?>
                    <div class="ty-payment-method-iframe__box">
                        <iframe width="100%" height="700" id="order_iframe_<?php echo htmlspecialchars((string) ((defined('TIME') ? constant('TIME') : null)), ENT_QUOTES, 'UTF-8');?>
"
                                src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_checkout_url')("checkout.process_payment",(defined('AREA') ? constant('AREA') : null))), ENT_QUOTES, 'UTF-8');?>
"
                                style="border: 0px" frameBorder="0"
                        ></iframe>
                        <?php if ($_smarty_tpl->getValue('is_terms_and_conditions_agreement_required')) {?>
                            <div id="payment_method_iframe_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                                 class="ty-payment-method-iframe"
                            >
                                <div class="ty-payment-method-iframe__label">
                                    <div class="ty-payment-method-iframe__text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("checkout_terms_n_conditions_alert", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                <?php }?>

            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

        </div>    </div><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/components/abt__ut2_checkout_payments.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/blocks/components/abt__ut2_checkout_payments.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="<?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>b--pay-way__select b--pay-ship__select<?php }?>">

    <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
        <label class="b--pay-way__opted b--pay-ship__opted" for="open-pay-way-list-dropdown">
            <?php if ($_smarty_tpl->getValue('payment_methods')[$_smarty_tpl->getValue('cart')['payment_id']]['image']) {?>
                <div class="b--pay-way__opted__logo b--pay-ship__opted__logo">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('cart')['payment_id'],'images'=>$_smarty_tpl->getValue('payment_methods')[$_smarty_tpl->getValue('cart')['payment_id']]['image'],'class'=>"litecheckout__payment-method__logo-image"), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php }?>
            <div class="b--pay-way__opted__text b--pay-ship__opted__text">
                <div class="b--pay-way__opted__text__title b--pay-ship__opted__text__title">
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment_methods')[$_smarty_tpl->getValue('cart')['payment_id']]['payment']), ENT_QUOTES, 'UTF-8');?>

                </div>
            </div>
            <div class="b--pay-way__opted__icon b--pay-ship__opted__icon ut2-icon-outline-expand_more"></div>
        </label>                <input id="open-pay-way-list-dropdown" type="checkbox"/>
    <?php }?>

    <div class="b--pay-way__list b--pay-ship__list">

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'payment');
$foreach38DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment')->value) {
$foreach38DoElse = false;
?>
        <div class="b--pay-way__unit b--pay-ship__unit <?php if ($_smarty_tpl->getValue('payment')['payment_id'] == $_smarty_tpl->getValue('cart')['payment_id']) {?>b--pay-way__unit_active b--pay-ship__unit_active<?php }?> litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">
            <input type="radio"
                   name="selected_payment_method"
                   id="radio_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-target-form="litecheckout_payments_form"
                   data-ca-url="checkout.checkout"
                   data-ca-result-ids="litecheckout_final_section,litecheckout_step_payment,shipping_rates_list,litecheckout_terms,checkout*"
                   class="litecheckout__shipping-method__radio cm-select-payment hidden"
                   value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->getValue('payment')['payment_id'] == $_smarty_tpl->getValue('cart')['payment_id']) {?>checked<?php }?>
            />

            <label id="payments_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
" class="b--pay-way__unit__label b--pay-ship__unit__label litecheckout__shipping-method__wrapper js-litecheckout-toggle"
                    for="radio_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-toggling="payments_form_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-hide-all-in=".litecheckout__payment-methods"
            >

                <?php if ($_smarty_tpl->getValue('payment')['image']) {?>
                    <div class="b--pay-way__unit__label__logo b--pay-ship__unit__label__logo litecheckout__payment-method__logo">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->getValue('payment')['payment_id'],'images'=>$_smarty_tpl->getValue('payment')['image'],'class'=>"litecheckout__payment-method__logo-image"), (int) 0, $_smarty_current_dir);
?>
                    </div>
                <?php }?>

                <div class="b--pay-way__unit__text b--pay-ship__unit__text">
                    <div class="litecheckout__shipping-method__title">
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment']), ENT_QUOTES, 'UTF-8');?>

                    </div>
                    <div class="b--pay-way__unit__text__description b--pay-ship__unit__text__description">
                        <div class="litecheckout__shipping-method__delivery-time">
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['description']), ENT_QUOTES, 'UTF-8');?>

                        </div>
                    </div>
                    <div class="b--pay-way__unit__pseudo-radio b--pay-ship__unit__pseudo-radio"></div>
                </div>

            </label>

            <?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?>

                <div class="b--pay-way__unit__details b--pay-ship__unit__details">
                    <div class="b--pay-way__unit__details__in b--pay-ship__unit__details__in">

                        <?php if ($_smarty_tpl->getValue('payment')['payment_id'] == $_smarty_tpl->getValue('cart')['payment_id']) {?>

                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "payment_template", null, null);?>
                                <?php if ($_smarty_tpl->getValue('payment')['template']) {?>
                                    <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('payment')['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('card_id'=>$_smarty_tpl->getValue('payment')['payment_id']), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                            <div
                                    class="litecheckout__group litecheckout__payment-method<?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'payment_template')) && !$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('payment')['instructions'])) {?> hidden<?php }?>"
                                    data-ca-toggling-by="payments_form_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-hideble="true"
                            >
                                <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment_id')), ENT_QUOTES, 'UTF-8');?>
"/>
                                <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('result_ids')), ENT_QUOTES, 'UTF-8');?>
"/>
                                <input type="hidden" name="dispatch" value="checkout.place_order"/>
                                <input type="hidden" name="customer_notes" value=""/>

                                <?php if ($_smarty_tpl->getValue('order_id')) {?>
                                    <input type="hidden" name="order_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('order_id')), ENT_QUOTES, 'UTF-8');?>
"/>
                                <?php }?>

                                <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"/>

                                <?php if ($_smarty_tpl->getValue('payment')['instructions']) {?>
                                    <div class="litecheckout__item litecheckout__payment-instructions">
                                        <?php echo $_smarty_tpl->getValue('payment')['instructions'];?>

                                    </div>
                                <?php }?>

                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'payment_template');?>

                            </div>

                            <?php if ($_smarty_tpl->getValue('iframe_mode')) {?>
                                <div class="ty-payment-method-iframe__box">
                                    <iframe width="100%" height="700"
                                            id="order_iframe_<?php echo htmlspecialchars((string) ((defined('TIME') ? constant('TIME') : null)), ENT_QUOTES, 'UTF-8');?>
"
                                            src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_checkout_url')("checkout.process_payment",(defined('AREA') ? constant('AREA') : null))), ENT_QUOTES, 'UTF-8');?>
"
                                            style="border: 0px" frameBorder="0"
                                    ></iframe>
                                    <?php if ($_smarty_tpl->getValue('is_terms_and_conditions_agreement_required')) {?>
                                        <div id="payment_method_iframe_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                                             class="ty-payment-method-iframe"
                                        >
                                            <div class="ty-payment-method-iframe__label">
                                                <div class="ty-payment-method-iframe__text">
                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("checkout_terms_n_conditions_alert", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            <?php }?>

                        <?php }?>

                    </div>                </div>
            <?php }?>

            </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    </div>
</div>

<?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_as_select'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>

    <div class="b--pay-way__select-details b--pay-ship__select-details">
        <div class="b--pay-way__select-details__in b--pay-ship__select-details__in">

            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'payment');
$foreach39DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('payment')->value) {
$foreach39DoElse = false;
?>

                <?php if ($_smarty_tpl->getValue('payment')['payment_id'] != $_smarty_tpl->getValue('cart')['payment_id']) {?>
                    <?php continue 1;?>
                <?php }?>
                <div class="litecheckout__group litecheckout__payment-method"
                     data-ca-toggling-by="payments_form_wrapper_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                     data-ca-hideble="true"
                >
                    <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment_id')), ENT_QUOTES, 'UTF-8');?>
"/>
                    <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('result_ids')), ENT_QUOTES, 'UTF-8');?>
"/>
                    <input type="hidden" name="dispatch" value="checkout.place_order"/>
                    <input type="hidden" name="customer_notes" value=""/>

                    <?php if ($_smarty_tpl->getValue('order_id')) {?>
                        <input type="hidden" name="order_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('order_id')), ENT_QUOTES, 'UTF-8');?>
"/>
                    <?php }?>

                    <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"/>

                    <?php if ($_smarty_tpl->getValue('payment')['template']) {?>
                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "payment_template", null, null);?>
                            <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('payment')['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('card_id'=>$_smarty_tpl->getValue('payment')['payment_id']), (int) 0, $_smarty_current_dir);
?>
                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->getValue('payment')['instructions']) {?>
                        <div class="litecheckout__item litecheckout__payment-instructions">
                            <?php echo $_smarty_tpl->getValue('payment')['instructions'];?>

                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->getValue('payment')['template'] && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'payment_template')) != '') {?>
                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'payment_template');?>

                    <?php }?>
                </div>
                <?php if ($_smarty_tpl->getValue('iframe_mode')) {?>
                    <div class="ty-payment-method-iframe__box">
                        <iframe width="100%" height="700" id="order_iframe_<?php echo htmlspecialchars((string) ((defined('TIME') ? constant('TIME') : null)), ENT_QUOTES, 'UTF-8');?>
"
                                src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_checkout_url')("checkout.process_payment",(defined('AREA') ? constant('AREA') : null))), ENT_QUOTES, 'UTF-8');?>
"
                                style="border: 0px" frameBorder="0"
                        ></iframe>
                        <?php if ($_smarty_tpl->getValue('is_terms_and_conditions_agreement_required')) {?>
                            <div id="payment_method_iframe_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('payment')['payment_id']), ENT_QUOTES, 'UTF-8');?>
"
                                 class="ty-payment-method-iframe"
                            >
                                <div class="ty-payment-method-iframe__label">
                                    <div class="ty-payment-method-iframe__text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("checkout_terms_n_conditions_alert", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                <?php }?>

            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

        </div>    </div><?php }
}
}
}
