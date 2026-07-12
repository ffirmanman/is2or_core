<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:58:37
  from 'tygh:views/profiles/components/profile_fields.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaabdbd0728_57581657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ef260874178a189de1a699bd92e74774ae022b0' => 
    array (
      0 => 'views/profiles/components/profile_fields.tpl',
      1 => 1767831049,
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
))) {
function content_69adaabdbd0728_57581657 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/profiles/components';
\Tygh\Languages\Helper::preloadLangVars(array('email','shipping_same_as_billing','text_billing_same_with_shipping','yes','no','select_state','select_country','address_residential','address_commercial','remove_this_item','email','shipping_same_as_billing','text_billing_same_with_shipping','yes','no','select_state','select_country','address_residential','address_commercial','remove_this_item'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('show_email')) {?>
    <div class="ty-control-group">
        <label for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_email" class="cm-required cm-email"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<i>*</i></label>
        <input type="text" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_email" name="user_data[email]" size="32" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['email']), ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('disabled_param')), ENT_QUOTES, 'UTF-8');?>
 />
    </div>
<?php } else { ?>

<?php $_smarty_tpl->assign('fields', array(), false, NULL);?>

<?php if (!$_smarty_tpl->getValue('exclude') && !$_smarty_tpl->getValue('include')) {?>
    <?php $_smarty_tpl->assign('fields', $_smarty_tpl->getValue('profile_fields')[$_smarty_tpl->getValue('section')], false, NULL);
} else { ?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile_fields')[$_smarty_tpl->getValue('section')], 'field', false, 'key');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('field')->value) {
$foreach2DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('include')) {?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('field')['field_name'],$_smarty_tpl->getValue('include'))) {?>
                <?php $_tmp_array = $_smarty_tpl->getValue('fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('key')] = $_smarty_tpl->getValue('field');
$_smarty_tpl->assign('fields', $_tmp_array, false, NULL);?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->getValue('exclude')) {?>
            <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('field')['field_name'],$_smarty_tpl->getValue('exclude'))) {?>
                <?php $_tmp_array = $_smarty_tpl->getValue('fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('key')] = $_smarty_tpl->getValue('field');
$_smarty_tpl->assign('fields', $_tmp_array, false, NULL);?>
            <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?>

<?php if ($_smarty_tpl->getValue('fields')) {?>

<?php if ($_smarty_tpl->getValue('address_flag')) {?>
    <div class="ty-profile-field__switch ty-address-switch clearfix">
        <div class="ty-profile-field__switch-label"><?php if ($_smarty_tpl->getValue('section') == "S") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_same_as_billing", [], $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_billing_same_with_shipping", [], $_smarty_tpl->getSmarty()->getLanguage());
}?></div>
        <div class="ty-profile-field__switch-actions">
            <input class="radio cm-switch-availability cm-switch-inverse cm-switch-visibility" type="radio" name="ship_to_another" value="0" id="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('body_id')), ENT_QUOTES, 'UTF-8');?>
_suffix_yes" <?php if (!$_smarty_tpl->getValue('ship_to_another')) {?>checked="checked"<?php }?> /><label for="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('body_id')), ENT_QUOTES, 'UTF-8');?>
_suffix_yes"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("yes", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
            <input class="radio cm-switch-availability cm-switch-visibility" type="radio" name="ship_to_another" value="1" id="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('body_id')), ENT_QUOTES, 'UTF-8');?>
_suffix_no" <?php if ($_smarty_tpl->getValue('ship_to_another')) {?>checked="checked"<?php }?> /><label for="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('body_id')), ENT_QUOTES, 'UTF-8');?>
_suffix_no"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden" name="ship_to_another" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('ship_to_another') ?? null)===null||$tmp==='' ? "1" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if (($_smarty_tpl->getValue('address_flag') && !$_smarty_tpl->getValue('ship_to_another') && ($_smarty_tpl->getValue('section') == "S" || $_smarty_tpl->getValue('section') == "B")) || $_smarty_tpl->getValue('disabled_by_default')) {?>
    <?php $_smarty_tpl->assign('disabled_param', "disabled=\"disabled\"", false, NULL);?>
    <?php $_smarty_tpl->assign('_class', "disabled", false, NULL);?>
    <?php $_smarty_tpl->assign('hide_fields', true, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('disabled_param', '', false, NULL);?>
    <?php $_smarty_tpl->assign('_class', '', false, NULL);
}?>

<div class="clearfix">
<?php if ($_smarty_tpl->getValue('body_id') || $_smarty_tpl->getValue('grid_wrap')) {?>
    <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('body_id')), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->getValue('hide_fields')) {?>hidden<?php }?>">
        <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid_wrap')), ENT_QUOTES, 'UTF-8');?>
">
<?php }?>

<?php if (!$_smarty_tpl->getValue('nothing_extra')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getValue('title')), (int) 0, $_smarty_current_dir);
}?>

<?php $_smarty_tpl->assign('default_data_name', (($tmp = $_smarty_tpl->getValue('default_data_name') ?? null)===null||$tmp==='' ? "user_data" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('user_data', (($tmp = $_smarty_tpl->getValue('user_data') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('profile_data', (($tmp = $_smarty_tpl->getValue('profile_data') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('user_data') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('fields', $_smarty_tpl->getSmarty()->getModifierCallback('fn_fill_profile_fields_value')($_smarty_tpl->getValue('fields'),$_smarty_tpl->getValue('profile_data')), false, NULL);?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('fields'), 'field', false, NULL, 'profile_fields', array (
  'index' => true,
));
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('field')->value) {
$foreach3DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_profile_fields']->value['index']++;
?>

<?php $_smarty_tpl->assign('value', $_smarty_tpl->getValue('field')['value'], false, NULL);
if ($_smarty_tpl->getValue('field')['field_name'] && $_smarty_tpl->getValue('field')['is_default'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('data_name', $_smarty_tpl->getValue('default_data_name'), false, NULL);?>
    <?php $_smarty_tpl->assign('data_id', $_smarty_tpl->getValue('field')['field_name'], false, NULL);?>
    <?php $_smarty_tpl->assign('data_file_name', $_smarty_tpl->getValue('default_data_name'), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('data_name', ((string)$_smarty_tpl->getValue('default_data_name'))."[fields]", false, NULL);?>
    <?php $_smarty_tpl->assign('data_id', $_smarty_tpl->getValue('field')['field_id'], false, NULL);?>
    <?php $_smarty_tpl->assign('data_file_name', ((string)$_smarty_tpl->getValue('default_data_name'))."_fields", false, NULL);
}?>

<?php $_smarty_tpl->assign('element_id', ((string)$_smarty_tpl->getValue('id_prefix'))."elm_".((string)$_smarty_tpl->getValue('field')['field_id']), false, NULL);
$_smarty_tpl->assign('required', $_smarty_tpl->getValue('field')['required'], false, NULL);?>

<?php if ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::FILE")) {?>
    <?php $_smarty_tpl->assign('var_name', "profile_fields[".((string)$_smarty_tpl->getValue('data_id'))."]", false, NULL);?>
    <?php $_smarty_tpl->assign('hash_name', $_smarty_tpl->getSmarty()->getModifierCallback('md5')($_smarty_tpl->getValue('var_name')), false, NULL);?>
    <?php $_smarty_tpl->assign('element_id', "type_".((string)$_smarty_tpl->getValue('hash_name')), false, NULL);?>
    <?php if ((true && (true && null !== ($_smarty_tpl->getValue('value')['file_name'] ?? null)))) {?>
        <?php $_smarty_tpl->assign('required', $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"), false, NULL);?>
    <?php }
}?>

<?php $_smarty_tpl->assign('skip_field', false, false, NULL);
if ($_smarty_tpl->getValue('section') == "S" || $_smarty_tpl->getValue('section') == "B") {?>
    <?php if ($_smarty_tpl->getValue('section') == "S") {?>
        <?php $_smarty_tpl->assign('_to', "B", false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('_to', "S", false, NULL);?>
    <?php }?>
    <?php if (!$_smarty_tpl->getValue('profile_fields')[$_smarty_tpl->getValue('_to')][$_smarty_tpl->getValue('field')['matching_id']]) {?>
        <?php $_smarty_tpl->assign('skip_field', true, false, NULL);?>
    <?php }
}?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:profile_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<div class="ty-control-group ty-profile-field__item ty-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE") || $_smarty_tpl->getValue('field')['autocomplete_type'] == "phone-full") {?>cm-mask-phone-group<?php }?>" <?php if ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE") || $_smarty_tpl->getValue('field')['autocomplete_type'] == "phone-full") {?>data-ca-phone-mask-group-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
<?php if (($_smarty_tpl->getValue('pref_field_name') != $_smarty_tpl->getValue('field')['description'] || $_smarty_tpl->getValue('required') == "Y") && $_smarty_tpl->getValue('field')['field_type'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::VENDOR_TERMS")) {?>
    <label
        for=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>

        class="ty-control-group__title cm-profile-field <?php if ($_smarty_tpl->getValue('field')['autocomplete_type'] == "phone-full" || $_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE")) {?>cm-mask-phone-label<?php }?> <?php if ($_smarty_tpl->getValue('required') == "Y") {?>cm-required cm-trim<?php }
if ($_smarty_tpl->getValue('field')['field_type'] == "Z") {?> cm-zipcode<?php }
if ($_smarty_tpl->getValue('field')['field_type'] == "E") {?> cm-email<?php }?> <?php if ($_smarty_tpl->getValue('field')['field_type'] == "Z") {
if ($_smarty_tpl->getValue('section') == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }
}?>"
    ><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
</label>
<?php }?>

    <?php if ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::STATE")) {?>
        <?php $_smarty_tpl->assign('_country', $_smarty_tpl->getValue('profile_data')['s_country'], false, NULL);?>
        <?php $_smarty_tpl->assign('_state', $_smarty_tpl->getValue('value'), false, NULL);?>

        <select <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
 class="ty-profile-field__select-state cm-state <?php if ($_smarty_tpl->getValue('section') == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
}?>" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?>>
            <?php if ($_smarty_tpl->getValue('required') !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_state", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('states') && $_smarty_tpl->getValue('states')[$_smarty_tpl->getValue('_country')]) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('states')[$_smarty_tpl->getValue('_country')], 'state');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('state')->value) {
$foreach4DoElse = false;
?>
                    <option <?php if ($_smarty_tpl->getValue('_state') == $_smarty_tpl->getValue('state')['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['code']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['state']), ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php }?>
        </select>

        <input <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="text" id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
_d" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" size="32" maxlength="64" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_state')), ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" class="cm-state <?php if ($_smarty_tpl->getValue('section') == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> ty-input-text hidden <?php if ($_smarty_tpl->getValue('_class')) {?>disabled<?php }?>"/>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::COUNTRY")) {?>
        <?php $_smarty_tpl->assign('_country', $_smarty_tpl->getValue('value'), false, NULL);?>

        <select <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
 class="ty-profile-field__select-country cm-country <?php if ($_smarty_tpl->getValue('section') == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?>>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:country_selectbox_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('required') !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_country", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
            <?php }?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country', false, 'code');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('code')->value => $_smarty_tpl->getVariable('country')->value) {
$foreach5DoElse = false;
?>
            <option <?php if ($_smarty_tpl->getValue('_country') == $_smarty_tpl->getValue('code')) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('code')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('country')), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:country_selectbox_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </select>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::CHECKBOX")) {?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" value="N" <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?> />
        <input type="checkbox" id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
 name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->getValue('value') == "Y") {?>checked="checked"<?php }?> class="checkbox <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?> />

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::TEXT_AREA")) {?>
        <textarea <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-input-textarea <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
 name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" cols="32" rows="3" <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
</textarea>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::DATE")) {?>
        <?php if (!$_smarty_tpl->getValue('skip_field')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->getValue('id_prefix'))."elm_".((string)$_smarty_tpl->getValue('field')['field_id']),'date_name'=>((string)$_smarty_tpl->getValue('data_name'))."[".((string)$_smarty_tpl->getValue('data_id'))."]",'date_val'=>$_smarty_tpl->getValue('value'),'extra'=>$_smarty_tpl->getValue('disabled_param')), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->getValue('id_prefix'))."elm_".((string)$_smarty_tpl->getValue('field')['field_id']),'date_name'=>((string)$_smarty_tpl->getValue('data_name'))."[".((string)$_smarty_tpl->getValue('data_id'))."]",'date_val'=>$_smarty_tpl->getValue('value')), (int) 0, $_smarty_current_dir);
?>
        <?php }?>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::SELECT_BOX")) {?>
        <select <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
 class="ty-profile-field__select <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?>>
            <?php if ($_smarty_tpl->getValue('required') != "Y") {?>
            <option value="">--</option>
            <?php }?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('field')['values'], 'v', false, 'k');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('k')->value => $_smarty_tpl->getVariable('v')->value) {
$foreach6DoElse = false;
?>
            <option <?php if ($_smarty_tpl->getValue('value') == $_smarty_tpl->getValue('k')) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('k')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v')), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::RADIO")) {?>
        <div id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('field')['values'], 'v', false, 'k', 'rfe', array (
  'first' => true,
  'index' => true,
));
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('k')->value => $_smarty_tpl->getVariable('v')->value) {
$foreach7DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_rfe']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_rfe']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_rfe']->value['index'];
?>
            <input class="radio <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('k')), ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('k')), ENT_QUOTES, 'UTF-8');?>
" <?php if ((!$_smarty_tpl->getValue('value') && ($_smarty_tpl->getValue('__smarty_foreach_rfe')['first'] ?? null)) || $_smarty_tpl->getValue('value') == $_smarty_tpl->getValue('k')) {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?> /><span class="radio"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v')), ENT_QUOTES, 'UTF-8');?>
</span>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::ADDRESS_TYPE")) {?>
        <input class="radio <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
_residential" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" value="residential" <?php if (!$_smarty_tpl->getValue('value') || $_smarty_tpl->getValue('value') == "residential") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?> /><span class="radio"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("address_residential", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
        <input class="radio <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
_commercial" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" value="commercial" <?php if ($_smarty_tpl->getValue('value') == "commercial") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?> /><span class="radio"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("address_commercial", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::VENDOR_TERMS")) {?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/vendor_terms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::FILE")) {?>
        <?php if ((true && (true && null !== ($_smarty_tpl->getValue('value')['file_name'] ?? null)))) {?>
            <div class="text-type-value" data-file-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hash_name')), ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->assign('additional_class', ($_smarty_tpl->getValue('field')['required'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) ? "cm-file-required" : '', false, NULL);?>
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-fileuploader__icon cm-file-remove ".((string)$_smarty_tpl->getValue('additional_class')),'id'=>$_smarty_tpl->getValue('hash_name'),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("remove_this_item", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>

                <span class="ty-fileuploader__filename ty-filename-link upload-filename">
                    <a href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('value')['link'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')['file_name']), ENT_QUOTES, 'UTF-8');?>
</a>
                </span>
            </div>
        <?php }?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>$_smarty_tpl->getValue('var_name'),'label_id'=>"elm_".((string)$_smarty_tpl->getValue('id_prefix')).((string)$_smarty_tpl->getValue('field')['field_id']),'hidden_name'=>((string)$_smarty_tpl->getValue('data_name'))."[".((string)$_smarty_tpl->getValue('data_id'))."]",'hidden_value'=>(($tmp = $_smarty_tpl->getValue('value')['file_name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'prefix'=>$_smarty_tpl->getValue('id_prefix'),'disabled_param'=>$_smarty_tpl->getValue('disabled_param'),'max_upload_filesize'=>$_smarty_tpl->getValue('config')['tweaks']['profile_field_max_upload_filesize']), (int) 0, $_smarty_current_dir);
?>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE") || $_smarty_tpl->getValue('field')['autocomplete_type'] == "phone-full") {?>
        <?php $_smarty_tpl->assign('attrs', array('size'=>"32"), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>
            <?php $_tmp_array = $_smarty_tpl->getValue('attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["x-autocompletetype"] = $_smarty_tpl->getValue('field')['autocomplete_type'];
$_smarty_tpl->assign('attrs', $_tmp_array, false, NULL);?>
        <?php }?>
        <?php $_smarty_tpl->assign('class', (!$_smarty_tpl->getValue('skip_field')) ? $_smarty_tpl->getValue('_class') : "cm-skip-avail-switch", false, NULL);?>
        <?php if (!$_smarty_tpl->getValue('skip_field')) {?>
            <?php $_smarty_tpl->assign('attrs_string', $_smarty_tpl->getValue('disabled_param'), false, NULL);?>
        <?php }?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_control_group'=>false,'id'=>$_smarty_tpl->getValue('element_id'),'name'=>((string)$_smarty_tpl->getValue('data_name'))."[".((string)$_smarty_tpl->getValue('data_id'))."]",'value'=>$_smarty_tpl->getValue('value'),'label_text'=>$_smarty_tpl->getValue('field')['description'],'attrs_string'=>$_smarty_tpl->getValue('attrs_string'),'attrs'=>$_smarty_tpl->getValue('attrs'),'class'=>((($_smarty_tpl->getValue('__smarty_foreach_profile_fields')['index'] ?? null) === 0) ? ((string)$_smarty_tpl->getValue('class'))." cm-focus" : $_smarty_tpl->getValue('class')),'width'=>"full"), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>          <input
            <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            type="text"
            id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>

            name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]"
            size="32"
            value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
"
            class="ty-input-text <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php if (($_smarty_tpl->getValue('__smarty_foreach_profile_fields')['index'] ?? null) == 0) {?> cm-focus<?php }?>"
            <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?>
        />
    <?php }?>

<?php $_smarty_tpl->assign('pref_field_name', $_smarty_tpl->getValue('field')['description'], false, NULL);?>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:profile_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->getValue('body_id') || $_smarty_tpl->getValue('grid_wrap')) {?>
        </div>
    </div>
<?php }?>
</div>

<?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/profiles/components/profile_fields.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/profiles/components/profile_fields.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('show_email')) {?>
    <div class="ty-control-group">
        <label for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_email" class="cm-required cm-email"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
<i>*</i></label>
        <input type="text" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_email" name="user_data[email]" size="32" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['email']), ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('disabled_param')), ENT_QUOTES, 'UTF-8');?>
 />
    </div>
<?php } else { ?>

<?php $_smarty_tpl->assign('fields', array(), false, NULL);?>

<?php if (!$_smarty_tpl->getValue('exclude') && !$_smarty_tpl->getValue('include')) {?>
    <?php $_smarty_tpl->assign('fields', $_smarty_tpl->getValue('profile_fields')[$_smarty_tpl->getValue('section')], false, NULL);
} else { ?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile_fields')[$_smarty_tpl->getValue('section')], 'field', false, 'key');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('field')->value) {
$foreach8DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('include')) {?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('field')['field_name'],$_smarty_tpl->getValue('include'))) {?>
                <?php $_tmp_array = $_smarty_tpl->getValue('fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('key')] = $_smarty_tpl->getValue('field');
$_smarty_tpl->assign('fields', $_tmp_array, false, NULL);?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->getValue('exclude')) {?>
            <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('field')['field_name'],$_smarty_tpl->getValue('exclude'))) {?>
                <?php $_tmp_array = $_smarty_tpl->getValue('fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('key')] = $_smarty_tpl->getValue('field');
$_smarty_tpl->assign('fields', $_tmp_array, false, NULL);?>
            <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?>

<?php if ($_smarty_tpl->getValue('fields')) {?>

<?php if ($_smarty_tpl->getValue('address_flag')) {?>
    <div class="ty-profile-field__switch ty-address-switch clearfix">
        <div class="ty-profile-field__switch-label"><?php if ($_smarty_tpl->getValue('section') == "S") {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_same_as_billing", [], $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_billing_same_with_shipping", [], $_smarty_tpl->getSmarty()->getLanguage());
}?></div>
        <div class="ty-profile-field__switch-actions">
            <input class="radio cm-switch-availability cm-switch-inverse cm-switch-visibility" type="radio" name="ship_to_another" value="0" id="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('body_id')), ENT_QUOTES, 'UTF-8');?>
_suffix_yes" <?php if (!$_smarty_tpl->getValue('ship_to_another')) {?>checked="checked"<?php }?> /><label for="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('body_id')), ENT_QUOTES, 'UTF-8');?>
_suffix_yes"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("yes", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
            <input class="radio cm-switch-availability cm-switch-visibility" type="radio" name="ship_to_another" value="1" id="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('body_id')), ENT_QUOTES, 'UTF-8');?>
_suffix_no" <?php if ($_smarty_tpl->getValue('ship_to_another')) {?>checked="checked"<?php }?> /><label for="sw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('body_id')), ENT_QUOTES, 'UTF-8');?>
_suffix_no"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden" name="ship_to_another" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('ship_to_another') ?? null)===null||$tmp==='' ? "1" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php if (($_smarty_tpl->getValue('address_flag') && !$_smarty_tpl->getValue('ship_to_another') && ($_smarty_tpl->getValue('section') == "S" || $_smarty_tpl->getValue('section') == "B")) || $_smarty_tpl->getValue('disabled_by_default')) {?>
    <?php $_smarty_tpl->assign('disabled_param', "disabled=\"disabled\"", false, NULL);?>
    <?php $_smarty_tpl->assign('_class', "disabled", false, NULL);?>
    <?php $_smarty_tpl->assign('hide_fields', true, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('disabled_param', '', false, NULL);?>
    <?php $_smarty_tpl->assign('_class', '', false, NULL);
}?>

<div class="clearfix">
<?php if ($_smarty_tpl->getValue('body_id') || $_smarty_tpl->getValue('grid_wrap')) {?>
    <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('body_id')), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->getValue('hide_fields')) {?>hidden<?php }?>">
        <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('grid_wrap')), ENT_QUOTES, 'UTF-8');?>
">
<?php }?>

<?php if (!$_smarty_tpl->getValue('nothing_extra')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getValue('title')), (int) 0, $_smarty_current_dir);
}?>

<?php $_smarty_tpl->assign('default_data_name', (($tmp = $_smarty_tpl->getValue('default_data_name') ?? null)===null||$tmp==='' ? "user_data" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('user_data', (($tmp = $_smarty_tpl->getValue('user_data') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('profile_data', (($tmp = $_smarty_tpl->getValue('profile_data') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('user_data') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('fields', $_smarty_tpl->getSmarty()->getModifierCallback('fn_fill_profile_fields_value')($_smarty_tpl->getValue('fields'),$_smarty_tpl->getValue('profile_data')), false, NULL);?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('fields'), 'field', false, NULL, 'profile_fields', array (
  'index' => true,
));
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('field')->value) {
$foreach9DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_profile_fields']->value['index']++;
?>

<?php $_smarty_tpl->assign('value', $_smarty_tpl->getValue('field')['value'], false, NULL);
if ($_smarty_tpl->getValue('field')['field_name'] && $_smarty_tpl->getValue('field')['is_default'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('data_name', $_smarty_tpl->getValue('default_data_name'), false, NULL);?>
    <?php $_smarty_tpl->assign('data_id', $_smarty_tpl->getValue('field')['field_name'], false, NULL);?>
    <?php $_smarty_tpl->assign('data_file_name', $_smarty_tpl->getValue('default_data_name'), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('data_name', ((string)$_smarty_tpl->getValue('default_data_name'))."[fields]", false, NULL);?>
    <?php $_smarty_tpl->assign('data_id', $_smarty_tpl->getValue('field')['field_id'], false, NULL);?>
    <?php $_smarty_tpl->assign('data_file_name', ((string)$_smarty_tpl->getValue('default_data_name'))."_fields", false, NULL);
}?>

<?php $_smarty_tpl->assign('element_id', ((string)$_smarty_tpl->getValue('id_prefix'))."elm_".((string)$_smarty_tpl->getValue('field')['field_id']), false, NULL);
$_smarty_tpl->assign('required', $_smarty_tpl->getValue('field')['required'], false, NULL);?>

<?php if ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::FILE")) {?>
    <?php $_smarty_tpl->assign('var_name', "profile_fields[".((string)$_smarty_tpl->getValue('data_id'))."]", false, NULL);?>
    <?php $_smarty_tpl->assign('hash_name', $_smarty_tpl->getSmarty()->getModifierCallback('md5')($_smarty_tpl->getValue('var_name')), false, NULL);?>
    <?php $_smarty_tpl->assign('element_id', "type_".((string)$_smarty_tpl->getValue('hash_name')), false, NULL);?>
    <?php if ((true && (true && null !== ($_smarty_tpl->getValue('value')['file_name'] ?? null)))) {?>
        <?php $_smarty_tpl->assign('required', $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"), false, NULL);?>
    <?php }
}?>

<?php $_smarty_tpl->assign('skip_field', false, false, NULL);
if ($_smarty_tpl->getValue('section') == "S" || $_smarty_tpl->getValue('section') == "B") {?>
    <?php if ($_smarty_tpl->getValue('section') == "S") {?>
        <?php $_smarty_tpl->assign('_to', "B", false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('_to', "S", false, NULL);?>
    <?php }?>
    <?php if (!$_smarty_tpl->getValue('profile_fields')[$_smarty_tpl->getValue('_to')][$_smarty_tpl->getValue('field')['matching_id']]) {?>
        <?php $_smarty_tpl->assign('skip_field', true, false, NULL);?>
    <?php }
}?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:profile_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<div class="ty-control-group ty-profile-field__item ty-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE") || $_smarty_tpl->getValue('field')['autocomplete_type'] == "phone-full") {?>cm-mask-phone-group<?php }?>" <?php if ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE") || $_smarty_tpl->getValue('field')['autocomplete_type'] == "phone-full") {?>data-ca-phone-mask-group-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
<?php if (($_smarty_tpl->getValue('pref_field_name') != $_smarty_tpl->getValue('field')['description'] || $_smarty_tpl->getValue('required') == "Y") && $_smarty_tpl->getValue('field')['field_type'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::VENDOR_TERMS")) {?>
    <label
        for=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>

        class="ty-control-group__title cm-profile-field <?php if ($_smarty_tpl->getValue('field')['autocomplete_type'] == "phone-full" || $_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE")) {?>cm-mask-phone-label<?php }?> <?php if ($_smarty_tpl->getValue('required') == "Y") {?>cm-required cm-trim<?php }
if ($_smarty_tpl->getValue('field')['field_type'] == "Z") {?> cm-zipcode<?php }
if ($_smarty_tpl->getValue('field')['field_type'] == "E") {?> cm-email<?php }?> <?php if ($_smarty_tpl->getValue('field')['field_type'] == "Z") {
if ($_smarty_tpl->getValue('section') == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }
}?>"
    ><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
</label>
<?php }?>

    <?php if ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::STATE")) {?>
        <?php $_smarty_tpl->assign('_country', $_smarty_tpl->getValue('profile_data')['s_country'], false, NULL);?>
        <?php $_smarty_tpl->assign('_state', $_smarty_tpl->getValue('value'), false, NULL);?>

        <select <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
 class="ty-profile-field__select-state cm-state <?php if ($_smarty_tpl->getValue('section') == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
}?>" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?>>
            <?php if ($_smarty_tpl->getValue('required') !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_state", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('states') && $_smarty_tpl->getValue('states')[$_smarty_tpl->getValue('_country')]) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('states')[$_smarty_tpl->getValue('_country')], 'state');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('state')->value) {
$foreach10DoElse = false;
?>
                    <option <?php if ($_smarty_tpl->getValue('_state') == $_smarty_tpl->getValue('state')['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['code']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('state')['state']), ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php }?>
        </select>

        <input <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="text" id="elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
_d" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" size="32" maxlength="64" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_state')), ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" class="cm-state <?php if ($_smarty_tpl->getValue('section') == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> ty-input-text hidden <?php if ($_smarty_tpl->getValue('_class')) {?>disabled<?php }?>"/>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::COUNTRY")) {?>
        <?php $_smarty_tpl->assign('_country', $_smarty_tpl->getValue('value'), false, NULL);?>

        <select <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
 class="ty-profile-field__select-country cm-country <?php if ($_smarty_tpl->getValue('section') == "S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?>>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:country_selectbox_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ($_smarty_tpl->getValue('required') !== "Y") {?>
                <option value="">- <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_country", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 -</option>
            <?php }?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country', false, 'code');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('code')->value => $_smarty_tpl->getVariable('country')->value) {
$foreach11DoElse = false;
?>
            <option <?php if ($_smarty_tpl->getValue('_country') == $_smarty_tpl->getValue('code')) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('code')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('country')), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:country_selectbox_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </select>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::CHECKBOX")) {?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" value="N" <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?> />
        <input type="checkbox" id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
 name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->getValue('value') == "Y") {?>checked="checked"<?php }?> class="checkbox <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?> />

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::TEXT_AREA")) {?>
        <textarea <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-input-textarea <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
 name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" cols="32" rows="3" <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
</textarea>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::DATE")) {?>
        <?php if (!$_smarty_tpl->getValue('skip_field')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->getValue('id_prefix'))."elm_".((string)$_smarty_tpl->getValue('field')['field_id']),'date_name'=>((string)$_smarty_tpl->getValue('data_name'))."[".((string)$_smarty_tpl->getValue('data_id'))."]",'date_val'=>$_smarty_tpl->getValue('value'),'extra'=>$_smarty_tpl->getValue('disabled_param')), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->getValue('id_prefix'))."elm_".((string)$_smarty_tpl->getValue('field')['field_id']),'date_name'=>((string)$_smarty_tpl->getValue('data_name'))."[".((string)$_smarty_tpl->getValue('data_id'))."]",'date_val'=>$_smarty_tpl->getValue('value')), (int) 0, $_smarty_current_dir);
?>
        <?php }?>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::SELECT_BOX")) {?>
        <select <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
 class="ty-profile-field__select <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?>>
            <?php if ($_smarty_tpl->getValue('required') != "Y") {?>
            <option value="">--</option>
            <?php }?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('field')['values'], 'v', false, 'k');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('k')->value => $_smarty_tpl->getVariable('v')->value) {
$foreach12DoElse = false;
?>
            <option <?php if ($_smarty_tpl->getValue('value') == $_smarty_tpl->getValue('k')) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('k')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v')), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::RADIO")) {?>
        <div id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>
>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('field')['values'], 'v', false, 'k', 'rfe', array (
  'first' => true,
  'index' => true,
));
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('k')->value => $_smarty_tpl->getVariable('v')->value) {
$foreach13DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_rfe']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_rfe']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_rfe']->value['index'];
?>
            <input class="radio <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('k')), ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('k')), ENT_QUOTES, 'UTF-8');?>
" <?php if ((!$_smarty_tpl->getValue('value') && ($_smarty_tpl->getValue('__smarty_foreach_rfe')['first'] ?? null)) || $_smarty_tpl->getValue('value') == $_smarty_tpl->getValue('k')) {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?> /><span class="radio"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v')), ENT_QUOTES, 'UTF-8');?>
</span>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::ADDRESS_TYPE")) {?>
        <input class="radio <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
_residential" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" value="residential" <?php if (!$_smarty_tpl->getValue('value') || $_smarty_tpl->getValue('value') == "residential") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?> /><span class="radio"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("address_residential", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
        <input class="radio <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" type="radio" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
_commercial" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" value="commercial" <?php if ($_smarty_tpl->getValue('value') == "commercial") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?> /><span class="radio"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("address_commercial", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::VENDOR_TERMS")) {?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/vendor_terms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::FILE")) {?>
        <?php if ((true && (true && null !== ($_smarty_tpl->getValue('value')['file_name'] ?? null)))) {?>
            <div class="text-type-value" data-file-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('hash_name')), ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->assign('additional_class', ($_smarty_tpl->getValue('field')['required'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) ? "cm-file-required" : '', false, NULL);?>
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-fileuploader__icon cm-file-remove ".((string)$_smarty_tpl->getValue('additional_class')),'id'=>$_smarty_tpl->getValue('hash_name'),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("remove_this_item", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>

                <span class="ty-fileuploader__filename ty-filename-link upload-filename">
                    <a href="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('value')['link'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')['file_name']), ENT_QUOTES, 'UTF-8');?>
</a>
                </span>
            </div>
        <?php }?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>$_smarty_tpl->getValue('var_name'),'label_id'=>"elm_".((string)$_smarty_tpl->getValue('id_prefix')).((string)$_smarty_tpl->getValue('field')['field_id']),'hidden_name'=>((string)$_smarty_tpl->getValue('data_name'))."[".((string)$_smarty_tpl->getValue('data_id'))."]",'hidden_value'=>(($tmp = $_smarty_tpl->getValue('value')['file_name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'prefix'=>$_smarty_tpl->getValue('id_prefix'),'disabled_param'=>$_smarty_tpl->getValue('disabled_param'),'max_upload_filesize'=>$_smarty_tpl->getValue('config')['tweaks']['profile_field_max_upload_filesize']), (int) 0, $_smarty_current_dir);
?>

    <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE") || $_smarty_tpl->getValue('field')['autocomplete_type'] == "phone-full") {?>
        <?php $_smarty_tpl->assign('attrs', array('size'=>"32"), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>
            <?php $_tmp_array = $_smarty_tpl->getValue('attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["x-autocompletetype"] = $_smarty_tpl->getValue('field')['autocomplete_type'];
$_smarty_tpl->assign('attrs', $_tmp_array, false, NULL);?>
        <?php }?>
        <?php $_smarty_tpl->assign('class', (!$_smarty_tpl->getValue('skip_field')) ? $_smarty_tpl->getValue('_class') : "cm-skip-avail-switch", false, NULL);?>
        <?php if (!$_smarty_tpl->getValue('skip_field')) {?>
            <?php $_smarty_tpl->assign('attrs_string', $_smarty_tpl->getValue('disabled_param'), false, NULL);?>
        <?php }?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_control_group'=>false,'id'=>$_smarty_tpl->getValue('element_id'),'name'=>((string)$_smarty_tpl->getValue('data_name'))."[".((string)$_smarty_tpl->getValue('data_id'))."]",'value'=>$_smarty_tpl->getValue('value'),'label_text'=>$_smarty_tpl->getValue('field')['description'],'attrs_string'=>$_smarty_tpl->getValue('attrs_string'),'attrs'=>$_smarty_tpl->getValue('attrs'),'class'=>((($_smarty_tpl->getValue('__smarty_foreach_profile_fields')['index'] ?? null) === 0) ? ((string)$_smarty_tpl->getValue('class'))." cm-focus" : $_smarty_tpl->getValue('class')),'width'=>"full"), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>          <input
            <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            type="text"
            id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('element_id')), ENT_QUOTES, 'UTF-8');?>

            name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]"
            size="32"
            value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
"
            class="ty-input-text <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?> <?php if (($_smarty_tpl->getValue('__smarty_foreach_profile_fields')['index'] ?? null) == 0) {?> cm-focus<?php }?>"
            <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?>
        />
    <?php }?>

<?php $_smarty_tpl->assign('pref_field_name', $_smarty_tpl->getValue('field')['description'], false, NULL);?>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:profile_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->getValue('body_id') || $_smarty_tpl->getValue('grid_wrap')) {?>
        </div>
    </div>
<?php }?>
</div>

<?php }
}
}
}
}
