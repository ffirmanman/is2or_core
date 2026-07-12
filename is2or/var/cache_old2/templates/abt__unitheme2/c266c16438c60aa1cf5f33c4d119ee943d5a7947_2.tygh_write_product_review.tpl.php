<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:addons/product_reviews/views/product_reviews/components/write_product_review.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaac8a7d1_92442810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c266c16438c60aa1cf5f33c4d119ee943d5a7947' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/write_product_review.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl' => 2,
  ),
))) {
function content_69afafaac8a7d1_92442810 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components';
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.review_this_product','product_reviews.review_this_product_description','product_reviews.write_review','product_reviews.review_this_product','product_reviews.review_this_product_description','product_reviews.write_review'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?>
<section class="ty-product-review-write-product-review">

    <h4 class="ty-product-review-write-product-review__title">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.review_this_product", [], $_smarty_tpl->getSmarty()->getLanguage());?>

    </h4>

    <div class="ty-product-review-write-product-review__description">
        <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.review_this_product_description", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
    </div>

    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.write_review", [], $_smarty_tpl->getSmarty()->getLanguage()),'product_id'=>$_smarty_tpl->getValue('product_id'),'locate_to_product_review_tab'=>$_smarty_tpl->getValue('locate_to_product_review_tab'),'but_meta'=>"ty-btn__secondary"), (int) 0, $_smarty_current_dir);
?>

</section>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/write_product_review.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/write_product_review.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<section class="ty-product-review-write-product-review">

    <h4 class="ty-product-review-write-product-review__title">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.review_this_product", [], $_smarty_tpl->getSmarty()->getLanguage());?>

    </h4>

    <div class="ty-product-review-write-product-review__description">
        <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.review_this_product_description", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
    </div>

    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.write_review", [], $_smarty_tpl->getSmarty()->getLanguage()),'product_id'=>$_smarty_tpl->getValue('product_id'),'locate_to_product_review_tab'=>$_smarty_tpl->getValue('locate_to_product_review_tab'),'but_meta'=>"ty-btn__secondary"), (int) 0, $_smarty_current_dir);
?>

</section>
<?php }
}
}
