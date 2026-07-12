<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:23
  from 'tygh:addons/csc_live_search/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed301d963_13229331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20d10cd6a402575d4ee575d3009bb5042d9ae8dd' => 
    array (
      0 => 'addons/csc_live_search/hooks/index/scripts.post.tpl',
      1 => 1767831043,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed301d963_13229331 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/csc_live_search/hooks/index';
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/csc_live_search/synonyms.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/csc_live_search/backend.js"), $_smarty_tpl);?>

<?php }
}
