<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:30
  from 'tygh:blocks/cart_content.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb216aff773_92802707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a0198b9492c0bed6c0b7f57949a9bffe08e0dd0' => 
    array (
      0 => 'blocks/cart_content.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:common/price.tpl' => 4,
    'tygh:buttons/button.tpl' => 2,
    'tygh:buttons/proceed_to_checkout.tpl' => 2,
  ),
))) {
function content_69afb216aff773_92802707 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks';
\Tygh\Languages\Helper::preloadLangVars(array('cart','cart','cart_items','cart_is_empty','total_items','items','for','view_cart','checkout','cart','cart','cart_items','cart_is_empty','total_items','items','for','view_cart','checkout'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('dropdown_id', $_smarty_tpl->getValue('block')['snapping_id'], false, NULL);
$_smarty_tpl->assign('r_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:cart_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="ty-dropdown-box" id="cart_status_<?php echo $_smarty_tpl->getValue('dropdown_id');?>
">
        <div id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination">
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.cart")), ENT_QUOTES, 'UTF-8');?>
" class="ty-hand" id="cart_icon_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:dropdown_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php if ($_SESSION['cart']['amount']) {?>
                    <i class="ut2-icon-use_icon_cart filled"><span class="ty-minicart-count"><?php echo htmlspecialchars((string) ($_SESSION['cart']['amount']), ENT_QUOTES, 'UTF-8');?>
</span></i><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                <?php } else { ?>
                    <i class="ut2-icon-use_icon_cart empty"><span class="ty-minicart-count ty-hand empty">0</span></i><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:dropdown_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <!--cart_icon_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
--></a>
        </div>
        <div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content ty-dropdown-box__content--cart hidden">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <div class="cm-cart-content <?php if ($_smarty_tpl->getValue('block')['properties']['products_links_type'] == "thumb") {?>cm-cart-content-thumb<?php }?> <?php if ($_smarty_tpl->getValue('block')['properties']['display_delete_icons'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>cm-cart-content-delete<?php }?>" id="cart_content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ut2-popup-box-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cart_items", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <div class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-baseline-close"></i></div></div>
                        <div class="ty-cart-items">
                            <?php if ($_SESSION['cart']['amount']) {?>
                                <ul class="ty-cart-items__list">
                                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:cart_status"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                        <?php $_smarty_tpl->assign('_cart_products', $_smarty_tpl->getSmarty()->getModifierCallback('array_reverse')($_SESSION['cart']['products'],true), false, NULL);?>
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_cart_products'), 'product', false, 'key', 'cart_products', array (
));
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach6DoElse = false;
?>
                                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                            <?php if (!$_smarty_tpl->getValue('product')['extra']['parent']) {?>
                                                <li class="ty-cart-items__list-item<?php if ($_smarty_tpl->getValue('block')['properties']['display_delete_icons'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && (!$_smarty_tpl->getValue('runtime')['checkout'] || $_smarty_tpl->getValue('force_items_deletion')) && !$_smarty_tpl->getValue('product')['extra']['exclude_from_calculate']) {?> has-rm-btn<?php }?>">
                                                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                                    <?php if ($_smarty_tpl->getValue('block')['properties']['products_links_type'] == "thumb") {?>
                                                        <div class="ty-cart-items__list-item-image">
                                                            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_height'],'images'=>$_smarty_tpl->getValue('product')['main_pair'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
                                                            </a>
                                                        </div>
                                                    <?php }?>
                                                    <div class="ty-cart-items__list-item-desc ty-cart-items__list-item-desc--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['properties']['products_links_type']), ENT_QUOTES, 'UTF-8');?>
" >
                                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->getValue('product')['product'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('product')['product_id']) ?? null : $tmp);?>
</a>
                                                    <p>
                                                        <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span>&nbsp;x&nbsp;</span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('key'))."_".((string)$_smarty_tpl->getValue('dropdown_id')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?>
                                                    </p>
                                                    </div>
                                                    <?php if ($_smarty_tpl->getValue('block')['properties']['display_delete_icons'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                                        <div class="ty-cart-items__list-item-tools">
                                                            <?php if ((!$_smarty_tpl->getValue('runtime')['checkout'] || $_smarty_tpl->getValue('force_items_deletion')) && !$_smarty_tpl->getValue('product')['extra']['exclude_from_calculate']) {?>
                                                                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete.from_status?cart_id=".((string)$_smarty_tpl->getValue('key'))."&redirect_url=".((string)$_smarty_tpl->getValue('r_url')),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_content*,cart_icon*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), (int) 0, $_smarty_current_dir);
?>
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                                </li>
                                            <?php }?>
                                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:cart_status"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                </ul>
                            <?php } else { ?>
                                <div class="ty-cart-items__empty ty-center"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cart_is_empty", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                            <?php }?>
                        </div>

                    <?php if ($_smarty_tpl->getValue('block')['properties']['display_bottom_buttons'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                        <div class="cm-cart-buttons buttons-container <?php if ($_SESSION['cart']['amount']) {?> full-cart<?php } else { ?> hidden<?php }?>">
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:cart_subtotal"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <?php if ($_SESSION['cart']['amount'] > 1 || $_smarty_tpl->getValue('product')['extra']['buy_together']) {?>
                            <div class="cart_subtotal">
                                <div class="ut2-cart_subtotal__caption"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("total_items", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
                                <div class="ut2-cart_subtotal__data"><?php echo htmlspecialchars((string) ($_SESSION['cart']['amount']), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("items", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("for", [], $_smarty_tpl->getSmarty()->getLanguage());?>
&nbsp;&nbsp;<strong><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_SESSION['cart']['display_subtotal']), (int) 0, $_smarty_current_dir);
?></strong></div></div>
                            <?php }?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:cart_subtotal"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                            <div class="cart_buttons">
                                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.cart")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__outline"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("view_cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                                <?php if ($_smarty_tpl->getValue('settings')['Checkout']['checkout_redirect'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("checkout", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>

                <!--cart_content_<?php echo $_smarty_tpl->getValue('dropdown_id');?>
--></div>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>
    <!--cart_status_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:cart_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/cart_content.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/cart_content.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('dropdown_id', $_smarty_tpl->getValue('block')['snapping_id'], false, NULL);
$_smarty_tpl->assign('r_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:cart_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="ty-dropdown-box" id="cart_status_<?php echo $_smarty_tpl->getValue('dropdown_id');?>
">
        <div id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination">
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.cart")), ENT_QUOTES, 'UTF-8');?>
" class="ty-hand" id="cart_icon_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:dropdown_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php if ($_SESSION['cart']['amount']) {?>
                    <i class="ut2-icon-use_icon_cart filled"><span class="ty-minicart-count"><?php echo htmlspecialchars((string) ($_SESSION['cart']['amount']), ENT_QUOTES, 'UTF-8');?>
</span></i><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                <?php } else { ?>
                    <i class="ut2-icon-use_icon_cart empty"><span class="ty-minicart-count ty-hand empty">0</span></i><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:dropdown_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <!--cart_icon_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
--></a>
        </div>
        <div id="dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content ty-dropdown-box__content--cart hidden">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <div class="cm-cart-content <?php if ($_smarty_tpl->getValue('block')['properties']['products_links_type'] == "thumb") {?>cm-cart-content-thumb<?php }?> <?php if ($_smarty_tpl->getValue('block')['properties']['display_delete_icons'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>cm-cart-content-delete<?php }?>" id="cart_content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ut2-popup-box-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cart_items", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <div class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_dropdown_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
"><i class="ut2-icon-baseline-close"></i></div></div>
                        <div class="ty-cart-items">
                            <?php if ($_SESSION['cart']['amount']) {?>
                                <ul class="ty-cart-items__list">
                                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:cart_status"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                        <?php $_smarty_tpl->assign('_cart_products', $_smarty_tpl->getSmarty()->getModifierCallback('array_reverse')($_SESSION['cart']['products'],true), false, NULL);?>
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_cart_products'), 'product', false, 'key', 'cart_products', array (
));
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach7DoElse = false;
?>
                                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                            <?php if (!$_smarty_tpl->getValue('product')['extra']['parent']) {?>
                                                <li class="ty-cart-items__list-item<?php if ($_smarty_tpl->getValue('block')['properties']['display_delete_icons'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && (!$_smarty_tpl->getValue('runtime')['checkout'] || $_smarty_tpl->getValue('force_items_deletion')) && !$_smarty_tpl->getValue('product')['extra']['exclude_from_calculate']) {?> has-rm-btn<?php }?>">
                                                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                                    <?php if ($_smarty_tpl->getValue('block')['properties']['products_links_type'] == "thumb") {?>
                                                        <div class="ty-cart-items__list-item-image">
                                                            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_width'],'image_height'=>$_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_height'],'images'=>$_smarty_tpl->getValue('product')['main_pair'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
                                                            </a>
                                                        </div>
                                                    <?php }?>
                                                    <div class="ty-cart-items__list-item-desc ty-cart-items__list-item-desc--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['properties']['products_links_type']), ENT_QUOTES, 'UTF-8');?>
" >
                                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = $_smarty_tpl->getValue('product')['product'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('product')['product_id']) ?? null : $tmp);?>
</a>
                                                    <p>
                                                        <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span>&nbsp;x&nbsp;</span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('key'))."_".((string)$_smarty_tpl->getValue('dropdown_id')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?>
                                                    </p>
                                                    </div>
                                                    <?php if ($_smarty_tpl->getValue('block')['properties']['display_delete_icons'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                                        <div class="ty-cart-items__list-item-tools">
                                                            <?php if ((!$_smarty_tpl->getValue('runtime')['checkout'] || $_smarty_tpl->getValue('force_items_deletion')) && !$_smarty_tpl->getValue('product')['extra']['exclude_from_calculate']) {?>
                                                                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete.from_status?cart_id=".((string)$_smarty_tpl->getValue('key'))."&redirect_url=".((string)$_smarty_tpl->getValue('r_url')),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_content*,cart_icon*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), (int) 0, $_smarty_current_dir);
?>
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                                </li>
                                            <?php }?>
                                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:cart_status"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                </ul>
                            <?php } else { ?>
                                <div class="ty-cart-items__empty ty-center"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cart_is_empty", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                            <?php }?>
                        </div>

                    <?php if ($_smarty_tpl->getValue('block')['properties']['display_bottom_buttons'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                        <div class="cm-cart-buttons buttons-container <?php if ($_SESSION['cart']['amount']) {?> full-cart<?php } else { ?> hidden<?php }?>">
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:cart_subtotal"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <?php if ($_SESSION['cart']['amount'] > 1 || $_smarty_tpl->getValue('product')['extra']['buy_together']) {?>
                            <div class="cart_subtotal">
                                <div class="ut2-cart_subtotal__caption"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("total_items", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
                                <div class="ut2-cart_subtotal__data"><?php echo htmlspecialchars((string) ($_SESSION['cart']['amount']), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("items", [], $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("for", [], $_smarty_tpl->getSmarty()->getLanguage());?>
&nbsp;&nbsp;<strong><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_SESSION['cart']['display_subtotal']), (int) 0, $_smarty_current_dir);
?></strong></div></div>
                            <?php }?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:cart_subtotal"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                            <div class="cart_buttons">
                                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.cart")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__outline"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("view_cart", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                                <?php if ($_smarty_tpl->getValue('settings')['Checkout']['checkout_redirect'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("checkout", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>

                <!--cart_content_<?php echo $_smarty_tpl->getValue('dropdown_id');?>
--></div>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:minicart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>
    <!--cart_status_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('dropdown_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:cart_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
