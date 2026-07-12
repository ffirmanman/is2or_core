<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:16
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__image_previewers/hooks/products/ab__image_previewer.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571c4cea12_79114050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3108b2e32266e76ec1bf265fb9095592712b434a' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__image_previewers/hooks/products/ab__image_previewer.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
    'tygh:buttons/add_to_cart.tpl' => 2,
  ),
),false)) {
function content_6834571c4cea12_79114050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','add_to_cart'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_display_price'] == "Y" && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'show_price_values')) {?>

    <div class="pswp__price-wrap<?php if ($_smarty_tpl->tpl_vars['product']->value['discount'] || $_smarty_tpl->tpl_vars['product']->value['list_discount']) {?> discounted<?php }?>">
        <bdi>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0, false);
?>
        </bdi>
        <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

    </div>

<?php }
if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_display_add_to_cart'] == "Y" && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'ab__ip_cart_button_id')) {?>
    <div class="pswp__button_external" data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'ab__ip_cart_button_id'), ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("add_to_cart"),'but_name'=>''), 0, false);
?>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__image_previewers/hooks/products/ab__image_previewer.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__image_previewers/hooks/products/ab__image_previewer.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_display_price'] == "Y" && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'show_price_values')) {?>

    <div class="pswp__price-wrap<?php if ($_smarty_tpl->tpl_vars['product']->value['discount'] || $_smarty_tpl->tpl_vars['product']->value['list_discount']) {?> discounted<?php }?>">
        <bdi>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0, true);
?>
        </bdi>
        <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

    </div>

<?php }
if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_display_add_to_cart'] == "Y" && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'ab__ip_cart_button_id')) {?>
    <div class="pswp__button_external" data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'ab__ip_cart_button_id'), ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("add_to_cart"),'but_name'=>''), 0, true);
?>
    </div>
<?php }
}
}
}
