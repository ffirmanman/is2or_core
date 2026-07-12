<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:40
  from 'tygh:addons/upsell/hooks/licensing/upgrade_popup.override.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cca4a636_92981114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c934a03e0c79f82baca6de23c575db958ad03ea' => 
    array (
      0 => 'addons/upsell/hooks/licensing/upgrade_popup.override.tpl',
      1 => 1767831038,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/upsell/components/popup.tpl' => 1,
  ),
))) {
function content_69aed9cca4a636_92981114 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/upsell/hooks/licensing';
\Tygh\Languages\Helper::preloadLangVars(array('licensing.feature_not_allowed.title','licensing.feature_not_allowed.message'));
$_smarty_tpl->assign('feature', $_smarty_tpl->getValue('upgrade_feature'), false, NULL);?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is_lang_var_exists')("upsell.".((string)$_smarty_tpl->getValue('feature')).".popup_title") && $_smarty_tpl->getValue('settings')['Upgrade_center']['license_number']) {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/upsell/components/popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->getValue('feature'),'popup_id'=>$_smarty_tpl->getValue('popup_id'),'auto_open'=>$_smarty_tpl->getValue('auto_open')), (int) 0, $_smarty_current_dir);
} else { ?>
    <div class="hidden <?php if ($_smarty_tpl->getValue('auto_open')) {?>cm-dialog-auto-open<?php }?> cm-dialog-auto-size pull-left"
         id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('popup_id')), ENT_QUOTES, 'UTF-8');?>
"
         title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("licensing.feature_not_allowed.title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
         data-ca-dialog-class="left"
    >
        <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("licensing.feature_not_allowed.message", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
    </div>
<?php }
}
}
