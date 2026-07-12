<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/ab__seo_product_tabs/hooks/products/ab__product_images_count.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa90dcf65_17647638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0ceb1a8b366baea9d8a667c1acbff07fe7a3ddc' => 
    array (
      0 => 'addons/ab__seo_product_tabs/hooks/products/ab__product_images_count.pre.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__seo_product_tabs/views/components/tabs_content.tpl' => 2,
  ),
))) {
function content_69afafa90dcf65_17647638 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__seo_product_tabs/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (((($tmp = $_smarty_tpl->getValue('settings')['ab__device'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['abt__device'] ?? null : $tmp)) !== 'mobile' && $_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['tabs_fixed_panel_position'] === 'after_h1' && $_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['add_tabs_fixed_panel'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {?>
    <?php if ($_smarty_tpl->getValue('ab__spt_tabs')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__seo_product_tabs/views/components/tabs_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tabs'=>$_smarty_tpl->getValue('ab__spt_tabs')), (int) 0, $_smarty_current_dir);
?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__seo_product_tabs/hooks/products/ab__product_images_count.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__seo_product_tabs/hooks/products/ab__product_images_count.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (((($tmp = $_smarty_tpl->getValue('settings')['ab__device'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['abt__device'] ?? null : $tmp)) !== 'mobile' && $_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['tabs_fixed_panel_position'] === 'after_h1' && $_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['add_tabs_fixed_panel'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {?>
    <?php if ($_smarty_tpl->getValue('ab__spt_tabs')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__seo_product_tabs/views/components/tabs_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tabs'=>$_smarty_tpl->getValue('ab__spt_tabs')), (int) 0, $_smarty_current_dir);
?>
    <?php }
}
}
}
}
