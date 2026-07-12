<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:57
  from 'tygh:blocks/product_filters/components/product_filter_slider.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6d197638_90295294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd50bf88fef511050b3d9214b1c24a3dbe6157d63' => 
    array (
      0 => 'blocks/product_filters/components/product_filter_slider.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f6d197638_90295294 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/product_filters/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/jqueryuitouch/jquery.ui.touch-punch.min.js"), $_smarty_tpl);?>

<?php $_smarty_tpl->assign('min', $_smarty_tpl->getValue('filter')['min'], false, NULL);
$_smarty_tpl->assign('max', $_smarty_tpl->getValue('filter')['max'], false, NULL);
$_smarty_tpl->assign('left', (($tmp = $_smarty_tpl->getValue('filter')['left'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('min') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('right', (($tmp = $_smarty_tpl->getValue('filter')['right'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('max') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('disable_slider', $_smarty_tpl->getValue('filter')['disable'], false, NULL);?>

<?php if ($_smarty_tpl->getValue('filter')['selected_range']) {?>
    <?php $_smarty_tpl->assign('value', ((string)$_smarty_tpl->getValue('filter')['current_left']).((string)(defined('FILTERS_HASH_FEATURE_SEPARATOR') ? constant('FILTERS_HASH_FEATURE_SEPARATOR') : null)).((string)$_smarty_tpl->getValue('filter')['current_right']), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('filter')['extra']) {?>
        <?php $_smarty_tpl->assign('value', ((string)$_smarty_tpl->getValue('value')).((string)(defined('FILTERS_HASH_FEATURE_SEPARATOR') ? constant('FILTERS_HASH_FEATURE_SEPARATOR') : null)).((string)$_smarty_tpl->getValue('filter')['extra']), false, NULL);?>
    <?php }
}?>

<div id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" class="cm-product-filters-checkbox-container ty-price-slider <?php if ($_smarty_tpl->getValue('collapse')) {?>hidden<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('extra_class')), ENT_QUOTES, 'UTF-8');?>
">
    <div class="ty-price-slider__inputs">
        <div class="ty-price-slider__bidi-container">
            <div class="ty-price-slider__filter-prefix"><?php echo $_smarty_tpl->getValue('filter')['prefix'];?>
</div>
            <input type="text"
                class="ty-price-slider__input-text"
                id="slider_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_left"
                name="left_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
"
                value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('left')), ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->getValue('disable_slider')) {?>
                    disabled="disabled"
                <?php }?>
                data-ca-previous-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('left')), ENT_QUOTES, 'UTF-8');?>
"/>
            <div class="ty-price-slider__filter-suffix"><?php echo $_smarty_tpl->getValue('filter')['suffix'];?>
</div>
        </div>
        <div class="ab__ut2--price-slider__sep">–</div>
        <div class="ty-price-slider__bidi-container">
            <div class="ty-price-slider__filter-prefix"><?php echo $_smarty_tpl->getValue('filter')['prefix'];?>
</div>
            <input type="text"
                class="ty-price-slider__input-text"
                id="slider_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_right"
                name="right_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
"
                value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('right')), ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->getValue('disable_slider')) {?>
                    disabled="disabled"
                <?php }?>
                data-ca-previous-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('right')), ENT_QUOTES, 'UTF-8');?>
"/>
            <div class="ty-price-slider__filter-suffix"><?php echo $_smarty_tpl->getValue('filter')['suffix'];?>
</div>
        </div>
    </div>
        <div id="slider_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" class="ty-range-slider cm-range-slider">
            <ul class="ty-range-slider__wrapper">
                <li class="ty-range-slider__item" style="left: 0%;">
                    <span class="ty-range-slider__num">
                        <span><bdi><?php echo $_smarty_tpl->getValue('filter')['prefix'];?>
<span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('min')), ENT_QUOTES, 'UTF-8');?>
</span><?php echo $_smarty_tpl->getValue('filter')['suffix'];?>
</bdi></span>
                    </span>
                </li>
                <li class="ty-range-slider__item" style="left: 100%;">
                    <span class="ty-range-slider__num">
                        <span><bdi><?php echo $_smarty_tpl->getValue('filter')['prefix'];?>
<span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('max')), ENT_QUOTES, 'UTF-8');?>
</span><?php echo $_smarty_tpl->getValue('filter')['suffix'];?>
</bdi></span>
                    </span>
                </li>
            </ul>
        </div>

        <input id="elm_checkbox_slider_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" data-ca-filter-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
" class="cm-product-filters-checkbox hidden" type="checkbox" name="product_filters[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('filter')['selected_range']) {?>checked="checked"<?php }?> />

                <input type="hidden" id="slider_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_json" value='{
            "disabled": <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('to_json')($_smarty_tpl->getValue('disable_slider'))), ENT_QUOTES, 'UTF-8');?>
,
            "min": <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('min')), ENT_QUOTES, 'UTF-8');?>
,
            "max": <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('max')), ENT_QUOTES, 'UTF-8');?>
,
            "left": <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('left')), ENT_QUOTES, 'UTF-8');?>
,
            "right": <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('right')), ENT_QUOTES, 'UTF-8');?>
,
            "step": <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['round_to']), ENT_QUOTES, 'UTF-8');?>
,
            "extra": "<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['extra']), ENT_QUOTES, 'UTF-8');?>
"
        }' />
        </div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/components/product_filter_slider.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/product_filters/components/product_filter_slider.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/lib/jqueryuitouch/jquery.ui.touch-punch.min.js"), $_smarty_tpl);?>

<?php $_smarty_tpl->assign('min', $_smarty_tpl->getValue('filter')['min'], false, NULL);
$_smarty_tpl->assign('max', $_smarty_tpl->getValue('filter')['max'], false, NULL);
$_smarty_tpl->assign('left', (($tmp = $_smarty_tpl->getValue('filter')['left'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('min') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('right', (($tmp = $_smarty_tpl->getValue('filter')['right'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('max') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('disable_slider', $_smarty_tpl->getValue('filter')['disable'], false, NULL);?>

<?php if ($_smarty_tpl->getValue('filter')['selected_range']) {?>
    <?php $_smarty_tpl->assign('value', ((string)$_smarty_tpl->getValue('filter')['current_left']).((string)(defined('FILTERS_HASH_FEATURE_SEPARATOR') ? constant('FILTERS_HASH_FEATURE_SEPARATOR') : null)).((string)$_smarty_tpl->getValue('filter')['current_right']), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('filter')['extra']) {?>
        <?php $_smarty_tpl->assign('value', ((string)$_smarty_tpl->getValue('value')).((string)(defined('FILTERS_HASH_FEATURE_SEPARATOR') ? constant('FILTERS_HASH_FEATURE_SEPARATOR') : null)).((string)$_smarty_tpl->getValue('filter')['extra']), false, NULL);?>
    <?php }
}?>

<div id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" class="cm-product-filters-checkbox-container ty-price-slider <?php if ($_smarty_tpl->getValue('collapse')) {?>hidden<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('extra_class')), ENT_QUOTES, 'UTF-8');?>
">
    <div class="ty-price-slider__inputs">
        <div class="ty-price-slider__bidi-container">
            <div class="ty-price-slider__filter-prefix"><?php echo $_smarty_tpl->getValue('filter')['prefix'];?>
</div>
            <input type="text"
                class="ty-price-slider__input-text"
                id="slider_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_left"
                name="left_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
"
                value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('left')), ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->getValue('disable_slider')) {?>
                    disabled="disabled"
                <?php }?>
                data-ca-previous-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('left')), ENT_QUOTES, 'UTF-8');?>
"/>
            <div class="ty-price-slider__filter-suffix"><?php echo $_smarty_tpl->getValue('filter')['suffix'];?>
</div>
        </div>
        <div class="ab__ut2--price-slider__sep">–</div>
        <div class="ty-price-slider__bidi-container">
            <div class="ty-price-slider__filter-prefix"><?php echo $_smarty_tpl->getValue('filter')['prefix'];?>
</div>
            <input type="text"
                class="ty-price-slider__input-text"
                id="slider_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_right"
                name="right_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
"
                value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('right')), ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->getValue('disable_slider')) {?>
                    disabled="disabled"
                <?php }?>
                data-ca-previous-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('right')), ENT_QUOTES, 'UTF-8');?>
"/>
            <div class="ty-price-slider__filter-suffix"><?php echo $_smarty_tpl->getValue('filter')['suffix'];?>
</div>
        </div>
    </div>
        <div id="slider_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" class="ty-range-slider cm-range-slider">
            <ul class="ty-range-slider__wrapper">
                <li class="ty-range-slider__item" style="left: 0%;">
                    <span class="ty-range-slider__num">
                        <span><bdi><?php echo $_smarty_tpl->getValue('filter')['prefix'];?>
<span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('min')), ENT_QUOTES, 'UTF-8');?>
</span><?php echo $_smarty_tpl->getValue('filter')['suffix'];?>
</bdi></span>
                    </span>
                </li>
                <li class="ty-range-slider__item" style="left: 100%;">
                    <span class="ty-range-slider__num">
                        <span><bdi><?php echo $_smarty_tpl->getValue('filter')['prefix'];?>
<span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('max')), ENT_QUOTES, 'UTF-8');?>
</span><?php echo $_smarty_tpl->getValue('filter')['suffix'];?>
</bdi></span>
                    </span>
                </li>
            </ul>
        </div>

        <input id="elm_checkbox_slider_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
" data-ca-filter-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
" class="cm-product-filters-checkbox hidden" type="checkbox" name="product_filters[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['filter_id']), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('filter')['selected_range']) {?>checked="checked"<?php }?> />

                <input type="hidden" id="slider_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter_uid')), ENT_QUOTES, 'UTF-8');?>
_json" value='{
            "disabled": <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('to_json')($_smarty_tpl->getValue('disable_slider'))), ENT_QUOTES, 'UTF-8');?>
,
            "min": <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('min')), ENT_QUOTES, 'UTF-8');?>
,
            "max": <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('max')), ENT_QUOTES, 'UTF-8');?>
,
            "left": <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('left')), ENT_QUOTES, 'UTF-8');?>
,
            "right": <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('right')), ENT_QUOTES, 'UTF-8');?>
,
            "step": <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['round_to']), ENT_QUOTES, 'UTF-8');?>
,
            "extra": "<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('filter')['extra']), ENT_QUOTES, 'UTF-8');?>
"
        }' />
        </div>
<?php }
}
}
