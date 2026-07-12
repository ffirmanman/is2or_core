<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:views/products/components/product_features_short_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a00622295_00174570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec604bded7c83a9b61f020b2517fdf9c9e128b15' => 
    array (
      0 => 'views/products/components/product_features_short_list.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 4,
  ),
))) {
function content_69fb4a00622295_00174570 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/products/components';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'feature_value' => 
  array (
    'compiled_filepath' => '/var/www/is2or/var/cache/templates/abt__unitheme2/ec604bded7c83a9b61f020b2517fdf9c9e128b15_2.tygh_product_features_short_list.tpl.php',
    'uid' => 'ec604bded7c83a9b61f020b2517fdf9c9e128b15',
    'call_name' => 'smarty_template_function_feature_value_130021229369fb4a005b71c6_15092066',
  ),
));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('image_size', (($tmp = $_smarty_tpl->getValue('image_size') ?? null)===null||$tmp==='' ? 80 ?? null : $tmp), false, NULL);?>


<?php if ($_smarty_tpl->getValue('features')) {?>
    <?php if (!$_smarty_tpl->getValue('no_container')) {?><div class="ut2-features-list"><?php }
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('features'), 'feature', false, NULL, 'features_list', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$foreach119DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach119DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['total'];
if ($_smarty_tpl->getValue('feature_image')) {
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('feature')['variant_id'], false, NULL);
if ($_smarty_tpl->getValue('runtime')['controller'] == "products" && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['brand_link_behavior'] == "to_brand_page") {
$_smarty_tpl->assign('href', "product_features.view&variant_id=".((string)$_smarty_tpl->getValue('feature')['variant_id']), false, NULL);
} elseif ($_smarty_tpl->getValue('feature')['features_hash']) {
$_smarty_tpl->assign('href', "categories.view?category_id=".((string)$_smarty_tpl->getValue('product')['main_category'])."&features_hash=".((string)$_smarty_tpl->getValue('feature')['features_hash']), false, NULL);
}
if ($_smarty_tpl->getValue('href')) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('href'))), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['description']), ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['variant']), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->getValue('feature')['variants'][$_smarty_tpl->getValue('feature')['variant_id']]['image_pairs']) {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('image_size'),'images'=>$_smarty_tpl->getValue('feature')['variants'][$_smarty_tpl->getValue('feature')['variant_id']]['image_pairs'],'no_ids'=>true), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('feature')['variants'][$_smarty_tpl->getValue('feature')['variant_id']]['image_pair']) {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('image_size'),'images'=>$_smarty_tpl->getValue('feature')['variants'][$_smarty_tpl->getValue('feature')['variant_id']]['image_pair'],'no_ids'=>true), (int) 0, $_smarty_current_dir);
}
if ($_smarty_tpl->getValue('feature')['features_hash'] || ($_smarty_tpl->getValue('runtime')['controller'] == "products" && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['brand_link_behavior'] == "to_brand_page")) {?></a><?php }
} else {
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'feature_value', array('feature'=>$_smarty_tpl->getValue('feature'),'hide_name'=>$_smarty_tpl->getValue('hide_name')), true);
if (!($_smarty_tpl->getValue('__smarty_foreach_features_list')['last'] ?? null)) {
}
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if (!$_smarty_tpl->getValue('no_container')) {?></div><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_features_short_list.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/products/components/product_features_short_list.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('image_size', (($tmp = $_smarty_tpl->getValue('image_size') ?? null)===null||$tmp==='' ? 80 ?? null : $tmp), false, NULL);?>


<?php if ($_smarty_tpl->getValue('features')) {?>
    <?php if (!$_smarty_tpl->getValue('no_container')) {?><div class="ut2-features-list"><?php }
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('features'), 'feature', false, NULL, 'features_list', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$foreach121DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach121DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['total'];
if ($_smarty_tpl->getValue('feature_image')) {
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('feature')['variant_id'], false, NULL);
if ($_smarty_tpl->getValue('runtime')['controller'] == "products" && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['brand_link_behavior'] == "to_brand_page") {
$_smarty_tpl->assign('href', "product_features.view&variant_id=".((string)$_smarty_tpl->getValue('feature')['variant_id']), false, NULL);
} elseif ($_smarty_tpl->getValue('feature')['features_hash']) {
$_smarty_tpl->assign('href', "categories.view?category_id=".((string)$_smarty_tpl->getValue('product')['main_category'])."&features_hash=".((string)$_smarty_tpl->getValue('feature')['features_hash']), false, NULL);
}
if ($_smarty_tpl->getValue('href')) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('href'))), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['description']), ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['variant']), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->getValue('feature')['variants'][$_smarty_tpl->getValue('feature')['variant_id']]['image_pairs']) {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('image_size'),'images'=>$_smarty_tpl->getValue('feature')['variants'][$_smarty_tpl->getValue('feature')['variant_id']]['image_pairs'],'no_ids'=>true), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('feature')['variants'][$_smarty_tpl->getValue('feature')['variant_id']]['image_pair']) {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('image_size'),'images'=>$_smarty_tpl->getValue('feature')['variants'][$_smarty_tpl->getValue('feature')['variant_id']]['image_pair'],'no_ids'=>true), (int) 0, $_smarty_current_dir);
}
if ($_smarty_tpl->getValue('feature')['features_hash'] || ($_smarty_tpl->getValue('runtime')['controller'] == "products" && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['brand_link_behavior'] == "to_brand_page")) {?></a><?php }
} else {
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'feature_value', array('feature'=>$_smarty_tpl->getValue('feature'),'hide_name'=>$_smarty_tpl->getValue('hide_name')), true);
if (!($_smarty_tpl->getValue('__smarty_foreach_features_list')['last'] ?? null)) {
}
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if (!$_smarty_tpl->getValue('no_container')) {?></div><?php }
}
}
}
\Tygh\Languages\Helper::preloadLangVars(array('brand','brand'));
/* smarty_template_function_feature_value_130021229369fb4a005b71c6_15092066 */
if (!function_exists('smarty_template_function_feature_value_130021229369fb4a005b71c6_15092066')) {
function smarty_template_function_feature_value_130021229369fb4a005b71c6_15092066(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/products/components';
$params = array_merge(array('name'=>"feature_value"), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <?php if ($_smarty_tpl->getValue('feature')['features_hash'] && $_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::EXTENDED")) {
if ($_smarty_tpl->getValue('runtime')['controller'] == "products" && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['brand_link_behavior'] == "to_brand_page") {
$_smarty_tpl->assign('href', "product_features.view&variant_id=".((string)$_smarty_tpl->getValue('feature')['variant_id']), false, NULL);
} else {
$_smarty_tpl->assign('href', "categories.view?category_id=".((string)$_smarty_tpl->getValue('product')['main_category'])."&features_hash=".((string)$_smarty_tpl->getValue('feature')['features_hash']), false, NULL);
}?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('href'))), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::DATE")) {?><span class="ty-control-group"><span class="ty-product-feature__label"><em><?php echo $_smarty_tpl->getValue('feature')['description'];?>
</em></span><span><em><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('feature')['value_int'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('feature')['suffix']) {?> <span class="ut2-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></em></span><?php } elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::MULTIPLE_CHECKBOX")) {?><span class="ty-control-group f-variant"><span class="ty-product-feature__label"><em><?php echo $_smarty_tpl->getValue('feature')['description'];?>
</em></span><span><em><span class="ut2-product-feature__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'fvariant', false, NULL, 'ffev', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$foreach118DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('fvariant')->value) {
$foreach118DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['total'];
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('fvariant')['variant'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('fvariant')['value'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
if (!($_smarty_tpl->getValue('__smarty_foreach_ffev')['last'] ?? null)) {?>, <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> <span class="ut2-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span></em></span></span><?php } elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::TEXT_SELECTBOX") || $_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::NUMBER_SELECTBOX") || $_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::EXTENDED")) {
if (!$_smarty_tpl->getValue('hide_name')) {?><span class="ty-control-group"><span class="ty-product-feature__label"><em><?php echo $_smarty_tpl->getValue('feature')['description'];?>
</em></span><span><em><?php if ($_smarty_tpl->getValue('feature')['prefix']) {?><span class="ut2-product-feature__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('feature')['variant'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('feature')['value'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('feature')['suffix']) {?> <span class="ut2-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></em></span></span><?php } else {
if (!$_smarty_tpl->getValue('hide_label')) {?><span><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("brand", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: </span><em><?php }
if ($_smarty_tpl->getValue('feature')['prefix']) {?><span class="ut2-product-feature__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('feature')['variants'][$_smarty_tpl->getValue('feature')['variant_id']]['variant'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('feature')['value'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('feature')['suffix']) {?> <span class="ut2-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
if (!$_smarty_tpl->getValue('hide_label')) {?></em></span><?php }
}
} elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::SINGLE_CHECKBOX")) {?><span class="ty-control-group"><span class="ty-product-feature__label"><em><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['description']), ENT_QUOTES, 'UTF-8');?>
</em></span><span><em><i class="ty-compare-checkbox__icon ty-icon-ok"></i></em></span></span><?php } elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::NUMBER_FIELD")) {?><span class="ty-control-group"><span class="ty-product-feature__label"><em><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['description']), ENT_QUOTES, 'UTF-8');?>
</em></span><span><em><?php if ($_smarty_tpl->getValue('feature')['prefix']) {?><span class="ut2-product-feature__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('feature')['value_int'])), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('feature')['suffix']) {?> <span class="ut2-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></em></span></span><?php } else { ?><span class="ty-control-group"><span class="ty-product-feature__label"><em><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['description']), ENT_QUOTES, 'UTF-8');?>
</em></span><span><em><?php if ($_smarty_tpl->getValue('feature')['prefix']) {?><span class="ut2-product-feature__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['value']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('feature')['suffix']) {?> <span class="ut2-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></em></span></span><?php }
if ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::EXTENDED") && $_smarty_tpl->getValue('feature')['features_hash']) {?></a><?php }
}}
/*/ smarty_template_function_feature_value_130021229369fb4a005b71c6_15092066 */
/* smarty_template_function_feature_value_130021229369fb4a005b71c6_15092066 */
if (!function_exists('smarty_template_function_feature_value_130021229369fb4a005b71c6_15092066')) {
function smarty_template_function_feature_value_130021229369fb4a005b71c6_15092066(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/products/components';
$params = array_merge(array('name'=>"feature_value"), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <?php if ($_smarty_tpl->getValue('feature')['features_hash'] && $_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::EXTENDED")) {
if ($_smarty_tpl->getValue('runtime')['controller'] == "products" && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['brand_link_behavior'] == "to_brand_page") {
$_smarty_tpl->assign('href', "product_features.view&variant_id=".((string)$_smarty_tpl->getValue('feature')['variant_id']), false, NULL);
} else {
$_smarty_tpl->assign('href', "categories.view?category_id=".((string)$_smarty_tpl->getValue('product')['main_category'])."&features_hash=".((string)$_smarty_tpl->getValue('feature')['features_hash']), false, NULL);
}?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('href'))), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::DATE")) {?><span class="ty-control-group"><span class="ty-product-feature__label"><em><?php echo $_smarty_tpl->getValue('feature')['description'];?>
</em></span><span><em><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('feature')['value_int'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']))), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('feature')['suffix']) {?> <span class="ut2-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></em></span><?php } elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::MULTIPLE_CHECKBOX")) {?><span class="ty-control-group f-variant"><span class="ty-product-feature__label"><em><?php echo $_smarty_tpl->getValue('feature')['description'];?>
</em></span><span><em><span class="ut2-product-feature__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'fvariant', false, NULL, 'ffev', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$foreach120DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('fvariant')->value) {
$foreach120DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['total'];
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('fvariant')['variant'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('fvariant')['value'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
if (!($_smarty_tpl->getValue('__smarty_foreach_ffev')['last'] ?? null)) {?>, <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> <span class="ut2-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span></em></span></span><?php } elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::TEXT_SELECTBOX") || $_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::NUMBER_SELECTBOX") || $_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::EXTENDED")) {
if (!$_smarty_tpl->getValue('hide_name')) {?><span class="ty-control-group"><span class="ty-product-feature__label"><em><?php echo $_smarty_tpl->getValue('feature')['description'];?>
</em></span><span><em><?php if ($_smarty_tpl->getValue('feature')['prefix']) {?><span class="ut2-product-feature__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('feature')['variant'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('feature')['value'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('feature')['suffix']) {?> <span class="ut2-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></em></span></span><?php } else {
if (!$_smarty_tpl->getValue('hide_label')) {?><span><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("brand", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: </span><em><?php }
if ($_smarty_tpl->getValue('feature')['prefix']) {?><span class="ut2-product-feature__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('feature')['variants'][$_smarty_tpl->getValue('feature')['variant_id']]['variant'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('feature')['value'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('feature')['suffix']) {?> <span class="ut2-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
if (!$_smarty_tpl->getValue('hide_label')) {?></em></span><?php }
}
} elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::SINGLE_CHECKBOX")) {?><span class="ty-control-group"><span class="ty-product-feature__label"><em><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['description']), ENT_QUOTES, 'UTF-8');?>
</em></span><span><em><i class="ty-compare-checkbox__icon ty-icon-ok"></i></em></span></span><?php } elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::NUMBER_FIELD")) {?><span class="ty-control-group"><span class="ty-product-feature__label"><em><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['description']), ENT_QUOTES, 'UTF-8');?>
</em></span><span><em><?php if ($_smarty_tpl->getValue('feature')['prefix']) {?><span class="ut2-product-feature__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('feature')['value_int'])), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('feature')['suffix']) {?> <span class="ut2-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></em></span></span><?php } else { ?><span class="ty-control-group"><span class="ty-product-feature__label"><em><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['description']), ENT_QUOTES, 'UTF-8');?>
</em></span><span><em><?php if ($_smarty_tpl->getValue('feature')['prefix']) {?><span class="ut2-product-feature__prefix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['value']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('feature')['suffix']) {?> <span class="ut2-product-feature__suffix"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></em></span></span><?php }
if ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::EXTENDED") && $_smarty_tpl->getValue('feature')['features_hash']) {?></a><?php }
}}
/*/ smarty_template_function_feature_value_130021229369fb4a005b71c6_15092066 */
}
