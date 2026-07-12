<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:02
  from 'file:views/products/components/product_features.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1eea038d6_14843005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e47dcc5f874ace9f6a430e1448a0a7e3ee93a5b0' => 
    array (
      0 => 'views/products/components/product_features.tpl',
      1 => 1767831044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
    'tygh:views/products/components/ab__similar_filter.tpl' => 6,
    'tygh:common/image.tpl' => 2,
    'tygh:common/subheader.tpl' => 2,
    'tygh:views/products/components/product_features.tpl' => 2,
  ),
))) {
function content_69ada1eea038d6_14843005 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/products/components';
\Tygh\Languages\Helper::preloadLangVars(array('yes','no','yes','no'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_features'), 'feature');
$foreach60DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach60DoElse = false;
?>
    <?php if ($_smarty_tpl->getValue('feature')['feature_type'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::GROUP")) {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-help-circle",'assign'=>'link_text_icon'), $_smarty_tpl);?>

        <div class="ty-product-feature">
        <div class="ty-product-feature__label"><span class="ut2-product-feature__label__name"><?php echo $_smarty_tpl->getValue('feature')['description'];?>
</span><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('feature')['full_description'])) {
$_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link_meta'=>"ty-icon ty-icon-help-circle cm-dialog-auto-size ut2-append-body",'id'=>"ut2_features_dialog_".((string)$_smarty_tpl->getValue('feature')['feature_id']),'text'=>$_smarty_tpl->getValue('feature')['description'],'content'=>$_smarty_tpl->getValue('feature')['full_description'],'show_brackets'=>false), (int) 0, $_smarty_current_dir);
}?></div>
        <?php $_smarty_tpl->assign('hide_affix', $_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::MULTIPLE_CHECKBOX"), false, NULL);?>
        <div class="ty-product-feature__value"><?php if ($_smarty_tpl->getValue('feature')['prefix'] && !$_smarty_tpl->getValue('hide_affix')) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::SINGLE_CHECKBOX")) {
if ($_smarty_tpl->getValue('feature')['value'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->renderSubTemplate("tygh:views/products/components/ab__similar_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->getValue('feature'),'variant_id'=>"Y"), (int) 0, $_smarty_current_dir);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_features:variant"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("yes", [], $_smarty_tpl->getSmarty()->getLanguage());
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_features:variant"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no", [], $_smarty_tpl->getSmarty()->getLanguage());
}
} elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::DATE")) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('feature')['value_int'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::MULTIPLE_CHECKBOX") && $_smarty_tpl->getValue('feature')['variants']) {?><ul class="ty-product-feature__multiple <?php if ($_smarty_tpl->getValue('ab__search_similar_in_category') && $_smarty_tpl->getValue('feature')['filter_id']) {?>abt__ut2_checkboxes<?php }?>"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'var', true);
$_smarty_tpl->getVariable('var')->iteration = 0;
$foreach61DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach61DoElse = false;
$_smarty_tpl->getVariable('var')->iteration++;
$_smarty_tpl->getVariable('var')->last = $_smarty_tpl->getVariable('var')->iteration === $_smarty_tpl->getVariable('var')->total;
$foreach61Backup = clone $_smarty_tpl->getVariable('var');
$_smarty_tpl->assign('hide_variant_affix', !$_smarty_tpl->getValue('hide_affix'), false, NULL);
if ($_smarty_tpl->getValue('var')['selected']) {?><li class="ty-product-feature__multiple-item"><?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/ab__similar_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->getValue('feature'),'variant_id'=>$_smarty_tpl->getValue('var')['variant_id']), (int) 0, $_smarty_current_dir);
if (!$_smarty_tpl->getValue('hide_variant_affix')) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_features:variant"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['variant']), ENT_QUOTES, 'UTF-8');
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_features:variant"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if (!$_smarty_tpl->getValue('hide_variant_affix')) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span><?php if (!$_smarty_tpl->getVariable('var')->last && !$_smarty_tpl->getValue('ab__enable_similar_filter_show')) {?><em>,</em><?php }
}?></li><?php }
$_smarty_tpl->setVariable('var', $foreach61Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('feature')['feature_type'],array($_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::TEXT_SELECTBOX"),$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::EXTENDED"),$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::NUMBER_SELECTBOX")))) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'var', true);
$_smarty_tpl->getVariable('var')->iteration = 0;
$foreach62DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach62DoElse = false;
$_smarty_tpl->getVariable('var')->iteration++;
$_smarty_tpl->getVariable('var')->last = $_smarty_tpl->getVariable('var')->iteration === $_smarty_tpl->getVariable('var')->total;
$foreach62Backup = clone $_smarty_tpl->getVariable('var');
if ($_smarty_tpl->getValue('var')['selected']) {
$_smarty_tpl->assign('filter_value', $_smarty_tpl->getValue('var')['variant_id'], false, NULL);
if ($_smarty_tpl->getValue('feature')['filter_style'] == "slider") {
$_smarty_tpl->assign('filter_value', ((string)($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('var')['value_int'])))."-".((string)($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('var')['value_int']))), false, NULL);
}
$_smarty_tpl->renderSubTemplate("tygh:views/products/components/ab__similar_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->getValue('feature'),'variant_id'=>$_smarty_tpl->getValue('filter_value')), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('feature')['filter_style'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFilterStyles::COLOR") && $_smarty_tpl->getValue('var')['color']) {
if ($_smarty_tpl->getValue('feature')['filter_style'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFilterStyles::COLOR") && $_smarty_tpl->getValue('var')['color']) {
$_smarty_tpl->assign('color1', (($tmp = $_smarty_tpl->getValue('var')['color'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('white_color') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('color2', ($_smarty_tpl->getValue('var')['abt__ut2_color_style'] === 'multicolor') ? ((($tmp = $_smarty_tpl->getValue('var')['abt__ut2_multicolor'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('color1') ?? null : $tmp)) : $_smarty_tpl->getValue('color1'), false, NULL);?><div class="ut2-lv__color-variant" style="width: 20px;background: linear-gradient(120deg,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color1')), ENT_QUOTES, 'UTF-8');?>
 50%, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color2')), ENT_QUOTES, 'UTF-8');?>
 51%);<?php if ($_smarty_tpl->getValue('color1') == "#ffffff" || $_smarty_tpl->getValue('color2') == "#ffffff") {?>border: 1px solid<?php }?>"><?php if ($_smarty_tpl->getValue('var')['abt__ut2_color_style'] === 'thumbnail') {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('var')['image_pair'],'image_width'=>64,'height'=>64,'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
}?></div>&nbsp;<?php }
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_features:variant"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['variant']), ENT_QUOTES, 'UTF-8');
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_features:variant"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
break 1;
}
$_smarty_tpl->setVariable('var', $foreach62Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::NUMBER_FIELD")) {
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('feature')['value_int']) ?? null)===null||$tmp==='' ? "-" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('feature')['value'] ?? null)===null||$tmp==='' ? "-" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('feature')['suffix'] && !$_smarty_tpl->getValue('hide_affix')) {
if (!( !true || empty($_smarty_tpl->getValue('feature')['yml2_variants_unit']))) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['yml2_variants_unit']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?><span class="ty-product-feature__suffix"> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div>
        </div>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_features'), 'feature');
$foreach63DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach63DoElse = false;
?>
    <?php if ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::GROUP") && $_smarty_tpl->getValue('feature')['subfeatures']) {?>
        <div class="ty-product-feature-group">
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getValue('feature')['description'],'tooltip'=>$_smarty_tpl->getValue('feature')['full_description'],'text'=>$_smarty_tpl->getValue('feature')['description']), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_features'=>$_smarty_tpl->getValue('feature')['subfeatures']), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="file:views/products/components/product_features.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"file:views/products/components/product_features.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_features'), 'feature');
$foreach64DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach64DoElse = false;
?>
    <?php if ($_smarty_tpl->getValue('feature')['feature_type'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::GROUP")) {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-help-circle",'assign'=>'link_text_icon'), $_smarty_tpl);?>

        <div class="ty-product-feature">
        <div class="ty-product-feature__label"><span class="ut2-product-feature__label__name"><?php echo $_smarty_tpl->getValue('feature')['description'];?>
</span><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('feature')['full_description'])) {
$_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link_meta'=>"ty-icon ty-icon-help-circle cm-dialog-auto-size ut2-append-body",'id'=>"ut2_features_dialog_".((string)$_smarty_tpl->getValue('feature')['feature_id']),'text'=>$_smarty_tpl->getValue('feature')['description'],'content'=>$_smarty_tpl->getValue('feature')['full_description'],'show_brackets'=>false), (int) 0, $_smarty_current_dir);
}?></div>
        <?php $_smarty_tpl->assign('hide_affix', $_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::MULTIPLE_CHECKBOX"), false, NULL);?>
        <div class="ty-product-feature__value"><?php if ($_smarty_tpl->getValue('feature')['prefix'] && !$_smarty_tpl->getValue('hide_affix')) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::SINGLE_CHECKBOX")) {
if ($_smarty_tpl->getValue('feature')['value'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->renderSubTemplate("tygh:views/products/components/ab__similar_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->getValue('feature'),'variant_id'=>"Y"), (int) 0, $_smarty_current_dir);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_features:variant"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("yes", [], $_smarty_tpl->getSmarty()->getLanguage());
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_features:variant"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no", [], $_smarty_tpl->getSmarty()->getLanguage());
}
} elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::DATE")) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('feature')['value_int'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::MULTIPLE_CHECKBOX") && $_smarty_tpl->getValue('feature')['variants']) {?><ul class="ty-product-feature__multiple <?php if ($_smarty_tpl->getValue('ab__search_similar_in_category') && $_smarty_tpl->getValue('feature')['filter_id']) {?>abt__ut2_checkboxes<?php }?>"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'var', true);
$_smarty_tpl->getVariable('var')->iteration = 0;
$foreach65DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach65DoElse = false;
$_smarty_tpl->getVariable('var')->iteration++;
$_smarty_tpl->getVariable('var')->last = $_smarty_tpl->getVariable('var')->iteration === $_smarty_tpl->getVariable('var')->total;
$foreach65Backup = clone $_smarty_tpl->getVariable('var');
$_smarty_tpl->assign('hide_variant_affix', !$_smarty_tpl->getValue('hide_affix'), false, NULL);
if ($_smarty_tpl->getValue('var')['selected']) {?><li class="ty-product-feature__multiple-item"><?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/ab__similar_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->getValue('feature'),'variant_id'=>$_smarty_tpl->getValue('var')['variant_id']), (int) 0, $_smarty_current_dir);
if (!$_smarty_tpl->getValue('hide_variant_affix')) {?><span class="ty-product-feature__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_features:variant"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['variant']), ENT_QUOTES, 'UTF-8');
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_features:variant"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if (!$_smarty_tpl->getValue('hide_variant_affix')) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span><?php if (!$_smarty_tpl->getVariable('var')->last && !$_smarty_tpl->getValue('ab__enable_similar_filter_show')) {?><em>,</em><?php }
}?></li><?php }
$_smarty_tpl->setVariable('var', $foreach65Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></ul><?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('feature')['feature_type'],array($_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::TEXT_SELECTBOX"),$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::EXTENDED"),$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::NUMBER_SELECTBOX")))) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'var', true);
$_smarty_tpl->getVariable('var')->iteration = 0;
$foreach66DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('var')->value) {
$foreach66DoElse = false;
$_smarty_tpl->getVariable('var')->iteration++;
$_smarty_tpl->getVariable('var')->last = $_smarty_tpl->getVariable('var')->iteration === $_smarty_tpl->getVariable('var')->total;
$foreach66Backup = clone $_smarty_tpl->getVariable('var');
if ($_smarty_tpl->getValue('var')['selected']) {
$_smarty_tpl->assign('filter_value', $_smarty_tpl->getValue('var')['variant_id'], false, NULL);
if ($_smarty_tpl->getValue('feature')['filter_style'] == "slider") {
$_smarty_tpl->assign('filter_value', ((string)($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('var')['value_int'])))."-".((string)($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('var')['value_int']))), false, NULL);
}
$_smarty_tpl->renderSubTemplate("tygh:views/products/components/ab__similar_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->getValue('feature'),'variant_id'=>$_smarty_tpl->getValue('filter_value')), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('feature')['filter_style'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFilterStyles::COLOR") && $_smarty_tpl->getValue('var')['color']) {
if ($_smarty_tpl->getValue('feature')['filter_style'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFilterStyles::COLOR") && $_smarty_tpl->getValue('var')['color']) {
$_smarty_tpl->assign('color1', (($tmp = $_smarty_tpl->getValue('var')['color'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('white_color') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('color2', ($_smarty_tpl->getValue('var')['abt__ut2_color_style'] === 'multicolor') ? ((($tmp = $_smarty_tpl->getValue('var')['abt__ut2_multicolor'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('color1') ?? null : $tmp)) : $_smarty_tpl->getValue('color1'), false, NULL);?><div class="ut2-lv__color-variant" style="width: 20px;background: linear-gradient(120deg,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color1')), ENT_QUOTES, 'UTF-8');?>
 50%, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color2')), ENT_QUOTES, 'UTF-8');?>
 51%);<?php if ($_smarty_tpl->getValue('color1') == "#ffffff" || $_smarty_tpl->getValue('color2') == "#ffffff") {?>border: 1px solid<?php }?>"><?php if ($_smarty_tpl->getValue('var')['abt__ut2_color_style'] === 'thumbnail') {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('var')['image_pair'],'image_width'=>64,'height'=>64,'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
}?></div>&nbsp;<?php }
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_features:variant"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getValue('var')['variant']), ENT_QUOTES, 'UTF-8');
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_features:variant"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
break 1;
}
$_smarty_tpl->setVariable('var', $foreach66Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::NUMBER_FIELD")) {
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('feature')['value_int']) ?? null)===null||$tmp==='' ? "-" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('feature')['value'] ?? null)===null||$tmp==='' ? "-" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('feature')['suffix'] && !$_smarty_tpl->getValue('hide_affix')) {
if (!( !true || empty($_smarty_tpl->getValue('feature')['yml2_variants_unit']))) {?><span class="ty-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['yml2_variants_unit']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?><span class="ty-product-feature__suffix"> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></div>
        </div>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_features'), 'feature');
$foreach67DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach67DoElse = false;
?>
    <?php if ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::GROUP") && $_smarty_tpl->getValue('feature')['subfeatures']) {?>
        <div class="ty-product-feature-group">
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getValue('feature')['description'],'tooltip'=>$_smarty_tpl->getValue('feature')['full_description'],'text'=>$_smarty_tpl->getValue('feature')['description']), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_features'=>$_smarty_tpl->getValue('feature')['subfeatures']), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
