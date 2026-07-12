<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:components/menu/add_item.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed2afc003_70609360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b472a7101503cbcdb5c1e6edc9ef52cfae6a22f' => 
    array (
      0 => 'components/menu/add_item.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 1,
  ),
))) {
function content_6a133ed2afc003_70609360 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/menu';
\Tygh\Languages\Helper::preloadLangVars(array('admin_menu.add_item_for_menu_title','admin_menu.add_item_title','admin_menu.add_item'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['block_manager'] && $_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed']) {
$_smarty_tpl->assign('has_subitems', (($tmp = $_smarty_tpl->getValue('has_subitems') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('is_subitem', (($tmp = $_smarty_tpl->getValue('is_subitem') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('level', (($tmp = $_smarty_tpl->getValue('level') ?? null)===null||$tmp==='' ? 1 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('extra_params', (($tmp = $_smarty_tpl->getValue('extra_params') ?? null)===null||$tmp==='' ? array() ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('extra_params_query', '', false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('extra_params'), 'value', false, 'key');
$foreach33DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach33DoElse = false;
$_smarty_tpl->assign('temp', ((string)$_smarty_tpl->getValue('key'))."=".((string)$_smarty_tpl->getValue('value')), false, NULL);
$_smarty_tpl->assign('extra_params_query', ((string)$_smarty_tpl->getValue('extra_params_query'))."&".((string)$_smarty_tpl->getValue('temp')), false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?><div class="accordion-group main-menu-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('level')), ENT_QUOTES, 'UTF-8');?>
__item bm-block-manager__block-add" data-ca-sortable-is-active="0"><div><?php if ($_smarty_tpl->getValue('is_subitem')) {
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("admin_menu.add_item_for_menu_title", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable25=ob_get_clean();
$_smarty_tpl->assign('popup_title', $_prefixVariable25.": ".((string)$_smarty_tpl->getValue('menu_name')), false, NULL);
} else {
$_smarty_tpl->assign('popup_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("admin_menu.add_item_title", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}
ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("admin_menu.add_item", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable26=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('act'=>"edit",'text'=>$_smarty_tpl->getValue('popup_title'),'link_text'=>$_prefixVariable26."...",'href'=>"block_manager.update_custom_block?object_type=menu_item&block_id=0&return_url=".((string)$_smarty_tpl->getValue('current_dispatch')).((string)$_smarty_tpl->getValue('extra_params_query')),'content'=>'','id'=>((string)$_smarty_tpl->getValue('id'))."_second_level_add",'link_class'=>"main-menu-".((string)$_smarty_tpl->getValue('level'))."__link",'icon'=>"icon-plus",'no_icon_link'=>true), (int) 0, $_smarty_current_dir);
?></div></div><?php }
}
}
