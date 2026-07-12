<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:47
  from 'tygh:addons/vendor_data_premoderation/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1afc010a7_72949733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fefdff42743d9c1c1640364ec494a6d33dee3ba9' => 
    array (
      0 => 'addons/vendor_data_premoderation/hooks/index/scripts.post.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1afc010a7_72949733 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_data_premoderation/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('text_vendor_profile_changes_notice'));
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
(function(_, $) {
	_.tr({
		text_vendor_profile_changes_notice: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("text_vendor_profile_changes_notice", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
	});
	_.vendor_pre = '<?php echo strtr((string)$_smarty_tpl->getValue('vendor_pre'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
';
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/vendor_data_premoderation/func.js"), $_smarty_tpl);?>


<?php }
}
