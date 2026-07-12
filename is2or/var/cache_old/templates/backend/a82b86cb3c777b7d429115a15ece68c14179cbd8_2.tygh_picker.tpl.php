<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:12
  from 'tygh:views/companies/components/picker/picker.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9460a6ea07_27726238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a82b86cb3c777b7d429115a15ece68c14179cbd8' => 
    array (
      0 => 'views/companies/components/picker/picker.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/picker/item.tpl' => 1,
  ),
))) {
function content_69ad9460a6ea07_27726238 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/companies/components/picker';
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search_or_click_button','none'));
?>

<?php $_smarty_tpl->assign('picker_id', (($tmp = $_smarty_tpl->getValue('picker_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('uniqid')() ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('picker_text_key', (($tmp = $_smarty_tpl->getValue('picker_text_key') ?? null)===null||$tmp==='' ? "value" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('input_name', (($tmp = $_smarty_tpl->getValue('input_name') ?? null)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->getValue('picker_id')) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('multiple', (($tmp = $_smarty_tpl->getValue('multiple') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_advanced', (($tmp = $_smarty_tpl->getValue('show_advanced') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('autofocus', (($tmp = $_smarty_tpl->getValue('autofocus') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('autoopen', (($tmp = $_smarty_tpl->getValue('autoopen') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('allow_clear', (($tmp = $_smarty_tpl->getValue('allow_clear') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('item_ids', $_smarty_tpl->getSmarty()->getModifierCallback('array_filter')((($tmp = $_smarty_tpl->getValue('item_ids') ?? null)===null||$tmp==='' ? array() ?? null : $tmp)), false, NULL);
$_smarty_tpl->assign('close_on_select', (($tmp = $_smarty_tpl->getValue('close_on_select') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('select_id', (($tmp = $_smarty_tpl->getValue('select_id') ?? null)===null||$tmp==='' ? "companies_add_".((string)$_smarty_tpl->getValue('picker_id')) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('predefined_variants', (($tmp = $_smarty_tpl->getValue('predefined_variants') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('multiple') && $_smarty_tpl->getValue('show_advanced')) {?>
    <?php $_smarty_tpl->assign('empty_variant_text', (($tmp = $_smarty_tpl->getValue('empty_variant_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("type_to_search_or_click_button", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('empty_variant_text', (($tmp = $_smarty_tpl->getValue('empty_variant_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("none", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('show_empty_variant')) {?>
    <?php $_tmp_array = $_smarty_tpl->getValue('predefined_variants') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["0"] = $_smarty_tpl->getValue('empty_variant_text');
$_smarty_tpl->assign('predefined_variants', $_tmp_array, false, NULL);
}?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('predefined_variants'), 'variant', false, 'id');
$foreach25DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('variant')->value) {
$foreach25DoElse = false;
?>
    <?php $_tmp_array = $_smarty_tpl->getValue('predefined_variant_items') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array("id"=>$_smarty_tpl->getValue('id'),"text"=>$_smarty_tpl->getValue('variant'),"data"=>array("name"=>$_smarty_tpl->getValue('variant')));
$_smarty_tpl->assign('predefined_variant_items', $_tmp_array, false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<div class="object-picker <?php if ($_smarty_tpl->getValue('view_mode') == "external") {?>object-picker--external<?php }?> object-picker--companies <?php echo $_smarty_tpl->getValue('meta');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('picker_id')), ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__select-group object-picker__select-group--companies <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('select_group_class')), ENT_QUOTES, 'UTF-8');?>
">
        <div class="object-picker__simple <?php if ($_smarty_tpl->getValue('type') == "list") {?>object-picker__simple--list<?php }?> <?php if ($_smarty_tpl->getValue('show_advanced')) {?>object-picker__simple--advanced<?php }?> object-picker__simple--companies <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('simple_class')), ENT_QUOTES, 'UTF-8');?>
">
            <select <?php if ($_smarty_tpl->getValue('multiple')) {?>multiple<?php }?>
                    id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('select_id')), ENT_QUOTES, 'UTF-8');?>
"
                    name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_name')), ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-object-picker object-picker__select object-picker__select--companies <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('select_class')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-object-type="company"
                    data-ca-object-picker-escape-html="false"
                    data-ca-object-picker-ajax-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.get_companies_list")), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-ajax-delay="250"
                    data-ca-object-picker-template-selection-selector="#object_picker_selection_template_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('picker_id')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-selection-load-selector="#object_picker_selection_load_template_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('picker_id')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autofocus="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('to_json')($_smarty_tpl->getValue('autofocus'))), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-close-on-select="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('to_json')($_smarty_tpl->getValue('close_on_select'))), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autoopen="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('autoopen')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-dispatch="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('submit_url')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-form="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('submit_form')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder="<?php echo strtr((string)$_smarty_tpl->getValue('empty_variant_text'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
"
                    data-ca-object-picker-placeholder-value=""
                    data-ca-object-picker-width="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('width')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-extended-picker-id="object_extended_picker_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('picker_id')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-extended-picker-text-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('picker_text_key')), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->getValue('view_mode') == "external") {?>
                        data-ca-object-picker-external-container-selector="#object_picker_external_seleceted_companies_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('picker_id')), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('dropdown_parent_selector')) {?>
                        data-ca-object-picker-dropdown-parent-selector="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_parent_selector')), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('predefined_variant_items')) {?>
                        data-ca-object-picker-allow-clear="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('allow_clear')), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-object-picker-predefined-variants="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('to_json')($_smarty_tpl->getValue('predefined_variant_items'))), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
            >
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item_ids'), 'item_id');
$foreach26DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item_id')->value) {
$foreach26DoElse = false;
?>
                    <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_id')), ENT_QUOTES, 'UTF-8');?>
" selected="selected"></option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_template_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('picker_id')), ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="cm-object-picker-object object-picker__selection <?php if ($_smarty_tpl->getValue('type') == "list") {?>object-picker__selection--list<?php }?> object-picker__selection--companies">
        <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('selection_title_pre')), ENT_QUOTES, 'UTF-8');
$_prefixVariable22 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('selection_title_post')), ENT_QUOTES, 'UTF-8');
$_prefixVariable23 = ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:views/companies/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"selection",'title_pre'=>$_prefixVariable22,'title_post'=>$_prefixVariable23), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_load_template_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('picker_id')), ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__skeleton object-picker__skeleton--companies">...
    </div>
<?php echo '</script'; ?>
><?php }
}
