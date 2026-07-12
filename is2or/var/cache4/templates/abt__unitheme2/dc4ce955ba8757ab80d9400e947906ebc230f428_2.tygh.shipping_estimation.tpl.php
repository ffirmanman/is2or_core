<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:16
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/geo_maps/views/geo_maps/shipping_estimation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571c7d3e97_97606268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc4ce955ba8757ab80d9400e947906ebc230f428' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/geo_maps/views/geo_maps/shipping_estimation.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/geo_maps/blocks/customer_location.tpl' => 2,
    'tygh:common/price.tpl' => 4,
    'tygh:buttons/close.tpl' => 2,
  ),
),false)) {
function content_6834571c7d3e97_97606268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.shipping_time_and_rates','shipping_method','geo_maps.shipping_time','cost','geo_maps.from_pickup_points','geo_maps.no_shippings','geo_maps.shipping_time_and_rates','geo_maps.shipping_group_','geo_maps.from_pickup_points','geo_maps.shipping_about','geo_maps.shipping_from','geo_maps.no_shippings_short','geo_maps.no_shippings','shipping_methods','geo_maps.shipping_time_and_rates','shipping_method','geo_maps.shipping_time','cost','geo_maps.from_pickup_points','geo_maps.no_shippings','geo_maps.shipping_time_and_rates','geo_maps.shipping_group_','geo_maps.from_pickup_points','geo_maps.shipping_about','geo_maps.shipping_from','geo_maps.no_shippings_short','geo_maps.no_shippings','shipping_methods'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['geo_maps']['show_shippings_on_product'] === smarty_modifier_enum("YesNo::YES") && ($_smarty_tpl->tpl_vars['product']->value['is_edp'] !== smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['product']->value['edp_shipping'] === smarty_modifier_enum("YesNo::YES")) && (floatval($_smarty_tpl->tpl_vars['product']->value['price']) || $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] !== smarty_modifier_enum("ProductZeroPriceActions::NOT_ALLOW_ADD_TO_CART"))) {
if ($_REQUEST['abt_in_popup']) {?>
    <?php $_smarty_tpl->_assignInScope('overload', '_overload');
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "shipping_methods", null, null);?>
    <div class="ty-geo-maps-shipping__popup">
        <div class="ty-geo-maps-shipping__list-city">
            <?php echo $_smarty_tpl->__("geo_maps.shipping_time_and_rates");?>
: <?php $_smarty_tpl->_subTemplateRender("tygh:addons/geo_maps/blocks/customer_location.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"shipping_estimation_".((string)$_smarty_tpl->tpl_vars['product_id']->value).((string)$_smarty_tpl->tpl_vars['overload']->value),'location'=>$_smarty_tpl->tpl_vars['location']->value,'location_detected'=>true,'block'=>null), 0, false);
?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['shipping_methods']->value) {?>
            <table class="ty-table ty-geo-maps-shipping__list">
                <thead>
                <tr>
                    <th class="ty-geo-maps-shipping__list-head"><?php echo $_smarty_tpl->__("shipping_method");?>
</th>
                    <th class="ty-geo-maps-shipping__list-head"><?php echo $_smarty_tpl->__("geo_maps.shipping_time");?>
</th>
                    <th class="ty-geo-maps-shipping__list-head ty-geo-maps-shipping__list-head--price"><?php echo $_smarty_tpl->__("cost");?>
</th>
                </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping_methods']->value, 'shipping');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
                    <tr class="ty-geo-maps-shipping__list-item">
                        <td class="ty-geo-maps-shipping__list-col"><?php if ($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points']) {
echo $_smarty_tpl->__("geo_maps.from_pickup_points",array($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points'],"[shipping]"=>$_smarty_tpl->tpl_vars['shipping']->value['shipping']));
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');
}?></td>
                        <td class="ty-geo-maps-shipping__list-col"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td class="ty-geo-maps-shipping__list-col ty-geo-maps-shipping__list-col--price"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate'],'class'=>"ty-geo-maps-shipping__price"), 0, true);
?></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        <?php } else { ?>
            <span class="ty-error-text">
                <?php echo $_smarty_tpl->__("geo_maps.no_shippings");?>

            </span>
        <?php }?>
        <div class="buttons-container">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__primary cm-form-dialog-closer cm-dialog-closer"), 0, false);
?>
        </div>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_REQUEST['abt_in_popup']) {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shipping_methods');?>

<?php } else { ?>

    <?php $_smarty_tpl->_assignInScope('show_title', (($tmp = $_smarty_tpl->tpl_vars['show_title']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

    <div data-ca-geo-maps-shippings-methods-list-id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-maps-shipping-estimation-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-maps-shipping-estimation-show-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_title']->value ? "1" : "0", ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-maps-shipping-estimation-no-shippings-available-short-text="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_shippings_available_short_text']->value ? "1" : "0", ENT_QUOTES, 'UTF-8');?>
"
         id="geo_maps_shipping_estimation_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-geo-maps-shipping__wrapper" id="shipping_methods_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
            <div class="ty-geo-maps-shipping__title">
                <?php echo $_smarty_tpl->__("geo_maps.shipping_time_and_rates");?>

            </div>
            <?php }?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"geo_maps:shipping_estimation"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"geo_maps:shipping_estimation"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['shippings_summary']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shippings_summary']->value, 'shipping', false, 'shipping_type');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_type']->value => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
                        <div class="ty-geo-maps-shipping__item">
                            <div class="ty-geo-maps-shipping__label">
                                <a class="cm-dialog-opener cm-dialog-auto-size ty-geo-maps-shipping__link" href="<?php echo htmlspecialchars((string) fn_url("geo_maps.shipping_estimation?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&abt_in_popup=1"), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
_overload"><?php if ($_smarty_tpl->tpl_vars['shipping_type']->value == "pickup") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-geo-maps-shipping__link-icon ty-icon-pointer"),$_smarty_tpl);
} elseif ($_smarty_tpl->tpl_vars['shipping_type']->value == "courier") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-geo-maps-shipping__link-icon ty-icon-courier"),$_smarty_tpl);
} else {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-geo-maps-shipping__link-icon ty-icon-shipping"),$_smarty_tpl);
}?><span class="ty-geo-maps-shipping__link-text"><?php echo $_smarty_tpl->__("geo_maps.shipping_group_".((string)$_smarty_tpl->tpl_vars['shipping_type']->value));?>
</span></a><?php if ($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points']) {
echo $_smarty_tpl->__("geo_maps.from_pickup_points",array($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points'],"[shipping]"=>$_smarty_tpl->tpl_vars['shipping']->value['shipping']));
}?><span class="ty-geo-maps-shipping__value-separator">:</span>
                            </div>
                            <div class="ty-geo-maps-shipping__value">
                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time']) {?>
                                    <?php echo $_smarty_tpl->__("geo_maps.shipping_about");?>

                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
,
                                <?php }?>
                                <?php echo $_smarty_tpl->__("geo_maps.shipping_from");?>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate'],'class'=>"ty-geo-maps-shipping__price"), 0, true);
?>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['no_shippings_available']->value) {?>
                    <span class="ty-error-text">
                        <?php if ($_smarty_tpl->tpl_vars['no_shippings_available_short_text']->value) {?>
                            <?php echo $_smarty_tpl->__("geo_maps.no_shippings_short");?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("geo_maps.no_shippings");?>

                        <?php }?>
                    </span>
                <?php } else { ?>
                    <div class="ty-geo-maps-shipping__loader"></div>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"geo_maps:shipping_estimation"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <!--geo_maps_shipping_estimation_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <div class="hidden" title="<?php echo $_smarty_tpl->__("shipping_methods");?>
" id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shipping_methods');?>

    <!--geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/shipping_estimation.js"),$_smarty_tpl);?>

    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/views/geo_maps/shipping_estimation.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/geo_maps/views/geo_maps/shipping_estimation.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['geo_maps']['show_shippings_on_product'] === smarty_modifier_enum("YesNo::YES") && ($_smarty_tpl->tpl_vars['product']->value['is_edp'] !== smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['product']->value['edp_shipping'] === smarty_modifier_enum("YesNo::YES")) && (floatval($_smarty_tpl->tpl_vars['product']->value['price']) || $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] !== smarty_modifier_enum("ProductZeroPriceActions::NOT_ALLOW_ADD_TO_CART"))) {
if ($_REQUEST['abt_in_popup']) {?>
    <?php $_smarty_tpl->_assignInScope('overload', '_overload');
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "shipping_methods", null, null);?>
    <div class="ty-geo-maps-shipping__popup">
        <div class="ty-geo-maps-shipping__list-city">
            <?php echo $_smarty_tpl->__("geo_maps.shipping_time_and_rates");?>
: <?php $_smarty_tpl->_subTemplateRender("tygh:addons/geo_maps/blocks/customer_location.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"shipping_estimation_".((string)$_smarty_tpl->tpl_vars['product_id']->value).((string)$_smarty_tpl->tpl_vars['overload']->value),'location'=>$_smarty_tpl->tpl_vars['location']->value,'location_detected'=>true,'block'=>null), 0, true);
?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['shipping_methods']->value) {?>
            <table class="ty-table ty-geo-maps-shipping__list">
                <thead>
                <tr>
                    <th class="ty-geo-maps-shipping__list-head"><?php echo $_smarty_tpl->__("shipping_method");?>
</th>
                    <th class="ty-geo-maps-shipping__list-head"><?php echo $_smarty_tpl->__("geo_maps.shipping_time");?>
</th>
                    <th class="ty-geo-maps-shipping__list-head ty-geo-maps-shipping__list-head--price"><?php echo $_smarty_tpl->__("cost");?>
</th>
                </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping_methods']->value, 'shipping');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
                    <tr class="ty-geo-maps-shipping__list-item">
                        <td class="ty-geo-maps-shipping__list-col"><?php if ($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points']) {
echo $_smarty_tpl->__("geo_maps.from_pickup_points",array($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points'],"[shipping]"=>$_smarty_tpl->tpl_vars['shipping']->value['shipping']));
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');
}?></td>
                        <td class="ty-geo-maps-shipping__list-col"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['shipping']->value['service_delivery_time'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td class="ty-geo-maps-shipping__list-col ty-geo-maps-shipping__list-col--price"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate'],'class'=>"ty-geo-maps-shipping__price"), 0, true);
?></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        <?php } else { ?>
            <span class="ty-error-text">
                <?php echo $_smarty_tpl->__("geo_maps.no_shippings");?>

            </span>
        <?php }?>
        <div class="buttons-container">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"ty-btn__primary cm-form-dialog-closer cm-dialog-closer"), 0, true);
?>
        </div>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_REQUEST['abt_in_popup']) {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shipping_methods');?>

<?php } else { ?>

    <?php $_smarty_tpl->_assignInScope('show_title', (($tmp = $_smarty_tpl->tpl_vars['show_title']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

    <div data-ca-geo-maps-shippings-methods-list-id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-maps-shipping-estimation-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-maps-shipping-estimation-show-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_title']->value ? "1" : "0", ENT_QUOTES, 'UTF-8');?>
"
         data-ca-geo-maps-shipping-estimation-no-shippings-available-short-text="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_shippings_available_short_text']->value ? "1" : "0", ENT_QUOTES, 'UTF-8');?>
"
         id="geo_maps_shipping_estimation_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-geo-maps-shipping__wrapper" id="shipping_methods_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['show_title']->value) {?>
            <div class="ty-geo-maps-shipping__title">
                <?php echo $_smarty_tpl->__("geo_maps.shipping_time_and_rates");?>

            </div>
            <?php }?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"geo_maps:shipping_estimation"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"geo_maps:shipping_estimation"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['shippings_summary']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shippings_summary']->value, 'shipping', false, 'shipping_type');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_type']->value => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>
                        <div class="ty-geo-maps-shipping__item">
                            <div class="ty-geo-maps-shipping__label">
                                <a class="cm-dialog-opener cm-dialog-auto-size ty-geo-maps-shipping__link" href="<?php echo htmlspecialchars((string) fn_url("geo_maps.shipping_estimation?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&abt_in_popup=1"), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
_overload"><?php if ($_smarty_tpl->tpl_vars['shipping_type']->value == "pickup") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-geo-maps-shipping__link-icon ty-icon-pointer"),$_smarty_tpl);
} elseif ($_smarty_tpl->tpl_vars['shipping_type']->value == "courier") {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-geo-maps-shipping__link-icon ty-icon-courier"),$_smarty_tpl);
} else {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-geo-maps-shipping__link-icon ty-icon-shipping"),$_smarty_tpl);
}?><span class="ty-geo-maps-shipping__link-text"><?php echo $_smarty_tpl->__("geo_maps.shipping_group_".((string)$_smarty_tpl->tpl_vars['shipping_type']->value));?>
</span></a><?php if ($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points']) {
echo $_smarty_tpl->__("geo_maps.from_pickup_points",array($_smarty_tpl->tpl_vars['shipping']->value['number_of_pickup_points'],"[shipping]"=>$_smarty_tpl->tpl_vars['shipping']->value['shipping']));
}?><span class="ty-geo-maps-shipping__value-separator">:</span>
                            </div>
                            <div class="ty-geo-maps-shipping__value">
                                <?php if ($_smarty_tpl->tpl_vars['shipping']->value['delivery_time']) {?>
                                    <?php echo $_smarty_tpl->__("geo_maps.shipping_about");?>

                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
,
                                <?php }?>
                                <?php echo $_smarty_tpl->__("geo_maps.shipping_from");?>

                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['shipping']->value['rate'],'class'=>"ty-geo-maps-shipping__price"), 0, true);
?>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['no_shippings_available']->value) {?>
                    <span class="ty-error-text">
                        <?php if ($_smarty_tpl->tpl_vars['no_shippings_available_short_text']->value) {?>
                            <?php echo $_smarty_tpl->__("geo_maps.no_shippings_short");?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("geo_maps.no_shippings");?>

                        <?php }?>
                    </span>
                <?php } else { ?>
                    <div class="ty-geo-maps-shipping__loader"></div>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"geo_maps:shipping_estimation"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <!--geo_maps_shipping_estimation_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <div class="hidden" title="<?php echo $_smarty_tpl->__("shipping_methods");?>
" id="geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shipping_methods');?>

    <!--geo_maps_shipping_methods_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php echo smarty_function_script(array('src'=>"js/addons/geo_maps/shipping_estimation.js"),$_smarty_tpl);?>

    <?php }
}
}
}
}
