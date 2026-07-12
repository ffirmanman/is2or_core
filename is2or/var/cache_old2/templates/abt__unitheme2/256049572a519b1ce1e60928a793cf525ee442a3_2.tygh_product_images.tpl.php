<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_product_360_images/overrides/views/products/components/product_images.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa9d419a9_39879936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '256049572a519b1ce1e60928a793cf525ee442a3' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_product_360_images/overrides/views/products/components/product_images.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/is2or_product_360_images/components/ab__video_gallery_product_images.tpl' => 2,
    'tygh:addons/is2or_product_360_images/components/default_product_images.tpl' => 2,
  ),
))) {
function content_69afafa9d419a9_39879936 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_product_360_images/overrides/views/products/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['ab__video_gallery']['status'] == 'A') {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_product_360_images/components/ab__video_gallery_product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} else { ?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_product_360_images/components/default_product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_product_360_images/overrides/views/products/components/product_images.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/is2or_product_360_images/overrides/views/products/components/product_images.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['ab__video_gallery']['status'] == 'A') {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_product_360_images/components/ab__video_gallery_product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
} else { ?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/is2or_product_360_images/components/default_product_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
}
}
