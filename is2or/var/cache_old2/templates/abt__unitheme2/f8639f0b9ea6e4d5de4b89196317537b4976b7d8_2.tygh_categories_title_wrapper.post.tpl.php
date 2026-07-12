<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:08
  from 'tygh:addons/ab__seo_reviews/hooks/wrapper/categories_title_wrapper.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa8e380e5_56744258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8639f0b9ea6e4d5de4b89196317537b4976b7d8' => 
    array (
      0 => 'addons/ab__seo_reviews/hooks/wrapper/categories_title_wrapper.post.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa8e380e5_56744258 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/ab__seo_reviews/hooks/wrapper';
\Tygh\Languages\Helper::preloadLangVars(array('reviews','reviews'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('reviews_page')['posts_count']) {?>
    <span class="ab-sr__pp">
    <?php $_smarty_tpl->assign('integer_rating', $_smarty_tpl->getSmarty()->getModifierCallback('floor')($_smarty_tpl->getValue('reviews_page')['average_rating']), false, NULL);?>
    <?php $_smarty_tpl->assign('accurate_rating', round((float) $_smarty_tpl->getValue('reviews_page')['average_rating'], (int) 1, (int) 1), false, NULL);?>
    <?php $_smarty_tpl->assign('is_half_rating', (($_smarty_tpl->getValue('reviews_page')['average_rating']-$_smarty_tpl->getValue('integer_rating')) >= 0.25 && ($_smarty_tpl->getValue('reviews_page')['average_rating']-$_smarty_tpl->getValue('integer_rating')) < 0.75), false, NULL);?>
    <?php $_smarty_tpl->assign('integer_rating_math', round((float) $_smarty_tpl->getValue('reviews_page')['average_rating'], (int) 0, (int) 1), false, NULL);?>
    <?php $_smarty_tpl->assign('full_stars_count', ($_smarty_tpl->getValue('is_half_rating')) ? $_smarty_tpl->getValue('integer_rating') : $_smarty_tpl->getValue('integer_rating_math'), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('reviews_page')['average_rating']) {?>
        <span class="ty-product-review-reviews-stars"
            data-ca-product-review-reviews-stars-rating="<?php echo htmlspecialchars((string) (round((float) $_smarty_tpl->getValue('reviews_page')['average_rating'], (int) 0, (int) 1)), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-full="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('full_stars_count')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-is-half="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('is_half_rating')), ENT_QUOTES, 'UTF-8');?>
">
        </span>
    <?php } else { ?>
        <span class="ty-product-review-reviews-stars" data-ca-product-review-reviews-stars-full="0"></span>
    <?php }?>

    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("ab__seo_reviews.view_category?category_id=".((string)$_smarty_tpl->getValue('reviews_page')['object_id']))), ENT_QUOTES, 'UTF-8');?>
" title="" class="ab-sr__link"><i class="ut2-icon-outline-chat"></i> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('reviews_page')['posts_count']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reviews", array($_smarty_tpl->getValue('reviews_page')['posts_count']), $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    </span>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__seo_reviews/hooks/wrapper/categories_title_wrapper.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__seo_reviews/hooks/wrapper/categories_title_wrapper.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('reviews_page')['posts_count']) {?>
    <span class="ab-sr__pp">
    <?php $_smarty_tpl->assign('integer_rating', $_smarty_tpl->getSmarty()->getModifierCallback('floor')($_smarty_tpl->getValue('reviews_page')['average_rating']), false, NULL);?>
    <?php $_smarty_tpl->assign('accurate_rating', round((float) $_smarty_tpl->getValue('reviews_page')['average_rating'], (int) 1, (int) 1), false, NULL);?>
    <?php $_smarty_tpl->assign('is_half_rating', (($_smarty_tpl->getValue('reviews_page')['average_rating']-$_smarty_tpl->getValue('integer_rating')) >= 0.25 && ($_smarty_tpl->getValue('reviews_page')['average_rating']-$_smarty_tpl->getValue('integer_rating')) < 0.75), false, NULL);?>
    <?php $_smarty_tpl->assign('integer_rating_math', round((float) $_smarty_tpl->getValue('reviews_page')['average_rating'], (int) 0, (int) 1), false, NULL);?>
    <?php $_smarty_tpl->assign('full_stars_count', ($_smarty_tpl->getValue('is_half_rating')) ? $_smarty_tpl->getValue('integer_rating') : $_smarty_tpl->getValue('integer_rating_math'), false, NULL);?>

    <?php if ($_smarty_tpl->getValue('reviews_page')['average_rating']) {?>
        <span class="ty-product-review-reviews-stars"
            data-ca-product-review-reviews-stars-rating="<?php echo htmlspecialchars((string) (round((float) $_smarty_tpl->getValue('reviews_page')['average_rating'], (int) 0, (int) 1)), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-full="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('full_stars_count')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-is-half="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('is_half_rating')), ENT_QUOTES, 'UTF-8');?>
">
        </span>
    <?php } else { ?>
        <span class="ty-product-review-reviews-stars" data-ca-product-review-reviews-stars-full="0"></span>
    <?php }?>

    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("ab__seo_reviews.view_category?category_id=".((string)$_smarty_tpl->getValue('reviews_page')['object_id']))), ENT_QUOTES, 'UTF-8');?>
" title="" class="ab-sr__link"><i class="ut2-icon-outline-chat"></i> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('reviews_page')['posts_count']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reviews", array($_smarty_tpl->getValue('reviews_page')['posts_count']), $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    </span>
<?php }
}
}
}
