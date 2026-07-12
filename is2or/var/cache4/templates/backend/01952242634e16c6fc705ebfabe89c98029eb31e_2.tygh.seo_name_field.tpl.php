<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:25:25
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/seo/common/seo_name_field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345db5af9374_88014446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01952242634e16c6fc705ebfabe89c98029eb31e' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/seo/common/seo_name_field.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_68345db5af9374_88014446 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('seo','seo_name','seo.create_redirect'));
if (!$_smarty_tpl->tpl_vars['hide_title']->value) {
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("seo"),'target'=>"#acc_addon_seo"), 0, false);
}?>
<div id="acc_addon_seo" class="collapsed in">
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['share_dont_hide']->value) {?>cm-no-hide-input<?php }?>">
    <label class="control-label" for="elm_seo_name"><?php echo $_smarty_tpl->__("seo_name");?>
:</label>
    <div class="controls cm-seo-check-changed-block-container">
        <?php $_smarty_tpl->_assignInScope('parent_uri', fn_get_seo_parent_uri($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value,(defined('DESCR_SL') ? constant('DESCR_SL') : null)));?>

        <div class="input-prepend input-prepend--mobile-fullwidth">
            <span class="cm-field-prefix add-on"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent_uri']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span>
            <input type="text"
                   name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_name']->value, ENT_QUOTES, 'UTF-8');?>
[seo_name]"
                   id="elm_seo_name"
                   size="10"
                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_data']->value['seo_name'], ENT_QUOTES, 'UTF-8');?>
"
                   class="input-long cm-seo-check-changed"
            /><span class="cm-field-suffix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent_uri']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>

        <div class="hidden cm-seo-check-changed-block">
            <input type="hidden"
                   name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_name']->value, ENT_QUOTES, 'UTF-8');?>
[seo_create_redirect]"
                   disabled="disabled"
                   value="0"
            />
            <label class="checkbox inline"><input type="checkbox" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_name']->value, ENT_QUOTES, 'UTF-8');?>
[seo_create_redirect]" value="1" checked="checked" disabled="disabled" /><?php echo $_smarty_tpl->__("seo.create_redirect");?>
</label>
        </div>
    </div>
</div>
</div>
<?php }
}
