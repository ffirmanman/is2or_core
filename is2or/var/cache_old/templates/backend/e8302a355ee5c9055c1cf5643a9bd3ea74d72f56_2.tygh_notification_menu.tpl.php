<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:12
  from 'tygh:components/menu/notification_menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9460935d23_26733589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8302a355ee5c9055c1cf5643a9bd3ea74d72f56' => 
    array (
      0 => 'components/menu/notification_menu.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/notifications_center/opener.tpl' => 1,
  ),
))) {
function content_69ad9460935d23_26733589 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/menu';
?><!-- Notification Center -->
    <?php $_smarty_tpl->renderSubTemplate("tygh:components/notifications_center/opener.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<!-- /Notification Center --><?php }
}
