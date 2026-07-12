<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:37:36
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__preload/overrides/addons/hidpi/hooks/common/image.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683452801b9bd0_17507348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5542026fa7039f02ffe579295915c77d1aaaf3d3' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__preload/overrides/addons/hidpi/hooks/common/image.pre.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683452801b9bd0_17507348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['image_data']->value['is_thumbnail']) {?>
    <?php $_smarty_tpl->_assignInScope('width', $_smarty_tpl->tpl_vars['image_data']->value['width']*2);?>
    <?php $_smarty_tpl->_assignInScope('height', $_smarty_tpl->tpl_vars['image_data']->value['height']*2);?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['width']->value,$_smarty_tpl->tpl_vars['height']->value));
} elseif ($_smarty_tpl->tpl_vars['images']->value['icon']['is_high_res']) {?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', $_smarty_tpl->tpl_vars['image_data']->value);?>
    <?php $_smarty_tpl->_assignInScope('image_data', fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['images']->value['icon']['image_x'],$_smarty_tpl->tpl_vars['images']->value['icon']['image_y']) ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['images']->value['original_image_path']) {?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', $_smarty_tpl->tpl_vars['images']->value);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_data2x']) ? $_smarty_tpl->tpl_vars['image_data2x']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["image_path"] = $_smarty_tpl->tpl_vars['images']->value['original_image_path'];
$_smarty_tpl->_assignInScope('image_data2x', $_tmp_array);
}?>


<?php if ($_smarty_tpl->tpl_vars['ab__preload']->value && $_smarty_tpl->tpl_vars['image_data2x']->value['image_path'] && $_smarty_tpl->tpl_vars['app']->value['ab__total_pov'] <= 100) {?>
    <?php if (($_COOKIE['ab__p_dpr'] && $_COOKIE['ab__p_dpr'] >= 2) || (!$_COOKIE['ab__p_dpr'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "mobile")) {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['app']) ? $_smarty_tpl->tpl_vars['app']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['ab__total_pov'] = $_smarty_tpl->tpl_vars['app']->value['ab__total_pov']+(($tmp = $_smarty_tpl->tpl_vars['ab__preload']->value ?? null)===null||$tmp==='' ? 1 ?? null : $tmp);
$_smarty_tpl->_assignInScope('app', $_tmp_array);?>

        <!--ab__image_preload:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data2x']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
<<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab__preload']->value, ENT_QUOTES, 'UTF-8');?>
>-->
        <?php $_smarty_tpl->_assignInScope('ab__preload', false ,false ,32);?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('lazy_load', false ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('diable_lazy_load', true ,false ,2);
}?>

<?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>
    <?php $_smarty_tpl->_assignInScope('attr_name', 'data-srcset');
} else { ?>
    <?php $_smarty_tpl->_assignInScope('attr_name', 'srcset');
}?>

<?php if ($_smarty_tpl->tpl_vars['image_data2x']->value['image_path']) {?>
    <?php if ($_smarty_tpl->tpl_vars['capture_image']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "icon_image_path_hidpi", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data2x']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
 2x<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php } else { ?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['attr_name']->value] = ((string)$_smarty_tpl->tpl_vars['image_data2x']->value['image_path'])." 2x";
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array ,false ,2);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__preload/overrides/addons/hidpi/hooks/common/image.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/ab__preload/overrides/addons/hidpi/hooks/common/image.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['image_data']->value['is_thumbnail']) {?>
    <?php $_smarty_tpl->_assignInScope('width', $_smarty_tpl->tpl_vars['image_data']->value['width']*2);?>
    <?php $_smarty_tpl->_assignInScope('height', $_smarty_tpl->tpl_vars['image_data']->value['height']*2);?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['width']->value,$_smarty_tpl->tpl_vars['height']->value));
} elseif ($_smarty_tpl->tpl_vars['images']->value['icon']['is_high_res']) {?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', $_smarty_tpl->tpl_vars['image_data']->value);?>
    <?php $_smarty_tpl->_assignInScope('image_data', fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['images']->value['icon']['image_x'],$_smarty_tpl->tpl_vars['images']->value['icon']['image_y']) ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['images']->value['original_image_path']) {?>
    <?php $_smarty_tpl->_assignInScope('image_data2x', $_smarty_tpl->tpl_vars['images']->value);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_data2x']) ? $_smarty_tpl->tpl_vars['image_data2x']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["image_path"] = $_smarty_tpl->tpl_vars['images']->value['original_image_path'];
$_smarty_tpl->_assignInScope('image_data2x', $_tmp_array);
}?>


<?php if ($_smarty_tpl->tpl_vars['ab__preload']->value && $_smarty_tpl->tpl_vars['image_data2x']->value['image_path'] && $_smarty_tpl->tpl_vars['app']->value['ab__total_pov'] <= 100) {?>
    <?php if (($_COOKIE['ab__p_dpr'] && $_COOKIE['ab__p_dpr'] >= 2) || (!$_COOKIE['ab__p_dpr'] && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] === "mobile")) {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['app']) ? $_smarty_tpl->tpl_vars['app']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['ab__total_pov'] = $_smarty_tpl->tpl_vars['app']->value['ab__total_pov']+(($tmp = $_smarty_tpl->tpl_vars['ab__preload']->value ?? null)===null||$tmp==='' ? 1 ?? null : $tmp);
$_smarty_tpl->_assignInScope('app', $_tmp_array);?>

        <!--ab__image_preload:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data2x']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
<<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab__preload']->value, ENT_QUOTES, 'UTF-8');?>
>-->
        <?php $_smarty_tpl->_assignInScope('ab__preload', false ,false ,32);?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('lazy_load', false ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('diable_lazy_load', true ,false ,2);
}?>

<?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>
    <?php $_smarty_tpl->_assignInScope('attr_name', 'data-srcset');
} else { ?>
    <?php $_smarty_tpl->_assignInScope('attr_name', 'srcset');
}?>

<?php if ($_smarty_tpl->tpl_vars['image_data2x']->value['image_path']) {?>
    <?php if ($_smarty_tpl->tpl_vars['capture_image']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "icon_image_path_hidpi", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data2x']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
 2x<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php } else { ?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['attr_name']->value] = ((string)$_smarty_tpl->tpl_vars['image_data2x']->value['image_path'])." 2x";
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array ,false ,2);?>
    <?php }
}
}
}
}
