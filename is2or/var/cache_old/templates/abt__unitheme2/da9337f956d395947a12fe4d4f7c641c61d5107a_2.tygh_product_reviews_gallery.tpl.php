<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:51
  from 'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_gallery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada21f414ae3_74617879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da9337f956d395947a12fe4d4f7c641c61d5107a' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/product_reviews_gallery.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:common/simple_scroller_init.tpl' => 2,
  ),
))) {
function content_69ada21f414ae3_74617879 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.product_reviews.customer_photos','abt__ut2.product_reviews.customer_photos','abt__ut2.product_reviews.customer_photos','abt__ut2.product_reviews.customer_photos','abt__ut2.product_reviews.customer_photos','abt__ut2.product_reviews.customer_photos'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('id', "scroll_list_".((string)$_smarty_tpl->getValue('block')['block_id']), false, NULL);?>

<?php $_smarty_tpl->assign('popup_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("abt__ut2_product_reviews.get_product_reviews_gallery_popup&product_id=".((string)$_smarty_tpl->getValue('product_id'))."&abt__ut2_reviews_period=".((string)$_smarty_tpl->getValue('selected_period'))."&abt__ut2_reviews_rating=".((string)$_smarty_tpl->getValue('selected_rating'))."&only_buyers=".((string)$_smarty_tpl->getValue('product_reviews_only_buyers'))), false, NULL);?>

<div class="ty-subheader"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.customer_photos', [], $_smarty_tpl->getSmarty()->getLanguage());?>

    <a data-ca-target-id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
       href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('popup_url')), ENT_QUOTES, 'UTF-8');?>
"
       class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close ut2-scroll-item ty-product-reviews-gallery-popup-link"
       data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.customer_photos", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
       data-ca-dialog-class="ut2-customer_review"
       rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.all_photos', [], $_smarty_tpl->getSmarty()->getLanguage());?>
<i class="ut2-icon-arrow_forward_black"></i></a>
</div>

<div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" class="ut2-gl__simple-scroller ut2-scroll-container ty-product-reviews-view__images-scroller">
    <button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button>
    <div class="ut2-gl__simple-scroller-wrap ut2-scroll-content">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('abt__ut2_product_reviews_gallery'), 'image');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach0DoElse = false;
?>
            <?php $_smarty_tpl->assign('thumb_h', ($_smarty_tpl->getValue('image')['detailed']['image_y'] < $_smarty_tpl->getValue('image')['detailed']['image_x']) ? 120 : 0, false, NULL);?>
            <?php $_smarty_tpl->assign('thumb_w', ($_smarty_tpl->getValue('image')['detailed']['image_y'] >= $_smarty_tpl->getValue('image')['detailed']['image_x']) ? 120 : 0, false, NULL);?>
            <a data-ca-target-id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
               href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("abt__ut2_product_reviews.get_product_reviews_gallery_popup&product_id=".((string)$_smarty_tpl->getValue('product_id'))."&product_review_id=".((string)$_smarty_tpl->getValue('image')['product_review_id'])."&abt__ut2_reviews_period=".((string)$_smarty_tpl->getValue('selected_period'))."&abt__ut2_reviews_rating=".((string)$_smarty_tpl->getValue('selected_rating'))."&only_buyers=".((string)$_smarty_tpl->getValue('product_reviews_only_buyers')))), ENT_QUOTES, 'UTF-8');?>
"
               class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close ut2-scroll-item ty-product-review-thumbnail-link"
               rel="nofollow"
               data-rating="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['product_review_rating']), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.customer_photos", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
               data-ca-dialog-class="ut2-customer_review"
               data-image-index="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['index']), ENT_QUOTES, 'UTF-8');?>
"
            >
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('image'),'image_width'=>$_smarty_tpl->getValue('thumb_w'),'image_height'=>$_smarty_tpl->getValue('thumb_h'),'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
            </a>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('abt__ut2_product_reviews_gallery')) > $_smarty_tpl->getValue('MAX_ITEMS')) {?>
            <a data-ca-target-id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
               href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('popup_url')), ENT_QUOTES, 'UTF-8');?>
"
               class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close ut2-scroll-item ty-product-review-thumbnail-link"
               data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.customer_photos", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
               data-ca-dialog-class="ut2-customer_review"
               rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.all_photos', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
        <?php }?>
    </div>
    <button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button>
</div>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->getValue('id'),'elements_to_scroll'=>(($tmp = $_smarty_tpl->getValue('elements_to_scroll') ?? null)===null||$tmp==='' ? 3 ?? null : $tmp)), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_reviews_gallery.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/product_reviews_gallery.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('id', "scroll_list_".((string)$_smarty_tpl->getValue('block')['block_id']), false, NULL);?>

<?php $_smarty_tpl->assign('popup_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("abt__ut2_product_reviews.get_product_reviews_gallery_popup&product_id=".((string)$_smarty_tpl->getValue('product_id'))."&abt__ut2_reviews_period=".((string)$_smarty_tpl->getValue('selected_period'))."&abt__ut2_reviews_rating=".((string)$_smarty_tpl->getValue('selected_rating'))."&only_buyers=".((string)$_smarty_tpl->getValue('product_reviews_only_buyers'))), false, NULL);?>

<div class="ty-subheader"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.customer_photos', [], $_smarty_tpl->getSmarty()->getLanguage());?>

    <a data-ca-target-id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
       href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('popup_url')), ENT_QUOTES, 'UTF-8');?>
"
       class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close ut2-scroll-item ty-product-reviews-gallery-popup-link"
       data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.customer_photos", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
       data-ca-dialog-class="ut2-customer_review"
       rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.all_photos', [], $_smarty_tpl->getSmarty()->getLanguage());?>
<i class="ut2-icon-arrow_forward_black"></i></a>
</div>

<div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" class="ut2-gl__simple-scroller ut2-scroll-container ty-product-reviews-view__images-scroller">
    <button class="ut2-scroll-left" type="button"><span class="ut2-icon-arrow_back_black"></span></button>
    <div class="ut2-gl__simple-scroller-wrap ut2-scroll-content">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('abt__ut2_product_reviews_gallery'), 'image');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('image')->value) {
$foreach1DoElse = false;
?>
            <?php $_smarty_tpl->assign('thumb_h', ($_smarty_tpl->getValue('image')['detailed']['image_y'] < $_smarty_tpl->getValue('image')['detailed']['image_x']) ? 120 : 0, false, NULL);?>
            <?php $_smarty_tpl->assign('thumb_w', ($_smarty_tpl->getValue('image')['detailed']['image_y'] >= $_smarty_tpl->getValue('image')['detailed']['image_x']) ? 120 : 0, false, NULL);?>
            <a data-ca-target-id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
               href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("abt__ut2_product_reviews.get_product_reviews_gallery_popup&product_id=".((string)$_smarty_tpl->getValue('product_id'))."&product_review_id=".((string)$_smarty_tpl->getValue('image')['product_review_id'])."&abt__ut2_reviews_period=".((string)$_smarty_tpl->getValue('selected_period'))."&abt__ut2_reviews_rating=".((string)$_smarty_tpl->getValue('selected_rating'))."&only_buyers=".((string)$_smarty_tpl->getValue('product_reviews_only_buyers')))), ENT_QUOTES, 'UTF-8');?>
"
               class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close ut2-scroll-item ty-product-review-thumbnail-link"
               rel="nofollow"
               data-rating="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['product_review_rating']), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.customer_photos", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
               data-ca-dialog-class="ut2-customer_review"
               data-image-index="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('image')['index']), ENT_QUOTES, 'UTF-8');?>
"
            >
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('image'),'image_width'=>$_smarty_tpl->getValue('thumb_w'),'image_height'=>$_smarty_tpl->getValue('thumb_h'),'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
            </a>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('abt__ut2_product_reviews_gallery')) > $_smarty_tpl->getValue('MAX_ITEMS')) {?>
            <a data-ca-target-id="abt__ut2_product_reviews_gallery_popup_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
               href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('popup_url')), ENT_QUOTES, 'UTF-8');?>
"
               class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close ut2-scroll-item ty-product-review-thumbnail-link"
               data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.product_reviews.customer_photos", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
               data-ca-dialog-class="ut2-customer_review"
               rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('abt__ut2.product_reviews.all_photos', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
        <?php }?>
    </div>
    <button class="ut2-scroll-right" type="button"><span class="ut2-icon-arrow_forward_black"></span></button>
</div>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/simple_scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block_id'=>$_smarty_tpl->getValue('id'),'elements_to_scroll'=>(($tmp = $_smarty_tpl->getValue('elements_to_scroll') ?? null)===null||$tmp==='' ? 3 ?? null : $tmp)), (int) 0, $_smarty_current_dir);
}
}
}
