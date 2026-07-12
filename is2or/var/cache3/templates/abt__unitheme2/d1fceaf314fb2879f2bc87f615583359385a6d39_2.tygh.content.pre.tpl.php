<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:28:58
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/index/content.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd6a77bfd4_05156010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1fceaf314fb2879f2bc87f615583359385a6d39' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/index/content.pre.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd6a77bfd4_05156010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['ab__p_ignore_product_preload_positions']->value && $_smarty_tpl->tpl_vars['ab__p_ignore_product_preload_layout']->value && $_smarty_tpl->tpl_vars['ab__preload_settings']->value[$_smarty_tpl->tpl_vars['ab__p_ignore_product_preload_layout']->value]) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ab__p_ignore_product_preload_positions']->value, 'pos');
$_smarty_tpl->tpl_vars['pos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pos']->value) {
$_smarty_tpl->tpl_vars['pos']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['pos']->value <= $_smarty_tpl->tpl_vars['ab__preload_settings']->value[$_smarty_tpl->tpl_vars['ab__p_ignore_product_preload_layout']->value]) {?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['ab__preload_settings']) ? $_smarty_tpl->tpl_vars['ab__preload_settings']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["ignore_".((string)$_smarty_tpl->tpl_vars['ab__p_ignore_product_preload_layout']->value)] = $_smarty_tpl->tpl_vars['ab__preload_settings']->value["ignore_".((string)$_smarty_tpl->tpl_vars['ab__p_ignore_product_preload_layout']->value)]+1;
$_smarty_tpl->_assignInScope('ab__preload_settings', $_tmp_array ,false ,32);?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/index/content.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__preload/hooks/index/content.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['ab__p_ignore_product_preload_positions']->value && $_smarty_tpl->tpl_vars['ab__p_ignore_product_preload_layout']->value && $_smarty_tpl->tpl_vars['ab__preload_settings']->value[$_smarty_tpl->tpl_vars['ab__p_ignore_product_preload_layout']->value]) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ab__p_ignore_product_preload_positions']->value, 'pos');
$_smarty_tpl->tpl_vars['pos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pos']->value) {
$_smarty_tpl->tpl_vars['pos']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['pos']->value <= $_smarty_tpl->tpl_vars['ab__preload_settings']->value[$_smarty_tpl->tpl_vars['ab__p_ignore_product_preload_layout']->value]) {?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['ab__preload_settings']) ? $_smarty_tpl->tpl_vars['ab__preload_settings']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["ignore_".((string)$_smarty_tpl->tpl_vars['ab__p_ignore_product_preload_layout']->value)] = $_smarty_tpl->tpl_vars['ab__preload_settings']->value["ignore_".((string)$_smarty_tpl->tpl_vars['ab__p_ignore_product_preload_layout']->value)]+1;
$_smarty_tpl->_assignInScope('ab__preload_settings', $_tmp_array ,false ,32);?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
}
