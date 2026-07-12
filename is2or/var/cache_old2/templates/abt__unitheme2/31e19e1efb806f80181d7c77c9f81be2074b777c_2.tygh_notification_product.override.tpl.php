<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:05
  from 'tygh:addons/buy_together/hooks/products/notification_product.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa5b14527_22436167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31e19e1efb806f80181d7c77c9f81be2074b777c' => 
    array (
      0 => 'addons/buy_together/hooks/products/notification_product.override.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:common/price.tpl' => 4,
    'tygh:common/options_info.tpl' => 4,
  ),
))) {
function content_69afafa5b14527_22436167 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/buy_together/hooks/products';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('product')['extra']['buy_together']) {
$_smarty_tpl->assign('notification_image_width', (($tmp = $_smarty_tpl->getValue('notification_image_width') ?? null)===null||$tmp==='' ? "50" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('notification_image_height', (($tmp = $_smarty_tpl->getValue('notification_image_height') ?? null)===null||$tmp==='' ? "50" ?? null : $tmp), false, NULL);?>
<div class="ty-buy-together-notification ty-product-notification__item clearfix">
<?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('notification_image_width'),'image_height'=>$_smarty_tpl->getValue('notification_image_height'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'no_ids'=>true,'class'=>"ty-product-notification__image"), (int) 0, $_smarty_current_dir);
?>
    <div class="clearfix">
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('product')['product_id'])), ENT_QUOTES, 'UTF-8');?>
</a>
        <div class="ty-product-notification__price">
            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
<span dir="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('key')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <ul class="ty-buy-together-notification__items">
            <?php if ($_smarty_tpl->getValue('product')['product_option_data']) {?>
                <li class="ty-buy-together-notification__item"><?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product')['product_option_data']), (int) 0, $_smarty_current_dir);
?></li>
            <?php }?>
            <li class="ty-buy-together-notification__item"><ul class="ty-buy-together-notification__items">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('added_products'), '_product', false, '_key');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_key')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach2DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('_product')['extra']['parent']['buy_together'] == $_smarty_tpl->getValue('key')) {?>
                    <li class="ty-buy-together-notification__item">
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('_product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-buy-together-notification__item-link"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('_product')['product_id'])), ENT_QUOTES, 'UTF-8');?>
</a>
                        <div class="ty-product-notification__price">
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['amount']), ENT_QUOTES, 'UTF-8');?>
<span dir="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('_product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('_key')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?>
                        </div>
                    </li>
                    <?php if ($_smarty_tpl->getValue('_product')['product_option_data']) {?>
                        <li class="ty-buy-together-notification__item"><?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('_product')['product_option_data']), (int) 0, $_smarty_current_dir);
?></li>
                    <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul></li>
        </ul>
    </div>
</div>
<?php } elseif ($_smarty_tpl->getValue('product')['extra']['parent']['buy_together']) {?>
    &nbsp;
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
if ($_smarty_tpl->getValue('product')['extra']['buy_together']) {
$_smarty_tpl->assign('notification_image_width', (($tmp = $_smarty_tpl->getValue('notification_image_width') ?? null)===null||$tmp==='' ? "50" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('notification_image_height', (($tmp = $_smarty_tpl->getValue('notification_image_height') ?? null)===null||$tmp==='' ? "50" ?? null : $tmp), false, NULL);?>
<div class="ty-buy-together-notification ty-product-notification__item clearfix">
<?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->getValue('notification_image_width'),'image_height'=>$_smarty_tpl->getValue('notification_image_height'),'images'=>$_smarty_tpl->getValue('product')['main_pair'],'no_ids'=>true,'class'=>"ty-product-notification__image"), (int) 0, $_smarty_current_dir);
?>
    <div class="clearfix">
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('product')['product_id'])), ENT_QUOTES, 'UTF-8');?>
</a>
        <div class="ty-product-notification__price">
            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
<span dir="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('key')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <ul class="ty-buy-together-notification__items">
            <?php if ($_smarty_tpl->getValue('product')['product_option_data']) {?>
                <li class="ty-buy-together-notification__item"><?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product')['product_option_data']), (int) 0, $_smarty_current_dir);
?></li>
            <?php }?>
            <li class="ty-buy-together-notification__item"><ul class="ty-buy-together-notification__items">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('added_products'), '_product', false, '_key');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_key')->value => $_smarty_tpl->getVariable('_product')->value) {
$foreach3DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('_product')['extra']['parent']['buy_together'] == $_smarty_tpl->getValue('key')) {?>
                    <li class="ty-buy-together-notification__item">
                        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('_product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-buy-together-notification__item-link"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('_product')['product_id'])), ENT_QUOTES, 'UTF-8');?>
</a>
                        <div class="ty-product-notification__price">
                            <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_product')['amount']), ENT_QUOTES, 'UTF-8');?>
<span dir="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('_product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('_key')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?>
                        </div>
                    </li>
                    <?php if ($_smarty_tpl->getValue('_product')['product_option_data']) {?>
                        <li class="ty-buy-together-notification__item"><?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('_product')['product_option_data']), (int) 0, $_smarty_current_dir);
?></li>
                    <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul></li>
        </ul>
    </div>
</div>
<?php } elseif ($_smarty_tpl->getValue('product')['extra']['parent']['buy_together']) {?>
    &nbsp;
<?php }
}
}
}
