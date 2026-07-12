<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:25:25
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/profiles/components/profile_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345db59f5b00_49047720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8979d00b927bbd450f7e0c935a9851e0b1923ae6' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/profiles/components/profile_fields.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:common/calendar.tpl' => 1,
    'tygh:common/fileuploader.tpl' => 1,
    'tygh:components/phone.tpl' => 1,
    'tygh:components/append_language.tpl' => 1,
  ),
),false)) {
function content_68345db59f5b00_49047720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('shipping_same_as_billing','text_billing_same_with_shipping','yes','no','select_state','select_country','address_residential','address_commercial','remove_this_item'));
$_smarty_tpl->_assignInScope('fields', array());?>

<?php if (!$_smarty_tpl->tpl_vars['exclude']->value && !$_smarty_tpl->tpl_vars['include']->value) {?>
    <?php $_smarty_tpl->_assignInScope('fields', $_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value]);
} else { ?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value], 'field', false, 'key');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['include']->value) {?>
            <?php if (in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['include']->value)) {?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fields']) ? $_smarty_tpl->tpl_vars['fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['field']->value;
$_smarty_tpl->_assignInScope('fields', $_tmp_array);?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['exclude']->value) {?>
            <?php if (!in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['exclude']->value)) {?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['fields']) ? $_smarty_tpl->tpl_vars['fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['field']->value;
$_smarty_tpl->_assignInScope('fields', $_tmp_array);?>
            <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if ($_smarty_tpl->tpl_vars['fields']->value) {?>

<?php if (!$_smarty_tpl->tpl_vars['nothing_extra']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['shipping_flag']->value) {?>
    <div class="shipping-flag">
        <input class="hidden" id="elm_ship_to_another" type="checkbox" name="ship_to_another" value="1" <?php if ($_smarty_tpl->tpl_vars['ship_to_another']->value) {?>checked="checked"<?php }?> />

        <span class="shipping-flag-title">
            <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>
                <?php echo $_smarty_tpl->__("shipping_same_as_billing");?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->__("text_billing_same_with_shipping");?>

            <?php }?>
        </span>

        <label class="radio inline">
            <input class="cm-switch-availability cm-switch-inverse " type="radio" name="ship_to_another" value="0" id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
_suffix_yes" <?php if (!$_smarty_tpl->tpl_vars['ship_to_another']->value) {?>checked="checked"<?php }?> />
            <?php echo $_smarty_tpl->__("yes");?>

        </label>

        <label class="radio inline">
            <input class=" cm-switch-availability" type="radio" name="ship_to_another" value="1" id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
_suffix_no" <?php if ($_smarty_tpl->tpl_vars['ship_to_another']->value) {?>checked="checked"<?php }?> />
            <?php echo $_smarty_tpl->__("no");?>

        </label>
    </div>

<?php } elseif ($_smarty_tpl->tpl_vars['section']->value == "S") {?>
    <?php $_smarty_tpl->_assignInScope('ship_to_another', true);?>
    <input type="hidden" name="ship_to_another" value="1" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['body_id']->value) {?>
    <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['shipping_flag']->value && !$_smarty_tpl->tpl_vars['ship_to_another']->value) {?>
    <?php $_smarty_tpl->_assignInScope('disabled_param', "disabled=\"disabled\"");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('disabled_param', '');
}?>

<?php $_smarty_tpl->_assignInScope('default_data_name', (($tmp = $_smarty_tpl->tpl_vars['default_data_name']->value ?? null)===null||$tmp==='' ? "user_data" ?? null : $tmp));
$_smarty_tpl->_assignInScope('user_data', (($tmp = $_smarty_tpl->tpl_vars['user_data']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_smarty_tpl->_assignInScope('profile_data', (($tmp = $_smarty_tpl->tpl_vars['profile_data']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user_data']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('fields', fn_fill_profile_fields_value($_smarty_tpl->tpl_vars['fields']->value,$_smarty_tpl->tpl_vars['profile_data']->value));?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>

<?php $_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['field']->value['value']);
if ($_smarty_tpl->tpl_vars['field']->value['field_name'] && $_smarty_tpl->tpl_vars['field']->value['is_default'] == smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('data_name', $_smarty_tpl->tpl_vars['default_data_name']->value);?>
    <?php $_smarty_tpl->_assignInScope('data_id', $_smarty_tpl->tpl_vars['field']->value['field_name']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('data_name', ((string)$_smarty_tpl->tpl_vars['default_data_name']->value)."[fields]");?>
    <?php $_smarty_tpl->_assignInScope('data_id', $_smarty_tpl->tpl_vars['field']->value['field_id']);
}?>

<?php $_smarty_tpl->_assignInScope('element_id', ((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."elm_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']));
$_smarty_tpl->_assignInScope('required', $_smarty_tpl->tpl_vars['field']->value['required']);?>

<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::FILE")) {?>
    <?php $_smarty_tpl->_assignInScope('var_name', "profile_fields[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]");?>
    <?php $_smarty_tpl->_assignInScope('hash_name', md5($_smarty_tpl->tpl_vars['var_name']->value));?>
    <?php $_smarty_tpl->_assignInScope('element_id', "type_".((string)$_smarty_tpl->tpl_vars['hash_name']->value));?>
    <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['file_name']))) {?>
        <?php $_smarty_tpl->_assignInScope('required', smarty_modifier_enum("YesNo::NO"));?>
    <?php }
}?>

<?php $_smarty_tpl->_assignInScope('enable_required', (($tmp = $_smarty_tpl->tpl_vars['enable_required']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if (!$_smarty_tpl->tpl_vars['enable_required']->value) {?>
    <?php $_smarty_tpl->_assignInScope('required', smarty_modifier_enum("YesNo::NO"));
}?>

<?php $_smarty_tpl->_assignInScope('allow_email_required', (($tmp = $_smarty_tpl->tpl_vars['allow_email_required']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['allow_email_required']->value && $_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::EMAIL")) {?>
    <?php $_smarty_tpl->_assignInScope('required', smarty_modifier_enum("YesNo::YES"));
}?>

<?php $_smarty_tpl->_assignInScope('is_i18n_field', $_smarty_tpl->tpl_vars['company_data']->value["i18n_".((string)$_smarty_tpl->tpl_vars['data_id']->value)] ? true : false);?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode'] === "update" && !$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
    <?php $_smarty_tpl->_assignInScope('input_append', "input-append");?>
    <?php $_smarty_tpl->_assignInScope('input_append_wysiwyg', "input-append input-append--wysiwyg");
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:profile_fields"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:profile_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="control-group profile-field-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PHONE") || $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'] == "phone-full") {?>cm-mask-phone-group<?php }?>" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PHONE") || $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'] == "phone-full") {?>data-ca-phone-mask-group-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <label
        for=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>

        class="control-label cm-profile-field <?php if ($_smarty_tpl->tpl_vars['required']->value == "Y") {?>cm-required cm-trim<?php }
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PHONE") || ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'] == "phone-full")) {?> cm-mask-phone-label <?php }
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == "Z") {?> cm-zipcode<?php }
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == "E") {?> cm-email<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == "Z") {
if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }
}?>"
    ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>

    <div class="controls">

    <?php if ($_smarty_tpl->tpl_vars['is_i18n_field']->value) {?>
        <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>
        <?php if (!empty($_smarty_tpl->tpl_vars['profile_data']->value['s_country'])) {?>
            <?php $_smarty_tpl->_assignInScope('_country', $_smarty_tpl->tpl_vars['profile_data']->value['s_country']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('_country', '');?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('_state', $_smarty_tpl->tpl_vars['value']->value);?>

        <select class="cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if (!$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>hidden cm-skip-avail-switch<?php }?>" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>_d<?php }?>" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
>
            <?php if ($_smarty_tpl->tpl_vars['states']->value && $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
                <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['_state']->value == $_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </select>
        <input type="text" id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>_d<?php }?>" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" size="32" maxlength="64" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>disabled="disabled"<?php }?> class="cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> input-large <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>hidden cm-skip-avail-switch<?php }?>" />

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::COUNTRY")) {?>
        <?php $_smarty_tpl->_assignInScope('_country', $_smarty_tpl->tpl_vars['value']->value);?>

        <select id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 class="cm-country <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?>" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:country_selectbox_items"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['_country']->value == $_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </select>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
 />
        <label class="checkbox">
        <input type="checkbox" id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['value']->value == "Y") {?>checked="checked"<?php }?> <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
 /></label>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
        <textarea class="input-large" id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" cols="32" rows="3" <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"elm_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['value']->value,'extra'=>$_smarty_tpl->tpl_vars['disabled_param']->value), 0, true);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
        <select id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
>
            <?php if ($_smarty_tpl->tpl_vars['required']->value != "Y") {?>
            <option value="">--</option>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['values'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>
        <div class="select-field">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['values'], 'v', false, 'k', 'rfe', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_rfe']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_rfe']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_rfe']->value['index'];
?>
        <input class="radio" type="radio" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((!$_smarty_tpl->tpl_vars['value']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_rfe']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_rfe']->value['first'] : null)) || $_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['k']->value) {?>checked="checked"<?php }?> <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
 /><label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</label>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
        <input class="radio valign <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" type="radio" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
_residential" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="residential" <?php if (!$_smarty_tpl->tpl_vars['value']->value || $_smarty_tpl->tpl_vars['value']->value == "residential") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?> /><span class="radio"><?php echo $_smarty_tpl->__("address_residential");?>
</span>
        <input class="radio valign <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" type="radio" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
_commercial" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="commercial" <?php if ($_smarty_tpl->tpl_vars['value']->value == "commercial") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?> /><span class="radio"><?php echo $_smarty_tpl->__("address_commercial");?>
</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::FILE")) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['file_name']))) {?>
            <div class="text-type-value" data-file-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hash_name']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->_assignInScope('additional_class', $_smarty_tpl->tpl_vars['field']->value['required'] === smarty_modifier_enum("YesNo::YES") ? "cm-file-required" : '');?>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-remove-sign cm-tooltip hand cm-file-remove ".((string)$_smarty_tpl->tpl_vars['additional_class']->value),'id'=>$_smarty_tpl->tpl_vars['hash_name']->value,'title'=>$_smarty_tpl->__("remove_this_item")),$_smarty_tpl);?>

                <span><a href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['value']->value['link'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value['file_name'], ENT_QUOTES, 'UTF-8');?>
</a></span>
            </div>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>$_smarty_tpl->tpl_vars['var_name']->value,'label_id'=>"elm_".((string)$_smarty_tpl->tpl_vars['id_prefix']->value).((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'hidden_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'hidden_value'=>(($tmp = $_smarty_tpl->tpl_vars['value']->value['file_name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'prefix'=>$_smarty_tpl->tpl_vars['id_prefix']->value,'disabled_param'=>$_smarty_tpl->tpl_vars['disabled_param']->value,'max_upload_filesize'=>$_smarty_tpl->tpl_vars['config']->value['tweaks']['profile_field_max_upload_filesize']), 0, true);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PHONE") || $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'] == "phone-full") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_control_group'=>false,'show_controls'=>false,'id'=>((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."elm_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'value'=>$_smarty_tpl->tpl_vars['value']->value,'label_text'=>$_smarty_tpl->tpl_vars['field']->value['description'],'attrs_string'=>$_smarty_tpl->tpl_vars['disabled_param']->value), 0, true);
?>
    <?php } else { ?>          <input
            type="text"
            id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
"
            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
            size="32"
            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="input-large"
            <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>

        />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['is_i18n_field']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs']->value), 0, true);
?>
    </div>
    <?php }?>
    </div>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:profile_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['body_id']->value) {?>
</div>
<?php }?>

<?php }
}
}
