<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:13
  from 'tygh:addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad946114ff48_69763123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99e089ec011dfcfae88820f35b98cc1287d66fe1' => 
    array (
      0 => 'addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl',
      1 => 1767831042,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad946114ff48_69763123 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__deal_of_the_day/hooks/index';
\Tygh\Languages\Helper::preloadLangVars(array('ab__dotd.error.use_schedule_is_on'));
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
Tygh.tr({
'ab__dotd.error.use_schedule_is_on' : '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("ab__dotd.error.use_schedule_is_on", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
'ab__dotd.schedule.table_header': '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")('ab__dotd.schedule.table_header', [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
