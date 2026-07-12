<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:11:53
  from 'tygh:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133f69522ad1_18762714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c37d56a16572e2db187c230bb205b5b28d960525' => 
    array (
      0 => 'index.tpl',
      1 => 1767831044,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:meta.tpl' => 1,
    'tygh:common/styles.tpl' => 1,
    'tygh:common/toolbar.tpl' => 1,
    'backend:components/bottom_panel/bottom_panel.tpl' => 1,
    'tygh:common/loading_box.tpl' => 1,
    'tygh:common/notification.tpl' => 1,
    'tygh:common/scripts.tpl' => 1,
    'backend:common/template_editor.tpl' => 1,
    'backend:common/theme_editor.tpl' => 1,
  ),
))) {
function content_6a133f69522ad1_18762714 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates';
\Tygh\Languages\Helper::preloadLangVars(array('on_site_template_editing'));
$_smarty_tpl->assign('pb_is_bottom_panel_open', ($_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN") || $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR") || $_smarty_tpl->getSmarty()->getModifierCallback('defined')("THEMES_PANEL")) && (($tmp = $_COOKIE['pb_is_bottom_panel_open'] ?? null)===null||$tmp==='' ? "1" ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('is_theme_editor_open', $_smarty_tpl->getValue('runtime')['customization_mode']['theme_editor'], false, NULL);?>
<!DOCTYPE html>
<html <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:html_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:html_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    lang="<?php echo htmlspecialchars((string) ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)), ENT_QUOTES, 'UTF-8');?>
"
    dir="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('language_direction')), ENT_QUOTES, 'UTF-8');?>
"
    class="<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:abt_ut2_html_class"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:abt_ut2_html_class"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
if ($_smarty_tpl->getValue('pb_is_bottom_panel_open')) {?> bp-panel-active<?php }
if ($_smarty_tpl->getValue('is_theme_editor_open')) {?> te-theme-editor-active<?php }?>"
>
<head>
<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "page_title", null, null);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('page_title')) {?>
    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page_title')), ENT_QUOTES, 'UTF-8');?>

<?php } else { ?>
    <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_generate_page_title')($_smarty_tpl->getValue('breadcrumbs'),$_smarty_tpl->getValue('language_direction'),$_smarty_tpl->getValue('location_data')['title'])), ENT_QUOTES, 'UTF-8');?>

<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
<title><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('trim')(preg_replace('!\s+!u', ' ',$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'page_title')));?>
</title>
<?php $_smarty_tpl->renderSubTemplate("tygh:meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <link href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_query_remove')($_smarty_tpl->getValue('logos')['favicon']['image']['image_path'],'t')), ENT_QUOTES, 'UTF-8');?>
" rel="shortcut icon" type="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_get_mime_content_type')($_smarty_tpl->getValue('logos')['favicon']['image']['absolute_path'])), ENT_QUOTES, 'UTF-8');?>
" />
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->renderSubTemplate("tygh:common/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('include_dropdown'=>true), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getSmarty()->getModifierCallback('defined')("DEVELOPMENT") && (defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null) == true) {
echo '<script'; ?>
 data-no-defer>
window.jsErrors = [];
window.onerror = function(message, source, lineno, colno, error) {
    var verboseMessage = message;
    if (source) {
        verboseMessage = source + '@' + lineno + ':' + colno + "\n\n" + message;
    }

    console.error(verboseMessage);

    if (error && error.stack) {
        console.log(error.stack);
    }

    document.write('<pre data-ca-debug="1" style="border: 2px solid red; margin: 2px;">'
        + verboseMessage + "\n\n"
        + (error && error.stack ? error.stack : '')
        + '</pre>'
    );
};
<?php echo '</script'; ?>
>
<!--[if lt IE 9]><?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.1.9/es5-shim.min.js"><?php echo '</script'; ?>
><![endif]-->
<?php }
$_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:head_scripts"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:head_scripts"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
</head>

<body class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('location_data')['user_class']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->getValue('settings')['ab__device'] === "mobile") {?>mobile-screen <?php }
if ($_smarty_tpl->getValue('settings')['ab__device'] === "tablet") {?>tablet-screen <?php }
if ($_smarty_tpl->getValue('settings')['ab__device'] === "desktop") {?>desktop-screen <?php }
if ($_smarty_tpl->getValue('auth')['user_id'] != 0) {?>user-is-authorized<?php } else { ?>user-is-guest<?php }?>">
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:body"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['design']) {?>
            <?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url']);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("on_site_template_editing", [], $_smarty_tpl->getSmarty()->getLanguage()),'href'=>"customization.disable_mode?type=design&return_url=".$_prefixVariable1), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('is_bottom_panel_available')) {?>
            <?php $_smarty_tpl->renderSubTemplate("backend:components/bottom_panel/bottom_panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('logo'=>(($tmp = $_smarty_tpl->getValue('logo')['theme']['image'] ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('logos')['theme']['image'] ?? null : $tmp)), (int) 0, $_smarty_current_dir);
?>
        <?php }?>

        <div class="ty-tygh <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['theme_editor']) {?>te-mode<?php }?> <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['live_editor'] || $_smarty_tpl->getValue('runtime')['customization_mode']['design'] || $_smarty_tpl->getValue('runtime')['customization_mode']['block_manager'] || (defined('THEMES_PANEL') ? constant('THEMES_PANEL') : null)) {?>ty-top-panel-padding<?php }?>" data-ca-element="mainContainer" id="tygh_container">

        <?php $_smarty_tpl->renderSubTemplate("tygh:common/loading_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <div class="ty-helper-container <?php if ($_smarty_tpl->getValue('is_bottom_panel_available')) {?>bp-tygh-main-container<?php }?>"
            <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['block_manager'] && $_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed']) {?>
                data-ca-block-manager="main"
            <?php }?>
        id="tygh_main_container">
            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                                 <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('render_location')->handle(array(), $_smarty_tpl);?>

            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <div class="ut2-header-allows-h-menu-stuck-top-sentinel"></div>
        <!--tygh_main_container--></div>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:footer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:footer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <!--tygh_container--></div>

        <?php $_smarty_tpl->renderSubTemplate("tygh:common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['design']) {?>
            <?php $_smarty_tpl->renderSubTemplate("backend:common/template_editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['theme_editor']) {?>
            <?php $_smarty_tpl->renderSubTemplate("backend:common/theme_editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:body"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
</body>

</html>
<?php }
}
