<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:52
  from 'tygh:addons/store_locator/hooks/checkout/shipping_rate.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb52049686b5_59492143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64a989c69df3edeebf0148e0692d4695d9dcb4aa' => 
    array (
      0 => 'addons/store_locator/hooks/checkout/shipping_rate.post.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 4,
  ),
))) {
function content_69fb52049686b5_59492143 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/store_locator/hooks/checkout';
\Tygh\Languages\Helper::preloadLangVars(array('store_locator.shipping_price_from','store_locator.shipping_price_from_to','store_locator.shipping_price_from','store_locator.shipping_price_from_to'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ((true && (true && null !== ($_smarty_tpl->getValue('shipping')['pickup_rate_from'] ?? null))) && !(true && (true && null !== ($_smarty_tpl->getValue('shipping')['free_shipping'] ?? null)))) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "formatted_min_rate", null, null);?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('shipping')['pickup_rate_from'],'class'=>"ty-nowrap"), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php if (!(true && (true && null !== ($_smarty_tpl->getValue('shipping')['pickup_rate_to'] ?? null)))) {?>
        <?php $_smarty_tpl->assign('rate', $_smarty_tpl->getSmarty()->getModifierCallback("__")("store_locator.shipping_price_from", array('[price]'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'formatted_min_rate')), $_smarty_tpl->getSmarty()->getLanguage()), false, 2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "formatted_max_rate", null, null);?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('shipping')['pickup_rate_to'],'class'=>"ty-nowrap"), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php $_smarty_tpl->assign('rate', $_smarty_tpl->getSmarty()->getModifierCallback("__")("store_locator.shipping_price_from_to", array('[from_price]'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'formatted_min_rate'),'[to_price]'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'formatted_max_rate')), $_smarty_tpl->getSmarty()->getLanguage()), false, 2);?>
    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/hooks/checkout/shipping_rate.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/store_locator/hooks/checkout/shipping_rate.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ((true && (true && null !== ($_smarty_tpl->getValue('shipping')['pickup_rate_from'] ?? null))) && !(true && (true && null !== ($_smarty_tpl->getValue('shipping')['free_shipping'] ?? null)))) {?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "formatted_min_rate", null, null);?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('shipping')['pickup_rate_from'],'class'=>"ty-nowrap"), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
    <?php if (!(true && (true && null !== ($_smarty_tpl->getValue('shipping')['pickup_rate_to'] ?? null)))) {?>
        <?php $_smarty_tpl->assign('rate', $_smarty_tpl->getSmarty()->getModifierCallback("__")("store_locator.shipping_price_from", array('[price]'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'formatted_min_rate')), $_smarty_tpl->getSmarty()->getLanguage()), false, 2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "formatted_max_rate", null, null);?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('shipping')['pickup_rate_to'],'class'=>"ty-nowrap"), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php $_smarty_tpl->assign('rate', $_smarty_tpl->getSmarty()->getModifierCallback("__")("store_locator.shipping_price_from_to", array('[from_price]'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'formatted_min_rate'),'[to_price]'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'formatted_max_rate')), $_smarty_tpl->getSmarty()->getLanguage()), false, 2);?>
    <?php }
}
}
}
}
