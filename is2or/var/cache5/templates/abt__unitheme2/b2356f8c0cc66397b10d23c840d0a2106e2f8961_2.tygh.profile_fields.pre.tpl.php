<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:12
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/cities/hooks/profiles/profile_fields.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba2c43cca5_49090585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2356f8c0cc66397b10d23c840d0a2106e2f8961' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/cities/hooks/profiles/profile_fields.pre.tpl',
      1 => 1747641041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835ba2c43cca5_49090585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('type', substr($_smarty_tpl->tpl_vars['field']->value['field_name'],2));?>

<input type="text" style="display:none;" autocomplete="on | off" />
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cities/hooks/profiles/profile_fields.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cities/hooks/profiles/profile_fields.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('type', substr($_smarty_tpl->tpl_vars['field']->value['field_name'],2));?>

<input type="text" style="display:none;" autocomplete="on | off" />
<?php }
}
}
