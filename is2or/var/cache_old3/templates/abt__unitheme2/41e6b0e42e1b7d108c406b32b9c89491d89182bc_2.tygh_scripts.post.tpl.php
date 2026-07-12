<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:25
  from 'tygh:addons/ab__hide_product_description/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb2111ba900_60122117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41e6b0e42e1b7d108c406b32b9c89491d89182bc' => 
    array (
      0 => 'addons/ab__hide_product_description/hooks/index/scripts.post.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb2111ba900_60122117 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__hide_product_description/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('ab__smc.more','ab__smc.less','ab__smc.more','ab__smc.less'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('current_dispatch', $_REQUEST['dispatch'], false, NULL);
echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__smc: {max_height: '<?php echo strtr((string)(($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('addons')['ab__hide_product_description']['max_height']) ?? null)===null||$tmp==='' ? 250 ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',description_element_classes: "<?php if ($_smarty_tpl->getValue('addons')['ab__hide_product_description']['appearance'] == "button") {?> ab-smc-button-set<?php }?>",additional_classes_for_parent: "<?php if ($_smarty_tpl->getValue('addons')['ab__hide_product_description']['align'] == "right") {?> ab-smc-right-text<?php }?>"<?php if ($_smarty_tpl->getValue('addons')['ab__hide_product_description']['align'] == "center") {?>+ " ab-smc-center-text"<?php }?>,additional_classes: "<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('addons')['ab__hide_product_description']['custom_class'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('addons')['ab__hide_product_description']['appearance'] == "button") {?>+ " ab-smc-button ty-btn__secondary ty-btn__outline ty-btn"<?php } elseif ($_smarty_tpl->getValue('addons')['ab__hide_product_description']['appearance'] == "text2") {?>+ " ab-smc-text-2"<?php }?>,show_button: <?php if ($_smarty_tpl->getValue('addons')['ab__hide_product_description']['show_button_after_action'] == "Y") {?>true<?php } else { ?>false<?php }?>,transition: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('addons')['ab__hide_product_description']['transition'])/1000), ENT_QUOTES, 'UTF-8');?>
,exclude: <?php echo json_encode($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_schema')("ab__hpd","excluded_selectors"));?>
,selector: "<?php echo strtr((string)(($tmp = $_smarty_tpl->getValue('addons')['ab__hide_product_description']['selectors'] ?? null)===null||$tmp==='' ? ".ab-smc" ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
"<?php if ($_smarty_tpl->getValue('current_dispatch') == 'products.view' && $_smarty_tpl->getValue('addons')['ab__hide_product_description']['hide_in_product'] == 'Y') {?>+ ",.ty-product-block div.ty-wysiwyg-content[data-ab-smc-tab-hide]"<?php } elseif ($_smarty_tpl->getValue('current_dispatch') == 'product_features.view' && $_smarty_tpl->getValue('addons')['ab__hide_product_description']['hide_in_brand'] == 'Y') {?>+ ",.ty-feature__description"<?php } elseif ($_smarty_tpl->getValue('current_dispatch') == 'categories.view' && $_smarty_tpl->getValue('addons')['ab__hide_product_description']['hide_in_category'] == 'Y') {?>+ ",.ty-wysiwyg-content.ty-mb-s,.ty-wysiwyg-content.ty-mb-l"<?php }
if ($_smarty_tpl->getValue('runtime')['layout']['theme_name'] == "abt__youpitheme") {?> + ",.abt-yt-hc,.ypi-popup-descr"<?php }?>,additional_selector: <?php echo json_encode($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_schema')("ab__hpd","included_selectors"));?>
}});_.tr({"ab__smc.more": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__smc.more", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',"ab__smc.less": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__smc.less", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__hide_product_description/ab__smc.js"), $_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__hide_product_description/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__hide_product_description/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('current_dispatch', $_REQUEST['dispatch'], false, NULL);
echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__smc: {max_height: '<?php echo strtr((string)(($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('addons')['ab__hide_product_description']['max_height']) ?? null)===null||$tmp==='' ? 250 ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',description_element_classes: "<?php if ($_smarty_tpl->getValue('addons')['ab__hide_product_description']['appearance'] == "button") {?> ab-smc-button-set<?php }?>",additional_classes_for_parent: "<?php if ($_smarty_tpl->getValue('addons')['ab__hide_product_description']['align'] == "right") {?> ab-smc-right-text<?php }?>"<?php if ($_smarty_tpl->getValue('addons')['ab__hide_product_description']['align'] == "center") {?>+ " ab-smc-center-text"<?php }?>,additional_classes: "<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('addons')['ab__hide_product_description']['custom_class'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('addons')['ab__hide_product_description']['appearance'] == "button") {?>+ " ab-smc-button ty-btn__secondary ty-btn__outline ty-btn"<?php } elseif ($_smarty_tpl->getValue('addons')['ab__hide_product_description']['appearance'] == "text2") {?>+ " ab-smc-text-2"<?php }?>,show_button: <?php if ($_smarty_tpl->getValue('addons')['ab__hide_product_description']['show_button_after_action'] == "Y") {?>true<?php } else { ?>false<?php }?>,transition: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('addons')['ab__hide_product_description']['transition'])/1000), ENT_QUOTES, 'UTF-8');?>
,exclude: <?php echo json_encode($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_schema')("ab__hpd","excluded_selectors"));?>
,selector: "<?php echo strtr((string)(($tmp = $_smarty_tpl->getValue('addons')['ab__hide_product_description']['selectors'] ?? null)===null||$tmp==='' ? ".ab-smc" ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
"<?php if ($_smarty_tpl->getValue('current_dispatch') == 'products.view' && $_smarty_tpl->getValue('addons')['ab__hide_product_description']['hide_in_product'] == 'Y') {?>+ ",.ty-product-block div.ty-wysiwyg-content[data-ab-smc-tab-hide]"<?php } elseif ($_smarty_tpl->getValue('current_dispatch') == 'product_features.view' && $_smarty_tpl->getValue('addons')['ab__hide_product_description']['hide_in_brand'] == 'Y') {?>+ ",.ty-feature__description"<?php } elseif ($_smarty_tpl->getValue('current_dispatch') == 'categories.view' && $_smarty_tpl->getValue('addons')['ab__hide_product_description']['hide_in_category'] == 'Y') {?>+ ",.ty-wysiwyg-content.ty-mb-s,.ty-wysiwyg-content.ty-mb-l"<?php }
if ($_smarty_tpl->getValue('runtime')['layout']['theme_name'] == "abt__youpitheme") {?> + ",.abt-yt-hc,.ypi-popup-descr"<?php }?>,additional_selector: <?php echo json_encode($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_schema')("ab__hpd","included_selectors"));?>
}});_.tr({"ab__smc.more": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__smc.more", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',"ab__smc.less": '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__smc.less", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__hide_product_description/ab__smc.js"), $_smarty_tpl);
}
}
}
