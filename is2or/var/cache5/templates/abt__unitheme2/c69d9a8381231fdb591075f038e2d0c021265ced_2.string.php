<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:11:18
  from 'c69d9a8381231fdb591075f038e2d0c021265ced' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835b9f680ecf6_07670254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835b9f680ecf6_07670254 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  document.addEventListener('DOMContentLoaded', function () {
    const dropdown = document.getElementById('sw_dropdown_174');

    if (dropdown) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 0) {
                dropdown.classList.add('hidden'); // Скрыть элемент
            } else {
                dropdown.classList.remove('hidden'); // Показать элемент
            }
        });
    }
});

<?php echo '</script'; ?>
>

<?php }
}
