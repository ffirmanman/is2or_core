<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:57
  from 'tygh:blocks/product_filters/horizontal_filters.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6d29afa0_53219835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d7bade477e2f0cc618115d6712546edcec2db3c' => 
    array (
      0 => 'blocks/product_filters/horizontal_filters.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/product_filters/components/product_filter_datepicker.tpl' => 4,
    'tygh:blocks/product_filters/components/product_filter_slider.tpl' => 4,
    'tygh:blocks/product_filters/components/product_filter_variants.tpl' => 4,
    'tygh:common/simple_scroller_init.tpl' => 2,
  ),
))) {
function content_6a133f6d29afa0_53219835 (\Smarty\Template $_smarty_tpl) {
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
$_smarty_tpl->assign('id', "product_filters_".((string)$_smarty_tpl->getValue('block')['block_id']), false, NULL);
$_smarty_tpl->assign('elements_to_scroll', 1, false, NULL);?>

<div class="ty-horizontal-product-filters cm-product-filters cm-horizontal-filters ut2-scroll-container ut2-filters"
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
    <button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button>
    <div class="ty-product-filters__wrapper ut2-scroll-content">
        <?php if ($_smarty_tpl->getValue('items')) {?>

            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'filter', false, NULL, 'filters', array (
));
$foreach48DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('filter')->value) {
$foreach48DoElse = false;
?>

                <?php $_smarty_tpl->assign('filter_uid', ((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('filter')['filter_id']), false, NULL);?>

                <?php $_smarty_tpl->assign('reset_url', '', false, NULL);?>
                <?php if ($_smarty_tpl->getValue('filter')['selected_variants'] || $_smarty_tpl->getValue('filter')['selected_range']) {?>
                    <?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getValue('filter_base_url'), false, NULL);?>
                    <?php $_smarty_tpl->assign('fh', $_smarty_tpl->getSmarty()->getModifierCallback('fn_delete_filter_from_hash')($_REQUEST['features_hash'],$_smarty_tpl->getValue('filter')['filter_id']), false, NULL);?>
                    <?php if ($_smarty_tpl->getValue('fh')) {?>
                        <?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('filter_base_url'),"features_hash=".((string)$_smarty_tpl->getValue('fh'))), false, NULL);?>
                    <?php }?>
                <?php }?>

                <div class="ut2-horizontal-product-filters-dropdown ut2-scroll-item">
                    <div id="sw_elm_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" class="ty-horizontal-product-filters-dropdown__wrapper <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== 'desktop') {?>cm-abt--ut2-toggle-scroll<?php }?> cm-combination <?php if ($_smarty_tpl->getValue('filter')['selected_variants'] || $_smarty_tpl->getValue('filter')['selected_range']) {?>active<?php }
if ($_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('filter')['selected_variants']) > 0) {?> selected<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('filter')['selected_variants']) {?><span><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('filter')['selected_variants'])), ENT_QUOTES, 'UTF-8');?>
</span><?php }?><i class="ty-horizontal-product-filters-dropdown__icon ty-icon-down-micro"></i></div>
                    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== 'mobile') {?>
                        <div id="elm_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box hidden ty-horizontal-product-filters-dropdown__content cm-horizontal-filters-content">
                            <div class="ty-horizontal-product-filters-dropdown__title">
                                <a href="javascript:void(0);" rel="nofollow" class="ut2-btn-close cm-external-click" data-ca-external-click-id="sw_elm_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-baseline-close"></i></a>
                            </div>
                            <div class="ut2-horizontal-product-filters-dropdown__stuffing">
                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants_element"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                <?php if ($_smarty_tpl->getValue('filter')['slider']) {?>
                                    <?php if ($_smarty_tpl->getValue('filter')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::DATE")) {?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_datepicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_variants.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>
                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants_element"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                <div class="ty-product-filters__tools"><?php if ($_smarty_tpl->getValue('reset_url')) {?><a class="ty-btn ty-btn__primary outline ty-product-filters__reset-button  cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-product-filters__reset-icon ty-icon-cw"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reset", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }?></div>
                            </div>
                        </div>
                    <?php }?>
                </div>

            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

            <?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "products_horizontal_filters_content", null, null);?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'filter', false, NULL, 'filters', array (
));
$foreach49DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('filter')->value) {
$foreach49DoElse = false;
?>

                        <?php $_smarty_tpl->assign('filter_uid', ((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('filter')['filter_id']), false, NULL);?>

                        <?php $_smarty_tpl->assign('reset_url', '', false, NULL);?>
                        <?php if ($_smarty_tpl->getValue('filter')['selected_variants'] || $_smarty_tpl->getValue('filter')['selected_range']) {?>
                            <?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getValue('filter_base_url'), false, NULL);?>
                            <?php $_smarty_tpl->assign('fh', $_smarty_tpl->getSmarty()->getModifierCallback('fn_delete_filter_from_hash')($_REQUEST['features_hash'],$_smarty_tpl->getValue('filter')['filter_id']), false, NULL);?>
                            <?php if ($_smarty_tpl->getValue('fh')) {?>
                                <?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('filter_base_url'),"features_hash=".((string)$_smarty_tpl->getValue('fh'))), false, NULL);?>
                            <?php }?>
                        <?php }?>

                        <div id="elm_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box hidden ty-horizontal-product-filters-dropdown__content cm-horizontal-filters-content">
                            <div class="ty-horizontal-product-filters-dropdown__title">
                                <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter']), ENT_QUOTES, 'UTF-8');?>
</span>
                                <a href="javascript:void(0);" rel="nofollow" class="ut2-btn-close cm-external-click" data-ca-external-click-id="sw_elm_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-baseline-close"></i></span></a>
                            </div>
                            <div class="ut2-horizontal-product-filters-dropdown__stuffing">
                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants_element"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                <?php if ($_smarty_tpl->getValue('filter')['slider']) {?>
                                    <?php if ($_smarty_tpl->getValue('filter')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::DATE")) {?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_datepicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_variants.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>
                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants_element"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                <div class="ty-product-filters__tools"><?php if ($_smarty_tpl->getValue('reset_url')) {?><a class="ty-btn ty-btn__primary outline ty-product-filters__reset-button  cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-product-filters__reset-icon ty-icon-cw"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reset", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }?></div>
                            </div>
                        </div>

                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <?php }?>

        <?php }?>
    </div>
    <button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button>

    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'products_horizontal_filters_content');?>

    <?php }?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->getValue('id'),'elements_to_scroll'=>(($tmp = $_smarty_tpl->getValue('elements_to_scroll') ?? null)===null||$tmp==='' ? 2 ?? null : $tmp)), (int) 0, $_smarty_current_dir);
?>

    <!--product_filters_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div>

<div data-ca-tooltip-layout="true" class="hidden">
    <button type="button" data-ca-scroll=".main-content-grid" class="cm-scroll ty-tooltip--link ty-tooltip--filter"><span class="tooltip-arrow"></span></button>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/horizontal_filters.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/product_filters/horizontal_filters.tpl"), $_smarty_tpl);?>
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
$_smarty_tpl->assign('id', "product_filters_".((string)$_smarty_tpl->getValue('block')['block_id']), false, NULL);
$_smarty_tpl->assign('elements_to_scroll', 1, false, NULL);?>

<div class="ty-horizontal-product-filters cm-product-filters cm-horizontal-filters ut2-scroll-container ut2-filters"
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
    <button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button>
    <div class="ty-product-filters__wrapper ut2-scroll-content">
        <?php if ($_smarty_tpl->getValue('items')) {?>

            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'filter', false, NULL, 'filters', array (
));
$foreach50DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('filter')->value) {
$foreach50DoElse = false;
?>

                <?php $_smarty_tpl->assign('filter_uid', ((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('filter')['filter_id']), false, NULL);?>

                <?php $_smarty_tpl->assign('reset_url', '', false, NULL);?>
                <?php if ($_smarty_tpl->getValue('filter')['selected_variants'] || $_smarty_tpl->getValue('filter')['selected_range']) {?>
                    <?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getValue('filter_base_url'), false, NULL);?>
                    <?php $_smarty_tpl->assign('fh', $_smarty_tpl->getSmarty()->getModifierCallback('fn_delete_filter_from_hash')($_REQUEST['features_hash'],$_smarty_tpl->getValue('filter')['filter_id']), false, NULL);?>
                    <?php if ($_smarty_tpl->getValue('fh')) {?>
                        <?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('filter_base_url'),"features_hash=".((string)$_smarty_tpl->getValue('fh'))), false, NULL);?>
                    <?php }?>
                <?php }?>

                <div class="ut2-horizontal-product-filters-dropdown ut2-scroll-item">
                    <div id="sw_elm_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" class="ty-horizontal-product-filters-dropdown__wrapper <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== 'desktop') {?>cm-abt--ut2-toggle-scroll<?php }?> cm-combination <?php if ($_smarty_tpl->getValue('filter')['selected_variants'] || $_smarty_tpl->getValue('filter')['selected_range']) {?>active<?php }
if ($_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('filter')['selected_variants']) > 0) {?> selected<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('filter')['selected_variants']) {?><span><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('filter')['selected_variants'])), ENT_QUOTES, 'UTF-8');?>
</span><?php }?><i class="ty-horizontal-product-filters-dropdown__icon ty-icon-down-micro"></i></div>
                    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== 'mobile') {?>
                        <div id="elm_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box hidden ty-horizontal-product-filters-dropdown__content cm-horizontal-filters-content">
                            <div class="ty-horizontal-product-filters-dropdown__title">
                                <a href="javascript:void(0);" rel="nofollow" class="ut2-btn-close cm-external-click" data-ca-external-click-id="sw_elm_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-baseline-close"></i></a>
                            </div>
                            <div class="ut2-horizontal-product-filters-dropdown__stuffing">
                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants_element"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                <?php if ($_smarty_tpl->getValue('filter')['slider']) {?>
                                    <?php if ($_smarty_tpl->getValue('filter')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::DATE")) {?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_datepicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_variants.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>
                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants_element"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                <div class="ty-product-filters__tools"><?php if ($_smarty_tpl->getValue('reset_url')) {?><a class="ty-btn ty-btn__primary outline ty-product-filters__reset-button  cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-product-filters__reset-icon ty-icon-cw"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reset", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }?></div>
                            </div>
                        </div>
                    <?php }?>
                </div>

            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

            <?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "products_horizontal_filters_content", null, null);?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'filter', false, NULL, 'filters', array (
));
$foreach51DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('filter')->value) {
$foreach51DoElse = false;
?>

                        <?php $_smarty_tpl->assign('filter_uid', ((string)$_smarty_tpl->getValue('block')['block_id'])."_".((string)$_smarty_tpl->getValue('filter')['filter_id']), false, NULL);?>

                        <?php $_smarty_tpl->assign('reset_url', '', false, NULL);?>
                        <?php if ($_smarty_tpl->getValue('filter')['selected_variants'] || $_smarty_tpl->getValue('filter')['selected_range']) {?>
                            <?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getValue('filter_base_url'), false, NULL);?>
                            <?php $_smarty_tpl->assign('fh', $_smarty_tpl->getSmarty()->getModifierCallback('fn_delete_filter_from_hash')($_REQUEST['features_hash'],$_smarty_tpl->getValue('filter')['filter_id']), false, NULL);?>
                            <?php if ($_smarty_tpl->getValue('fh')) {?>
                                <?php $_smarty_tpl->assign('reset_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('filter_base_url'),"features_hash=".((string)$_smarty_tpl->getValue('fh'))), false, NULL);?>
                            <?php }?>
                        <?php }?>

                        <div id="elm_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box hidden ty-horizontal-product-filters-dropdown__content cm-horizontal-filters-content">
                            <div class="ty-horizontal-product-filters-dropdown__title">
                                <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter']), ENT_QUOTES, 'UTF-8');?>
</span>
                                <a href="javascript:void(0);" rel="nofollow" class="ut2-btn-close cm-external-click" data-ca-external-click-id="sw_elm_filter_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-baseline-close"></i></span></a>
                            </div>
                            <div class="ut2-horizontal-product-filters-dropdown__stuffing">
                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants_element"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                <?php if ($_smarty_tpl->getValue('filter')['slider']) {?>
                                    <?php if ($_smarty_tpl->getValue('filter')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::DATE")) {?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_datepicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_filters/components/product_filter_variants.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter_uid'=>$_smarty_tpl->getValue('filter_uid'),'filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>
                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:product_filters_variants_element"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                <div class="ty-product-filters__tools"><?php if ($_smarty_tpl->getValue('reset_url')) {?><a class="ty-btn ty-btn__primary outline ty-product-filters__reset-button  cm-ajax cm-ajax-full-render cm-history" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('reset_url'))), ENT_QUOTES, 'UTF-8');?>
" data-ca-event="ce.filtersinit" data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ajax_div_ids')), ENT_QUOTES, 'UTF-8');?>
"><i class="ty-product-filters__reset-icon ty-icon-cw"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reset", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }?></div>
                            </div>
                        </div>

                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <?php }?>

        <?php }?>
    </div>
    <button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button>

    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'products_horizontal_filters_content');?>

    <?php }?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->getValue('id'),'elements_to_scroll'=>(($tmp = $_smarty_tpl->getValue('elements_to_scroll') ?? null)===null||$tmp==='' ? 2 ?? null : $tmp)), (int) 0, $_smarty_current_dir);
?>

    <!--product_filters_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
--></div>

<div data-ca-tooltip-layout="true" class="hidden">
    <button type="button" data-ca-scroll=".main-content-grid" class="cm-scroll ty-tooltip--link ty-tooltip--filter"><span class="tooltip-arrow"></span></button>
</div><?php }
}
}
