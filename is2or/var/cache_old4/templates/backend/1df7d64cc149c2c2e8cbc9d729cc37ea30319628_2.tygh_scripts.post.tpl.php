<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:35
  from 'tygh:addons/ab__scroll_to_top/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fba92b81_26072451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1df7d64cc149c2c2e8cbc9d729cc37ea30319628' => 
    array (
      0 => 'addons/ab__scroll_to_top/hooks/index/scripts.post.tpl',
      1 => 1767831039,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fba92b81_26072451 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__scroll_to_top/hooks/index';
if ((($tmp = $_smarty_tpl->getValue('addons')['ab__scroll_to_top']['show_in_admin_panel'] ?? null)===null||$tmp==='' ? "N" ?? null : $tmp) == "Y") {
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
$.extend(_, {
ab__stt: {
settings: <?php echo json_encode($_smarty_tpl->getValue('addons')['ab__scroll_to_top']);?>
,
units: '<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('addons')['ab__scroll_to_top']['units'] ?? null)===null||$tmp==='' ? 'px' ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
',
transition: <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('intval')((($tmp = $_smarty_tpl->getValue('addons')['ab__scroll_to_top']['transition'] ?? null)===null||$tmp==='' ? 600 ?? null : $tmp))), ENT_QUOTES, 'UTF-8');?>
,
}
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__scroll_to_top/common.js"), $_smarty_tpl);?>

<?php }
}
}
