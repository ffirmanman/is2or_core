<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:27:34
  from 'tygh:addons/is2or_customer_coordinates/pickers/map.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae84769a0fb8_17425697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6999c30551909034b854fd2e761805ae529cf0f5' => 
    array (
      0 => 'addons/is2or_customer_coordinates/pickers/map.tpl',
      1 => 1769485840,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69ae84769a0fb8_17425697 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_customer_coordinates/pickers';
\Tygh\Languages\Helper::preloadLangVars(array('select_coordinates','cancel','set','select_coordinates','cancel','set'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="hidden customer-map-selector" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_coordinates", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" id="map_picker_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->assign('initial_latitude', $_smarty_tpl->getSmarty()->getModifierCallback('doubleval')($_smarty_tpl->getValue('latitude')), false, NULL);?>
    <?php if (!$_smarty_tpl->getValue('initial_latitude')) {?>
        <?php $_smarty_tpl->assign('initial_latitude', $_smarty_tpl->getSmarty()->getModifierCallback('doubleval')((defined('IS2OR_CUSTOMER_COORDINATES_DEFAULT_LATITUDE') ? constant('IS2OR_CUSTOMER_COORDINATES_DEFAULT_LATITUDE') : null)), false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('initial_longitude', $_smarty_tpl->getSmarty()->getModifierCallback('doubleval')($_smarty_tpl->getValue('latitude')), false, NULL);?>
    <?php if (!$_smarty_tpl->getValue('initial_longitude')) {?>
        <?php $_smarty_tpl->assign('initial_longitude', $_smarty_tpl->getSmarty()->getModifierCallback('doubleval')((defined('IS2OR_CUSTOMER_COORDINATES_DEFAULT_LONGITUDE') ? constant('IS2OR_CUSTOMER_COORDINATES_DEFAULT_LONGITUDE') : null)), false, NULL);?>
    <?php }?>

    <div class="cm-geo-map-container map-canvas" id="map_picker_container_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" style="height: 100%; min-height: 70vh;"
        data-ca-geo-map-initial-lat="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('initial_latitude')), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-geo-map-initial-lng="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('initial_longitude')), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-geo-map-language="<?php echo htmlspecialchars((string) ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-geo-map-marker-selector=".cm-customer-coordinates-map-marker__<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-geo-map-controls-enable-zoom="true"
        data-ca-geo-map-controls-enable-fullscreen="true"
        data-ca-geo-map-controls-enable-layers="true"
        data-ca-geo-map-controls-enable-ruler="true"
        data-ca-geo-map-behaviors-enable-drag="true"
        data-ca-geo-map-behaviors-enable-drag-on-mobile="true"
        data-ca-geo-map-behaviors-enable-dbl-click-zoom="true"
        data-ca-geo-map-behaviors-enable-multi-touch="true"
    ></div>

    <div class="buttons-container">
        <a class="cm-dialog-closer cm-cancel tool-link ty-btn"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cancel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
        <div class="ty-float-right">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("set", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_meta'=>"ty-btn__primary cm-dialog-closer cm-map-save-location"), (int) 0, $_smarty_current_dir);
?>
        </div>
    </div>

    <?php if ($_smarty_tpl->getValue('latitude') && $_smarty_tpl->getValue('longitude')) {?>
        <div class="cm-customer-coordinates-map-marker__<?php echo $_smarty_tpl->getValue('id');?>
 hidden"
            data-ca-geo-map-marker-lat="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('latitude')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-geo-map-marker-lng="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('longitude')), ENT_QUOTES, 'UTF-8');?>
"
        ></div>
    <?php }?>
</div>

<?php echo '<script'; ?>
>
(function (_, $) {
  $(_.doc).ready(function () {
    var $container = $('#map_picker_container_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
');
    function fn_save_latest_coordinates(coords) {
      $('#elm_latitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').data('caLatestLatitude', coords.lat);
      $('#elm_longitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').data('caLatestLongitude', coords.lng);
    }
    $container.on('ce:geomap:click', function (e, data) {
      if (!data.lat || !data.lng) {
        return;
      }
      var $container = $(e.target);
      $container.ceGeoMap('removeAllMarkers');
      $container.ceGeoMap('addMarkers', [data]);
      fn_save_latest_coordinates(data);
    });
    
    $container.on('ce:geomap:search_result_select', function (e, data) {
      if (!data.lat || !data.lng) {
        return;
      }
      var $container = $(e.target);
      $container.ceGeoMap('removeAllMarkers');
      $container.ceGeoMap('addMarkers', [data]);
      $container.ceGeoMap('setCenter', data.lat, data.lng);
      fn_save_latest_coordinates(data);
    });
    $('.cm-map-save-location').on('click touch', function (e) {
      var lat = $('#elm_latitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').data('caLatestLatitude') || null;
      if (lat) {
        $('#elm_latitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').val(lat);
      }
      var lng = $('#elm_longitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').data('caLatestLongitude') || null;
      if (lng) {
        $('#elm_longitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').val(lng);
      }
    });
    $container.on('ce:geomap:init', function (e) {
      $('.customer-coordinates-picker-opener').on('click touch', function () {
        if ($('#elm_longitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').val() && $('#elm_longitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').val()) {
          return;
        }
      });
    });
  });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/is2or_customer_coordinates/pickers/map.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/is2or_customer_coordinates/pickers/map.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="hidden customer-map-selector" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_coordinates", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" id="map_picker_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->assign('initial_latitude', $_smarty_tpl->getSmarty()->getModifierCallback('doubleval')($_smarty_tpl->getValue('latitude')), false, NULL);?>
    <?php if (!$_smarty_tpl->getValue('initial_latitude')) {?>
        <?php $_smarty_tpl->assign('initial_latitude', $_smarty_tpl->getSmarty()->getModifierCallback('doubleval')((defined('IS2OR_CUSTOMER_COORDINATES_DEFAULT_LATITUDE') ? constant('IS2OR_CUSTOMER_COORDINATES_DEFAULT_LATITUDE') : null)), false, NULL);?>
    <?php }?>

    <?php $_smarty_tpl->assign('initial_longitude', $_smarty_tpl->getSmarty()->getModifierCallback('doubleval')($_smarty_tpl->getValue('latitude')), false, NULL);?>
    <?php if (!$_smarty_tpl->getValue('initial_longitude')) {?>
        <?php $_smarty_tpl->assign('initial_longitude', $_smarty_tpl->getSmarty()->getModifierCallback('doubleval')((defined('IS2OR_CUSTOMER_COORDINATES_DEFAULT_LONGITUDE') ? constant('IS2OR_CUSTOMER_COORDINATES_DEFAULT_LONGITUDE') : null)), false, NULL);?>
    <?php }?>

    <div class="cm-geo-map-container map-canvas" id="map_picker_container_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" style="height: 100%; min-height: 70vh;"
        data-ca-geo-map-initial-lat="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('initial_latitude')), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-geo-map-initial-lng="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('initial_longitude')), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-geo-map-language="<?php echo htmlspecialchars((string) ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-geo-map-marker-selector=".cm-customer-coordinates-map-marker__<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-geo-map-controls-enable-zoom="true"
        data-ca-geo-map-controls-enable-fullscreen="true"
        data-ca-geo-map-controls-enable-layers="true"
        data-ca-geo-map-controls-enable-ruler="true"
        data-ca-geo-map-behaviors-enable-drag="true"
        data-ca-geo-map-behaviors-enable-drag-on-mobile="true"
        data-ca-geo-map-behaviors-enable-dbl-click-zoom="true"
        data-ca-geo-map-behaviors-enable-multi-touch="true"
    ></div>

    <div class="buttons-container">
        <a class="cm-dialog-closer cm-cancel tool-link ty-btn"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cancel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
        <div class="ty-float-right">
            <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("set", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_role'=>"action",'but_meta'=>"ty-btn__primary cm-dialog-closer cm-map-save-location"), (int) 0, $_smarty_current_dir);
?>
        </div>
    </div>

    <?php if ($_smarty_tpl->getValue('latitude') && $_smarty_tpl->getValue('longitude')) {?>
        <div class="cm-customer-coordinates-map-marker__<?php echo $_smarty_tpl->getValue('id');?>
 hidden"
            data-ca-geo-map-marker-lat="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('latitude')), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-geo-map-marker-lng="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('longitude')), ENT_QUOTES, 'UTF-8');?>
"
        ></div>
    <?php }?>
</div>

<?php echo '<script'; ?>
>
(function (_, $) {
  $(_.doc).ready(function () {
    var $container = $('#map_picker_container_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
');
    function fn_save_latest_coordinates(coords) {
      $('#elm_latitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').data('caLatestLatitude', coords.lat);
      $('#elm_longitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').data('caLatestLongitude', coords.lng);
    }
    $container.on('ce:geomap:click', function (e, data) {
      if (!data.lat || !data.lng) {
        return;
      }
      var $container = $(e.target);
      $container.ceGeoMap('removeAllMarkers');
      $container.ceGeoMap('addMarkers', [data]);
      fn_save_latest_coordinates(data);
    });
    
    $container.on('ce:geomap:search_result_select', function (e, data) {
      if (!data.lat || !data.lng) {
        return;
      }
      var $container = $(e.target);
      $container.ceGeoMap('removeAllMarkers');
      $container.ceGeoMap('addMarkers', [data]);
      $container.ceGeoMap('setCenter', data.lat, data.lng);
      fn_save_latest_coordinates(data);
    });
    $('.cm-map-save-location').on('click touch', function (e) {
      var lat = $('#elm_latitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').data('caLatestLatitude') || null;
      if (lat) {
        $('#elm_latitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').val(lat);
      }
      var lng = $('#elm_longitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').data('caLatestLongitude') || null;
      if (lng) {
        $('#elm_longitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').val(lng);
      }
    });
    $container.on('ce:geomap:init', function (e) {
      $('.customer-coordinates-picker-opener').on('click touch', function () {
        if ($('#elm_longitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').val() && $('#elm_longitude_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
').val()) {
          return;
        }
      });
    });
  });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php }
}
}
