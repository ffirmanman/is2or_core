<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:addons/ab__extended_metadata/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1afc6ef33_12281951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a88ff94fa1972b39b40f0a49f24a4ebcf1b355c7' => 
    array (
      0 => 'addons/ab__extended_metadata/hooks/index/scripts.post.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1afc6ef33_12281951 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__extended_metadata/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('ab__emd.placeholders.tooltip_link','ab__extended_metadata'));
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
(function (_,$) {
var tooltips = <?php echo json_encode($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_schema')("ab__extended_metadata","tooltips"));?>
;
var text = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__emd.placeholders.tooltip_link", [], $_smarty_tpl->getSmarty()->getLanguage());?>
";
var header = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__extended_metadata", [], $_smarty_tpl->getSmarty()->getLanguage());?>
";
var url = "<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("ab__emd.placeholders_list")), ENT_QUOTES, 'UTF-8');?>
";
$.each(tooltips, function (selector, dispatch) {
var input = $(selector);
var link = $('<a></a>').attr({
href: url + '&frontend_dispatch=' + dispatch,
class: 'ab-emd-placeholders_link cm-ajax cm-dialog-opener',
'data-ca-dialog-title': header,
}).html(text);
if (input.length) {
input.after(link);
}
});
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
