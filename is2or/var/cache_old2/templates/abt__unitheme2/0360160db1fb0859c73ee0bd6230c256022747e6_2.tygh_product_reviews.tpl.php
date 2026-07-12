<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:addons/product_reviews/blocks/product_tabs/product_reviews.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaab3ee89_17303337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0360160db1fb0859c73ee0bd6230c256022747e6' => 
    array (
      0 => 'addons/product_reviews/blocks/product_tabs/product_reviews.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafaab3ee89_17303337 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/product_reviews/blocks/product_tabs';
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.title','product_reviews.title','product_reviews.title','product_reviews.title'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('component')) {
throw new \Smarty\Exception('block tag \'component\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('component')->handle(array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->getValue('product'),'request'=>$_REQUEST,'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.title", [], $_smarty_tpl->getSmarty()->getLanguage()),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('component')->handle(array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->getValue('product'),'request'=>$_REQUEST,'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.title", [], $_smarty_tpl->getSmarty()->getLanguage()),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/blocks/product_tabs/product_reviews.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/blocks/product_tabs/product_reviews.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('component')) {
throw new \Smarty\Exception('block tag \'component\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('component')->handle(array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->getValue('product'),'request'=>$_REQUEST,'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.title", [], $_smarty_tpl->getSmarty()->getLanguage()),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('component')->handle(array('name'=>"product_reviews.reviews_on_product_tab",'product'=>$_smarty_tpl->getValue('product'),'request'=>$_REQUEST,'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.title", [], $_smarty_tpl->getSmarty()->getLanguage()),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
