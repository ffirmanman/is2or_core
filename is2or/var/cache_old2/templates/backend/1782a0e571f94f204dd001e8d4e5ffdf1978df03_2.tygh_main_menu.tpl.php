<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:components/menu/main_menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1af9f5471_47098541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1782a0e571f94f204dd001e8d4e5ffdf1978df03' => 
    array (
      0 => 'components/menu/main_menu.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/menu/main_menu.tpl' => 2,
    'tygh:views/block_manager/frontend_render/block.tpl' => 1,
    'tygh:components/menu/add_item.tpl' => 1,
  ),
))) {
function content_69afb1af9f5471_47098541 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/menu';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'menu_attrs' => 
  array (
    'compiled_filepath' => '/var/www/is2or/var/cache/templates/backend/1782a0e571f94f204dd001e8d4e5ffdf1978df03_2.tygh_main_menu.tpl.php',
    'uid' => '1782a0e571f94f204dd001e8d4e5ffdf1978df03',
    'call_name' => 'smarty_template_function_menu_attrs_36470166069afb1af998038_09670964',
  ),
));
\Tygh\Languages\Helper::preloadLangVars(array('admin_menu.edit_item_title'));
if ($_smarty_tpl->getValue('navigation')['static']['central'] || $_smarty_tpl->getValue('navigation')['static']['top']) {
$_smarty_tpl->assign('default_menu_item_icon', "file_alt", false, NULL);
$_smarty_tpl->assign('selected_id_path', ((string)$_smarty_tpl->getValue('navigation')['selected_tab'])."/".((string)$_smarty_tpl->getValue('navigation')['subsection']), false, NULL);
$_smarty_tpl->assign('level', (($tmp = $_smarty_tpl->getValue('level') ?? null)===null||$tmp==='' ? 1 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('prefix', (($tmp = $_smarty_tpl->getValue('prefix') ?? null)===null||$tmp==='' ? '' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('suffix', (($tmp = $_smarty_tpl->getValue('suffix') ?? null)===null||$tmp==='' ? "1" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('item_title_limit', 15, false, NULL);?>     <?php $_smarty_tpl->assign('show_collapse_default', (($tmp = $_smarty_tpl->getValue('show_collapse_default') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('attrs_wrapper', ((true && (true && null !== ($_smarty_tpl->getValue('item_parent')['attrs']['wrapper'] ?? null)))) ? ($_smarty_tpl->getSmarty()->getModifierCallback('array_merge')($_smarty_tpl->getValue('attrs_wrapper'),$_smarty_tpl->getValue('item_parent')['attrs']['wrapper'])) : ((($tmp = $_smarty_tpl->getValue('attrs_wrapper') ?? null)===null||$tmp==='' ? array() ?? null : $tmp)), false, NULL);
if (!(true && (true && null !== ($_smarty_tpl->getValue('item_parent')['attrs']['wrapper'] ?? null)))) {
$_tmp_array = $_smarty_tpl->getValue('item_parent') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attrs']['wrapper'] = array();
$_smarty_tpl->assign('item_parent', $_tmp_array, false, NULL);
}?><div class="accordion main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
" <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->getValue('attrs_wrapper')), true);?>
 id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
_main_menu_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('suffix')), ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'item_key');
$_smarty_tpl->getVariable('item')->iteration = 0;
$foreach39DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item_key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach39DoElse = false;
$_smarty_tpl->getVariable('item')->iteration++;
$foreach39Backup = clone $_smarty_tpl->getVariable('item');
if ($_smarty_tpl->getValue('item')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::DISABLED") && !$_smarty_tpl->getValue('item')['is_show']) {
continue 1;
}
$_smarty_tpl->assign('selected_item', ($_smarty_tpl->getValue('level') === 1) ? ($_smarty_tpl->getValue('item_key') === $_smarty_tpl->getValue('navigation')['selected_tab']) : ($_smarty_tpl->getValue('item_key_parent') === $_smarty_tpl->getValue('navigation')['selected_tab'] && $_smarty_tpl->getValue('item_key') === $_smarty_tpl->getValue('navigation')['subsection']), false, NULL);
$_smarty_tpl->assign('item_title', (($tmp = $_smarty_tpl->getValue('item')['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('item_key'), [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('item_icon', (($tmp = $_smarty_tpl->getValue('item')['icon'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('default_menu_item_icon') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('is_show_first_link', false, false, NULL);
$_smarty_tpl->assign('item_title_length', mb_strlen((string) $_smarty_tpl->getValue('item_title'), 'UTF-8'), false, NULL);
if ($_smarty_tpl->getValue('item')['items']) {
$_smarty_tpl->assign('first_item_key', $_smarty_tpl->getSmarty()->getModifierCallback('key')($_smarty_tpl->getValue('item')['items']), false, NULL);
$_smarty_tpl->assign('first_item', $_smarty_tpl->getValue('item')['items'][$_smarty_tpl->getValue('first_item_key')], false, NULL);
$_smarty_tpl->assign('is_show_first_link', ($_smarty_tpl->getValue('level') === 1 && $_smarty_tpl->getValue('first_item') && $_smarty_tpl->getValue('first_item')['type'] !== "button" && $_smarty_tpl->getValue('first_item')['href'] && $_smarty_tpl->getValue('first_item')['new_window'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && (!$_smarty_tpl->getValue('first_item')['attrs'] || ($_smarty_tpl->getValue('first_item')['attrs'] && $_smarty_tpl->getValue('first_item')['attrs']['class_href'] && !$_smarty_tpl->getSmarty()->getModifierCallback('strstr')($_smarty_tpl->getValue('first_item')['attrs']['class_href'],"cm-dialog-opener")))), false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "main_menu_link_icon", null, null);
$_smarty_tpl->assign('icon_active_class', ($_smarty_tpl->getValue('selected_item')) ? "main-menu-".((string)$_smarty_tpl->getValue('level'))."__icon--active" : '', false, NULL);?><span class="main-menu-<?php echo $_smarty_tpl->getValue('level');?>
__link-icon"><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>$_smarty_tpl->getValue('item_icon'),'class'=>"main-menu-".((string)$_smarty_tpl->getValue('level'))."__icon ".((string)$_smarty_tpl->getValue('icon_active_class'))), $_smarty_tpl);?>
</span><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "main_menu_item", null, null);?><div class="main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__item <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('item')['items'] || $_smarty_tpl->getValue('item')['subitems'] || $_smarty_tpl->getValue('item')['is_accordion']) {?>accordion-group<?php }?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['attrs']['class']), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->getValue('item')['attrs']['main']), true);?>
><?php if ($_smarty_tpl->getValue('item')['type'] === "title_divider") {?><div><div class="main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link--title-divider <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['attrs']['class_href']), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->getValue('item')['attrs']['href']), true);?>
><?php if ($_smarty_tpl->getValue('level') === 1) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'main_menu_link_icon');
}?><span class="main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link-content"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_title')), ENT_QUOTES, 'UTF-8');?>
</span></div></div><?php } elseif ($_smarty_tpl->getValue('item')['type'] === "divider") {?><div><div class="main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__divider"></div></div><?php } elseif ($_smarty_tpl->getValue('item')['items'] || $_smarty_tpl->getValue('item')['subitems'] || $_smarty_tpl->getValue('item')['is_accordion']) {?><div class="accordion-heading main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__accordion-heading"><?php if ($_smarty_tpl->getValue('level') === 1 && $_smarty_tpl->getValue('is_show_first_link')) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('first_item')['href'])), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
class="main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link--icon <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('first_item')['attrs']['class_href']), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->getValue('first_item')['attrs']['href']), true);?>
><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'main_menu_link_icon');?>
</a><?php }?><a href="#<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
_main_menu_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('suffix')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('item')->iteration), ENT_QUOTES, 'UTF-8');?>
_body" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
class="accordion-toggle main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link cm-no-ajax <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('selected_item')) {?>main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__toggle--active <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('is_show_first_link')) {?>main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link--with-icon <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['attrs']['class_href']), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('item')['new_window'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>target="_blank" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}?>data-toggle="collapse" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-parent="#<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
_main_menu_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('suffix')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('item_title_length') > $_smarty_tpl->getValue('item_title_limit')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_title')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->getValue('item')['attrs']['href']), true);?>
><?php if ($_smarty_tpl->getValue('level') === 1 && !$_smarty_tpl->getValue('is_show_first_link')) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'main_menu_link_icon');
}?><span class="main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link-content <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('selected_item')) {?>main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link-content--active <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('item_title_length') > $_smarty_tpl->getValue('item_title_limit')+5) {?>main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link-content--long <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_title')), ENT_QUOTES, 'UTF-8');?>
</span></a></div><div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
_main_menu_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('suffix')), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('item')->iteration), ENT_QUOTES, 'UTF-8');?>
_body" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
class="accordion-body collapse main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__accordion-body <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('show_collapse_default')) {?>collapse--overflow-default<?php }?> <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('selected_item')) {?>in<?php }?>"><div class="accordion-inner main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__accordion-inner"><?php $_smarty_tpl->renderSubTemplate("tygh:components/menu/main_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>(($tmp = $_smarty_tpl->getValue('item')['items'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('item')['subitems'] ?? null : $tmp),'level'=>$_smarty_tpl->getValue('level')+1,'suffix'=>((string)$_smarty_tpl->getValue('suffix'))."_".((string)$_smarty_tpl->getVariable('item')->iteration),'item_parent'=>$_smarty_tpl->getValue('item'),'item_key_parent'=>$_smarty_tpl->getValue('item_key')), (int) 0, $_smarty_current_dir);
?></div></div><?php } else { ?><div class="main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link-wrapper"><?php if ($_smarty_tpl->getValue('item')['type'] === "button") {?><button <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
} else { ?><a href="<?php if ($_smarty_tpl->getValue('item')['href']) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item')['href'])), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_key')), ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('item')['id_path']) {?>id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('item')['id_path'],"/","_"),".","_")), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}?>class="main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('selected_item')) {?>main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link--active <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['attrs']['class_href']), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('item')['new_window'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>target="_blank" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('item_title_length') > $_smarty_tpl->getValue('item_title_limit')) {?>title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_title')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->getValue('item')['attrs']['href']), true);?>
><?php if ($_smarty_tpl->getValue('level') === 1) {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'main_menu_link_icon');
}?><span class="main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link-content <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('selected_item')) {?>main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link-content--active <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('item_title_length') > $_smarty_tpl->getValue('item_title_limit')+5) {?>main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__link-content--long <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
}?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item_title')), ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->getValue('item')['type'] === "button") {?></button><?php } else { ?></a><?php }?></div><?php }?></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->assign('extra_params_block', ($_smarty_tpl->getValue('level') === 1) ? array('id_path'=>$_smarty_tpl->getValue('item')['id_path'],'menu_level'=>1) : array('id_path'=>$_smarty_tpl->getValue('item')['id_path']), false, NULL);
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("admin_menu.edit_item_title", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable54=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:views/block_manager/frontend_render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'main_menu_item'),'block'=>$_smarty_tpl->getValue('item'),'is_clearfix'=>false,'location_data'=>$_smarty_tpl->getValue('location_data'),'snapping_id'=>$_smarty_tpl->getValue('item')['id_path'],'object_type'=>"menu_item",'parent_grid'=>array('location_id'=>$_smarty_tpl->getValue('item')['section']),'suffix'=>$_smarty_tpl->getValue('id'),'popup_title'=>$_prefixVariable54.": ".((string)($_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('item_title'),100))),'show_delete'=>!$_smarty_tpl->getValue('item')['is_main'],'is_popup'=>true,'block_menu_compact'=>true,'return_url'=>rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']),'extra_params'=>$_smarty_tpl->getValue('extra_params_block'),'is_editing_allowed'=>$_smarty_tpl->getValue('item')['is_editing_allowed']), (int) 0, $_smarty_current_dir);
$_smarty_tpl->setVariable('item', $foreach39Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->assign('extra_params_add', ($_smarty_tpl->getValue('level') === 1) ? array('id_path'=>0,'menu_level'=>1) : array('id_path'=>$_smarty_tpl->getValue('item')['id_path']), false, NULL);
$_smarty_tpl->renderSubTemplate("tygh:components/menu/add_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu_name'=>(($tmp = $_smarty_tpl->getValue('item_parent')['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('item_key_parent'), [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp),'id'=>$_smarty_tpl->getValue('item_key_parent'),'has_items'=>($_smarty_tpl->getValue('item_parent')['items'] || $_smarty_tpl->getValue('item_parent')['subitems']),'extra_params'=>$_smarty_tpl->getValue('extra_params_add'),'is_subitem'=>($_smarty_tpl->getValue('item_parent')['items'] || $_smarty_tpl->getValue('item_parent')['subitems'])), (int) 0, $_smarty_current_dir);
?></div><?php }
}
/* smarty_template_function_menu_attrs_36470166069afb1af998038_09670964 */
if (!function_exists('smarty_template_function_menu_attrs_36470166069afb1af998038_09670964')) {
function smarty_template_function_menu_attrs_36470166069afb1af998038_09670964(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/menu';
$params = array_merge(array('name'=>'menu_attrs','attrs'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('attrs'), 'value', false, 'attr');
$foreach38DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('attr')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach38DoElse = false;
echo htmlspecialchars((string) ($_smarty_tpl->getValue('attr')), ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('value')), ENT_QUOTES, 'UTF-8');?>
" <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_menu_attrs_36470166069afb1af998038_09670964 */
}
