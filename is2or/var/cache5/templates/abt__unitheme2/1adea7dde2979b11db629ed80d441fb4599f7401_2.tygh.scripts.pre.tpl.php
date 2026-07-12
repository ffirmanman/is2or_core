<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:18
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__extended_comparison_wishlist/hooks/index/scripts.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f6951dd3_56274991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1adea7dde2979b11db629ed80d441fb4599f7401' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__extended_comparison_wishlist/hooks/index/scripts.pre.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835b9f6951dd3_56274991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__ecw.comparison_lists','ab__ecw.link_was_copied','different_only','all_features','ab__ecw.comparison_lists','ab__ecw.link_was_copied','different_only','all_features'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function(_, $){
        _.tr({
            'ab__ecw.comparison_lists': '<?php echo strtr((string)$_smarty_tpl->__("ab__ecw.comparison_lists"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            'ab__ecw.link_was_copied': '<?php echo strtr((string)$_smarty_tpl->__("ab__ecw.link_was_copied"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',

            <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__extended_comparison_wishlist']['features_filter_behavior'] == "highlight_differences") {?>
                'ab__ecw.different_only': '<?php echo strtr((string)$_smarty_tpl->__("different_only"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                'ab__ecw.all_features': '<?php echo strtr((string)$_smarty_tpl->__("all_features"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            <?php }?>
        });

        $.extend(_, {
            ab__ecw: {
                settings: {
                    group_comparison_lists: Boolean(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__extended_comparison_wishlist']['group_comparison_lists'] === smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
),
                    open_compare_page_with_add_button: Boolean(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__extended_comparison_wishlist']['open_compare_page_with_add_to_compare_button'] === smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
)
                },
                runtime: {
                    theme: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['app']->value["storefront"]->theme_name, ENT_QUOTES, 'UTF-8');?>
',
                    features_compare_url: '<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
',
                    device: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__device'], ENT_QUOTES, 'UTF-8');?>
',
                },
                comparison_list: Object.values(<?php echo json_encode((($tmp = $_smarty_tpl->tpl_vars['app']->value["session"]["comparison_list"] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>
),
            },
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__extended_comparison_wishlist/func.js"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__extended_comparison_wishlist/hooks/index/scripts.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__extended_comparison_wishlist/hooks/index/scripts.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function(_, $){
        _.tr({
            'ab__ecw.comparison_lists': '<?php echo strtr((string)$_smarty_tpl->__("ab__ecw.comparison_lists"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            'ab__ecw.link_was_copied': '<?php echo strtr((string)$_smarty_tpl->__("ab__ecw.link_was_copied"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',

            <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__extended_comparison_wishlist']['features_filter_behavior'] == "highlight_differences") {?>
                'ab__ecw.different_only': '<?php echo strtr((string)$_smarty_tpl->__("different_only"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                'ab__ecw.all_features': '<?php echo strtr((string)$_smarty_tpl->__("all_features"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            <?php }?>
        });

        $.extend(_, {
            ab__ecw: {
                settings: {
                    group_comparison_lists: Boolean(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__extended_comparison_wishlist']['group_comparison_lists'] === smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
),
                    open_compare_page_with_add_button: Boolean(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__extended_comparison_wishlist']['open_compare_page_with_add_to_compare_button'] === smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
)
                },
                runtime: {
                    theme: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['app']->value["storefront"]->theme_name, ENT_QUOTES, 'UTF-8');?>
',
                    features_compare_url: '<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
',
                    device: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['abt__device'], ENT_QUOTES, 'UTF-8');?>
',
                },
                comparison_list: Object.values(<?php echo json_encode((($tmp = $_smarty_tpl->tpl_vars['app']->value["session"]["comparison_list"] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>
),
            },
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__extended_comparison_wishlist/func.js"),$_smarty_tpl);
}
}
}
