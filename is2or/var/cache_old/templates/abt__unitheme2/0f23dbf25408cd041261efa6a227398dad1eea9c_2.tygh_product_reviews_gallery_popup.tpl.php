<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:20:50
  from 'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_gallery_popup.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1e2505e13_86513285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f23dbf25408cd041261efa6a227398dad1eea9c' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/product_reviews_gallery_popup.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/sorting.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post_popup_images.tpl' => 2,
    'tygh:common/image.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post_mini_gallery.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post_customer.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post_header.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post_message.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post_footer.tpl' => 2,
  ),
))) {
function content_69ada1e2505e13_86513285 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.product_reviews.filter.only_buyers','abt__ut2.product_reviews.matching_photos_found','product_reviews.no_reviews_found','abt__ut2.product_reviews.all_photos','abt__ut2.product_reviews.all_reviews','abt__ut2.product_reviews.filter.only_buyers','abt__ut2.product_reviews.matching_photos_found','product_reviews.no_reviews_found','abt__ut2.product_reviews.all_photos','abt__ut2.product_reviews.all_reviews'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
">

    <?php $_smarty_tpl->assign('selected_period', (($tmp = $_smarty_tpl->getValue('_REQUEST')['abt__ut2_reviews_period'] ?? null)===null||$tmp==='' ? 'all' ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('selected_rating', (($tmp = $_smarty_tpl->getValue('_REQUEST')['abt__ut2_reviews_rating'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('product_reviews_only_buyers', ($_smarty_tpl->getValue('_REQUEST')['only_buyers'] === "1"), false, NULL);?>

    <?php $_smarty_tpl->assign('curl', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("abt__ut2_product_reviews.get_product_reviews_gallery_popup&product_id=".((string)$_smarty_tpl->getValue('product_id'))."&abt__ut2_reviews_period=".((string)$_smarty_tpl->getValue('selected_period'))."&abt__ut2_reviews_rating=".((string)$_smarty_tpl->getValue('selected_rating'))."&only_buyers=".((string)$_smarty_tpl->getValue('product_reviews_only_buyers'))), false, NULL);?>
    <?php $_smarty_tpl->assign('images_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("abt__ut2_product_reviews.get_product_reviews_gallery_popup_page&product_id=".((string)$_smarty_tpl->getValue('product_id'))."&abt__ut2_reviews_period=".((string)$_smarty_tpl->getValue('selected_period'))."&abt__ut2_reviews_rating=".((string)$_smarty_tpl->getValue('selected_rating'))."&only_buyers=".((string)$_smarty_tpl->getValue('product_reviews_only_buyers'))), false, NULL);?>
    <?php if ((true && ($_smarty_tpl->hasVariable('product_reviews') && null !== ($_smarty_tpl->getValue('product_reviews') ?? null)))) {?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"abt__ut2_product_reviews_popup_pagination_".((string)$_smarty_tpl->getValue('product_id')),'search'=>$_smarty_tpl->getValue('search')), (int) 0, $_smarty_current_dir);
?>

        <div id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
" class="abt__ut2_product_reviews_gallery_popup_content">
            <nav class="ty-product-review-reviews-navigation">
                <div class="ty-product-review-reviews-navigation__sorting">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sorting'=>$_smarty_tpl->getValue('product_reviews_sorting'),'sorting_orders'=>$_smarty_tpl->getValue('product_reviews_sorting_orders'),'search'=>$_smarty_tpl->getValue('search'),'avail_sorting'=>$_smarty_tpl->getValue('product_reviews_avail_sorting'),'ajax_class'=>"cm-ajax",'pagination_id'=>"abt__ut2_product_reviews_gallery_popup_".((string)$_smarty_tpl->getValue('product_id')),'element'=>"elm_sorting_gallery_popup"), (int) 0, $_smarty_current_dir);
?>
                    <div class="ty-sort-dropdown">
                        <div class="ut2-sort-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>

                        <a id="sw_popup_filter_rating_dropdown" class="ty-sort-dropdown__wrapper cm-combination">
                            <span><?php if ($_smarty_tpl->getValue('selected_rating') > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating.n_stars', array($_smarty_tpl->getValue('selected_rating')), $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating.all_ratings', [], $_smarty_tpl->getSmarty()->getLanguage());
}?></span>
                            <i class="ut2-icon-outline-expand_more"></i>
                        </a>

                        <div id="popup_filter_rating_dropdown"
                             class="ty-sort-dropdown__content cm-smart-position cm-popup-box hidden">
                            <div class="ut2-popup-box-title">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating', [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                <div class="cm-external-click ut2-btn-close"
                                     data-ca-external-click-id="sw_popup_filter_rating_dropdown">
                                    <i class="ut2-icon-baseline-close"></i>
                                </div>
                            </div>
                            <ul>
                                <li class="ty-sort-dropdown__content-item">
                                    <a class="ty-sort-dropdown__content-item-a cm-ajax"
                                       href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"abt__ut2_reviews_rating=0"))), ENT_QUOTES, 'UTF-8');?>
"
                                       data-ca-target-id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating.all_ratings', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                                </li>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, array(1,2,3,4,5), 'stars');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('stars')->value) {
$foreach0DoElse = false;
?>
                                    <li class="ty-sort-dropdown__content-item">
                                        <a class="ty-sort-dropdown__content-item-a  cm-ajax"
                                           href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"abt__ut2_reviews_rating=".((string)$_smarty_tpl->getValue('stars'))))), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-target-id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
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
                    <input id="popup_product_review_only_buyers"
                           type="checkbox"
                           name="product_review_only_buyers"
                           <?php if ($_smarty_tpl->getValue('product_reviews_only_buyers')) {?>checked="checked"<?php }?>
                           class="cm-external-click ty-product-review-reviews-navigation__filter-checkbox<?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('product_reviews_only_buyers')) ? " ty-product-review-reviews-navigation__filter-checkbox--active" : ''), ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-external-click-id="popup_product_review_only_buyers_link"
                    >
                    <a id="popup_product_review_only_buyers_link"
                       href="<?php ob_start();
if ($_smarty_tpl->getValue('product_reviews_only_buyers')) {
echo "0";
} else {
echo "1";
}
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"only_buyers=".$_prefixVariable1))), ENT_QUOTES, 'UTF-8');?>
"
                       class="ty-product-review-reviews-navigation__filter-link cm-ajax"
                       data-ca-target-id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
                       rel="nofollow"
                    >
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.filter.only_buyers", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </a>
                </label>
                </div>
                <div class="ty-product-review-reviews-navigation__total ty-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.matching_photos_found", array($_smarty_tpl->getValue('search')['total_items']), $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
            </nav>

            <div class="ty-product-review-thumbnails-gallery ty-mt-m" <?php if ($_smarty_tpl->getValue('next_page')) {?>data-next-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('images_url'),"page=".((string)$_smarty_tpl->getValue('next_page')))), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <?php if (!$_smarty_tpl->getValue('product_reviews')) {?>
                    <div class="ty-no-items" style="grid-column: 1 / -1" ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.no_reviews_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                <?php }?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_popup_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->getValue('product_review')) {?>
        <?php $_smarty_tpl->assign('is_few_img', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product_review')['images']) > 1, false, NULL);?>
        <div class="ty-product-review-post__container">
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product_review')['images'])) {?>
            <a data-ca-target-id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
               class="cm-ajax ty-inline-block ty-mb-s abt__ut2_product_reviews_gallery_back_link"
               href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('curl'),"product_review_id")), ENT_QUOTES, 'UTF-8');?>
"
               style="display: flex; align-items: center;"
               rel="nofollow">
                <i class="ut2-icon-arrow_back_black ty-valign"></i><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.all_photos", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            </a>
        <?php } else { ?>
            <a
               href="javascript:void(0)"
               class="ty-inline-block ty-mb-s cm-scroll cm-external-click cm-dialog-closer"
               data-ca-scroll="#product_reviews"
               style="display: flex; align-items: center;"
               >
                <i class="ut2-icon-arrow_back_black ty-valign"></i><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.all_reviews", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            </a>
        <?php }?>
        <div class="ty-product-review-post__gallery">
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product_review')['images'])) {?>
            <div><div id="ty-product-review-gallery-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
"class="ty-product-review-popup-gallery"style="<?php if ($_smarty_tpl->getValue('is_few_img')) {?>opacity: 0;<?php }?>"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('reviews_images'), 'images', false, 'rid');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('rid')->value => $_smarty_tpl->getVariable('images')->value) {
$foreach1DoElse = false;
$_smarty_tpl->assign('link_current', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"product_review_id=".((string)$_smarty_tpl->getValue('rid'))), false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('images'), 'image');
$_smarty_tpl->getVariable('image')->index = -1;
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach2DoElse = false;
$_smarty_tpl->getVariable('image')->index++;
$foreach2Backup = clone $_smarty_tpl->getVariable('image');
$_smarty_tpl->assign('thumb_h', ($_smarty_tpl->getValue('image')['detailed']['image_y'] > $_smarty_tpl->getValue('image')['detailed']['image_x']) ? 490 : 0, false, NULL);
$_smarty_tpl->assign('thumb_w', ($_smarty_tpl->getValue('image')['detailed']['image_y'] <= $_smarty_tpl->getValue('image')['detailed']['image_x']) ? 490 : 0, false, NULL);?><div class="ty-product-review-popup-gallery-img" data-review-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rid')), ENT_QUOTES, 'UTF-8');?>
"data-review="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_current')), ENT_QUOTES, 'UTF-8');?>
"data-index="<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('image')->index), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('image'),'image_width'=>$_smarty_tpl->getValue('thumb_w'),'image_height'=>$_smarty_tpl->getValue('thumb_h'),'no_ids'=>true,'lazy_load'=>true), (int) 0, $_smarty_current_dir);
?></div><?php
$_smarty_tpl->setVariable('image', $foreach2Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><div id="ty-product-review-popup-gallery-paging" class="ty-center"></div><?php if ($_smarty_tpl->getValue('settings')['ab__device'] == "mobile") {
$_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_mini_gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}?></div>
            <?php }?>
            <?php $_smarty_tpl->assign('sw_id_postfix', ($_smarty_tpl->getValue('is_most_helpful')) ? '_02' : '_2', false, NULL);?>
            <div class="ty-product-review-post-wrap" id="ty-product-review-post-wrap">
                <article class="ty-product-review-post">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->getValue('product_review')), (int) 0, $_smarty_current_dir);
?>

                    <section class="ty-product-review-post__content ty-dialog-caret">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->getValue('product_review')), (int) 0, $_smarty_current_dir);
?>

                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->getValue('product_review')), (int) 0, $_smarty_current_dir);
?>

                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->getValue('product_review')), (int) 0, $_smarty_current_dir);
?>

                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->getValue('product_review'),'no_images'=>($_smarty_tpl->getValue('settings')['ab__device'] === "mobile"),'mini_gallery'=>($_smarty_tpl->getValue('settings')['ab__device'] != "mobile"),'sw_id_postfix'=>$_smarty_tpl->getValue('sw_id_postfix')), (int) 0, $_smarty_current_dir);
?>
                    </section>
                </article>
                <!--ty-product-review-post-wrap--></div>
            <?php echo '<script'; ?>
>
                $.ceEvent('on', "ce.switch_copy_review_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sw_id_postfix')), ENT_QUOTES, 'UTF-8');?>
" , function(flag){
                    !flag && document.getElementById("copy_review_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sw_id_postfix')), ENT_QUOTES, 'UTF-8');?>
")?.scrollIntoView();
                });
            <?php echo '</script'; ?>
>
        </div>
        </div>
    <?php }?>
<!--abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
--></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_reviews_gallery_popup.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/product_reviews_gallery_popup.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
">

    <?php $_smarty_tpl->assign('selected_period', (($tmp = $_smarty_tpl->getValue('_REQUEST')['abt__ut2_reviews_period'] ?? null)===null||$tmp==='' ? 'all' ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('selected_rating', (($tmp = $_smarty_tpl->getValue('_REQUEST')['abt__ut2_reviews_rating'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('product_reviews_only_buyers', ($_smarty_tpl->getValue('_REQUEST')['only_buyers'] === "1"), false, NULL);?>

    <?php $_smarty_tpl->assign('curl', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("abt__ut2_product_reviews.get_product_reviews_gallery_popup&product_id=".((string)$_smarty_tpl->getValue('product_id'))."&abt__ut2_reviews_period=".((string)$_smarty_tpl->getValue('selected_period'))."&abt__ut2_reviews_rating=".((string)$_smarty_tpl->getValue('selected_rating'))."&only_buyers=".((string)$_smarty_tpl->getValue('product_reviews_only_buyers'))), false, NULL);?>
    <?php $_smarty_tpl->assign('images_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("abt__ut2_product_reviews.get_product_reviews_gallery_popup_page&product_id=".((string)$_smarty_tpl->getValue('product_id'))."&abt__ut2_reviews_period=".((string)$_smarty_tpl->getValue('selected_period'))."&abt__ut2_reviews_rating=".((string)$_smarty_tpl->getValue('selected_rating'))."&only_buyers=".((string)$_smarty_tpl->getValue('product_reviews_only_buyers'))), false, NULL);?>
    <?php if ((true && ($_smarty_tpl->hasVariable('product_reviews') && null !== ($_smarty_tpl->getValue('product_reviews') ?? null)))) {?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"abt__ut2_product_reviews_popup_pagination_".((string)$_smarty_tpl->getValue('product_id')),'search'=>$_smarty_tpl->getValue('search')), (int) 0, $_smarty_current_dir);
?>

        <div id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
" class="abt__ut2_product_reviews_gallery_popup_content">
            <nav class="ty-product-review-reviews-navigation">
                <div class="ty-product-review-reviews-navigation__sorting">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sorting'=>$_smarty_tpl->getValue('product_reviews_sorting'),'sorting_orders'=>$_smarty_tpl->getValue('product_reviews_sorting_orders'),'search'=>$_smarty_tpl->getValue('search'),'avail_sorting'=>$_smarty_tpl->getValue('product_reviews_avail_sorting'),'ajax_class'=>"cm-ajax",'pagination_id'=>"abt__ut2_product_reviews_gallery_popup_".((string)$_smarty_tpl->getValue('product_id')),'element'=>"elm_sorting_gallery_popup"), (int) 0, $_smarty_current_dir);
?>
                    <div class="ty-sort-dropdown">
                        <div class="ut2-sort-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>

                        <a id="sw_popup_filter_rating_dropdown" class="ty-sort-dropdown__wrapper cm-combination">
                            <span><?php if ($_smarty_tpl->getValue('selected_rating') > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating.n_stars', array($_smarty_tpl->getValue('selected_rating')), $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating.all_ratings', [], $_smarty_tpl->getSmarty()->getLanguage());
}?></span>
                            <i class="ut2-icon-outline-expand_more"></i>
                        </a>

                        <div id="popup_filter_rating_dropdown"
                             class="ty-sort-dropdown__content cm-smart-position cm-popup-box hidden">
                            <div class="ut2-popup-box-title">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating', [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                <div class="cm-external-click ut2-btn-close"
                                     data-ca-external-click-id="sw_popup_filter_rating_dropdown">
                                    <i class="ut2-icon-baseline-close"></i>
                                </div>
                            </div>
                            <ul>
                                <li class="ty-sort-dropdown__content-item">
                                    <a class="ty-sort-dropdown__content-item-a cm-ajax"
                                       href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"abt__ut2_reviews_rating=0"))), ENT_QUOTES, 'UTF-8');?>
"
                                       data-ca-target-id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.filter.rating.all_ratings', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                                </li>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, array(1,2,3,4,5), 'stars');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('stars')->value) {
$foreach3DoElse = false;
?>
                                    <li class="ty-sort-dropdown__content-item">
                                        <a class="ty-sort-dropdown__content-item-a  cm-ajax"
                                           href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"abt__ut2_reviews_rating=".((string)$_smarty_tpl->getValue('stars'))))), ENT_QUOTES, 'UTF-8');?>
"
                                           data-ca-target-id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
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
                    <input id="popup_product_review_only_buyers"
                           type="checkbox"
                           name="product_review_only_buyers"
                           <?php if ($_smarty_tpl->getValue('product_reviews_only_buyers')) {?>checked="checked"<?php }?>
                           class="cm-external-click ty-product-review-reviews-navigation__filter-checkbox<?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('product_reviews_only_buyers')) ? " ty-product-review-reviews-navigation__filter-checkbox--active" : ''), ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-external-click-id="popup_product_review_only_buyers_link"
                    >
                    <a id="popup_product_review_only_buyers_link"
                       href="<?php ob_start();
if ($_smarty_tpl->getValue('product_reviews_only_buyers')) {
echo "0";
} else {
echo "1";
}
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"only_buyers=".$_prefixVariable2))), ENT_QUOTES, 'UTF-8');?>
"
                       class="ty-product-review-reviews-navigation__filter-link cm-ajax"
                       data-ca-target-id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
                       rel="nofollow"
                    >
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.filter.only_buyers", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </a>
                </label>
                </div>
                <div class="ty-product-review-reviews-navigation__total ty-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.matching_photos_found", array($_smarty_tpl->getValue('search')['total_items']), $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
            </nav>

            <div class="ty-product-review-thumbnails-gallery ty-mt-m" <?php if ($_smarty_tpl->getValue('next_page')) {?>data-next-page="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('images_url'),"page=".((string)$_smarty_tpl->getValue('next_page')))), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <?php if (!$_smarty_tpl->getValue('product_reviews')) {?>
                    <div class="ty-no-items" style="grid-column: 1 / -1" ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.no_reviews_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                <?php }?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_popup_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->getValue('product_review')) {?>
        <?php $_smarty_tpl->assign('is_few_img', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product_review')['images']) > 1, false, NULL);?>
        <div class="ty-product-review-post__container">
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product_review')['images'])) {?>
            <a data-ca-target-id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
               class="cm-ajax ty-inline-block ty-mb-s abt__ut2_product_reviews_gallery_back_link"
               href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('curl'),"product_review_id")), ENT_QUOTES, 'UTF-8');?>
"
               style="display: flex; align-items: center;"
               rel="nofollow">
                <i class="ut2-icon-arrow_back_black ty-valign"></i><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.all_photos", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            </a>
        <?php } else { ?>
            <a
               href="javascript:void(0)"
               class="ty-inline-block ty-mb-s cm-scroll cm-external-click cm-dialog-closer"
               data-ca-scroll="#product_reviews"
               style="display: flex; align-items: center;"
               >
                <i class="ut2-icon-arrow_back_black ty-valign"></i><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.all_reviews", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            </a>
        <?php }?>
        <div class="ty-product-review-post__gallery">
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('product_review')['images'])) {?>
            <div><div id="ty-product-review-gallery-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
"class="ty-product-review-popup-gallery"style="<?php if ($_smarty_tpl->getValue('is_few_img')) {?>opacity: 0;<?php }?>"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('reviews_images'), 'images', false, 'rid');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('rid')->value => $_smarty_tpl->getVariable('images')->value) {
$foreach4DoElse = false;
$_smarty_tpl->assign('link_current', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"product_review_id=".((string)$_smarty_tpl->getValue('rid'))), false, NULL);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('images'), 'image');
$_smarty_tpl->getVariable('image')->index = -1;
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach5DoElse = false;
$_smarty_tpl->getVariable('image')->index++;
$foreach5Backup = clone $_smarty_tpl->getVariable('image');
$_smarty_tpl->assign('thumb_h', ($_smarty_tpl->getValue('image')['detailed']['image_y'] > $_smarty_tpl->getValue('image')['detailed']['image_x']) ? 490 : 0, false, NULL);
$_smarty_tpl->assign('thumb_w', ($_smarty_tpl->getValue('image')['detailed']['image_y'] <= $_smarty_tpl->getValue('image')['detailed']['image_x']) ? 490 : 0, false, NULL);?><div class="ty-product-review-popup-gallery-img" data-review-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rid')), ENT_QUOTES, 'UTF-8');?>
"data-review="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_current')), ENT_QUOTES, 'UTF-8');?>
"data-index="<?php echo htmlspecialchars((string) ($_smarty_tpl->getVariable('image')->index), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('image'),'image_width'=>$_smarty_tpl->getValue('thumb_w'),'image_height'=>$_smarty_tpl->getValue('thumb_h'),'no_ids'=>true,'lazy_load'=>true), (int) 0, $_smarty_current_dir);
?></div><?php
$_smarty_tpl->setVariable('image', $foreach5Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><div id="ty-product-review-popup-gallery-paging" class="ty-center"></div><?php if ($_smarty_tpl->getValue('settings')['ab__device'] == "mobile") {
$_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_mini_gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}?></div>
            <?php }?>
            <?php $_smarty_tpl->assign('sw_id_postfix', ($_smarty_tpl->getValue('is_most_helpful')) ? '_02' : '_2', false, NULL);?>
            <div class="ty-product-review-post-wrap" id="ty-product-review-post-wrap">
                <article class="ty-product-review-post">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->getValue('product_review')), (int) 0, $_smarty_current_dir);
?>

                    <section class="ty-product-review-post__content ty-dialog-caret">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->getValue('product_review')), (int) 0, $_smarty_current_dir);
?>

                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->getValue('product_review')), (int) 0, $_smarty_current_dir);
?>

                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->getValue('product_review')), (int) 0, $_smarty_current_dir);
?>

                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->getValue('product_review'),'no_images'=>($_smarty_tpl->getValue('settings')['ab__device'] === "mobile"),'mini_gallery'=>($_smarty_tpl->getValue('settings')['ab__device'] != "mobile"),'sw_id_postfix'=>$_smarty_tpl->getValue('sw_id_postfix')), (int) 0, $_smarty_current_dir);
?>
                    </section>
                </article>
                <!--ty-product-review-post-wrap--></div>
            <?php echo '<script'; ?>
>
                $.ceEvent('on', "ce.switch_copy_review_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sw_id_postfix')), ENT_QUOTES, 'UTF-8');?>
" , function(flag){
                    !flag && document.getElementById("copy_review_link_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sw_id_postfix')), ENT_QUOTES, 'UTF-8');?>
")?.scrollIntoView();
                });
            <?php echo '</script'; ?>
>
        </div>
        </div>
    <?php }?>
<!--abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
