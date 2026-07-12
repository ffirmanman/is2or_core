<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:addons/vendor_locations/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1afc5fbb6_01239655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf66e0d78e2056cdaa5b63b2ed588762eeb1d814' => 
    array (
      0 => 'addons/vendor_locations/hooks/index/scripts.post.tpl',
      1 => 1767831040,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1afc5fbb6_01239655 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_locations/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('confirm','remove','vendor_locations.confirm_location','vendor_locations.chosen_location'));
$_smarty_tpl->assign('provider', $_smarty_tpl->getValue('settings')['vendor_locations']['general']['provider'], false, NULL);
$_smarty_tpl->assign('api_key', $_smarty_tpl->getValue('settings')['vendor_locations'][$_smarty_tpl->getValue('provider')][((string)$_smarty_tpl->getValue('settings')['vendor_locations']['general']['provider'])."_api_key"], false, NULL);
if ($_smarty_tpl->getValue('provider') === 'yandex') {?>
    <?php $_smarty_tpl->assign('suggest_api_key', $_smarty_tpl->getValue('settings')['vendor_locations'][$_smarty_tpl->getValue('provider')][((string)$_smarty_tpl->getValue('settings')['vendor_locations']['general']['provider'])."_suggest_api_key"], false, NULL);
}?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
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
            language: '<?php echo strtr((string)(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            yandex_commercial: <?php if ($_smarty_tpl->getValue('settings')['vendor_locations']['yandex']['yandex_commercial'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>true<?php } else { ?>false<?php }?>,
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
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php if ($_smarty_tpl->getValue('provider') === "yandex") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/provider/yandex/index.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/provider/yandex/geocode.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/provider/yandex/geomap.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/provider/yandex/geolocate.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/provider/yandex/func.js"), $_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->getValue('provider') === "google") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/geocomplete.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/geolocate.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/geomap.js"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_locations/func.js"), $_smarty_tpl);?>

<?php }
}
}
