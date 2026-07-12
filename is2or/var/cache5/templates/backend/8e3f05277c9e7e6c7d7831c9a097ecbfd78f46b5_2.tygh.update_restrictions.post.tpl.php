<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:54
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__product_recommendations/hooks/vendor_plans/update_restrictions.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba56418212_72862384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e3f05277c9e7e6c7d7831c9a097ecbfd78f46b5' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/ab__product_recommendations/hooks/vendor_plans/update_restrictions.post.tpl',
      1 => 1741957739,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835ba56418212_72862384 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('ab__pr.ab__pr_allow_recommendations','ab__pr.ab__pr_allow_recommendations.tooltip'));
?>
<div class="control-group">
<label class="control-label" for="elm_ab__pr_allow_recommendations_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ab__pr.ab__pr_allow_recommendations");?>
:</label>
<div class="controls">
<input type="hidden" name="plan_data[ab__pr_allow_recommendations]" value="0" />
<input type="checkbox" id="elm_ab__pr_allow_recommendations_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="plan_data[ab__pr_allow_recommendations]" size="10" value="1"<?php if ($_smarty_tpl->tpl_vars['plan']->value['ab__pr_allow_recommendations']) {?> checked="checked"<?php }?> />
<p class="muted description"><?php echo $_smarty_tpl->__("ab__pr.ab__pr_allow_recommendations.tooltip");?>
</p>
</div>
</div>
<?php }
}
