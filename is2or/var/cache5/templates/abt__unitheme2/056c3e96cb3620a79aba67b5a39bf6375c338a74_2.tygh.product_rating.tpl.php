<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:18
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_templates/components/product_rating.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f638b5b1_75103470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '056c3e96cb3620a79aba67b5a39bf6375c338a74' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/blocks/product_templates/components/product_rating.tpl',
      1 => 1736836654,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl' => 4,
    'tygh:addons/discussion/views/discussion/components/new_post_button.tpl' => 4,
  ),
),false)) {
function content_6835b9f638b5b1_75103470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('reviews','write_review','write_review','reviews','write_review','write_review'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:discussion_rating_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:discussion_rating_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['average_rating']) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_count'],'button'=>true), 0, false);
?>
        <?php } else { ?>
            <div class="ty-product-review-product-rating-overview-short">
                <div class="ty-product-review-reviews-stars ty-product-review-reviews-stars--large" data-ca-product-review-reviews-stars-full="0"></div>
            
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_count'],'button'=>true), 0, true);
?>
            </div>
        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['discussion_type'] && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] != 'D' && $_smarty_tpl->tpl_vars['product']->value['discussion']['posts'] && $_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'] > 0) {?>
            <div class="ut2-pb__rating">
                <div class="ty-discussion__rating-wrapper" id="average_rating_product">
                    <?php $_smarty_tpl->_assignInScope('_tabs', fn_array_value_to_key($_smarty_tpl->tpl_vars['tabs']->value,'html_id'));?>
                    <?php $_smarty_tpl->_assignInScope('add_scroll', !$_smarty_tpl->tpl_vars['_tabs']->value['discussion'] || $_smarty_tpl->tpl_vars['_tabs']->value['discussion']['show_in_popup'] != 'Y');?>
                    <?php echo smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value));?>
<a class="ty-discussion__review-a cm-external-click"<?php if ($_smarty_tpl->tpl_vars['add_scroll']->value) {?> data-ca-scroll="discussion"<?php }?> data-ca-external-click-id="discussion"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']));?>
</a><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] !== smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED") && !$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {
$_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), 0, false);
}?>
                </div>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discussion_type'] && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] != 'D') {?>
            <div class="ut2-pb__rating">
                <div class="ty-discussion__rating-wrapper">
                    <span class="ty-nowrap no-rating"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span>
                    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] !== smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED") && !$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {
$_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), 0, true);
}?>
                </div>
            </div>
        <?php }?>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:discussion_rating_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_templates/components/product_rating.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_templates/components/product_rating.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:discussion_rating_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:discussion_rating_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] == smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['average_rating']) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_count'],'button'=>true), 0, true);
?>
        <?php } else { ?>
            <div class="ty-product-review-product-rating-overview-short">
                <div class="ty-product-review-reviews-stars ty-product-review-reviews-stars--large" data-ca-product-review-reviews-stars-full="0"></div>
            
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_rating_overview_short.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('average_rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_count'],'button'=>true), 0, true);
?>
            </div>
        <?php }?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['discussion_type'] && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] != 'D' && $_smarty_tpl->tpl_vars['product']->value['discussion']['posts'] && $_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'] > 0) {?>
            <div class="ut2-pb__rating">
                <div class="ty-discussion__rating-wrapper" id="average_rating_product">
                    <?php $_smarty_tpl->_assignInScope('_tabs', fn_array_value_to_key($_smarty_tpl->tpl_vars['tabs']->value,'html_id'));?>
                    <?php $_smarty_tpl->_assignInScope('add_scroll', !$_smarty_tpl->tpl_vars['_tabs']->value['discussion'] || $_smarty_tpl->tpl_vars['_tabs']->value['discussion']['show_in_popup'] != 'Y');?>
                    <?php echo smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value));?>
<a class="ty-discussion__review-a cm-external-click"<?php if ($_smarty_tpl->tpl_vars['add_scroll']->value) {?> data-ca-scroll="discussion"<?php }?> data-ca-external-click-id="discussion"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']));?>
</a><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] !== smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED") && !$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {
$_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), 0, true);
}?>
                </div>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discussion_type'] && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] != 'D') {?>
            <div class="ut2-pb__rating">
                <div class="ty-discussion__rating-wrapper">
                    <span class="ty-nowrap no-rating"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span>
                    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] !== smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED") && !$_smarty_tpl->tpl_vars['discussion']->value['disable_adding']) {
$_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"main_info_title_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'locate_to_review_tab'=>true), 0, true);
}?>
                </div>
            </div>
        <?php }?>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:discussion_rating_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
