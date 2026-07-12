<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:02
  from 'tygh:addons/tags/blocks/product_tabs/tags.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1eea67ed0_43575712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '642ca32521195d2c929f2090ca529531684281a0' => 
    array (
      0 => 'addons/tags/blocks/product_tabs/tags.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/tags/views/tags/components/tags.tpl' => 2,
  ),
))) {
function content_69ada1eea67ed0_43575712 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/tags/blocks/product_tabs';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['tags']['tags_for_products'] == "Y") {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/tags/views/tags/components/tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->getValue('product'),'object_id'=>$_smarty_tpl->getValue('product')['product_id'],'object_type'=>"P"), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/tags/blocks/product_tabs/tags.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/tags/blocks/product_tabs/tags.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['tags']['tags_for_products'] == "Y") {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/tags/views/tags/components/tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->getValue('product'),'object_id'=>$_smarty_tpl->getValue('product')['product_id'],'object_type'=>"P"), (int) 0, $_smarty_current_dir);
}
}
}
}
