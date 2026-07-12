<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:41
  from 'tygh:addons/ab__extended_comparison_wishlist/hooks/index/scripts.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a01ac8521_63784485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c798a4e3f37f3c247436720975ce766ca1f8a03d' => 
    array (
      0 => 'addons/ab__extended_comparison_wishlist/hooks/index/scripts.pre.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a01ac8521_63784485 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__extended_comparison_wishlist/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('ab__ecw.comparison_lists','ab__ecw.link_was_copied','different_only','all_features','ab__ecw.comparison_lists','ab__ecw.link_was_copied','different_only','all_features'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function(_, $){
        _.tr({
            'ab__ecw.comparison_lists': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ecw.comparison_lists", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            'ab__ecw.link_was_copied': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ecw.link_was_copied", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',

            <?php if ($_smarty_tpl->getValue('addons')['ab__extended_comparison_wishlist']['features_filter_behavior'] == "highlight_differences") {?>
                'ab__ecw.different_only': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("different_only", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
                'ab__ecw.all_features': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("all_features", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            <?php }?>
        });

        $.extend(_, {
            ab__ecw: {
                settings: {
                    group_comparison_lists: Boolean(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__extended_comparison_wishlist']['group_comparison_lists'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
),
                    open_compare_page_with_add_button: Boolean(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__extended_comparison_wishlist']['open_compare_page_with_add_to_compare_button'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
)
                },
                runtime: {
                    theme: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('app')["storefront"]->theme_name), ENT_QUOTES, 'UTF-8');?>
',
                    features_compare_url: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare")), ENT_QUOTES, 'UTF-8');?>
',
                    device: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__device']), ENT_QUOTES, 'UTF-8');?>
',
                },
                comparison_list: Object.values(<?php echo json_encode((($tmp = $_smarty_tpl->getValue('app')["session"]["comparison_list"] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>
),
            },
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__extended_comparison_wishlist/func.js"), $_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__extended_comparison_wishlist/hooks/index/scripts.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__extended_comparison_wishlist/hooks/index/scripts.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function(_, $){
        _.tr({
            'ab__ecw.comparison_lists': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ecw.comparison_lists", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            'ab__ecw.link_was_copied': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__ecw.link_was_copied", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',

            <?php if ($_smarty_tpl->getValue('addons')['ab__extended_comparison_wishlist']['features_filter_behavior'] == "highlight_differences") {?>
                'ab__ecw.different_only': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("different_only", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
                'ab__ecw.all_features': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("all_features", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            <?php }?>
        });

        $.extend(_, {
            ab__ecw: {
                settings: {
                    group_comparison_lists: Boolean(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__extended_comparison_wishlist']['group_comparison_lists'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
),
                    open_compare_page_with_add_button: Boolean(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['ab__extended_comparison_wishlist']['open_compare_page_with_add_to_compare_button'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), ENT_QUOTES, 'UTF-8');?>
)
                },
                runtime: {
                    theme: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('app')["storefront"]->theme_name), ENT_QUOTES, 'UTF-8');?>
',
                    features_compare_url: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("product_features.compare")), ENT_QUOTES, 'UTF-8');?>
',
                    device: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('settings')['abt__device']), ENT_QUOTES, 'UTF-8');?>
',
                },
                comparison_list: Object.values(<?php echo json_encode((($tmp = $_smarty_tpl->getValue('app')["session"]["comparison_list"] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>
),
            },
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__extended_comparison_wishlist/func.js"), $_smarty_tpl);
}
}
}
