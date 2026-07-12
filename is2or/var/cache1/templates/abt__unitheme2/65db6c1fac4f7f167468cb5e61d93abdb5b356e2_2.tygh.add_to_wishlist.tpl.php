<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:16
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/wishlist/views/wishlist/components/add_to_wishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd7c9d87e3_60593777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65db6c1fac4f7f167468cb5e61d93abdb5b356e2' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/wishlist/views/wishlist/components/add_to_wishlist.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd7c9d87e3_60593777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.add_to_wishlist.tooltip','add_to_wishlist','abt__ut2.add_to_wishlist.tooltip','add_to_wishlist'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('wishlist_button_type', (($tmp = $_smarty_tpl->tpl_vars['wishlist_button_type']->value ?? null)===null||$tmp==='' ? "icon" ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_id', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_id']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_name', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_name']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_name']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_title', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("abt__ut2.add_to_wishlist.tooltip") ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_meta', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_meta']->value ?? null)===null||$tmp==='' ? "ut2-add-to-wish ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_href', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_href']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_href']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_label', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_label']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_label']->value ?? null : $tmp));?>

<a class="
	<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>
	<?php if ($_smarty_tpl->tpl_vars['details_page']->value && !$_smarty_tpl->tpl_vars['hidden_label']->value) {?> label<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> cm-submit<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['but_tooltip']->value && !$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?> cm-tooltip<?php }?>"
    <?php if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?> id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['wishlist_button_type']->value == "icon") {?><i class="ut2-icon-baseline-favorite_line"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['details_page']->value && !$_smarty_tpl->tpl_vars['hidden_but_label']->value || $_smarty_tpl->tpl_vars['but_label']->value && !$_smarty_tpl->tpl_vars['hidden_but_label']->value) {
echo $_smarty_tpl->__("add_to_wishlist");
}?>
</a>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/views/wishlist/components/add_to_wishlist.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('wishlist_button_type', (($tmp = $_smarty_tpl->tpl_vars['wishlist_button_type']->value ?? null)===null||$tmp==='' ? "icon" ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_id', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_id']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_name', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_name']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_name']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_title', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("abt__ut2.add_to_wishlist.tooltip") ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_meta', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_meta']->value ?? null)===null||$tmp==='' ? "ut2-add-to-wish ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_href', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_href']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_href']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_label', (($tmp = $_smarty_tpl->tpl_vars['wishlist_but_label']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_label']->value ?? null : $tmp));?>

<a class="
	<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>
	<?php if ($_smarty_tpl->tpl_vars['details_page']->value && !$_smarty_tpl->tpl_vars['hidden_label']->value) {?> label<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> cm-submit<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['but_tooltip']->value && !$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?> cm-tooltip<?php }?>"
    <?php if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?> id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['wishlist_button_type']->value == "icon") {?><i class="ut2-icon-baseline-favorite_line"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['details_page']->value && !$_smarty_tpl->tpl_vars['hidden_but_label']->value || $_smarty_tpl->tpl_vars['but_label']->value && !$_smarty_tpl->tpl_vars['hidden_but_label']->value) {
echo $_smarty_tpl->__("add_to_wishlist");
}?>
</a>
<?php }
}
}
