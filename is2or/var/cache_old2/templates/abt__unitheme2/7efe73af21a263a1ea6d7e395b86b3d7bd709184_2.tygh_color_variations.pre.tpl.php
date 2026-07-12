<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/abt__unitheme2/hooks/products/color_variations.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa9ac9b46_78721157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7efe73af21a263a1ea6d7e395b86b3d7bd709184' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/products/color_variations.pre.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 8,
  ),
))) {
function content_69afafa9ac9b46_78721157 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] == 'color') {?>
    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] != "mobile") {?>
        <?php $_smarty_tpl->assign('limit', 6, false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('limit', 5, false, NULL);?>
    <?php }
} elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] == 'thumbnails') {?>
    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] != "mobile") {?>
        <?php $_smarty_tpl->assign('limit', 5, false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('limit', 4, false, NULL);?>
    <?php }
}?>

<?php $_smarty_tpl->assign('setting_variantions_limit', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['limit'], false, NULL);?>

<?php if ($_smarty_tpl->getValue('setting_variantions_limit') < $_smarty_tpl->getValue('limit')) {?>
    <?php $_smarty_tpl->assign('setting_variantions_limit', $_smarty_tpl->getValue('limit'), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] !== 'dont_display') {
$_tmp_array = $_smarty_tpl->getValue('product') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['variation_features_variants'] = $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_prepare_variation_features_variants')($_smarty_tpl->getValue('product')['variation_features_variants'],$_smarty_tpl->getValue('product')['abt__ut2_features'],$_smarty_tpl->getValue('product')['product_id']);
$_smarty_tpl->assign('product', $_tmp_array, false, NULL);
$_smarty_tpl->assign('show_block', false, false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features_variants'], 'variation_feature');
$foreach68DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variation_feature')->value) {
$foreach68DoElse = false;
if ($_smarty_tpl->getValue('variation_feature')['display_on_catalog'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('variation_feature')['filter_style'] == 'color' && ($_smarty_tpl->getValue('variation_feature')['purpose'] == 'group_variation_catalog_item' || $_smarty_tpl->getValue('variation_feature')['purpose'] == 'group_catalog_item')) {
$_smarty_tpl->assign('show_block', true, false, NULL);
break 1;
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getValue('show_block') && $_smarty_tpl->getValue('product')['variation_features_variants']) {
$_smarty_tpl->assign('show_as_links', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_as_links'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?><div class="ut2-lv__features-item lv-hover-items" data-display="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately']), ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features_variants'], 'variation_feature');
$foreach69DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variation_feature')->value) {
$foreach69DoElse = false;
$_smarty_tpl->assign('display', '', false, NULL);
if ($_smarty_tpl->getValue('variation_feature')['display_on_catalog'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('variation_feature')['filter_style'] == 'color' && ($_smarty_tpl->getValue('variation_feature')['purpose'] == 'group_variation_catalog_item' || $_smarty_tpl->getValue('variation_feature')['purpose'] == 'group_catalog_item')) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('variation_feature')['variants'], 'variant');
$foreach70DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach70DoElse = false;
if ((($_smarty_tpl->getValue('variant')['product_id'] || $_smarty_tpl->getValue('addons')['product_variations']['variations_show_all_possible_feature_variants'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) && $_smarty_tpl->getValue('printed_variations') < $_smarty_tpl->getValue('setting_variantions_limit'))) {
if ($_smarty_tpl->getValue('printed_variations') >= $_smarty_tpl->getValue('limit')) {
$_smarty_tpl->assign('display', 'hidden', false, NULL);
}
$_smarty_tpl->assign('active_class', ($_smarty_tpl->getValue('variant')['active']) ? "active" : '', false, NULL);
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] == 'color') {
$_smarty_tpl->assign('color1', (($tmp = $_smarty_tpl->getValue('variant')['color'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('white_color') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('color2', ($_smarty_tpl->getValue('variant')['abt__ut2_color_style'] === 'multicolor') ? ((($tmp = $_smarty_tpl->getValue('variant')['abt__ut2_multicolor'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('color1') ?? null : $tmp)) : $_smarty_tpl->getValue('color1'), false, NULL);
if ($_smarty_tpl->getValue('variant')['abt__ut2_color_style'] == 'thumbnail') {
if ($_smarty_tpl->getValue('show_as_links') && $_smarty_tpl->getValue('variant')['product_id']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('variant')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"data-abt--ut2-variations-variant-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['product_id']), ENT_QUOTES, 'UTF-8');?>
"class="ut2-lv__color-variant <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('active_class')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('display')), ENT_QUOTES, 'UTF-8');?>
"style="background: linear-gradient(120deg,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color1')), ENT_QUOTES, 'UTF-8');?>
 50%, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color2')), ENT_QUOTES, 'UTF-8');?>
 51%);"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('variant')['image_pair'],'image_width'=>64,'height'=>64,'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?></a><?php } else { ?><span class="ut2-lv__color-variant <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('active_class')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('display')), ENT_QUOTES, 'UTF-8');?>
"style="background: linear-gradient(120deg,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color1')), ENT_QUOTES, 'UTF-8');?>
 50%, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color2')), ENT_QUOTES, 'UTF-8');?>
 51%);"data-abt--ut2-variations-variant-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['product_id']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('variant')['image_pair'],'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],'height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?></span><?php }
} else {
if ($_smarty_tpl->getValue('show_as_links') && $_smarty_tpl->getValue('variant')['product_id']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('variant')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"data-abt--ut2-variations-variant-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['product_id']), ENT_QUOTES, 'UTF-8');?>
"class="ut2-lv__color-variant <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('active_class')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('display')), ENT_QUOTES, 'UTF-8');?>
"style="background: linear-gradient(120deg,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color1')), ENT_QUOTES, 'UTF-8');?>
 50%, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color2')), ENT_QUOTES, 'UTF-8');?>
 51%);">&nbsp;</a><?php } else { ?><span class="ut2-lv__color-variant <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('active_class')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('display')), ENT_QUOTES, 'UTF-8');?>
"style="background: linear-gradient(120deg,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color1')), ENT_QUOTES, 'UTF-8');?>
 50%, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color2')), ENT_QUOTES, 'UTF-8');?>
 51%);"data-abt--ut2-variations-variant-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['product_id']), ENT_QUOTES, 'UTF-8');?>
">&nbsp;</span><?php }
}
} elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] == 'thumbnails') {
if ($_smarty_tpl->getValue('show_as_links') && $_smarty_tpl->getValue('variant')['product_id']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('variant')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?><span <?php }?>data-abt--ut2-variations-variant-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['product_id']), ENT_QUOTES, 'UTF-8');?>
"class="ty-product-options__image--wrapper <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('display')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('active_class')), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>"image_feature_variant_".((string)$_smarty_tpl->getValue('feature')['feature_id'])."_".((string)$_smarty_tpl->getValue('variant')['variant_id'])."_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-product-options__image",'images'=>$_smarty_tpl->getValue('variant')['product']['main_pair'],'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'],'image_additional_attrs'=>array("width"=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],"height"=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'])), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('show_as_links') && $_smarty_tpl->getValue('variant')['product_id']) {?></a><?php } else { ?></span><?php }
}
}
$_smarty_tpl->assign('printed_variations', $_smarty_tpl->getValue('printed_variations')+1, false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('variation_feature')['variants']) > $_smarty_tpl->getValue('limit')) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('variation_feature')['variants']) > $_smarty_tpl->getValue('setting_variantions_limit')) {
$_smarty_tpl->assign('count_more', $_smarty_tpl->getValue('setting_variantions_limit')-$_smarty_tpl->getValue('limit'), false, NULL);
} else {
$_smarty_tpl->assign('count_more', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('variation_feature')['variants'])-$_smarty_tpl->getValue('limit'), false, NULL);
}
if ($_smarty_tpl->getValue('count_more') > 0) {?><span class="ut2-lv__more" data-more="+<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('count_more')), ENT_QUOTES, 'UTF-8');?>
"></span><?php }
}
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] === 'color' && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?><div class="ut2-lv__features-item lv-hover-items" data-display="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately']), ENT_QUOTES, 'UTF-8');?>
"></div><?php }
}?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'variant');
$foreach71DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach71DoElse = false;
?>
    <?php if ($_smarty_tpl->getValue('variant')['showed_product_id']) {?>
        <?php $_smarty_tpl->assign('variant_product_id', $_smarty_tpl->getValue('variant')['showed_product_id'], false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('variant_product_id', $_smarty_tpl->getValue('variant')['product']['product_id'], false, NULL);?>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('variant_product_id') && $_smarty_tpl->getValue('variant')['product']['status']) {?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['change_main_image_on_variation_hover'][$_smarty_tpl->getValue('settings')['ab__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <?php if ($_smarty_tpl->getValue('quick_view')) {?>
                <?php $_smarty_tpl->assign('image_width', $_smarty_tpl->getValue('settings')['Thumbnails']['product_quick_view_thumbnail_width'], false, NULL);?>
                <?php $_smarty_tpl->assign('image_height', $_smarty_tpl->getValue('settings')['Thumbnails']['product_quick_view_thumbnail_height'], false, NULL);?>
            <?php } elseif ($_smarty_tpl->getValue('product')['details_layout'] != 'bigpicture_template') {?>
                <?php $_smarty_tpl->assign('image_width', $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_width'], false, NULL);?>
                <?php $_smarty_tpl->assign('image_height', $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_height'], false, NULL);?>
            <?php }?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('variant')['product']['main_pair'],'capture_image'=>true), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <a <?php if ($_smarty_tpl->getValue('variant')['product']['amount'] >= 1 || $_smarty_tpl->getValue('allow_negative_amount') || $_smarty_tpl->getValue('details_page')) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('product_url'),"product_id=".((string)$_smarty_tpl->getValue('variant_product_id'))))), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
           class="ty-product-options__image--wrapper <?php if ($_smarty_tpl->getValue('variant')['product']['abt__ut2_is_in_stock'] < 1 && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['highlight_unavailable_variations'][$_smarty_tpl->getValue('settings')['ab__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>ty-product-options__image--wrapper--disabled<?php }?> <?php if ($_smarty_tpl->getValue('settings')['ab__device'] == 'desktop') {?>cm-tooltip<?php }?> <?php if ($_smarty_tpl->getValue('variant')['variant_id'] == $_smarty_tpl->getValue('feature')['variant_id']) {?>ty-product-options__image--wrapper--active<?php }?> <?php if ($_smarty_tpl->getValue('feature')['purpose'] === $_smarty_tpl->getValue('purpose_create_variations') || $_smarty_tpl->getValue('quick_view') || $_smarty_tpl->getValue('ut2_select_variation')) {?>cm-ajax <?php if (!$_smarty_tpl->getValue('ut2_select_variation')) {?>cm-history <?php }?>cm-ajax-cache<?php }?>" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->getValue('feature')['purpose'] === $_smarty_tpl->getValue('purpose_create_variations') || $_smarty_tpl->getValue('quick_view') || $_smarty_tpl->getValue('ut2_select_variation')) {?>data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                <?php if ($_smarty_tpl->getValue('variant')['variant_id'] != $_smarty_tpl->getValue('feature')['variant_id']) {?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon_image_path'))) {?> data-ca-variation-image="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon_image_path')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon_image_path_hidpi'))) {?> data-ca-variation-image-hidpi="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon_image_path_hidpi')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                <?php }?>
        ></a>
    <?php } elseif ($_smarty_tpl->getValue('show_all_possible_feature_variants')) {?>
        <label class="ty-product-options__radio--label ty-product-options__radio--label--disabled">
            <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span>
            <bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
</bdi>
            <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span>
        </label>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/products/color_variations.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/hooks/products/color_variations.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] == 'color') {?>
    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] != "mobile") {?>
        <?php $_smarty_tpl->assign('limit', 6, false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('limit', 5, false, NULL);?>
    <?php }
} elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] == 'thumbnails') {?>
    <?php if ($_smarty_tpl->getValue('settings')['ab__device'] != "mobile") {?>
        <?php $_smarty_tpl->assign('limit', 5, false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('limit', 4, false, NULL);?>
    <?php }
}?>

<?php $_smarty_tpl->assign('setting_variantions_limit', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['limit'], false, NULL);?>

<?php if ($_smarty_tpl->getValue('setting_variantions_limit') < $_smarty_tpl->getValue('limit')) {?>
    <?php $_smarty_tpl->assign('setting_variantions_limit', $_smarty_tpl->getValue('limit'), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] !== 'dont_display') {
$_tmp_array = $_smarty_tpl->getValue('product') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['variation_features_variants'] = $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_prepare_variation_features_variants')($_smarty_tpl->getValue('product')['variation_features_variants'],$_smarty_tpl->getValue('product')['abt__ut2_features'],$_smarty_tpl->getValue('product')['product_id']);
$_smarty_tpl->assign('product', $_tmp_array, false, NULL);
$_smarty_tpl->assign('show_block', false, false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features_variants'], 'variation_feature');
$foreach72DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variation_feature')->value) {
$foreach72DoElse = false;
if ($_smarty_tpl->getValue('variation_feature')['display_on_catalog'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('variation_feature')['filter_style'] == 'color' && ($_smarty_tpl->getValue('variation_feature')['purpose'] == 'group_variation_catalog_item' || $_smarty_tpl->getValue('variation_feature')['purpose'] == 'group_catalog_item')) {
$_smarty_tpl->assign('show_block', true, false, NULL);
break 1;
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getValue('show_block') && $_smarty_tpl->getValue('product')['variation_features_variants']) {
$_smarty_tpl->assign('show_as_links', $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_as_links'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?><div class="ut2-lv__features-item lv-hover-items" data-display="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately']), ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features_variants'], 'variation_feature');
$foreach73DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variation_feature')->value) {
$foreach73DoElse = false;
$_smarty_tpl->assign('display', '', false, NULL);
if ($_smarty_tpl->getValue('variation_feature')['display_on_catalog'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('variation_feature')['filter_style'] == 'color' && ($_smarty_tpl->getValue('variation_feature')['purpose'] == 'group_variation_catalog_item' || $_smarty_tpl->getValue('variation_feature')['purpose'] == 'group_catalog_item')) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('variation_feature')['variants'], 'variant');
$foreach74DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach74DoElse = false;
if ((($_smarty_tpl->getValue('variant')['product_id'] || $_smarty_tpl->getValue('addons')['product_variations']['variations_show_all_possible_feature_variants'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) && $_smarty_tpl->getValue('printed_variations') < $_smarty_tpl->getValue('setting_variantions_limit'))) {
if ($_smarty_tpl->getValue('printed_variations') >= $_smarty_tpl->getValue('limit')) {
$_smarty_tpl->assign('display', 'hidden', false, NULL);
}
$_smarty_tpl->assign('active_class', ($_smarty_tpl->getValue('variant')['active']) ? "active" : '', false, NULL);
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] == 'color') {
$_smarty_tpl->assign('color1', (($tmp = $_smarty_tpl->getValue('variant')['color'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('white_color') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('color2', ($_smarty_tpl->getValue('variant')['abt__ut2_color_style'] === 'multicolor') ? ((($tmp = $_smarty_tpl->getValue('variant')['abt__ut2_multicolor'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('color1') ?? null : $tmp)) : $_smarty_tpl->getValue('color1'), false, NULL);
if ($_smarty_tpl->getValue('variant')['abt__ut2_color_style'] == 'thumbnail') {
if ($_smarty_tpl->getValue('show_as_links') && $_smarty_tpl->getValue('variant')['product_id']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('variant')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"data-abt--ut2-variations-variant-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['product_id']), ENT_QUOTES, 'UTF-8');?>
"class="ut2-lv__color-variant <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('active_class')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('display')), ENT_QUOTES, 'UTF-8');?>
"style="background: linear-gradient(120deg,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color1')), ENT_QUOTES, 'UTF-8');?>
 50%, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color2')), ENT_QUOTES, 'UTF-8');?>
 51%);"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('variant')['image_pair'],'image_width'=>64,'height'=>64,'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?></a><?php } else { ?><span class="ut2-lv__color-variant <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('active_class')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('display')), ENT_QUOTES, 'UTF-8');?>
"style="background: linear-gradient(120deg,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color1')), ENT_QUOTES, 'UTF-8');?>
 50%, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color2')), ENT_QUOTES, 'UTF-8');?>
 51%);"data-abt--ut2-variations-variant-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['product_id']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('variant')['image_pair'],'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],'height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?></span><?php }
} else {
if ($_smarty_tpl->getValue('show_as_links') && $_smarty_tpl->getValue('variant')['product_id']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('variant')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"data-abt--ut2-variations-variant-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['product_id']), ENT_QUOTES, 'UTF-8');?>
"class="ut2-lv__color-variant <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('active_class')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('display')), ENT_QUOTES, 'UTF-8');?>
"style="background: linear-gradient(120deg,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color1')), ENT_QUOTES, 'UTF-8');?>
 50%, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color2')), ENT_QUOTES, 'UTF-8');?>
 51%);">&nbsp;</a><?php } else { ?><span class="ut2-lv__color-variant <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('active_class')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('display')), ENT_QUOTES, 'UTF-8');?>
"style="background: linear-gradient(120deg,<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color1')), ENT_QUOTES, 'UTF-8');?>
 50%, <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('color2')), ENT_QUOTES, 'UTF-8');?>
 51%);"data-abt--ut2-variations-variant-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['product_id']), ENT_QUOTES, 'UTF-8');?>
">&nbsp;</span><?php }
}
} elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] == 'thumbnails') {
if ($_smarty_tpl->getValue('show_as_links') && $_smarty_tpl->getValue('variant')['product_id']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('variant')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?><span <?php }?>data-abt--ut2-variations-variant-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['product_id']), ENT_QUOTES, 'UTF-8');?>
"class="ty-product-options__image--wrapper <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('display')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('active_class')), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>"image_feature_variant_".((string)$_smarty_tpl->getValue('feature')['feature_id'])."_".((string)$_smarty_tpl->getValue('variant')['variant_id'])."_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-product-options__image",'images'=>$_smarty_tpl->getValue('variant')['product']['main_pair'],'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'],'image_additional_attrs'=>array("width"=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],"height"=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'])), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('show_as_links') && $_smarty_tpl->getValue('variant')['product_id']) {?></a><?php } else { ?></span><?php }
}
}
$_smarty_tpl->assign('printed_variations', $_smarty_tpl->getValue('printed_variations')+1, false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('variation_feature')['variants']) > $_smarty_tpl->getValue('limit')) {
if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('variation_feature')['variants']) > $_smarty_tpl->getValue('setting_variantions_limit')) {
$_smarty_tpl->assign('count_more', $_smarty_tpl->getValue('setting_variantions_limit')-$_smarty_tpl->getValue('limit'), false, NULL);
} else {
$_smarty_tpl->assign('count_more', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('variation_feature')['variants'])-$_smarty_tpl->getValue('limit'), false, NULL);
}
if ($_smarty_tpl->getValue('count_more') > 0) {?><span class="ut2-lv__more" data-more="+<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('count_more')), ENT_QUOTES, 'UTF-8');?>
"></span><?php }
}
}
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php } elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately'] === 'color' && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['price_position_top'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?><div class="ut2-lv__features-item lv-hover-items" data-display="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['product_variations']['display_color_separately']), ENT_QUOTES, 'UTF-8');?>
"></div><?php }
}?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'variant');
$foreach75DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach75DoElse = false;
?>
    <?php if ($_smarty_tpl->getValue('variant')['showed_product_id']) {?>
        <?php $_smarty_tpl->assign('variant_product_id', $_smarty_tpl->getValue('variant')['showed_product_id'], false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('variant_product_id', $_smarty_tpl->getValue('variant')['product']['product_id'], false, NULL);?>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('variant_product_id') && $_smarty_tpl->getValue('variant')['product']['status']) {?>

                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['change_main_image_on_variation_hover'][$_smarty_tpl->getValue('settings')['ab__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <?php if ($_smarty_tpl->getValue('quick_view')) {?>
                <?php $_smarty_tpl->assign('image_width', $_smarty_tpl->getValue('settings')['Thumbnails']['product_quick_view_thumbnail_width'], false, NULL);?>
                <?php $_smarty_tpl->assign('image_height', $_smarty_tpl->getValue('settings')['Thumbnails']['product_quick_view_thumbnail_height'], false, NULL);?>
            <?php } elseif ($_smarty_tpl->getValue('product')['details_layout'] != 'bigpicture_template') {?>
                <?php $_smarty_tpl->assign('image_width', $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_width'], false, NULL);?>
                <?php $_smarty_tpl->assign('image_height', $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_height'], false, NULL);?>
            <?php }?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('variant')['product']['main_pair'],'capture_image'=>true), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <a <?php if ($_smarty_tpl->getValue('variant')['product']['amount'] >= 1 || $_smarty_tpl->getValue('allow_negative_amount') || $_smarty_tpl->getValue('details_page')) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('product_url'),"product_id=".((string)$_smarty_tpl->getValue('variant_product_id'))))), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
           class="ty-product-options__image--wrapper <?php if ($_smarty_tpl->getValue('variant')['product']['abt__ut2_is_in_stock'] < 1 && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['highlight_unavailable_variations'][$_smarty_tpl->getValue('settings')['ab__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>ty-product-options__image--wrapper--disabled<?php }?> <?php if ($_smarty_tpl->getValue('settings')['ab__device'] == 'desktop') {?>cm-tooltip<?php }?> <?php if ($_smarty_tpl->getValue('variant')['variant_id'] == $_smarty_tpl->getValue('feature')['variant_id']) {?>ty-product-options__image--wrapper--active<?php }?> <?php if ($_smarty_tpl->getValue('feature')['purpose'] === $_smarty_tpl->getValue('purpose_create_variations') || $_smarty_tpl->getValue('quick_view') || $_smarty_tpl->getValue('ut2_select_variation')) {?>cm-ajax <?php if (!$_smarty_tpl->getValue('ut2_select_variation')) {?>cm-history <?php }?>cm-ajax-cache<?php }?>" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->getValue('feature')['purpose'] === $_smarty_tpl->getValue('purpose_create_variations') || $_smarty_tpl->getValue('quick_view') || $_smarty_tpl->getValue('ut2_select_variation')) {?>data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                <?php if ($_smarty_tpl->getValue('variant')['variant_id'] != $_smarty_tpl->getValue('feature')['variant_id']) {?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon_image_path'))) {?> data-ca-variation-image="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon_image_path')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon_image_path_hidpi'))) {?> data-ca-variation-image-hidpi="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'icon_image_path_hidpi')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                <?php }?>
        ></a>
    <?php } elseif ($_smarty_tpl->getValue('show_all_possible_feature_variants')) {?>
        <label class="ty-product-options__radio--label ty-product-options__radio--label--disabled">
            <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span>
            <bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
</bdi>
            <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span>
        </label>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
