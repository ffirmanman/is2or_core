<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:42
  from 'tygh:addons/vendor_locations/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a02172bc6_52499051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca9eaf40528eb10747892956230a2d93abd2aa6a' => 
    array (
      0 => 'addons/vendor_locations/hooks/index/scripts.post.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a02172bc6_52499051 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/vendor_locations/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('confirm','remove','vendor_locations.confirm_location','vendor_locations.chosen_location','vendor_locations.enter_location','vendor_locations.google_maps_cookie_title','vendor_locations.google_maps_cookie_description','confirm','remove','vendor_locations.confirm_location','vendor_locations.chosen_location','vendor_locations.enter_location','vendor_locations.google_maps_cookie_title','vendor_locations.google_maps_cookie_description'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('provider', $_smarty_tpl->getValue('settings')['vendor_locations']['general']['provider'], false, NULL);
$_smarty_tpl->assign('api_key', $_smarty_tpl->getValue('settings')['vendor_locations'][$_smarty_tpl->getValue('provider')][((string)$_smarty_tpl->getValue('settings')['vendor_locations']['general']['provider'])."_api_key"], false, NULL);
if ($_smarty_tpl->getValue('provider') === 'yandex') {?>
    <?php $_smarty_tpl->assign('suggest_api_key', $_smarty_tpl->getValue('settings')['vendor_locations'][$_smarty_tpl->getValue('provider')][((string)$_smarty_tpl->getValue('settings')['vendor_locations']['general']['provider'])."_suggest_api_key"], false, NULL);
}?>

<?php echo '<script'; ?>
>
    (function (_, $) {
        _.vendor_locations = {
            provider: '<?php echo strtr((string)$_smarty_tpl->getValue('provider'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            api_key: '<?php echo strtr((string)$_smarty_tpl->getValue('api_key'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            <?php if ($_smarty_tpl->getValue('provider') === 'yandex') {?>
                suggest_api_key: '<?php echo strtr((string)$_smarty_tpl->getValue('suggest_api_key'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            <?php }?>
            yandex_commercial: <?php if ($_smarty_tpl->getValue('settings')['vendor_locations']['yandex']['yandex_commercial'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>true<?php } else { ?>false<?php }?>,
            language: '<?php echo strtr((string)(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            storage_key_geolocation: '<?php echo strtr((string)(defined('VENDOR_LOCATIONS_STORAGE_KEY_GEO_LOCATION') ? constant('VENDOR_LOCATIONS_STORAGE_KEY_GEO_LOCATION') : null), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            storage_key_locality: '<?php echo strtr((string)(defined('VENDOR_LOCATIONS_STORAGE_KEY_LOCALITY') ? constant('VENDOR_LOCATIONS_STORAGE_KEY_LOCALITY') : null), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            customer_geolocation: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback('to_json')($_smarty_tpl->getValue('vendor_locations_geolocation')), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            customer_locality: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback('to_json')($_smarty_tpl->getValue('vendor_locations_locality')), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        };
        _.tr({
            confirm: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("confirm", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            remove: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("remove", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            confirm_location: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_locations.confirm_location", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            chosen_location: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_locations.chosen_location", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            enter_location: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_locations.enter_location", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "vendor_locations.google_maps_cookie_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_locations.google_maps_cookie_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "vendor_locations.google_maps_cookie_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_locations.google_maps_cookie_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->getValue('provider') === "yandex") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/provider/yandex/index.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/provider/yandex/geocomplete.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/provider/yandex/geolocate.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/provider/yandex/geomap.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/provider/yandex/func.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->getValue('provider') === "google") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/geocomplete.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/geolocate.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/geomap.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/func.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_locations/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/vendor_locations/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('provider', $_smarty_tpl->getValue('settings')['vendor_locations']['general']['provider'], false, NULL);
$_smarty_tpl->assign('api_key', $_smarty_tpl->getValue('settings')['vendor_locations'][$_smarty_tpl->getValue('provider')][((string)$_smarty_tpl->getValue('settings')['vendor_locations']['general']['provider'])."_api_key"], false, NULL);
if ($_smarty_tpl->getValue('provider') === 'yandex') {?>
    <?php $_smarty_tpl->assign('suggest_api_key', $_smarty_tpl->getValue('settings')['vendor_locations'][$_smarty_tpl->getValue('provider')][((string)$_smarty_tpl->getValue('settings')['vendor_locations']['general']['provider'])."_suggest_api_key"], false, NULL);
}?>

<?php echo '<script'; ?>
>
    (function (_, $) {
        _.vendor_locations = {
            provider: '<?php echo strtr((string)$_smarty_tpl->getValue('provider'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            api_key: '<?php echo strtr((string)$_smarty_tpl->getValue('api_key'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            <?php if ($_smarty_tpl->getValue('provider') === 'yandex') {?>
                suggest_api_key: '<?php echo strtr((string)$_smarty_tpl->getValue('suggest_api_key'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            <?php }?>
            yandex_commercial: <?php if ($_smarty_tpl->getValue('settings')['vendor_locations']['yandex']['yandex_commercial'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>true<?php } else { ?>false<?php }?>,
            language: '<?php echo strtr((string)(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            storage_key_geolocation: '<?php echo strtr((string)(defined('VENDOR_LOCATIONS_STORAGE_KEY_GEO_LOCATION') ? constant('VENDOR_LOCATIONS_STORAGE_KEY_GEO_LOCATION') : null), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            storage_key_locality: '<?php echo strtr((string)(defined('VENDOR_LOCATIONS_STORAGE_KEY_LOCALITY') ? constant('VENDOR_LOCATIONS_STORAGE_KEY_LOCALITY') : null), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            customer_geolocation: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback('to_json')($_smarty_tpl->getValue('vendor_locations_geolocation')), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            customer_locality: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback('to_json')($_smarty_tpl->getValue('vendor_locations_locality')), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        };
        _.tr({
            confirm: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("confirm", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            remove: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("remove", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            confirm_location: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_locations.confirm_location", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            chosen_location: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_locations.chosen_location", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            enter_location: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_locations.enter_location", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "vendor_locations.google_maps_cookie_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_locations.google_maps_cookie_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "vendor_locations.google_maps_cookie_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_locations.google_maps_cookie_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->getValue('provider') === "yandex") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/provider/yandex/index.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/provider/yandex/geocomplete.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/provider/yandex/geolocate.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/provider/yandex/geomap.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/provider/yandex/func.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->getValue('provider') === "google") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/geocomplete.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/geolocate.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/geomap.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/func.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

<?php }
}
}
}
