<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:41:19
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/index/components/todo_section/todo_section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fe04f3d1da3_21551079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3f8f08415920cb8d2e43cae101930e9af2df071' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/index/components/todo_section/todo_section.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/index/components/todo_section/todo_item.tpl' => 1,
  ),
),false)) {
function content_682fe04f3d1da3_21551079 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('show_todo_section', (($tmp = $_smarty_tpl->tpl_vars['show_todo_section']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['show_todo_section']->value && $_smarty_tpl->tpl_vars['todo_data']->value) {?><section class="todo-section"><div class="todo-section__content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todo_data']->value, 'todo_section');
$_smarty_tpl->tpl_vars['todo_section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['todo_section']->value) {
$_smarty_tpl->tpl_vars['todo_section']->do_else = false;
?><div class="todo-section__column todo-section__column--<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['todo_section']->value['section'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['todo_section']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todo_section']->value['content'], 'todo_item');
$_smarty_tpl->tpl_vars['todo_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['todo_item']->value) {
$_smarty_tpl->tpl_vars['todo_item']->do_else = false;
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/todo_section/todo_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('todo_item'=>$_smarty_tpl->tpl_vars['todo_item']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['todo_section']->value['id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></section><?php }
}
}
