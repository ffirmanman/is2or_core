<?php
/* Smarty version 5.4.3, created on 2026-03-09 13:37:46
  from 'tygh:common/calendar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aea2fadf1537_31629356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7b5d192f7a65ee7a2f38b4fe1977eeb0771a8d1' => 
    array (
      0 => 'common/calendar.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aea2fadf1537_31629356 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('calendar','weekday_abr_0','weekday_abr_1','weekday_abr_2','weekday_abr_3','weekday_abr_4','weekday_abr_5','weekday_abr_6','month_name_abr_1','month_name_abr_2','month_name_abr_3','month_name_abr_4','month_name_abr_5','month_name_abr_6','month_name_abr_7','month_name_abr_8','month_name_abr_9','month_name_abr_10','month_name_abr_11','month_name_abr_12','calendar','weekday_abr_0','weekday_abr_1','weekday_abr_2','weekday_abr_3','weekday_abr_4','weekday_abr_5','weekday_abr_6','month_name_abr_1','month_name_abr_2','month_name_abr_3','month_name_abr_4','month_name_abr_5','month_name_abr_6','month_name_abr_7','month_name_abr_8','month_name_abr_9','month_name_abr_10','month_name_abr_11','month_name_abr_12'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('date_format', ($_smarty_tpl->getValue('settings')['Appearance']['calendar_date_format'] === "month_first") ? "%m/%d/%Y" : "%d/%m/%Y", false, NULL);
$_smarty_tpl->assign('current_year', $_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),"%Y"), false, NULL);?>

<?php $_smarty_tpl->assign('is_changeable_range', (($tmp = $_smarty_tpl->getValue('is_changeable_range') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php $_smarty_tpl->assign('start_range', ($_smarty_tpl->getValue('is_changeable_range')) ? "c-100" : "-100", false, NULL);
$_smarty_tpl->assign('end_range', ($_smarty_tpl->getValue('is_changeable_range')) ? "c+10" : $_smarty_tpl->getValue('current_year'), false, NULL);?>

<?php $_smarty_tpl->assign('start_year_range', (($tmp = $_smarty_tpl->getValue('start_year_range') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('start_range') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('end_year_range', (($tmp = $_smarty_tpl->getValue('end_year_range') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('end_range') ?? null : $tmp), false, NULL);?>

<div class="ty-calendar__block">
    <input type="text" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('date_id')), ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('date_name')), ENT_QUOTES, 'UTF-8');?>
" class="ty-calendar__input<?php if ($_smarty_tpl->getValue('date_meta')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('date_meta')), ENT_QUOTES, 'UTF-8');
}?> cm-calendar" value="<?php if ($_smarty_tpl->getValue('date_val')) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('date_val'),((string)$_smarty_tpl->getValue('date_format')))), ENT_QUOTES, 'UTF-8');
}?>" <?php echo $_smarty_tpl->getValue('extra');?>
 size="10" autocomplete="disabled" />
    <a class="cm-external-focus ty-calendar__link" data-ca-external-focus-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('date_id')), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-calendar ty-calendar__button",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("calendar", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>

    </a>
        <input type="text" hidden disabled name="fake_mail" aria-hidden="true">
</div>

<?php echo '<script'; ?>
>
(function(_, $) <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

    $.ceEvent('on', 'ce.commoninit', function(context) {

        $('#<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('date_id')), ENT_QUOTES, 'UTF-8');?>
').datepicker({
            changeMonth: true,
            duration: 'fast',
            changeYear: true,
            numberOfMonths: 1,
            selectOtherMonths: true,
            showOtherMonths: true,

            firstDay: <?php if ($_smarty_tpl->getValue('settings')['Appearance']['calendar_week_format'] == "sunday_first") {?>0<?php } else { ?>1<?php }?>,
            dayNamesMin: ['<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_0", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_1", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_2", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_3", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_4", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_5", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_6", [], $_smarty_tpl->getSmarty()->getLanguage());?>
'],
            monthNamesShort: ['<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_1", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_2", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_3", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_4", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_5", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_6", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_7", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_8", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_9", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_10", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_11", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_12", [], $_smarty_tpl->getSmarty()->getLanguage());?>
'],
            yearRange: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('start_year_range')), ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('end_year_range')), ENT_QUOTES, 'UTF-8');?>
',
            dateFormat: '<?php if ($_smarty_tpl->getValue('settings')['Appearance']['calendar_date_format'] == "month_first") {?>mm/dd/yy<?php } else { ?>dd/mm/yy<?php }?>'
        });
    });
<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/calendar.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"common/calendar.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('date_format', ($_smarty_tpl->getValue('settings')['Appearance']['calendar_date_format'] === "month_first") ? "%m/%d/%Y" : "%d/%m/%Y", false, NULL);
$_smarty_tpl->assign('current_year', $_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),"%Y"), false, NULL);?>

<?php $_smarty_tpl->assign('is_changeable_range', (($tmp = $_smarty_tpl->getValue('is_changeable_range') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>

<?php $_smarty_tpl->assign('start_range', ($_smarty_tpl->getValue('is_changeable_range')) ? "c-100" : "-100", false, NULL);
$_smarty_tpl->assign('end_range', ($_smarty_tpl->getValue('is_changeable_range')) ? "c+10" : $_smarty_tpl->getValue('current_year'), false, NULL);?>

<?php $_smarty_tpl->assign('start_year_range', (($tmp = $_smarty_tpl->getValue('start_year_range') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('start_range') ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('end_year_range', (($tmp = $_smarty_tpl->getValue('end_year_range') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('end_range') ?? null : $tmp), false, NULL);?>

<div class="ty-calendar__block">
    <input type="text" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('date_id')), ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('date_name')), ENT_QUOTES, 'UTF-8');?>
" class="ty-calendar__input<?php if ($_smarty_tpl->getValue('date_meta')) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('date_meta')), ENT_QUOTES, 'UTF-8');
}?> cm-calendar" value="<?php if ($_smarty_tpl->getValue('date_val')) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('date_val'),((string)$_smarty_tpl->getValue('date_format')))), ENT_QUOTES, 'UTF-8');
}?>" <?php echo $_smarty_tpl->getValue('extra');?>
 size="10" autocomplete="disabled" />
    <a class="cm-external-focus ty-calendar__link" data-ca-external-focus-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('date_id')), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"ty-icon-calendar ty-calendar__button",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("calendar", [], $_smarty_tpl->getSmarty()->getLanguage())), $_smarty_tpl);?>

    </a>
        <input type="text" hidden disabled name="fake_mail" aria-hidden="true">
</div>

<?php echo '<script'; ?>
>
(function(_, $) <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ldelim')), ENT_QUOTES, 'UTF-8');?>

    $.ceEvent('on', 'ce.commoninit', function(context) {

        $('#<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('date_id')), ENT_QUOTES, 'UTF-8');?>
').datepicker({
            changeMonth: true,
            duration: 'fast',
            changeYear: true,
            numberOfMonths: 1,
            selectOtherMonths: true,
            showOtherMonths: true,

            firstDay: <?php if ($_smarty_tpl->getValue('settings')['Appearance']['calendar_week_format'] == "sunday_first") {?>0<?php } else { ?>1<?php }?>,
            dayNamesMin: ['<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_0", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_1", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_2", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_3", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_4", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_5", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_6", [], $_smarty_tpl->getSmarty()->getLanguage());?>
'],
            monthNamesShort: ['<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_1", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_2", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_3", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_4", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_5", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_6", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_7", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_8", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_9", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_10", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_11", [], $_smarty_tpl->getSmarty()->getLanguage());?>
', '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_12", [], $_smarty_tpl->getSmarty()->getLanguage());?>
'],
            yearRange: '<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('start_year_range')), ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('end_year_range')), ENT_QUOTES, 'UTF-8');?>
',
            dateFormat: '<?php if ($_smarty_tpl->getValue('settings')['Appearance']['calendar_date_format'] == "month_first") {?>mm/dd/yy<?php } else { ?>dd/mm/yy<?php }?>'
        });
    });
<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
}
}
