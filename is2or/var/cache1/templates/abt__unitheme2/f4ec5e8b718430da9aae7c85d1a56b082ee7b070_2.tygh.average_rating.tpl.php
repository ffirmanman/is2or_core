<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:16
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_list_templates/components/average_rating.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd7c5338b1_53509332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4ec5e8b718430da9aae7c85d1a56b082ee7b070' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_list_templates/components/average_rating.tpl',
      1 => 1736836654,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl' => 2,
  ),
),false)) {
function content_682fdd7c5338b1_53509332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_rating"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_rating"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating'] == smarty_modifier_enum("YesNo::YES") || ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating'] == smarty_modifier_enum("YesNo::NO") && $_smarty_tpl->tpl_vars['product']->value['average_rating'])) {?><div class="ut2-gl__rating ut2-rating-stars <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>r-block<?php }?>"><?php if ($_smarty_tpl->tpl_vars['show_labels_in_title']->value == false) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:video_gallery"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:video_gallery"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:video_gallery"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:dotd_product_label"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:dotd_product_label"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:dotd_product_label"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {
if ($_smarty_tpl->tpl_vars['product']->value['average_rating']) {
$_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'link'=>true,'product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
} elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating'] == smarty_modifier_enum("YesNo::YES")) {
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating_num'] == smarty_modifier_enum("YesNo::YES")) {?><div class="ut2-rating-stars-empty"><?php }?><div class="ty-product-review-reviews-stars <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating_num'] == smarty_modifier_enum("YesNo::YES")) {?>ty-product-review-reviews-stars-one<?php }?>"data-ca-product-review-reviews-stars-full="0"></div><?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating_num'] == smarty_modifier_enum("YesNo::YES")) {?><span class="ut2-rating-stars-num">0.0</span></div><?php }
}
} elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating'] == smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (strlen((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value)) > 40 && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] != "D") {
echo smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value));
} elseif ($_smarty_tpl->tpl_vars['addons']->value['discussion']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?><span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span><?php }
}?></div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_rating"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/components/average_rating.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_list_templates/components/average_rating.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_rating"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_rating"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating'] == smarty_modifier_enum("YesNo::YES") || ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating'] == smarty_modifier_enum("YesNo::NO") && $_smarty_tpl->tpl_vars['product']->value['average_rating'])) {?><div class="ut2-gl__rating ut2-rating-stars <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>r-block<?php }?>"><?php if ($_smarty_tpl->tpl_vars['show_labels_in_title']->value == false) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:video_gallery"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:video_gallery"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:video_gallery"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:dotd_product_label"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:dotd_product_label"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:dotd_product_label"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {
if ($_smarty_tpl->tpl_vars['product']->value['average_rating']) {
$_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'link'=>true,'product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
} elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating'] == smarty_modifier_enum("YesNo::YES")) {
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating_num'] == smarty_modifier_enum("YesNo::YES")) {?><div class="ut2-rating-stars-empty"><?php }?><div class="ty-product-review-reviews-stars <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating_num'] == smarty_modifier_enum("YesNo::YES")) {?>ty-product-review-reviews-stars-one<?php }?>"data-ca-product-review-reviews-stars-full="0"></div><?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating_num'] == smarty_modifier_enum("YesNo::YES")) {?><span class="ut2-rating-stars-num">0.0</span></div><?php }
}
} elseif ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_rating'] == smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (strlen((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value)) > 40 && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] != "D") {
echo smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value));
} elseif ($_smarty_tpl->tpl_vars['addons']->value['discussion']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?><span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span><?php }
}?></div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_rating"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
