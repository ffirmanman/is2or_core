<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:36:51
  from 'tygh:views/checkout/components/customer/title.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb5203d4a641_23048434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48838fe1bd6cabee4e4c1e2f6b69c8811f2baf28' => 
    array (
      0 => 'views/checkout/components/customer/title.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb5203d4a641_23048434 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/checkout/components/customer';
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.customer_information','sign_in','lite_checkout.customer_information','sign_in'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="litecheckout__group">
    <div class="litecheckout__item litecheckout__item--fill">
        <h2 class="litecheckout__step-title"><?php echo (($tmp = $_smarty_tpl->getValue('block_title') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("lite_checkout.customer_information", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</h2>
    </div>

        <?php if (!$_smarty_tpl->getValue('auth')['user_id']) {?>
        <div class="litecheckout__item">
            <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>

            <a href="<?php if ($_smarty_tpl->getValue('runtime')['controller'] == "auth" && $_smarty_tpl->getValue('runtime')['mode'] == "login_form") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url']);
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.login_form?return_url=".((string)$_smarty_tpl->getValue('return_current_url')))), ENT_QUOTES, 'UTF-8');
}?>"
                    data-ca-target-id="litecheckout_login_block"
                    class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary"
                    rel="nofollow"
            >
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </a>
        </div>
        <?php }?>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/title.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/checkout/components/customer/title.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="litecheckout__group">
    <div class="litecheckout__item litecheckout__item--fill">
        <h2 class="litecheckout__step-title"><?php echo (($tmp = $_smarty_tpl->getValue('block_title') ?? null)===null||$tmp==='' ? $_smarty_tpl->getSmarty()->getModifierCallback("__")("lite_checkout.customer_information", [], $_smarty_tpl->getSmarty()->getLanguage()) ?? null : $tmp);?>
</h2>
    </div>

        <?php if (!$_smarty_tpl->getValue('auth')['user_id']) {?>
        <div class="litecheckout__item">
            <?php $_smarty_tpl->assign('return_current_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>

            <a href="<?php if ($_smarty_tpl->getValue('runtime')['controller'] == "auth" && $_smarty_tpl->getValue('runtime')['mode'] == "login_form") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url']);
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.login_form?return_url=".((string)$_smarty_tpl->getValue('return_current_url')))), ENT_QUOTES, 'UTF-8');
}?>"
                    data-ca-target-id="litecheckout_login_block"
                    class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary"
                    rel="nofollow"
            >
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            </a>
        </div>
        <?php }?>
</div>
<?php }
}
}
