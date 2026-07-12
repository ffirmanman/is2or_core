<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:39
  from 'tygh:common/daterange_picker.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ee3828814_70934098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d0b168fd4c799288f9339f41970cc5500efe79c' => 
    array (
      0 => 'common/daterange_picker.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ee3828814_70934098 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
\Tygh\Languages\Helper::preloadLangVars(array('month_name_abr_1','month_name_abr_2','month_name_abr_3','month_name_abr_4','month_name_abr_5','month_name_abr_6','month_name_abr_7','month_name_abr_8','month_name_abr_9','month_name_abr_10','month_name_abr_11','month_name_abr_12','weekday_abr_0','weekday_abr_1','weekday_abr_2','weekday_abr_3','weekday_abr_4','weekday_abr_5','weekday_abr_6','today','yesterday','this_month','last_month','this_year','last_year','custom_range','apply','clear','cancel','from','to'));
$_smarty_tpl->assign('enable_inputs', (($tmp = $_smarty_tpl->getValue('enable_inputs') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getValue('settings')['Appearance']['calendar_date_format'] === "month_first") {?>
    <?php $_smarty_tpl->assign('date_format', "%m/%d/%Y", false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('date_format', "%d/%m/%Y", false, NULL);
}?>

<div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
"
    class="cm-date-range <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('extra_class')), ENT_QUOTES, 'UTF-8');?>
"
    <?php if ($_smarty_tpl->getValue('data_url')) {?>data-ca-target-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_url')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->getValue('result_ids')) {?>data-ca-target-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('result_ids')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    data-ca-time-from="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('start_date')), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-time-to="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('end_date')), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-date-format="<?php if ($_smarty_tpl->getValue('settings')['Appearance']['calendar_date_format'] == "month_first") {?>MM/DD/YYYY<?php } else { ?>DD/MM/YYYY<?php }?>"
    data-ca-displayed-format="<?php if ($_smarty_tpl->getValue('settings')['Appearance']['calendar_date_format'] == "month_first") {?>MMM DD, YYYY<?php } else { ?>DD MMM, YYYY<?php }?>"
    data-ca-use-predefined-periods="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('use_predefined_periods') ?? null)===null||$tmp==='' ? "true" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-show-ranges="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('show_ranges') ?? null)===null||$tmp==='' ? "true" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-linked-calendars="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('linked_calendars') ?? null)===null||$tmp==='' ? "true" ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
    <?php if ($_smarty_tpl->getValue('always_show_calendars') !== null) {?>
        data-ca-always-show-calendars="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('always_show_calendars')), ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
    <?php if ($_smarty_tpl->getValue('data_event')) {?>data-ca-event="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('data_event')), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <a class="btn btn-link link--monochrome">
        <span class="mobile-visible-inline">
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'class'=>"icon-calendar"), $_smarty_tpl);?>

        </span>
        <span class="cm-date-range__selected-date mobile-hidden">
            <?php if ($_smarty_tpl->getValue('settings')['Appearance']['calendar_date_format'] == "month_first") {?>
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('start_date'),"%b %d, %Y")), ENT_QUOTES, 'UTF-8');?>
 — <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('end_date'),"%b %d, %Y")), ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('start_date'),"%d %b %Y")), ENT_QUOTES, 'UTF-8');?>
 — <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('end_date'),"%d %b %Y")), ENT_QUOTES, 'UTF-8');?>

            <?php }?>
        </span>
        <b class="caret"></b>
    </a>

    <?php if ($_smarty_tpl->getValue('enable_inputs')) {?>
        <input type="hidden"
               id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_from"
               name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_name_from')), ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('start_date'),((string)$_smarty_tpl->getValue('date_format')))), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-date-range-picker="date-in"
        />

        <input type="hidden"
               id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_to"
               name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('input_name_to')), ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('end_date'),((string)$_smarty_tpl->getValue('date_format')))), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-date-range-picker="date-out"
        />
    <?php }?>
</div>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
 class="cm-ajax_force">
    (function (_, $) {
        _.tr({
            default_lang: '<?php echo strtr((string)(defined('DEFAULT_LANGUAGE') ? constant('DEFAULT_LANGUAGE') : null), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            month_name_abr_1: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_1", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            month_name_abr_2: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_2", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            month_name_abr_3: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_3", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            month_name_abr_4: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_4", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            month_name_abr_5: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_5", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            month_name_abr_6: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_6", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            month_name_abr_7: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_7", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            month_name_abr_8: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_8", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            month_name_abr_9: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_9", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            month_name_abr_10: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_10", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            month_name_abr_11: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_11", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            month_name_abr_12: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("month_name_abr_12", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            weekday_abr_0: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_0", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            weekday_abr_1: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_1", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            weekday_abr_2: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_2", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            weekday_abr_3: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_3", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            weekday_abr_4: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_4", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            weekday_abr_5: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_5", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            weekday_abr_6: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("weekday_abr_6", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            today: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("today", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            yesterday: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("yesterday", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            this_month: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("this_month", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            last_month: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("last_month", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            this_year: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("this_year", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            last_year: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("last_year", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            custom_range: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("custom_range", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            apply: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("apply", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            clear: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("clear", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            cancel: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("cancel", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            from: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("from", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
',
            to: '<?php echo strtr((string)$_smarty_tpl->getSmarty()->getModifierCallback("__")("to", [], $_smarty_tpl->getSmarty()->getLanguage()), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{"));?>
'
        });
        _.daterangepicker = {
        };
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/date_picker.js"), $_smarty_tpl);?>

<?php }
}
