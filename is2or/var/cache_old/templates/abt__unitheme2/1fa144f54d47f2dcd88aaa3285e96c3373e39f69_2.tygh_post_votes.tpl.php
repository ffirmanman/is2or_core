<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:51
  from 'tygh:addons/product_reviews/views/product_reviews/components/post_votes.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada21f658ef7_79475216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fa144f54d47f2dcd88aaa3285e96c3373e39f69' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/post_votes.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 4,
  ),
))) {
function content_69ada21f658ef7_79475216 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.vote_up','product_reviews.vote_down','product_reviews.vote_up','product_reviews.vote_down'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product_review')) {?>
    <div class="ty-product-review-post-votes" id="product_review-post_votes_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review_id')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_postfix')), ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>($_smarty_tpl->getValue('product_review_id')).($_smarty_tpl->getValue('id_postfix')),'but_href'=>"product_reviews.vote.up?product_review_id=".((string)$_smarty_tpl->getValue('product_review_id'))."&return_url=".((string)(rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']))),'but_text'=>$_smarty_tpl->getValue('product_review')['helpfulness']['vote_up'],'but_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.vote_up", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"submit",'but_target_id'=>"product_review-post_votes_".((string)$_smarty_tpl->getValue('product_review_id')).",product_review-post_votes_".((string)$_smarty_tpl->getValue('product_review_id'))."*",'but_meta'=>"cm-ajax ty-btn__text cm-post cm-ajax-full-render ty-product-review-post-votes__up",'but_icon'=>"ty-icon-arrow-up",'but_rel'=>"nofollow"), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>($_smarty_tpl->getValue('product_review_id')).($_smarty_tpl->getValue('id_postfix')),'but_href'=>"product_reviews.vote.down?product_review_id=".((string)$_smarty_tpl->getValue('product_review_id'))."&return_url=".((string)(rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']))),'but_text'=>$_smarty_tpl->getValue('product_review')['helpfulness']['vote_down'],'but_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.vote_down", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"submit",'but_target_id'=>"product_review-post_votes_".((string)$_smarty_tpl->getValue('product_review_id')).",product_review-post_votes_".((string)$_smarty_tpl->getValue('product_review_id'))."*",'but_meta'=>"cm-ajax ty-btn__text cm-post cm-ajax-full-render ty-product-review-post-votes__down",'but_icon'=>"ty-icon-arrow-down",'but_rel'=>"nofollow"), (int) 0, $_smarty_current_dir);
?>
    <!--product_review-post_votes_<?php echo $_smarty_tpl->getValue('product_review_id');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_postfix')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_votes.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/post_votes.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product_review')) {?>
    <div class="ty-product-review-post-votes" id="product_review-post_votes_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review_id')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_postfix')), ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>($_smarty_tpl->getValue('product_review_id')).($_smarty_tpl->getValue('id_postfix')),'but_href'=>"product_reviews.vote.up?product_review_id=".((string)$_smarty_tpl->getValue('product_review_id'))."&return_url=".((string)(rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']))),'but_text'=>$_smarty_tpl->getValue('product_review')['helpfulness']['vote_up'],'but_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.vote_up", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"submit",'but_target_id'=>"product_review-post_votes_".((string)$_smarty_tpl->getValue('product_review_id')).",product_review-post_votes_".((string)$_smarty_tpl->getValue('product_review_id'))."*",'but_meta'=>"cm-ajax ty-btn__text cm-post cm-ajax-full-render ty-product-review-post-votes__up",'but_icon'=>"ty-icon-arrow-up",'but_rel'=>"nofollow"), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>($_smarty_tpl->getValue('product_review_id')).($_smarty_tpl->getValue('id_postfix')),'but_href'=>"product_reviews.vote.down?product_review_id=".((string)$_smarty_tpl->getValue('product_review_id'))."&return_url=".((string)(rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']))),'but_text'=>$_smarty_tpl->getValue('product_review')['helpfulness']['vote_down'],'but_title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.vote_down", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"submit",'but_target_id'=>"product_review-post_votes_".((string)$_smarty_tpl->getValue('product_review_id')).",product_review-post_votes_".((string)$_smarty_tpl->getValue('product_review_id'))."*",'but_meta'=>"cm-ajax ty-btn__text cm-post cm-ajax-full-render ty-product-review-post-votes__down",'but_icon'=>"ty-icon-arrow-down",'but_rel'=>"nofollow"), (int) 0, $_smarty_current_dir);
?>
    <!--product_review-post_votes_<?php echo $_smarty_tpl->getValue('product_review_id');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_postfix')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
}
