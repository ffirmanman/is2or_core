<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:39
  from 'tygh:addons/product_variations/hooks/products/product_option_content.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49ff982793_63746168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd18e28dfa31bd0c95348cbb5b818043237ed409f' => 
    array (
      0 => 'addons/product_variations/hooks/products/product_option_content.pre.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 6,
  ),
))) {
function content_69fb49ff982793_63746168 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_variations/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['variation_features_variants'] && $_smarty_tpl->getValue('product')['detailed_params']['info_type'] === "D") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/product_variations/picker_features.js"), $_smarty_tpl);?>

    <div id="features_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_AOC">
        <?php $_smarty_tpl->assign('container', "ut2_pb__sticky_add_to_cart,product_detail_page", false, NULL);?>
        <?php $_smarty_tpl->assign('product_url', "products.view", false, NULL);?>
        <?php $_smarty_tpl->assign('show_all_possible_feature_variants', $_smarty_tpl->getValue('addons')['product_variations']['variations_show_all_possible_feature_variants'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?>
        <?php $_smarty_tpl->assign('allow_negative_amount', (($tmp = $_smarty_tpl->getValue('allow_negative_amount') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['General']['allow_negative_amount'] ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?>

        <?php if ($_smarty_tpl->getValue('quick_view')) {?>
            <?php $_smarty_tpl->assign('container', "product_main_info_form_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('quick_view_additional_container')), false, NULL);?>
            <?php $_smarty_tpl->assign('product_url', $_smarty_tpl->getSmarty()->getModifierCallback('trim')("products.quick_view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&prev_url=".((string)$_smarty_tpl->getValue('current_url'))), false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('is_microstore')) {?>
            <?php $_smarty_tpl->assign('product_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('product_url'),"is_microstore=Y"), false, NULL);?>

            <?php if ($_smarty_tpl->getValue('product')['company_id']) {?>
                <?php $_smarty_tpl->assign('product_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('product_url'),"microstore_company_id=".((string)$_smarty_tpl->getValue('product')['company_id'])), false, NULL);?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('ut2_select_variation')) {?>
            <?php $_smarty_tpl->assign('container', "ut2_select_variation_wrapper_".((string)$_smarty_tpl->getValue('obj_prefix')), false, NULL);?>
            <?php $_smarty_tpl->assign('product_url', $_smarty_tpl->getSmarty()->getModifierCallback('trim')("products.ut2_select_variation?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&prev_url=".((string)$_smarty_tpl->getValue('current_url'))), false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('product')['detailed_params']['is_preview']) {?>
            <?php $_smarty_tpl->assign('product_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('product_url'),"action=preview"), false, NULL);?>
        <?php }?>

        <div class="cm-picker-product-variation-features ty-product-options" style="--tb-var-image-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width']), ENT_QUOTES, 'UTF-8');?>
;--tb-var-image-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height']), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->assign('feature_style_dropdown', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN"), false, NULL);?>
            <?php $_smarty_tpl->assign('feature_style_images', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_IMAGES"), false, NULL);?>
            <?php $_smarty_tpl->assign('feature_style_labels', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_LABELS"), false, NULL);?>
            <?php $_smarty_tpl->assign('purpose_create_variations', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM"), false, NULL);?>

            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features_variants'], 'feature');
$foreach64DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach64DoElse = false;
?>

                <?php $_smarty_tpl->assign('is_feature_default_style', !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('feature')['feature_style'],array($_smarty_tpl->getValue('feature_style_images'),$_smarty_tpl->getValue('feature_style_labels'),$_smarty_tpl->getValue('feature_style_dropdown'))), false, NULL);?>
                <div class="ty-control-group ty-product-options__item clearfix">
                    <div class="ut2<?php if ($_smarty_tpl->getValue('feature')['feature_style'] === $_smarty_tpl->getValue('feature_style_images')) {?>-vimg<?php } else { ?>-vopt<?php }?>__wrap">
                        <label class="ty-control-group__label ty-product-options__item-label"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['description']), ENT_QUOTES, 'UTF-8');?>
:</label>
                                                    <?php if ($_smarty_tpl->getValue('feature')['feature_style'] === $_smarty_tpl->getValue('feature_style_images')) {?>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'variant');
$foreach65DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach65DoElse = false;
?>
                                    <?php if ($_smarty_tpl->getValue('feature')['variant_id'] != $_smarty_tpl->getValue('variant')['variant_id']) {?>
                                        <?php continue 1;?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('variant')['product']['status'] || $_smarty_tpl->getValue('show_all_possible_feature_variants')) {?>
                                        <div class="ty-product-option-container ty-product-option-container--feature-style-images">
                                            <div class="ty-product-option-child"><?php if ($_smarty_tpl->getValue('feature')['prefix']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
 <?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('feature')['suffix']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');
}?></div>
                                        </div>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <?php } elseif ($_smarty_tpl->getValue('feature')['feature_style'] === $_smarty_tpl->getValue('feature_style_dropdown') || $_smarty_tpl->getValue('is_feature_default_style')) {?>
                                <div class="ty-product-option-container">
                                    <div class="ty-product-option-child">
                                        <select class="<?php if ($_smarty_tpl->getValue('feature')['purpose'] === $_smarty_tpl->getValue('purpose_create_variations') || $_smarty_tpl->getValue('quick_view') || $_smarty_tpl->getValue('ut2_select_variation')) {?>cm-ajax<?php }?> <?php if (!$_smarty_tpl->getValue('quick_view')) {?>cm-history<?php }?> cm-ajax-force"
                                                data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')), ENT_QUOTES, 'UTF-8');?>
">
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'variant');
$foreach66DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach66DoElse = false;
?>
                                                <?php if ($_smarty_tpl->getValue('variant')['product']['status']) {?>
                                                    <option
                                                            data-ca-variant-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                                            data-ca-product-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('product_url'),"product_id=".((string)$_smarty_tpl->getValue('variant')['product']['product_id'])))), ENT_QUOTES, 'UTF-8');?>
"
                                                            <?php if ($_smarty_tpl->getValue('feature')['variant_id'] == $_smarty_tpl->getValue('variant')['variant_id']) {?>selected="selected"<?php }?>
                                                    >
                                                        <?php if ($_smarty_tpl->getValue('feature')['prefix']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
 <?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('feature')['suffix']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');
}?>
                                                    </option>
                                                <?php } elseif ($_smarty_tpl->getValue('show_all_possible_feature_variants')) {?>
                                                    <option disabled><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
</option>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                            <?php }?>
                                            </div>

                    <?php if ($_smarty_tpl->getValue('feature')['feature_style'] === $_smarty_tpl->getValue('feature_style_images')) {?>
                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "variant_images", null, null);?>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'variant');
$foreach67DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach67DoElse = false;
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
                                    <a
                                        <?php if ($_smarty_tpl->getValue('variant')['product']['amount'] >= 1 || $_smarty_tpl->getValue('allow_negative_amount') || $_smarty_tpl->getValue('details_page')) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('product_url'),"product_id=".((string)$_smarty_tpl->getValue('variant_product_id'))))), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                        class="ty-product-options__image--wrapper <?php if ($_smarty_tpl->getValue('variant')['product']['abt__ut2_is_in_stock'] < 1 && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['highlight_unavailable_variations'][$_smarty_tpl->getValue('settings')['ab__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>ty-product-options__image--wrapper--disabled<?php }?> <?php if ($_smarty_tpl->getValue('settings')['ab__device'] == 'desktop') {?>cm-tooltip<?php }?> <?php if ($_smarty_tpl->getValue('variant')['variant_id'] == $_smarty_tpl->getValue('feature')['variant_id']) {?>ty-product-options__image--wrapper--active<?php }?> <?php if ($_smarty_tpl->getValue('feature')['purpose'] === $_smarty_tpl->getValue('purpose_create_variations') || $_smarty_tpl->getValue('quick_view') || $_smarty_tpl->getValue('ut2_select_variation')) {?>cm-ajax <?php if (!$_smarty_tpl->getValue('ut2_select_variation')) {?>cm-history <?php }?>cm-ajax-cache<?php }?>"
                                        title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
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
                                    >
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>"image_feature_variant_".((string)$_smarty_tpl->getValue('feature')['feature_id'])."_".((string)$_smarty_tpl->getValue('variant')['variant_id'])."_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-product-options__image",'images'=>$_smarty_tpl->getValue('variant')['product']['main_pair'],'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'],'image_additional_attrs'=>array("width"=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],"height"=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'])), (int) 0, $_smarty_current_dir);
?>
                                    </a>
                                <?php } elseif ($_smarty_tpl->getValue('show_all_possible_feature_variants')) {?>
                                                                        <div class="ty-product-options__image--wrapper ty-product-options__image--wrapper--disabled<?php if ($_smarty_tpl->getValue('settings')['ab__device'] === 'desktop') {?> cm-tooltip<?php }?>" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>"image_feature_variant_".((string)$_smarty_tpl->getValue('feature')['feature_id'])."_".((string)$_smarty_tpl->getValue('variant')['variant_id'])."_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-product-options__image",'images'=>$_smarty_tpl->getValue('variant')['product']['main_pair'],'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'],'image_additional_attrs'=>array("width"=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],"height"=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'])), (int) 0, $_smarty_current_dir);
?>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'variant_images'))) {?>
                            <div class="ty-clear-both">
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'variant_images');?>

                            </div>
                        <?php }?>
                    <?php } elseif ($_smarty_tpl->getValue('feature')['feature_style'] === $_smarty_tpl->getValue('feature_style_labels')) {?>
                        <div class="ty-clear-both">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'variant');
$foreach68DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach68DoElse = false;
?>
                                <?php if ($_smarty_tpl->getValue('variant')['product']['product_id'] && $_smarty_tpl->getValue('variant')['product']['status']) {?>
                                    <input type="radio"
                                           name="feature_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['feature_id']), ENT_QUOTES, 'UTF-8');?>
"
                                           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                           <?php if ($_smarty_tpl->getValue('feature')['variant_id'] == $_smarty_tpl->getValue('variant')['variant_id']) {?>
                                               checked
                                           <?php }?>
                                           id="feature_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['feature_id']), ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-variant-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-product-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('product_url'),"product_id=".((string)$_smarty_tpl->getValue('variant')['product']['product_id'])))), ENT_QUOTES, 'UTF-8');?>
"
                                           class="hidden ty-product-options__radio <?php if ($_smarty_tpl->getValue('feature')['purpose'] === $_smarty_tpl->getValue('purpose_create_variations') || $_smarty_tpl->getValue('quick_view') || $_smarty_tpl->getValue('ut2_select_variation')) {?>cm-ajax<?php }?> <?php if ($_smarty_tpl->getValue('details_page')) {?>cm-history<?php }?> cm-ajax-force"
                                           data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')), ENT_QUOTES, 'UTF-8');?>
"
                                    />
                                    <label for="feature_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['feature_id']), ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"
                                           class="ty-product-options__radio--label <?php if (!$_smarty_tpl->getValue('variant')['product']['abt__ut2_is_in_stock'] && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['highlight_unavailable_variations'][$_smarty_tpl->getValue('settings')['ab__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>ty-product-options__radio--label--disabled<?php }?>"
                                    >
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span>
                                        <bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
</bdi>
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span>
                                    </label>

                                                                <?php } elseif ($_smarty_tpl->getValue('show_all_possible_feature_variants')) {?>
                                    <label class="ty-product-options__radio--label ty-product-options__radio--label--disabled">
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span>
                                        <bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
</bdi>
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span>
                                    </label>
                                <?php }?>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/product_option_content.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_variations/hooks/products/product_option_content.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['variation_features_variants'] && $_smarty_tpl->getValue('product')['detailed_params']['info_type'] === "D") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/product_variations/picker_features.js"), $_smarty_tpl);?>

    <div id="features_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
_AOC">
        <?php $_smarty_tpl->assign('container', "ut2_pb__sticky_add_to_cart,product_detail_page", false, NULL);?>
        <?php $_smarty_tpl->assign('product_url', "products.view", false, NULL);?>
        <?php $_smarty_tpl->assign('show_all_possible_feature_variants', $_smarty_tpl->getValue('addons')['product_variations']['variations_show_all_possible_feature_variants'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?>
        <?php $_smarty_tpl->assign('allow_negative_amount', (($tmp = $_smarty_tpl->getValue('allow_negative_amount') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['General']['allow_negative_amount'] ?? null : $tmp) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?>

        <?php if ($_smarty_tpl->getValue('quick_view')) {?>
            <?php $_smarty_tpl->assign('container', "product_main_info_form_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('quick_view_additional_container')), false, NULL);?>
            <?php $_smarty_tpl->assign('product_url', $_smarty_tpl->getSmarty()->getModifierCallback('trim')("products.quick_view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&prev_url=".((string)$_smarty_tpl->getValue('current_url'))), false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('is_microstore')) {?>
            <?php $_smarty_tpl->assign('product_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('product_url'),"is_microstore=Y"), false, NULL);?>

            <?php if ($_smarty_tpl->getValue('product')['company_id']) {?>
                <?php $_smarty_tpl->assign('product_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('product_url'),"microstore_company_id=".((string)$_smarty_tpl->getValue('product')['company_id'])), false, NULL);?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('ut2_select_variation')) {?>
            <?php $_smarty_tpl->assign('container', "ut2_select_variation_wrapper_".((string)$_smarty_tpl->getValue('obj_prefix')), false, NULL);?>
            <?php $_smarty_tpl->assign('product_url', $_smarty_tpl->getSmarty()->getModifierCallback('trim')("products.ut2_select_variation?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&prev_url=".((string)$_smarty_tpl->getValue('current_url'))), false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('product')['detailed_params']['is_preview']) {?>
            <?php $_smarty_tpl->assign('product_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('product_url'),"action=preview"), false, NULL);?>
        <?php }?>

        <div class="cm-picker-product-variation-features ty-product-options" style="--tb-var-image-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width']), ENT_QUOTES, 'UTF-8');?>
;--tb-var-image-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height']), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->assign('feature_style_dropdown', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN"), false, NULL);?>
            <?php $_smarty_tpl->assign('feature_style_images', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_IMAGES"), false, NULL);?>
            <?php $_smarty_tpl->assign('feature_style_labels', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_LABELS"), false, NULL);?>
            <?php $_smarty_tpl->assign('purpose_create_variations', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM"), false, NULL);?>

            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features_variants'], 'feature');
$foreach69DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feature')->value) {
$foreach69DoElse = false;
?>

                <?php $_smarty_tpl->assign('is_feature_default_style', !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('feature')['feature_style'],array($_smarty_tpl->getValue('feature_style_images'),$_smarty_tpl->getValue('feature_style_labels'),$_smarty_tpl->getValue('feature_style_dropdown'))), false, NULL);?>
                <div class="ty-control-group ty-product-options__item clearfix">
                    <div class="ut2<?php if ($_smarty_tpl->getValue('feature')['feature_style'] === $_smarty_tpl->getValue('feature_style_images')) {?>-vimg<?php } else { ?>-vopt<?php }?>__wrap">
                        <label class="ty-control-group__label ty-product-options__item-label"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['description']), ENT_QUOTES, 'UTF-8');?>
:</label>
                                                    <?php if ($_smarty_tpl->getValue('feature')['feature_style'] === $_smarty_tpl->getValue('feature_style_images')) {?>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'variant');
$foreach70DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach70DoElse = false;
?>
                                    <?php if ($_smarty_tpl->getValue('feature')['variant_id'] != $_smarty_tpl->getValue('variant')['variant_id']) {?>
                                        <?php continue 1;?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('variant')['product']['status'] || $_smarty_tpl->getValue('show_all_possible_feature_variants')) {?>
                                        <div class="ty-product-option-container ty-product-option-container--feature-style-images">
                                            <div class="ty-product-option-child"><?php if ($_smarty_tpl->getValue('feature')['prefix']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
 <?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('feature')['suffix']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');
}?></div>
                                        </div>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <?php } elseif ($_smarty_tpl->getValue('feature')['feature_style'] === $_smarty_tpl->getValue('feature_style_dropdown') || $_smarty_tpl->getValue('is_feature_default_style')) {?>
                                <div class="ty-product-option-container">
                                    <div class="ty-product-option-child">
                                        <select class="<?php if ($_smarty_tpl->getValue('feature')['purpose'] === $_smarty_tpl->getValue('purpose_create_variations') || $_smarty_tpl->getValue('quick_view') || $_smarty_tpl->getValue('ut2_select_variation')) {?>cm-ajax<?php }?> <?php if (!$_smarty_tpl->getValue('quick_view')) {?>cm-history<?php }?> cm-ajax-force"
                                                data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')), ENT_QUOTES, 'UTF-8');?>
">
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'variant');
$foreach71DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach71DoElse = false;
?>
                                                <?php if ($_smarty_tpl->getValue('variant')['product']['status']) {?>
                                                    <option
                                                            data-ca-variant-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                                            data-ca-product-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('product_url'),"product_id=".((string)$_smarty_tpl->getValue('variant')['product']['product_id'])))), ENT_QUOTES, 'UTF-8');?>
"
                                                            <?php if ($_smarty_tpl->getValue('feature')['variant_id'] == $_smarty_tpl->getValue('variant')['variant_id']) {?>selected="selected"<?php }?>
                                                    >
                                                        <?php if ($_smarty_tpl->getValue('feature')['prefix']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
 <?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('feature')['suffix']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');
}?>
                                                    </option>
                                                <?php } elseif ($_smarty_tpl->getValue('show_all_possible_feature_variants')) {?>
                                                    <option disabled><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
</option>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                            <?php }?>
                                            </div>

                    <?php if ($_smarty_tpl->getValue('feature')['feature_style'] === $_smarty_tpl->getValue('feature_style_images')) {?>
                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "variant_images", null, null);?>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'variant');
$foreach72DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach72DoElse = false;
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
                                    <a
                                        <?php if ($_smarty_tpl->getValue('variant')['product']['amount'] >= 1 || $_smarty_tpl->getValue('allow_negative_amount') || $_smarty_tpl->getValue('details_page')) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('product_url'),"product_id=".((string)$_smarty_tpl->getValue('variant_product_id'))))), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                        class="ty-product-options__image--wrapper <?php if ($_smarty_tpl->getValue('variant')['product']['abt__ut2_is_in_stock'] < 1 && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['highlight_unavailable_variations'][$_smarty_tpl->getValue('settings')['ab__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>ty-product-options__image--wrapper--disabled<?php }?> <?php if ($_smarty_tpl->getValue('settings')['ab__device'] == 'desktop') {?>cm-tooltip<?php }?> <?php if ($_smarty_tpl->getValue('variant')['variant_id'] == $_smarty_tpl->getValue('feature')['variant_id']) {?>ty-product-options__image--wrapper--active<?php }?> <?php if ($_smarty_tpl->getValue('feature')['purpose'] === $_smarty_tpl->getValue('purpose_create_variations') || $_smarty_tpl->getValue('quick_view') || $_smarty_tpl->getValue('ut2_select_variation')) {?>cm-ajax <?php if (!$_smarty_tpl->getValue('ut2_select_variation')) {?>cm-history <?php }?>cm-ajax-cache<?php }?>"
                                        title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
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
                                    >
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>"image_feature_variant_".((string)$_smarty_tpl->getValue('feature')['feature_id'])."_".((string)$_smarty_tpl->getValue('variant')['variant_id'])."_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-product-options__image",'images'=>$_smarty_tpl->getValue('variant')['product']['main_pair'],'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'],'image_additional_attrs'=>array("width"=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],"height"=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'])), (int) 0, $_smarty_current_dir);
?>
                                    </a>
                                <?php } elseif ($_smarty_tpl->getValue('show_all_possible_feature_variants')) {?>
                                                                        <div class="ty-product-options__image--wrapper ty-product-options__image--wrapper--disabled<?php if ($_smarty_tpl->getValue('settings')['ab__device'] === 'desktop') {?> cm-tooltip<?php }?>" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>"image_feature_variant_".((string)$_smarty_tpl->getValue('feature')['feature_id'])."_".((string)$_smarty_tpl->getValue('variant')['variant_id'])."_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')),'class'=>"ty-product-options__image",'images'=>$_smarty_tpl->getValue('variant')['product']['main_pair'],'image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'],'image_additional_attrs'=>array("width"=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_width'],"height"=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_variant_mini_icon_height'])), (int) 0, $_smarty_current_dir);
?>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'variant_images'))) {?>
                            <div class="ty-clear-both">
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'variant_images');?>

                            </div>
                        <?php }?>
                    <?php } elseif ($_smarty_tpl->getValue('feature')['feature_style'] === $_smarty_tpl->getValue('feature_style_labels')) {?>
                        <div class="ty-clear-both">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feature')['variants'], 'variant');
$foreach73DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('variant')->value) {
$foreach73DoElse = false;
?>
                                <?php if ($_smarty_tpl->getValue('variant')['product']['product_id'] && $_smarty_tpl->getValue('variant')['product']['status']) {?>
                                    <input type="radio"
                                           name="feature_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['feature_id']), ENT_QUOTES, 'UTF-8');?>
"
                                           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                           <?php if ($_smarty_tpl->getValue('feature')['variant_id'] == $_smarty_tpl->getValue('variant')['variant_id']) {?>
                                               checked
                                           <?php }?>
                                           id="feature_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['feature_id']), ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-variant-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-product-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('product_url'),"product_id=".((string)$_smarty_tpl->getValue('variant')['product']['product_id'])))), ENT_QUOTES, 'UTF-8');?>
"
                                           class="hidden ty-product-options__radio <?php if ($_smarty_tpl->getValue('feature')['purpose'] === $_smarty_tpl->getValue('purpose_create_variations') || $_smarty_tpl->getValue('quick_view') || $_smarty_tpl->getValue('ut2_select_variation')) {?>cm-ajax<?php }?> <?php if ($_smarty_tpl->getValue('details_page')) {?>cm-history<?php }?> cm-ajax-force"
                                           data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container')), ENT_QUOTES, 'UTF-8');?>
"
                                    />
                                    <label for="feature_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['feature_id']), ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"
                                           class="ty-product-options__radio--label <?php if (!$_smarty_tpl->getValue('variant')['product']['abt__ut2_is_in_stock'] && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['highlight_unavailable_variations'][$_smarty_tpl->getValue('settings')['ab__device']] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>ty-product-options__radio--label--disabled<?php }?>"
                                    >
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span>
                                        <bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
</bdi>
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span>
                                    </label>

                                                                <?php } elseif ($_smarty_tpl->getValue('show_all_possible_feature_variants')) {?>
                                    <label class="ty-product-options__radio--label ty-product-options__radio--label--disabled">
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['prefix']), ENT_QUOTES, 'UTF-8');?>
</span>
                                        <bdi><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('variant')['variant']), ENT_QUOTES, 'UTF-8');?>
</bdi>
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('feature')['suffix']), ENT_QUOTES, 'UTF-8');?>
</span>
                                    </label>
                                <?php }?>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
}
}
}
