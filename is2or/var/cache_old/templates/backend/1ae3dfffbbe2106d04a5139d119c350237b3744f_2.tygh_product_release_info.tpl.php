<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:12
  from 'tygh:common/product_release_info.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9460ac9033_34559600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ae3dfffbbe2106d04a5139d119c350237b3744f' => 
    array (
      0 => 'common/product_release_info.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ad9460ac9033_34559600 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
$_smarty_tpl->assign('env_provider', (($tmp = $_smarty_tpl->getValue('env_provider') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('app')["product.env"] ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('is_name_shown', (($tmp = $_smarty_tpl->getValue('is_product_shown') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('is_version_shown', (($tmp = $_smarty_tpl->getValue('is_version_shown') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('is_time_shown', (($tmp = $_smarty_tpl->getValue('is_time_shown') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('release_time', $_smarty_tpl->getValue('env_provider')->getReleaseTime(), false, NULL);
$_tmp_array = $_smarty_tpl->getValue('release_time') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['params']["[month]"] = $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('release_time')['params']["[month]"], [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->assign('release_time', $_tmp_array, false, NULL);?><span class="product-release"><?php if ($_smarty_tpl->getValue('is_name_shown')) {?><span class="product-release__name"><?php echo $_smarty_tpl->getValue('env_provider')->getProductName();?>
</span><?php }
if ($_smarty_tpl->getValue('is_version_shown')) {?><span class="product-release__version">v<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('env_provider')->getProductVersion()), ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->getValue('is_time_shown')) {?><span class="product-release__time">(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('release_time')['message'], $_smarty_tpl->getValue('release_time')['params'], $_smarty_tpl->getSmarty()->getLanguage());?>
)</span><?php }?></span><?php }
}
