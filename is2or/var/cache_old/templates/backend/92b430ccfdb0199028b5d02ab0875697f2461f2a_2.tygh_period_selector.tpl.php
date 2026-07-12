<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:04
  from 'tygh:common/period_selector.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae4678f27166_28558557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92b430ccfdb0199028b5d02ab0875697f2461f2a' => 
    array (
      0 => 'common/period_selector.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/calendar.tpl' => 2,
  ),
))) {
function content_69ae4678f27166_28558557 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('period','all','this_day','this_week','this_month','this_year','yesterday','previous_week','previous_month','previous_year','last_24hours','last_n_days','last_n_days','custom','select_dates','period_selector_from','period_selector_to'));
$_smarty_tpl->assign('id_prefix', $_smarty_tpl->getSmarty()->getModifierCallback('uniqid')(''), false, NULL);
$_smarty_tpl->assign('nowrap', (($tmp = $_smarty_tpl->getValue('nowrap') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('form_inline', (($tmp = $_smarty_tpl->getValue('form_inline') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('full_width', (($tmp = $_smarty_tpl->getValue('full_width') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_divider', (($tmp = $_smarty_tpl->getValue('show_divider') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('is_block', (($tmp = $_smarty_tpl->getValue('is_block') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('date_meta', ($_smarty_tpl->getValue('full_width')) ? "input-full" : '', false, NULL);?>

<?php if ($_smarty_tpl->getValue('display') != "form") {?>
    <div <?php if ($_smarty_tpl->getValue('nowrap')) {?>class="nowrap"<?php }?>>
        <div <?php if ($_smarty_tpl->getValue('form_inline')) {?>class="form-inline"<?php }?>>
<?php } else { ?>
    <div class="sidebar-field">
<?php }?>
        <label for="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
period_selects"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("period", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
        <select name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
period" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
period_selects" <?php if ($_smarty_tpl->getValue('full_width')) {?>class="input-fill"<?php }?>>
            <option value="A" <?php if ($_smarty_tpl->getValue('period') == "A" || !$_smarty_tpl->getValue('period')) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("all", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
            <optgroup label="=============">
                <option value="D" <?php if ($_smarty_tpl->getValue('period') == "D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("this_day", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                <option value="W" <?php if ($_smarty_tpl->getValue('period') == "W") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("this_week", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                <option value="M" <?php if ($_smarty_tpl->getValue('period') == "M") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("this_month", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                <option value="Y" <?php if ($_smarty_tpl->getValue('period') == "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("this_year", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
            </optgroup>
            <optgroup label="=============">
                <option value="LD" <?php if ($_smarty_tpl->getValue('period') == "LD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("yesterday", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                <option value="LW" <?php if ($_smarty_tpl->getValue('period') == "LW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("previous_week", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                <option value="LM" <?php if ($_smarty_tpl->getValue('period') == "LM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("previous_month", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                <option value="LY" <?php if ($_smarty_tpl->getValue('period') == "LY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("previous_year", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
            </optgroup>
            <optgroup label="=============">
                <option value="HH" <?php if ($_smarty_tpl->getValue('period') == "HH") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("last_24hours", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                <option value="HW" <?php if ($_smarty_tpl->getValue('period') == "HW") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("last_n_days", array("[N]"=>7), $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
                <option value="HM" <?php if ($_smarty_tpl->getValue('period') == "HM") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("last_n_days", array("[N]"=>30), $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
            </optgroup>
            <optgroup label="=============">
                <option value="C" <?php if ($_smarty_tpl->getValue('period') == "C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("custom", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</option>
            </optgroup>
        </select>

        <?php if ($_smarty_tpl->getValue('display') != "form") {?>
            &nbsp;&nbsp;
        <?php } else { ?>
            </div>
            <div class="sidebar-field">
        <?php }?>

        <label<?php if ($_smarty_tpl->getValue('display') != "form") {?> class="label-html"<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_dates", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>

        <?php $_smarty_tpl->assign('time_from', ((string)$_smarty_tpl->getValue('prefix'))."time_from", false, NULL);?>
        <?php $_smarty_tpl->assign('time_to', ((string)$_smarty_tpl->getValue('prefix'))."time_to", false, NULL);?>

        <?php if ($_smarty_tpl->getValue('display') == "form") {?>
            <?php $_smarty_tpl->assign('date_meta', ((string)$_smarty_tpl->getValue('date_meta'))." input-date", false, NULL);?>
        <?php } else { ?>
            <?php $_smarty_tpl->assign('date_meta', ((string)$_smarty_tpl->getValue('date_meta'))." input-small", false, NULL);?>
        <?php }?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->getValue('id_prefix'))."f_date",'date_name'=>((string)$_smarty_tpl->getValue('prefix'))."time_from",'date_val'=>$_smarty_tpl->getValue('search')[$_smarty_tpl->getValue('time_from')],'start_year'=>$_smarty_tpl->getValue('settings')['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#".((string)$_smarty_tpl->getValue('id_prefix'))."period_selects').val('C');\"",'date_meta'=>$_smarty_tpl->getValue('date_meta'),'placeholder'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("period_selector_from", [], $_smarty_tpl->getSmarty()->getLanguage()),'is_block'=>$_smarty_tpl->getValue('is_block')), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('show_divider')) {?><span class="period-selector__divider"><?php if ($_smarty_tpl->getValue('display') == "form") {?>-<?php } else { ?>&nbsp;&nbsp;-&nbsp;&nbsp;<?php }?></span><?php }
$_smarty_tpl->renderSubTemplate("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>((string)$_smarty_tpl->getValue('id_prefix'))."t_date",'date_name'=>((string)$_smarty_tpl->getValue('prefix'))."time_to",'date_val'=>$_smarty_tpl->getValue('search')[$_smarty_tpl->getValue('time_to')],'start_year'=>$_smarty_tpl->getValue('settings')['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#".((string)$_smarty_tpl->getValue('id_prefix'))."period_selects').val('C');\"",'date_meta'=>$_smarty_tpl->getValue('date_meta'),'placeholder'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("period_selector_to", [], $_smarty_tpl->getSmarty()->getLanguage()),'is_block'=>$_smarty_tpl->getValue('is_block')), (int) 0, $_smarty_current_dir);
?>

        <?php if ($_smarty_tpl->getValue('display') != "form") {?>
                </div>
            </div>
        <?php } else { ?>
            </div>
        <?php }?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/period_selector.js"), $_smarty_tpl);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
Tygh.$(document).ready(function() <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

    Tygh.$('#<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
period_selects').cePeriodSelector(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

        from: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
f_date',
        to: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id_prefix')), ENT_QUOTES, 'UTF-8');?>
t_date'
    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);
<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
