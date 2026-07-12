<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:27:21
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/common/toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bdb9d7a986_88444365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '092b6e3e801ef46732e5e62ae7a0af81e47e3d28' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/common/toolbar.tpl',
      1 => 1736834852,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835bdb9d7a986_88444365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('close','close'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-top-panel"><div id="minimize_block" class="ty-top-panel__wrapper"><div class="ty-top-panel__header"><div class="ty-top-panel__logo"><?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN")) {?><a href="<?php if (fn_allowed_for("ULTIMATE")) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['origin_http_location'], ENT_QUOTES, 'UTF-8');?>
/<?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['admin_index'], ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel__logo-link"><?php }
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-basket ty-top-panel__icon-basket"),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN")) {?></a><?php }?></div><h4 class="ty-top-panel__title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4></div><div class="ty-top-panel-action"><span class="ty-top-panel-action_item"><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel-btn cm-no-ajax cm-post"><?php echo $_smarty_tpl->__("close");?>
</a></span></div></div></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/toolbar.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/toolbar.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-top-panel"><div id="minimize_block" class="ty-top-panel__wrapper"><div class="ty-top-panel__header"><div class="ty-top-panel__logo"><?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN")) {?><a href="<?php if (fn_allowed_for("ULTIMATE")) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['origin_http_location'], ENT_QUOTES, 'UTF-8');?>
/<?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['admin_index'], ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel__logo-link"><?php }
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-basket ty-top-panel__icon-basket"),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN")) {?></a><?php }?></div><h4 class="ty-top-panel__title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4></div><div class="ty-top-panel-action"><span class="ty-top-panel-action_item"><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
" class="ty-top-panel-btn cm-no-ajax cm-post"><?php echo $_smarty_tpl->__("close");?>
</a></span></div></div></div>
<?php }
}
}
