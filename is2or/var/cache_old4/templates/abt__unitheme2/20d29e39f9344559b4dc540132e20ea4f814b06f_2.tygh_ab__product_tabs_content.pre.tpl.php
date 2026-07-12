<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:40
  from 'tygh:addons/ab__seo_product_tabs/hooks/tabs/ab__product_tabs_content.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a00b30f65_05483288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20d29e39f9344559b4dc540132e20ea4f814b06f' => 
    array (
      0 => 'addons/ab__seo_product_tabs/hooks/tabs/ab__product_tabs_content.pre.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4a00b30f65_05483288 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/ab__seo_product_tabs/hooks/tabs';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'))) && $_smarty_tpl->getValue('tab')['ab__spt_activate_settings'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES') && $_smarty_tpl->getValue('settings')['Appearance']['product_details_in_tab'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'), null, null);?><<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['ab__spt_tab_header_tag']), ENT_QUOTES, 'UTF-8');?>
 class="tab-list-title ab-spt-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__spt_generate_tab_name')(array('tab'=>$_smarty_tpl->getValue('tab'),'product'=>$_smarty_tpl->getValue('product')));?>
</<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['ab__spt_tab_header_tag']), ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'));
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__seo_product_tabs/hooks/tabs/ab__product_tabs_content.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/ab__seo_product_tabs/hooks/tabs/ab__product_tabs_content.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'))) && $_smarty_tpl->getValue('tab')['ab__spt_activate_settings'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES') && $_smarty_tpl->getValue('settings')['Appearance']['product_details_in_tab'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')('YesNo::YES')) {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'), null, null);?><<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['ab__spt_tab_header_tag']), ENT_QUOTES, 'UTF-8');?>
 class="tab-list-title ab-spt-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__spt_generate_tab_name')(array('tab'=>$_smarty_tpl->getValue('tab'),'product'=>$_smarty_tpl->getValue('product')));?>
</<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('tab')['ab__spt_tab_header_tag']), ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, $_smarty_tpl->getValue('tab_content_capture'));
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
}
