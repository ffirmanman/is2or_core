<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:38:15
  from 'tygh:addons/vendor_rating/hooks/companies/list_extra_data_td.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae86f7bc13b9_17996362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '743284de7cf451f01d7ce26fa1f0ca60ed16589c' => 
    array (
      0 => 'addons/vendor_rating/hooks/companies/list_extra_data_td.post.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae86f7bc13b9_17996362 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_rating/hooks/companies';
?><span class="text-small-adaptive <?php if ($_smarty_tpl->getValue('company')['absolute_vendor_rating'] === "0") {?>muted<?php }?>"><?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('company')['absolute_vendor_rating'] ?? null)===null||$tmp==='' ? "–" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
</span><?php }
}
