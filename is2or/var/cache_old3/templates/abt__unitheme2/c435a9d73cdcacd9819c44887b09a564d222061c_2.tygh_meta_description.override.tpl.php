<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:21
  from 'tygh:addons/seo/hooks/index/meta_description.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb20dd8b3e5_84399351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c435a9d73cdcacd9819c44887b09a564d222061c' => 
    array (
      0 => 'addons/seo/hooks/index/meta_description.override.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb20dd8b3e5_84399351 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/seo/hooks/index';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('search') && ($_smarty_tpl->getValue('meta_description') || $_smarty_tpl->getValue('location_data')['meta_description'])) {?>
<meta name="description" content="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('meta_description'),(defined('ENT_COMPAT') ? constant('ENT_COMPAT') : null),"UTF-8") ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('location_data')['meta_description'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_seo_page_title')($_smarty_tpl->getValue('search'))), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/hooks/index/meta_description.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/seo/hooks/index/meta_description.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('search') && ($_smarty_tpl->getValue('meta_description') || $_smarty_tpl->getValue('location_data')['meta_description'])) {?>
<meta name="description" content="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('meta_description'),(defined('ENT_COMPAT') ? constant('ENT_COMPAT') : null),"UTF-8") ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('location_data')['meta_description'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_seo_page_title')($_smarty_tpl->getValue('search'))), ENT_QUOTES, 'UTF-8');?>
" />
<?php }
}
}
}
