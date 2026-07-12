<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:10
  from 'tygh:addons/ab__seo_product_tabs/hooks/tabs/ab__tabs.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafaaed29d2_80743507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6767e2a7003a5ac9f7074b8eddbae4d4fbf185c8' => 
    array (
      0 => 'addons/ab__seo_product_tabs/hooks/tabs/ab__tabs.pre.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/ab__seo_product_tabs/views/components/top_navigation_panel.tpl' => 2,
  ),
))) {
function content_69afafaaed29d2_80743507 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_product_tabs/hooks/tabs';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['tabs_fixed_panel_position'] === 'before_tabs') {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__seo_product_tabs/views/components/top_navigation_panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__seo_product_tabs/hooks/tabs/ab__tabs.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__seo_product_tabs/hooks/tabs/ab__tabs.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['tabs_fixed_panel_position'] === 'before_tabs') {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/ab__seo_product_tabs/views/components/top_navigation_panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
}
}
