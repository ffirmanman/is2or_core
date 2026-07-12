<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:29:51
  from '/srv/projects/is2or.com/public_html/design/backend/templates/common/settings_section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345ebfd172a4_34431439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '908c3ef2e70de63e944435caebca85e272c016ab' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/common/settings_section.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/settings_fields.tpl' => 1,
  ),
),false)) {
function content_68345ebfd172a4_34431439 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'name', 'fe_data', array (
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fe_data']->value['iteration']++;
?>
    <?php $_smarty_tpl->_assignInScope('parent_item', array());?>
    <?php $_smarty_tpl->_assignInScope('parent_item_html_id', '');?>

    <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id'] && $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->value['parent_id']]) {?>
        <?php $_smarty_tpl->_assignInScope('parent_item', $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item']->value['parent_id']]);?>
        <?php $_smarty_tpl->_assignInScope('is_parent_global', (isset($_smarty_tpl->tpl_vars['parent_item']->value['global_data'])) && $_smarty_tpl->tpl_vars['parent_item']->value['global_data']['value'] !== '');?>
        <?php ob_start();
if (($_smarty_tpl->tpl_vars['is_parent_global']->value)) {
echo (string)$_smarty_tpl->tpl_vars['parent_item']->value['global_data']['name'];
echo "_";
echo (string)$_smarty_tpl->tpl_vars['parent_item']->value['global_data']['object_id'];
} else {
echo (string)$_smarty_tpl->tpl_vars['parent_item']->value['name'];
echo "_";
echo (string)$_smarty_tpl->tpl_vars['parent_item']->value['object_id'];
}
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('parent_item_html_id', strtolower(((string)$_smarty_tpl->tpl_vars['html_id_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['section_name']->value)."_".$_prefixVariable1));?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('input_html_name', ((string)$_smarty_tpl->tpl_vars['html_name']->value)."[".((string)$_smarty_tpl->tpl_vars['item']->value['object_id'])."]");?>
    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['global_setting']))) {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['global_html_name'] = ((string)$_smarty_tpl->tpl_vars['html_name']->value)."[".((string)$_smarty_tpl->tpl_vars['item']->value['global_setting']['object_id'])."]";
$_smarty_tpl->_assignInScope('item', $_tmp_array);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['individual_html_name'] = $_smarty_tpl->tpl_vars['input_html_name']->value;
$_smarty_tpl->_assignInScope('item', $_tmp_array);?>

        <?php if ($_smarty_tpl->tpl_vars['item']->value['has_global_value']) {?>
            <?php $_smarty_tpl->_assignInScope('input_html_name', $_smarty_tpl->tpl_vars['item']->value['global_html_name']);?>
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/settings_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['item']->value,'section_name'=>$_smarty_tpl->tpl_vars['section_name']->value,'html_id'=>strtolower(((string)$_smarty_tpl->tpl_vars['html_id_prefix']->value)."_".((string)$_smarty_tpl->tpl_vars['section_name']->value)."_".((string)$_smarty_tpl->tpl_vars['item']->value['name'])."_".((string)$_smarty_tpl->tpl_vars['item']->value['object_id'])),'html_name'=>$_smarty_tpl->tpl_vars['input_html_name']->value,'index'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_fe_data']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fe_data']->value['iteration'] : null),'total'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_fe_data']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fe_data']->value['total'] : null),'class'=>((string)$_smarty_tpl->tpl_vars['class']->value)." ".((string)$_smarty_tpl->tpl_vars['item']->value['class']),'parent_item'=>$_smarty_tpl->tpl_vars['parent_item']->value,'parent_item_html_id'=>$_smarty_tpl->tpl_vars['parent_item_html_id']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
