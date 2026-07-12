<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:02
  from 'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1eec90385_60077934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '551206310be02a3d8797a8ef94993dc5f2cf4bde' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/sorting.tpl' => 2,
  ),
))) {
function content_69ada1eec90385_60077934 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.product_reviews.filter.only_buyers','product_reviews.with_photo','abt__ut2.product_reviews.filter.only_buyers','product_reviews.with_photo'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('total_product_reviews')) {?>

        <?php $_smarty_tpl->assign('product_reviews_with_images', ($_smarty_tpl->getValue('_REQUEST')['with_images'] === "1"), false, NULL);?>
    
    <nav class="ty-product-review-reviews-navigation">
        <div class="ty-product-review-reviews-navigation__sorting">
            <?php $_smarty_tpl->assign('curl', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"result_ids","layout"), false, NULL);?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sorting'=>$_smarty_tpl->getValue('product_reviews_sorting'),'sorting_orders'=>$_smarty_tpl->getValue('product_reviews_sorting_orders'),'search'=>$_smarty_tpl->getValue('product_reviews_search'),'avail_sorting'=>$_smarty_tpl->getValue('product_reviews_avail_sorting'),'ajax_class'=>"cm-ajax",'pagination_id'=>"product_reviews_list_".((string)$_smarty_tpl->getValue('product_id'))), (int) 0, $_smarty_current_dir);
?>
            <div class="ty-sort-dropdown">
                <div class="ut2-sort-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>

                <a id="sw_filter_rating_dropdown" class="ty-sort-dropdown__wrapper cm-combination">
                    <span><?php if ($_smarty_tpl->getValue('selected_rating') > 0) {?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating.n_stars', array($_smarty_tpl->getValue('selected_rating')), $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating.all_ratings', [], $_smarty_tpl->getSmarty()->getLanguage());
}?></span>
                    <i class="ut2-icon-outline-expand_more"></i>
                </a>

                <div id="filter_rating_dropdown" class="ty-sort-dropdown__content cm-popup-box hidden">
                    <div class="ut2-popup-box-title">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating', [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        <div class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_filter_rating_dropdown">
                            <i class="ut2-icon-baseline-close"></i>
                        </div>
                    </div>
                    <ul>
                        <li class="ty-sort-dropdown__content-item">
                            <a class="ty-sort-dropdown__content-item-a cm-ajax"
                               href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"&abt__ut2_reviews_rating=0&selected_section=product_reviews"))), ENT_QUOTES, 'UTF-8');?>
"
                               data-ca-target-id="product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating.all_ratings', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                        </li>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, array(1,2,3,4,5), 'stars');
$foreach82DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('stars')->value) {
$foreach82DoElse = false;
?>
                            <li class="ty-sort-dropdown__content-item">
                                <a class="ty-sort-dropdown__content-item-a  cm-ajax"
                                   href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"&abt__ut2_reviews_rating=".((string)$_smarty_tpl->getValue('stars'))."&selected_section=product_reviews"))), ENT_QUOTES, 'UTF-8');?>
"
                                   data-ca-target-id="product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
                                ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating.n_stars', array($_smarty_tpl->getValue('stars')), $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            </li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ty-product-review-reviews-navigation__filters">
            <label class="ty-product-review-reviews-navigation__filter <?php if ($_smarty_tpl->getValue('product_reviews_only_buyers')) {?>ty-product-review-reviews-navigation__filter--active<?php }?>">
                <input id="product_review_only_buyers"
                       type="checkbox"
                       name="product_review_only_buyers"
                       <?php if ($_smarty_tpl->getValue('product_reviews_only_buyers')) {?>checked="checked"<?php }?>
                       class="cm-external-click ty-product-review-reviews-navigation__filter-checkbox
                    <?php if ($_smarty_tpl->getValue('product_reviews_only_buyers')) {?>
                        ty-product-review-reviews-navigation__filter-checkbox--active
                    <?php }?>
                    "
                       data-ca-external-click-id="product_review_only_buyers_link"
                >
                <a id="product_review_only_buyers_link"
                   href="<?php ob_start();
if ($_smarty_tpl->getValue('product_reviews_only_buyers')) {
echo "0";
} else {
echo "1";
}
$_prefixVariable9=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"only_buyers=".$_prefixVariable9."&selected_section=product_reviews"))), ENT_QUOTES, 'UTF-8');?>
"
                   class="ty-product-review-reviews-navigation__filter-link cm-ajax"
                   data-ca-target-id="product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
                   rel="nofollow"
                >
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.filter.only_buyers", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                </a>
            </label>

            <label class="ty-product-review-reviews-navigation__filter <?php if ($_smarty_tpl->getValue('product_reviews_with_images')) {?>ty-product-review-reviews-navigation__filter--active<?php }?>">
                <input id="product_review_with_images"
                       type="checkbox"
                       name="product_review_with_images"
                       <?php if ($_smarty_tpl->getValue('product_reviews_with_images')) {?>checked="checked"<?php }?>
                       class="cm-external-click ty-product-review-reviews-navigation__filter-checkbox
                    <?php if ($_smarty_tpl->getValue('product_reviews_with_images')) {?>
                        ty-product-review-reviews-navigation__filter-checkbox--active
                    <?php }?>
                    "
                       data-ca-external-click-id="product_review_with_images_link"
                >
                <a id="product_review_with_images_link"
                   href="<?php ob_start();
if ($_smarty_tpl->getValue('product_reviews_with_images')) {
echo "0";
} else {
echo "1";
}
$_prefixVariable10=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"with_images=".$_prefixVariable10."&selected_section=product_reviews"))), ENT_QUOTES, 'UTF-8');?>
"
                   class="ty-product-review-reviews-navigation__filter-link cm-ajax"
                   data-ca-target-id="product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
                   rel="nofollow"
                >
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.with_photo", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                </a>
            </label>
        </div>
        <div class="ty-product-review-reviews-navigation__total"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.we_found_n_reviews', array($_smarty_tpl->getValue('abt__ut2_product_reviews_count')), $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
    </nav>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('total_product_reviews')) {?>

        <?php $_smarty_tpl->assign('product_reviews_with_images', ($_smarty_tpl->getValue('_REQUEST')['with_images'] === "1"), false, NULL);?>
    
    <nav class="ty-product-review-reviews-navigation">
        <div class="ty-product-review-reviews-navigation__sorting">
            <?php $_smarty_tpl->assign('curl', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"result_ids","layout"), false, NULL);?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sorting'=>$_smarty_tpl->getValue('product_reviews_sorting'),'sorting_orders'=>$_smarty_tpl->getValue('product_reviews_sorting_orders'),'search'=>$_smarty_tpl->getValue('product_reviews_search'),'avail_sorting'=>$_smarty_tpl->getValue('product_reviews_avail_sorting'),'ajax_class'=>"cm-ajax",'pagination_id'=>"product_reviews_list_".((string)$_smarty_tpl->getValue('product_id'))), (int) 0, $_smarty_current_dir);
?>
            <div class="ty-sort-dropdown">
                <div class="ut2-sort-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>

                <a id="sw_filter_rating_dropdown" class="ty-sort-dropdown__wrapper cm-combination">
                    <span><?php if ($_smarty_tpl->getValue('selected_rating') > 0) {?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating.n_stars', array($_smarty_tpl->getValue('selected_rating')), $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating.all_ratings', [], $_smarty_tpl->getSmarty()->getLanguage());
}?></span>
                    <i class="ut2-icon-outline-expand_more"></i>
                </a>

                <div id="filter_rating_dropdown" class="ty-sort-dropdown__content cm-popup-box hidden">
                    <div class="ut2-popup-box-title">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating', [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        <div class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_filter_rating_dropdown">
                            <i class="ut2-icon-baseline-close"></i>
                        </div>
                    </div>
                    <ul>
                        <li class="ty-sort-dropdown__content-item">
                            <a class="ty-sort-dropdown__content-item-a cm-ajax"
                               href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"&abt__ut2_reviews_rating=0&selected_section=product_reviews"))), ENT_QUOTES, 'UTF-8');?>
"
                               data-ca-target-id="product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating.all_ratings', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                        </li>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, array(1,2,3,4,5), 'stars');
$foreach83DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('stars')->value) {
$foreach83DoElse = false;
?>
                            <li class="ty-sort-dropdown__content-item">
                                <a class="ty-sort-dropdown__content-item-a  cm-ajax"
                                   href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"&abt__ut2_reviews_rating=".((string)$_smarty_tpl->getValue('stars'))."&selected_section=product_reviews"))), ENT_QUOTES, 'UTF-8');?>
"
                                   data-ca-target-id="product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
                                ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating.n_stars', array($_smarty_tpl->getValue('stars')), $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            </li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ty-product-review-reviews-navigation__filters">
            <label class="ty-product-review-reviews-navigation__filter <?php if ($_smarty_tpl->getValue('product_reviews_only_buyers')) {?>ty-product-review-reviews-navigation__filter--active<?php }?>">
                <input id="product_review_only_buyers"
                       type="checkbox"
                       name="product_review_only_buyers"
                       <?php if ($_smarty_tpl->getValue('product_reviews_only_buyers')) {?>checked="checked"<?php }?>
                       class="cm-external-click ty-product-review-reviews-navigation__filter-checkbox
                    <?php if ($_smarty_tpl->getValue('product_reviews_only_buyers')) {?>
                        ty-product-review-reviews-navigation__filter-checkbox--active
                    <?php }?>
                    "
                       data-ca-external-click-id="product_review_only_buyers_link"
                >
                <a id="product_review_only_buyers_link"
                   href="<?php ob_start();
if ($_smarty_tpl->getValue('product_reviews_only_buyers')) {
echo "0";
} else {
echo "1";
}
$_prefixVariable11=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"only_buyers=".$_prefixVariable11."&selected_section=product_reviews"))), ENT_QUOTES, 'UTF-8');?>
"
                   class="ty-product-review-reviews-navigation__filter-link cm-ajax"
                   data-ca-target-id="product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
                   rel="nofollow"
                >
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.filter.only_buyers", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                </a>
            </label>

            <label class="ty-product-review-reviews-navigation__filter <?php if ($_smarty_tpl->getValue('product_reviews_with_images')) {?>ty-product-review-reviews-navigation__filter--active<?php }?>">
                <input id="product_review_with_images"
                       type="checkbox"
                       name="product_review_with_images"
                       <?php if ($_smarty_tpl->getValue('product_reviews_with_images')) {?>checked="checked"<?php }?>
                       class="cm-external-click ty-product-review-reviews-navigation__filter-checkbox
                    <?php if ($_smarty_tpl->getValue('product_reviews_with_images')) {?>
                        ty-product-review-reviews-navigation__filter-checkbox--active
                    <?php }?>
                    "
                       data-ca-external-click-id="product_review_with_images_link"
                >
                <a id="product_review_with_images_link"
                   href="<?php ob_start();
if ($_smarty_tpl->getValue('product_reviews_with_images')) {
echo "0";
} else {
echo "1";
}
$_prefixVariable12=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"with_images=".$_prefixVariable12."&selected_section=product_reviews"))), ENT_QUOTES, 'UTF-8');?>
"
                   class="ty-product-review-reviews-navigation__filter-link cm-ajax"
                   data-ca-target-id="product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
                   rel="nofollow"
                >
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.with_photo", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                </a>
            </label>
        </div>
        <div class="ty-product-review-reviews-navigation__total"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.we_found_n_reviews', array($_smarty_tpl->getValue('abt__ut2_product_reviews_count')), $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
    </nav>
<?php }
}
}
}
