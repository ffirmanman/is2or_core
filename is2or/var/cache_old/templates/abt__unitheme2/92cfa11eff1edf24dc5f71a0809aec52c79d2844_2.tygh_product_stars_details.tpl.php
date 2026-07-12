<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:02
  from 'tygh:addons/product_reviews/views/product_reviews/components/product_stars_details.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1eebb82d0_67804503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92cfa11eff1edf24dc5f71a0809aec52c79d2844' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/product_stars_details.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_star_line.tpl' => 2,
  ),
))) {
function content_69ada1eebb82d0_67804503 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['product_reviews_count'] > 0) {?>
    <section class="ty-product-review-product-stars-details">

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ratings_stats'), 'rating', false, 'quantity');
$foreach78DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('quantity')->value => $_smarty_tpl->getVariable('rating')->value) {
$foreach78DoElse = false;
?>

            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_star_line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quantity'=>$_smarty_tpl->getValue('quantity'),'percentage'=>$_smarty_tpl->getValue('rating')['percentage'],'count'=>$_smarty_tpl->getValue('rating')['count']), (int) 0, $_smarty_current_dir);
?>

        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    </section>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_stars_details.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/product_stars_details.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['product_reviews_count'] > 0) {?>
    <section class="ty-product-review-product-stars-details">

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ratings_stats'), 'rating', false, 'quantity');
$foreach79DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('quantity')->value => $_smarty_tpl->getVariable('rating')->value) {
$foreach79DoElse = false;
?>

            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/product_star_line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quantity'=>$_smarty_tpl->getValue('quantity'),'percentage'=>$_smarty_tpl->getValue('rating')['percentage'],'count'=>$_smarty_tpl->getValue('rating')['count']), (int) 0, $_smarty_current_dir);
?>

        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    </section>
<?php }
}
}
}
