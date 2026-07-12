<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:32
  from 'tygh:addons/product_reviews/hooks/products/data_block.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb2186b6b10_98207647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '675690e8ebe06a521d40a1fe725096e3c25052c7' => 
    array (
      0 => 'addons/product_reviews/hooks/products/data_block.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl' => 2,
    'tygh:addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl' => 2,
  ),
))) {
function content_69afb2186b6b10_98207647 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/product_reviews/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('show_rating')) {?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->getValue('product')['average_rating'],'link'=>true,'product'=>$_smarty_tpl->getValue('product'),'show_empty_rating'=>$_smarty_tpl->getValue('show_empty_rating')), (int) 0, $_smarty_current_dir);
?>

    <?php if ($_smarty_tpl->getValue('show_total_product_reviews')) {?>
    <?php $_smarty_tpl->assign('reviews_count', $_smarty_tpl->getValue('product')['reviews_count'], false, NULL);?>
    <?php if (( !true || empty($_smarty_tpl->getValue('product')['reviews_count'])) && !( !true || empty($_smarty_tpl->getValue('product')['product_reviews_count']))) {?>
        <?php $_smarty_tpl->assign('reviews_count', $_smarty_tpl->getValue('product')['product_reviews_count'], false, NULL);?>
    <?php }?>
    
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_product_reviews'=>$_smarty_tpl->getValue('reviews_count'),'link'=>true), (int) 0, $_smarty_current_dir);
?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/hooks/products/data_block.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/hooks/products/data_block.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('show_rating')) {?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->getValue('product')['average_rating'],'link'=>true,'product'=>$_smarty_tpl->getValue('product'),'show_empty_rating'=>$_smarty_tpl->getValue('show_empty_rating')), (int) 0, $_smarty_current_dir);
?>

    <?php if ($_smarty_tpl->getValue('show_total_product_reviews')) {?>
    <?php $_smarty_tpl->assign('reviews_count', $_smarty_tpl->getValue('product')['reviews_count'], false, NULL);?>
    <?php if (( !true || empty($_smarty_tpl->getValue('product')['reviews_count'])) && !( !true || empty($_smarty_tpl->getValue('product')['product_reviews_count']))) {?>
        <?php $_smarty_tpl->assign('reviews_count', $_smarty_tpl->getValue('product')['product_reviews_count'], false, NULL);?>
    <?php }?>
    
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_reviews_total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_product_reviews'=>$_smarty_tpl->getValue('reviews_count'),'link'=>true), (int) 0, $_smarty_current_dir);
?>
    <?php }
}
}
}
}
