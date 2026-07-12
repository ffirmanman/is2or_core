<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:25
  from 'tygh:addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb2111d3049_92642827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1279e893e22b15047a242f5fe6d65a89eae8acb5' => 
    array (
      0 => 'addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb2111d3049_92642827 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__deal_of_the_day/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('ab__dotd.more','ab__dotd.less','ab__dotd.more','ab__dotd.less'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__dotd: {current_dispatch: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('runtime')['controller']), ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('runtime')['mode']), ENT_QUOTES, 'UTF-8');?>
',current_promotion_id: <?php echo htmlspecialchars((string) ((($tmp = $_REQUEST['promotion_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,max_height: '<?php echo strtr((string)(($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('addons')['ab__deal_of_the_day']['max_height']) ?? null)===null||$tmp==='' ? 250 ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',more: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.more", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',less: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.less", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',plural_formula: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__dotd_get_plural_rule')();?>
',}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__deal_of_the_day/func.js"), $_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>(function(_, $) {$.extend(_, {ab__dotd: {current_dispatch: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('runtime')['controller']), ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('runtime')['mode']), ENT_QUOTES, 'UTF-8');?>
',current_promotion_id: <?php echo htmlspecialchars((string) ((($tmp = $_REQUEST['promotion_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
,max_height: '<?php echo strtr((string)(($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('intval')($_smarty_tpl->getValue('addons')['ab__deal_of_the_day']['max_height']) ?? null)===null||$tmp==='' ? 250 ?? null : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',more: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.more", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',less: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.less", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',plural_formula: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__dotd_get_plural_rule')();?>
',}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__deal_of_the_day/func.js"), $_smarty_tpl);
}
}
}
