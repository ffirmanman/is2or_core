<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:15
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/abt__ut2_fly_menu/mobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571b265bd6_90165758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f72d76c6468bc29115de4533a8b8c5d3a294f0bb' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/abt__ut2_fly_menu/mobile.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_6834571b265bd6_90165758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('view_details','abt__ut2.fly_menu.back_to_main','view_details','abt__ut2.fly_menu.back_to','view_details','abt__ut2.fly_menu.back_to_main','view_details','abt__ut2.fly_menu.back_to'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('props', $_smarty_tpl->tpl_vars['block']->value['properties']);?>
<nav class="ut2-fm<?php if ($_smarty_tpl->tpl_vars['m_item']->value['content']['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_item']->value['content']['user_class'], ENT_QUOTES, 'UTF-8');
}?>"><div class="ut2-fmw<?php if ($_smarty_tpl->tpl_vars['user_class']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_class']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['state']->value === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['show_title']->value === smarty_modifier_enum("YesNo::YES")) {?> toggle-it<?php }?>"><?php if ($_smarty_tpl->tpl_vars['menu_name']->value && $_smarty_tpl->tpl_vars['show_title']->value === smarty_modifier_enum("YesNo::YES")) {?><div class="ut2-mt<?php if ($_smarty_tpl->tpl_vars['state']->value === smarty_modifier_enum("YesNo::NO")) {?> active<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_name']->value, ENT_QUOTES, 'UTF-8');?>
<i></i></div><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><div class="ut2-lfl <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['class'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['active']) {?> ut2-fm-active-item<?php }
if ($_smarty_tpl->tpl_vars['item']->value['subitems']) {?> ut2-lfl_inclusive<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__icon']) {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__icon'],'class'=>"ut2-lfl-icon",'image_width'=>32,'height'=>$_smarty_tpl->tpl_vars['image_data']->value['height'],'no_ids'=>true,'lazy_load'=>false), 0, true);
}
if (!$_smarty_tpl->tpl_vars['item']->value['subitems'] && $_smarty_tpl->tpl_vars['item']->value['href']) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php }?><p><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['item'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></strong><?php if ($_smarty_tpl->tpl_vars['item']->value['subitems'] && $_smarty_tpl->tpl_vars['item']->value['href']) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item']->value['href']), ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-float-right"><?php echo $_smarty_tpl->__("view_details");?>
</a><?php }
if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__desc']) {?><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__desc'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></p><?php if (!$_smarty_tpl->tpl_vars['item']->value['subitems'] && $_smarty_tpl->tpl_vars['item']->value['href']) {?></a><?php }
if ($_smarty_tpl->tpl_vars['item']->value['subitems']) {?><i id="fm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
" class="ut2-fm__link-back"><span><?php echo $_smarty_tpl->__("abt__ut2.fly_menu.back_to_main");?>
</span></i><div class="ut2-slw"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['subitems'], 'subitem');
$_smarty_tpl->tpl_vars['subitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subitem']->key => $_smarty_tpl->tpl_vars['subitem']->value) {
$_smarty_tpl->tpl_vars['subitem']->do_else = false;
$__foreach_subitem_1_saved = $_smarty_tpl->tpl_vars['subitem'];
?><div class="ut2-lsl<?php if ($_smarty_tpl->tpl_vars['subitem']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"><?php if ($_smarty_tpl->tpl_vars['subitem']->value['href'] && !$_smarty_tpl->tpl_vars['subitem']->value['subitems']) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['subitem']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php }?><p class="<?php if ($_smarty_tpl->tpl_vars['subitem']->value['active']) {?>ut2-fm-active-item<?php }?>"><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['item'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></strong><?php if ($_smarty_tpl->tpl_vars['subitem']->value['href'] && $_smarty_tpl->tpl_vars['subitem']->value['subitems']) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['subitem']->value['href']), ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-float-right"><?php echo $_smarty_tpl->__("view_details");?>
</a><?php }
if ($_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__desc']) {?><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__desc'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></p><?php if ($_smarty_tpl->tpl_vars['subitem']->value['href'] && !$_smarty_tpl->tpl_vars['subitem']->value['subitems']) {?></a><?php }
if ($_smarty_tpl->tpl_vars['subitem']->value['subitems']) {?><i id="fm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->key, ENT_QUOTES, 'UTF-8');?>
" class="ut2-fm__link-back"><span><?php echo $_smarty_tpl->__("abt__ut2.fly_menu.back_to");?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['item'], ENT_QUOTES, 'UTF-8');?>
</span></i><div class="ut2-tlw"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subitem']->value['subitems'], 'sub_subitem');
$_smarty_tpl->tpl_vars['sub_subitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_subitem']->value) {
$_smarty_tpl->tpl_vars['sub_subitem']->do_else = false;
?><p><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['sub_subitem']->value['href']), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['sub_subitem']->value['class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['sub_subitem']->value['active']) {?> ut2-fm-active-item<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['item'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></p><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?></div><?php
$_smarty_tpl->tpl_vars['subitem'] = $__foreach_subitem_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_trim($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text']) && $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__dropdown'] !== smarty_modifier_enum("YesNo::YES")) {?><div class="ut2-slw__html-item<?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?> bottom<?php } else { ?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');
}?> hidden-phone"><?php echo $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text'];?>
</div><?php }?></div></nav><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/abt__ut2_fly_menu/mobile.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/blocks/abt__ut2_fly_menu/mobile.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('props', $_smarty_tpl->tpl_vars['block']->value['properties']);?>
<nav class="ut2-fm<?php if ($_smarty_tpl->tpl_vars['m_item']->value['content']['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_item']->value['content']['user_class'], ENT_QUOTES, 'UTF-8');
}?>"><div class="ut2-fmw<?php if ($_smarty_tpl->tpl_vars['user_class']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_class']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['state']->value === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['show_title']->value === smarty_modifier_enum("YesNo::YES")) {?> toggle-it<?php }?>"><?php if ($_smarty_tpl->tpl_vars['menu_name']->value && $_smarty_tpl->tpl_vars['show_title']->value === smarty_modifier_enum("YesNo::YES")) {?><div class="ut2-mt<?php if ($_smarty_tpl->tpl_vars['state']->value === smarty_modifier_enum("YesNo::NO")) {?> active<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu_name']->value, ENT_QUOTES, 'UTF-8');?>
<i></i></div><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><div class="ut2-lfl <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['class'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['active']) {?> ut2-fm-active-item<?php }
if ($_smarty_tpl->tpl_vars['item']->value['subitems']) {?> ut2-lfl_inclusive<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__icon']) {
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__icon'],'class'=>"ut2-lfl-icon",'image_width'=>32,'height'=>$_smarty_tpl->tpl_vars['image_data']->value['height'],'no_ids'=>true,'lazy_load'=>false), 0, true);
}
if (!$_smarty_tpl->tpl_vars['item']->value['subitems'] && $_smarty_tpl->tpl_vars['item']->value['href']) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php }?><p><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['item'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></strong><?php if ($_smarty_tpl->tpl_vars['item']->value['subitems'] && $_smarty_tpl->tpl_vars['item']->value['href']) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item']->value['href']), ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-float-right"><?php echo $_smarty_tpl->__("view_details");?>
</a><?php }
if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__desc']) {?><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__desc'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></p><?php if (!$_smarty_tpl->tpl_vars['item']->value['subitems'] && $_smarty_tpl->tpl_vars['item']->value['href']) {?></a><?php }
if ($_smarty_tpl->tpl_vars['item']->value['subitems']) {?><i id="fm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
" class="ut2-fm__link-back"><span><?php echo $_smarty_tpl->__("abt__ut2.fly_menu.back_to_main");?>
</span></i><div class="ut2-slw"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['subitems'], 'subitem');
$_smarty_tpl->tpl_vars['subitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subitem']->key => $_smarty_tpl->tpl_vars['subitem']->value) {
$_smarty_tpl->tpl_vars['subitem']->do_else = false;
$__foreach_subitem_4_saved = $_smarty_tpl->tpl_vars['subitem'];
?><div class="ut2-lsl<?php if ($_smarty_tpl->tpl_vars['subitem']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"><?php if ($_smarty_tpl->tpl_vars['subitem']->value['href'] && !$_smarty_tpl->tpl_vars['subitem']->value['subitems']) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['subitem']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php }?><p class="<?php if ($_smarty_tpl->tpl_vars['subitem']->value['active']) {?>ut2-fm-active-item<?php }?>"><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['item'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></strong><?php if ($_smarty_tpl->tpl_vars['subitem']->value['href'] && $_smarty_tpl->tpl_vars['subitem']->value['subitems']) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['subitem']->value['href']), ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-float-right"><?php echo $_smarty_tpl->__("view_details");?>
</a><?php }
if ($_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__desc']) {?><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->value['abt__ut2_mwi__desc'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></p><?php if ($_smarty_tpl->tpl_vars['subitem']->value['href'] && !$_smarty_tpl->tpl_vars['subitem']->value['subitems']) {?></a><?php }
if ($_smarty_tpl->tpl_vars['subitem']->value['subitems']) {?><i id="fm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subitem']->key, ENT_QUOTES, 'UTF-8');?>
" class="ut2-fm__link-back"><span><?php echo $_smarty_tpl->__("abt__ut2.fly_menu.back_to");?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['item'], ENT_QUOTES, 'UTF-8');?>
</span></i><div class="ut2-tlw"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subitem']->value['subitems'], 'sub_subitem');
$_smarty_tpl->tpl_vars['sub_subitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_subitem']->value) {
$_smarty_tpl->tpl_vars['sub_subitem']->do_else = false;
?><p><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['sub_subitem']->value['href']), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['sub_subitem']->value['class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['sub_subitem']->value['active']) {?> ut2-fm-active-item<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['item'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sub_subitem']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></p><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?></div><?php
$_smarty_tpl->tpl_vars['subitem'] = $__foreach_subitem_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__status'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_trim($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text']) && $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__dropdown'] !== smarty_modifier_enum("YesNo::YES")) {?><div class="ut2-slw__html-item<?php if ($_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__dropdown'] === smarty_modifier_enum("YesNo::YES")) {?> bottom<?php } else { ?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');
}?> hidden-phone"><?php echo $_smarty_tpl->tpl_vars['item']->value['abt__ut2_mwi__text'];?>
</div><?php }?></div></nav><?php }
}
}
