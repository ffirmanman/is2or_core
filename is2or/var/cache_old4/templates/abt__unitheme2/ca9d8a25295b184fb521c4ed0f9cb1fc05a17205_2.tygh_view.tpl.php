<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:addons/product_reviews/views/product_reviews/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a00d68442_95329646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca9d8a25295b184fb521c4ed0f9cb1fc05a17205' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/view.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_rating.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl' => 4,
    'tygh:addons/product_reviews/views/product_reviews/components/write_product_review.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_gallery.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_most_helpful.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post.tpl' => 2,
  ),
))) {
function content_69fb4a00d68442_95329646 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews';
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.write_review','product_reviews.no_reviews_found','product_reviews.write_review','product_reviews.no_reviews_found'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('selected_period', (($tmp = $_smarty_tpl->getValue('_REQUEST')['abt__ut2_reviews_period'] ?? null)===null||$tmp==='' ? 'all' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('selected_rating', (($tmp = $_smarty_tpl->getValue('_REQUEST')['abt__ut2_reviews_rating'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('product_reviews_only_buyers', ($_smarty_tpl->getValue('_REQUEST')['only_buyers'] === "1"), false, NULL);?>

<?php $_smarty_tpl->assign('curl', $_smarty_tpl->getValue('config')['current_url'], false, NULL);?>

<div class="ty-product-reviews-view" id="<?php if ($_smarty_tpl->getValue('container_id')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('container_id')), ENT_QUOTES, 'UTF-8');
} else { ?>content_product_reviews<?php }?>">
    <?php if ($_smarty_tpl->getValue('wrap') == true) {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "content", null, null);?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getValue('title')), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('subheader')) {?>
        <h4><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subheader')), ENT_QUOTES, 'UTF-8');?>
</h4>
    <?php }?>
    <section class="ty-product-reviews-view__main <?php if ($_smarty_tpl->getValue('product')['product_reviews_count'] == 0) {?>no-reviews<?php }?>">
        <div class="ty-product-reviews-view__main-content" id="product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->assign('product', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_product_rating')($_smarty_tpl->getValue('product')), false, NULL);?>
            <div class="ty-product-reviews-view__main-content-left">
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->getValue('product')['product_reviews_rating_stats']['ratings'],'average_rating'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_average_product_rating')($_smarty_tpl->getValue('product')),'total_product_reviews'=>$_smarty_tpl->getValue('product')['product_reviews_rating_stats']['total']), (int) 0, $_smarty_current_dir);
?>
                <?php if ($_smarty_tpl->getValue('product')['product_reviews_count'] > 0 && $_smarty_tpl->getValue('settings')['ab__device'] !== 'mobile') {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'product_id'=>$_smarty_tpl->getValue('product_id'),'locate_to_product_review_tab'=>$_smarty_tpl->getValue('locate_to_product_review_tab'),'product_reviews'=>$_smarty_tpl->getValue('product_reviews')), (int) 0, $_smarty_current_dir);
?>
                <?php } elseif ($_smarty_tpl->getValue('product')['product_reviews_count'] > 0 && $_smarty_tpl->getValue('settings')['ab__device'] == 'mobile') {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/write_product_review.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.write_review", [], $_smarty_tpl->getSmarty()->getLanguage()),'product_id'=>$_smarty_tpl->getValue('product_id'),'locate_to_product_review_tab'=>$_smarty_tpl->getValue('locate_to_product_review_tab')), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_reviews']['filter_by_creation_time'][$_smarty_tpl->getValue('settings')['ab__device']] == 'Y' && $_smarty_tpl->getValue('product')['product_reviews_count'] > 0) {?>
                    <div class="ty-tabs">
                        <ul class="ty-tabs__list ut2-scroll-content">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_reviews_base_periods')(), 'period', false, 'key');
$foreach154DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('period')->value) {
$foreach154DoElse = false;
?>
                                <li class="ty-tabs__item ut2-scroll-item <?php if ($_smarty_tpl->getValue('selected_period') == $_smarty_tpl->getValue('key')) {?>active<?php }?>">
                                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"abt__ut2_reviews_period=".((string)$_smarty_tpl->getValue('key'))."&selected_section=product_reviews"));?>
"
                                       class="cm-ajax"
                                       data-ca-target-id="product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
                                       rel="nofollow"
                                    >
                                        <span class="ty-tabs__span"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('period')), ENT_QUOTES, 'UTF-8');?>
</span>
                                    </a>
                                </li>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                <?php }?>
            </div>
            <div class="ty-product-reviews-view__main-content-right">
                <?php if ($_smarty_tpl->getValue('abt__ut2_product_reviews_gallery')) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_most_helpful.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_product_reviews'=>$_smarty_tpl->getValue('product')['product_reviews_count']), (int) 0, $_smarty_current_dir);
?>
                <?php if ($_smarty_tpl->getValue('product_reviews')) {?>
                    <div class="ty-product-review-view__posts">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_reviews'), 'product_review');
$foreach155DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product_review')->value) {
$foreach155DoElse = false;
?>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->getValue('product_review')), (int) 0, $_smarty_current_dir);
?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </div>
                <?php } else { ?>
                    <p class="ty-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.no_reviews_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
                <?php }?>

                <?php $_smarty_tpl->assign('reviews_left', $_smarty_tpl->getValue('product_reviews_search')['total_items']-$_smarty_tpl->getValue('product_reviews_search')['page']*$_smarty_tpl->getValue('product_reviews_search')['items_per_page'], false, NULL);?>
                <?php if ($_smarty_tpl->getValue('product_reviews_search')['total_items'] > $_smarty_tpl->getValue('product_reviews_search')['items_per_page'] && $_smarty_tpl->getValue('reviews_left') > 0) {?>
                    <div class="ty-product-reviews-load-more ty-center">
                        <p class="ty-muted ty-center">
                            <?php $_smarty_tpl->assign('current_reviews_count', ($_smarty_tpl->getValue('reviews_left') > 0) ? $_smarty_tpl->getValue('product_reviews_search')['page']*$_smarty_tpl->getValue('product_reviews_search')['items_per_page'] : $_smarty_tpl->getValue('product_reviews_search')['total_items'], false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.showing_n_of_n_reviews', array($_smarty_tpl->getValue('product_reviews_search')['total_items'],'[count]'=>$_smarty_tpl->getValue('current_reviews_count')), $_smarty_tpl->getSmarty()->getLanguage());?>

                        </p>
                        <?php $_smarty_tpl->assign('data_load', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"page=".((string)($_smarty_tpl->getValue('product_reviews_search')['page']+1))."&sort_order=".((string)$_smarty_tpl->getValue('product_reviews_search')['sort_order'])."&sort_by=".((string)$_smarty_tpl->getValue('product_reviews_search')['sort_by'])."&only_buyers=".((string)$_smarty_tpl->getValue('product_reviews_search')['only_buyers'])."&with_images=".((string)$_smarty_tpl->getValue('product_reviews_search')['with_images'])."&abt__ut2_reviews_rating=".((string)$_smarty_tpl->getValue('product_reviews_search')['abt__ut2_reviews_rating'])), false, NULL);?>
                        <button id="reviews-loader-btn" type="button" class="ty-btn ty-btn__outline" data-load-more="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('data_load'))), ENT_QUOTES, 'UTF-8');?>
">
                            <?php $_smarty_tpl->assign('load_more_reviews_count', ($_smarty_tpl->getValue('reviews_left') > $_smarty_tpl->getValue('product_reviews_search')['items_per_page']) ? $_smarty_tpl->getValue('product_reviews_search')['items_per_page'] : $_smarty_tpl->getValue('reviews_left'), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.show_n_more_reviews', array($_smarty_tpl->getValue('load_more_reviews_count')), $_smarty_tpl->getSmarty()->getLanguage());?>

                        </button>
                    </div>
                <?php }?>
            </div>
            <!--product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php if ($_smarty_tpl->getValue('product')['product_reviews_count'] < 1 || $_smarty_tpl->getValue('settings')['ab__device'] === 'mobile') {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'product_id'=>$_smarty_tpl->getValue('product_id'),'locate_to_product_review_tab'=>$_smarty_tpl->getValue('locate_to_product_review_tab'),'product_reviews'=>$_smarty_tpl->getValue('product_reviews')), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    </section>

    <?php if ($_smarty_tpl->getValue('wrap') == true) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'content');?>

    <?php } else { ?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php }?>
    <!--content_product_reviews--></div>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/product_reviews/index.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_product_reviews.js"), $_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/view.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/view.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('selected_period', (($tmp = $_smarty_tpl->getValue('_REQUEST')['abt__ut2_reviews_period'] ?? null)===null||$tmp==='' ? 'all' ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('selected_rating', (($tmp = $_smarty_tpl->getValue('_REQUEST')['abt__ut2_reviews_rating'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('product_reviews_only_buyers', ($_smarty_tpl->getValue('_REQUEST')['only_buyers'] === "1"), false, NULL);?>

<?php $_smarty_tpl->assign('curl', $_smarty_tpl->getValue('config')['current_url'], false, NULL);?>

<div class="ty-product-reviews-view" id="<?php if ($_smarty_tpl->getValue('container_id')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('container_id')), ENT_QUOTES, 'UTF-8');
} else { ?>content_product_reviews<?php }?>">
    <?php if ($_smarty_tpl->getValue('wrap') == true) {?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "content", null, null);?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getValue('title')), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('subheader')) {?>
        <h4><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subheader')), ENT_QUOTES, 'UTF-8');?>
</h4>
    <?php }?>
    <section class="ty-product-reviews-view__main <?php if ($_smarty_tpl->getValue('product')['product_reviews_count'] == 0) {?>no-reviews<?php }?>">
        <div class="ty-product-reviews-view__main-content" id="product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->assign('product', $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_product_rating')($_smarty_tpl->getValue('product')), false, NULL);?>
            <div class="ty-product-reviews-view__main-content-left">
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->getValue('product')['product_reviews_rating_stats']['ratings'],'average_rating'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_average_product_rating')($_smarty_tpl->getValue('product')),'total_product_reviews'=>$_smarty_tpl->getValue('product')['product_reviews_rating_stats']['total']), (int) 0, $_smarty_current_dir);
?>
                <?php if ($_smarty_tpl->getValue('product')['product_reviews_count'] > 0 && $_smarty_tpl->getValue('settings')['ab__device'] !== 'mobile') {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'product_id'=>$_smarty_tpl->getValue('product_id'),'locate_to_product_review_tab'=>$_smarty_tpl->getValue('locate_to_product_review_tab'),'product_reviews'=>$_smarty_tpl->getValue('product_reviews')), (int) 0, $_smarty_current_dir);
?>
                <?php } elseif ($_smarty_tpl->getValue('product')['product_reviews_count'] > 0 && $_smarty_tpl->getValue('settings')['ab__device'] == 'mobile') {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/write_product_review.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.write_review", [], $_smarty_tpl->getSmarty()->getLanguage()),'product_id'=>$_smarty_tpl->getValue('product_id'),'locate_to_product_review_tab'=>$_smarty_tpl->getValue('locate_to_product_review_tab')), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_reviews']['filter_by_creation_time'][$_smarty_tpl->getValue('settings')['ab__device']] == 'Y' && $_smarty_tpl->getValue('product')['product_reviews_count'] > 0) {?>
                    <div class="ty-tabs">
                        <ul class="ty-tabs__list ut2-scroll-content">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getSmarty()->getModifierCallback('fn_abt__ut2_get_reviews_base_periods')(), 'period', false, 'key');
$foreach156DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('period')->value) {
$foreach156DoElse = false;
?>
                                <li class="ty-tabs__item ut2-scroll-item <?php if ($_smarty_tpl->getValue('selected_period') == $_smarty_tpl->getValue('key')) {?>active<?php }?>">
                                    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"abt__ut2_reviews_period=".((string)$_smarty_tpl->getValue('key'))."&selected_section=product_reviews"));?>
"
                                       class="cm-ajax"
                                       data-ca-target-id="product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
                                       rel="nofollow"
                                    >
                                        <span class="ty-tabs__span"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('period')), ENT_QUOTES, 'UTF-8');?>
</span>
                                    </a>
                                </li>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                <?php }?>
            </div>
            <div class="ty-product-reviews-view__main-content-right">
                <?php if ($_smarty_tpl->getValue('abt__ut2_product_reviews_gallery')) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_most_helpful.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_product_reviews'=>$_smarty_tpl->getValue('product')['product_reviews_count']), (int) 0, $_smarty_current_dir);
?>
                <?php if ($_smarty_tpl->getValue('product_reviews')) {?>
                    <div class="ty-product-review-view__posts">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product_reviews'), 'product_review');
$foreach157DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product_review')->value) {
$foreach157DoElse = false;
?>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->getValue('product_review')), (int) 0, $_smarty_current_dir);
?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </div>
                <?php } else { ?>
                    <p class="ty-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.no_reviews_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
                <?php }?>

                <?php $_smarty_tpl->assign('reviews_left', $_smarty_tpl->getValue('product_reviews_search')['total_items']-$_smarty_tpl->getValue('product_reviews_search')['page']*$_smarty_tpl->getValue('product_reviews_search')['items_per_page'], false, NULL);?>
                <?php if ($_smarty_tpl->getValue('product_reviews_search')['total_items'] > $_smarty_tpl->getValue('product_reviews_search')['items_per_page'] && $_smarty_tpl->getValue('reviews_left') > 0) {?>
                    <div class="ty-product-reviews-load-more ty-center">
                        <p class="ty-muted ty-center">
                            <?php $_smarty_tpl->assign('current_reviews_count', ($_smarty_tpl->getValue('reviews_left') > 0) ? $_smarty_tpl->getValue('product_reviews_search')['page']*$_smarty_tpl->getValue('product_reviews_search')['items_per_page'] : $_smarty_tpl->getValue('product_reviews_search')['total_items'], false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.showing_n_of_n_reviews', array($_smarty_tpl->getValue('product_reviews_search')['total_items'],'[count]'=>$_smarty_tpl->getValue('current_reviews_count')), $_smarty_tpl->getSmarty()->getLanguage());?>

                        </p>
                        <?php $_smarty_tpl->assign('data_load', $_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('curl'),"page=".((string)($_smarty_tpl->getValue('product_reviews_search')['page']+1))."&sort_order=".((string)$_smarty_tpl->getValue('product_reviews_search')['sort_order'])."&sort_by=".((string)$_smarty_tpl->getValue('product_reviews_search')['sort_by'])."&only_buyers=".((string)$_smarty_tpl->getValue('product_reviews_search')['only_buyers'])."&with_images=".((string)$_smarty_tpl->getValue('product_reviews_search')['with_images'])."&abt__ut2_reviews_rating=".((string)$_smarty_tpl->getValue('product_reviews_search')['abt__ut2_reviews_rating'])), false, NULL);?>
                        <button id="reviews-loader-btn" type="button" class="ty-btn ty-btn__outline" data-load-more="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('data_load'))), ENT_QUOTES, 'UTF-8');?>
">
                            <?php $_smarty_tpl->assign('load_more_reviews_count', ($_smarty_tpl->getValue('reviews_left') > $_smarty_tpl->getValue('product_reviews_search')['items_per_page']) ? $_smarty_tpl->getValue('product_reviews_search')['items_per_page'] : $_smarty_tpl->getValue('reviews_left'), false, NULL);?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.show_n_more_reviews', array($_smarty_tpl->getValue('load_more_reviews_count')), $_smarty_tpl->getSmarty()->getLanguage());?>

                        </button>
                    </div>
                <?php }?>
            </div>
            <!--product_reviews_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php if ($_smarty_tpl->getValue('product')['product_reviews_count'] < 1 || $_smarty_tpl->getValue('settings')['ab__device'] === 'mobile') {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->getValue('product'),'product_id'=>$_smarty_tpl->getValue('product_id'),'locate_to_product_review_tab'=>$_smarty_tpl->getValue('locate_to_product_review_tab'),'product_reviews'=>$_smarty_tpl->getValue('product_reviews')), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    </section>

    <?php if ($_smarty_tpl->getValue('wrap') == true) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'content');?>

    <?php } else { ?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php }?>
    <!--content_product_reviews--></div>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/product_reviews/index.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_product_reviews.js"), $_smarty_tpl);?>

<?php }
}
}
