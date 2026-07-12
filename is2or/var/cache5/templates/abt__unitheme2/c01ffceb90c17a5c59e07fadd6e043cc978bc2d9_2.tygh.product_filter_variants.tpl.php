<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:26:03
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_filters/components/product_filter_variants.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bd6bf16ec0_45377946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c01ffceb90c17a5c59e07fadd6e043cc978bc2d9' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_filters/components/product_filter_variants.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835bd6bf16ec0_45377946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),6=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('storefront_search_field','clear','no_items_found','storefront_search_field','clear','no_items_found'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:ab__cf_variants"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:ab__cf_variants"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <ul class="ty-product-filters <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count'] && smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants']) > $_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>
            <li>
                <?php echo smarty_function_script(array('src'=>"js/tygh/filter_table.js"),$_smarty_tpl);?>


                <div class="ty-product-filters__search">
                    <input type="text" placeholder="<?php echo $_smarty_tpl->__("storefront_search_field");?>
" class="cm-autocomplete-off ty-input-text-medium" name="q" id="elm_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" value="" />
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-product-filters__search-icon hidden",'id'=>"elm_search_clear_".((string)$_smarty_tpl->tpl_vars['filter_uid']->value),'title'=>$_smarty_tpl->__("clear")),$_smarty_tpl);?>

                </div>
            </li>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('white_color', "#ffffff");?>

        <?php if ($_smarty_tpl->tpl_vars['filter']->value['variants']) {?>
            <?php if ($_smarty_tpl->tpl_vars['filter']->value['filter_style'] == smarty_modifier_enum("ProductFilterStyles::COLOR")) {?>
                <div class="ty-product-filters__color-filter">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                        <li class="ty-product-filters__color-list-item cm-product-filters-checkbox-container">
                            <label
                                    id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    name="product_filters[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]"
                                    class="ty-product-filters__color-filter-item
                            <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {
if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__color-filter-item--selected<?php } else { ?>ty-product-filters__color-filter-item--disabled<?php }
}?>"
                                    data-cm-product-color-filter="true"
                                    data-ca-product-color-filter-checkbox-id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
">
                                <input
                                        class="cm-product-filters-checkbox ty-product-filters__color-filter-checkbox"
                                        type="checkbox"
                                        data-ca-filter-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" 
                                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>checked<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled'] && !$_smarty_tpl->tpl_vars['variant']->value['selected']) {?>disabled="disabled"<?php }?> />
                                        <?php $_smarty_tpl->_assignInScope('variant_selected_class', $_smarty_tpl->tpl_vars['variant']->value['selected'] ? "ty-product-filters__color-filter-check--selected" : '');?>
                                        <?php $_smarty_tpl->_assignInScope('variant_color_class', $_smarty_tpl->tpl_vars['variant']->value['color'] === $_smarty_tpl->tpl_vars['white_color']->value ? "ty-product-filters__color-filter-check--invert" : '');?>
                                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-product-filters__color-filter-check ".((string)$_smarty_tpl->tpl_vars['variant_selected_class']->value)." ".((string)$_smarty_tpl->tpl_vars['variant_color_class']->value)),$_smarty_tpl);?>

                                <div
                                        class="ty-product-filters__color-filter-swatch <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__color-filter-swatch--selected<?php }?>"
                                        style="background-color:<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['variant']->value['color'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['white_color']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                                </div>
                            </label>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php } else { ?>
                <li class="ty-product-filters__item-more">
                    <ul id="ranges_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>style="max-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['display_count']*31, ENT_QUOTES, 'UTF-8');?>
px;"<?php }?> class="ty-product-filters__variants <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants']) > $_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>items-more <?php }?>cm-filter-table" data-ca-input-id="elm_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-clear-id="elm_search_clear_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-empty-id="elm_search_empty_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                            <li class="cm-product-filters-checkbox-container ty-product-filters__group ut2-product-filters__variant">
                                <input class="cm-product-filters-checkbox" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>checked="checked"<?php }?> name="product_filters[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]" data-ca-filter-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled'] && !$_smarty_tpl->tpl_vars['variant']->value['selected']) {?>disabled="disabled"<?php }?>><label <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {?>class="<?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__empty-result<?php } else { ?>disabled<?php }?>"<?php }?> for="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"><span><span class="ut2-product-filters__variant__prefix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><span class="ut2-product-filters__variant__value"><?php echo htmlspecialchars((string) fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'UTF-8');?>
</span><span class="ut2-product-filters__variant__suffix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span></span></label>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants']) > $_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>
                        <a class="ut2-more-btn" onclick="$(this).prev().toggleClass('none-overflow'); $(this).toggleClass('open');"><i class="ut2-icon-outline-expand_more"></i><span class="more"><?php echo $_smarty_tpl->__('show_all');?>
 (<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants']), ENT_QUOTES, 'UTF-8');?>
)</span><span class="hidden"><?php echo $_smarty_tpl->__('abt__ut2_btn_filters_collapse');?>
</span></a>
                    <?php }?>
                </li>
            <?php }?>
        <li>
            <p id="elm_search_empty_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__no-items-found hidden"><?php echo $_smarty_tpl->__("no_items_found");?>
</p>
        </li>
    <?php }?>
</ul>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:ab__cf_variants"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/components/product_filter_variants.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_filters/components/product_filter_variants.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:ab__cf_variants"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:ab__cf_variants"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <ul class="ty-product-filters <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count'] && smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants']) > $_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>
            <li>
                <?php echo smarty_function_script(array('src'=>"js/tygh/filter_table.js"),$_smarty_tpl);?>


                <div class="ty-product-filters__search">
                    <input type="text" placeholder="<?php echo $_smarty_tpl->__("storefront_search_field");?>
" class="cm-autocomplete-off ty-input-text-medium" name="q" id="elm_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" value="" />
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-product-filters__search-icon hidden",'id'=>"elm_search_clear_".((string)$_smarty_tpl->tpl_vars['filter_uid']->value),'title'=>$_smarty_tpl->__("clear")),$_smarty_tpl);?>

                </div>
            </li>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('white_color', "#ffffff");?>

        <?php if ($_smarty_tpl->tpl_vars['filter']->value['variants']) {?>
            <?php if ($_smarty_tpl->tpl_vars['filter']->value['filter_style'] == smarty_modifier_enum("ProductFilterStyles::COLOR")) {?>
                <div class="ty-product-filters__color-filter">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                        <li class="ty-product-filters__color-list-item cm-product-filters-checkbox-container">
                            <label
                                    id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    name="product_filters[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]"
                                    class="ty-product-filters__color-filter-item
                            <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {
if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__color-filter-item--selected<?php } else { ?>ty-product-filters__color-filter-item--disabled<?php }
}?>"
                                    data-cm-product-color-filter="true"
                                    data-ca-product-color-filter-checkbox-id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
">
                                <input
                                        class="cm-product-filters-checkbox ty-product-filters__color-filter-checkbox"
                                        type="checkbox"
                                        data-ca-filter-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" 
                                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>checked<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled'] && !$_smarty_tpl->tpl_vars['variant']->value['selected']) {?>disabled="disabled"<?php }?> />
                                        <?php $_smarty_tpl->_assignInScope('variant_selected_class', $_smarty_tpl->tpl_vars['variant']->value['selected'] ? "ty-product-filters__color-filter-check--selected" : '');?>
                                        <?php $_smarty_tpl->_assignInScope('variant_color_class', $_smarty_tpl->tpl_vars['variant']->value['color'] === $_smarty_tpl->tpl_vars['white_color']->value ? "ty-product-filters__color-filter-check--invert" : '');?>
                                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-ok ty-product-filters__color-filter-check ".((string)$_smarty_tpl->tpl_vars['variant_selected_class']->value)." ".((string)$_smarty_tpl->tpl_vars['variant_color_class']->value)),$_smarty_tpl);?>

                                <div
                                        class="ty-product-filters__color-filter-swatch <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__color-filter-swatch--selected<?php }?>"
                                        style="background-color:<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['variant']->value['color'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['white_color']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                                </div>
                            </label>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php } else { ?>
                <li class="ty-product-filters__item-more">
                    <ul id="ranges_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>style="max-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['display_count']*31, ENT_QUOTES, 'UTF-8');?>
px;"<?php }?> class="ty-product-filters__variants <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants']) > $_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>items-more <?php }?>cm-filter-table" data-ca-input-id="elm_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-clear-id="elm_search_clear_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-empty-id="elm_search_empty_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                            <li class="cm-product-filters-checkbox-container ty-product-filters__group ut2-product-filters__variant">
                                <input class="cm-product-filters-checkbox" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>checked="checked"<?php }?> name="product_filters[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]" data-ca-filter-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" id="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled'] && !$_smarty_tpl->tpl_vars['variant']->value['selected']) {?>disabled="disabled"<?php }?>><label <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {?>class="<?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__empty-result<?php } else { ?>disabled<?php }?>"<?php }?> for="elm_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"><span><span class="ut2-product-filters__variant__prefix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><span class="ut2-product-filters__variant__value"><?php echo htmlspecialchars((string) fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'UTF-8');?>
</span><span class="ut2-product-filters__variant__suffix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span></span></label>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants']) > $_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>
                        <a class="ut2-more-btn" onclick="$(this).prev().toggleClass('none-overflow'); $(this).toggleClass('open');"><i class="ut2-icon-outline-expand_more"></i><span class="more"><?php echo $_smarty_tpl->__('show_all');?>
 (<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants']), ENT_QUOTES, 'UTF-8');?>
)</span><span class="hidden"><?php echo $_smarty_tpl->__('abt__ut2_btn_filters_collapse');?>
</span></a>
                    <?php }?>
                </li>
            <?php }?>
        <li>
            <p id="elm_search_empty_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__no-items-found hidden"><?php echo $_smarty_tpl->__("no_items_found");?>
</p>
        </li>
    <?php }?>
</ul>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:ab__cf_variants"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
