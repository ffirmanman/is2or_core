<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:views/settings/trial_expired.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed2c8ad14_53903524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '631cd69276603d04315fb16f84e6869793b953d2' => 
    array (
      0 => 'views/settings/trial_expired.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed2c8ad14_53903524 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/settings';
\Tygh\Languages\Helper::preloadLangVars(array('trial_expired','text_input_license_code','please_enter_license_here','activate','text_buy_new_license','buy_license','text_money_back_guarantee'));
if ($_smarty_tpl->getValue('show')) {?>
    <a id="trial" class="cm-dialog-opener cm-dialog-auto-size hidden cm-dialog-non-closable" data-ca-target-id="trial_dialog"></a>

    <div class="hidden trial-expired-dialog" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("trial_expired", array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)), $_smarty_tpl->getSmarty()->getLanguage());?>
" id="trial_dialog">
        <?php if ($_smarty_tpl->getValue('store_mode_errors')) {?>
            <div class="alert alert-error notification-content">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('store_mode_errors'), 'message');
$foreach37DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('message')->value) {
$foreach37DoElse = false;
?>
                    <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('message')['title']), ENT_QUOTES, 'UTF-8');?>
:</strong> <?php echo $_smarty_tpl->getValue('message')['text'];?>
<br>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>

        <form name="trial_form" id="trial_dialog_form" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="store_mode" value="full">
            <div class="trial-expired">
                <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_input_license_code", array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)), $_smarty_tpl->getSmarty()->getLanguage());?>
</p>

                <div class="license <?php if ($_smarty_tpl->getValue('store_mode_errors')) {?> type-error<?php }?> item">
                    <input type="text" name="license_number" class="<?php if ($_smarty_tpl->getValue('store_mode_errors')) {?> type-error<?php }?>" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('store_mode_license')), ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("please_enter_license_here", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
                    <input name="dispatch[settings.change_store_mode]" type="submit" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("activate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="btn btn-primary">
                </div>
                <div class="trial-purchase">
                    <p>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_buy_new_license", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </p>
                        <a class="btn btn-warning btn-large btn-buy" target="_blank" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['resources']['product_buy_url']), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("buy_license", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                    <p>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_money_back_guarantee", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </p>
                </div>
            </div>
        </form>
    </div>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('inline_script')) {
throw new \Smarty\Exception('block tag \'inline_script\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
echo '<script'; ?>
>
        Tygh.$(document).ready(function () {
            Tygh.$('#trial').trigger('click');
        });

        Tygh.$(window).load(function () {
            Tygh.$('#trial_dialog_form').off('submit');
        });
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
