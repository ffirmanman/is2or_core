<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:46
  from 'tygh:blocks/product_filters/original.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a062583d6_92549060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9922dd308ffb3cefd5e5b2cce25672c9f09c323' => 
    array (
      0 => 'blocks/product_filters/original.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/product_filters/components/product_filter_datepicker.tpl' => 2,
    'tygh:blocks/product_filters/components/product_filter_slider.tpl' => 2,
    'tygh:blocks/product_filters/components/product_filter_variants.tpl' => 2,
  ),
))) {
function content_69fb4a062583d6_92549060 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/product_filters';
\Tygh\Languages\Helper::preloadLangVars(array('reset','reset','reset','reset'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/product_filters.js"), $_smarty_tpl);?>


<?php if ($_smarty_tpl->getValue('block')['type'] == "product_filters") {?>
    <?php $_smarty_tpl->assign('ajax_div_ids', "product_filters_*,selected_filters_*,products_search_*,category_products_*,currencies_*,languages_*,product_features_*", false, NULL);?>
    <?php $_smarty_tpl->assign('curl', $_smarty_tpl->getValue('config')['current_url'], false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('curl', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.search"), false, NULL);?>
    <?php $_smarty_tpl->assign('ajax_div_ids', '', false, NULL);
}?>

<?php $_smarty_tpl->assign('filter_base_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('curl'),"result_ids","full_render","filter_id","view_all","req_range_id","features_hash","subcats","page","total"), false, NULL);
$_smarty_tpl->assign('is_selected_filters', $_REQUEST['features_hash'], false, NULL);
$_smarty_tpl->assign('show_not_found_notification', (($tmp = $_smarty_tpl->getValue('show_not_found_notification') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);?>

<div class="cm-product-filters"
    data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-base-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('filter_base_url'))), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-tooltip-class = "ty-product-filters__tooltip"
    data-ca-tooltip-right-class = "ty-product-filters__tooltip--right"
    data-ca-tooltip-mobile-class = "ty-tooltip--mobile"
    data-ca-tooltip-layout-selector = "[data-ca-tooltip-layout='true']"
    data-ce-tooltip-events-tooltip = "mouseenter"
    id="product_filters_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">

<div class="ty-product-filters__wrapper" data-ca-product-filters="wrapper" <?php if ($_smarty_tpl->getValue('is_selected_filters')) {?>data-ca-product-filters-status="active"<?php }?>>

<?php if ($_smarty_tpl->getValue('items')) {?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'filter', false, NULL, 'filters', array (
));
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('filter')->value) {
$foreach6DoElse = false;
?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->assign('filter_uid', ((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('filter')['filter_id']), false, NULL);?>
    <?php $_smarty_tpl->assign('cookie_name_show_filter', "content_".((string)$_smarty_tpl->getValue('filter_uid')), false, NULL);?>
    <?php if ($_smarty_tpl->getValue('filter')['display'] == "N") {?>
                <?php $_smarty_tpl->assign('collapse', !$_COOKIE[$_smarty_tpl->getValue('cookie_name_show_filter')], false, NULL);?>
    <?php } else { ?>
                <?php $_smarty_tpl->assign('collapse', $_smarty_tpl->getSmarty()->getModifierCallback('boolval')($_COOKIE[$_smarty_tpl->getValue('cookie_name_show_filter')]), false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('reset_url', '', false, NULL);?>
    <?php if ($_smarty_tpl->getValue('filter')['selected_variants'] || $_smarty_tpl->getValue('filter')['selected_range']) {?>
        <?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getValue('filter_base_url'), false, NULL);?>
        <?php $_smarty_tpl->assign('fh', $_smarty_tpl->getSmarty()->getModifierCallback('fn_delete_filter_from_hash')($_REQUEST['features_hash'],$_smarty_tpl->getValue('filter')['filter_id']), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('fh')) {?>
            <?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('filter_base_url'),"features_hash=".((string)$_smarty_tpl->getValue('fh'))),"show_not_found_notification=".((string)$_smarty_tpl->getValue('show_not_found_notification'))), false, NULL);?>
        <?php }?>
    <?php }?>
    
    <?php $_smarty_tpl->assign('is_filter_slider', $_smarty_tpl->getValue('filter')['slider'], false, NULL);?>

    <div class="ty-product-filters__block<?php if (!$_smarty_tpl->getValue('is_filter_slider')) {?> ty-product-filters__block--variants<?php }?>">
        <div id="sw_content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__switch cm-combination-filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->getValue('collapse')) {?> open<?php }?> cm-save-state <?php if ($_smarty_tpl->getValue('filter')['display'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>cm-ss-reverse<?php }?>">
            <bdi class="ty-product-filters__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('filter')['selected_variants']) {?> (<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('filter')['selected_variants'])), ENT_QUOTES, 'UTF-8');?>
)<?php }
if ($_smarty_tpl->getValue('reset_url')) {?><a class="cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
" data-ca-scroll=".main-content-grid"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-reset-filters"), $_smarty_tpl);?>
</a><?php }?></bdi>
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-product-filters__switch-down"), $_smarty_tpl);?>

            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-product-filters__switch-right"), $_smarty_tpl);?>

        </div>
		<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants_element"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('is_filter_slider')) {?>
            <?php if ($_smarty_tpl->getValue('filter')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::DATE")) {?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_datepicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
        <?php } else { ?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_variants.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter'),'collapse'=>$_smarty_tpl->getValue('collapse')), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants_element"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?>
</div>
<?php if ($_smarty_tpl->getValue('ajax_div_ids')) {?>
<div class="ty-product-filters__tools clearfix <?php if (!$_smarty_tpl->getValue('is_selected_filters')) {?>hidden<?php }?>" data-ca-product-filters="tools">

    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('filter_base_url'))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-product-filters__reset-button cm-external-click cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-scroll=".main-content-grid" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-product-filters__reset-icon ty-icon-cw"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reset", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
        <?php } else { ?>
        <div class="ut2-fl__buttons-container">
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('filter_base_url'))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-product-filters__reset-button cm-external-click cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-scroll=".main-content-grid" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-product-filters__reset-icon ty-icon-cw"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reset", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            <a href="javascript:void(0);" rel="nofollow" data-ca-scroll=".main-content-grid" class="cm-scroll cm-external-click ty-btn ty-btn__primary ut2-products_found_message" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('show', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 (<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['total_items']), ENT_QUOTES, 'UTF-8');?>
)</a>
        </div>
    <?php }?>
</div>
<?php }?>
<!--product_filters_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div>

<div data-ca-tooltip-layout="true" class="hidden">
    <button type="button" data-ca-scroll=".main-content-grid" class="cm-scroll ty-tooltip--link ty-tooltip--filter"><span class="tooltip-arrow"></span></button>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/original.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/product_filters/original.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/product_filters.js"), $_smarty_tpl);?>


<?php if ($_smarty_tpl->getValue('block')['type'] == "product_filters") {?>
    <?php $_smarty_tpl->assign('ajax_div_ids', "product_filters_*,selected_filters_*,products_search_*,category_products_*,currencies_*,languages_*,product_features_*", false, NULL);?>
    <?php $_smarty_tpl->assign('curl', $_smarty_tpl->getValue('config')['current_url'], false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('curl', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.search"), false, NULL);?>
    <?php $_smarty_tpl->assign('ajax_div_ids', '', false, NULL);
}?>

<?php $_smarty_tpl->assign('filter_base_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('curl'),"result_ids","full_render","filter_id","view_all","req_range_id","features_hash","subcats","page","total"), false, NULL);
$_smarty_tpl->assign('is_selected_filters', $_REQUEST['features_hash'], false, NULL);
$_smarty_tpl->assign('show_not_found_notification', (($tmp = $_smarty_tpl->getValue('show_not_found_notification') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);?>

<div class="cm-product-filters"
    data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-base-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('filter_base_url'))), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-tooltip-class = "ty-product-filters__tooltip"
    data-ca-tooltip-right-class = "ty-product-filters__tooltip--right"
    data-ca-tooltip-mobile-class = "ty-tooltip--mobile"
    data-ca-tooltip-layout-selector = "[data-ca-tooltip-layout='true']"
    data-ce-tooltip-events-tooltip = "mouseenter"
    id="product_filters_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
">

<div class="ty-product-filters__wrapper" data-ca-product-filters="wrapper" <?php if ($_smarty_tpl->getValue('is_selected_filters')) {?>data-ca-product-filters-status="active"<?php }?>>

<?php if ($_smarty_tpl->getValue('items')) {?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'filter', false, NULL, 'filters', array (
));
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('filter')->value) {
$foreach7DoElse = false;
?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->assign('filter_uid', ((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('filter')['filter_id']), false, NULL);?>
    <?php $_smarty_tpl->assign('cookie_name_show_filter', "content_".((string)$_smarty_tpl->getValue('filter_uid')), false, NULL);?>
    <?php if ($_smarty_tpl->getValue('filter')['display'] == "N") {?>
                <?php $_smarty_tpl->assign('collapse', !$_COOKIE[$_smarty_tpl->getValue('cookie_name_show_filter')], false, NULL);?>
    <?php } else { ?>
                <?php $_smarty_tpl->assign('collapse', $_smarty_tpl->getSmarty()->getModifierCallback('boolval')($_COOKIE[$_smarty_tpl->getValue('cookie_name_show_filter')]), false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('reset_url', '', false, NULL);?>
    <?php if ($_smarty_tpl->getValue('filter')['selected_variants'] || $_smarty_tpl->getValue('filter')['selected_range']) {?>
        <?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getValue('filter_base_url'), false, NULL);?>
        <?php $_smarty_tpl->assign('fh', $_smarty_tpl->getSmarty()->getModifierCallback('fn_delete_filter_from_hash')($_REQUEST['features_hash'],$_smarty_tpl->getValue('filter')['filter_id']), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('fh')) {?>
            <?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('filter_base_url'),"features_hash=".((string)$_smarty_tpl->getValue('fh'))),"show_not_found_notification=".((string)$_smarty_tpl->getValue('show_not_found_notification'))), false, NULL);?>
        <?php }?>
    <?php }?>
    
    <?php $_smarty_tpl->assign('is_filter_slider', $_smarty_tpl->getValue('filter')['slider'], false, NULL);?>

    <div class="ty-product-filters__block<?php if (!$_smarty_tpl->getValue('is_filter_slider')) {?> ty-product-filters__block--variants<?php }?>">
        <div id="sw_content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__switch cm-combination-filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->getValue('collapse')) {?> open<?php }?> cm-save-state <?php if ($_smarty_tpl->getValue('filter')['display'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>cm-ss-reverse<?php }?>">
            <bdi class="ty-product-filters__title"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('filter')['selected_variants']) {?> (<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('filter')['selected_variants'])), ENT_QUOTES, 'UTF-8');?>
)<?php }
if ($_smarty_tpl->getValue('reset_url')) {?><a class="cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
" data-ca-scroll=".main-content-grid"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-reset-filters"), $_smarty_tpl);?>
</a><?php }?></bdi>
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-product-filters__switch-down"), $_smarty_tpl);?>

            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-product-filters__switch-right"), $_smarty_tpl);?>

        </div>
		<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants_element"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('is_filter_slider')) {?>
            <?php if ($_smarty_tpl->getValue('filter')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::DATE")) {?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_datepicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
        <?php } else { ?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_variants.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter'),'collapse'=>$_smarty_tpl->getValue('collapse')), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants_element"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?>
</div>
<?php if ($_smarty_tpl->getValue('ajax_div_ids')) {?>
<div class="ty-product-filters__tools clearfix <?php if (!$_smarty_tpl->getValue('is_selected_filters')) {?>hidden<?php }?>" data-ca-product-filters="tools">

    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('filter_base_url'))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-product-filters__reset-button cm-external-click cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-scroll=".main-content-grid" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-product-filters__reset-icon ty-icon-cw"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reset", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
        <?php } else { ?>
        <div class="ut2-fl__buttons-container">
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('filter_base_url'))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-product-filters__reset-button cm-external-click cm-ajax cm-ajax-full-render cm-history" data-ca-event="ce.filtersinit" data-ca-scroll=".main-content-grid" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-product-filters__reset-icon ty-icon-cw"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reset", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            <a href="javascript:void(0);" rel="nofollow" data-ca-scroll=".main-content-grid" class="cm-scroll cm-external-click ty-btn ty-btn__primary ut2-products_found_message" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('show', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 (<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['total_items']), ENT_QUOTES, 'UTF-8');?>
)</a>
        </div>
    <?php }?>
</div>
<?php }?>
<!--product_filters_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div>

<div data-ca-tooltip-layout="true" class="hidden">
    <button type="button" data-ca-scroll=".main-content-grid" class="cm-scroll ty-tooltip--link ty-tooltip--filter"><span class="tooltip-arrow"></span></button>
</div><?php }
}
}
