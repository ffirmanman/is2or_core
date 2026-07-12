<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:02:33
  from 'tygh:views/index/components/simple_dashboard_preloader.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae46591d0ea2_65937856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e2243ebc0d936161c396f0b93d2a4ad8536e458' => 
    array (
      0 => 'views/index/components/simple_dashboard_preloader.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae46591d0ea2_65937856 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/index/components';
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_section_title'));
ob_start();
echo mb_strlen((string) $_smarty_tpl->getSmarty()->getModifierCallback("__")("dashboard.analytics_section_title", [], $_smarty_tpl->getSmarty()->getLanguage()), 'UTF-8');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->assign('simple_dashboard_preloader', array('analytics'=>array('title_width'=>$_prefixVariable2."ch",'primary_count'=>3,'secondary_count'=>3,'tertiary_count'=>3)), false, NULL);?><div class="simple-dashboard-preloader"><section class="simple-dashboard__section"><div class="simple-dashboard-preloader__title" style="--dashboard-title-width: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('simple_dashboard_preloader')['analytics']['title_width']), ENT_QUOTES, 'UTF-8');?>
;"></div><div class="simple-dashboard-preloader__section-content"><div class="simple-dashboard-preloader__column"><?php
$__section_simple_dashboard_preloader_primary_count_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('simple_dashboard_preloader')['analytics']['primary_count']) ? count($_loop) : max(0, (int) $_loop));
$__section_simple_dashboard_preloader_primary_count_0_total = $__section_simple_dashboard_preloader_primary_count_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_primary_count'] = new \Smarty\Variable(array());
if ($__section_simple_dashboard_preloader_primary_count_0_total !== 0) {
for ($__section_simple_dashboard_preloader_primary_count_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_primary_count']->value['index'] = 0; $__section_simple_dashboard_preloader_primary_count_0_iteration <= $__section_simple_dashboard_preloader_primary_count_0_total; $__section_simple_dashboard_preloader_primary_count_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_primary_count']->value['index']++){
?><div class="simple-dashboard-preloader__block"></div><?php
}
}
?></div><div class="simple-dashboard-preloader__column"><?php
$__section_simple_dashboard_preloader_secondary_count_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('simple_dashboard_preloader')['analytics']['secondary_count']) ? count($_loop) : max(0, (int) $_loop));
$__section_simple_dashboard_preloader_secondary_count_0_total = $__section_simple_dashboard_preloader_secondary_count_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_secondary_count'] = new \Smarty\Variable(array());
if ($__section_simple_dashboard_preloader_secondary_count_0_total !== 0) {
for ($__section_simple_dashboard_preloader_secondary_count_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_secondary_count']->value['index'] = 0; $__section_simple_dashboard_preloader_secondary_count_0_iteration <= $__section_simple_dashboard_preloader_secondary_count_0_total; $__section_simple_dashboard_preloader_secondary_count_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_secondary_count']->value['index']++){
?><div class="simple-dashboard-preloader__block"></div><?php
}
}
?></div><div class="simple-dashboard-preloader__column"><?php
$__section_simple_dashboard_preloader_tertiary_count_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('simple_dashboard_preloader')['analytics']['tertiary_count']) ? count($_loop) : max(0, (int) $_loop));
$__section_simple_dashboard_preloader_tertiary_count_0_total = $__section_simple_dashboard_preloader_tertiary_count_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_tertiary_count'] = new \Smarty\Variable(array());
if ($__section_simple_dashboard_preloader_tertiary_count_0_total !== 0) {
for ($__section_simple_dashboard_preloader_tertiary_count_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_tertiary_count']->value['index'] = 0; $__section_simple_dashboard_preloader_tertiary_count_0_iteration <= $__section_simple_dashboard_preloader_tertiary_count_0_total; $__section_simple_dashboard_preloader_tertiary_count_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_tertiary_count']->value['index']++){
?><div class="simple-dashboard-preloader__block"></div><?php
}
}
?></div></div></section></div>
<?php }
}
