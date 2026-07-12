<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:37:29
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/abt__unitheme2/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345279cf7fe3_98306445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46665c07665fb1c66454351ef74d5d3c688b6928' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/abt__unitheme2/hooks/index/scripts.post.tpl',
      1 => 1736835023,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68345279cf7fe3_98306445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.class_was_copied'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
_.tr({
'abt__ut2.class_was_copied': '<?php echo strtr((string)$_smarty_tpl->__("abt__ut2.class_was_copied"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
});
_.abt__ut2 = [];
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_admin.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_validate_youtube_id.js"),$_smarty_tpl);
}
}
