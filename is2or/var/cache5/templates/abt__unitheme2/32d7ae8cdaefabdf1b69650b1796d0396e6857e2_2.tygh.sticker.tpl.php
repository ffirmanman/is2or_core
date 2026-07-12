<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:16:47
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__stickers/views/ab__stickers/components/sticker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bb3f635f97_29826485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32d7ae8cdaefabdf1b69650b1796d0396e6857e2' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__stickers/views/ab__stickers/components/sticker.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_6835bb3f635f97_29826485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('text_style', constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::TEXT"));
$_smarty_tpl->_assignInScope('graphic_style', constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::GRAPHIC"));
$_smarty_tpl->_assignInScope('pictogram_style', constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::PICTOGRAM"));
$_smarty_tpl->_assignInScope('deault_sticker_style', $_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['ts_appearance']);
if ($_smarty_tpl->tpl_vars['sticker']->value['style'] === $_smarty_tpl->tpl_vars['pictogram_style']->value) {
$_smarty_tpl->_assignInScope('deault_sticker_style', $_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['p_appearance']);
}
if ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['text_style']->value || ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['graphic_style']->value && $_smarty_tpl->tpl_vars['sticker']->value['main_pair']) || ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['pictogram_style']->value && $_smarty_tpl->tpl_vars['sticker']->value['main_pair_p'])) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:sticker"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:sticker"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div class="ab-sticker<?php if ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['text_style']->value || $_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['pictogram_style']->value) {?> <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['sticker']->value['appearance']['appearance_style'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['deault_sticker_style']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ((($tmp = $_smarty_tpl->tpl_vars['sticker']->value['appearance']['use_theme_presets'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y") {?> theme-color-presets<?php }
}
if ($_smarty_tpl->tpl_vars['sticker']->value['user_class'][$_smarty_tpl->tpl_vars['template']->value]) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['user_class'][$_smarty_tpl->tpl_vars['template']->value], ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['style'], ENT_QUOTES, 'UTF-8');?>
-sticker"<?php if ($_smarty_tpl->tpl_vars['sticker']->value['description']) {?> data-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['text_style']->value) {?> style="<?php if ((($tmp = $_smarty_tpl->tpl_vars['sticker']->value['appearance']['use_theme_presets'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) != "Y") {?>background-color:<?php echo htmlspecialchars((string) fn_ab__stickers_hex_to_rgba($_smarty_tpl->tpl_vars['sticker']->value['appearance']['sticker_bg'],$_smarty_tpl->tpl_vars['sticker']->value['appearance']['sticker_bg_opacity']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['sticker']->value['appearance']['border_width'] != "0" && (($tmp = $_smarty_tpl->tpl_vars['sticker']->value['appearance']['appearance_style'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['ts_appearance'] ?? null : $tmp) != "beveled_angle") {?>box-shadow: inset 0 0 0 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['appearance']['border_width'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['appearance']['border_color'], ENT_QUOTES, 'UTF-8');
}?>"<?php }?>><?php if ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['text_style']->value) {?><div class="ab-sticker__name<?php if ($_smarty_tpl->tpl_vars['sticker']->value['appearance']['uppercase_text'] == "Y") {?> uppercase<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stikcers:sticker_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stikcers:sticker_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['appearance']['text_color'], ENT_QUOTES, 'UTF-8');?>
" class="tfs"><?php echo (($tmp = $_smarty_tpl->tpl_vars['sticker']->value['name_for_desktop'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['sticker']->value['name_for_admin'] ?? null : $tmp);?>
</span><span style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['appearance']['text_color'], ENT_QUOTES, 'UTF-8');?>
" class="tss"><?php echo (($tmp = $_smarty_tpl->tpl_vars['sticker']->value['name_for_mobile'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['sticker']->value['name_for_admin'] ?? null : $tmp);?>
</span><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stikcers:sticker_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php } else {
if ($_smarty_tpl->tpl_vars['sticker']->value['appearance']['small_size_image_size'] > $_smarty_tpl->tpl_vars['sticker']->value['appearance']['full_size_image_size']) {
$_smarty_tpl->_assignInScope('image_width', $_smarty_tpl->tpl_vars['sticker']->value['appearance']['small_size_image_size']);
$_smarty_tpl->_assignInScope('image_height', $_smarty_tpl->tpl_vars['sticker']->value['appearance']['small_size_image_size']);
} else {
$_smarty_tpl->_assignInScope('image_width', $_smarty_tpl->tpl_vars['sticker']->value['appearance']['full_size_image_size']);
$_smarty_tpl->_assignInScope('image_height', $_smarty_tpl->tpl_vars['sticker']->value['appearance']['full_size_image_size']);
}
if ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['pictogram_style']->value) {
$_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['sticker']->value['main_pair_p']);
} else {
$_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['sticker']->value['main_pair']);
}
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['image']->value,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'lazy_load'=>false), 0, false);
}?></div><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:sticker"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:tooltip"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:tooltip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['sticker']->value['description']) {?><div class="ab-sticker__tooltip" data-sticker-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
"><div class="ab-sticker__tooltip-pointer" data-sticker-p-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
"></div><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:tooltip_closer"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:tooltip_closer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><i class="ab-sticker__tooltip-closer ty-icon-cancel" onclick="Tygh.ab__stickers.functions.close_tooltip(this)"></i><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:tooltip_closer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['sticker']->value['description']);?>
</div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:tooltip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/views/ab__stickers/components/sticker.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__stickers/views/ab__stickers/components/sticker.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('text_style', constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::TEXT"));
$_smarty_tpl->_assignInScope('graphic_style', constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::GRAPHIC"));
$_smarty_tpl->_assignInScope('pictogram_style', constant("Tygh\Enum\Addons\Ab_stickers\StickerStyles::PICTOGRAM"));
$_smarty_tpl->_assignInScope('deault_sticker_style', $_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['ts_appearance']);
if ($_smarty_tpl->tpl_vars['sticker']->value['style'] === $_smarty_tpl->tpl_vars['pictogram_style']->value) {
$_smarty_tpl->_assignInScope('deault_sticker_style', $_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['p_appearance']);
}
if ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['text_style']->value || ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['graphic_style']->value && $_smarty_tpl->tpl_vars['sticker']->value['main_pair']) || ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['pictogram_style']->value && $_smarty_tpl->tpl_vars['sticker']->value['main_pair_p'])) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:sticker"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:sticker"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div class="ab-sticker<?php if ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['text_style']->value || $_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['pictogram_style']->value) {?> <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['sticker']->value['appearance']['appearance_style'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['deault_sticker_style']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if ((($tmp = $_smarty_tpl->tpl_vars['sticker']->value['appearance']['use_theme_presets'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y") {?> theme-color-presets<?php }
}
if ($_smarty_tpl->tpl_vars['sticker']->value['user_class'][$_smarty_tpl->tpl_vars['template']->value]) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['user_class'][$_smarty_tpl->tpl_vars['template']->value], ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['style'], ENT_QUOTES, 'UTF-8');?>
-sticker"<?php if ($_smarty_tpl->tpl_vars['sticker']->value['description']) {?> data-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['text_style']->value) {?> style="<?php if ((($tmp = $_smarty_tpl->tpl_vars['sticker']->value['appearance']['use_theme_presets'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) != "Y") {?>background-color:<?php echo htmlspecialchars((string) fn_ab__stickers_hex_to_rgba($_smarty_tpl->tpl_vars['sticker']->value['appearance']['sticker_bg'],$_smarty_tpl->tpl_vars['sticker']->value['appearance']['sticker_bg_opacity']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['sticker']->value['appearance']['border_width'] != "0" && (($tmp = $_smarty_tpl->tpl_vars['sticker']->value['appearance']['appearance_style'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['addons']->value['ab__stickers']['ts_appearance'] ?? null : $tmp) != "beveled_angle") {?>box-shadow: inset 0 0 0 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['appearance']['border_width'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['appearance']['border_color'], ENT_QUOTES, 'UTF-8');
}?>"<?php }?>><?php if ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['text_style']->value) {?><div class="ab-sticker__name<?php if ($_smarty_tpl->tpl_vars['sticker']->value['appearance']['uppercase_text'] == "Y") {?> uppercase<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stikcers:sticker_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stikcers:sticker_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['appearance']['text_color'], ENT_QUOTES, 'UTF-8');?>
" class="tfs"><?php echo (($tmp = $_smarty_tpl->tpl_vars['sticker']->value['name_for_desktop'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['sticker']->value['name_for_admin'] ?? null : $tmp);?>
</span><span style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['appearance']['text_color'], ENT_QUOTES, 'UTF-8');?>
" class="tss"><?php echo (($tmp = $_smarty_tpl->tpl_vars['sticker']->value['name_for_mobile'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['sticker']->value['name_for_admin'] ?? null : $tmp);?>
</span><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stikcers:sticker_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php } else {
if ($_smarty_tpl->tpl_vars['sticker']->value['appearance']['small_size_image_size'] > $_smarty_tpl->tpl_vars['sticker']->value['appearance']['full_size_image_size']) {
$_smarty_tpl->_assignInScope('image_width', $_smarty_tpl->tpl_vars['sticker']->value['appearance']['small_size_image_size']);
$_smarty_tpl->_assignInScope('image_height', $_smarty_tpl->tpl_vars['sticker']->value['appearance']['small_size_image_size']);
} else {
$_smarty_tpl->_assignInScope('image_width', $_smarty_tpl->tpl_vars['sticker']->value['appearance']['full_size_image_size']);
$_smarty_tpl->_assignInScope('image_height', $_smarty_tpl->tpl_vars['sticker']->value['appearance']['full_size_image_size']);
}
if ($_smarty_tpl->tpl_vars['sticker']->value['style'] == $_smarty_tpl->tpl_vars['pictogram_style']->value) {
$_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['sticker']->value['main_pair_p']);
} else {
$_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['sticker']->value['main_pair']);
}
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['image']->value,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'lazy_load'=>false), 0, true);
}?></div><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:sticker"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:tooltip"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:tooltip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['sticker']->value['description']) {?><div class="ab-sticker__tooltip" data-sticker-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
"><div class="ab-sticker__tooltip-pointer" data-sticker-p-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticker']->value['html_id'], ENT_QUOTES, 'UTF-8');?>
"></div><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"ab__stickers:tooltip_closer"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"ab__stickers:tooltip_closer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><i class="ab-sticker__tooltip-closer ty-icon-cancel" onclick="Tygh.ab__stickers.functions.close_tooltip(this)"></i><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:tooltip_closer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['sticker']->value['description']);?>
</div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"ab__stickers:tooltip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}
