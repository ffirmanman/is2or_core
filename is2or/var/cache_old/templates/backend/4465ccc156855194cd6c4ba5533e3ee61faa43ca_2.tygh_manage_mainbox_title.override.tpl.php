<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:38:16
  from 'tygh:addons/vendor_data_premoderation/hooks/companies/manage_mainbox_title.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae86f810edb3_20499652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4465ccc156855194cd6c4ba5533e3ee61faa43ca' => 
    array (
      0 => 'addons/vendor_data_premoderation/hooks/companies/manage_mainbox_title.override.tpl',
      1 => 1767831041,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae86f810edb3_20499652 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_data_premoderation/hooks/companies';
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.vendors_require_approval'));
if ($_smarty_tpl->getValue('_REQUEST') && $_smarty_tpl->getValue('_REQUEST')['dispatch'] && $_smarty_tpl->getValue('_REQUEST')['dispatch'] === "companies.manage" && $_smarty_tpl->getValue('_REQUEST')['status'] && $_smarty_tpl->getValue('_REQUEST')['status'][0] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\VendorDataPremoderation\PremoderationStatuses::PENDING") && $_smarty_tpl->getValue('_REQUEST')['status'][1] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\VendorDataPremoderation\PremoderationStatuses::DISAPPROVED")) {?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_data_premoderation.vendors_require_approval", [], $_smarty_tpl->getSmarty()->getLanguage());?>

<?php }
}
}
