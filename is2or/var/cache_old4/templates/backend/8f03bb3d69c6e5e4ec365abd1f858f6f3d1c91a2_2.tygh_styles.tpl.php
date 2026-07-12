<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:33
  from 'tygh:common/styles.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb49f9710409_68854646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f03bb3d69c6e5e4ec365abd1f858f6f3d1c91a2' => 
    array (
      0 => 'common/styles.tpl',
      1 => 1767831032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/critical_css.tpl' => 1,
    'tygh:views/statuses/components/styles.tpl' => 1,
  ),
))) {
function content_69fb49f9710409_68854646 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
$_smarty_tpl->getSmarty()->getRuntime('TplFunction')->registerTplFunctions($_smarty_tpl, array (
  'get_tygh_style_contents' => 
  array (
    'compiled_filepath' => '/var/www/is2or/var/cache/templates/backend/8f03bb3d69c6e5e4ec365abd1f858f6f3d1c91a2_2.tygh_styles.tpl.php',
    'uid' => '8f03bb3d69c6e5e4ec365abd1f858f6f3d1c91a2',
    'call_name' => 'smarty_template_function_get_tygh_style_contents_52016291369fb49f96f12b1_53601496',
  ),
));
$_smarty_tpl->renderSubTemplate("tygh:common/critical_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>




<?php $_smarty_tpl->assign('is_theme_editor_currently_opened', (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor" && $_smarty_tpl->getValue('runtime')['customization_mode']['theme_editor'] === true, false, NULL);?>

<?php if ($_smarty_tpl->getValue('backoffice_color_scheme') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::DARK") && !$_smarty_tpl->getValue('is_theme_editor_currently_opened')) {?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('styles')) {
throw new \Smarty\Exception('block tag \'styles\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('styles')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'get_tygh_style_contents', array('color_scheme'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::DARK")), true);?>

    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('styles')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
} elseif ($_smarty_tpl->getValue('backoffice_color_scheme') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::SYSTEM") && !$_smarty_tpl->getValue('is_theme_editor_currently_opened')) {?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('styles')) {
throw new \Smarty\Exception('block tag \'styles\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('styles')->handle(array('link_media'=>"screen and (prefers-color-scheme: light)"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'get_tygh_style_contents', array('color_scheme'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::LIGHT")), true);?>

    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('styles')->handle(array('link_media'=>"screen and (prefers-color-scheme: light)"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('styles')) {
throw new \Smarty\Exception('block tag \'styles\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('styles')->handle(array('link_media'=>"screen and (prefers-color-scheme: dark)"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'get_tygh_style_contents', array('color_scheme'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::DARK")), true);?>

    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('styles')->handle(array('link_media'=>"screen and (prefers-color-scheme: dark)"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
} else { ?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('styles')) {
throw new \Smarty\Exception('block tag \'styles\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('styles')->handle(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('TplFunction')->callTemplateFunction($_smarty_tpl, 'get_tygh_style_contents', array('color_scheme'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::LIGHT")), true);?>

    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('styles')->handle(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
/* smarty_template_function_get_tygh_style_contents_52016291369fb49f96f12b1_53601496 */
if (!function_exists('smarty_template_function_get_tygh_style_contents_52016291369fb49f96f12b1_53601496')) {
function smarty_template_function_get_tygh_style_contents_52016291369fb49f96f12b1_53601496(\Smarty\Template $_smarty_tpl,$params) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/common';
$params = array_merge(array('name'=>'get_tygh_style_contents'), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->assign($key, $value);
}
?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"ui/jqueryui.css"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"lib/select2/select2.min.css"), $_smarty_tpl);?>

    <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"lib/bootstrap_switch/stylesheets/bootstrapSwitch.css"), $_smarty_tpl);?>


    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"styles.less"), $_smarty_tpl);?>


        <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"config_vendor.less"), $_smarty_tpl);?>

        <?php }?>

        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"tygh/supports.css"), $_smarty_tpl);?>


        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"glyphs.css"), $_smarty_tpl);?>


        <?php $_smarty_tpl->renderSubTemplate("tygh:views/statuses/components/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>(defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null)), (int) 0, $_smarty_current_dir);
?>

        <?php if ($_smarty_tpl->getValue('language_direction') == 'rtl') {?>
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"rtl.less"), $_smarty_tpl);?>

        <?php }?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:styles"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

    <?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['block_manager']) {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"../../themes/responsive/css/tygh/components/block_manager.less"), $_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->getValue('color_scheme') === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("BackofficeColorSchemeVariants::DARK")) {?>
        <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"config_dark.less"), $_smarty_tpl);?>

        <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('style')->handle(array('src'=>"config_vendor_dark.less"), $_smarty_tpl);?>

        <?php }?>
    <?php }
}}
/*/ smarty_template_function_get_tygh_style_contents_52016291369fb49f96f12b1_53601496 */
}
