<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:35
  from 'tygh:addons/abt__unitheme2/hooks/index/abt_ut2_html_class.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fb6c27e3_93185965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b8232e556b2672211c6545cf567e7cd5203bf23' => 
    array (
      0 => 'addons/abt__unitheme2/hooks/index/abt_ut2_html_class.post.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fb6c27e3_93185965 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['top_sticky_panel']['enable'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> sticky-top-panel<?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> sticky-bottom-panel<?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['category']['show_sticky_panel_filters_and_categories'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> sticky-fc-panel<?php }
if ((true && (true && null !== ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_sticky_panel_add_to_cart'] ?? null)))) {
if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_sticky_panel_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']] === 'top') {?> sticky-buy-panel-_top<?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_sticky_panel_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']] === 'bottom') {?> sticky-buy-panel-_bottom<?php }
}
if ($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['status'] === "A") {
if (!( !true || empty($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['add_tabs_fixed_panel'])) && $_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['add_tabs_fixed_panel'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> seo-pb-tabs-panel<?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/index/abt_ut2_html_class.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/abt__unitheme2/hooks/index/abt_ut2_html_class.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['top_sticky_panel']['enable'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> sticky-top-panel<?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['general']['sticky_panel']['enable_sticky_panel'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> sticky-bottom-panel<?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['category']['show_sticky_panel_filters_and_categories'][$_smarty_tpl->getValue('settings')['ab__device']] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> sticky-fc-panel<?php }
if ((true && (true && null !== ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_sticky_panel_add_to_cart'] ?? null)))) {
if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_sticky_panel_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']] === 'top') {?> sticky-buy-panel-_top<?php }
if ($_smarty_tpl->getValue('settings')['abt__ut2']['products']['view']['show_sticky_panel_add_to_cart'][$_smarty_tpl->getValue('settings')['ab__device']] === 'bottom') {?> sticky-buy-panel-_bottom<?php }
}
if ($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['status'] === "A") {
if (!( !true || empty($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['add_tabs_fixed_panel'])) && $_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['add_tabs_fixed_panel'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?> seo-pb-tabs-panel<?php }
}
}
}
}
