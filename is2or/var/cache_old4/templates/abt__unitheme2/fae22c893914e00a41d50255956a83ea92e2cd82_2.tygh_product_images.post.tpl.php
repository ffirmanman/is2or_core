<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:addons/ab__stickers/hooks/products/product_images.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a003a0783_20205862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fae22c893914e00a41d50255956a83ea92e2cd82' => 
    array (
      0 => 'addons/ab__stickers/hooks/products/product_images.post.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl' => 2,
  ),
))) {
function content_69fb4a003a0783_20205862 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__stickers/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('display_places', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_display_places')(array('places'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerPlaces::PRODUCT_IMAGE'),'hook_themes'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES'))), false, NULL);?>

<?php if ($_smarty_tpl->getValue('display_places')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display_places'=>$_smarty_tpl->getValue('display_places'),'is_hook'=>true), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__stickers/hooks/products/product_images.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__stickers/hooks/products/product_images.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('display_places', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__stickers_get_display_places')(array('places'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')('Addons\Ab_stickers\StickerPlaces::PRODUCT_IMAGE'),'hook_themes'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES'))), false, NULL);?>

<?php if ($_smarty_tpl->getValue('display_places')) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__stickers/views/ab__stickers/components/stickers_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display_places'=>$_smarty_tpl->getValue('display_places'),'is_hook'=>true), (int) 0, $_smarty_current_dir);
}
}
}
}
