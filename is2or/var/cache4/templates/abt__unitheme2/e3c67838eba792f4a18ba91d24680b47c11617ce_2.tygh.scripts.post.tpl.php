<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:37:37
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__fast_navigation/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345281058b49_95564902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3c67838eba792f4a18ba91d24680b47c11617ce' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__fast_navigation/hooks/index/scripts.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68345281058b49_95564902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__fn.show_more','ab__fn.show_more'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
    (function ( _, $ ) {
        $.extend(_, {
            ab__fn: {
                settings: {
                    load_by_ajax: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__fast_navigation']['load_by_ajax'], ENT_QUOTES, 'UTF-8');?>
'
                },
                blocks: { },
                scrollers_settings: { },
            }
        });

        _.tr({
            "ab__fn.delimeter_text": '<?php echo strtr((string)$_smarty_tpl->__("ab__fn.show_more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__fast_navigation/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__fast_navigation/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
    (function ( _, $ ) {
        $.extend(_, {
            ab__fn: {
                settings: {
                    load_by_ajax: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['ab__fast_navigation']['load_by_ajax'], ENT_QUOTES, 'UTF-8');?>
'
                },
                blocks: { },
                scrollers_settings: { },
            }
        });

        _.tr({
            "ab__fn.delimeter_text": '<?php echo strtr((string)$_smarty_tpl->__("ab__fn.show_more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php }
}
}
