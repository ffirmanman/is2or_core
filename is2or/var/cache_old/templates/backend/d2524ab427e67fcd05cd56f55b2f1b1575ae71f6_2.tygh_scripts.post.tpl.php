<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:13
  from 'tygh:addons/ab__video_gallery/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9461180dd2_75451781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2524ab427e67fcd05cd56f55b2f1b1575ae71f6' => 
    array (
      0 => 'addons/ab__video_gallery/hooks/index/scripts.post.tpl',
      1 => 1767831039,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9461180dd2_75451781 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__video_gallery/hooks/index';
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
_.ab__vg = { };
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
