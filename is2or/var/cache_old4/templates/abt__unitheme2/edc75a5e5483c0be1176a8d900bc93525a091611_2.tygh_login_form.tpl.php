<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:41
  from 'tygh:addons/vendor_communication/views/vendor_communication/components/login_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a01224166_46112730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edc75a5e5483c0be1176a8d900bc93525a091611' => 
    array (
      0 => 'addons/vendor_communication/views/vendor_communication/components/login_form.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/auth/login_form.tpl' => 2,
  ),
))) {
function content_69fb4a01224166_46112730 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/vendor_communication/views/vendor_communication/components';
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','vendor_communication.please_log_in_to_be_notified','sign_in','vendor_communication.please_log_in_to_be_notified'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div id="new_thread_login_form<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-vendor-communication-login" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
    <div class="ty-login-popup">
        <div class="ty-login-popup__description ty-login-popup__description--bold">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.please_log_in_to_be_notified", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </div>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"popup",'id'=>"new_thread_login_form_popup"), (int) 0, $_smarty_current_dir);
?>
    </div>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/views/vendor_communication/components/login_form.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/vendor_communication/views/vendor_communication/components/login_form.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="new_thread_login_form<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_prefix')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getValue('obj_id')), ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-vendor-communication-login" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());?>
">
    <div class="ty-login-popup">
        <div class="ty-login-popup__description ty-login-popup__description--bold">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("vendor_communication.please_log_in_to_be_notified", [], $_smarty_tpl->getSmarty()->getLanguage());?>

        </div>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"popup",'id'=>"new_thread_login_form_popup"), (int) 0, $_smarty_current_dir);
?>
    </div>
</div>
<?php }
}
}
