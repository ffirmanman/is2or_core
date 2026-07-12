<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:16
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd7c2ac723_75390785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9fc4253ab397e23f6a9fe2aac5c1268a80f23ef' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner_products.tpl' => 2,
  ),
),false)) {
function content_682fdd7c2ac723_75390785 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__ut2_banner:banners"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<div class="ut2-banner ut2-banner-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_device_settings'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "L") {?> ut2-scroll-item <?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_class'], ENT_QUOTES, 'UTF-8');?>
" style="<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme'] === "dark") {
$_smarty_tpl->_assignInScope('b_color_scheme', "0,0,0");?>--ab-banner-color-schemes: dark;<?php } else {
$_smarty_tpl->_assignInScope('b_color_scheme', "255,255,255");?>--ab-banner-color-schemes: light;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color_use'] === smarty_modifier_enum("YesNo::YES")) {?>--ab-banner-background-color: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color'] ?? null)===null||$tmp==='' ? 'white' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image_size']) {?>--ab-banner-background-size: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image_size'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position']) {?>--ab-banner-background-position: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'] === "colored" && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_color_use'] === smarty_modifier_enum("YesNo::YES")) {?>--ab-banner-mask-background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'] === "transparent" || $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'] === "transparent_blur") {?>--ab-banner-mask-background-color: color-mix(in srgb, <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_color'] ?? null)===null||$tmp==='' ? "rgba(".((string)$_smarty_tpl->tpl_vars['b_color_scheme']->value).")" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_opacity'], ENT_QUOTES, 'UTF-8');?>
%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0));<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'] === "transparent_gradient") {?>--ab-banner-mask-background-mix-color: color-mix(in srgb, <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_color'] ?? null)===null||$tmp==='' ? "rgba(".((string)$_smarty_tpl->tpl_vars['b_color_scheme']->value).")" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_opacity'], ENT_QUOTES, 'UTF-8');?>
%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0));--ab-banner-mask-background-gradient:<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_align'] === "auto") {
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'] === "center" && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'] === "center") {?>radial-gradient(ellipse at center center, var(--ab-banner-mask-background-mix-color)20%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)80%);<?php } else {
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width'] === smarty_modifier_enum("YesNo::YES")) {
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'] === "top") {?>linear-gradient(-180deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'] === "center") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'] === "bottom") {?>linear-gradient(0deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
} else {
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'] === "left") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'] === "center") {
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'] === "top") {?>linear-gradient(-180deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'] === "center") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'] === "bottom") {?>linear-gradient(0deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
}
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'] === "right") {?>linear-gradient(-90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
}
}
}
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_align'] === "left_to_right") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_align'] === "right_to_left") {?>linear-gradient(-90deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_align'] === "top_to_bottom") {?>linear-gradient(-180deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)70%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_align'] === "bottom_to_top") {?>linear-gradient(0deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)70%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_align'] === "center") {?>radial-gradient(ellipse at center center, var(--ab-banner-mask-background-mix-color)50%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)70%);<?php }
}
if (strlen(trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title']))) {?>--ab-banner-title-size: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_font_size'], ENT_QUOTES, 'UTF-8');?>
;--ab-banner-title-color: <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_color_use'] === smarty_modifier_enum("YesNo::YES")) {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_color'] ?? null)===null||$tmp==='' ? 'black' ?? null : $tmp), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme'] === "dark") {?>white<?php } else { ?>black<?php }?>;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_font_size']) {?>--ab-banner-description-size: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_font_size'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_color_use'] === smarty_modifier_enum("YesNo::YES")) {?>--ab-banner-description-color: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_color'] ?? null)===null||$tmp==='' ? 'black' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php } elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme'] === "dark") {?>--ab-banner-description-color: white;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color_use'] === smarty_modifier_enum("YesNo::YES")) {?>--ab-banner-description-bg: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color'] ?? null)===null||$tmp==='' ? 'black' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use'] === smarty_modifier_enum("YesNo::YES")) {?>--ab-banner-button-text-color: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color'] ?? null)===null||$tmp==='' ? 'white' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use'] === smarty_modifier_enum("YesNo::YES")) {?>--ab-banner-button-background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign']) {?>--ab-banner-v-align: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align']) {?>--ab-banner-g-align: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "desktop" && $_smarty_tpl->tpl_vars['block']->value['properties']['height_mobile']) {?>--ab-banner-height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['height_mobile'] ?? null)===null||$tmp==='' ? 'auto' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php } else { ?>--ab-banner-height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['height'] ?? null)===null||$tmp==='' ? 'auto' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php }
if (!empty($_smarty_tpl->tpl_vars['b']->value['abt__ut2_padding'])) {?>--ab-banner-content-padding: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_padding'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if (smarty_modifier_trim($_smarty_tpl->tpl_vars['block']->value['properties']['margin'])) {?>--ab-banner-block-margin: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['margin'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_type'] === "image") {?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load'] === smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->_assignInScope('data_backgroud_url', $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('background_url', $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path']);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['is_high_res']) {?>
            <?php $_smarty_tpl->_assignInScope('original_image_w', $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_x']);?>
            <?php $_smarty_tpl->_assignInScope('original_image_h', $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_y']);?>
            <?php $_smarty_tpl->_assignInScope('cropped', fn_image_to_display($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image'],$_smarty_tpl->tpl_vars['original_image_w']->value,$_smarty_tpl->tpl_vars['original_image_h']->value));?>

            <?php $_smarty_tpl->_assignInScope('url_1', "url(".((string)$_smarty_tpl->tpl_vars['cropped']->value['image_path']).") 1x");?>
            <?php $_smarty_tpl->_assignInScope('url_2', "url(".((string)$_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path']).") 2x");?>

            <?php $_smarty_tpl->_assignInScope('background_url', ((string)$_smarty_tpl->tpl_vars['cropped']->value['image_path'])."'); background-image: image-set(".((string)$_smarty_tpl->tpl_vars['url_1']->value).", ".((string)$_smarty_tpl->tpl_vars['url_2']->value).");" ,false ,2);?>
            <?php $_smarty_tpl->_assignInScope('data_backgroud_url', '' ,false ,2);?>
        <?php }?>
    <?php }?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__ut2_banner:banner"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banner"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banner"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use'] === smarty_modifier_enum("YesNo::NO") && smarty_modifier_trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']) && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] !== 'products') {?>
        <a <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'video' && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id']) {?>data-content="video"<?php }?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_how_to_open'] === 'in_new_window') {?> target="_blank"<?php }?> title="">
    <?php }?>

    <div class="ut2-a__bg-banner<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'products' && $_smarty_tpl->tpl_vars['b']->value['products']) {?> ut2-a__products-banner<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color'] === '#ffffff' && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> white-bg<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_position'] === "full_height") {?> mask-full-height<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_position'] === "whole_banner") {?> mask-whole-banner<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'] === "transparent_blur") {?> blur<?php }
if ($_smarty_tpl->tpl_vars['data_backgroud_url']->value) {?> lazyload<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme'], ENT_QUOTES, 'UTF-8');?>
"
         data-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['banner_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['data_backgroud_url']->value) {?>data-background-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_backgroud_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['background_url']->value) {?> style="background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['background_url']->value, ENT_QUOTES, 'UTF-8');?>
');"<?php }?>>

        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_type'] === "mp4_video" && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_mp4_video']) {?>
            <video class="ut2-banner__video" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['origin_https_location'], ENT_QUOTES, 'UTF-8');?>
/images/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_mp4_video'], ENT_QUOTES, 'UTF-8');?>
" muted loop playsinline></video>
        <?php }?>

        <div class="ut2-a__content valign-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'], ENT_QUOTES, 'UTF-8');?>
 align-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width'] === smarty_modifier_enum("YesNo::YES")) {?> width-full<?php } else { ?> width-half<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'image' && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?> internal-image<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'video' && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id']) {?> internal-image internal-video<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'products' && $_smarty_tpl->tpl_vars['b']->value['products']) {?> internal-products<?php }?>">

            <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'image' && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?>
                <div class="ut2-a__img <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position']) {?>vp--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position'], ENT_QUOTES, 'UTF-8');
}?>">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']), 0, false);
?>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'video' && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id']) {?>
                <div class="ut2-a__img ut2-a__video <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position']) {?>vp--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position'], ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['height'] || $_smarty_tpl->tpl_vars['block']->value['properties']['height_mobile']) {?>style="height: <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "mobile") {?>100%<?php } else {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['height'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}?>"<?php }?>
                     data-banner-youtube-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id'], ENT_QUOTES, 'UTF-8');?>
"
                     data-is-autoplay="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_autoplay'], ENT_QUOTES, 'UTF-8');?>
"
                     data-banner-youtube-params="<?php echo htmlspecialchars((string) fn_abt__ut2_build_youtube_link($_smarty_tpl->tpl_vars['b']->value,true), ENT_QUOTES, 'UTF-8');?>
">

                    <img data-type="youtube-img"
                         <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load'] === smarty_modifier_enum("YesNo::YES")) {?>src="<?php echo htmlspecialchars((string) (defined('ABT__UT2_LAZY_IMAGE') ? constant('ABT__UT2_LAZY_IMAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
                         class="lazyload"
                         data-<?php }?>src="https://img.youtube.com/vi/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id'], ENT_QUOTES, 'UTF-8');?>
/hqdefault.jpg"
                         alt="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title'] ?: ''), ENT_QUOTES, 'UTF-8');?>
">

                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'products' && $_smarty_tpl->tpl_vars['b']->value['products']) {?>
                <div class="ut2-a__img ut2-a__products <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position']) {?>vp--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position'], ENT_QUOTES, 'UTF-8');
}?>">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner_products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('banner'=>$_smarty_tpl->tpl_vars['b']->value), 0, false);
?>
                </div>
            <?php }?>

            <?php if (strlen(trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title'])) || strlen(trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description'])) || $_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
                <div class="ut2-a__description<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'] !== "none" && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_position'] === "only_under_content") {?> mask-under-content<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme'] === "dark") {?> dark<?php } else { ?> light<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'] === "transparent_blur") {?> blur<?php }
}?>">
                    <div class="box">

                        <<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_tag'] ?? null)===null||$tmp==='' ? "div" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 class="ut2-a__title<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_shadow'] === smarty_modifier_enum("YesNo::YES")) {?> shadow<?php }?> weight-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_font_weight'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title'];?>

                        </<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_tag'] ?? null)===null||$tmp==='' ? "div" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
>

                        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description']) {?>
                            <div class="ut2-a__descr <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color_use'] === smarty_modifier_enum("YesNo::YES") && strlen(trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color']))) {?>marked<?php }?>">
                                <?php echo $_smarty_tpl->tpl_vars['b']->value['abt__ut2_description'];?>

                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']) && strpos($_smarty_tpl->tpl_vars['b']->value['abt__ut2_class'],"b--button-position-bottom") === false) {?>
                            <div class="ut2-a__button">
                                <a class="ty-btn ty-btn<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_style'] === "normal") {?>__primary<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_style'] === "outline") {?>__outline<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_style'] === "text") {?>__text<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --bc<?php }
}?>" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_how_to_open'] === 'in_new_window') {?> target="_blank"<?php }?>><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text'] ?? null)===null||$tmp==='' ? "button" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <?php if (strpos($_smarty_tpl->tpl_vars['b']->value['abt__ut2_class'],"b--button-position-bottom") !== false) {?>
                    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
                        <div class="ut2-a__button">
                            <a class="ty-btn ty-btn<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_style'] === "normal") {?>__primary<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_style'] === "outline") {?>__outline<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_style'] === "text") {?>__text<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --bc<?php }
}?>" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_how_to_open'] === 'in_new_window') {?> target="_blank"<?php }?>><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text'] ?? null)===null||$tmp==='' ? "button" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                        </div>
                    <?php }?>
                <?php }?>
            <?php }?>

        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use'] === smarty_modifier_enum("YesNo::NO") && smarty_modifier_trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']) && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] !== 'products') {?>
        </a>
    <?php }?>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__ut2_banner:banners"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<div class="ut2-banner ut2-banner-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_device_settings'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "L") {?> ut2-scroll-item <?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_class'], ENT_QUOTES, 'UTF-8');?>
" style="<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme'] === "dark") {
$_smarty_tpl->_assignInScope('b_color_scheme', "0,0,0");?>--ab-banner-color-schemes: dark;<?php } else {
$_smarty_tpl->_assignInScope('b_color_scheme', "255,255,255");?>--ab-banner-color-schemes: light;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color_use'] === smarty_modifier_enum("YesNo::YES")) {?>--ab-banner-background-color: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color'] ?? null)===null||$tmp==='' ? 'white' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image_size']) {?>--ab-banner-background-size: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image_size'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position']) {?>--ab-banner-background-position: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'] === "colored" && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_color_use'] === smarty_modifier_enum("YesNo::YES")) {?>--ab-banner-mask-background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'] === "transparent" || $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'] === "transparent_blur") {?>--ab-banner-mask-background-color: color-mix(in srgb, <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_color'] ?? null)===null||$tmp==='' ? "rgba(".((string)$_smarty_tpl->tpl_vars['b_color_scheme']->value).")" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_opacity'], ENT_QUOTES, 'UTF-8');?>
%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0));<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'] === "transparent_gradient") {?>--ab-banner-mask-background-mix-color: color-mix(in srgb, <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_color'] ?? null)===null||$tmp==='' ? "rgba(".((string)$_smarty_tpl->tpl_vars['b_color_scheme']->value).")" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_opacity'], ENT_QUOTES, 'UTF-8');?>
%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0));--ab-banner-mask-background-gradient:<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_align'] === "auto") {
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'] === "center" && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'] === "center") {?>radial-gradient(ellipse at center center, var(--ab-banner-mask-background-mix-color)20%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)80%);<?php } else {
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width'] === smarty_modifier_enum("YesNo::YES")) {
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'] === "top") {?>linear-gradient(-180deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'] === "center") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'] === "bottom") {?>linear-gradient(0deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
} else {
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'] === "left") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'] === "center") {
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'] === "top") {?>linear-gradient(-180deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'] === "center") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'] === "bottom") {?>linear-gradient(0deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
}
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'] === "right") {?>linear-gradient(-90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
}
}
}
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_align'] === "left_to_right") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_align'] === "right_to_left") {?>linear-gradient(-90deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_align'] === "top_to_bottom") {?>linear-gradient(-180deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)70%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_align'] === "bottom_to_top") {?>linear-gradient(0deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)70%);<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_align'] === "center") {?>radial-gradient(ellipse at center center, var(--ab-banner-mask-background-mix-color)50%, rgba(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b_color_scheme']->value, ENT_QUOTES, 'UTF-8');?>
,0)70%);<?php }
}
if (strlen(trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title']))) {?>--ab-banner-title-size: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_font_size'], ENT_QUOTES, 'UTF-8');?>
;--ab-banner-title-color: <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_color_use'] === smarty_modifier_enum("YesNo::YES")) {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_color'] ?? null)===null||$tmp==='' ? 'black' ?? null : $tmp), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme'] === "dark") {?>white<?php } else { ?>black<?php }?>;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_font_size']) {?>--ab-banner-description-size: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_font_size'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_color_use'] === smarty_modifier_enum("YesNo::YES")) {?>--ab-banner-description-color: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_color'] ?? null)===null||$tmp==='' ? 'black' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php } elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme'] === "dark") {?>--ab-banner-description-color: white;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color_use'] === smarty_modifier_enum("YesNo::YES")) {?>--ab-banner-description-bg: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color'] ?? null)===null||$tmp==='' ? 'black' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use'] === smarty_modifier_enum("YesNo::YES")) {?>--ab-banner-button-text-color: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color'] ?? null)===null||$tmp==='' ? 'white' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use'] === smarty_modifier_enum("YesNo::YES")) {?>--ab-banner-button-background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign']) {?>--ab-banner-v-align: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align']) {?>--ab-banner-g-align: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "desktop" && $_smarty_tpl->tpl_vars['block']->value['properties']['height_mobile']) {?>--ab-banner-height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['height_mobile'] ?? null)===null||$tmp==='' ? 'auto' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php } else { ?>--ab-banner-height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['height'] ?? null)===null||$tmp==='' ? 'auto' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;<?php }
if (!empty($_smarty_tpl->tpl_vars['b']->value['abt__ut2_padding'])) {?>--ab-banner-content-padding: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_padding'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if (smarty_modifier_trim($_smarty_tpl->tpl_vars['block']->value['properties']['margin'])) {?>--ab-banner-block-margin: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['margin'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_type'] === "image") {?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load'] === smarty_modifier_enum("YesNo::YES")) {?>
            <?php $_smarty_tpl->_assignInScope('data_backgroud_url', $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('background_url', $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path']);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['is_high_res']) {?>
            <?php $_smarty_tpl->_assignInScope('original_image_w', $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_x']);?>
            <?php $_smarty_tpl->_assignInScope('original_image_h', $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_y']);?>
            <?php $_smarty_tpl->_assignInScope('cropped', fn_image_to_display($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image'],$_smarty_tpl->tpl_vars['original_image_w']->value,$_smarty_tpl->tpl_vars['original_image_h']->value));?>

            <?php $_smarty_tpl->_assignInScope('url_1', "url(".((string)$_smarty_tpl->tpl_vars['cropped']->value['image_path']).") 1x");?>
            <?php $_smarty_tpl->_assignInScope('url_2', "url(".((string)$_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path']).") 2x");?>

            <?php $_smarty_tpl->_assignInScope('background_url', ((string)$_smarty_tpl->tpl_vars['cropped']->value['image_path'])."'); background-image: image-set(".((string)$_smarty_tpl->tpl_vars['url_1']->value).", ".((string)$_smarty_tpl->tpl_vars['url_2']->value).");" ,false ,2);?>
            <?php $_smarty_tpl->_assignInScope('data_backgroud_url', '' ,false ,2);?>
        <?php }?>
    <?php }?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__ut2_banner:banner"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banner"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banner"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use'] === smarty_modifier_enum("YesNo::NO") && smarty_modifier_trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']) && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] !== 'products') {?>
        <a <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'video' && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id']) {?>data-content="video"<?php }?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_how_to_open'] === 'in_new_window') {?> target="_blank"<?php }?> title="">
    <?php }?>

    <div class="ut2-a__bg-banner<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'products' && $_smarty_tpl->tpl_vars['b']->value['products']) {?> ut2-a__products-banner<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color'] === '#ffffff' && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> white-bg<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_position'] === "full_height") {?> mask-full-height<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_position'] === "whole_banner") {?> mask-whole-banner<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'] === "transparent_blur") {?> blur<?php }
if ($_smarty_tpl->tpl_vars['data_backgroud_url']->value) {?> lazyload<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme'], ENT_QUOTES, 'UTF-8');?>
"
         data-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['banner_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['data_backgroud_url']->value) {?>data-background-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_backgroud_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['background_url']->value) {?> style="background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['background_url']->value, ENT_QUOTES, 'UTF-8');?>
');"<?php }?>>

        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_type'] === "mp4_video" && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_mp4_video']) {?>
            <video class="ut2-banner__video" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['origin_https_location'], ENT_QUOTES, 'UTF-8');?>
/images/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_mp4_video'], ENT_QUOTES, 'UTF-8');?>
" muted loop playsinline></video>
        <?php }?>

        <div class="ut2-a__content valign-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'], ENT_QUOTES, 'UTF-8');?>
 align-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width'] === smarty_modifier_enum("YesNo::YES")) {?> width-full<?php } else { ?> width-half<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'image' && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?> internal-image<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'video' && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id']) {?> internal-image internal-video<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'products' && $_smarty_tpl->tpl_vars['b']->value['products']) {?> internal-products<?php }?>">

            <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'image' && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?>
                <div class="ut2-a__img <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position']) {?>vp--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position'], ENT_QUOTES, 'UTF-8');
}?>">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']), 0, true);
?>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'video' && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id']) {?>
                <div class="ut2-a__img ut2-a__video <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position']) {?>vp--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position'], ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['height'] || $_smarty_tpl->tpl_vars['block']->value['properties']['height_mobile']) {?>style="height: <?php if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "mobile") {?>100%<?php } else {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['height'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}?>"<?php }?>
                     data-banner-youtube-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id'], ENT_QUOTES, 'UTF-8');?>
"
                     data-is-autoplay="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_autoplay'], ENT_QUOTES, 'UTF-8');?>
"
                     data-banner-youtube-params="<?php echo htmlspecialchars((string) fn_abt__ut2_build_youtube_link($_smarty_tpl->tpl_vars['b']->value,true), ENT_QUOTES, 'UTF-8');?>
">

                    <img data-type="youtube-img"
                         <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load'] === smarty_modifier_enum("YesNo::YES")) {?>src="<?php echo htmlspecialchars((string) (defined('ABT__UT2_LAZY_IMAGE') ? constant('ABT__UT2_LAZY_IMAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
                         class="lazyload"
                         data-<?php }?>src="https://img.youtube.com/vi/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id'], ENT_QUOTES, 'UTF-8');?>
/hqdefault.jpg"
                         alt="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title'] ?: ''), ENT_QUOTES, 'UTF-8');?>
">

                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] === 'products' && $_smarty_tpl->tpl_vars['b']->value['products']) {?>
                <div class="ut2-a__img ut2-a__products <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position']) {?>vp--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_image_position'], ENT_QUOTES, 'UTF-8');
}?>">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner_products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('banner'=>$_smarty_tpl->tpl_vars['b']->value), 0, true);
?>
                </div>
            <?php }?>

            <?php if (strlen(trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title'])) || strlen(trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description'])) || $_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
                <div class="ut2-a__description<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'] !== "none" && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_position'] === "only_under_content") {?> mask-under-content<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme'] === "dark") {?> dark<?php } else { ?> light<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'] === "transparent_blur") {?> blur<?php }
}?>">
                    <div class="box">

                        <<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_tag'] ?? null)===null||$tmp==='' ? "div" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 class="ut2-a__title<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_shadow'] === smarty_modifier_enum("YesNo::YES")) {?> shadow<?php }?> weight-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_font_weight'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title'];?>

                        </<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_tag'] ?? null)===null||$tmp==='' ? "div" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
>

                        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description']) {?>
                            <div class="ut2-a__descr <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color_use'] === smarty_modifier_enum("YesNo::YES") && strlen(trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color']))) {?>marked<?php }?>">
                                <?php echo $_smarty_tpl->tpl_vars['b']->value['abt__ut2_description'];?>

                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']) && strpos($_smarty_tpl->tpl_vars['b']->value['abt__ut2_class'],"b--button-position-bottom") === false) {?>
                            <div class="ut2-a__button">
                                <a class="ty-btn ty-btn<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_style'] === "normal") {?>__primary<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_style'] === "outline") {?>__outline<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_style'] === "text") {?>__text<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --bc<?php }
}?>" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_how_to_open'] === 'in_new_window') {?> target="_blank"<?php }?>><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text'] ?? null)===null||$tmp==='' ? "button" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <?php if (strpos($_smarty_tpl->tpl_vars['b']->value['abt__ut2_class'],"b--button-position-bottom") !== false) {?>
                    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
                        <div class="ut2-a__button">
                            <a class="ty-btn ty-btn<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_style'] === "normal") {?>__primary<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_style'] === "outline") {?>__outline<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_style'] === "text") {?>__text<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use'] === smarty_modifier_enum("YesNo::YES")) {?> --bc<?php }
}?>" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_how_to_open'] === 'in_new_window') {?> target="_blank"<?php }?>><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text'] ?? null)===null||$tmp==='' ? "button" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                        </div>
                    <?php }?>
                <?php }?>
            <?php }?>

        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use'] === smarty_modifier_enum("YesNo::NO") && smarty_modifier_trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']) && $_smarty_tpl->tpl_vars['b']->value['abt__ut2_object'] !== 'products') {?>
        </a>
    <?php }?>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__ut2_banner:banners"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
