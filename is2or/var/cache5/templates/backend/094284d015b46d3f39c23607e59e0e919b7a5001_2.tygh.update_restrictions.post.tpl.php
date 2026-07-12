<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:12:54
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_debt_payout/hooks/vendor_plans/update_restrictions.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835ba56429414_94603779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '094284d015b46d3f39c23607e59e0e919b7a5001' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_debt_payout/hooks/vendor_plans/update_restrictions.post.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835ba56429414_94603779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.component.php','function'=>'smarty_block_component',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.day_or_days','vendor_debt_payout.global_individual_additional_settings','vendor_debt_payout.actions_on_suspended','vendor_debt_payout.lowest_allowed_balance','vendor_debt_payout.grace_period_to_refill_balance','vendor_debt_payout.lowest_allowed_balance_info_text'));
ob_start();
echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'] ?: '');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('lowers_allowed_balance_attributes', array("data-a-sign"=>$_prefixVariable1,"data-a-dec"=>".","data-a-sep"=>","));
if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after'] == "Y") {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['lowers_allowed_balance_attributes']) ? $_smarty_tpl->tpl_vars['lowers_allowed_balance_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-p-sign"] = "s";
$_smarty_tpl->_assignInScope('lowers_allowed_balance_attributes', $_tmp_array);
}?>

<?php ob_start();
echo $_smarty_tpl->__("vendor_debt_payout.day_or_days");
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('grace_period_to_refill_balance_attributes', array("size"=>"4","data-a-sign"=>" ".$_prefixVariable2,"data-m-dec"=>"0","data-a-sep"=>",","data-p-sign"=>"s"));?>

<?php $_smarty_tpl->_assignInScope('has_global_individual_settings_permission', ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") && $_smarty_tpl->tpl_vars['config']->value['tweaks']['allow_global_individual_settings'] && fn_check_permissions("addons","update","admin","POST") && !fn_allowed_for("ULTIMATE:FREE")));?>

<?php if ($_smarty_tpl->tpl_vars['has_global_individual_settings_permission']->value && ((isset($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['global_lowers_allowed_balance'])) || (isset($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['global_grace_period_to_refill_balance'])))) {?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"sitemap",'class'=>"flex-inline top",'assign'=>"icon_global_setting"),$_smarty_tpl);?>

    <div class="well well-small help-block">
        <?php echo $_smarty_tpl->__("vendor_debt_payout.global_individual_additional_settings",array("[addons_url]"=>fn_url("addons.update&addon=vendor_debt_payout&selected_section=settings"),"[icon]"=>$_smarty_tpl->tpl_vars['icon_global_setting']->value));?>

    </div>
<?php }?>

<?php if (!(isset($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['global_lowers_allowed_balance'])) || !(isset($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['global_grace_period_to_refill_balance']))) {?>

    <h4 class="subheader hand" data-toggle="collapse" data-target="#collapsable_addon_option_vendor_debt_payout_actions_on_suspended">
        <?php echo $_smarty_tpl->__("vendor_debt_payout.actions_on_suspended");?>

        <span class="flex-inline">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"caret-down"),$_smarty_tpl);?>

        </span>
        </h4>
    <div id="collapsable_addon_option_vendor_debt_payout_actions_on_suspended" class="in collapse">
        <fieldset>
            <?php if (!(isset($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['global_lowers_allowed_balance']))) {?>
                <div class="control-group">
                    <label class="control-label" for="elm_lowers_allowed_balance_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_debt_payout.lowest_allowed_balance");?>
:</label>
                    <div class="controls">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"vendor_debt_payout.select_lowers_allowed_balance",'value'=>(($tmp = $_smarty_tpl->tpl_vars['plan']->value['lowers_allowed_balance'] ?? null)===null||$tmp==='' ? "default" ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>$_smarty_tpl->tpl_vars['lowers_allowed_balance_attributes']->value));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"vendor_debt_payout.select_lowers_allowed_balance",'value'=>(($tmp = $_smarty_tpl->tpl_vars['plan']->value['lowers_allowed_balance'] ?? null)===null||$tmp==='' ? "default" ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>$_smarty_tpl->tpl_vars['lowers_allowed_balance_attributes']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"vendor_debt_payout.select_lowers_allowed_balance",'value'=>(($tmp = $_smarty_tpl->tpl_vars['plan']->value['lowers_allowed_balance'] ?? null)===null||$tmp==='' ? "default" ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>$_smarty_tpl->tpl_vars['lowers_allowed_balance_attributes']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                </div>
            <?php }?>
            <?php if (!(isset($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['global_grace_period_to_refill_balance']))) {?>
                <div class="control-group">
                    <label class="control-label" for="elm_lowers_allowed_balance_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_debt_payout.grace_period_to_refill_balance");?>
:</label>
                    <div class="controls">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"vendor_debt_payout.select_grace_period_to_refill_balance",'value'=>(($tmp = $_smarty_tpl->tpl_vars['plan']->value['grace_period_to_refill_balance'] ?? null)===null||$tmp==='' ? "default" ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>$_smarty_tpl->tpl_vars['grace_period_to_refill_balance_attributes']->value));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"vendor_debt_payout.select_grace_period_to_refill_balance",'value'=>(($tmp = $_smarty_tpl->tpl_vars['plan']->value['grace_period_to_refill_balance'] ?? null)===null||$tmp==='' ? "default" ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>$_smarty_tpl->tpl_vars['grace_period_to_refill_balance_attributes']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_component(array('name'=>"vendor_debt_payout.select_grace_period_to_refill_balance",'value'=>(($tmp = $_smarty_tpl->tpl_vars['plan']->value['grace_period_to_refill_balance'] ?? null)===null||$tmp==='' ? "default" ?? null : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>$_smarty_tpl->tpl_vars['grace_period_to_refill_balance_attributes']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                </div>
            <?php }?>
            <div class="well well-small"><?php echo $_smarty_tpl->__("vendor_debt_payout.lowest_allowed_balance_info_text",array("[link]"=>fn_url("addons.update&addon=vendor_debt_payout")));?>
</div>
        </fieldset>
    </div>
<?php }
}
}
