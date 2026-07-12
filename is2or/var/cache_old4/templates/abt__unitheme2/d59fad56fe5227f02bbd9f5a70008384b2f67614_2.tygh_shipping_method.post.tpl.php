<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:52
  from 'tygh:addons/store_locator/hooks/checkout/shipping_method.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb52049f9154_85458816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd59fad56fe5227f02bbd9f5a70008384b2f67614' => 
    array (
      0 => 'addons/store_locator/hooks/checkout/shipping_method.post.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/store_locator/views/checkout/components/shippings/list_pickup.tpl' => 2,
  ),
))) {
function content_69fb52049f9154_85458816 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/store_locator/hooks/checkout';
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.select_pickup_item','lite_checkout.select_pickup_item'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')] == $_smarty_tpl->getValue('shipping')['shipping_id'] && $_smarty_tpl->getValue('shipping')['module'] == "store_locator") {?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/store_locator/pickup.js"), $_smarty_tpl);?>


    <?php $_smarty_tpl->assign('store_count', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('shipping')['data']['stores']), false, NULL);?>
    <?php $_smarty_tpl->assign('shipping_id', $_smarty_tpl->getValue('shipping')['shipping_id'], false, NULL);?>
    <?php $_smarty_tpl->assign('old_store_id', $_smarty_tpl->getValue('select_store')[$_smarty_tpl->getValue('group_key')][$_smarty_tpl->getValue('shipping_id')], false, NULL);?>

    <?php if ($_smarty_tpl->getValue('shipping')['service_params']['display']) {?>
        <?php $_smarty_tpl->assign('display_type', $_smarty_tpl->getValue('shipping')['service_params']['display'], false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('display_type', "ML", false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('store_locations', $_smarty_tpl->getValue('shipping')['data']['stores'], false, NULL);?>

    <?php if ($_smarty_tpl->getValue('display_type') != "L") {?>
        <?php $_smarty_tpl->assign('display_pickup_map', true, false, NULL);?>
    <?php }?>

    <div class="litecheckout__item">
        <h2 class="litecheckout__step-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("lite_checkout.select_pickup_item", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h2>
    </div>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:store_locator_pickup_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/store_locator/views/checkout/components/shippings/list_pickup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:store_locator_pickup_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/hooks/checkout/shipping_method.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/store_locator/hooks/checkout/shipping_method.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('cart')['chosen_shipping'][$_smarty_tpl->getValue('group_key')] == $_smarty_tpl->getValue('shipping')['shipping_id'] && $_smarty_tpl->getValue('shipping')['module'] == "store_locator") {?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/store_locator/pickup.js"), $_smarty_tpl);?>


    <?php $_smarty_tpl->assign('store_count', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('shipping')['data']['stores']), false, NULL);?>
    <?php $_smarty_tpl->assign('shipping_id', $_smarty_tpl->getValue('shipping')['shipping_id'], false, NULL);?>
    <?php $_smarty_tpl->assign('old_store_id', $_smarty_tpl->getValue('select_store')[$_smarty_tpl->getValue('group_key')][$_smarty_tpl->getValue('shipping_id')], false, NULL);?>

    <?php if ($_smarty_tpl->getValue('shipping')['service_params']['display']) {?>
        <?php $_smarty_tpl->assign('display_type', $_smarty_tpl->getValue('shipping')['service_params']['display'], false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('display_type', "ML", false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('store_locations', $_smarty_tpl->getValue('shipping')['data']['stores'], false, NULL);?>

    <?php if ($_smarty_tpl->getValue('display_type') != "L") {?>
        <?php $_smarty_tpl->assign('display_pickup_map', true, false, NULL);?>
    <?php }?>

    <div class="litecheckout__item">
        <h2 class="litecheckout__step-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("lite_checkout.select_pickup_item", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h2>
    </div>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:store_locator_pickup_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/store_locator/views/checkout/components/shippings/list_pickup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"checkout:store_locator_pickup_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
}
