<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:36:11
  from 'tygh:addons/buy_together/hooks/block_checkout/product_extra.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea29b70adc8_41925253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d6a52f23f876ba7ba8bad7b81dfae3610232fce' => 
    array (
      0 => 'addons/buy_together/hooks/block_checkout/product_extra.post.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aea29b70adc8_41925253 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/buy_together/hooks/block_checkout';
\Tygh\Languages\Helper::preloadLangVars(array('buy_together','buy_together'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['buy_together']) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart_products'), '_product', false, 'key_conf');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key_conf')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach18DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key_conf')]['extra']['parent']['buy_together'] == $_smarty_tpl->getValue('key')) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "is_conf_prod", null, null);?>1<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'is_conf_prod')) {?>
        <div class="ty-discount-info ty-buy-together-info">
            <span class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
            <h4 class="ty-buy-together-info__product"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("buy_together", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h4>
            <ul class="ty-buy-together-info__items">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart_products'), 'product', false, 'key_conf');
$foreach19DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key_conf')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach19DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key_conf')]['extra']['parent']['buy_together'] == $_smarty_tpl->getValue('key')) {?>
                        <li class="ty-buy-together-info__item">
                            <?php echo $_smarty_tpl->getValue('product')['product'];?>

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
                        </li>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/buy_together/hooks/block_checkout/product_extra.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/buy_together/hooks/block_checkout/product_extra.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key')]['extra']['buy_together']) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart_products'), '_product', false, 'key_conf');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key_conf')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach20DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key_conf')]['extra']['parent']['buy_together'] == $_smarty_tpl->getValue('key')) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "is_conf_prod", null, null);?>1<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'is_conf_prod')) {?>
        <div class="ty-discount-info ty-buy-together-info">
            <span class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
            <h4 class="ty-buy-together-info__product"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("buy_together", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h4>
            <ul class="ty-buy-together-info__items">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart_products'), 'product', false, 'key_conf');
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key_conf')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach21DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('cart')['products'][$_smarty_tpl->getValue('key_conf')]['extra']['parent']['buy_together'] == $_smarty_tpl->getValue('key')) {?>
                        <li class="ty-buy-together-info__item">
                            <?php echo $_smarty_tpl->getValue('product')['product'];?>

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
                        </li>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php }
}
}
}
}
