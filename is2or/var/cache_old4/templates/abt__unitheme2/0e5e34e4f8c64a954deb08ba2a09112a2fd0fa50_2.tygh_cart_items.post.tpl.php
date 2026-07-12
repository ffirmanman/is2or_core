<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:52
  from 'tygh:addons/gift_certificates/hooks/block_checkout/cart_items.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb52045e9231_38120236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e5e34e4f8c64a954deb08ba2a09112a2fd0fa50' => 
    array (
      0 => 'addons/gift_certificates/hooks/block_checkout/cart_items.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/price.tpl' => 2,
  ),
))) {
function content_69fb52045e9231_38120236 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/gift_certificates/hooks/block_checkout';
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate','gift_certificate','gift_certificate','gift_certificate'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('cart')['gift_certificates']) {?>

<?php $_smarty_tpl->assign('c_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['gift_certificates'], 'gift', false, 'gift_key', 'f_gift_certificates', array (
));
$foreach30DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gift_key')->value => $_smarty_tpl->getVariable('gift')->value) {
$foreach30DoElse = false;
?>
        <li class="ty-order-products__item">
            <?php if (!$_smarty_tpl->getValue('gift')['extra']['exclude_from_calculate']) {?>
                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->getValue('gift_key')));?>
" class="ty-order-products__a"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->getValue('gift_key'))."&redirect_url=".((string)$_smarty_tpl->getValue('c_url')),'but_meta'=>"ty-order-products__item-delete cm-post delete",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</strong>
            <?php }?>
            <div class="ty-order-products__price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('gift')['display_subtotal']), (int) 0, $_smarty_current_dir);
?></div>
        </li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/block_checkout/cart_items.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/gift_certificates/hooks/block_checkout/cart_items.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('cart')['gift_certificates']) {?>

<?php $_smarty_tpl->assign('c_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['gift_certificates'], 'gift', false, 'gift_key', 'f_gift_certificates', array (
));
$foreach31DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gift_key')->value => $_smarty_tpl->getVariable('gift')->value) {
$foreach31DoElse = false;
?>
        <li class="ty-order-products__item">
            <?php if (!$_smarty_tpl->getValue('gift')['extra']['exclude_from_calculate']) {?>
                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->getValue('gift_key')));?>
" class="ty-order-products__a"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a><?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->getValue('gift_key'))."&redirect_url=".((string)$_smarty_tpl->getValue('c_url')),'but_meta'=>"ty-order-products__item-delete cm-post delete",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</strong>
            <?php }?>
            <div class="ty-order-products__price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('gift')['display_subtotal']), (int) 0, $_smarty_current_dir);
?></div>
        </li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
}
