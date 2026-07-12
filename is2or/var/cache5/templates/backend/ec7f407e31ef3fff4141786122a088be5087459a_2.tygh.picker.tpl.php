<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:54
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/categories/components/picker/picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba564584e5_76641120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec7f407e31ef3fff4141786122a088be5087459a' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/categories/components/picker/picker.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/categories/picker.tpl' => 1,
    'tygh:common/check_items.tpl' => 1,
    'tygh:views/categories/components/picker/item.tpl' => 6,
  ),
),false)) {
function content_6835ba564584e5_76641120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.to_json.php','function'=>'smarty_modifier_to_json',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('none','no_data','delete_selected','delete','add'));
?>

<?php $_smarty_tpl->_assignInScope('picker_id', (($tmp = $_smarty_tpl->tpl_vars['picker_id']->value ?? null)===null||$tmp==='' ? uniqid() ?? null : $tmp));
$_smarty_tpl->_assignInScope('select_id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "product_categories_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('input_name', (($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('multiple', (($tmp = $_smarty_tpl->tpl_vars['multiple']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_advanced', (($tmp = $_smarty_tpl->tpl_vars['show_advanced']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('autofocus', (($tmp = $_smarty_tpl->tpl_vars['autofocus']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('autoopen', (($tmp = $_smarty_tpl->tpl_vars['autoopen']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('allow_clear', (($tmp = $_smarty_tpl->tpl_vars['allow_clear']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_ids', array_filter((($tmp = $_smarty_tpl->tpl_vars['item_ids']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)));
$_smarty_tpl->_assignInScope('empty_variant_text', (($tmp = $_smarty_tpl->tpl_vars['empty_variant_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("none") ?? null : $tmp));
$_smarty_tpl->_assignInScope('dropdown_css_class', (($tmp = $_smarty_tpl->tpl_vars['dropdown_css_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('allow_add', (($tmp = $_smarty_tpl->tpl_vars['allow_add']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('allow_sorting', (($tmp = $_smarty_tpl->tpl_vars['allow_sorting']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('required', (($tmp = $_smarty_tpl->tpl_vars['required']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('disabled', (($tmp = $_smarty_tpl->tpl_vars['disabled']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('allow_multiple_created_objects', (($tmp = $_smarty_tpl->tpl_vars['allow_multiple_created_objects']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('close_on_select', (($tmp = $_smarty_tpl->tpl_vars['close_on_select']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('container_css_class', (($tmp = $_smarty_tpl->tpl_vars['container_css_class']->value ?? null)===null||$tmp==='' ? ".object-picker--categories" ?? null : $tmp));
$_smarty_tpl->_assignInScope('predefined_variants', (($tmp = $_smarty_tpl->tpl_vars['predefined_variants']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_smarty_tpl->_assignInScope('predefined_variant_items', array());
$_smarty_tpl->_assignInScope('is_bulk_edit', (($tmp = $_smarty_tpl->tpl_vars['is_bulk_edit']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('has_removable_items', (($tmp = $_smarty_tpl->tpl_vars['has_removable_items']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_tristate_checkbox', (($tmp = $_smarty_tpl->tpl_vars['is_tristate_checkbox']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('no_items_text', (($tmp = $_smarty_tpl->tpl_vars['no_items_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("no_data") ?? null : $tmp));
$_smarty_tpl->_assignInScope('query_params', (($tmp = $_smarty_tpl->tpl_vars['query_params']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['show_empty_variant']->value) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['predefined_variants']) ? $_smarty_tpl->tpl_vars['predefined_variants']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["0"] = $_smarty_tpl->tpl_vars['empty_variant_text']->value;
$_smarty_tpl->_assignInScope('predefined_variants', $_tmp_array);
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['predefined_variants']->value, 'variant', false, 'id');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['predefined_variant_items']) ? $_smarty_tpl->tpl_vars['predefined_variant_items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array("id"=>$_smarty_tpl->tpl_vars['id']->value,"text"=>$_smarty_tpl->tpl_vars['variant']->value,"data"=>array("name"=>$_smarty_tpl->tpl_vars['variant']->value));
$_smarty_tpl->_assignInScope('predefined_variant_items', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['allow_multiple_created_objects']->value, ENT_QUOTES, 'UTF-8');?>
" value=""/>

<div class="object-picker <?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "external") {?>object-picker--external<?php }?> object-picker--categories <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__simple <?php if ($_smarty_tpl->tpl_vars['type']->value == "list") {?>object-picker__simple--list<?php }?> object-picker__simple--categories <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>object-picker__simple--advanced<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['simple_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value && !$_smarty_tpl->tpl_vars['disabled']->value) {?>
            <div class="object-picker__advanced object-picker__advanced--categories <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['advanced_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('picker_id'=>"object_picker_advanced_".((string)$_smarty_tpl->tpl_vars['picker_id']->value),'company_ids'=>$_smarty_tpl->tpl_vars['runtime']->value['company_id'],'rnd'=>"category",'data_id'=>"categories",'view_mode'=>"button",'but_meta'=>"object-categories-add__picker object-picker__advanced-btn object-picker__advanced-btn--categories ".((string)$_smarty_tpl->tpl_vars['object_picker_advanced_btn_class']->value),'but_icon'=>"icon-reorder",'but_role'=>"add",'but_text'=>'','multiple'=>$_smarty_tpl->tpl_vars['multiple']->value,'is_tristate_checkbox'=>$_smarty_tpl->tpl_vars['is_tristate_checkbox']->value,'extra_url'=>"&".((string)(http_build_query($_smarty_tpl->tpl_vars['query_params']->value)))), 0, false);
?>
            </div>
        <?php }?>

        <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tabindex']->value) {?>tabindex="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select2_tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="cm-object-picker object-picker__select object-picker__select--categories <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-dropdown-css-class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_css_class']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-close-on-select="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['close_on_select']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-object-type="categories"
            data-ca-object-picker-escape-html="false"
            data-ca-object-picker-ajax-url="<?php echo htmlspecialchars((string) fn_url("categories.get_categories_list?".((string)(http_build_query($_smarty_tpl->tpl_vars['query_params']->value)))), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-ajax-delay="250"
            data-ca-object-picker-ajax-method="post"
            data-ca-object-picker-template-result-selector="#object_picker_result_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-template-selection-selector="#object_picker_selection_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-template-selection-load-selector="#object_picker_selection_load_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-autofocus="<?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['autofocus']->value), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-autoopen="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['autoopen']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-allow-sorting="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['allow_sorting']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-dispatch="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['submit_url']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['submit_form']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-required="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['required']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-placeholder="<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['empty_variant_text']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-placeholder-value=""
            data-ca-object-picker-width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-extended-picker-id="object_picker_advanced_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-extended-picker-text-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_text_key']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-has-removable-items="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['has_removable_items']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "external") {?>
                data-ca-object-picker-external-container-selector="#object_picker_selected_external_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['allow_add']->value) {?>
                data-ca-object-picker-enable-create-object="true"
                data-ca-object-picker-template-result-new-selector="#object_picker_result_new_selector_categories_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-object-picker-template-selection-new-selector="#object_picker_selection_new_selector_categories_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-object-picker-created-object-holder-selector="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['created_object_holder_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-object-picker-allow-multiple-created-objects="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['allow_multiple_created_objects']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['predefined_variant_items']->value) {?>
                data-ca-object-picker-allow-clear="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['allow_clear']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-object-picker-predefined-variants="<?php echo htmlspecialchars((string) smarty_modifier_to_json(array_reverse($_smarty_tpl->tpl_vars['predefined_variant_items']->value)), ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['attributes']->value) {?>
                <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['attributes']->value);?>

            <?php }?>
        >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'item_id');
$_smarty_tpl->tpl_vars['item_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected"></option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value === "external") {?>      
        <div class="object-picker__categories-check-all <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item_ids']->value) === 0) {?>hide-check-all<?php }?>" data-ca-bulkedit-default-object="true">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"delete",'class'=>"btn cm-object-picker-remove-multiple-objects",'text'=>$_smarty_tpl->__("delete_selected")), true);?>

        </div>

        <div id="object_picker_selected_external_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="object-picker__selected-external object-picker__selected-external--categories <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_external_class']->value, ENT_QUOTES, 'UTF-8');?>
"></div>

        <p class="no-items object-picker__selected-external-not-items"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_items_text']->value, ENT_QUOTES, 'UTF-8');?>
</p>
    <?php }?>
</div>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_result_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <?php if ($_smarty_tpl->tpl_vars['is_bulk_edit']->value) {?>
        ${data.name}
    <?php } else { ?>
        <div class="object-picker__result object-picker__result--categories <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"result",'title_pre'=>$_smarty_tpl->tpl_vars['selection_title_pre']->value,'title_post'=>$_smarty_tpl->tpl_vars['selection_title_post']->value), 0, false);
?>
        </div>
    <?php }
echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "external") {?>
    <?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
        <div class="cm-object-picker-object object-picker__selection-extended object-picker__selection-extended--categories">
            <input type="checkbox" name="category_ids[]" value="${data.id}" class="checkbox cm-item"/>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"selection_external",'title_pre'=>$_smarty_tpl->tpl_vars['selection_title_pre']->value,'title_post'=>$_smarty_tpl->tpl_vars['selection_title_post']->value), 0, true);
?>
            <a href="#" class="btn object-picker__categories-delete cm-object-picker-remove-object" title="<?php echo $_smarty_tpl->__("delete");?>
">
                <span class="icon-remove"></span>
            </a>
        </div>
    <?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
        <div class="object-picker__selection object-picker__selection--categories <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selection_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"selection",'title_pre'=>$_smarty_tpl->tpl_vars['selection_title_pre']->value,'title_post'=>$_smarty_tpl->tpl_vars['selection_title_post']->value), 0, true);
?>
        </div>
    <?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_load_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <?php if ($_smarty_tpl->tpl_vars['is_bulk_edit']->value) {?>
        ${data.name}
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"load"), 0, true);
?>
    <?php }
echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_result_new_selector_categories_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result-categories object-picker__result-categories--new">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"new_item",'title_pre'=>$_smarty_tpl->__("add"),'title_post'=>$_smarty_tpl->tpl_vars['selection_title_post']->value,'help'=>true), 0, true);
?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_new_selector_categories_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__selection-categories object-picker__selection-categories--new">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"new_item",'title_pre'=>((string)$_smarty_tpl->tpl_vars['selection_title_pre']->value),'title_post'=>$_smarty_tpl->tpl_vars['selection_title_post']->value,'help'=>false,'icon'=>false), 0, true);
?>
    </div>
<?php echo '</script'; ?>
>
<?php }
}
