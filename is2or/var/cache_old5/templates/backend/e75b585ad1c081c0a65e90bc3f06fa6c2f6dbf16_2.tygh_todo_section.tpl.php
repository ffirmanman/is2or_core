<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:39
  from 'tygh:views/index/components/todo_section/todo_section.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ee36c2594_29675808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e75b585ad1c081c0a65e90bc3f06fa6c2f6dbf16' => 
    array (
      0 => 'views/index/components/todo_section/todo_section.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/index/components/todo_section/todo_item.tpl' => 1,
  ),
))) {
function content_6a133ee36c2594_29675808 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/index/components/todo_section';
$_smarty_tpl->assign('show_todo_section', (($tmp = $_smarty_tpl->getValue('show_todo_section') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('show_todo_section') && $_smarty_tpl->getValue('todo_data')) {?><section class="todo-section"><div class="todo-section__content"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('todo_data'), 'todo_section');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('todo_section')->value) {
$foreach2DoElse = false;
?><div class="todo-section__column todo-section__column--<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('todo_section')['section'], 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('todo_section')['id']), ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('todo_section')['content'], 'todo_item');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('todo_item')->value) {
$foreach3DoElse = false;
$_smarty_tpl->renderSubTemplate("tygh:views/index/components/todo_section/todo_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('todo_item'=>$_smarty_tpl->getValue('todo_item')), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?><!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('todo_section')['id']), ENT_QUOTES, 'UTF-8');?>
--></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div></section><?php }
}
}
