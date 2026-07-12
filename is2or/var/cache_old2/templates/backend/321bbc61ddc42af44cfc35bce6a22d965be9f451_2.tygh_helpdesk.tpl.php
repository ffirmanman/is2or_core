<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:52:46
  from 'tygh:buttons/helpdesk.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb1ae894b67_47976661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '321bbc61ddc42af44cfc35bce6a22d965be9f451' => 
    array (
      0 => 'buttons/helpdesk.tpl',
      1 => 1767831036,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb1ae894b67_47976661 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/buttons';
\Tygh\Languages\Helper::preloadLangVars(array('helpdesk_account.sign_in'));
$_smarty_tpl->assign('btn_text', (($tmp = $_smarty_tpl->getValue('btn_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("helpdesk_account.sign_in", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('btn_href', (($tmp = $_smarty_tpl->getValue('btn_href') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('app')["helpdesk.connect_url"] ?? null : $tmp), false, NULL);?>
<a class="btn btn-primary <?php echo $_smarty_tpl->getValue('btn_class');?>
"
   href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('btn_href'))), ENT_QUOTES, 'UTF-8');?>
"
>
    <span class="btn__icon btn__icon--with-text">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15 5.10759V13.1026C15 14.0624 14.214 14.8401 13.2438 14.8401H5.16263C4.19241 14.8401 3.4064 14.0624 3.4064 13.1026V5.10759C3.4064 4.14771 4.19241 3.37008 5.16263 3.37008H13.2438C14.214 3.37008 15 4.14771 15 5.10759ZM1.75623 0C0.786007 0 0 0.777626 0 1.73751C0 2.69739 0.786007 3.47502 1.75623 3.47502C2.72646 3.47502 3.51247 2.69739 3.51247 1.73751C3.51247 0.777626 2.72646 0 1.75623 0Z" fill="white"/>
        </svg>
    </span>
    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('btn_text')), ENT_QUOTES, 'UTF-8');?>

</a>
<?php }
}
