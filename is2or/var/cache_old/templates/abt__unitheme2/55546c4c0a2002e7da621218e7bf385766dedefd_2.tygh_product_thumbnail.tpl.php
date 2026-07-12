<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:01
  from 'tygh:addons/ab__video_gallery/components/product_thumbnail.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ed8e5da7_86078685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55546c4c0a2002e7da621218e7bf385766dedefd' => 
    array (
      0 => 'addons/ab__video_gallery/components/product_thumbnail.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__video_gallery/components/video_icon.tpl' => 2,
    'tygh:addons/ab__video_gallery/components/thumbnail.tpl' => 2,
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69ada1ed8e5da7_86078685 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('product_id', (($tmp = (($tmp = $_smarty_tpl->getValue('product')['product_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product_id') ?? null : $tmp) ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('ab__vg_videos', (($tmp = $_smarty_tpl->getValue('ab__vg_videos') ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_videos')($_smarty_tpl->getValue('product_id'))) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('ab__vg_settings', (($tmp = $_smarty_tpl->getValue('ab__vg_settings') ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_setting')($_smarty_tpl->getValue('product_id'))) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('th_size', (($tmp = $_smarty_tpl->getValue('th_size') ?? null)===null||$tmp==='' ? 60 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('thumbnail_type', (($tmp = $_smarty_tpl->getValue('thumbnail_type') ?? null)===null||$tmp==='' ? 'image' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('image_counter', (($tmp = $_smarty_tpl->getValue('image_counter') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_iterator')('image_counter') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('image_iterator', (($tmp = $_smarty_tpl->getValue('image_iterator') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_iterator')('image_iterator') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('video_iterator', (($tmp = $_smarty_tpl->getValue('video_iterator') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_iterator')('video_iterator') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('replace_image', (($tmp = $_smarty_tpl->getValue('replace_image') ?? null)===null||$tmp==='' ? ($_smarty_tpl->getValue('ab__vg_settings')['replace_image'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES') && $_smarty_tpl->getValue('ab__vg_videos')) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('is_thumbnails_gallery', (($tmp = $_smarty_tpl->getValue('is_thumbnails_gallery') ?? null)===null||$tmp==='' ? ($_smarty_tpl->getValue('settings')['Appearance']['thumbnails_gallery'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('item_class', "ty-product-thumbnails__item cm-thumbnails-mini", false, NULL);
if ($_smarty_tpl->getValue('is_thumbnails_gallery')) {
$_smarty_tpl->assign('item_class', ((string)$_smarty_tpl->getValue('item_class'))." cm-gallery-item gallery", false, NULL);
}
if ($_smarty_tpl->getValue('thumbnail_type') === 'video') {
$_smarty_tpl->assign('video', (($tmp = $_smarty_tpl->getValue('video') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('item_class', ((string)$_smarty_tpl->getValue('item_class'))." ab__vg-image_gallery_item", false, NULL);
if (($_smarty_tpl->getValue('replace_image') && $_smarty_tpl->getValue('video_iterator') === 1) || (!$_smarty_tpl->getValue('image_iterator') && $_smarty_tpl->getValue('video_iterator') === 1)) {
$_smarty_tpl->assign('item_class', ((string)$_smarty_tpl->getValue('item_class'))." active", false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_thumbnail", null, null);?><a href="javascript:void(0)" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_class')), ENT_QUOTES, 'UTF-8');?>
"data-ca-image-order="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_counter')), ENT_QUOTES, 'UTF-8');?>
"data-ca-parent="#product_images_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
" style="width:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');?>
px;"data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['video_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['unique_id']), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('video')['icon_type'] === 'none' || ($_smarty_tpl->getValue('video')['icon_type'] === 'icon' && !$_smarty_tpl->getValue('video')['icon']) || true) {?>                     <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon_width'=>$_smarty_tpl->getValue('th_size'),'icon_height'=>$_smarty_tpl->getValue('th_size'),'icon_alt'=>preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('video')['title']),'obj_id'=>((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('video')['video_id'])."_mini"), (int) 0, $_smarty_current_dir);
} else {
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video'),'width'=>$_smarty_tpl->getValue('th_size'),'height'=>$_smarty_tpl->getValue('th_size')), (int) 0, $_smarty_current_dir);
}?></a><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
} else {
$_smarty_tpl->assign('image', (($tmp = $_smarty_tpl->getValue('image') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('image_iterator') === 1 && !$_smarty_tpl->getValue('replace_image')) {
$_smarty_tpl->assign('item_class', ((string)$_smarty_tpl->getValue('item_class'))." active", false, NULL);
}
if ($_smarty_tpl->getValue('thumbnail_type') === 'core_video') {
$_smarty_tpl->assign('item_class', ((string)$_smarty_tpl->getValue('item_class'))." ty-video-thumbnail", false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_thumbnail", null, null);?><a href="javascript:void(0)" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_class')), ENT_QUOTES, 'UTF-8');?>
"style="width:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');?>
px;"data-ca-image-order="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_counter')), ENT_QUOTES, 'UTF-8');?>
"data-ca-parent="#product_images_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
"data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_id')), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ab__vg_gallery_image'=>true,'images'=>$_smarty_tpl->getValue('image'),'image_width'=>$_smarty_tpl->getValue('th_size'),'image_height'=>$_smarty_tpl->getValue('th_size'),'show_detailed_link'=>false,'obj_id'=>(($tmp = $_smarty_tpl->getValue('obj_id') ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('image_id'))."_mini" ?? null : $tmp)), (int) 0, $_smarty_current_dir);
?></a><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
if ($_smarty_tpl->getValue('is_thumbnails_gallery')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_thumbnail", null, null);?><div class="cm-item-gallery"><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_thumbnail');?>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_thumbnail');?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/components/product_thumbnail.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__video_gallery/components/product_thumbnail.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('product_id', (($tmp = (($tmp = $_smarty_tpl->getValue('product')['product_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('product_id') ?? null : $tmp) ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('ab__vg_videos', (($tmp = $_smarty_tpl->getValue('ab__vg_videos') ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_videos')($_smarty_tpl->getValue('product_id'))) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('ab__vg_settings', (($tmp = $_smarty_tpl->getValue('ab__vg_settings') ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_setting')($_smarty_tpl->getValue('product_id'))) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('th_size', (($tmp = $_smarty_tpl->getValue('th_size') ?? null)===null||$tmp==='' ? 60 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('thumbnail_type', (($tmp = $_smarty_tpl->getValue('thumbnail_type') ?? null)===null||$tmp==='' ? 'image' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('image_counter', (($tmp = $_smarty_tpl->getValue('image_counter') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_iterator')('image_counter') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('image_iterator', (($tmp = $_smarty_tpl->getValue('image_iterator') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_iterator')('image_iterator') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('video_iterator', (($tmp = $_smarty_tpl->getValue('video_iterator') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_iterator')('video_iterator') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('replace_image', (($tmp = $_smarty_tpl->getValue('replace_image') ?? null)===null||$tmp==='' ? ($_smarty_tpl->getValue('ab__vg_settings')['replace_image'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES') && $_smarty_tpl->getValue('ab__vg_videos')) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('is_thumbnails_gallery', (($tmp = $_smarty_tpl->getValue('is_thumbnails_gallery') ?? null)===null||$tmp==='' ? ($_smarty_tpl->getValue('settings')['Appearance']['thumbnails_gallery'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('item_class', "ty-product-thumbnails__item cm-thumbnails-mini", false, NULL);
if ($_smarty_tpl->getValue('is_thumbnails_gallery')) {
$_smarty_tpl->assign('item_class', ((string)$_smarty_tpl->getValue('item_class'))." cm-gallery-item gallery", false, NULL);
}
if ($_smarty_tpl->getValue('thumbnail_type') === 'video') {
$_smarty_tpl->assign('video', (($tmp = $_smarty_tpl->getValue('video') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('item_class', ((string)$_smarty_tpl->getValue('item_class'))." ab__vg-image_gallery_item", false, NULL);
if (($_smarty_tpl->getValue('replace_image') && $_smarty_tpl->getValue('video_iterator') === 1) || (!$_smarty_tpl->getValue('image_iterator') && $_smarty_tpl->getValue('video_iterator') === 1)) {
$_smarty_tpl->assign('item_class', ((string)$_smarty_tpl->getValue('item_class'))." active", false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_thumbnail", null, null);?><a href="javascript:void(0)" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_class')), ENT_QUOTES, 'UTF-8');?>
"data-ca-image-order="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_counter')), ENT_QUOTES, 'UTF-8');?>
"data-ca-parent="#product_images_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
" style="width:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');?>
px;"data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['video_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['unique_id']), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('video')['icon_type'] === 'none' || ($_smarty_tpl->getValue('video')['icon_type'] === 'icon' && !$_smarty_tpl->getValue('video')['icon']) || true) {?>                     <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon_width'=>$_smarty_tpl->getValue('th_size'),'icon_height'=>$_smarty_tpl->getValue('th_size'),'icon_alt'=>preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('video')['title']),'obj_id'=>((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('video')['video_id'])."_mini"), (int) 0, $_smarty_current_dir);
} else {
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video'),'width'=>$_smarty_tpl->getValue('th_size'),'height'=>$_smarty_tpl->getValue('th_size')), (int) 0, $_smarty_current_dir);
}?></a><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
} else {
$_smarty_tpl->assign('image', (($tmp = $_smarty_tpl->getValue('image') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('image_iterator') === 1 && !$_smarty_tpl->getValue('replace_image')) {
$_smarty_tpl->assign('item_class', ((string)$_smarty_tpl->getValue('item_class'))." active", false, NULL);
}
if ($_smarty_tpl->getValue('thumbnail_type') === 'core_video') {
$_smarty_tpl->assign('item_class', ((string)$_smarty_tpl->getValue('item_class'))." ty-video-thumbnail", false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_thumbnail", null, null);?><a href="javascript:void(0)" class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_class')), ENT_QUOTES, 'UTF-8');?>
"style="width:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('th_size')), ENT_QUOTES, 'UTF-8');?>
px;"data-ca-image-order="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_counter')), ENT_QUOTES, 'UTF-8');?>
"data-ca-parent="#product_images_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
"data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('preview_id')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_id')), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ab__vg_gallery_image'=>true,'images'=>$_smarty_tpl->getValue('image'),'image_width'=>$_smarty_tpl->getValue('th_size'),'image_height'=>$_smarty_tpl->getValue('th_size'),'show_detailed_link'=>false,'obj_id'=>(($tmp = $_smarty_tpl->getValue('obj_id') ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('image_id'))."_mini" ?? null : $tmp)), (int) 0, $_smarty_current_dir);
?></a><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
if ($_smarty_tpl->getValue('is_thumbnails_gallery')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "product_thumbnail", null, null);?><div class="cm-item-gallery"><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_thumbnail');?>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'product_thumbnail');?>

<?php }
}
}
