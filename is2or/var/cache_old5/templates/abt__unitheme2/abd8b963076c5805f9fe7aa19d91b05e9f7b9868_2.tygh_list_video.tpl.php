<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:18:16
  from 'tygh:addons/ab__video_gallery/components/list_video.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a1340e812fcd7_56921787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abd8b963076c5805f9fe7aa19d91b05e9f7b9868' => 
    array (
      0 => 'addons/ab__video_gallery/components/list_video.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__video_gallery/components/helpers.tpl' => 2,
    'tygh:addons/ab__video_gallery/components/video.tpl' => 2,
  ),
))) {
function content_6a1340e812fcd7_56921787 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('video')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/helpers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php ob_start();
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_video_icon', array('video'=>$_smarty_tpl->getValue('video')), true);
$_smarty_tpl->assign('icon_type', ob_get_clean());?>


    <?php $_smarty_tpl->assign('has_image_hover', $_smarty_tpl->getValue('icon_type') === 'snapshot' || ($_smarty_tpl->getValue('icon_type') === 'icon' && $_smarty_tpl->getValue('video')['icon']), false, NULL);?>

    <?php $_smarty_tpl->assign('image_width', $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_width'], false, NULL);?>
    <?php $_smarty_tpl->assign('image_height', $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_height'], false, NULL);?>

    <div class="ab__vg-product_list-video<?php if ($_smarty_tpl->getValue('has_image_hover')) {?> hover_image<?php } else { ?> ab__vg_loading<?php }?>"
         style="--ab-vg-list-video-max-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_width')), ENT_QUOTES, 'UTF-8');?>
px; --ab-vg-list-video-max-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_height')), ENT_QUOTES, 'UTF-8');?>
px;"
    >
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video_hover_image'=>true), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/components/list_video.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__video_gallery/components/list_video.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('video')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/helpers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php ob_start();
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'fn_ab__vg_get_video_icon', array('video'=>$_smarty_tpl->getValue('video')), true);
$_smarty_tpl->assign('icon_type', ob_get_clean());?>


    <?php $_smarty_tpl->assign('has_image_hover', $_smarty_tpl->getValue('icon_type') === 'snapshot' || ($_smarty_tpl->getValue('icon_type') === 'icon' && $_smarty_tpl->getValue('video')['icon']), false, NULL);?>

    <?php $_smarty_tpl->assign('image_width', $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_width'], false, NULL);?>
    <?php $_smarty_tpl->assign('image_height', $_smarty_tpl->getValue('settings')['Thumbnails']['product_lists_thumbnail_height'], false, NULL);?>

    <div class="ab__vg-product_list-video<?php if ($_smarty_tpl->getValue('has_image_hover')) {?> hover_image<?php } else { ?> ab__vg_loading<?php }?>"
         style="--ab-vg-list-video-max-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_width')), ENT_QUOTES, 'UTF-8');?>
px; --ab-vg-list-video-max-height: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image_height')), ENT_QUOTES, 'UTF-8');?>
px;"
    >
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video_hover_image'=>true), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php }
}
}
}
