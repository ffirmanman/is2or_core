<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:13
  from 'tygh:addons/abt__unitheme2/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94611ca625_12712567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5056b11e26518992654a4a996d433212ac59a047' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/index/scripts.post.tpl',
      1 => 1767831040,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad94611ca625_12712567 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/abt__unitheme2/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.class_was_copied'));
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
'abt__ut2.class_was_copied': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.class_was_copied", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
});
_.abt__ut2 = [];
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_admin.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/abt__unitheme2/abt__ut2_validate_youtube_id.js"), $_smarty_tpl);
}
}
