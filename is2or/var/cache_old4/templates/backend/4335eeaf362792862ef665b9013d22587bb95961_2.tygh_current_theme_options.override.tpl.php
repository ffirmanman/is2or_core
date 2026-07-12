<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:11
  from 'tygh:addons/abt__unitheme2/hooks/themes/current_theme_options.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5523dca006_40258892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4335eeaf362792862ef665b9013d22587bb95961' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/themes/current_theme_options.override.tpl',
      1 => 1767831040,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_popup.tpl' => 1,
    'tygh:buttons/button.tpl' => 4,
  ),
))) {
function content_69fb5523dca006_40258892 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/abt__unitheme2/hooks/themes';
\Tygh\Languages\Helper::preloadLangVars(array('theme_styles_and_layouts','layout','theme_editor.style','none','theme_no_styles_text','theme_editor','theme_editor_not_supported','theme_editor','edit_layout_on_site','edit_content_on_site'));
if ($_smarty_tpl->getValue('theme')['theme_name'] == 'abt__unitheme2') {?>
<span class="muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_styles_and_layouts", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
<div class="table-wrapper">
<table class="table table-middle table--relative">
<thead>
<tr>
<th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("layout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
<th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_editor.style", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
<th> </th>
<th> </th>
</tr>
</thead>
<tbody>
<?php $_smarty_tpl->assign('has_styles', !!$_smarty_tpl->getValue('theme')['styles'], false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('theme')['layouts'], 'available_layout');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('available_layout')->value) {
$foreach9DoElse = false;
?>
<tr>
<td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('available_layout')['name']), ENT_QUOTES, 'UTF-8');?>
</td>
<td>
<?php $_smarty_tpl->assign('styles_descr', array(), false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('available_themes')['current']['styles'], 'style');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('style')->value) {
$foreach10DoElse = false;
$_tmp_array = $_smarty_tpl->getValue('styles_descr') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('style')['style_id']] = $_smarty_tpl->getValue('style')['name'];
$_smarty_tpl->assign('styles_descr', $_tmp_array, false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getValue('has_styles')) {
$_smarty_tpl->renderSubTemplate("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->getValue('available_layout')['layout_id'],'status'=>$_smarty_tpl->getValue('available_layout')['style_id'],'items_status'=>$_smarty_tpl->getValue('styles_descr'),'update_controller'=>"themes.styles",'status_target_id'=>"theme_description_container,themes_list",'statuses'=>$_smarty_tpl->getValue('available_themes')['current']['styles'],'btn_meta'=>mb_strtolower((string) "btn-text o-status-".((string)$_smarty_tpl->getValue('o')['status']), 'UTF-8'),'default_status_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("none", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
} else { ?>
<span class="muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_no_styles_text", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
<?php }?>
</td>
<td>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tools_list", null, null);?>
<li><?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.settings', [], $_smarty_tpl->getSmarty()->getLanguage()),'href'=>"abt__ut2.settings"), true);?>
</li>
<li><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.less_settings', [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_prefixVariable4." ".((string)$_smarty_tpl->getValue('available_layout')['style_id']),'href'=>"abt__ut2.less_settings?style=".((string)$_smarty_tpl->getValue('available_layout')['style_id']).".less"), true);?>
</li>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tools_list')), true);?>

</td>
<td class="right btn-toolbar btn-toolbar--theme-editor">
<?php if ($_smarty_tpl->getValue('available_layout')['is_default']) {
$_smarty_tpl->assign('but_meta', "btn-small btn-primary cm-post", false, NULL);
} else {
$_smarty_tpl->assign('but_meta', "btn-small cm-post", false, NULL);
}
if ($_smarty_tpl->getValue('has_styles')) {
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=theme_editor&status=enable&s_layout=".((string)$_smarty_tpl->getValue('available_layout')['layout_id'])."&s_storefront=".((string)$_smarty_tpl->getValue('storefront')->storefront_id),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_editor", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_meta'=>$_smarty_tpl->getValue('but_meta'),'but_target'=>"_blank"), (int) 0, $_smarty_current_dir);
} else {
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_editor_not_supported", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("theme_editor", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"btn",'but_meta'=>"btn btn-small disabled cm-tooltip"), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=block_manager&status=enable&s_layout=".((string)$_smarty_tpl->getValue('available_layout')['layout_id'])."&s_storefront=".((string)$_smarty_tpl->getValue('storefront')->storefront_id),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("edit_layout_on_site", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_meta'=>$_smarty_tpl->getValue('but_meta'),'but_target'=>"_blank"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=live_editor&status=enable&s_layout=".((string)$_smarty_tpl->getValue('available_layout')['layout_id'])."&s_storefront=".((string)$_smarty_tpl->getValue('storefront')->storefront_id),'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("edit_content_on_site", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_meta'=>$_smarty_tpl->getValue('but_meta'),'but_target'=>"_blank"), (int) 0, $_smarty_current_dir);
?>
</td>
<tr>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</tbody>
</table>
</div>
<?php }
}
}
