<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:30
  from 'tygh:addons/abt__unitheme2/blocks/abt__ut2_fly_menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94728298f4_59136815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02cd9ad8e4b305354b12c86b12379194e6d29afb' => 
    array (
      0 => 'addons/abt__unitheme2/blocks/abt__ut2_fly_menu.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/abt__unitheme2/blocks/abt__ut2_fly_menu/".((string)$_smarty_tpl->getValue(\'settings\')[\'ab__device\']).".tpl' => 2,
  ),
))) {
function content_69ad94728298f4_59136815 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('menu_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Addons\Abt_unitheme2\FMRepository::ITEM_TYPE_MENU"), false, NULL);
$_smarty_tpl->assign('block_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Addons\Abt_unitheme2\FMRepository::ITEM_TYPE_BLOCK"), false, NULL);
$_smarty_tpl->assign('delimiter_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Addons\Abt_unitheme2\FMRepository::ITEM_TYPE_DELIMITER"), false, NULL);
if ($_smarty_tpl->getValue('items')) {?><div id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" class="ut2-sp-n cm-combination <?php if ($_smarty_tpl->getValue('block')['properties']['open_on_sticky_panel_button'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> cm-external-triggered<?php }
if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_show_title'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-sw-title<?php }?>"><span><i class="ut2-icon-outline-menu"></i><?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_show_title'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== 'mobile') {?><span><?php echo $_smarty_tpl->getValue('title');?>
</span><?php }?></span></div><div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" class="ut2-sw-b hidden cm-external-click" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
"></div><div class="ut2-sw-w<?php if ($_smarty_tpl->getValue('block')['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('content_alignment') == "RIGHT") {?> swipe-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == "LEFT") {?> swipe-left<?php }?>" style="display: none;"><?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_show_title'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="ut2-st"><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title');
}?><div class="ut2-sp-f cm-combination" id="off_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" style="display:none;"><i class="ut2-icon-baseline-close"></i></div></div><?php }?><div class="ut2-scroll"><div class="ut2-sw"><div class="ut2-sp-f cm-combination" id="off_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" style="display:none;"><i class="ut2-icon-baseline-close"></i></div><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'm_item');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m_item')->value) {
$foreach16DoElse = false;
if ($_smarty_tpl->getValue('m_item')['type'] == $_smarty_tpl->getValue('menu_type')) {
$_smarty_tpl->renderSubTemplate("tygh:addons/abt__unitheme2/blocks/abt__ut2_fly_menu/".((string)$_smarty_tpl->getValue('settings')['ab__device']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_class'=>$_smarty_tpl->getValue('m_item')['user_class'],'menu_name'=>$_smarty_tpl->getValue('m_item')['menu_name'],'items'=>$_smarty_tpl->getValue('m_item')['menu_items'],'state'=>$_smarty_tpl->getValue('m_item')['state'],'show_title'=>$_smarty_tpl->getValue('m_item')['show_title']), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('m_item')['type'] == $_smarty_tpl->getValue('block_type')) {?><div class="ut2-rb<?php if ($_smarty_tpl->getValue('m_item')['content']['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('m_item')['content']['user_class']), ENT_QUOTES, 'UTF-8');
}?>"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('render_block')->handle(array('block_id'=>$_smarty_tpl->getValue('m_item')['block_id']), $_smarty_tpl);?>
</div><?php } elseif ($_smarty_tpl->getValue('m_item')['type'] == $_smarty_tpl->getValue('delimiter_type')) {?><div class="ut2-fm-delimiter<?php if ($_smarty_tpl->getValue('m_item')['content']['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('m_item')['content']['user_class']), ENT_QUOTES, 'UTF-8');
}?>"></div><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div></div></div><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/abt__ut2_fly_menu.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/blocks/abt__ut2_fly_menu.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('menu_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Addons\Abt_unitheme2\FMRepository::ITEM_TYPE_MENU"), false, NULL);
$_smarty_tpl->assign('block_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Addons\Abt_unitheme2\FMRepository::ITEM_TYPE_BLOCK"), false, NULL);
$_smarty_tpl->assign('delimiter_type', $_smarty_tpl->getSmarty()->getModifierCallback('constant')("Tygh\Addons\Abt_unitheme2\FMRepository::ITEM_TYPE_DELIMITER"), false, NULL);
if ($_smarty_tpl->getValue('items')) {?><div id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" class="ut2-sp-n cm-combination <?php if ($_smarty_tpl->getValue('block')['properties']['open_on_sticky_panel_button'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> cm-external-triggered<?php }
if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_show_title'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-sw-title<?php }?>"><span><i class="ut2-icon-outline-menu"></i><?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_show_title'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('settings')['ab__device'] !== 'mobile') {?><span><?php echo $_smarty_tpl->getValue('title');?>
</span><?php }?></span></div><div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" class="ut2-sw-b hidden cm-external-click" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
"></div><div class="ut2-sw-w<?php if ($_smarty_tpl->getValue('block')['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['user_class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('content_alignment') == "RIGHT") {?> swipe-right<?php } elseif ($_smarty_tpl->getValue('content_alignment') == "LEFT") {?> swipe-left<?php }?>" style="display: none;"><?php if ($_smarty_tpl->getValue('block')['properties']['abt__ut2_show_title'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="ut2-st"><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title'))) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'title');
}?><div class="ut2-sp-f cm-combination" id="off_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" style="display:none;"><i class="ut2-icon-baseline-close"></i></div></div><?php }?><div class="ut2-scroll"><div class="ut2-sw"><div class="ut2-sp-f cm-combination" id="off_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['block_id']), ENT_QUOTES, 'UTF-8');?>
" style="display:none;"><i class="ut2-icon-baseline-close"></i></div><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'm_item');
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m_item')->value) {
$foreach17DoElse = false;
if ($_smarty_tpl->getValue('m_item')['type'] == $_smarty_tpl->getValue('menu_type')) {
$_smarty_tpl->renderSubTemplate("tygh:addons/abt__unitheme2/blocks/abt__ut2_fly_menu/".((string)$_smarty_tpl->getValue('settings')['ab__device']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_class'=>$_smarty_tpl->getValue('m_item')['user_class'],'menu_name'=>$_smarty_tpl->getValue('m_item')['menu_name'],'items'=>$_smarty_tpl->getValue('m_item')['menu_items'],'state'=>$_smarty_tpl->getValue('m_item')['state'],'show_title'=>$_smarty_tpl->getValue('m_item')['show_title']), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('m_item')['type'] == $_smarty_tpl->getValue('block_type')) {?><div class="ut2-rb<?php if ($_smarty_tpl->getValue('m_item')['content']['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('m_item')['content']['user_class']), ENT_QUOTES, 'UTF-8');
}?>"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('render_block')->handle(array('block_id'=>$_smarty_tpl->getValue('m_item')['block_id']), $_smarty_tpl);?>
</div><?php } elseif ($_smarty_tpl->getValue('m_item')['type'] == $_smarty_tpl->getValue('delimiter_type')) {?><div class="ut2-fm-delimiter<?php if ($_smarty_tpl->getValue('m_item')['content']['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('m_item')['content']['user_class']), ENT_QUOTES, 'UTF-8');
}?>"></div><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div></div></div><?php }
}
}
}
