<?php
/* Smarty version 5.4.3, created on 2026-03-09 08:58:22
  from 'tygh:views/auth/recover_password.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae617e68c021_26989999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14571a40d269e45811c57af5e2e27571494a17b1' => 
    array (
      0 => 'views/auth/recover_password.tpl',
      1 => 1767831048,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image_verification.tpl' => 2,
    'tygh:buttons/reset_password.tpl' => 2,
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69ae617e68c021_26989999 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/auth';
\Tygh\Languages\Helper::preloadLangVars(array('email','press_continue_to_recover_password','continue','recover_password','email','press_continue_to_recover_password','continue','recover_password'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="ty-recover-password">
    <form name="recoverfrm"
          action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
"
          method="post"
    >
        <?php if ($_smarty_tpl->getValue('action') == "request") {?>
            <div class="ty-control-group">
                <label class="ty-login__filed-label ty-control-group__label cm-trim cm-required"
                       for="login_id"
                ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                <input type="text"
                       id="login_id"
                       name="user_email"
                       size="30"
                       value=""
                       class="ty-login__input cm-focus"
                />
            </div>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"recover",'align'=>"left"), (int) 0, $_smarty_current_dir);
?>
            <div class="buttons-container login-recovery">
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/reset_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[auth.recover_password]"), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php } elseif ($_smarty_tpl->getValue('action') == "recover") {?>
            <input type="hidden"
                   name="ekey"
                   value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ekey')), ENT_QUOTES, 'UTF-8');?>
"
            />
            <div class="ty-control-group">
                <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("press_continue_to_recover_password", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
            </div>
            <div class="buttons-container login-recovery">
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("continue", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"ty-btn__secondary",'but_name'=>"dispatch[auth.recover_password]"), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php }?>
    </form>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("recover_password", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/auth/recover_password.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/auth/recover_password.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-recover-password">
    <form name="recoverfrm"
          action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
"
          method="post"
    >
        <?php if ($_smarty_tpl->getValue('action') == "request") {?>
            <div class="ty-control-group">
                <label class="ty-login__filed-label ty-control-group__label cm-trim cm-required"
                       for="login_id"
                ><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                <input type="text"
                       id="login_id"
                       name="user_email"
                       size="30"
                       value=""
                       class="ty-login__input cm-focus"
                />
            </div>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"recover",'align'=>"left"), (int) 0, $_smarty_current_dir);
?>
            <div class="buttons-container login-recovery">
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/reset_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[auth.recover_password]"), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php } elseif ($_smarty_tpl->getValue('action') == "recover") {?>
            <input type="hidden"
                   name="ekey"
                   value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('ekey')), ENT_QUOTES, 'UTF-8');?>
"
            />
            <div class="ty-control-group">
                <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("press_continue_to_recover_password", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
            </div>
            <div class="buttons-container login-recovery">
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("continue", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_meta'=>"ty-btn__secondary",'but_name'=>"dispatch[auth.recover_password]"), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php }?>
    </form>
</div>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("recover_password", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
