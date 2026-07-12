<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:39
  from 'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49ff4503b8_68951561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cfe104c01939c93c300f9f2a57ef472550fe8f0' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49ff4503b8_68951561 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.product_is_rated_n_out_of_five_stars','product_reviews.show_rating','product_reviews.click_to_see_reviews','product_reviews.reviews','product_reviews.product_is_rated_n_out_of_five_stars','product_reviews.show_rating','product_reviews.click_to_see_reviews','product_reviews.reviews'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('rating') > 0) {?>

<?php $_smarty_tpl->assign('integer_rating', $_smarty_tpl->getSmarty()->getModifierCallback('floor')($_smarty_tpl->getValue('rating')), false, NULL);
$_smarty_tpl->assign('accurate_rating', round((float) $_smarty_tpl->getValue('rating'), (int) 1, (int) 1), false, NULL);
$_smarty_tpl->assign('is_half_rating', (($_smarty_tpl->getValue('rating')-$_smarty_tpl->getValue('integer_rating')) >= 0.25 && ($_smarty_tpl->getValue('rating')-$_smarty_tpl->getValue('integer_rating')) < 0.75), false, NULL);
$_smarty_tpl->assign('integer_rating_math', round((float) $_smarty_tpl->getValue('rating'), (int) 0, (int) 1), false, NULL);
$_smarty_tpl->assign('full_stars_count', ($_smarty_tpl->getValue('is_half_rating')) ? $_smarty_tpl->getValue('integer_rating') : $_smarty_tpl->getValue('integer_rating_math'), false, NULL);
$_smarty_tpl->assign('scroll_to_elm', (($tmp = $_smarty_tpl->getValue('scroll_to_elm') ?? null)===null||$tmp==='' ? "content_product_reviews" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('external_click_id', (($tmp = $_smarty_tpl->getValue('external_click_id') ?? null)===null||$tmp==='' ? "product_reviews" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.product_is_rated_n_out_of_five_stars", array("[n]"=>$_smarty_tpl->getValue('accurate_rating')), $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>

<?php if ($_smarty_tpl->getValue('link')) {?>
    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.show_rating", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable18=ob_get_clean();
$_smarty_tpl->assign('title', ((string)$_smarty_tpl->getValue('title')).". ".$_prefixVariable18.".", false, NULL);
} elseif ($_smarty_tpl->getValue('button')) {?>
    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.click_to_see_reviews", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable19=ob_get_clean();
$_smarty_tpl->assign('title', ((string)$_smarty_tpl->getValue('title')).". ".$_prefixVariable19.".", false, NULL);
}
if ($_smarty_tpl->getValue('link') === true) {?>
    <?php $_smarty_tpl->assign('link', "products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&selected_section=product_reviews#product_reviews", false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('link')) {?>
    <a class="ty-product-review-reviews-stars__link <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('link'))), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
">
<?php } elseif ($_smarty_tpl->getValue('button')) {?>
    <button type="button" class="ty-product-review-reviews-stars__button ty-btn-reset cm-external-click <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
" data-ca-scroll="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('scroll_to_elm')), ENT_QUOTES, 'UTF-8');?>
" data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('external_click_id')), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
">
<?php }?>
<span class="ty-product-review-reviews-stars <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating_num'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('integer_rating_math') < 4.25) {?>is-half <?php }
if ($_smarty_tpl->getValue('size') === "large") {?>ty-product-review-reviews-stars--large<?php } elseif ($_smarty_tpl->getValue('size') === "xlarge") {?>ty-product-review-reviews-stars--xlarge<?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating_num'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-show-rating-num<?php }?>" data-ca-product-review-reviews-stars-rating="<?php echo htmlspecialchars((string) (round((float) $_smarty_tpl->getValue('rating'), (int) 0, (int) 1)), ENT_QUOTES, 'UTF-8');?>
" data-ca-product-review-reviews-stars-full="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('full_stars_count')), ENT_QUOTES, 'UTF-8');?>
" data-ca-product-review-reviews-stars-is-half="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('is_half_rating')), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->getValue('link') && !$_smarty_tpl->getValue('button')) {?> title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
></span>
<?php if (((($tmp = $_smarty_tpl->getValue('show_rating_num') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating_num'] ?? null : $tmp)) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <span class="ut2-rating-stars-num"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('accurate_rating')), ENT_QUOTES, 'UTF-8');?>
</span>
<?php }
if ($_smarty_tpl->getValue('product')['reviews_count']) {?><div class="cn-reviews"><?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.reviews", array($_smarty_tpl->getValue('product')['reviews_count']), $_smarty_tpl->getSmarty()->getLanguage());?>
)<?php } else { ?>(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['reviews_count']), ENT_QUOTES, 'UTF-8');?>
)<?php }?></div><?php }
if ($_smarty_tpl->getValue('link')) {?>
    </a>
<?php } elseif ($_smarty_tpl->getValue('button')) {?>
    </button>
<?php }?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('rating') > 0) {?>

<?php $_smarty_tpl->assign('integer_rating', $_smarty_tpl->getSmarty()->getModifierCallback('floor')($_smarty_tpl->getValue('rating')), false, NULL);
$_smarty_tpl->assign('accurate_rating', round((float) $_smarty_tpl->getValue('rating'), (int) 1, (int) 1), false, NULL);
$_smarty_tpl->assign('is_half_rating', (($_smarty_tpl->getValue('rating')-$_smarty_tpl->getValue('integer_rating')) >= 0.25 && ($_smarty_tpl->getValue('rating')-$_smarty_tpl->getValue('integer_rating')) < 0.75), false, NULL);
$_smarty_tpl->assign('integer_rating_math', round((float) $_smarty_tpl->getValue('rating'), (int) 0, (int) 1), false, NULL);
$_smarty_tpl->assign('full_stars_count', ($_smarty_tpl->getValue('is_half_rating')) ? $_smarty_tpl->getValue('integer_rating') : $_smarty_tpl->getValue('integer_rating_math'), false, NULL);
$_smarty_tpl->assign('scroll_to_elm', (($tmp = $_smarty_tpl->getValue('scroll_to_elm') ?? null)===null||$tmp==='' ? "content_product_reviews" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('external_click_id', (($tmp = $_smarty_tpl->getValue('external_click_id') ?? null)===null||$tmp==='' ? "product_reviews" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.product_is_rated_n_out_of_five_stars", array("[n]"=>$_smarty_tpl->getValue('accurate_rating')), $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>

<?php if ($_smarty_tpl->getValue('link')) {?>
    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.show_rating", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable20=ob_get_clean();
$_smarty_tpl->assign('title', ((string)$_smarty_tpl->getValue('title')).". ".$_prefixVariable20.".", false, NULL);
} elseif ($_smarty_tpl->getValue('button')) {?>
    <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.click_to_see_reviews", [], $_smarty_tpl->getSmarty()->getLanguage());
$_prefixVariable21=ob_get_clean();
$_smarty_tpl->assign('title', ((string)$_smarty_tpl->getValue('title')).". ".$_prefixVariable21.".", false, NULL);
}
if ($_smarty_tpl->getValue('link') === true) {?>
    <?php $_smarty_tpl->assign('link', "products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&selected_section=product_reviews#product_reviews", false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('link')) {?>
    <a class="ty-product-review-reviews-stars__link <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('link'))), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
">
<?php } elseif ($_smarty_tpl->getValue('button')) {?>
    <button type="button" class="ty-product-review-reviews-stars__button ty-btn-reset cm-external-click <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
" data-ca-scroll="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('scroll_to_elm')), ENT_QUOTES, 'UTF-8');?>
" data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('external_click_id')), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
">
<?php }?>
<span class="ty-product-review-reviews-stars <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating_num'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('integer_rating_math') < 4.25) {?>is-half <?php }
if ($_smarty_tpl->getValue('size') === "large") {?>ty-product-review-reviews-stars--large<?php } elseif ($_smarty_tpl->getValue('size') === "xlarge") {?>ty-product-review-reviews-stars--xlarge<?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating_num'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-show-rating-num<?php }?>" data-ca-product-review-reviews-stars-rating="<?php echo htmlspecialchars((string) (round((float) $_smarty_tpl->getValue('rating'), (int) 0, (int) 1)), ENT_QUOTES, 'UTF-8');?>
" data-ca-product-review-reviews-stars-full="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('full_stars_count')), ENT_QUOTES, 'UTF-8');?>
" data-ca-product-review-reviews-stars-is-half="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('is_half_rating')), ENT_QUOTES, 'UTF-8');?>
" <?php if (!$_smarty_tpl->getValue('link') && !$_smarty_tpl->getValue('button')) {?> title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
></span>
<?php if (((($tmp = $_smarty_tpl->getValue('show_rating_num') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating_num'] ?? null : $tmp)) == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <span class="ut2-rating-stars-num"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('accurate_rating')), ENT_QUOTES, 'UTF-8');?>
</span>
<?php }
if ($_smarty_tpl->getValue('product')['reviews_count']) {?><div class="cn-reviews"><?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?>(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.reviews", array($_smarty_tpl->getValue('product')['reviews_count']), $_smarty_tpl->getSmarty()->getLanguage());?>
)<?php } else { ?>(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['reviews_count']), ENT_QUOTES, 'UTF-8');?>
)<?php }?></div><?php }
if ($_smarty_tpl->getValue('link')) {?>
    </a>
<?php } elseif ($_smarty_tpl->getValue('button')) {?>
    </button>
<?php }?>

<?php }
}
}
}
