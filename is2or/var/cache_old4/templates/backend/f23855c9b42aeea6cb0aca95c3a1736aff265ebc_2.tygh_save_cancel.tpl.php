<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:35
  from 'tygh:buttons/save_cancel.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fb7cdb52_61094762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f23855c9b42aeea6cb0aca95c3a1736aff265ebc' => 
    array (
      0 => 'buttons/save_cancel.tpl',
      1 => 1767831036,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
))) {
function content_69fb49fb7cdb52_61094762 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/buttons';
\Tygh\Languages\Helper::preloadLangVars(array('save','save_and_close','create','create_and_close','cancel'));
if ($_smarty_tpl->getValue('but_target_id') || $_smarty_tpl->getValue('but_target_form')) {
$_smarty_tpl->assign('but_role', "submit-link", false, NULL);
} else {
$_smarty_tpl->assign('but_role', "button_main", false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('save')) {?>
    <?php $_smarty_tpl->assign('but_label', $_smarty_tpl->getSmarty()->getModifierCallback("__")("save", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
    <?php $_smarty_tpl->assign('but_label2', $_smarty_tpl->getSmarty()->getModifierCallback("__")("save_and_close", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('but_label', $_smarty_tpl->getSmarty()->getModifierCallback("__")("create", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
    <?php $_smarty_tpl->assign('but_label2', $_smarty_tpl->getSmarty()->getModifierCallback("__")("create_and_close", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('but_name')) {
$_smarty_tpl->assign('r', $_smarty_tpl->getValue('but_name'), false, NULL);
} else {
$_smarty_tpl->assign('r', $_smarty_tpl->getValue('but_href'), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('cancel_action') == "close") {?>
    <a class="cm-dialog-closer cm-inline-dialog-closer cm-cancel tool-link btn <?php echo $_smarty_tpl->getValue('cancel_meta');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("cancel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
<?php }?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')($_smarty_tpl->getValue('r'))) {?>
    <?php if (!$_smarty_tpl->getValue('hide_first_button')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>(($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('but_label') ?? null : $tmp),'but_onclick'=>$_smarty_tpl->getValue('but_onclick'),'but_role'=>$_smarty_tpl->getValue('but_role'),'but_name'=>$_smarty_tpl->getValue('but_name'),'but_meta'=>"btn-primary ".((string)$_smarty_tpl->getValue('but_meta'))), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('skip_or', true, false, NULL);?>
    <?php }
} else { ?>
    <?php $_smarty_tpl->assign('skip_or', true, false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('extra')) {?>
    <?php echo $_smarty_tpl->getValue('extra');?>

<?php }
}
}
