<?php
/* Smarty version 5.4.3, created on 2026-03-09 14:14:02
  from 'tygh:/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/addons/wishlist/hooks/variations_list/list_buttons.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aeab7aa51b07_56223194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13c1353cf18268d92588d3f54dd6af5a20e3bb5f' => 
    array (
      0 => '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/addons/wishlist/hooks/variations_list/list_buttons.post.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aeab7aa51b07_56223194 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/addons/wishlist/hooks/variations_list';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/addons/wishlist/hooks/variations_list/list_buttons.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/overrides/addons/wishlist/hooks/variations_list/list_buttons.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
}
}
}
