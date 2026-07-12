<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:11
  from 'tygh:blocks/checkout/abt__ut2_products_in_cart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29b544d36_65334887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99154d0e9cc4b77d3158beff83e0f89c47118982' => 
    array (
      0 => 'blocks/checkout/abt__ut2_products_in_cart.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/static_templates/abt__ut2__title_block.tpl' => 2,
    'tygh:common/image.tpl' => 2,
    'tygh:common/options_info.tpl' => 4,
    'tygh:common/price.tpl' => 8,
    'tygh:buttons/button.tpl' => 4,
  ),
))) {
function content_69aea29b544d36_65334887 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/blocks/checkout';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div id="checkout_info_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->getValue('runtime')['controller'] == "checkout") {?>
        <div class="ab-checkout-header-title">
            <?php $_smarty_tpl->renderSubTemplate("tygh:blocks/static_templates/abt__ut2__title_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <div class="ab-checkout-edit">
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.cart")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><i class="ty-icon-edit"></i>&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('edit', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </div>
        </div>
    <?php }?>
    <ul class="ty-order-products__list order-product-list">
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
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach12DoElse = false;
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
                <li class="ty-order-products__item">

                    <?php if ($_smarty_tpl->getValue('runtime')['controller'] == "checkout") {?>
                        <div class="ab-checkout-product-base">
                            <div class="ab-checkout-product-icon">
                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>80,'image_height'=>80,'images'=>$_smarty_tpl->getValue('product')['main_pair'],'obj_id'=>$_smarty_tpl->getValue('product')['product_id']), (int) 0, $_smarty_current_dir);
?>
                            </div>
                            <div class="ab-checkout-product-title">
                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:ab__cart_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                <div>
                                    <bdi><a class="litecheckout__order-products-p"
                                            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('product')['product'];?>
</a>
                                    </bdi>
                                </div>

                                <?php if ($_smarty_tpl->getValue('product')['product_code']) {?>
                                    <p class="ab-checkout-product-code"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('code', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:&nbsp;<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_code']), ENT_QUOTES, 'UTF-8');?>
</p>
                                <?php }?>

                                <!--VARIATIONS-->
                                <?php if ($_smarty_tpl->getValue('product')['variation_features']) {?>
                                    <div class="ab-checkout-product-variations">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features'], 'v_feature');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v_feature')->value) {
$foreach13DoElse = false;
?>
                                            <p><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['description']), ENT_QUOTES, 'UTF-8');?>
: <b><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['variant']), ENT_QUOTES, 'UTF-8');?>
</b></p>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </div>
                                <?php }?>

                                <?php if ($_smarty_tpl->getValue('product')['product_options']) {?>
                                    <p class="ab-checkout-product-options">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product')['product_options'],'no_block'=>true), (int) 0, $_smarty_current_dir);
?>
                                    </p>
                                <?php }?>
                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:ab__cart_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                            </div>
                        </div>

                        <div class="ab-checkout-product-exinfo">
                            <div class="ab-checkout-product-exinfo-col ab-checkout-product-exinfo-price">
                                <div class="ab-checkout-product-exinfo-header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('price', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                <div class="ab-checkout-product-exinfo-body">
                                    <div class="ab-checkout-product-exinfo-val">
                                        <div><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price']), (int) 0, $_smarty_current_dir);
?></div>
                                        <div class="ty-strike">
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
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('lp_product_option')->value) {
$foreach14DoElse = false;
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
                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('full_price')), (int) 0, $_smarty_current_dir);
?>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ab-checkout-product-exinfo-col">
                                <div class="ab-checkout-product-exinfo-header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('qty', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                <div class="ab-checkout-product-exinfo-body">
                                    <div class="ab-checkout-product-exinfo-val">
                                        <div><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ab-checkout-product-exinfo-col ab-checkout-product-exinfo-amount">
                                <div class="ab-checkout-product-exinfo-header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('amount', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                <div class="ab-checkout-product-exinfo-body">
                                    <div class="ab-checkout-product-exinfo-val">
                                        <div><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_subtotal']), (int) 0, $_smarty_current_dir);
?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="ab-checkout-product-info">
                            <bdi><a class="litecheckout__order-products-p"
                                    href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('product')['product'];?>
</a>
                            </bdi>

                            <?php if (!$_smarty_tpl->getValue('product')['exclude_from_calculate']) {?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete?cart_id=".((string)$_smarty_tpl->getValue('key'))."&redirect_mode=".((string)$_smarty_tpl->getValue('runtime')['mode']),'but_meta'=>"ty-order-products__item-delete delete",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                            <div class="ty-order-products__price">
                                <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span
                                        dir="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price']), (int) 0, $_smarty_current_dir);
?>
                            </div>

                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product')['product_options'],'no_block'=>true), (int) 0, $_smarty_current_dir);
?>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('runtime')['controller'] == "checkout") {?>
                        <?php if (!$_smarty_tpl->getValue('product')['exclude_from_calculate']) {?>
                            <div class="ab-checkout-product-exinfo-remove">
                                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete?cart_id=".((string)$_smarty_tpl->getValue('key'))."&redirect_mode=".((string)$_smarty_tpl->getValue('runtime')['mode']),'but_meta'=>"ty-order-products__item-delete delete",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), (int) 0, $_smarty_current_dir);
?>
                            </div>
                        <?php }?>
                    <?php }?>
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
                </li>
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
    </ul>
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
            <div class="ab-checkout-edit">
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.cart")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><i class="ty-icon-edit"></i>&nbsp;<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('edit', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </div>
        </div>
    <?php }?>
    <ul class="ty-order-products__list order-product-list">
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
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach15DoElse = false;
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
                <li class="ty-order-products__item">

                    <?php if ($_smarty_tpl->getValue('runtime')['controller'] == "checkout") {?>
                        <div class="ab-checkout-product-base">
                            <div class="ab-checkout-product-icon">
                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>80,'image_height'=>80,'images'=>$_smarty_tpl->getValue('product')['main_pair'],'obj_id'=>$_smarty_tpl->getValue('product')['product_id']), (int) 0, $_smarty_current_dir);
?>
                            </div>
                            <div class="ab-checkout-product-title">
                                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:ab__cart_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                <div>
                                    <bdi><a class="litecheckout__order-products-p"
                                            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('product')['product'];?>
</a>
                                    </bdi>
                                </div>

                                <?php if ($_smarty_tpl->getValue('product')['product_code']) {?>
                                    <p class="ab-checkout-product-code"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('code', [], $_smarty_tpl->getSmarty()->getLanguage());?>
:&nbsp;<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_code']), ENT_QUOTES, 'UTF-8');?>
</p>
                                <?php }?>

                                <!--VARIATIONS-->
                                <?php if ($_smarty_tpl->getValue('product')['variation_features']) {?>
                                    <div class="ab-checkout-product-variations">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features'], 'v_feature');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v_feature')->value) {
$foreach16DoElse = false;
?>
                                            <p><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['description']), ENT_QUOTES, 'UTF-8');?>
: <b><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['variant']), ENT_QUOTES, 'UTF-8');?>
</b></p>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </div>
                                <?php }?>

                                <?php if ($_smarty_tpl->getValue('product')['product_options']) {?>
                                    <p class="ab-checkout-product-options">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product')['product_options'],'no_block'=>true), (int) 0, $_smarty_current_dir);
?>
                                    </p>
                                <?php }?>
                                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"block_checkout:ab__cart_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                            </div>
                        </div>

                        <div class="ab-checkout-product-exinfo">
                            <div class="ab-checkout-product-exinfo-col ab-checkout-product-exinfo-price">
                                <div class="ab-checkout-product-exinfo-header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('price', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                <div class="ab-checkout-product-exinfo-body">
                                    <div class="ab-checkout-product-exinfo-val">
                                        <div><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price']), (int) 0, $_smarty_current_dir);
?></div>
                                        <div class="ty-strike">
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
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('lp_product_option')->value) {
$foreach17DoElse = false;
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
                                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('full_price')), (int) 0, $_smarty_current_dir);
?>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ab-checkout-product-exinfo-col">
                                <div class="ab-checkout-product-exinfo-header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('qty', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                <div class="ab-checkout-product-exinfo-body">
                                    <div class="ab-checkout-product-exinfo-val">
                                        <div><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ab-checkout-product-exinfo-col ab-checkout-product-exinfo-amount">
                                <div class="ab-checkout-product-exinfo-header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")('amount', [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                <div class="ab-checkout-product-exinfo-body">
                                    <div class="ab-checkout-product-exinfo-val">
                                        <div><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_subtotal']), (int) 0, $_smarty_current_dir);
?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="ab-checkout-product-info">
                            <bdi><a class="litecheckout__order-products-p"
                                    href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('product')['product'];?>
</a>
                            </bdi>

                            <?php if (!$_smarty_tpl->getValue('product')['exclude_from_calculate']) {?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete?cart_id=".((string)$_smarty_tpl->getValue('key'))."&redirect_mode=".((string)$_smarty_tpl->getValue('runtime')['mode']),'but_meta'=>"ty-order-products__item-delete delete",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                            <div class="ty-order-products__price">
                                <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span
                                        dir="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price']), (int) 0, $_smarty_current_dir);
?>
                            </div>

                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product')['product_options'],'no_block'=>true), (int) 0, $_smarty_current_dir);
?>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('runtime')['controller'] == "checkout") {?>
                        <?php if (!$_smarty_tpl->getValue('product')['exclude_from_calculate']) {?>
                            <div class="ab-checkout-product-exinfo-remove">
                                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"checkout.delete?cart_id=".((string)$_smarty_tpl->getValue('key'))."&redirect_mode=".((string)$_smarty_tpl->getValue('runtime')['mode']),'but_meta'=>"ty-order-products__item-delete delete",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), (int) 0, $_smarty_current_dir);
?>
                            </div>
                        <?php }?>
                    <?php }?>
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
                </li>
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
    </ul>
    <!--checkout_info_products_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['snapping_id']), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
