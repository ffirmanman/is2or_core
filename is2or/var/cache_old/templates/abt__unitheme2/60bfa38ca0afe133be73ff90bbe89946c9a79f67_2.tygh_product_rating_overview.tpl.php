<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:02
  from 'tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1eeba2702_61463374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60bfa38ca0afe133be73ff90bbe89946c9a79f67' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl' => 2,
  ),
))) {
function content_69ada1eeba2702_61463374 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['product_reviews_count']) {?>
    <?php $_smarty_tpl->assign('out_of_five', (($tmp = $_smarty_tpl->getValue('out_of_five') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

    <section class="ty-product-review-product-rating-overview">

        <div class="ty-product-review-product-rating-overview__primary">
                <div class="ty-product-review-product-rating-overview__rating">
                    <strong class="ty-product-review-product-rating-overview__rating-current">
                        <?php echo htmlspecialchars((string) (round((float) (($tmp = $_smarty_tpl->getValue('average_rating') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), (int) 1, (int) 1)), ENT_QUOTES, 'UTF-8');?>

                    </strong>
                </div>
        </div>

        <div class="ty-product-review-product-rating-overview__secondary">
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->getValue('average_rating'),'size'=>"large",'show_rating_num'=>'NO'), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_product_reviews'=>$_smarty_tpl->getValue('total_product_reviews'),'secondary'=>true), (int) 0, $_smarty_current_dir);
?>
        </div>
    </section>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['product_reviews_count']) {?>
    <?php $_smarty_tpl->assign('out_of_five', (($tmp = $_smarty_tpl->getValue('out_of_five') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

    <section class="ty-product-review-product-rating-overview">

        <div class="ty-product-review-product-rating-overview__primary">
                <div class="ty-product-review-product-rating-overview__rating">
                    <strong class="ty-product-review-product-rating-overview__rating-current">
                        <?php echo htmlspecialchars((string) (round((float) (($tmp = $_smarty_tpl->getValue('average_rating') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), (int) 1, (int) 1)), ENT_QUOTES, 'UTF-8');?>

                    </strong>
                </div>
        </div>

        <div class="ty-product-review-product-rating-overview__secondary">
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->getValue('average_rating'),'size'=>"large",'show_rating_num'=>'NO'), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_product_reviews'=>$_smarty_tpl->getValue('total_product_reviews'),'secondary'=>true), (int) 0, $_smarty_current_dir);
?>
        </div>
    </section>
<?php }
}
}
}
