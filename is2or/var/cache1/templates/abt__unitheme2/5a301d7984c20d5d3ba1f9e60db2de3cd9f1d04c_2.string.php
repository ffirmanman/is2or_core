<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:29:16
  from '5a301d7984c20d5d3ba1f9e60db2de3cd9f1d04c' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fdd7cd88352_24431557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fdd7cd88352_24431557 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  document.addEventListener('DOMContentLoaded', function () {
    const dropdown = document.getElementById('sw_dropdown_772');

    if (dropdown) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 0) {
                dropdown.classList.add('hidden'); 
            } else {
                dropdown.classList.remove('hidden'); 
            }
        });
    }
});

<?php echo '</script'; ?>
><?php }
}
