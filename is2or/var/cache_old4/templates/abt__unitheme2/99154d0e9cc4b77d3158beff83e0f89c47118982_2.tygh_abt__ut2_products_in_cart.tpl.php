<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:52
  from 'tygh:blocks/checkout/abt__ut2_products_in_cart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb52042d4d45_55190470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99154d0e9cc4b77d3158beff83e0f89c47118982' => 
    array (
      0 => 'blocks/checkout/abt__ut2_products_in_cart.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/static_templates/abt__ut2__title_block.tpl' => 2,
    'tygh:common/image.tpl' => 2,
    'tygh:views/companies/components/product_company_data.tpl' => 2,
    'tygh:common/options_info.tpl' => 2,
    'tygh:common/price.tpl' => 8,
  ),
))) {
function content_69fb52042d4d45_55190470 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/checkout';
\Tygh\Languages\Helper::preloadLangVars(array('sku','copy','unit_price','abt__ut2.price_per_set','unit_price','total_price','sku','copy','unit_price','abt__ut2.price_per_set','unit_price','total_price'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div id="checkout_info_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->getValue('runtime')['controller'] == "checkout") {?>
        <div class="ab-checkout-header-title">
            <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/static_templates/abt__ut2__title_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <div class="ut2-cart-edit">
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.cart")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><i class="ty-icon-edit"></i>&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('edit', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </div>
        </div>
    <?php }?>

    <?php $_smarty_tpl->assign('is_checkout', ($_smarty_tpl->getValue('runtime')['controller'] == "checkout" && $_smarty_tpl->getValue('runtime')['mode'] == "checkout"), false, NULL);?>

    <div class="ut2-cart-content<?php if ($_smarty_tpl->getValue('is_checkout')) {?> is-checkout<?php }?>">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:cart_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart_products'), 'product', false, 'key', 'cart_products', array (
));
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach16DoElse = false;
?>
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:cart_products"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                    <?php if (!$_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['parent']) {?>

                        <?php $_smarty_tpl->assign('cart_product_icon_width', ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_width']) > 0 ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_width'] : 80), false, NULL);?>
                        <?php $_smarty_tpl->assign('cart_product_icon_height', ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_height']) > 0 ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_height'] : 80), false, NULL);?>

                        <div class="ut2-cart-products__item<?php if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['buy_together'] && !$_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['parent']['buy_together']) {?> ut2-bt_set-main-product<?php }?>"
                             style="--cart-product-icon-width:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cart_product_icon_width')), ENT_QUOTES, 'UTF-8');?>
px;--cart-product-icon-height:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cart_product_icon_height')), ENT_QUOTES, 'UTF-8');?>
px;">

                            <div class="ut2-cart-product-base">

                                <div class="product-pict">
                                    <div class="pict-underlay">
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('product')['main_pair'],'lazy_load'=>false,'obj_id'=>$_smarty_tpl->getValue('product')['product_id'],'image_width'=>$_smarty_tpl->getValue('cart_product_icon_width'),'image_height'=>$_smarty_tpl->getValue('cart_product_icon_height')), (int) 0, $_smarty_current_dir);
?>
                                        </a>
                                    </div>
                                </div>


                                <div class="ut2-cart-product-desc">
                                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:ab__cart_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

                                        <div class="product-name">
                                            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo $_smarty_tpl->getValue('product')['product'];?>

                                            </a>
                                        </div>

                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('product')['product_code'])) {?>
                                            <div class="ty-control-group ty-sku-item">
                                                <div class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sku", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
                                                <div class="ut2_copy"
                                                     title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("copy", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                                    <i class="ut2-icon-copy"></i>
                                                    <span class="ut2--sku-text"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_code']), ENT_QUOTES, 'UTF-8');?>
</span>
                                                </div>
                                            </div>
                                        <?php }?>

                                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/companies/components/product_company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_name'=>$_smarty_tpl->getValue('product')['company_name'],'company_id'=>$_smarty_tpl->getValue('product')['company_id']), (int) 0, $_smarty_current_dir);
?>

                                        <?php if ($_smarty_tpl->getValue('product')['variation_features']) {?>
                                            <div class="options-variations-readonly">
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features'], 'v_feature');
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v_feature')->value) {
$foreach17DoElse = false;
?><div class="ty-product-options"><div class="ty-product-options-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['description']), ENT_QUOTES, 'UTF-8');?>
:<span class="white-space">&nbsp;</span></div><div class="ty-product-options-content"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['variant']), ENT_QUOTES, 'UTF-8');?>
</div></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </div>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->getValue('product')['product_options']) {?>
                                            <div class="options-variations-readonly">
                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product')['product_options'],'no_block'=>true), (int) 0, $_smarty_current_dir);
?>
                                            </div>
                                        <?php }?>

                                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:ab__cart_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                </div>

                            </div>


                            <?php if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['buy_together'] && !$_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['parent']['buy_together']) {?>
                                <div class="ut2-cart-product-price-info is-bt-set">
                                    <div class="ut2-cart-product-exinfo">
                                        <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-total">
                                            <div class="ut2-cart-product-exinfo-header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("unit_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                            <div class="ut2-cart-product-exinfo-body">
                                                <div class="mix-quantity-x-price"><bdi class="bdi-add-wrapper"><span class="mix-quantity-x"><span class="unit-quantity"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span class="white-space">&nbsp;</span>x</span><span class="unit-price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['base_price']), (int) 0, $_smarty_current_dir);
?></span></bdi></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>


                            <div class="ut2-cart-product-price-info">
                                <div class="ut2-cart-product-exinfo">

                                    <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-price">
                                        <div class="ut2-cart-product-exinfo-header">
                                            <?php if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['buy_together'] && !$_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['parent']['buy_together']) {?>
                                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.price_per_set", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("unit_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                            <?php }?>
                                        </div>
                                        <div class="ut2-cart-product-exinfo-body">
                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price'],'class'=>"ty-sub-price"), (int) 0, $_smarty_current_dir);
?>

                                                <?php $_smarty_tpl->assign('full_price', 0, false, NULL);?>

                                                <?php if ($_smarty_tpl->getValue('product')['promotions']) {?>
                                                    <?php $_smarty_tpl->assign('full_price', $_smarty_tpl->getValue('product')['base_price'], false, NULL);?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->assign('pd', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_data')($_smarty_tpl->getValue('product')['product_id'],$_smarty_tpl->getValue('auth'),(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'',false,false,false,false,false,false), false, NULL);?>
                                                    <?php $_smarty_tpl->assign('full_price', $_smarty_tpl->getValue('pd')['price'], false, NULL);?>
                                                    <?php if ($_smarty_tpl->getValue('pd')['list_price'] > 0) {?>
                                                        <?php $_smarty_tpl->assign('full_price', $_smarty_tpl->getValue('pd')['list_price'], false, NULL);?>
                                                    <?php }?>
                                                <?php }?>

                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['product_options'], 'lp_product_option');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('lp_product_option')->value) {
$foreach18DoElse = false;
?>
                                                    <?php if (( !true || empty($_smarty_tpl->getValue('lp_product_option')['variants']))) {
continue 1;
}?>
                                                    <?php $_smarty_tpl->assign('lp_option', $_smarty_tpl->getValue('lp_product_option')['variants'][$_smarty_tpl->getValue('lp_product_option')['value']], false, NULL);?>

                                                    <?php if ($_smarty_tpl->getValue('lp_option')['modifier_type'] == 'A') {?>
                                                        <?php $_smarty_tpl->assign('full_price', $_smarty_tpl->getValue('full_price')+$_smarty_tpl->getValue('lp_option')['modifier'], false, NULL);?>
                                                    <?php } elseif ($_smarty_tpl->getValue('lp_option')['modifier_type'] == 'P') {?>
                                                        <?php $_smarty_tpl->assign('full_price', $_smarty_tpl->getValue('full_price')+$_smarty_tpl->getValue('full_price')*$_smarty_tpl->getValue('lp_option')['modifier']/100, false, NULL);?>
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                                <?php if ($_smarty_tpl->getValue('full_price') > 0 && $_smarty_tpl->getValue('full_price') > $_smarty_tpl->getValue('product')['display_price']) {?>
                                                    <div class="ty-strike">
                                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('full_price')), (int) 0, $_smarty_current_dir);
?>
                                                    </div>
                                                <?php }?>
                                        </div>
                                    </div>


                                    <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-amount">
                                        <div class="ut2-cart-product-exinfo-header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('qty', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                        <div class="ut2-cart-product-exinfo-body"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</div>
                                    </div>


                                    <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-total">
                                        <div class="ut2-cart-product-exinfo-header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("total_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                        <div class="ut2-cart-product-exinfo-body">
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_subtotal']), (int) 0, $_smarty_current_dir);
?>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:product_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:product_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                        </div>
                    <?php }?>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:cart_products"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:cart_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
<!--checkout_info_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/checkout/abt__ut2_products_in_cart.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/checkout/abt__ut2_products_in_cart.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="checkout_info_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->getValue('runtime')['controller'] == "checkout") {?>
        <div class="ab-checkout-header-title">
            <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/static_templates/abt__ut2__title_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <div class="ut2-cart-edit">
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.cart")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><i class="ty-icon-edit"></i>&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('edit', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </div>
        </div>
    <?php }?>

    <?php $_smarty_tpl->assign('is_checkout', ($_smarty_tpl->getValue('runtime')['controller'] == "checkout" && $_smarty_tpl->getValue('runtime')['mode'] == "checkout"), false, NULL);?>

    <div class="ut2-cart-content<?php if ($_smarty_tpl->getValue('is_checkout')) {?> is-checkout<?php }?>">
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:cart_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart_products'), 'product', false, 'key', 'cart_products', array (
));
$foreach19DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach19DoElse = false;
?>
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:cart_products"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                    <?php if (!$_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['parent']) {?>

                        <?php $_smarty_tpl->assign('cart_product_icon_width', ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_width']) > 0 ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_width'] : 80), false, NULL);?>
                        <?php $_smarty_tpl->assign('cart_product_icon_height', ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_height']) > 0 ? $_smarty_tpl->getValue('settings')['Thumbnails']['product_cart_thumbnail_height'] : 80), false, NULL);?>

                        <div class="ut2-cart-products__item<?php if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['buy_together'] && !$_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['parent']['buy_together']) {?> ut2-bt_set-main-product<?php }?>"
                             style="--cart-product-icon-width:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cart_product_icon_width')), ENT_QUOTES, 'UTF-8');?>
px;--cart-product-icon-height:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('cart_product_icon_height')), ENT_QUOTES, 'UTF-8');?>
px;">

                            <div class="ut2-cart-product-base">

                                <div class="product-pict">
                                    <div class="pict-underlay">
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('product')['main_pair'],'lazy_load'=>false,'obj_id'=>$_smarty_tpl->getValue('product')['product_id'],'image_width'=>$_smarty_tpl->getValue('cart_product_icon_width'),'image_height'=>$_smarty_tpl->getValue('cart_product_icon_height')), (int) 0, $_smarty_current_dir);
?>
                                        </a>
                                    </div>
                                </div>


                                <div class="ut2-cart-product-desc">
                                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:ab__cart_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

                                        <div class="product-name">
                                            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                                <?php echo $_smarty_tpl->getValue('product')['product'];?>

                                            </a>
                                        </div>

                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('product')['product_code'])) {?>
                                            <div class="ty-control-group ty-sku-item">
                                                <div class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sku", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
                                                <div class="ut2_copy"
                                                     title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("copy", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                                    <i class="ut2-icon-copy"></i>
                                                    <span class="ut2--sku-text"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_code']), ENT_QUOTES, 'UTF-8');?>
</span>
                                                </div>
                                            </div>
                                        <?php }?>

                                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/companies/components/product_company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_name'=>$_smarty_tpl->getValue('product')['company_name'],'company_id'=>$_smarty_tpl->getValue('product')['company_id']), (int) 0, $_smarty_current_dir);
?>

                                        <?php if ($_smarty_tpl->getValue('product')['variation_features']) {?>
                                            <div class="options-variations-readonly">
                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features'], 'v_feature');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v_feature')->value) {
$foreach20DoElse = false;
?><div class="ty-product-options"><div class="ty-product-options-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['description']), ENT_QUOTES, 'UTF-8');?>
:<span class="white-space">&nbsp;</span></div><div class="ty-product-options-content"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['variant']), ENT_QUOTES, 'UTF-8');?>
</div></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            </div>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->getValue('product')['product_options']) {?>
                                            <div class="options-variations-readonly">
                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product')['product_options'],'no_block'=>true), (int) 0, $_smarty_current_dir);
?>
                                            </div>
                                        <?php }?>

                                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:ab__cart_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                </div>

                            </div>


                            <?php if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['buy_together'] && !$_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['parent']['buy_together']) {?>
                                <div class="ut2-cart-product-price-info is-bt-set">
                                    <div class="ut2-cart-product-exinfo">
                                        <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-total">
                                            <div class="ut2-cart-product-exinfo-header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("unit_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                            <div class="ut2-cart-product-exinfo-body">
                                                <div class="mix-quantity-x-price"><bdi class="bdi-add-wrapper"><span class="mix-quantity-x"><span class="unit-quantity"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span class="white-space">&nbsp;</span>x</span><span class="unit-price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['base_price']), (int) 0, $_smarty_current_dir);
?></span></bdi></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>


                            <div class="ut2-cart-product-price-info">
                                <div class="ut2-cart-product-exinfo">

                                    <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-price">
                                        <div class="ut2-cart-product-exinfo-header">
                                            <?php if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['buy_together'] && !$_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['parent']['buy_together']) {?>
                                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.price_per_set", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("unit_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                            <?php }?>
                                        </div>
                                        <div class="ut2-cart-product-exinfo-body">
                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price'],'class'=>"ty-sub-price"), (int) 0, $_smarty_current_dir);
?>

                                                <?php $_smarty_tpl->assign('full_price', 0, false, NULL);?>

                                                <?php if ($_smarty_tpl->getValue('product')['promotions']) {?>
                                                    <?php $_smarty_tpl->assign('full_price', $_smarty_tpl->getValue('product')['base_price'], false, NULL);?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->assign('pd', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_data')($_smarty_tpl->getValue('product')['product_id'],$_smarty_tpl->getValue('auth'),(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'',false,false,false,false,false,false), false, NULL);?>
                                                    <?php $_smarty_tpl->assign('full_price', $_smarty_tpl->getValue('pd')['price'], false, NULL);?>
                                                    <?php if ($_smarty_tpl->getValue('pd')['list_price'] > 0) {?>
                                                        <?php $_smarty_tpl->assign('full_price', $_smarty_tpl->getValue('pd')['list_price'], false, NULL);?>
                                                    <?php }?>
                                                <?php }?>

                                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['product_options'], 'lp_product_option');
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('lp_product_option')->value) {
$foreach21DoElse = false;
?>
                                                    <?php if (( !true || empty($_smarty_tpl->getValue('lp_product_option')['variants']))) {
continue 1;
}?>
                                                    <?php $_smarty_tpl->assign('lp_option', $_smarty_tpl->getValue('lp_product_option')['variants'][$_smarty_tpl->getValue('lp_product_option')['value']], false, NULL);?>

                                                    <?php if ($_smarty_tpl->getValue('lp_option')['modifier_type'] == 'A') {?>
                                                        <?php $_smarty_tpl->assign('full_price', $_smarty_tpl->getValue('full_price')+$_smarty_tpl->getValue('lp_option')['modifier'], false, NULL);?>
                                                    <?php } elseif ($_smarty_tpl->getValue('lp_option')['modifier_type'] == 'P') {?>
                                                        <?php $_smarty_tpl->assign('full_price', $_smarty_tpl->getValue('full_price')+$_smarty_tpl->getValue('full_price')*$_smarty_tpl->getValue('lp_option')['modifier']/100, false, NULL);?>
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                                <?php if ($_smarty_tpl->getValue('full_price') > 0 && $_smarty_tpl->getValue('full_price') > $_smarty_tpl->getValue('product')['display_price']) {?>
                                                    <div class="ty-strike">
                                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('full_price')), (int) 0, $_smarty_current_dir);
?>
                                                    </div>
                                                <?php }?>
                                        </div>
                                    </div>


                                    <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-amount">
                                        <div class="ut2-cart-product-exinfo-header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('qty', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                        <div class="ut2-cart-product-exinfo-body"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</div>
                                    </div>


                                    <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-total">
                                        <div class="ut2-cart-product-exinfo-header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("total_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                        <div class="ut2-cart-product-exinfo-body">
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_subtotal']), (int) 0, $_smarty_current_dir);
?>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:product_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:product_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                        </div>
                    <?php }?>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:cart_products"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:cart_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
<!--checkout_info_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
