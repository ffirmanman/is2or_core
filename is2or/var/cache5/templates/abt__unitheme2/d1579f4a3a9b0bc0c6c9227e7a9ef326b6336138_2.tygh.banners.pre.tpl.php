<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:09
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/abt__ut2_banner/banners.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba293862d4_01500404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1579f4a3a9b0bc0c6c9227e7a9ef326b6336138' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/abt__ut2_banner/banners.pre.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835ba293862d4_01500404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['block']->value['properties']['disable_first_banner_lazy_load'] == "Y") {?>
    <?php if ($_smarty_tpl->tpl_vars['b_iteration']->value === 1 && $_smarty_tpl->tpl_vars['b']->value['type'] == "G") {?>
        <?php $_smarty_tpl->_assignInScope('pov', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']["pov_".((string)$_smarty_tpl->tpl_vars['settings']->value['abt__device'])] ?? null)===null||$tmp==='' ? 2 ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('ab__preload', $_smarty_tpl->tpl_vars['pov']->value ,false ,2);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/abt__ut2_banner/banners.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__preload/hooks/abt__ut2_banner/banners.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['block']->value['properties']['disable_first_banner_lazy_load'] == "Y") {?>
    <?php if ($_smarty_tpl->tpl_vars['b_iteration']->value === 1 && $_smarty_tpl->tpl_vars['b']->value['type'] == "G") {?>
        <?php $_smarty_tpl->_assignInScope('pov', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']["pov_".((string)$_smarty_tpl->tpl_vars['settings']->value['abt__device'])] ?? null)===null||$tmp==='' ? 2 ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('ab__preload', $_smarty_tpl->tpl_vars['pov']->value ,false ,2);?>
    <?php }
}
}
}
}
