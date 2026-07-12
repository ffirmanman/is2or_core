<?php
/* Smarty version 5.4.3, created on 2026-03-09 11:38:15
  from 'tygh:views/companies/components/reason_container.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae86f7ed2539_70504498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e526ccf829116899ca9695a127c84e0f21b13e88' => 
    array (
      0 => 'views/companies/components/reason_container.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ae86f7ed2539_70504498 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/companies/components';
\Tygh\Languages\Helper::preloadLangVars(array('reason','notify_vendors_by_email'));
?>
<div class="form-horizontal form-edit">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reason", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
    <div class="controls">
    <textarea class="span9" name="reason_change_to_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('status')), ENT_QUOTES, 'UTF-8');?>
" id="reason_change_to_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('status')), ENT_QUOTES, 'UTF-8');?>
" cols="50" rows="4"></textarea>
    </div>
</div>

<div class="cm-toggle-button">
    <div class="control-group notify-customer">
        <div class="controls">
        <label for="action_notification" class="checkbox">
        <input type="hidden" name="action_notification" value="N" />
        <input type="checkbox" name="action_notification" id="action_notification" value="Y" checked="checked" <?php if ($_smarty_tpl->getValue('mandatory_notification')) {?>disabled="disabled"<?php }?> />
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("notify_vendors_by_email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
        </div>
    </div>
</div>
</div><?php }
}
