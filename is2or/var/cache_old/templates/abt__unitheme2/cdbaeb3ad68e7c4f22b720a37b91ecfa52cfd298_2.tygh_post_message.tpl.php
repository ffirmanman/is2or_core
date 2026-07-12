<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:51
  from 'tygh:addons/product_reviews/views/product_reviews/components/post_message.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada21f579f98_41866080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdbaeb3ad68e7c4f22b720a37b91ecfa52cfd298' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/post_message.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/post_message_section.tpl' => 6,
  ),
))) {
function content_69ada21f579f98_41866080 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.advantages','product_reviews.disadvantages','product_reviews.advantages','product_reviews.disadvantages'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?>
<blockquote class="ty-product-review-post-message ty-blockquote" id="post_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_body'=>$_smarty_tpl->getValue('product_review')['message']['comment']), (int) 0, $_smarty_current_dir);
?>

    <?php if ($_smarty_tpl->getValue('addons')['product_reviews']['review_fields'] === "advanced") {?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.advantages", [], $_smarty_tpl->getSmarty()->getLanguage()),'message_body'=>$_smarty_tpl->getValue('product_review')['message']['advantages']), (int) 0, $_smarty_current_dir);
?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.disadvantages", [], $_smarty_tpl->getSmarty()->getLanguage()),'message_body'=>$_smarty_tpl->getValue('product_review')['message']['disadvantages']), (int) 0, $_smarty_current_dir);
?>

    <?php }?>
</blockquote>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_message.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/post_message.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<blockquote class="ty-product-review-post-message ty-blockquote" id="post_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['product_review_id']), ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_body'=>$_smarty_tpl->getValue('product_review')['message']['comment']), (int) 0, $_smarty_current_dir);
?>

    <?php if ($_smarty_tpl->getValue('addons')['product_reviews']['review_fields'] === "advanced") {?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.advantages", [], $_smarty_tpl->getSmarty()->getLanguage()),'message_body'=>$_smarty_tpl->getValue('product_review')['message']['advantages']), (int) 0, $_smarty_current_dir);
?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.disadvantages", [], $_smarty_tpl->getSmarty()->getLanguage()),'message_body'=>$_smarty_tpl->getValue('product_review')['message']['disadvantages']), (int) 0, $_smarty_current_dir);
?>

    <?php }?>
</blockquote>
<?php }
}
}
