<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:58:37
  from 'tygh:components/phone.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaabdd4c8d8_13579610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb872056f89946a7323d4e489108d5c5edc52f3a' => 
    array (
      0 => 'components/phone.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_object.tpl' => 2,
  ),
))) {
function content_69adaabdd4c8d8_13579610 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/components';
\Tygh\Languages\Helper::preloadLangVars(array('phone_mask_label','phone_mask_label','phone_mask_label','phone_mask_label'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('name')) {
$_smarty_tpl->assign('rnd', $_smarty_tpl->getSmarty()->getModifierCallback('rand')(), false, NULL);
$_smarty_tpl->assign('is_phone_number_with_country_selection', ($_smarty_tpl->getValue('settings')['Appearance']['phone_validation_mode'] === "phone_number_with_country_selection"), false, NULL);
$_smarty_tpl->assign('checkout', (($tmp = $_smarty_tpl->getValue('checkout') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('checkout')) {
$_smarty_tpl->assign('id', (($tmp = $_smarty_tpl->getValue('id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('rnd') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_controls', (($tmp = $_smarty_tpl->getValue('show_controls') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('default_style', (($tmp = $_smarty_tpl->getValue('default_style') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('required', (($tmp = $_smarty_tpl->getValue('required') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('control_group_class', (($tmp = "litecheckout__field ".((string)$_smarty_tpl->getValue('control_group_class')) ?? null)===null||$tmp==='' ? "litecheckout__field" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('label_position', (($tmp = $_smarty_tpl->getValue('label_position') ?? null)===null||$tmp==='' ? "after" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('label_class', (($tmp = "litecheckout__label ".((string)$_smarty_tpl->getValue('label_class')) ?? null)===null||$tmp==='' ? "litecheckout__label" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('label_text', (($tmp = $_smarty_tpl->getValue('label_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("phone_mask_label", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('class', "litecheckout__input litecheckout__input--mask-phone ".((string)$_smarty_tpl->getValue('class')), false, NULL);
$_smarty_tpl->assign('btn_group', "ty-btn-group--litecheckout ".((string)$_smarty_tpl->getValue('btn_group')), false, NULL);
$_smarty_tpl->assign('button_class', "ty-select-block__a--litecheckout ".((string)$_smarty_tpl->getValue('button_class')), false, NULL);
$_smarty_tpl->assign('input_phone_container_class', ($_smarty_tpl->getValue('is_phone_number_with_country_selection')) ? "ty-input-append--litecheckout ".((string)$_smarty_tpl->getValue('input_phone_container_class')) : $_smarty_tpl->getValue('input_phone_container_class'), false, NULL);
$_smarty_tpl->assign('placeholder', ($_smarty_tpl->getValue('placeholder')) ? $_smarty_tpl->getValue('placeholder') : " ", false, NULL);
}
$_smarty_tpl->assign('id', (($tmp = $_smarty_tpl->getValue('id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('rnd') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('phone_mask_type_class', $_smarty_tpl->getSmarty()->getModifierCallback('replace')("ty-input-phone--".((string)$_smarty_tpl->getValue('settings')['Appearance']['phone_validation_mode']),"_","-"), false, NULL);
$_smarty_tpl->assign('show_control_group', (($tmp = $_smarty_tpl->getValue('show_control_group') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_controls', (($tmp = $_smarty_tpl->getValue('show_controls') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('required', (($tmp = $_smarty_tpl->getValue('required') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('name', (($tmp = $_smarty_tpl->getValue('name') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('value', (($tmp = $_smarty_tpl->getValue('value') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('title', (($tmp = $_smarty_tpl->getValue('title') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('class', (($tmp = $_smarty_tpl->getValue('class') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('attrs', (($tmp = $_smarty_tpl->getValue('attrs') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('extra', (($tmp = $_smarty_tpl->getValue('extra') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('control_group_class', (($tmp = $_smarty_tpl->getValue('control_group_class') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('label_position', (($tmp = $_smarty_tpl->getValue('label_position') ?? null)===null||$tmp==='' ? "default" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('label_class', (($tmp = $_smarty_tpl->getValue('label_class') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('label_text', (($tmp = $_smarty_tpl->getValue('label_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("phone_mask_label", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('input_phone_container_class', (($tmp = $_smarty_tpl->getValue('input_phone_container_class') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('btn_group', (($tmp = $_smarty_tpl->getValue('btn_group') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('button_class', (($tmp = $_smarty_tpl->getValue('button_class') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('default_style', (($tmp = $_smarty_tpl->getValue('default_style') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('placeholder', $_smarty_tpl->getValue('placeholder'), false, NULL);
$_smarty_tpl->assign('autocomplete', (($tmp = $_smarty_tpl->getValue('autocomplete') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('aria_label', (($tmp = $_smarty_tpl->getValue('aria_label') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('attrs_string', (($tmp = $_smarty_tpl->getValue('attrs_string') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_colon', (($tmp = $_smarty_tpl->getValue('show_colon') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('field_name_helper', (($tmp = $_smarty_tpl->getValue('field_name_helper') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('name') ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('width') === "full") {
} elseif ($_smarty_tpl->getValue('width') === "large") {
$_smarty_tpl->assign('input_phone_container_class', ((string)$_smarty_tpl->getValue('input_phone_container_class'))." ty-input-phone-container--large", false, NULL);
} else {
$_smarty_tpl->assign('input_phone_container_class', ((string)$_smarty_tpl->getValue('input_phone_container_class'))." ty-input-phone-container--default", false, NULL);
}
$_smarty_tpl->assign('country_code', (($tmp = $_smarty_tpl->getValue('profile_data')['s_country'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Checkout']['default_country'] ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('countries', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_simple_phone_country_codes')(1), false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country', false, 'id');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('country')->value) {
$foreach16DoElse = false;
$_tmp_array = $_smarty_tpl->getValue('countries') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('id')]['symbol'] = "+".((string)$_smarty_tpl->getValue('country')['phone_code']);
$_smarty_tpl->assign('countries', $_tmp_array, false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country', false, 'id');
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('country')->value) {
$foreach17DoElse = false;
if (substr((string) $_smarty_tpl->getValue('value'), (int) 0, (int) (strlen((string) $_smarty_tpl->getValue('country')['symbol']))) === $_smarty_tpl->getValue('country')['symbol']) {
$_smarty_tpl->assign('country_code', $_smarty_tpl->getValue('country')['country_code'], false, NULL);
if ($_smarty_tpl->getValue('country')['is_main_for_phone_code']) {
break 1;
}
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getValue('placeholder') !== false) {
$_smarty_tpl->assign('placeholder', ($_smarty_tpl->getValue('placeholder') || $_smarty_tpl->getValue('placeholder') === '') ? $_smarty_tpl->getValue('placeholder') : $_smarty_tpl->getValue('countries')[mb_strtolower((string) $_smarty_tpl->getValue('country_code'), 'UTF-8')]['symbol'], false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "label", null, null);?><label for="<?php echo $_smarty_tpl->getValue('id');?>
" class="cm-mask-phone-label <?php if ($_smarty_tpl->getValue('default_style')) {?>ty-control-group__title<?php }?> <?php if ($_smarty_tpl->getValue('required')) {?>cm-required cm-trim<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_class')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_text')), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('show_colon')) {?>:<?php }?></label><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('show_control_group')) {?><div class="cm-mask-phone-group <?php if ($_smarty_tpl->getValue('default_style')) {?>ty-control-group<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('control_group_class')), ENT_QUOTES, 'UTF-8');?>
" data-ca-phone-mask-group-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('label_position') === "default") {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'label');
}
}
if ($_smarty_tpl->getValue('show_controls')) {?><div class="controls"><?php }?><div class="cm-field-container ty-field-phone-container <?php if ($_smarty_tpl->getValue('is_phone_number_with_country_selection')) {?>ty-input-append ty-input-append--phone-mask<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_phone_container_class')), ENT_QUOTES, 'UTF-8');?>
"><input <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
type="tel" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
class="cm-mask-phone ty-input-phone ty-input-fill <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('phone_mask_type_class')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('default_style')) {?>ty-input-text<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('title')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('placeholder') !== false) {?>placeholder="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('placeholder')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('autocomplete')) {?>autocomplete="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('autocomplete')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('aria_label')) {?>aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('aria_label')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}?>data-ca-phone-mask-type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Appearance']['phone_validation_mode']), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-phone-mask-country="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('country_code')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-phone-mask-symbol="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('countries')[mb_strtolower((string) $_smarty_tpl->getValue('country_code'), 'UTF-8')]['symbol']), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-check-filter="[data-ca-phone-mask-group-id='<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
']" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('attrs')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('attrs'));?>
 <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('attrs_string')) {
echo $_smarty_tpl->getValue('attrs_string');
}?>/><?php if ($_smarty_tpl->getValue('label_position') === "after") {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'label');
}
echo $_smarty_tpl->getValue('extra');
if ($_smarty_tpl->getValue('is_phone_number_with_country_selection')) {
ob_start();
$_smarty_tpl->renderSubTemplate("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'show_button_text'=>false,'show_button_symbol'=>false,'link_tpl'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['current_url'],"phone_country="),'suffix'=>"phone_code_".((string)$_smarty_tpl->getValue('id')),'items'=>$_smarty_tpl->getValue('countries'),'selected_id'=>mb_strtolower((string) $_smarty_tpl->getValue('country_code'), 'UTF-8'),'display_icons'=>true,'key_name'=>"name",'dropdown_menu_item_link_class'=>"cm-phone-number-with-country-selection-li-link",'class'=>"cm-phone-number-with-country-selection-btn-group ty-btn-group--phone-mask ty-dropleft ".((string)$_smarty_tpl->getValue('btn_group')),'button_class'=>"ty-select-block__a--phone-mask ".((string)$_smarty_tpl->getValue('button_class')),'show_group'=>true), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('select_countries', ob_get_clean(), false, 0);
echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')(preg_replace('!\s+!u', ' ',$_smarty_tpl->getValue('select_countries')),"> <","><");
}?></div><?php if ($_smarty_tpl->getValue('show_controls')) {?></div><?php }
if ($_smarty_tpl->getValue('show_control_group')) {?></div><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="components/phone.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"components/phone.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('name')) {
$_smarty_tpl->assign('rnd', $_smarty_tpl->getSmarty()->getModifierCallback('rand')(), false, NULL);
$_smarty_tpl->assign('is_phone_number_with_country_selection', ($_smarty_tpl->getValue('settings')['Appearance']['phone_validation_mode'] === "phone_number_with_country_selection"), false, NULL);
$_smarty_tpl->assign('checkout', (($tmp = $_smarty_tpl->getValue('checkout') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('checkout')) {
$_smarty_tpl->assign('id', (($tmp = $_smarty_tpl->getValue('id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('rnd') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_controls', (($tmp = $_smarty_tpl->getValue('show_controls') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('default_style', (($tmp = $_smarty_tpl->getValue('default_style') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('required', (($tmp = $_smarty_tpl->getValue('required') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('control_group_class', (($tmp = "litecheckout__field ".((string)$_smarty_tpl->getValue('control_group_class')) ?? null)===null||$tmp==='' ? "litecheckout__field" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('label_position', (($tmp = $_smarty_tpl->getValue('label_position') ?? null)===null||$tmp==='' ? "after" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('label_class', (($tmp = "litecheckout__label ".((string)$_smarty_tpl->getValue('label_class')) ?? null)===null||$tmp==='' ? "litecheckout__label" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('label_text', (($tmp = $_smarty_tpl->getValue('label_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("phone_mask_label", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('class', "litecheckout__input litecheckout__input--mask-phone ".((string)$_smarty_tpl->getValue('class')), false, NULL);
$_smarty_tpl->assign('btn_group', "ty-btn-group--litecheckout ".((string)$_smarty_tpl->getValue('btn_group')), false, NULL);
$_smarty_tpl->assign('button_class', "ty-select-block__a--litecheckout ".((string)$_smarty_tpl->getValue('button_class')), false, NULL);
$_smarty_tpl->assign('input_phone_container_class', ($_smarty_tpl->getValue('is_phone_number_with_country_selection')) ? "ty-input-append--litecheckout ".((string)$_smarty_tpl->getValue('input_phone_container_class')) : $_smarty_tpl->getValue('input_phone_container_class'), false, NULL);
$_smarty_tpl->assign('placeholder', ($_smarty_tpl->getValue('placeholder')) ? $_smarty_tpl->getValue('placeholder') : " ", false, NULL);
}
$_smarty_tpl->assign('id', (($tmp = $_smarty_tpl->getValue('id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('rnd') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('phone_mask_type_class', $_smarty_tpl->getSmarty()->getModifierCallback('replace')("ty-input-phone--".((string)$_smarty_tpl->getValue('settings')['Appearance']['phone_validation_mode']),"_","-"), false, NULL);
$_smarty_tpl->assign('show_control_group', (($tmp = $_smarty_tpl->getValue('show_control_group') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_controls', (($tmp = $_smarty_tpl->getValue('show_controls') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('required', (($tmp = $_smarty_tpl->getValue('required') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('name', (($tmp = $_smarty_tpl->getValue('name') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('value', (($tmp = $_smarty_tpl->getValue('value') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('title', (($tmp = $_smarty_tpl->getValue('title') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('class', (($tmp = $_smarty_tpl->getValue('class') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('attrs', (($tmp = $_smarty_tpl->getValue('attrs') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('extra', (($tmp = $_smarty_tpl->getValue('extra') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('control_group_class', (($tmp = $_smarty_tpl->getValue('control_group_class') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('label_position', (($tmp = $_smarty_tpl->getValue('label_position') ?? null)===null||$tmp==='' ? "default" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('label_class', (($tmp = $_smarty_tpl->getValue('label_class') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('label_text', (($tmp = $_smarty_tpl->getValue('label_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("phone_mask_label", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('input_phone_container_class', (($tmp = $_smarty_tpl->getValue('input_phone_container_class') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('btn_group', (($tmp = $_smarty_tpl->getValue('btn_group') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('button_class', (($tmp = $_smarty_tpl->getValue('button_class') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('default_style', (($tmp = $_smarty_tpl->getValue('default_style') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('placeholder', $_smarty_tpl->getValue('placeholder'), false, NULL);
$_smarty_tpl->assign('autocomplete', (($tmp = $_smarty_tpl->getValue('autocomplete') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('aria_label', (($tmp = $_smarty_tpl->getValue('aria_label') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('attrs_string', (($tmp = $_smarty_tpl->getValue('attrs_string') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_colon', (($tmp = $_smarty_tpl->getValue('show_colon') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('field_name_helper', (($tmp = $_smarty_tpl->getValue('field_name_helper') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('name') ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('width') === "full") {
} elseif ($_smarty_tpl->getValue('width') === "large") {
$_smarty_tpl->assign('input_phone_container_class', ((string)$_smarty_tpl->getValue('input_phone_container_class'))." ty-input-phone-container--large", false, NULL);
} else {
$_smarty_tpl->assign('input_phone_container_class', ((string)$_smarty_tpl->getValue('input_phone_container_class'))." ty-input-phone-container--default", false, NULL);
}
$_smarty_tpl->assign('country_code', (($tmp = $_smarty_tpl->getValue('profile_data')['s_country'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Checkout']['default_country'] ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('countries', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_simple_phone_country_codes')(1), false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country', false, 'id');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('country')->value) {
$foreach18DoElse = false;
$_tmp_array = $_smarty_tpl->getValue('countries') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('id')]['symbol'] = "+".((string)$_smarty_tpl->getValue('country')['phone_code']);
$_smarty_tpl->assign('countries', $_tmp_array, false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country', false, 'id');
$foreach19DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('country')->value) {
$foreach19DoElse = false;
if (substr((string) $_smarty_tpl->getValue('value'), (int) 0, (int) (strlen((string) $_smarty_tpl->getValue('country')['symbol']))) === $_smarty_tpl->getValue('country')['symbol']) {
$_smarty_tpl->assign('country_code', $_smarty_tpl->getValue('country')['country_code'], false, NULL);
if ($_smarty_tpl->getValue('country')['is_main_for_phone_code']) {
break 1;
}
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getValue('placeholder') !== false) {
$_smarty_tpl->assign('placeholder', ($_smarty_tpl->getValue('placeholder') || $_smarty_tpl->getValue('placeholder') === '') ? $_smarty_tpl->getValue('placeholder') : $_smarty_tpl->getValue('countries')[mb_strtolower((string) $_smarty_tpl->getValue('country_code'), 'UTF-8')]['symbol'], false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "label", null, null);?><label for="<?php echo $_smarty_tpl->getValue('id');?>
" class="cm-mask-phone-label <?php if ($_smarty_tpl->getValue('default_style')) {?>ty-control-group__title<?php }?> <?php if ($_smarty_tpl->getValue('required')) {?>cm-required cm-trim<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_class')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label_text')), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('show_colon')) {?>:<?php }?></label><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getValue('show_control_group')) {?><div class="cm-mask-phone-group <?php if ($_smarty_tpl->getValue('default_style')) {?>ty-control-group<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('control_group_class')), ENT_QUOTES, 'UTF-8');?>
" data-ca-phone-mask-group-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('label_position') === "default") {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'label');
}
}
if ($_smarty_tpl->getValue('show_controls')) {?><div class="controls"><?php }?><div class="cm-field-container ty-field-phone-container <?php if ($_smarty_tpl->getValue('is_phone_number_with_country_selection')) {?>ty-input-append ty-input-append--phone-mask<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_phone_container_class')), ENT_QUOTES, 'UTF-8');?>
"><input <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
type="tel" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
class="cm-mask-phone ty-input-phone ty-input-fill <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('phone_mask_type_class')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('default_style')) {?>ty-input-text<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('title')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('placeholder') !== false) {?>placeholder="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('placeholder')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('autocomplete')) {?>autocomplete="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('autocomplete')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('aria_label')) {?>aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('aria_label')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}?>data-ca-phone-mask-type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Appearance']['phone_validation_mode']), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-phone-mask-country="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('country_code')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-phone-mask-symbol="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('countries')[mb_strtolower((string) $_smarty_tpl->getValue('country_code'), 'UTF-8')]['symbol']), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-check-filter="[data-ca-phone-mask-group-id='<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
']" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field_name_helper')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('attrs')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('attrs'));?>
 <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('attrs_string')) {
echo $_smarty_tpl->getValue('attrs_string');
}?>/><?php if ($_smarty_tpl->getValue('label_position') === "after") {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'label');
}
echo $_smarty_tpl->getValue('extra');
if ($_smarty_tpl->getValue('is_phone_number_with_country_selection')) {
ob_start();
$_smarty_tpl->renderSubTemplate("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'show_button_text'=>false,'show_button_symbol'=>false,'link_tpl'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['current_url'],"phone_country="),'suffix'=>"phone_code_".((string)$_smarty_tpl->getValue('id')),'items'=>$_smarty_tpl->getValue('countries'),'selected_id'=>mb_strtolower((string) $_smarty_tpl->getValue('country_code'), 'UTF-8'),'display_icons'=>true,'key_name'=>"name",'dropdown_menu_item_link_class'=>"cm-phone-number-with-country-selection-li-link",'class'=>"cm-phone-number-with-country-selection-btn-group ty-btn-group--phone-mask ty-dropleft ".((string)$_smarty_tpl->getValue('btn_group')),'button_class'=>"ty-select-block__a--phone-mask ".((string)$_smarty_tpl->getValue('button_class')),'show_group'=>true), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('select_countries', ob_get_clean(), false, 0);
echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')(preg_replace('!\s+!u', ' ',$_smarty_tpl->getValue('select_countries')),"> <","><");
}?></div><?php if ($_smarty_tpl->getValue('show_controls')) {?></div><?php }
if ($_smarty_tpl->getValue('show_control_group')) {?></div><?php }
}
}
}
}
