<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:38
  from 'tygh:/var/www/is2or/design/themes/responsive/templates/addons/is2or_currency_sar/overrides/addons/hybrid_auth/views/auth/components/login_buttons.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49fe2da775_71489165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9248aa6c2e9ee59d9f383617d183e8f357e920c1' => 
    array (
      0 => '/var/www/is2or/design/themes/responsive/templates/addons/is2or_currency_sar/overrides/addons/hybrid_auth/views/auth/components/login_buttons.tpl',
      1 => 1776394748,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb49fe2da775_71489165 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/is2or_currency_sar/overrides/addons/hybrid_auth/views/auth/components';
\Tygh\Languages\Helper::preloadLangVars(array('hybrid_auth.social_login','hybrid_auth.social_login'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"hybrid_auth:login_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if (!(true && ($_smarty_tpl->hasVariable('redirect_url') && null !== ($_smarty_tpl->getValue('redirect_url') ?? null)))) {?>
        <?php $_smarty_tpl->assign('redirect_url', $_smarty_tpl->getValue('config')['current_url'], false, NULL);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.social_login", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:
    <p class="ty-text-center"><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'hybrid_auth');?>

        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('redirect_url')), ENT_QUOTES, 'UTF-8');?>
" /><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('providers_list'), 'provider_data');
$foreach38DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('provider_data')->value) {
$foreach38DoElse = false;
if ($_smarty_tpl->getValue('provider_data')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {?><a class="ty-btn cm-login-provider ty-hybrid-auth__icon" data-idp="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider_id']), ENT_QUOTES, 'UTF-8');?>
" data-provider="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider']), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['icon']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider']), ENT_QUOTES, 'UTF-8');?>
" /> Login with <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('provider_data')['provider'])), ENT_QUOTES, 'UTF-8');?>
</a><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </p>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"hybrid_auth:login_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/is2or/design/themes/responsive/templates/addons/is2or_currency_sar/overrides/addons/hybrid_auth/views/auth/components/login_buttons.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"/var/www/is2or/design/themes/responsive/templates/addons/is2or_currency_sar/overrides/addons/hybrid_auth/views/auth/components/login_buttons.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"hybrid_auth:login_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php if (!(true && ($_smarty_tpl->hasVariable('redirect_url') && null !== ($_smarty_tpl->getValue('redirect_url') ?? null)))) {?>
        <?php $_smarty_tpl->assign('redirect_url', $_smarty_tpl->getValue('config')['current_url'], false, NULL);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("hybrid_auth.social_login", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:
    <p class="ty-text-center"><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'hybrid_auth');?>

        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('redirect_url')), ENT_QUOTES, 'UTF-8');?>
" /><?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('providers_list'), 'provider_data');
$foreach39DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('provider_data')->value) {
$foreach39DoElse = false;
if ($_smarty_tpl->getValue('provider_data')['status'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("ObjectStatuses::ACTIVE")) {?><a class="ty-btn cm-login-provider ty-hybrid-auth__icon" data-idp="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider_id']), ENT_QUOTES, 'UTF-8');?>
" data-provider="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider']), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['icon']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('provider_data')['provider']), ENT_QUOTES, 'UTF-8');?>
" /> Login with <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('provider_data')['provider'])), ENT_QUOTES, 'UTF-8');?>
</a><?php }
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </p>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"hybrid_auth:login_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
}
