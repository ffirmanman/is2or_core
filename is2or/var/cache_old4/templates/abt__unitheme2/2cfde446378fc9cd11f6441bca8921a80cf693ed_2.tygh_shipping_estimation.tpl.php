<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:addons/geo_maps/views/geo_maps/shipping_estimation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a006ae136_57948388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cfde446378fc9cd11f6441bca8921a80cf693ed' => 
    array (
      0 => 'addons/geo_maps/views/geo_maps/shipping_estimation.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/geo_maps/blocks/customer_location.tpl' => 2,
    'tygh:common/price.tpl' => 4,
    'tygh:buttons/close.tpl' => 2,
  ),
))) {
function content_69fb4a006ae136_57948388 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/geo_maps/views/geo_maps';
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.shipping_time_and_rates','shipping_method','geo_maps.shipping_time','cost','geo_maps.from_pickup_points','geo_maps.no_shippings','geo_maps.shipping_time_and_rates','geo_maps.shipping_group_','geo_maps.from_pickup_points','geo_maps.shipping_about','geo_maps.shipping_from','geo_maps.no_shippings_short','geo_maps.no_shippings','shipping_methods','geo_maps.shipping_time_and_rates','shipping_method','geo_maps.shipping_time','cost','geo_maps.from_pickup_points','geo_maps.no_shippings','geo_maps.shipping_time_and_rates','geo_maps.shipping_group_','geo_maps.from_pickup_points','geo_maps.shipping_about','geo_maps.shipping_from','geo_maps.no_shippings_short','geo_maps.no_shippings','shipping_methods'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['geo_maps']['show_shippings_on_product'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && ($_smarty_tpl->getValue('product')['is_edp'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('product')['edp_shipping'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) && ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) || $_smarty_tpl->getValue('product')['zero_price_action'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductZeroPriceActions::NOT_ALLOW_ADD_TO_CART"))) {
if ($_REQUEST['abt_in_popup']) {?>
    <?php $_smarty_tpl->assign('overload', '_overload', false, NULL);
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "shipping_methods", null, null);?>
    <div class="ty-geo-maps-shipping__popup">
        <div class="ty-geo-maps-shipping__list-city">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.shipping_time_and_rates", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php $_smarty_tpl->renderSubTemplate("tygh:addons/geo_maps/blocks/customer_location.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"shipping_estimation_".((string)$_smarty_tpl->getValue('product_id')).((string)$_smarty_tpl->getValue('overload')),'location'=>$_smarty_tpl->getValue('location'),'location_detected'=>true,'block'=>null), (int) 0, $_smarty_current_dir);
?>
        </div>
        <?php if ($_smarty_tpl->getValue('shipping_methods')) {?>
            <table class="ty-table ty-geo-maps-shipping__list">
                <thead>
                <tr>
                    <th class="ty-geo-maps-shipping__list-head"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_method", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                    <th class="ty-geo-maps-shipping__list-head"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.shipping_time", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                    <th class="ty-geo-maps-shipping__list-head ty-geo-maps-shipping__list-head--price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cost", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('shipping_methods'), 'shipping');
$foreach122DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shipping')->value) {
$foreach122DoElse = false;
?>
                    <tr class="ty-geo-maps-shipping__list-item">
                        <td class="ty-geo-maps-shipping__list-col"><?php if ($_smarty_tpl->getValue('shipping')['number_of_pickup_points']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.from_pickup_points", array($_smarty_tpl->getValue('shipping')['number_of_pickup_points'],"[shipping]"=>$_smarty_tpl->getValue('shipping')['shipping']), $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping']), ENT_QUOTES, 'UTF-8');
}?></td>
                        <td class="ty-geo-maps-shipping__list-col"><?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('shipping')['service_delivery_time'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('shipping')['delivery_time'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td class="ty-geo-maps-shipping__list-col ty-geo-maps-shipping__list-col--price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('shipping')['rate'],'class'=>"ty-geo-maps-shipping__price"), (int) 0, $_smarty_current_dir);
?></td>
                    </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </table>
        <?php } else { ?>
            <span class="ty-error-text">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.no_shippings", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </span>
        <?php }?>
        <div class="buttons-container">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__primary cm-form-dialog-closer cm-dialog-closer"), (int) 0, $_smarty_current_dir);
?>
        </div>
    </div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_REQUEST['abt_in_popup']) {?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'shipping_methods');?>

<?php } else { ?>

    <?php $_smarty_tpl->assign('show_title', (($tmp = $_smarty_tpl->getValue('show_title') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

    <div data-ca-geo-maps-shippings-methods-list-id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-maps-shipping-estimation-product-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-maps-shipping-estimation-show-title="<?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('show_title')) ? "1" : "0"), ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-maps-shipping-estimation-no-shippings-available-short-text="<?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('no_shippings_available_short_text')) ? "1" : "0"), ENT_QUOTES, 'UTF-8');?>
"
         id="geo_maps_shipping_estimation_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-geo-maps-shipping__wrapper" id="shipping_methods_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->getValue('show_title')) {?>
            <div class="ty-geo-maps-shipping__title">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.shipping_time_and_rates", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </div>
            <?php }?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"geo_maps:shipping_estimation"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php if ($_smarty_tpl->getValue('shippings_summary')) {?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('shippings_summary'), 'shipping', false, 'shipping_type');
$foreach123DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shipping_type')->value => $_smarty_tpl->getVariable('shipping')->value) {
$foreach123DoElse = false;
?>
                        <div class="ty-geo-maps-shipping__item">
                            <div class="ty-geo-maps-shipping__label">
                                <a class="cm-dialog-opener cm-dialog-auto-size ty-geo-maps-shipping__link" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("geo_maps.shipping_estimation?product_id=".((string)$_smarty_tpl->getValue('product_id'))."&abt_in_popup=1")), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
_overload"><?php if ($_smarty_tpl->getValue('shipping_type') == "pickup") {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-geo-maps-shipping__link-icon ty-icon-pointer"), $_smarty_tpl);
} elseif ($_smarty_tpl->getValue('shipping_type') == "courier") {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-geo-maps-shipping__link-icon ty-icon-courier"), $_smarty_tpl);
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-geo-maps-shipping__link-icon ty-icon-shipping"), $_smarty_tpl);
}?><span class="ty-geo-maps-shipping__link-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.shipping_group_".((string)$_smarty_tpl->getValue('shipping_type')), [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a><?php if ($_smarty_tpl->getValue('shipping')['number_of_pickup_points']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.from_pickup_points", array($_smarty_tpl->getValue('shipping')['number_of_pickup_points'],"[shipping]"=>$_smarty_tpl->getValue('shipping')['shipping']), $_smarty_tpl->getSmarty()->getLanguage());
}?><span class="ty-geo-maps-shipping__value-separator">:</span>
                            </div>
                            <div class="ty-geo-maps-shipping__value">
                                <?php if ($_smarty_tpl->getValue('shipping')['delivery_time']) {?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.shipping_about", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['delivery_time']), ENT_QUOTES, 'UTF-8');?>
,
                                <?php }?>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.shipping_from", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('shipping')['rate'],'class'=>"ty-geo-maps-shipping__price"), (int) 0, $_smarty_current_dir);
?>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php } elseif ($_smarty_tpl->getValue('no_shippings_available')) {?>
                    <span class="ty-error-text">
                        <?php if ($_smarty_tpl->getValue('no_shippings_available_short_text')) {?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.no_shippings_short", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.no_shippings", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        <?php }?>
                    </span>
                <?php } else { ?>
                    <div class="ty-geo-maps-shipping__loader"></div>
                <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"geo_maps:shipping_estimation"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>
    <!--geo_maps_shipping_estimation_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

    <div class="hidden" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_methods", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'shipping_methods');?>

    <!--geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/shipping_estimation.js"), $_smarty_tpl);?>

    <?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/views/geo_maps/shipping_estimation.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/geo_maps/views/geo_maps/shipping_estimation.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['geo_maps']['show_shippings_on_product'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && ($_smarty_tpl->getValue('product')['is_edp'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('product')['edp_shipping'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) && ($_smarty_tpl->getSmarty()->getModifierCallback('floatval')($_smarty_tpl->getValue('product')['price']) || $_smarty_tpl->getValue('product')['zero_price_action'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ProductZeroPriceActions::NOT_ALLOW_ADD_TO_CART"))) {
if ($_REQUEST['abt_in_popup']) {?>
    <?php $_smarty_tpl->assign('overload', '_overload', false, NULL);
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "shipping_methods", null, null);?>
    <div class="ty-geo-maps-shipping__popup">
        <div class="ty-geo-maps-shipping__list-city">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.shipping_time_and_rates", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php $_smarty_tpl->renderSubTemplate("tygh:addons/geo_maps/blocks/customer_location.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"shipping_estimation_".((string)$_smarty_tpl->getValue('product_id')).((string)$_smarty_tpl->getValue('overload')),'location'=>$_smarty_tpl->getValue('location'),'location_detected'=>true,'block'=>null), (int) 0, $_smarty_current_dir);
?>
        </div>
        <?php if ($_smarty_tpl->getValue('shipping_methods')) {?>
            <table class="ty-table ty-geo-maps-shipping__list">
                <thead>
                <tr>
                    <th class="ty-geo-maps-shipping__list-head"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_method", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                    <th class="ty-geo-maps-shipping__list-head"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.shipping_time", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                    <th class="ty-geo-maps-shipping__list-head ty-geo-maps-shipping__list-head--price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cost", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('shipping_methods'), 'shipping');
$foreach124DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shipping')->value) {
$foreach124DoElse = false;
?>
                    <tr class="ty-geo-maps-shipping__list-item">
                        <td class="ty-geo-maps-shipping__list-col"><?php if ($_smarty_tpl->getValue('shipping')['number_of_pickup_points']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.from_pickup_points", array($_smarty_tpl->getValue('shipping')['number_of_pickup_points'],"[shipping]"=>$_smarty_tpl->getValue('shipping')['shipping']), $_smarty_tpl->getSmarty()->getLanguage());
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['shipping']), ENT_QUOTES, 'UTF-8');
}?></td>
                        <td class="ty-geo-maps-shipping__list-col"><?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('shipping')['service_delivery_time'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('shipping')['delivery_time'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td class="ty-geo-maps-shipping__list-col ty-geo-maps-shipping__list-col--price"><?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('shipping')['rate'],'class'=>"ty-geo-maps-shipping__price"), (int) 0, $_smarty_current_dir);
?></td>
                    </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </table>
        <?php } else { ?>
            <span class="ty-error-text">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.no_shippings", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </span>
        <?php }?>
        <div class="buttons-container">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__primary cm-form-dialog-closer cm-dialog-closer"), (int) 0, $_smarty_current_dir);
?>
        </div>
    </div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_REQUEST['abt_in_popup']) {?>
    <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'shipping_methods');?>

<?php } else { ?>

    <?php $_smarty_tpl->assign('show_title', (($tmp = $_smarty_tpl->getValue('show_title') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

    <div data-ca-geo-maps-shippings-methods-list-id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-maps-shipping-estimation-product-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-maps-shipping-estimation-show-title="<?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('show_title')) ? "1" : "0"), ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-maps-shipping-estimation-no-shippings-available-short-text="<?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('no_shippings_available_short_text')) ? "1" : "0"), ENT_QUOTES, 'UTF-8');?>
"
         id="geo_maps_shipping_estimation_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-geo-maps-shipping__wrapper" id="shipping_methods_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->getValue('show_title')) {?>
            <div class="ty-geo-maps-shipping__title">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.shipping_time_and_rates", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </div>
            <?php }?>
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"geo_maps:shipping_estimation"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php if ($_smarty_tpl->getValue('shippings_summary')) {?>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('shippings_summary'), 'shipping', false, 'shipping_type');
$foreach125DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shipping_type')->value => $_smarty_tpl->getVariable('shipping')->value) {
$foreach125DoElse = false;
?>
                        <div class="ty-geo-maps-shipping__item">
                            <div class="ty-geo-maps-shipping__label">
                                <a class="cm-dialog-opener cm-dialog-auto-size ty-geo-maps-shipping__link" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("geo_maps.shipping_estimation?product_id=".((string)$_smarty_tpl->getValue('product_id'))."&abt_in_popup=1")), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
_overload"><?php if ($_smarty_tpl->getValue('shipping_type') == "pickup") {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-geo-maps-shipping__link-icon ty-icon-pointer"), $_smarty_tpl);
} elseif ($_smarty_tpl->getValue('shipping_type') == "courier") {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-geo-maps-shipping__link-icon ty-icon-courier"), $_smarty_tpl);
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-geo-maps-shipping__link-icon ty-icon-shipping"), $_smarty_tpl);
}?><span class="ty-geo-maps-shipping__link-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.shipping_group_".((string)$_smarty_tpl->getValue('shipping_type')), [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a><?php if ($_smarty_tpl->getValue('shipping')['number_of_pickup_points']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.from_pickup_points", array($_smarty_tpl->getValue('shipping')['number_of_pickup_points'],"[shipping]"=>$_smarty_tpl->getValue('shipping')['shipping']), $_smarty_tpl->getSmarty()->getLanguage());
}?><span class="ty-geo-maps-shipping__value-separator">:</span>
                            </div>
                            <div class="ty-geo-maps-shipping__value">
                                <?php if ($_smarty_tpl->getValue('shipping')['delivery_time']) {?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.shipping_about", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('shipping')['delivery_time']), ENT_QUOTES, 'UTF-8');?>
,
                                <?php }?>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.shipping_from", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                <?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('shipping')['rate'],'class'=>"ty-geo-maps-shipping__price"), (int) 0, $_smarty_current_dir);
?>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php } elseif ($_smarty_tpl->getValue('no_shippings_available')) {?>
                    <span class="ty-error-text">
                        <?php if ($_smarty_tpl->getValue('no_shippings_available_short_text')) {?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.no_shippings_short", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.no_shippings", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                        <?php }?>
                    </span>
                <?php } else { ?>
                    <div class="ty-geo-maps-shipping__loader"></div>
                <?php }?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"geo_maps:shipping_estimation"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        </div>
    <!--geo_maps_shipping_estimation_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

    <div class="hidden" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_methods", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'shipping_methods');?>

    <!--geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/shipping_estimation.js"), $_smarty_tpl);?>

    <?php }
}
}
}
}
