<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:31
  from 'tygh:views/auth/login_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad94735c1500_71522134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20c941ea86e292aa0ab0074ddada99794f56e650' => 
    array (
      0 => 'views/auth/login_form.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
    'tygh:buttons/login.tpl' => 2,
  ),
))) {
function content_69ad94735c1500_71522134 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/views/auth';
\Tygh\Languages\Helper::preloadLangVars(array('returning_customer','email','password','forgot_password_question','error_incorrect_login','register_new_account','remember_me','sign_in','returning_customer','email','password','forgot_password_question','error_incorrect_login','register_new_account','remember_me','sign_in'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('id', (($tmp = $_smarty_tpl->getValue('id') ?? null)===null||$tmp==='' ? "main_login" ?? null : $tmp), false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "login", null, null);?>
    <form name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_form" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" <?php if ($_smarty_tpl->getValue('style') == "popup") {?>class="cm-ajax cm-ajax-full-render"<?php }?>>
        <?php if ($_smarty_tpl->getValue('style') == "popup") {?>
            <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container" />
            <input type="hidden" name="login_block_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="quick_login" value="1" />
        <?php }?>

        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) ((($tmp = $_REQUEST['return_url'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('config')['current_url'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('redirect_url') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('config')['current_url'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />

        <?php if ($_smarty_tpl->getValue('style') == "checkout") {?>
            <div class="ty-checkout-login-form"><?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("returning_customer", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
        <?php }?>

        <div class="ty-control-group">
            <label for="login_<?php echo $_smarty_tpl->getValue('id');?>
" class="ty-login__filed-label ty-control-group__label cm-required cm-trim cm-email"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
            <input type="text" id="login_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" name="user_login" size="30" value="<?php if ($_smarty_tpl->getValue('stored_user_login')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('stored_user_login')), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['demo_username']), ENT_QUOTES, 'UTF-8');
}?>" class="ty-login__input cm-focus" />
        </div>

        <div class="ty-control-group ty-password-forgot">
            <label for="psw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label ty-password-forgot__label cm-required"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("password", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.recover_password")), ENT_QUOTES, 'UTF-8');?>
" class="ty-password-forgot__a"  tabindex="5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("forgot_password_question", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            <input type="password" id="psw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" name="password" size="30" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['demo_password']), ENT_QUOTES, 'UTF-8');?>
" class="ty-login__input" maxlength="32" />
        </div>

        <?php if ($_smarty_tpl->getValue('style') == "popup") {?>
            <?php if ($_smarty_tpl->getValue('login_error')) {?>
                <div class="ty-login-form__wrong-credentials-container">
                    <span class="ty-login-form__wrong-credentials-text ty-error-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("error_incorrect_login", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                </div>
            <?php }?>

            <div class="ty-login-reglink">
                <a class="ty-login-reglink__a" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.add")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("register_new_account", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </div>
        <?php }?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"login",'align'=>"left"), (int) 0, $_smarty_current_dir);
?>

        <?php if ($_smarty_tpl->getValue('style') == "checkout") {?>
            </div>
        <?php }?>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:login_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <div class="buttons-container clearfix">
                <div class="ty-login__remember-me">
                    <label for="remember_me_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-login__remember-me-label"><input class="checkbox" type="checkbox" name="remember_me" id="remember_me_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" value="Y" /><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("remember_me", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                </div>
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[auth.login]",'but_role'=>"submit"), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:login_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </form>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('style') == "popup") {?>
    <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container">
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'login');?>

    <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container--></div>
<?php } else { ?>
    <div class="ty-login">
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'login');?>

    </div>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/auth/login_form.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/auth/login_form.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')) {
throw new \Smarty\Exception('block tag \'ab__hide_content\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('id', (($tmp = $_smarty_tpl->getValue('id') ?? null)===null||$tmp==='' ? "main_login" ?? null : $tmp), false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "login", null, null);?>
    <form name="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_form" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" <?php if ($_smarty_tpl->getValue('style') == "popup") {?>class="cm-ajax cm-ajax-full-render"<?php }?>>
        <?php if ($_smarty_tpl->getValue('style') == "popup") {?>
            <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container" />
            <input type="hidden" name="login_block_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="quick_login" value="1" />
        <?php }?>

        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) ((($tmp = $_REQUEST['return_url'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('config')['current_url'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ((($tmp = $_smarty_tpl->getValue('redirect_url') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('config')['current_url'] ?? null : $tmp)), ENT_QUOTES, 'UTF-8');?>
" />

        <?php if ($_smarty_tpl->getValue('style') == "checkout") {?>
            <div class="ty-checkout-login-form"><?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("returning_customer", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>
        <?php }?>

        <div class="ty-control-group">
            <label for="login_<?php echo $_smarty_tpl->getValue('id');?>
" class="ty-login__filed-label ty-control-group__label cm-required cm-trim cm-email"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
            <input type="text" id="login_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" name="user_login" size="30" value="<?php if ($_smarty_tpl->getValue('stored_user_login')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('stored_user_login')), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['demo_username']), ENT_QUOTES, 'UTF-8');
}?>" class="ty-login__input cm-focus" />
        </div>

        <div class="ty-control-group ty-password-forgot">
            <label for="psw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label ty-password-forgot__label cm-required"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("password", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.recover_password")), ENT_QUOTES, 'UTF-8');?>
" class="ty-password-forgot__a"  tabindex="5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("forgot_password_question", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            <input type="password" id="psw_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" name="password" size="30" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['demo_password']), ENT_QUOTES, 'UTF-8');?>
" class="ty-login__input" maxlength="32" />
        </div>

        <?php if ($_smarty_tpl->getValue('style') == "popup") {?>
            <?php if ($_smarty_tpl->getValue('login_error')) {?>
                <div class="ty-login-form__wrong-credentials-container">
                    <span class="ty-login-form__wrong-credentials-text ty-error-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("error_incorrect_login", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                </div>
            <?php }?>

            <div class="ty-login-reglink">
                <a class="ty-login-reglink__a" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.add")), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("register_new_account", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
            </div>
        <?php }?>

        <?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"login",'align'=>"left"), (int) 0, $_smarty_current_dir);
?>

        <?php if ($_smarty_tpl->getValue('style') == "checkout") {?>
            </div>
        <?php }?>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:login_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <div class="buttons-container clearfix">
                <div class="ty-login__remember-me">
                    <label for="remember_me_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" class="ty-login__remember-me-label"><input class="checkbox" type="checkbox" name="remember_me" id="remember_me_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
" value="Y" /><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("remember_me", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</label>
                </div>
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[auth.login]",'but_role'=>"submit"), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:login_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </form>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->getValue('style') == "popup") {?>
    <div id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container">
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'login');?>

    <!--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('id')), ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container--></div>
<?php } else { ?>
    <div class="ty-login">
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'login');?>

    </div>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_in", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('ab__hide_content')->handle(array('bot_type'=>"ALL"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
