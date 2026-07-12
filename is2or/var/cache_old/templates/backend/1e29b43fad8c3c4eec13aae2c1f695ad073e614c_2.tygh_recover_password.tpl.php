<?php
/* Smarty version 5.4.3, created on 2026-03-09 09:42:06
  from 'tygh:views/auth/recover_password.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae6bbe7e9502_78961011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e29b43fad8c3c4eec13aae2c1f695ad073e614c' => 
    array (
      0 => 'views/auth/recover_password.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
))) {
function content_69ae6bbe7e9502_78961011 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/auth';
\Tygh\Languages\Helper::preloadLangVars(array('recover_password','text_recover_password_notice','email','reset_password','press_continue_to_recover_password','continue'));
?>
<div class="modal signin-modal">
    <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
"
          method="post"
          name="recover_form"
          class="signin-modal__form cm-skip-check-items cm-check-changes"
    >
        <div class="modal-header">
            <h4 class="signin-modal__form-header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("recover_password", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h4>
        </div>
        <?php if ($_smarty_tpl->getValue('action') == "request") {?>
            <div class="modal-body">
                <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_recover_password_notice", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
                <label class="signin-modal__form-header" for="user_login"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:</label>
                <input type="text"
                       name="user_email"
                       id="user_login"
                       size="20"
                       value=""
                       class="signin-modal__form-field"
                />
            </div>
            <div class="modal-footer signin-modal__footer">
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("reset_password", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_name'=>"dispatch[auth.recover_password]",'but_role'=>"button_main"), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php } elseif ($_smarty_tpl->getValue('action') == "recover") {?>
            <input type="hidden"
                   name="ekey"
                   value="<?php echo $_smarty_tpl->getValue('ekey');?>
"
            />
            <div class="modal-body">
                <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("press_continue_to_recover_password", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
            </div>
            <div class="modal-footer signin-modal__footer">
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("continue", [], $_smarty_tpl->getSmarty()->getLanguage()),'but_name'=>"dispatch[auth.recover_password]",'but_role'=>"button_main"), (int) 0, $_smarty_current_dir);
?>
            </div>
        <?php }?>
    </form>
</div><?php }
}
