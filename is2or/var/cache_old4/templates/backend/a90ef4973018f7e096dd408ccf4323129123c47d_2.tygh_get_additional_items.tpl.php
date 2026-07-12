<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:35
  from 'tygh:components/menu/get_additional_items.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fb4cd145_90167095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a90ef4973018f7e096dd408ccf4323129123c47d' => 
    array (
      0 => 'components/menu/get_additional_items.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fb4cd145_90167095 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/menu';
\Tygh\Languages\Helper::preloadLangVars(array('quick_menu','edit','quick_menu'));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) !== "vendor") {?>
        <?php $_smarty_tpl->assign('enable_quick_menu', (($tmp = $_smarty_tpl->getValue('config')['tweaks']['enable_quick_menu'] ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('enable_quick_menu')) {?>
        <?php $_smarty_tpl->assign('quick_menu_items', array('quick_menu'=>array('type'=>"divider",'position'=>900,'id_path'=>"quick_menu_divider"),'quick_menu_title'=>array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("quick_menu", [], $_smarty_tpl->getSmarty()->getLanguage()),'type'=>"title_divider",'position'=>901,'icon'=>"star_empty",'id_path'=>"quick_menu_title")), false, NULL);?>

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('quick_menu'), 'sect');
$foreach27DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sect')->value) {
$foreach27DoElse = false;
?>
            <?php $_tmp_array = $_smarty_tpl->getValue('quick_menu_items') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[mb_strtolower((string) $_smarty_tpl->getValue('sect')['section']['name'], 'UTF-8')] = array('type'=>"title_divider",'position'=>$_smarty_tpl->getValue('sect')['section']['id'],'id_path'=>"quick_menu_divider",'title'=>$_smarty_tpl->getValue('sect')['section']['name'],'icon'=>'angle_right');
$_smarty_tpl->assign('quick_menu_items', $_tmp_array, false, NULL);?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sect')['subsection'], 'subsect');
$foreach28DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subsect')->value) {
$foreach28DoElse = false;
?>
                <?php $_tmp_array = $_smarty_tpl->getValue('quick_menu_items') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[((string)(mb_strtolower((string) $_smarty_tpl->getValue('sect')['section']['name'], 'UTF-8')))."_".((string)$_smarty_tpl->getValue('subsect')['menu_id'])] = array('title'=>$_smarty_tpl->getValue('subsect')['name'],'position'=>$_smarty_tpl->getValue('subsect')['position'],'href'=>$_smarty_tpl->getValue('subsect')['url'],'id_path'=>"quick_menu_".((string)$_smarty_tpl->getValue('subsect')['menu_id']),'attrs'=>array('class_href'=>"main-menu-1__link--regular main-menu-1__link--quick-link"),'icon'=>'minus');
$_smarty_tpl->assign('quick_menu_items', $_tmp_array, false, NULL);?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('quick_menu_items') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array('position'=>999,'id_path'=>"opener_quick_menu_edit",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("edit", [], $_smarty_tpl->getSmarty()->getLanguage()),'attrs'=>array('class_href'=>"main-menu-1__link--regular cm-dialog-opener",'href'=>array("data-ca-target-id"=>"content_quick_menu_edit","data-ca-dialog-title"=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("quick_menu", [], $_smarty_tpl->getSmarty()->getLanguage()))),'icon'=>'edit');
$_smarty_tpl->assign('quick_menu_items', $_tmp_array, false, NULL);?>

        <?php $_smarty_tpl->assign('additional_items', $_smarty_tpl->getValue('quick_menu_items'), false, 2);?>
    <?php }
}
}
}
