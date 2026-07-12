<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:19:28
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/profile_fields/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bbe09bb1e3_87697855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '909823ac51522529f7df3d983ee6cd5287ec823a' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/profile_fields/update.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/multiple_buttons.tpl' => 2,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6835bbe09bb1e3_87697855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('edit_corresponding_profile_field','general','variants','name','vendor_terms_field_terms_text','edit','vendor_terms_field_alert','edit','code','profile_field_name_tooltip','code','position','type','phone','zip_postal_code','checkbox','date','input_field','radiogroup','selectbox','textarea','email','file','vendor_terms','states','country','address_type','section','contact_information','billing_address','shipping_address','contact_information','billing_address','shipping_address','user_class','wrapper_class','show','required','show_on_storefront','position_short','description','position_short','description','tools','position_short','description','tools','new_profile_field'));
?>

<?php if ($_smarty_tpl->tpl_vars['field']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['field']->value['field_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', "0");
}?>

<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>



<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
function fn_check_field_type(value, tab_id)
{
    Tygh.$('#' + tab_id).toggleBy(!(value == 'R' || value == 'S'));
}
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php if ($_smarty_tpl->tpl_vars['field']->value['is_default'] == "Y" || $_smarty_tpl->tpl_vars['field']->value['section'] == smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS")) {?>
    <?php $_smarty_tpl->_assignInScope('block_fields', true);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "blocked_changing_info", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['block_fields']->value && $_smarty_tpl->tpl_vars['field']->value['is_default'] != "Y") {?>
        <?php echo $_smarty_tpl->__("edit_corresponding_profile_field",array("[URL]"=>fn_url("profile_fields.update&field_id=".((string)$_smarty_tpl->tpl_vars['field']->value['matching_id']))));?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if (fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->_assignInScope('hide_inputs', "cm-hide-inputs");?>
    <?php $_smarty_tpl->_assignInScope('hide_multiple_buttons', "hidden");
}
$_smarty_tpl->_assignInScope('tabs_count', 2);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" method="post" name="add_fields_form" class="form-horizontal form-edit  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hide_inputs']->value, ENT_QUOTES, 'UTF-8');?>
">

<div class="cm-j-tabs cm-track tabs tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabs_count']->value, ENT_QUOTES, 'UTF-8');?>
">
    <ul class="nav nav-tabs">
        <li id="tab_new_profile<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        <li id="tab_variants<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="cm-js <?php if ($_smarty_tpl->tpl_vars['field']->value['is_default'] == "Y" || ($_smarty_tpl->tpl_vars['field']->value['field_type'] != smarty_modifier_enum("ProfileFieldTypes::RADIO") && $_smarty_tpl->tpl_vars['field']->value['field_type'] != smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX"))) {?>hidden<?php }?>"
        ><a><?php echo $_smarty_tpl->__("variants");?>
</a></li>
    </ul>
</div>
<div class="cm-tabs-content">
    <div id="content_tab_new_profile<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="field_data[field_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="field_data[matching_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['matching_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="field_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

        <div class="control-group">
            <label for="elm_field_description" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
            <div class="controls">
            <input id="elm_field_description" class="input-large" type="text" name="field_data[description]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::VENDOR_TERMS")) {?>
            <div class="control-group">
                <label for="elm_field_vendor_terms_content" class="control-label"><?php echo $_smarty_tpl->__("vendor_terms_field_terms_text");?>
:</label>
                <div class="controls">
                    <a href="<?php echo htmlspecialchars((string) fn_url("languages.translations?q=vendor_terms_n_conditions_content"), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("edit");?>
</a>
                </div>
            </div>

            <div class="control-group">
                <label for="elm_field_vendor_terms_alert" class="control-label"><?php echo $_smarty_tpl->__("vendor_terms_field_alert");?>
:</label>
                <div class="controls">
                    <a href="<?php echo htmlspecialchars((string) fn_url("languages.translations?q=vendor_terms_n_conditions_alert"), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("edit");?>
</a>
                </div>
            </div>
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['field_name']->value) {?>
            <div class="control-group">
                <label for="elm_field_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("code");?>
:</label>
                <div class="controls">
                    <input id="elm_field_name" class="input-text-short" type="text" name="field_data[field_name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
" />
                    <p class="muted description"><?php echo $_smarty_tpl->__("profile_field_name_tooltip");?>
</p>
                </div>
            </div>
        <?php } else { ?>
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("code");?>
:</label>
                <div class="controls">
                    <span class="shift-input"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <input name="field_data[field_name]" type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        <?php }?>

        <div class="control-group">
            <label class="control-label" for="elm_field_position"><?php echo $_smarty_tpl->__("position");?>
:</label>
            <div class="controls">
            <input class="input-text-short" id="elm_field_position" type="text" size="3" name="field_data[position]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['position'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <?php if (!$_smarty_tpl->tpl_vars['field']->value['field_id'] && $_smarty_tpl->tpl_vars['profile_type']->value) {?>
            <input type="hidden" name="field_data[profile_type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_type']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <div class="control-group">
            <label class="control-label" for="elm_field_type"><?php echo $_smarty_tpl->__("type");?>
:</label>
            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] !== smarty_modifier_enum("ProfileFieldTypes::STATE") && $_smarty_tpl->tpl_vars['field']->value['field_type'] !== smarty_modifier_enum("ProfileFieldTypes::COUNTRY") && $_smarty_tpl->tpl_vars['field']->value['field_type'] !== smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
                    <select id="elm_field_type" name="field_data[field_type]" onchange="fn_check_field_type(this.value, 'tab_variants<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');" <?php if ($_smarty_tpl->tpl_vars['block_fields']->value) {?>disabled="disabled"<?php }?>>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profile_fields:field_types"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profile_fields:field_types"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::PHONE"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::PHONE")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("phone");?>
</option>
                        <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("zip_postal_code");?>
</option>
                        <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::CHECKBOX"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("checkbox");?>
</option>
                        <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::DATE"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("date");?>
</option>
                        <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::INPUT"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::INPUT")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("input_field");?>
</option>
                        <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::RADIO"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("radiogroup");?>
</option>
                        <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("selectbox");?>
</option>
                        <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("textarea");?>
</option>
                        <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::EMAIL"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::EMAIL")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("email");?>
</option>
                        <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::FILE"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::FILE")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("file");?>
</option>
                        <?php if ($_smarty_tpl->tpl_vars['block_fields']->value) {?>
                                                        <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::VENDOR_TERMS"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::VENDOR_TERMS")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("vendor_terms");?>
</option>
                        <?php }?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profile_fields:field_types"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </select>
                <?php } else { ?>
                    <select id="elm_field_type" name="field_data[field_type]" disabled="disabled">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profile_fields:field_types"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profile_fields:field_types"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::STATE"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("states");?>
</option>
                        <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::COUNTRY"), ENT_QUOTES, 'UTF-8');?>
" <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::COUNTRY"), ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == $_prefixVariable1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("country");?>
</option>
                        <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("address_type");?>
</option>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profile_fields:field_types"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </select>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block_fields']->value) {?>
                    <input type="hidden" name="field_data[field_type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
" />
                    <div class="micro-note"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'blocked_changing_info');?>
</div>
                <?php }?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_field_section"><?php echo $_smarty_tpl->__("section");?>
:</label>
            <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                <input type="hidden" name="field_data[section]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['section'], ENT_QUOTES, 'UTF-8');?>
" />
                <span class="shift-input">
                    <?php if ($_smarty_tpl->tpl_vars['field']->value['section'] == smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")) {?>
                        <?php echo $_smarty_tpl->__("contact_information");?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['section'] == smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS") || $_smarty_tpl->tpl_vars['field']->value['section'] == smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS")) {?>
                        <?php echo $_smarty_tpl->__("billing_address");?>
/<?php echo $_smarty_tpl->__("shipping_address");?>

                    <?php }?>
                </span>
            <?php } else { ?>
                <select id="elm_field_section" name="field_data[section]">
                    <?php if (in_array(smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION"),(array) $_smarty_tpl->tpl_vars['profile_types']->value[$_smarty_tpl->tpl_vars['profile_type']->value]["allowed_sections"])) {?>
                    <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION"), ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['section'] == smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")) {?>selected="selected"<?php }?>
                    ><?php echo $_smarty_tpl->__("contact_information");?>
</option>
                    <?php }?>
                    <?php if (in_array(smarty_modifier_enum("ProfileFieldSections::BILLING_AND_SHIPPING_ADDRESS"),(array) $_smarty_tpl->tpl_vars['profile_types']->value[$_smarty_tpl->tpl_vars['profile_type']->value]["allowed_sections"])) {?>
                    <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProfileFieldSections::BILLING_AND_SHIPPING_ADDRESS"), ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['section'] == smarty_modifier_enum("ProfileFieldSections::BILLING_AND_SHIPPING_ADDRESS")) {?>selected="selected"<?php }?>
                    ><?php echo $_smarty_tpl->__("billing_address");?>
/<?php echo $_smarty_tpl->__("shipping_address");?>
</option>
                    <?php }?>
                </select>
            <?php }?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_field_user_class"><?php echo $_smarty_tpl->__("user_class");?>
:</label>
            <div class="controls">
                <input id="elm_field_user_class" class="input-large" type="text" name="field_data[class]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_field_wrapper_class"><?php echo $_smarty_tpl->__("wrapper_class");?>
:</label>
            <div class="controls">
                <input id="elm_field_wrapper_class" class="input-large" type="text" name="field_data[wrapper_class]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['wrapper_class'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile_types']->value[$_smarty_tpl->tpl_vars['profile_type']->value]["allowed_areas"], 'area');
$_smarty_tpl->tpl_vars['area']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['area']->value) {
$_smarty_tpl->tpl_vars['area']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('_show', ((string)$_smarty_tpl->tpl_vars['area']->value)."_show");?>
            <?php $_smarty_tpl->_assignInScope('_required', ((string)$_smarty_tpl->tpl_vars['area']->value)."_required");?>
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['area']->value);?>
 (<?php echo $_smarty_tpl->__("show");?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("required");?>
):</label>
                <div class="controls">
                    <input type="hidden"
                        name="field_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]"
                        value="<?php if (($_smarty_tpl->tpl_vars['field']->value['field_name'] === "email" && $_smarty_tpl->tpl_vars['field']->value['is_default'] === smarty_modifier_enum("YesNo::YES")) || ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "company" && $_smarty_tpl->tpl_vars['field']->value['profile_type'] === smarty_modifier_enum("ProfileTypes::CODE_SELLER") && $_smarty_tpl->tpl_vars['field']->value['is_default'] === smarty_modifier_enum("YesNo::YES"))) {
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
}?>"
                    />
                    <input type="checkbox"
                        name="field_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]"
                        value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                        id="sw_req_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
"
                        class="cm-switch-availability"
                        <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value] === smarty_modifier_enum("YesNo::YES")) {?>
                            checked="checked"
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "email" && $_smarty_tpl->tpl_vars['field']->value['is_default'] === smarty_modifier_enum("YesNo::YES") || ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "company" && $_smarty_tpl->tpl_vars['field']->value['profile_type'] === smarty_modifier_enum("ProfileTypes::CODE_SELLER"))) {?>
                            disabled="disabled"
                        <?php }?>
                    />&nbsp;

                    <input type="hidden"
                        name="field_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]"
                        value="<?php if (($_smarty_tpl->tpl_vars['field']->value['field_name'] === "email" && $_smarty_tpl->tpl_vars['field']->value['is_default'] === smarty_modifier_enum("YesNo::YES")) || ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "company" && $_smarty_tpl->tpl_vars['field']->value['profile_type'] === smarty_modifier_enum("ProfileTypes::CODE_SELLER") && $_smarty_tpl->tpl_vars['field']->value['is_default'] === smarty_modifier_enum("YesNo::YES"))) {
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
}?>"
                    />
                    <span id="req_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "email") {?>_email<?php }?>">
                        <input type="checkbox"
                            name="field_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]"
                            value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                            class=""
                            <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_required']->value] === smarty_modifier_enum("YesNo::YES")) {?>
                                checked="checked"
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value] === smarty_modifier_enum("YesNo::NO") || $_smarty_tpl->tpl_vars['field']->value['field_name'] === "email" && $_smarty_tpl->tpl_vars['field']->value['is_default'] === smarty_modifier_enum("YesNo::YES") || ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "company" && $_smarty_tpl->tpl_vars['field']->value['profile_type'] === smarty_modifier_enum("ProfileTypes::CODE_SELLER"))) {?>
                                disabled="disabled"
                            <?php }?>
                        />
                    </span>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php if ($_smarty_tpl->tpl_vars['field']->value['profile_type'] === smarty_modifier_enum("ProfileTypes::CODE_SELLER") || $_smarty_tpl->tpl_vars['profile_type']->value === smarty_modifier_enum("ProfileTypes::CODE_SELLER")) {?>
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("show_on_storefront");?>
:</label>
                <div class="controls">
                    <input type="hidden" name="field_data[storefront_show]" value="<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "company" || $_smarty_tpl->tpl_vars['field']->value['field_name'] === "company_description") {
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
}?>"/>
                    <input type="checkbox" name="field_data[storefront_show]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['storefront_show'] === smarty_modifier_enum("YesNo::YES") || !$_smarty_tpl->tpl_vars['id']->value) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name'] === "company" || $_smarty_tpl->tpl_vars['field']->value['field_name'] === "company_description") {?>disabled="disabled"<?php }?>/>
                </div>
            </div>
        <?php }?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profile_fields:profile_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profile_fields:profile_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profile_fields:profile_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <!--content_tab_new_profile<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <div class="<?php if ($_smarty_tpl->tpl_vars['field']->value['is_default'] == "Y" || ($_smarty_tpl->tpl_vars['field']->value['field_type'] != smarty_modifier_enum("ProfileFieldTypes::RADIO") && $_smarty_tpl->tpl_vars['field']->value['field_type'] != smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX"))) {?>hidden<?php }?>" id="content_tab_variants<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['block_fields']->value) {?>
            <div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'blocked_changing_info');?>
</div>
        <?php }?>
        <div class="table-responsive-wrapper">
            <table class="table table-middle table--relative table-responsive">
            <tr id="field_values_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="no-border td-no-bg">
                <td colspan="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_colspan']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <table width="1" class="table">
                        <thead>
                            <tr class="cm-first-sibling">
                                <th style="width: 8%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                                <th style="width: 68%"><?php echo $_smarty_tpl->__("description");?>
</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                    <?php if ($_smarty_tpl->tpl_vars['field']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['values'], 'value', false, 'value_id', 'values', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value_id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_values']->value['iteration']++;
?>
                        <tr class="cm-first-sibling">
                            <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                                <input class="input-micro" size="3" type="text" name="field_data[values][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value_id']->value, ENT_QUOTES, 'UTF-8');?>
][position]"
                                   value="<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_values']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_values']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['block_fields']->value) {?>disabled<?php }?> />
                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("description");?>
">
                                <input class="span7" type="text" name="field_data[values][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value_id']->value, ENT_QUOTES, 'UTF-8');?>
][description]"
                                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"  <?php if ($_smarty_tpl->tpl_vars['block_fields']->value) {?>disabled<?php }?> />
                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                                <?php if (!$_smarty_tpl->tpl_vars['block_fields']->value) {
$_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('only_delete'=>"Y"), 0, true);
}?>
                            </td>
                        </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                    <?php if (!$_smarty_tpl->tpl_vars['block_fields']->value) {?>
                    <tr id="box_elm_values_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['hide_multiple_buttons']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hide_multiple_buttons']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                        <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
"><input class="input-micro" size="3" type="text" name="field_data[add_values][0][position]" /></td>
                        <td data-th="<?php echo $_smarty_tpl->__("description");?>
"><input class="span7" type="text" name="field_data[add_values][0][description]" /></td>
                        <td data-th="<?php echo $_smarty_tpl->__("tools");?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_id'=>"elm_values_".((string)$_smarty_tpl->tpl_vars['id']->value),'tag_level'=>2), 0, true);
?></td>
                    </tr>
                <?php }?>
                    </table>
                </td>
            </tr>
            </table>
        </div>
    <!--content_tab_variants<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
</div>
</form>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[profile_fields.update]",'but_target_form'=>"add_fields_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['field']->value['description'] : $_smarty_tpl->__("new_profile_field"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>true,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
}
}
