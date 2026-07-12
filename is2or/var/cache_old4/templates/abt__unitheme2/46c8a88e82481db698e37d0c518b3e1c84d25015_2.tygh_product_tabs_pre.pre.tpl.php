<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:addons/ab__intelligent_accessories/hooks/products/product_tabs_pre.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a00a6a4c0_28166404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46c8a88e82481db698e37d0c518b3e1c84d25015' => 
    array (
      0 => 'addons/ab__intelligent_accessories/hooks/products/product_tabs_pre.pre.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__intelligent_accessories/blocks/components/ab__ia_product_tabs_content.tpl' => 2,
  ),
))) {
function content_69fb4a00a6a4c0_28166404 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__intelligent_accessories/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__intelligent_accessories']['display_block'][$_smarty_tpl->getValue('settings')['abt__device']] == 'pre') {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__intelligent_accessories/blocks/components/ab__ia_product_tabs_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__intelligent_accessories/hooks/products/product_tabs_pre.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__intelligent_accessories/hooks/products/product_tabs_pre.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__intelligent_accessories']['display_block'][$_smarty_tpl->getValue('settings')['abt__device']] == 'pre') {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__intelligent_accessories/blocks/components/ab__ia_product_tabs_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
}
}
