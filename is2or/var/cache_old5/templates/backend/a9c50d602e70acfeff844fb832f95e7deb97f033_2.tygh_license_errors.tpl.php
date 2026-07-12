<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:22
  from 'tygh:views/settings/license_errors.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ed2ca9e15_67808305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9c50d602e70acfeff844fb832f95e7deb97f033' => 
    array (
      0 => 'views/settings/license_errors.tpl',
      1 => 1767831034,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a133ed2ca9e15_67808305 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/settings';
\Tygh\Languages\Helper::preloadLangVars(array('licensing.license_error_license_is_','licensing.license_error_license_is_','please_enter_license_here','activate'));
if ($_smarty_tpl->getValue('show')) {?>
    <a id="license_errors"
       class="cm-dialog-opener cm-dialog-auto-size hidden cm-dialog-non-closable"
       data-ca-target-id="license_errors_dialog"
    ></a>

    <div class="hidden trial-expired-dialog license-errors-dialog"
         title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("licensing.license_error_license_is_".((string)(mb_strtolower((string) $_smarty_tpl->getValue('license_errors')['status'], 'UTF-8'))).".title", array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)), $_smarty_tpl->getSmarty()->getLanguage());?>
"
         id="license_errors_dialog"
    >
        <form name="license_errors_form"
              id="license_errors_dialog_form"
              action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
"
              method="post"
        >
            <input type="hidden"
                   name="redirect_url"
                   value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_url']), ENT_QUOTES, 'UTF-8');?>
"
            />
            <input type="hidden"
                   name="store_mode"
                   value="full"
            />
            <div class="license-errors trial-expired">
                <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("licensing.license_error_license_is_".((string)(mb_strtolower((string) $_smarty_tpl->getValue('license_errors')['status'], 'UTF-8'))).".text", array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null),"[helpdesk_url]"=>$_smarty_tpl->getValue('config')['resources']['helpdesk_url']), $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
                <div class="license type-error item">
                    <input type="text"
                           name="license_number"
                           class="type-error"
                           value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('store_mode_license')), ENT_QUOTES, 'UTF-8');?>
"
                           placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("please_enter_license_here", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
                    />
                    <input name="dispatch[settings.change_store_mode]"
                           type="submit"
                           value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("activate", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"
                           class="btn btn-primary"
                    />
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
            Tygh.$('#license_errors').trigger('click');
        });

        Tygh.$(window).load(function () {
            Tygh.$('#license_errors_dialog_form').off('submit');
        });
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('inline_script')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
