<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:40
  from 'tygh:addons/upsell/components/popup.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9ccac6140_44257996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '783fd7158ba2c6877b40b0178982cd8a60076ab4' => 
    array (
      0 => 'addons/upsell/components/popup.tpl',
      1 => 1767831038,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69aed9ccac6140_44257996 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/addons/upsell/components';
\Tygh\Languages\Helper::preloadLangVars(array('upsell.','upsell.','upsell.how_to_unlock_notice','upsell.unlock','upsell.message_already_sent','upsell.message_already_sent.notice','ok'));
$_smarty_tpl->assign('popup_id', (($tmp = $_smarty_tpl->getValue('popup_id') ?? null)===null||$tmp==='' ? "licensing_upgrade_popup_".((string)$_smarty_tpl->getValue('feature')) ?? null : $tmp), false, NULL);?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is_expired_storage_data')("upsell.".((string)$_smarty_tpl->getValue('feature')))) {?>
    <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('popup_id')), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->getValue('auto_open')) {?>cm-dialog-auto-open<?php }?> cm-dialog-auto-height hidden" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("upsell.".((string)$_smarty_tpl->getValue('feature')).".popup_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
        <div class="upsell-popup__wrapper">
            <?php echo $_smarty_tpl->getValue('popup_content_pre');?>

            <div class="well">
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("upsell.".((string)$_smarty_tpl->getValue('feature')).".popup_text", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</strong>
            </div>
            <div class="flex">
                <div class="flex-shrink-none shift-right">
                    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('include_ext')->handle(array('file'=>"common/icon.tpl",'source'=>"unlock"), $_smarty_tpl);?>

                </div>
                <p class="muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("upsell.how_to_unlock_notice", array('[email]'=>$_smarty_tpl->getValue('user_info')['email']), $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
            </div>
            <div class="buttons-container">
                <a class="cm-ajax cm-post btn btn-primary" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("upsell.send_request?feature=".((string)$_smarty_tpl->getValue('feature'))."&from_dispatch=".((string)$_smarty_tpl->getValue('runtime')['controller']).".".((string)$_smarty_tpl->getValue('runtime')['mode']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("upsell.unlock", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('popup_id')), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->getValue('auto_open')) {?>cm-dialog-auto-open<?php }?> cm-dialog-auto-height hidden" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("upsell.message_already_sent", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
        <div>
            <div>
                <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("upsell.message_already_sent.notice", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
            </div>
            <div class="buttons-container">
                <a class="cm-dialog-closer btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("ok", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </div>
        </div>
    </div>
<?php }
}
}
