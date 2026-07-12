<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:50:11
  from 'tygh:/var/www/is2or/design/backend/templates/addons/ab__image_previewers/overrides/common/previewer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5523c9ee05_39494199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cecea36478bf0648d68ecd1efdd838b791d5047' => 
    array (
      0 => '/var/www/is2or/design/backend/templates/addons/ab__image_previewers/overrides/common/previewer.tpl',
      1 => 1767831038,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb5523c9ee05_39494199 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/ab__image_previewers/overrides/common';
?><!--override with ab__image_previewers-->
<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_ab__ip_is_ab_previewer')()) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/addons/ab__image_previewers/previewers/".((string)$_smarty_tpl->getValue('settings')['Appearance']['default_image_previewer']).".previewer.js"), $_smarty_tpl);?>

<?php } else {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->getValue('settings')['Appearance']['default_image_previewer']).".previewer.js"), $_smarty_tpl);?>

<?php }
}
}
