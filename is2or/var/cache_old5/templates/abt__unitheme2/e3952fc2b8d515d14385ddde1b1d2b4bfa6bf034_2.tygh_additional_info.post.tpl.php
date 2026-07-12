<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:59
  from 'tygh:addons/ab__short_desc_from_features/hooks/products/additional_info.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f6f0058d1_92401429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3952fc2b8d515d14385ddde1b1d2b4bfa6bf034' => 
    array (
      0 => 'addons/ab__short_desc_from_features/hooks/products/additional_info.post.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f6f0058d1_92401429 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__short_desc_from_features/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['ab__short_desc_from_features']['show_descr_in_multicolumn'] == 'Y' && $_smarty_tpl->getValue('product')['short_description'] && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['abt__device']] !== 'description') {?>
<div class="product-description">
    <div><?php echo $_smarty_tpl->getValue('product')['short_description'];?>
</div>
</div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__short_desc_from_features/hooks/products/additional_info.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__short_desc_from_features/hooks/products/additional_info.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['ab__short_desc_from_features']['show_descr_in_multicolumn'] == 'Y' && $_smarty_tpl->getValue('product')['short_description'] && $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['products_multicolumns']['grid_item_bottom_content'][$_smarty_tpl->getValue('settings')['abt__device']] !== 'description') {?>
<div class="product-description">
    <div><?php echo $_smarty_tpl->getValue('product')['short_description'];?>
</div>
</div>
<?php }
}
}
}
