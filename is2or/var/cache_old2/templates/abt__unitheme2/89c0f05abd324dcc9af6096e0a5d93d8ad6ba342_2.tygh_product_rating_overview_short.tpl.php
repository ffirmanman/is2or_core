<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa9b3b453_79577031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89c0f05abd324dcc9af6096e0a5d93d8ad6ba342' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl' => 2,
  ),
))) {
function content_69afafa9b3b453_79577031 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components';
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.write_review','product_reviews.write_review'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('show_write_product_review_button', (($tmp = $_smarty_tpl->getValue('show_write_product_review_button') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?><section class="ty-product-review-product-rating-overview-short" id="product_review_product_rating_overview_short_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->getValue('average_rating'),'size'=>"large",'button'=>$_smarty_tpl->getValue('button'),'link'=>$_smarty_tpl->getValue('link')), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_product_reviews'=>$_smarty_tpl->getValue('total_product_reviews'),'button'=>$_smarty_tpl->getValue('button'),'link'=>$_smarty_tpl->getValue('link')), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('show_write_product_review_button')) {
$_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.write_review", [], $_smarty_tpl->getSmarty()->getLanguage()),'product_id'=>$_smarty_tpl->getValue('product')['product_id'],'locate_to_product_review_tab'=>$_smarty_tpl->getValue('locate_to_product_review_tab'),'but_meta'=>"ty-btn__text"), (int) 0, $_smarty_current_dir);
}?><!--product_review_product_rating_overview_short_<?php echo $_smarty_tpl->getValue('obj_prefix');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></section><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('show_write_product_review_button', (($tmp = $_smarty_tpl->getValue('show_write_product_review_button') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?><section class="ty-product-review-product-rating-overview-short" id="product_review_product_rating_overview_short_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->getValue('average_rating'),'size'=>"large",'button'=>$_smarty_tpl->getValue('button'),'link'=>$_smarty_tpl->getValue('link')), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_product_reviews'=>$_smarty_tpl->getValue('total_product_reviews'),'button'=>$_smarty_tpl->getValue('button'),'link'=>$_smarty_tpl->getValue('link')), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('show_write_product_review_button')) {
$_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.write_review", [], $_smarty_tpl->getSmarty()->getLanguage()),'product_id'=>$_smarty_tpl->getValue('product')['product_id'],'locate_to_product_review_tab'=>$_smarty_tpl->getValue('locate_to_product_review_tab'),'but_meta'=>"ty-btn__text"), (int) 0, $_smarty_current_dir);
}?><!--product_review_product_rating_overview_short_<?php echo $_smarty_tpl->getValue('obj_prefix');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
--></section><?php }
}
}
