<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:12
  from 'tygh:addons/abt__unitheme2/hooks/themes/install_themes.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb55240d3111_64675319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3845ca17a3f1e85384a2aabd5f32f9acf294a05a' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/themes/install_themes.post.tpl',
      1 => 1767831040,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb55240d3111_64675319 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/abt__unitheme2/hooks/themes';
if ($_smarty_tpl->getValue('theme_name') == 'abt__unitheme2') {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "add_new_picker", null, null);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'add_new_picker');?>

<hr>
<div class="abt-ut2-doc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.clone_theme', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
