<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:37:35
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index/abt_ut2_html_class.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834527fb3bbb9_99734451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d54edb4864d769e2f7854211e8bf5bd5990264f' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index/abt_ut2_html_class.post.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834527fb3bbb9_99734451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['top_sticky_panel']['enable'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?> sticky-top-panel <?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['sticky_panel']['enable_sticky_panel'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?> sticky-bottom-panel <?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['category']['show_sticky_panel_filters_and_categories'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?> sticky-fc-panel<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/index/abt_ut2_html_class.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/index/abt_ut2_html_class.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['top_sticky_panel']['enable'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?> sticky-top-panel <?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['sticky_panel']['enable_sticky_panel'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?> sticky-bottom-panel <?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['category']['show_sticky_panel_filters_and_categories'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === smarty_modifier_enum("YesNo::YES")) {?> sticky-fc-panel<?php }
}
}
}
