<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:23
  from 'tygh:components/licensing/upgrade_popup.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed37b86a4_47467418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a4a2f3aa33b866111918912ef64d2237185df27' => 
    array (
      0 => 'components/licensing/upgrade_popup.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed37b86a4_47467418 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/licensing';
\Tygh\Languages\Helper::preloadLangVars(array('licensing.feature_not_allowed.title','licensing.feature_not_allowed.message'));
if ($_smarty_tpl->getValue('upgrade_feature')) {?>
    <?php $_smarty_tpl->assign('auto_open', (($tmp = $_smarty_tpl->getValue('auto_open') ?? null)===null||$tmp==='' ? true ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('popup_id', (($tmp = $_smarty_tpl->getValue('popup_id') ?? null)===null||$tmp==='' ? "licensing_upgrade_popup_".((string)$_smarty_tpl->getValue('upgrade_feature')) ?? null : $tmp), false, NULL);?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"licensing:upgrade_popup"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
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
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"licensing:upgrade_popup"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
