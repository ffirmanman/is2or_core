<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:37:36
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/views/profiles/components/profile_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345280ba6da2_63212591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1b9d33b89090b4b53a0bec557a5e3189474ad68' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/views/profiles/components/profile_fields.tpl',
      1 => 1736834852,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:common/calendar.tpl' => 4,
    'tygh:views/profiles/components/vendor_terms.tpl' => 2,
    'tygh:common/fileuploader.tpl' => 2,
    'tygh:components/phone.tpl' => 2,
  ),
),false)) {
function content_68345280ba6da2_63212591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('email','shipping_same_as_billing','text_billing_same_with_shipping','yes','no','select_state','select_country','address_residential','address_commercial','remove_this_item','email','shipping_same_as_billing','text_billing_same_with_shipping','yes','no','select_state','select_country','address_residential','address_commercial','remove_this_item'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['show_email']->value) {?>
    <div class="ty-control-group">
        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_email" class="cm-required cm-email"><?php echo $_smarty_tpl->__("email");?>
<i>*</i></label>
        <input type="text" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_email" name="user_data[email]" size="32" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['disabled_param']->value, ENT_QUOTES, 'UTF-8');?>
 />
    </div>
<?php } else { ?>

<?php $_smarty_tpl->_assignInScope('fields', array());?>

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

<?php if ($_smarty_tpl->tpl_vars['address_flag']->value) {?>
    <div class="ty-profile-field__switch ty-address-switch clearfix">
        <div class="ty-profile-field__switch-label"><?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {
echo $_smarty_tpl->__("shipping_same_as_billing");
} else {
echo $_smarty_tpl->__("text_billing_same_with_shipping");
}?></div>
        <div class="ty-profile-field__switch-actions">
            <input class="radio cm-switch-availability cm-switch-inverse cm-switch-visibility" type="radio" name="ship_to_another" value="0" id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
_suffix_yes" <?php if (!$_smarty_tpl->tpl_vars['ship_to_another']->value) {?>checked="checked"<?php }?> /><label for="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
_suffix_yes"><?php echo $_smarty_tpl->__("yes");?>
</label>
            <input class="radio cm-switch-availability cm-switch-visibility" type="radio" name="ship_to_another" value="1" id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
_suffix_no" <?php if ($_smarty_tpl->tpl_vars['ship_to_another']->value) {?>checked="checked"<?php }?> /><label for="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
_suffix_no"><?php echo $_smarty_tpl->__("no");?>
</label>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden" name="ship_to_another" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['ship_to_another']->value ?? null)===null||$tmp==='' ? "1" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['address_flag']->value && !$_smarty_tpl->tpl_vars['ship_to_another']->value && ($_smarty_tpl->tpl_vars['section']->value == "S" || $_smarty_tpl->tpl_vars['section']->value == "B")) || $_smarty_tpl->tpl_vars['disabled_by_default']->value) {?>
    <?php $_smarty_tpl->_assignInScope('disabled_param', "disabled=\"disabled\"");?>
    <?php $_smarty_tpl->_assignInScope('_class', "disabled");?>
    <?php $_smarty_tpl->_assignInScope('hide_fields', true);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('disabled_param', '');?>
    <?php $_smarty_tpl->_assignInScope('_class', '');
}?>

<div class="clearfix">
<?php if ($_smarty_tpl->tpl_vars['body_id']->value || $_smarty_tpl->tpl_vars['grid_wrap']->value) {?>
    <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['hide_fields']->value) {?>hidden<?php }?>">
        <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_wrap']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['nothing_extra']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
}?>

<?php $_smarty_tpl->_assignInScope('default_data_name', (($tmp = $_smarty_tpl->tpl_vars['default_data_name']->value ?? null)===null||$tmp==='' ? "user_data" ?? null : $tmp));
$_smarty_tpl->_assignInScope('user_data', (($tmp = $_smarty_tpl->tpl_vars['user_data']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_smarty_tpl->_assignInScope('profile_data', (($tmp = $_smarty_tpl->tpl_vars['profile_data']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user_data']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('fields', fn_fill_profile_fields_value($_smarty_tpl->tpl_vars['fields']->value,$_smarty_tpl->tpl_vars['profile_data']->value));?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field', false, NULL, 'profile_fields', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_profile_fields']->value['index']++;
?>

<?php $_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['field']->value['value']);
if ($_smarty_tpl->tpl_vars['field']->value['field_name'] && $_smarty_tpl->tpl_vars['field']->value['is_default'] == smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('data_name', $_smarty_tpl->tpl_vars['default_data_name']->value);?>
    <?php $_smarty_tpl->_assignInScope('data_id', $_smarty_tpl->tpl_vars['field']->value['field_name']);?>
    <?php $_smarty_tpl->_assignInScope('data_file_name', $_smarty_tpl->tpl_vars['default_data_name']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('data_name', ((string)$_smarty_tpl->tpl_vars['default_data_name']->value)."[fields]");?>
    <?php $_smarty_tpl->_assignInScope('data_id', $_smarty_tpl->tpl_vars['field']->value['field_id']);?>
    <?php $_smarty_tpl->_assignInScope('data_file_name', ((string)$_smarty_tpl->tpl_vars['default_data_name']->value)."_fields");
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

<?php $_smarty_tpl->_assignInScope('skip_field', false);
if ($_smarty_tpl->tpl_vars['section']->value == "S" || $_smarty_tpl->tpl_vars['section']->value == "B") {?>
    <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>
        <?php $_smarty_tpl->_assignInScope('_to', "B");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_to', "S");?>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['_to']->value][$_smarty_tpl->tpl_vars['field']->value['matching_id']]) {?>
        <?php $_smarty_tpl->_assignInScope('skip_field', true);?>
    <?php }
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:profile_fields"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:profile_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="ty-control-group ty-profile-field__item ty-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PHONE") || $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'] == "phone-full") {?>cm-mask-phone-group<?php }?>" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PHONE") || $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'] == "phone-full") {?>data-ca-phone-mask-group-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
<?php if (($_smarty_tpl->tpl_vars['pref_field_name']->value != $_smarty_tpl->tpl_vars['field']->value['description'] || $_smarty_tpl->tpl_vars['required']->value == "Y") && $_smarty_tpl->tpl_vars['field']->value['field_type'] != smarty_modifier_enum("ProfileFieldTypes::VENDOR_TERMS")) {?>
    <label
        for=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>

        class="ty-control-group__title cm-profile-field <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'] == "phone-full" || $_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PHONE")) {?>cm-mask-phone-label<?php }?> <?php if ($_smarty_tpl->tpl_vars['required']->value == "Y") {?>cm-required cm-trim<?php }
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == "Z") {?> cm-zipcode<?php }
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == "E") {?> cm-email<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == "Z") {
if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }
}?>"
    ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
<?php }?>

    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>
        <?php $_smarty_tpl->_assignInScope('_country', $_smarty_tpl->tpl_vars['profile_data']->value['s_country']);?>
        <?php $_smarty_tpl->_assignInScope('_state', $_smarty_tpl->tpl_vars['value']->value);?>

        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-profile-field__select-state cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
}?>" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?>>
            <?php if ($_smarty_tpl->tpl_vars['required']->value !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['states']->value && $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
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

        <input <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="text" id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_d" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" size="32" maxlength="64" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" class="cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> ty-input-text hidden <?php if ($_smarty_tpl->tpl_vars['_class']->value) {?>disabled<?php }?>"/>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::COUNTRY")) {?>
        <?php $_smarty_tpl->_assignInScope('_country', $_smarty_tpl->tpl_vars['value']->value);?>

        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-profile-field__select-country cm-country <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?>>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:country_selectbox_items"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['required']->value !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
            <?php }?>
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
]" value="N" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?> />
        <input type="checkbox" id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['value']->value == "Y") {?>checked="checked"<?php }?> class="checkbox <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?> />

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
        <textarea <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-input-textarea <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" cols="32" rows="3" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
        <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."elm_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['value']->value,'extra'=>$_smarty_tpl->tpl_vars['disabled_param']->value), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."elm_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['value']->value), 0, true);
?>
        <?php }?>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-profile-field__select <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?>>
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
        <div id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
>
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
            <input class="radio <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((!$_smarty_tpl->tpl_vars['value']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_rfe']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_rfe']->value['first'] : null)) || $_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['k']->value) {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?> /><span class="radio"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</span>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
        <input class="radio <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_residential" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="residential" <?php if (!$_smarty_tpl->tpl_vars['value']->value || $_smarty_tpl->tpl_vars['value']->value == "residential") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?> /><span class="radio"><?php echo $_smarty_tpl->__("address_residential");?>
</span>
        <input class="radio <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_commercial" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="commercial" <?php if ($_smarty_tpl->tpl_vars['value']->value == "commercial") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?> /><span class="radio"><?php echo $_smarty_tpl->__("address_commercial");?>
</span>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::VENDOR_TERMS")) {?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/vendor_terms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::FILE")) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['file_name']))) {?>
            <div class="text-type-value" data-file-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hash_name']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->_assignInScope('additional_class', $_smarty_tpl->tpl_vars['field']->value['required'] === smarty_modifier_enum("YesNo::YES") ? "cm-file-required" : '');?>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-fileuploader__icon cm-file-remove ".((string)$_smarty_tpl->tpl_vars['additional_class']->value),'id'=>$_smarty_tpl->tpl_vars['hash_name']->value,'title'=>$_smarty_tpl->__("remove_this_item")),$_smarty_tpl);?>

                <span class="ty-fileuploader__filename ty-filename-link upload-filename">
                    <a href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['value']->value['link'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value['file_name'], ENT_QUOTES, 'UTF-8');?>
</a>
                </span>
            </div>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>$_smarty_tpl->tpl_vars['var_name']->value,'label_id'=>"elm_".((string)$_smarty_tpl->tpl_vars['id_prefix']->value).((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'hidden_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'hidden_value'=>(($tmp = $_smarty_tpl->tpl_vars['value']->value['file_name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'prefix'=>$_smarty_tpl->tpl_vars['id_prefix']->value,'disabled_param'=>$_smarty_tpl->tpl_vars['disabled_param']->value,'max_upload_filesize'=>$_smarty_tpl->tpl_vars['config']->value['tweaks']['profile_field_max_upload_filesize']), 0, true);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PHONE") || $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'] == "phone-full") {?>
        <?php $_smarty_tpl->_assignInScope('attrs', array('size'=>"32"));?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['attrs']) ? $_smarty_tpl->tpl_vars['attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["x-autocompletetype"] = $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'];
$_smarty_tpl->_assignInScope('attrs', $_tmp_array);?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('class', !$_smarty_tpl->tpl_vars['skip_field']->value ? $_smarty_tpl->tpl_vars['_class']->value : "cm-skip-avail-switch");?>
        <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?>
            <?php $_smarty_tpl->_assignInScope('attrs_string', $_smarty_tpl->tpl_vars['disabled_param']->value);?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_control_group'=>false,'id'=>$_smarty_tpl->tpl_vars['element_id']->value,'name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'value'=>$_smarty_tpl->tpl_vars['value']->value,'label_text'=>$_smarty_tpl->tpl_vars['field']->value['description'],'attrs_string'=>$_smarty_tpl->tpl_vars['attrs_string']->value,'attrs'=>$_smarty_tpl->tpl_vars['attrs']->value,'class'=>((isset($_smarty_tpl->tpl_vars['__smarty_foreach_profile_fields']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_profile_fields']->value['index'] : null) === 0 ? ((string)$_smarty_tpl->tpl_vars['class']->value)." cm-focus" : $_smarty_tpl->tpl_vars['class']->value),'width'=>"full"), 0, true);
?>
    <?php } else { ?>          <input
            <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            type="text"
            id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>

            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
            size="32"
            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="ty-input-text <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_profile_fields']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_profile_fields']->value['index'] : null) == 0) {?> cm-focus<?php }?>"
            <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?>
        />
    <?php }?>

<?php $_smarty_tpl->_assignInScope('pref_field_name', $_smarty_tpl->tpl_vars['field']->value['description']);?>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:profile_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['body_id']->value || $_smarty_tpl->tpl_vars['grid_wrap']->value) {?>
        </div>
    </div>
<?php }?>
</div>

<?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/profiles/components/profile_fields.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/profiles/components/profile_fields.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_email']->value) {?>
    <div class="ty-control-group">
        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_email" class="cm-required cm-email"><?php echo $_smarty_tpl->__("email");?>
<i>*</i></label>
        <input type="text" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_email" name="user_data[email]" size="32" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['disabled_param']->value, ENT_QUOTES, 'UTF-8');?>
 />
    </div>
<?php } else { ?>

<?php $_smarty_tpl->_assignInScope('fields', array());?>

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

<?php if ($_smarty_tpl->tpl_vars['address_flag']->value) {?>
    <div class="ty-profile-field__switch ty-address-switch clearfix">
        <div class="ty-profile-field__switch-label"><?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {
echo $_smarty_tpl->__("shipping_same_as_billing");
} else {
echo $_smarty_tpl->__("text_billing_same_with_shipping");
}?></div>
        <div class="ty-profile-field__switch-actions">
            <input class="radio cm-switch-availability cm-switch-inverse cm-switch-visibility" type="radio" name="ship_to_another" value="0" id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
_suffix_yes" <?php if (!$_smarty_tpl->tpl_vars['ship_to_another']->value) {?>checked="checked"<?php }?> /><label for="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
_suffix_yes"><?php echo $_smarty_tpl->__("yes");?>
</label>
            <input class="radio cm-switch-availability cm-switch-visibility" type="radio" name="ship_to_another" value="1" id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
_suffix_no" <?php if ($_smarty_tpl->tpl_vars['ship_to_another']->value) {?>checked="checked"<?php }?> /><label for="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
_suffix_no"><?php echo $_smarty_tpl->__("no");?>
</label>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden" name="ship_to_another" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['ship_to_another']->value ?? null)===null||$tmp==='' ? "1" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['address_flag']->value && !$_smarty_tpl->tpl_vars['ship_to_another']->value && ($_smarty_tpl->tpl_vars['section']->value == "S" || $_smarty_tpl->tpl_vars['section']->value == "B")) || $_smarty_tpl->tpl_vars['disabled_by_default']->value) {?>
    <?php $_smarty_tpl->_assignInScope('disabled_param', "disabled=\"disabled\"");?>
    <?php $_smarty_tpl->_assignInScope('_class', "disabled");?>
    <?php $_smarty_tpl->_assignInScope('hide_fields', true);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('disabled_param', '');?>
    <?php $_smarty_tpl->_assignInScope('_class', '');
}?>

<div class="clearfix">
<?php if ($_smarty_tpl->tpl_vars['body_id']->value || $_smarty_tpl->tpl_vars['grid_wrap']->value) {?>
    <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['hide_fields']->value) {?>hidden<?php }?>">
        <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid_wrap']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['nothing_extra']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, true);
}?>

<?php $_smarty_tpl->_assignInScope('default_data_name', (($tmp = $_smarty_tpl->tpl_vars['default_data_name']->value ?? null)===null||$tmp==='' ? "user_data" ?? null : $tmp));
$_smarty_tpl->_assignInScope('user_data', (($tmp = $_smarty_tpl->tpl_vars['user_data']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_smarty_tpl->_assignInScope('profile_data', (($tmp = $_smarty_tpl->tpl_vars['profile_data']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user_data']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('fields', fn_fill_profile_fields_value($_smarty_tpl->tpl_vars['fields']->value,$_smarty_tpl->tpl_vars['profile_data']->value));?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field', false, NULL, 'profile_fields', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_profile_fields']->value['index']++;
?>

<?php $_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['field']->value['value']);
if ($_smarty_tpl->tpl_vars['field']->value['field_name'] && $_smarty_tpl->tpl_vars['field']->value['is_default'] == smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('data_name', $_smarty_tpl->tpl_vars['default_data_name']->value);?>
    <?php $_smarty_tpl->_assignInScope('data_id', $_smarty_tpl->tpl_vars['field']->value['field_name']);?>
    <?php $_smarty_tpl->_assignInScope('data_file_name', $_smarty_tpl->tpl_vars['default_data_name']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('data_name', ((string)$_smarty_tpl->tpl_vars['default_data_name']->value)."[fields]");?>
    <?php $_smarty_tpl->_assignInScope('data_id', $_smarty_tpl->tpl_vars['field']->value['field_id']);?>
    <?php $_smarty_tpl->_assignInScope('data_file_name', ((string)$_smarty_tpl->tpl_vars['default_data_name']->value)."_fields");
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

<?php $_smarty_tpl->_assignInScope('skip_field', false);
if ($_smarty_tpl->tpl_vars['section']->value == "S" || $_smarty_tpl->tpl_vars['section']->value == "B") {?>
    <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>
        <?php $_smarty_tpl->_assignInScope('_to', "B");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_to', "S");?>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['_to']->value][$_smarty_tpl->tpl_vars['field']->value['matching_id']]) {?>
        <?php $_smarty_tpl->_assignInScope('skip_field', true);?>
    <?php }
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:profile_fields"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:profile_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div class="ty-control-group ty-profile-field__item ty-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PHONE") || $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'] == "phone-full") {?>cm-mask-phone-group<?php }?>" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PHONE") || $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'] == "phone-full") {?>data-ca-phone-mask-group-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
<?php if (($_smarty_tpl->tpl_vars['pref_field_name']->value != $_smarty_tpl->tpl_vars['field']->value['description'] || $_smarty_tpl->tpl_vars['required']->value == "Y") && $_smarty_tpl->tpl_vars['field']->value['field_type'] != smarty_modifier_enum("ProfileFieldTypes::VENDOR_TERMS")) {?>
    <label
        for=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>

        class="ty-control-group__title cm-profile-field <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'] == "phone-full" || $_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PHONE")) {?>cm-mask-phone-label<?php }?> <?php if ($_smarty_tpl->tpl_vars['required']->value == "Y") {?>cm-required cm-trim<?php }
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == "Z") {?> cm-zipcode<?php }
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == "E") {?> cm-email<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == "Z") {
if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }
}?>"
    ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
<?php }?>

    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>
        <?php $_smarty_tpl->_assignInScope('_country', $_smarty_tpl->tpl_vars['profile_data']->value['s_country']);?>
        <?php $_smarty_tpl->_assignInScope('_state', $_smarty_tpl->tpl_vars['value']->value);?>

        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-profile-field__select-state cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
}?>" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?>>
            <?php if ($_smarty_tpl->tpl_vars['required']->value !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['states']->value && $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
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

        <input <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="text" id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_d" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" size="32" maxlength="64" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" class="cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> ty-input-text hidden <?php if ($_smarty_tpl->tpl_vars['_class']->value) {?>disabled<?php }?>"/>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::COUNTRY")) {?>
        <?php $_smarty_tpl->_assignInScope('_country', $_smarty_tpl->tpl_vars['value']->value);?>

        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-profile-field__select-country cm-country <?php if ($_smarty_tpl->tpl_vars['section']->value == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?>>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:country_selectbox_items"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['required']->value !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
            <?php }?>
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
]" value="N" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?> />
        <input type="checkbox" id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['value']->value == "Y") {?>checked="checked"<?php }?> class="checkbox <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?> />

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
        <textarea <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-input-textarea <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" cols="32" rows="3" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
        <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."elm_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['value']->value,'extra'=>$_smarty_tpl->tpl_vars['disabled_param']->value), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."elm_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['value']->value), 0, true);
?>
        <?php }?>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
        <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-profile-field__select <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?>>
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
        <div id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
>
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
            <input class="radio <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((!$_smarty_tpl->tpl_vars['value']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_rfe']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_rfe']->value['first'] : null)) || $_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['k']->value) {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?> /><span class="radio"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</span>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
        <input class="radio <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_residential" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="residential" <?php if (!$_smarty_tpl->tpl_vars['value']->value || $_smarty_tpl->tpl_vars['value']->value == "residential") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?> /><span class="radio"><?php echo $_smarty_tpl->__("address_residential");?>
</span>
        <input class="radio <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_commercial" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="commercial" <?php if ($_smarty_tpl->tpl_vars['value']->value == "commercial") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?> /><span class="radio"><?php echo $_smarty_tpl->__("address_commercial");?>
</span>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::VENDOR_TERMS")) {?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/vendor_terms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::FILE")) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['file_name']))) {?>
            <div class="text-type-value" data-file-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hash_name']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->_assignInScope('additional_class', $_smarty_tpl->tpl_vars['field']->value['required'] === smarty_modifier_enum("YesNo::YES") ? "cm-file-required" : '');?>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-fileuploader__icon cm-file-remove ".((string)$_smarty_tpl->tpl_vars['additional_class']->value),'id'=>$_smarty_tpl->tpl_vars['hash_name']->value,'title'=>$_smarty_tpl->__("remove_this_item")),$_smarty_tpl);?>

                <span class="ty-fileuploader__filename ty-filename-link upload-filename">
                    <a href="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['value']->value['link'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value['file_name'], ENT_QUOTES, 'UTF-8');?>
</a>
                </span>
            </div>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>$_smarty_tpl->tpl_vars['var_name']->value,'label_id'=>"elm_".((string)$_smarty_tpl->tpl_vars['id_prefix']->value).((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'hidden_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'hidden_value'=>(($tmp = $_smarty_tpl->tpl_vars['value']->value['file_name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'prefix'=>$_smarty_tpl->tpl_vars['id_prefix']->value,'disabled_param'=>$_smarty_tpl->tpl_vars['disabled_param']->value,'max_upload_filesize'=>$_smarty_tpl->tpl_vars['config']->value['tweaks']['profile_field_max_upload_filesize']), 0, true);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PHONE") || $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'] == "phone-full") {?>
        <?php $_smarty_tpl->_assignInScope('attrs', array('size'=>"32"));?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['attrs']) ? $_smarty_tpl->tpl_vars['attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["x-autocompletetype"] = $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'];
$_smarty_tpl->_assignInScope('attrs', $_tmp_array);?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('class', !$_smarty_tpl->tpl_vars['skip_field']->value ? $_smarty_tpl->tpl_vars['_class']->value : "cm-skip-avail-switch");?>
        <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {?>
            <?php $_smarty_tpl->_assignInScope('attrs_string', $_smarty_tpl->tpl_vars['disabled_param']->value);?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_control_group'=>false,'id'=>$_smarty_tpl->tpl_vars['element_id']->value,'name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'value'=>$_smarty_tpl->tpl_vars['value']->value,'label_text'=>$_smarty_tpl->tpl_vars['field']->value['description'],'attrs_string'=>$_smarty_tpl->tpl_vars['attrs_string']->value,'attrs'=>$_smarty_tpl->tpl_vars['attrs']->value,'class'=>((isset($_smarty_tpl->tpl_vars['__smarty_foreach_profile_fields']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_profile_fields']->value['index'] : null) === 0 ? ((string)$_smarty_tpl->tpl_vars['class']->value)." cm-focus" : $_smarty_tpl->tpl_vars['class']->value),'width'=>"full"), 0, true);
?>
    <?php } else { ?>          <input
            <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            type="text"
            id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>

            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
            size="32"
            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="ty-input-text <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_profile_fields']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_profile_fields']->value['index'] : null) == 0) {?> cm-focus<?php }?>"
            <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?>
        />
    <?php }?>

<?php $_smarty_tpl->_assignInScope('pref_field_name', $_smarty_tpl->tpl_vars['field']->value['description']);?>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:profile_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['body_id']->value || $_smarty_tpl->tpl_vars['grid_wrap']->value) {?>
        </div>
    </div>
<?php }?>
</div>

<?php }
}
}
}
}
