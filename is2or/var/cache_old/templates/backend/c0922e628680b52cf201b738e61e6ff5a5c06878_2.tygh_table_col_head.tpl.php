<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:05
  from 'tygh:common/table_col_head.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae46792e2d58_11234408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0922e628680b52cf201b738e61e6ff5a5c06878' => 
    array (
      0 => 'common/table_col_head.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae46792e2d58_11234408 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
$_smarty_tpl->assign('c_url', ($_smarty_tpl->getValue('c_url')) ? $_smarty_tpl->getValue('c_url') : $_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('config')['current_url'],"sort_by","sort_order"), false, NULL);
$_smarty_tpl->assign('rev', ($_smarty_tpl->getValue('rev')) ? $_smarty_tpl->getValue('rev') : (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents,content_top_navigation" ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('type')) {?><a class="cm-ajax th-text-overflow <?php if ($_smarty_tpl->getValue('type') === $_smarty_tpl->getValue('search')['sort_by']) {?>th-text-overflow--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search')['sort_order_rev']), ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=".((string)$_smarty_tpl->getValue('type'))."&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('rev')) {
echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
 data-ca-target-id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rev')), ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->getValue('title')) {
echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
 title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo (($tmp = $_smarty_tpl->getValue('text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('type'), [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</a><?php } elseif ($_smarty_tpl->getValue('text')) {?><span class="th-text-overflow"<?php if ($_smarty_tpl->getValue('title')) {
echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
 title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->getValue('text');?>
</span><?php }
}
}
