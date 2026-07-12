<?php
/* Smarty version 5.4.3, created on 2026-03-08 22:48:36
  from 'tygh:addons/ab__seo_filters/components/variant_pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69add2945053b1_39043923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b624b941492a1836af9ec080f6a8ef05cec5304f' => 
    array (
      0 => 'addons/ab__seo_filters/components/variant_pre.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69add2945053b1_39043923 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_filters/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('close_link', false, false, 2);
$_smarty_tpl->assign('seo_pf', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__sf_check_product_features')($_smarty_tpl->getValue('product_features'),$_smarty_tpl->getValue('product')['main_category']), false, NULL);
if ($_smarty_tpl->getValue('addons')['ab__seo_filters']['feature_as_seo_page'] != 'disallow' && !( !$_smarty_tpl->hasVariable('seo_pf') || empty($_smarty_tpl->getValue('seo_pf')))) {
$_smarty_tpl->assign('in_new', ($_smarty_tpl->getValue('addons')['ab__seo_filters']['feature_as_seo_page'] == 'allow_in_new_window') ? true : false, false, NULL);?>
    <?php if ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::SINGLE_CHECKBOX")) {?>
        <?php if ($_smarty_tpl->getValue('seo_pf')[((string)$_smarty_tpl->getValue('feature')['feature_id'])."_Y"]) {?><a <?php if ($_smarty_tpl->getValue('in_new')) {?>target="_blank" <?php }?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('seo_pf')[((string)$_smarty_tpl->getValue('feature')['feature_id'])."_Y"])), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->assign('close_link', true, false, 2);
}?>
    <?php } elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::MULTIPLE_CHECKBOX") && $_smarty_tpl->getValue('feature')['variants']) {?>
        
        <?php $_smarty_tpl->assign('var', (($tmp = $_smarty_tpl->getValue('var') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('variant') ?? null : $tmp), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('seo_pf')[((string)$_smarty_tpl->getValue('feature')['feature_id'])."_".((string)$_smarty_tpl->getValue('var')['variant_id'])]) {?><a <?php if ($_smarty_tpl->getValue('in_new')) {?>target="_blank" <?php }?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('seo_pf')[((string)$_smarty_tpl->getValue('feature')['feature_id'])."_".((string)$_smarty_tpl->getValue('var')['variant_id'])])), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->assign('close_link', true, false, 2);
}?>
    <?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('feature')['feature_type'],array($_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::TEXT_SELECTBOX"),$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::EXTENDED"),$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::NUMBER_SELECTBOX")))) {?>
        
        <?php $_smarty_tpl->assign('var', (($tmp = $_smarty_tpl->getValue('var') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('variant') ?? null : $tmp), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('seo_pf')[((string)$_smarty_tpl->getValue('feature')['feature_id'])."_".((string)$_smarty_tpl->getValue('var')['variant_id'])]) {?><a <?php if ($_smarty_tpl->getValue('in_new')) {?>target="_blank" <?php }?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('seo_pf')[((string)$_smarty_tpl->getValue('feature')['feature_id'])."_".((string)$_smarty_tpl->getValue('var')['variant_id'])])), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->assign('close_link', true, false, 2);
}?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__seo_filters/components/variant_pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__seo_filters/components/variant_pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('close_link', false, false, 2);
$_smarty_tpl->assign('seo_pf', $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__sf_check_product_features')($_smarty_tpl->getValue('product_features'),$_smarty_tpl->getValue('product')['main_category']), false, NULL);
if ($_smarty_tpl->getValue('addons')['ab__seo_filters']['feature_as_seo_page'] != 'disallow' && !( !$_smarty_tpl->hasVariable('seo_pf') || empty($_smarty_tpl->getValue('seo_pf')))) {
$_smarty_tpl->assign('in_new', ($_smarty_tpl->getValue('addons')['ab__seo_filters']['feature_as_seo_page'] == 'allow_in_new_window') ? true : false, false, NULL);?>
    <?php if ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::SINGLE_CHECKBOX")) {?>
        <?php if ($_smarty_tpl->getValue('seo_pf')[((string)$_smarty_tpl->getValue('feature')['feature_id'])."_Y"]) {?><a <?php if ($_smarty_tpl->getValue('in_new')) {?>target="_blank" <?php }?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('seo_pf')[((string)$_smarty_tpl->getValue('feature')['feature_id'])."_Y"])), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->assign('close_link', true, false, 2);
}?>
    <?php } elseif ($_smarty_tpl->getValue('feature')['feature_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::MULTIPLE_CHECKBOX") && $_smarty_tpl->getValue('feature')['variants']) {?>
        
        <?php $_smarty_tpl->assign('var', (($tmp = $_smarty_tpl->getValue('var') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('variant') ?? null : $tmp), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('seo_pf')[((string)$_smarty_tpl->getValue('feature')['feature_id'])."_".((string)$_smarty_tpl->getValue('var')['variant_id'])]) {?><a <?php if ($_smarty_tpl->getValue('in_new')) {?>target="_blank" <?php }?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('seo_pf')[((string)$_smarty_tpl->getValue('feature')['feature_id'])."_".((string)$_smarty_tpl->getValue('var')['variant_id'])])), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->assign('close_link', true, false, 2);
}?>
    <?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('feature')['feature_type'],array($_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::TEXT_SELECTBOX"),$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::EXTENDED"),$_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductFeatures::NUMBER_SELECTBOX")))) {?>
        
        <?php $_smarty_tpl->assign('var', (($tmp = $_smarty_tpl->getValue('var') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('variant') ?? null : $tmp), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('seo_pf')[((string)$_smarty_tpl->getValue('feature')['feature_id'])."_".((string)$_smarty_tpl->getValue('var')['variant_id'])]) {?><a <?php if ($_smarty_tpl->getValue('in_new')) {?>target="_blank" <?php }?>href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('seo_pf')[((string)$_smarty_tpl->getValue('feature')['feature_id'])."_".((string)$_smarty_tpl->getValue('var')['variant_id'])])), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->assign('close_link', true, false, 2);
}?>
    <?php }
}
}
}
}
