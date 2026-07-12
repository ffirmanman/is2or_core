<?php
/* Smarty version 5.4.3, created on 2026-05-24 21:09:39
  from 'tygh:views/index/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6a133ee35d42d6_25948042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfe3e40d0f26d205d0bb59df2cc38b5b384abc91' => 
    array (
      0 => 'views/index/index.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/index/components/simple_dashboard_preloader.tpl' => 1,
    'tygh:views/index/components/simple_dashboard.tpl' => 1,
    'tygh:views/index/components/dashboard_preloader.tpl' => 1,
    'tygh:views/index/components/dashboard.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
    'tygh:common/share.tpl' => 1,
  ),
))) {
function content_6a133ee35d42d6_25948042 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/index';
\Tygh\Languages\Helper::preloadLangVars(array('dashboard','installer_complete_title','welcome_screen.administrator_info','admin_panel','welcome_screen.go_admin_panel','welcome_screen.go_settings_wizard','settings_wizard','welcome_screen.run_settings_wizard','storefront','welcome_screen.go_storefront','welcome_screen.learn_more_configuration','welcome_screen.knowledge_base','welcome_screen.thanks'));
echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/tabs.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/dashboard.js"), $_smarty_tpl);?>


<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox", null, null);?>
    <?php if ($_smarty_tpl->getValue('config')['simple_dashboard'] && $_smarty_tpl->getValue('show_dashboard_preloader')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/index/components/simple_dashboard_preloader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('config')['simple_dashboard']) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/index/components/simple_dashboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } elseif ($_smarty_tpl->getValue('show_dashboard_preloader')) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/index/components/dashboard_preloader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:views/index/components/dashboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->renderSubTemplate("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttons'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'buttons'),'no_sidebar'=>true,'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("dashboard", [], $_smarty_tpl->getSmarty()->getLanguage()),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'mainbox'),'tools'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tools'),'box_id'=>"dashboard_content",'select_storefront'=>true,'show_all_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->getValue('storefront_id')), (int) 0, $_smarty_current_dir);
?>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE")) {?>
    <input type="hidden" name="switch_company_id" id="switch_company_id" value="<?php echo $_smarty_tpl->getValue('storefront_id');?>
">
<?php } else { ?>
    <input type="hidden" name="storefront_id" id="storefront_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('storefront_id')), ENT_QUOTES, 'UTF-8');?>
">
<?php }?>

<?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:welcome_dialog"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
if ($_smarty_tpl->getValue('show_welcome')) {?>
    <div class="hidden cm-dialog-auto-open cm-dialog-auto-size" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("installer_complete_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" id="after_install_dialog" data-ca-dialog-class="welcome-screen-dialog">
        <?php $_smarty_tpl->assign('company', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_company_data')("1"), false, NULL);?>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE")) {?>
            <?php $_smarty_tpl->assign('link_storefront', "http://".((string)$_smarty_tpl->getValue('company')['storefront']), false, NULL);?>
        <?php } else { ?>
            <?php ob_start();
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')($_smarty_tpl->getValue('config')['http_location'])), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->assign('link_storefront', $_prefixVariable1, false, NULL);?>
        <?php }?>
        <div class="welcome-screen">
            <p>
                <?php $_smarty_tpl->assign('user_data', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_user_info')($_smarty_tpl->getValue('auth')['user_id']), false, NULL);?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("welcome_screen.administrator_info", array('[email]'=>$_smarty_tpl->getValue('user_data')['email']), $_smarty_tpl->getSmarty()->getLanguage());?>

            </p>
            <div class="welcome-location-wrapper clearfix">
                <div class="welcome-location-block pull-left center">
                    <h4 class="install-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("admin_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h4>
                    <div class="welcome-screen-location welcome-screen-admin">
                        <div class="welcome-screen-overlay">
                            <a class="btn cm-dialog-closer welcome-screen-overlink"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("welcome_screen.go_admin_panel", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                        </div>
                    </div>
                    <div class="welcome-screen-arrow"></div>
                    <p>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("welcome_screen.go_settings_wizard", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </p>
                    <?php $_smarty_tpl->assign('c_url', rawurlencode((string)$_smarty_tpl->getValue('config')['current_url']), false, NULL);?>
                    <a class="cm-dialog-opener cm-ajax btn btn-primary strong" data-ca-target-id="content_settings_wizard" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("settings_wizard", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("settings_wizard.view?return_url=".((string)$_smarty_tpl->getValue('c_url')))), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("welcome_screen.run_settings_wizard", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                </div>
                <div class="welcome-location-block pull-right center">
                    <h4 class="install-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("storefront", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</h4>
                    <div class="welcome-screen-location welcome-screen-store">
                        <div class="welcome-screen-overlay">
                            <a class="btn welcome-screen-overlink" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('link_storefront')), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("welcome_screen.go_storefront", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                        </div>
                    </div>
                    <div class="welcome-screen-arrow"></div>
                    <p>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("welcome_screen.learn_more_configuration", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                    </p>
                    <a class="kbase-link" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('config')['resources']['knowledge_base']), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("welcome_screen.knowledge_base", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a>
                </div>
            </div>
            <div class="welcome-screen-social center">
                <p>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("welcome_screen.thanks", array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)), $_smarty_tpl->getSmarty()->getLanguage());?>

                </p>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/share.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            </div>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE:FREE")) {?>
                <?php echo (($tmp = $_smarty_tpl->getSmarty()->getModifierCallback('reset')($_SESSION['stats']) ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

            <?php }?>
        </div>
    </div>
<?php }
$_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"index:welcome_dialog"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
}
}
