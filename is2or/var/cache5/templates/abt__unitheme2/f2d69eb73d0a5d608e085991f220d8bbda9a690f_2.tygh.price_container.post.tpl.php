<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:18
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products/price_container.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f63d9c30_02688807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2d69eb73d0a5d608e085991f220d8bbda9a690f' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products/price_container.post.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/product_templates/components/product_brand_logo_prepare.tpl' => 2,
    'tygh:views/products/components/product_features_short_list.tpl' => 2,
  ),
),false)) {
function content_6835b9f63d9c30_02688807 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_templates/components/product_brand_logo_prepare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php if ($_smarty_tpl->tpl_vars['brand_feature']->value) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:brand"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_brand_format'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "logo") {?>
            <div class="ut2-pb__product-brand">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>array($_smarty_tpl->tpl_vars['brand_feature']->value),'feature_image'=>true,'hide_name'=>true,'feature_link'=>true), 0, false);
?>
            </div>
        <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:brand"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/products/price_container.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/products/price_container.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/product_templates/components/product_brand_logo_prepare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php if ($_smarty_tpl->tpl_vars['brand_feature']->value) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:brand"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:brand"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_brand_format'][$_smarty_tpl->tpl_vars['settings']->value['ab__device']] === "logo") {?>
            <div class="ut2-pb__product-brand">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>array($_smarty_tpl->tpl_vars['brand_feature']->value),'feature_image'=>true,'hide_name'=>true,'feature_link'=>true), 0, true);
?>
            </div>
        <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:brand"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}?>

<?php }
}
}
