<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:18
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/mobile_app/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f69fb740_76901213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e95d4ee2447fc0e07cb5c956b6d75cdffbed8b57' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/mobile_app/hooks/index/scripts.post.tpl',
      1 => 1747908742,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835b9f69fb740_76901213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('mobile_app.we_also_have_a_mobile_app','mobile_app.view_demo','mobile_app.open','mobile_app.we_also_have_a_mobile_app','mobile_app.view_demo','mobile_app.open'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/addons/mobile_app/lib/jquery.smartbanner.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('banner_title', $_smarty_tpl->__("mobile_app.we_also_have_a_mobile_app"));
$_smarty_tpl->_assignInScope('banner_icon_url', fn_query_remove($_smarty_tpl->tpl_vars['logos']->value['favicon']['image']['image_path'],"t"));
$_smarty_tpl->_assignInScope('banner_button_text', $_smarty_tpl->__("mobile_app.view_demo"));
if ($_smarty_tpl->tpl_vars['mobile_app_settings']->value['banner_icon_url']) {?>
    <?php $_smarty_tpl->_assignInScope('banner_icon_url', $_smarty_tpl->tpl_vars['mobile_app_settings']->value['banner_icon_url']);?>
    <?php $_smarty_tpl->_assignInScope('banner_button_text', $_smarty_tpl->__("mobile_app.open"));
}
$_smarty_tpl->_assignInScope('unsupported_ios_versions', array(15.6));?>

<?php echo '<script'; ?>
>
    $(function() {
        (function (_, $, navigator) {
            if (navigator.userAgent.includes('MobileApplicationWebView')) {
                return;
            }

            const unsupportedIosVersions = <?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['unsupported_ios_versions']->value), ENT_QUOTES, 'UTF-8');?>
;
            const isNativeSmartBannerSupport = (UA) => !(
                (UA.match(/iPhone|iPod/i) !== null || UA.match(/iPad/))
                    && UA.match(/Safari/i) !== null
                    && unsupportedIosVersions.includes(window.Number(UA.substr(UA.indexOf('OS ') + 3, 4).replace('_', '.')))
            );

            $.smartbanner({
                daysHidden: 15,
                daysReminder: 90,
                appStoreLanguage: '<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
',
                title: '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['banner_title']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
                author: '',
                button: '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['banner_button_text']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
                icon: '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['banner_icon_url']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
                force: isNativeSmartBannerSupport(navigator.userAgent) ? null : 'ios',
            });
        })(Tygh, Tygh.$, navigator);
    });
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/mobile_app/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/mobile_app/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/mobile_app/lib/jquery.smartbanner.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('banner_title', $_smarty_tpl->__("mobile_app.we_also_have_a_mobile_app"));
$_smarty_tpl->_assignInScope('banner_icon_url', fn_query_remove($_smarty_tpl->tpl_vars['logos']->value['favicon']['image']['image_path'],"t"));
$_smarty_tpl->_assignInScope('banner_button_text', $_smarty_tpl->__("mobile_app.view_demo"));
if ($_smarty_tpl->tpl_vars['mobile_app_settings']->value['banner_icon_url']) {?>
    <?php $_smarty_tpl->_assignInScope('banner_icon_url', $_smarty_tpl->tpl_vars['mobile_app_settings']->value['banner_icon_url']);?>
    <?php $_smarty_tpl->_assignInScope('banner_button_text', $_smarty_tpl->__("mobile_app.open"));
}
$_smarty_tpl->_assignInScope('unsupported_ios_versions', array(15.6));?>

<?php echo '<script'; ?>
>
    $(function() {
        (function (_, $, navigator) {
            if (navigator.userAgent.includes('MobileApplicationWebView')) {
                return;
            }

            const unsupportedIosVersions = <?php echo htmlspecialchars((string) json_encode($_smarty_tpl->tpl_vars['unsupported_ios_versions']->value), ENT_QUOTES, 'UTF-8');?>
;
            const isNativeSmartBannerSupport = (UA) => !(
                (UA.match(/iPhone|iPod/i) !== null || UA.match(/iPad/))
                    && UA.match(/Safari/i) !== null
                    && unsupportedIosVersions.includes(window.Number(UA.substr(UA.indexOf('OS ') + 3, 4).replace('_', '.')))
            );

            $.smartbanner({
                daysHidden: 15,
                daysReminder: 90,
                appStoreLanguage: '<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
',
                title: '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['banner_title']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
                author: '',
                button: '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['banner_button_text']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
                icon: '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['banner_icon_url']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
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
