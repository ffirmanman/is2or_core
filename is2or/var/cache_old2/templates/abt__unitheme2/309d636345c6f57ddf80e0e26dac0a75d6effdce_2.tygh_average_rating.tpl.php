<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:blocks/product_list_templates/components/average_rating.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa9a1c4f7_86560494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '309d636345c6f57ddf80e0e26dac0a75d6effdce' => 
    array (
      0 => 'blocks/product_list_templates/components/average_rating.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl' => 2,
  ),
))) {
function content_69afafa9a1c4f7_86560494 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/product_list_templates/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_rating"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('addons')['product_reviews']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && $_smarty_tpl->getValue('product')['average_rating'])) {?><div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
 ut2-rating-stars<?php if ($_smarty_tpl->getValue('addons')['product_reviews']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {?> r-block<?php }?>"><?php if ($_smarty_tpl->getValue('show_labels_in_title') == false) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:video_gallery"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:video_gallery"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:dotd_product_label"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:dotd_product_label"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
if ($_smarty_tpl->getValue('addons')['product_reviews']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && $_smarty_tpl->getValue('product')['average_rating'])) {
if ($_smarty_tpl->getValue('product')['average_rating']) {
$_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->getValue('product')['average_rating'],'link'=>true,'product'=>$_smarty_tpl->getValue('product')), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating_num'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="ut2-rating-stars-empty"><?php }?><div class="ty-product-review-reviews-stars<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating_num'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-show-rating-num<?php }?>"data-ca-product-review-reviews-stars-full="0"></div><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating_num'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span class="ut2-rating-stars-num">0.0</span></div><?php }
}
} elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->assign('rating', "rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if (strlen((string) $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('rating'))) > 40 && $_smarty_tpl->getValue('product')['discussion_type'] && $_smarty_tpl->getValue('product')['discussion_type'] != "D") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('rating')));
} elseif ($_smarty_tpl->getValue('addons')['discussion']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {?><span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span><?php }
}?></div><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_rating"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/components/average_rating.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/product_list_templates/components/average_rating.tpl"), $_smarty_tpl);?>
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

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_rating"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('addons')['product_reviews']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && $_smarty_tpl->getValue('product')['average_rating'])) {?><div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta')), ENT_QUOTES, 'UTF-8');?>
 ut2-rating-stars<?php if ($_smarty_tpl->getValue('addons')['product_reviews']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {?> r-block<?php }?>"><?php if ($_smarty_tpl->getValue('show_labels_in_title') == false) {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:video_gallery"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:video_gallery"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:dotd_product_label"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:dotd_product_label"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
if ($_smarty_tpl->getValue('addons')['product_reviews']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE") && ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::NO") && $_smarty_tpl->getValue('product')['average_rating'])) {
if ($_smarty_tpl->getValue('product')['average_rating']) {
$_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->getValue('product')['average_rating'],'link'=>true,'product'=>$_smarty_tpl->getValue('product')), (int) 0, $_smarty_current_dir);
} elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating_num'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><div class="ut2-rating-stars-empty"><?php }?><div class="ty-product-review-reviews-stars<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating_num'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> ut2-show-rating-num<?php }?>"data-ca-product-review-reviews-stars-full="0"></div><?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating_num'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?><span class="ut2-rating-stars-num">0.0</span></div><?php }
}
} elseif ($_smarty_tpl->getValue('settings')['abt__ut2']['product_list']['show_rating'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {
$_smarty_tpl->assign('rating', "rating_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
if (strlen((string) $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('rating'))) > 40 && $_smarty_tpl->getValue('product')['discussion_type'] && $_smarty_tpl->getValue('product')['discussion_type'] != "D") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('rating')));
} elseif ($_smarty_tpl->getValue('addons')['discussion']['status'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {?><span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span><?php }
}?></div><?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_rating"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
