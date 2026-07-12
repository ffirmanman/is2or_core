<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__motivation_block/overrides/addons/geo_maps/hooks/products/geo_maps.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a006610f5_20833712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79e148435c2bfc8b5dd776ddb968ea1f6ff9acfd' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__motivation_block/overrides/addons/geo_maps/hooks/products/geo_maps.pre.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/geo_maps/views/geo_maps/shipping_estimation.tpl' => 2,
  ),
))) {
function content_69fb4a006610f5_20833712 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__motivation_block/overrides/addons/geo_maps/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__mb_has_template')($_smarty_tpl->getValue('ab__motivation_items'),"addons/ab__motivation_block/blocks/components/item_templates/geo_maps.tpl")) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/geo_maps/views/geo_maps/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping_methods'=>null,'product_id'=>(($tmp = $_smarty_tpl->getValue('shipping_estimation_product_id') ?? null)===null||$tmp==='' ? null ?? null : $tmp)), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__motivation_block/overrides/addons/geo_maps/hooks/products/geo_maps.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__motivation_block/overrides/addons/geo_maps/hooks/products/geo_maps.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__mb_has_template')($_smarty_tpl->getValue('ab__motivation_items'),"addons/ab__motivation_block/blocks/components/item_templates/geo_maps.tpl")) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/geo_maps/views/geo_maps/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping_methods'=>null,'product_id'=>(($tmp = $_smarty_tpl->getValue('shipping_estimation_product_id') ?? null)===null||$tmp==='' ? null ?? null : $tmp)), (int) 0, $_smarty_current_dir);
}
}
}
}
