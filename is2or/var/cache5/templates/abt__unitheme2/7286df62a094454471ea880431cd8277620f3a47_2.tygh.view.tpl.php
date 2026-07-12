<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:18
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f660c6f6_37387451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7286df62a094454471ea880431cd8277620f3a47' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/view.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl' => 4,
    'tygh:addons/product_reviews/views/product_reviews/components/product_rating.tpl' => 2,
    'tygh:common/pagination.tpl' => 4,
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/post.tpl' => 2,
  ),
),false)) {
function content_6835b9f660c6f6_37387451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.no_reviews_found','product_reviews.no_reviews_found'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<div class="ty-product-reviews-view" id="<?php if ($_smarty_tpl->tpl_vars['container_id']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>content_product_reviews<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['wrap']->value == true) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "content", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['subheader']->value) {?>
        <h4><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subheader']->value, ENT_QUOTES, 'UTF-8');?>
</h4>
    <?php }?>

    <section class="ty-product-reviews-view__main">
        <div class="ty-product-reviews-view__main-content" id="product_reviews_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['product_reviews_count'] > 0 && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== 'mobile') {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value,'product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews']->value), 0, false);
?>
            <?php }?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['ratings'],'average_rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['total']), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'extra_url'=>"&selected_section=product_reviews",'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_count']), 0, false);
?>
                
            <?php if ($_smarty_tpl->tpl_vars['product_reviews']->value) {?>
                <div class="ty-product-review-view__posts"> 
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_reviews']->value, 'product_review');
$_smarty_tpl->tpl_vars['product_review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_review']->value) {
$_smarty_tpl->tpl_vars['product_review']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div> 
            <?php } else { ?>
                <p class="ty-no-items"><?php echo $_smarty_tpl->__("product_reviews.no_reviews_found");?>
</p>
            <?php }?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'extra_url'=>"&selected_section=product_reviews",'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0, true);
?>
            <!--product_reviews_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['product_reviews_count'] < 1 || $_smarty_tpl->tpl_vars['product']->value['product_reviews_count'] > 5) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value,'product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews']->value), 0, true);
?>
            <?php }?>
    </section>

    <?php if ($_smarty_tpl->tpl_vars['wrap']->value == true) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content');?>

    <?php } else { ?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>
</div>

<?php echo smarty_function_script(array('src'=>"js/addons/product_reviews/fallback.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/product_reviews/index.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="ty-product-reviews-view" id="<?php if ($_smarty_tpl->tpl_vars['container_id']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>content_product_reviews<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['wrap']->value == true) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "content", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, true);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['subheader']->value) {?>
        <h4><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subheader']->value, ENT_QUOTES, 'UTF-8');?>
</h4>
    <?php }?>

    <section class="ty-product-reviews-view__main">
        <div class="ty-product-reviews-view__main-content" id="product_reviews_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['product_reviews_count'] > 0 && $_smarty_tpl->tpl_vars['settings']->value['ab__device'] !== 'mobile') {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value,'product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews']->value), 0, true);
?>
            <?php }?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['ratings'],'average_rating'=>$_smarty_tpl->tpl_vars['product']->value['average_rating'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_rating_stats']['total']), 0, true);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'extra_url'=>"&selected_section=product_reviews",'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0, true);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews_count']), 0, true);
?>
                
            <?php if ($_smarty_tpl->tpl_vars['product_reviews']->value) {?>
                <div class="ty-product-review-view__posts"> 
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_reviews']->value, 'product_review');
$_smarty_tpl->tpl_vars['product_review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_review']->value) {
$_smarty_tpl->tpl_vars['product_review']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_review'=>$_smarty_tpl->tpl_vars['product_review']->value), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div> 
            <?php } else { ?>
                <p class="ty-no-items"><?php echo $_smarty_tpl->__("product_reviews.no_reviews_found");?>
</p>
            <?php }?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['product_id']->value),'extra_url'=>"&selected_section=product_reviews",'search'=>$_smarty_tpl->tpl_vars['product_reviews_search']->value), 0, true);
?>
            <!--product_reviews_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['product_reviews_count'] < 1 || $_smarty_tpl->tpl_vars['product']->value['product_reviews_count'] > 5) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'locate_to_product_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value,'product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews']->value), 0, true);
?>
            <?php }?>
    </section>

    <?php if ($_smarty_tpl->tpl_vars['wrap']->value == true) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content');?>

    <?php } else { ?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>
</div>

<?php echo smarty_function_script(array('src'=>"js/addons/product_reviews/fallback.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/product_reviews/index.js"),$_smarty_tpl);?>

<?php }
}
}
