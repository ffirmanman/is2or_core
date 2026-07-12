<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:44:20
  from 'tygh:addons/vendor_plans/hooks/profiles/profile_fields.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb53c4ef52e8_57362265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8052b037f0d300964bece818bca285e37373dcf6' => 
    array (
      0 => 'addons/vendor_plans/hooks/profiles/profile_fields.override.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
))) {
function content_69fb53c4ef52e8_57362265 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/vendor_plans/hooks/profiles';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('field')['field_type'] == (defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>
<div class="ty-control-group ty-profile-field__item ty-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->getValue('vendor_plans')) {?> hidden<?php }?>">
    <?php if ($_smarty_tpl->getValue('pref_field_name') != $_smarty_tpl->getValue('field')['description'] || $_smarty_tpl->getValue('field')['required'] == "Y") {?>
        <label for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-profile-field"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
</label>
    <?php }?>

    <?php $_smarty_tpl->assign('default_plan', $_smarty_tpl->getValue('company_data')['plan_id'], false, NULL);?>
    <?php if (!$_smarty_tpl->getValue('default_plan')) {?>
        <?php $_smarty_tpl->assign('default_plan', $_REQUEST['plan_id'], false, NULL);?>
    <?php }?>

    <select <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-profile-field__select <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?>>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('field')['plans'], 'plan');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('plan')->value) {
$foreach12DoElse = false;
?>
            <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('plan')['plan_id']), ENT_QUOTES, 'UTF-8');?>
"<?php if ((!$_smarty_tpl->getValue('default_plan') && $_smarty_tpl->getValue('plan')['is_default']) || $_smarty_tpl->getValue('plan')['plan_id'] == $_smarty_tpl->getValue('default_plan')) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('plan')['plan']), ENT_QUOTES, 'UTF-8');?>
 (<?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('plan')['price']), (int) 0, $_smarty_current_dir);
?>)</option>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </select>
</div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_plans/hooks/profiles/profile_fields.override.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/vendor_plans/hooks/profiles/profile_fields.override.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('field')['field_type'] == (defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>
<div class="ty-control-group ty-profile-field__item ty-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['class']), ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->getValue('vendor_plans')) {?> hidden<?php }?>">
    <?php if ($_smarty_tpl->getValue('pref_field_name') != $_smarty_tpl->getValue('field')['description'] || $_smarty_tpl->getValue('field')['required'] == "Y") {?>
        <label for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-profile-field"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['description']), ENT_QUOTES, 'UTF-8');?>
</label>
    <?php }?>

    <?php $_smarty_tpl->assign('default_plan', $_smarty_tpl->getValue('company_data')['plan_id'], false, NULL);?>
    <?php if (!$_smarty_tpl->getValue('default_plan')) {?>
        <?php $_smarty_tpl->assign('default_plan', $_REQUEST['plan_id'], false, NULL);?>
    <?php }?>

    <select <?php if ($_smarty_tpl->getValue('field')['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['autocomplete_type']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('field')['field_id']), ENT_QUOTES, 'UTF-8');?>
" class="ty-profile-field__select <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('_class')), ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_name')), ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_id')), ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->getValue('skip_field')) {
echo $_smarty_tpl->getValue('disabled_param');
}?>>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('field')['plans'], 'plan');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('plan')->value) {
$foreach13DoElse = false;
?>
            <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('plan')['plan_id']), ENT_QUOTES, 'UTF-8');?>
"<?php if ((!$_smarty_tpl->getValue('default_plan') && $_smarty_tpl->getValue('plan')['is_default']) || $_smarty_tpl->getValue('plan')['plan_id'] == $_smarty_tpl->getValue('default_plan')) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('plan')['plan']), ENT_QUOTES, 'UTF-8');?>
 (<?php $_smarty_tpl->renderSubTemplate("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->getValue('plan')['price']), (int) 0, $_smarty_current_dir);
?>)</option>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </select>
</div>
<?php }
}
}
}
