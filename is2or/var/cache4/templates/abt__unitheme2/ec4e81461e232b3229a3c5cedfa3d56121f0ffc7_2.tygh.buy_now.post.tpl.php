<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:15
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/social_buttons/hooks/products/buy_now.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571b6f88b0_69618006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec4e81461e232b3229a3c5cedfa3d56121f0ffc7' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/social_buttons/hooks/products/buy_now.post.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/social_buttons/blocks/components/share_buttons.tpl' => 2,
  ),
),false)) {
function content_6834571b6f88b0_69618006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
    <?php if ($_smarty_tpl->tpl_vars['provider_settings']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_social_buttons']['view'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    	<?php $_smarty_tpl->_subTemplateRender("tygh:addons/social_buttons/blocks/components/share_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/hooks/products/buy_now.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/hooks/products/buy_now.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== "mobile") {?>
    <?php if ($_smarty_tpl->tpl_vars['provider_settings']->value && $_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['addon_social_buttons']['view'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?>
    	<?php $_smarty_tpl->_subTemplateRender("tygh:addons/social_buttons/blocks/components/share_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }
}
}
}
}
