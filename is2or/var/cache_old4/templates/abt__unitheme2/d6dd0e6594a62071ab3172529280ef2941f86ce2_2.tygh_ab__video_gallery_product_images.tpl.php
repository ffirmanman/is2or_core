<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:addons/is2or_product_360_images/components/ab__video_gallery_product_images.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a002926e6_46341879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6dd0e6594a62071ab3172529280ef2941f86ce2' => 
    array (
      0 => 'addons/is2or_product_360_images/components/ab__video_gallery_product_images.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__video_gallery/components/helpers.tpl' => 2,
    'tygh:common/image.tpl' => 4,
    'tygh:addons/ab__video_gallery/components/video_popups.tpl' => 2,
    'tygh:addons/ab__video_gallery/components/product_thumbnail.tpl' => 4,
    'tygh:common/previewer.tpl' => 2,
  ),
))) {
function content_69fb4a002926e6_46341879 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_product_360_images/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/helpers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php if ($_smarty_tpl->getValue('thumbnails_size')) {?>
    <?php $_smarty_tpl->assign('th_size', (($tmp = $_smarty_tpl->getValue('thumbnails_size') ?? null)===null||$tmp==='' ? 50 ?? null : $tmp), false, NULL);
} elseif ($_smarty_tpl->getValue('settings')['abt__device'] == "desktop") {?>
    <?php $_smarty_tpl->assign('th_size', (($tmp = $_smarty_tpl->getValue('addons')['ab__video_gallery']['th_size'] ?? null)===null||$tmp==='' ? 60 ?? null : $tmp), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('th_size', 50, false, NULL);
}?>

<?php $_smarty_tpl->assign('th_sum_size', (($tmp = $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_height'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('pd_image_gallery_height') ?? null : $tmp)/$_smarty_tpl->getValue('th_size'), false, NULL);?>

<?php $_smarty_tpl->assign('ab__vg_videos', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_videos')($_smarty_tpl->getValue('product')['product_id']), false, NULL);
$_smarty_tpl->assign('ab__vg_settings', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_setting')($_smarty_tpl->getValue('product')['product_id']), false, NULL);
$_smarty_tpl->assign('is_vertical', (($_smarty_tpl->getValue('runtime')['mode'] !== 'quick_view') && ($_smarty_tpl->getValue('addons')['ab__video_gallery']['vertical'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"))) && $_smarty_tpl->getValue('settings')['abt__device'] !== "mobile", false, NULL);
$_smarty_tpl->assign('is_thumbnails_gallery', $_smarty_tpl->getValue('settings')['Appearance']['thumbnails_gallery'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
$_smarty_tpl->assign('total_count', ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')['image_pairs'])+$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('ab__vg_videos'))+1), false, NULL);
$_smarty_tpl->assign('total_images', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')['image_pairs']), false, NULL);
$_smarty_tpl->assign('product_pos_enum', "Addons\Ab_videoGallery\VideoProductPositionTypes", false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "abt__ut2_vertical_gallery_width", null, null);?>
    <?php if ($_smarty_tpl->getValue('total_count') > $_smarty_tpl->getValue('th_sum_size') && !$_smarty_tpl->getValue('is_thumbnails_gallery')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')*2+5), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->getValue('total_count') > 1) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('product')['main_pair']['icon'] || $_smarty_tpl->getValue('product')['main_pair']['detailed']) {?>
    <?php $_smarty_tpl->assign('image_pair_var', $_smarty_tpl->getValue('product')['main_pair'], false, NULL);
} elseif ($_smarty_tpl->getValue('product')['option_image_pairs']) {?>
    <?php $_smarty_tpl->assign('image_pair_var', $_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('product')['option_image_pairs']), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('image_pair_var')['image_id']) {?>
    <?php $_smarty_tpl->assign('image_id', $_smarty_tpl->getValue('image_pair_var')['image_id'], false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('image_id', $_smarty_tpl->getValue('image_pair_var')['detailed_id'], false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('image_pair_var') || ( !$_smarty_tpl->hasVariable('ab__vg_videos') || empty($_smarty_tpl->getValue('ab__vg_videos')))) {?>
    <?php $_smarty_tpl->assign('total_images', $_smarty_tpl->getValue('total_images')+1, false, NULL);
}?>

<?php if (!$_smarty_tpl->getValue('preview_id')) {?>
    <?php $_smarty_tpl->assign('preview_id', $_smarty_tpl->getSmarty()->getModifierCallback('uniqid')($_smarty_tpl->getValue('product')['product_id']), false, NULL);
}?>

<?php $_smarty_tpl->assign('image_height_block', (($tmp = $_smarty_tpl->getValue('image_height') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_height'] ?? null : $tmp), false, NULL);?>

<?php $_smarty_tpl->assign('images_wrapper_classes', "ab_vg-images-wrapper", false, NULL);?>

<?php if (!$_smarty_tpl->getValue('nocarousel')) {?>
    <?php $_smarty_tpl->assign('images_wrapper_classes', ((string)$_smarty_tpl->getValue('images_wrapper_classes'))." ab_vg-images-wrapper_mode_carousel", false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('is_vertical') && $_smarty_tpl->getValue('total_count') > 1) {?>
    <?php $_smarty_tpl->assign('images_wrapper_classes', ((string)$_smarty_tpl->getValue('images_wrapper_classes'))." ab_vg-images-wrapper_mode_inline", false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('ab__vg_videos') && $_smarty_tpl->getValue('ab__vg_settings')['replace_image'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('images_wrapper_classes', ((string)$_smarty_tpl->getValue('images_wrapper_classes'))." ab_vg-replace_image", false, NULL);
}?>

<div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_wrapper_classes')), ENT_QUOTES, 'UTF-8');?>
" data-ca-previewer="true" <?php if ($_smarty_tpl->getValue('is_vertical') && $_smarty_tpl->getValue('total_count') > 1) {?>style="--vg-thumb-width-size: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_vertical_gallery_width')), ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>>
    <?php $_smarty_tpl->assign('product_labels', "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_labels'));?>


    <?php $_smarty_tpl->assign('wrapper_styles', '', false, NULL);?>
    <?php $_smarty_tpl->assign('wrapper_class', "ty-product-img", false, NULL);?>

    <?php if (!$_smarty_tpl->getValue('nopreviewer')) {
$_smarty_tpl->assign('wrapper_class', ((string)$_smarty_tpl->getValue('wrapper_class'))." cm-preview-wrapper", false, NULL);
}?>
    <?php if (!$_smarty_tpl->getValue('nocarousel')) {?>
        <?php if ($_smarty_tpl->getValue('is_vertical') && $_smarty_tpl->getValue('total_count') > 1) {?>
            <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['multiple_product_images'] === 1) {?>
                <?php $_smarty_tpl->assign('wrapper_styles', ((string)$_smarty_tpl->getValue('wrapper_styles'))."height: ".((string)$_smarty_tpl->getValue('image_height_block'))."px;", false, NULL);?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('settings')['abt__device'] !== "mobile") {?>
            <?php $_smarty_tpl->assign('wrapper_styles', ((string)$_smarty_tpl->getValue('wrapper_styles'))."height: ".((string)$_smarty_tpl->getValue('image_height_block'))."px;", false, NULL);?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('is_vertical')) {?>
        <?php if ($_smarty_tpl->getValue('is_thumbnails_gallery')) {?>
            <?php $_smarty_tpl->assign('wrapper_class', ((string)$_smarty_tpl->getValue('wrapper_class'))." ab-vg-vertical", false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('wrapper_class', ((string)$_smarty_tpl->getValue('wrapper_class'))." ab-vertical", false, NULL);?>
        <?php }?>
    <?php }?>

    <div id="product_images_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wrapper_class')), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('wrapper_styles')) {?> style="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wrapper_styles')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <?php $_smarty_tpl->assign('videos', $_smarty_tpl->getValue('ab__vg_videos'), false, NULL);?>
        <?php $_smarty_tpl->assign('image_iterator', 0, false, NULL);?>

        <?php if ($_smarty_tpl->getValue('product')['360_images']) {?>
            <?php $_smarty_tpl->assign('image_iterator', $_smarty_tpl->getValue('image_iterator')+1, false, NULL);?>

            <?php $_smarty_tpl->assign('first_360_image', $_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('product')['360_images']), false, NULL);?>
            <div class="ty-product-img ty-center">
                <div
                    class="cloudimage-360"
                    id="360ImagesContainer<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
"
                    data-folder="/images/360_images/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
/"
                    data-filename-x="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('first_360_image')['prefix']), ENT_QUOTES, 'UTF-8');?>
-{index}.<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('first_360_image')['extension']), ENT_QUOTES, 'UTF-8');?>
"
                    data-amount-x="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')['360_images'])), ENT_QUOTES, 'UTF-8');?>
"
                    data-drag-speed="120"
                    data-lazy-load="true"
                ></div>
            </div>
        <?php }?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::TOP")), true);?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);?>


        <?php if ($_smarty_tpl->getValue('image_pair_var') || ( !$_smarty_tpl->hasVariable('ab__vg_videos') || empty($_smarty_tpl->getValue('ab__vg_videos')))) {?>
            <?php $_smarty_tpl->assign('image_iterator', $_smarty_tpl->getValue('image_iterator')+1, false, NULL);?>

            <?php ob_start();
if ($_smarty_tpl->getValue('nopreviewer')) {
echo " cm-previewer-only";
}
$_prefixVariable32=ob_get_clean();
ob_start();
if ($_smarty_tpl->getValue('ab__vg_videos') && $_smarty_tpl->getValue('ab__vg_settings')['replace_image'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
echo " hidden";
}
$_prefixVariable33=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('image_id')),'images'=>$_smarty_tpl->getValue('image_pair_var'),'link_class'=>"cm-image-previewer".$_prefixVariable32.$_prefixVariable33,'image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height'),'image_id'=>"preview[product_images_".((string)$_smarty_tpl->getValue('preview_id'))."]"), (int) 0, $_smarty_current_dir);
?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);?>

        <?php }?>

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['image_pairs'], 'image_pair');
$foreach98DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image_pair')->value) {
$foreach98DoElse = false;
?>
            <?php $_smarty_tpl->assign('image_iterator', $_smarty_tpl->getValue('image_iterator')+1, false, NULL);?>

            <?php if ($_smarty_tpl->getValue('image_pair')['image_id']) {?>
                <?php $_smarty_tpl->assign('img_id', $_smarty_tpl->getValue('image_pair')['image_id'], false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('img_id', $_smarty_tpl->getValue('image_pair')['detailed_id'], false, NULL);?>
            <?php }?>

            <?php ob_start();
if ($_smarty_tpl->getValue('nopreviewer')) {
echo "cm-previewer-only ";
}
$_prefixVariable34=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('image_pair'),'link_class'=>$_prefixVariable34."cm-image-previewer hidden",'obj_id'=>((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('img_id')),'image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height'),'image_id'=>"preview[product_images_".((string)$_smarty_tpl->getValue('preview_id'))."]",'image_link_additional_attrs'=>array("data-ca-image-order"=>$_smarty_tpl->getValue('image_iterator')-1)), (int) 0, $_smarty_current_dir);
?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);?>

        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::BOTTOM")), true);?>

    </div>

        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/video_popups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php if (!$_smarty_tpl->getValue('nocarousel')) {?>
        <?php $_smarty_tpl->assign('custom_thumbnails', $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['thumbnails_gallery_format'][$_smarty_tpl->getValue('settings')['abt__device']] !== "default", false, NULL);?>

        <?php if (($_smarty_tpl->getValue('product')['image_pairs'] || $_smarty_tpl->getValue('ab__vg_videos')) && !$_smarty_tpl->getValue('custom_thumbnails')) {?>
            <?php $_smarty_tpl->assign('image_counter', -1, false, NULL);?>
            <?php $_smarty_tpl->assign('videos', $_smarty_tpl->getValue('ab__vg_videos'), false, NULL);?>
            <?php $_smarty_tpl->assign('image_iterator', 0, false, NULL);?>
            <?php $_smarty_tpl->assign('video_iterator', 0, false, NULL);?>
            <?php $_smarty_tpl->assign('image_classes', "ty-product-thumbnails__item cm-thumbnails-mini", false, NULL);?>

            <?php if ($_smarty_tpl->getValue('is_thumbnails_gallery')) {?>
                <?php $_smarty_tpl->assign('image_classes', ((string)$_smarty_tpl->getValue('image_classes'))." cm-gallery-item gallery", false, NULL);?>

                <input type="hidden" name="no_cache" value="1" />
            <?php }?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_thumbnails", null, null);?>
                <?php $_smarty_tpl->assign('product_thumbnails_data', '', false, NULL);
$_smarty_tpl->assign('product_thumbnails_classes', "ty-product-thumbnails", false, NULL);
if ($_smarty_tpl->getValue('is_thumbnails_gallery')) {
$_smarty_tpl->assign('is_vertical_char', $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"), false, NULL);
if ($_smarty_tpl->getValue('is_vertical')) {
$_smarty_tpl->assign('is_vertical_char', $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
}
$_smarty_tpl->assign('product_thumbnails_data', ((string)$_smarty_tpl->getValue('product_thumbnails_data'))." data-ca-cycle=".((string)$_smarty_tpl->getValue('addons')['ab__video_gallery']['cycle']), false, NULL);
$_smarty_tpl->assign('product_thumbnails_data', ((string)$_smarty_tpl->getValue('product_thumbnails_data'))." data-ca-vertical=".((string)$_smarty_tpl->getValue('is_vertical_char')), false, NULL);
$_smarty_tpl->assign('product_thumbnails_data', ((string)$_smarty_tpl->getValue('product_thumbnails_data'))." data-ca-main-image-height=".((string)$_smarty_tpl->getValue('image_height')), false, NULL);
$_smarty_tpl->assign('product_thumbnails_classes', ((string)$_smarty_tpl->getValue('product_thumbnails_classes'))." cm-image-gallery", false, NULL);
if ($_smarty_tpl->getValue('is_vertical')) {
$_smarty_tpl->assign('product_thumbnails_classes', ((string)$_smarty_tpl->getValue('product_thumbnails_classes'))." ab-vg-vertical-thumbnails", false, NULL);
}
} else {
if ($_smarty_tpl->getValue('is_vertical')) {
$_smarty_tpl->assign('product_thumbnails_classes', ((string)$_smarty_tpl->getValue('product_thumbnails_classes'))." ab-vertical-thumbnails", false, NULL);
} else {
$_smarty_tpl->assign('product_thumbnails_classes', ((string)$_smarty_tpl->getValue('product_thumbnails_classes'))." ty-center", false, NULL);
}
}?><div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_thumbnails_classes')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_thumbnails_data')), ENT_QUOTES, 'UTF-8');?>
 id="images_preview_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('product')['360_images']) {
$_smarty_tpl->assign('image_counter', $_smarty_tpl->getValue('image_counter')+1, false, NULL);
$_smarty_tpl->assign('image_iterator', $_smarty_tpl->getValue('image_iterator')+1, false, NULL);?><div class="cm-item-gallery ty-float-left"><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_id')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
style="width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');?>
px" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-image-order="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_counter')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-parent="#product_images_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
"><img src="/images/360_images/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('first_360_image')['prefix']), ENT_QUOTES, 'UTF-8');?>
-1.<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('first_360_image')['extension']), ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');?>
" alt=""></a></div><?php }
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::TOP")), true);
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);
if ($_smarty_tpl->getValue('image_pair_var')) {
$_smarty_tpl->assign('image_counter', $_smarty_tpl->getValue('image_counter')+1, false, NULL);
$_smarty_tpl->assign('image_iterator', $_smarty_tpl->getValue('image_iterator')+1, false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/product_thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->getValue('image_pair_var'),'image_id'=>(($tmp = $_smarty_tpl->getValue('image_pair_var')['image_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('image_pair_var')['detailed_id'] ?? null : $tmp),'thumbnail_type'=>"image"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);
}
if ($_smarty_tpl->getValue('product')['image_pairs']) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['image_pairs'], 'image_pair');
$foreach99DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image_pair')->value) {
$foreach99DoElse = false;
$_smarty_tpl->assign('image_counter', $_smarty_tpl->getValue('image_counter')+1, false, NULL);
$_smarty_tpl->assign('image_iterator', $_smarty_tpl->getValue('image_iterator')+1, false, NULL);
if ($_smarty_tpl->getValue('image_pair')['image_id']) {
$_smarty_tpl->assign('img_id', $_smarty_tpl->getValue('image_pair')['image_id'], false, NULL);
} else {
$_smarty_tpl->assign('img_id', $_smarty_tpl->getValue('image_pair')['detailed_id'], false, NULL);
}
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/product_thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->getValue('image_pair'),'image_id'=>$_smarty_tpl->getValue('img_id'),'thumbnail_type'=>"image"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::BOTTOM")), true);?>
</div>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->getValue('is_thumbnails_gallery')) {?>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_thumbnails", null, null);?>
                    <?php $_smarty_tpl->assign('thumbnails_styles', '', false, NULL);?>

                    <?php if ($_smarty_tpl->getValue('is_vertical') && $_smarty_tpl->getValue('settings')['abt__device'] !== "mobile") {?>
                        <?php $_smarty_tpl->assign('thumbnails_styles', ((string)$_smarty_tpl->getValue('thumbnails_styles'))."width: ".((string)$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_vertical_gallery_width'))."px;", false, NULL);?>

                        <?php if ($_smarty_tpl->getValue('image_height_block')) {?>
                            <?php $_smarty_tpl->assign('thumbnails_styles', ((string)$_smarty_tpl->getValue('thumbnails_styles'))."max-height: ".((string)$_smarty_tpl->getValue('image_height_block'))."px;", false, NULL);?>
                        <?php }?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->assign('thumbnails_styles', ((string)$_smarty_tpl->getValue('thumbnails_styles'))."height: ".((string)$_smarty_tpl->getValue('th_size'))."px;", false, NULL);?>
                    <?php }?>

                    <div class="ty-product-thumbnails_gallery<?php if ($_smarty_tpl->getValue('is_vertical') && $_smarty_tpl->getValue('settings')['abt__device'] !== "mobile") {?> ab-vg-vertical-thumbnails<?php } else { ?> ab-vg-horizontal-thumbnails<?php }?>"<?php if ($_smarty_tpl->getValue('thumbnails_styles')) {?> style="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('thumbnails_styles')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                        <div class="cm-image-gallery-wrapper ty-thumbnails_gallery ty-inline-block">
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_thumbnails');?>

                        </div>
                    </div>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <?php }?>

            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_thumbnails');?>

        <?php }?>
    <?php }?>
</div>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php if ($_smarty_tpl->getValue('custom_thumbnails') && !$_smarty_tpl->getValue('nocarousel')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_gallery_counter.js"), $_smarty_tpl);?>

<?php }
if (!$_smarty_tpl->getValue('nocarousel')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__video_gallery/product_image_gallery.js"), $_smarty_tpl);?>

<?php }?>

<?php echo '<script'; ?>
 src="https://scaleflex.cloudimg.io/v7/plugins/js-cloudimage-360-view/latest/js-cloudimage-360-view.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
(function(_, $) {
    if (window.CI360) {
        window.CI360.init();
    }

    // Disable OwlCarousel drag/swipe when user interacts with 360° view
    $(document).on('mouseenter touchstart', '.cloudimage-360', function() {
        const $carousel = $(this).closest('.owl-carousel');
        const owl = $carousel.data('owlCarousel');
        
        if (!owl) return;

        $carousel.data('owlCarousel').reinit({
            ...owl.options,
            mouseDrag: false,
            touchDrag: false,
            pullDrag: false
        });
        
    });

    // Re-enable carousel when pointer leaves 360° viewer
    $(document).on('mouseleave touchend', '.cloudimage-360', function() {
        const $carousel = $(this).closest('.owl-carousel');
        const owl = $carousel.data('owlCarousel');
        
        if (!owl) return;

        $carousel.data('owlCarousel').reinit({
            ...owl.options,
            mouseDrag: true,
            touchDrag: true,
            pullDrag: true
        });
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_images"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_images"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_product_360_images/components/ab__video_gallery_product_images.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_product_360_images/components/ab__video_gallery_product_images.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/helpers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php if ($_smarty_tpl->getValue('thumbnails_size')) {?>
    <?php $_smarty_tpl->assign('th_size', (($tmp = $_smarty_tpl->getValue('thumbnails_size') ?? null)===null||$tmp==='' ? 50 ?? null : $tmp), false, NULL);
} elseif ($_smarty_tpl->getValue('settings')['abt__device'] == "desktop") {?>
    <?php $_smarty_tpl->assign('th_size', (($tmp = $_smarty_tpl->getValue('addons')['ab__video_gallery']['th_size'] ?? null)===null||$tmp==='' ? 60 ?? null : $tmp), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('th_size', 50, false, NULL);
}?>

<?php $_smarty_tpl->assign('th_sum_size', (($tmp = $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_height'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('pd_image_gallery_height') ?? null : $tmp)/$_smarty_tpl->getValue('th_size'), false, NULL);?>

<?php $_smarty_tpl->assign('ab__vg_videos', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_videos')($_smarty_tpl->getValue('product')['product_id']), false, NULL);
$_smarty_tpl->assign('ab__vg_settings', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_setting')($_smarty_tpl->getValue('product')['product_id']), false, NULL);
$_smarty_tpl->assign('is_vertical', (($_smarty_tpl->getValue('runtime')['mode'] !== 'quick_view') && ($_smarty_tpl->getValue('addons')['ab__video_gallery']['vertical'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"))) && $_smarty_tpl->getValue('settings')['abt__device'] !== "mobile", false, NULL);
$_smarty_tpl->assign('is_thumbnails_gallery', $_smarty_tpl->getValue('settings')['Appearance']['thumbnails_gallery'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
$_smarty_tpl->assign('total_count', ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')['image_pairs'])+$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('ab__vg_videos'))+1), false, NULL);
$_smarty_tpl->assign('total_images', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')['image_pairs']), false, NULL);
$_smarty_tpl->assign('product_pos_enum', "Addons\Ab_videoGallery\VideoProductPositionTypes", false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "abt__ut2_vertical_gallery_width", null, null);?>
    <?php if ($_smarty_tpl->getValue('total_count') > $_smarty_tpl->getValue('th_sum_size') && !$_smarty_tpl->getValue('is_thumbnails_gallery')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')*2+5), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->getValue('total_count') > 1) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('product')['main_pair']['icon'] || $_smarty_tpl->getValue('product')['main_pair']['detailed']) {?>
    <?php $_smarty_tpl->assign('image_pair_var', $_smarty_tpl->getValue('product')['main_pair'], false, NULL);
} elseif ($_smarty_tpl->getValue('product')['option_image_pairs']) {?>
    <?php $_smarty_tpl->assign('image_pair_var', $_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('product')['option_image_pairs']), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('image_pair_var')['image_id']) {?>
    <?php $_smarty_tpl->assign('image_id', $_smarty_tpl->getValue('image_pair_var')['image_id'], false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('image_id', $_smarty_tpl->getValue('image_pair_var')['detailed_id'], false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('image_pair_var') || ( !$_smarty_tpl->hasVariable('ab__vg_videos') || empty($_smarty_tpl->getValue('ab__vg_videos')))) {?>
    <?php $_smarty_tpl->assign('total_images', $_smarty_tpl->getValue('total_images')+1, false, NULL);
}?>

<?php if (!$_smarty_tpl->getValue('preview_id')) {?>
    <?php $_smarty_tpl->assign('preview_id', $_smarty_tpl->getSmarty()->getModifierCallback('uniqid')($_smarty_tpl->getValue('product')['product_id']), false, NULL);
}?>

<?php $_smarty_tpl->assign('image_height_block', (($tmp = $_smarty_tpl->getValue('image_height') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_height'] ?? null : $tmp), false, NULL);?>

<?php $_smarty_tpl->assign('images_wrapper_classes', "ab_vg-images-wrapper", false, NULL);?>

<?php if (!$_smarty_tpl->getValue('nocarousel')) {?>
    <?php $_smarty_tpl->assign('images_wrapper_classes', ((string)$_smarty_tpl->getValue('images_wrapper_classes'))." ab_vg-images-wrapper_mode_carousel", false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('is_vertical') && $_smarty_tpl->getValue('total_count') > 1) {?>
    <?php $_smarty_tpl->assign('images_wrapper_classes', ((string)$_smarty_tpl->getValue('images_wrapper_classes'))." ab_vg-images-wrapper_mode_inline", false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('ab__vg_videos') && $_smarty_tpl->getValue('ab__vg_settings')['replace_image'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('images_wrapper_classes', ((string)$_smarty_tpl->getValue('images_wrapper_classes'))." ab_vg-replace_image", false, NULL);
}?>

<div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_wrapper_classes')), ENT_QUOTES, 'UTF-8');?>
" data-ca-previewer="true" <?php if ($_smarty_tpl->getValue('is_vertical') && $_smarty_tpl->getValue('total_count') > 1) {?>style="--vg-thumb-width-size: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_vertical_gallery_width')), ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>>
    <?php $_smarty_tpl->assign('product_labels', "product_labels_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_labels'));?>


    <?php $_smarty_tpl->assign('wrapper_styles', '', false, NULL);?>
    <?php $_smarty_tpl->assign('wrapper_class', "ty-product-img", false, NULL);?>

    <?php if (!$_smarty_tpl->getValue('nopreviewer')) {
$_smarty_tpl->assign('wrapper_class', ((string)$_smarty_tpl->getValue('wrapper_class'))." cm-preview-wrapper", false, NULL);
}?>
    <?php if (!$_smarty_tpl->getValue('nocarousel')) {?>
        <?php if ($_smarty_tpl->getValue('is_vertical') && $_smarty_tpl->getValue('total_count') > 1) {?>
            <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['multiple_product_images'] === 1) {?>
                <?php $_smarty_tpl->assign('wrapper_styles', ((string)$_smarty_tpl->getValue('wrapper_styles'))."height: ".((string)$_smarty_tpl->getValue('image_height_block'))."px;", false, NULL);?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('settings')['abt__device'] !== "mobile") {?>
            <?php $_smarty_tpl->assign('wrapper_styles', ((string)$_smarty_tpl->getValue('wrapper_styles'))."height: ".((string)$_smarty_tpl->getValue('image_height_block'))."px;", false, NULL);?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('is_vertical')) {?>
        <?php if ($_smarty_tpl->getValue('is_thumbnails_gallery')) {?>
            <?php $_smarty_tpl->assign('wrapper_class', ((string)$_smarty_tpl->getValue('wrapper_class'))." ab-vg-vertical", false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('wrapper_class', ((string)$_smarty_tpl->getValue('wrapper_class'))." ab-vertical", false, NULL);?>
        <?php }?>
    <?php }?>

    <div id="product_images_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wrapper_class')), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('wrapper_styles')) {?> style="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('wrapper_styles')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <?php $_smarty_tpl->assign('videos', $_smarty_tpl->getValue('ab__vg_videos'), false, NULL);?>
        <?php $_smarty_tpl->assign('image_iterator', 0, false, NULL);?>

        <?php if ($_smarty_tpl->getValue('product')['360_images']) {?>
            <?php $_smarty_tpl->assign('image_iterator', $_smarty_tpl->getValue('image_iterator')+1, false, NULL);?>

            <?php $_smarty_tpl->assign('first_360_image', $_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('product')['360_images']), false, NULL);?>
            <div class="ty-product-img ty-center">
                <div
                    class="cloudimage-360"
                    id="360ImagesContainer<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
"
                    data-folder="/images/360_images/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
/"
                    data-filename-x="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('first_360_image')['prefix']), ENT_QUOTES, 'UTF-8');?>
-{index}.<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('first_360_image')['extension']), ENT_QUOTES, 'UTF-8');?>
"
                    data-amount-x="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product')['360_images'])), ENT_QUOTES, 'UTF-8');?>
"
                    data-drag-speed="120"
                    data-lazy-load="true"
                ></div>
            </div>
        <?php }?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::TOP")), true);?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);?>


        <?php if ($_smarty_tpl->getValue('image_pair_var') || ( !$_smarty_tpl->hasVariable('ab__vg_videos') || empty($_smarty_tpl->getValue('ab__vg_videos')))) {?>
            <?php $_smarty_tpl->assign('image_iterator', $_smarty_tpl->getValue('image_iterator')+1, false, NULL);?>

            <?php ob_start();
if ($_smarty_tpl->getValue('nopreviewer')) {
echo " cm-previewer-only";
}
$_prefixVariable35=ob_get_clean();
ob_start();
if ($_smarty_tpl->getValue('ab__vg_videos') && $_smarty_tpl->getValue('ab__vg_settings')['replace_image'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
echo " hidden";
}
$_prefixVariable36=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('image_id')),'images'=>$_smarty_tpl->getValue('image_pair_var'),'link_class'=>"cm-image-previewer".$_prefixVariable35.$_prefixVariable36,'image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height'),'image_id'=>"preview[product_images_".((string)$_smarty_tpl->getValue('preview_id'))."]"), (int) 0, $_smarty_current_dir);
?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);?>

        <?php }?>

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['image_pairs'], 'image_pair');
$foreach100DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image_pair')->value) {
$foreach100DoElse = false;
?>
            <?php $_smarty_tpl->assign('image_iterator', $_smarty_tpl->getValue('image_iterator')+1, false, NULL);?>

            <?php if ($_smarty_tpl->getValue('image_pair')['image_id']) {?>
                <?php $_smarty_tpl->assign('img_id', $_smarty_tpl->getValue('image_pair')['image_id'], false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('img_id', $_smarty_tpl->getValue('image_pair')['detailed_id'], false, NULL);?>
            <?php }?>

            <?php ob_start();
if ($_smarty_tpl->getValue('nopreviewer')) {
echo "cm-previewer-only ";
}
$_prefixVariable37=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('image_pair'),'link_class'=>$_prefixVariable37."cm-image-previewer hidden",'obj_id'=>((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('img_id')),'image_width'=>$_smarty_tpl->getValue('image_width'),'image_height'=>$_smarty_tpl->getValue('image_height'),'image_id'=>"preview[product_images_".((string)$_smarty_tpl->getValue('preview_id'))."]",'image_link_additional_attrs'=>array("data-ca-image-order"=>$_smarty_tpl->getValue('image_iterator')-1)), (int) 0, $_smarty_current_dir);
?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);?>

        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);?>

        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::BOTTOM")), true);?>

    </div>

        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/video_popups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php if (!$_smarty_tpl->getValue('nocarousel')) {?>
        <?php $_smarty_tpl->assign('custom_thumbnails', $_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['thumbnails_gallery_format'][$_smarty_tpl->getValue('settings')['abt__device']] !== "default", false, NULL);?>

        <?php if (($_smarty_tpl->getValue('product')['image_pairs'] || $_smarty_tpl->getValue('ab__vg_videos')) && !$_smarty_tpl->getValue('custom_thumbnails')) {?>
            <?php $_smarty_tpl->assign('image_counter', -1, false, NULL);?>
            <?php $_smarty_tpl->assign('videos', $_smarty_tpl->getValue('ab__vg_videos'), false, NULL);?>
            <?php $_smarty_tpl->assign('image_iterator', 0, false, NULL);?>
            <?php $_smarty_tpl->assign('video_iterator', 0, false, NULL);?>
            <?php $_smarty_tpl->assign('image_classes', "ty-product-thumbnails__item cm-thumbnails-mini", false, NULL);?>

            <?php if ($_smarty_tpl->getValue('is_thumbnails_gallery')) {?>
                <?php $_smarty_tpl->assign('image_classes', ((string)$_smarty_tpl->getValue('image_classes'))." cm-gallery-item gallery", false, NULL);?>

                <input type="hidden" name="no_cache" value="1" />
            <?php }?>

            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_thumbnails", null, null);?>
                <?php $_smarty_tpl->assign('product_thumbnails_data', '', false, NULL);
$_smarty_tpl->assign('product_thumbnails_classes', "ty-product-thumbnails", false, NULL);
if ($_smarty_tpl->getValue('is_thumbnails_gallery')) {
$_smarty_tpl->assign('is_vertical_char', $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO"), false, NULL);
if ($_smarty_tpl->getValue('is_vertical')) {
$_smarty_tpl->assign('is_vertical_char', $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);
}
$_smarty_tpl->assign('product_thumbnails_data', ((string)$_smarty_tpl->getValue('product_thumbnails_data'))." data-ca-cycle=".((string)$_smarty_tpl->getValue('addons')['ab__video_gallery']['cycle']), false, NULL);
$_smarty_tpl->assign('product_thumbnails_data', ((string)$_smarty_tpl->getValue('product_thumbnails_data'))." data-ca-vertical=".((string)$_smarty_tpl->getValue('is_vertical_char')), false, NULL);
$_smarty_tpl->assign('product_thumbnails_data', ((string)$_smarty_tpl->getValue('product_thumbnails_data'))." data-ca-main-image-height=".((string)$_smarty_tpl->getValue('image_height')), false, NULL);
$_smarty_tpl->assign('product_thumbnails_classes', ((string)$_smarty_tpl->getValue('product_thumbnails_classes'))." cm-image-gallery", false, NULL);
if ($_smarty_tpl->getValue('is_vertical')) {
$_smarty_tpl->assign('product_thumbnails_classes', ((string)$_smarty_tpl->getValue('product_thumbnails_classes'))." ab-vg-vertical-thumbnails", false, NULL);
}
} else {
if ($_smarty_tpl->getValue('is_vertical')) {
$_smarty_tpl->assign('product_thumbnails_classes', ((string)$_smarty_tpl->getValue('product_thumbnails_classes'))." ab-vertical-thumbnails", false, NULL);
} else {
$_smarty_tpl->assign('product_thumbnails_classes', ((string)$_smarty_tpl->getValue('product_thumbnails_classes'))." ty-center", false, NULL);
}
}?><div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_thumbnails_classes')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_thumbnails_data')), ENT_QUOTES, 'UTF-8');?>
 id="images_preview_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('product')['360_images']) {
$_smarty_tpl->assign('image_counter', $_smarty_tpl->getValue('image_counter')+1, false, NULL);
$_smarty_tpl->assign('image_iterator', $_smarty_tpl->getValue('image_iterator')+1, false, NULL);?><div class="cm-item-gallery ty-float-left"><a data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_id')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
style="width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');?>
px" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-image-order="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_counter')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-parent="#product_images_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
"><img src="/images/360_images/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('first_360_image')['prefix']), ENT_QUOTES, 'UTF-8');?>
-1.<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('first_360_image')['extension']), ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');?>
" alt=""></a></div><?php }
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::TOP")), true);
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);
if ($_smarty_tpl->getValue('image_pair_var')) {
$_smarty_tpl->assign('image_counter', $_smarty_tpl->getValue('image_counter')+1, false, NULL);
$_smarty_tpl->assign('image_iterator', $_smarty_tpl->getValue('image_iterator')+1, false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/product_thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->getValue('image_pair_var'),'image_id'=>(($tmp = $_smarty_tpl->getValue('image_pair_var')['image_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('image_pair_var')['detailed_id'] ?? null : $tmp),'thumbnail_type'=>"image"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);
}
if ($_smarty_tpl->getValue('product')['image_pairs']) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['image_pairs'], 'image_pair');
$foreach101DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image_pair')->value) {
$foreach101DoElse = false;
$_smarty_tpl->assign('image_counter', $_smarty_tpl->getValue('image_counter')+1, false, NULL);
$_smarty_tpl->assign('image_iterator', $_smarty_tpl->getValue('image_iterator')+1, false, NULL);
if ($_smarty_tpl->getValue('image_pair')['image_id']) {
$_smarty_tpl->assign('img_id', $_smarty_tpl->getValue('image_pair')['image_id'], false, NULL);
} else {
$_smarty_tpl->assign('img_id', $_smarty_tpl->getValue('image_pair')['detailed_id'], false, NULL);
}
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/product_thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->getValue('image_pair'),'image_id'=>$_smarty_tpl->getValue('img_id'),'thumbnail_type'=>"image"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::CUSTOM")), true);
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')(((string)$_smarty_tpl->getValue('product_pos_enum'))."::BOTTOM")), true);?>
</div>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->getValue('is_thumbnails_gallery')) {?>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_thumbnails", null, null);?>
                    <?php $_smarty_tpl->assign('thumbnails_styles', '', false, NULL);?>

                    <?php if ($_smarty_tpl->getValue('is_vertical') && $_smarty_tpl->getValue('settings')['abt__device'] !== "mobile") {?>
                        <?php $_smarty_tpl->assign('thumbnails_styles', ((string)$_smarty_tpl->getValue('thumbnails_styles'))."width: ".((string)$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'abt__ut2_vertical_gallery_width'))."px;", false, NULL);?>

                        <?php if ($_smarty_tpl->getValue('image_height_block')) {?>
                            <?php $_smarty_tpl->assign('thumbnails_styles', ((string)$_smarty_tpl->getValue('thumbnails_styles'))."max-height: ".((string)$_smarty_tpl->getValue('image_height_block'))."px;", false, NULL);?>
                        <?php }?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->assign('thumbnails_styles', ((string)$_smarty_tpl->getValue('thumbnails_styles'))."height: ".((string)$_smarty_tpl->getValue('th_size'))."px;", false, NULL);?>
                    <?php }?>

                    <div class="ty-product-thumbnails_gallery<?php if ($_smarty_tpl->getValue('is_vertical') && $_smarty_tpl->getValue('settings')['abt__device'] !== "mobile") {?> ab-vg-vertical-thumbnails<?php } else { ?> ab-vg-horizontal-thumbnails<?php }?>"<?php if ($_smarty_tpl->getValue('thumbnails_styles')) {?> style="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('thumbnails_styles')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                        <div class="cm-image-gallery-wrapper ty-thumbnails_gallery ty-inline-block">
                            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_thumbnails');?>

                        </div>
                    </div>
                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <?php }?>

            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_thumbnails');?>

        <?php }?>
    <?php }?>
</div>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php if ($_smarty_tpl->getValue('custom_thumbnails') && !$_smarty_tpl->getValue('nocarousel')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_gallery_counter.js"), $_smarty_tpl);?>

<?php }
if (!$_smarty_tpl->getValue('nocarousel')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__video_gallery/product_image_gallery.js"), $_smarty_tpl);?>

<?php }?>

<?php echo '<script'; ?>
 src="https://scaleflex.cloudimg.io/v7/plugins/js-cloudimage-360-view/latest/js-cloudimage-360-view.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
(function(_, $) {
    if (window.CI360) {
        window.CI360.init();
    }

    // Disable OwlCarousel drag/swipe when user interacts with 360° view
    $(document).on('mouseenter touchstart', '.cloudimage-360', function() {
        const $carousel = $(this).closest('.owl-carousel');
        const owl = $carousel.data('owlCarousel');
        
        if (!owl) return;

        $carousel.data('owlCarousel').reinit({
            ...owl.options,
            mouseDrag: false,
            touchDrag: false,
            pullDrag: false
        });
        
    });

    // Re-enable carousel when pointer leaves 360° viewer
    $(document).on('mouseleave touchend', '.cloudimage-360', function() {
        const $carousel = $(this).closest('.owl-carousel');
        const owl = $carousel.data('owlCarousel');
        
        if (!owl) return;

        $carousel.data('owlCarousel').reinit({
            ...owl.options,
            mouseDrag: true,
            touchDrag: true,
            pullDrag: true
        });
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_images"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_images"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
