<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:44:07
  from 'tygh:addons/gdpr/hooks/google_analytics/head_scripts.pre.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afafa7b9bfb5_93460587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec38a51a702102fe751a5b3cf2b774d499aef25e' => 
    array (
      0 => 'addons/gdpr/hooks/google_analytics/head_scripts.pre.tpl',
      1 => 1767831051,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69afafa7b9bfb5_93460587 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/gdpr/hooks/google_analytics';
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('addons')['gdpr']['gdpr_cookie_consent'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Gdpr\\CookiesPolicyManager::COOKIE_POLICY_NONE")) {?>
    <?php $_smarty_tpl->assign('load_script', false, false, 2);?>

    <?php echo '<script'; ?>
>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('consent', 'default', {
            ad_storage: 'denied',
            analytics_storage: 'denied',
            ad_user_data: 'denied',
            ad_personalization: 'denied'
        });
        gtag('set', 'ads_data_redaction', true);

        function loadGtagScript() {
            $.getScript("https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['google_analytics']['tracking_code']), ENT_QUOTES, 'UTF-8');?>
");
        }
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/plain" data-type="application/javascript" data-name="google-ads">
        loadGtagScript();

        gtag('consent', 'update', {
            ad_storage: 'granted',
            ad_user_data: 'granted',
            ad_personalization: 'granted'
        });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/plain" data-type="application/javascript" data-name="google-analytics">
        loadGtagScript();

        gtag('consent', 'update', { analytics_storage: 'granted'});
    <?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/hooks/google_analytics/head_scripts.pre.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/gdpr/hooks/google_analytics/head_scripts.pre.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('addons')['gdpr']['gdpr_cookie_consent'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Gdpr\\CookiesPolicyManager::COOKIE_POLICY_NONE")) {?>
    <?php $_smarty_tpl->assign('load_script', false, false, 2);?>

    <?php echo '<script'; ?>
>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('consent', 'default', {
            ad_storage: 'denied',
            analytics_storage: 'denied',
            ad_user_data: 'denied',
            ad_personalization: 'denied'
        });
        gtag('set', 'ads_data_redaction', true);

        function loadGtagScript() {
            $.getScript("https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('addons')['google_analytics']['tracking_code']), ENT_QUOTES, 'UTF-8');?>
");
        }
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/plain" data-type="application/javascript" data-name="google-ads">
        loadGtagScript();

        gtag('consent', 'update', {
            ad_storage: 'granted',
            ad_user_data: 'granted',
            ad_personalization: 'granted'
        });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/plain" data-type="application/javascript" data-name="google-analytics">
        loadGtagScript();

        gtag('consent', 'update', { analytics_storage: 'granted'});
    <?php echo '</script'; ?>
>
<?php }
}
}
}
