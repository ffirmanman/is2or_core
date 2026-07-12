<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:11
  from 'tygh:views/checkout/components/customer/billing.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29b4a5149_35406393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3839001ef0de89c56f08832c7be6aaca698e00c' => 
    array (
      0 => 'views/checkout/components/customer/billing.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 2,
    'tygh:views/checkout/components/profile_fields.tpl' => 2,
  ),
))) {
function content_69aea29b4a5149_35406393 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/checkout/components/customer';
\Tygh\Languages\Helper::preloadLangVars(array('text_billing_address_is_different_from_shipping','text_billing_address_is_different_from_shipping'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="litecheckout__group" id="litecheckout_use_billing_address_form">
    <div class="litecheckout__item" style="width: 100%;">
        <?php $_smarty_tpl->assign('use_billing_address', (($tmp = $_smarty_tpl->getValue('user_data')['ship_to_another'] ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>

        <div class="ty-profile-field__switch ty-address-switch clearfix litecheckout__address-switch">
            <div class="ty-profile-field__switch-label"><label for="sw_litecheckout_step_billing_address_suffix_no"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_billing_address_is_different_from_shipping", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label></div>
            <div class="ty-profile-field__switch-actions">
                <input
                    type="hidden"
                    value="0"
                    name="ship_to_another"
                    data-ca-lite-checkout-field="ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                >
                <input
                    type="hidden"
                    value="0"
                    name="user_data[ship_to_another]"
                    data-ca-lite-checkout-field="user_data.ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                >
                <input
                    id="sw_litecheckout_step_billing_address_suffix_no"
                    type="checkbox"
                    value="1"
                    name="user_data[ship_to_another]"
                    data-ca-lite-checkout-field="user_data.ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                    <?php if ($_smarty_tpl->getValue('use_billing_address')) {?>checked="checked"<?php }?>
                    class="checkbox cm-switch-availability cm-switch-visibility"
                >
            </div>
        </div>
    </div>
<!--litecheckout_use_billing_address_form--></div>

<div class="litecheckout__container ty-lite-checkout__customer-billing-address_wrapper" id="litecheckout_billing_address_wrapper">
    <div class="<?php if (!$_smarty_tpl->getValue('use_billing_address')) {?>hidden<?php }?>" id="litecheckout_step_billing_address">
        <div class="litecheckout__group">
            <input
                type="hidden"
                value="1"
                name="ship_to_another"
                data-ca-lite-checkout-field="ship_to_another"
                data-ca-lite-checkout-auto-save-on-change="true"
                <?php if (!$_smarty_tpl->getValue('use_billing_address')) {?>disabled="disabled"<?php }?>
            >
            <?php if ($_smarty_tpl->getValue('use_billing_address')) {?>
                <?php $_smarty_tpl->assign('profile_fields_data', $_smarty_tpl->getValue('user_data'), false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('profile_fields_data', (($tmp = $_smarty_tpl->getValue('current_user_data') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('user_data') ?? null : $tmp), false, NULL);?>
            <?php }?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->getValue('profile_fields'),'disable_all_fields'=>!$_smarty_tpl->getValue('use_billing_address'),'user_data'=>$_smarty_tpl->getValue('profile_fields_data'),'section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::BILLING_ADDRESS"),'exclude'=>array("customer_notes")), (int) 0, $_smarty_current_dir);
?>
        </div>
    <!--litecheckout_step_billing_address--></div>
<!--litecheckout_billing_address_wrapper--></div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/billing.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/checkout/components/customer/billing.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="litecheckout__group" id="litecheckout_use_billing_address_form">
    <div class="litecheckout__item" style="width: 100%;">
        <?php $_smarty_tpl->assign('use_billing_address', (($tmp = $_smarty_tpl->getValue('user_data')['ship_to_another'] ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>

        <div class="ty-profile-field__switch ty-address-switch clearfix litecheckout__address-switch">
            <div class="ty-profile-field__switch-label"><label for="sw_litecheckout_step_billing_address_suffix_no"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_billing_address_is_different_from_shipping", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label></div>
            <div class="ty-profile-field__switch-actions">
                <input
                    type="hidden"
                    value="0"
                    name="ship_to_another"
                    data-ca-lite-checkout-field="ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                >
                <input
                    type="hidden"
                    value="0"
                    name="user_data[ship_to_another]"
                    data-ca-lite-checkout-field="user_data.ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                >
                <input
                    id="sw_litecheckout_step_billing_address_suffix_no"
                    type="checkbox"
                    value="1"
                    name="user_data[ship_to_another]"
                    data-ca-lite-checkout-field="user_data.ship_to_another"
                    data-ca-lite-checkout-auto-save-on-change="true"
                    <?php if ($_smarty_tpl->getValue('use_billing_address')) {?>checked="checked"<?php }?>
                    class="checkbox cm-switch-availability cm-switch-visibility"
                >
            </div>
        </div>
    </div>
<!--litecheckout_use_billing_address_form--></div>

<div class="litecheckout__container ty-lite-checkout__customer-billing-address_wrapper" id="litecheckout_billing_address_wrapper">
    <div class="<?php if (!$_smarty_tpl->getValue('use_billing_address')) {?>hidden<?php }?>" id="litecheckout_step_billing_address">
        <div class="litecheckout__group">
            <input
                type="hidden"
                value="1"
                name="ship_to_another"
                data-ca-lite-checkout-field="ship_to_another"
                data-ca-lite-checkout-auto-save-on-change="true"
                <?php if (!$_smarty_tpl->getValue('use_billing_address')) {?>disabled="disabled"<?php }?>
            >
            <?php if ($_smarty_tpl->getValue('use_billing_address')) {?>
                <?php $_smarty_tpl->assign('profile_fields_data', $_smarty_tpl->getValue('user_data'), false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('profile_fields_data', (($tmp = $_smarty_tpl->getValue('current_user_data') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('user_data') ?? null : $tmp), false, NULL);?>
            <?php }?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->getValue('profile_fields'),'disable_all_fields'=>!$_smarty_tpl->getValue('use_billing_address'),'user_data'=>$_smarty_tpl->getValue('profile_fields_data'),'section'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::BILLING_ADDRESS"),'exclude'=>array("customer_notes")), (int) 0, $_smarty_current_dir);
?>
        </div>
    <!--litecheckout_step_billing_address--></div>
<!--litecheckout_billing_address_wrapper--></div>
<?php }
}
}
