<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:51
  from 'tygh:addons/product_reviews/views/product_reviews/components/post_header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada21f55f206_18477227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a462c9979781eebed430d41209d37198bcbcf82a' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/post_header.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/purchased_product.tpl' => 2,
  ),
))) {
function content_69ada21f55f206_18477227 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?>
<header class="ty-product-review-post-header">

    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->getValue('product_review')['rating_value']), (int) 0, $_smarty_current_dir);
?>

    <?php if ($_smarty_tpl->getValue('product_review')['abt__ut2_purchased_variation_id']) {?>

        <?php $_smarty_tpl->assign('product_variation_data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_purchased_variation_data')($_smarty_tpl->getValue('product_review')['abt__ut2_purchased_variation_id']), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('product_variation_data')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/purchased_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product_variation_data')), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php }?>

</header>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_header.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/post_header.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<header class="ty-product-review-post-header">

    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->getValue('product_review')['rating_value']), (int) 0, $_smarty_current_dir);
?>

    <?php if ($_smarty_tpl->getValue('product_review')['abt__ut2_purchased_variation_id']) {?>

        <?php $_smarty_tpl->assign('product_variation_data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_purchased_variation_data')($_smarty_tpl->getValue('product_review')['abt__ut2_purchased_variation_id']), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('product_variation_data')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/purchased_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product_variation_data')), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php }?>

</header>
<?php }
}
}
