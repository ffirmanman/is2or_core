<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:11
  from 'tygh:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad945f5179b8_40821553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d5e491d016ce888753a84ca8d9f7e4dc3becb7c' => 
    array (
      0 => 'index.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/styles.tpl' => 1,
    'tygh:buttons/helpers.tpl' => 1,
    'tygh:common/loading_box.tpl' => 2,
    'tygh:components/bottom_panel/bottom_panel.tpl' => 1,
    'tygh:common/notification.tpl' => 1,
    'tygh:top_bar.tpl' => 1,
    'tygh:menu.tpl' => 1,
    'tygh:common/comet.tpl' => 1,
    'tygh:views/settings/store_mode.tpl' => 1,
    'tygh:views/settings/trial_expired.tpl' => 1,
    'tygh:views/settings/license_errors.tpl' => 1,
    'tygh:common/scripts.tpl' => 1,
    'tygh:components/licensing/upgrade_popup.tpl' => 1,
  ),
))) {
function content_69ad945f5179b8_40821553 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates';
\Tygh\Languages\Helper::preloadLangVars(array('admin_panel'));
$_smarty_tpl->assign('html_class', '', false, NULL);
$_smarty_tpl->assign('html_styles_string', '', false, NULL);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:index_container"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_smarty_tpl->assign('pb_is_bottom_panel_open', ($_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN") || $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR") || $_smarty_tpl->getSmarty()->getModifierCallback('defined')("THEMES_PANEL")) && (($tmp = $_COOKIE['pb_is_bottom_panel_open'] ?? null)===null||$tmp==='' ? "1" ?? null : $tmp), false, NULL);
if ($_smarty_tpl->getValue('pb_is_bottom_panel_open')) {
$_smarty_tpl->assign('html_class', ((string)$_smarty_tpl->getValue('html_class'))." bp-panel-active", false, NULL);
}
$_smarty_tpl->assign('scroll_header', (($tmp = $_smarty_tpl->getValue('config')['tweaks']['scroll_header'] ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('html_class', ($_smarty_tpl->getValue('backoffice_color_scheme') && $_smarty_tpl->getValue('backoffice_color_scheme') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::DARK")) ? ((string)$_smarty_tpl->getValue('html_class'))." cs-dark-theme" : ((string)$_smarty_tpl->getValue('html_class'))." cs-light-theme", false, NULL);
if ($_smarty_tpl->getValue('config')['tweaks']['html_styles']) {
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('config')['tweaks']['html_styles'], 'html_style', false, 'html_style_key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('html_style_key')->value => $_smarty_tpl->getVariable('html_style')->value) {
$foreach0DoElse = false;
$_smarty_tpl->assign('html_styles_string', ((string)$_smarty_tpl->getValue('html_styles_string'))." ".((string)$_smarty_tpl->getValue('html_style_key')).": ".((string)$_smarty_tpl->getValue('html_style')).";", false, NULL);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
$_smarty_tpl->assign('html_styles_string', "style=\"".((string)($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('html_styles_string'))))."\"", false, NULL);
}?><!DOCTYPE html>
<html lang="en"
    dir="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
"
    class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('html_class')), ENT_QUOTES, 'UTF-8');?>
"
<?php if ($_smarty_tpl->getValue('html_styles_string')) {?>
    <?php echo $_smarty_tpl->getValue('html_styles_string');?>

<?php }?>
>
<head>
<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:head"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
<title><?php if ($_smarty_tpl->getValue('page_title')) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('page_title')), ENT_QUOTES, 'UTF-8');
} else {
if ($_smarty_tpl->getValue('navigation')['selected_tab']) {
if ($_smarty_tpl->getValue('navigation')['selected_tab_title']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('navigation')['selected_tab_title']), ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('navigation')['selected_tab'], [], $_smarty_tpl->getSmarty()->getLanguage());
}
if ($_smarty_tpl->getValue('navigation')['subsection']) {?> :: <?php if ($_smarty_tpl->getValue('navigation')['subsection_title']) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('navigation')['subsection_title']), ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")($_smarty_tpl->getValue('navigation')['subsection'], [], $_smarty_tpl->getSmarty()->getLanguage());
}
}?> - <?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("admin_panel", [], $_smarty_tpl->getSmarty()->getLanguage());
}?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />

<link rel="apple-touch-icon" sizes="180x180" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/favicons/favicon-16x16.png">
<link rel="manifest" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/favicons/site.webmanifest">
<link rel="mask-icon" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('images_dir')), ENT_QUOTES, 'UTF-8');?>
/favicons/safari-pinned-tab.svg" color="#0fa4d6">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<?php $_smarty_tpl->renderSubTemplate("tygh:common/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getSmarty()->getModifierCallback('defined')("DEVELOPMENT") && (defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null) == true) {
echo '<script'; ?>
 data-no-defer>
window.jsErrors = [];
/*window.onerror = function(errorMessage) {
    document.write('<div data-ca-debug="1" style="border: 2px solid red; margin: 2px;">' + errorMessage + '</div>');
}*/
<?php echo '</script'; ?>
>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:head"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
</head>
<?php $_smarty_tpl->renderSubTemplate("tygh:buttons/helpers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php ob_start();
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {
echo " vendor-area";
}
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->assign('class', $_prefixVariable1, false, NULL);?>
<body <?php if ($_smarty_tpl->getValue('class')) {?>class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('class')), ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-scroll-to-elm-offset="120" <?php if ($_smarty_tpl->getValue('config')['tweaks']['body_attrs']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('render_tag_attrs')($_smarty_tpl->getValue('config')['tweaks']['body_attrs']);
}?>>
    <div id="tygh_settings" class="hidden" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-current-location="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['current_location']), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-area="A" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
data-ca-is-dark-theme="<?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('backoffice_color_scheme') && $_smarty_tpl->getValue('backoffice_color_scheme') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::DARK"))), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) (''), ENT_QUOTES, 'UTF-8');?>
></div>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:body_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/loading_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php if ($_smarty_tpl->getValue('is_bottom_panel_available')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:components/bottom_panel/bottom_panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('logo'=>$_smarty_tpl->getValue('logos')['theme']['image']), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php ob_start();
$_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('content_tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('content', ob_get_clean(), false, 0);
?>

    <div class="main-wrap <?php if ($_smarty_tpl->getValue('is_bottom_panel_available')) {?>bp-tygh-main-container<?php }?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('main_container_class')), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-element="mainContainer" id="main_column<?php if (!$_smarty_tpl->getValue('auth')['user_id'] || $_smarty_tpl->getValue('view_mode') == 'simple') {?>_login<?php }?>">
    <?php if ($_smarty_tpl->getValue('view_mode') != "simple") {?>
        <div class="admin-content">
            <?php $_smarty_tpl->renderSubTemplate("tygh:top_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

            <div class="admin-content-wrap <?php if ($_smarty_tpl->getValue('scroll_header')) {?>admin-content-wrap--scroll-header<?php }?>">
                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:main_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:main_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                <?php echo $_smarty_tpl->getValue('content');?>

                <?php echo (($tmp = $_smarty_tpl->getValue('stats') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

            </div>
        </div>
        <?php } else { ?>
        <?php echo $_smarty_tpl->getValue('content');?>

    <?php }?>

    <!--main_column<?php if (!$_smarty_tpl->getValue('auth')['user_id'] || $_smarty_tpl->getValue('view_mode') == 'simple') {?>_login<?php }?>--></div>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/comet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_meta_redirect')($_REQUEST['meta_redirect_url'])) {?>
        <meta http-equiv="refresh" content="1;url=<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_meta_redirect')($_REQUEST['meta_redirect_url']))), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->getValue('auth')['user_id'] && $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')('settings','change_store_mode','admin','POST')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/settings/store_mode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show'=>$_smarty_tpl->getValue('show_sm_dialog')), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/settings/trial_expired.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show'=>$_smarty_tpl->getValue('show_trial_dialog')), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/settings/license_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show'=>$_smarty_tpl->getValue('show_license_errors_dialog')), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:after_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:after_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:common/loading_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:body_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:components/licensing/upgrade_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('auto_open'=>true), (int) 0, $_smarty_current_dir);
?>
</body>
</html>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:index_container"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
