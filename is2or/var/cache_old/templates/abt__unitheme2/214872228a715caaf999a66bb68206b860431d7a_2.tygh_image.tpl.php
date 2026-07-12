<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:30
  from 'tygh:common/image.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94728ea782_03458239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '214872228a715caaf999a66bb68206b860431d7a' => 
    array (
      0 => 'common/image.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad94728ea782_03458239 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('no_image','no_image'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('capture_image')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "image", null, null);
}
$_smarty_tpl->assign('image_data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_image_to_display')($_smarty_tpl->getValue('images'),$_smarty_tpl->getValue('image_width'),$_smarty_tpl->getValue('image_height')), false, NULL);
$_smarty_tpl->assign('generate_image', $_smarty_tpl->getValue('image_data')['generate_image'] && !$_smarty_tpl->getValue('external'), false, NULL);
$_smarty_tpl->assign('show_no_image', (($tmp = $_smarty_tpl->getValue('show_no_image') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('image_additional_attrs', (($tmp = $_smarty_tpl->getValue('image_additional_attrs') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('image_link_additional_attrs', (($tmp = $_smarty_tpl->getValue('image_link_additional_attrs') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('image_data')) {
$_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["alt"] = $_smarty_tpl->getValue('image_data')['alt'];
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, NULL);
$_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["title"] = $_smarty_tpl->getValue('image_data')['alt'];
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, NULL);
$_tmp_array = $_smarty_tpl->getValue('image_link_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["title"] = $_smarty_tpl->getValue('images')['detailed']['alt'];
$_smarty_tpl->assign('image_link_additional_attrs', $_tmp_array, false, NULL);
}
if (!$_smarty_tpl->getValue('obj_id')) {
if ($_smarty_tpl->getValue('image_data')['image_path']) {
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getSmarty()->getModifierCallback('crc32')($_smarty_tpl->getValue('image_data')['image_path']), false, NULL);
} elseif ($_smarty_tpl->getValue('image_id')) {
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getSmarty()->getModifierCallback('crc32')($_smarty_tpl->getValue('image_id')), false, NULL);
} else {
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getSmarty()->getModifierCallback('uniqid')(), false, NULL);
}
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"common:image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('show_detailed_link')) {?><a id="det_img_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('image_data')['detailed_image_path'] && $_smarty_tpl->getValue('image_id')) {?>data-ca-image-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_class')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('image_data')['detailed_image_path']) {?>cm-previewer ty-previewer<?php }?>" data-ca-image-width="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images')['detailed']['image_x']), ENT_QUOTES, 'UTF-8');?>
" data-ca-image-height="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images')['detailed']['image_y']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('image_data')['detailed_image_path']) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['detailed_image_path']), ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('image_link_additional_attrs'));
}?> <?php if ($_smarty_tpl->getValue('show_detailed_link')) {?>style="--previewer-img-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['width']), ENT_QUOTES, 'UTF-8');?>
;--previewer-img-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['height']), ENT_QUOTES, 'UTF-8');?>
;"<?php }?>><?php }
if ($_smarty_tpl->getValue('image_data')['image_path']) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_image_object"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('image_attributes', (($tmp = $_smarty_tpl->getValue('image_additional_attrs') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('obj_id') && !$_smarty_tpl->getValue('no_ids')) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['id'] = "det_img_".((string)$_smarty_tpl->getValue('obj_id'));
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('image_data')['width'] && !$_smarty_tpl->getValue('image_attributes')['width']) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['width'] = $_smarty_tpl->getValue('image_data')['width'];
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('image_data')['height'] && !$_smarty_tpl->getValue('image_attributes')['height']) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['height'] = $_smarty_tpl->getValue('image_data')['height'];
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('generate_image')) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-image-path"] = $_smarty_tpl->getValue('image_data')['image_path'];
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('generate_image')) {
$_smarty_tpl->assign('image_initial_src', ((string)$_smarty_tpl->getValue('images_dir'))."/icons/spacer.gif", false, NULL);
} else {
$_smarty_tpl->assign('image_initial_src', $_smarty_tpl->getValue('image_data')['image_path'], false, NULL);
}
if ($_smarty_tpl->getValue('lazy_load')) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-src"] = $_smarty_tpl->getValue('image_initial_src');
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
} else {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['src'] = $_smarty_tpl->getValue('image_initial_src');
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('image_onclick')) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['onclick'] = $_smarty_tpl->getValue('image_onclick');
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}?><img class="ty-pict <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('valign')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('lazy_load')) {?>lazyOwl<?php }?> <?php if ($_smarty_tpl->getValue('generate_image')) {?>ty-spinner<?php }?> cm-image" <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('image_attributes'));?>
 /><?php if ($_smarty_tpl->getValue('show_detailed_link')) {?><svg class="ty-pict__container" aria-hidden="true" width="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['width']), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['height']), ENT_QUOTES, 'UTF-8');?>
" viewBox="0 0 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['width']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['height']), ENT_QUOTES, 'UTF-8');?>
" style="max-height: 100%; max-width: 100%; position: absolute; top: 0; left: 50%; transform: translateX(-50%); z-index: -1;"><rect fill="transparent" width="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['width']), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['height']), ENT_QUOTES, 'UTF-8');?>
"></rect></svg><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_image_object"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
} elseif ($_smarty_tpl->getValue('show_no_image')) {?><span class="ty-no-image" style="width: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('image_width') ?? null)===null||$tmp==='' ? 80 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px;height: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('image_height') ?? null)===null||$tmp==='' ? 80 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px;aspect-ratio: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('image_width') ?? null)===null||$tmp==='' ? 80 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 / <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('image_height') ?? null)===null||$tmp==='' ? 80 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-image ty-no-image__icon",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("no_image", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>
</span><?php }
if ($_smarty_tpl->getValue('show_detailed_link')) {
if ($_smarty_tpl->getValue('images')['detailed_id']) {?><span class="ty-previewer__icon hidden-phone"></span><?php }?></a><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"common:image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('capture_image')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "icon_image_path", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['image_path']), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "detailed_image_path", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['detailed_image_path']), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/image.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/image.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('capture_image')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "image", null, null);
}
$_smarty_tpl->assign('image_data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_image_to_display')($_smarty_tpl->getValue('images'),$_smarty_tpl->getValue('image_width'),$_smarty_tpl->getValue('image_height')), false, NULL);
$_smarty_tpl->assign('generate_image', $_smarty_tpl->getValue('image_data')['generate_image'] && !$_smarty_tpl->getValue('external'), false, NULL);
$_smarty_tpl->assign('show_no_image', (($tmp = $_smarty_tpl->getValue('show_no_image') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('image_additional_attrs', (($tmp = $_smarty_tpl->getValue('image_additional_attrs') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('image_link_additional_attrs', (($tmp = $_smarty_tpl->getValue('image_link_additional_attrs') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('image_data')) {
$_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["alt"] = $_smarty_tpl->getValue('image_data')['alt'];
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, NULL);
$_tmp_array = $_smarty_tpl->getValue('image_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["title"] = $_smarty_tpl->getValue('image_data')['alt'];
$_smarty_tpl->assign('image_additional_attrs', $_tmp_array, false, NULL);
$_tmp_array = $_smarty_tpl->getValue('image_link_additional_attrs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["title"] = $_smarty_tpl->getValue('images')['detailed']['alt'];
$_smarty_tpl->assign('image_link_additional_attrs', $_tmp_array, false, NULL);
}
if (!$_smarty_tpl->getValue('obj_id')) {
if ($_smarty_tpl->getValue('image_data')['image_path']) {
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getSmarty()->getModifierCallback('crc32')($_smarty_tpl->getValue('image_data')['image_path']), false, NULL);
} elseif ($_smarty_tpl->getValue('image_id')) {
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getSmarty()->getModifierCallback('crc32')($_smarty_tpl->getValue('image_id')), false, NULL);
} else {
$_smarty_tpl->assign('obj_id', $_smarty_tpl->getSmarty()->getModifierCallback('uniqid')(), false, NULL);
}
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"common:image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('show_detailed_link')) {?><a id="det_img_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('image_data')['detailed_image_path'] && $_smarty_tpl->getValue('image_id')) {?>data-ca-image-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_id')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_class')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('image_data')['detailed_image_path']) {?>cm-previewer ty-previewer<?php }?>" data-ca-image-width="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images')['detailed']['image_x']), ENT_QUOTES, 'UTF-8');?>
" data-ca-image-height="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images')['detailed']['image_y']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('image_data')['detailed_image_path']) {?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['detailed_image_path']), ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('image_link_additional_attrs'));
}?> <?php if ($_smarty_tpl->getValue('show_detailed_link')) {?>style="--previewer-img-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['width']), ENT_QUOTES, 'UTF-8');?>
;--previewer-img-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['height']), ENT_QUOTES, 'UTF-8');?>
;"<?php }?>><?php }
if ($_smarty_tpl->getValue('image_data')['image_path']) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_image_object"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('image_attributes', (($tmp = $_smarty_tpl->getValue('image_additional_attrs') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('obj_id') && !$_smarty_tpl->getValue('no_ids')) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['id'] = "det_img_".((string)$_smarty_tpl->getValue('obj_id'));
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('image_data')['width'] && !$_smarty_tpl->getValue('image_attributes')['width']) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['width'] = $_smarty_tpl->getValue('image_data')['width'];
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('image_data')['height'] && !$_smarty_tpl->getValue('image_attributes')['height']) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['height'] = $_smarty_tpl->getValue('image_data')['height'];
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('generate_image')) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-image-path"] = $_smarty_tpl->getValue('image_data')['image_path'];
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('generate_image')) {
$_smarty_tpl->assign('image_initial_src', ((string)$_smarty_tpl->getValue('images_dir'))."/icons/spacer.gif", false, NULL);
} else {
$_smarty_tpl->assign('image_initial_src', $_smarty_tpl->getValue('image_data')['image_path'], false, NULL);
}
if ($_smarty_tpl->getValue('lazy_load')) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-src"] = $_smarty_tpl->getValue('image_initial_src');
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
} else {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['src'] = $_smarty_tpl->getValue('image_initial_src');
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}
if ($_smarty_tpl->getValue('image_onclick')) {
$_tmp_array = $_smarty_tpl->getValue('image_attributes') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['onclick'] = $_smarty_tpl->getValue('image_onclick');
$_smarty_tpl->assign('image_attributes', $_tmp_array, false, NULL);
}?><img class="ty-pict <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('valign')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('lazy_load')) {?>lazyOwl<?php }?> <?php if ($_smarty_tpl->getValue('generate_image')) {?>ty-spinner<?php }?> cm-image" <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('image_attributes'));?>
 /><?php if ($_smarty_tpl->getValue('show_detailed_link')) {?><svg class="ty-pict__container" aria-hidden="true" width="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['width']), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['height']), ENT_QUOTES, 'UTF-8');?>
" viewBox="0 0 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['width']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['height']), ENT_QUOTES, 'UTF-8');?>
" style="max-height: 100%; max-width: 100%; position: absolute; top: 0; left: 50%; transform: translateX(-50%); z-index: -1;"><rect fill="transparent" width="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['width']), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['height']), ENT_QUOTES, 'UTF-8');?>
"></rect></svg><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_image_object"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
} elseif ($_smarty_tpl->getValue('show_no_image')) {?><span class="ty-no-image" style="width: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('image_width') ?? null)===null||$tmp==='' ? 80 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px;height: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('image_height') ?? null)===null||$tmp==='' ? 80 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px;aspect-ratio: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('image_width') ?? null)===null||$tmp==='' ? 80 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 / <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('image_height') ?? null)===null||$tmp==='' ? 80 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-image ty-no-image__icon",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("no_image", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>
</span><?php }
if ($_smarty_tpl->getValue('show_detailed_link')) {
if ($_smarty_tpl->getValue('images')['detailed_id']) {?><span class="ty-previewer__icon hidden-phone"></span><?php }?></a><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"common:image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('capture_image')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "icon_image_path", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['image_path']), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "detailed_image_path", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_data')['detailed_image_path']), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
}
