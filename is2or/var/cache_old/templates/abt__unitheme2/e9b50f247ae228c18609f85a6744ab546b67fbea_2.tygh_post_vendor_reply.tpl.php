<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:51
  from 'tygh:addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada21f689f42_18721876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9b50f247ae228c18609f85a6744ab546b67fbea' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ada21f689f42_18721876 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components';
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.company_reply','product_reviews.admin_reply','product_reviews.company_reply','product_reviews.admin_reply'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product_review')['reply']) {?>
    <blockquote class="ty-product-review-post-vendor-reply ty-blockquote">
        <dl class="ty-product-review-post-vendor-reply__content ty-dl">
            <dt class="ty-product-review-post-vendor-reply__title ty-dt ty-strong">
                <?php if ($_smarty_tpl->getValue('product_review')['reply']['reply_company']) {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.company_reply", array('[company_name]'=>$_smarty_tpl->getValue('product_review')['reply']['reply_company']), $_smarty_tpl->getSmarty()->getLanguage());?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.admin_reply", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                <?php }?>
            </dt>
            <dd class="ty-product-review-post-vendor-reply__body ty-dd ty-dialog-caret">
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['reply']['reply']), ENT_QUOTES, 'UTF-8');?>

            </dd>
        </dl>
    </blockquote>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product_review')['reply']) {?>
    <blockquote class="ty-product-review-post-vendor-reply ty-blockquote">
        <dl class="ty-product-review-post-vendor-reply__content ty-dl">
            <dt class="ty-product-review-post-vendor-reply__title ty-dt ty-strong">
                <?php if ($_smarty_tpl->getValue('product_review')['reply']['reply_company']) {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.company_reply", array('[company_name]'=>$_smarty_tpl->getValue('product_review')['reply']['reply_company']), $_smarty_tpl->getSmarty()->getLanguage());?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("product_reviews.admin_reply", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                <?php }?>
            </dt>
            <dd class="ty-product-review-post-vendor-reply__body ty-dd ty-dialog-caret">
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_review')['reply']['reply']), ENT_QUOTES, 'UTF-8');?>

            </dd>
        </dl>
    </blockquote>
<?php }
}
}
}
