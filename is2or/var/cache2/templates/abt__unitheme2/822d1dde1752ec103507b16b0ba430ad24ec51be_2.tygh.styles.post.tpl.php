<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:57
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/csc_live_search/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe219dff691_09416365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '822d1dde1752ec103507b16b0ba430ad24ec51be' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/csc_live_search/hooks/index/styles.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe219dff691_09416365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('cls_settings', fn_cls_get_settings());?>
<style>
	@cls_base: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['base_text_color'] ?? null)===null||$tmp==='' ? "#2a2c47" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;
	@cls_background: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['active_elements_background'] ?? null)===null||$tmp==='' ? "#eaeaed" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;
	@cls_link: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['link_color'] ?? null)===null||$tmp==='' ? "#1155bb" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;
	@cls_tabs: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['active_elements_color'] ?? null)===null||$tmp==='' ? "#029d52" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;
	@cls_radius: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['border_radius'] ?? null)===null||$tmp==='' ? "5" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px;
	@cls_category: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['category_e'] ?? null)===null||$tmp==='' ? "#50AFD6" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;
	@cls_desktop_max_width: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['desktop_max_width'] ?? null)===null||$tmp==='' ? "700" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px;
</style>
<?php $_smarty_tpl->_assignInScope('cls_theme', (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['theme'] ?? null)===null||$tmp==='' ? "csc_live_search/themes/modern.less" ?? null : $tmp));
echo smarty_function_style(array('src'=>"addons/csc_live_search/animation.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/csc_live_search/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/csc_live_search/compatibility.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/".((string)$_smarty_tpl->tpl_vars['cls_theme']->value)),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/csc_live_search/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/csc_live_search/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('cls_settings', fn_cls_get_settings());?>
<style>
	@cls_base: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['base_text_color'] ?? null)===null||$tmp==='' ? "#2a2c47" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;
	@cls_background: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['active_elements_background'] ?? null)===null||$tmp==='' ? "#eaeaed" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;
	@cls_link: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['link_color'] ?? null)===null||$tmp==='' ? "#1155bb" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;
	@cls_tabs: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['active_elements_color'] ?? null)===null||$tmp==='' ? "#029d52" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;
	@cls_radius: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['border_radius'] ?? null)===null||$tmp==='' ? "5" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px;
	@cls_category: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['category_e'] ?? null)===null||$tmp==='' ? "#50AFD6" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
;
	@cls_desktop_max_width: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['desktop_max_width'] ?? null)===null||$tmp==='' ? "700" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px;
</style>
<?php $_smarty_tpl->_assignInScope('cls_theme', (($tmp = $_smarty_tpl->tpl_vars['cls_settings']->value['theme'] ?? null)===null||$tmp==='' ? "csc_live_search/themes/modern.less" ?? null : $tmp));
echo smarty_function_style(array('src'=>"addons/csc_live_search/animation.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/csc_live_search/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/csc_live_search/compatibility.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/".((string)$_smarty_tpl->tpl_vars['cls_theme']->value)),$_smarty_tpl);
}
}
}
