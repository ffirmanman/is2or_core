<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:00:50
  from 'tygh:addons/buy_together/hooks/checkout/minicart_product_info.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae45f2434067_97339615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '205f3a3b55b9d111b2a0f22de27270103410f074' => 
    array (
      0 => 'addons/buy_together/hooks/checkout/minicart_product_info.post.tpl',
      1 => 1767831046,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:common/price.tpl' => 2,
    'tygh:common/options_info.tpl' => 2,
  ),
))) {
function content_69ae45f2434067_97339615 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/buy_together/hooks/checkout';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['extra']['buy_together']) {?>
    <ul class="ty-buy-together-cart-items__list">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_cart_products'), '_product', false, '_key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_key')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach0DoElse = false;
?>
            <?php if ($_smarty_tpl->getValue('_product')['extra']['parent']['buy_together'] == $_smarty_tpl->getValue('key')) {?>
                <li class="ty-buy-together-cart-items__list-item">
                    <?php if ($_smarty_tpl->getValue('block')['properties']['products_links_type'] == "thumb") {?>
                        <div class="ty-cart-items__list-item-image">
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->getValue('_product')['main_pair'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
                        </div>
                    <?php }?>
                    <div class="ty-cart-items__list-item-desc ty-cart-items__list-item-desc--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['properties']['products_links_type']), ENT_QUOTES, 'UTF-8');?>
">
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('_product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                           class="ty-buy-together-cart__item-link"><?php echo (($tmp = $_smarty_tpl->getValue('_product')['product'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('_product')['product_id']) ?? null : $tmp);?>
</a>
                        <p>
                            <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span dir="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('_product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('key'))."_".((string)$_smarty_tpl->getValue('dropdown_id')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?></p>
                    </div>
                </li>
                <?php if ($_smarty_tpl->getValue('_product')['product_option_data']) {?>
                    <li class="ty-buy-together-cart__item"><?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('_product')['product_option_data']), (int) 0, $_smarty_current_dir);
?></li>
                <?php }?>
            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/buy_together/hooks/checkout/minicart_product_info.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/buy_together/hooks/checkout/minicart_product_info.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('product')['extra']['buy_together']) {?>
    <ul class="ty-buy-together-cart-items__list">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_cart_products'), '_product', false, '_key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_key')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach1DoElse = false;
?>
            <?php if ($_smarty_tpl->getValue('_product')['extra']['parent']['buy_together'] == $_smarty_tpl->getValue('key')) {?>
                <li class="ty-buy-together-cart-items__list-item">
                    <?php if ($_smarty_tpl->getValue('block')['properties']['products_links_type'] == "thumb") {?>
                        <div class="ty-cart-items__list-item-image">
                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->getValue('_product')['main_pair'],'no_ids'=>true,'lazy_load'=>false), (int) 0, $_smarty_current_dir);
?>
                        </div>
                    <?php }?>
                    <div class="ty-cart-items__list-item-desc ty-cart-items__list-item-desc--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block')['properties']['products_links_type']), ENT_QUOTES, 'UTF-8');?>
">
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('_product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"
                           class="ty-buy-together-cart__item-link"><?php echo (($tmp = $_smarty_tpl->getValue('_product')['product'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('_product')['product_id']) ?? null : $tmp);?>
</a>
                        <p>
                            <span><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span dir="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('_product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('key'))."_".((string)$_smarty_tpl->getValue('dropdown_id')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?></p>
                    </div>
                </li>
                <?php if ($_smarty_tpl->getValue('_product')['product_option_data']) {?>
                    <li class="ty-buy-together-cart__item"><?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('_product')['product_option_data']), (int) 0, $_smarty_current_dir);
?></li>
                <?php }?>
            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
}
