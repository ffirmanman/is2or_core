<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:35
  from 'tygh:addons/gift_certificates/hooks/products/notification_items.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133edfea3dd0_12678957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08d33b48638882adf964d74c56f269f3a8f14a03' => 
    array (
      0 => 'addons/gift_certificates/hooks/products/notification_items.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl' => 2,
    'tygh:common/price.tpl' => 2,
  ),
))) {
function content_6a133edfea3dd0_12678957 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/gift_certificates/hooks/products';
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate','gift_certificate'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('gift_cert')) {?>
    <?php $_smarty_tpl->assign('notification_image_width', (($tmp = $_smarty_tpl->getValue('notification_image_width') ?? null)===null||$tmp==='' ? "50" ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('notification_image_height', (($tmp = $_smarty_tpl->getValue('notification_image_height') ?? null)===null||$tmp==='' ? "50" ?? null : $tmp), false, NULL);?>
    <div class="ty-product-notification__item clearfix">
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>$_smarty_tpl->getValue('notification_image_width'),'height'=>$_smarty_tpl->getValue('notification_image_height'),'class'=>"ty-product-notification__image"), (int) 0, $_smarty_current_dir);
?>
        <div class="ty-product-notification__content clearfix">
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->getValue('gift_cert')['gift_cert_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-notification__product-name"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            <div class="ty-product-notification__price">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('gift_cert')['display_subtotal'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('gift_cert')['gift_cert_id']),'class'=>"none"), (int) 0, $_smarty_current_dir);
?>
            </div>
        </div>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/products/notification_items.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/gift_certificates/hooks/products/notification_items.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('gift_cert')) {?>
    <?php $_smarty_tpl->assign('notification_image_width', (($tmp = $_smarty_tpl->getValue('notification_image_width') ?? null)===null||$tmp==='' ? "50" ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('notification_image_height', (($tmp = $_smarty_tpl->getValue('notification_image_height') ?? null)===null||$tmp==='' ? "50" ?? null : $tmp), false, NULL);?>
    <div class="ty-product-notification__item clearfix">
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>$_smarty_tpl->getValue('notification_image_width'),'height'=>$_smarty_tpl->getValue('notification_image_height'),'class'=>"ty-product-notification__image"), (int) 0, $_smarty_current_dir);
?>
        <div class="ty-product-notification__content clearfix">
            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->getValue('gift_cert')['gift_cert_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-notification__product-name"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            <div class="ty-product-notification__price">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('gift_cert')['display_subtotal'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('gift_cert')['gift_cert_id']),'class'=>"none"), (int) 0, $_smarty_current_dir);
?>
            </div>
        </div>
    </div>
<?php }
}
}
}
