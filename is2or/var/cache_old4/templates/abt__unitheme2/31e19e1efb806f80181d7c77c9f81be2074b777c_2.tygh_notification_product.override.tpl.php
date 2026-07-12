<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:11:36
  from 'tygh:addons/buy_together/hooks/products/notification_product.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4c188d7931_75783174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31e19e1efb806f80181d7c77c9f81be2074b777c' => 
    array (
      0 => 'addons/buy_together/hooks/products/notification_product.override.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 4,
    'tygh:common/options_info.tpl' => 4,
    'tygh:common/price.tpl' => 4,
  ),
))) {
function content_69fb4c188d7931_75783174 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/buy_together/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['extra']['parent']['buy_together']) {?>
    <!-- suppress bt child/related product and keep response non-empty -->
<?php } elseif ($_smarty_tpl->getValue('product')['extra']['buy_together']) {?>
        <div class="ut2-added-products__item ut2-bt_added-set-main-product">

        <div class="ut2-added-products__itself-item">
            <div class="product-pict">
                <div class="pict-underlay">
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('product')['main_pair'],'no_ids'=>true,'lazy_load'=>false,'image_width'=>$_smarty_tpl->getValue('cart_product_icon_width'),'image_height'=>$_smarty_tpl->getValue('cart_product_icon_height')), (int) 0, $_smarty_current_dir);
?>
                    </a>
                </div>
            </div>

            <div class="desc">
                <div class="base">

                    <div class="product-name">
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('product')['product_id'])), ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </div>

                    <?php if ($_smarty_tpl->getValue('product')['variation_features']) {?>
                        <div class="options-variations-readonly">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features'], 'v_feature');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v_feature')->value) {
$foreach4DoElse = false;
?><div class="ty-product-options"><div class="ty-product-options-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['description']), ENT_QUOTES, 'UTF-8');?>
:<span class="white-space">&nbsp;</span></div><div class="ty-product-options-content"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['variant']), ENT_QUOTES, 'UTF-8');?>
</div></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->getValue('product')['product_option_data']) {?>
                        <div class="options-variations-readonly">
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product')['product_option_data']), (int) 0, $_smarty_current_dir);
?>
                        </div>
                    <?php }?>

                </div>

            </div>
        </div>

        <div class="ut2-bt_added-set-related-products">
            <?php $_smarty_tpl->assign('added_bt_set_count', 0, false, NULL);?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('added_products'), '_product', false, '_key');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_key')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach5DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('_product')['extra']['parent']['buy_together'] == $_smarty_tpl->getValue('key')) {?>
                    <?php $_smarty_tpl->assign('added_bt_set_count', $_smarty_tpl->getValue('added_bt_set_count')+1, false, NULL);?>
                    <div class="ut2-added-products__item">
                        <div class="ut2-added-products__itself-item">

                            <div class="product-pict">
                                <?php if ($_smarty_tpl->getValue('added_bt_set_count') === 1) {?><div class="plus"></div><?php }?>
                                <div class="pict-underlay">
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('_product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('_product')['main_pair'],'no_ids'=>true,'lazy_load'=>false,'image_width'=>$_smarty_tpl->getValue('cart_product_icon_width'),'image_height'=>$_smarty_tpl->getValue('cart_product_icon_height')), (int) 0, $_smarty_current_dir);
?>
                                    </a>
                                </div>
                            </div>

                            <div class="desc">
                                <div class="base">

                                    <div class="product-name">
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('_product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('_product')['product_id'])), ENT_QUOTES, 'UTF-8');?>

                                        </a>
                                    </div>

                                    <?php if ($_smarty_tpl->getValue('_product')['variation_features']) {?>
                                        <div class="options-variations-readonly">
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_product')['variation_features'], 'v_feature');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v_feature')->value) {
$foreach6DoElse = false;
?><div class="ty-product-options"><div class="ty-product-options-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['description']), ENT_QUOTES, 'UTF-8');?>
:<span class="white-space">&nbsp;</span></div><div class="ty-product-options-content"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['variant']), ENT_QUOTES, 'UTF-8');?>
</div></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        </div>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->getValue('_product')['product_option_data']) {?>
                                        <div class="options-variations-readonly">
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('_product')['product_option_data']), (int) 0, $_smarty_current_dir);
?>
                                        </div>
                                    <?php }?>

                                </div>

                                <div class="mix-quantity-x-price"><bdi class="bdi-add-wrapper"><span class="mix-quantity-x"><span class="unit-quantity"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span class="white-space">&nbsp;</span>x</span><span class="unit-price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('_product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('_key')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?></span></bdi></div>

                            </div>

                        </div>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>

        <div class="mix-quantity-x-price"><bdi class="bdi-add-wrapper"><span class="mix-quantity-x"><span class="unit-quantity"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span class="white-space">&nbsp;</span>x</span><span class="unit-price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('key')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?></span></bdi></div>

    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/buy_together/hooks/products/notification_product.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/buy_together/hooks/products/notification_product.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['extra']['parent']['buy_together']) {?>
    <!-- suppress bt child/related product and keep response non-empty -->
<?php } elseif ($_smarty_tpl->getValue('product')['extra']['buy_together']) {?>
        <div class="ut2-added-products__item ut2-bt_added-set-main-product">

        <div class="ut2-added-products__itself-item">
            <div class="product-pict">
                <div class="pict-underlay">
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('product')['main_pair'],'no_ids'=>true,'lazy_load'=>false,'image_width'=>$_smarty_tpl->getValue('cart_product_icon_width'),'image_height'=>$_smarty_tpl->getValue('cart_product_icon_height')), (int) 0, $_smarty_current_dir);
?>
                    </a>
                </div>
            </div>

            <div class="desc">
                <div class="base">

                    <div class="product-name">
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('product')['product_id'])), ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </div>

                    <?php if ($_smarty_tpl->getValue('product')['variation_features']) {?>
                        <div class="options-variations-readonly">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['variation_features'], 'v_feature');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v_feature')->value) {
$foreach7DoElse = false;
?><div class="ty-product-options"><div class="ty-product-options-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['description']), ENT_QUOTES, 'UTF-8');?>
:<span class="white-space">&nbsp;</span></div><div class="ty-product-options-content"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['variant']), ENT_QUOTES, 'UTF-8');?>
</div></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->getValue('product')['product_option_data']) {?>
                        <div class="options-variations-readonly">
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product')['product_option_data']), (int) 0, $_smarty_current_dir);
?>
                        </div>
                    <?php }?>

                </div>

            </div>
        </div>

        <div class="ut2-bt_added-set-related-products">
            <?php $_smarty_tpl->assign('added_bt_set_count', 0, false, NULL);?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('added_products'), '_product', false, '_key');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_key')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach8DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('_product')['extra']['parent']['buy_together'] == $_smarty_tpl->getValue('key')) {?>
                    <?php $_smarty_tpl->assign('added_bt_set_count', $_smarty_tpl->getValue('added_bt_set_count')+1, false, NULL);?>
                    <div class="ut2-added-products__item">
                        <div class="ut2-added-products__itself-item">

                            <div class="product-pict">
                                <?php if ($_smarty_tpl->getValue('added_bt_set_count') === 1) {?><div class="plus"></div><?php }?>
                                <div class="pict-underlay">
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('_product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('_product')['main_pair'],'no_ids'=>true,'lazy_load'=>false,'image_width'=>$_smarty_tpl->getValue('cart_product_icon_width'),'image_height'=>$_smarty_tpl->getValue('cart_product_icon_height')), (int) 0, $_smarty_current_dir);
?>
                                    </a>
                                </div>
                            </div>

                            <div class="desc">
                                <div class="base">

                                    <div class="product-name">
                                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('_product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('_product')['product_id'])), ENT_QUOTES, 'UTF-8');?>

                                        </a>
                                    </div>

                                    <?php if ($_smarty_tpl->getValue('_product')['variation_features']) {?>
                                        <div class="options-variations-readonly">
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_product')['variation_features'], 'v_feature');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('v_feature')->value) {
$foreach9DoElse = false;
?><div class="ty-product-options"><div class="ty-product-options-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['description']), ENT_QUOTES, 'UTF-8');?>
:<span class="white-space">&nbsp;</span></div><div class="ty-product-options-content"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('v_feature')['variant']), ENT_QUOTES, 'UTF-8');?>
</div></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        </div>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->getValue('_product')['product_option_data']) {?>
                                        <div class="options-variations-readonly">
                                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('_product')['product_option_data']), (int) 0, $_smarty_current_dir);
?>
                                        </div>
                                    <?php }?>

                                </div>

                                <div class="mix-quantity-x-price"><bdi class="bdi-add-wrapper"><span class="mix-quantity-x"><span class="unit-quantity"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span class="white-space">&nbsp;</span>x</span><span class="unit-price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('_product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('_key')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?></span></bdi></div>

                            </div>

                        </div>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>

        <div class="mix-quantity-x-price"><bdi class="bdi-add-wrapper"><span class="mix-quantity-x"><span class="unit-quantity"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span class="white-space">&nbsp;</span>x</span><span class="unit-price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('key')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?></span></bdi></div>

    </div>
<?php }
}
}
}
