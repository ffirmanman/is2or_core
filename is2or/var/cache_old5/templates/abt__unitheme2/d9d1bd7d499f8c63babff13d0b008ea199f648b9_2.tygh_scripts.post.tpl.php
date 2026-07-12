<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:12:01
  from 'tygh:addons/ab__intelligent_accessories/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f713c6727_82770790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9d1bd7d499f8c63babff13d0b008ea199f648b9' => 
    array (
      0 => 'addons/ab__intelligent_accessories/hooks/index/scripts.post.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133f713c6727_82770790 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__intelligent_accessories/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('prev','next','prev','next'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__ia_antibot_hide_content')()) {
echo '<script'; ?>
>
(function(_, $) {
    _.tr({
        ab__ia_prev: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("prev", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        ab__ia_next: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("next", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__intelligent_accessories/join_data.js"), $_smarty_tpl);?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__intelligent_accessories/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__intelligent_accessories/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__ia_antibot_hide_content')()) {
echo '<script'; ?>
>
(function(_, $) {
    _.tr({
        ab__ia_prev: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("prev", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
        ab__ia_next: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("next", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__intelligent_accessories/join_data.js"), $_smarty_tpl);?>

<?php }
}
}
}
