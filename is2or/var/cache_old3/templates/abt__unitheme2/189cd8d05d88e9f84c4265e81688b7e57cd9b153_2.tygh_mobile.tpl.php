<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:30
  from 'tygh:addons/abt__unitheme2/blocks/abt__ut2_fly_menu/mobile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb2168b3131_91441538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '189cd8d05d88e9f84c4265e81688b7e57cd9b153' => 
    array (
      0 => 'addons/abt__unitheme2/blocks/abt__ut2_fly_menu/mobile.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
))) {
function content_69afb2168b3131_91441538 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/abt__ut2_fly_menu';
\Tygh\Languages\Helper::preloadLangVars(array('view_details','abt__ut2.fly_menu.back_to_main','view_details','abt__ut2.fly_menu.back_to','view_details','abt__ut2.fly_menu.back_to_main','view_details','abt__ut2.fly_menu.back_to'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('props', $_smarty_tpl->getValue('block')['properties'], false, NULL);?>
<nav class="ut2-fm<?php if ($_smarty_tpl->getValue('m_item')['content']['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('m_item')['content']['user_class']), ENT_QUOTES, 'UTF-8');
}?>"><div class="ut2-fmw<?php if ($_smarty_tpl->getValue('user_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_class')), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('state') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('show_title') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> toggle-it<?php }?>"><?php if ($_smarty_tpl->getValue('menu_name') && $_smarty_tpl->getValue('show_title') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="ut2-mt<?php if ($_smarty_tpl->getValue('state') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?> active<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('menu_name')), ENT_QUOTES, 'UTF-8');?>
<i></i></div><?php }
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?><div class="ut2-lfl <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['class']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('item')['active']) {?> ut2-fm-active-item<?php }
if ($_smarty_tpl->getValue('item')['subitems']) {?> ut2-lfl_inclusive<?php }?>"><?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item')['abt__ut2_mwi__icon']) {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('item')['abt__ut2_mwi__icon'],'class'=>"ut2-lfl-icon",'image_width'=>32,'height'=>$_smarty_tpl->getValue('image_data')['height'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
}
if (!$_smarty_tpl->getValue('item')['subitems'] && $_smarty_tpl->getValue('item')['href']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item')['href'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?><p><strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['item']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></strong><?php if ($_smarty_tpl->getValue('item')['subitems'] && $_smarty_tpl->getValue('item')['href']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item')['href'])), ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-float-right"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("view_details", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }
if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__desc']) {?><span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__desc']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></p><?php if (!$_smarty_tpl->getValue('item')['subitems'] && $_smarty_tpl->getValue('item')['href']) {?></a><?php }
if ($_smarty_tpl->getValue('item')['subitems']) {?><i id="fm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['param_id']), ENT_QUOTES, 'UTF-8');?>
" class="ut2-fm__link-back"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.fly_menu.back_to_main", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></i><div class="ut2-slw"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item')['subitems'], 'subitem');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subitem')->key => $_smarty_tpl->getVariable('subitem')->value) {
$foreach1DoElse = false;
$foreach1Backup = clone $_smarty_tpl->getVariable('subitem');
?><div class="ut2-lsl<?php if ($_smarty_tpl->getValue('subitem')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['class']), ENT_QUOTES, 'UTF-8');
}?>"><?php if ($_smarty_tpl->getValue('subitem')['href'] && !$_smarty_tpl->getValue('subitem')['subitems']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('subitem')['href'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?><p class="<?php if ($_smarty_tpl->getValue('subitem')['active']) {?>ut2-fm-active-item<?php }?>"><strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['item']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></strong><?php if ($_smarty_tpl->getValue('subitem')['href'] && $_smarty_tpl->getValue('subitem')['subitems']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('subitem')['href'])), ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-float-right"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("view_details", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }
if ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__desc']) {?><span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__desc']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></p><?php if ($_smarty_tpl->getValue('subitem')['href'] && !$_smarty_tpl->getValue('subitem')['subitems']) {?></a><?php }
if ($_smarty_tpl->getValue('subitem')['subitems']) {?><i id="fm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['param_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('subitem')->key), ENT_QUOTES, 'UTF-8');?>
" class="ut2-fm__link-back"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.fly_menu.back_to", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['item']), ENT_QUOTES, 'UTF-8');?>
</span></i><div class="ut2-tlw"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subitem')['subitems'], 'sub_subitem');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sub_subitem')->value) {
$foreach2DoElse = false;
?><p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('sub_subitem')['href'])), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->getValue('sub_subitem')['class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('sub_subitem')['active']) {?> ut2-fm-active-item<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['item']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></p><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php }?></div><?php
$_smarty_tpl->setVariable('subitem', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php }?></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('item')['abt__ut2_mwi__text']) && $_smarty_tpl->getValue('item')['abt__ut2_mwi__dropdown'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="ut2-slw__html-item<?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> bottom<?php } else { ?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__text_position']), ENT_QUOTES, 'UTF-8');
}?> hidden-phone"><?php echo $_smarty_tpl->getValue('item')['abt__ut2_mwi__text'];?>
</div><?php }?></div></nav><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/abt__ut2_fly_menu/mobile.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/blocks/abt__ut2_fly_menu/mobile.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('props', $_smarty_tpl->getValue('block')['properties'], false, NULL);?>
<nav class="ut2-fm<?php if ($_smarty_tpl->getValue('m_item')['content']['user_class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('m_item')['content']['user_class']), ENT_QUOTES, 'UTF-8');
}?>"><div class="ut2-fmw<?php if ($_smarty_tpl->getValue('user_class')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_class')), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('state') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('show_title') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> toggle-it<?php }?>"><?php if ($_smarty_tpl->getValue('menu_name') && $_smarty_tpl->getValue('show_title') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="ut2-mt<?php if ($_smarty_tpl->getValue('state') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO")) {?> active<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('menu_name')), ENT_QUOTES, 'UTF-8');?>
<i></i></div><?php }
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach3DoElse = false;
?><div class="ut2-lfl <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['class']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('item')['active']) {?> ut2-fm-active-item<?php }
if ($_smarty_tpl->getValue('item')['subitems']) {?> ut2-lfl_inclusive<?php }?>"><?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('item')['abt__ut2_mwi__icon']) {
$_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('item')['abt__ut2_mwi__icon'],'class'=>"ut2-lfl-icon",'image_width'=>32,'height'=>$_smarty_tpl->getValue('image_data')['height'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
}
if (!$_smarty_tpl->getValue('item')['subitems'] && $_smarty_tpl->getValue('item')['href']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item')['href'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?><p><strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['item']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></strong><?php if ($_smarty_tpl->getValue('item')['subitems'] && $_smarty_tpl->getValue('item')['href']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item')['href'])), ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-float-right"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("view_details", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }
if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__desc']) {?><span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__desc']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></p><?php if (!$_smarty_tpl->getValue('item')['subitems'] && $_smarty_tpl->getValue('item')['href']) {?></a><?php }
if ($_smarty_tpl->getValue('item')['subitems']) {?><i id="fm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['param_id']), ENT_QUOTES, 'UTF-8');?>
" class="ut2-fm__link-back"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.fly_menu.back_to_main", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></i><div class="ut2-slw"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item')['subitems'], 'subitem');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subitem')->key => $_smarty_tpl->getVariable('subitem')->value) {
$foreach4DoElse = false;
$foreach4Backup = clone $_smarty_tpl->getVariable('subitem');
?><div class="ut2-lsl<?php if ($_smarty_tpl->getValue('subitem')['class']) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['class']), ENT_QUOTES, 'UTF-8');
}?>"><?php if ($_smarty_tpl->getValue('subitem')['href'] && !$_smarty_tpl->getValue('subitem')['subitems']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('subitem')['href'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?><p class="<?php if ($_smarty_tpl->getValue('subitem')['active']) {?>ut2-fm-active-item<?php }?>"><strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['item']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></strong><?php if ($_smarty_tpl->getValue('subitem')['href'] && $_smarty_tpl->getValue('subitem')['subitems']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('subitem')['href'])), ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-float-right"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("view_details", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php }
if ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__desc']) {?><span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subitem')['abt__ut2_mwi__desc']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></p><?php if ($_smarty_tpl->getValue('subitem')['href'] && !$_smarty_tpl->getValue('subitem')['subitems']) {?></a><?php }
if ($_smarty_tpl->getValue('subitem')['subitems']) {?><i id="fm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['param_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('subitem')->key), ENT_QUOTES, 'UTF-8');?>
" class="ut2-fm__link-back"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.fly_menu.back_to", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['item']), ENT_QUOTES, 'UTF-8');?>
</span></i><div class="ut2-tlw"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subitem')['subitems'], 'sub_subitem');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sub_subitem')->value) {
$foreach5DoElse = false;
?><p><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('sub_subitem')['href'])), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->getValue('sub_subitem')['class']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['class']), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('sub_subitem')['active']) {?> ut2-fm-active-item<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['item']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label']) {?><span class="m-label" style="color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');?>
;background-color:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php if ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_background'] === '#ffffff') {?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_color']), ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label_background']), ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sub_subitem')['abt__ut2_mwi__label']), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></p><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php }?></div><?php
$_smarty_tpl->setVariable('subitem', $foreach4Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php }?></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('item')['abt__ut2_mwi__text']) && $_smarty_tpl->getValue('item')['abt__ut2_mwi__dropdown'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="ut2-slw__html-item<?php if ($_smarty_tpl->getValue('item')['abt__ut2_mwi__dropdown'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> bottom<?php } else { ?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['abt__ut2_mwi__text_position']), ENT_QUOTES, 'UTF-8');
}?> hidden-phone"><?php echo $_smarty_tpl->getValue('item')['abt__ut2_mwi__text'];?>
</div><?php }?></div></nav><?php }
}
}
