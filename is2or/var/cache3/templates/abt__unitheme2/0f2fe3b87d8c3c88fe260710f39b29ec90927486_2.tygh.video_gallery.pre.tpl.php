<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:28:59
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__video_gallery/hooks/products/video_gallery.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd6b544ad8_74955844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f2fe3b87d8c3c88fe260710f39b29ec90927486' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__video_gallery/hooks/products/video_gallery.pre.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__video_gallery/components/video_icon.tpl' => 2,
  ),
),false)) {
function content_682fdd6b544ad8_74955844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('icon_play', 'icon');?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['ab__vg_videos']) {?>
	<?php if ($_smarty_tpl->tpl_vars['icon_play']->value != "icon") {?>
    	<?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon_width'=>30,'icon_height'=>30,'icon_class'=>"ab__vg-icon-video"), 0, false);
?>
    <?php } else { ?>
    	<i class="ab__vg-icon-video <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['video_icon'], ENT_QUOTES, 'UTF-8');?>
-icon"></i>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/hooks/products/video_gallery.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/hooks/products/video_gallery.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('icon_play', 'icon');?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['ab__vg_videos']) {?>
	<?php if ($_smarty_tpl->tpl_vars['icon_play']->value != "icon") {?>
    	<?php $_smarty_tpl->_subTemplateRender("tygh:addons/ab__video_gallery/components/video_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon_width'=>30,'icon_height'=>30,'icon_class'=>"ab__vg-icon-video"), 0, true);
?>
    <?php } else { ?>
    	<i class="ab__vg-icon-video <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__video_gallery']['video_icon'], ENT_QUOTES, 'UTF-8');?>
-icon"></i>
    <?php }
}
}
}
}
