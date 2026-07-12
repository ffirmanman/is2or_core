<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:41
  from 'tygh:addons/ab__fast_navigation/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a01e78865_30217602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89fb07240d2aac82fc7a9944754abf208aac514c' => 
    array (
      0 => 'addons/ab__fast_navigation/hooks/index/scripts.post.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a01e78865_30217602 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__fast_navigation/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('ab__fn.show_more','ab__fn.show_more'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function ( _, $ ) {
        $.extend(_, {
            ab__fn: {
                settings: {
                    load_by_ajax: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__fast_navigation']['load_by_ajax']), ENT_QUOTES, 'UTF-8');?>
'
                },
                blocks: { },
                scrollers_settings: { },
            }
        });

        _.tr({
            "ab__fn.delimeter_text": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__fn.show_more", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__fast_navigation/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__fast_navigation/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function ( _, $ ) {
        $.extend(_, {
            ab__fn: {
                settings: {
                    load_by_ajax: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__fast_navigation']['load_by_ajax']), ENT_QUOTES, 'UTF-8');?>
'
                },
                blocks: { },
                scrollers_settings: { },
            }
        });

        _.tr({
            "ab__fn.delimeter_text": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__fn.show_more", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }
}
}
