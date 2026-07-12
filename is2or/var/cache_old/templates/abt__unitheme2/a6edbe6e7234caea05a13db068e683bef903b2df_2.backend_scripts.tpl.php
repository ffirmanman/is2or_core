<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:32
  from 'backend:addons/geo_maps/components/scripts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9474224df5_82292558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6edbe6e7234caea05a13db068e683bef903b2df' => 
    array (
      0 => 'addons/geo_maps/components/scripts.tpl',
      1 => 1767831040,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9474224df5_82292558 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/geo_maps/components';
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_field','geo_maps.cannot_select_location','admin_search_field','geo_maps.cannot_select_location'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/maps.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/code.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/locate.js"), $_smarty_tpl);?>


<?php $_smarty_tpl->assign('provider', $_smarty_tpl->getValue('settings')['geo_maps']['general']['provider'], false, NULL);?>

<?php if ($_smarty_tpl->getValue('provider') == "yandex") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/yandex/index.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/yandex/maps.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/yandex/code.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/yandex/locate.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->getValue('provider') == "google") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/google/index.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/google/maps.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/google/code.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/google/locate.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

<?php }?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/func.js"), $_smarty_tpl);?>


<?php $_smarty_tpl->assign('api_key', $_smarty_tpl->getValue('settings')['geo_maps'][$_smarty_tpl->getValue('provider')][((string)$_smarty_tpl->getValue('settings')['geo_maps']['general']['provider'])."_api_key"], false, NULL);
if ($_smarty_tpl->getValue('provider') === 'yandex') {?>
    <?php $_smarty_tpl->assign('suggest_api_key', $_smarty_tpl->getValue('settings')['geo_maps'][$_smarty_tpl->getValue('provider')][((string)$_smarty_tpl->getValue('settings')['geo_maps']['general']['provider'])."_suggest_api_key"], false, NULL);
}?>

<?php echo '<script'; ?>
>
    (function (_, $) {
        _.geo_maps = {
            provider: '<?php echo strtr((string)$_smarty_tpl->getValue('settings')['geo_maps']['general']['provider'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
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
            yandex_commercial: <?php if ($_smarty_tpl->getValue('settings')['geo_maps']['yandex']['yandex_commercial'] == "Y") {?>true<?php } else { ?>false<?php }?>,
            language: "<?php echo htmlspecialchars((string) ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)), ENT_QUOTES, 'UTF-8');?>
",
        };

        _.tr({
            geo_maps_google_search_bar_placeholder: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("admin_search_field", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            geo_maps_cannot_select_location: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.cannot_select_location", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:addons/geo_maps/components/scripts.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"backend:addons/geo_maps/components/scripts.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/maps.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/code.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/locate.js"), $_smarty_tpl);?>


<?php $_smarty_tpl->assign('provider', $_smarty_tpl->getValue('settings')['geo_maps']['general']['provider'], false, NULL);?>

<?php if ($_smarty_tpl->getValue('provider') == "yandex") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/yandex/index.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/yandex/maps.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/yandex/code.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/yandex/locate.js",'cookie-name'=>"yandex_maps"), $_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->getValue('provider') == "google") {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/google/index.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/google/maps.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/google/code.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/provider/google/locate.js",'cookie-name'=>"google_maps"), $_smarty_tpl);?>

<?php }?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/geo_maps/func.js"), $_smarty_tpl);?>


<?php $_smarty_tpl->assign('api_key', $_smarty_tpl->getValue('settings')['geo_maps'][$_smarty_tpl->getValue('provider')][((string)$_smarty_tpl->getValue('settings')['geo_maps']['general']['provider'])."_api_key"], false, NULL);
if ($_smarty_tpl->getValue('provider') === 'yandex') {?>
    <?php $_smarty_tpl->assign('suggest_api_key', $_smarty_tpl->getValue('settings')['geo_maps'][$_smarty_tpl->getValue('provider')][((string)$_smarty_tpl->getValue('settings')['geo_maps']['general']['provider'])."_suggest_api_key"], false, NULL);
}?>

<?php echo '<script'; ?>
>
    (function (_, $) {
        _.geo_maps = {
            provider: '<?php echo strtr((string)$_smarty_tpl->getValue('settings')['geo_maps']['general']['provider'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
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
            yandex_commercial: <?php if ($_smarty_tpl->getValue('settings')['geo_maps']['yandex']['yandex_commercial'] == "Y") {?>true<?php } else { ?>false<?php }?>,
            language: "<?php echo htmlspecialchars((string) ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)), ENT_QUOTES, 'UTF-8');?>
",
        };

        _.tr({
            geo_maps_google_search_bar_placeholder: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("admin_search_field", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            geo_maps_cannot_select_location: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("geo_maps.cannot_select_location", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php }
}
}
