<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:01
  from 'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1ed05a124_19308693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd56288dbe9abc0d177138bd4a70f909e22632a9e' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ada1ed05a124_19308693 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.reviews','product_reviews.reviews'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['product_reviews_count'] > 0) {?>

    <?php $_smarty_tpl->assign('scroll_to_elm', (($tmp = $_smarty_tpl->getValue('scroll_to_elm') ?? null)===null||$tmp==='' ? "content_product_reviews" ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('external_click_id', (($tmp = $_smarty_tpl->getValue('external_click_id') ?? null)===null||$tmp==='' ? "product_reviews" ?? null : $tmp), false, NULL);?>
    
    <?php if ($_smarty_tpl->getValue('secondary')) {?>
        <?php $_smarty_tpl->assign('meta', "ty-muted ".((string)$_smarty_tpl->getValue('meta')), false, NULL);?>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('link') === true) {?>
        <?php $_smarty_tpl->assign('link', "products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&selected_section=product_reviews#product_reviews", false, NULL);?>
    <?php }?>
    
    <?php if ($_smarty_tpl->getValue('link')) {?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('link'))), ENT_QUOTES, 'UTF-8');?>
"
            class="ty-product-review-reviews-total-reviews ty-product-review-reviews-total-reviews--link <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php } elseif ($_smarty_tpl->getValue('button')) {?>
        <button type="button"
            class="ty-product-review-reviews-total-reviews ty-product-review-reviews-total-reviews--button
                ty-btn-reset
                cm-external-click <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>

            "
            data-ca-scroll="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('scroll_to_elm')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('external_click_id')), ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php } else { ?>
        <span class="ty-product-review-reviews-total-reviews ty-product-review-reviews-total-reviews--text <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>

        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.reviews", array($_smarty_tpl->getValue('total_product_reviews')), $_smarty_tpl->getSmarty()->getLanguage());?>


    <?php if ($_smarty_tpl->getValue('link')) {?>
        </a>
    <?php } elseif ($_smarty_tpl->getValue('button')) {?>
        </button>
    <?php } else { ?>
        </span>
    <?php }?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['product_reviews_count'] > 0) {?>

    <?php $_smarty_tpl->assign('scroll_to_elm', (($tmp = $_smarty_tpl->getValue('scroll_to_elm') ?? null)===null||$tmp==='' ? "content_product_reviews" ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('external_click_id', (($tmp = $_smarty_tpl->getValue('external_click_id') ?? null)===null||$tmp==='' ? "product_reviews" ?? null : $tmp), false, NULL);?>
    
    <?php if ($_smarty_tpl->getValue('secondary')) {?>
        <?php $_smarty_tpl->assign('meta', "ty-muted ".((string)$_smarty_tpl->getValue('meta')), false, NULL);?>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('link') === true) {?>
        <?php $_smarty_tpl->assign('link', "products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id'])."&selected_section=product_reviews#product_reviews", false, NULL);?>
    <?php }?>
    
    <?php if ($_smarty_tpl->getValue('link')) {?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('link'))), ENT_QUOTES, 'UTF-8');?>
"
            class="ty-product-review-reviews-total-reviews ty-product-review-reviews-total-reviews--link <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php } elseif ($_smarty_tpl->getValue('button')) {?>
        <button type="button"
            class="ty-product-review-reviews-total-reviews ty-product-review-reviews-total-reviews--button
                ty-btn-reset
                cm-external-click <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>

            "
            data-ca-scroll="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('scroll_to_elm')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('external_click_id')), ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php } else { ?>
        <span class="ty-product-review-reviews-total-reviews ty-product-review-reviews-total-reviews--text <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>

        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.reviews", array($_smarty_tpl->getValue('total_product_reviews')), $_smarty_tpl->getSmarty()->getLanguage());?>


    <?php if ($_smarty_tpl->getValue('link')) {?>
        </a>
    <?php } elseif ($_smarty_tpl->getValue('button')) {?>
        </button>
    <?php } else { ?>
        </span>
    <?php }?>

<?php }
}
}
}
