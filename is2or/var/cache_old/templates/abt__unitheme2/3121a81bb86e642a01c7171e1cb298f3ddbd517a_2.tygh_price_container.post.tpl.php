<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:01
  from 'tygh:addons/abt__unitheme2/hooks/products/price_container.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ede98500_52339916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3121a81bb86e642a01c7171e1cb298f3ddbd517a' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/products/price_container.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/product_templates/components/product_brand_logo_prepare.tpl' => 2,
    'tygh:views/products/components/product_features_short_list.tpl' => 2,
  ),
))) {
function content_69ada1ede98500_52339916 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('product_amount', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_amount'));?>


<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/product_brand_logo_prepare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php if ($_smarty_tpl->getValue('brand_feature')) {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_brand_format'][$_smarty_tpl->getValue('settings')['ab__device']] === "logo") {?>
            <div class="ut2-pb__product-brand">
                <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>array($_smarty_tpl->getValue('brand_feature')),'feature_image'=>true,'hide_name'=>true,'feature_link'=>true), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:brand"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/products/price_container.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/hooks/products/price_container.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('product_amount', "product_amount_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('product_amount'));?>


<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['brand_feature_id']) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/product_templates/components/product_brand_logo_prepare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php if ($_smarty_tpl->getValue('brand_feature')) {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_brand_format'][$_smarty_tpl->getValue('settings')['ab__device']] === "logo") {?>
            <div class="ut2-pb__product-brand">
                <?php $_smarty_tpl->renderSubTemplate("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>array($_smarty_tpl->getValue('brand_feature')),'feature_image'=>true,'hide_name'=>true,'feature_link'=>true), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:brand"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php }
}?>

<?php }
}
}
