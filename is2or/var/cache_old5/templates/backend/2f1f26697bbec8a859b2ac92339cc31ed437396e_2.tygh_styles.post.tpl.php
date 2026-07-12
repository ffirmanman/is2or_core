<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:21
  from 'tygh:addons/ab__image_previewers/hooks/index/styles.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed165dfa4_46011158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f1f26697bbec8a859b2ac92339cc31ed437396e' => 
    array (
      0 => 'addons/ab__image_previewers/hooks/index/styles.post.tpl',
      1 => 1767831038,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed165dfa4_46011158 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__image_previewers/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__image_previewers/styles.less"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"addons/ab__image_previewers/photoswipe/default-skin.css"), $_smarty_tpl);
}
}
