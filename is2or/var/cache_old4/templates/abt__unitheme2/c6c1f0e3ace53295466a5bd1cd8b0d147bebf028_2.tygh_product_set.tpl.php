<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:52
  from 'tygh:addons/buy_together/abt__ut2_common/product_set.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb52045c85f1_49992966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6c1f0e3ace53295466a5bd1cd8b0d147bebf028' => 
    array (
      0 => 'addons/buy_together/abt__ut2_common/product_set.tpl',
      1 => 1777315049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:views/companies/components/product_company_data.tpl' => 2,
    'tygh:common/price.tpl' => 2,
  ),
))) {
function content_69fb52045c85f1_49992966 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/buy_together/abt__ut2_common';
\Tygh\Languages\Helper::preloadLangVars(array('sku','copy','unit_price','sku','copy','unit_price'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['buy_together']) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart_products'), '_product', false, 'key_conf');
$foreach22DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key_conf')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach22DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key_conf')]['extra']['parent']['buy_together'] == $_smarty_tpl->getValue('key')) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "is_conf_prod", null, null);?>1<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'is_conf_prod')) {?>
        <div class="ut2-bt_set-related-products" id="buy_together_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart_products'), '_product', false, 'key_conf');
$foreach23DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key_conf')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach23DoElse = false;
?>
                <?php $_smarty_tpl->assign('product', $_smarty_tpl->getValue('_product'), false, NULL);?>
                <?php if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key_conf')]['extra']['parent']['buy_together'] == $_smarty_tpl->getValue('key')) {?>

                    <div class="ut2-cart-products__item">

                        <div class="ut2-cart-product-base">

                            <div class="product-pict">
                                <div class="pict-underlay">
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('_product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('_product')['main_pair'],'no_ids'=>true,'lazy_load'=>false,'image_width'=>$_smarty_tpl->getValue('cart_product_icon_width'),'image_height'=>$_smarty_tpl->getValue('cart_product_icon_height')), (int) 0, $_smarty_current_dir);
?>
                                    </a>
                                </div>
                            </div>


                            <div class="ut2-cart-product-desc">

                                <div class="product-name">
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('_product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php echo $_smarty_tpl->getValue('_product')['product'];?>

                                    </a>
                                </div>


                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('_product')['product_code'])) {?>
                                    <div class="ty-control-group ty-sku-item">
                                        <div class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sku", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
                                        <div class="ut2_copy"
                                             title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("copy", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                            <i class="ut2-icon-copy"></i>
                                            <span class="ut2--sku-text"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['product_code']), ENT_QUOTES, 'UTF-8');?>
</span>
                                        </div>
                                    </div>
                                <?php }?>


                                <?php if (( !true || empty($_smarty_tpl->getValue('addons')['direct_payments'])) || $_smarty_tpl->getValue('addons')['direct_payments']['status'] != "A" || $_smarty_tpl->getValue('runtime')['controller'] == "checkout") {?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/companies/components/product_company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_name'=>$_smarty_tpl->getValue('_product')['company_name'],'company_id'=>$_smarty_tpl->getValue('_product')['company_id']), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>


                                <?php if ($_smarty_tpl->getValue('runtime')['controller'] != "checkout") {?>
                                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                <?php }?>


                                <?php if ($_smarty_tpl->getValue('_product')['product_options']) {?>
                                    <div class="options-variations-readonly is-bt-set">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_product')['product_options'], 'option');
$foreach24DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('option')->value) {
$foreach24DoElse = false;
?><div class="ty-product-options"><div class="ty-product-options-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('option')['option_name']), ENT_QUOTES, 'UTF-8');?>
:<span class="white-space">&nbsp;</span></div><div class="ty-product-options-content"><?php if ($_smarty_tpl->getValue('option')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::FILE")) {
if ($_smarty_tpl->getValue('_product')['extra']['custom_files'][$_smarty_tpl->getValue('option')['option_id']]) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_product')['extra']['custom_files'][$_smarty_tpl->getValue('option')['option_id']], 'file', false, 'file_id', 'po_files', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$foreach25DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('file_id')->value => $_smarty_tpl->getVariable('file')->value) {
$foreach25DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['total'];
?><a class="cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.get_custom_file?cart_id=".((string)$_smarty_tpl->getValue('key_conf'))."&file=".((string)$_smarty_tpl->getValue('file_id'))."&option_id=".((string)$_smarty_tpl->getValue('option')['option_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['name']), ENT_QUOTES, 'UTF-8');?>
</a><?php if (!($_smarty_tpl->getValue('__smarty_foreach_po_files')['last'] ?? null)) {?>,&nbsp;<?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
} else {
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('option')['variants'][$_smarty_tpl->getValue('option')['value']]['variant_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('option')['value'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('runtime')['controller'] != "checkout") {?><input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key_conf')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('option')['option_id']), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('option')['value']), ENT_QUOTES, 'UTF-8');?>
"><?php }?></div></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </div>
                                <?php }?>

                            </div>

                        </div>


                        <div class="ut2-cart-product-price-info is-bt-set">
                            <div class="ut2-cart-product-exinfo">
                                <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-total">
                                    <div class="ut2-cart-product-exinfo-header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("unit_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                    <div class="ut2-cart-product-exinfo-body">
                                        <div class="mix-quantity-x-price"><bdi class="bdi-add-wrapper"><span class="mix-quantity-x"><span class="unit-quantity"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span class="white-space">&nbsp;</span>x</span><span class="unit-price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('_product')['price']), (int) 0, $_smarty_current_dir);
?></span></bdi></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/buy_together/abt__ut2_common/product_set.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/buy_together/abt__ut2_common/product_set.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['buy_together']) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart_products'), '_product', false, 'key_conf');
$foreach26DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key_conf')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach26DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key_conf')]['extra']['parent']['buy_together'] == $_smarty_tpl->getValue('key')) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "is_conf_prod", null, null);?>1<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'is_conf_prod')) {?>
        <div class="ut2-bt_set-related-products" id="buy_together_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart_products'), '_product', false, 'key_conf');
$foreach27DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key_conf')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach27DoElse = false;
?>
                <?php $_smarty_tpl->assign('product', $_smarty_tpl->getValue('_product'), false, NULL);?>
                <?php if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key_conf')]['extra']['parent']['buy_together'] == $_smarty_tpl->getValue('key')) {?>

                    <div class="ut2-cart-products__item">

                        <div class="ut2-cart-product-base">

                            <div class="product-pict">
                                <div class="pict-underlay">
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('_product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->getValue('_product')['main_pair'],'no_ids'=>true,'lazy_load'=>false,'image_width'=>$_smarty_tpl->getValue('cart_product_icon_width'),'image_height'=>$_smarty_tpl->getValue('cart_product_icon_height')), (int) 0, $_smarty_current_dir);
?>
                                    </a>
                                </div>
                            </div>


                            <div class="ut2-cart-product-desc">

                                <div class="product-name">
                                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('_product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php echo $_smarty_tpl->getValue('_product')['product'];?>

                                    </a>
                                </div>


                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('_product')['product_code'])) {?>
                                    <div class="ty-control-group ty-sku-item">
                                        <div class="ty-control-group__label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sku", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</div>
                                        <div class="ut2_copy"
                                             title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("copy", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                                            <i class="ut2-icon-copy"></i>
                                            <span class="ut2--sku-text"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['product_code']), ENT_QUOTES, 'UTF-8');?>
</span>
                                        </div>
                                    </div>
                                <?php }?>


                                <?php if (( !true || empty($_smarty_tpl->getValue('addons')['direct_payments'])) || $_smarty_tpl->getValue('addons')['direct_payments']['status'] != "A" || $_smarty_tpl->getValue('runtime')['controller'] == "checkout") {?>
                                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/companies/components/product_company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_name'=>$_smarty_tpl->getValue('_product')['company_name'],'company_id'=>$_smarty_tpl->getValue('_product')['company_id']), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>


                                <?php if ($_smarty_tpl->getValue('runtime')['controller'] != "checkout") {?>
                                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                                <?php }?>


                                <?php if ($_smarty_tpl->getValue('_product')['product_options']) {?>
                                    <div class="options-variations-readonly is-bt-set">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_product')['product_options'], 'option');
$foreach28DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('option')->value) {
$foreach28DoElse = false;
?><div class="ty-product-options"><div class="ty-product-options-name"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('option')['option_name']), ENT_QUOTES, 'UTF-8');?>
:<span class="white-space">&nbsp;</span></div><div class="ty-product-options-content"><?php if ($_smarty_tpl->getValue('option')['option_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductOptionTypes::FILE")) {
if ($_smarty_tpl->getValue('_product')['extra']['custom_files'][$_smarty_tpl->getValue('option')['option_id']]) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_product')['extra']['custom_files'][$_smarty_tpl->getValue('option')['option_id']], 'file', false, 'file_id', 'po_files', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$foreach29DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('file_id')->value => $_smarty_tpl->getVariable('file')->value) {
$foreach29DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_po_files']->value['total'];
?><a class="cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.get_custom_file?cart_id=".((string)$_smarty_tpl->getValue('key_conf'))."&file=".((string)$_smarty_tpl->getValue('file_id'))."&option_id=".((string)$_smarty_tpl->getValue('option')['option_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('file')['name']), ENT_QUOTES, 'UTF-8');?>
</a><?php if (!($_smarty_tpl->getValue('__smarty_foreach_po_files')['last'] ?? null)) {?>,&nbsp;<?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
} else {
echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('option')['variants'][$_smarty_tpl->getValue('option')['value']]['variant_name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('option')['value'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->getValue('runtime')['controller'] != "checkout") {?><input type="hidden" name="cart_products[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key_conf')), ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('option')['option_id']), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('option')['value']), ENT_QUOTES, 'UTF-8');?>
"><?php }?></div></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </div>
                                <?php }?>

                            </div>

                        </div>


                        <div class="ut2-cart-product-price-info is-bt-set">
                            <div class="ut2-cart-product-exinfo">
                                <div class="ut2-cart-product-exinfo-col ut2-cart-product-exinfo-total">
                                    <div class="ut2-cart-product-exinfo-header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("unit_price", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                                    <div class="ut2-cart-product-exinfo-body">
                                        <div class="mix-quantity-x-price"><bdi class="bdi-add-wrapper"><span class="mix-quantity-x"><span class="unit-quantity"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span class="white-space">&nbsp;</span>x</span><span class="unit-price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('_product')['price']), (int) 0, $_smarty_current_dir);
?></span></bdi></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    <?php }
}
}
}
}
