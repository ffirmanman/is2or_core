<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:19:28
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_types.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bbe09daa12_88482900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bbec40adc35a4d962c7df6823da0fcdd4f4f924' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_types.post.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835bbe09daa12_88482900 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plan'));
if ($_smarty_tpl->tpl_vars['profile_type']->value == smarty_modifier_enum("ProfileTypes::CODE_SELLER")) {?>
    <option value="<?php echo htmlspecialchars((string) (defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == (defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("vendor_plan");?>
</option>
<?php }
}
}
