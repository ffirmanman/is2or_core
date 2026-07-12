<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:00:50
  from 'tygh:addons/gift_certificates/hooks/index/cart_status.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae45f245d1c5_30923291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b32233347fac4c70f326158607f8009f4327240' => 
    array (
      0 => 'addons/gift_certificates/hooks/index/cart_status.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl' => 2,
    'tygh:common/price.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69ae45f245d1c5_30923291 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/gift_certificates/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate','gift_certificate','gift_certificate','gift_certificate'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_SESSION['cart']['gift_certificates']) {?>
    <?php $_smarty_tpl->assign('cart_items_list_item_image_size', (($tmp = $_smarty_tpl->getValue('cart_items_list_item_image_size') ?? null)===null||$tmp==='' ? 40 ?? null : $tmp), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_SESSION['cart']['gift_certificates'], 'gift', false, 'gift_key', 'f_gift_certificates', array (
));
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gift_key')->value => $_smarty_tpl->getVariable('gift')->value) {
$foreach2DoElse = false;
?>
    <li class="ty-cart-items__list-item">
        <?php if ($_smarty_tpl->getValue('block')['properties']['products_links_type'] == "thumb") {?>
        <div class="ty-cart-items__list-item-image">
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>$_smarty_tpl->getValue('cart_items_list_item_image_size'),'height'=>$_smarty_tpl->getValue('cart_items_list_item_image_size')), (int) 0, $_smarty_current_dir);
?>
        </div>
        <?php }?>
        <div class="ty-cart-items__list-item-desc ty-cart-items__list-item-desc--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['properties']['products_links_type']), ENT_QUOTES, 'UTF-8');?>
">
            <?php if (!$_smarty_tpl->getValue('gift')['extra']['exclude_from_calculate']) {?>
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->getValue('gift_key')))), ENT_QUOTES, 'UTF-8');?>
" class="ty-cart-items__list-item-link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            <?php } else { ?>
                <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            <?php }?>
        <p class="ty-cart-items__list-item-price-amount">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('gift')['display_subtotal'],'span_id'=>"subtotal_gc_".((string)$_smarty_tpl->getValue('gift_key')),'class'=>"ty-cart-items__list-item-price none"), (int) 0, $_smarty_current_dir);
?>
        </p>
        </div>
        <?php if ($_smarty_tpl->getValue('block')['properties']['display_delete_icons'] == "Y") {?>
        <?php $_smarty_tpl->assign('r_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
        <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
            <?php if ((!$_smarty_tpl->getValue('runtime')['checkout'] || $_smarty_tpl->getValue('force_items_deletion')) && !$_smarty_tpl->getValue('p')['extra']['exclude_from_calculate']) {
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->getValue('gift_key'))."&redirect_url=".((string)$_smarty_tpl->getValue('r_url')),'but_meta'=>"cm-ajax cm-post cm-ajax-full-render ty-cart-items__list-item-tools-btn",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), (int) 0, $_smarty_current_dir);
}?>
        </div>
        <?php }?>
    </li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/hooks/index/cart_status.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/gift_certificates/hooks/index/cart_status.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_SESSION['cart']['gift_certificates']) {?>
    <?php $_smarty_tpl->assign('cart_items_list_item_image_size', (($tmp = $_smarty_tpl->getValue('cart_items_list_item_image_size') ?? null)===null||$tmp==='' ? 40 ?? null : $tmp), false, NULL);?>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_SESSION['cart']['gift_certificates'], 'gift', false, 'gift_key', 'f_gift_certificates', array (
));
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gift_key')->value => $_smarty_tpl->getVariable('gift')->value) {
$foreach3DoElse = false;
?>
    <li class="ty-cart-items__list-item">
        <?php if ($_smarty_tpl->getValue('block')['properties']['products_links_type'] == "thumb") {?>
        <div class="ty-cart-items__list-item-image">
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('width'=>$_smarty_tpl->getValue('cart_items_list_item_image_size'),'height'=>$_smarty_tpl->getValue('cart_items_list_item_image_size')), (int) 0, $_smarty_current_dir);
?>
        </div>
        <?php }?>
        <div class="ty-cart-items__list-item-desc ty-cart-items__list-item-desc--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['properties']['products_links_type']), ENT_QUOTES, 'UTF-8');?>
">
            <?php if (!$_smarty_tpl->getValue('gift')['extra']['exclude_from_calculate']) {?>
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->getValue('gift_key')))), ENT_QUOTES, 'UTF-8');?>
" class="ty-cart-items__list-item-link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            <?php } else { ?>
                <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("gift_certificate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            <?php }?>
        <p class="ty-cart-items__list-item-price-amount">
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('gift')['display_subtotal'],'span_id'=>"subtotal_gc_".((string)$_smarty_tpl->getValue('gift_key')),'class'=>"ty-cart-items__list-item-price none"), (int) 0, $_smarty_current_dir);
?>
        </p>
        </div>
        <?php if ($_smarty_tpl->getValue('block')['properties']['display_delete_icons'] == "Y") {?>
        <?php $_smarty_tpl->assign('r_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
        <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
            <?php if ((!$_smarty_tpl->getValue('runtime')['checkout'] || $_smarty_tpl->getValue('force_items_deletion')) && !$_smarty_tpl->getValue('p')['extra']['exclude_from_calculate']) {
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->getValue('gift_key'))."&redirect_url=".((string)$_smarty_tpl->getValue('r_url')),'but_meta'=>"cm-ajax cm-post cm-ajax-full-render ty-cart-items__list-item-tools-btn",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), (int) 0, $_smarty_current_dir);
}?>
        </div>
        <?php }?>
    </li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
}
}
