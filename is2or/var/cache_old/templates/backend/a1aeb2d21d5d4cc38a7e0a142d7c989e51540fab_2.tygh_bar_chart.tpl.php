<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:02:38
  from 'tygh:views/index/components/analytics_section/analytics_card/bar_chart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae465ec01ee6_93867642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1aeb2d21d5d4cc38a7e0a142d7c989e51540fab' => 
    array (
      0 => 'views/index/components/analytics_section/analytics_card/bar_chart.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
))) {
function content_69ae465ec01ee6_93867642 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/index/components/analytics_section/analytics_card';
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.unlimited'));
if ($_smarty_tpl->getValue('bar_chart') && $_smarty_tpl->getValue('bar_chart')['content']) {?><div class="analytics-card-bar-chart" data-ca-analytics-card="barChart" data-ca-analytics-card-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('analytics_card')['id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bar_chart')['id']), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->getValue('bar_chart')['title']) {?><div class="analytics-card-bar-chart__title"><?php echo $_smarty_tpl->getValue('bar_chart')['title'];?>
</div><?php }?><div class="analytics-card-bar-chart__content"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('bar_chart')['content'], 'item');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach10DoElse = false;
if ($_smarty_tpl->getValue('item')['ratio']) {
$_smarty_tpl->assign('ratio', $_smarty_tpl->getValue('item')['ratio'], false, NULL);
} elseif ($_smarty_tpl->getValue('item')['total']) {
$_smarty_tpl->assign('ratio', $_smarty_tpl->getValue('item')['value']/$_smarty_tpl->getValue('item')['total']*100, false, NULL);
} else {
$_smarty_tpl->assign('ratio', "0.00", false, NULL);
}
if ($_smarty_tpl->getValue('item')['value'] && $_smarty_tpl->getValue('item')['is_price']) {
ob_start();
$_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('item')['value']), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('item_value_text', ob_get_clean(), false, 0);
} else {
$_smarty_tpl->assign('item_value_text', $_smarty_tpl->getValue('item')['value'], false, NULL);
}
if ($_smarty_tpl->getValue('item')['total'] && $_smarty_tpl->getValue('item')['is_price']) {
ob_start();
$_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('item')['total']), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('item_total_text', ob_get_clean(), false, 0);
} elseif ($_smarty_tpl->getValue('item')['total']) {
$_smarty_tpl->assign('item_total_text', $_smarty_tpl->getValue('item')['total'], false, NULL);
} else {
$_smarty_tpl->assign('item_total_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("dashboard.analytics_card.unlimited", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}
$_smarty_tpl->assign('href_tag', ($_smarty_tpl->getValue('item')['href']) ? "a" : "div", false, NULL);
$_smarty_tpl->assign('href_attr', ($_smarty_tpl->getValue('item')['href']) ? "href=".((string)($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('item')['href']))) : '', false, NULL);?><div class="analytics-card-bar-chart__item" data-ca-analytics-card-bar-chart-item-id="<?php echo $_smarty_tpl->getValue('analytics_card')['id'];?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('bar_chart')['id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['id']), ENT_QUOTES, 'UTF-8');?>
"><div class="analytics-card-bar-chart__item-info"><?php if ($_smarty_tpl->getValue('item')['name']) {?><<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('href_tag')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('href_attr')), ENT_QUOTES, 'UTF-8');?>
 class="analytics-card-bar-chart__item-name"><?php echo $_smarty_tpl->getValue('item')['name'];?>
</<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('href_tag')), ENT_QUOTES, 'UTF-8');?>
><?php }?><div class="analytics-card-bar-chart__item-values"><<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('href_tag')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('href_attr')), ENT_QUOTES, 'UTF-8');?>
 class="analytics-card-bar-chart__item-value"><?php echo $_smarty_tpl->getValue('item_value_text');?>
</<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('href_tag')), ENT_QUOTES, 'UTF-8');?>
><span class="analytics-card-bar-chart__item-total"><?php echo $_smarty_tpl->getValue('item_total_text');?>
</span></div></div><<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('href_tag')), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('href_attr')), ENT_QUOTES, 'UTF-8');?>
 class="analytics-card-bar-chart__item-bar-wrapper"><div class="progress analytics-card-bar-chart__item-progress"><div class="bar analytics-card-bar-chart__item-bar<?php if ($_smarty_tpl->getValue('item')['type'] === "primary") {?> analytics-card-bar-chart__item-bar--primary<?php }
if ($_smarty_tpl->getValue('item')['total'] && $_smarty_tpl->getValue('item')['value'] > $_smarty_tpl->getValue('item')['total']) {?> analytics-card-bar-chart__item-bar--danger<?php }?>"<?php if ($_smarty_tpl->getValue('ratio') > 0) {?> style="width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ratio')), ENT_QUOTES, 'UTF-8');?>
%;"<?php }?>></div></div></<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('href_tag')), ENT_QUOTES, 'UTF-8');?>
></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div></div><?php }
}
}
