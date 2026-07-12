<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:18:16
  from 'tygh:addons/ab__video_gallery/components/video.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a1340e81d1323_57785159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '002d1a17b3e34974130c0ece41cd70334022f684' => 
    array (
      0 => 'addons/ab__video_gallery/components/video.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__video_gallery/components/helpers.tpl' => 2,
    'tygh:addons/ab__video_gallery/components/thumbnail.tpl' => 6,
  ),
))) {
function content_6a1340e81d1323_57785159 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/helpers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
ob_start();
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_video_icon', array('video'=>$_smarty_tpl->getValue('video')), true);
$_smarty_tpl->assign('icon_type', ob_get_clean());?>


<?php $_smarty_tpl->assign('video', (($tmp = $_smarty_tpl->getValue('video') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('autoplay', $_smarty_tpl->getValue('video')['autoplay'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES'), false, NULL);
$_smarty_tpl->assign('video_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_video_embed_url')($_smarty_tpl->getValue('video')), false, NULL);
$_smarty_tpl->assign('video_hover_image', (($tmp = $_smarty_tpl->getValue('video_hover_image') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('video_object_id', "det_img_link_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('video')['video_id'])."_".((string)$_smarty_tpl->getValue('video')['unique_id']), false, NULL);?>

<?php if ($_smarty_tpl->getValue('video')) {?>
    <?php $_tmp_array = $_smarty_tpl->getValue('video') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['icon_type'] = $_smarty_tpl->getValue('icon_type');
$_smarty_tpl->assign('video', $_tmp_array, false, NULL);
}?>

<?php if ($_REQUEST['dispatch'] === 'products.quick_view' || ($_REQUEST['dispatch'] === 'products.view' && ($_smarty_tpl->getValue('block')['type'] === 'main' || (( !$_smarty_tpl->hasVariable('block') || empty($_smarty_tpl->getValue('block'))) && !$_REQUEST['full_render'])))) {?>
    <?php $_smarty_tpl->assign('is_detailed', true, false, NULL);?>
    <?php $_smarty_tpl->assign('image_iterator', (($tmp = $_smarty_tpl->getValue('image_iterator') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_iterator')('image_iterator') ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('video_iterator', (($tmp = $_smarty_tpl->getValue('video_iterator') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_iterator')('video_iterator') ?? null : $tmp), false, NULL);?>

    <?php $_smarty_tpl->assign('width', $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_width'], false, NULL);?>
    <?php $_smarty_tpl->assign('height', $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_height'], false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('width', (($tmp = $_smarty_tpl->getValue('image_width') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_width'] ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('height', (($tmp = $_smarty_tpl->getValue('image_height') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_height'] ?? null : $tmp), false, NULL);
}?>

<?php $_smarty_tpl->assign('video_params', json_encode(array('url'=>$_smarty_tpl->getValue('video_url'),'type'=>$_smarty_tpl->getValue('video')['type'],'path'=>$_smarty_tpl->getValue('video')['video_path'],'autoplay'=>$_smarty_tpl->getValue('autoplay'),'width'=>$_smarty_tpl->getValue('width'),'height'=>$_smarty_tpl->getValue('height'))), false, NULL);?>

<div class="ab__vg-image_gallery_video-wrapper" style="--vaspect:<?php if (!$_smarty_tpl->getValue('width') || !$_smarty_tpl->getValue('height')) {?>auto<?php } else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('width')/$_smarty_tpl->getValue('height')), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->getValue('autoplay')) {?>inert<?php }?>>
    <?php if ($_smarty_tpl->getValue('video_hover_image')) {?>
        <?php $_smarty_tpl->assign('has_image_hover', $_smarty_tpl->getValue('video')['icon_type'] === 'snapshot' || ($_smarty_tpl->getValue('video')['icon_type'] === 'icon' && $_smarty_tpl->getValue('video')['icon']), false, NULL);?>

        <?php if ($_smarty_tpl->getValue('has_image_hover')) {?>
            <div class="ab__vg-image_gallery_image">
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video'),'width'=>(($tmp = $_smarty_tpl->getValue('image_width') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('width') ?? null : $tmp),'height'=>(($tmp = $_smarty_tpl->getValue('image_height') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('height') ?? null : $tmp)), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->assign('video_class', "ab__vg-image_gallery_video", false, NULL);?>

    <?php if ($_smarty_tpl->getValue('is_detailed') && (($_smarty_tpl->getValue('replace_image') && $_smarty_tpl->getValue('video_iterator') !== 1) || (!$_smarty_tpl->getValue('replace_image') && $_smarty_tpl->getValue('image_iterator')))) {?>
        <?php $_smarty_tpl->assign('video_class', ((string)$_smarty_tpl->getValue('video_class'))." hidden", false, NULL);?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('addons')['ab__video_gallery']['on_thumbnail_click'] === 'image_replace' || $_smarty_tpl->getValue('quick_view') || $_smarty_tpl->getValue('autoplay')) {?>
        <?php if ($_smarty_tpl->getValue('autoplay') && $_smarty_tpl->getValue('video')['type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\Ab_videoGallery\VideoTypes::RESOURCE")) {?>
            <?php $_smarty_tpl->assign('video_class', ((string)$_smarty_tpl->getValue('video_class'))." ab__vg-image_gallery_video-autoplay", false, NULL);?>

            <video class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_class')), ENT_QUOTES, 'UTF-8');?>
"
                   src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_url')), ENT_QUOTES, 'UTF-8');?>
"
                   autoplay="autoplay"
                   loop="loop"
                   muted="muted"
                   playsinline="playsinline"
                   width="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('width')), ENT_QUOTES, 'UTF-8');?>
"
                   height="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('height')), ENT_QUOTES, 'UTF-8');?>
"
                   data-ab-vg-video-params="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_params')), ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->getValue('video')['settings']['iframe_attributes']) {?> <?php echo $_smarty_tpl->getValue('video')['settings']['iframe_attributes'];?>
 <?php }?>
                   id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_object_id')), ENT_QUOTES, 'UTF-8');?>
"
            ></video>
        <?php } else { ?>
            <?php if ($_smarty_tpl->getValue('is_detailed') && !$_smarty_tpl->getValue('autoplay')) {?>
                <?php $_smarty_tpl->assign('video_class', ((string)$_smarty_tpl->getValue('video_class'))." ab__vg_loading", false, NULL);?>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('autoplay')) {?>
                <?php $_smarty_tpl->assign('video_class', ((string)$_smarty_tpl->getValue('video_class'))." ab__vg-image_gallery_video-autoplay", false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('video_class', ((string)$_smarty_tpl->getValue('video_class'))." ab-".((string)$_smarty_tpl->getValue('addons')['ab__video_gallery']['video_icon'])."-icon", false, NULL);?>
            <?php }?>

            <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_class')), ENT_QUOTES, 'UTF-8');?>
"
                 data-src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_url')), ENT_QUOTES, 'UTF-8');?>
"
                 data-frameborder="0"
                 data-ab-vg-video-params="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_params')), ENT_QUOTES, 'UTF-8');?>
"
                 <?php if ($_smarty_tpl->getValue('video')['settings']['controls'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {?> data-allowfullscreen="1" <?php }?>
                 <?php if ($_smarty_tpl->getValue('video')['settings']['iframe_attributes']) {?> <?php echo $_smarty_tpl->getValue('video')['settings']['iframe_attributes'];?>
 <?php }?>
                 id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_object_id')), ENT_QUOTES, 'UTF-8');?>
"
            >
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video'),'width'=>$_smarty_tpl->getValue('image_width'),'height'=>$_smarty_tpl->getValue('image_height')), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('video_class', ((string)$_smarty_tpl->getValue('video_class'))." ty-previewer cm-dialog-opener ab-".((string)$_smarty_tpl->getValue('addons')['ab__video_gallery']['video_icon'])."-icon", false, NULL);?>

        <a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_class')), ENT_QUOTES, 'UTF-8');?>
"
           data-ca-target-id="ab__vg_video_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['video_id']), ENT_QUOTES, 'UTF-8');?>
"
           data-ca-dialog-title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['title']), ENT_QUOTES, 'UTF-8');?>
"
           title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['title']), ENT_QUOTES, 'UTF-8');?>
"
           rel="nofollow"
           id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_object_id')), ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video'),'width'=>$_smarty_tpl->getValue('image_width'),'height'=>$_smarty_tpl->getValue('image_height')), (int) 0, $_smarty_current_dir);
?>
        </a>
    <?php }?>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/components/video.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__video_gallery/components/video.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/helpers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
ob_start();
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_video_icon', array('video'=>$_smarty_tpl->getValue('video')), true);
$_smarty_tpl->assign('icon_type', ob_get_clean());?>


<?php $_smarty_tpl->assign('video', (($tmp = $_smarty_tpl->getValue('video') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('autoplay', $_smarty_tpl->getValue('video')['autoplay'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES'), false, NULL);
$_smarty_tpl->assign('video_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_video_embed_url')($_smarty_tpl->getValue('video')), false, NULL);
$_smarty_tpl->assign('video_hover_image', (($tmp = $_smarty_tpl->getValue('video_hover_image') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('video_object_id', "det_img_link_".((string)$_smarty_tpl->getValue('obj_prefix')).((string)$_smarty_tpl->getValue('preview_id'))."_".((string)$_smarty_tpl->getValue('video')['video_id'])."_".((string)$_smarty_tpl->getValue('video')['unique_id']), false, NULL);?>

<?php if ($_smarty_tpl->getValue('video')) {?>
    <?php $_tmp_array = $_smarty_tpl->getValue('video') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['icon_type'] = $_smarty_tpl->getValue('icon_type');
$_smarty_tpl->assign('video', $_tmp_array, false, NULL);
}?>

<?php if ($_REQUEST['dispatch'] === 'products.quick_view' || ($_REQUEST['dispatch'] === 'products.view' && ($_smarty_tpl->getValue('block')['type'] === 'main' || (( !$_smarty_tpl->hasVariable('block') || empty($_smarty_tpl->getValue('block'))) && !$_REQUEST['full_render'])))) {?>
    <?php $_smarty_tpl->assign('is_detailed', true, false, NULL);?>
    <?php $_smarty_tpl->assign('image_iterator', (($tmp = $_smarty_tpl->getValue('image_iterator') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_iterator')('image_iterator') ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('video_iterator', (($tmp = $_smarty_tpl->getValue('video_iterator') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_template_iterator')('video_iterator') ?? null : $tmp), false, NULL);?>

    <?php $_smarty_tpl->assign('width', $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_width'], false, NULL);?>
    <?php $_smarty_tpl->assign('height', $_smarty_tpl->getValue('settings')['Thumbnails']['product_details_thumbnail_height'], false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('width', (($tmp = $_smarty_tpl->getValue('image_width') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_width'] ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('height', (($tmp = $_smarty_tpl->getValue('image_height') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_height'] ?? null : $tmp), false, NULL);
}?>

<?php $_smarty_tpl->assign('video_params', json_encode(array('url'=>$_smarty_tpl->getValue('video_url'),'type'=>$_smarty_tpl->getValue('video')['type'],'path'=>$_smarty_tpl->getValue('video')['video_path'],'autoplay'=>$_smarty_tpl->getValue('autoplay'),'width'=>$_smarty_tpl->getValue('width'),'height'=>$_smarty_tpl->getValue('height'))), false, NULL);?>

<div class="ab__vg-image_gallery_video-wrapper" style="--vaspect:<?php if (!$_smarty_tpl->getValue('width') || !$_smarty_tpl->getValue('height')) {?>auto<?php } else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('width')/$_smarty_tpl->getValue('height')), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->getValue('autoplay')) {?>inert<?php }?>>
    <?php if ($_smarty_tpl->getValue('video_hover_image')) {?>
        <?php $_smarty_tpl->assign('has_image_hover', $_smarty_tpl->getValue('video')['icon_type'] === 'snapshot' || ($_smarty_tpl->getValue('video')['icon_type'] === 'icon' && $_smarty_tpl->getValue('video')['icon']), false, NULL);?>

        <?php if ($_smarty_tpl->getValue('has_image_hover')) {?>
            <div class="ab__vg-image_gallery_image">
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video'),'width'=>(($tmp = $_smarty_tpl->getValue('image_width') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('width') ?? null : $tmp),'height'=>(($tmp = $_smarty_tpl->getValue('image_height') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('height') ?? null : $tmp)), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->assign('video_class', "ab__vg-image_gallery_video", false, NULL);?>

    <?php if ($_smarty_tpl->getValue('is_detailed') && (($_smarty_tpl->getValue('replace_image') && $_smarty_tpl->getValue('video_iterator') !== 1) || (!$_smarty_tpl->getValue('replace_image') && $_smarty_tpl->getValue('image_iterator')))) {?>
        <?php $_smarty_tpl->assign('video_class', ((string)$_smarty_tpl->getValue('video_class'))." hidden", false, NULL);?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('addons')['ab__video_gallery']['on_thumbnail_click'] === 'image_replace' || $_smarty_tpl->getValue('quick_view') || $_smarty_tpl->getValue('autoplay')) {?>
        <?php if ($_smarty_tpl->getValue('autoplay') && $_smarty_tpl->getValue('video')['type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\Ab_videoGallery\VideoTypes::RESOURCE")) {?>
            <?php $_smarty_tpl->assign('video_class', ((string)$_smarty_tpl->getValue('video_class'))." ab__vg-image_gallery_video-autoplay", false, NULL);?>

            <video class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_class')), ENT_QUOTES, 'UTF-8');?>
"
                   src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_url')), ENT_QUOTES, 'UTF-8');?>
"
                   autoplay="autoplay"
                   loop="loop"
                   muted="muted"
                   playsinline="playsinline"
                   width="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('width')), ENT_QUOTES, 'UTF-8');?>
"
                   height="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('height')), ENT_QUOTES, 'UTF-8');?>
"
                   data-ab-vg-video-params="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_params')), ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->getValue('video')['settings']['iframe_attributes']) {?> <?php echo $_smarty_tpl->getValue('video')['settings']['iframe_attributes'];?>
 <?php }?>
                   id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_object_id')), ENT_QUOTES, 'UTF-8');?>
"
            ></video>
        <?php } else { ?>
            <?php if ($_smarty_tpl->getValue('is_detailed') && !$_smarty_tpl->getValue('autoplay')) {?>
                <?php $_smarty_tpl->assign('video_class', ((string)$_smarty_tpl->getValue('video_class'))." ab__vg_loading", false, NULL);?>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('autoplay')) {?>
                <?php $_smarty_tpl->assign('video_class', ((string)$_smarty_tpl->getValue('video_class'))." ab__vg-image_gallery_video-autoplay", false, NULL);?>
            <?php } else { ?>
                <?php $_smarty_tpl->assign('video_class', ((string)$_smarty_tpl->getValue('video_class'))." ab-".((string)$_smarty_tpl->getValue('addons')['ab__video_gallery']['video_icon'])."-icon", false, NULL);?>
            <?php }?>

            <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_class')), ENT_QUOTES, 'UTF-8');?>
"
                 data-src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_url')), ENT_QUOTES, 'UTF-8');?>
"
                 data-frameborder="0"
                 data-ab-vg-video-params="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_params')), ENT_QUOTES, 'UTF-8');?>
"
                 <?php if ($_smarty_tpl->getValue('video')['settings']['controls'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {?> data-allowfullscreen="1" <?php }?>
                 <?php if ($_smarty_tpl->getValue('video')['settings']['iframe_attributes']) {?> <?php echo $_smarty_tpl->getValue('video')['settings']['iframe_attributes'];?>
 <?php }?>
                 id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_object_id')), ENT_QUOTES, 'UTF-8');?>
"
            >
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video'),'width'=>$_smarty_tpl->getValue('image_width'),'height'=>$_smarty_tpl->getValue('image_height')), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('video_class', ((string)$_smarty_tpl->getValue('video_class'))." ty-previewer cm-dialog-opener ab-".((string)$_smarty_tpl->getValue('addons')['ab__video_gallery']['video_icon'])."-icon", false, NULL);?>

        <a class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_class')), ENT_QUOTES, 'UTF-8');?>
"
           data-ca-target-id="ab__vg_video_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['video_id']), ENT_QUOTES, 'UTF-8');?>
"
           data-ca-dialog-title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['title']), ENT_QUOTES, 'UTF-8');?>
"
           title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['title']), ENT_QUOTES, 'UTF-8');?>
"
           rel="nofollow"
           id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_object_id')), ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video'),'width'=>$_smarty_tpl->getValue('image_width'),'height'=>$_smarty_tpl->getValue('image_height')), (int) 0, $_smarty_current_dir);
?>
        </a>
    <?php }?>
</div>
<?php }
}
}
