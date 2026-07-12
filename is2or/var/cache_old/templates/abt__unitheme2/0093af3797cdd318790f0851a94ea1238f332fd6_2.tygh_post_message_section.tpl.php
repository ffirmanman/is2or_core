<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:51
  from 'tygh:addons/product_reviews/views/product_reviews/components/post_message_section.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada21f5942d3_53793938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0093af3797cdd318790f0851a94ea1238f332fd6' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/post_message_section.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/content_more.tpl' => 2,
  ),
))) {
function content_69ada21f5942d3_53793938 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/product_reviews/views/product_reviews/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('message_body')) {?>

    <div class="ty-product-review-post-message-section ty-dl" data-ca-product-review="postMessageSection">

        <?php if ($_smarty_tpl->getValue('message_body')) {?>
            <span class="ty-product-review-post-message-section__body">
                <?php if ($_smarty_tpl->getValue('message_title')) {?>
                    <span class="ty-product-review-post-message-section__title  ty-strong ty-float-left"><?php echo $_smarty_tpl->getValue('message_title');?>
</span>
                <?php }?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:common/content_more.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>nl2br((string) $_smarty_tpl->getValue('message_body'), (bool) 1)), (int) 0, $_smarty_current_dir);
?>
            </span>
        <?php }?>

    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_message_section.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/post_message_section.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('message_body')) {?>

    <div class="ty-product-review-post-message-section ty-dl" data-ca-product-review="postMessageSection">

        <?php if ($_smarty_tpl->getValue('message_body')) {?>
            <span class="ty-product-review-post-message-section__body">
                <?php if ($_smarty_tpl->getValue('message_title')) {?>
                    <span class="ty-product-review-post-message-section__title  ty-strong ty-float-left"><?php echo $_smarty_tpl->getValue('message_title');?>
</span>
                <?php }?>

                <?php $_smarty_tpl->renderSubTemplate("tygh:common/content_more.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>nl2br((string) $_smarty_tpl->getValue('message_body'), (bool) 1)), (int) 0, $_smarty_current_dir);
?>
            </span>
        <?php }?>

    </div>
<?php }
}
}
}
