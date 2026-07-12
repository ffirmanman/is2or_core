<?php
/* Smarty version 5.4.3, created on 2026-03-09 07:03:05
  from 'tygh:common/calendar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae4679019b70_21879792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '609b08783ef2f4e3659658cd3dcb338a2b7f2310' => 
    array (
      0 => 'common/calendar.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae4679019b70_21879792 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('weekday_abr_0','weekday_abr_1','weekday_abr_2','weekday_abr_3','weekday_abr_4','weekday_abr_5','weekday_abr_6','month_name_abr_1','month_name_abr_2','month_name_abr_3','month_name_abr_4','month_name_abr_5','month_name_abr_6','month_name_abr_7','month_name_abr_8','month_name_abr_9','month_name_abr_10','month_name_abr_11','month_name_abr_12'));
if ($_smarty_tpl->getValue('settings')['Appearance']['calendar_date_format'] == "month_first") {?>
    <?php $_smarty_tpl->assign('date_format', "%m/%d/%Y", false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('date_format', "%d/%m/%Y", false, NULL);
}?>

<?php $_smarty_tpl->assign('is_block', (($tmp = $_smarty_tpl->getValue('is_block') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>

<div class="calendar <?php if ($_smarty_tpl->getValue('is_block')) {?>calendar--block<?php }?>">
    <input type="text" data-ca-meta-class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta_class')), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('date_id')), ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('date_name')), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->getValue('date_meta')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('date_meta')), ENT_QUOTES, 'UTF-8');
}?> cm-calendar calendar__date" value="<?php if ($_smarty_tpl->getValue('date_val')) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getSmarty()->getModifierCallback('fn_parse_date')($_smarty_tpl->getValue('date_val')),((string)$_smarty_tpl->getValue('date_format')))), ENT_QUOTES, 'UTF-8');
}?>" <?php echo $_smarty_tpl->getValue('extra');?>
 size="10" autocomplete="disabled" <?php if ($_smarty_tpl->getValue('placeholder')) {?>placeholder="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('placeholder')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>/>
    <?php if ($_smarty_tpl->getValue('show_time')) {?>
    <input class="input-time calendar__time" data-ca-meta-class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('meta_class')), ENT_QUOTES, 'UTF-8');?>
" size="5" maxlength="5" type="text" name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('time_name')), ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->getValue('date_val')) {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getSmarty()->getModifierCallback('fn_parse_date')($_smarty_tpl->getValue('date_val')),"%H:%M")), ENT_QUOTES, 'UTF-8');
}?>" placeholder="00:00" />
    <?php }?>
    <span data-ca-external-focus-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('date_id')), ENT_QUOTES, 'UTF-8');?>
" class="icon-calendar cm-external-focus"></span>
        <input type="text" hidden disabled name="fake_mail" aria-hidden="true">
</div>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
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
            dayNamesMin: ['<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_0", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_1", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_2", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_3", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_4", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_5", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_6", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'],
            monthNamesShort: ['<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_1", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_2", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_3", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_4", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_5", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_6", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_7", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_8", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_9", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_10", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_11", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
', '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_12", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'],
            yearRange: '<?php if ($_smarty_tpl->getValue('start_year')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('start_year')), ENT_QUOTES, 'UTF-8');
} else { ?>c-100<?php }?>:c+10',
            <?php if ($_smarty_tpl->getValue('min_date') || $_smarty_tpl->getValue('min_date') === 0) {?>minDate: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('min_date')), ENT_QUOTES, 'UTF-8');?>
,<?php }?>
            <?php if ($_smarty_tpl->getValue('max_date') || $_smarty_tpl->getValue('max_date') === 0) {?>maxDate: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('max_date')), ENT_QUOTES, 'UTF-8');?>
,<?php }?>
            dateFormat: '<?php if ($_smarty_tpl->getValue('settings')['Appearance']['calendar_date_format'] == "month_first") {?>mm/dd/yy<?php } else { ?>dd/mm/yy<?php }?>'
        });
    });
<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rdelim')), ENT_QUOTES, 'UTF-8');?>
(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
