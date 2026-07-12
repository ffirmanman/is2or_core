<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:38
  from 'tygh:buttons/proceed_to_checkout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fe065674_53252662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9cd4ae282f679b80ab9ff98952a33143e377e6b' => 
    array (
      0 => 'buttons/proceed_to_checkout.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69fb49fe065674_53252662 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/buttons';
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','proceed_to_checkout','proceed_to_checkout','sign_in','proceed_to_checkout','proceed_to_checkout'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('settings')['Checkout']['disable_anonymous_checkout'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('but_meta', (($tmp = $_smarty_tpl->getValue('but_meta') ?? null)===null||$tmp==='' ? "ty-btn__primary" ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('return_url', (($tmp = $_smarty_tpl->getValue('but_href') ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.checkout")) ?? null : $tmp), false, NULL);?>

    <a
        class="cm-dialog-opener cm-dialog-auto-size ty-btn <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
"
        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.login_form?return_url=".((string)($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('return_url')))))), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
        data-ca-target-id="checkout_login_form"
        rel="nofollow">
        <?php echo (($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("proceed_to_checkout", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>

    </a>
<?php } else { ?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>(($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("proceed_to_checkout", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp),'but_onclick'=>$_smarty_tpl->getValue('but_onclick'),'but_href'=>(($tmp = $_smarty_tpl->getValue('but_href') ?? null)===null||$tmp==='' ? "checkout.checkout" ?? null : $tmp),'but_target'=>$_smarty_tpl->getValue('but_target'),'but_role'=>(($tmp = $_smarty_tpl->getValue('but_action') ?? null)===null||$tmp==='' ? "action" ?? null : $tmp),'but_meta'=>(($tmp = $_smarty_tpl->getValue('but_meta') ?? null)===null||$tmp==='' ? "ty-btn__primary" ?? null : $tmp),'but_icon'=>"ty-icon-ok"), (int) 0, $_smarty_current_dir);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/proceed_to_checkout.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"buttons/proceed_to_checkout.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getValue('settings')['Checkout']['disable_anonymous_checkout'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <?php $_smarty_tpl->assign('but_meta', (($tmp = $_smarty_tpl->getValue('but_meta') ?? null)===null||$tmp==='' ? "ty-btn__primary" ?? null : $tmp), false, NULL);?>
    <?php $_smarty_tpl->assign('return_url', (($tmp = $_smarty_tpl->getValue('but_href') ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.checkout")) ?? null : $tmp), false, NULL);?>

    <a
        class="cm-dialog-opener cm-dialog-auto-size ty-btn <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('but_meta')), ENT_QUOTES, 'UTF-8');?>
"
        href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("checkout.login_form?return_url=".((string)($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('return_url')))))), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dialog-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
        data-ca-target-id="checkout_login_form"
        rel="nofollow">
        <?php echo (($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("proceed_to_checkout", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>

    </a>
<?php } else { ?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>(($tmp = $_smarty_tpl->getValue('but_text') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("proceed_to_checkout", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp),'but_onclick'=>$_smarty_tpl->getValue('but_onclick'),'but_href'=>(($tmp = $_smarty_tpl->getValue('but_href') ?? null)===null||$tmp==='' ? "checkout.checkout" ?? null : $tmp),'but_target'=>$_smarty_tpl->getValue('but_target'),'but_role'=>(($tmp = $_smarty_tpl->getValue('but_action') ?? null)===null||$tmp==='' ? "action" ?? null : $tmp),'but_meta'=>(($tmp = $_smarty_tpl->getValue('but_meta') ?? null)===null||$tmp==='' ? "ty-btn__primary" ?? null : $tmp),'but_icon'=>"ty-icon-ok"), (int) 0, $_smarty_current_dir);
}
}
}
}
