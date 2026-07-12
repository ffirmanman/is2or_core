<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:15
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__video_gallery/overrides/views/products/components/product_images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571bc5ecd0_17247444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2b559edae479c621f7e2267ccdfc9dab86d2534' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__video_gallery/overrides/views/products/components/product_images.tpl',
      1 => 1747376920,
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
),false)) {
function content_6834571bc5ecd0_17247444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/helpers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['thumbnails_size']->value) {?>
    <?php $_smarty_tpl->_assignInScope('th_size', (($tmp = $_smarty_tpl->tpl_vars['thumbnails_size']->value ?? null)===null||$tmp==='' ? 50 ?? null : $tmp));
} elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__device'] == "desktop") {?>
    <?php $_smarty_tpl->_assignInScope('th_size', (($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['th_size'] ?? null)===null||$tmp==='' ? 60 ?? null : $tmp));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('th_size', 50);
}?>

<?php $_smarty_tpl->_assignInScope('th_sum_size', (($tmp = $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['pd_image_gallery_height']->value ?? null : $tmp)/$_smarty_tpl->tpl_vars['th_size']->value);?>

<?php $_smarty_tpl->_assignInScope('ab__vg_videos', fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id']));
$_smarty_tpl->_assignInScope('ab__vg_settings', fn_ab__vg_get_setting($_smarty_tpl->tpl_vars['product']->value['product_id']));
$_smarty_tpl->_assignInScope('is_vertical', (($_smarty_tpl->tpl_vars['runtime']->value['mode'] !== 'quick_view') && ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['vertical'] === smarty_modifier_enum("YesNo::YES"))) && $_smarty_tpl->tpl_vars['settings']->value['abt__device'] !== "mobile");
$_smarty_tpl->_assignInScope('is_thumbnails_gallery', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery'] === smarty_modifier_enum("YesNo::YES"));
$_smarty_tpl->_assignInScope('total_count', (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['image_pairs'])+smarty_modifier_count($_smarty_tpl->tpl_vars['ab__vg_videos']->value)+1));
$_smarty_tpl->_assignInScope('total_images', smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['image_pairs']));
$_smarty_tpl->_assignInScope('product_pos_enum', "Addons\Ab_videoGallery\VideoProductPositionTypes");?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "abt__ut2_vertical_gallery_width", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['total_count']->value > $_smarty_tpl->tpl_vars['th_sum_size']->value && !$_smarty_tpl->tpl_vars['is_thumbnails_gallery']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th_size']->value*2+5, ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['total_count']->value > 1) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']['icon'] || $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']) {?>
    <?php $_smarty_tpl->_assignInScope('image_pair_var', $_smarty_tpl->tpl_vars['product']->value['main_pair']);
} elseif ($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']) {?>
    <?php $_smarty_tpl->_assignInScope('image_pair_var', reset($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']));
}?>

<?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id']) {?>
    <?php $_smarty_tpl->_assignInScope('image_id', $_smarty_tpl->tpl_vars['image_pair_var']->value['image_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('image_id', $_smarty_tpl->tpl_vars['image_pair_var']->value['detailed_id']);
}?>

<?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value || empty($_smarty_tpl->tpl_vars['ab__vg_videos']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('total_images', $_smarty_tpl->tpl_vars['total_images']->value+1);
}?>

<?php if (!$_smarty_tpl->tpl_vars['preview_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('preview_id', uniqid($_smarty_tpl->tpl_vars['product']->value['product_id']));
}?>

<?php $_smarty_tpl->_assignInScope('image_height_block', (($tmp = $_smarty_tpl->tpl_vars['image_height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height'] ?? null : $tmp));?>

<?php $_smarty_tpl->_assignInScope('images_wrapper_classes', "ab_vg-images-wrapper");?>

<?php if (!$_smarty_tpl->tpl_vars['nocarousel']->value) {?>
    <?php $_smarty_tpl->_assignInScope('images_wrapper_classes', ((string)$_smarty_tpl->tpl_vars['images_wrapper_classes']->value)." ab_vg-images-wrapper_mode_carousel");
}?>

<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value && $_smarty_tpl->tpl_vars['total_count']->value > 1) {?>
    <?php $_smarty_tpl->_assignInScope('images_wrapper_classes', ((string)$_smarty_tpl->tpl_vars['images_wrapper_classes']->value)." ab_vg-images-wrapper_mode_inline");
}?>

<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value && $_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image'] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('images_wrapper_classes', ((string)$_smarty_tpl->tpl_vars['images_wrapper_classes']->value)." ab_vg-replace_image");
}?>

<div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_wrapper_classes']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-previewer="true" <?php if ($_smarty_tpl->tpl_vars['is_vertical']->value && $_smarty_tpl->tpl_vars['total_count']->value > 1) {?>style="--vg-thumb-width-size: <?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__ut2_vertical_gallery_width'), ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>>
    <?php $_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>


    <?php $_smarty_tpl->_assignInScope('wrapper_styles', '');?>
    <?php $_smarty_tpl->_assignInScope('wrapper_class', "ty-product-img");?>

    <?php if (!$_smarty_tpl->tpl_vars['nopreviewer']->value) {
$_smarty_tpl->_assignInScope('wrapper_class', ((string)$_smarty_tpl->tpl_vars['wrapper_class']->value)." cm-preview-wrapper");
}?>
    <?php if (!$_smarty_tpl->tpl_vars['nocarousel']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['is_vertical']->value && $_smarty_tpl->tpl_vars['total_count']->value > 1) {?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['multiple_product_images'] === 1) {?>
                <?php $_smarty_tpl->_assignInScope('wrapper_styles', ((string)$_smarty_tpl->tpl_vars['wrapper_styles']->value)."height: ".((string)$_smarty_tpl->tpl_vars['image_height_block']->value)."px;");?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device'] !== "mobile") {?>
            <?php $_smarty_tpl->_assignInScope('wrapper_styles', ((string)$_smarty_tpl->tpl_vars['wrapper_styles']->value)."height: ".((string)$_smarty_tpl->tpl_vars['image_height_block']->value)."px;");?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['is_vertical']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['is_thumbnails_gallery']->value) {?>
            <?php $_smarty_tpl->_assignInScope('wrapper_class', ((string)$_smarty_tpl->tpl_vars['wrapper_class']->value)." ab-vg-vertical");?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('wrapper_class', ((string)$_smarty_tpl->tpl_vars['wrapper_class']->value)." ab-vertical");?>
        <?php }?>
    <?php }?>

    <div id="product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['wrapper_styles']->value) {?> style="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wrapper_styles']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <?php $_smarty_tpl->_assignInScope('videos', $_smarty_tpl->tpl_vars['ab__vg_videos']->value);?>
        <?php $_smarty_tpl->_assignInScope('image_iterator', 0);?>

        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::TOP")), true);?>

        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);?>


        <?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value || empty($_smarty_tpl->tpl_vars['ab__vg_videos']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('image_iterator', $_smarty_tpl->tpl_vars['image_iterator']->value+1);?>

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['nopreviewer']->value) {
echo " cm-previewer-only";
}
$_prefixVariable1=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value && $_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image'] === smarty_modifier_enum("YesNo::YES")) {
echo " hidden";
}
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value),'images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'link_class'=>"cm-image-previewer".$_prefixVariable1.$_prefixVariable2,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0, false);
?>

            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);?>

        <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['image_pairs'], 'image_pair');
$_smarty_tpl->tpl_vars['image_pair']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_pair']->value) {
$_smarty_tpl->tpl_vars['image_pair']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('image_iterator', $_smarty_tpl->tpl_vars['image_iterator']->value+1);?>

            <?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {?>
                <?php $_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['image_id']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['detailed_id']);?>
            <?php }?>

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['nopreviewer']->value) {
echo "cm-previewer-only ";
}
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'link_class'=>$_prefixVariable3."cm-image-previewer hidden",'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value),'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]",'image_link_additional_attrs'=>array("data-ca-image-order"=>$_smarty_tpl->tpl_vars['image_iterator']->value-1)), 0, true);
?>

            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);?>

        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::BOTTOM")), true);?>

    </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/video_popups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if (!$_smarty_tpl->tpl_vars['nocarousel']->value) {?>
        <?php $_smarty_tpl->_assignInScope('custom_thumbnails', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['thumbnails_gallery_format'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] !== "default");?>

        <?php if (($_smarty_tpl->tpl_vars['product']->value['image_pairs'] || $_smarty_tpl->tpl_vars['ab__vg_videos']->value) && !$_smarty_tpl->tpl_vars['custom_thumbnails']->value) {?>
            <?php $_smarty_tpl->_assignInScope('image_counter', -1);?>
            <?php $_smarty_tpl->_assignInScope('videos', $_smarty_tpl->tpl_vars['ab__vg_videos']->value);?>
            <?php $_smarty_tpl->_assignInScope('image_iterator', 0);?>
            <?php $_smarty_tpl->_assignInScope('video_iterator', 0);?>
            <?php $_smarty_tpl->_assignInScope('image_classes', "ty-product-thumbnails__item cm-thumbnails-mini");?>

            <?php if ($_smarty_tpl->tpl_vars['is_thumbnails_gallery']->value) {?>
                <?php $_smarty_tpl->_assignInScope('image_classes', ((string)$_smarty_tpl->tpl_vars['image_classes']->value)." cm-gallery-item gallery");?>

                <input type="hidden" name="no_cache" value="1" />
            <?php }?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_thumbnails", null, null);?>
                <?php $_smarty_tpl->_assignInScope('product_thumbnails_data', '');
$_smarty_tpl->_assignInScope('product_thumbnails_classes', "ty-product-thumbnails");
if ($_smarty_tpl->tpl_vars['is_thumbnails_gallery']->value) {
$_smarty_tpl->_assignInScope('is_vertical_char', smarty_modifier_enum("YesNo::NO"));
if ($_smarty_tpl->tpl_vars['is_vertical']->value) {
$_smarty_tpl->_assignInScope('is_vertical_char', smarty_modifier_enum("YesNo::YES"));
}
$_smarty_tpl->_assignInScope('product_thumbnails_data', ((string)$_smarty_tpl->tpl_vars['product_thumbnails_data']->value)." data-ca-cycle=".((string)$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['cycle']));
$_smarty_tpl->_assignInScope('product_thumbnails_data', ((string)$_smarty_tpl->tpl_vars['product_thumbnails_data']->value)." data-ca-vertical=".((string)$_smarty_tpl->tpl_vars['is_vertical_char']->value));
$_smarty_tpl->_assignInScope('product_thumbnails_data', ((string)$_smarty_tpl->tpl_vars['product_thumbnails_data']->value)." data-ca-main-image-height=".((string)$_smarty_tpl->tpl_vars['image_height']->value));
$_smarty_tpl->_assignInScope('product_thumbnails_classes', ((string)$_smarty_tpl->tpl_vars['product_thumbnails_classes']->value)." cm-image-gallery");
if ($_smarty_tpl->tpl_vars['is_vertical']->value) {
$_smarty_tpl->_assignInScope('product_thumbnails_classes', ((string)$_smarty_tpl->tpl_vars['product_thumbnails_classes']->value)." ab-vg-vertical-thumbnails");
}
} else {
if ($_smarty_tpl->tpl_vars['is_vertical']->value) {
$_smarty_tpl->_assignInScope('product_thumbnails_classes', ((string)$_smarty_tpl->tpl_vars['product_thumbnails_classes']->value)." ab-vertical-thumbnails");
} else {
$_smarty_tpl->_assignInScope('product_thumbnails_classes', ((string)$_smarty_tpl->tpl_vars['product_thumbnails_classes']->value)." ty-center");
}
}?><div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_thumbnails_classes']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_thumbnails_data']->value, ENT_QUOTES, 'UTF-8');?>
 id="images_preview_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::TOP")), true);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);
if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {
$_smarty_tpl->_assignInScope('image_counter', $_smarty_tpl->tpl_vars['image_counter']->value+1);
$_smarty_tpl->_assignInScope('image_iterator', $_smarty_tpl->tpl_vars['image_iterator']->value+1);
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/product_thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_id'=>(($tmp = $_smarty_tpl->tpl_vars['image_pair_var']->value['image_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_pair_var']->value['detailed_id'] ?? null : $tmp),'thumbnail_type'=>"image"), 0, false);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);
}
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['image_pairs'], 'image_pair');
$_smarty_tpl->tpl_vars['image_pair']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_pair']->value) {
$_smarty_tpl->tpl_vars['image_pair']->do_else = false;
$_smarty_tpl->_assignInScope('image_counter', $_smarty_tpl->tpl_vars['image_counter']->value+1);
$_smarty_tpl->_assignInScope('image_iterator', $_smarty_tpl->tpl_vars['image_iterator']->value+1);
if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {
$_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['image_id']);
} else {
$_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['detailed_id']);
}
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/product_thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_id'=>$_smarty_tpl->tpl_vars['img_id']->value,'thumbnail_type'=>"image"), 0, true);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::BOTTOM")), true);?>
</div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['is_thumbnails_gallery']->value) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_thumbnails", null, null);?>
                    <?php $_smarty_tpl->_assignInScope('thumbnails_styles', '');?>

                    <?php if ($_smarty_tpl->tpl_vars['is_vertical']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__device'] !== "mobile") {?>
                        <?php $_smarty_tpl->_assignInScope('thumbnails_styles', ((string)$_smarty_tpl->tpl_vars['thumbnails_styles']->value)."width: ".((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__ut2_vertical_gallery_width'))."px;");?>

                        <?php if ($_smarty_tpl->tpl_vars['image_height_block']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('thumbnails_styles', ((string)$_smarty_tpl->tpl_vars['thumbnails_styles']->value)."max-height: ".((string)$_smarty_tpl->tpl_vars['image_height_block']->value)."px;");?>
                        <?php }?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('thumbnails_styles', ((string)$_smarty_tpl->tpl_vars['thumbnails_styles']->value)."height: ".((string)$_smarty_tpl->tpl_vars['th_size']->value)."px;");?>
                    <?php }?>

                    <div class="ty-product-thumbnails_gallery<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__device'] !== "mobile") {?> ab-vg-vertical-thumbnails<?php } else { ?> ab-vg-horizontal-thumbnails<?php }?>"<?php if ($_smarty_tpl->tpl_vars['thumbnails_styles']->value) {?> style="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thumbnails_styles']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                        <div class="cm-image-gallery-wrapper ty-thumbnails_gallery ty-inline-block">
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_thumbnails');?>

                        </div>
                    </div>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php }?>

            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_thumbnails');?>

        <?php }?>
    <?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['custom_thumbnails']->value && !$_smarty_tpl->tpl_vars['nocarousel']->value) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_gallery_counter.js"),$_smarty_tpl);?>

<?php }
if (!$_smarty_tpl->tpl_vars['nocarousel']->value) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/ab__video_gallery/product_image_gallery.js"),$_smarty_tpl);?>

<?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_images"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_images"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_images"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__video_gallery/overrides/views/products/components/product_images.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__video_gallery/overrides/views/products/components/product_images.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/helpers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['thumbnails_size']->value) {?>
    <?php $_smarty_tpl->_assignInScope('th_size', (($tmp = $_smarty_tpl->tpl_vars['thumbnails_size']->value ?? null)===null||$tmp==='' ? 50 ?? null : $tmp));
} elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__device'] == "desktop") {?>
    <?php $_smarty_tpl->_assignInScope('th_size', (($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['th_size'] ?? null)===null||$tmp==='' ? 60 ?? null : $tmp));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('th_size', 50);
}?>

<?php $_smarty_tpl->_assignInScope('th_sum_size', (($tmp = $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['pd_image_gallery_height']->value ?? null : $tmp)/$_smarty_tpl->tpl_vars['th_size']->value);?>

<?php $_smarty_tpl->_assignInScope('ab__vg_videos', fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id']));
$_smarty_tpl->_assignInScope('ab__vg_settings', fn_ab__vg_get_setting($_smarty_tpl->tpl_vars['product']->value['product_id']));
$_smarty_tpl->_assignInScope('is_vertical', (($_smarty_tpl->tpl_vars['runtime']->value['mode'] !== 'quick_view') && ($_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['vertical'] === smarty_modifier_enum("YesNo::YES"))) && $_smarty_tpl->tpl_vars['settings']->value['abt__device'] !== "mobile");
$_smarty_tpl->_assignInScope('is_thumbnails_gallery', $_smarty_tpl->tpl_vars['settings']->value['Appearance']['thumbnails_gallery'] === smarty_modifier_enum("YesNo::YES"));
$_smarty_tpl->_assignInScope('total_count', (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['image_pairs'])+smarty_modifier_count($_smarty_tpl->tpl_vars['ab__vg_videos']->value)+1));
$_smarty_tpl->_assignInScope('total_images', smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['image_pairs']));
$_smarty_tpl->_assignInScope('product_pos_enum', "Addons\Ab_videoGallery\VideoProductPositionTypes");?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "abt__ut2_vertical_gallery_width", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['total_count']->value > $_smarty_tpl->tpl_vars['th_sum_size']->value && !$_smarty_tpl->tpl_vars['is_thumbnails_gallery']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th_size']->value*2+5, ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['total_count']->value > 1) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['main_pair']['icon'] || $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']) {?>
    <?php $_smarty_tpl->_assignInScope('image_pair_var', $_smarty_tpl->tpl_vars['product']->value['main_pair']);
} elseif ($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']) {?>
    <?php $_smarty_tpl->_assignInScope('image_pair_var', reset($_smarty_tpl->tpl_vars['product']->value['option_image_pairs']));
}?>

<?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value['image_id']) {?>
    <?php $_smarty_tpl->_assignInScope('image_id', $_smarty_tpl->tpl_vars['image_pair_var']->value['image_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('image_id', $_smarty_tpl->tpl_vars['image_pair_var']->value['detailed_id']);
}?>

<?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value || empty($_smarty_tpl->tpl_vars['ab__vg_videos']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('total_images', $_smarty_tpl->tpl_vars['total_images']->value+1);
}?>

<?php if (!$_smarty_tpl->tpl_vars['preview_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('preview_id', uniqid($_smarty_tpl->tpl_vars['product']->value['product_id']));
}?>

<?php $_smarty_tpl->_assignInScope('image_height_block', (($tmp = $_smarty_tpl->tpl_vars['image_height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_details_thumbnail_height'] ?? null : $tmp));?>

<?php $_smarty_tpl->_assignInScope('images_wrapper_classes', "ab_vg-images-wrapper");?>

<?php if (!$_smarty_tpl->tpl_vars['nocarousel']->value) {?>
    <?php $_smarty_tpl->_assignInScope('images_wrapper_classes', ((string)$_smarty_tpl->tpl_vars['images_wrapper_classes']->value)." ab_vg-images-wrapper_mode_carousel");
}?>

<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value && $_smarty_tpl->tpl_vars['total_count']->value > 1) {?>
    <?php $_smarty_tpl->_assignInScope('images_wrapper_classes', ((string)$_smarty_tpl->tpl_vars['images_wrapper_classes']->value)." ab_vg-images-wrapper_mode_inline");
}?>

<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value && $_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image'] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('images_wrapper_classes', ((string)$_smarty_tpl->tpl_vars['images_wrapper_classes']->value)." ab_vg-replace_image");
}?>

<div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_wrapper_classes']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-previewer="true" <?php if ($_smarty_tpl->tpl_vars['is_vertical']->value && $_smarty_tpl->tpl_vars['total_count']->value > 1) {?>style="--vg-thumb-width-size: <?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__ut2_vertical_gallery_width'), ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>>
    <?php $_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>


    <?php $_smarty_tpl->_assignInScope('wrapper_styles', '');?>
    <?php $_smarty_tpl->_assignInScope('wrapper_class', "ty-product-img");?>

    <?php if (!$_smarty_tpl->tpl_vars['nopreviewer']->value) {
$_smarty_tpl->_assignInScope('wrapper_class', ((string)$_smarty_tpl->tpl_vars['wrapper_class']->value)." cm-preview-wrapper");
}?>
    <?php if (!$_smarty_tpl->tpl_vars['nocarousel']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['is_vertical']->value && $_smarty_tpl->tpl_vars['total_count']->value > 1) {?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['multiple_product_images'] === 1) {?>
                <?php $_smarty_tpl->_assignInScope('wrapper_styles', ((string)$_smarty_tpl->tpl_vars['wrapper_styles']->value)."height: ".((string)$_smarty_tpl->tpl_vars['image_height_block']->value)."px;");?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device'] !== "mobile") {?>
            <?php $_smarty_tpl->_assignInScope('wrapper_styles', ((string)$_smarty_tpl->tpl_vars['wrapper_styles']->value)."height: ".((string)$_smarty_tpl->tpl_vars['image_height_block']->value)."px;");?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['is_vertical']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['is_thumbnails_gallery']->value) {?>
            <?php $_smarty_tpl->_assignInScope('wrapper_class', ((string)$_smarty_tpl->tpl_vars['wrapper_class']->value)." ab-vg-vertical");?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('wrapper_class', ((string)$_smarty_tpl->tpl_vars['wrapper_class']->value)." ab-vertical");?>
        <?php }?>
    <?php }?>

    <div id="product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['wrapper_styles']->value) {?> style="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wrapper_styles']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <?php $_smarty_tpl->_assignInScope('videos', $_smarty_tpl->tpl_vars['ab__vg_videos']->value);?>
        <?php $_smarty_tpl->_assignInScope('image_iterator', 0);?>

        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::TOP")), true);?>

        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);?>


        <?php if ($_smarty_tpl->tpl_vars['image_pair_var']->value || empty($_smarty_tpl->tpl_vars['ab__vg_videos']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('image_iterator', $_smarty_tpl->tpl_vars['image_iterator']->value+1);?>

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['nopreviewer']->value) {
echo " cm-previewer-only";
}
$_prefixVariable4=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value && $_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image'] === smarty_modifier_enum("YesNo::YES")) {
echo " hidden";
}
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value),'images'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'link_class'=>"cm-image-previewer".$_prefixVariable4.$_prefixVariable5,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]"), 0, true);
?>

            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);?>

        <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['image_pairs'], 'image_pair');
$_smarty_tpl->tpl_vars['image_pair']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_pair']->value) {
$_smarty_tpl->tpl_vars['image_pair']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('image_iterator', $_smarty_tpl->tpl_vars['image_iterator']->value+1);?>

            <?php if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {?>
                <?php $_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['image_id']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['detailed_id']);?>
            <?php }?>

            <?php ob_start();
if ($_smarty_tpl->tpl_vars['nopreviewer']->value) {
echo "cm-previewer-only ";
}
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['image_pair']->value,'link_class'=>$_prefixVariable6."cm-image-previewer hidden",'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['img_id']->value),'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'image_id'=>"preview[product_images_".((string)$_smarty_tpl->tpl_vars['preview_id']->value)."]",'image_link_additional_attrs'=>array("data-ca-image-order"=>$_smarty_tpl->tpl_vars['image_iterator']->value-1)), 0, true);
?>

            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);?>

        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::BOTTOM")), true);?>

    </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/video_popups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php if (!$_smarty_tpl->tpl_vars['nocarousel']->value) {?>
        <?php $_smarty_tpl->_assignInScope('custom_thumbnails', $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['thumbnails_gallery_format'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']] !== "default");?>

        <?php if (($_smarty_tpl->tpl_vars['product']->value['image_pairs'] || $_smarty_tpl->tpl_vars['ab__vg_videos']->value) && !$_smarty_tpl->tpl_vars['custom_thumbnails']->value) {?>
            <?php $_smarty_tpl->_assignInScope('image_counter', -1);?>
            <?php $_smarty_tpl->_assignInScope('videos', $_smarty_tpl->tpl_vars['ab__vg_videos']->value);?>
            <?php $_smarty_tpl->_assignInScope('image_iterator', 0);?>
            <?php $_smarty_tpl->_assignInScope('video_iterator', 0);?>
            <?php $_smarty_tpl->_assignInScope('image_classes', "ty-product-thumbnails__item cm-thumbnails-mini");?>

            <?php if ($_smarty_tpl->tpl_vars['is_thumbnails_gallery']->value) {?>
                <?php $_smarty_tpl->_assignInScope('image_classes', ((string)$_smarty_tpl->tpl_vars['image_classes']->value)." cm-gallery-item gallery");?>

                <input type="hidden" name="no_cache" value="1" />
            <?php }?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_thumbnails", null, null);?>
                <?php $_smarty_tpl->_assignInScope('product_thumbnails_data', '');
$_smarty_tpl->_assignInScope('product_thumbnails_classes', "ty-product-thumbnails");
if ($_smarty_tpl->tpl_vars['is_thumbnails_gallery']->value) {
$_smarty_tpl->_assignInScope('is_vertical_char', smarty_modifier_enum("YesNo::NO"));
if ($_smarty_tpl->tpl_vars['is_vertical']->value) {
$_smarty_tpl->_assignInScope('is_vertical_char', smarty_modifier_enum("YesNo::YES"));
}
$_smarty_tpl->_assignInScope('product_thumbnails_data', ((string)$_smarty_tpl->tpl_vars['product_thumbnails_data']->value)." data-ca-cycle=".((string)$_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['cycle']));
$_smarty_tpl->_assignInScope('product_thumbnails_data', ((string)$_smarty_tpl->tpl_vars['product_thumbnails_data']->value)." data-ca-vertical=".((string)$_smarty_tpl->tpl_vars['is_vertical_char']->value));
$_smarty_tpl->_assignInScope('product_thumbnails_data', ((string)$_smarty_tpl->tpl_vars['product_thumbnails_data']->value)." data-ca-main-image-height=".((string)$_smarty_tpl->tpl_vars['image_height']->value));
$_smarty_tpl->_assignInScope('product_thumbnails_classes', ((string)$_smarty_tpl->tpl_vars['product_thumbnails_classes']->value)." cm-image-gallery");
if ($_smarty_tpl->tpl_vars['is_vertical']->value) {
$_smarty_tpl->_assignInScope('product_thumbnails_classes', ((string)$_smarty_tpl->tpl_vars['product_thumbnails_classes']->value)." ab-vg-vertical-thumbnails");
}
} else {
if ($_smarty_tpl->tpl_vars['is_vertical']->value) {
$_smarty_tpl->_assignInScope('product_thumbnails_classes', ((string)$_smarty_tpl->tpl_vars['product_thumbnails_classes']->value)." ab-vertical-thumbnails");
} else {
$_smarty_tpl->_assignInScope('product_thumbnails_classes', ((string)$_smarty_tpl->tpl_vars['product_thumbnails_classes']->value)." ty-center");
}
}?><div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_thumbnails_classes']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_thumbnails_data']->value, ENT_QUOTES, 'UTF-8');?>
 id="images_preview_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::TOP")), true);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);
if ($_smarty_tpl->tpl_vars['image_pair_var']->value) {
$_smarty_tpl->_assignInScope('image_counter', $_smarty_tpl->tpl_vars['image_counter']->value+1);
$_smarty_tpl->_assignInScope('image_iterator', $_smarty_tpl->tpl_vars['image_iterator']->value+1);
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/product_thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->tpl_vars['image_pair_var']->value,'image_id'=>(($tmp = $_smarty_tpl->tpl_vars['image_pair_var']->value['image_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_pair_var']->value['detailed_id'] ?? null : $tmp),'thumbnail_type'=>"image"), 0, true);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);
}
if ($_smarty_tpl->tpl_vars['product']->value['image_pairs']) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['image_pairs'], 'image_pair');
$_smarty_tpl->tpl_vars['image_pair']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_pair']->value) {
$_smarty_tpl->tpl_vars['image_pair']->do_else = false;
$_smarty_tpl->_assignInScope('image_counter', $_smarty_tpl->tpl_vars['image_counter']->value+1);
$_smarty_tpl->_assignInScope('image_iterator', $_smarty_tpl->tpl_vars['image_iterator']->value+1);
if ($_smarty_tpl->tpl_vars['image_pair']->value['image_id']) {
$_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['image_id']);
} else {
$_smarty_tpl->_assignInScope('img_id', $_smarty_tpl->tpl_vars['image_pair']->value['detailed_id']);
}
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/product_thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->tpl_vars['image_pair']->value,'image_id'=>$_smarty_tpl->tpl_vars['img_id']->value,'thumbnail_type'=>"image"), 0, true);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::CUSTOM")), true);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_videos_thumbs_by_pos', array('position'=>smarty_modifier_enum(((string)$_smarty_tpl->tpl_vars['product_pos_enum']->value)."::BOTTOM")), true);?>
</div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['is_thumbnails_gallery']->value) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_thumbnails", null, null);?>
                    <?php $_smarty_tpl->_assignInScope('thumbnails_styles', '');?>

                    <?php if ($_smarty_tpl->tpl_vars['is_vertical']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__device'] !== "mobile") {?>
                        <?php $_smarty_tpl->_assignInScope('thumbnails_styles', ((string)$_smarty_tpl->tpl_vars['thumbnails_styles']->value)."width: ".((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'abt__ut2_vertical_gallery_width'))."px;");?>

                        <?php if ($_smarty_tpl->tpl_vars['image_height_block']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('thumbnails_styles', ((string)$_smarty_tpl->tpl_vars['thumbnails_styles']->value)."max-height: ".((string)$_smarty_tpl->tpl_vars['image_height_block']->value)."px;");?>
                        <?php }?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('thumbnails_styles', ((string)$_smarty_tpl->tpl_vars['thumbnails_styles']->value)."height: ".((string)$_smarty_tpl->tpl_vars['th_size']->value)."px;");?>
                    <?php }?>

                    <div class="ty-product-thumbnails_gallery<?php if ($_smarty_tpl->tpl_vars['is_vertical']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__device'] !== "mobile") {?> ab-vg-vertical-thumbnails<?php } else { ?> ab-vg-horizontal-thumbnails<?php }?>"<?php if ($_smarty_tpl->tpl_vars['thumbnails_styles']->value) {?> style="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['thumbnails_styles']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                        <div class="cm-image-gallery-wrapper ty-thumbnails_gallery ty-inline-block">
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_thumbnails');?>

                        </div>
                    </div>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php }?>

            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_thumbnails');?>

        <?php }?>
    <?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['custom_thumbnails']->value && !$_smarty_tpl->tpl_vars['nocarousel']->value) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_gallery_counter.js"),$_smarty_tpl);?>

<?php }
if (!$_smarty_tpl->tpl_vars['nocarousel']->value) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/ab__video_gallery/product_image_gallery.js"),$_smarty_tpl);?>

<?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_images"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_images"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_images"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
