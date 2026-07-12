<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:28:58
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/abt__ut2_fly_menu/desktop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd6a939a60_33121776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81068c8cb09be683e1d36a1127c5549e280fc067' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/abt__ut2_fly_menu/desktop.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 4,
  ),
),false)) {
function content_682fdd6a939a60_33121776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('more','text_topmenu_more','more','text_topmenu_more'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('props', $_smarty_tpl->tpl_vars['block']->value['properties']);
$_smarty_tpl->_assignInScope('unique_part', "abt__ut2_lm_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']));?><nav class="ut2-fm <?php if ($_smarty_tpl->tpl_vars['m_item']->value['content']['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_item']->value['content']['user_class'], ENT_QUOTES, 'UTF-8');
}?>"><div class="ut2-fmbtm hidden"><?php echo $_smarty_tpl->__('abt__ut2.fly_menu.back_to_main');?>
</div><div class="ut2-fmw<?php if ($_smarty_tpl->tpl_vars['state']->value === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['show_title']->value === smarty_modifier_enum("YesNo::YES")) {?> toggle-it<?php }?>"><?php if ($_smarty_tpl->tpl_vars['menu_name']->value && $_smarty_tpl->tpl_vars['show_title']->value === smarty_modifier_enum("YesNo::YES")) {?><div class="ut2-mt<?php if ($_smarty_tpl->tpl_vars['state']->value === smarty_modifier_enum("YesNo::NO")) {?> active<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_name']->value, ENT_QUOTES, 'UTF-8');?>
 <i></i></div><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><div class="ut2-lfl <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['class'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['subitems']) {?> ut2-lfl_inclusive<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__icon']) {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__icon'],'class'=>"ut2-lfl-icon",'image_width'=>32,'height'=>$_smarty_tpl->tpl_vars['image_data']->value['height'],'no_ids'=>true,'lazy_load'=>false), 0, true);
}?><p class="ut2-lfl__head"><a href="<?php if (trim($_smarty_tpl->tpl_vars['item']->value['href'])) {
echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item']->value['href']), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"><span class="ut2-lfl__head__t"><span class="ut2-lfl__head__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['item'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span><?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__desc']) {?><span class="ut2-lfl__head__d"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__desc'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></p><?php if ($_smarty_tpl->tpl_vars['item']->value['subitems']) {?><i></i><div class="ut2-slw<?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text_position'] !== "bottom") {?> ut2-slw__right-panel<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_trim($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text']) && $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO")) {?><div class="ut2-slw__html"><?php }
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "children", null, null);
$_smarty_tpl->_assignInScope('max_elements_for_second_level', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['dropdown_second_level_elements'] ?? null)===null||$tmp==='' ? 30 ?? null : $tmp));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['subitems'], 'subitem');
$_smarty_tpl->tpl_vars['subitem']->iteration = 0;
$_smarty_tpl->tpl_vars['subitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subitem']->value) {
$_smarty_tpl->tpl_vars['subitem']->do_else = false;
$_smarty_tpl->tpl_vars['subitem']->iteration++;
$__foreach_subitem_25_saved = $_smarty_tpl->tpl_vars['subitem'];
?><div class="ut2-lsl<?php if ($_smarty_tpl->tpl_vars['subitem']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text'] && $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text_position'] !== "bottom") {?> with-pic<?php }
if (smarty_modifier_count($_smarty_tpl->tpl_vars['subitem']->value['subitems']) > $_smarty_tpl->tpl_vars['props']->value['abt__no_hidden_elements_third_level_view']) {?> ut2-lsl__more<?php }
if ($_smarty_tpl->tpl_vars['subitem']->iteration > $_smarty_tpl->tpl_vars['max_elements_for_second_level']->value) {?> ut2-lsl__show_more<?php }?>"><p<?php if ($_smarty_tpl->tpl_vars['subitem']->value['active']) {?> class="ut2-fm-active-item"<?php }?>><a href="<?php if (trim($_smarty_tpl->tpl_vars['subitem']->value['href'])) {
echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['subitem']->value['href']), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"><?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__icon']) {?><span class="img"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__icon'],'class'=>"ut2-lfl-icon",'width'=>$_smarty_tpl->tpl_vars['image_data']->value['width'],'height'=>$_smarty_tpl->tpl_vars['image_data']->value['height'],'no_ids'=>true,'lazy_load'=>false), 0, true);
?></span><?php }?><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['item'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span></a></p><?php if ($_smarty_tpl->tpl_vars['subitem']->value['subitems']) {?><div class="ut2-tlw"><?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['subitem']->value['subitems']) > $_smarty_tpl->tpl_vars['props']->value['abt__no_hidden_elements_third_level_view']) {?><a href="<?php if ((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_view_more_btn_behavior'] ?? null)===null||$tmp==='' ? 'view_items' ?? null : $tmp) === 'view_items') {?>javascript:void(0);" onclick="$(this).parent().find('a').removeClass('hidden');$(this).addClass('hidden');<?php } else {
echo htmlspecialchars((string) (($tmp = fn_url($_smarty_tpl->tpl_vars['subitem']->value['href']) ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow<?php }?>" class="ut2-lsl__more-link" title=""><span><?php echo $_smarty_tpl->__("more");?>
</span></a><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subitem']->value['subitems'], 'sub_subitem');
$_smarty_tpl->tpl_vars['sub_subitem']->iteration = 0;
$_smarty_tpl->tpl_vars['sub_subitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_subitem']->value) {
$_smarty_tpl->tpl_vars['sub_subitem']->do_else = false;
$_smarty_tpl->tpl_vars['sub_subitem']->iteration++;
$__foreach_sub_subitem_26_saved = $_smarty_tpl->tpl_vars['sub_subitem'];
?><a href="<?php if (trim($_smarty_tpl->tpl_vars['sub_subitem']->value['href'])) {
echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['sub_subitem']->value['href']), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>" class="<?php if ($_smarty_tpl->tpl_vars['sub_subitem']->value['class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['sub_subitem']->value['active']) {?> ut2-fm-active-item<?php }
if ($_smarty_tpl->tpl_vars['sub_subitem']->iteration > $_smarty_tpl->tpl_vars['block']->value['properties']['abt__no_hidden_elements_third_level_view']) {?> hidden<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['item'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a><?php
$_smarty_tpl->tpl_vars['sub_subitem'] = $__foreach_sub_subitem_26_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?></div><?php if ($_smarty_tpl->tpl_vars['item']->value['show_more'] && trim($_smarty_tpl->tpl_vars['item']->value['href']) && $_smarty_tpl->tpl_vars['subitem']->iteration == $_smarty_tpl->tpl_vars['max_elements_for_second_level']->value) {?><div class="ut2-lsl"><div class="ty-menu__submenu-alt-link"><a class="ty-btn-text" href="<?php if (trim($_smarty_tpl->tpl_vars['item']->value['href'])) {
echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item']->value['href']), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>" title=""><?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item']->value['item']));?>
</a></div></div><?php }
$_smarty_tpl->tpl_vars['subitem'] = $__foreach_subitem_25_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'children');
if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_trim($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text']) && $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO")) {?></div><div class="ut2-slw__html-item<?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?> bottom<?php } else { ?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');
}?> hidden-phone"><?php echo $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text'];?>
</div><?php }?></div><?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></nav><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/abt__ut2_fly_menu/desktop.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/blocks/abt__ut2_fly_menu/desktop.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('props', $_smarty_tpl->tpl_vars['block']->value['properties']);
$_smarty_tpl->_assignInScope('unique_part', "abt__ut2_lm_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']));?><nav class="ut2-fm <?php if ($_smarty_tpl->tpl_vars['m_item']->value['content']['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_item']->value['content']['user_class'], ENT_QUOTES, 'UTF-8');
}?>"><div class="ut2-fmbtm hidden"><?php echo $_smarty_tpl->__('abt__ut2.fly_menu.back_to_main');?>
</div><div class="ut2-fmw<?php if ($_smarty_tpl->tpl_vars['state']->value === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['show_title']->value === smarty_modifier_enum("YesNo::YES")) {?> toggle-it<?php }?>"><?php if ($_smarty_tpl->tpl_vars['menu_name']->value && $_smarty_tpl->tpl_vars['show_title']->value === smarty_modifier_enum("YesNo::YES")) {?><div class="ut2-mt<?php if ($_smarty_tpl->tpl_vars['state']->value === smarty_modifier_enum("YesNo::NO")) {?> active<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_name']->value, ENT_QUOTES, 'UTF-8');?>
 <i></i></div><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><div class="ut2-lfl <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['class'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['subitems']) {?> ut2-lfl_inclusive<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__icon']) {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__icon'],'class'=>"ut2-lfl-icon",'image_width'=>32,'height'=>$_smarty_tpl->tpl_vars['image_data']->value['height'],'no_ids'=>true,'lazy_load'=>false), 0, true);
}?><p class="ut2-lfl__head"><a href="<?php if (trim($_smarty_tpl->tpl_vars['item']->value['href'])) {
echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item']->value['href']), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"><span class="ut2-lfl__head__t"><span class="ut2-lfl__head__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['item'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span><?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__desc']) {?><span class="ut2-lfl__head__d"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__desc'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></p><?php if ($_smarty_tpl->tpl_vars['item']->value['subitems']) {?><i></i><div class="ut2-slw<?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text_position'] !== "bottom") {?> ut2-slw__right-panel<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_trim($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text']) && $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO")) {?><div class="ut2-slw__html"><?php }
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "children", null, null);
$_smarty_tpl->_assignInScope('max_elements_for_second_level', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['dropdown_second_level_elements'] ?? null)===null||$tmp==='' ? 30 ?? null : $tmp));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['subitems'], 'subitem');
$_smarty_tpl->tpl_vars['subitem']->iteration = 0;
$_smarty_tpl->tpl_vars['subitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subitem']->value) {
$_smarty_tpl->tpl_vars['subitem']->do_else = false;
$_smarty_tpl->tpl_vars['subitem']->iteration++;
$__foreach_subitem_28_saved = $_smarty_tpl->tpl_vars['subitem'];
?><div class="ut2-lsl<?php if ($_smarty_tpl->tpl_vars['subitem']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text'] && $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text_position'] !== "bottom") {?> with-pic<?php }
if (smarty_modifier_count($_smarty_tpl->tpl_vars['subitem']->value['subitems']) > $_smarty_tpl->tpl_vars['props']->value['abt__no_hidden_elements_third_level_view']) {?> ut2-lsl__more<?php }
if ($_smarty_tpl->tpl_vars['subitem']->iteration > $_smarty_tpl->tpl_vars['max_elements_for_second_level']->value) {?> ut2-lsl__show_more<?php }?>"><p<?php if ($_smarty_tpl->tpl_vars['subitem']->value['active']) {?> class="ut2-fm-active-item"<?php }?>><a href="<?php if (trim($_smarty_tpl->tpl_vars['subitem']->value['href'])) {
echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['subitem']->value['href']), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"><?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__icon']) {?><span class="img"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__icon'],'class'=>"ut2-lfl-icon",'width'=>$_smarty_tpl->tpl_vars['image_data']->value['width'],'height'=>$_smarty_tpl->tpl_vars['image_data']->value['height'],'no_ids'=>true,'lazy_load'=>false), 0, true);
?></span><?php }?><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['item'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span></a></p><?php if ($_smarty_tpl->tpl_vars['subitem']->value['subitems']) {?><div class="ut2-tlw"><?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['subitem']->value['subitems']) > $_smarty_tpl->tpl_vars['props']->value['abt__no_hidden_elements_third_level_view']) {?><a href="<?php if ((($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_view_more_btn_behavior'] ?? null)===null||$tmp==='' ? 'view_items' ?? null : $tmp) === 'view_items') {?>javascript:void(0);" onclick="$(this).parent().find('a').removeClass('hidden');$(this).addClass('hidden');<?php } else {
echo htmlspecialchars((string) (($tmp = fn_url($_smarty_tpl->tpl_vars['subitem']->value['href']) ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow<?php }?>" class="ut2-lsl__more-link" title=""><span><?php echo $_smarty_tpl->__("more");?>
</span></a><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subitem']->value['subitems'], 'sub_subitem');
$_smarty_tpl->tpl_vars['sub_subitem']->iteration = 0;
$_smarty_tpl->tpl_vars['sub_subitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_subitem']->value) {
$_smarty_tpl->tpl_vars['sub_subitem']->do_else = false;
$_smarty_tpl->tpl_vars['sub_subitem']->iteration++;
$__foreach_sub_subitem_29_saved = $_smarty_tpl->tpl_vars['sub_subitem'];
?><a href="<?php if (trim($_smarty_tpl->tpl_vars['sub_subitem']->value['href'])) {
echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['sub_subitem']->value['href']), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>" class="<?php if ($_smarty_tpl->tpl_vars['sub_subitem']->value['class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['sub_subitem']->value['active']) {?> ut2-fm-active-item<?php }
if ($_smarty_tpl->tpl_vars['sub_subitem']->iteration > $_smarty_tpl->tpl_vars['block']->value['properties']['abt__no_hidden_elements_third_level_view']) {?> hidden<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['item'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a><?php
$_smarty_tpl->tpl_vars['sub_subitem'] = $__foreach_sub_subitem_29_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?></div><?php if ($_smarty_tpl->tpl_vars['item']->value['show_more'] && trim($_smarty_tpl->tpl_vars['item']->value['href']) && $_smarty_tpl->tpl_vars['subitem']->iteration == $_smarty_tpl->tpl_vars['max_elements_for_second_level']->value) {?><div class="ut2-lsl"><div class="ty-menu__submenu-alt-link"><a class="ty-btn-text" href="<?php if (trim($_smarty_tpl->tpl_vars['item']->value['href'])) {
echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item']->value['href']), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>" title=""><?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item']->value['item']));?>
</a></div></div><?php }
$_smarty_tpl->tpl_vars['subitem'] = $__foreach_subitem_28_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'children');
if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_trim($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text']) && $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::NO")) {?></div><div class="ut2-slw__html-item<?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?> bottom<?php } else { ?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');
}?> hidden-phone"><?php echo $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text'];?>
</div><?php }?></div><?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></nav><?php }
}
}
