<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:16
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571c620e37_43608915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f58dff6cfc56a72d8ef0243b03d9c769251cc58c' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_6834571c620e37_43608915 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','sign_in'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value) {?>
    <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=product_reviews"))));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
}?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['product_reviews']['review_after_purchase'] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('is_product_and_post_after_purchase_enabled', true);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('is_product_and_post_after_purchase_enabled', false);
}?>

<?php $_smarty_tpl->_assignInScope('but_meta', "cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close ty-product-review-write-product-review-button ".((string)$_smarty_tpl->tpl_vars['but_meta']->value));
$_smarty_tpl->_assignInScope('but_id', "opener_new_post_".((string)$_smarty_tpl->tpl_vars['product_id']->value));
$_smarty_tpl->_assignInScope('but_href', fn_url("product_reviews.get_new_post_form?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&post_redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)));
$_smarty_tpl->_assignInScope('target_id', "new_post_dialog_".((string)$_smarty_tpl->tpl_vars['product_id']->value));
$_smarty_tpl->_assignInScope('but_title', $_smarty_tpl->tpl_vars['name']->value);?>

<?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['is_product_and_post_after_purchase_enabled']->value) {?>
    <?php $_smarty_tpl->_assignInScope('but_id', "opener_product_review_login_form_new_post_".((string)$_smarty_tpl->tpl_vars['product_id']->value));?>
    <?php $_smarty_tpl->_assignInScope('target_id', "new_product_review_post_login_form_popup");?>
    <?php $_smarty_tpl->_assignInScope('but_href', fn_url("product_reviews.get_user_login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)));?>
    <?php $_smarty_tpl->_assignInScope('but_title', $_smarty_tpl->__("sign_in"));
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_text'=>$_smarty_tpl->tpl_vars['name']->value,'but_title'=>$_smarty_tpl->tpl_vars['but_title']->value,'but_role'=>"submit",'but_target_id'=>$_smarty_tpl->tpl_vars['target_id']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_rel'=>"nofollow"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/write_product_review_button.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['locate_to_product_review_tab']->value) {?>
    <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"selected_section=product_reviews"))));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
}?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['product_reviews']['review_after_purchase'] === smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('is_product_and_post_after_purchase_enabled', true);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('is_product_and_post_after_purchase_enabled', false);
}?>

<?php $_smarty_tpl->_assignInScope('but_meta', "cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close ty-product-review-write-product-review-button ".((string)$_smarty_tpl->tpl_vars['but_meta']->value));
$_smarty_tpl->_assignInScope('but_id', "opener_new_post_".((string)$_smarty_tpl->tpl_vars['product_id']->value));
$_smarty_tpl->_assignInScope('but_href', fn_url("product_reviews.get_new_post_form?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&post_redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)));
$_smarty_tpl->_assignInScope('target_id', "new_post_dialog_".((string)$_smarty_tpl->tpl_vars['product_id']->value));
$_smarty_tpl->_assignInScope('but_title', $_smarty_tpl->tpl_vars['name']->value);?>

<?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['is_product_and_post_after_purchase_enabled']->value) {?>
    <?php $_smarty_tpl->_assignInScope('but_id', "opener_product_review_login_form_new_post_".((string)$_smarty_tpl->tpl_vars['product_id']->value));?>
    <?php $_smarty_tpl->_assignInScope('target_id', "new_product_review_post_login_form_popup");?>
    <?php $_smarty_tpl->_assignInScope('but_href', fn_url("product_reviews.get_user_login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)));?>
    <?php $_smarty_tpl->_assignInScope('but_title', $_smarty_tpl->__("sign_in"));
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_text'=>$_smarty_tpl->tpl_vars['name']->value,'but_title'=>$_smarty_tpl->tpl_vars['but_title']->value,'but_role'=>"submit",'but_target_id'=>$_smarty_tpl->tpl_vars['target_id']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_rel'=>"nofollow"), 0, true);
}
}
}
