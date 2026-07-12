<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaad960b4_83780175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '016dc98b97c4c22c35755bd3598a71a582616e1a' => 
    array (
      0 => 'addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__video_gallery/components/thumbnail.tpl' => 2,
  ),
))) {
function content_69afafaad960b4_83780175 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__video_gallery/blocks/product_tabs';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('tmb_width', 360, false, NULL);
$_smarty_tpl->assign('tmb_height', 240, false, NULL);?>

<?php $_smarty_tpl->assign('product_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);
$_smarty_tpl->assign('ab__vg_videos', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_videos')($_smarty_tpl->getValue('product_id'),array('autoplay'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::NO'))), false, NULL);?>

<?php if ($_smarty_tpl->getValue('ab__vg_videos')) {?>
<div class="ab__video_gallery-block">
    <div class="ab__vg-videos">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ab__vg_videos'), 'video');
$foreach64DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach64DoElse = false;
?>
            <div class="ab__vg-video">
                <a href="javascript:void(0)" class="cm-dialog-opener" data-ca-target-id="ab__vg_video_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['video_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['title']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['title']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
                    <span class="ab__vg-video_thumb ab-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__video_gallery']['video_icon']), ENT_QUOTES, 'UTF-8');?>
-icon">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video'),'width'=>$_smarty_tpl->getValue('tmb_width'),'height'=>$_smarty_tpl->getValue('tmb_height')), (int) 0, $_smarty_current_dir);
?>
                    </span>
                </a>
                <div class="ab__vg-video_title"><p><strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['title']), ENT_QUOTES, 'UTF-8');?>
</strong></p></div>
                <div class="ab__vg-video_description ty-wysiwyg-content"><?php echo $_smarty_tpl->getValue('video')['description'];?>
</div>
            </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__video_gallery/blocks/product_tabs/ab__video_gallery.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('tmb_width', 360, false, NULL);
$_smarty_tpl->assign('tmb_height', 240, false, NULL);?>

<?php $_smarty_tpl->assign('product_id', $_smarty_tpl->getValue('product')['product_id'], false, NULL);
$_smarty_tpl->assign('ab__vg_videos', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_videos')($_smarty_tpl->getValue('product_id'),array('autoplay'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::NO'))), false, NULL);?>

<?php if ($_smarty_tpl->getValue('ab__vg_videos')) {?>
<div class="ab__video_gallery-block">
    <div class="ab__vg-videos">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ab__vg_videos'), 'video');
$foreach65DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach65DoElse = false;
?>
            <div class="ab__vg-video">
                <a href="javascript:void(0)" class="cm-dialog-opener" data-ca-target-id="ab__vg_video_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['video_id']), ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['title']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['title']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
                    <span class="ab__vg-video_thumb ab-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__video_gallery']['video_icon']), ENT_QUOTES, 'UTF-8');?>
-icon">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('video'=>$_smarty_tpl->getValue('video'),'width'=>$_smarty_tpl->getValue('tmb_width'),'height'=>$_smarty_tpl->getValue('tmb_height')), (int) 0, $_smarty_current_dir);
?>
                    </span>
                </a>
                <div class="ab__vg-video_title"><p><strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('video')['title']), ENT_QUOTES, 'UTF-8');?>
</strong></p></div>
                <div class="ab__vg-video_description ty-wysiwyg-content"><?php echo $_smarty_tpl->getValue('video')['description'];?>
</div>
            </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
}
}
}
