<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:30:15
  from 'tygh:addons/my_changes/hooks/companies/company_data.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad96074910f2_48019255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6525cc2bf45315345478ff55d08869026c9c9990' => 
    array (
      0 => 'addons/my_changes/hooks/companies/company_data.post.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad96074910f2_48019255 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/my_changes/hooks/companies';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('no_capture') && $_REQUEST['dispatch'] == "companies.catalog") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "name_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
$_smarty_tpl->assign('capture_name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>
<div class="mc-company-address"><?php if ($_smarty_tpl->getValue('companies')[0]['city']) {?><span class="mc-company-city"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company')['city']), ENT_QUOTES, 'UTF-8');?>
,</span><?php }
if ($_smarty_tpl->getValue('companies')[0]['state']) {?><span class="mc-company-state mc-company-state__code">&nbsp;(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company')['state']), ENT_QUOTES, 'UTF-8');?>
)</span><?php }?></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/my_changes/hooks/companies/company_data.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/my_changes/hooks/companies/company_data.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('no_capture') && $_REQUEST['dispatch'] == "companies.catalog") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "name_".((string)$_smarty_tpl->getValue('obj_id')), null, null);
$_smarty_tpl->assign('capture_name', "name_".((string)$_smarty_tpl->getValue('obj_id')), false, NULL);
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('capture_name'));?>
<div class="mc-company-address"><?php if ($_smarty_tpl->getValue('companies')[0]['city']) {?><span class="mc-company-city"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company')['city']), ENT_QUOTES, 'UTF-8');?>
,</span><?php }
if ($_smarty_tpl->getValue('companies')[0]['state']) {?><span class="mc-company-state mc-company-state__code">&nbsp;(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('company')['state']), ENT_QUOTES, 'UTF-8');?>
)</span><?php }?></div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
}
