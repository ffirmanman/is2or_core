<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:blocks/product_templates/bigpicture_template.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa90a6588_58759806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd98795f7c5369150b2362fab98ffcfefc257087' => 
    array (
      0 => 'blocks/product_templates/bigpicture_template.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/breadcrumbs.tpl' => 2,
    'tygh:common/product_data.tpl' => 2,
    'tygh:views/products/components/product_images.tpl' => 2,
    'tygh:blocks/product_templates/components/product_rating.tpl' => 2,
    'tygh:blocks/product_templates/components/product_brand_logo_prepare.tpl' => 4,
    'tygh:blocks/product_templates/components/product_price.tpl' => 2,
    'tygh:views/products/components/product_features_short_list.tpl' => 4,
    'tygh:buttons/button.tpl' => 2,
    'tygh:views/tabs/components/product_popup_tabs.tpl' => 2,
    'tygh:views/tabs/components/product_tabs.tpl' => 2,
    'tygh:blocks/product_templates/components/abt__ut2_mobile_template.tpl' => 2,
  ),
))) {
function content_69afafa90a6588_58759806 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/product_templates';
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','view_details','add_to_cart','view_details'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);?>


<?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>

    <?php $_smarty_tpl->assign('pd_image_gallery_width', (($tmp = (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['image_width'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_width'] ?? null : $tmp) ?? null)===null||$tmp==='' ? 430 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('pd_image_gallery_height', (($tmp = (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['image_height'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_height'] ?? null : $tmp) ?? null)===null||$tmp==='' ? 430 ?? null : $tmp), false, NULL);?>

    <?php $_smarty_tpl->assign('is_add_to_cart_mv', true, false, NULL);?>
    <?php $_smarty_tpl->assign('abt__shareb_mute', false, false, NULL);?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && ($_smarty_tpl->getValue('product')['master_product_id'] || !$_smarty_tpl->getValue('product')['company_id'])) {
$_smarty_tpl->assign('is_add_to_cart_mv', false, false, NULL);
}?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__product_images_count"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->assign('product_images_count', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')['image_pairs']), false, NULL);?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__product_images_count"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

    <div class="ut2-pb ty-product-block ut2-big-image<?php if ($_smarty_tpl->getValue('product_images_count') < 1) {?> --single<?php }?>" style="--pd-image-gallery-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pd_image_gallery_width')), ENT_QUOTES, 'UTF-8');?>
;--pd-image-gallery-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pd_image_gallery_height')), ENT_QUOTES, 'UTF-8');?>
">

        <div class="ut2-breadcrumbs__wrapper">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ut2_main_info_breadcrumbs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ut2_main_info_breadcrumbs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('product')) {?>
            <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'but_role'=>"big",'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'product_labels_position'=>"right-top",'hide_qty_label'=>true), (int) 0, $_smarty_current_dir);
?>

            <div class="ut2-pb__title ut2-pb__title-wrap">
                <?php if (!$_smarty_tpl->getValue('hide_title')) {?>
                    <h1 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:product:".((string)$_smarty_tpl->getValue('product')['product_id'])), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getValue('product')['product'];?>
</h1>
                <?php }?>

                <div class="ut2-pb__top-ss">

                    <?php if ($_smarty_tpl->getValue('show_sku') == "true" && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('product')['product_code'])) {?>
                        <div class="ut2-pb__sku">
                            <?php $_smarty_tpl->assign('sku', "sku_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('sku'));?>

                        </div>
                    <?php }?>

                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:top_ss"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:top_ss"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                </div>
            </div>

            <div class="ut2-pb__wrapper clearfix">
                <div class="ut2-pb__section-combined">
                    <div class="ut2-pb__img-wrapper">
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:image_wrap"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                        <?php if (!$_smarty_tpl->getValue('no_images')) {?>
                            <div class="ut2-pb__img cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
 images-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['products'][$_smarty_tpl->getValue('settings')['abt__details_layout']]['multiple_product_images'][$_smarty_tpl->getValue('settings')['ab__device']]), ENT_QUOTES, 'UTF-8');?>
" data-ca-previewer="true" id="product_images_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
_update">
                                <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'show_detailed_link'=>"Y",'image_width'=>$_smarty_tpl->getValue('pd_image_gallery_width'),'image_height'=>$_smarty_tpl->getValue('pd_image_gallery_height'),'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>

                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                <!--product_images_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
_update--></div>
                        <?php } else { ?>
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        <?php }?>
                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:image_wrap"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                    </div>
                    <div class="ut2-pb__content-wrapper">
                        <div class="ut2-pb__main-content-box shaded">
                            <?php $_smarty_tpl->assign('form_open', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_open'));?>


                            <?php $_smarty_tpl->assign('old_price', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php $_smarty_tpl->assign('price', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php $_smarty_tpl->assign('list_discount', "list_discount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php $_smarty_tpl->assign('discount_label', "discount_label_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

                            <div class="ut2-pb__rating"><?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?></div>

                            <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']) {?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/product_brand_logo_prepare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>

                            <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/product_price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__deal_of_the_day_product_view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__deal_of_the_day_product_view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:promo_text"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <?php if ($_smarty_tpl->getValue('product')['promo_text']) {?>
                                <div class="ut2-pb__note">
                                    <?php echo $_smarty_tpl->getValue('product')['promo_text'];?>

                                </div>
                            <?php }?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:promo_text"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                            <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'] && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_brand_format'][$_smarty_tpl->getValue('settings')['ab__device']] === "name") {?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/product_brand_logo_prepare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                                <?php if ($_smarty_tpl->getValue('brand_feature')) {?>
                                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                        <div class="ut2-pb__product-brand-name">
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>array($_smarty_tpl->getValue('brand_feature')),'no_container'=>true,'feature_image'=>false,'hide_name'=>true,'feature_link'=>true), (int) 0, $_smarty_current_dir);
?>
                                        </div>
                                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:brand"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                <?php }?>
                            <?php }?>

                            <?php if ($_smarty_tpl->getValue('capture_options_vs_qty')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_options');
}?>
                            <div class="ut2-pb__options">
                                <?php $_smarty_tpl->assign('product_options', "product_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_options'));?>

                            </div>
                            <?php if ($_smarty_tpl->getValue('capture_options_vs_qty')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}?>

                            <div class="ut2-pb__advanced-options">
                                <?php if ($_smarty_tpl->getValue('capture_options_vs_qty')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_options');
}?>
                                <?php $_smarty_tpl->assign('advanced_options', "advanced_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('advanced_options'));?>

                                <?php if ($_smarty_tpl->getValue('capture_options_vs_qty')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}?>
                            </div>

                            <?php $_smarty_tpl->assign('product_edp', "product_edp_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_edp'));?>


                            <?php if ($_smarty_tpl->getValue('capture_buttons')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "buttons", null, null);
}?>
                            <div class="ut2-pb__button ty-product-block__button">
                                <?php if ($_smarty_tpl->getValue('show_qty')) {?>
                                    <div class="ut2-qty__wrap <?php if ($_smarty_tpl->getValue('min_qty') && $_smarty_tpl->getValue('product')['min_qty']) {?>min-qty<?php }?>">
                                        <?php if ($_smarty_tpl->getValue('capture_options_vs_qty')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_options');
}?>
                                        <?php $_smarty_tpl->assign('qty', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'));?>


                                        <?php $_smarty_tpl->assign('min_qty', "min_qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('min_qty'));?>

                                        <?php if ($_smarty_tpl->getValue('capture_options_vs_qty')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}?>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('show_details_button')) {?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("view_details", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"submit"), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>

                                <?php $_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart'));?>


                                <?php $_smarty_tpl->assign('list_buttons', "list_buttons_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('list_buttons'));?>

                            </div>
                            <?php if ($_smarty_tpl->getValue('capture_buttons')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}?>

                                                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:geo_maps"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:geo_maps"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                            <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_features'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['header_features']) {?>
                                <div class="ut2-pb__short-features"><?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>$_smarty_tpl->getValue('product')['header_features']), (int) 0, $_smarty_current_dir);
?></div>
                            <?php }?>

                            <?php if ($_smarty_tpl->getValue('show_short_descr') && strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('product')['short_description']))) {?>
                                <div class="ut2-pb__short-descr" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:short_description:".((string)$_smarty_tpl->getValue('product')['product_id'])), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getValue('product')['short_description'];?>
</div>
                            <?php }?>

                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <?php $_smarty_tpl->assign('form_close', "form_close_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_close'));?>

                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                            <?php if ($_smarty_tpl->getValue('show_product_tabs')) {?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:views/tabs/components/product_popup_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'popupsbox_content');?>

                            <?php }?>
                        </div>

                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__vendor_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__vendor_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__motivation_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__motivation_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                    </div>
                </div>

                <div class="ut2-pb__tabs-wrapper">

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('settings')['abt__ut2']['products']['custom_block_id'])) {?>
                        <div class="ut2-pb__custom-block">
                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('render_block')->handle(array('block_id'=>$_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('settings')['abt__ut2']['products']['custom_block_id']),'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false), $_smarty_tpl);?>

                        </div>
                    <?php }?>

                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:buy_together"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:buy_together"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_tabs_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                        <div class="ut2-pb__tabs<?php if ($_smarty_tpl->getValue('settings')['Appearance']['product_details_in_tab'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?> tabs-list<?php }?>">
                            <?php if ($_smarty_tpl->getValue('show_product_tabs')) {?>
                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

                                <?php if ($_smarty_tpl->getValue('blocks')[$_smarty_tpl->getValue('tabs_block_id')]['properties']['wrapper']) {?>
                                    <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('blocks')[$_smarty_tpl->getValue('tabs_block_id')]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabsbox_content'),'title'=>$_smarty_tpl->getValue('blocks')[$_smarty_tpl->getValue('tabs_block_id')]['description']), (int) 0, $_smarty_current_dir);
?>
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabsbox_content');?>

                                <?php }?>
                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                            <?php }?>
                        </div>
                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_tabs_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                </div>

                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_detail_bottom"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_detail_bottom"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            </div>
        <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:view_main_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

        <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'hide_form_changed') == "Y") {?>
            <?php $_smarty_tpl->assign('hide_form', $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'orig_val_hide_form'), false, NULL);?>
        <?php }?>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:bottom_product_layer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:bottom_product_layer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>

    <div class="product-details">
    </div>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
$_smarty_tpl->assign('details_page', true, false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
} else { ?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/abt__ut2_mobile_template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>$_smarty_tpl->getValue('product')['header_features']), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_templates/bigpicture_template.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/product_templates/bigpicture_template.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/exceptions.js"), $_smarty_tpl);?>


<?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>

    <?php $_smarty_tpl->assign('pd_image_gallery_width', (($tmp = (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['image_width'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_width'] ?? null : $tmp) ?? null)===null||$tmp==='' ? 430 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('pd_image_gallery_height', (($tmp = (($tmp = $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['image_height'][$_smarty_tpl->getValue('settings')['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_height'] ?? null : $tmp) ?? null)===null||$tmp==='' ? 430 ?? null : $tmp), false, NULL);?>

    <?php $_smarty_tpl->assign('is_add_to_cart_mv', true, false, NULL);?>
    <?php $_smarty_tpl->assign('abt__shareb_mute', false, false, NULL);?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && ($_smarty_tpl->getValue('product')['master_product_id'] || !$_smarty_tpl->getValue('product')['company_id'])) {
$_smarty_tpl->assign('is_add_to_cart_mv', false, false, NULL);
}?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__product_images_count"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->assign('product_images_count', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')['image_pairs']), false, NULL);?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__product_images_count"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

    <div class="ut2-pb ty-product-block ut2-big-image<?php if ($_smarty_tpl->getValue('product_images_count') < 1) {?> --single<?php }?>" style="--pd-image-gallery-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pd_image_gallery_width')), ENT_QUOTES, 'UTF-8');?>
;--pd-image-gallery-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pd_image_gallery_height')), ENT_QUOTES, 'UTF-8');?>
">

        <div class="ut2-breadcrumbs__wrapper">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ut2_main_info_breadcrumbs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ut2_main_info_breadcrumbs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('product')) {?>
            <?php $_smarty_tpl->assign('obj_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'but_role'=>"big",'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'product_labels_position'=>"right-top",'hide_qty_label'=>true), (int) 0, $_smarty_current_dir);
?>

            <div class="ut2-pb__title ut2-pb__title-wrap">
                <?php if (!$_smarty_tpl->getValue('hide_title')) {?>
                    <h1 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:product:".((string)$_smarty_tpl->getValue('product')['product_id'])), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getValue('product')['product'];?>
</h1>
                <?php }?>

                <div class="ut2-pb__top-ss">

                    <?php if ($_smarty_tpl->getValue('show_sku') == "true" && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('product')['product_code'])) {?>
                        <div class="ut2-pb__sku">
                            <?php $_smarty_tpl->assign('sku', "sku_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('sku'));?>

                        </div>
                    <?php }?>

                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:top_ss"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:top_ss"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                </div>
            </div>

            <div class="ut2-pb__wrapper clearfix">
                <div class="ut2-pb__section-combined">
                    <div class="ut2-pb__img-wrapper">
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:image_wrap"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                        <?php if (!$_smarty_tpl->getValue('no_images')) {?>
                            <div class="ut2-pb__img cm-reload-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
 images-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__ut2']['products'][$_smarty_tpl->getValue('settings')['abt__details_layout']]['multiple_product_images'][$_smarty_tpl->getValue('settings')['ab__device']]), ENT_QUOTES, 'UTF-8');?>
" data-ca-previewer="true" id="product_images_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
_update">
                                <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'show_detailed_link'=>"Y",'image_width'=>$_smarty_tpl->getValue('pd_image_gallery_width'),'image_height'=>$_smarty_tpl->getValue('pd_image_gallery_height'),'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>

                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                <!--product_images_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
_update--></div>
                        <?php } else { ?>
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        <?php }?>
                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:image_wrap"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                    </div>
                    <div class="ut2-pb__content-wrapper">
                        <div class="ut2-pb__main-content-box shaded">
                            <?php $_smarty_tpl->assign('form_open', "form_open_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_open'));?>


                            <?php $_smarty_tpl->assign('old_price', "old_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php $_smarty_tpl->assign('price', "price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php $_smarty_tpl->assign('list_discount', "list_discount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php $_smarty_tpl->assign('discount_label', "discount_label_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>

                            <div class="ut2-pb__rating"><?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?></div>

                            <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']) {?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/product_brand_logo_prepare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>

                            <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/product_price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__deal_of_the_day_product_view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__deal_of_the_day_product_view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:promo_text"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <?php if ($_smarty_tpl->getValue('product')['promo_text']) {?>
                                <div class="ut2-pb__note">
                                    <?php echo $_smarty_tpl->getValue('product')['promo_text'];?>

                                </div>
                            <?php }?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:promo_text"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                            <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'] && $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_brand_format'][$_smarty_tpl->getValue('settings')['ab__device']] === "name") {?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/product_brand_logo_prepare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                                <?php if ($_smarty_tpl->getValue('brand_feature')) {?>
                                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                        <div class="ut2-pb__product-brand-name">
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>array($_smarty_tpl->getValue('brand_feature')),'no_container'=>true,'feature_image'=>false,'hide_name'=>true,'feature_link'=>true), (int) 0, $_smarty_current_dir);
?>
                                        </div>
                                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:brand"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                <?php }?>
                            <?php }?>

                            <?php if ($_smarty_tpl->getValue('capture_options_vs_qty')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_options');
}?>
                            <div class="ut2-pb__options">
                                <?php $_smarty_tpl->assign('product_options', "product_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_options'));?>

                            </div>
                            <?php if ($_smarty_tpl->getValue('capture_options_vs_qty')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}?>

                            <div class="ut2-pb__advanced-options">
                                <?php if ($_smarty_tpl->getValue('capture_options_vs_qty')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_options');
}?>
                                <?php $_smarty_tpl->assign('advanced_options', "advanced_options_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('advanced_options'));?>

                                <?php if ($_smarty_tpl->getValue('capture_options_vs_qty')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}?>
                            </div>

                            <?php $_smarty_tpl->assign('product_edp', "product_edp_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_edp'));?>


                            <?php if ($_smarty_tpl->getValue('capture_buttons')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "buttons", null, null);
}?>
                            <div class="ut2-pb__button ty-product-block__button">
                                <?php if ($_smarty_tpl->getValue('show_qty')) {?>
                                    <div class="ut2-qty__wrap <?php if ($_smarty_tpl->getValue('min_qty') && $_smarty_tpl->getValue('product')['min_qty']) {?>min-qty<?php }?>">
                                        <?php if ($_smarty_tpl->getValue('capture_options_vs_qty')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_options');
}?>
                                        <?php $_smarty_tpl->assign('qty', "qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('qty'));?>


                                        <?php $_smarty_tpl->assign('min_qty', "min_qty_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('min_qty'));?>

                                        <?php if ($_smarty_tpl->getValue('capture_options_vs_qty')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}?>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('show_details_button')) {?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("view_details", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"submit"), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>

                                <?php $_smarty_tpl->assign('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('add_to_cart'));?>


                                <?php $_smarty_tpl->assign('list_buttons', "list_buttons_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('list_buttons'));?>

                            </div>
                            <?php if ($_smarty_tpl->getValue('capture_buttons')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}?>

                                                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:geo_maps"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:geo_maps"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__s_pictograms_pos_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                            <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_features'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('product')['header_features']) {?>
                                <div class="ut2-pb__short-features"><?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>$_smarty_tpl->getValue('product')['header_features']), (int) 0, $_smarty_current_dir);
?></div>
                            <?php }?>

                            <?php if ($_smarty_tpl->getValue('show_short_descr') && strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('product')['short_description']))) {?>
                                <div class="ut2-pb__short-descr" <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('live_edit')->handle(array('name'=>"product:short_description:".((string)$_smarty_tpl->getValue('product')['product_id'])), $_smarty_tpl);?>
><?php echo $_smarty_tpl->getValue('product')['short_description'];?>
</div>
                            <?php }?>

                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <?php $_smarty_tpl->assign('form_close', "form_close_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('form_close'));?>

                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                            <?php if ($_smarty_tpl->getValue('show_product_tabs')) {?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:views/tabs/components/product_popup_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'popupsbox_content');?>

                            <?php }?>
                        </div>

                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__vendor_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__vendor_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__motivation_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:ab__motivation_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                    </div>
                </div>

                <div class="ut2-pb__tabs-wrapper">

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('settings')['abt__ut2']['products']['custom_block_id'])) {?>
                        <div class="ut2-pb__custom-block">
                            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('render_block')->handle(array('block_id'=>$_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('settings')['abt__ut2']['products']['custom_block_id']),'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false), $_smarty_tpl);?>

                        </div>
                    <?php }?>

                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:buy_together"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:buy_together"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_tabs_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                        <div class="ut2-pb__tabs<?php if ($_smarty_tpl->getValue('settings')['Appearance']['product_details_in_tab'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?> tabs-list<?php }?>">
                            <?php if ($_smarty_tpl->getValue('show_product_tabs')) {?>
                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

                                <?php if ($_smarty_tpl->getValue('blocks')[$_smarty_tpl->getValue('tabs_block_id')]['properties']['wrapper']) {?>
                                    <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('blocks')[$_smarty_tpl->getValue('tabs_block_id')]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabsbox_content'),'title'=>$_smarty_tpl->getValue('blocks')[$_smarty_tpl->getValue('tabs_block_id')]['description']), (int) 0, $_smarty_current_dir);
?>
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabsbox_content');?>

                                <?php }?>
                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                            <?php }?>
                        </div>
                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_tabs_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                </div>

                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_detail_bottom"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_detail_bottom"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            </div>
        <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:view_main_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

        <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'hide_form_changed') == "Y") {?>
            <?php $_smarty_tpl->assign('hide_form', $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'orig_val_hide_form'), false, NULL);?>
        <?php }?>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:bottom_product_layer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:bottom_product_layer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>

    <div class="product-details">
    </div>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
$_smarty_tpl->assign('details_page', true, false, NULL);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
} else { ?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/abt__ut2_mobile_template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>$_smarty_tpl->getValue('product')['header_features']), (int) 0, $_smarty_current_dir);
}
}
}
}
