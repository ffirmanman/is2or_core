<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:30:22
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__video_gallery/components/product_thumbnail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345ede2a3615_96150921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '335a444619e33529928cecab06f18eee6bae9ae8' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__video_gallery/components/product_thumbnail.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__video_gallery/components/video_icon.tpl' => 2,
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_68345ede2a3615_96150921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('replace_image_by_video', $_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image'] === smarty_modifier_enum("YesNo::YES"));
$_smarty_tpl->_assignInScope('item_class', "ty-product-thumbnails__item cm-thumbnails-mini");
if ($_smarty_tpl->tpl_vars['is_thumbnails_gallery']->value) {
$_smarty_tpl->_assignInScope('item_class', ((string)$_smarty_tpl->tpl_vars['item_class']->value)." cm-gallery-item gallery");
}
if ($_smarty_tpl->tpl_vars['thumbnail_type']->value === 'video') {
$_smarty_tpl->_assignInScope('item_class', ((string)$_smarty_tpl->tpl_vars['item_class']->value)." ab__vg-image_gallery_item");
if (($_smarty_tpl->tpl_vars['replace_image_by_video']->value && $_smarty_tpl->tpl_vars['video_iterator']->value === 1) || (!$_smarty_tpl->tpl_vars['image_iterator']->value && $_smarty_tpl->tpl_vars['video_iterator']->value === 1)) {
$_smarty_tpl->_assignInScope('item_class', ((string)$_smarty_tpl->tpl_vars['item_class']->value)." active");
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_thumbnail", null, null);?><a href="javascript:void(0)" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['unique_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-order="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
" style="width:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;"><?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_alt'=>preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title'] ?: ''),'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['video']->value['video_id'])."_mini"), 0, false);
?></a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
} else {
if ($_smarty_tpl->tpl_vars['image_iterator']->value === 1 && (!$_smarty_tpl->tpl_vars['ab__vg_videos']->value || (!$_smarty_tpl->tpl_vars['ab__vg_videos']->value && $_smarty_tpl->tpl_vars['replace_image_by_video']->value))) {
$_smarty_tpl->_assignInScope('item_class', ((string)$_smarty_tpl->tpl_vars['item_class']->value)." active");
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_thumbnail", null, null);?><a href="javascript:void(0)" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-image-order="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
" style="width:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ab__vg_gallery_image'=>true,'images'=>$_smarty_tpl->tpl_vars['image']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0, false);
?></a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['is_thumbnails_gallery']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_thumbnail", null, null);?><div class="cm-item-gallery"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_thumbnail');?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_thumbnail');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/components/product_thumbnail.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/components/product_thumbnail.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('replace_image_by_video', $_smarty_tpl->tpl_vars['ab__vg_settings']->value['replace_image'] === smarty_modifier_enum("YesNo::YES"));
$_smarty_tpl->_assignInScope('item_class', "ty-product-thumbnails__item cm-thumbnails-mini");
if ($_smarty_tpl->tpl_vars['is_thumbnails_gallery']->value) {
$_smarty_tpl->_assignInScope('item_class', ((string)$_smarty_tpl->tpl_vars['item_class']->value)." cm-gallery-item gallery");
}
if ($_smarty_tpl->tpl_vars['thumbnail_type']->value === 'video') {
$_smarty_tpl->_assignInScope('item_class', ((string)$_smarty_tpl->tpl_vars['item_class']->value)." ab__vg-image_gallery_item");
if (($_smarty_tpl->tpl_vars['replace_image_by_video']->value && $_smarty_tpl->tpl_vars['video_iterator']->value === 1) || (!$_smarty_tpl->tpl_vars['image_iterator']->value && $_smarty_tpl->tpl_vars['video_iterator']->value === 1)) {
$_smarty_tpl->_assignInScope('item_class', ((string)$_smarty_tpl->tpl_vars['item_class']->value)." active");
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_thumbnail", null, null);?><a href="javascript:void(0)" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['unique_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-order="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
" style="width:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;"><?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'icon_alt'=>preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['video']->value['title'] ?: ''),'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['video']->value['video_id'])."_mini"), 0, true);
?></a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
} else {
if ($_smarty_tpl->tpl_vars['image_iterator']->value === 1 && (!$_smarty_tpl->tpl_vars['ab__vg_videos']->value || (!$_smarty_tpl->tpl_vars['ab__vg_videos']->value && $_smarty_tpl->tpl_vars['replace_image_by_video']->value))) {
$_smarty_tpl->_assignInScope('item_class', ((string)$_smarty_tpl->tpl_vars['item_class']->value)." active");
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_thumbnail", null, null);?><a href="javascript:void(0)" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-gallery-large-id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-image-order="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_counter']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-parent="#product_images_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
" style="width:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;height:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['th_size']->value, ENT_QUOTES, 'UTF-8');?>
px;"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ab__vg_gallery_image'=>true,'images'=>$_smarty_tpl->tpl_vars['image']->value,'image_width'=>$_smarty_tpl->tpl_vars['th_size']->value,'image_height'=>$_smarty_tpl->tpl_vars['th_size']->value,'show_detailed_link'=>false,'obj_id'=>((string)$_smarty_tpl->tpl_vars['preview_id']->value)."_".((string)$_smarty_tpl->tpl_vars['image_id']->value)."_mini"), 0, true);
?></a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
if ($_smarty_tpl->tpl_vars['is_thumbnails_gallery']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_thumbnail", null, null);?><div class="cm-item-gallery"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_thumbnail');?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_thumbnail');
}
}
}
