<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:49:00
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe21c1281a5_72944266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55ee5883c1770d1b9be0b103eb61b9558915df5c' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__preload/hooks/index/scripts.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fe21c1281a5_72944266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__p.wrong_preload_images','ab__p.image_must_be_preloaded','ab__p.image_is_preloaded','ab__p.image_is_not_preloaded','ab__p.fact_pov','ab__p.settings_pov','ab__p.lcp_element_missing','ab__p.wrong_preload_images','ab__p.image_must_be_preloaded','ab__p.image_is_preloaded','ab__p.image_is_not_preloaded','ab__p.fact_pov','ab__p.settings_pov','ab__p.lcp_element_missing'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['is_bottom_panel_available']->value) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/ab__preload/bottom_panel.js"),$_smarty_tpl);?>

    <?php echo '<script'; ?>
>
        Tygh.tr({
            ab__p_wrong_preload_images: '<?php echo strtr((string)$_smarty_tpl->__("ab__p.wrong_preload_images"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            ab__p_image_must_be_preloaded: '<?php echo strtr((string)$_smarty_tpl->__("ab__p.image_must_be_preloaded"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            ab__p_image_is_preloaded: '<?php echo strtr((string)$_smarty_tpl->__("ab__p.image_is_preloaded"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            ab__p_image_is_not_preloaded: '<?php echo strtr((string)$_smarty_tpl->__("ab__p.image_is_not_preloaded"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            ab__p_fact_pov: '<?php echo strtr((string)$_smarty_tpl->__("ab__p.fact_pov"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            ab__p_settings_pov: '<?php echo strtr((string)$_smarty_tpl->__("ab__p.settings_pov"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            ab__p_lcp_element_missing: '<?php echo strtr((string)$_smarty_tpl->__("ab__p.lcp_element_missing"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
        });
    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__preload/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__preload/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['is_bottom_panel_available']->value) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/ab__preload/bottom_panel.js"),$_smarty_tpl);?>

    <?php echo '<script'; ?>
>
        Tygh.tr({
            ab__p_wrong_preload_images: '<?php echo strtr((string)$_smarty_tpl->__("ab__p.wrong_preload_images"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            ab__p_image_must_be_preloaded: '<?php echo strtr((string)$_smarty_tpl->__("ab__p.image_must_be_preloaded"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            ab__p_image_is_preloaded: '<?php echo strtr((string)$_smarty_tpl->__("ab__p.image_is_preloaded"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            ab__p_image_is_not_preloaded: '<?php echo strtr((string)$_smarty_tpl->__("ab__p.image_is_not_preloaded"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            ab__p_fact_pov: '<?php echo strtr((string)$_smarty_tpl->__("ab__p.fact_pov"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            ab__p_settings_pov: '<?php echo strtr((string)$_smarty_tpl->__("ab__p.settings_pov"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            ab__p_lcp_element_missing: '<?php echo strtr((string)$_smarty_tpl->__("ab__p.lcp_element_missing"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
}
