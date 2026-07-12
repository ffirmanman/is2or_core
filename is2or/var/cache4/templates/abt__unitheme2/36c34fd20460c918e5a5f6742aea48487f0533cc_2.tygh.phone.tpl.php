<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:37:36
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/components/phone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345280c39ac8_38821148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36c34fd20460c918e5a5f6742aea48487f0533cc' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/components/phone.tpl',
      1 => 1736834852,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_object.tpl' => 2,
  ),
),false)) {
function content_68345280c39ac8_38821148 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('phone_mask_label','phone_mask_label','phone_mask_label','phone_mask_label'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->_assignInScope('rnd', rand());
$_smarty_tpl->_assignInScope('is_phone_number_with_country_selection', ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['phone_validation_mode'] === "phone_number_with_country_selection"));
$_smarty_tpl->_assignInScope('checkout', (($tmp = $_smarty_tpl->tpl_vars['checkout']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['checkout']->value) {
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['rnd']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_controls', (($tmp = $_smarty_tpl->tpl_vars['show_controls']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('default_style', (($tmp = $_smarty_tpl->tpl_vars['default_style']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('required', (($tmp = $_smarty_tpl->tpl_vars['required']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('control_group_class', (($tmp = "litecheckout__field ".((string)$_smarty_tpl->tpl_vars['control_group_class']->value) ?? null)===null||$tmp==='' ? "litecheckout__field" ?? null : $tmp));
$_smarty_tpl->_assignInScope('label_position', (($tmp = $_smarty_tpl->tpl_vars['label_position']->value ?? null)===null||$tmp==='' ? "after" ?? null : $tmp));
$_smarty_tpl->_assignInScope('label_class', (($tmp = "litecheckout__label ".((string)$_smarty_tpl->tpl_vars['label_class']->value) ?? null)===null||$tmp==='' ? "litecheckout__label" ?? null : $tmp));
$_smarty_tpl->_assignInScope('label_text', (($tmp = $_smarty_tpl->tpl_vars['label_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("phone_mask_label") ?? null : $tmp));
$_smarty_tpl->_assignInScope('class', "litecheckout__input litecheckout__input--mask-phone ".((string)$_smarty_tpl->tpl_vars['class']->value));
$_smarty_tpl->_assignInScope('btn_group', "ty-btn-group--litecheckout ".((string)$_smarty_tpl->tpl_vars['btn_group']->value));
$_smarty_tpl->_assignInScope('button_class', "ty-select-block__a--litecheckout ".((string)$_smarty_tpl->tpl_vars['button_class']->value));
$_smarty_tpl->_assignInScope('input_phone_container_class', $_smarty_tpl->tpl_vars['is_phone_number_with_country_selection']->value ? "ty-input-append--litecheckout ".((string)$_smarty_tpl->tpl_vars['input_phone_container_class']->value) : $_smarty_tpl->tpl_vars['input_phone_container_class']->value);
$_smarty_tpl->_assignInScope('placeholder', $_smarty_tpl->tpl_vars['placeholder']->value ? $_smarty_tpl->tpl_vars['placeholder']->value : " ");
}
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['rnd']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('phone_mask_type_class', smarty_modifier_replace("ty-input-phone--".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['phone_validation_mode']),"_","-"));
$_smarty_tpl->_assignInScope('show_control_group', (($tmp = $_smarty_tpl->tpl_vars['show_control_group']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_controls', (($tmp = $_smarty_tpl->tpl_vars['show_controls']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('required', (($tmp = $_smarty_tpl->tpl_vars['required']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('name', (($tmp = $_smarty_tpl->tpl_vars['name']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('value', (($tmp = $_smarty_tpl->tpl_vars['value']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('title', (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('class', (($tmp = $_smarty_tpl->tpl_vars['class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('attrs', (($tmp = $_smarty_tpl->tpl_vars['attrs']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('extra', (($tmp = $_smarty_tpl->tpl_vars['extra']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('control_group_class', (($tmp = $_smarty_tpl->tpl_vars['control_group_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('label_position', (($tmp = $_smarty_tpl->tpl_vars['label_position']->value ?? null)===null||$tmp==='' ? "default" ?? null : $tmp));
$_smarty_tpl->_assignInScope('label_class', (($tmp = $_smarty_tpl->tpl_vars['label_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('label_text', (($tmp = $_smarty_tpl->tpl_vars['label_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("phone_mask_label") ?? null : $tmp));
$_smarty_tpl->_assignInScope('input_phone_container_class', (($tmp = $_smarty_tpl->tpl_vars['input_phone_container_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('btn_group', (($tmp = $_smarty_tpl->tpl_vars['btn_group']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('button_class', (($tmp = $_smarty_tpl->tpl_vars['button_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('default_style', (($tmp = $_smarty_tpl->tpl_vars['default_style']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('placeholder', $_smarty_tpl->tpl_vars['placeholder']->value);
$_smarty_tpl->_assignInScope('autocomplete', (($tmp = $_smarty_tpl->tpl_vars['autocomplete']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('aria_label', (($tmp = $_smarty_tpl->tpl_vars['aria_label']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('attrs_string', (($tmp = $_smarty_tpl->tpl_vars['attrs_string']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_colon', (($tmp = $_smarty_tpl->tpl_vars['show_colon']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('field_name_helper', (($tmp = $_smarty_tpl->tpl_vars['field_name_helper']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['name']->value ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['width']->value === "full") {
} elseif ($_smarty_tpl->tpl_vars['width']->value === "large") {
$_smarty_tpl->_assignInScope('input_phone_container_class', ((string)$_smarty_tpl->tpl_vars['input_phone_container_class']->value)." ty-input-phone-container--large");
} else {
$_smarty_tpl->_assignInScope('input_phone_container_class', ((string)$_smarty_tpl->tpl_vars['input_phone_container_class']->value)." ty-input-phone-container--default");
}
$_smarty_tpl->_assignInScope('country_code', (($tmp = $_smarty_tpl->tpl_vars['profile_data']->value['s_country'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('countries', fn_get_simple_phone_country_codes(1));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'id');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
$_tmp_array = isset($_smarty_tpl->tpl_vars['countries']) ? $_smarty_tpl->tpl_vars['countries']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['id']->value]['symbol'] = "+".((string)$_smarty_tpl->tpl_vars['country']->value['phone_code']);
$_smarty_tpl->_assignInScope('countries', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'id');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
if (substr($_smarty_tpl->tpl_vars['value']->value,0,(strlen((string) $_smarty_tpl->tpl_vars['country']->value['symbol']))) === $_smarty_tpl->tpl_vars['country']->value['symbol']) {
$_smarty_tpl->_assignInScope('country_code', $_smarty_tpl->tpl_vars['country']->value['country_code']);
if ($_smarty_tpl->tpl_vars['country']->value['is_main_for_phone_code']) {
break 1;
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['placeholder']->value !== false) {
$_smarty_tpl->_assignInScope('placeholder', $_smarty_tpl->tpl_vars['placeholder']->value || $_smarty_tpl->tpl_vars['placeholder']->value === '' ? $_smarty_tpl->tpl_vars['placeholder']->value : $_smarty_tpl->tpl_vars['countries']->value[mb_strtolower($_smarty_tpl->tpl_vars['country_code']->value, 'UTF-8')]['symbol']);
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", null, null);?><label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-mask-phone-label <?php if ($_smarty_tpl->tpl_vars['default_style']->value) {?>ty-control-group__title<?php }?> <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>cm-required cm-trim<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['show_colon']->value) {?>:<?php }?></label><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['show_control_group']->value) {?><div class="cm-mask-phone-group <?php if ($_smarty_tpl->tpl_vars['default_style']->value) {?>ty-control-group<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['control_group_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-phone-mask-group-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['label_position']->value === "default") {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'label');
}
}
if ($_smarty_tpl->tpl_vars['show_controls']->value) {?><div class="controls"><?php }?><div class="cm-field-container ty-field-phone-container <?php if ($_smarty_tpl->tpl_vars['is_phone_number_with_country_selection']->value) {?>ty-input-append ty-input-append--phone-mask<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_phone_container_class']->value, ENT_QUOTES, 'UTF-8');?>
"><input <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
type="tel" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-mask-phone ty-input-phone ty-input-fill <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['phone_mask_type_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['default_style']->value) {?>ty-input-text<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['title']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['placeholder']->value !== false) {?>placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['autocomplete']->value) {?>autocomplete="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['autocomplete']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['aria_label']->value) {?>aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['aria_label']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}?>data-ca-phone-mask-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Appearance']['phone_validation_mode'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-phone-mask-country="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country_code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-phone-mask-symbol="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['countries']->value[mb_strtolower($_smarty_tpl->tpl_vars['country_code']->value, 'UTF-8')]['symbol'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-check-filter="[data-ca-phone-mask-group-id='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
']" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['attrs']->value) {
echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['attrs']->value);?>
 <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['attrs_string']->value) {
echo $_smarty_tpl->tpl_vars['attrs_string']->value;
}?>/><?php if ($_smarty_tpl->tpl_vars['label_position']->value === "after") {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'label');
}
echo $_smarty_tpl->tpl_vars['extra']->value;
if ($_smarty_tpl->tpl_vars['is_phone_number_with_country_selection']->value) {
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'show_button_text'=>false,'show_button_symbol'=>false,'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"phone_country="),'suffix'=>"phone_code_".((string)$_smarty_tpl->tpl_vars['id']->value),'items'=>$_smarty_tpl->tpl_vars['countries']->value,'selected_id'=>mb_strtolower($_smarty_tpl->tpl_vars['country_code']->value, 'UTF-8'),'display_icons'=>true,'key_name'=>"name",'dropdown_menu_item_link_class'=>"cm-phone-number-with-country-selection-li-link",'class'=>"cm-phone-number-with-country-selection-btn-group ty-btn-group--phone-mask ty-dropleft ".((string)$_smarty_tpl->tpl_vars['btn_group']->value),'button_class'=>"ty-select-block__a--phone-mask ".((string)$_smarty_tpl->tpl_vars['button_class']->value),'show_group'=>true), 0, false);
$_smarty_tpl->assign('select_countries', ob_get_clean());
echo smarty_modifier_replace(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['select_countries']->value),"> <","><");
}?></div><?php if ($_smarty_tpl->tpl_vars['show_controls']->value) {?></div><?php }
if ($_smarty_tpl->tpl_vars['show_control_group']->value) {?></div><?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="components/phone.tpl" id="<?php echo smarty_function_set_id(array('name'=>"components/phone.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->_assignInScope('rnd', rand());
$_smarty_tpl->_assignInScope('is_phone_number_with_country_selection', ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['phone_validation_mode'] === "phone_number_with_country_selection"));
$_smarty_tpl->_assignInScope('checkout', (($tmp = $_smarty_tpl->tpl_vars['checkout']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['checkout']->value) {
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['rnd']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_controls', (($tmp = $_smarty_tpl->tpl_vars['show_controls']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('default_style', (($tmp = $_smarty_tpl->tpl_vars['default_style']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('required', (($tmp = $_smarty_tpl->tpl_vars['required']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('control_group_class', (($tmp = "litecheckout__field ".((string)$_smarty_tpl->tpl_vars['control_group_class']->value) ?? null)===null||$tmp==='' ? "litecheckout__field" ?? null : $tmp));
$_smarty_tpl->_assignInScope('label_position', (($tmp = $_smarty_tpl->tpl_vars['label_position']->value ?? null)===null||$tmp==='' ? "after" ?? null : $tmp));
$_smarty_tpl->_assignInScope('label_class', (($tmp = "litecheckout__label ".((string)$_smarty_tpl->tpl_vars['label_class']->value) ?? null)===null||$tmp==='' ? "litecheckout__label" ?? null : $tmp));
$_smarty_tpl->_assignInScope('label_text', (($tmp = $_smarty_tpl->tpl_vars['label_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("phone_mask_label") ?? null : $tmp));
$_smarty_tpl->_assignInScope('class', "litecheckout__input litecheckout__input--mask-phone ".((string)$_smarty_tpl->tpl_vars['class']->value));
$_smarty_tpl->_assignInScope('btn_group', "ty-btn-group--litecheckout ".((string)$_smarty_tpl->tpl_vars['btn_group']->value));
$_smarty_tpl->_assignInScope('button_class', "ty-select-block__a--litecheckout ".((string)$_smarty_tpl->tpl_vars['button_class']->value));
$_smarty_tpl->_assignInScope('input_phone_container_class', $_smarty_tpl->tpl_vars['is_phone_number_with_country_selection']->value ? "ty-input-append--litecheckout ".((string)$_smarty_tpl->tpl_vars['input_phone_container_class']->value) : $_smarty_tpl->tpl_vars['input_phone_container_class']->value);
$_smarty_tpl->_assignInScope('placeholder', $_smarty_tpl->tpl_vars['placeholder']->value ? $_smarty_tpl->tpl_vars['placeholder']->value : " ");
}
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['rnd']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('phone_mask_type_class', smarty_modifier_replace("ty-input-phone--".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['phone_validation_mode']),"_","-"));
$_smarty_tpl->_assignInScope('show_control_group', (($tmp = $_smarty_tpl->tpl_vars['show_control_group']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_controls', (($tmp = $_smarty_tpl->tpl_vars['show_controls']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('required', (($tmp = $_smarty_tpl->tpl_vars['required']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('name', (($tmp = $_smarty_tpl->tpl_vars['name']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('value', (($tmp = $_smarty_tpl->tpl_vars['value']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('title', (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('class', (($tmp = $_smarty_tpl->tpl_vars['class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('attrs', (($tmp = $_smarty_tpl->tpl_vars['attrs']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('extra', (($tmp = $_smarty_tpl->tpl_vars['extra']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('control_group_class', (($tmp = $_smarty_tpl->tpl_vars['control_group_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('label_position', (($tmp = $_smarty_tpl->tpl_vars['label_position']->value ?? null)===null||$tmp==='' ? "default" ?? null : $tmp));
$_smarty_tpl->_assignInScope('label_class', (($tmp = $_smarty_tpl->tpl_vars['label_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('label_text', (($tmp = $_smarty_tpl->tpl_vars['label_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("phone_mask_label") ?? null : $tmp));
$_smarty_tpl->_assignInScope('input_phone_container_class', (($tmp = $_smarty_tpl->tpl_vars['input_phone_container_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('btn_group', (($tmp = $_smarty_tpl->tpl_vars['btn_group']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('button_class', (($tmp = $_smarty_tpl->tpl_vars['button_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('default_style', (($tmp = $_smarty_tpl->tpl_vars['default_style']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('placeholder', $_smarty_tpl->tpl_vars['placeholder']->value);
$_smarty_tpl->_assignInScope('autocomplete', (($tmp = $_smarty_tpl->tpl_vars['autocomplete']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('aria_label', (($tmp = $_smarty_tpl->tpl_vars['aria_label']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('attrs_string', (($tmp = $_smarty_tpl->tpl_vars['attrs_string']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_colon', (($tmp = $_smarty_tpl->tpl_vars['show_colon']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('field_name_helper', (($tmp = $_smarty_tpl->tpl_vars['field_name_helper']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['name']->value ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['width']->value === "full") {
} elseif ($_smarty_tpl->tpl_vars['width']->value === "large") {
$_smarty_tpl->_assignInScope('input_phone_container_class', ((string)$_smarty_tpl->tpl_vars['input_phone_container_class']->value)." ty-input-phone-container--large");
} else {
$_smarty_tpl->_assignInScope('input_phone_container_class', ((string)$_smarty_tpl->tpl_vars['input_phone_container_class']->value)." ty-input-phone-container--default");
}
$_smarty_tpl->_assignInScope('country_code', (($tmp = $_smarty_tpl->tpl_vars['profile_data']->value['s_country'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('countries', fn_get_simple_phone_country_codes(1));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'id');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
$_tmp_array = isset($_smarty_tpl->tpl_vars['countries']) ? $_smarty_tpl->tpl_vars['countries']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['id']->value]['symbol'] = "+".((string)$_smarty_tpl->tpl_vars['country']->value['phone_code']);
$_smarty_tpl->_assignInScope('countries', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'id');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
if (substr($_smarty_tpl->tpl_vars['value']->value,0,(strlen((string) $_smarty_tpl->tpl_vars['country']->value['symbol']))) === $_smarty_tpl->tpl_vars['country']->value['symbol']) {
$_smarty_tpl->_assignInScope('country_code', $_smarty_tpl->tpl_vars['country']->value['country_code']);
if ($_smarty_tpl->tpl_vars['country']->value['is_main_for_phone_code']) {
break 1;
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['placeholder']->value !== false) {
$_smarty_tpl->_assignInScope('placeholder', $_smarty_tpl->tpl_vars['placeholder']->value || $_smarty_tpl->tpl_vars['placeholder']->value === '' ? $_smarty_tpl->tpl_vars['placeholder']->value : $_smarty_tpl->tpl_vars['countries']->value[mb_strtolower($_smarty_tpl->tpl_vars['country_code']->value, 'UTF-8')]['symbol']);
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", null, null);?><label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-mask-phone-label <?php if ($_smarty_tpl->tpl_vars['default_style']->value) {?>ty-control-group__title<?php }?> <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>cm-required cm-trim<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['show_colon']->value) {?>:<?php }?></label><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['show_control_group']->value) {?><div class="cm-mask-phone-group <?php if ($_smarty_tpl->tpl_vars['default_style']->value) {?>ty-control-group<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['control_group_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-phone-mask-group-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['label_position']->value === "default") {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'label');
}
}
if ($_smarty_tpl->tpl_vars['show_controls']->value) {?><div class="controls"><?php }?><div class="cm-field-container ty-field-phone-container <?php if ($_smarty_tpl->tpl_vars['is_phone_number_with_country_selection']->value) {?>ty-input-append ty-input-append--phone-mask<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_phone_container_class']->value, ENT_QUOTES, 'UTF-8');?>
"><input <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
type="tel" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-mask-phone ty-input-phone ty-input-fill <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['phone_mask_type_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['default_style']->value) {?>ty-input-text<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['title']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['placeholder']->value !== false) {?>placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['autocomplete']->value) {?>autocomplete="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['autocomplete']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['aria_label']->value) {?>aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['aria_label']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}?>data-ca-phone-mask-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Appearance']['phone_validation_mode'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-phone-mask-country="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country_code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-phone-mask-symbol="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['countries']->value[mb_strtolower($_smarty_tpl->tpl_vars['country_code']->value, 'UTF-8')]['symbol'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-check-filter="[data-ca-phone-mask-group-id='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
']" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-field="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name_helper']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-ca-lite-checkout-auto-save="true" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['attrs']->value) {
echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['attrs']->value);?>
 <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['attrs_string']->value) {
echo $_smarty_tpl->tpl_vars['attrs_string']->value;
}?>/><?php if ($_smarty_tpl->tpl_vars['label_position']->value === "after") {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'label');
}
echo $_smarty_tpl->tpl_vars['extra']->value;
if ($_smarty_tpl->tpl_vars['is_phone_number_with_country_selection']->value) {
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'show_button_text'=>false,'show_button_symbol'=>false,'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"phone_country="),'suffix'=>"phone_code_".((string)$_smarty_tpl->tpl_vars['id']->value),'items'=>$_smarty_tpl->tpl_vars['countries']->value,'selected_id'=>mb_strtolower($_smarty_tpl->tpl_vars['country_code']->value, 'UTF-8'),'display_icons'=>true,'key_name'=>"name",'dropdown_menu_item_link_class'=>"cm-phone-number-with-country-selection-li-link",'class'=>"cm-phone-number-with-country-selection-btn-group ty-btn-group--phone-mask ty-dropleft ".((string)$_smarty_tpl->tpl_vars['btn_group']->value),'button_class'=>"ty-select-block__a--phone-mask ".((string)$_smarty_tpl->tpl_vars['button_class']->value),'show_group'=>true), 0, true);
$_smarty_tpl->assign('select_countries', ob_get_clean());
echo smarty_modifier_replace(preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['select_countries']->value),"> <","><");
}?></div><?php if ($_smarty_tpl->tpl_vars['show_controls']->value) {?></div><?php }
if ($_smarty_tpl->tpl_vars['show_control_group']->value) {?></div><?php }
}
}
}
}
