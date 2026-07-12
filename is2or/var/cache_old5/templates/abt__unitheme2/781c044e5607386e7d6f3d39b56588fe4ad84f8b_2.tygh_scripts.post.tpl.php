<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:12:01
  from 'tygh:addons/mobile_app/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f712c2e18_76461932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '781c044e5607386e7d6f3d39b56588fe4ad84f8b' => 
    array (
      0 => 'addons/mobile_app/hooks/index/scripts.post.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f712c2e18_76461932 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/mobile_app/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('mobile_app.we_also_have_a_mobile_app','mobile_app.view_demo','mobile_app.open','mobile_app.we_also_have_a_mobile_app','mobile_app.view_demo','mobile_app.open'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/mobile_app/lib/jquery.smartbanner.js"), $_smarty_tpl);?>


<?php $_smarty_tpl->assign('banner_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("mobile_app.we_also_have_a_mobile_app", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
$_smarty_tpl->assign('banner_icon_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('logos')['favicon']['image']['image_path'],"t"), false, NULL);
$_smarty_tpl->assign('banner_button_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("mobile_app.view_demo", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
if ($_smarty_tpl->getValue('mobile_app_settings')['banner_icon_url']) {?>
    <?php $_smarty_tpl->assign('banner_icon_url', $_smarty_tpl->getValue('mobile_app_settings')['banner_icon_url'], false, NULL);?>
    <?php $_smarty_tpl->assign('banner_button_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("mobile_app.open", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}
$_smarty_tpl->assign('unsupported_ios_versions', array(15.6), false, NULL);?>

<?php echo '<script'; ?>
>
    $(function() {
        (function (_, $, navigator) {
            if (navigator.userAgent.includes('MobileApplicationWebView')) {
                return;
            }

            const unsupportedIosVersions = <?php echo json_encode($_smarty_tpl->getValue('unsupported_ios_versions'));?>
;
            const isNativeSmartBannerSupport = (UA) => !(
                (UA.match(/iPhone|iPod/i) !== null || UA.match(/iPad/))
                    && UA.match(/Safari/i) !== null
                    && unsupportedIosVersions.includes(window.Number(UA.substr(UA.indexOf('OS ') + 3, 4).replace('_', '.')))
            );

            $.smartbanner({
                daysHidden: 15,
                daysReminder: 90,
                appStoreLanguage: '<?php echo htmlspecialchars((string) ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)), ENT_QUOTES, 'UTF-8');?>
',
                title: '<?php echo strtr((string)$_smarty_tpl->getValue('banner_title'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
                author: '',
                button: '<?php echo strtr((string)$_smarty_tpl->getValue('banner_button_text'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
                icon: '<?php echo strtr((string)$_smarty_tpl->getValue('banner_icon_url'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
                force: isNativeSmartBannerSupport(navigator.userAgent) ? null : 'ios',
            });
        })(Tygh, Tygh.$, navigator);
    });
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/mobile_app/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/mobile_app/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/mobile_app/lib/jquery.smartbanner.js"), $_smarty_tpl);?>


<?php $_smarty_tpl->assign('banner_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("mobile_app.we_also_have_a_mobile_app", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
$_smarty_tpl->assign('banner_icon_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('logos')['favicon']['image']['image_path'],"t"), false, NULL);
$_smarty_tpl->assign('banner_button_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("mobile_app.view_demo", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
if ($_smarty_tpl->getValue('mobile_app_settings')['banner_icon_url']) {?>
    <?php $_smarty_tpl->assign('banner_icon_url', $_smarty_tpl->getValue('mobile_app_settings')['banner_icon_url'], false, NULL);?>
    <?php $_smarty_tpl->assign('banner_button_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("mobile_app.open", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}
$_smarty_tpl->assign('unsupported_ios_versions', array(15.6), false, NULL);?>

<?php echo '<script'; ?>
>
    $(function() {
        (function (_, $, navigator) {
            if (navigator.userAgent.includes('MobileApplicationWebView')) {
                return;
            }

            const unsupportedIosVersions = <?php echo json_encode($_smarty_tpl->getValue('unsupported_ios_versions'));?>
;
            const isNativeSmartBannerSupport = (UA) => !(
                (UA.match(/iPhone|iPod/i) !== null || UA.match(/iPad/))
                    && UA.match(/Safari/i) !== null
                    && unsupportedIosVersions.includes(window.Number(UA.substr(UA.indexOf('OS ') + 3, 4).replace('_', '.')))
            );

            $.smartbanner({
                daysHidden: 15,
                daysReminder: 90,
                appStoreLanguage: '<?php echo htmlspecialchars((string) ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)), ENT_QUOTES, 'UTF-8');?>
',
                title: '<?php echo strtr((string)$_smarty_tpl->getValue('banner_title'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
                author: '',
                button: '<?php echo strtr((string)$_smarty_tpl->getValue('banner_button_text'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
                icon: '<?php echo strtr((string)$_smarty_tpl->getValue('banner_icon_url'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
                force: isNativeSmartBannerSupport(navigator.userAgent) ? null : 'ios',
            });
        })(Tygh, Tygh.$, navigator);
    });
<?php echo '</script'; ?>
>
<?php }
}
}
