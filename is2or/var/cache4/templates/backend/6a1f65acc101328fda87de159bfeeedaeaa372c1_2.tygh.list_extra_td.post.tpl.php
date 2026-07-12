<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:59:02
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_td.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683457866d9356_88920515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a1f65acc101328fda87de159bfeeedaeaa372c1' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_td.post.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683457866d9356_88920515 (Smarty_Internal_Template $_smarty_tpl) {
?><td width="19%"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['absolute_vendor_rating'], ENT_QUOTES, 'UTF-8');?>
</td>
<?php }
}
