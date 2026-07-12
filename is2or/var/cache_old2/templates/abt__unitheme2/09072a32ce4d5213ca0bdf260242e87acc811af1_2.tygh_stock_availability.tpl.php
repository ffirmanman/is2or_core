<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:11
  from 'tygh:addons/warehouses/views/warehouses/stock_availability.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafab090769_08685417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09072a32ce4d5213ca0bdf260242e87acc811af1' => 
    array (
      0 => 'addons/warehouses/views/warehouses/stock_availability.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/warehouses/components/product_availability.tpl' => 2,
    'tygh:addons/warehouses/components/shipping_delay.tpl' => 2,
  ),
))) {
function content_69afafab090769_08685417 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/warehouses/views/warehouses';
\Tygh\Languages\Helper::preloadLangVars(array('warehouses.product_availability','warehouses.product_availability'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div data-ca-warehouses-stock-availability-product-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
     id="warehouses_stock_availability_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->getValue('show_stock_availability')) {?>
        <div class="ty-warehouses-shipping__wrapper">
            <div class="ty-warehouses-shipping__title">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.product_availability", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:
                <div class="ty-warehouses__geolocation">
                    <span class="ty-warehouses__geolocation__opener">
                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-location-arrow"), $_smarty_tpl);?>

                        <span class="ty-warehouses__geolocation__opener-text">
                                <span class="ty-warehouses__geolocation__location"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location')['city']), ENT_QUOTES, 'UTF-8');?>
</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('show_stock_availability') || $_smarty_tpl->getValue('warn_about_delay')) {?>
        <div class="ty-warehouses-shipping__wrapper">
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/warehouses/components/product_availability.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('in_stock_stores_count'=>$_smarty_tpl->getValue('in_stock_stores_count'),'availbe_stores_count'=>$_smarty_tpl->getValue('availbe_stores_count'),'product_id'=>$_smarty_tpl->getValue('product_id')), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/warehouses/components/shipping_delay.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('warn_about_delay'=>$_smarty_tpl->getValue('warn_about_delay'),'shipping_delay'=>$_smarty_tpl->getValue('shipping_delay')), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }?>
<!--warehouses_stock_availability_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/warehouses/stock_availability.js"), $_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/warehouses/views/warehouses/stock_availability.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/warehouses/views/warehouses/stock_availability.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div data-ca-warehouses-stock-availability-product-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
"
     id="warehouses_stock_availability_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->getValue('show_stock_availability')) {?>
        <div class="ty-warehouses-shipping__wrapper">
            <div class="ty-warehouses-shipping__title">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("warehouses.product_availability", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:
                <div class="ty-warehouses__geolocation">
                    <span class="ty-warehouses__geolocation__opener">
                        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-location-arrow"), $_smarty_tpl);?>

                        <span class="ty-warehouses__geolocation__opener-text">
                                <span class="ty-warehouses__geolocation__location"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location')['city']), ENT_QUOTES, 'UTF-8');?>
</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('show_stock_availability') || $_smarty_tpl->getValue('warn_about_delay')) {?>
        <div class="ty-warehouses-shipping__wrapper">
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/warehouses/components/product_availability.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('in_stock_stores_count'=>$_smarty_tpl->getValue('in_stock_stores_count'),'availbe_stores_count'=>$_smarty_tpl->getValue('availbe_stores_count'),'product_id'=>$_smarty_tpl->getValue('product_id')), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/warehouses/components/shipping_delay.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('warn_about_delay'=>$_smarty_tpl->getValue('warn_about_delay'),'shipping_delay'=>$_smarty_tpl->getValue('shipping_delay')), (int) 0, $_smarty_current_dir);
?>
        </div>
    <?php }?>
<!--warehouses_stock_availability_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/warehouses/stock_availability.js"), $_smarty_tpl);?>

<?php }
}
}
