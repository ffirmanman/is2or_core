<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:16
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_templates/components/product_brand_logo_prepare.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571c6ea3f2_57695453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8e0455ce4500ca36f7fdd0d82b7bca0dc9237fc' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_templates/components/product_brand_logo_prepare.tpl',
      1 => 1736836654,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834571c6ea3f2_57695453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('brand_feature', $_smarty_tpl->tpl_vars['product']->value['header_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']] ,false ,2);
if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('brand_feature', fn_array_value_to_key($_smarty_tpl->tpl_vars['product']->value['header_features'],'feature_id'));?>
    <?php $_smarty_tpl->_assignInScope('brand_feature', $_smarty_tpl->tpl_vars['brand_feature']->value[$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']] ,false ,2);
}?>

<?php if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('brand_feature', $_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']] ,false ,2);
}?>

<?php if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('brand_feature', fn_array_value_to_key($_smarty_tpl->tpl_vars['product']->value['product_features'],'feature_id'));?>
    <?php $_smarty_tpl->_assignInScope('brand_feature', $_smarty_tpl->tpl_vars['brand_feature']->value[$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']] ,false ,2);
}?>

<?php if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('brand_feature', fn_get_product_features(array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'variants_selected_only'=>true,'feature_id'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id'],'variants'=>true,'existent_only'=>true)));?>
    <?php if ($_smarty_tpl->tpl_vars['brand_feature']->value[0][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']]) {?>
        <?php $_smarty_tpl->_assignInScope('brand_feature', $_smarty_tpl->tpl_vars['brand_feature']->value[0][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']]);?>
        <?php $_smarty_tpl->_assignInScope('brand_feature_variant', reset($_smarty_tpl->tpl_vars['brand_feature']->value['variants']));?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['brand_feature']) ? $_smarty_tpl->tpl_vars['brand_feature']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['variant'] = $_smarty_tpl->tpl_vars['brand_feature_variant']->value['variant'];
$_smarty_tpl->_assignInScope('brand_feature', $_tmp_array ,false ,2);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_templates/components/product_brand_logo_prepare.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_templates/components/product_brand_logo_prepare.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('brand_feature', $_smarty_tpl->tpl_vars['product']->value['header_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']] ,false ,2);
if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('brand_feature', fn_array_value_to_key($_smarty_tpl->tpl_vars['product']->value['header_features'],'feature_id'));?>
    <?php $_smarty_tpl->_assignInScope('brand_feature', $_smarty_tpl->tpl_vars['brand_feature']->value[$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']] ,false ,2);
}?>

<?php if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('brand_feature', $_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']] ,false ,2);
}?>

<?php if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('brand_feature', fn_array_value_to_key($_smarty_tpl->tpl_vars['product']->value['product_features'],'feature_id'));?>
    <?php $_smarty_tpl->_assignInScope('brand_feature', $_smarty_tpl->tpl_vars['brand_feature']->value[$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']] ,false ,2);
}?>

<?php if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('brand_feature', fn_get_product_features(array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'variants_selected_only'=>true,'feature_id'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id'],'variants'=>true,'existent_only'=>true)));?>
    <?php if ($_smarty_tpl->tpl_vars['brand_feature']->value[0][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']]) {?>
        <?php $_smarty_tpl->_assignInScope('brand_feature', $_smarty_tpl->tpl_vars['brand_feature']->value[0][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']]);?>
        <?php $_smarty_tpl->_assignInScope('brand_feature_variant', reset($_smarty_tpl->tpl_vars['brand_feature']->value['variants']));?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['brand_feature']) ? $_smarty_tpl->tpl_vars['brand_feature']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['variant'] = $_smarty_tpl->tpl_vars['brand_feature_variant']->value['variant'];
$_smarty_tpl->_assignInScope('brand_feature', $_tmp_array ,false ,2);?>
    <?php }
}
}
}
}
