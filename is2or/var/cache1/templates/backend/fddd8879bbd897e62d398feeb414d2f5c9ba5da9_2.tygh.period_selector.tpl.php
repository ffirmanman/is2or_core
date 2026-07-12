<?php
/* Smarty version 4.3.0, created on 2025-05-22 19:33:29
  from '/srv/projects/is2or.com/public_html/design/backend/templates/common/period_selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_682fde797ad266_31594515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fddd8879bbd897e62d398feeb414d2f5c9ba5da9' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/common/period_selector.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/calendar.tpl' => 2,
  ),
),false)) {
function content_682fde797ad266_31594515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('period','all','this_day','this_week','this_month','this_year','yesterday','previous_week','previous_month','previous_year','last_24hours','last_n_days','last_n_days','custom','select_dates','period_selector_from','period_selector_to'));
$_smarty_tpl->_assignInScope('id_prefix', uniqid(''));
$_smarty_tpl->_assignInScope('nowrap', (($tmp = $_smarty_tpl->tpl_vars['nowrap']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('form_inline', (($tmp = $_smarty_tpl->tpl_vars['form_inline']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('full_width', (($tmp = $_smarty_tpl->tpl_vars['full_width']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_divider', (($tmp = $_smarty_tpl->tpl_vars['show_divider']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_block', (($tmp = $_smarty_tpl->tpl_vars['is_block']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('date_meta', $_smarty_tpl->tpl_vars['full_width']->value ? "input-full" : '');?>

<?php if ($_smarty_tpl->tpl_vars['display']->value != "form") {?>
    <div <?php if ($_smarty_tpl->tpl_vars['nowrap']->value) {?>class="nowrap"<?php }?>>
        <div <?php if ($_smarty_tpl->tpl_vars['form_inline']->value) {?>class="form-inline"<?php }?>>
<?php } else { ?>
    <div class="sidebar-field">
<?php }?>
        <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
period_selects"><?php echo $_smarty_tpl->__("period");?>
:</label>
        <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
period" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
period_selects" <?php if ($_smarty_tpl->tpl_vars['full_width']->value) {?>class="input-fill"<?php }?>>
            <option value="A" <?php if ($_smarty_tpl->tpl_vars['period']->value == "A" || !$_smarty_tpl->tpl_vars['period']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("all");?>
</option>
            <optgroup label="=============">
                <option value="D" <?php if ($_smarty_tpl->tpl_vars['period']->value == "D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_day");?>
</option>
                <option value="W" <?php if ($_smarty_tpl->tpl_vars['period']->value == "W") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_week");?>
</option>
                <option value="M" <?php if ($_smarty_tpl->tpl_vars['period']->value == "M") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_month");?>
</option>
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['period']->value == "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("this_year");?>
</option>
            </optgroup>
            <optgroup label="=============">
                <option value="LD" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yesterday");?>
</option>
                <option value="LW" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_week");?>
</option>
                <option value="LM" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_month");?>
</option>
                <option value="LY" <?php if ($_smarty_tpl->tpl_vars['period']->value == "LY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("previous_year");?>
</option>
            </optgroup>
            <optgroup label="=============">
                <option value="HH" <?php if ($_smarty_tpl->tpl_vars['period']->value == "HH") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_24hours");?>
</option>
                <option value="HW" <?php if ($_smarty_tpl->tpl_vars['period']->value == "HW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>7));?>
</option>
                <option value="HM" <?php if ($_smarty_tpl->tpl_vars['period']->value == "HM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("last_n_days",array("[N]"=>30));?>
</option>
            </optgroup>
            <optgroup label="=============">
                <option value="C" <?php if ($_smarty_tpl->tpl_vars['period']->value == "C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("custom");?>
</option>
            </optgroup>
        </select>

        <?php if ($_smarty_tpl->tpl_vars['display']->value != "form") {?>
            &nbsp;&nbsp;
        <?php } else { ?>
            </div>
            <div class="sidebar-field">
        <?php }?>

        <label<?php if ($_smarty_tpl->tpl_vars['display']->value != "form") {?> class="label-html"<?php }?>><?php echo $_smarty_tpl->__("select_dates");?>
:</label>

        <?php $_smarty_tpl->_assignInScope('time_from', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."time_from");?>
        <?php $_smarty_tpl->_assignInScope('time_to', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."time_to");?>

        <?php if ($_smarty_tpl->tpl_vars['display']->value == "form") {?>
            <?php $_smarty_tpl->_assignInScope('date_meta', ((string)$_smarty_tpl->tpl_vars['date_meta']->value)." input-date");?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('date_meta', ((string)$_smarty_tpl->tpl_vars['date_meta']->value)." input-small");?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."f_date",'date_name'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."time_from",'date_val'=>$_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->tpl_vars['time_from']->value],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#".((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."period_selects').val('C');\"",'date_meta'=>$_smarty_tpl->tpl_vars['date_meta']->value,'placeholder'=>$_smarty_tpl->__("period_selector_from"),'is_block'=>$_smarty_tpl->tpl_vars['is_block']->value), 0, false);
if ($_smarty_tpl->tpl_vars['show_divider']->value) {?><span class="period-selector__divider"><?php if ($_smarty_tpl->tpl_vars['display']->value == "form") {?>-<?php } else { ?>&nbsp;&nbsp;-&nbsp;&nbsp;<?php }?></span><?php }
$_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."t_date",'date_name'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."time_to",'date_val'=>$_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->tpl_vars['time_to']->value],'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#".((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."period_selects').val('C');\"",'date_meta'=>$_smarty_tpl->tpl_vars['date_meta']->value,'placeholder'=>$_smarty_tpl->__("period_selector_to"),'is_block'=>$_smarty_tpl->tpl_vars['is_block']->value), 0, true);
?>

        <?php if ($_smarty_tpl->tpl_vars['display']->value != "form") {?>
                </div>
            </div>
        <?php } else { ?>
            </div>
        <?php }?>

<?php echo smarty_function_script(array('src'=>"js/tygh/period_selector.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
Tygh.$(document).ready(function() <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

    Tygh.$('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
period_selects').cePeriodSelector(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

        from: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
f_date',
        to: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
t_date'
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
