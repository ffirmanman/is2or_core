<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:02:38
  from 'tygh:views/index/components/analytics_section/analytics_card/analytics_card.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae465ebd1fa9_72017885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b52b934a696bc64c385a5fde705956781033b67e' => 
    array (
      0 => 'views/index/components/analytics_section/analytics_card/analytics_card.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_card/graph.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_card/bar_chart.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_card/resource_list.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_card/resource_list_tabs.tpl' => 1,
  ),
))) {
function content_69ae465ebd1fa9_72017885 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/index/components/analytics_section/analytics_card';
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.view'));
if ($_smarty_tpl->getValue('analytics_card')) {?><div class="analytics-card" data-ca-analytics-card="main" data-ca-analytics-card-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('analytics_card')['id']), ENT_QUOTES, 'UTF-8');?>
"id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('analytics_card')['id']), ENT_QUOTES, 'UTF-8');?>
"><div class="analytics-card__inner"><?php if ($_smarty_tpl->getValue('analytics_card')['preheader']) {?><div class="analytics-card__preheader <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->getValue('analytics_card')['is_selected_date']) {?>cm-date-range__selected-date-text<?php }?>"><?php echo $_smarty_tpl->getValue('analytics_card')['preheader'];?>
</div><?php }
if ($_smarty_tpl->getValue('analytics_card')['title'] || $_smarty_tpl->getValue('analytics_card')['title_button']) {?><div class="analytics-card__header"><?php if ($_smarty_tpl->getValue('analytics_card')['title']) {?><h3 class="analytics-card__title"><?php echo $_smarty_tpl->getValue('analytics_card')['title'];?>
</h3><?php }
if ($_smarty_tpl->getValue('analytics_card')['title_button']) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('analytics_card')['title_button']['href'])), ENT_QUOTES, 'UTF-8');?>
" class="analytics-card__title-button"><?php echo $_smarty_tpl->getValue('analytics_card')['title_button']['name'];?>
</a><?php }?></div><?php }
if ($_smarty_tpl->getValue('analytics_card')['number'] || $_smarty_tpl->getValue('analytics_card')['dynamics_number']) {?><div class="analytics-card__numbers"><?php if ($_smarty_tpl->getValue('analytics_card')['number']) {?><div class="analytics-card__number"><?php if ($_smarty_tpl->getValue('analytics_card')['use_price_for_number']) {
$_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('analytics_card')['number']), (int) 0, $_smarty_current_dir);
} else {
echo $_smarty_tpl->getValue('analytics_card')['number'];
}?></div><?php }
if ($_smarty_tpl->getValue('analytics_card')['number_dynamics']) {
$_smarty_tpl->assign('number_dynamics_text', $_smarty_tpl->getValue('analytics_card')['number_dynamics'], false, NULL);
if ($_smarty_tpl->getSmarty()->getModifierCallback('is_numeric')($_smarty_tpl->getValue('analytics_card')['number_dynamics']) && $_smarty_tpl->getValue('analytics_card')['number_dynamics'] >= 0) {
$_smarty_tpl->assign('number_dynamics_class', "analytics-card__number-dynamics--positive", false, NULL);
$_smarty_tpl->assign('number_dynamics_text', ((string)$_smarty_tpl->getValue('analytics_card')['number_dynamics'])."%", false, NULL);
} elseif ($_smarty_tpl->getSmarty()->getModifierCallback('is_numeric')($_smarty_tpl->getValue('analytics_card')['number_dynamics']) && $_smarty_tpl->getValue('analytics_card')['number_dynamics'] < 0) {
$_smarty_tpl->assign('number_dynamics_class', "analytics-card__number-dynamics--negative", false, NULL);
$_smarty_tpl->assign('number_dynamics_text', ((string)($_smarty_tpl->getSmarty()->getModifierCallback('abs')($_smarty_tpl->getValue('analytics_card')['number_dynamics'])))."%", false, NULL);
}?><div class="analytics-card__number-dynamics <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('number_dynamics_class')), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('number_dynamics_text');?>
</div><?php }?></div><?php }
if ($_smarty_tpl->getValue('analytics_card')['content'] || $_smarty_tpl->getValue('analytics_card')['content_tpl']) {?><div class="analytics-card__content"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('analytics_card')['content'], 'content_item');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('content_item')->value) {
$foreach6DoElse = false;
?><div class="analytics-card__content-item"><?php echo $_smarty_tpl->getValue('content_item');?>
</div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('analytics_card')['content_tpl'], 'content_tpl');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('content_tpl')->value) {
$foreach7DoElse = false;
?><div class="analytics-card__content-item"><?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('content_tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php }
if ($_smarty_tpl->getValue('analytics_card')['buttons']) {?><div class="analytics-card__buttons"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('analytics_card')['buttons'], 'button', false, 'button_key');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('button_key')->value => $_smarty_tpl->getVariable('button')->value) {
$foreach8DoElse = false;
$_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>(($tmp = $_smarty_tpl->getValue('button')['role'] ?? null)===null||$tmp==='' ? "action" ?? null : $tmp),'but_id'=>((string)$_smarty_tpl->getValue('analytics_card')['id'])."_".((string)((($tmp = $_smarty_tpl->getValue('button')['id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('button_key') ?? null : $tmp))),'but_text'=>(($tmp = $_smarty_tpl->getValue('button')['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("dashboard.view", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp),'but_href'=>(($tmp = $_smarty_tpl->getValue('button')['href'] ?? null)===null||$tmp==='' ? "index.index" ?? null : $tmp),'but_meta'=>"analytics-card__button ".((string)$_smarty_tpl->getValue('button')['class'])), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php }
$_smarty_tpl->renderSubTemplate("tygh:views/index/components/analytics_section/analytics_card/graph.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graph'=>$_smarty_tpl->getValue('analytics_card')['graph']), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("tygh:views/index/components/analytics_section/analytics_card/bar_chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bar_chart'=>$_smarty_tpl->getValue('analytics_card')['bar_chart']), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("tygh:views/index/components/analytics_section/analytics_card/resource_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource_list'=>$_smarty_tpl->getValue('analytics_card')['resource_list']), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("tygh:views/index/components/analytics_section/analytics_card/resource_list_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource_list_tabs'=>$_smarty_tpl->getValue('analytics_card')['resource_list_tabs']), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('analytics_card')['scripts']) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('analytics_card')['scripts'], 'script_path');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('script_path')->value) {
$foreach9DoElse = false;
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>$_smarty_tpl->getValue('script_path')), $_smarty_tpl);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}?></div><!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('analytics_card')['id']), ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
