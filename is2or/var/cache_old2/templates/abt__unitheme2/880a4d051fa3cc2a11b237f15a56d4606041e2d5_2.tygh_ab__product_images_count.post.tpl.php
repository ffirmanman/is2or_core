<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/ab__video_gallery/hooks/products/ab__product_images_count.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa90f0eb9_66892031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '880a4d051fa3cc2a11b237f15a56d4606041e2d5' => 
    array (
      0 => 'addons/ab__video_gallery/hooks/products/ab__product_images_count.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa90f0eb9_66892031 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__video_gallery/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('ab__vg_videos', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_videos')($_smarty_tpl->getValue('product')['product_id']), false, NULL);?>

<?php if ($_smarty_tpl->getValue('ab__vg_videos')) {?>
    <?php $_smarty_tpl->assign('product_images_count', $_smarty_tpl->getValue('product_images_count')+$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('ab__vg_videos')), false, 32);
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/hooks/products/ab__product_images_count.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__video_gallery/hooks/products/ab__product_images_count.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('ab__vg_videos', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__vg_get_videos')($_smarty_tpl->getValue('product')['product_id']), false, NULL);?>

<?php if ($_smarty_tpl->getValue('ab__vg_videos')) {?>
    <?php $_smarty_tpl->assign('product_images_count', $_smarty_tpl->getValue('product_images_count')+$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('ab__vg_videos')), false, 32);
}?>

<?php }
}
}
