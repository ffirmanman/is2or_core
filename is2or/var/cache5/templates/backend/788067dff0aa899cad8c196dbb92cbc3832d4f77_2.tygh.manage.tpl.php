<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:19:18
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/profile_fields/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bbd615c429_07303834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '788067dff0aa899cad8c196dbb92cbc3832d4f77' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/profile_fields/manage.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/tools.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6835bbd615c429_07303834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('edit','view','position_short','description','type','show','required','show_on_storefront','expand_section','expand_section','collapse_section','collapse_section','deprecated','position_short','description','type','checkbox','input_field','radiogroup','selectbox','textarea','date','email','zip_postal_code','phone','country','state','address_type','vendor_terms','file','show','required','show_on_storefront','delete','no_items','add_field','add_field','profile_fields'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <?php $_smarty_tpl->_assignInScope('update_link_text', $_smarty_tpl->__("edit"));?>
    <?php if (fn_check_form_permissions('')) {?>
        <?php $_smarty_tpl->_assignInScope('update_link_text', $_smarty_tpl->__("view"));?>
        <?php $_smarty_tpl->_assignInScope('hide_inputs', "cm-hide-inputs");?>
    <?php }?>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="fields_form" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hide_inputs']->value, ENT_QUOTES, 'UTF-8');?>
" id="fields_form">
        <input type="hidden" name="profile_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_type']->value, ENT_QUOTES, 'UTF-8');?>
"/>
        <?php echo smarty_function_math(array('equation'=>"x + 5",'assign'=>"_colspan",'x'=>smarty_modifier_sizeof($_smarty_tpl->tpl_vars['profile_fields_areas']->value)),$_smarty_tpl);?>


        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value) {?>
        <?php $_smarty_tpl->_assignInScope('check_items_col_width', 5);?>
        <?php $_smarty_tpl->_assignInScope('position_col_width', 10);?>
        <?php $_smarty_tpl->_assignInScope('description_col_width', 30);?>
        <?php $_smarty_tpl->_assignInScope('type_col_width', 10);?>
        <?php $_smarty_tpl->_assignInScope('tools_col_width', 5);?>
        <?php $_smarty_tpl->_assignInScope('total_width', $_smarty_tpl->tpl_vars['check_items_col_width']->value+$_smarty_tpl->tpl_vars['position_col_width']->value+$_smarty_tpl->tpl_vars['description_col_width']->value+$_smarty_tpl->tpl_vars['type_col_width']->value+$_smarty_tpl->tpl_vars['tools_col_width']->value);?>
        <?php if ($_smarty_tpl->tpl_vars['profile_type']->value === smarty_modifier_enum("ProfileTypes::CODE_SELLER")) {?>
            <?php $_smarty_tpl->_assignInScope('storefront_show_col_width', 5);?>
            <?php $_smarty_tpl->_assignInScope('total_width', $_smarty_tpl->tpl_vars['total_width']->value+$_smarty_tpl->tpl_vars['storefront_show_col_width']->value);?>
            <?php $_smarty_tpl->_assignInScope('_colspan', $_smarty_tpl->tpl_vars['_colspan']->value+1);?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('rest_width', 100-$_smarty_tpl->tpl_vars['total_width']->value);?>
        <?php $_smarty_tpl->_assignInScope('area_col_width', $_smarty_tpl->tpl_vars['rest_width']->value/smarty_modifier_count($_smarty_tpl->tpl_vars['profile_types']->value[$_smarty_tpl->tpl_vars['profile_type']->value]["allowed_areas"]));?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "profile_fields_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection" id="profile_fields">
            <table width="100%" class="table table-middle table--relative table-responsive profile-fields__table-header">
                <thead
                        data-ca-bulkedit-default-object="true"
                        data-ca-bulkedit-component="defaultObject"
                >
                <tr>
                    <th class="mobile-hide" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['check_items_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <input type="checkbox"
                               class="bulkedit-toggler hide"
                               data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                               data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                        />
                    </th>
                    <th width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                    <th width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['description_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%"><?php echo $_smarty_tpl->__("description");?>
</th>
                    <th width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%"><?php echo $_smarty_tpl->__("type");?>
</th>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile_types']->value[$_smarty_tpl->tpl_vars['profile_type']->value]["allowed_areas"], 'area');
$_smarty_tpl->tpl_vars['area']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['area']->value) {
$_smarty_tpl->tpl_vars['area']->do_else = false;
?>
                        <th class="center" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['area_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['area']->value);?>
<br/><?php echo $_smarty_tpl->__("show");?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("required");?>

                        </th>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if ($_smarty_tpl->tpl_vars['profile_type']->value === smarty_modifier_enum("ProfileTypes::CODE_SELLER")) {?>
                        <th class="center" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_show_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%"><?php echo $_smarty_tpl->__("show_on_storefront");?>
</th>
                    <?php }?>
                    <th class="mobile-hide" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tools_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">&nbsp;</th>
                </tr>
                </thead>
            </table>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile_fields']->value, 'fields', false, 'section', 'profile_fields', array (
));
$_smarty_tpl->tpl_vars['fields']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->do_else = false;
?>
            <table width="100%" class="table table-middle table--relative table-responsive profile-fields__section">
                <?php if ($_smarty_tpl->tpl_vars['section']->value !== smarty_modifier_enum("ProfileFieldSections::ESSENTIALS")) {?>
                    <input class="js-profile-field-position" type="hidden" name="profile_field_sections[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_fields_sections']->value[$_smarty_tpl->tpl_vars['section']->value]["section_id"], ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_fields_sections']->value[$_smarty_tpl->tpl_vars['section']->value]["position"], ENT_QUOTES, 'UTF-8');?>
" />
                    <?php $_smarty_tpl->_assignInScope('is_deprecated', $_smarty_tpl->tpl_vars['profile_fields_sections']->value[$_smarty_tpl->tpl_vars['section']->value]["status"] === smarty_modifier_enum("ProfileFieldSections::STATUS_DEPRECATED"));?>
                    <tr>
                        <td colspan="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_colspan']->value, ENT_QUOTES, 'UTF-8');?>
" class="row-header">
                            <h5>
                                <span alt="<?php echo $_smarty_tpl->__("expand_section");?>
" title="<?php echo $_smarty_tpl->__("expand_section");?>
" id="on_section_fields_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination <?php if (!$_smarty_tpl->tpl_vars['is_deprecated']->value) {?>hidden<?php }?>"><span class="icon-caret-right"> </span></span>
                                <span alt="<?php echo $_smarty_tpl->__("collapse_section");?>
" title="<?php echo $_smarty_tpl->__("collapse_section");?>
" id="off_section_fields_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination<?php if ($_smarty_tpl->tpl_vars['is_deprecated']->value) {?> hidden<?php }?>"><span class="icon-caret-down"> </span></span>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_fields_sections']->value[$_smarty_tpl->tpl_vars['section']->value]["section_name"], ENT_QUOTES, 'UTF-8');?>

                                <?php if ($_smarty_tpl->tpl_vars['is_deprecated']->value) {?>
                                    (<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->__("deprecated"), 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
)
                                <?php }?>
                            </h5>
                        </td>
                    </tr>
                    <tbody id="section_fields_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['is_deprecated']->value) {?>class="hidden"<?php }?>>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                        <tr class="cm-row-item cm-longtap-target"
                            data-ca-profile-fields-row="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-profile-fields-section="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['section']->value !== smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS") && $_smarty_tpl->tpl_vars['field']->value['is_default'] !== smarty_modifier_enum("YesNo::YES")) {?>
                                data-ca-longtap-action="setCheckBox"
                                data-ca-longtap-target="input.cm-item"
                                data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                        >
                            <td class="center mobile-hide" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['check_items_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                                <?php if ($_smarty_tpl->tpl_vars['section']->value !== smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS") && $_smarty_tpl->tpl_vars['field']->value['is_default'] !== smarty_modifier_enum("YesNo::YES")) {?>
                                    <?php $_smarty_tpl->_assignInScope('extra_fields', true);?>
                                    <?php $_smarty_tpl->_assignInScope('custom_fields', true);?>
                                    <?php if ($_smarty_tpl->tpl_vars['field']->value['matching_id']) {?>
                                        <input type="hidden" name="matches[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['matching_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                                    <?php }?>
                                    <input type="checkbox" name="field_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item hide"/>
                                <?php }?>
                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                                <input class="input-micro input-hidden" type="text" size="3" name="fields_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['position'], ENT_QUOTES, 'UTF-8');?>
"/>
                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("description");?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['description_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                                <a href="<?php echo htmlspecialchars((string) fn_url("profile_fields.update?field_id=".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome" data-ct-field-section="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a>
                            </td>
                            <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("type");?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profile_fields:field_type_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profile_fields:field_type_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::CHECKBOX"), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === $_prefixVariable1) {
echo $_smarty_tpl->__("checkbox");?>

                                <?php } else {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::INPUT"), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === $_prefixVariable2) {
echo $_smarty_tpl->__("input_field");?>

                                <?php } else {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::RADIO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === $_prefixVariable3) {
echo $_smarty_tpl->__("radiogroup");?>

                                <?php } else {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX"), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === $_prefixVariable4) {
echo $_smarty_tpl->__("selectbox");?>

                                <?php } else {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA"), ENT_QUOTES, 'UTF-8');
$_prefixVariable5=ob_get_clean();
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === $_prefixVariable5) {
echo $_smarty_tpl->__("textarea");?>

                                <?php } else {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::DATE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable6=ob_get_clean();
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === $_prefixVariable6) {
echo $_smarty_tpl->__("date");?>

                                <?php } else {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::EMAIL"), ENT_QUOTES, 'UTF-8');
$_prefixVariable7=ob_get_clean();
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === $_prefixVariable7) {
echo $_smarty_tpl->__("email");?>

                                <?php } else {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable8=ob_get_clean();
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === $_prefixVariable8) {
echo $_smarty_tpl->__("zip_postal_code");?>

                                <?php } else {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::PHONE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable9=ob_get_clean();
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === $_prefixVariable9) {
echo $_smarty_tpl->__("phone");?>

                                <?php } else {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::COUNTRY"), ENT_QUOTES, 'UTF-8');
$_prefixVariable10=ob_get_clean();
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === $_prefixVariable10) {?><a href="<?php echo htmlspecialchars((string) fn_url("countries.manage"), ENT_QUOTES, 'UTF-8');?>
" class="underlined link--monochrome"><?php echo $_smarty_tpl->__("country");?>
&nbsp;&rsaquo;&rsaquo;</a>
                                <?php } else {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::STATE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable11=ob_get_clean();
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === $_prefixVariable11) {?><a href="<?php echo htmlspecialchars((string) fn_url("states.manage"), ENT_QUOTES, 'UTF-8');?>
" class="underlined link--monochrome"><?php echo $_smarty_tpl->__("state");?>
&nbsp;&rsaquo;&rsaquo;</a>
                                <?php } else {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable12=ob_get_clean();
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === $_prefixVariable12) {
echo $_smarty_tpl->__("address_type");?>

                                <?php } else {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::VENDOR_TERMS"), ENT_QUOTES, 'UTF-8');
$_prefixVariable13=ob_get_clean();
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === $_prefixVariable13) {
echo $_smarty_tpl->__("vendor_terms");?>

                                <?php } else {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::FILE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable14=ob_get_clean();
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] === $_prefixVariable14) {
echo $_smarty_tpl->__("file");?>

                                <?php }}}}}}}}}}}}}}?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profile_fields:field_type_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <input type="hidden" name="fields_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][field_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                                <input type="hidden" name="fields_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][field_name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
"/>
                                <input type="hidden" name="fields_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][section]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
"/>
                                <input type="hidden" name="fields_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][matching_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['matching_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                                <input type="hidden" name="fields_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][field_type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
"/>
                            </td>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile_types']->value[$_smarty_tpl->tpl_vars['profile_type']->value]["allowed_areas"], 'area');
$_smarty_tpl->tpl_vars['area']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['area']->value) {
$_smarty_tpl->tpl_vars['area']->do_else = false;
?>
                                <?php $_smarty_tpl->_assignInScope('_show', ((string)$_smarty_tpl->tpl_vars['area']->value)."_show");?>
                                <?php $_smarty_tpl->_assignInScope('_required', ((string)$_smarty_tpl->tpl_vars['area']->value)."_required");?>
                                <td class="center" data-th="<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['area']->value);?>
 (<?php echo $_smarty_tpl->__("show");?>
 / <?php echo $_smarty_tpl->__("required");?>
)" data-ca-profile-fields-area-group="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['area']->value, ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['area_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profile_fields:field_settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profile_fields:field_settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <input type="hidden"
                                        name="fields_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                        value="<?php if (($_smarty_tpl->tpl_vars['field']->value['field_name'] === "email" && $_smarty_tpl->tpl_vars['field']->value['is_default'] === smarty_modifier_enum("YesNo::YES")) || ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "company" && $_smarty_tpl->tpl_vars['field']->value['profile_type'] === smarty_modifier_enum("ProfileTypes::CODE_SELLER"))) {
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
}?>"
                                    />
                                    <input type="checkbox"
                                        name="fields_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                        value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                                        id="sw_req_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['area']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        class="cm-switch-availability"
                                        data-ca-profile-fields-area="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['area']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value] === smarty_modifier_enum("YesNo::YES") || ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "company" && $_smarty_tpl->tpl_vars['field']->value['profile_type'] === smarty_modifier_enum("ProfileTypes::CODE_SELLER"))) {?>
                                            checked="checked"
                                        <?php }?>
                                        <?php if (($_smarty_tpl->tpl_vars['field']->value['field_name'] === "email" && $_smarty_tpl->tpl_vars['field']->value['is_default'] === smarty_modifier_enum("YesNo::YES")) || ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "company" && $_smarty_tpl->tpl_vars['field']->value['profile_type'] === smarty_modifier_enum("ProfileTypes::CODE_SELLER"))) {?>
                                            disabled="disabled"
                                        <?php }?>
                                        />
                                    <input type="hidden"
                                        name="fields_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                        value="<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "email" && $_smarty_tpl->tpl_vars['field']->value['is_default'] === smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['field']->value['field_name'] === "company" && $_smarty_tpl->tpl_vars['field']->value['profile_type'] === smarty_modifier_enum("ProfileTypes::CODE_SELLER")) {
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
}?>"
                                    />
                                    <span id="req_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['area']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
">
                                        <input type="checkbox"
                                            name="fields_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                            value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                                            data-ca-profile-fields-area="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['area']->value, ENT_QUOTES, 'UTF-8');?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_required']->value] === smarty_modifier_enum("YesNo::YES")) {?>
                                                checked="checked"
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "email" && $_smarty_tpl->tpl_vars['field']->value['is_default'] === smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value] === smarty_modifier_enum("YesNo::NO") || ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "company" && $_smarty_tpl->tpl_vars['field']->value['profile_type'] === smarty_modifier_enum("ProfileTypes::CODE_SELLER"))) {?>
                                                disabled="disabled"
                                            <?php }?>
                                        />
                                    </span>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profile_fields:field_settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </td>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php if ($_smarty_tpl->tpl_vars['profile_type']->value === smarty_modifier_enum("ProfileTypes::CODE_SELLER")) {?>
                                <td class="center" data-th="<?php echo $_smarty_tpl->__("show_on_storefront");?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_show_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                                    <input type="hidden" name="fields_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][storefront_show]" value="<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "company" || $_smarty_tpl->tpl_vars['field']->value['field_name'] === "company_description") {
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
}?>"/>
                                    <input type="checkbox" name="fields_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][storefront_show]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['storefront_show'] === smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "company" || $_smarty_tpl->tpl_vars['field']->value['field_name'] === "company_description") {?>disabled="disabled"<?php }?>/>
                                </td>
                            <?php }?>
                            <td class="nowrap mobile-hide" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tools_col_width']->value, ENT_QUOTES, 'UTF-8');?>
%">
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
                                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"profile_fields.delete?field_id=".((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."&profile_type=".((string)$_smarty_tpl->tpl_vars['profile_type']->value),'method'=>"POST"), true);?>
</li>
                                    <?php }?>
                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['update_link_text']->value,'href'=>fn_url("profile_fields.update?field_id=".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']))), true);?>
</li>
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <div class="hidden-tools">
                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                                </div>
                            </td>
                        </tr>
                        <?php $_smarty_tpl->_assignInScope('custom_fields', false);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
            <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
            <?php }?>
        </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"fields_form",'object'=>"profile_fields",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'profile_fields_table'),'is_check_all_shown'=>true), 0, false);
?>
    </form>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['profile_type']->value) {
echo "?profile_type=";
echo (string)$_smarty_tpl->tpl_vars['profile_type']->value;
}
$_prefixVariable15=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"profile_fields.add".$_prefixVariable15,'tool_override_meta'=>"btn btn-primary nav__actions-btn-primary",'prefix'=>"top",'title'=>$_smarty_tpl->__("add_field"),'link_text'=>$_smarty_tpl->__("add_field"),'hide_tools'=>true,'icon'=>"icon-plus"), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[profile_fields.m_update]",'but_role'=>"submit-button",'but_target_form'=>"fields_form",'is_btn_primary'=>false,'but_meta'=>"nav__actions-btn-save"), 0, false);
?>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/profile_fields.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("profile_fields"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_languages'=>true), 0, false);
}
}
