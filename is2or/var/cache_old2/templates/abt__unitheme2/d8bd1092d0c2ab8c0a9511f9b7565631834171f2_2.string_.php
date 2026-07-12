<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:09
  from 'string:<script>
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

</script>' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa91b0386_59768237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa91b0386_59768237 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '.';
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
