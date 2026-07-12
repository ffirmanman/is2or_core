<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:addons/abt__unitheme2/hooks/products/buy_together.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaa706cc8_01557036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b72cafdd3f9ea73e3e9bb2d7f6ccbaf8c9f975cc' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/products/buy_together.pre.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/abt__unitheme2/hooks/products/components/buy_together.tpl' => 2,
  ),
))) {
function content_69afafaa706cc8_01557036 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['addon_buy_together']['view'] == 'as_block_above_tabs') {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/abt__unitheme2/hooks/products/components/buy_together.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('chains'=>$_smarty_tpl->getValue('chains'),'show_scroll'=>true), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/products/buy_together.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/hooks/products/buy_together.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['addon_buy_together']['view'] == 'as_block_above_tabs') {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/abt__unitheme2/hooks/products/components/buy_together.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('chains'=>$_smarty_tpl->getValue('chains'),'show_scroll'=>true), (int) 0, $_smarty_current_dir);
}
}
}
}
