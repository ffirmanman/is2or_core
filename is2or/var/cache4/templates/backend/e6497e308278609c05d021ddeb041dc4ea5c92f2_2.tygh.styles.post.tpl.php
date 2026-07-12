<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:37:29
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/abt__unitheme2/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345279576124_32916775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6497e308278609c05d021ddeb041dc4ea5c92f2' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/abt__unitheme2/hooks/index/styles.post.tpl',
      1 => 1736835023,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68345279576124_32916775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/abt__unitheme2/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/abt__unitheme2/front_icons.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/abt__unitheme2/upgrade_notifications.less"),$_smarty_tpl);
}
}
