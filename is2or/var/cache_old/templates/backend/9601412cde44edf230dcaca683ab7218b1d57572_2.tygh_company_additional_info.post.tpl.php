<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:38:15
  from 'tygh:addons/vendor_plans/hooks/companies/company_additional_info.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae86f7b843e9_24044778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9601412cde44edf230dcaca683ab7218b1d57572' => 
    array (
      0 => 'addons/vendor_plans/hooks/companies/company_additional_info.post.tpl',
      1 => 1767831036,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae86f7b843e9_24044778 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_plans/hooks/companies';
if ($_smarty_tpl->getValue('company')['plan']) {?><small title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company_full_description')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('company')['plan'],20,"...",true)), ENT_QUOTES, 'UTF-8');?>
</small><?php }
}
}
