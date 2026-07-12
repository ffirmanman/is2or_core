<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:02:38
  from 'tygh:views/index/components/analytics_section/analytics_card/resource_list_tabs.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae465ec34255_09424899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fede9b580dffccf2fd809fb388b1fc60fdcfc49' => 
    array (
      0 => 'views/index/components/analytics_section/analytics_card/resource_list_tabs.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/index/components/analytics_section/analytics_card/resource_list.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
  ),
))) {
function content_69ae465ec34255_09424899 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/index/components/analytics_section/analytics_card';
if ($_smarty_tpl->getValue('resource_list_tabs') && $_smarty_tpl->getValue('resource_list_tabs')['content']) {?><div class="analytics-card-resource-list-tabs" data-ca-analytics-card="resourceList" data-ca-analytics-card-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('analytics_card')['id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('resource_list_tabs')['id']), ENT_QUOTES, 'UTF-8');?>
"><div class="analytics-card-resource-list-tabs__tabs" data-ca-analytics-card="resourceListTabs" data-ca-analytics-card-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('analytics_card')['id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('resource_list_tabs')['id']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tabsbox", null, null);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('resource_list_tabs')['content'], 'tab');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tab')->value) {
$foreach12DoElse = false;
$_tmp_array = $_smarty_tpl->getValue('resource_list_tabs') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['navigation']['tabs'][((string)$_smarty_tpl->getValue('analytics_card')['id'])."_".((string)$_smarty_tpl->getValue('resource_list_tabs')['id'])."_".((string)$_smarty_tpl->getValue('tab')['id'])] = array('title'=>$_smarty_tpl->getValue('tab')['title'],'js'=>true);
$_smarty_tpl->assign('resource_list_tabs', $_tmp_array, false, NULL);
$_tmp_array = $_smarty_tpl->getValue('tab') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['title'] = false;
$_smarty_tpl->assign('tab', $_tmp_array, false, NULL);?><div class="analytics-card-analytics-tabs__tab-content" id="content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('analytics_card')['id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('resource_list_tabs')['id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['id']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("tygh:views/index/components/analytics_section/analytics_card/resource_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource_list'=>$_smarty_tpl->getValue('tab')), (int) 0, $_smarty_current_dir);
?><!--content_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('analytics_card')['id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('resource_list_tabs')['id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['id']), ENT_QUOTES, 'UTF-8');?>
--></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->renderSubTemplate("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section'],'track'=>true,'navigation'=>$_smarty_tpl->getValue('resource_list_tabs')['navigation'],'meta_tabs'=>"analytics-card-resource-list-tabs__tabs-navigation"), (int) 0, $_smarty_current_dir);
?></div></div><?php }
}
}
