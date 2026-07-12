<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:02:38
  from 'tygh:views/index/components/analytics_section/analytics_card/graph.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae465ebe2640_33441451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcdf9b312c1f127e4d33cc2ed4f8de4dfb7fd3e5' => 
    array (
      0 => 'views/index/components/analytics_section/analytics_card/graph.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae465ebe2640_33441451 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/index/components/analytics_section/analytics_card';
\Tygh\Languages\Helper::preloadLangVars(array('previous_period','current_period','current_previous_period'));
if ($_smarty_tpl->getValue('graph') && $_smarty_tpl->getValue('graph')['content']) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/dashboard/graph.js"), $_smarty_tpl);?>
<div class="analytics-card-graph" data-ca-analytics-card="graph" data-ca-analytics-card-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('analytics_card')['id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('graph')['id']), ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-is-day="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('is_day')), ENT_QUOTES, 'UTF-8');?>
"data-ca-analytics-card-graph-previous-period-text="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("previous_period", [], $_smarty_tpl->getSmarty()->getLanguage()), 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"data-ca-analytics-card-graph-current-period-text="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("current_period", [], $_smarty_tpl->getSmarty()->getLanguage()), 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"data-ca-analytics-card-graph-current-previous-period-text="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("current_previous_period", array("[date]"=>"MMM d, yyyy"), $_smarty_tpl->getSmarty()->getLanguage()), 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"data-ca-analytics-card-graph-content="<?php echo htmlspecialchars((string) (json_encode($_smarty_tpl->getValue('graph')['content'])), ENT_QUOTES, 'UTF-8');?>
"><div class="analytics-card-graph__view spinner" data-ca-analytics-card="graphView"></div></div><?php }
}
}
