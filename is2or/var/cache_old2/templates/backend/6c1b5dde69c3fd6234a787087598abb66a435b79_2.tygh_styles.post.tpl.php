<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:45
  from 'tygh:addons/abt__unitheme2/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1ad25cea7_13791457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c1b5dde69c3fd6234a787087598abb66a435b79' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/index/styles.post.tpl',
      1 => 1767831040,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1ad25cea7_13791457 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/abt__unitheme2/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/abt__unitheme2/styles.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/abt__unitheme2/front_icons.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/abt__unitheme2/upgrade_notifications.less"), $_smarty_tpl);
}
}
