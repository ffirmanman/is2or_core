<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:11
  from 'tygh:addons/ab__intelligent_accessories/hooks/products/product_tabs_pre.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafab044f59_30606873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13b6c87301b70d615b0dc878cdf20dcccabe971b' => 
    array (
      0 => 'addons/ab__intelligent_accessories/hooks/products/product_tabs_pre.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__intelligent_accessories/blocks/components/ab__ia_product_tabs_content.tpl' => 2,
  ),
))) {
function content_69afafab044f59_30606873 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__intelligent_accessories/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__intelligent_accessories']['display_block'][$_smarty_tpl->getValue('settings')['abt__device']] == 'post') {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__intelligent_accessories/blocks/components/ab__ia_product_tabs_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__intelligent_accessories/hooks/products/product_tabs_pre.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__intelligent_accessories/hooks/products/product_tabs_pre.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['ab__intelligent_accessories']['display_block'][$_smarty_tpl->getValue('settings')['abt__device']] == 'post') {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__intelligent_accessories/blocks/components/ab__ia_product_tabs_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
}
}
