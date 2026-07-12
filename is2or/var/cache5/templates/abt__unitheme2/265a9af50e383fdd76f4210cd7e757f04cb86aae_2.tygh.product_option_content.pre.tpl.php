<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:17
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/product_variations/hooks/products/product_option_content.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f5d1faa4_04305046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '265a9af50e383fdd76f4210cd7e757f04cb86aae' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/product_variations/hooks/products/product_option_content.pre.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 4,
  ),
),false)) {
function content_6835b9f5d1faa4_04305046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['variation_features_variants'] && $_smarty_tpl->tpl_vars['product']->value['detailed_params']['info_type'] === "D") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/product_variations/picker_features.js"),$_smarty_tpl);?>

    <div id="features_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_AOC">
        <?php $_smarty_tpl->_assignInScope('container', "ut2_pb__sticky_add_to_cart,product_detail_page");?>
        <?php $_smarty_tpl->_assignInScope('product_url', "products.view");?>
        <?php $_smarty_tpl->_assignInScope('show_all_possible_feature_variants', $_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants'] === smarty_modifier_enum("YesNo::YES"));?>
        <?php $_smarty_tpl->_assignInScope('allow_negative_amount', (($tmp = $_smarty_tpl->tpl_vars['allow_negative_amount']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount'] ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"));?>

        <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>
            <?php $_smarty_tpl->_assignInScope('container', "product_main_info_form_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['quick_view_additional_container']->value));?>
            <?php $_smarty_tpl->_assignInScope('product_url', smarty_modifier_trim("products.quick_view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value)));?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['is_microstore']->value) {?>
            <?php $_smarty_tpl->_assignInScope('product_url', fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"is_microstore=Y"));?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['company_id']) {?>
                <?php $_smarty_tpl->_assignInScope('product_url', fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"microstore_company_id=".((string)$_smarty_tpl->tpl_vars['product']->value['company_id'])));?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['ut2_select_variation']->value) {?>
            <?php $_smarty_tpl->_assignInScope('container', "ut2_select_variation_wrapper_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value));?>
            <?php $_smarty_tpl->_assignInScope('product_url', smarty_modifier_trim("products.ut2_select_variation?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value)));?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['detailed_params']['is_preview']) {?>
            <?php $_smarty_tpl->_assignInScope('product_url', fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"action=preview"));?>
        <?php }?>

        <div class="cm-picker-product-variation-features ty-product-options">
            <?php $_smarty_tpl->_assignInScope('feature_style_dropdown', constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN"));?>
            <?php $_smarty_tpl->_assignInScope('feature_style_images', constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_IMAGES"));?>
            <?php $_smarty_tpl->_assignInScope('feature_style_labels', constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_LABELS"));?>
            <?php $_smarty_tpl->_assignInScope('purpose_create_variations', constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM"));?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['variation_features_variants'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>

                <?php $_smarty_tpl->_assignInScope('is_feature_default_style', !in_array($_smarty_tpl->tpl_vars['feature']->value['feature_style'],array($_smarty_tpl->tpl_vars['feature_style_images']->value,$_smarty_tpl->tpl_vars['feature_style_labels']->value,$_smarty_tpl->tpl_vars['feature_style_dropdown']->value)));?>
                <div class="ty-control-group ty-product-options__item clearfix">
                    <div class="ut2<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_images']->value) {?>-vimg<?php } else { ?>-vopt<?php }?>__wrap">
                        <label class="ty-control-group__label ty-product-options__item-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                        <bdi>
                            <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_images']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id'] != $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>
                                        <?php continue 1;?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['variant']->value['product']['status'] || $_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                        <div class="ty-product-option-container ty-product-option-container--feature-style-images">
                                            <div class="ty-product-option-child"><?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
 <?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');
}?></div>
                                        </div>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_dropdown']->value || $_smarty_tpl->tpl_vars['is_feature_default_style']->value) {?>
                                <div class="ty-product-option-container">
                                    <div class="ty-product-option-child">
                                        <select class="<?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value || $_smarty_tpl->tpl_vars['ut2_select_variation']->value) {?>cm-ajax<?php }?> <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['allow_variations_selection'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] != smarty_modifier_enum("YesNo::YES")) {?>cm-history<?php }?> cm-ajax-force"
                                                data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['product']['status']) {?>
                                                    <option
                                                            data-ca-variant-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                                            data-ca-product-url="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                                            <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id'] == $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>selected="selected"<?php }?>
                                                    >
                                                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
 <?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');
}?>
                                                    </option>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                                    <option disabled><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</option>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                            <?php }?>
                        </bdi>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_images']->value) {?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "variant_images", null, null);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['showed_product_id']) {?>
                                    <?php $_smarty_tpl->_assignInScope('variant_product_id', $_smarty_tpl->tpl_vars['variant']->value['showed_product_id']);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('variant_product_id', $_smarty_tpl->tpl_vars['variant']->value['product']['product_id']);?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['variant_product_id']->value && $_smarty_tpl->tpl_vars['variant']->value['product']['status']) {?>

                                                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['change_main_image_on_variation_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] == smarty_modifier_enum("YesNo::YES")) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>
                                            <?php $_smarty_tpl->_assignInScope('image_width', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_width']);?>
                                            <?php $_smarty_tpl->_assignInScope('image_height', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_height']);?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['details_layout'] != 'bigpicture_template') {?>
                                            <?php $_smarty_tpl->_assignInScope('image_width', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width']);?>
                                            <?php $_smarty_tpl->_assignInScope('image_height', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height']);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['variant']->value['product']['main_pair'],'capture_image'=>true), 0, true);
?>
                                    <?php }?>
                                    <a
                                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['product']['amount'] >= 1 || $_smarty_tpl->tpl_vars['allow_negative_amount']->value || $_smarty_tpl->tpl_vars['details_page']->value) {?>href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant_product_id']->value))), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                        class="ty-product-options__image--wrapper <?php if ($_smarty_tpl->tpl_vars['variant']->value['product']['abt__ut2_is_in_stock'] < 1 && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['highlight_unavailable_variations'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] == smarty_modifier_enum("YesNo::YES")) {?>ty-product-options__image--wrapper--disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] == 'desktop') {?>cm-tooltip<?php }?> <?php if ($_smarty_tpl->tpl_vars['variant']->value['variant_id'] == $_smarty_tpl->tpl_vars['feature']->value['variant_id'] && ($_smarty_tpl->tpl_vars['variant']->value['product']['amount'] >= 1 || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['highlight_unavailable_variations'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] == smarty_modifier_enum("YesNo::NO"))) {?>ty-product-options__image--wrapper--active<?php }?> <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value || $_smarty_tpl->tpl_vars['ut2_select_variation']->value) {?>cm-ajax <?php if (!$_smarty_tpl->tpl_vars['ut2_select_variation']->value) {?>cm-history <?php }?>cm-ajax-cache<?php }?>"
                                        title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value || $_smarty_tpl->tpl_vars['ut2_select_variation']->value) {?>data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['variant_id'] != $_smarty_tpl->tpl_vars['feature']->value['variant_id']) {?>
                                            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon_image_path'))) {?> data-ca-variation-image="<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon_image_path'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon_image_path_hidpi'))) {?> data-ca-variation-image-hidpi="<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon_image_path_hidpi'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                        <?php }?>
                                    >
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>"image_feature_variant_".((string)$_smarty_tpl->tpl_vars['feature']->value['feature_id'])."_".((string)$_smarty_tpl->tpl_vars['variant']->value['variant_id'])."_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-product-options__image",'images'=>$_smarty_tpl->tpl_vars['variant']->value['product']['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_height'],'image_additional_attrs'=>array("width"=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_width'],"height"=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_height'])), 0, true);
?>
                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                    <label class="ty-product-options__radio--label ty-product-options__radio--label--disabled">
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        <bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</bdi>
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </label>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                        <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variant_images'))) {?>
                            <div class="ty-clear-both">
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variant_images');?>

                            </div>
                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_labels']->value) {?>
                        <div class="ty-clear-both">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['product']['product_id'] && $_smarty_tpl->tpl_vars['variant']->value['product']['status']) {?>
                                    <input type="radio"
                                           name="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"
                                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                           <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id'] == $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>
                                               checked
                                           <?php }?>
                                           id="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-variant-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-product-url="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                           class="hidden ty-product-options__radio <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value || $_smarty_tpl->tpl_vars['ut2_select_variation']->value) {?>cm-ajax<?php }?> <?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?>cm-history<?php }?> cm-ajax-force"
                                           data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    />
                                    <label for="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           class="ty-product-options__radio--label <?php if (!$_smarty_tpl->tpl_vars['variant']->value['product']['abt__ut2_is_in_stock'] && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['highlight_unavailable_variations'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] == smarty_modifier_enum("YesNo::YES")) {?>ty-product-options__radio--label--disabled<?php }?>"
                                    >
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        <bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</bdi>
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </label>

                                                                <?php } elseif ($_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                    <label class="ty-product-options__radio--label ty-product-options__radio--label--disabled">
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        <bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</bdi>
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </label>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/product_option_content.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/product_option_content.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['variation_features_variants'] && $_smarty_tpl->tpl_vars['product']->value['detailed_params']['info_type'] === "D") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/product_variations/picker_features.js"),$_smarty_tpl);?>

    <div id="features_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_AOC">
        <?php $_smarty_tpl->_assignInScope('container', "ut2_pb__sticky_add_to_cart,product_detail_page");?>
        <?php $_smarty_tpl->_assignInScope('product_url', "products.view");?>
        <?php $_smarty_tpl->_assignInScope('show_all_possible_feature_variants', $_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants'] === smarty_modifier_enum("YesNo::YES"));?>
        <?php $_smarty_tpl->_assignInScope('allow_negative_amount', (($tmp = $_smarty_tpl->tpl_vars['allow_negative_amount']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount'] ?? null : $tmp) === smarty_modifier_enum("YesNo::YES"));?>

        <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>
            <?php $_smarty_tpl->_assignInScope('container', "product_main_info_form_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['quick_view_additional_container']->value));?>
            <?php $_smarty_tpl->_assignInScope('product_url', smarty_modifier_trim("products.quick_view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value)));?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['is_microstore']->value) {?>
            <?php $_smarty_tpl->_assignInScope('product_url', fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"is_microstore=Y"));?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['company_id']) {?>
                <?php $_smarty_tpl->_assignInScope('product_url', fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"microstore_company_id=".((string)$_smarty_tpl->tpl_vars['product']->value['company_id'])));?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['ut2_select_variation']->value) {?>
            <?php $_smarty_tpl->_assignInScope('container', "ut2_select_variation_wrapper_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value));?>
            <?php $_smarty_tpl->_assignInScope('product_url', smarty_modifier_trim("products.ut2_select_variation?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value)));?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['detailed_params']['is_preview']) {?>
            <?php $_smarty_tpl->_assignInScope('product_url', fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"action=preview"));?>
        <?php }?>

        <div class="cm-picker-product-variation-features ty-product-options">
            <?php $_smarty_tpl->_assignInScope('feature_style_dropdown', constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN"));?>
            <?php $_smarty_tpl->_assignInScope('feature_style_images', constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_IMAGES"));?>
            <?php $_smarty_tpl->_assignInScope('feature_style_labels', constant("\Tygh\Enum\ProductFeatureStyles::DROP_DOWN_LABELS"));?>
            <?php $_smarty_tpl->_assignInScope('purpose_create_variations', constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM"));?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['variation_features_variants'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>

                <?php $_smarty_tpl->_assignInScope('is_feature_default_style', !in_array($_smarty_tpl->tpl_vars['feature']->value['feature_style'],array($_smarty_tpl->tpl_vars['feature_style_images']->value,$_smarty_tpl->tpl_vars['feature_style_labels']->value,$_smarty_tpl->tpl_vars['feature_style_dropdown']->value)));?>
                <div class="ty-control-group ty-product-options__item clearfix">
                    <div class="ut2<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_images']->value) {?>-vimg<?php } else { ?>-vopt<?php }?>__wrap">
                        <label class="ty-control-group__label ty-product-options__item-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                        <bdi>
                            <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_images']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id'] != $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>
                                        <?php continue 1;?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['variant']->value['product']['status'] || $_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                        <div class="ty-product-option-container ty-product-option-container--feature-style-images">
                                            <div class="ty-product-option-child"><?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
 <?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');
}?></div>
                                        </div>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_dropdown']->value || $_smarty_tpl->tpl_vars['is_feature_default_style']->value) {?>
                                <div class="ty-product-option-container">
                                    <div class="ty-product-option-child">
                                        <select class="<?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value || $_smarty_tpl->tpl_vars['ut2_select_variation']->value) {?>cm-ajax<?php }?> <?php if (!$_smarty_tpl->tpl_vars['quick_view']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['product_variations']['allow_variations_selection'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] != smarty_modifier_enum("YesNo::YES")) {?>cm-history<?php }?> cm-ajax-force"
                                                data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['product']['status']) {?>
                                                    <option
                                                            data-ca-variant-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                                            data-ca-product-url="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                                            <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id'] == $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>selected="selected"<?php }?>
                                                    >
                                                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
 <?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');
}?>
                                                    </option>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                                    <option disabled><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</option>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                            <?php }?>
                        </bdi>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_images']->value) {?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "variant_images", null, null);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['showed_product_id']) {?>
                                    <?php $_smarty_tpl->_assignInScope('variant_product_id', $_smarty_tpl->tpl_vars['variant']->value['showed_product_id']);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('variant_product_id', $_smarty_tpl->tpl_vars['variant']->value['product']['product_id']);?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['variant_product_id']->value && $_smarty_tpl->tpl_vars['variant']->value['product']['status']) {?>

                                                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['change_main_image_on_variation_hover'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] == smarty_modifier_enum("YesNo::YES")) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>
                                            <?php $_smarty_tpl->_assignInScope('image_width', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_width']);?>
                                            <?php $_smarty_tpl->_assignInScope('image_height', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_quick_view_thumbnail_height']);?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['details_layout'] != 'bigpicture_template') {?>
                                            <?php $_smarty_tpl->_assignInScope('image_width', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width']);?>
                                            <?php $_smarty_tpl->_assignInScope('image_height', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height']);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['variant']->value['product']['main_pair'],'capture_image'=>true), 0, true);
?>
                                    <?php }?>
                                    <a
                                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['product']['amount'] >= 1 || $_smarty_tpl->tpl_vars['allow_negative_amount']->value || $_smarty_tpl->tpl_vars['details_page']->value) {?>href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant_product_id']->value))), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                        class="ty-product-options__image--wrapper <?php if ($_smarty_tpl->tpl_vars['variant']->value['product']['abt__ut2_is_in_stock'] < 1 && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['highlight_unavailable_variations'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] == smarty_modifier_enum("YesNo::YES")) {?>ty-product-options__image--wrapper--disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] == 'desktop') {?>cm-tooltip<?php }?> <?php if ($_smarty_tpl->tpl_vars['variant']->value['variant_id'] == $_smarty_tpl->tpl_vars['feature']->value['variant_id'] && ($_smarty_tpl->tpl_vars['variant']->value['product']['amount'] >= 1 || $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['highlight_unavailable_variations'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] == smarty_modifier_enum("YesNo::NO"))) {?>ty-product-options__image--wrapper--active<?php }?> <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value || $_smarty_tpl->tpl_vars['ut2_select_variation']->value) {?>cm-ajax <?php if (!$_smarty_tpl->tpl_vars['ut2_select_variation']->value) {?>cm-history <?php }?>cm-ajax-cache<?php }?>"
                                        title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value || $_smarty_tpl->tpl_vars['ut2_select_variation']->value) {?>data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['variant_id'] != $_smarty_tpl->tpl_vars['feature']->value['variant_id']) {?>
                                            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon_image_path'))) {?> data-ca-variation-image="<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon_image_path'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon_image_path_hidpi'))) {?> data-ca-variation-image-hidpi="<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'icon_image_path_hidpi'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                        <?php }?>
                                    >
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>"image_feature_variant_".((string)$_smarty_tpl->tpl_vars['feature']->value['feature_id'])."_".((string)$_smarty_tpl->tpl_vars['variant']->value['variant_id'])."_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-product-options__image",'images'=>$_smarty_tpl->tpl_vars['variant']->value['product']['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_height'],'image_additional_attrs'=>array("width"=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_width'],"height"=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_variant_mini_icon_height'])), 0, true);
?>
                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                    <label class="ty-product-options__radio--label ty-product-options__radio--label--disabled">
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        <bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</bdi>
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </label>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                        <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variant_images'))) {?>
                            <div class="ty-clear-both">
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variant_images');?>

                            </div>
                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_style'] === $_smarty_tpl->tpl_vars['feature_style_labels']->value) {?>
                        <div class="ty-clear-both">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['product']['product_id'] && $_smarty_tpl->tpl_vars['variant']->value['product']['status']) {?>
                                    <input type="radio"
                                           name="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"
                                           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                           <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id'] == $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>
                                               checked
                                           <?php }?>
                                           id="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-variant-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-product-url="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['product_url']->value,"product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                                           class="hidden ty-product-options__radio <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] === $_smarty_tpl->tpl_vars['purpose_create_variations']->value || $_smarty_tpl->tpl_vars['quick_view']->value || $_smarty_tpl->tpl_vars['ut2_select_variation']->value) {?>cm-ajax<?php }?> <?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?>cm-history<?php }?> cm-ajax-force"
                                           data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    />
                                    <label for="feature_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           class="ty-product-options__radio--label <?php if (!$_smarty_tpl->tpl_vars['variant']->value['product']['abt__ut2_is_in_stock'] && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['highlight_unavailable_variations'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] == smarty_modifier_enum("YesNo::YES")) {?>ty-product-options__radio--label--disabled<?php }?>"
                                    >
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        <bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</bdi>
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </label>

                                                                <?php } elseif ($_smarty_tpl->tpl_vars['show_all_possible_feature_variants']->value) {?>
                                    <label class="ty-product-options__radio--label ty-product-options__radio--label--disabled">
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        <bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</bdi>
                                        <span class="ty-product-option-checkbox"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </label>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
}
}
}
