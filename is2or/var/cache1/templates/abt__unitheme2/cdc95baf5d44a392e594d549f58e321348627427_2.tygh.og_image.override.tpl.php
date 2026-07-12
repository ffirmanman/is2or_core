<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:14
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__deal_of_the_day/hooks/abt__unitheme/og_image.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd7aced060_22405498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdc95baf5d44a392e594d549f58e321348627427' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__deal_of_the_day/hooks/abt__unitheme/og_image.override.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd7aced060_22405498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__youpitheme:og_image"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__youpitheme:og_image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "promotions" && $_smarty_tpl->tpl_vars['promotion']->value['image']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion']->value['image']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__youpitheme:og_image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/hooks/abt__unitheme/og_image.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/hooks/abt__unitheme/og_image.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"abt__youpitheme:og_image"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"abt__youpitheme:og_image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "promotions" && $_smarty_tpl->tpl_vars['promotion']->value['image']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion']->value['image']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"abt__youpitheme:og_image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
