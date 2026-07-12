<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:12
  from 'tygh:addons/ab__video_gallery/hooks/products/video_gallery.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb204db40e7_59469959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '081e53fd3406df1b4acb884b3f8d517f4bd34a68' => 
    array (
      0 => 'addons/ab__video_gallery/hooks/products/video_gallery.pre.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__video_gallery/components/video_icon.tpl' => 2,
  ),
))) {
function content_69afb204db40e7_59469959 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__video_gallery/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('icon_play', 'icon', false, NULL);?>

<?php if ($_smarty_tpl->getValue('product')['ab__vg_videos']) {?>
	<?php if ($_smarty_tpl->getValue('icon_play') != "icon") {?>
    	<?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon_width'=>30,'icon_height'=>30,'icon_class'=>"ab__vg-icon-video"), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
    	<i class="ab__vg-icon-video <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__video_gallery']['video_icon']), ENT_QUOTES, 'UTF-8');?>
-icon"></i>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/hooks/products/video_gallery.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__video_gallery/hooks/products/video_gallery.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('icon_play', 'icon', false, NULL);?>

<?php if ($_smarty_tpl->getValue('product')['ab__vg_videos']) {?>
	<?php if ($_smarty_tpl->getValue('icon_play') != "icon") {?>
    	<?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon_width'=>30,'icon_height'=>30,'icon_class'=>"ab__vg-icon-video"), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
    	<i class="ab__vg-icon-video <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__video_gallery']['video_icon']), ENT_QUOTES, 'UTF-8');?>
-icon"></i>
    <?php }
}
}
}
}
