<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:17
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__lazy_load/hooks/common/image.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f51ec811_97753917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fdb0cd03121480a84456a29410f1128b11b3c52' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__lazy_load/hooks/common/image.pre.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__lazy_load/components/disable_lazy_load.tpl' => 2,
  ),
),false)) {
function content_6835b9f51ec811_97753917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__lazy_load/components/disable_lazy_load.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (!defined("AJAX_REQUEST") && ((($tmp = $_smarty_tpl->tpl_vars['lazy_load']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp) || $_smarty_tpl->tpl_vars['ab__ll']->value['enable']) && !$_smarty_tpl->tpl_vars['diable_lazy_load']->value) {?>
    <?php $_smarty_tpl->_assignInScope('lazy_load', true ,false ,2);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["src"] = $_smarty_tpl->tpl_vars['ab__ll']->value['placeholders']->get_placeholer($_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value);
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('class', ($_smarty_tpl->tpl_vars['class']->value).(" lazyload") ,false ,2);?>

    
    <?php if ($_smarty_tpl->tpl_vars['image_additional_attrs']->value['srcset'] || $_smarty_tpl->tpl_vars['image_additional_attrs']->value["data-srcset"]) {?>
        <?php if ($_smarty_tpl->tpl_vars['image_additional_attrs']->value['srcset']) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-srcset"] = $_smarty_tpl->tpl_vars['image_additional_attrs']->value['srcset'];
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array ,false ,2);?>
        <?php }?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['srcset'] = ((string)$_smarty_tpl->tpl_vars['ab__ll']->value['placeholders']->get_placeholer($_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value,true));
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array ,false ,2);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__lazy_load/hooks/common/image.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__lazy_load/hooks/common/image.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("tygh:addons/ab__lazy_load/components/disable_lazy_load.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if (!defined("AJAX_REQUEST") && ((($tmp = $_smarty_tpl->tpl_vars['lazy_load']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp) || $_smarty_tpl->tpl_vars['ab__ll']->value['enable']) && !$_smarty_tpl->tpl_vars['diable_lazy_load']->value) {?>
    <?php $_smarty_tpl->_assignInScope('lazy_load', true ,false ,2);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["src"] = $_smarty_tpl->tpl_vars['ab__ll']->value['placeholders']->get_placeholer($_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value);
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('class', ($_smarty_tpl->tpl_vars['class']->value).(" lazyload") ,false ,2);?>

    
    <?php if ($_smarty_tpl->tpl_vars['image_additional_attrs']->value['srcset'] || $_smarty_tpl->tpl_vars['image_additional_attrs']->value["data-srcset"]) {?>
        <?php if ($_smarty_tpl->tpl_vars['image_additional_attrs']->value['srcset']) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-srcset"] = $_smarty_tpl->tpl_vars['image_additional_attrs']->value['srcset'];
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array ,false ,2);?>
        <?php }?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['srcset'] = ((string)$_smarty_tpl->tpl_vars['ab__ll']->value['placeholders']->get_placeholer($_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value,true));
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array ,false ,2);?>
    <?php }
}
}
}
}
