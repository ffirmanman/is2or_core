<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:addons/product_reviews/views/product_reviews/components/product_rating.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a00da0f82_72762024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c200ec2425874fc4cd32f115e37a319d8b157d6c' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/product_rating.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_stars_details.tpl' => 2,
  ),
))) {
function content_69fb4a00da0f82_72762024 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?>

<?php if ($_smarty_tpl->getValue('product')['product_reviews_count'] > 0) {?>
    <section class="ty-product-review-product-rating">

        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->getValue('average_rating'),'total_product_reviews'=>$_smarty_tpl->getValue('total_product_reviews')), (int) 0, $_smarty_current_dir);
?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->getValue('ratings_stats'),'total_product_reviews'=>$_smarty_tpl->getValue('total_product_reviews')), (int) 0, $_smarty_current_dir);
?>

    </section>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_rating.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/product_rating.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>

<?php if ($_smarty_tpl->getValue('product')['product_reviews_count'] > 0) {?>
    <section class="ty-product-review-product-rating">

        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->getValue('average_rating'),'total_product_reviews'=>$_smarty_tpl->getValue('total_product_reviews')), (int) 0, $_smarty_current_dir);
?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->getValue('ratings_stats'),'total_product_reviews'=>$_smarty_tpl->getValue('total_product_reviews')), (int) 0, $_smarty_current_dir);
?>

    </section>
<?php }
}
}
}
