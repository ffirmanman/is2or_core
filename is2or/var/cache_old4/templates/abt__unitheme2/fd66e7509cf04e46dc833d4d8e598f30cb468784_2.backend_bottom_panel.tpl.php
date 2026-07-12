<?php
/* Smarty version 5.4.3, created on 2026-05-06 17:02:44
  from 'backend:components/bottom_panel/bottom_panel.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69fb4a0462f957_39658332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd66e7509cf04e46dc833d4d8e598f30cb468784' => 
    array (
      0 => 'components/bottom_panel/bottom_panel.tpl',
      1 => 1767831033,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
    'backend:common/image.tpl' => 4,
    'backend:components/bottom_panel/icons/bp-modes__item--preview.svg' => 2,
    'backend:components/bottom_panel/icons/bp-modes__item--text.svg' => 2,
    'backend:components/bottom_panel/icons/bp-modes__item--theme.svg' => 2,
    'backend:components/bottom_panel/icons/bp-modes__item--build.svg' => 2,
    'backend:components/bottom_panel/icons/bp-dropdown-button--settings.svg' => 2,
    'backend:components/bottom_panel/icons/bp-dropdown-button--help.svg' => 2,
    'backend:components/bottom_panel/icons/bp-close.svg' => 2,
  ),
))) {
function content_69fb4a0462f957_39658332 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/bottom_panel';
\Tygh\Languages\Helper::preloadLangVars(array('bottom_panel.change_theme','bottom_panel.change_theme','bottom_panel.edit_layout','bottom_panel.edit_layout','bottom_panel.edit_template','bottom_panel.edit_template','bottom_panel.edit_translations','bottom_panel.edit_translations','bottom_panel.edit_menus','bottom_panel.edit_menus','bottom_panel.edit_product_tabs','bottom_panel.edit_product_tabs','bottom_panel.go_to_home_page','bottom_panel.go_to_dashboard','bottom_panel.storefront','bottom_panel.admin_panel','bottom_panel.vendor_panel','bottom_panel.preview_mode','bottom_panel.text_mode','bottom_panel.theme_mode','bottom_panel.theme_mode.not_available','bottom_panel.build_mode','bottom_panel.build_mode.not_available','bottom_panel.settings','bottom_panel.help','bottom_panel.documentation','bottom_panel.community_forums','bottom_panel.video_tutorials','bottom_panel.faq','bottom_panel.customer_help_desk','bottom_panel.hire_a_developers','bottom_panel.hide_bottom_admin_panel','bottom_panel.show_bottom_admin_panel','bottom_panel.change_theme','bottom_panel.change_theme','bottom_panel.edit_layout','bottom_panel.edit_layout','bottom_panel.edit_template','bottom_panel.edit_template','bottom_panel.edit_translations','bottom_panel.edit_translations','bottom_panel.edit_menus','bottom_panel.edit_menus','bottom_panel.edit_product_tabs','bottom_panel.edit_product_tabs','bottom_panel.go_to_home_page','bottom_panel.go_to_dashboard','bottom_panel.storefront','bottom_panel.admin_panel','bottom_panel.vendor_panel','bottom_panel.preview_mode','bottom_panel.text_mode','bottom_panel.theme_mode','bottom_panel.theme_mode.not_available','bottom_panel.build_mode','bottom_panel.build_mode.not_available','bottom_panel.settings','bottom_panel.help','bottom_panel.documentation','bottom_panel.community_forums','bottom_panel.video_tutorials','bottom_panel.faq','bottom_panel.customer_help_desk','bottom_panel.hire_a_developers','bottom_panel.hide_bottom_admin_panel','bottom_panel.show_bottom_admin_panel'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('bottom_panel_open_logo', $_smarty_tpl->getValue('logo'), false, NULL);
$_smarty_tpl->assign('bottom_panel_close_logo', $_smarty_tpl->getValue('logo'), false, NULL);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:bottom_panel_main"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

<?php $_smarty_tpl->assign('c_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url']), false, NULL);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:edition"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->assign('edition', "store", false, NULL);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:edition"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php if ($_smarty_tpl->getValue('runtime')['controller'] === "products") {?>
    <?php $_smarty_tpl->assign('page', "products", false, NULL);
} elseif ($_smarty_tpl->getValue('runtime')['controller'] === "checkout" && $_smarty_tpl->getValue('runtime')['mode'] === "checkout") {?>
    <?php $_smarty_tpl->assign('page', "checkout", false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['block_manager'] && ($_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed'] || (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor")) {?>
    <?php $_smarty_tpl->assign('active_mode', "build", false, NULL);
} elseif ($_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?>
    <?php $_smarty_tpl->assign('active_mode', "text", false, NULL);
} elseif ($_smarty_tpl->getValue('runtime')['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->assign('active_mode', "theme", false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('active_mode', "preview", false, NULL);
}?>

<?php $_smarty_tpl->assign('is_demo_mode', (($tmp = $_smarty_tpl->getValue('config')['demo_mode'] ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_bp_modes_on_backend', (($tmp = $_smarty_tpl->getValue('show_bp_modes_on_backend') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_theme_editor', (($tmp = $_smarty_tpl->getValue('show_theme_editor') ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("customization","update_mode","admin",'',array("type"=>"theme_editor"),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && (($_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN")) || (($_smarty_tpl->getValue('settings')['Vendors']['can_edit_styles'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) && $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR"))) || ($_smarty_tpl->getValue('is_demo_mode') && (defined('AREA') ? constant('AREA') : null) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("SiteArea::STOREFRONT"))) ?? null : $tmp), false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "settings_menu_main_links", null, null);?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("themes","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && ($_smarty_tpl->getValue('auth')['user_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR") || $_smarty_tpl->getValue('settings')['Vendors']['can_edit_styles'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("themes.manage",$_smarty_tpl->getValue('auth')['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.change_theme", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.change_theme", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("block_manager","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && ($_smarty_tpl->getValue('auth')['user_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR") || $_smarty_tpl->getValue('settings')['Vendors']['can_edit_blocks'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("block_manager.manage?selected_location=".((string)$_smarty_tpl->getValue('location_data')['location_id'])."&redirect_to_block_manager=1",$_smarty_tpl->getValue('auth')['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_layout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_layout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("templates","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && (( !true || empty($_smarty_tpl->getValue('auth')['company_id'])) || $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_company_permissions')("templates","manage",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("templates.manage",$_smarty_tpl->getValue('auth')['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_template", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_template", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("languages","translations","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && (( !true || empty($_smarty_tpl->getValue('auth')['company_id'])) || $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_company_permissions')("languages","translations",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("languages.translations",$_smarty_tpl->getValue('auth')['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_translations", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_translations", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "settings_menu_additional_links", null, null);?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("templates","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && (( !true || empty($_smarty_tpl->getValue('auth')['company_id'])) || $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_company_permissions')("templates","manage",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("menus.manage",$_smarty_tpl->getValue('auth')['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_menus", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_menus", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('page') === "products" && $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("tabs","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && (( !true || empty($_smarty_tpl->getValue('auth')['company_id'])) || $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_company_permissions')("tabs","manage",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("tabs.manage",$_smarty_tpl->getValue('auth')['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_product_tabs", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_product_tabs", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "settings_menu", null, null);?>
    <?php if ($_smarty_tpl->getValue('quick_menu')) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('quick_menu'), 'sect');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sect')->value) {
$foreach0DoElse = false;
?>
            <div class="bp-dropdown-menu__group">
                <span class="bp-dropdown-menu__item-text bp-dropdown-menu__item-text--head"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sect')['section']['name']), ENT_QUOTES, 'UTF-8');?>
</span>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sect')['subsection'], 'subsect');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subsect')->value) {
$foreach1DoElse = false;
?>
                    <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('subsect')['url'],$_smarty_tpl->getValue('auth')['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subsect')['name']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subsect')['name']), ENT_QUOTES, 'UTF-8');?>
</a>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'settings_menu_main_links'))) {?>
        <div class="bp-dropdown-menu__group">
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'settings_menu_main_links');?>

        </div>
    <?php }?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'settings_menu_additional_links'))) {?>
        <div class="bp-dropdown-menu__group">
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'settings_menu_additional_links');?>

        </div>
    <?php }?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_settings_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_settings_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>


<?php $_smarty_tpl->assign('utm', "utm_source=".((string)($_smarty_tpl->getSmarty()->getModifierCallback('replace')(preg_replace('!\s+!u', '',mb_strtolower((string) (defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null), 'UTF-8')),'-','_')))."&utm_medium=".((string)$_smarty_tpl->getValue('edition')), false, NULL);?>

<?php if ($_smarty_tpl->getValue('runtime')['is_multiple_storefronts']) {?>
    <?php if ($_REQUEST['storefront_id']) {?>
        <?php $_smarty_tpl->assign('storefront_id', $_REQUEST['storefront_id'], false, NULL);?>
    <?php } elseif (($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')('MULTIVENDOR'))) {?>
        <?php $_smarty_tpl->assign('storefront_id', (($tmp = $_smarty_tpl->getValue('selected_storefront_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('app')["storefront"]->storefront_id ?? null : $tmp), false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('storefront_id', (($tmp = $_smarty_tpl->getValue('selected_storefront_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('app')["storefront.switcher.selected_storefront_id"] ?? null : $tmp), false, NULL);?>
    <?php }
}?>

<div class="bp__container">
    <div id="bp_bottom_panel"
        class="bp-panel bp-panel--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('edition')), ENT_QUOTES, 'UTF-8');?>
 bp-panel--<?php echo htmlspecialchars((string) ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-bottom-pannel="true"
        data-bp-mode="demo"
        data-bp-is-bottom-panel-open="true"
        data-bp-nav-active=<?php echo htmlspecialchars((string) ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)), ENT_QUOTES, 'UTF-8');?>

        data-bp-modes-active="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('active_mode')), ENT_QUOTES, 'UTF-8');?>
">
        <a href="<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer") {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('',"C")), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('',"A")), ENT_QUOTES, 'UTF-8');
}?>"
            class="bp-logo"
            data-bp-tooltip="true">
            <?php $_smarty_tpl->renderSubTemplate("backend:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->getValue('bottom_panel_open_logo'),'image_css_class'=>"bp-logo-img--no-color",'show_detailed_link'=>false), (int) 0, $_smarty_current_dir);
?>
            <div class="bp-tooltip bp-tooltip--left">
            <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer") {?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.go_to_home_page", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.go_to_dashboard", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php }?>
            </div>
        </a>
        <div class="bp-nav">
            <?php $_smarty_tpl->assign('redirect_area', ($_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR")) ? "V" : "A", false, NULL);?>
            <a href="<?php ob_start();
if ($_smarty_tpl->getValue('storefront_id')) {
echo "&storefront_id=";
echo (string)$_smarty_tpl->getValue('storefront_id');
}
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("bottom_panel.redirect?url=".((string)($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url'])))."&area=".((string)(defined('AREA') ? constant('AREA') : null))."&to_area=C".$_prefixVariable1,$_smarty_tpl->getValue('redirect_area'))), ENT_QUOTES, 'UTF-8');?>
"
                class="bp-nav__item cm-no-ajax
                <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer") {?>
                    bp-nav__item--active
                <?php }?>"
                data-bp-nav-item="customer">
                <span class="bp-nav__item-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.storefront", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            </a>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('defined')("THEMES_PANEL") || $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN")) {?>
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("bottom_panel.login_as_admin?url=".((string)($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url'])))."&area=".((string)(defined('AREA') ? constant('AREA') : null))."&user_id=".((string)$_smarty_tpl->getValue('auth')['user_id']),"C")), ENT_QUOTES, 'UTF-8');?>
" class="bp-nav__item cm-no-ajax cm-post
                    <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
                        bp-nav__item--active
                    <?php }?>"
                    data-bp-nav-item="admin">
                    <span class="bp-nav__item-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.admin_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                </a>
            <?php }?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('defined')("THEMES_PANEL") || $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR")) {?>
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("bottom_panel.login_as_vendor?url=".((string)($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url'])))."&area=".((string)(defined('AREA') ? constant('AREA') : null))."&user_id=".((string)$_smarty_tpl->getValue('auth')['user_id']),"C")), ENT_QUOTES, 'UTF-8');?>
" class="bp-nav__item cm-no-ajax cm-post
                        <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>
                            bp-nav__item--active
                        <?php }?>"
                        data-bp-nav-item="vendor">
                        <span class="bp-nav__item-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.vendor_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    </a>
                <?php }?>
            <?php }?>
            <div id="bp-nav__active" class="bp-nav__active
                <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer") {?>
                    bp-nav__active--activated
                <?php }?>"></div>
        </div>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:bp_modes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer" && (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR:ULTIMATE") || ( !true || empty($_smarty_tpl->getValue('auth')['storefront_id'])) || (int) $_smarty_tpl->getValue('auth')['storefront_id'] === (int) $_smarty_tpl->getValue('runtime')['storefront_id']) || $_smarty_tpl->getValue('show_bp_modes_on_backend') && (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor" && ($_smarty_tpl->getValue('auth')['act_as_user'] && $_smarty_tpl->getValue('auth')['act_as_area'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR")) || $_smarty_tpl->getValue('is_demo_mode') && ($_smarty_tpl->getValue('auth')['user_id'] && (defined('AREA') ? constant('AREA') : null) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("SiteArea::ADMIN_PANEL") && $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR"))) {?>
                <div class="bp-modes">
                    <a
                        <?php if ($_smarty_tpl->getValue('active_mode') === "text") {?>
                            href="<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("customization.disable_mode?type=live_editor&return_url=".$_prefixVariable2)), ENT_QUOTES, 'UTF-8');?>
"
                        <?php } elseif ($_smarty_tpl->getValue('active_mode') === "theme") {?>
                            href="<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("customization.disable_mode?type=theme_editor&return_url=".$_prefixVariable3)), ENT_QUOTES, 'UTF-8');?>
"
                        <?php } elseif ($_smarty_tpl->getValue('active_mode') === "build") {?>
                            href="<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("customization.disable_mode?type=block_manager&return_url=".$_prefixVariable4)), ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
                            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                        id="settings_block_manager"
                        class="cm-no-ajax bp-modes__item bp-modes__item--preview
                        <?php if ($_smarty_tpl->getValue('active_mode') === "preview") {?>bp-modes__item--active<?php }?>"
                            data-bp-modes-item="preview"
                            data-bp-tooltip="true">
                        <?php $_smarty_tpl->renderSubTemplate("backend:components/bottom_panel/icons/bp-modes__item--preview.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                        <div class="bp-tooltip"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.preview_mode", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                    </a>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("customization","update_mode","admin",'',array("type"=>"live_editor"),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN") || ($_smarty_tpl->getValue('is_demo_mode') && (defined('AREA') ? constant('AREA') : null) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("SiteArea::STOREFRONT"))) {?>
                        <a href="<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('c_url'))), ENT_QUOTES, 'UTF-8');
$_prefixVariable5=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("customization.update_mode?type=live_editor&status=enable&return_url=".$_prefixVariable5)), ENT_QUOTES, 'UTF-8');?>
"
                            id="settings_live_editor"
                            class="cm-no-ajax bp-modes__item bp-modes__item--text
                            <?php if ($_smarty_tpl->getValue('active_mode') === "text") {?>bp-modes__item--active<?php }?>"
                            data-bp-modes-item="text"
                            data-bp-tooltip="true">
                            <?php $_smarty_tpl->renderSubTemplate("backend:components/bottom_panel/icons/bp-modes__item--text.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                            <div class="bp-tooltip"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.text_mode", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                        </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('show_theme_editor')) {?>
                        <a href="<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is_theme_editor_available_for_user')($_smarty_tpl->getValue('auth')) || $_smarty_tpl->getValue('is_demo_mode')) {
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('c_url'))), ENT_QUOTES, 'UTF-8');
$_prefixVariable6=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("customization.update_mode?type=theme_editor&status=enable&return_url=".$_prefixVariable6)), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"
                            id="settings_theme_editor"
                            class="cm-no-ajax bp-modes__item bp-modes__item--theme
                            <?php if ($_smarty_tpl->getValue('active_mode') === "theme") {?>bp-modes__item--active<?php }?>
                            <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_is_theme_editor_available_for_user')($_smarty_tpl->getValue('auth')) && !$_smarty_tpl->getValue('is_demo_mode')) {?>bp-modes__item--disabled<?php }?>"
                            data-bp-modes-item="theme"
                            data-bp-tooltip="true">
                            <?php $_smarty_tpl->renderSubTemplate("backend:components/bottom_panel/icons/bp-modes__item--theme.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                            <div class="bp-tooltip">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.theme_mode", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_is_theme_editor_available_for_user')($_smarty_tpl->getValue('auth')) && !$_smarty_tpl->getValue('is_demo_mode')) {?>
                                    <div class="bp-tooltip__secondary">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.theme_mode.not_available", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </div>
                                <?php }?>
                            </div>
                        </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("customization","update_mode","admin",'',array("type"=>"block_manager"),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && (( !true || empty($_smarty_tpl->getValue('auth')['company_id'])) || $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_company_permissions')("customization","update_mode",'',array("type"=>"block_manager"))) && $_smarty_tpl->getValue('auth')['user_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::CUSTOMER") || $_smarty_tpl->getValue('is_demo_mode')) {?>
                        <a href="<?php if ($_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed'] || (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('c_url'))), ENT_QUOTES, 'UTF-8');
$_prefixVariable7=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("customization.update_mode?type=block_manager&status=enable&return_url=".$_prefixVariable7)), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"
                            id="settings_block_manager"
                            class="cm-no-ajax bp-modes__item bp-modes__item--build
                            <?php if ($_smarty_tpl->getValue('active_mode') === "build") {?>bp-modes__item--active<?php }?>
                            <?php if (!$_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed'] && (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer") {?>bp-modes__item--disabled<?php }?>"
                            data-bp-modes-item="build"
                            data-bp-tooltip="true">
                            <?php $_smarty_tpl->renderSubTemplate("backend:components/bottom_panel/icons/bp-modes__item--build.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                            <div class="bp-tooltip">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.build_mode", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer"&!$_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed']) {?>
                                    <div class="bp-tooltip__secondary">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.build_mode.not_available", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </div>
                                <?php }?>
                            </div>
                        </a>
                    <?php }?>
                    <div id="bp-modes__active" class="bp-modes__active
                        <?php if ($_smarty_tpl->getValue('active_mode') === "preview") {?>
                            bp-modes__active--preview
                        <?php }?>"
                    ></div>
                </div>
            <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:bp_modes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_element_on_panel"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_element_on_panel"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <div class="bp-actions <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'settings_menu'))) {?>bp-actions--one-column<?php }?>">
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'settings_menu')) && (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR:ULTIMATE") || ( !true || empty($_smarty_tpl->getValue('auth')['storefront_id'])) || (int) $_smarty_tpl->getValue('auth')['storefront_id'] === (int) $_smarty_tpl->getValue('runtime')['storefront_id'])) {?>
                <div class="bp-dropdown bp-actions__item">
                    <button class="bp-dropdown-button bp-dropdown-button--animation" data-bp-toggle="dropdown"
                        data-bp-tooltip="true">
                        <?php $_smarty_tpl->renderSubTemplate("backend:components/bottom_panel/icons/bp-dropdown-button--settings.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                        <span class="bp-tooltip"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.settings", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    </button>
                    <div class="bp-dropdown-menu">
                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'settings_menu');?>

                    </div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('auth')['user_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR")) {?>
                <div class="bp-dropdown bp-actions__item">
                    <button class="bp-dropdown-button" data-bp-toggle="dropdown" data-bp-tooltip="true">
                        <?php $_smarty_tpl->renderSubTemplate("backend:components/bottom_panel/icons/bp-dropdown-button--help.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                        <span class="bp-tooltip"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.help", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    </button>
                    <div class="bp-dropdown-menu">
                        <div class="bp-dropdown-menu__group">
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['resources']['docs_url'],$_smarty_tpl->getValue('utm')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.documentation", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['resources']['forum'],$_smarty_tpl->getValue('utm')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.community_forums", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['resources']['video_tutorials'],$_smarty_tpl->getValue('utm')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.video_tutorials", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['resources']['faq'],$_smarty_tpl->getValue('utm')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.faq", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_help_menu_group_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_help_menu_group_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        </div>
                        <div class="bp-dropdown-menu__group">
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['resources']['helpdesk_url'],$_smarty_tpl->getValue('utm')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.customer_help_desk", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['resources']['developers_catalog'],$_smarty_tpl->getValue('utm')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.hire_a_developers", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_help_menu_group_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_help_menu_group_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        </div>
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_help_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_help_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                    </div>
                </div>
            <?php }?>
        </div>
        <button id="bp_off_bottom_panel" class="bp-close"
            data-bp-tooltip="true"
            data-bp-save-state="true">
            <?php $_smarty_tpl->renderSubTemplate("backend:components/bottom_panel/icons/bp-close.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <span class="bp-tooltip bp-tooltip--right"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.hide_bottom_admin_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
        </button>
    </div>
    <div id="bp_bottom_buttons" class="bp-bottom-buttons
        <?php if (!$_smarty_tpl->getValue('pb_is_bottom_panel_open')) {?>
            bp-bottom-buttons--active
        <?php }?>">
        <button id="bp_on_bottom_panel"
            class="bp-bottom-button bp-bottom-button--logo
            <?php if ($_smarty_tpl->getValue('pb_is_bottom_panel_open')) {?>
                bp-bottom-button--disabled bp-bottom-button--disabled-panel
            <?php }?>"
            data-bp-bottom-buttons="panel"
            data-bp-tooltip="true">
            <?php $_smarty_tpl->renderSubTemplate("backend:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->getValue('bottom_panel_close_logo'),'image_css_class'=>"bp-logo-img bp-bottom-button-img",'show_detailed_link'=>false), (int) 0, $_smarty_current_dir);
?>
            <span class="bp-tooltip bp-tooltip--left"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.show_bottom_admin_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
        </button>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_element_on_closed_panel"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_element_on_closed_panel"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:bottom_panel_main"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/bottom_panel.js"), $_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:components/bottom_panel/bottom_panel.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"backend:components/bottom_panel/bottom_panel.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('bottom_panel_open_logo', $_smarty_tpl->getValue('logo'), false, NULL);
$_smarty_tpl->assign('bottom_panel_close_logo', $_smarty_tpl->getValue('logo'), false, NULL);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:bottom_panel_main"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

<?php $_smarty_tpl->assign('c_url', $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['current_url']), false, NULL);?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:edition"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_smarty_tpl->assign('edition', "store", false, NULL);
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:edition"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

<?php if ($_smarty_tpl->getValue('runtime')['controller'] === "products") {?>
    <?php $_smarty_tpl->assign('page', "products", false, NULL);
} elseif ($_smarty_tpl->getValue('runtime')['controller'] === "checkout" && $_smarty_tpl->getValue('runtime')['mode'] === "checkout") {?>
    <?php $_smarty_tpl->assign('page', "checkout", false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('runtime')['customization_mode']['block_manager'] && ($_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed'] || (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor")) {?>
    <?php $_smarty_tpl->assign('active_mode', "build", false, NULL);
} elseif ($_smarty_tpl->getValue('runtime')['customization_mode']['live_editor']) {?>
    <?php $_smarty_tpl->assign('active_mode', "text", false, NULL);
} elseif ($_smarty_tpl->getValue('runtime')['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->assign('active_mode', "theme", false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('active_mode', "preview", false, NULL);
}?>

<?php $_smarty_tpl->assign('is_demo_mode', (($tmp = $_smarty_tpl->getValue('config')['demo_mode'] ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_bp_modes_on_backend', (($tmp = $_smarty_tpl->getValue('show_bp_modes_on_backend') ?? null)===null||$tmp==='' ? false ?? null : $tmp), false, NULL);
$_smarty_tpl->assign('show_theme_editor', (($tmp = $_smarty_tpl->getValue('show_theme_editor') ?? null)===null||$tmp==='' ? ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("customization","update_mode","admin",'',array("type"=>"theme_editor"),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && (($_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN")) || (($_smarty_tpl->getValue('settings')['Vendors']['can_edit_styles'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) && $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR"))) || ($_smarty_tpl->getValue('is_demo_mode') && (defined('AREA') ? constant('AREA') : null) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("SiteArea::STOREFRONT"))) ?? null : $tmp), false, NULL);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "settings_menu_main_links", null, null);?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("themes","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && ($_smarty_tpl->getValue('auth')['user_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR") || $_smarty_tpl->getValue('settings')['Vendors']['can_edit_styles'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("themes.manage",$_smarty_tpl->getValue('auth')['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.change_theme", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.change_theme", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("block_manager","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && ($_smarty_tpl->getValue('auth')['user_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR") || $_smarty_tpl->getValue('settings')['Vendors']['can_edit_blocks'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("block_manager.manage?selected_location=".((string)$_smarty_tpl->getValue('location_data')['location_id'])."&redirect_to_block_manager=1",$_smarty_tpl->getValue('auth')['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_layout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_layout", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("templates","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && (( !true || empty($_smarty_tpl->getValue('auth')['company_id'])) || $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_company_permissions')("templates","manage",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("templates.manage",$_smarty_tpl->getValue('auth')['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_template", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_template", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("languages","translations","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && (( !true || empty($_smarty_tpl->getValue('auth')['company_id'])) || $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_company_permissions')("languages","translations",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("languages.translations",$_smarty_tpl->getValue('auth')['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_translations", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_translations", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "settings_menu_additional_links", null, null);?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("templates","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && (( !true || empty($_smarty_tpl->getValue('auth')['company_id'])) || $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_company_permissions')("templates","manage",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("menus.manage",$_smarty_tpl->getValue('auth')['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_menus", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_menus", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('page') === "products" && $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("tabs","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && (( !true || empty($_smarty_tpl->getValue('auth')['company_id'])) || $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_company_permissions')("tabs","manage",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("tabs.manage",$_smarty_tpl->getValue('auth')['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_product_tabs", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.edit_product_tabs", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "settings_menu", null, null);?>
    <?php if ($_smarty_tpl->getValue('quick_menu')) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('quick_menu'), 'sect');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sect')->value) {
$foreach2DoElse = false;
?>
            <div class="bp-dropdown-menu__group">
                <span class="bp-dropdown-menu__item-text bp-dropdown-menu__item-text--head"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sect')['section']['name']), ENT_QUOTES, 'UTF-8');?>
</span>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('sect')['subsection'], 'subsect');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subsect')->value) {
$foreach3DoElse = false;
?>
                    <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('subsect')['url'],$_smarty_tpl->getValue('auth')['user_type'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subsect')['name']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subsect')['name']), ENT_QUOTES, 'UTF-8');?>
</a>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'settings_menu_main_links'))) {?>
        <div class="bp-dropdown-menu__group">
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'settings_menu_main_links');?>

        </div>
    <?php }?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'settings_menu_additional_links'))) {?>
        <div class="bp-dropdown-menu__group">
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'settings_menu_additional_links');?>

        </div>
    <?php }?>
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_settings_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_settings_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>


<?php $_smarty_tpl->assign('utm', "utm_source=".((string)($_smarty_tpl->getSmarty()->getModifierCallback('replace')(preg_replace('!\s+!u', '',mb_strtolower((string) (defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null), 'UTF-8')),'-','_')))."&utm_medium=".((string)$_smarty_tpl->getValue('edition')), false, NULL);?>

<?php if ($_smarty_tpl->getValue('runtime')['is_multiple_storefronts']) {?>
    <?php if ($_REQUEST['storefront_id']) {?>
        <?php $_smarty_tpl->assign('storefront_id', $_REQUEST['storefront_id'], false, NULL);?>
    <?php } elseif (($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')('MULTIVENDOR'))) {?>
        <?php $_smarty_tpl->assign('storefront_id', (($tmp = $_smarty_tpl->getValue('selected_storefront_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('app')["storefront"]->storefront_id ?? null : $tmp), false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('storefront_id', (($tmp = $_smarty_tpl->getValue('selected_storefront_id') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('app')["storefront.switcher.selected_storefront_id"] ?? null : $tmp), false, NULL);?>
    <?php }
}?>

<div class="bp__container">
    <div id="bp_bottom_panel"
        class="bp-panel bp-panel--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('edition')), ENT_QUOTES, 'UTF-8');?>
 bp-panel--<?php echo htmlspecialchars((string) ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-bottom-pannel="true"
        data-bp-mode="demo"
        data-bp-is-bottom-panel-open="true"
        data-bp-nav-active=<?php echo htmlspecialchars((string) ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)), ENT_QUOTES, 'UTF-8');?>

        data-bp-modes-active="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('active_mode')), ENT_QUOTES, 'UTF-8');?>
">
        <a href="<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer") {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('',"C")), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('',"A")), ENT_QUOTES, 'UTF-8');
}?>"
            class="bp-logo"
            data-bp-tooltip="true">
            <?php $_smarty_tpl->renderSubTemplate("backend:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->getValue('bottom_panel_open_logo'),'image_css_class'=>"bp-logo-img--no-color",'show_detailed_link'=>false), (int) 0, $_smarty_current_dir);
?>
            <div class="bp-tooltip bp-tooltip--left">
            <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer") {?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.go_to_home_page", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.go_to_dashboard", [], $_smarty_tpl->getSmarty()->getLanguage());?>

            <?php }?>
            </div>
        </a>
        <div class="bp-nav">
            <?php $_smarty_tpl->assign('redirect_area', ($_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR")) ? "V" : "A", false, NULL);?>
            <a href="<?php ob_start();
if ($_smarty_tpl->getValue('storefront_id')) {
echo "&storefront_id=";
echo (string)$_smarty_tpl->getValue('storefront_id');
}
$_prefixVariable8=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("bottom_panel.redirect?url=".((string)($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url'])))."&area=".((string)(defined('AREA') ? constant('AREA') : null))."&to_area=C".$_prefixVariable8,$_smarty_tpl->getValue('redirect_area'))), ENT_QUOTES, 'UTF-8');?>
"
                class="bp-nav__item cm-no-ajax
                <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer") {?>
                    bp-nav__item--active
                <?php }?>"
                data-bp-nav-item="customer">
                <span class="bp-nav__item-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.storefront", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
            </a>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('defined')("THEMES_PANEL") || $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN")) {?>
                <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("bottom_panel.login_as_admin?url=".((string)($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url'])))."&area=".((string)(defined('AREA') ? constant('AREA') : null))."&user_id=".((string)$_smarty_tpl->getValue('auth')['user_id']),"C")), ENT_QUOTES, 'UTF-8');?>
" class="bp-nav__item cm-no-ajax cm-post
                    <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
                        bp-nav__item--active
                    <?php }?>"
                    data-bp-nav-item="admin">
                    <span class="bp-nav__item-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.admin_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                </a>
            <?php }?>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR")) {?>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('defined')("THEMES_PANEL") || $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR")) {?>
                    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("bottom_panel.login_as_vendor?url=".((string)($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url'])))."&area=".((string)(defined('AREA') ? constant('AREA') : null))."&user_id=".((string)$_smarty_tpl->getValue('auth')['user_id']),"C")), ENT_QUOTES, 'UTF-8');?>
" class="bp-nav__item cm-no-ajax cm-post
                        <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>
                            bp-nav__item--active
                        <?php }?>"
                        data-bp-nav-item="vendor">
                        <span class="bp-nav__item-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.vendor_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    </a>
                <?php }?>
            <?php }?>
            <div id="bp-nav__active" class="bp-nav__active
                <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer") {?>
                    bp-nav__active--activated
                <?php }?>"></div>
        </div>

        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:bp_modes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer" && (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR:ULTIMATE") || ( !true || empty($_smarty_tpl->getValue('auth')['storefront_id'])) || (int) $_smarty_tpl->getValue('auth')['storefront_id'] === (int) $_smarty_tpl->getValue('runtime')['storefront_id']) || $_smarty_tpl->getValue('show_bp_modes_on_backend') && (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor" && ($_smarty_tpl->getValue('auth')['act_as_user'] && $_smarty_tpl->getValue('auth')['act_as_area'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR")) || $_smarty_tpl->getValue('is_demo_mode') && ($_smarty_tpl->getValue('auth')['user_id'] && (defined('AREA') ? constant('AREA') : null) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("SiteArea::ADMIN_PANEL") && $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR"))) {?>
                <div class="bp-modes">
                    <a
                        <?php if ($_smarty_tpl->getValue('active_mode') === "text") {?>
                            href="<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable9=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("customization.disable_mode?type=live_editor&return_url=".$_prefixVariable9)), ENT_QUOTES, 'UTF-8');?>
"
                        <?php } elseif ($_smarty_tpl->getValue('active_mode') === "theme") {?>
                            href="<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable10=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("customization.disable_mode?type=theme_editor&return_url=".$_prefixVariable10)), ENT_QUOTES, 'UTF-8');?>
"
                        <?php } elseif ($_smarty_tpl->getValue('active_mode') === "build") {?>
                            href="<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('config')['current_url'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable11=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("customization.disable_mode?type=block_manager&return_url=".$_prefixVariable11)), ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
                            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                        id="settings_block_manager"
                        class="cm-no-ajax bp-modes__item bp-modes__item--preview
                        <?php if ($_smarty_tpl->getValue('active_mode') === "preview") {?>bp-modes__item--active<?php }?>"
                            data-bp-modes-item="preview"
                            data-bp-tooltip="true">
                        <?php $_smarty_tpl->renderSubTemplate("backend:components/bottom_panel/icons/bp-modes__item--preview.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                        <div class="bp-tooltip"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.preview_mode", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                    </a>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("customization","update_mode","admin",'',array("type"=>"live_editor"),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN") || ($_smarty_tpl->getValue('is_demo_mode') && (defined('AREA') ? constant('AREA') : null) === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("SiteArea::STOREFRONT"))) {?>
                        <a href="<?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('c_url'))), ENT_QUOTES, 'UTF-8');
$_prefixVariable12=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("customization.update_mode?type=live_editor&status=enable&return_url=".$_prefixVariable12)), ENT_QUOTES, 'UTF-8');?>
"
                            id="settings_live_editor"
                            class="cm-no-ajax bp-modes__item bp-modes__item--text
                            <?php if ($_smarty_tpl->getValue('active_mode') === "text") {?>bp-modes__item--active<?php }?>"
                            data-bp-modes-item="text"
                            data-bp-tooltip="true">
                            <?php $_smarty_tpl->renderSubTemplate("backend:components/bottom_panel/icons/bp-modes__item--text.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                            <div class="bp-tooltip"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.text_mode", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                        </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('show_theme_editor')) {?>
                        <a href="<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_is_theme_editor_available_for_user')($_smarty_tpl->getValue('auth')) || $_smarty_tpl->getValue('is_demo_mode')) {
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('c_url'))), ENT_QUOTES, 'UTF-8');
$_prefixVariable13=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("customization.update_mode?type=theme_editor&status=enable&return_url=".$_prefixVariable13)), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"
                            id="settings_theme_editor"
                            class="cm-no-ajax bp-modes__item bp-modes__item--theme
                            <?php if ($_smarty_tpl->getValue('active_mode') === "theme") {?>bp-modes__item--active<?php }?>
                            <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_is_theme_editor_available_for_user')($_smarty_tpl->getValue('auth')) && !$_smarty_tpl->getValue('is_demo_mode')) {?>bp-modes__item--disabled<?php }?>"
                            data-bp-modes-item="theme"
                            data-bp-tooltip="true">
                            <?php $_smarty_tpl->renderSubTemplate("backend:components/bottom_panel/icons/bp-modes__item--theme.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                            <div class="bp-tooltip">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.theme_mode", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_is_theme_editor_available_for_user')($_smarty_tpl->getValue('auth')) && !$_smarty_tpl->getValue('is_demo_mode')) {?>
                                    <div class="bp-tooltip__secondary">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.theme_mode.not_available", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </div>
                                <?php }?>
                            </div>
                        </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_permissions')("customization","update_mode","admin",'',array("type"=>"block_manager"),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->getValue('auth')['user_id']) && (( !true || empty($_smarty_tpl->getValue('auth')['company_id'])) || $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_company_permissions')("customization","update_mode",'',array("type"=>"block_manager"))) && $_smarty_tpl->getValue('auth')['user_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::CUSTOMER") || $_smarty_tpl->getValue('is_demo_mode')) {?>
                        <a href="<?php if ($_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed'] || (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {
ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('urlencode')($_smarty_tpl->getValue('c_url'))), ENT_QUOTES, 'UTF-8');
$_prefixVariable14=ob_get_clean();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("customization.update_mode?type=block_manager&status=enable&return_url=".$_prefixVariable14)), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"
                            id="settings_block_manager"
                            class="cm-no-ajax bp-modes__item bp-modes__item--build
                            <?php if ($_smarty_tpl->getValue('active_mode') === "build") {?>bp-modes__item--active<?php }?>
                            <?php if (!$_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed'] && (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer") {?>bp-modes__item--disabled<?php }?>"
                            data-bp-modes-item="build"
                            data-bp-tooltip="true">
                            <?php $_smarty_tpl->renderSubTemplate("backend:components/bottom_panel/icons/bp-modes__item--build.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                            <div class="bp-tooltip">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.build_mode", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer"&!$_smarty_tpl->getValue('location_data')['is_frontend_editing_allowed']) {?>
                                    <div class="bp-tooltip__secondary">
                                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.build_mode.not_available", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                    </div>
                                <?php }?>
                            </div>
                        </a>
                    <?php }?>
                    <div id="bp-modes__active" class="bp-modes__active
                        <?php if ($_smarty_tpl->getValue('active_mode') === "preview") {?>
                            bp-modes__active--preview
                        <?php }?>"
                    ></div>
                </div>
            <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:bp_modes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_element_on_panel"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_element_on_panel"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <div class="bp-actions <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'settings_menu'))) {?>bp-actions--one-column<?php }?>">
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'settings_menu')) && (!$_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR:ULTIMATE") || ( !true || empty($_smarty_tpl->getValue('auth')['storefront_id'])) || (int) $_smarty_tpl->getValue('auth')['storefront_id'] === (int) $_smarty_tpl->getValue('runtime')['storefront_id'])) {?>
                <div class="bp-dropdown bp-actions__item">
                    <button class="bp-dropdown-button bp-dropdown-button--animation" data-bp-toggle="dropdown"
                        data-bp-tooltip="true">
                        <?php $_smarty_tpl->renderSubTemplate("backend:components/bottom_panel/icons/bp-dropdown-button--settings.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                        <span class="bp-tooltip"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.settings", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    </button>
                    <div class="bp-dropdown-menu">
                        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'settings_menu');?>

                    </div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('auth')['user_type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR")) {?>
                <div class="bp-dropdown bp-actions__item">
                    <button class="bp-dropdown-button" data-bp-toggle="dropdown" data-bp-tooltip="true">
                        <?php $_smarty_tpl->renderSubTemplate("backend:components/bottom_panel/icons/bp-dropdown-button--help.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                        <span class="bp-tooltip"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.help", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                    </button>
                    <div class="bp-dropdown-menu">
                        <div class="bp-dropdown-menu__group">
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['resources']['docs_url'],$_smarty_tpl->getValue('utm')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.documentation", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['resources']['forum'],$_smarty_tpl->getValue('utm')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.community_forums", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['resources']['video_tutorials'],$_smarty_tpl->getValue('utm')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.video_tutorials", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['resources']['faq'],$_smarty_tpl->getValue('utm')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.faq", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_help_menu_group_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_help_menu_group_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        </div>
                        <div class="bp-dropdown-menu__group">
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['resources']['helpdesk_url'],$_smarty_tpl->getValue('utm')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.customer_help_desk", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['resources']['developers_catalog'],$_smarty_tpl->getValue('utm')))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.hire_a_developers", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_help_menu_group_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_help_menu_group_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                        </div>
                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_help_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_link_in_help_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
                    </div>
                </div>
            <?php }?>
        </div>
        <button id="bp_off_bottom_panel" class="bp-close"
            data-bp-tooltip="true"
            data-bp-save-state="true">
            <?php $_smarty_tpl->renderSubTemplate("backend:components/bottom_panel/icons/bp-close.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <span class="bp-tooltip bp-tooltip--right"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.hide_bottom_admin_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
        </button>
    </div>
    <div id="bp_bottom_buttons" class="bp-bottom-buttons
        <?php if (!$_smarty_tpl->getValue('pb_is_bottom_panel_open')) {?>
            bp-bottom-buttons--active
        <?php }?>">
        <button id="bp_on_bottom_panel"
            class="bp-bottom-button bp-bottom-button--logo
            <?php if ($_smarty_tpl->getValue('pb_is_bottom_panel_open')) {?>
                bp-bottom-button--disabled bp-bottom-button--disabled-panel
            <?php }?>"
            data-bp-bottom-buttons="panel"
            data-bp-tooltip="true">
            <?php $_smarty_tpl->renderSubTemplate("backend:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->getValue('bottom_panel_close_logo'),'image_css_class'=>"bp-logo-img bp-bottom-button-img",'show_detailed_link'=>false), (int) 0, $_smarty_current_dir);
?>
            <span class="bp-tooltip bp-tooltip--left"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("bottom_panel.show_bottom_admin_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
        </button>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_element_on_closed_panel"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:extra_element_on_closed_panel"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </div>
</div>
<?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"bottom_panel:bottom_panel_main"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/bottom_panel.js"), $_smarty_tpl);?>

<?php }
}
}
