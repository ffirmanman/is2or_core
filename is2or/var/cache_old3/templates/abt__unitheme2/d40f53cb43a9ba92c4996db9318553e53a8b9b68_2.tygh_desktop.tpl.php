<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:24
  from 'tygh:addons/abt__unitheme2/blocks/abt__ut2_fly_menu/desktop.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb2103e3920_21885852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd40f53cb43a9ba92c4996db9318553e53a8b9b68' => 
    array (
      0 => 'addons/abt__unitheme2/blocks/abt__ut2_fly_menu/desktop.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 4,
  ),
))) {
function content_69afb2103e3920_21885852 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/abt__ut2_fly_menu';
\Tygh\Languages\Helper::preloadLangVars(array('more','text_topmenu_more','more','text_topmenu_more'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('props', $_smarty_tpl->getValue('block')['properties'], false, NULL);
$_smarty_tpl->assign('unique_part', "abt__ut2_lm_".((string)$_smarty_tpl->getValue('block')['snapping_id'])."_".((string)$_smarty_tpl->getValue('block')['block_id']), false, NULL);?><nav class="ut2-fm <?php if ($_smarty_tpl->getValue('m_item')['content']['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('m_item')['content']['user_class']), ENT_QUOTES, 'UTF-8');
}?>"><div class="ut2-fmbtm hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.fly_menu.back_to_main', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div><div class="ut2-fmw<?php if ($_smarty_tpl->getValue('state') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('show_title') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> toggle-it<?php }?>"><?php if ($_smarty_tpl->getValue('menu_name') && $_smarty_tpl->getValue('show_title') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="ut2-mt<?php if ($_smarty_tpl->getValue('state') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?> active<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('menu_name')), ENT_QUOTES, 'UTF-8');?>
 <i></i></div><?php }
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item');
$foreach22DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach22DoElse = false;
?><div class="ut2-lfl <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['class']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('item')['subitems']) {?> ut2-lfl_inclusive<?php }?>"><?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item')['abt__ut2_mwi__icon']) {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('item')['abt__ut2_mwi__icon'],'class'=>"ut2-lfl-icon",'image_width'=>32,'height'=>$_smarty_tpl->getValue('image_data')['height'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
}?><p class="ut2-lfl__head"><a href="<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('item')['href'])) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item')['href'])), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"><span class="ut2-lfl__head__t"><span class="ut2-lfl__head__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['item']), ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span><?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__desc']) {?><span class="ut2-lfl__head__d"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__desc']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></p><?php if ($_smarty_tpl->getValue('item')['subitems']) {?><i></i><div class="ut2-slw<?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__text_position'] !== "bottom") {?> ut2-slw__right-panel<?php }?>"><?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('item')['abt__ut2_mwi__text']) && $_smarty_tpl->getValue('item')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?><div class="ut2-slw__html"><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "children", null, null);
$_smarty_tpl->assign('max_elements_for_second_level', (($tmp = $_smarty_tpl->getValue('block')['properties']['dropdown_second_level_elements'] ?? null)===null||$tmp==='' ? 30 ?? null : $tmp), false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item')['subitems'], 'subitem');
$_smarty_tpl->getVariable('subitem')->iteration = 0;
$foreach23DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subitem')->value) {
$foreach23DoElse = false;
$_smarty_tpl->getVariable('subitem')->iteration++;
$foreach23Backup = clone $_smarty_tpl->getVariable('subitem');
?><div class="ut2-lsl<?php if ($_smarty_tpl->getValue('subitem')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__text'] && $_smarty_tpl->getValue('item')['abt__ut2_mwi__text_position'] !== "bottom") {?> with-pic<?php }
if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('subitem')['subitems']) > $_smarty_tpl->getValue('props')['abt__no_hidden_elements_third_level_view']) {?> ut2-lsl__more<?php }
if ($_smarty_tpl->getVariable('subitem')->iteration > $_smarty_tpl->getValue('max_elements_for_second_level')) {?> ut2-lsl__show_more<?php }?>"><p<?php if ($_smarty_tpl->getValue('subitem')['active']) {?> class="ut2-fm-active-item"<?php }?>><a href="<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('subitem')['href'])) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('subitem')['href'])), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"><?php if ($_smarty_tpl->getValue('block')['properties']['abt_menu_icon_items'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('subitem')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('subitem')['abt__ut2_mwi__icon']) {?><span class="img"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('subitem')['abt__ut2_mwi__icon'],'class'=>"ut2-lfl-icon",'width'=>$_smarty_tpl->getValue('image_data')['width'],'height'=>$_smarty_tpl->getValue('image_data')['height'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?></span><?php }?><span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['item']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span></a></p><?php if ($_smarty_tpl->getValue('subitem')['subitems']) {?><div class="ut2-tlw"><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('subitem')['subitems']) > $_smarty_tpl->getValue('props')['abt__no_hidden_elements_third_level_view']) {?><a href="<?php if ((($tmp = $_smarty_tpl->getValue('block')['properties']['abt__ut2_view_more_btn_behavior'] ?? null)===null||$tmp==='' ? 'view_items' ?? null : $tmp) === 'view_items') {?>#" onclick="$(this).parent().find('a').removeClass('hidden');$(this).addClass('hidden');<?php } else {
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('subitem')['href']) ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow<?php }?>" class="ut2-lsl__more-link" title=""><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a><?php }
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subitem')['subitems'], 'sub_subitem');
$_smarty_tpl->getVariable('sub_subitem')->iteration = 0;
$foreach24DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sub_subitem')->value) {
$foreach24DoElse = false;
$_smarty_tpl->getVariable('sub_subitem')->iteration++;
$foreach24Backup = clone $_smarty_tpl->getVariable('sub_subitem');
?><a href="<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('sub_subitem')['href'])) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('sub_subitem')['href'])), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>" class="<?php if ($_smarty_tpl->getValue('sub_subitem')['class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('sub_subitem')['active']) {?> ut2-fm-active-item<?php }
if ($_smarty_tpl->getVariable('sub_subitem')->iteration > $_smarty_tpl->getValue('block')['properties']['abt__no_hidden_elements_third_level_view']) {?> hidden<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['item']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a><?php
$_smarty_tpl->setVariable('sub_subitem', $foreach24Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php }?></div><?php if ($_smarty_tpl->getValue('item')['show_more'] && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('item')['href']) && $_smarty_tpl->getVariable('subitem')->iteration == $_smarty_tpl->getValue('max_elements_for_second_level')) {?><div class="ut2-lsl"><div class="ty-menu__submenu-alt-link"><a class="ty-btn-text" href="<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('item')['href'])) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item')['href'])), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>" title=""><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_topmenu_more", array("[item]"=>$_smarty_tpl->getValue('item')['item']), $_smarty_tpl->getSmarty()->getLanguage());?>
</a></div></div><?php }
$_smarty_tpl->setVariable('subitem', $foreach23Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'children');
if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('item')['abt__ut2_mwi__text']) && $_smarty_tpl->getValue('item')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?></div><div class="ut2-slw__html-item<?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> bottom<?php } else { ?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__text_position']), ENT_QUOTES, 'UTF-8');
}?> hidden-phone"><?php echo $_smarty_tpl->getValue('item')['abt__ut2_mwi__text'];?>
</div><?php }?></div><?php }?></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div></nav><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/abt__ut2_fly_menu/desktop.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/blocks/abt__ut2_fly_menu/desktop.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('props', $_smarty_tpl->getValue('block')['properties'], false, NULL);
$_smarty_tpl->assign('unique_part', "abt__ut2_lm_".((string)$_smarty_tpl->getValue('block')['snapping_id'])."_".((string)$_smarty_tpl->getValue('block')['block_id']), false, NULL);?><nav class="ut2-fm <?php if ($_smarty_tpl->getValue('m_item')['content']['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('m_item')['content']['user_class']), ENT_QUOTES, 'UTF-8');
}?>"><div class="ut2-fmbtm hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.fly_menu.back_to_main', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div><div class="ut2-fmw<?php if ($_smarty_tpl->getValue('state') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('show_title') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> toggle-it<?php }?>"><?php if ($_smarty_tpl->getValue('menu_name') && $_smarty_tpl->getValue('show_title') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="ut2-mt<?php if ($_smarty_tpl->getValue('state') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?> active<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('menu_name')), ENT_QUOTES, 'UTF-8');?>
 <i></i></div><?php }
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item');
$foreach25DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach25DoElse = false;
?><div class="ut2-lfl <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['class']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('item')['subitems']) {?> ut2-lfl_inclusive<?php }?>"><?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item')['abt__ut2_mwi__icon']) {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('item')['abt__ut2_mwi__icon'],'class'=>"ut2-lfl-icon",'image_width'=>32,'height'=>$_smarty_tpl->getValue('image_data')['height'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
}?><p class="ut2-lfl__head"><a href="<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('item')['href'])) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item')['href'])), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"><span class="ut2-lfl__head__t"><span class="ut2-lfl__head__name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['item']), ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span><?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__desc']) {?><span class="ut2-lfl__head__d"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__desc']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></p><?php if ($_smarty_tpl->getValue('item')['subitems']) {?><i></i><div class="ut2-slw<?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__text_position'] !== "bottom") {?> ut2-slw__right-panel<?php }?>"><?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('item')['abt__ut2_mwi__text']) && $_smarty_tpl->getValue('item')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?><div class="ut2-slw__html"><?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "children", null, null);
$_smarty_tpl->assign('max_elements_for_second_level', (($tmp = $_smarty_tpl->getValue('block')['properties']['dropdown_second_level_elements'] ?? null)===null||$tmp==='' ? 30 ?? null : $tmp), false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item')['subitems'], 'subitem');
$_smarty_tpl->getVariable('subitem')->iteration = 0;
$foreach26DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subitem')->value) {
$foreach26DoElse = false;
$_smarty_tpl->getVariable('subitem')->iteration++;
$foreach26Backup = clone $_smarty_tpl->getVariable('subitem');
?><div class="ut2-lsl<?php if ($_smarty_tpl->getValue('subitem')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__text'] && $_smarty_tpl->getValue('item')['abt__ut2_mwi__text_position'] !== "bottom") {?> with-pic<?php }
if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('subitem')['subitems']) > $_smarty_tpl->getValue('props')['abt__no_hidden_elements_third_level_view']) {?> ut2-lsl__more<?php }
if ($_smarty_tpl->getVariable('subitem')->iteration > $_smarty_tpl->getValue('max_elements_for_second_level')) {?> ut2-lsl__show_more<?php }?>"><p<?php if ($_smarty_tpl->getValue('subitem')['active']) {?> class="ut2-fm-active-item"<?php }?>><a href="<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('subitem')['href'])) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('subitem')['href'])), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>"><?php if ($_smarty_tpl->getValue('block')['properties']['abt_menu_icon_items'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('subitem')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('subitem')['abt__ut2_mwi__icon']) {?><span class="img"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('subitem')['abt__ut2_mwi__icon'],'class'=>"ut2-lfl-icon",'width'=>$_smarty_tpl->getValue('image_data')['width'],'height'=>$_smarty_tpl->getValue('image_data')['height'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?></span><?php }?><span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['item']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span></a></p><?php if ($_smarty_tpl->getValue('subitem')['subitems']) {?><div class="ut2-tlw"><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('subitem')['subitems']) > $_smarty_tpl->getValue('props')['abt__no_hidden_elements_third_level_view']) {?><a href="<?php if ((($tmp = $_smarty_tpl->getValue('block')['properties']['abt__ut2_view_more_btn_behavior'] ?? null)===null||$tmp==='' ? 'view_items' ?? null : $tmp) === 'view_items') {?>#" onclick="$(this).parent().find('a').removeClass('hidden');$(this).addClass('hidden');<?php } else {
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('subitem')['href']) ?? null)===null||$tmp==='' ? "javascript:void(0)" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow<?php }?>" class="ut2-lsl__more-link" title=""><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a><?php }
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subitem')['subitems'], 'sub_subitem');
$_smarty_tpl->getVariable('sub_subitem')->iteration = 0;
$foreach27DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sub_subitem')->value) {
$foreach27DoElse = false;
$_smarty_tpl->getVariable('sub_subitem')->iteration++;
$foreach27Backup = clone $_smarty_tpl->getVariable('sub_subitem');
?><a href="<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('sub_subitem')['href'])) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('sub_subitem')['href'])), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>" class="<?php if ($_smarty_tpl->getValue('sub_subitem')['class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('sub_subitem')['active']) {?> ut2-fm-active-item<?php }
if ($_smarty_tpl->getVariable('sub_subitem')->iteration > $_smarty_tpl->getValue('block')['properties']['abt__no_hidden_elements_third_level_view']) {?> hidden<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['item']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a><?php
$_smarty_tpl->setVariable('sub_subitem', $foreach27Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php }?></div><?php if ($_smarty_tpl->getValue('item')['show_more'] && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('item')['href']) && $_smarty_tpl->getVariable('subitem')->iteration == $_smarty_tpl->getValue('max_elements_for_second_level')) {?><div class="ut2-lsl"><div class="ty-menu__submenu-alt-link"><a class="ty-btn-text" href="<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('item')['href'])) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item')['href'])), ENT_QUOTES, 'UTF-8');
} else { ?>javascript:void(0)<?php }?>" title=""><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_topmenu_more", array("[item]"=>$_smarty_tpl->getValue('item')['item']), $_smarty_tpl->getSmarty()->getLanguage());?>
</a></div></div><?php }
$_smarty_tpl->setVariable('subitem', $foreach26Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'children');
if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('item')['abt__ut2_mwi__text']) && $_smarty_tpl->getValue('item')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?></div><div class="ut2-slw__html-item<?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> bottom<?php } else { ?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__text_position']), ENT_QUOTES, 'UTF-8');
}?> hidden-phone"><?php echo $_smarty_tpl->getValue('item')['abt__ut2_mwi__text'];?>
</div><?php }?></div><?php }?></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div></nav><?php }
}
}
