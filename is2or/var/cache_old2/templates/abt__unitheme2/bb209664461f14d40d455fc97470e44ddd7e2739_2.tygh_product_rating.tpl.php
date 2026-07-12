<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:blocks/product_templates/components/product_rating.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa9b228a9_72212784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb209664461f14d40d455fc97470e44ddd7e2739' => 
    array (
      0 => 'blocks/product_templates/components/product_rating.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl' => 4,
    'tygh:addons/discussion/views/discussion/components/new_post_button.tpl' => 4,
  ),
))) {
function content_69afafa9b228a9_72212784 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/product_templates/components';
\Tygh\Languages\Helper::preloadLangVars(array('reviews','write_review','write_review','reviews','write_review','write_review'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:discussion_rating_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if ($_smarty_tpl->getValue('addons')['product_reviews']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {?>
        <?php if ($_smarty_tpl->getValue('product')['average_rating']) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->getValue('product')['average_rating'],'total_product_reviews'=>$_smarty_tpl->getValue('product')['product_reviews_count'],'button'=>true), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <div class="ty-product-review-product-rating-overview-short">
                <div class="ty-product-review-reviews-stars ty-product-review-reviews-stars--large" data-ca-product-review-reviews-stars-full="0"></div>
            
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->getValue('product')['average_rating'],'total_product_reviews'=>$_smarty_tpl->getValue('product')['product_reviews_count'],'button'=>true), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('rating', "rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('product')['discussion_type'] && $_smarty_tpl->getValue('product')['discussion_type'] != 'D' && $_smarty_tpl->getValue('product')['discussion']['posts'] && $_smarty_tpl->getValue('product')['discussion']['search']['total_items'] > 0) {?>
            <div class="ut2-pb__rating">
                <div class="ty-discussion__rating-wrapper" id="average_rating_product">
                    <?php $_smarty_tpl->assign('_tabs', $_smarty_tpl->getSmarty()->getModifierCallback('fn_array_value_to_key')($_smarty_tpl->getValue('tabs'),'html_id'), false, NULL);?>
                    <?php $_smarty_tpl->assign('add_scroll', !$_smarty_tpl->getValue('_tabs')['discussion'] || $_smarty_tpl->getValue('_tabs')['discussion']['show_in_popup'] != 'Y', false, NULL);?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('rating')));?>
<a class="ty-discussion__review-a cm-external-click"<?php if ($_smarty_tpl->getValue('add_scroll')) {?> data-ca-scroll="discussion"<?php }?> data-ca-external-click-id="discussion"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['discussion']['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reviews", array($_smarty_tpl->getValue('product')['discussion']['search']['total_items']), $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php if ($_smarty_tpl->getValue('discussion')['type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED") && !$_smarty_tpl->getValue('discussion')['disable_adding']) {
$_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("write_review", [], $_smarty_tpl->getSmarty()->getLanguage()),'obj_id'=>$_smarty_tpl->getValue('obj_id'),'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), (int) 0, $_smarty_current_dir);
}?>
                </div>
            </div>
        <?php } elseif ($_smarty_tpl->getValue('product')['discussion_type'] && $_smarty_tpl->getValue('product')['discussion_type'] != 'D') {?>
            <div class="ut2-pb__rating">
                <div class="ty-discussion__rating-wrapper">
                    <span class="ty-nowrap no-rating"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span>
                    <?php if ($_smarty_tpl->getValue('discussion')['type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED") && !$_smarty_tpl->getValue('discussion')['disable_adding']) {
$_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("write_review", [], $_smarty_tpl->getSmarty()->getLanguage()),'obj_id'=>$_smarty_tpl->getValue('obj_id'),'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), (int) 0, $_smarty_current_dir);
}?>
                </div>
            </div>
        <?php }?>
    <?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:discussion_rating_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_templates/components/product_rating.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/product_templates/components/product_rating.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:discussion_rating_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if ($_smarty_tpl->getValue('addons')['product_reviews']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {?>
        <?php if ($_smarty_tpl->getValue('product')['average_rating']) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->getValue('product')['average_rating'],'total_product_reviews'=>$_smarty_tpl->getValue('product')['product_reviews_count'],'button'=>true), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
            <div class="ty-product-review-product-rating-overview-short">
                <div class="ty-product-review-reviews-stars ty-product-review-reviews-stars--large" data-ca-product-review-reviews-stars-full="0"></div>
            
                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->getValue('product')['average_rating'],'total_product_reviews'=>$_smarty_tpl->getValue('product')['product_reviews_count'],'button'=>true), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('rating', "rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
        <?php if ($_smarty_tpl->getValue('product')['discussion_type'] && $_smarty_tpl->getValue('product')['discussion_type'] != 'D' && $_smarty_tpl->getValue('product')['discussion']['posts'] && $_smarty_tpl->getValue('product')['discussion']['search']['total_items'] > 0) {?>
            <div class="ut2-pb__rating">
                <div class="ty-discussion__rating-wrapper" id="average_rating_product">
                    <?php $_smarty_tpl->assign('_tabs', $_smarty_tpl->getSmarty()->getModifierCallback('fn_array_value_to_key')($_smarty_tpl->getValue('tabs'),'html_id'), false, NULL);?>
                    <?php $_smarty_tpl->assign('add_scroll', !$_smarty_tpl->getValue('_tabs')['discussion'] || $_smarty_tpl->getValue('_tabs')['discussion']['show_in_popup'] != 'Y', false, NULL);?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('rating')));?>
<a class="ty-discussion__review-a cm-external-click"<?php if ($_smarty_tpl->getValue('add_scroll')) {?> data-ca-scroll="discussion"<?php }?> data-ca-external-click-id="discussion"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['discussion']['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reviews", array($_smarty_tpl->getValue('product')['discussion']['search']['total_items']), $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php if ($_smarty_tpl->getValue('discussion')['type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED") && !$_smarty_tpl->getValue('discussion')['disable_adding']) {
$_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("write_review", [], $_smarty_tpl->getSmarty()->getLanguage()),'obj_id'=>$_smarty_tpl->getValue('obj_id'),'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), (int) 0, $_smarty_current_dir);
}?>
                </div>
            </div>
        <?php } elseif ($_smarty_tpl->getValue('product')['discussion_type'] && $_smarty_tpl->getValue('product')['discussion_type'] != 'D') {?>
            <div class="ut2-pb__rating">
                <div class="ty-discussion__rating-wrapper">
                    <span class="ty-nowrap no-rating"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span>
                    <?php if ($_smarty_tpl->getValue('discussion')['type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED") && !$_smarty_tpl->getValue('discussion')['disable_adding']) {
$_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("write_review", [], $_smarty_tpl->getSmarty()->getLanguage()),'obj_id'=>$_smarty_tpl->getValue('obj_id'),'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), (int) 0, $_smarty_current_dir);
}?>
                </div>
            </div>
        <?php }?>
    <?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:discussion_rating_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
