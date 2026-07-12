<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:addons/ab__category_banners/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1afc05823_65629712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e6bed9e65137a865f5bb3868d7963a5165d02d8' => 
    array (
      0 => 'addons/ab__category_banners/hooks/index/scripts.post.tpl',
      1 => 1767831037,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1afc05823_65629712 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__category_banners/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('ab__cb.validator.wrong_time_format'));
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
(function (_, $) {
_.tr({
ab__cb_wrong_time_format: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__cb.validator.wrong_time_format", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'
});
$(document).ready(function () {

$.ceFormValidator('registerValidator', {
class_name: 'cm-ab-cb-time',
message: _.tr('ab__cb_wrong_time_format'),
func: function (elm_id, elm) {
re = /^(\d{1,2}):(\d{2})?$/;
let elmVal = elm.val();
if (elmVal === '') {
return true;
}
if (regs = elmVal.match(re)) {
return regs[1] <= 23 && regs[2] <= 59;
}
return false;
}
});
});

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
