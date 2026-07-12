<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:30:14
  from 'tygh:addons/abt__unitheme2/hooks/products/additional_info.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad96062f29d4_15515740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bc74068d1db81a1faa64641ce6f8e333e62db1a' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/products/additional_info.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/coming_soon_notice.tpl' => 2,
  ),
))) {
function content_69ad96062f29d4_15515740 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (($_smarty_tpl->getValue('product')['avail_since'] > (defined('TIME') ? constant('TIME') : null))) {?>
	<?php $_smarty_tpl->renderSubTemplate("tygh:common/coming_soon_notice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('avail_date'=>$_smarty_tpl->getValue('product')['avail_since'],'add_to_cart'=>$_smarty_tpl->getValue('product')['out_of_stock_actions']), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/products/additional_info.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/hooks/products/additional_info.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (($_smarty_tpl->getValue('product')['avail_since'] > (defined('TIME') ? constant('TIME') : null))) {?>
	<?php $_smarty_tpl->renderSubTemplate("tygh:common/coming_soon_notice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('avail_date'=>$_smarty_tpl->getValue('product')['avail_since'],'add_to_cart'=>$_smarty_tpl->getValue('product')['out_of_stock_actions']), (int) 0, $_smarty_current_dir);
}
}
}
}
