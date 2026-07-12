<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:32
  from 'tygh:addons/ab__seo_product_tabs/hooks/index/scripts.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94743b6a24_86665723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcc28d819c524f5915d15ae8c7d5f589b28c660b' => 
    array (
      0 => 'addons/ab__seo_product_tabs/hooks/index/scripts.post.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad94743b6a24_86665723 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_product_tabs/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['add_tabs_fixed_panel'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES') && $_smarty_tpl->getValue('settings')['Appearance']['product_details_in_tab'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::NO') && $_smarty_tpl->getValue('runtime')['controller'] === 'products' && $_smarty_tpl->getValue('runtime')['mode'] === 'view') {
echo '<script'; ?>
>(function (_, $) {const extend_obj = {ab__spt: {params: {top_offset: 0,theme_name: "<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('runtime')['layout']['theme_name']), ENT_QUOTES, 'UTF-8');?>
",product_id: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
}}};if (_?.ab__spt?.functions) {extend_obj.ab__spt.functions = _.ab__spt.functions;}$.extend(_, extend_obj);})(Tygh, Tygh.$);<?php echo '</script'; ?>
><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__seo_product_tabs/func.js"), $_smarty_tpl);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__seo_product_tabs/hooks/index/scripts.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__seo_product_tabs/hooks/index/scripts.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['ab__seo_product_tabs']['add_tabs_fixed_panel'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES') && $_smarty_tpl->getValue('settings')['Appearance']['product_details_in_tab'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::NO') && $_smarty_tpl->getValue('runtime')['controller'] === 'products' && $_smarty_tpl->getValue('runtime')['mode'] === 'view') {
echo '<script'; ?>
>(function (_, $) {const extend_obj = {ab__spt: {params: {top_offset: 0,theme_name: "<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('runtime')['layout']['theme_name']), ENT_QUOTES, 'UTF-8');?>
",product_id: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
}}};if (_?.ab__spt?.functions) {extend_obj.ab__spt.functions = _.ab__spt.functions;}$.extend(_, extend_obj);})(Tygh, Tygh.$);<?php echo '</script'; ?>
><?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__seo_product_tabs/func.js"), $_smarty_tpl);
}
}
}
}
