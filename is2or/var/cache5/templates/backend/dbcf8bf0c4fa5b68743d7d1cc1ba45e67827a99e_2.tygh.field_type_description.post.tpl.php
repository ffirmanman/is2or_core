<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:19:18
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_type_description.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bbd617d7d6_82473447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbcf8bf0c4fa5b68743d7d1cc1ba45e67827a99e' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_type_description.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835bbd617d7d6_82473447 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plan'));
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == (defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>
    <?php echo $_smarty_tpl->__("vendor_plan");?>

<?php }
}
}
