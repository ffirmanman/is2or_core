<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:39
  from 'tygh:views/index/components/analytics_section/analytics_section.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ee3713ff6_14473090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f1f897d940d9ea39c655dcc899df11529d6da0c' => 
    array (
      0 => 'views/index/components/analytics_section/analytics_section.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/index/components/analytics_section/analytics_card/analytics_card.tpl' => 1,
  ),
))) {
function content_6a133ee3713ff6_14473090 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/index/components/analytics_section';
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_section_title','no_data'));
$_smarty_tpl->assign('show_analytics_section', (($tmp = $_smarty_tpl->getValue('show_analytics_section') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('show_analytics_section')) {?><section class="analytics-section"><h2 class="analytics-section__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("dashboard.analytics_section_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h2><div class="analytics-section__content"><?php if ($_smarty_tpl->getValue('dashboard_blocks')) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('dashboard_blocks'), 'blocks', false, 'section_id');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('section_id')->value => $_smarty_tpl->getVariable('blocks')->value) {
$foreach4DoElse = false;
?><div class="analytics-section__column analytics-section__column--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('section_id')), ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('blocks'), 'block');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('block')->value) {
$foreach5DoElse = false;
$_smarty_tpl->renderSubTemplate("tygh:views/index/components/analytics_section/analytics_card/analytics_card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('analytics_card'=>$_smarty_tpl->getValue('block')), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?></div><?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
} else { ?><div class="analytics-section__no-items no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_data", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div><?php }?></div></section><?php }
}
}
