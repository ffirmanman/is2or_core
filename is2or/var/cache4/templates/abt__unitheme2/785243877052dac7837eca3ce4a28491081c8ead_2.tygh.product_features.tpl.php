<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:16
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/products/components/product_features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571caa8ed4_91219070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '785243877052dac7837eca3ce4a28491081c8ead' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/views/products/components/product_features.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
    'tygh:views/products/components/ab__similar_filter.tpl' => 6,
    'tygh:common/subheader.tpl' => 2,
    'tygh:views/products/components/product_features.tpl' => 3,
  ),
),false)) {
function content_6834571caa8ed4_91219070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('yes','no','yes','no'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] != smarty_modifier_enum("ProductFeatures::GROUP")) {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-help-circle",'assign'=>'link_text_icon'),$_smarty_tpl);?>

        <div class="ty-product-feature">
        <div class="ty-product-feature__label"><span><?php echo $_smarty_tpl->tpl_vars['feature']->value['description'];?>
</span><?php if (smarty_modifier_trim($_smarty_tpl->tpl_vars['feature']->value['full_description'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link_meta'=>"ty-icon ty-icon-help-circle cm-dialog-auto-size ut2-append-body",'id'=>"ut2_features_dialog_".((string)$_smarty_tpl->tpl_vars['feature']->value['feature_id']),'text'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'content'=>$_smarty_tpl->tpl_vars['feature']->value['full_description'],'show_brackets'=>false), 0, true);
}?></div>

        <?php $_smarty_tpl->_assignInScope('hide_affix', $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX"));?>

        <div class="ty-product-feature__value"><?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix'] && !$_smarty_tpl->tpl_vars['hide_affix']->value) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX")) {
if ($_smarty_tpl->tpl_vars['feature']->value['value'] === smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/ab__similar_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->tpl_vars['feature']->value,'variant_id'=>"Y"), 0, true);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__ut2_features:variant"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__ut2_features:variant"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->__("yes");
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__ut2_features:variant"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
echo $_smarty_tpl->__("no");
}
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['feature']->value['value_int'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX") && $_smarty_tpl->tpl_vars['feature']->value['variants']) {?><ul class="ty-product-feature__multiple <?php if ($_smarty_tpl->tpl_vars['ab__search_similar_in_category']->value && $_smarty_tpl->tpl_vars['feature']->value['filter_id']) {?>abt__ut2_checkboxes<?php }?>"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'var', true);
$_smarty_tpl->tpl_vars['var']->iteration = 0;
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
$_smarty_tpl->tpl_vars['var']->iteration++;
$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration === $_smarty_tpl->tpl_vars['var']->total;
$__foreach_var_63_saved = $_smarty_tpl->tpl_vars['var'];
$_smarty_tpl->_assignInScope('hide_variant_affix', !$_smarty_tpl->tpl_vars['hide_affix']->value);
if ($_smarty_tpl->tpl_vars['var']->value['selected']) {?><li class="ty-product-feature__multiple-item"><?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/ab__similar_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->tpl_vars['feature']->value,'variant_id'=>$_smarty_tpl->tpl_vars['var']->value['variant_id']), 0, true);
if (!$_smarty_tpl->tpl_vars['hide_variant_affix']->value) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__ut2_features:variant"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__ut2_features:variant"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__ut2_features:variant"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if (!$_smarty_tpl->tpl_vars['hide_variant_affix']->value) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php if (!$_smarty_tpl->tpl_vars['var']->last && !$_smarty_tpl->tpl_vars['ab__enable_similar_filter_show']->value) {?><em>,</em><?php }
}?></li><?php }
$_smarty_tpl->tpl_vars['var'] = $__foreach_var_63_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php } elseif (in_array($_smarty_tpl->tpl_vars['feature']->value['feature_type'],array(smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX"),smarty_modifier_enum("ProductFeatures::EXTENDED"),smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'var', true);
$_smarty_tpl->tpl_vars['var']->iteration = 0;
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
$_smarty_tpl->tpl_vars['var']->iteration++;
$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration === $_smarty_tpl->tpl_vars['var']->total;
$__foreach_var_64_saved = $_smarty_tpl->tpl_vars['var'];
if ($_smarty_tpl->tpl_vars['var']->value['selected']) {
$_smarty_tpl->_assignInScope('filter_value', $_smarty_tpl->tpl_vars['var']->value['variant_id']);
if ($_smarty_tpl->tpl_vars['feature']->value['filter_style'] == "slider") {
$_smarty_tpl->_assignInScope('filter_value', ((string)(intval($_smarty_tpl->tpl_vars['var']->value['value_int'])))."-".((string)(intval($_smarty_tpl->tpl_vars['var']->value['value_int']))));
}
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/ab__similar_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->tpl_vars['feature']->value,'variant_id'=>$_smarty_tpl->tpl_vars['filter_value']->value), 0, true);
if ($_smarty_tpl->tpl_vars['feature']->value['filter_style'] == smarty_modifier_enum("ProductFilterStyles::COLOR") && $_smarty_tpl->tpl_vars['var']->value['color']) {?><div class="abt__ut2_color_mark" style="background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['color'], ENT_QUOTES, 'UTF-8');?>
;width:15px;height:15px;display:inline-block;margin-top:2px;border-radius: 50%;<?php if ($_smarty_tpl->tpl_vars['var']->value['color'] == "#ffffff") {?>border: 1px solid<?php }?>"></div>&nbsp;<?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__ut2_features:variant"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__ut2_features:variant"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__ut2_features:variant"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
break 1;
}
$_smarty_tpl->tpl_vars['var'] = $__foreach_var_64_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {
echo htmlspecialchars((string) (($tmp = floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']) ?? null)===null||$tmp==='' ? "-" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['feature']->value['value'] ?? null)===null||$tmp==='' ? "-" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['feature']->value['suffix'] && !$_smarty_tpl->tpl_vars['hide_affix']->value) {
if (!empty($_smarty_tpl->tpl_vars['feature']->value['yml2_variants_unit'])) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['yml2_variants_unit'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?><span class="ty-product-feature__suffix"> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::GROUP") && $_smarty_tpl->tpl_vars['feature']->value['subfeatures']) {?>
        <div class="ty-product-feature-group">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'tooltip'=>$_smarty_tpl->tpl_vars['feature']->value['full_description'],'text'=>$_smarty_tpl->tpl_vars['feature']->value['description']), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_features'=>$_smarty_tpl->tpl_vars['feature']->value['subfeatures']), 0, true);
?>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_features.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_features.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] != smarty_modifier_enum("ProductFeatures::GROUP")) {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-help-circle",'assign'=>'link_text_icon'),$_smarty_tpl);?>

        <div class="ty-product-feature">
        <div class="ty-product-feature__label"><span><?php echo $_smarty_tpl->tpl_vars['feature']->value['description'];?>
</span><?php if (smarty_modifier_trim($_smarty_tpl->tpl_vars['feature']->value['full_description'])) {
$_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link_meta'=>"ty-icon ty-icon-help-circle cm-dialog-auto-size ut2-append-body",'id'=>"ut2_features_dialog_".((string)$_smarty_tpl->tpl_vars['feature']->value['feature_id']),'text'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'content'=>$_smarty_tpl->tpl_vars['feature']->value['full_description'],'show_brackets'=>false), 0, true);
}?></div>

        <?php $_smarty_tpl->_assignInScope('hide_affix', $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX"));?>

        <div class="ty-product-feature__value"><?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix'] && !$_smarty_tpl->tpl_vars['hide_affix']->value) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX")) {
if ($_smarty_tpl->tpl_vars['feature']->value['value'] === smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/ab__similar_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->tpl_vars['feature']->value,'variant_id'=>"Y"), 0, true);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__ut2_features:variant"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__ut2_features:variant"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->__("yes");
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__ut2_features:variant"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
echo $_smarty_tpl->__("no");
}
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['feature']->value['value_int'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX") && $_smarty_tpl->tpl_vars['feature']->value['variants']) {?><ul class="ty-product-feature__multiple <?php if ($_smarty_tpl->tpl_vars['ab__search_similar_in_category']->value && $_smarty_tpl->tpl_vars['feature']->value['filter_id']) {?>abt__ut2_checkboxes<?php }?>"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'var', true);
$_smarty_tpl->tpl_vars['var']->iteration = 0;
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
$_smarty_tpl->tpl_vars['var']->iteration++;
$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration === $_smarty_tpl->tpl_vars['var']->total;
$__foreach_var_67_saved = $_smarty_tpl->tpl_vars['var'];
$_smarty_tpl->_assignInScope('hide_variant_affix', !$_smarty_tpl->tpl_vars['hide_affix']->value);
if ($_smarty_tpl->tpl_vars['var']->value['selected']) {?><li class="ty-product-feature__multiple-item"><?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/ab__similar_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->tpl_vars['feature']->value,'variant_id'=>$_smarty_tpl->tpl_vars['var']->value['variant_id']), 0, true);
if (!$_smarty_tpl->tpl_vars['hide_variant_affix']->value) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__ut2_features:variant"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__ut2_features:variant"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__ut2_features:variant"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if (!$_smarty_tpl->tpl_vars['hide_variant_affix']->value) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php if (!$_smarty_tpl->tpl_vars['var']->last && !$_smarty_tpl->tpl_vars['ab__enable_similar_filter_show']->value) {?><em>,</em><?php }
}?></li><?php }
$_smarty_tpl->tpl_vars['var'] = $__foreach_var_67_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php } elseif (in_array($_smarty_tpl->tpl_vars['feature']->value['feature_type'],array(smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX"),smarty_modifier_enum("ProductFeatures::EXTENDED"),smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'var', true);
$_smarty_tpl->tpl_vars['var']->iteration = 0;
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
$_smarty_tpl->tpl_vars['var']->iteration++;
$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration === $_smarty_tpl->tpl_vars['var']->total;
$__foreach_var_68_saved = $_smarty_tpl->tpl_vars['var'];
if ($_smarty_tpl->tpl_vars['var']->value['selected']) {
$_smarty_tpl->_assignInScope('filter_value', $_smarty_tpl->tpl_vars['var']->value['variant_id']);
if ($_smarty_tpl->tpl_vars['feature']->value['filter_style'] == "slider") {
$_smarty_tpl->_assignInScope('filter_value', ((string)(intval($_smarty_tpl->tpl_vars['var']->value['value_int'])))."-".((string)(intval($_smarty_tpl->tpl_vars['var']->value['value_int']))));
}
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/ab__similar_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->tpl_vars['feature']->value,'variant_id'=>$_smarty_tpl->tpl_vars['filter_value']->value), 0, true);
if ($_smarty_tpl->tpl_vars['feature']->value['filter_style'] == smarty_modifier_enum("ProductFilterStyles::COLOR") && $_smarty_tpl->tpl_vars['var']->value['color']) {?><div class="abt__ut2_color_mark" style="background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['color'], ENT_QUOTES, 'UTF-8');?>
;width:15px;height:15px;display:inline-block;margin-top:2px;border-radius: 50%;<?php if ($_smarty_tpl->tpl_vars['var']->value['color'] == "#ffffff") {?>border: 1px solid<?php }?>"></div>&nbsp;<?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__ut2_features:variant"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__ut2_features:variant"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['variant'], ENT_QUOTES, 'UTF-8');
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__ut2_features:variant"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
break 1;
}
$_smarty_tpl->tpl_vars['var'] = $__foreach_var_68_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {
echo htmlspecialchars((string) (($tmp = floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']) ?? null)===null||$tmp==='' ? "-" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['feature']->value['value'] ?? null)===null||$tmp==='' ? "-" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['feature']->value['suffix'] && !$_smarty_tpl->tpl_vars['hide_affix']->value) {
if (!empty($_smarty_tpl->tpl_vars['feature']->value['yml2_variants_unit'])) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['yml2_variants_unit'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?><span class="ty-product-feature__suffix"> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::GROUP") && $_smarty_tpl->tpl_vars['feature']->value['subfeatures']) {?>
        <div class="ty-product-feature-group">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'tooltip'=>$_smarty_tpl->tpl_vars['feature']->value['full_description'],'text'=>$_smarty_tpl->tpl_vars['feature']->value['description']), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_features'=>$_smarty_tpl->tpl_vars['feature']->value['subfeatures']), 0, true);
?>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
