<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:17
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd7d043012_69994128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78b31997946f32a45ee1ada4cef2269486452410' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/ab__hide_product_description/hooks/index/scripts.post.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd7d043012_69994128 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('ab__smc.more','ab__smc.less','ab__smc.more','ab__smc.less'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('current_dispatch', $_REQUEST['dispatch']);
echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__smc: {max_height: '<?php echo htmlspecialchars((string) strtr((string)(($tmp = intval($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['max_height']) ?? null)===null||$tmp==='' ? 250 ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',description_element_classes: "<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['appearance'] == "button") {?> ab-smc-button-set<?php }?>",additional_classes_for_parent: "<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['align'] == "right") {?> ab-smc-right-text<?php }?>"<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['align'] == "center") {?>+ " ab-smc-center-text"<?php }?>,additional_classes: "<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['custom_class'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['appearance'] == "button") {?>+ " ab-smc-button ty-btn__secondary ty-btn__outline ty-btn"<?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['appearance'] == "text2") {?>+ " ab-smc-text-2"<?php }?>,show_button: <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['show_button_after_action'] == "Y") {?>true<?php } else { ?>false<?php }?>,transition: <?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['transition'])/1000, ENT_QUOTES, 'UTF-8');?>
,exclude: <?php echo json_encode(fn_get_schema("ab__hpd","excluded_selectors"));?>
,selector: "<?php echo htmlspecialchars((string) strtr((string)(($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['selectors'] ?? null)===null||$tmp==='' ? ".ab-smc" ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['current_dispatch']->value == 'products.view' && $_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['hide_in_product'] == 'Y') {?>+ ",.ty-product-block div.ty-wysiwyg-content[data-ab-smc-tab-hide]"<?php } elseif ($_smarty_tpl->tpl_vars['current_dispatch']->value == 'product_features.view' && $_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['hide_in_brand'] == 'Y') {?>+ ",.ty-feature__description"<?php } elseif ($_smarty_tpl->tpl_vars['current_dispatch']->value == 'categories.view' && $_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['hide_in_category'] == 'Y') {?>+ ",.ty-wysiwyg-content.ty-mb-s,.ty-wysiwyg-content.ty-mb-l"<?php }
if ($_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name'] == "abt__youpitheme") {?> + ",.abt-yt-hc,.ypi-popup-descr"<?php }?>,additional_selector: <?php echo json_encode(fn_get_schema("ab__hpd","included_selectors"));?>
}});_.tr({"ab__smc.more": '<?php echo strtr((string)$_smarty_tpl->__("ab__smc.more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',"ab__smc.less": '<?php echo strtr((string)$_smarty_tpl->__("ab__smc.less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__hide_product_description/ab__smc.js"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__hide_product_description/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__hide_product_description/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('current_dispatch', $_REQUEST['dispatch']);
echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__smc: {max_height: '<?php echo htmlspecialchars((string) strtr((string)(($tmp = intval($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['max_height']) ?? null)===null||$tmp==='' ? 250 ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',description_element_classes: "<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['appearance'] == "button") {?> ab-smc-button-set<?php }?>",additional_classes_for_parent: "<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['align'] == "right") {?> ab-smc-right-text<?php }?>"<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['align'] == "center") {?>+ " ab-smc-center-text"<?php }?>,additional_classes: "<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['custom_class'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['appearance'] == "button") {?>+ " ab-smc-button ty-btn__secondary ty-btn__outline ty-btn"<?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['appearance'] == "text2") {?>+ " ab-smc-text-2"<?php }?>,show_button: <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['show_button_after_action'] == "Y") {?>true<?php } else { ?>false<?php }?>,transition: <?php echo htmlspecialchars((string) intval($_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['transition'])/1000, ENT_QUOTES, 'UTF-8');?>
,exclude: <?php echo json_encode(fn_get_schema("ab__hpd","excluded_selectors"));?>
,selector: "<?php echo htmlspecialchars((string) strtr((string)(($tmp = $_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['selectors'] ?? null)===null||$tmp==='' ? ".ab-smc" ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['current_dispatch']->value == 'products.view' && $_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['hide_in_product'] == 'Y') {?>+ ",.ty-product-block div.ty-wysiwyg-content[data-ab-smc-tab-hide]"<?php } elseif ($_smarty_tpl->tpl_vars['current_dispatch']->value == 'product_features.view' && $_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['hide_in_brand'] == 'Y') {?>+ ",.ty-feature__description"<?php } elseif ($_smarty_tpl->tpl_vars['current_dispatch']->value == 'categories.view' && $_smarty_tpl->tpl_vars['addons']->value['ab__hide_product_description']['hide_in_category'] == 'Y') {?>+ ",.ty-wysiwyg-content.ty-mb-s,.ty-wysiwyg-content.ty-mb-l"<?php }
if ($_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name'] == "abt__youpitheme") {?> + ",.abt-yt-hc,.ypi-popup-descr"<?php }?>,additional_selector: <?php echo json_encode(fn_get_schema("ab__hpd","included_selectors"));?>
}});_.tr({"ab__smc.more": '<?php echo strtr((string)$_smarty_tpl->__("ab__smc.more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',"ab__smc.less": '<?php echo strtr((string)$_smarty_tpl->__("ab__smc.less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/ab__hide_product_description/ab__smc.js"),$_smarty_tpl);
}
}
}
