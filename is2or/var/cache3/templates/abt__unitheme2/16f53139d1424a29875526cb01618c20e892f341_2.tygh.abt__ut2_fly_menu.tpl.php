<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:28:58
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/abt__ut2_fly_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd6a869fb9_40182562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16f53139d1424a29875526cb01618c20e892f341' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/abt__ut2_fly_menu.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/abt__unitheme2/blocks/abt__ut2_fly_menu/".((string)$_smarty_tpl->tpl_vars[\'settings\']->value[\'ab__device\']).".tpl' => 2,
  ),
),false)) {
function content_682fdd6a869fb9_40182562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.render_block.php','function'=>'smarty_function_render_block',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('menu_type', constant("Tygh\Addons\Abt_unitheme2\FMRepository::ITEM_TYPE_MENU"));
$_smarty_tpl->_assignInScope('block_type', constant("Tygh\Addons\Abt_unitheme2\FMRepository::ITEM_TYPE_BLOCK"));
$_smarty_tpl->_assignInScope('delimiter_type', constant("Tygh\Addons\Abt_unitheme2\FMRepository::ITEM_TYPE_DELIMITER"));
if ($_smarty_tpl->tpl_vars['items']->value) {?><div id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ut2-sp-n cm-combination cm-abt--ut2-toggle-scroll <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['open_on_sticky_panel_button'] === smarty_modifier_enum("YesNo::YES")) {?> cm-external-triggered<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_show_title'] === smarty_modifier_enum("YesNo::YES")) {?> ut2-sw-title<?php }?>"><span><i class="ut2-icon-outline-menu"></i><?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_show_title'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== 'mobile') {?><span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span><?php }?></span></div><div id="dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ut2-sw-b hidden cm-external-click" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"></div><div class="ut2-sw-w<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value == "RIGHT") {?> swipe-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == "LEFT") {?> swipe-left<?php }?>" style="display: none;"><?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_show_title'] === smarty_modifier_enum("YesNo::YES")) {?><div class="ut2-st"><?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title');
}?><div class="ut2-sp-f cm-combination cm-abt--ut2-toggle-scroll" id="off_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" style="display:none;"><i class="ut2-icon-baseline-close"></i></div></div><?php }?><div class="ut2-scroll"><div class="ut2-sw"><div class="ut2-sp-f cm-combination cm-abt--ut2-toggle-scroll" id="off_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" style="display:none;"><i class="ut2-icon-baseline-close"></i></div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'm_item');
$_smarty_tpl->tpl_vars['m_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m_item']->value) {
$_smarty_tpl->tpl_vars['m_item']->do_else = false;
if ($_smarty_tpl->tpl_vars['m_item']->value['type'] == $_smarty_tpl->tpl_vars['menu_type']->value) {
$_smarty_tpl->_subTemplateRender("tygh:addons/abt__unitheme2/blocks/abt__ut2_fly_menu/".((string)$_smarty_tpl->tpl_vars['settings']->value['ab__device']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_class'=>$_smarty_tpl->tpl_vars['m_item']->value['user_class'],'menu_name'=>$_smarty_tpl->tpl_vars['m_item']->value['menu_name'],'items'=>$_smarty_tpl->tpl_vars['m_item']->value['menu_items'],'state'=>$_smarty_tpl->tpl_vars['m_item']->value['state'],'show_title'=>$_smarty_tpl->tpl_vars['m_item']->value['show_title']), 0, true);
} elseif ($_smarty_tpl->tpl_vars['m_item']->value['type'] == $_smarty_tpl->tpl_vars['block_type']->value) {?><div class="ut2-rb<?php if ($_smarty_tpl->tpl_vars['m_item']->value['content']['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_item']->value['content']['user_class'], ENT_QUOTES, 'UTF-8');
}?>"><?php echo smarty_function_render_block(array('block_id'=>$_smarty_tpl->tpl_vars['m_item']->value['block_id']),$_smarty_tpl);?>
</div><?php } elseif ($_smarty_tpl->tpl_vars['m_item']->value['type'] == $_smarty_tpl->tpl_vars['delimiter_type']->value) {?><div class="ut2-fm-delimiter<?php if ($_smarty_tpl->tpl_vars['m_item']->value['content']['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_item']->value['content']['user_class'], ENT_QUOTES, 'UTF-8');
}?>"></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/abt__ut2_fly_menu.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/blocks/abt__ut2_fly_menu.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('menu_type', constant("Tygh\Addons\Abt_unitheme2\FMRepository::ITEM_TYPE_MENU"));
$_smarty_tpl->_assignInScope('block_type', constant("Tygh\Addons\Abt_unitheme2\FMRepository::ITEM_TYPE_BLOCK"));
$_smarty_tpl->_assignInScope('delimiter_type', constant("Tygh\Addons\Abt_unitheme2\FMRepository::ITEM_TYPE_DELIMITER"));
if ($_smarty_tpl->tpl_vars['items']->value) {?><div id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ut2-sp-n cm-combination cm-abt--ut2-toggle-scroll <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['open_on_sticky_panel_button'] === smarty_modifier_enum("YesNo::YES")) {?> cm-external-triggered<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_show_title'] === smarty_modifier_enum("YesNo::YES")) {?> ut2-sw-title<?php }?>"><span><i class="ut2-icon-outline-menu"></i><?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_show_title'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== 'mobile') {?><span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span><?php }?></span></div><div id="dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ut2-sw-b hidden cm-external-click" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"></div><div class="ut2-sw-w<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value == "RIGHT") {?> swipe-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == "LEFT") {?> swipe-left<?php }?>" style="display: none;"><?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_show_title'] === smarty_modifier_enum("YesNo::YES")) {?><div class="ut2-st"><?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title');
}?><div class="ut2-sp-f cm-combination cm-abt--ut2-toggle-scroll" id="off_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" style="display:none;"><i class="ut2-icon-baseline-close"></i></div></div><?php }?><div class="ut2-scroll"><div class="ut2-sw"><div class="ut2-sp-f cm-combination cm-abt--ut2-toggle-scroll" id="off_dropdown_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" style="display:none;"><i class="ut2-icon-baseline-close"></i></div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'm_item');
$_smarty_tpl->tpl_vars['m_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m_item']->value) {
$_smarty_tpl->tpl_vars['m_item']->do_else = false;
if ($_smarty_tpl->tpl_vars['m_item']->value['type'] == $_smarty_tpl->tpl_vars['menu_type']->value) {
$_smarty_tpl->_subTemplateRender("tygh:addons/abt__unitheme2/blocks/abt__ut2_fly_menu/".((string)$_smarty_tpl->tpl_vars['settings']->value['ab__device']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_class'=>$_smarty_tpl->tpl_vars['m_item']->value['user_class'],'menu_name'=>$_smarty_tpl->tpl_vars['m_item']->value['menu_name'],'items'=>$_smarty_tpl->tpl_vars['m_item']->value['menu_items'],'state'=>$_smarty_tpl->tpl_vars['m_item']->value['state'],'show_title'=>$_smarty_tpl->tpl_vars['m_item']->value['show_title']), 0, true);
} elseif ($_smarty_tpl->tpl_vars['m_item']->value['type'] == $_smarty_tpl->tpl_vars['block_type']->value) {?><div class="ut2-rb<?php if ($_smarty_tpl->tpl_vars['m_item']->value['content']['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_item']->value['content']['user_class'], ENT_QUOTES, 'UTF-8');
}?>"><?php echo smarty_function_render_block(array('block_id'=>$_smarty_tpl->tpl_vars['m_item']->value['block_id']),$_smarty_tpl);?>
</div><?php } elseif ($_smarty_tpl->tpl_vars['m_item']->value['type'] == $_smarty_tpl->tpl_vars['delimiter_type']->value) {?><div class="ut2-fm-delimiter<?php if ($_smarty_tpl->tpl_vars['m_item']->value['content']['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_item']->value['content']['user_class'], ENT_QUOTES, 'UTF-8');
}?>"></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php }
}
}
}
