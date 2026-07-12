<?php
/* Smarty version 5.4.3, created on 2026-03-09 08:58:39
  from 'tygh:addons/geo_maps/views/geo_maps/customer_geolocation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae618fc85be2_68309213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed762a4db16b6335a997df49828c5d48707a5d9c' => 
    array (
      0 => 'addons/geo_maps/views/geo_maps/customer_geolocation.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69ae618fc85be2_68309213 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/geo_maps/views/geo_maps';
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.location_detection_disabled','ok','geo_maps.location_detection_disabled','ok'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="ty-geo-maps__geolocation__location-selector" data-ca-geo-map-location-element="location_selector">
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"geo_maps:customer_location_selector"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="ty-geo-maps__geolocation__map"
         data-ca-geo-map-location-element="map"
    ></div>

    <div class="ty-geo-maps__geolocation__map__load-error hidden"
         data-ca-geo-map-location-element="map_load_error_message">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.location_detection_disabled", [], $_smarty_tpl->getSmarty()->getLanguage());?>

    </div>

    <div class="buttons-container">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"text",'but_meta'=>"ty-btn__primary cm-dialog-closer ty-btn ty-float-right ty-geo-maps__geolocation__set-location pending",'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("ok", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
    </div>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"geo_maps:customer_location_selector"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/views/geo_maps/customer_geolocation.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/geo_maps/views/geo_maps/customer_geolocation.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-geo-maps__geolocation__location-selector" data-ca-geo-map-location-element="location_selector">
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"geo_maps:customer_location_selector"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <div class="ty-geo-maps__geolocation__map"
         data-ca-geo-map-location-element="map"
    ></div>

    <div class="ty-geo-maps__geolocation__map__load-error hidden"
         data-ca-geo-map-location-element="map_load_error_message">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.location_detection_disabled", [], $_smarty_tpl->getSmarty()->getLanguage());?>

    </div>

    <div class="buttons-container">
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"text",'but_meta'=>"ty-btn__primary cm-dialog-closer ty-btn ty-float-right ty-geo-maps__geolocation__set-location pending",'but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("ok", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
    </div>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"geo_maps:customer_location_selector"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
</div>
<?php }
}
}
