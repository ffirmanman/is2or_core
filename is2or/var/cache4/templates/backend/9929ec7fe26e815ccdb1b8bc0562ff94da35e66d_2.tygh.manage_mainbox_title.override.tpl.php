<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:59:02
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/manage_mainbox_title.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345786904986_41052310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9929ec7fe26e815ccdb1b8bc0562ff94da35e66d' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/manage_mainbox_title.override.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68345786904986_41052310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.vendors_require_approval'));
if ($_smarty_tpl->tpl_vars['_REQUEST']->value && $_smarty_tpl->tpl_vars['_REQUEST']->value['dispatch'] && $_smarty_tpl->tpl_vars['_REQUEST']->value['dispatch'] === "companies.manage" && $_smarty_tpl->tpl_vars['_REQUEST']->value['status'] && $_smarty_tpl->tpl_vars['_REQUEST']->value['status'][0] === smarty_modifier_enum("Addons\VendorDataPremoderation\PremoderationStatuses::PENDING") && $_smarty_tpl->tpl_vars['_REQUEST']->value['status'][1] === smarty_modifier_enum("Addons\VendorDataPremoderation\PremoderationStatuses::DISAPPROVED")) {?>
    <?php echo $_smarty_tpl->__("vendor_data_premoderation.vendors_require_approval");?>

<?php }
}
}
