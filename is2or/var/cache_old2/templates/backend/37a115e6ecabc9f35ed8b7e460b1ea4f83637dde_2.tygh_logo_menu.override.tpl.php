<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:addons/vendor_panel_configurator/hooks/menu/logo_menu.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1af7e4418_44401408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37a115e6ecabc9f35ed8b7e460b1ea4f83637dde' => 
    array (
      0 => 'addons/vendor_panel_configurator/hooks/menu/logo_menu.override.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1af7e4418_44401408 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_panel_configurator/hooks/menu';
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>
    <?php $_smarty_tpl->assign('image_data_dark', (!( !true || empty($_smarty_tpl->getValue('runtime')['vendor_panel_style']['logo_dark']))) ? ($_smarty_tpl->getSmarty()->getModifierCallback('fn_image_to_display')($_smarty_tpl->getValue('runtime')['vendor_panel_style']['logo_dark'])) : ((string)$_smarty_tpl->getValue('images_dir'))."/cart_logo_white.svg", false, NULL);?>

    <?php $_smarty_tpl->assign('image_attributes_dark', array("src"=>(($tmp = $_smarty_tpl->getValue('image_data_dark')['image_path'] ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->getValue('images_dir'))."/cart_logo_white.svg" ?? null : $tmp),"width"=>(($tmp = $_smarty_tpl->getValue('image_data_dark')['width'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"height"=>(($tmp = $_smarty_tpl->getValue('image_data_dark')['height'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"class"=>(!( !true || empty($_smarty_tpl->getValue('runtime')['vendor_panel_style']['logo_dark']))) ? "logo-menu__logo logo-menu__logo--custom" : "logo-menu__logo logo-menu__logo--cscart"), false, NULL);?>

    <?php $_smarty_tpl->assign('image_data_light', (!( !true || empty($_smarty_tpl->getValue('runtime')['vendor_panel_style']['logo']))) ? ($_smarty_tpl->getSmarty()->getModifierCallback('fn_image_to_display')($_smarty_tpl->getValue('runtime')['vendor_panel_style']['logo'])) : ((string)$_smarty_tpl->getValue('images_dir'))."/cart_logo.svg", false, NULL);?>

    <?php $_smarty_tpl->assign('image_attributes_light', array("src"=>(($tmp = $_smarty_tpl->getValue('image_data_light')['image_path'] ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->getValue('images_dir'))."/cart_logo.svg" ?? null : $tmp),"width"=>(($tmp = $_smarty_tpl->getValue('image_data_light')['width'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"height"=>(($tmp = $_smarty_tpl->getValue('image_data_light')['height'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"class"=>(!( !true || empty($_smarty_tpl->getValue('runtime')['vendor_panel_style']['logo']))) ? "logo-menu__logo logo-menu__logo--custom" : "logo-menu__logo logo-menu__logo--cscart"), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('backoffice_color_scheme') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::DARK")) {?>
        <img <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('image_attributes_dark'));?>
/>
    <?php } elseif ($_smarty_tpl->getValue('backoffice_color_scheme') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::SYSTEM")) {?>
        <?php $_tmp_array = $_smarty_tpl->getValue('image_attributes_light') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['class'] = ((string)$_smarty_tpl->getValue('image_attributes_light')['class'])." logo-menu__logo--light";
$_smarty_tpl->assign('image_attributes_light', $_tmp_array, false, NULL);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('image_attributes_dark') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['class'] = ((string)$_smarty_tpl->getValue('image_attributes_dark')['class'])." logo-menu__logo--dark";
$_smarty_tpl->assign('image_attributes_dark', $_tmp_array, false, NULL);?>
        <img <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('image_attributes_light'));?>
/>
        <img <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('image_attributes_dark'));?>
/>
    <?php } else { ?>
        <img <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('image_attributes_light'));?>
/>
    <?php }
}
}
}
