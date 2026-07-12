<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:20:20
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/abt__unitheme2/hooks/themes/install_themes.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc14472b90_07557381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e0df63a3de5330a59e3fb1af2a215f08eeb9c60' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/abt__unitheme2/hooks/themes/install_themes.post.tpl',
      1 => 1736835023,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835bc14472b90_07557381 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['theme_name']->value == 'abt__unitheme2') {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker');?>

<hr>
<div class="abt-ut2-doc"><?php echo $_smarty_tpl->__('abt__ut2.clone_theme');?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
