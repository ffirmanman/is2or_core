<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:17
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/logo_menu.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f5a7e602_94083772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3898c1c472b9370a7aa82a71a3f6fb1a4e18fc09' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/logo_menu.override.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835b9f5a7e602_94083772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>
        <?php $_smarty_tpl->_assignInScope('top_bar_height', 56);?>
    <?php $_smarty_tpl->_assignInScope('top_bar_padding', 11);?>
    <?php $_smarty_tpl->_assignInScope('image_height', ($_smarty_tpl->tpl_vars['top_bar_height']->value-2*$_smarty_tpl->tpl_vars['top_bar_padding']->value)*2);?> 
    <?php $_smarty_tpl->_assignInScope('image_data_dark', !empty($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['logo_dark']) ? (fn_image_to_display($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['logo_dark'],0,$_smarty_tpl->tpl_vars['image_height']->value)) : ((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/cart_logo_white.svg");?>

    <?php $_smarty_tpl->_assignInScope('image_attributes_dark', array("src"=>(($tmp = $_smarty_tpl->tpl_vars['image_data_dark']->value['image_path'] ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/cart_logo_white.svg" ?? null : $tmp),"width"=>(($tmp = $_smarty_tpl->tpl_vars['image_data_dark']->value['width'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"height"=>(($tmp = $_smarty_tpl->tpl_vars['image_data_dark']->value['height'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"class"=>!empty($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['logo_dark']) ? "logo-menu__logo logo-menu__logo--custom" : "logo-menu__logo logo-menu__logo--cscart"));?>

    <?php $_smarty_tpl->_assignInScope('image_data_light', !empty($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['logo']) ? (fn_image_to_display($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['logo'],0,$_smarty_tpl->tpl_vars['image_height']->value)) : ((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/cart_logo.svg");?>

    <?php $_smarty_tpl->_assignInScope('image_attributes_light', array("src"=>(($tmp = $_smarty_tpl->tpl_vars['image_data_light']->value['image_path'] ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/cart_logo.svg" ?? null : $tmp),"width"=>(($tmp = $_smarty_tpl->tpl_vars['image_data_light']->value['width'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"height"=>(($tmp = $_smarty_tpl->tpl_vars['image_data_light']->value['height'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"class"=>!empty($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['logo']) ? "logo-menu__logo logo-menu__logo--custom" : "logo-menu__logo logo-menu__logo--cscart"));?>

    <span class="top-bar__btn-inner logo-menu__btn-inner">
        <?php if ($_smarty_tpl->tpl_vars['backoffice_color_scheme']->value === smarty_modifier_enum("BackofficeColorSchemeVariants::DARK")) {?>
            <img <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_attributes_dark']->value);?>
/>
        <?php } elseif ($_smarty_tpl->tpl_vars['backoffice_color_scheme']->value === smarty_modifier_enum("BackofficeColorSchemeVariants::SYSTEM")) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes_light']) ? $_smarty_tpl->tpl_vars['image_attributes_light']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['class'] = ((string)$_smarty_tpl->tpl_vars['image_attributes_light']->value['class'])." logo-menu__logo--light";
$_smarty_tpl->_assignInScope('image_attributes_light', $_tmp_array);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes_dark']) ? $_smarty_tpl->tpl_vars['image_attributes_dark']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['class'] = ((string)$_smarty_tpl->tpl_vars['image_attributes_dark']->value['class'])." logo-menu__logo--dark";
$_smarty_tpl->_assignInScope('image_attributes_dark', $_tmp_array);?>
            <img <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_attributes_light']->value);?>
/>
            <img <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_attributes_dark']->value);?>
/>
        <?php } else { ?>
            <img <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_attributes_light']->value);?>
/>
        <?php }?>
    </span>
<?php }
}
}
