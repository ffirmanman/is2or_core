<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:54
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_rating/hooks/vendor_plans/details_tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba564e6ba8_15134437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f7bc4ea8c5a5eeb2a4005aca33575e2d7027d2c' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_rating/hooks/vendor_plans/details_tabs_content.post.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835ba564e6ba8_15134437 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_rating.manual_vendor_plan_rating'));
?>
<div id="content_rating_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden">
    <div class="control-group">
        <label for="elm_manual_rating" class="control-label">
            <?php echo $_smarty_tpl->__("vendor_rating.manual_vendor_plan_rating");?>
:
        </label>
        <div class="controls">
            <input type="text"
                   class="cm-numeric"
                   data-m-dec="0"
                   <?php if ((isset($_smarty_tpl->tpl_vars['manual_rating_criterion']->value['range']['min']))) {?>
                       data-v-min="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manual_rating_criterion']->value['range']['min'], ENT_QUOTES, 'UTF-8');?>
"
                   <?php }?>
                   <?php if ((isset($_smarty_tpl->tpl_vars['manual_rating_criterion']->value['range']['max']))) {?>
                       data-v-max="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manual_rating_criterion']->value['range']['max'], ENT_QUOTES, 'UTF-8');?>
"
                   <?php }?>
                   id="elm_manual_rating"
                   name="plan_data[manual_rating]"
                   value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['plan']->value['manual_rating'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
            />
        </div>
    </div>
<!--content_rating_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
