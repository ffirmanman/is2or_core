<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:48:58
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/common/image.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21a8737a6_85471792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6701b8640a46e4fbcf6aa13cea9ade153560278a' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/common/image.pre.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe21a8737a6_85471792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['ab__preload']->value && $_smarty_tpl->tpl_vars['image_data']->value['image_path']) {?>
    <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>
        <?php $_smarty_tpl->_assignInScope('restore', true);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['app']->value['ab__total_pov'] <= 100) {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['app']) ? $_smarty_tpl->tpl_vars['app']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['ab__total_pov'] = $_smarty_tpl->tpl_vars['app']->value['ab__total_pov']+(($tmp = $_smarty_tpl->tpl_vars['ab__preload']->value ?? null)===null||$tmp==='' ? 1 ?? null : $tmp);
$_smarty_tpl->_assignInScope('app', $_tmp_array);?>
        <?php $_smarty_tpl->_assignInScope('lazy_load', false ,false ,2);?>
        <?php if ($_smarty_tpl->tpl_vars['restore']->value) {?>

            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['lazy_load_disabled'] = true;
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array ,false ,2);?>
            <?php $_smarty_tpl->_assignInScope('restore', false);?>
        <?php }?>

        <!--ab__image_preload:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
<<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab__preload']->value, ENT_QUOTES, 'UTF-8');?>
>-->
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('ab__preload', false ,false ,32);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/common/image.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__preload/hooks/common/image.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['ab__preload']->value && $_smarty_tpl->tpl_vars['image_data']->value['image_path']) {?>
    <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>
        <?php $_smarty_tpl->_assignInScope('restore', true);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['app']->value['ab__total_pov'] <= 100) {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['app']) ? $_smarty_tpl->tpl_vars['app']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['ab__total_pov'] = $_smarty_tpl->tpl_vars['app']->value['ab__total_pov']+(($tmp = $_smarty_tpl->tpl_vars['ab__preload']->value ?? null)===null||$tmp==='' ? 1 ?? null : $tmp);
$_smarty_tpl->_assignInScope('app', $_tmp_array);?>
        <?php $_smarty_tpl->_assignInScope('lazy_load', false ,false ,2);?>
        <?php if ($_smarty_tpl->tpl_vars['restore']->value) {?>

            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['lazy_load_disabled'] = true;
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array ,false ,2);?>
            <?php $_smarty_tpl->_assignInScope('restore', false);?>
        <?php }?>

        <!--ab__image_preload:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
<<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ab__preload']->value, ENT_QUOTES, 'UTF-8');?>
>-->
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('ab__preload', false ,false ,32);
}
}
}
}
