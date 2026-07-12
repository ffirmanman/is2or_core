<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:02:38
  from 'tygh:views/index/components/todo_section/todo_item.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae465eb8bbe2_14856899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26bf68ed77e1cf1aef63e9a75affe69889a21d90' => 
    array (
      0 => 'views/index/components/todo_section/todo_item.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae465eb8bbe2_14856899 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/index/components/todo_section';
if ($_smarty_tpl->getValue('todo_item')) {?>
    <?php if ($_smarty_tpl->getValue('todo_item')['action_text'] && $_smarty_tpl->getValue('todo_item')['action_url']) {?>
        <div class="todo-item todo-item--<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('todo_item')['type'], 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('todo_item')['id']), ENT_QUOTES, 'UTF-8');?>
">
            <div class="todo-item__inner todo-item__inner--<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('todo_item')['type'], 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
">
                <div class="todo-item__content"><?php echo $_smarty_tpl->getValue('todo_item')['text'];?>
</div>
                <div class="todo-item__actions">
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('todo_item')['action_url'])), ENT_QUOTES, 'UTF-8');?>
" class="btn todo-item__button <?php if ($_smarty_tpl->getValue('todo_item')['is_ajax_action']) {?>cm-ajax<?php }?>">
                        <?php echo $_smarty_tpl->getValue('todo_item')['action_text'];?>

                    </a>
                </div>
            </div>
        <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('todo_item')['id']), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php } elseif ($_smarty_tpl->getValue('todo_item')['action_url']) {?>
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('todo_item')['action_url'])), ENT_QUOTES, 'UTF-8');?>
" class="todo-item todo-item--<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('todo_item')['type'], 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
 todo-item--link" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('todo_item')['id']), ENT_QUOTES, 'UTF-8');?>
">
            <div class="todo-item__inner todo-item__inner--<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('todo_item')['type'], 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
 todo-item__inner--no-responsive">
                <div class="todo-item__content"><?php echo $_smarty_tpl->getValue('todo_item')['text'];?>
</div>
                <div class="todo-item__actions">
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-chevron-right todo-item__button-icon"), $_smarty_tpl);?>

                </div>
            </div>
        <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('todo_item')['id']), ENT_QUOTES, 'UTF-8');?>
--></a>
    <?php } else { ?>
        <div class="todo-item todo-item--<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('todo_item')['type'], 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('todo_item')['id']), ENT_QUOTES, 'UTF-8');?>
">
            <div class="todo-item__inner todo-item__inner--<?php echo htmlspecialchars((string) (mb_strtolower((string) $_smarty_tpl->getValue('todo_item')['type'], 'UTF-8')), ENT_QUOTES, 'UTF-8');?>
">
                <div class="todo-item__content"><?php echo $_smarty_tpl->getValue('todo_item')['text'];?>
</div>
            </div>
        <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('todo_item')['id']), ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
}
}
}
