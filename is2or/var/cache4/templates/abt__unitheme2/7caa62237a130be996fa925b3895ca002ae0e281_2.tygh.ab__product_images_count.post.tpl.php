<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:15
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__video_gallery/hooks/products/ab__product_images_count.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571bc0d7c6_33896071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7caa62237a130be996fa925b3895ca002ae0e281' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__video_gallery/hooks/products/ab__product_images_count.post.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834571bc0d7c6_33896071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('ab__vg_videos', fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id']));?>

<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
    <?php $_smarty_tpl->_assignInScope('product_images_count', $_smarty_tpl->tpl_vars['product_images_count']->value+smarty_modifier_count($_smarty_tpl->tpl_vars['ab__vg_videos']->value) ,false ,32);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__video_gallery/hooks/products/ab__product_images_count.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__video_gallery/hooks/products/ab__product_images_count.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('ab__vg_videos', fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product']->value['product_id']));?>

<?php if ($_smarty_tpl->tpl_vars['ab__vg_videos']->value) {?>
    <?php $_smarty_tpl->_assignInScope('product_images_count', $_smarty_tpl->tpl_vars['product_images_count']->value+smarty_modifier_count($_smarty_tpl->tpl_vars['ab__vg_videos']->value) ,false ,32);
}?>

<?php }
}
}
