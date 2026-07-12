<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:02
  from 'tygh:addons/product_reviews/views/product_reviews/components/product_star_line.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1eebd2aa0_96640799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b16d49ffeaf381a8cbd9b14807577e0854138cf9' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/product_star_line.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ada1eebd2aa0_96640799 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.n_stars','product_reviews.reviews','product_reviews.n_stars','product_reviews.reviews'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?>
<div class="ty-product-review-product-star-line">

    <div class="ty-product-review-product-star-line__quantity"                 style="<?php if ($_smarty_tpl->getValue('selected_rating') == $_smarty_tpl->getValue('quantity')) {?>color: var(--color-links);font-weight: 600;<?php }?>">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.n_stars", array($_smarty_tpl->getValue('quantity')), $_smarty_tpl->getSmarty()->getLanguage());?>

    </div>
        <a
                href="<?php ob_start();
if ($_smarty_tpl->getValue('selected_rating') == $_smarty_tpl->getValue('quantity')) {
echo "0";
} else {
echo (string)$_smarty_tpl->getValue('quantity');
}
$_prefixVariable7=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"abt__ut2_reviews_rating=".$_prefixVariable7."&selected_section=product_reviews"))), ENT_QUOTES, 'UTF-8');?>
"
                class="ty-product-review-reviews-navigation__filter-link cm-ajax"
                data-ca-target-id="product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
                rel="nofollow"

        >
            <progress
                class="ty-product-review-product-star-line__line"
                max="100"
                value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('percentage')), ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.reviews", array($_smarty_tpl->getValue('count')), $_smarty_tpl->getSmarty()->getLanguage());?>
"
            ></progress>
        </a>

    <div class="ty-product-review-product-star-line__percentage">
        <?php echo htmlspecialchars((string) (round((float) $_smarty_tpl->getValue('percentage'), (int) 0, (int) 1)), ENT_QUOTES, 'UTF-8');?>
%
    </div>

</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_star_line.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/product_star_line.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="ty-product-review-product-star-line">

    <div class="ty-product-review-product-star-line__quantity"                 style="<?php if ($_smarty_tpl->getValue('selected_rating') == $_smarty_tpl->getValue('quantity')) {?>color: var(--color-links);font-weight: 600;<?php }?>">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.n_stars", array($_smarty_tpl->getValue('quantity')), $_smarty_tpl->getSmarty()->getLanguage());?>

    </div>
        <a
                href="<?php ob_start();
if ($_smarty_tpl->getValue('selected_rating') == $_smarty_tpl->getValue('quantity')) {
echo "0";
} else {
echo (string)$_smarty_tpl->getValue('quantity');
}
$_prefixVariable8=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"abt__ut2_reviews_rating=".$_prefixVariable8."&selected_section=product_reviews"))), ENT_QUOTES, 'UTF-8');?>
"
                class="ty-product-review-reviews-navigation__filter-link cm-ajax"
                data-ca-target-id="product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
                rel="nofollow"

        >
            <progress
                class="ty-product-review-product-star-line__line"
                max="100"
                value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('percentage')), ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.reviews", array($_smarty_tpl->getValue('count')), $_smarty_tpl->getSmarty()->getLanguage());?>
"
            ></progress>
        </a>

    <div class="ty-product-review-product-star-line__percentage">
        <?php echo htmlspecialchars((string) (round((float) $_smarty_tpl->getValue('percentage'), (int) 0, (int) 1)), ENT_QUOTES, 'UTF-8');?>
%
    </div>

</div><?php }
}
}
