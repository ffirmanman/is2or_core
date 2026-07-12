<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:14:21
  from 'tygh:blocks/static_templates/auth_info.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4cbd552ac5_76424200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'deafd654656cebe5592af751467ffb8046757442' => 
    array (
      0 => 'blocks/static_templates/auth_info.tpl',
      1 => 1767831053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb4cbd552ac5_76424200 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/blocks/static_templates';
\Tygh\Languages\Helper::preloadLangVars(array('text_login_form','register_new_account','text_recover_password_title','text_recover_password','text_login_form','register_new_account','text_recover_password_title','text_recover_password'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);?><div class="ty-login-info">
	<?php if ($_smarty_tpl->getValue('runtime')['controller'] == "auth" && $_smarty_tpl->getValue('runtime')['mode'] == "login_form") {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"auth_info:login_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
	    <div class="ty-login-info__txt">
		    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_login_form", [], $_smarty_tpl->getSmarty()->getLanguage());?>

		    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.add")), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("register_new_account", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
		</div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"auth_info:login_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
	<?php } elseif ($_smarty_tpl->getValue('runtime')['controller'] == "auth" && $_smarty_tpl->getValue('runtime')['mode'] == "recover_password" && $_smarty_tpl->getValue('runtime')['action'] != "recover") {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"auth_info:recover_password"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
	    <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_recover_password_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h4>
	    <div class="ty-login-info__txt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_recover_password", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"auth_info:recover_password"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
	<?php }?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"auth_info:extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"auth_info:extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
</div><?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/auth_info.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"blocks/static_templates/auth_info.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-login-info">
	<?php if ($_smarty_tpl->getValue('runtime')['controller'] == "auth" && $_smarty_tpl->getValue('runtime')['mode'] == "login_form") {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"auth_info:login_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
	    <div class="ty-login-info__txt">
		    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_login_form", [], $_smarty_tpl->getSmarty()->getLanguage());?>

		    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.add")), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("register_new_account", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
		</div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"auth_info:login_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
	<?php } elseif ($_smarty_tpl->getValue('runtime')['controller'] == "auth" && $_smarty_tpl->getValue('runtime')['mode'] == "recover_password" && $_smarty_tpl->getValue('runtime')['action'] != "recover") {?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"auth_info:recover_password"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
	    <h4 class="ty-login-info__title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_recover_password_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h4>
	    <div class="ty-login-info__txt"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_recover_password", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"auth_info:recover_password"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
	<?php }?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"auth_info:extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"auth_info:extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
</div><?php }
}
}
