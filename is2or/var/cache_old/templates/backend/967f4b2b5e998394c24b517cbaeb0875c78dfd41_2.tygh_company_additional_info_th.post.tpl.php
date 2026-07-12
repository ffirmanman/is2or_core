<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:38:15
  from 'tygh:addons/vendor_plans/hooks/companies/company_additional_info_th.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae86f79e7509_28352946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '967f4b2b5e998394c24b517cbaeb0875c78dfd41' => 
    array (
      0 => 'addons/vendor_plans/hooks/companies/company_additional_info_th.post.tpl',
      1 => 1767831036,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae86f79e7509_28352946 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_plans/hooks/companies';
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.plan_short'));
?>
<a class="cm-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')(((string)$_smarty_tpl->getValue('c_url'))."&sort_by=plan&sort_order=".((string)$_smarty_tpl->getValue('search')['sort_order_rev']))), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_plans.plan_short", [], $_smarty_tpl->getSmarty()->getLanguage());
if ($_smarty_tpl->getValue('search')['sort_by'] == "plan") {
echo $_smarty_tpl->getValue('c_icon');
} else {
echo $_smarty_tpl->getValue('c_dummy');
}?></a><?php }
}
