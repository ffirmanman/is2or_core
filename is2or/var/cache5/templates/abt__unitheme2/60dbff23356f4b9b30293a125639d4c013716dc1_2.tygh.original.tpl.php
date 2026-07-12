<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:22:04
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_filters/original.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc7c0781a4_11263214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60dbff23356f4b9b30293a125639d4c013716dc1' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_filters/original.tpl',
      1 => 1736836654,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/product_filters/components/product_filter_datepicker.tpl' => 2,
    'tygh:blocks/product_filters/components/product_filter_slider.tpl' => 2,
    'tygh:blocks/product_filters/components/product_filter_variants.tpl' => 2,
  ),
),false)) {
function content_6835bc7c0781a4_11263214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),6=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('reset','reset','reset','reset'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/tygh/product_filters.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['block']->value['type'] == "product_filters") {?>
    <?php $_smarty_tpl->_assignInScope('ajax_div_ids', "product_filters_*,selected_filters_*,products_search_*,category_products_*,currencies_*,languages_*,product_features_*");?>
    <?php $_smarty_tpl->_assignInScope('curl', $_smarty_tpl->tpl_vars['config']->value['current_url']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('curl', fn_url("products.search"));?>
    <?php $_smarty_tpl->_assignInScope('ajax_div_ids', '');
}?>

<?php $_smarty_tpl->_assignInScope('filter_base_url', fn_query_remove($_smarty_tpl->tpl_vars['curl']->value,"result_ids","full_render","filter_id","view_all","req_range_id","features_hash","subcats","page","total"));
$_smarty_tpl->_assignInScope('is_selected_filters', $_REQUEST['features_hash']);
$_smarty_tpl->_assignInScope('show_not_found_notification', (($tmp = $_smarty_tpl->tpl_vars['show_not_found_notification']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>

<div class="cm-product-filters"
    data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-base-url="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-tooltip-class = "ty-product-filters__tooltip"
    data-ca-tooltip-right-class = "ty-product-filters__tooltip--right"
    data-ca-tooltip-mobile-class = "ty-tooltip--mobile"
    data-ca-tooltip-layout-selector = "[data-ca-tooltip-layout='true']"
    data-ce-tooltip-events-tooltip = "mouseenter"
    id="product_filters_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">

<div class="ty-product-filters__wrapper" data-ca-product-filters="wrapper" <?php if ($_smarty_tpl->tpl_vars['is_selected_filters']->value) {?>data-ca-product-filters-status="active"<?php }?>>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'filter', false, NULL, 'filters', array (
));
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:product_filters_variants"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:product_filters_variants"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_assignInScope('filter_uid', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id']));?>
    <?php $_smarty_tpl->_assignInScope('cookie_name_show_filter', "content_".((string)$_smarty_tpl->tpl_vars['filter_uid']->value));?>
    <?php if ($_smarty_tpl->tpl_vars['filter']->value['display'] == "N") {?>
                <?php $_smarty_tpl->_assignInScope('collapse', !$_COOKIE[$_smarty_tpl->tpl_vars['cookie_name_show_filter']->value]);?>
    <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('collapse', boolval($_COOKIE[$_smarty_tpl->tpl_vars['cookie_name_show_filter']->value]));?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('reset_url', '');?>
    <?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants'] || $_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>
        <?php $_smarty_tpl->_assignInScope('reset_url', $_smarty_tpl->tpl_vars['filter_base_url']->value);?>
        <?php $_smarty_tpl->_assignInScope('fh', fn_delete_filter_from_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['filter']->value['filter_id']));?>
        <?php if ($_smarty_tpl->tpl_vars['fh']->value) {?>
            <?php $_smarty_tpl->_assignInScope('reset_url', fn_link_attach(fn_link_attach($_smarty_tpl->tpl_vars['filter_base_url']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['fh']->value)),"show_not_found_notification=".((string)$_smarty_tpl->tpl_vars['show_not_found_notification']->value)));?>
        <?php }?>
    <?php }?>
    
    <?php $_smarty_tpl->_assignInScope('is_filter_slider', $_smarty_tpl->tpl_vars['filter']->value['slider']);?>

    <div class="ty-product-filters__block<?php if (!$_smarty_tpl->tpl_vars['is_filter_slider']->value) {?> ty-product-filters__block--variants<?php }?>">
        <div id="sw_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__switch cm-combination-filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['collapse']->value) {?> open<?php }?> cm-save-state <?php if ($_smarty_tpl->tpl_vars['filter']->value['display'] == smarty_modifier_enum("YesNo::YES")) {?>cm-ss-reverse<?php }?>">
            <bdi class="ty-product-filters__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants']) {?> (<?php echo htmlspecialchars((string) smarty_modifier_sizeof($_smarty_tpl->tpl_vars['filter']->value['selected_variants']), ENT_QUOTES, 'UTF-8');?>
)<?php }
if ($_smarty_tpl->tpl_vars['reset_url']->value) {?><a class="cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-scroll=".main-content-grid"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-reset-filters"),$_smarty_tpl);?>
</a><?php }?></bdi>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-product-filters__switch-down"),$_smarty_tpl);?>

            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-product-filters__switch-right"),$_smarty_tpl);?>

        </div>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:product_filters_variants_element"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:product_filters_variants_element"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['is_filter_slider']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_filters/components/product_filter_datepicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0, true);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_filters/components/product_filter_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0, true);
?>
            <?php }?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_filters/components/product_filter_variants.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value,'collapse'=>$_smarty_tpl->tpl_vars['collapse']->value), 0, true);
?>
        <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:product_filters_variants_element"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:product_filters_variants"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</div>
<?php if ($_smarty_tpl->tpl_vars['ajax_div_ids']->value) {?>
<div class="ty-product-filters__tools clearfix <?php if (!$_smarty_tpl->tpl_vars['is_selected_filters']->value) {?>hidden<?php }?>" data-ca-product-filters="tools">

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
        <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-product-filters__reset-button cm-external-click cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-scroll=".main-content-grid" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"><i class="ty-product-filters__reset-icon ty-icon-cw"></i> <?php echo $_smarty_tpl->__("reset");?>
</a>
        <?php } else { ?>
        <div class="ut2-fl__buttons-container">
            <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-product-filters__reset-button cm-external-click cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-scroll=".main-content-grid" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"><i class="ty-product-filters__reset-icon ty-icon-cw"></i> <?php echo $_smarty_tpl->__("reset");?>
</a>
            <a href="javascript:void(0);" rel="nofollow" data-ca-scroll=".main-content-grid" class="cm-scroll cm-external-click ty-btn ty-btn__primary ut2-products_found_message" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__('show');?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['total_items'], ENT_QUOTES, 'UTF-8');?>
)</a>
        </div>
    <?php }?>
</div>
<?php }?>
<!--product_filters_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<div data-ca-tooltip-layout="true" class="hidden">
    <button type="button" data-ca-scroll=".main-content-grid" class="cm-scroll ty-tooltip--link ty-tooltip--filter"><span class="tooltip-arrow"></span></button>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/original.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_filters/original.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/product_filters.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['block']->value['type'] == "product_filters") {?>
    <?php $_smarty_tpl->_assignInScope('ajax_div_ids', "product_filters_*,selected_filters_*,products_search_*,category_products_*,currencies_*,languages_*,product_features_*");?>
    <?php $_smarty_tpl->_assignInScope('curl', $_smarty_tpl->tpl_vars['config']->value['current_url']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('curl', fn_url("products.search"));?>
    <?php $_smarty_tpl->_assignInScope('ajax_div_ids', '');
}?>

<?php $_smarty_tpl->_assignInScope('filter_base_url', fn_query_remove($_smarty_tpl->tpl_vars['curl']->value,"result_ids","full_render","filter_id","view_all","req_range_id","features_hash","subcats","page","total"));
$_smarty_tpl->_assignInScope('is_selected_filters', $_REQUEST['features_hash']);
$_smarty_tpl->_assignInScope('show_not_found_notification', (($tmp = $_smarty_tpl->tpl_vars['show_not_found_notification']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>

<div class="cm-product-filters"
    data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-base-url="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-tooltip-class = "ty-product-filters__tooltip"
    data-ca-tooltip-right-class = "ty-product-filters__tooltip--right"
    data-ca-tooltip-mobile-class = "ty-tooltip--mobile"
    data-ca-tooltip-layout-selector = "[data-ca-tooltip-layout='true']"
    data-ce-tooltip-events-tooltip = "mouseenter"
    id="product_filters_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">

<div class="ty-product-filters__wrapper" data-ca-product-filters="wrapper" <?php if ($_smarty_tpl->tpl_vars['is_selected_filters']->value) {?>data-ca-product-filters-status="active"<?php }?>>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'filter', false, NULL, 'filters', array (
));
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:product_filters_variants"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:product_filters_variants"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_assignInScope('filter_uid', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id']));?>
    <?php $_smarty_tpl->_assignInScope('cookie_name_show_filter', "content_".((string)$_smarty_tpl->tpl_vars['filter_uid']->value));?>
    <?php if ($_smarty_tpl->tpl_vars['filter']->value['display'] == "N") {?>
                <?php $_smarty_tpl->_assignInScope('collapse', !$_COOKIE[$_smarty_tpl->tpl_vars['cookie_name_show_filter']->value]);?>
    <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('collapse', boolval($_COOKIE[$_smarty_tpl->tpl_vars['cookie_name_show_filter']->value]));?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('reset_url', '');?>
    <?php if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants'] || $_smarty_tpl->tpl_vars['filter']->value['selected_range']) {?>
        <?php $_smarty_tpl->_assignInScope('reset_url', $_smarty_tpl->tpl_vars['filter_base_url']->value);?>
        <?php $_smarty_tpl->_assignInScope('fh', fn_delete_filter_from_hash($_REQUEST['features_hash'],$_smarty_tpl->tpl_vars['filter']->value['filter_id']));?>
        <?php if ($_smarty_tpl->tpl_vars['fh']->value) {?>
            <?php $_smarty_tpl->_assignInScope('reset_url', fn_link_attach(fn_link_attach($_smarty_tpl->tpl_vars['filter_base_url']->value,"features_hash=".((string)$_smarty_tpl->tpl_vars['fh']->value)),"show_not_found_notification=".((string)$_smarty_tpl->tpl_vars['show_not_found_notification']->value)));?>
        <?php }?>
    <?php }?>
    
    <?php $_smarty_tpl->_assignInScope('is_filter_slider', $_smarty_tpl->tpl_vars['filter']->value['slider']);?>

    <div class="ty-product-filters__block<?php if (!$_smarty_tpl->tpl_vars['is_filter_slider']->value) {?> ty-product-filters__block--variants<?php }?>">
        <div id="sw_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__switch cm-combination-filter_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['collapse']->value) {?> open<?php }?> cm-save-state <?php if ($_smarty_tpl->tpl_vars['filter']->value['display'] == smarty_modifier_enum("YesNo::YES")) {?>cm-ss-reverse<?php }?>">
            <bdi class="ty-product-filters__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['filter']->value['selected_variants']) {?> (<?php echo htmlspecialchars((string) smarty_modifier_sizeof($_smarty_tpl->tpl_vars['filter']->value['selected_variants']), ENT_QUOTES, 'UTF-8');?>
)<?php }
if ($_smarty_tpl->tpl_vars['reset_url']->value) {?><a class="cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-scroll=".main-content-grid"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-reset-filters"),$_smarty_tpl);?>
</a><?php }?></bdi>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-product-filters__switch-down"),$_smarty_tpl);?>

            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-product-filters__switch-right"),$_smarty_tpl);?>

        </div>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:product_filters_variants_element"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:product_filters_variants_element"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['is_filter_slider']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_filters/components/product_filter_datepicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0, true);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_filters/components/product_filter_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0, true);
?>
            <?php }?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_filters/components/product_filter_variants.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value,'collapse'=>$_smarty_tpl->tpl_vars['collapse']->value), 0, true);
?>
        <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:product_filters_variants_element"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:product_filters_variants"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</div>
<?php if ($_smarty_tpl->tpl_vars['ajax_div_ids']->value) {?>
<div class="ty-product-filters__tools clearfix <?php if (!$_smarty_tpl->tpl_vars['is_selected_filters']->value) {?>hidden<?php }?>" data-ca-product-filters="tools">

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
        <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-product-filters__reset-button cm-external-click cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-scroll=".main-content-grid" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"><i class="ty-product-filters__reset-icon ty-icon-cw"></i> <?php echo $_smarty_tpl->__("reset");?>
</a>
        <?php } else { ?>
        <div class="ut2-fl__buttons-container">
            <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-product-filters__reset-button cm-external-click cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-scroll=".main-content-grid" data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"><i class="ty-product-filters__reset-icon ty-icon-cw"></i> <?php echo $_smarty_tpl->__("reset");?>
</a>
            <a href="javascript:void(0);" rel="nofollow" data-ca-scroll=".main-content-grid" class="cm-scroll cm-external-click ty-btn ty-btn__primary ut2-products_found_message" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__('show');?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['total_items'], ENT_QUOTES, 'UTF-8');?>
)</a>
        </div>
    <?php }?>
</div>
<?php }?>
<!--product_filters_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>

<div data-ca-tooltip-layout="true" class="hidden">
    <button type="button" data-ca-scroll=".main-content-grid" class="cm-scroll ty-tooltip--link ty-tooltip--filter"><span class="tooltip-arrow"></span></button>
</div><?php }
}
}
