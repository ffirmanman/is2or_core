<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:addons/ab__image_previewers/hooks/products/ab__image_previewer.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a003dfcd8_51479549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd9ea72090b9750e567c41e968ebb3e21b69cc8d' => 
    array (
      0 => 'addons/ab__image_previewers/hooks/products/ab__image_previewer.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
    'tygh:buttons/add_to_cart.tpl' => 2,
  ),
))) {
function content_69fb4a003dfcd8_51479549 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__image_previewers/hooks/products';
\Tygh\Languages\Helper::preloadLangVars(array('add_to_cart','add_to_cart'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['ab__image_previewers']['ps_display_price'] == "Y" && $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'show_price_values')) {?>

    <div class="pswp__price-wrap<?php if ($_smarty_tpl->getValue('product')['discount'] || $_smarty_tpl->getValue('product')['list_discount']) {?> discounted<?php }?>">
        <bdi>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['price']), (int) 0, $_smarty_current_dir);
?>
        </bdi>
        <?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('clean_price'));?>

    </div>

<?php }
if ($_smarty_tpl->getValue('addons')['ab__image_previewers']['ps_display_add_to_cart'] == "Y" && $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'ab__ip_cart_button_id')) {?>
    <div class="pswp__button_external" data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'ab__ip_cart_button_id')), ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_name'=>''), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__image_previewers/hooks/products/ab__image_previewer.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__image_previewers/hooks/products/ab__image_previewer.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['ab__image_previewers']['ps_display_price'] == "Y" && $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'show_price_values')) {?>

    <div class="pswp__price-wrap<?php if ($_smarty_tpl->getValue('product')['discount'] || $_smarty_tpl->getValue('product')['list_discount']) {?> discounted<?php }?>">
        <bdi>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['price']), (int) 0, $_smarty_current_dir);
?>
        </bdi>
        <?php $_smarty_tpl->assign('clean_price', "clean_price_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('clean_price'));?>

    </div>

<?php }
if ($_smarty_tpl->getValue('addons')['ab__image_previewers']['ps_display_add_to_cart'] == "Y" && $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'ab__ip_cart_button_id')) {?>
    <div class="pswp__button_external" data-ca-external-click-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'ab__ip_cart_button_id')), ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("add_to_cart", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_name'=>''), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php }
}
}
}
