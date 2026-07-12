<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:37:46
  from 'tygh:common/period_selector.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea2fada1951_80431994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e806f2199be52a94cec6221e0fc2fd6483605a7b' => 
    array (
      0 => 'common/period_selector.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/calendar.tpl' => 4,
  ),
))) {
function content_69aea2fada1951_80431994 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('period','all','this_day','this_week','this_month','this_year','yesterday','previous_week','previous_month','previous_year','last_24hours','last_n_days','last_n_days','custom','select_dates','period','all','this_day','this_week','this_month','this_year','yesterday','previous_week','previous_month','previous_year','last_24hours','last_n_days','last_n_days','custom','select_dates'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="ty-period">
    <div class="ty-control-group ty-period__wrapper">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("period", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <select class="ty-period__select" name="period" id="period_selects">
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
    </div>

    <div class="ty-control-group ty-period__select-date calendar">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_dates", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"f_date",'date_name'=>"time_from",'date_val'=>$_smarty_tpl->getValue('search')['time_from'],'start_year'=>$_smarty_tpl->getValue('settings')['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#period_selects').val('C');\""), (int) 0, $_smarty_current_dir);
?>
        <span class="ty-period__dash">&#8211;</span>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"t_date",'date_name'=>"time_to",'date_val'=>$_smarty_tpl->getValue('search')['time_to'],'start_year'=>$_smarty_tpl->getValue('settings')['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#period_selects').val('C');\""), (int) 0, $_smarty_current_dir);
?>
    </div>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/period_selector.js"), $_smarty_tpl);?>

    <?php echo '<script'; ?>
>
    Tygh.$(document).ready(function()<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

        Tygh.$('#<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
period_selects').cePeriodSelector(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

            from: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
f_date',
            to: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
t_date'
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);
    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);
    <?php echo '</script'; ?>
>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/period_selector.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/period_selector.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-period">
    <div class="ty-control-group ty-period__wrapper">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("period", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <select class="ty-period__select" name="period" id="period_selects">
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
    </div>

    <div class="ty-control-group ty-period__select-date calendar">
        <label class="ty-control-group__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("select_dates", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"f_date",'date_name'=>"time_from",'date_val'=>$_smarty_tpl->getValue('search')['time_from'],'start_year'=>$_smarty_tpl->getValue('settings')['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#period_selects').val('C');\""), (int) 0, $_smarty_current_dir);
?>
        <span class="ty-period__dash">&#8211;</span>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"t_date",'date_name'=>"time_to",'date_val'=>$_smarty_tpl->getValue('search')['time_to'],'start_year'=>$_smarty_tpl->getValue('settings')['Company']['company_start_year'],'extra'=>"onchange=\"Tygh."."$"."('#period_selects').val('C');\""), (int) 0, $_smarty_current_dir);
?>
    </div>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/period_selector.js"), $_smarty_tpl);?>

    <?php echo '<script'; ?>
>
    Tygh.$(document).ready(function()<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

        Tygh.$('#<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
period_selects').cePeriodSelector(<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

            from: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
f_date',
            to: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('prefix')), ENT_QUOTES, 'UTF-8');?>
t_date'
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);
    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
);
    <?php echo '</script'; ?>
>
</div>
<?php }
}
}
