<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:11
  from 'tygh:views/checkout/components/profile_fields.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29b3a8e18_62425176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0d4f3ee9872c85b8017adef2b080e749ea77322' => 
    array (
      0 => 'views/checkout/components/profile_fields.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/profile_fields/field.tpl' => 2,
  ),
))) {
function content_69aea29b3a8e18_62425176 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/checkout/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('profile_fields')[$_smarty_tpl->getValue('section')]) {?>
    <?php $_smarty_tpl->assign('disable_all_fields', (($tmp = $_smarty_tpl->getValue('disable_all_fields') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('fields', array(), false, NULL);?>
    <?php $_smarty_tpl->assign('name_fields', array(), false, NULL);?>
    <?php $_smarty_tpl->assign('name_field_names', array("firstname","lastname","s_firstname","s_lastname","b_firstname","b_lastname"), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile_fields')[$_smarty_tpl->getValue('section')], 'field', false, 'field_id');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('field_id')->value => $_smarty_tpl->getVariable('field')->value) {
$foreach0DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('exclude') && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('field')['field_name'],$_smarty_tpl->getValue('exclude')) || $_smarty_tpl->getValue('include') && !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('field')['field_name'],$_smarty_tpl->getValue('include'))) {?>
            <?php continue 1;?>
        <?php }?>

        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('field')['field_name'],$_smarty_tpl->getValue('name_field_names'))) {?>
            <?php $_tmp_array = $_smarty_tpl->getValue('name_fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('field_id')] = $_smarty_tpl->getValue('field');
$_smarty_tpl->assign('name_fields', $_tmp_array, false, NULL);?>
        <?php } else { ?>
            <?php $_tmp_array = $_smarty_tpl->getValue('fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('field_id')] = $_smarty_tpl->getValue('field');
$_smarty_tpl->assign('fields', $_tmp_array, false, NULL);?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->assign('prefix', '', false, NULL);?>
    <?php if ($_smarty_tpl->getValue('section') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::SHIPPING_ADDRESS")) {?>
        <?php $_smarty_tpl->assign('prefix', "s_", false, NULL);?>
    <?php } elseif ($_smarty_tpl->getValue('section') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::BILLING_ADDRESS")) {?>
        <?php $_smarty_tpl->assign('prefix', "b_", false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('fullname_exists', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('name_fields')) == 2, false, NULL);?>
    <?php if ($_smarty_tpl->getValue('fullname_exists')) {?>
        <?php $_smarty_tpl->assign('fullname_field', $_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('name_fields')), false, NULL);?>
        <?php $_smarty_tpl->assign('name_field_id', $_smarty_tpl->getSmarty()->getModifierCallback('key')($_smarty_tpl->getValue('name_fields')), false, NULL);?>
        <?php $_smarty_tpl->assign('fullname_field_lastname_first', $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('fullname_field')['field_name'],array("lastname","s_lastname","b_lastname")), false, NULL);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('fullname_field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["field_name"] = ((string)$_smarty_tpl->getValue('prefix'))."fullname";
$_smarty_tpl->assign('fullname_field', $_tmp_array, false, NULL);?>
        <?php if ($_smarty_tpl->getValue('fullname_field_lastname_first')) {?>
            <?php $_smarty_tpl->assign('fullname_field_value', $_smarty_tpl->getSmarty()->getModifierCallback('trim')(((string)$_smarty_tpl->getValue('user_data')[((string)$_smarty_tpl->getValue('prefix'))."lastname"])." ".((string)$_smarty_tpl->getValue('user_data')[((string)$_smarty_tpl->getValue('prefix'))."firstname"])), false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('fullname_field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['description'] = $_smarty_tpl->getSmarty()->getModifierCallback("__")(((string)$_smarty_tpl->getValue('prefix'))."last_name_and_first_name", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->assign('fullname_field', $_tmp_array, false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('fullname_field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes'] = array("data-ca-fullname-format"=>"lastname_first");
$_smarty_tpl->assign('fullname_field', $_tmp_array, false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('fullname_field_value', $_smarty_tpl->getSmarty()->getModifierCallback('trim')(((string)$_smarty_tpl->getValue('user_data')[((string)$_smarty_tpl->getValue('prefix'))."firstname"])." ".((string)$_smarty_tpl->getValue('user_data')[((string)$_smarty_tpl->getValue('prefix'))."lastname"])), false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('fullname_field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['description'] = $_smarty_tpl->getSmarty()->getModifierCallback("__")(((string)$_smarty_tpl->getValue('prefix'))."first_name_and_last_name", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->assign('fullname_field', $_tmp_array, false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('fullname_field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes'] = array("data-ca-fullname-format"=>"firstname_first");
$_smarty_tpl->assign('fullname_field', $_tmp_array, false, NULL);?>
        <?php }?>
        <?php $_tmp_array = $_smarty_tpl->getValue('fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('name_field_id')] = $_smarty_tpl->getValue('fullname_field');
$_smarty_tpl->assign('fields', $_tmp_array, false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('fields', $_smarty_tpl->getValue('fields')+$_smarty_tpl->getValue('name_fields'), false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('fields', $_smarty_tpl->getSmarty()->getModifierCallback('sort_by')($_smarty_tpl->getValue('fields'),"#position"), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('fields'), 'field', false, 'field_id');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('field_id')->value => $_smarty_tpl->getVariable('field')->value) {
$foreach1DoElse = false;
?>
        <?php $_smarty_tpl->assign('type', "text", false, NULL);?>
        <?php $_smarty_tpl->assign('input_meta', '', false, NULL);?>
        <?php $_smarty_tpl->assign('label_meta', '', false, NULL);?>

        <?php $_smarty_tpl->assign('field_type_class_postfix', "litecheckout__field--", false, NULL);?>

        <?php if ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE")) {?>
            <?php $_smarty_tpl->assign('type', "tel", false, NULL);?>
            <?php $_smarty_tpl->assign('label_meta', " cm-mask-phone-label", false, NULL);?>
            <?php $_smarty_tpl->assign('input_meta', " cm-mask-phone", false, NULL);?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."input", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::EMAIL")) {?>
            <?php $_smarty_tpl->assign('type', "text", false, NULL);?>
            <?php $_smarty_tpl->assign('label_meta', " cm-email", false, NULL);?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."input", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::STATE")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."state", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::COUNTRY")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."country", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::CHECKBOX")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."checkbox", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::DATE")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."date", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::INPUT")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."input", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PASSWORD")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."password", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::RADIO")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."radio", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::SELECT_BOX")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."selectbox", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::TEXT_AREA")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."textarea", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::POSTAL_CODE")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."input", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::ADDRESS_TYPE")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."radio", false, NULL);?>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('field_type_class_postfix') === "litecheckout__field--") {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."custom", false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('field')['checkout_required'] == "Y" || $_smarty_tpl->getValue('field')['checkout_required'] == "1") {?>
            <?php $_smarty_tpl->assign('label_meta', ((string)$_smarty_tpl->getValue('label_meta'))." cm-required cm-trim", false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes']["required"] = true;
$_smarty_tpl->assign('field', $_tmp_array, false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes']["data-ca-custom-validation"] = true;
$_smarty_tpl->assign('field', $_tmp_array, false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('field')['is_default'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <?php $_smarty_tpl->assign('field_name', "user_data[".((string)$_smarty_tpl->getValue('field')['field_name'])."]", false, NULL);?>
            <?php $_smarty_tpl->assign('field_value', $_smarty_tpl->getValue('user_data')[$_smarty_tpl->getValue('field')['field_name']], false, NULL);?>
            <?php $_smarty_tpl->assign('field_name_helper', "user_data.".((string)$_smarty_tpl->getValue('field')['field_name']), false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('field_name', "user_data[fields][".((string)$_smarty_tpl->getValue('field')['field_id'])."]", false, NULL);?>
            <?php $_smarty_tpl->assign('field_value', $_smarty_tpl->getValue('user_data')["fields"][$_smarty_tpl->getValue('field')['field_id']], false, NULL);?>
            <?php $_smarty_tpl->assign('field_name_helper', "user_data.fields.".((string)$_smarty_tpl->getValue('field')['field_id']), false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('field')['field_name'] == ((string)$_smarty_tpl->getValue('prefix'))."fullname") {?>
            <?php $_smarty_tpl->assign('field_value', $_smarty_tpl->getValue('fullname_field_value'), false, NULL);?>
        <?php }?>

        <?php $_smarty_tpl->assign('wrapper_class', $_smarty_tpl->getValue('field')['wrapper_class'], false, NULL);?>
        <?php if (!$_smarty_tpl->getValue('wrapper_class')) {?>
            <?php $_smarty_tpl->assign('wrapper_class', "litecheckout__field--small", false, NULL);?>
            <?php if ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::TEXT_AREA")) {?>
                <?php $_smarty_tpl->assign('wrapper_class', "litecheckout__field--full", false, NULL);?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('field')['is_disabled'] || $_smarty_tpl->getValue('disable_all_fields')) {?>
            <?php $_tmp_array = $_smarty_tpl->getValue('field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['is_disabled'] = true;
$_smarty_tpl->assign('field', $_tmp_array, false, NULL);?>
            <?php $_smarty_tpl->assign('input_meta', ((string)$_smarty_tpl->getValue('input_meta'))." disabled", false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes']["disabled"] = "disabled";
$_smarty_tpl->assign('field', $_tmp_array, false, NULL);?>
        <?php }?>

        <?php $_smarty_tpl->assign('field_id', "litecheckout_".((string)$_smarty_tpl->getValue('field')['field_name']), false, NULL);?>

        <?php $_smarty_tpl->assign('wrapper_attributes', array(), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('field')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE") || $_smarty_tpl->getValue('field')['autocomplete_type'] == "phone-full") {?>
            <?php $_smarty_tpl->assign('wrapper_class', ((string)$_smarty_tpl->getValue('wrapper_class'))." cm-mask-phone-group", false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('wrapper_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-phone-mask-group-id"] = $_smarty_tpl->getValue('field_id');
$_smarty_tpl->assign('wrapper_attributes', $_tmp_array, false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('field')['template']) {?>
            <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('field')['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_required'=>$_smarty_tpl->getValue('field')['profile_required']), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/profile_fields/field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/profile_fields.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/checkout/components/profile_fields.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('profile_fields')[$_smarty_tpl->getValue('section')]) {?>
    <?php $_smarty_tpl->assign('disable_all_fields', (($tmp = $_smarty_tpl->getValue('disable_all_fields') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('fields', array(), false, NULL);?>
    <?php $_smarty_tpl->assign('name_fields', array(), false, NULL);?>
    <?php $_smarty_tpl->assign('name_field_names', array("firstname","lastname","s_firstname","s_lastname","b_firstname","b_lastname"), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile_fields')[$_smarty_tpl->getValue('section')], 'field', false, 'field_id');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('field_id')->value => $_smarty_tpl->getVariable('field')->value) {
$foreach2DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('exclude') && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('field')['field_name'],$_smarty_tpl->getValue('exclude')) || $_smarty_tpl->getValue('include') && !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('field')['field_name'],$_smarty_tpl->getValue('include'))) {?>
            <?php continue 1;?>
        <?php }?>

        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('field')['field_name'],$_smarty_tpl->getValue('name_field_names'))) {?>
            <?php $_tmp_array = $_smarty_tpl->getValue('name_fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('field_id')] = $_smarty_tpl->getValue('field');
$_smarty_tpl->assign('name_fields', $_tmp_array, false, NULL);?>
        <?php } else { ?>
            <?php $_tmp_array = $_smarty_tpl->getValue('fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('field_id')] = $_smarty_tpl->getValue('field');
$_smarty_tpl->assign('fields', $_tmp_array, false, NULL);?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->assign('prefix', '', false, NULL);?>
    <?php if ($_smarty_tpl->getValue('section') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::SHIPPING_ADDRESS")) {?>
        <?php $_smarty_tpl->assign('prefix', "s_", false, NULL);?>
    <?php } elseif ($_smarty_tpl->getValue('section') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldSections::BILLING_ADDRESS")) {?>
        <?php $_smarty_tpl->assign('prefix', "b_", false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('fullname_exists', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('name_fields')) == 2, false, NULL);?>
    <?php if ($_smarty_tpl->getValue('fullname_exists')) {?>
        <?php $_smarty_tpl->assign('fullname_field', $_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('name_fields')), false, NULL);?>
        <?php $_smarty_tpl->assign('name_field_id', $_smarty_tpl->getSmarty()->getModifierCallback('key')($_smarty_tpl->getValue('name_fields')), false, NULL);?>
        <?php $_smarty_tpl->assign('fullname_field_lastname_first', $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('fullname_field')['field_name'],array("lastname","s_lastname","b_lastname")), false, NULL);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('fullname_field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["field_name"] = ((string)$_smarty_tpl->getValue('prefix'))."fullname";
$_smarty_tpl->assign('fullname_field', $_tmp_array, false, NULL);?>
        <?php if ($_smarty_tpl->getValue('fullname_field_lastname_first')) {?>
            <?php $_smarty_tpl->assign('fullname_field_value', $_smarty_tpl->getSmarty()->getModifierCallback('trim')(((string)$_smarty_tpl->getValue('user_data')[((string)$_smarty_tpl->getValue('prefix'))."lastname"])." ".((string)$_smarty_tpl->getValue('user_data')[((string)$_smarty_tpl->getValue('prefix'))."firstname"])), false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('fullname_field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['description'] = $_smarty_tpl->getSmarty()->getModifierCallback("__")(((string)$_smarty_tpl->getValue('prefix'))."last_name_and_first_name", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->assign('fullname_field', $_tmp_array, false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('fullname_field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes'] = array("data-ca-fullname-format"=>"lastname_first");
$_smarty_tpl->assign('fullname_field', $_tmp_array, false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('fullname_field_value', $_smarty_tpl->getSmarty()->getModifierCallback('trim')(((string)$_smarty_tpl->getValue('user_data')[((string)$_smarty_tpl->getValue('prefix'))."firstname"])." ".((string)$_smarty_tpl->getValue('user_data')[((string)$_smarty_tpl->getValue('prefix'))."lastname"])), false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('fullname_field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['description'] = $_smarty_tpl->getSmarty()->getModifierCallback("__")(((string)$_smarty_tpl->getValue('prefix'))."first_name_and_last_name", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->assign('fullname_field', $_tmp_array, false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('fullname_field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes'] = array("data-ca-fullname-format"=>"firstname_first");
$_smarty_tpl->assign('fullname_field', $_tmp_array, false, NULL);?>
        <?php }?>
        <?php $_tmp_array = $_smarty_tpl->getValue('fields') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('name_field_id')] = $_smarty_tpl->getValue('fullname_field');
$_smarty_tpl->assign('fields', $_tmp_array, false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('fields', $_smarty_tpl->getValue('fields')+$_smarty_tpl->getValue('name_fields'), false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('fields', $_smarty_tpl->getSmarty()->getModifierCallback('sort_by')($_smarty_tpl->getValue('fields'),"#position"), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('fields'), 'field', false, 'field_id');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('field_id')->value => $_smarty_tpl->getVariable('field')->value) {
$foreach3DoElse = false;
?>
        <?php $_smarty_tpl->assign('type', "text", false, NULL);?>
        <?php $_smarty_tpl->assign('input_meta', '', false, NULL);?>
        <?php $_smarty_tpl->assign('label_meta', '', false, NULL);?>

        <?php $_smarty_tpl->assign('field_type_class_postfix', "litecheckout__field--", false, NULL);?>

        <?php if ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE")) {?>
            <?php $_smarty_tpl->assign('type', "tel", false, NULL);?>
            <?php $_smarty_tpl->assign('label_meta', " cm-mask-phone-label", false, NULL);?>
            <?php $_smarty_tpl->assign('input_meta', " cm-mask-phone", false, NULL);?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."input", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::EMAIL")) {?>
            <?php $_smarty_tpl->assign('type', "text", false, NULL);?>
            <?php $_smarty_tpl->assign('label_meta', " cm-email", false, NULL);?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."input", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::STATE")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."state", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::COUNTRY")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."country", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::CHECKBOX")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."checkbox", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::DATE")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."date", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::INPUT")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."input", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PASSWORD")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."password", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::RADIO")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."radio", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::SELECT_BOX")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."selectbox", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::TEXT_AREA")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."textarea", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::POSTAL_CODE")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."input", false, NULL);?>
        <?php } elseif ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::ADDRESS_TYPE")) {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."radio", false, NULL);?>
        <?php }?>

                <?php if ($_smarty_tpl->getValue('field_type_class_postfix') === "litecheckout__field--") {?>
            <?php $_smarty_tpl->assign('field_type_class_postfix', ((string)$_smarty_tpl->getValue('field_type_class_postfix'))."custom", false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('field')['checkout_required'] == "Y" || $_smarty_tpl->getValue('field')['checkout_required'] == "1") {?>
            <?php $_smarty_tpl->assign('label_meta', ((string)$_smarty_tpl->getValue('label_meta'))." cm-required cm-trim", false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes']["required"] = true;
$_smarty_tpl->assign('field', $_tmp_array, false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes']["data-ca-custom-validation"] = true;
$_smarty_tpl->assign('field', $_tmp_array, false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('field')['is_default'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <?php $_smarty_tpl->assign('field_name', "user_data[".((string)$_smarty_tpl->getValue('field')['field_name'])."]", false, NULL);?>
            <?php $_smarty_tpl->assign('field_value', $_smarty_tpl->getValue('user_data')[$_smarty_tpl->getValue('field')['field_name']], false, NULL);?>
            <?php $_smarty_tpl->assign('field_name_helper', "user_data.".((string)$_smarty_tpl->getValue('field')['field_name']), false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('field_name', "user_data[fields][".((string)$_smarty_tpl->getValue('field')['field_id'])."]", false, NULL);?>
            <?php $_smarty_tpl->assign('field_value', $_smarty_tpl->getValue('user_data')["fields"][$_smarty_tpl->getValue('field')['field_id']], false, NULL);?>
            <?php $_smarty_tpl->assign('field_name_helper', "user_data.fields.".((string)$_smarty_tpl->getValue('field')['field_id']), false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('field')['field_name'] == ((string)$_smarty_tpl->getValue('prefix'))."fullname") {?>
            <?php $_smarty_tpl->assign('field_value', $_smarty_tpl->getValue('fullname_field_value'), false, NULL);?>
        <?php }?>

        <?php $_smarty_tpl->assign('wrapper_class', $_smarty_tpl->getValue('field')['wrapper_class'], false, NULL);?>
        <?php if (!$_smarty_tpl->getValue('wrapper_class')) {?>
            <?php $_smarty_tpl->assign('wrapper_class', "litecheckout__field--small", false, NULL);?>
            <?php if ($_smarty_tpl->getValue('field')['field_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::TEXT_AREA")) {?>
                <?php $_smarty_tpl->assign('wrapper_class', "litecheckout__field--full", false, NULL);?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('field')['is_disabled'] || $_smarty_tpl->getValue('disable_all_fields')) {?>
            <?php $_tmp_array = $_smarty_tpl->getValue('field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['is_disabled'] = true;
$_smarty_tpl->assign('field', $_tmp_array, false, NULL);?>
            <?php $_smarty_tpl->assign('input_meta', ((string)$_smarty_tpl->getValue('input_meta'))." disabled", false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('field') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attributes']["disabled"] = "disabled";
$_smarty_tpl->assign('field', $_tmp_array, false, NULL);?>
        <?php }?>

        <?php $_smarty_tpl->assign('field_id', "litecheckout_".((string)$_smarty_tpl->getValue('field')['field_name']), false, NULL);?>

        <?php $_smarty_tpl->assign('wrapper_attributes', array(), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('field')['field_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProfileFieldTypes::PHONE") || $_smarty_tpl->getValue('field')['autocomplete_type'] == "phone-full") {?>
            <?php $_smarty_tpl->assign('wrapper_class', ((string)$_smarty_tpl->getValue('wrapper_class'))." cm-mask-phone-group", false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('wrapper_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-phone-mask-group-id"] = $_smarty_tpl->getValue('field_id');
$_smarty_tpl->assign('wrapper_attributes', $_tmp_array, false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('field')['template']) {?>
            <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('field')['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_required'=>$_smarty_tpl->getValue('field')['profile_required']), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/checkout/components/profile_fields/field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
}
