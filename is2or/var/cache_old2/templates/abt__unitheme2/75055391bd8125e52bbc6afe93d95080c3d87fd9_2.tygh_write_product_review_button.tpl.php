<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'tygh:addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa9b7a7f1_92073037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75055391bd8125e52bbc6afe93d95080c3d87fd9' => 
    array (
      0 => 'addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69afafa9b7a7f1_92073037 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components';
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','sign_in'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('locate_to_product_review_tab')) {?>
    <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['current_url'],"selected_section=product_reviews"))), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('settings')['product_reviews']['review_after_purchase'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('is_product_and_post_after_purchase_enabled', true, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('is_product_and_post_after_purchase_enabled', false, false, NULL);
}?>

<?php $_smarty_tpl->assign('but_meta', "cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close ty-product-review-write-product-review-button ".((string)$_smarty_tpl->getValue('but_meta')), false, NULL);
$_smarty_tpl->assign('but_id', "opener_new_post_".((string)$_smarty_tpl->getValue('product_id')), false, NULL);
$_smarty_tpl->assign('but_href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_reviews.get_new_post_form?product_id=".((string)$_smarty_tpl->getValue('product_id'))."&post_redirect_url=".((string)$_smarty_tpl->getValue('return_current_url'))), false, NULL);
$_smarty_tpl->assign('target_id', "new_post_dialog_".((string)$_smarty_tpl->getValue('product_id')), false, NULL);
$_smarty_tpl->assign('but_title', $_smarty_tpl->getValue('name'), false, NULL);?>

<?php if (!$_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('is_product_and_post_after_purchase_enabled')) {?>
    <?php $_smarty_tpl->assign('but_id', "opener_product_review_login_form_new_post_".((string)$_smarty_tpl->getValue('product_id')), false, NULL);?>
    <?php $_smarty_tpl->assign('target_id', "new_product_review_post_login_form_popup", false, NULL);?>
    <?php $_smarty_tpl->assign('but_href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_reviews.get_user_login_form?return_url=".((string)$_smarty_tpl->getValue('return_current_url'))), false, NULL);?>
    <?php $_smarty_tpl->assign('but_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}?>

<?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->getValue('but_id'),'but_href'=>$_smarty_tpl->getValue('but_href'),'but_text'=>$_smarty_tpl->getValue('name'),'but_title'=>$_smarty_tpl->getValue('but_title'),'but_role'=>"submit",'but_target_id'=>$_smarty_tpl->getValue('target_id'),'but_meta'=>$_smarty_tpl->getValue('but_meta'),'but_rel'=>"nofollow"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('locate_to_product_review_tab')) {?>
    <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['current_url'],"selected_section=product_reviews"))), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('settings')['product_reviews']['review_after_purchase'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('is_product_and_post_after_purchase_enabled', true, false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('is_product_and_post_after_purchase_enabled', false, false, NULL);
}?>

<?php $_smarty_tpl->assign('but_meta', "cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close ty-product-review-write-product-review-button ".((string)$_smarty_tpl->getValue('but_meta')), false, NULL);
$_smarty_tpl->assign('but_id', "opener_new_post_".((string)$_smarty_tpl->getValue('product_id')), false, NULL);
$_smarty_tpl->assign('but_href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_reviews.get_new_post_form?product_id=".((string)$_smarty_tpl->getValue('product_id'))."&post_redirect_url=".((string)$_smarty_tpl->getValue('return_current_url'))), false, NULL);
$_smarty_tpl->assign('target_id', "new_post_dialog_".((string)$_smarty_tpl->getValue('product_id')), false, NULL);
$_smarty_tpl->assign('but_title', $_smarty_tpl->getValue('name'), false, NULL);?>

<?php if (!$_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('is_product_and_post_after_purchase_enabled')) {?>
    <?php $_smarty_tpl->assign('but_id', "opener_product_review_login_form_new_post_".((string)$_smarty_tpl->getValue('product_id')), false, NULL);?>
    <?php $_smarty_tpl->assign('target_id', "new_product_review_post_login_form_popup", false, NULL);?>
    <?php $_smarty_tpl->assign('but_href', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_reviews.get_user_login_form?return_url=".((string)$_smarty_tpl->getValue('return_current_url'))), false, NULL);?>
    <?php $_smarty_tpl->assign('but_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}?>

<?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->getValue('but_id'),'but_href'=>$_smarty_tpl->getValue('but_href'),'but_text'=>$_smarty_tpl->getValue('name'),'but_title'=>$_smarty_tpl->getValue('but_title'),'but_role'=>"submit",'but_target_id'=>$_smarty_tpl->getValue('target_id'),'but_meta'=>$_smarty_tpl->getValue('but_meta'),'but_rel'=>"nofollow"), (int) 0, $_smarty_current_dir);
}
}
}
