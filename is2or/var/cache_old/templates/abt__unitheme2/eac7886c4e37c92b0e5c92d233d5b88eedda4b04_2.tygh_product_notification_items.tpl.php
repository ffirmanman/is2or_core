<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:14
  from 'tygh:views/products/components/product_notification_items.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1fa7a7b61_40094875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eac7886c4e37c92b0e5c92d233d5b88eedda4b04' => 
    array (
      0 => 'views/products/components/product_notification_items.tpl',
      1 => 1767831044,
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
function content_69ada1fa7a7b61_40094875 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/products/components';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:notification_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if ($_smarty_tpl->getValue('added_products')) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('added_products'), 'product', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:notification_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <div class="ty-product-notification__item">
                <div class="ut2-product-notification__image">
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"80",'image_height'=>"80",'images'=>$_smarty_tpl->getValue('product')['main_pair'],'no_ids'=>true,'class'=>"ty-product-notification__image"), (int) 0, $_smarty_current_dir);
?>
                </div>
                <div class="ty-product-notification__content">
                    <div class="ut2-product-notification__head">
                        <div class="ut2-product-notification__head__title">
                            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-notification__product-name"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('product')['product_id']);?>
</a>
                        </div>
                        <?php if (!($_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart" && !$_smarty_tpl->getValue('auth')['user_id'])) {?>
                            <div class="ty-product-notification__price">
                                <?php if (!$_smarty_tpl->getValue('hide_amount')) {?>
                                    <span class="none"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span dir="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('key')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                    <?php if ($_smarty_tpl->getValue('product')['product_option_data']) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product')['product_option_data']), (int) 0, $_smarty_current_dir);
?>
                    <?php }?>
                </div>
            </div>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:notification_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('empty_text')), ENT_QUOTES, 'UTF-8');?>

    <?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:notification_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_notification_items.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/products/components/product_notification_items.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:notification_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if ($_smarty_tpl->getValue('added_products')) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('added_products'), 'product', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('product')->value) {
$foreach1DoElse = false;
?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:notification_product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <div class="ty-product-notification__item">
                <div class="ut2-product-notification__image">
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>"80",'image_height'=>"80",'images'=>$_smarty_tpl->getValue('product')['main_pair'],'no_ids'=>true,'class'=>"ty-product-notification__image"), (int) 0, $_smarty_current_dir);
?>
                </div>
                <div class="ty-product-notification__content">
                    <div class="ut2-product-notification__head">
                        <div class="ut2-product-notification__head__title">
                            <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("products.view?product_id=".((string)$_smarty_tpl->getValue('product')['product_id']))), ENT_QUOTES, 'UTF-8');?>
" class="ty-product-notification__product-name"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_product_name')($_smarty_tpl->getValue('product')['product_id']);?>
</a>
                        </div>
                        <?php if (!($_smarty_tpl->getValue('settings')['Checkout']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart" && !$_smarty_tpl->getValue('auth')['user_id'])) {?>
                            <div class="ty-product-notification__price">
                                <?php if (!$_smarty_tpl->getValue('hide_amount')) {?>
                                    <span class="none"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['amount']), ENT_QUOTES, 'UTF-8');?>
</span><span dir="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
">&nbsp;x&nbsp;</span><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('product')['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->getValue('key')),'class'=>"none"), (int) 0, $_smarty_current_dir);
?>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                    <?php if ($_smarty_tpl->getValue('product')['product_option_data']) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->getValue('product')['product_option_data']), (int) 0, $_smarty_current_dir);
?>
                    <?php }?>
                </div>
            </div>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:notification_product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('empty_text')), ENT_QUOTES, 'UTF-8');?>

    <?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"products:notification_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
