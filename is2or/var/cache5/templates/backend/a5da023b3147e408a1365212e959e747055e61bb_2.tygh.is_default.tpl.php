<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:36:54
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/storefronts/components/is_default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bff60d43d6_12659275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5da023b3147e408a1365212e959e747055e61bb' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/storefronts/components/is_default.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835bff60d43d6_12659275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('is_default_storefront'));
?>
<div class="control-group">
    <label for="is_default_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("is_default_storefront");?>

    </label>
    <div class="controls" id="is_default_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['is_forbidden_change_main_info']->value) {?>
            <input type="checkbox"
                <?php if ($_smarty_tpl->tpl_vars['is_default']->value) {?>checked<?php }?>
                disabled
            />
            <input type="hidden"
               name="storefront_data[is_default]"
               value="<?php if ($_smarty_tpl->tpl_vars['is_default']->value) {
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
}?>"
            />
        <?php } else { ?>
            <input type="hidden"
               name="storefront_data[is_default]"
               value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
            />
            <input type="checkbox"
                name="storefront_data[is_default]"
                value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['is_default']->value) {?>checked<?php }?>
            />
        <?php }?>
    </div>
</div>
<?php }
}
