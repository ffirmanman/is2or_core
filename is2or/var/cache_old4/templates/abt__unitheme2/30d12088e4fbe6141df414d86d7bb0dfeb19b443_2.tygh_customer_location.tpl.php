<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:37
  from 'tygh:addons/geo_maps/blocks/customer_location.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fddfa2a1_17296517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30d12088e4fbe6141df414d86d7bb0dfeb19b443' => 
    array (
      0 => 'addons/geo_maps/blocks/customer_location.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
  ),
))) {
function content_69fb49fddfa2a1_17296517 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/geo_maps/blocks';
\Tygh\Languages\Helper::preloadLangVars(array('city','geo_maps.your_city','geo_maps.select_your_city','city','geo_maps.your_city','geo_maps.select_your_city'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['geo_maps']['status'] == "A") {?>
    <?php $_smarty_tpl->assign('block_id', (($tmp = $_smarty_tpl->getValue('block')['snapping_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('id') ?? null : $tmp), false, NULL);?>
    <div class="ty-geo-maps__geolocation"
         data-ca-geo-map-location-is-location-detected="<?php if ((($tmp = $_smarty_tpl->getValue('location_detected') ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>true<?php } else { ?>false<?php }?>"
         data-ca-geo-map-location-element="location_block"
         id="geo_maps_location_block_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_id')), ENT_QUOTES, 'UTF-8');?>
"
    >
        <span class="hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("city", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: </span>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "geo_maps_location_popup_opener", null, null);?>
            <span data-ca-geo-map-location-element="location" class="ty-geo-maps__geolocation__location"><?php echo (($tmp = $_smarty_tpl->getValue('location')['city'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.your_city", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</span>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"geo_maps.customer_geolocation",'link_text'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'geo_maps_location_popup_opener'),'link_text_meta'=>"ty-geo-maps__geolocation__opener-text",'link_icon'=>"ty-icon-location-arrow",'link_icon_first'=>true,'link_meta'=>"ty-geo-maps__geolocation__opener",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.select_your_city", [], $_smarty_tpl->getSmarty()->getLanguage()),'id'=>"geo_maps_location_dialog_".((string)$_smarty_tpl->getValue('block_id')),'content'=>false,'no_container'=>true), (int) 0, $_smarty_current_dir);
?>
    <!--geo_maps_location_block_<?php echo $_smarty_tpl->getValue('block_id');?>
--></div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/blocks/customer_location.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/geo_maps/blocks/customer_location.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['geo_maps']['status'] == "A") {?>
    <?php $_smarty_tpl->assign('block_id', (($tmp = $_smarty_tpl->getValue('block')['snapping_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('id') ?? null : $tmp), false, NULL);?>
    <div class="ty-geo-maps__geolocation"
         data-ca-geo-map-location-is-location-detected="<?php if ((($tmp = $_smarty_tpl->getValue('location_detected') ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>true<?php } else { ?>false<?php }?>"
         data-ca-geo-map-location-element="location_block"
         id="geo_maps_location_block_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('block_id')), ENT_QUOTES, 'UTF-8');?>
"
    >
        <span class="hidden"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("city", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: </span>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "geo_maps_location_popup_opener", null, null);?>
            <span data-ca-geo-map-location-element="location" class="ty-geo-maps__geolocation__location"><?php echo (($tmp = $_smarty_tpl->getValue('location')['city'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.your_city", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</span>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"geo_maps.customer_geolocation",'link_text'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'geo_maps_location_popup_opener'),'link_text_meta'=>"ty-geo-maps__geolocation__opener-text",'link_icon'=>"ty-icon-location-arrow",'link_icon_first'=>true,'link_meta'=>"ty-geo-maps__geolocation__opener",'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.select_your_city", [], $_smarty_tpl->getSmarty()->getLanguage()),'id'=>"geo_maps_location_dialog_".((string)$_smarty_tpl->getValue('block_id')),'content'=>false,'no_container'=>true), (int) 0, $_smarty_current_dir);
?>
    <!--geo_maps_location_block_<?php echo $_smarty_tpl->getValue('block_id');?>
--></div>
<?php }
}
}
}
