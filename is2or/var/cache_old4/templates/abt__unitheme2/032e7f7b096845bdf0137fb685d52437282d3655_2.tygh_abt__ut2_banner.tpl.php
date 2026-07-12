<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:13:32
  from 'tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4c8c288244_19127533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '032e7f7b096845bdf0137fb685d52437282d3655' => 
    array (
      0 => 'addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner_products.tpl' => 2,
  ),
))) {
function content_69fb4c8c288244_19127533 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_banner:banners"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

<?php $_smarty_tpl->assign('device', '', false, NULL);
if (!( !true || empty($_smarty_tpl->getValue('settings')['ab__device'])) && $_smarty_tpl->getValue('settings')['ab__device'] != "desktop") {?>
    <?php $_smarty_tpl->assign('device', "_".((string)$_smarty_tpl->getValue('settings')['ab__device']), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('b')['abt__ut2_device_settings']) {?>
<div class="ut2-banner ut2-banner-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_device_settings']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('block')['properties']['navigation'] == "L") {?> ut2-scroll-item <?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_class']), ENT_QUOTES, 'UTF-8');?>
" style="<?php if ($_smarty_tpl->getValue('b')['abt__ut2_color_scheme'] === "dark") {
$_smarty_tpl->assign('b_color_scheme', "0,0,0", false, NULL);?>--ab-banner-color-schemes: dark;<?php } else {
$_smarty_tpl->assign('b_color_scheme', "255,255,255", false, NULL);?>--ab-banner-color-schemes: light;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_background_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>--ab-banner-background-color: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_background_color'] ?? null)===null||$tmp==='' ? 'white' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_background_image_size']) {?>--ab-banner-background-size: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_background_image_size']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_background_v_position']) {?>--ab-banner-background-vertical-position: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_background_v_position']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_background_h_position']) {?>--ab-banner-background-horizontal-position: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_background_h_position']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg'] === "colored" && $_smarty_tpl->getValue('b')['abt__ut2_content_bg_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>--ab-banner-mask-background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_color']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg'] === "transparent" || $_smarty_tpl->getValue('b')['abt__ut2_content_bg'] === "transparent_blur") {?>--ab-banner-mask-background-color: color-mix(in srgb, <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_content_bg_color'] ?? null)===null||$tmp==='' ? "rgba(".((string)$_smarty_tpl->getValue('b_color_scheme')).")" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_opacity']), ENT_QUOTES, 'UTF-8');?>
%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0));<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg'] === "transparent_gradient") {?>--ab-banner-mask-background-mix-color: color-mix(in srgb, <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_content_bg_color'] ?? null)===null||$tmp==='' ? "rgba(".((string)$_smarty_tpl->getValue('b_color_scheme')).")" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_opacity']), ENT_QUOTES, 'UTF-8');?>
%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0));--ab-banner-mask-background-gradient:<?php if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_align'] === "auto") {
if ($_smarty_tpl->getValue('b')['abt__ut2_content_align'] === "center" && $_smarty_tpl->getValue('b')['abt__ut2_content_valign'] === "center") {?>radial-gradient(ellipse at center center, var(--ab-banner-mask-background-mix-color)20%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)80%);<?php } else {
if ($_smarty_tpl->getValue('b')['abt__ut2_content_full_width'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
if ($_smarty_tpl->getValue('b')['abt__ut2_content_valign'] === "top") {?>linear-gradient(-180deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_valign'] === "center") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_valign'] === "bottom") {?>linear-gradient(0deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
} else {
if ($_smarty_tpl->getValue('b')['abt__ut2_content_align'] === "left") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_align'] === "center") {
if ($_smarty_tpl->getValue('b')['abt__ut2_content_valign'] === "top") {?>linear-gradient(-180deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_valign'] === "center") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_valign'] === "bottom") {?>linear-gradient(0deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
}
if ($_smarty_tpl->getValue('b')['abt__ut2_content_align'] === "right") {?>linear-gradient(-90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
}
}
}
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_align'] === "left_to_right") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_align'] === "right_to_left") {?>linear-gradient(-90deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_align'] === "top_to_bottom") {?>linear-gradient(-180deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)70%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_align'] === "bottom_to_top") {?>linear-gradient(0deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)70%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_align'] === "center") {?>radial-gradient(ellipse at center center, var(--ab-banner-mask-background-mix-color)50%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)70%);<?php }
}
if (strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_title']))) {?>--ab-banner-title-size: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_title_font_size']), ENT_QUOTES, 'UTF-8');?>
;--ab-banner-title-color: <?php if ($_smarty_tpl->getValue('b')["abt__ut2".((string)$_smarty_tpl->getValue('device'))."_title_color_use"] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_title_color'] ?? null)===null||$tmp==='' ? 'black' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->getValue('b')['abt__ut2_color_scheme'] === "dark") {?>white<?php } else { ?>black<?php }?>;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_description_font_size']) {?>--ab-banner-description-size: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_description_font_size']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_description_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>--ab-banner-description-color: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_description_color'] ?? null)===null||$tmp==='' ? 'black' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;<?php } elseif ($_smarty_tpl->getValue('b')['abt__ut2_color_scheme'] === "dark") {?>--ab-banner-description-color: white;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_description_bg_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>--ab-banner-description-bg: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_description_bg_color'] ?? null)===null||$tmp==='' ? 'black' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_text_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>--ab-banner-button-text-color: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_button_text_color'] ?? null)===null||$tmp==='' ? 'white' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>--ab-banner-button-background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_button_color']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_valign']) {?>--ab-banner-v-align: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_content_valign']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_align']) {?>--ab-banner-g-align: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_content_align']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('settings')['ab__device'] !== "desktop" && $_smarty_tpl->getValue('block')['properties']['height_mobile']) {?>--ab-banner-height: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['height_mobile'] ?? null)===null||$tmp==='' ? 'auto' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;<?php } else { ?>--ab-banner-height: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['height'] ?? null)===null||$tmp==='' ? 'auto' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;<?php }
if (!( !true || empty($_smarty_tpl->getValue('b')['abt__ut2_padding']))) {?>--ab-banner-content-padding: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_padding']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('block')['properties']['margin'])) {?>--ab-banner-block-margin: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['properties']['margin']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>">
    <?php if ($_smarty_tpl->getValue('b')['abt__ut2_background_type'] === "image") {?>
                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['lazy_load'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <?php $_smarty_tpl->assign('data_backgroud_url', $_smarty_tpl->getValue('b')['abt__ut2_background_image']['icon']['image_path'], false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('background_url', $_smarty_tpl->getValue('b')['abt__ut2_background_image']['icon']['image_path'], false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('b')['abt__ut2_background_image']['icon']['is_high_res']) {?>
            <?php $_smarty_tpl->assign('original_image_w', $_smarty_tpl->getValue('b')['abt__ut2_background_image']['icon']['image_x'], false, NULL);?>
            <?php $_smarty_tpl->assign('original_image_h', $_smarty_tpl->getValue('b')['abt__ut2_background_image']['icon']['image_y'], false, NULL);?>
            <?php $_smarty_tpl->assign('cropped', $_smarty_tpl->getSmarty()->getModifierCallback('fn_image_to_display')($_smarty_tpl->getValue('b')['abt__ut2_background_image'],$_smarty_tpl->getValue('original_image_w'),$_smarty_tpl->getValue('original_image_h')), false, NULL);?>

            <?php $_smarty_tpl->assign('url_1', "url(".((string)$_smarty_tpl->getValue('cropped')['image_path']).") 1x", false, NULL);?>
            <?php $_smarty_tpl->assign('url_2', "url(".((string)$_smarty_tpl->getValue('b')['abt__ut2_background_image']['icon']['image_path']).") 2x", false, NULL);?>

            <?php $_smarty_tpl->assign('background_url', ((string)$_smarty_tpl->getValue('cropped')['image_path'])."'); background-image: image-set(".((string)$_smarty_tpl->getValue('url_1')).", ".((string)$_smarty_tpl->getValue('url_2')).");", false, NULL);?>
            <?php $_smarty_tpl->assign('data_backgroud_url', '', false, 2);?>
        <?php }?>
    <?php }?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_banner:banner"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_banner:banner"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

    <?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_url']) && $_smarty_tpl->getValue('b')['abt__ut2_object'] !== 'products') {?>
        <a <?php if ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'video' && $_smarty_tpl->getValue('b')['abt__ut2_youtube_id']) {?>data-content="video"<?php }?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('b')['abt__ut2_url'])), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('b')['abt__ut2_how_to_open'] === 'in_new_window') {?> target="_blank"<?php }?> title="">
    <?php }?>

    <div class="ut2-a__bg-banner<?php if ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'products' && $_smarty_tpl->getValue('b')['products']) {?> ut2-a__products-banner<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_background_color'] === '#ffffff' && $_smarty_tpl->getValue('b')['abt__ut2_background_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> white-bg<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_position'] === "full_height") {?> mask-full-height<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_position'] === "whole_banner") {?> mask-whole-banner<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg'] === "transparent_blur") {?> blur<?php }
if ($_smarty_tpl->getValue('data_backgroud_url')) {?> lazyload<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_color_scheme']), ENT_QUOTES, 'UTF-8');?>
"
         data-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['banner_id']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('data_backgroud_url')) {?>data-background-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_backgroud_url')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('background_url')) {?> style="background-image: url('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('background_url')), ENT_QUOTES, 'UTF-8');?>
');"<?php }?>>

        <div class="ut2-a__content valign-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_content_valign']), ENT_QUOTES, 'UTF-8');?>
 align-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_content_align']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('b')['abt__ut2_content_full_width'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> width-full<?php } else { ?> width-half<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'image' && $_smarty_tpl->getValue('b')['abt__ut2_main_image']['icon']['image_path']) {?> internal-image<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'video' && $_smarty_tpl->getValue('b')['abt__ut2_youtube_id']) {?> internal-image internal-video<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'products' && $_smarty_tpl->getValue('b')['products']) {?> internal-products<?php }?>">

            <?php if ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'image' && $_smarty_tpl->getValue('b')['abt__ut2_main_image']['icon']['image_path']) {?>
                <div class="ut2-a__img<?php if ($_smarty_tpl->getValue('b')['abt__ut2_image_v_position']) {?> vp--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_image_v_position']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('b')['abt__ut2_image_h_position']) {?> hp--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_image_h_position']), ENT_QUOTES, 'UTF-8');
}?>">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('b')['abt__ut2_main_image']['icon']), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php } elseif ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'video' && $_smarty_tpl->getValue('b')['abt__ut2_youtube_id']) {?>
                <div class="ut2-a__img ut2-a__video<?php if ($_smarty_tpl->getValue('b')['abt__ut2_image_v_position']) {?> vp--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_image_v_position']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('b')['abt__ut2_image_h_position']) {?> hp--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_image_h_position']), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->getValue('block')['properties']['height'] || $_smarty_tpl->getValue('block')['properties']['height_mobile']) {?>style="height: <?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?>100%<?php } else {
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['height'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
}?>"<?php }?>
                     data-banner-youtube-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_youtube_id']), ENT_QUOTES, 'UTF-8');?>
"
                     data-is-autoplay="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_youtube_autoplay']), ENT_QUOTES, 'UTF-8');?>
"
                     data-banner-youtube-params="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_build_youtube_link')($_smarty_tpl->getValue('b'),true)), ENT_QUOTES, 'UTF-8');?>
">

                    <img data-type="youtube-img"
                         <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['lazy_load'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>src="<?php echo htmlspecialchars((string) ((defined('ABT__UT2_LAZY_IMAGE') ? constant('ABT__UT2_LAZY_IMAGE') : null)), ENT_QUOTES, 'UTF-8');?>
"
                         class="lazyload"
                         data-<?php }?>src="https://img.youtube.com/vi/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_youtube_id']), ENT_QUOTES, 'UTF-8');?>
/hqdefault.jpg"
                         alt="<?php echo htmlspecialchars((string) (preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('b')['abt__ut2_title'])), ENT_QUOTES, 'UTF-8');?>
">

                </div>
            <?php } elseif ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'products' && $_smarty_tpl->getValue('b')['products']) {?>
                <div class="ut2-a__img ut2-a__products<?php if ($_smarty_tpl->getValue('b')['abt__ut2_image_v_position']) {?> vp--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_image_v_position']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('b')['abt__ut2_image_h_position']) {?> hp--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_image_h_position']), ENT_QUOTES, 'UTF-8');
}?>">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner_products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('banner'=>$_smarty_tpl->getValue('b')), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php }?>

            <?php if (strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_title'])) || strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_description'])) || $_smarty_tpl->getValue('b')['abt__ut2_button_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_url'])) {?>
                <div class="ut2-a__description<?php if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg'] !== "none" && $_smarty_tpl->getValue('b')['abt__ut2_content_bg_position'] === "only_under_content") {?> mask-under-content<?php if ($_smarty_tpl->getValue('b')['abt__ut2_color_scheme'] === "dark") {?> dark<?php } else { ?> light<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg'] === "transparent_blur") {?> blur<?php }
}?>">
                    <div class="box">

                        <<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_title_tag'] ?? null)===null||$tmp==='' ? "div" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 class="ut2-a__title<?php if ($_smarty_tpl->getValue('b')['abt__ut2_title_shadow'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> shadow<?php }?> weight-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_title_font_weight']), ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo $_smarty_tpl->getValue('b')['abt__ut2_title'];?>

                        </<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_title_tag'] ?? null)===null||$tmp==='' ? "div" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
>

                        <?php if ($_smarty_tpl->getValue('b')['abt__ut2_description']) {?>
                            <div class="ut2-a__descr <?php if ($_smarty_tpl->getValue('b')['abt__ut2_description_bg_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_description_bg_color']))) {?>marked<?php }?>">
                                <?php echo $_smarty_tpl->getValue('b')['abt__ut2_description'];?>

                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_url']) && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('b')['abt__ut2_class'],"b--button-position-bottom") === false) {?>
                            <div class="ut2-a__button">
                                <a class="ty-btn ty-btn<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_style'] === "normal") {?>__primary<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_text_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->getValue('b')['abt__ut2_button_style'] === "outline") {?>__outline<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_text_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->getValue('b')['abt__ut2_button_style'] === "text") {?>__text<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_text_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --bc<?php }
}?>" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('b')['abt__ut2_url'])), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('b')['abt__ut2_how_to_open'] === 'in_new_window') {?> target="_blank"<?php }?>><?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_button_text'] ?? null)===null||$tmp==='' ? "button" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
</a>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('b')['abt__ut2_class'],"b--button-position-bottom") !== false) {?>
                    <?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_url'])) {?>
                        <div class="ut2-a__button">
                            <a class="ty-btn ty-btn<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_style'] === "normal") {?>__primary<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_text_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->getValue('b')['abt__ut2_button_style'] === "outline") {?>__outline<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_text_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->getValue('b')['abt__ut2_button_style'] === "text") {?>__text<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_text_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --bc<?php }
}?>" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('b')['abt__ut2_url'])), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('b')['abt__ut2_how_to_open'] === 'in_new_window') {?> target="_blank"<?php }?>><?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_button_text'] ?? null)===null||$tmp==='' ? "button" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
</a>
                        </div>
                    <?php }?>
                <?php }?>
            <?php }?>
        </div>
            <?php if ($_smarty_tpl->getValue('b')['abt__ut2_background_type'] === "mp4_video" && $_smarty_tpl->getValue('b')['abt__ut2_background_mp4_video']) {?>
                <video class="ut2-banner__video" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['origin_https_location']), ENT_QUOTES, 'UTF-8');?>
/images/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_background_mp4_video']), ENT_QUOTES, 'UTF-8');?>
" muted loop playsinline></video>
            <?php }?>
    </div>

    <?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_url']) && $_smarty_tpl->getValue('b')['abt__ut2_object'] !== 'products') {?>
        </a>
    <?php }?>
</div>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_banner:banners"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_banner:banners"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

<?php $_smarty_tpl->assign('device', '', false, NULL);
if (!( !true || empty($_smarty_tpl->getValue('settings')['ab__device'])) && $_smarty_tpl->getValue('settings')['ab__device'] != "desktop") {?>
    <?php $_smarty_tpl->assign('device', "_".((string)$_smarty_tpl->getValue('settings')['ab__device']), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('b')['abt__ut2_device_settings']) {?>
<div class="ut2-banner ut2-banner-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_device_settings']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('block')['properties']['navigation'] == "L") {?> ut2-scroll-item <?php }
echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_class']), ENT_QUOTES, 'UTF-8');?>
" style="<?php if ($_smarty_tpl->getValue('b')['abt__ut2_color_scheme'] === "dark") {
$_smarty_tpl->assign('b_color_scheme', "0,0,0", false, NULL);?>--ab-banner-color-schemes: dark;<?php } else {
$_smarty_tpl->assign('b_color_scheme', "255,255,255", false, NULL);?>--ab-banner-color-schemes: light;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_background_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>--ab-banner-background-color: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_background_color'] ?? null)===null||$tmp==='' ? 'white' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_background_image_size']) {?>--ab-banner-background-size: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_background_image_size']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_background_v_position']) {?>--ab-banner-background-vertical-position: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_background_v_position']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_background_h_position']) {?>--ab-banner-background-horizontal-position: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_background_h_position']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg'] === "colored" && $_smarty_tpl->getValue('b')['abt__ut2_content_bg_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>--ab-banner-mask-background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_color']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg'] === "transparent" || $_smarty_tpl->getValue('b')['abt__ut2_content_bg'] === "transparent_blur") {?>--ab-banner-mask-background-color: color-mix(in srgb, <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_content_bg_color'] ?? null)===null||$tmp==='' ? "rgba(".((string)$_smarty_tpl->getValue('b_color_scheme')).")" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_opacity']), ENT_QUOTES, 'UTF-8');?>
%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0));<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg'] === "transparent_gradient") {?>--ab-banner-mask-background-mix-color: color-mix(in srgb, <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_content_bg_color'] ?? null)===null||$tmp==='' ? "rgba(".((string)$_smarty_tpl->getValue('b_color_scheme')).")" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_opacity']), ENT_QUOTES, 'UTF-8');?>
%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0));--ab-banner-mask-background-gradient:<?php if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_align'] === "auto") {
if ($_smarty_tpl->getValue('b')['abt__ut2_content_align'] === "center" && $_smarty_tpl->getValue('b')['abt__ut2_content_valign'] === "center") {?>radial-gradient(ellipse at center center, var(--ab-banner-mask-background-mix-color)20%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)80%);<?php } else {
if ($_smarty_tpl->getValue('b')['abt__ut2_content_full_width'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
if ($_smarty_tpl->getValue('b')['abt__ut2_content_valign'] === "top") {?>linear-gradient(-180deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_valign'] === "center") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_valign'] === "bottom") {?>linear-gradient(0deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
} else {
if ($_smarty_tpl->getValue('b')['abt__ut2_content_align'] === "left") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_align'] === "center") {
if ($_smarty_tpl->getValue('b')['abt__ut2_content_valign'] === "top") {?>linear-gradient(-180deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_valign'] === "center") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_valign'] === "bottom") {?>linear-gradient(0deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
}
if ($_smarty_tpl->getValue('b')['abt__ut2_content_align'] === "right") {?>linear-gradient(-90deg, var(--ab-banner-mask-background-mix-color)0%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
}
}
}
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_align'] === "left_to_right") {?>linear-gradient(90deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_align'] === "right_to_left") {?>linear-gradient(-90deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)100%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_align'] === "top_to_bottom") {?>linear-gradient(-180deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)70%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_align'] === "bottom_to_top") {?>linear-gradient(0deg, var(--ab-banner-mask-background-mix-color)30%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)70%);<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_align'] === "center") {?>radial-gradient(ellipse at center center, var(--ab-banner-mask-background-mix-color)50%, rgba(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b_color_scheme')), ENT_QUOTES, 'UTF-8');?>
,0)70%);<?php }
}
if (strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_title']))) {?>--ab-banner-title-size: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_title_font_size']), ENT_QUOTES, 'UTF-8');?>
;--ab-banner-title-color: <?php if ($_smarty_tpl->getValue('b')["abt__ut2".((string)$_smarty_tpl->getValue('device'))."_title_color_use"] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_title_color'] ?? null)===null||$tmp==='' ? 'black' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->getValue('b')['abt__ut2_color_scheme'] === "dark") {?>white<?php } else { ?>black<?php }?>;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_description_font_size']) {?>--ab-banner-description-size: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_description_font_size']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_description_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>--ab-banner-description-color: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_description_color'] ?? null)===null||$tmp==='' ? 'black' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;<?php } elseif ($_smarty_tpl->getValue('b')['abt__ut2_color_scheme'] === "dark") {?>--ab-banner-description-color: white;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_description_bg_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>--ab-banner-description-bg: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_description_bg_color'] ?? null)===null||$tmp==='' ? 'black' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_text_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>--ab-banner-button-text-color: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_button_text_color'] ?? null)===null||$tmp==='' ? 'white' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>--ab-banner-button-background-color: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_button_color']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_valign']) {?>--ab-banner-v-align: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_content_valign']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_align']) {?>--ab-banner-g-align: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_content_align']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getValue('settings')['ab__device'] !== "desktop" && $_smarty_tpl->getValue('block')['properties']['height_mobile']) {?>--ab-banner-height: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['height_mobile'] ?? null)===null||$tmp==='' ? 'auto' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;<?php } else { ?>--ab-banner-height: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['height'] ?? null)===null||$tmp==='' ? 'auto' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;<?php }
if (!( !true || empty($_smarty_tpl->getValue('b')['abt__ut2_padding']))) {?>--ab-banner-content-padding: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_padding']), ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('block')['properties']['margin'])) {?>--ab-banner-block-margin: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['properties']['margin']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>">
    <?php if ($_smarty_tpl->getValue('b')['abt__ut2_background_type'] === "image") {?>
                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['lazy_load'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <?php $_smarty_tpl->assign('data_backgroud_url', $_smarty_tpl->getValue('b')['abt__ut2_background_image']['icon']['image_path'], false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('background_url', $_smarty_tpl->getValue('b')['abt__ut2_background_image']['icon']['image_path'], false, NULL);?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('b')['abt__ut2_background_image']['icon']['is_high_res']) {?>
            <?php $_smarty_tpl->assign('original_image_w', $_smarty_tpl->getValue('b')['abt__ut2_background_image']['icon']['image_x'], false, NULL);?>
            <?php $_smarty_tpl->assign('original_image_h', $_smarty_tpl->getValue('b')['abt__ut2_background_image']['icon']['image_y'], false, NULL);?>
            <?php $_smarty_tpl->assign('cropped', $_smarty_tpl->getSmarty()->getModifierCallback('fn_image_to_display')($_smarty_tpl->getValue('b')['abt__ut2_background_image'],$_smarty_tpl->getValue('original_image_w'),$_smarty_tpl->getValue('original_image_h')), false, NULL);?>

            <?php $_smarty_tpl->assign('url_1', "url(".((string)$_smarty_tpl->getValue('cropped')['image_path']).") 1x", false, NULL);?>
            <?php $_smarty_tpl->assign('url_2', "url(".((string)$_smarty_tpl->getValue('b')['abt__ut2_background_image']['icon']['image_path']).") 2x", false, NULL);?>

            <?php $_smarty_tpl->assign('background_url', ((string)$_smarty_tpl->getValue('cropped')['image_path'])."'); background-image: image-set(".((string)$_smarty_tpl->getValue('url_1')).", ".((string)$_smarty_tpl->getValue('url_2')).");", false, NULL);?>
            <?php $_smarty_tpl->assign('data_backgroud_url', '', false, 2);?>
        <?php }?>
    <?php }?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_banner:banner"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_banner:banner"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

    <?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_url']) && $_smarty_tpl->getValue('b')['abt__ut2_object'] !== 'products') {?>
        <a <?php if ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'video' && $_smarty_tpl->getValue('b')['abt__ut2_youtube_id']) {?>data-content="video"<?php }?> href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('b')['abt__ut2_url'])), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('b')['abt__ut2_how_to_open'] === 'in_new_window') {?> target="_blank"<?php }?> title="">
    <?php }?>

    <div class="ut2-a__bg-banner<?php if ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'products' && $_smarty_tpl->getValue('b')['products']) {?> ut2-a__products-banner<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_background_color'] === '#ffffff' && $_smarty_tpl->getValue('b')['abt__ut2_background_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> white-bg<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_position'] === "full_height") {?> mask-full-height<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg_position'] === "whole_banner") {?> mask-whole-banner<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg'] === "transparent_blur") {?> blur<?php }
if ($_smarty_tpl->getValue('data_backgroud_url')) {?> lazyload<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_color_scheme']), ENT_QUOTES, 'UTF-8');?>
"
         data-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['banner_id']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->getValue('data_backgroud_url')) {?>data-background-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_backgroud_url')), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->getValue('background_url')) {?> style="background-image: url('<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('background_url')), ENT_QUOTES, 'UTF-8');?>
');"<?php }?>>

        <div class="ut2-a__content valign-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_content_valign']), ENT_QUOTES, 'UTF-8');?>
 align-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_content_align']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('b')['abt__ut2_content_full_width'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> width-full<?php } else { ?> width-half<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'image' && $_smarty_tpl->getValue('b')['abt__ut2_main_image']['icon']['image_path']) {?> internal-image<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'video' && $_smarty_tpl->getValue('b')['abt__ut2_youtube_id']) {?> internal-image internal-video<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'products' && $_smarty_tpl->getValue('b')['products']) {?> internal-products<?php }?>">

            <?php if ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'image' && $_smarty_tpl->getValue('b')['abt__ut2_main_image']['icon']['image_path']) {?>
                <div class="ut2-a__img<?php if ($_smarty_tpl->getValue('b')['abt__ut2_image_v_position']) {?> vp--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_image_v_position']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('b')['abt__ut2_image_h_position']) {?> hp--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_image_h_position']), ENT_QUOTES, 'UTF-8');
}?>">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('b')['abt__ut2_main_image']['icon']), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php } elseif ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'video' && $_smarty_tpl->getValue('b')['abt__ut2_youtube_id']) {?>
                <div class="ut2-a__img ut2-a__video<?php if ($_smarty_tpl->getValue('b')['abt__ut2_image_v_position']) {?> vp--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_image_v_position']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('b')['abt__ut2_image_h_position']) {?> hp--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_image_h_position']), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->getValue('block')['properties']['height'] || $_smarty_tpl->getValue('block')['properties']['height_mobile']) {?>style="height: <?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?>100%<?php } else {
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('block')['properties']['height'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
}?>"<?php }?>
                     data-banner-youtube-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_youtube_id']), ENT_QUOTES, 'UTF-8');?>
"
                     data-is-autoplay="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_youtube_autoplay']), ENT_QUOTES, 'UTF-8');?>
"
                     data-banner-youtube-params="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_build_youtube_link')($_smarty_tpl->getValue('b'),true)), ENT_QUOTES, 'UTF-8');?>
">

                    <img data-type="youtube-img"
                         <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['lazy_load'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>src="<?php echo htmlspecialchars((string) ((defined('ABT__UT2_LAZY_IMAGE') ? constant('ABT__UT2_LAZY_IMAGE') : null)), ENT_QUOTES, 'UTF-8');?>
"
                         class="lazyload"
                         data-<?php }?>src="https://img.youtube.com/vi/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_youtube_id']), ENT_QUOTES, 'UTF-8');?>
/hqdefault.jpg"
                         alt="<?php echo htmlspecialchars((string) (preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->getValue('b')['abt__ut2_title'])), ENT_QUOTES, 'UTF-8');?>
">

                </div>
            <?php } elseif ($_smarty_tpl->getValue('b')['abt__ut2_object'] === 'products' && $_smarty_tpl->getValue('b')['products']) {?>
                <div class="ut2-a__img ut2-a__products<?php if ($_smarty_tpl->getValue('b')['abt__ut2_image_v_position']) {?> vp--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_image_v_position']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('b')['abt__ut2_image_h_position']) {?> hp--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_image_h_position']), ENT_QUOTES, 'UTF-8');
}?>">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/abt__unitheme2/blocks/components/abt__ut2_banner_products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('banner'=>$_smarty_tpl->getValue('b')), (int) 0, $_smarty_current_dir);
?>
                </div>
            <?php }?>

            <?php if (strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_title'])) || strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_description'])) || $_smarty_tpl->getValue('b')['abt__ut2_button_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_url'])) {?>
                <div class="ut2-a__description<?php if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg'] !== "none" && $_smarty_tpl->getValue('b')['abt__ut2_content_bg_position'] === "only_under_content") {?> mask-under-content<?php if ($_smarty_tpl->getValue('b')['abt__ut2_color_scheme'] === "dark") {?> dark<?php } else { ?> light<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_content_bg'] === "transparent_blur") {?> blur<?php }
}?>">
                    <div class="box">

                        <<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_title_tag'] ?? null)===null||$tmp==='' ? "div" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
 class="ut2-a__title<?php if ($_smarty_tpl->getValue('b')['abt__ut2_title_shadow'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> shadow<?php }?> weight-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_title_font_weight']), ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo $_smarty_tpl->getValue('b')['abt__ut2_title'];?>

                        </<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_title_tag'] ?? null)===null||$tmp==='' ? "div" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
>

                        <?php if ($_smarty_tpl->getValue('b')['abt__ut2_description']) {?>
                            <div class="ut2-a__descr <?php if ($_smarty_tpl->getValue('b')['abt__ut2_description_bg_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_description_bg_color']))) {?>marked<?php }?>">
                                <?php echo $_smarty_tpl->getValue('b')['abt__ut2_description'];?>

                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_url']) && $_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('b')['abt__ut2_class'],"b--button-position-bottom") === false) {?>
                            <div class="ut2-a__button">
                                <a class="ty-btn ty-btn<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_style'] === "normal") {?>__primary<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_text_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->getValue('b')['abt__ut2_button_style'] === "outline") {?>__outline<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_text_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->getValue('b')['abt__ut2_button_style'] === "text") {?>__text<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_text_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --bc<?php }
}?>" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('b')['abt__ut2_url'])), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('b')['abt__ut2_how_to_open'] === 'in_new_window') {?> target="_blank"<?php }?>><?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_button_text'] ?? null)===null||$tmp==='' ? "button" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
</a>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strpos')($_smarty_tpl->getValue('b')['abt__ut2_class'],"b--button-position-bottom") !== false) {?>
                    <?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_url'])) {?>
                        <div class="ut2-a__button">
                            <a class="ty-btn ty-btn<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_style'] === "normal") {?>__primary<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_text_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->getValue('b')['abt__ut2_button_style'] === "outline") {?>__outline<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_text_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --bc<?php }
}
if ($_smarty_tpl->getValue('b')['abt__ut2_button_style'] === "text") {?>__text<?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_text_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --tc<?php }
if ($_smarty_tpl->getValue('b')['abt__ut2_button_color_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> --bc<?php }
}?>" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('b')['abt__ut2_url'])), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('b')['abt__ut2_how_to_open'] === 'in_new_window') {?> target="_blank"<?php }?>><?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('b')['abt__ut2_button_text'] ?? null)===null||$tmp==='' ? "button" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
</a>
                        </div>
                    <?php }?>
                <?php }?>
            <?php }?>
        </div>
            <?php if ($_smarty_tpl->getValue('b')['abt__ut2_background_type'] === "mp4_video" && $_smarty_tpl->getValue('b')['abt__ut2_background_mp4_video']) {?>
                <video class="ut2-banner__video" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['origin_https_location']), ENT_QUOTES, 'UTF-8');?>
/images/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('b')['abt__ut2_background_mp4_video']), ENT_QUOTES, 'UTF-8');?>
" muted loop playsinline></video>
            <?php }?>
    </div>

    <?php if ($_smarty_tpl->getValue('b')['abt__ut2_button_use'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('b')['abt__ut2_url']) && $_smarty_tpl->getValue('b')['abt__ut2_object'] !== 'products') {?>
        </a>
    <?php }?>
</div>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"abt__ut2_banner:banners"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
