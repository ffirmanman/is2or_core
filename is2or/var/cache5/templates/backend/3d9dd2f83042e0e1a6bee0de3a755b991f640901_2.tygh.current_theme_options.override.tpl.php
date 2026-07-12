<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:20:20
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/abt__unitheme2/hooks/themes/current_theme_options.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc143adec1_76171056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d9dd2f83042e0e1a6bee0de3a755b991f640901' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/abt__unitheme2/hooks/themes/current_theme_options.override.tpl',
      1 => 1736835023,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_popup.tpl' => 1,
    'tygh:buttons/button.tpl' => 4,
  ),
),false)) {
function content_6835bc143adec1_76171056 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('theme_styles_and_layouts','layout','theme_editor.style','none','theme_no_styles_text','theme_editor','theme_editor_not_supported','theme_editor','edit_layout_on_site','edit_content_on_site'));
if ($_smarty_tpl->tpl_vars['theme']->value['theme_name'] == 'abt__unitheme2') {?>
<span class="muted"><?php echo $_smarty_tpl->__("theme_styles_and_layouts");?>
</span>
<div class="table-wrapper">
<table class="table table-middle table--relative">
<thead>
<tr>
<th><?php echo $_smarty_tpl->__("layout");?>
</th>
<th><?php echo $_smarty_tpl->__("theme_editor.style");?>
</th>
<th> </th>
<th> </th>
</tr>
</thead>
<tbody>
<?php $_smarty_tpl->_assignInScope('has_styles', !!$_smarty_tpl->tpl_vars['theme']->value['styles']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['theme']->value['layouts'], 'available_layout');
$_smarty_tpl->tpl_vars['available_layout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['available_layout']->value) {
$_smarty_tpl->tpl_vars['available_layout']->do_else = false;
?>
<tr>
<td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['available_layout']->value['name'], ENT_QUOTES, 'UTF-8');?>
</td>
<td>
<?php $_smarty_tpl->_assignInScope('styles_descr', array());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_themes']->value['current']['styles'], 'style');
$_smarty_tpl->tpl_vars['style']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->do_else = false;
$_tmp_array = isset($_smarty_tpl->tpl_vars['styles_descr']) ? $_smarty_tpl->tpl_vars['styles_descr']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['style']->value['style_id']] = $_smarty_tpl->tpl_vars['style']->value['name'];
$_smarty_tpl->_assignInScope('styles_descr', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['has_styles']->value) {
$_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['available_layout']->value['layout_id'],'status'=>$_smarty_tpl->tpl_vars['available_layout']->value['style_id'],'items_status'=>$_smarty_tpl->tpl_vars['styles_descr']->value,'update_controller'=>"themes.styles",'status_target_id'=>"theme_description_container,themes_list",'statuses'=>$_smarty_tpl->tpl_vars['available_themes']->value['current']['styles'],'btn_meta'=>mb_strtolower("btn-text o-status-".((string)$_smarty_tpl->tpl_vars['o']->value['status']), 'UTF-8'),'default_status_text'=>$_smarty_tpl->__("none")), 0, true);
} else { ?>
<span class="muted"><?php echo $_smarty_tpl->__("theme_no_styles_text");?>
</span>
<?php }?>
</td>
<td>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
<li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__('abt__ut2.settings'),'href'=>"abt__ut2.settings"), true);?>
</li>
<li><?php ob_start();
echo $_smarty_tpl->__('abt__ut2.less_settings');
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_prefixVariable4." ".((string)$_smarty_tpl->tpl_vars['available_layout']->value['style_id']),'href'=>"abt__ut2.less_settings?style=".((string)$_smarty_tpl->tpl_vars['available_layout']->value['style_id']).".less"), true);?>
</li>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

</td>
<td class="right btn-toolbar btn-toolbar--theme-editor">
<?php if ($_smarty_tpl->tpl_vars['available_layout']->value['is_default']) {
$_smarty_tpl->_assignInScope('but_meta', "btn-small btn-primary cm-post");
} else {
$_smarty_tpl->_assignInScope('but_meta', "btn-small cm-post");
}
if ($_smarty_tpl->tpl_vars['has_styles']->value) {
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=theme_editor&status=enable&s_layout=".((string)$_smarty_tpl->tpl_vars['available_layout']->value['layout_id'])."&s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id),'but_text'=>$_smarty_tpl->__("theme_editor"),'but_role'=>"action",'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_target'=>"_blank"), 0, true);
} else {
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("theme_editor_not_supported"),'but_text'=>$_smarty_tpl->__("theme_editor"),'but_role'=>"btn",'but_meta'=>"btn btn-small disabled cm-tooltip"), 0, true);
}
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=block_manager&status=enable&s_layout=".((string)$_smarty_tpl->tpl_vars['available_layout']->value['layout_id'])."&s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id),'but_text'=>$_smarty_tpl->__("edit_layout_on_site"),'but_role'=>"action",'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_target'=>"_blank"), 0, true);
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=live_editor&status=enable&s_layout=".((string)$_smarty_tpl->tpl_vars['available_layout']->value['layout_id'])."&s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id),'but_text'=>$_smarty_tpl->__("edit_content_on_site"),'but_role'=>"action",'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_target'=>"_blank"), 0, true);
?>
</td>
<tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
</div>
<?php }
}
}
