<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:38:16
  from 'tygh:addons/vendor_plans/hooks/companies/search_form_main.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae86f80affa8_14017357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2af7beee396e7423aa58bfcb8a43368742c3db46' => 
    array (
      0 => 'addons/vendor_plans/hooks/companies/search_form_main.post.tpl',
      1 => 1767831036,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
  ),
))) {
function content_69ae86f80affa8_14017357 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/vendor_plans/hooks/companies';
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.plan'));
?>
<div class="sidebar-field">
    <label for="elm_plan"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_plans.plan", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <div class="select2-wrapper">
        <select name="plan_id" id="elm_plan" class="cm-object-selector">
            <option value=""> -- </option>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('vendor_plans'), 'plan');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('plan')->value) {
$foreach5DoElse = false;
?>
                <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('plan')['plan_id']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->getValue('plan')['plan_id'] == $_smarty_tpl->getValue('search')['plan_id']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('plan')->plan), ENT_QUOTES, 'UTF-8');?>
 (<?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('plan')->price), (int) 0, $_smarty_current_dir);
?>)</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
    </div>
</div>
<?php }
}
