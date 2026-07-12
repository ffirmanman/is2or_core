<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:22:04
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_filters/for_category/abt__ut2_selected_filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc7c169be5_37872495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7aeeb0f07b7db89a3f564748abc17a961119d31e' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_filters/for_category/abt__ut2_selected_filters.tpl',
      1 => 1736836654,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 4,
  ),
),false)) {
function content_6835bc7c169be5_37872495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.filter.vendor_location_variant','reset','abt__ut2.filter.vendor_location_variant','reset'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "abt__selected_filters", null, null);
$_smarty_tpl->_assignInScope('ajax_div_ids', "product_filters_*,selected_filters_*,products_search_*,category_products_*,currencies_*,languages_*,product_features_*");
$_smarty_tpl->_assignInScope('curl', $_smarty_tpl->tpl_vars['config']->value['current_url']);
$_smarty_tpl->_assignInScope('filter_base_url', fn_query_remove($_smarty_tpl->tpl_vars['curl']->value,"result_ids","full_render","filter_id","view_all","req_range_id","features_hash","subcats","page","total"));?><div class="ut2-selected-product-filters cm-product-filters" id="selected_filters_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_assignInScope('reset_url', $_smarty_tpl->tpl_vars['filter_base_url']->value);
$_smarty_tpl->_assignInScope('abt__selected', false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants'] || $_smarty_tpl->tpl_vars['filter']->value['selected_range']) {
$_smarty_tpl->_assignInScope('abt__selected', true);
if ($_smarty_tpl->tpl_vars['filter']->value['field_type'] === "Z") {
$_smarty_tpl->_assignInScope('location', $_smarty_tpl->tpl_vars['filter']->value['location']);
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['location']->value->toArray());?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("abt__ut2.filter.vendor_location_variant",array("[range]"=>$_smarty_tpl->tpl_vars['value']->value['radius'],"[suffix]"=>$_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['distance_unit']));?>
<i class="ty-icon-cancel-circle"></i></a><?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['field_type'] === "R") {?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['filter']->value['filter'];?>
<i class="ty-icon-cancel-circle"></i></a><?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['selected_variants']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['selected_variants'], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
$_smarty_tpl->_assignInScope('fh', fn_delete_filter_from_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['filter']->value['filter_id'],$_smarty_tpl->tpl_vars['v']->value['variant_id']));
if ($_smarty_tpl->tpl_vars['fh']->value) {
$_smarty_tpl->_assignInScope('reset_url', fn_link_attach($_smarty_tpl->tpl_vars['filter_base_url']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['fh']->value)));
}?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><span id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</span><i class="ty-icon-cancel-circle"></i></a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['filter']->value['selected_range']) {
$_smarty_tpl->_assignInScope('fh', fn_delete_filter_from_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['filter']->value['filter_id']));
if ($_smarty_tpl->tpl_vars['fh']->value) {
$_smarty_tpl->_assignInScope('reset_url', fn_link_attach($_smarty_tpl->tpl_vars['filter_base_url']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['fh']->value)));
}
$_smarty_tpl->_assignInScope('left', (($tmp = $_smarty_tpl->tpl_vars['filter']->value['left'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['min']->value ?? null : $tmp)*(($tmp = $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp));
$_smarty_tpl->_assignInScope('right', (($tmp = $_smarty_tpl->tpl_vars['filter']->value['right'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['max']->value ?? null : $tmp)*(($tmp = $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp));?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type'] == 'P') {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['left']->value), 0, true);
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'UTF-8');
}?> - <?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type'] == 'P') {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['right']->value), 0, true);
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'UTF-8');
}?><i class="ty-icon-cancel-circle"></i></a><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['abt__selected']->value) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ut2-selected-filter-item reset cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-scroll=".main-content-grid" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-cw"></i> <?php echo $_smarty_tpl->__("reset");?>
</a><?php }?><!--selected_filters_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/for_category/abt__ut2_selected_filters.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_filters/for_category/abt__ut2_selected_filters.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "abt__selected_filters", null, null);
$_smarty_tpl->_assignInScope('ajax_div_ids', "product_filters_*,selected_filters_*,products_search_*,category_products_*,currencies_*,languages_*,product_features_*");
$_smarty_tpl->_assignInScope('curl', $_smarty_tpl->tpl_vars['config']->value['current_url']);
$_smarty_tpl->_assignInScope('filter_base_url', fn_query_remove($_smarty_tpl->tpl_vars['curl']->value,"result_ids","full_render","filter_id","view_all","req_range_id","features_hash","subcats","page","total"));?><div class="ut2-selected-product-filters cm-product-filters" id="selected_filters_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_assignInScope('reset_url', $_smarty_tpl->tpl_vars['filter_base_url']->value);
$_smarty_tpl->_assignInScope('abt__selected', false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants'] || $_smarty_tpl->tpl_vars['filter']->value['selected_range']) {
$_smarty_tpl->_assignInScope('abt__selected', true);
if ($_smarty_tpl->tpl_vars['filter']->value['field_type'] === "Z") {
$_smarty_tpl->_assignInScope('location', $_smarty_tpl->tpl_vars['filter']->value['location']);
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['location']->value->toArray());?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("abt__ut2.filter.vendor_location_variant",array("[range]"=>$_smarty_tpl->tpl_vars['value']->value['radius'],"[suffix]"=>$_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['distance_unit']));?>
<i class="ty-icon-cancel-circle"></i></a><?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['field_type'] === "R") {?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['filter']->value['filter'];?>
<i class="ty-icon-cancel-circle"></i></a><?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['selected_variants']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['selected_variants'], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
$_smarty_tpl->_assignInScope('fh', fn_delete_filter_from_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['filter']->value['filter_id'],$_smarty_tpl->tpl_vars['v']->value['variant_id']));
if ($_smarty_tpl->tpl_vars['fh']->value) {
$_smarty_tpl->_assignInScope('reset_url', fn_link_attach($_smarty_tpl->tpl_vars['filter_base_url']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['fh']->value)));
}?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><span id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</span><i class="ty-icon-cancel-circle"></i></a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['filter']->value['selected_range']) {
$_smarty_tpl->_assignInScope('fh', fn_delete_filter_from_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['filter']->value['filter_id']));
if ($_smarty_tpl->tpl_vars['fh']->value) {
$_smarty_tpl->_assignInScope('reset_url', fn_link_attach($_smarty_tpl->tpl_vars['filter_base_url']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['fh']->value)));
}
$_smarty_tpl->_assignInScope('left', (($tmp = $_smarty_tpl->tpl_vars['filter']->value['left'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['min']->value ?? null : $tmp)*(($tmp = $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp));
$_smarty_tpl->_assignInScope('right', (($tmp = $_smarty_tpl->tpl_vars['filter']->value['right'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['max']->value ?? null : $tmp)*(($tmp = $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp));?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type'] == 'P') {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['left']->value), 0, true);
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left']->value, ENT_QUOTES, 'UTF-8');
}?> - <?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type'] == 'P') {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['right']->value), 0, true);
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['right']->value, ENT_QUOTES, 'UTF-8');
}?><i class="ty-icon-cancel-circle"></i></a><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['abt__selected']->value) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ut2-selected-filter-item reset cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-scroll=".main-content-grid" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-cw"></i> <?php echo $_smarty_tpl->__("reset");?>
</a><?php }?><!--selected_filters_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
}
