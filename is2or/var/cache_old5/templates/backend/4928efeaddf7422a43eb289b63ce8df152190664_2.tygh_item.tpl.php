<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:views/companies/components/picker/item.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed297e7d7_25070936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4928efeaddf7422a43eb289b63ce8df152190664' => 
    array (
      0 => 'views/companies/components/picker/item.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed297e7d7_25070936 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/companies/components/picker';
?><div class="object-picker__companies-main">
    <div class="object-picker__companies-name">
        <div class="object-picker__companies-name-content"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title_pre')), ENT_QUOTES, 'UTF-8');?>
 <span>${data.name}</span> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('title_post')), ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }
}
