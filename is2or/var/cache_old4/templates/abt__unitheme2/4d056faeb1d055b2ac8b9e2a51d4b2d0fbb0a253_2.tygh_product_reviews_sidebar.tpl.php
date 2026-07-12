<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a00e35a94_51134560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d056faeb1d055b2ac8b9e2a51d4b2d0fbb0a253' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/write_product_review.tpl' => 2,
  ),
))) {
function content_69fb4a00e35a94_51134560 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.write_review','product_reviews.write_review'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?>
<aside class="ty-product-review-reviews-sidebar<?php if ($_smarty_tpl->getValue('product_reviews')) {?> ty-product-review-reviews-sidebar--with-reviews<?php }?>">
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/write_product_review.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.write_review", [], $_smarty_tpl->getSmarty()->getLanguage()),'product_id'=>$_smarty_tpl->getValue('product_id'),'locate_to_product_review_tab'=>$_smarty_tpl->getValue('locate_to_product_review_tab')), (int) 0, $_smarty_current_dir);
?>
</aside><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<aside class="ty-product-review-reviews-sidebar<?php if ($_smarty_tpl->getValue('product_reviews')) {?> ty-product-review-reviews-sidebar--with-reviews<?php }?>">
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/write_product_review.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.write_review", [], $_smarty_tpl->getSmarty()->getLanguage()),'product_id'=>$_smarty_tpl->getValue('product_id'),'locate_to_product_review_tab'=>$_smarty_tpl->getValue('locate_to_product_review_tab')), (int) 0, $_smarty_current_dir);
?>
</aside><?php }
}
}
