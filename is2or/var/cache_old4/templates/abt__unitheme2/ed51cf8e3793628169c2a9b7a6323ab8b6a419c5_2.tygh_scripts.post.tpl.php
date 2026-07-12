<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:41
  from 'tygh:addons/social_buttons/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a01c1a4a2_24134835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed51cf8e3793628169c2a9b7a6323ab8b6a419c5' => 
    array (
      0 => 'addons/social_buttons/hooks/index/scripts.post.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a01c1a4a2_24134835 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/social_buttons/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('social_buttons.facebook_cookie_title','social_buttons.facebook_cookie_description','social_buttons.pinterest_cookie_title','social_buttons.pinterest_cookie_description','social_buttons.twitter_cookie_title','social_buttons.twitter_cookie_description','social_buttons.vkontakte_cookie_title','social_buttons.vkontakte_cookie_description','social_buttons.yandex_cookie_title','social_buttons.yandex_cookie_description','social_buttons.facebook_cookie_title','social_buttons.facebook_cookie_description','social_buttons.pinterest_cookie_title','social_buttons.pinterest_cookie_description','social_buttons.twitter_cookie_title','social_buttons.twitter_cookie_description','social_buttons.vkontakte_cookie_title','social_buttons.vkontakte_cookie_description','social_buttons.yandex_cookie_title','social_buttons.yandex_cookie_description'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            "social_buttons.facebook_cookie_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.facebook_cookie_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.facebook_cookie_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.facebook_cookie_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.pinterest_cookie_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.pinterest_cookie_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.pinterest_cookie_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.pinterest_cookie_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.twitter_cookie_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.twitter_cookie_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.twitter_cookie_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.twitter_cookie_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.vkontakte_cookie_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.vkontakte_cookie_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.vkontakte_cookie_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.vkontakte_cookie_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.yandex_cookie_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.yandex_cookie_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.yandex_cookie_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.yandex_cookie_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/social_buttons/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
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
            "social_buttons.facebook_cookie_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.facebook_cookie_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.facebook_cookie_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.facebook_cookie_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.pinterest_cookie_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.pinterest_cookie_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.pinterest_cookie_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.pinterest_cookie_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.twitter_cookie_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.twitter_cookie_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.twitter_cookie_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.twitter_cookie_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.vkontakte_cookie_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.vkontakte_cookie_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.vkontakte_cookie_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.vkontakte_cookie_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.yandex_cookie_title": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.yandex_cookie_title", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            "social_buttons.yandex_cookie_description": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("social_buttons.yandex_cookie_description", array('skip_live_editor'=>true), $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }
}
}
