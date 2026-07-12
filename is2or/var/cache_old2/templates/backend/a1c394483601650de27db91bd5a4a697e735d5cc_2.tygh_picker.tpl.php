<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:views/storefronts/components/picker/picker.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1af6c99f6_48786123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1c394483601650de27db91bd5a4a697e735d5cc' => 
    array (
      0 => 'views/storefronts/components/picker/picker.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/storefronts/picker.tpl' => 1,
    'tygh:views/storefronts/components/picker/item.tpl' => 1,
  ),
))) {
function content_69afb1af6c99f6_48786123 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/storefronts/components/picker';
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search_or_click_button','none','advanced_storefronts_search'));
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
$_smarty_tpl->assign('dropdown_css_class', (($tmp = "object-picker__dropdown object-picker__dropdown--storefronts ".((string)$_smarty_tpl->getValue('dropdown_css_class')) ?? null)===null||$tmp==='' ? "object-picker__dropdown object-picker__dropdown--storefronts" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('search_data', (($tmp = $_smarty_tpl->getValue('search_data') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('no_container', (($tmp = $_smarty_tpl->getValue('no_container') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('multiple') && $_smarty_tpl->getValue('show_advanced')) {?>
    <?php $_smarty_tpl->assign('empty_variant_text', (($tmp = $_smarty_tpl->getValue('empty_variant_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("type_to_search_or_click_button", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('empty_variant_text', (($tmp = $_smarty_tpl->getValue('empty_variant_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("none", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
}?>

<div class="object-picker <?php if ($_smarty_tpl->getValue('view_mode') == "external") {?>object-picker--external<?php }?> object-picker--storefronts <?php echo $_smarty_tpl->getValue('meta');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('picker_id')), ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__select-group object-picker__select-group--storefronts <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('select_group_class')), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->getValue('show_advanced')) {?>
            <div class="object-picker__advanced object-picker__advanced--storefronts <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('advanced_class')), ENT_QUOTES, 'UTF-8');?>
">
                <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("advanced_storefronts_search", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable44=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:pickers/storefronts/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('picker_id'=>"object_picker_advanced_".((string)$_smarty_tpl->getValue('picker_id')),'data_id'=>"om",'no_container'=>$_smarty_tpl->getValue('no_container'),'icon'=>"icon-reorder",'but_text'=>$_prefixVariable44,'show_but_text'=>false,'view_mode'=>"button",'meta'=>"object-picker__advanced-btn object-picker__advanced-btn--storefronts ".((string)$_smarty_tpl->getValue('object_picker_advanced_btn_class'))), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php }?>
        <div class="object-picker__simple <?php if ($_smarty_tpl->getValue('type') == "list") {?>object-picker__simple--list<?php }?> <?php if ($_smarty_tpl->getValue('show_advanced')) {?>object-picker__simple--advanced<?php }?> object-picker__simple--storefronts <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_picker_simple')), ENT_QUOTES, 'UTF-8');?>
">
            <select <?php if ($_smarty_tpl->getValue('multiple')) {?>multiple<?php }?>
                    name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_name')), ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-object-picker object-picker__select object-picker__select--storefronts <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('select_class')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-object-type="storefront"
                    data-ca-object-picker-escape-html="false"
                    data-ca-object-picker-ajax-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("storefronts.picker.inline")), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-ajax-delay="250"
                    data-ca-object-picker-template-selection-selector="#object_picker_selection_template_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('picker_id')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-selection-load-selector="#object_picker_selection_load_template_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('picker_id')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autofocus="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('to_json')($_smarty_tpl->getValue('autofocus'))), ENT_QUOTES, 'UTF-8');?>
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
                    data-ca-object-picker-dropdown-css-class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_css_class')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-extended-picker-text-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('picker_text_key')), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-search-request-data="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('to_json')($_smarty_tpl->getValue('search_data'))), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->getValue('view_mode') == "external") {?>
                        data-ca-object-picker-external-container-selector="#object_picker_external_seleceted_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('picker_id')), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('dropdown_parent_selector')) {?>
                        data-ca-object-picker-dropdown-parent-selector="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_parent_selector')), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('show_empty_variant')) {?>
                        data-ca-object-picker-allow-clear="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('allow_clear')), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-object-picker-predefined-variants="<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('empty_variant_text')), ENT_QUOTES, 'UTF-8');
$_prefixVariable45 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('empty_variant_text')), ENT_QUOTES, 'UTF-8');
$_prefixVariable46 = ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('to_json')(array(array("id"=>0,"text"=>$_prefixVariable45,"data"=>array("name"=>$_prefixVariable46))))), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('disabled')) {?>
                        disabled="disabled"
                    <?php }?>
            >
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item_ids'), 'item_id');
$foreach22DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item_id')->value) {
$foreach22DoElse = false;
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
    <div class="cm-object-picker-object object-picker__selection <?php if ($_smarty_tpl->getValue('type') == "list") {?>object-picker__selection--list<?php }?> object-picker__selection--storefronts">
        <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('selection_title_pre')), ENT_QUOTES, 'UTF-8');
$_prefixVariable47 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('selection_title_post')), ENT_QUOTES, 'UTF-8');
$_prefixVariable48 = ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:views/storefronts/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"selection",'title_pre'=>$_prefixVariable47,'title_post'=>$_prefixVariable48), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_load_template_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('picker_id')), ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__skeleton object-picker__skeleton--storefronts">...
    </div>
<?php echo '</script'; ?>
><?php }
}
