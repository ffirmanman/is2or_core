<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:25:25
  from '/srv/projects/is2or.com/public_html/design/backend/templates/common/calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345db5ba8128_47253346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0f3a9ed476cfd418239b6441c639d062be2c099' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/common/calendar.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68345db5ba8128_47253346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('weekday_abr_0','weekday_abr_1','weekday_abr_2','weekday_abr_3','weekday_abr_4','weekday_abr_5','weekday_abr_6','month_name_abr_1','month_name_abr_2','month_name_abr_3','month_name_abr_4','month_name_abr_5','month_name_abr_6','month_name_abr_7','month_name_abr_8','month_name_abr_9','month_name_abr_10','month_name_abr_11','month_name_abr_12'));
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format'] == "month_first") {?>
    <?php $_smarty_tpl->_assignInScope('date_format', "%m/%d/%Y");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('date_format', "%d/%m/%Y");
}?>

<?php $_smarty_tpl->_assignInScope('is_block', (($tmp = $_smarty_tpl->tpl_vars['is_block']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

<div class="calendar <?php if ($_smarty_tpl->tpl_vars['is_block']->value) {?>calendar--block<?php }?>">
    <input type="text" data-ca-meta-class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['date_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['date_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['date_meta']->value, ENT_QUOTES, 'UTF-8');
}?> cm-calendar calendar__date" value="<?php if ($_smarty_tpl->tpl_vars['date_val']->value) {
echo htmlspecialchars((string) smarty_modifier_date_format(fn_parse_date($_smarty_tpl->tpl_vars['date_val']->value),((string)$_smarty_tpl->tpl_vars['date_format']->value)), ENT_QUOTES, 'UTF-8');
}?>" <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>
 size="10" autocomplete="disabled" <?php if ($_smarty_tpl->tpl_vars['placeholder']->value) {?>placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>/>
    <?php if ($_smarty_tpl->tpl_vars['show_time']->value) {?>
    <input class="input-time calendar__time" data-ca-meta-class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta_class']->value, ENT_QUOTES, 'UTF-8');?>
" size="5" maxlength="5" type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['time_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['date_val']->value) {
echo htmlspecialchars((string) smarty_modifier_date_format(fn_parse_date($_smarty_tpl->tpl_vars['date_val']->value),"%H:%M"), ENT_QUOTES, 'UTF-8');
}?>" placeholder="00:00" />
    <?php }?>
    <span data-ca-external-focus-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="icon-calendar cm-external-focus"></span>
        <input type="text" hidden disabled name="fake_mail" aria-hidden="true">
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

    $.ceEvent('on', 'ce.commoninit', function(context) {
        $('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['date_id']->value, ENT_QUOTES, 'UTF-8');?>
').datepicker({
            changeMonth: true,
            duration: 'fast',
            changeYear: true,
            numberOfMonths: 1,
            selectOtherMonths: true,
            showOtherMonths: true,
            firstDay: <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_week_format'] == "sunday_first") {?>0<?php } else { ?>1<?php }?>,
            dayNamesMin: ['<?php echo strtr((string)$_smarty_tpl->__("weekday_abr_0"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("weekday_abr_1"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("weekday_abr_2"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("weekday_abr_3"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("weekday_abr_4"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("weekday_abr_5"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("weekday_abr_6"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'],
            monthNamesShort: ['<?php echo strtr((string)$_smarty_tpl->__("month_name_abr_1"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("month_name_abr_2"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("month_name_abr_3"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("month_name_abr_4"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("month_name_abr_5"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("month_name_abr_6"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("month_name_abr_7"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("month_name_abr_8"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("month_name_abr_9"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("month_name_abr_10"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("month_name_abr_11"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
', '<?php echo strtr((string)$_smarty_tpl->__("month_name_abr_12"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'],
            yearRange: '<?php if ($_smarty_tpl->tpl_vars['start_year']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['start_year']->value, ENT_QUOTES, 'UTF-8');
} else { ?>c-100<?php }?>:c+10',
            <?php if ($_smarty_tpl->tpl_vars['min_date']->value || $_smarty_tpl->tpl_vars['min_date']->value === 0) {?>minDate: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['min_date']->value, ENT_QUOTES, 'UTF-8');?>
,<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['max_date']->value || $_smarty_tpl->tpl_vars['max_date']->value === 0) {?>maxDate: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['max_date']->value, ENT_QUOTES, 'UTF-8');?>
,<?php }?>
            dateFormat: '<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format'] == "month_first") {?>mm/dd/yy<?php } else { ?>dd/mm/yy<?php }?>'
        });
    });
<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
