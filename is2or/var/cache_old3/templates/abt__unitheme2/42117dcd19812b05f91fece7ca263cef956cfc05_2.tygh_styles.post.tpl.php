<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:22
  from 'tygh:addons/csc_live_search/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb20e1f13b7_35198761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42117dcd19812b05f91fece7ca263cef956cfc05' => 
    array (
      0 => 'addons/csc_live_search/hooks/index/styles.post.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb20e1f13b7_35198761 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/csc_live_search/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('cls_settings', $_smarty_tpl->getSmarty()->getModifierCallback('fn_cls_get_settings')(), false, NULL);?>
<style>
	@cls_base: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['base_text_color'] ?? null)===null||$tmp==='' ? "#2a2c47" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;
	@cls_background: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['active_elements_background'] ?? null)===null||$tmp==='' ? "#eaeaed" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;
	@cls_link: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['link_color'] ?? null)===null||$tmp==='' ? "#1155bb" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;
	@cls_tabs: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['active_elements_color'] ?? null)===null||$tmp==='' ? "#029d52" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;
	@cls_radius: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['border_radius'] ?? null)===null||$tmp==='' ? "5" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px;
	@cls_category: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['category_e'] ?? null)===null||$tmp==='' ? "#50AFD6" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;
	@cls_desktop_max_width: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['desktop_max_width'] ?? null)===null||$tmp==='' ? "700" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px;
</style>
<?php $_smarty_tpl->assign('cls_theme', (($tmp = $_smarty_tpl->getValue('cls_settings')['theme'] ?? null)===null||$tmp==='' ? "csc_live_search/themes/modern.less" ?? null : $tmp), false, NULL);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/csc_live_search/animation.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/csc_live_search/styles.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/csc_live_search/compatibility.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/".((string)$_smarty_tpl->getValue('cls_theme'))), $_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/csc_live_search/hooks/index/styles.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/csc_live_search/hooks/index/styles.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('cls_settings', $_smarty_tpl->getSmarty()->getModifierCallback('fn_cls_get_settings')(), false, NULL);?>
<style>
	@cls_base: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['base_text_color'] ?? null)===null||$tmp==='' ? "#2a2c47" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;
	@cls_background: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['active_elements_background'] ?? null)===null||$tmp==='' ? "#eaeaed" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;
	@cls_link: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['link_color'] ?? null)===null||$tmp==='' ? "#1155bb" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;
	@cls_tabs: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['active_elements_color'] ?? null)===null||$tmp==='' ? "#029d52" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;
	@cls_radius: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['border_radius'] ?? null)===null||$tmp==='' ? "5" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px;
	@cls_category: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['category_e'] ?? null)===null||$tmp==='' ? "#50AFD6" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
;
	@cls_desktop_max_width: <?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('cls_settings')['desktop_max_width'] ?? null)===null||$tmp==='' ? "700" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
px;
</style>
<?php $_smarty_tpl->assign('cls_theme', (($tmp = $_smarty_tpl->getValue('cls_settings')['theme'] ?? null)===null||$tmp==='' ? "csc_live_search/themes/modern.less" ?? null : $tmp), false, NULL);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/csc_live_search/animation.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/csc_live_search/styles.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/csc_live_search/compatibility.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/".((string)$_smarty_tpl->getValue('cls_theme'))), $_smarty_tpl);
}
}
}
