<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:blocks/product_templates/components/product_brand_logo_prepare.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a004ecb94_04713785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa696095c3efdadb7729da7f499d9f98d589f8f6' => 
    array (
      0 => 'blocks/product_templates/components/product_brand_logo_prepare.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a004ecb94_04713785 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/product_templates/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('brand_feature', $_smarty_tpl->getValue('product')['header_features'][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);?>

<?php if (( !$_smarty_tpl->hasVariable('brand_feature') || empty($_smarty_tpl->getValue('brand_feature')))) {?>
    <?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getSmarty()->getModifierCallback('fn_array_value_to_key')($_smarty_tpl->getValue('product')['header_features'],'feature_id'), false, NULL);?>
    <?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getValue('brand_feature')[$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);
}?>

<?php if (( !$_smarty_tpl->hasVariable('brand_feature') || empty($_smarty_tpl->getValue('brand_feature')))) {?>
    <?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getValue('product')['product_features'][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);
}?>

<?php if (( !$_smarty_tpl->hasVariable('brand_feature') || empty($_smarty_tpl->getValue('brand_feature')))) {?>
    <?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getSmarty()->getModifierCallback('fn_array_value_to_key')($_smarty_tpl->getValue('product')['product_features'],'feature_id'), false, NULL);?>
    <?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getValue('brand_feature')[$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);
}?>

<?php if (( !$_smarty_tpl->hasVariable('brand_feature') || empty($_smarty_tpl->getValue('brand_feature')))) {?>
    <?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_features')(array('product_id'=>$_smarty_tpl->getValue('product')['product_id'],'variants_selected_only'=>true,'feature_id'=>$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'],'variants'=>true,'existent_only'=>true)), false, NULL);?>
    <?php if ($_smarty_tpl->getValue('brand_feature')[0][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']]) {?>
        <?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getValue('brand_feature')[0][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);?>
        <?php $_smarty_tpl->assign('brand_feature_variant', $_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('brand_feature')['variants']), false, NULL);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('brand_feature') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['variant'] = $_smarty_tpl->getValue('brand_feature_variant')['variant'];
$_smarty_tpl->assign('brand_feature', $_tmp_array, false, NULL);?>
    <?php }
}?>

<?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getValue('brand_feature'), false, 2);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_templates/components/product_brand_logo_prepare.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/product_templates/components/product_brand_logo_prepare.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('brand_feature', $_smarty_tpl->getValue('product')['header_features'][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);?>

<?php if (( !$_smarty_tpl->hasVariable('brand_feature') || empty($_smarty_tpl->getValue('brand_feature')))) {?>
    <?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getSmarty()->getModifierCallback('fn_array_value_to_key')($_smarty_tpl->getValue('product')['header_features'],'feature_id'), false, NULL);?>
    <?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getValue('brand_feature')[$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);
}?>

<?php if (( !$_smarty_tpl->hasVariable('brand_feature') || empty($_smarty_tpl->getValue('brand_feature')))) {?>
    <?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getValue('product')['product_features'][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);
}?>

<?php if (( !$_smarty_tpl->hasVariable('brand_feature') || empty($_smarty_tpl->getValue('brand_feature')))) {?>
    <?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getSmarty()->getModifierCallback('fn_array_value_to_key')($_smarty_tpl->getValue('product')['product_features'],'feature_id'), false, NULL);?>
    <?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getValue('brand_feature')[$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);
}?>

<?php if (( !$_smarty_tpl->hasVariable('brand_feature') || empty($_smarty_tpl->getValue('brand_feature')))) {?>
    <?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_features')(array('product_id'=>$_smarty_tpl->getValue('product')['product_id'],'variants_selected_only'=>true,'feature_id'=>$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id'],'variants'=>true,'existent_only'=>true)), false, NULL);?>
    <?php if ($_smarty_tpl->getValue('brand_feature')[0][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']]) {?>
        <?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getValue('brand_feature')[0][$_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']], false, NULL);?>
        <?php $_smarty_tpl->assign('brand_feature_variant', $_smarty_tpl->getSmarty()->getModifierCallback('reset')($_smarty_tpl->getValue('brand_feature')['variants']), false, NULL);?>
        <?php $_tmp_array = $_smarty_tpl->getValue('brand_feature') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['variant'] = $_smarty_tpl->getValue('brand_feature_variant')['variant'];
$_smarty_tpl->assign('brand_feature', $_tmp_array, false, NULL);?>
    <?php }
}?>

<?php $_smarty_tpl->assign('brand_feature', $_smarty_tpl->getValue('brand_feature'), false, 2);
}
}
}
