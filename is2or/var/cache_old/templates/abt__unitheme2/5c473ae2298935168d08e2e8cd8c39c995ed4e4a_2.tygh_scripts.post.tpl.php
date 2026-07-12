<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:32
  from 'tygh:addons/google_analytics/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94742ab465_03762177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c473ae2298935168d08e2e8cd8c39c995ed4e4a' => 
    array (
      0 => 'addons/google_analytics/hooks/index/scripts.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad94742ab465_03762177 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/google_analytics/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('google_analytics.google_analytics_cookies_title','google_analytics.google_analytics_cookies_description','google_analytics.google_ads_cookies_title','google_analytics.google_ads_cookies_description','google_analytics.google_analytics_cookies_title','google_analytics.google_analytics_cookies_description','google_analytics.google_ads_cookies_title','google_analytics.google_ads_cookies_description'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            "google_analytics.google_analytics_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("google_analytics.google_analytics_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "google_analytics.google_analytics_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("google_analytics.google_analytics_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "google_analytics.google_ads_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("google_analytics.google_ads_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "google_analytics.google_ads_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("google_analytics.google_ads_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/google_analytics/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/google_analytics/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            "google_analytics.google_analytics_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("google_analytics.google_analytics_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "google_analytics.google_analytics_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("google_analytics.google_analytics_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "google_analytics.google_ads_cookies_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("google_analytics.google_ads_cookies_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "google_analytics.google_ads_cookies_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("google_analytics.google_ads_cookies_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }
}
}
