<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:18:15
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__seo_filters/overrides/blocks/product_filters/components/product_filter_variants.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a1340e79ece91_58884473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13ae06363e2aae379016f5aabada6922d07eb39c' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__seo_filters/overrides/blocks/product_filters/components/product_filter_variants.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_6a1340e79ece91_58884473 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__seo_filters/overrides/blocks/product_filters/components';
\Tygh\Languages\Helper::preloadLangVars(array('storefront_search_field','clear','no_items_found','storefront_search_field','clear','no_items_found'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:ab__cf_variants"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <ul class="ty-product-filters <?php if ($_smarty_tpl->getValue('collapse')) {?>hidden<?php }?>" id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
">

        <?php if ($_smarty_tpl->getValue('filter')['filter_style'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFilterStyles::COLOR") && $_smarty_tpl->getValue('filter')['display_count'] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('filter')['variants']) > $_smarty_tpl->getValue('filter')['display_count']) {?>
            <li>
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/filter_table.js"), $_smarty_tpl);?>


                <div class="ty-product-filters__search">
                    <input type="text" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront_search_field", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="cm-autocomplete-off ty-input-text-medium" name="q" id="elm_search_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" value="" />
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-product-filters__search-icon hidden",'id'=>"elm_search_clear_".((string)$_smarty_tpl->getValue('filter_uid')),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("clear", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>

                </div>
            </li>
        <?php }?>

        <?php $_smarty_tpl->assign('white_color', "#ffffff", false, NULL);?>

        <?php if ($_smarty_tpl->getValue('filter')['variants']) {?>
            <?php if ($_smarty_tpl->getValue('filter')['filter_style'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFilterStyles::COLOR")) {?>
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_product_filters.js"), $_smarty_tpl);?>

                <li class="ty-product-filters__item-more">
                    <ul class="ty-product-filters__variants ty-product-filters__color-filter" <?php if ($_smarty_tpl->getValue('filter')['display_count']) {?>style="--ut2-product-filter-shortlist-variant-count: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['display_count']), ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('filter')['variants'], 'variant', false, NULL, 'color_variants', array (
  'iteration' => true,
  'total' => true,
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach0DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_color_variants']->value['iteration']++;
?>
                            <li class=" cm-product-filters-checkbox-container <?php if (($_smarty_tpl->getValue('__smarty_foreach_color_variants')['iteration'] ?? null) > $_smarty_tpl->getValue('filter')['display_count']) {?>hidden<?php } else { ?>ty-product-filters__color-list-item<?php }?>">
                                <label
                                        id="elm_checkbox_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                        name="product_filters[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
]"
                                        class="ty-product-filters__color-filter-item
                            <?php if ($_smarty_tpl->getValue('variant')['disabled']) {
if ($_smarty_tpl->getValue('variant')['selected']) {?>ty-product-filters__color-filter-item--selected<?php } else { ?>ty-product-filters__color-filter-item--disabled<?php }
}?>"
                                        data-cm-product-color-filter="true"
                                        data-ca-product-color-filter-checkbox-id="elm_checkbox_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                        title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['prefix']), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_text_placeholders')($_smarty_tpl->getValue('variant')['variant'])), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['suffix']), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php $_smarty_tpl->assign('href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__seo_filters_prepare_filter_url')(((string)$_smarty_tpl->getValue('filter')['filter_id'])."-".((string)$_smarty_tpl->getValue('variant')['variant_id'])), false, NULL);?>
                                    <?php if (!$_smarty_tpl->getValue('variant')['disabled'] && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('href'),"features_hash") === false && !( !$_smarty_tpl->hasVariable('href') || empty($_smarty_tpl->getValue('href'))) && !$_smarty_tpl->getValue('variant')['selected']) {?><a class="ab__sf_filter_url" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('href')), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                                        <input
                                                class="cm-product-filters-checkbox ty-product-filters__color-filter-checkbox"
                                                type="checkbox"
                                                data-ca-filter-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
"
                                                value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                                id="elm_checkbox_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                                <?php if ($_smarty_tpl->getValue('variant')['selected']) {?>checked<?php }?>
                                                <?php if ($_smarty_tpl->getValue('variant')['disabled'] && !$_smarty_tpl->getValue('variant')['selected']) {?>disabled="disabled"<?php }?> />
                                        <?php $_smarty_tpl->assign('variant_selected_class', ($_smarty_tpl->getValue('variant')['selected']) ? "ty-product-filters__color-filter-check--selected" : '', false, NULL);?>
                                        <?php $_smarty_tpl->assign('variant_color_class', ($_smarty_tpl->getValue('variant')['color'] === $_smarty_tpl->getValue('white_color')) ? "ty-product-filters__color-filter-check--invert" : '', false, NULL);?>
                                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-product-filters__color-filter-check ".((string)$_smarty_tpl->getValue('variant_selected_class'))." ".((string)$_smarty_tpl->getValue('variant_color_class'))), $_smarty_tpl);?>

                                        <?php $_smarty_tpl->assign('color1', (($tmp = $_smarty_tpl->getValue('variant')['color'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('white_color') ?? null : $tmp), false, NULL);?>
                                        <?php $_smarty_tpl->assign('color2', ($_smarty_tpl->getValue('variant')['abt__ut2_color_style'] === 'multicolor') ? ((($tmp = $_smarty_tpl->getValue('variant')['abt__ut2_multicolor'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('color1') ?? null : $tmp)) : $_smarty_tpl->getValue('color1'), false, NULL);?>
                                        <div class="ty-product-filters__color-filter-swatch <?php if ($_smarty_tpl->getValue('variant')['selected']) {?>ty-product-filters__color-filter-swatch--selected<?php }?>"
                                             style="background: linear-gradient(120deg,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color1')), ENT_QUOTES, 'UTF-8');?>
 50%, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color2')), ENT_QUOTES, 'UTF-8');?>
 51%)">
                                            <?php if ($_smarty_tpl->getValue('variant')['abt__ut2_color_style'] === 'thumbnail') {?>
                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('variant')['image_pair'],'image_width'=>64,'height'=>64,'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
                                            <?php }?>
                                        </div>
                                        <?php if (!$_smarty_tpl->getValue('variant')['disabled'] && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('href'),"features_hash") === false && !( !$_smarty_tpl->hasVariable('href') || empty($_smarty_tpl->getValue('href'))) && !$_smarty_tpl->getValue('variant')['selected']) {?></a><?php }?>
                                </label>
                            </li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                    <?php if (($_smarty_tpl->getValue('__smarty_foreach_color_variants')['total'] ?? null) > $_smarty_tpl->getValue('filter')['display_count']) {?>
                        <a class="ut2-more-btn"
                           data-toggle-color-filter
                           data-display-count="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('filter')['display_count'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <i class="ut2-icon-outline-expand_more"></i>
                            <span class="more"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('show_all', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 (<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('filter')['variants'])), ENT_QUOTES, 'UTF-8');?>
)</span>
                            <span class="hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2_btn_filters_collapse', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                        </a>
                    <?php }?>
                </li>
            <?php } else { ?>
                <li class="ty-product-filters__item-more">
                    <ul id="ranges_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('filter')['display_count']) {?>style="--ut2-product-filter-variant-list-_max-height_-shortened: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['display_count']*31), ENT_QUOTES, 'UTF-8');?>
px;"<?php }?> class="ty-product-filters__variants <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('filter')['variants']) > $_smarty_tpl->getValue('filter')['display_count']) {?>items-more <?php }?>cm-filter-table" data-ca-input-id="elm_search_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" data-ca-clear-id="elm_search_clear_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" data-ca-empty-id="elm_search_empty_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
">

                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('filter')['variants'], 'variant');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach1DoElse = false;
?>
                            <li class="cm-product-filters-checkbox-container ty-product-filters__group ut2-product-filters__variant">
                                <?php $_smarty_tpl->assign('href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__seo_filters_prepare_filter_url')(((string)$_smarty_tpl->getValue('filter')['filter_id'])."-".((string)$_smarty_tpl->getValue('variant')['variant_id'])), false, NULL);?>
                                <?php if (!$_smarty_tpl->getValue('variant')['disabled'] && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('href'),"features_hash") === false && !( !$_smarty_tpl->hasVariable('href') || empty($_smarty_tpl->getValue('href'))) && !$_smarty_tpl->getValue('variant')['selected']) {?>
                                <a
                                                                                class="ab__sf_filter_url"
                                        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('href')), ENT_QUOTES, 'UTF-8');?>
"
                                >
                                    <?php }?>
                                    <input class="cm-product-filters-checkbox" type="checkbox" <?php if ($_smarty_tpl->getValue('variant')['selected']) {?>checked="checked"<?php }?> name="product_filters[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
]" data-ca-filter-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
" id="elm_checkbox_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('variant')['disabled'] && !$_smarty_tpl->getValue('variant')['selected']) {?>disabled="disabled"<?php }?>><label <?php if ($_smarty_tpl->getValue('variant')['disabled']) {?>class="<?php if ($_smarty_tpl->getValue('variant')['selected']) {?>ty-product-filters__empty-result<?php } else { ?>disabled<?php }?>"<?php }?> for="elm_checkbox_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"><span><span class="ut2-product-filters__variant__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><span class="ut2-product-filters__variant__value"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_text_placeholders')($_smarty_tpl->getValue('variant')['variant'])), ENT_QUOTES, 'UTF-8');?>
</span><span class="ut2-product-filters__variant__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span></span></label>
                                    <?php if (!$_smarty_tpl->getValue('variant')['disabled'] && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('href'),"features_hash") === false && !( !$_smarty_tpl->hasVariable('href') || empty($_smarty_tpl->getValue('href')))) {?></a><?php }?>
                            </li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('filter')['variants']) > $_smarty_tpl->getValue('filter')['display_count']) {?>
                        <a class="ut2-more-btn" onclick="$(this).prev().toggleClass('none-overflow'); $(this).toggleClass('open');"><i class="ut2-icon-outline-expand_more"></i><span class="more"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('show_all', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 (<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('filter')['variants'])), ENT_QUOTES, 'UTF-8');?>
)</span><span class="hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2_btn_filters_collapse', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
                    <?php }?>
                </li>
            <?php }?>
            <li>
                <p id="elm_search_empty_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__no-items-found hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_items_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
            </li>
        <?php }?>
    </ul>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:ab__cf_variants"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__seo_filters/overrides/blocks/product_filters/components/product_filter_variants.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__seo_filters/overrides/blocks/product_filters/components/product_filter_variants.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:ab__cf_variants"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <ul class="ty-product-filters <?php if ($_smarty_tpl->getValue('collapse')) {?>hidden<?php }?>" id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
">

        <?php if ($_smarty_tpl->getValue('filter')['filter_style'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFilterStyles::COLOR") && $_smarty_tpl->getValue('filter')['display_count'] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('filter')['variants']) > $_smarty_tpl->getValue('filter')['display_count']) {?>
            <li>
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/filter_table.js"), $_smarty_tpl);?>


                <div class="ty-product-filters__search">
                    <input type="text" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront_search_field", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="cm-autocomplete-off ty-input-text-medium" name="q" id="elm_search_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" value="" />
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-product-filters__search-icon hidden",'id'=>"elm_search_clear_".((string)$_smarty_tpl->getValue('filter_uid')),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("clear", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>

                </div>
            </li>
        <?php }?>

        <?php $_smarty_tpl->assign('white_color', "#ffffff", false, NULL);?>

        <?php if ($_smarty_tpl->getValue('filter')['variants']) {?>
            <?php if ($_smarty_tpl->getValue('filter')['filter_style'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFilterStyles::COLOR")) {?>
                <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_product_filters.js"), $_smarty_tpl);?>

                <li class="ty-product-filters__item-more">
                    <ul class="ty-product-filters__variants ty-product-filters__color-filter" <?php if ($_smarty_tpl->getValue('filter')['display_count']) {?>style="--ut2-product-filter-shortlist-variant-count: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['display_count']), ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('filter')['variants'], 'variant', false, NULL, 'color_variants', array (
  'iteration' => true,
  'total' => true,
));
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach2DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_color_variants']->value['iteration']++;
?>
                            <li class=" cm-product-filters-checkbox-container <?php if (($_smarty_tpl->getValue('__smarty_foreach_color_variants')['iteration'] ?? null) > $_smarty_tpl->getValue('filter')['display_count']) {?>hidden<?php } else { ?>ty-product-filters__color-list-item<?php }?>">
                                <label
                                        id="elm_checkbox_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                        name="product_filters[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
]"
                                        class="ty-product-filters__color-filter-item
                            <?php if ($_smarty_tpl->getValue('variant')['disabled']) {
if ($_smarty_tpl->getValue('variant')['selected']) {?>ty-product-filters__color-filter-item--selected<?php } else { ?>ty-product-filters__color-filter-item--disabled<?php }
}?>"
                                        data-cm-product-color-filter="true"
                                        data-ca-product-color-filter-checkbox-id="elm_checkbox_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                        title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['prefix']), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_text_placeholders')($_smarty_tpl->getValue('variant')['variant'])), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['suffix']), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php $_smarty_tpl->assign('href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__seo_filters_prepare_filter_url')(((string)$_smarty_tpl->getValue('filter')['filter_id'])."-".((string)$_smarty_tpl->getValue('variant')['variant_id'])), false, NULL);?>
                                    <?php if (!$_smarty_tpl->getValue('variant')['disabled'] && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('href'),"features_hash") === false && !( !$_smarty_tpl->hasVariable('href') || empty($_smarty_tpl->getValue('href'))) && !$_smarty_tpl->getValue('variant')['selected']) {?><a class="ab__sf_filter_url" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('href')), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                                        <input
                                                class="cm-product-filters-checkbox ty-product-filters__color-filter-checkbox"
                                                type="checkbox"
                                                data-ca-filter-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
"
                                                value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                                id="elm_checkbox_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                                <?php if ($_smarty_tpl->getValue('variant')['selected']) {?>checked<?php }?>
                                                <?php if ($_smarty_tpl->getValue('variant')['disabled'] && !$_smarty_tpl->getValue('variant')['selected']) {?>disabled="disabled"<?php }?> />
                                        <?php $_smarty_tpl->assign('variant_selected_class', ($_smarty_tpl->getValue('variant')['selected']) ? "ty-product-filters__color-filter-check--selected" : '', false, NULL);?>
                                        <?php $_smarty_tpl->assign('variant_color_class', ($_smarty_tpl->getValue('variant')['color'] === $_smarty_tpl->getValue('white_color')) ? "ty-product-filters__color-filter-check--invert" : '', false, NULL);?>
                                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-product-filters__color-filter-check ".((string)$_smarty_tpl->getValue('variant_selected_class'))." ".((string)$_smarty_tpl->getValue('variant_color_class'))), $_smarty_tpl);?>

                                        <?php $_smarty_tpl->assign('color1', (($tmp = $_smarty_tpl->getValue('variant')['color'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('white_color') ?? null : $tmp), false, NULL);?>
                                        <?php $_smarty_tpl->assign('color2', ($_smarty_tpl->getValue('variant')['abt__ut2_color_style'] === 'multicolor') ? ((($tmp = $_smarty_tpl->getValue('variant')['abt__ut2_multicolor'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('color1') ?? null : $tmp)) : $_smarty_tpl->getValue('color1'), false, NULL);?>
                                        <div class="ty-product-filters__color-filter-swatch <?php if ($_smarty_tpl->getValue('variant')['selected']) {?>ty-product-filters__color-filter-swatch--selected<?php }?>"
                                             style="background: linear-gradient(120deg,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color1')), ENT_QUOTES, 'UTF-8');?>
 50%, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color2')), ENT_QUOTES, 'UTF-8');?>
 51%)">
                                            <?php if ($_smarty_tpl->getValue('variant')['abt__ut2_color_style'] === 'thumbnail') {?>
                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('variant')['image_pair'],'image_width'=>64,'height'=>64,'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
                                            <?php }?>
                                        </div>
                                        <?php if (!$_smarty_tpl->getValue('variant')['disabled'] && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('href'),"features_hash") === false && !( !$_smarty_tpl->hasVariable('href') || empty($_smarty_tpl->getValue('href'))) && !$_smarty_tpl->getValue('variant')['selected']) {?></a><?php }?>
                                </label>
                            </li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                    <?php if (($_smarty_tpl->getValue('__smarty_foreach_color_variants')['total'] ?? null) > $_smarty_tpl->getValue('filter')['display_count']) {?>
                        <a class="ut2-more-btn"
                           data-toggle-color-filter
                           data-display-count="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('filter')['display_count'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <i class="ut2-icon-outline-expand_more"></i>
                            <span class="more"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('show_all', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 (<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('filter')['variants'])), ENT_QUOTES, 'UTF-8');?>
)</span>
                            <span class="hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2_btn_filters_collapse', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                        </a>
                    <?php }?>
                </li>
            <?php } else { ?>
                <li class="ty-product-filters__item-more">
                    <ul id="ranges_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('filter')['display_count']) {?>style="--ut2-product-filter-variant-list-_max-height_-shortened: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['display_count']*31), ENT_QUOTES, 'UTF-8');?>
px;"<?php }?> class="ty-product-filters__variants <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('filter')['variants']) > $_smarty_tpl->getValue('filter')['display_count']) {?>items-more <?php }?>cm-filter-table" data-ca-input-id="elm_search_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" data-ca-clear-id="elm_search_clear_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" data-ca-empty-id="elm_search_empty_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
">

                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('filter')['variants'], 'variant');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach3DoElse = false;
?>
                            <li class="cm-product-filters-checkbox-container ty-product-filters__group ut2-product-filters__variant">
                                <?php $_smarty_tpl->assign('href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__seo_filters_prepare_filter_url')(((string)$_smarty_tpl->getValue('filter')['filter_id'])."-".((string)$_smarty_tpl->getValue('variant')['variant_id'])), false, NULL);?>
                                <?php if (!$_smarty_tpl->getValue('variant')['disabled'] && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('href'),"features_hash") === false && !( !$_smarty_tpl->hasVariable('href') || empty($_smarty_tpl->getValue('href'))) && !$_smarty_tpl->getValue('variant')['selected']) {?>
                                <a
                                                                                class="ab__sf_filter_url"
                                        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('href')), ENT_QUOTES, 'UTF-8');?>
"
                                >
                                    <?php }?>
                                    <input class="cm-product-filters-checkbox" type="checkbox" <?php if ($_smarty_tpl->getValue('variant')['selected']) {?>checked="checked"<?php }?> name="product_filters[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
]" data-ca-filter-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
" id="elm_checkbox_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('variant')['disabled'] && !$_smarty_tpl->getValue('variant')['selected']) {?>disabled="disabled"<?php }?>><label <?php if ($_smarty_tpl->getValue('variant')['disabled']) {?>class="<?php if ($_smarty_tpl->getValue('variant')['selected']) {?>ty-product-filters__empty-result<?php } else { ?>disabled<?php }?>"<?php }?> for="elm_checkbox_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"><span><span class="ut2-product-filters__variant__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><span class="ut2-product-filters__variant__value"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_text_placeholders')($_smarty_tpl->getValue('variant')['variant'])), ENT_QUOTES, 'UTF-8');?>
</span><span class="ut2-product-filters__variant__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span></span></label>
                                    <?php if (!$_smarty_tpl->getValue('variant')['disabled'] && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('href'),"features_hash") === false && !( !$_smarty_tpl->hasVariable('href') || empty($_smarty_tpl->getValue('href')))) {?></a><?php }?>
                            </li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('filter')['variants']) > $_smarty_tpl->getValue('filter')['display_count']) {?>
                        <a class="ut2-more-btn" onclick="$(this).prev().toggleClass('none-overflow'); $(this).toggleClass('open');"><i class="ut2-icon-outline-expand_more"></i><span class="more"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('show_all', [], $_smarty_tpl->getSmarty()->getLanguage());?>
 (<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('filter')['variants'])), ENT_QUOTES, 'UTF-8');?>
)</span><span class="hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2_btn_filters_collapse', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
                    <?php }?>
                </li>
            <?php }?>
            <li>
                <p id="elm_search_empty_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__no-items-found hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_items_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
            </li>
        <?php }?>
    </ul>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"blocks:ab__cf_variants"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
