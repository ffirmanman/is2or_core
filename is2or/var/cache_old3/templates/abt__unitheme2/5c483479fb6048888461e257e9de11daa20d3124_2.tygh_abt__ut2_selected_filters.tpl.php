<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:24
  from 'tygh:blocks/product_filters/for_category/abt__ut2_selected_filters.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb210b9aa12_65415250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c483479fb6048888461e257e9de11daa20d3124' => 
    array (
      0 => 'blocks/product_filters/for_category/abt__ut2_selected_filters.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 4,
  ),
))) {
function content_69afb210b9aa12_65415250 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/product_filters/for_category';
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.filter.vendor_location_variant','reset','abt__ut2.filter.vendor_location_variant','reset'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('items')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "abt__selected_filters", null, null);
$_smarty_tpl->assign('ajax_div_ids', "product_filters_*,selected_filters_*,products_search_*,category_products_*,currencies_*,languages_*,product_features_*", false, NULL);
$_smarty_tpl->assign('curl', $_smarty_tpl->getValue('config')['current_url'], false, NULL);
$_smarty_tpl->assign('filter_base_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('curl'),"result_ids","full_render","filter_id","view_all","req_range_id","features_hash","subcats","page","total"), false, NULL);?><div class="ut2-selected-product-filters cm-product-filters" id="selected_filters_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getValue('filter_base_url'), false, NULL);
$_smarty_tpl->assign('abt__selected', false, false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'filter');
$foreach40DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('filter')->value) {
$foreach40DoElse = false;
if ($_smarty_tpl->getValue('filter')['selected_variants'] || $_smarty_tpl->getValue('filter')['selected_range']) {
$_smarty_tpl->assign('abt__selected', true, false, NULL);
if ($_smarty_tpl->getValue('filter')['field_type'] === "Z") {
$_smarty_tpl->assign('location', $_smarty_tpl->getValue('filter')['location'], false, NULL);
$_smarty_tpl->assign('value', $_smarty_tpl->getValue('location')->toArray(), false, NULL);?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.filter.vendor_location_variant", array("[range]"=>$_smarty_tpl->getValue('value')['radius'],"[suffix]"=>$_smarty_tpl->getValue('addons')['vendor_locations']['distance_unit']), $_smarty_tpl->getSmarty()->getLanguage());?>
<i class="ty-icon-cancel-circle"></i></a><?php } elseif ($_smarty_tpl->getValue('filter')['field_type'] === "R") {?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('filter')['filter'];?>
<i class="ty-icon-cancel-circle"></i></a><?php } elseif ($_smarty_tpl->getValue('filter')['selected_variants']) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('filter')['selected_variants'], 'v');
$foreach41DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v')->value) {
$foreach41DoElse = false;
$_smarty_tpl->assign('fh', $_smarty_tpl->getSmarty()->getModifierCallback('fn_delete_filter_from_hash')($_REQUEST['features_hash'],$_smarty_tpl->getValue('filter')['filter_id'],$_smarty_tpl->getValue('v')['variant_id']), false, NULL);
if ($_smarty_tpl->getValue('fh')) {
$_smarty_tpl->assign('reset_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('filter_base_url'),"features_hash=".((string)$_smarty_tpl->getValue('fh'))), false, NULL);
}?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"><span id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v')['variant']), ENT_QUOTES, 'UTF-8');?>
</span><i class="ty-icon-cancel-circle"></i></a><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->getValue('filter')['selected_range']) {
$_smarty_tpl->assign('fh', $_smarty_tpl->getSmarty()->getModifierCallback('fn_delete_filter_from_hash')($_REQUEST['features_hash'],$_smarty_tpl->getValue('filter')['filter_id']), false, NULL);
if ($_smarty_tpl->getValue('fh')) {
$_smarty_tpl->assign('reset_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('filter_base_url'),"features_hash=".((string)$_smarty_tpl->getValue('fh'))), false, NULL);
}
$_smarty_tpl->assign('left', (($tmp = $_smarty_tpl->getValue('filter')['left'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('min') ?? null : $tmp)*(($tmp = $_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')]['coefficient'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('right', (($tmp = $_smarty_tpl->getValue('filter')['right'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('max') ?? null : $tmp)*(($tmp = $_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')]['coefficient'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp), false, NULL);?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('filter')['field_type'] == 'P') {
$_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('left')), (int) 0, $_smarty_current_dir);
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('left')), ENT_QUOTES, 'UTF-8');
}?> - <?php if ($_smarty_tpl->getValue('filter')['field_type'] == 'P') {
$_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('right')), (int) 0, $_smarty_current_dir);
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('right')), ENT_QUOTES, 'UTF-8');
}?><i class="ty-icon-cancel-circle"></i></a><?php }
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getValue('abt__selected')) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('filter_base_url'))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ut2-selected-filter-item reset cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-scroll=".main-content-grid" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-cw"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reset", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }?><!--selected_filters_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/for_category/abt__ut2_selected_filters.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/product_filters/for_category/abt__ut2_selected_filters.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('items')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "abt__selected_filters", null, null);
$_smarty_tpl->assign('ajax_div_ids', "product_filters_*,selected_filters_*,products_search_*,category_products_*,currencies_*,languages_*,product_features_*", false, NULL);
$_smarty_tpl->assign('curl', $_smarty_tpl->getValue('config')['current_url'], false, NULL);
$_smarty_tpl->assign('filter_base_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('curl'),"result_ids","full_render","filter_id","view_all","req_range_id","features_hash","subcats","page","total"), false, NULL);?><div class="ut2-selected-product-filters cm-product-filters" id="selected_filters_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getValue('filter_base_url'), false, NULL);
$_smarty_tpl->assign('abt__selected', false, false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'filter');
$foreach42DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('filter')->value) {
$foreach42DoElse = false;
if ($_smarty_tpl->getValue('filter')['selected_variants'] || $_smarty_tpl->getValue('filter')['selected_range']) {
$_smarty_tpl->assign('abt__selected', true, false, NULL);
if ($_smarty_tpl->getValue('filter')['field_type'] === "Z") {
$_smarty_tpl->assign('location', $_smarty_tpl->getValue('filter')['location'], false, NULL);
$_smarty_tpl->assign('value', $_smarty_tpl->getValue('location')->toArray(), false, NULL);?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.filter.vendor_location_variant", array("[range]"=>$_smarty_tpl->getValue('value')['radius'],"[suffix]"=>$_smarty_tpl->getValue('addons')['vendor_locations']['distance_unit']), $_smarty_tpl->getSmarty()->getLanguage());?>
<i class="ty-icon-cancel-circle"></i></a><?php } elseif ($_smarty_tpl->getValue('filter')['field_type'] === "R") {?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('filter')['filter'];?>
<i class="ty-icon-cancel-circle"></i></a><?php } elseif ($_smarty_tpl->getValue('filter')['selected_variants']) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('filter')['selected_variants'], 'v');
$foreach43DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v')->value) {
$foreach43DoElse = false;
$_smarty_tpl->assign('fh', $_smarty_tpl->getSmarty()->getModifierCallback('fn_delete_filter_from_hash')($_REQUEST['features_hash'],$_smarty_tpl->getValue('filter')['filter_id'],$_smarty_tpl->getValue('v')['variant_id']), false, NULL);
if ($_smarty_tpl->getValue('fh')) {
$_smarty_tpl->assign('reset_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('filter_base_url'),"features_hash=".((string)$_smarty_tpl->getValue('fh'))), false, NULL);
}?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"><span id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v')['variant']), ENT_QUOTES, 'UTF-8');?>
</span><i class="ty-icon-cancel-circle"></i></a><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->getValue('filter')['selected_range']) {
$_smarty_tpl->assign('fh', $_smarty_tpl->getSmarty()->getModifierCallback('fn_delete_filter_from_hash')($_REQUEST['features_hash'],$_smarty_tpl->getValue('filter')['filter_id']), false, NULL);
if ($_smarty_tpl->getValue('fh')) {
$_smarty_tpl->assign('reset_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('filter_base_url'),"features_hash=".((string)$_smarty_tpl->getValue('fh'))), false, NULL);
}
$_smarty_tpl->assign('left', (($tmp = $_smarty_tpl->getValue('filter')['left'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('min') ?? null : $tmp)*(($tmp = $_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')]['coefficient'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('right', (($tmp = $_smarty_tpl->getValue('filter')['right'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('max') ?? null : $tmp)*(($tmp = $_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')]['coefficient'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp), false, NULL);?><a class="ut2-selected-filter-item cm-ajax cm-ajax-full-render cm-history" id="sw_elm_selected_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('filter')['field_type'] == 'P') {
$_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('left')), (int) 0, $_smarty_current_dir);
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('left')), ENT_QUOTES, 'UTF-8');
}?> - <?php if ($_smarty_tpl->getValue('filter')['field_type'] == 'P') {
$_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('right')), (int) 0, $_smarty_current_dir);
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('right')), ENT_QUOTES, 'UTF-8');
}?><i class="ty-icon-cancel-circle"></i></a><?php }
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getValue('abt__selected')) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('filter_base_url'))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ut2-selected-filter-item reset cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-scroll=".main-content-grid" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-icon-cw"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reset", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }?><!--selected_filters_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
}
