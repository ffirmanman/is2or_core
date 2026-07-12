<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:42
  from 'tygh:addons/ab__preload/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a021a5283_66313298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceb207ec4bc84b872a0a0b2dbcc9b0fef60827f5' => 
    array (
      0 => 'addons/ab__preload/hooks/index/scripts.post.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a021a5283_66313298 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__preload/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('ab__p.wrong_preload_images','ab__p.image_must_be_preloaded','ab__p.image_is_preloaded','ab__p.image_is_not_preloaded','ab__p.fact_pov','ab__p.settings_pov','ab__p.lcp_element_missing','ab__p.wrong_preload_images','ab__p.image_must_be_preloaded','ab__p.image_is_preloaded','ab__p.image_is_not_preloaded','ab__p.fact_pov','ab__p.settings_pov','ab__p.lcp_element_missing'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('is_bottom_panel_available')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__preload/bottom_panel.js"), $_smarty_tpl);?>

    <?php echo '<script'; ?>
>
        Tygh.tr({
            ab__p_wrong_preload_images: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__p.wrong_preload_images", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            ab__p_image_must_be_preloaded: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__p.image_must_be_preloaded", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            ab__p_image_is_preloaded: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__p.image_is_preloaded", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            ab__p_image_is_not_preloaded: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__p.image_is_not_preloaded", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            ab__p_fact_pov: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__p.fact_pov", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            ab__p_settings_pov: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__p.settings_pov", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            ab__p_lcp_element_missing: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__p.lcp_element_missing", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'
        });
    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__preload/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('is_bottom_panel_available')) {?>
    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__preload/bottom_panel.js"), $_smarty_tpl);?>

    <?php echo '<script'; ?>
>
        Tygh.tr({
            ab__p_wrong_preload_images: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__p.wrong_preload_images", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            ab__p_image_must_be_preloaded: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__p.image_must_be_preloaded", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            ab__p_image_is_preloaded: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__p.image_is_preloaded", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            ab__p_image_is_not_preloaded: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__p.image_is_not_preloaded", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            ab__p_fact_pov: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__p.fact_pov", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            ab__p_settings_pov: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__p.settings_pov", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            ab__p_lcp_element_missing: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__p.lcp_element_missing", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
}
