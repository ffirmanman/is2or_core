<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:15
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_templates/bigpicture_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571b5b7664_25946111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3a453a18861032c291b9ae2f53c5a6b8cb9fbf3' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_templates/bigpicture_template.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/breadcrumbs.tpl' => 2,
    'tygh:common/product_data.tpl' => 2,
    'tygh:blocks/product_templates/components/product_brand_logo_prepare.tpl' => 2,
    'tygh:views/products/components/product_features_short_list.tpl' => 4,
    'tygh:blocks/product_templates/components/product_rating.tpl' => 2,
    'tygh:blocks/product_templates/components/product_price.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
    'tygh:views/tabs/components/product_popup_tabs.tpl' => 2,
    'tygh:views/products/components/product_images.tpl' => 2,
    'tygh:views/tabs/components/product_tabs.tpl' => 4,
    'tygh:blocks/product_templates/components/abt__ut2_mobile_template.tpl' => 2,
  ),
),false)) {
function content_6834571b5b7664_25946111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.live_edit.php','function'=>'smarty_function_live_edit',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.render_block.php','function'=>'smarty_function_render_block',),6=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),7=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','view_details','add_to_cart','view_details'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>

    <?php $_smarty_tpl->_assignInScope('pd_image_gallery_width', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['image_width'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width'] ?? null : $tmp) ?? null)===null||$tmp==='' ? 430 ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('pd_image_gallery_height', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['image_height'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height'] ?? null : $tmp) ?? null)===null||$tmp==='' ? 430 ?? null : $tmp));?>

    <?php $_smarty_tpl->_assignInScope('is_add_to_cart_mv', true);?>
    <?php $_smarty_tpl->_assignInScope('abt__shareb_mute', false);?>
    <?php if (fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['product']->value['master_product_id'] || !$_smarty_tpl->tpl_vars['product']->value['company_id'])) {
$_smarty_tpl->_assignInScope('is_add_to_cart_mv', false);
}?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__product_images_count"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__product_images_count"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_assignInScope('product_images_count', smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['image_pairs']));?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__product_images_count"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <div class="ut2-pb ty-product-block ty-product-detail ut2-big-image <?php if ($_smarty_tpl->tpl_vars['product_images_count']->value < 1) {?>--single<?php }?>" style="--pd-image-gallery-width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pd_image_gallery_width']->value, ENT_QUOTES, 'UTF-8');?>
;--pd-image-gallery-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pd_image_gallery_height']->value, ENT_QUOTES, 'UTF-8');?>
">

        <div class="ut2-breadcrumbs__wrapper">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ut2_main_info_breadcrumbs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ut2_main_info_breadcrumbs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ut2_main_info_breadcrumbs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
            <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart"),'product_labels_position'=>"right-top",'hide_qty_label'=>true), 0, false);
?>

            <div class="ut2-pb__title ut2-pb__title-wrap">
                <?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
                    <h1 <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></h1>
                <?php }?>
                <div class="ut2-pb__top-ss">
                    <?php if ($_smarty_tpl->tpl_vars['show_sku']->value == "true" && smarty_modifier_trim($_smarty_tpl->tpl_vars['product']->value['product_code'])) {?>
                        <div class="ut2-pb__sku">
                            <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

                        </div>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:top_ss"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:top_ss"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:top_ss"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id'] && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_brand_format'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "name") {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_templates/components/product_brand_logo_prepare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php if ($_smarty_tpl->tpl_vars['brand_feature']->value) {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:brand"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="ut2-pb__product-brand-name">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>array($_smarty_tpl->tpl_vars['brand_feature']->value),'no_container'=>true,'feature_image'=>false,'hide_name'=>true,'feature_link'=>true), 0, false);
?>
                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:brand"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                    <?php }?>
                </div>
            </div>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:view_main_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ut2-pb__wrapper clearfix">
                <div class="ut2-pb__right-wrapper">

                    <div class="ut2-pb__main-content-box">
                        <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>


                        <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('discount_label', "discount_label_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

                        <div class="ut2-pb__rating"><?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_templates/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_templates/components/product_price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:promo_text"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:promo_text"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['promo_text']) {?>
                            <div class="ut2-pb__note">
                                <?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>

                            </div>
                        <?php }?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:promo_text"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__deal_of_the_day_product_view"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__deal_of_the_day_product_view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__deal_of_the_day_product_view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                        <div class="ut2-pb__options">
                            <?php $_smarty_tpl->_assignInScope('product_options', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value);?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

                        <div class="ut2-pb__advanced-options clearfix">
                            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                            <?php $_smarty_tpl->_assignInScope('advanced_options', "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['advanced_options']->value);?>

                            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                        </div>

                        <?php $_smarty_tpl->_assignInScope('product_edp', "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_edp']->value);?>


                        <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);
}?>
                        <div class="ut2-pb__button ty-product-block__button">
                            <?php if ($_smarty_tpl->tpl_vars['show_qty']->value) {?>
                                <div class="ut2-qty__wrap <?php if ($_smarty_tpl->tpl_vars['min_qty']->value && $_smarty_tpl->tpl_vars['product']->value['min_qty']) {?>min-qty<?php }?>">
                                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                                    <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);?>


                                    <?php $_smarty_tpl->_assignInScope('min_qty', "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['min_qty']->value);?>

                                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                                </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['show_details_button']->value) {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_text'=>$_smarty_tpl->__("view_details"),'but_role'=>"submit"), 0, false);
?>
                            <?php }?>

                            <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>


                            <?php $_smarty_tpl->_assignInScope('list_buttons', "list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buttons']->value);?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__s_pictograms_pos_2"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_detail_bottom"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/components/product_popup_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popupsbox_content');?>

                        <?php }?>
                    </div>

                    <?php if (intval($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['custom_block_id'])) {?>
                        <div class="ut2-pb__custom-block"><?php echo smarty_function_render_block(array('block_id'=>intval($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['custom_block_id']),'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false),$_smarty_tpl);?>
</div>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__vendor_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__vendor_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__vendor_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__motivation_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__motivation_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__motivation_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:geo_maps"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:geo_maps"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:geo_maps"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


                    <?php if ($_smarty_tpl->tpl_vars['show_short_descr']->value && strlen(trim($_smarty_tpl->tpl_vars['product']->value['short_description']))) {?>
                        <div class="ut2-pb__short-descr" <?php echo smarty_function_live_edit(array('name'=>"product:short_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>
</div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_features'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['product']->value['header_features']) {?>
                        <div class="ut2-pb__short-features">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0, true);
?>
                        </div>
                    <?php }?>
                </div>
                <div class="ut2-pb__img-wrapper">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:image_wrap"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:image_wrap"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if (!$_smarty_tpl->tpl_vars['no_images']->value) {?>
                            <div class="ut2-pb__img cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
 images-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products'][$_smarty_tpl->tpl_vars['settings']->value['abt__details_layout']]['multiple_product_images'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['pd_image_gallery_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['pd_image_gallery_height']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>smarty_modifier_enum("YesNo::YES")), 0, false);
?>
                                    <!--product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_update--></div>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:image_wrap"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__s_pictograms_pos_1"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?>
                    <div class="ut2-pb__tabs-wrapper">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:buy_together"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:buy_together"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:buy_together"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_tabs_pre"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_tabs_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div class="ut2-pb__tabs<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['product_details_in_tab'] === smarty_modifier_enum("YesNo::NO")) {?> tabs-list<?php }?>">
                                <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_tabs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                    <?php if ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper']) {?>
                                        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content'),'title'=>$_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['description']), 0, true);
?>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content');?>

                                    <?php }?>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                            </div>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_tabs_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                    <?php }?>
                </div>
            </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:view_main_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "desktop") {?>
                <div class="ut2-pb__tabs-wrapper <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['product_details_in_tab'] === smarty_modifier_enum("YesNo::NO")) {?>tabs-list<?php }?>">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:buy_together"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:buy_together"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:buy_together"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_tabs_pre"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_tabs_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <div class="ut2-pb__tabs">
                            <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_tabs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                <?php if ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper']) {?>
                                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content'),'title'=>$_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['description']), 0, true);
?>
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content');?>

                                <?php }?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                        </div>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_tabs_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'hide_form_changed') === smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->_assignInScope('hide_form', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'orig_val_hide_form'));?>
        <?php }?>
    </div>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:bottom_product_layer"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:bottom_product_layer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:bottom_product_layer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <div class="product-details">
    </div>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
$_smarty_tpl->_assignInScope('details_page', true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_templates/components/abt__ut2_mobile_template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_templates/bigpicture_template.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_templates/bigpicture_template.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>

    <?php $_smarty_tpl->_assignInScope('pd_image_gallery_width', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['image_width'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_width'] ?? null : $tmp) ?? null)===null||$tmp==='' ? 430 ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('pd_image_gallery_height', (($tmp = (($tmp = $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['image_height'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height'] ?? null : $tmp) ?? null)===null||$tmp==='' ? 430 ?? null : $tmp));?>

    <?php $_smarty_tpl->_assignInScope('is_add_to_cart_mv', true);?>
    <?php $_smarty_tpl->_assignInScope('abt__shareb_mute', false);?>
    <?php if (fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['product']->value['master_product_id'] || !$_smarty_tpl->tpl_vars['product']->value['company_id'])) {
$_smarty_tpl->_assignInScope('is_add_to_cart_mv', false);
}?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__product_images_count"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__product_images_count"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_assignInScope('product_images_count', smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['image_pairs']));?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__product_images_count"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <div class="ut2-pb ty-product-block ty-product-detail ut2-big-image <?php if ($_smarty_tpl->tpl_vars['product_images_count']->value < 1) {?>--single<?php }?>" style="--pd-image-gallery-width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pd_image_gallery_width']->value, ENT_QUOTES, 'UTF-8');?>
;--pd-image-gallery-height: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pd_image_gallery_height']->value, ENT_QUOTES, 'UTF-8');?>
">

        <div class="ut2-breadcrumbs__wrapper">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ut2_main_info_breadcrumbs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ut2_main_info_breadcrumbs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ut2_main_info_breadcrumbs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
            <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'but_role'=>"big",'but_text'=>$_smarty_tpl->__("add_to_cart"),'product_labels_position'=>"right-top",'hide_qty_label'=>true), 0, true);
?>

            <div class="ut2-pb__title ut2-pb__title-wrap">
                <?php if (!$_smarty_tpl->tpl_vars['hide_title']->value) {?>
                    <h1 <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><bdi><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</bdi></h1>
                <?php }?>
                <div class="ut2-pb__top-ss">
                    <?php if ($_smarty_tpl->tpl_vars['show_sku']->value == "true" && smarty_modifier_trim($_smarty_tpl->tpl_vars['product']->value['product_code'])) {?>
                        <div class="ut2-pb__sku">
                            <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

                        </div>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:top_ss"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:top_ss"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:top_ss"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id'] && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_brand_format'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "name") {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_templates/components/product_brand_logo_prepare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php if ($_smarty_tpl->tpl_vars['brand_feature']->value) {?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:brand"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="ut2-pb__product-brand-name">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>array($_smarty_tpl->tpl_vars['brand_feature']->value),'no_container'=>true,'feature_image'=>false,'hide_name'=>true,'feature_link'=>true), 0, true);
?>
                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:brand"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php }?>
                    <?php }?>
                </div>
            </div>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:view_main_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:view_main_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="ut2-pb__wrapper clearfix">
                <div class="ut2-pb__right-wrapper">

                    <div class="ut2-pb__main-content-box">
                        <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>


                        <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php $_smarty_tpl->_assignInScope('discount_label', "discount_label_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

                        <div class="ut2-pb__rating"><?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_templates/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_templates/components/product_price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:promo_text"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:promo_text"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['promo_text']) {?>
                            <div class="ut2-pb__note">
                                <?php echo $_smarty_tpl->tpl_vars['product']->value['promo_text'];?>

                            </div>
                        <?php }?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:promo_text"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__deal_of_the_day_product_view"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__deal_of_the_day_product_view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__deal_of_the_day_product_view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                        <div class="ut2-pb__options">
                            <?php $_smarty_tpl->_assignInScope('product_options', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value);?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

                        <div class="ut2-pb__advanced-options clearfix">
                            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                            <?php $_smarty_tpl->_assignInScope('advanced_options', "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['advanced_options']->value);?>

                            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                        </div>

                        <?php $_smarty_tpl->_assignInScope('product_edp', "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_edp']->value);?>


                        <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);
}?>
                        <div class="ut2-pb__button ty-product-block__button">
                            <?php if ($_smarty_tpl->tpl_vars['show_qty']->value) {?>
                                <div class="ut2-qty__wrap <?php if ($_smarty_tpl->tpl_vars['min_qty']->value && $_smarty_tpl->tpl_vars['product']->value['min_qty']) {?>min-qty<?php }?>">
                                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options');
}?>
                                    <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);?>


                                    <?php $_smarty_tpl->_assignInScope('min_qty', "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['min_qty']->value);?>

                                    <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
                                </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['show_details_button']->value) {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_text'=>$_smarty_tpl->__("view_details"),'but_role'=>"submit"), 0, true);
?>
                            <?php }?>

                            <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>


                            <?php $_smarty_tpl->_assignInScope('list_buttons', "list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buttons']->value);?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__s_pictograms_pos_2"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_detail_bottom"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_detail_bottom"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/components/product_popup_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popupsbox_content');?>

                        <?php }?>
                    </div>

                    <?php if (intval($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['custom_block_id'])) {?>
                        <div class="ut2-pb__custom-block"><?php echo smarty_function_render_block(array('block_id'=>intval($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['custom_block_id']),'dispatch'=>"products.view",'use_cache'=>false,'parse_js'=>false),$_smarty_tpl);?>
</div>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__vendor_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__vendor_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__vendor_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__motivation_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__motivation_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__motivation_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:geo_maps"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:geo_maps"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:geo_maps"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


                    <?php if ($_smarty_tpl->tpl_vars['show_short_descr']->value && strlen(trim($_smarty_tpl->tpl_vars['product']->value['short_description']))) {?>
                        <div class="ut2-pb__short-descr" <?php echo smarty_function_live_edit(array('name'=>"product:short_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>
</div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_features'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['product']->value['header_features']) {?>
                        <div class="ut2-pb__short-features">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0, true);
?>
                        </div>
                    <?php }?>
                </div>
                <div class="ut2-pb__img-wrapper">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:image_wrap"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:image_wrap"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if (!$_smarty_tpl->tpl_vars['no_images']->value) {?>
                            <div class="ut2-pb__img cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
 images-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products'][$_smarty_tpl->tpl_vars['settings']->value['abt__details_layout']]['multiple_product_images'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['pd_image_gallery_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['pd_image_gallery_height']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'show_detailed_link'=>smarty_modifier_enum("YesNo::YES")), 0, true);
?>
                                    <!--product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_update--></div>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:image_wrap"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:ab__s_pictograms_pos_1"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:ab__s_pictograms_pos_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?>
                    <div class="ut2-pb__tabs-wrapper">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:buy_together"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:buy_together"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:buy_together"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_tabs_pre"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_tabs_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div class="ut2-pb__tabs<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['product_details_in_tab'] === smarty_modifier_enum("YesNo::NO")) {?> tabs-list<?php }?>">
                                <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_tabs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                    <?php if ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper']) {?>
                                        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content'),'title'=>$_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['description']), 0, true);
?>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content');?>

                                    <?php }?>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php }?>
                            </div>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_tabs_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                    <?php }?>
                </div>
            </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:view_main_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "desktop") {?>
                <div class="ut2-pb__tabs-wrapper <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['product_details_in_tab'] === smarty_modifier_enum("YesNo::NO")) {?>tabs-list<?php }?>">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:buy_together"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:buy_together"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:buy_together"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_tabs_pre"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_tabs_pre"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <div class="ut2-pb__tabs">
                            <?php if ($_smarty_tpl->tpl_vars['show_product_tabs']->value) {?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_tabs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/components/product_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                <?php if ($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper']) {?>
                                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['properties']['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content'),'title'=>$_smarty_tpl->tpl_vars['blocks']->value[$_smarty_tpl->tpl_vars['tabs_block_id']->value]['description']), 0, true);
?>
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox_content');?>

                                <?php }?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                        </div>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_tabs_pre"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'hide_form_changed') === smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->_assignInScope('hide_form', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'orig_val_hide_form'));?>
        <?php }?>
    </div>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:bottom_product_layer"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:bottom_product_layer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:bottom_product_layer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <div class="product-details">
    </div>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
$_smarty_tpl->_assignInScope('details_page', true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_templates/components/abt__ut2_mobile_template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>$_smarty_tpl->tpl_vars['product']->value['header_features']), 0, true);
}
}
}
}
