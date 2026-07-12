<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:47:49
  from 'tygh:addons/hybrid_auth/hooks/auth_info/extra.post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb085548663_16720377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54a3fec4ed50bedc9c583e9a079a7d6bcaf48146' => 
    array (
      0 => 'addons/hybrid_auth/hooks/auth_info/extra.post.tpl',
      1 => 1767831050,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afb085548663_16720377 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/hybrid_auth/hooks/auth_info';
\Tygh\Languages\Helper::preloadLangVars(array('hybrid_auth.connect_social_title','hybrid_auth.text_connect_social','hybrid_auth.specify_email_title','hybrid_auth.text_specify_email','hybrid_auth.connect_social_title','hybrid_auth.text_connect_social','hybrid_auth.specify_email_title','hybrid_auth.text_specify_email'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('runtime')['controller'] == "auth") {?>
    <?php if ($_smarty_tpl->getValue('runtime')['mode'] == "connect_social") {?>
    <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.connect_social_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h4>
    <div class="ty-login-info__txt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.text_connect_social", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('runtime')['mode'] == "specify_email") {?>
        <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.specify_email_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h4>
        <div class="ty-login-info__txt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.text_specify_email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
    <?php }
}?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/hooks/auth_info/extra.post.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/hybrid_auth/hooks/auth_info/extra.post.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('runtime')['controller'] == "auth") {?>
    <?php if ($_smarty_tpl->getValue('runtime')['mode'] == "connect_social") {?>
    <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.connect_social_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h4>
    <div class="ty-login-info__txt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.text_connect_social", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('runtime')['mode'] == "specify_email") {?>
        <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.specify_email_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h4>
        <div class="ty-login-info__txt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.text_specify_email", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
    <?php }
}?>

<?php }
}
}
