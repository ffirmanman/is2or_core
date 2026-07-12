<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:addons/ab__video_gallery/components/video_popups.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a0036f8d7_96728608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '952d89bb9e9cc986152525093f81cbc2b935770b' => 
    array (
      0 => 'addons/ab__video_gallery/components/video_popups.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__video_gallery/components/thumbnail.tpl' => 2,
  ),
))) {
function content_69fb4a0036f8d7_96728608 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ab__vg_videos'), 'video');
$foreach110DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach110DoElse = false;
?>
    <?php $_smarty_tpl->assign('autoplay', $_smarty_tpl->getValue('video')['autoplay'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?>
    <?php $_smarty_tpl->assign('video_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_video_embed_url')($_smarty_tpl->getValue('video')), false, NULL);?>
    <?php $_smarty_tpl->assign('video_params', json_encode(array('url'=>$_smarty_tpl->getValue('video_url'),'type'=>$_smarty_tpl->getValue('video')['type'],'path'=>$_smarty_tpl->getValue('video')['video_path'],'autoplay'=>$_smarty_tpl->getValue('autoplay'))), false, NULL);?>

    <div id="ab__vg_video_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['video_id']), ENT_QUOTES, 'UTF-8');?>
" class="ab__vg_video_popup cm-popup-box hidden" data-ca-keep-in-place="true" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['title']), ENT_QUOTES, 'UTF-8');?>
">
        <div id="ab__vg_iframe_video_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['video_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['unique_id']), ENT_QUOTES, 'UTF-8');?>
" class="ab__vg_loading ab__vg_video_player"<?php if ($_smarty_tpl->getValue('video')['settings']['iframe_attributes']) {?> <?php echo $_smarty_tpl->getValue('video')['settings']['iframe_attributes'];
} else { ?> data-frameborder="0"<?php if ($_smarty_tpl->getValue('video')['settings']['controls'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> data-allowfullscreen="1"<?php }
}?> data-ab-vg-video-params="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_params')), ENT_QUOTES, 'UTF-8');?>
" data-src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_url')), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video')), (int) 0, $_smarty_current_dir);
?>
        </div>
    </div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/components/video_popups.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__video_gallery/components/video_popups.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ab__vg_videos'), 'video');
$foreach111DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach111DoElse = false;
?>
    <?php $_smarty_tpl->assign('autoplay', $_smarty_tpl->getValue('video')['autoplay'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"), false, NULL);?>
    <?php $_smarty_tpl->assign('video_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_video_embed_url')($_smarty_tpl->getValue('video')), false, NULL);?>
    <?php $_smarty_tpl->assign('video_params', json_encode(array('url'=>$_smarty_tpl->getValue('video_url'),'type'=>$_smarty_tpl->getValue('video')['type'],'path'=>$_smarty_tpl->getValue('video')['video_path'],'autoplay'=>$_smarty_tpl->getValue('autoplay'))), false, NULL);?>

    <div id="ab__vg_video_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['video_id']), ENT_QUOTES, 'UTF-8');?>
" class="ab__vg_video_popup cm-popup-box hidden" data-ca-keep-in-place="true" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['title']), ENT_QUOTES, 'UTF-8');?>
">
        <div id="ab__vg_iframe_video_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['video_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['unique_id']), ENT_QUOTES, 'UTF-8');?>
" class="ab__vg_loading ab__vg_video_player"<?php if ($_smarty_tpl->getValue('video')['settings']['iframe_attributes']) {?> <?php echo $_smarty_tpl->getValue('video')['settings']['iframe_attributes'];
} else { ?> data-frameborder="0"<?php if ($_smarty_tpl->getValue('video')['settings']['controls'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> data-allowfullscreen="1"<?php }
}?> data-ab-vg-video-params="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_params')), ENT_QUOTES, 'UTF-8');?>
" data-src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video_url')), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video')), (int) 0, $_smarty_current_dir);
?>
        </div>
    </div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
