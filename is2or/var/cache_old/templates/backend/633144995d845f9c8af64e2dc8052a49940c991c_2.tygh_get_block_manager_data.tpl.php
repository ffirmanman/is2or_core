<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:12
  from 'tygh:components/menu/get_block_manager_data.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9460b88186_30397942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '633144995d845f9c8af64e2dc8052a49940c991c' => 
    array (
      0 => 'components/menu/get_block_manager_data.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9460b88186_30397942 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/menu';
if ((defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null)) {?>
    <?php $_smarty_tpl->assign('block_manager_attrs', array("data-ca-block-manager"=>"main","data-ca-block-manager-has-layout"=>0,"data-ca-block-manager-dispatch"=>"custom_menu","data-ca-block-manager-blocks-place"=>"true","data-ca-block-manager-grid-id"=>"header_main_menu"), false, NULL);?>
    <?php $_smarty_tpl->assign('attrs_wrapper', $_smarty_tpl->getValue('block_manager_attrs'), false, NULL);?>

    <?php $_smarty_tpl->assign('show_collapse_default', false, false, NULL);?>
    <?php $_smarty_tpl->assign('main_menu_primary_class', "cs-main-menu__primary--block-manager", false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'item_key');
$_smarty_tpl->getVariable('item')->iteration = 0;
$foreach29DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item_key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach29DoElse = false;
$_smarty_tpl->getVariable('item')->iteration++;
$foreach29Backup = clone $_smarty_tpl->getVariable('item');
?>
        <?php $_tmp_array = $_smarty_tpl->getValue('items') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('item_key')]['attrs']['wrapper']["data-ca-block-manager-blocks-place"] = "true";
$_smarty_tpl->assign('items', $_tmp_array, false, NULL);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('items') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('item_key')]['attrs']['wrapper']["data-ca-block-manager-grid-id"] = "main_menu_1_".((string)$_smarty_tpl->getVariable('item')->iteration);
$_smarty_tpl->assign('items', $_tmp_array, false, NULL);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('items') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('item_key')]['is_show'] = true;
$_smarty_tpl->assign('items', $_tmp_array, false, NULL);?>

        <?php if ($_smarty_tpl->getValue('item')['type'] !== "title_divider" && $_smarty_tpl->getValue('item')['type'] !== "divider") {?>
            <?php $_tmp_array = $_smarty_tpl->getValue('items') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('item_key')]['attrs']['href']["data-ca-menu"] = "mainMenuLink";
$_smarty_tpl->assign('items', $_tmp_array, false, NULL);?>
            <?php $_tmp_array = $_smarty_tpl->getValue('items') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('item_key')]['attrs']['href']["data-ca-menu-id-path"] = $_smarty_tpl->getValue('item')['id_path'];
$_smarty_tpl->assign('items', $_tmp_array, false, NULL);?>
            <?php if ($_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR") && $_smarty_tpl->getValue('item')['root_hidden']) {?>
                <?php $_tmp_array = $_smarty_tpl->getValue('items') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('item_key')]['attrs']['class_href'] = ((string)$_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('item_key')]['attrs']['class_href'])." main-menu-1__link--root-hidden";
$_smarty_tpl->assign('items', $_tmp_array, false, NULL);?>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR") && $_smarty_tpl->getValue('item')['hidden_by_permissions']) {?>
                <?php $_tmp_array = $_smarty_tpl->getValue('items') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('item_key')]['attrs']['class_href'] = ((string)$_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('item_key')]['attrs']['class_href'])." main-menu-1__link--hidden-by-permissions";
$_smarty_tpl->assign('items', $_tmp_array, false, NULL);?>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('item')['is_custom']) {?>
                <?php $_tmp_array = $_smarty_tpl->getValue('items') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('item_key')]['is_accordion'] = true;
$_smarty_tpl->assign('items', $_tmp_array, false, NULL);?>
            <?php }?>
        <?php }?>

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item')['items'], 'item_2', false, 'item_key_2');
$foreach30DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item_key_2')->value => $_smarty_tpl->getVariable('item_2')->value) {
$foreach30DoElse = false;
?>
            <?php $_tmp_array = $_smarty_tpl->getValue('items') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('item_key')]['items'][$_smarty_tpl->getValue('item_key_2')]['is_show'] = true;
$_smarty_tpl->assign('items', $_tmp_array, false, NULL);?>

            <?php if ($_smarty_tpl->getValue('item_2')['type'] !== "title_divider" && $_smarty_tpl->getValue('item_2')['type'] !== "divider") {?>
                <?php if ($_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR") && $_smarty_tpl->getValue('item_2')['root_hidden']) {?>
                    <?php $_tmp_array = $_smarty_tpl->getValue('items') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('item_key')]['items'][$_smarty_tpl->getValue('item_key_2')]['attrs']['class_href'] = ((string)$_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('item_key')]['items'][$_smarty_tpl->getValue('item_key_2')]['attrs']['class_href'])." main-menu-2__link--root-hidden";
$_smarty_tpl->assign('items', $_tmp_array, false, NULL);?>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR") && $_smarty_tpl->getValue('item_2')['hidden_by_permissions']) {?>
                    <?php $_tmp_array = $_smarty_tpl->getValue('items') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->getValue('item_key')]['items'][$_smarty_tpl->getValue('item_key_2')]['attrs']['class_href'] = ((string)$_smarty_tpl->getValue('items')[$_smarty_tpl->getValue('item_key')]['items'][$_smarty_tpl->getValue('item_key_2')]['attrs']['class_href'])." main-menu-2__link--hidden-by-permissions";
$_smarty_tpl->assign('items', $_tmp_array, false, NULL);?>
                <?php }?>
            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php
$_smarty_tpl->setVariable('item', $foreach29Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->assign('items', $_smarty_tpl->getValue('items'), false, 2);?>
    <?php $_smarty_tpl->assign('attrs_wrapper', $_smarty_tpl->getValue('attrs_wrapper'), false, 2);?>
    <?php $_smarty_tpl->assign('show_collapse_default', $_smarty_tpl->getValue('show_collapse_default'), false, 2);?>
    <?php $_smarty_tpl->assign('main_menu_primary_class', $_smarty_tpl->getValue('main_menu_primary_class'), false, 2);
}
}
}
