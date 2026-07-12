<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:16
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/buttons/add_to_compare_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd7c9eb862_99588725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c6304d5238978f4545159e9bd4812f20fcb2d18' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/buttons/add_to_compare_list.tpl',
      1 => 1747370623,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd7c9eb862_99588725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.ab__hide_content.php','function'=>'smarty_block_ab__hide_content',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_to_comparison_list','compare','add_to_comparison_list','compare'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('ab__hide_content', array('bot_type'=>"ALL"));
$_block_repeat=true;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax cm-ajax-full-render");
}?>

<?php if (!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['config']) ? $_smarty_tpl->tpl_vars['config']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['current_url'] = fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"layout");
$_smarty_tpl->_assignInScope('config', $_tmp_array);?>
    <?php $_smarty_tpl->_assignInScope('compare_button_type', (($tmp = $_smarty_tpl->tpl_vars['compare_button_type']->value ?? null)===null||$tmp==='' ? "icon" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_meta', (($tmp = $_smarty_tpl->tpl_vars['compare_but_meta']->value ?? null)===null||$tmp==='' ? "ut2-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_title', (($tmp = $_smarty_tpl->tpl_vars['compare_but_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_comparison_list") ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_target_id', (($tmp = $_smarty_tpl->tpl_vars['compare_but_target_id']->value ?? null)===null||$tmp==='' ? "comparison_list,account_info*" ?? null : $tmp));?>
	<?php $_smarty_tpl->_assignInScope('but_rel', (($tmp = $_smarty_tpl->tpl_vars['compare_but_rel']->value ?? null)===null||$tmp==='' ? "nofollow" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('c_url', (($tmp = $_smarty_tpl->tpl_vars['redirect_url']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_label', (($tmp = $_smarty_tpl->tpl_vars['compare_but_label']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_label']->value ?? null : $tmp));?>

    <?php if ($_smarty_tpl->tpl_vars['selected_layout']->value) {?>
        <?php $_smarty_tpl->_assignInScope('c_url', ((string)$_smarty_tpl->tpl_vars['c_url']->value)."&layout=".((string)$_smarty_tpl->tpl_vars['selected_layout']->value));?>
    <?php }?>

    <?php ob_start();
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable60=ob_get_clean();
$_smarty_tpl->_assignInScope('but_href', (($tmp = $_smarty_tpl->tpl_vars['compare_but_href']->value ?? null)===null||$tmp==='' ? "product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&redirect_url=".$_prefixVariable60 ?? null : $tmp));?>

    <a class="
	<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>
    <?php if ($_smarty_tpl->tpl_vars['details_page']->value && !$_smarty_tpl->tpl_vars['hidden_label']->value) {?> label<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_tooltip']->value && !$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?> cm-tooltip<?php }?>"
    <?php if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
,abt__ut2_compared_products"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?> id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>

    <?php if ($_smarty_tpl->tpl_vars['compare_button_type']->value == "icon") {?><i class="ut2-icon-addchart_black_line"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['details_page']->value && !$_smarty_tpl->tpl_vars['hidden_but_label']->value || $_smarty_tpl->tpl_vars['but_label']->value && !$_smarty_tpl->tpl_vars['hidden_but_label']->value) {
echo $_smarty_tpl->__("compare");
}?>
    </a>
<?php }
$_block_repeat=false;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/add_to_compare_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/add_to_compare_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('ab__hide_content', array('bot_type'=>"ALL"));
$_block_repeat=true;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax cm-ajax-full-render");
}?>

<?php if (!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['config']) ? $_smarty_tpl->tpl_vars['config']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['current_url'] = fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"layout");
$_smarty_tpl->_assignInScope('config', $_tmp_array);?>
    <?php $_smarty_tpl->_assignInScope('compare_button_type', (($tmp = $_smarty_tpl->tpl_vars['compare_button_type']->value ?? null)===null||$tmp==='' ? "icon" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_meta', (($tmp = $_smarty_tpl->tpl_vars['compare_but_meta']->value ?? null)===null||$tmp==='' ? "ut2-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_title', (($tmp = $_smarty_tpl->tpl_vars['compare_but_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_to_comparison_list") ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_target_id', (($tmp = $_smarty_tpl->tpl_vars['compare_but_target_id']->value ?? null)===null||$tmp==='' ? "comparison_list,account_info*" ?? null : $tmp));?>
	<?php $_smarty_tpl->_assignInScope('but_rel', (($tmp = $_smarty_tpl->tpl_vars['compare_but_rel']->value ?? null)===null||$tmp==='' ? "nofollow" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('c_url', (($tmp = $_smarty_tpl->tpl_vars['redirect_url']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('but_label', (($tmp = $_smarty_tpl->tpl_vars['compare_but_label']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_label']->value ?? null : $tmp));?>

    <?php if ($_smarty_tpl->tpl_vars['selected_layout']->value) {?>
        <?php $_smarty_tpl->_assignInScope('c_url', ((string)$_smarty_tpl->tpl_vars['c_url']->value)."&layout=".((string)$_smarty_tpl->tpl_vars['selected_layout']->value));?>
    <?php }?>

    <?php ob_start();
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable61=ob_get_clean();
$_smarty_tpl->_assignInScope('but_href', (($tmp = $_smarty_tpl->tpl_vars['compare_but_href']->value ?? null)===null||$tmp==='' ? "product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&redirect_url=".$_prefixVariable61 ?? null : $tmp));?>

    <a class="
	<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>
    <?php if ($_smarty_tpl->tpl_vars['details_page']->value && !$_smarty_tpl->tpl_vars['hidden_label']->value) {?> label<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_tooltip']->value && !$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "desktop") {?> cm-tooltip<?php }?>"
    <?php if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
,abt__ut2_compared_products"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?> id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>

    <?php if ($_smarty_tpl->tpl_vars['compare_button_type']->value == "icon") {?><i class="ut2-icon-addchart_black_line"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['details_page']->value && !$_smarty_tpl->tpl_vars['hidden_but_label']->value || $_smarty_tpl->tpl_vars['but_label']->value && !$_smarty_tpl->tpl_vars['hidden_but_label']->value) {
echo $_smarty_tpl->__("compare");
}?>
    </a>
<?php }
$_block_repeat=false;
echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
