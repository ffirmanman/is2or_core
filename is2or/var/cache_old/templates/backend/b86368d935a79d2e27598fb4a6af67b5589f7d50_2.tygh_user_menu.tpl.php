<?php
/* Smarty version 5.4.3, created on 2026-03-08 18:23:12
  from 'tygh:components/menu/user_menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ad9460989642_73578341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b86368d935a79d2e27598fb4a6af67b5589f7d50' => 
    array (
      0 => 'components/menu/user_menu.tpl',
      1 => 1767831033,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_object.tpl' => 3,
    'tygh:views/companies/components/picker/picker.tpl' => 1,
    'tygh:common/product_release_info.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
  ),
))) {
function content_69ad9460989642_73578341 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/components/menu';
\Tygh\Languages\Helper::preloadLangVars(array('signed_in_as','edit_profile','log_in_as_vendor','seller_info','sign_out','feedback_values','send_feedback'));
?>
<!-- user menu -->
<?php $_smarty_tpl->assign('user_info_text', ((string)$_smarty_tpl->getValue('user_info')['firstname'])." ".((string)$_smarty_tpl->getValue('user_info')['lastname'])."
".((string)$_smarty_tpl->getValue('user_info')['email'])."
".((string)(($_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('menu_languages')) > 1) ? $_smarty_tpl->getValue('menu_languages')[(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)]['name'] : ''))."
".((string)(($_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('currencies')) > 1) ? ((string)$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')]['description'])." (".((string)$_smarty_tpl->getValue('currencies')[$_smarty_tpl->getValue('secondary_currency')]['symbol']).")" : '')), false, NULL);?>
<div class="top-bar__btn-wrapper btn-group dropdown-top-menu-item nav__user-menu">
    <button class="dropdown-toggle dropdown-top-menu-item-link top-bar__btn nav__user-menu-link"
        data-toggle="dropdown"
        type="button"
        title="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info_text')), ENT_QUOTES, 'UTF-8');?>
"
    >
        <span class="top-bar__btn-inner nav__user-menu-inner">
            <span class="nav__profile-icon">
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('truncate')(mb_strtoupper((string) $_smarty_tpl->getValue('user_info')['firstname'] ?? '', 'UTF-8'),1,'')), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('truncate')(mb_strtoupper((string) $_smarty_tpl->getValue('user_info')['lastname'] ?? '', 'UTF-8'),1,'')), ENT_QUOTES, 'UTF-8');?>

            </span>
        </span>
    </button>
    <ul class="dropdown-menu nav__user-menu-dropdown">
        <li class="disabled">
            <a><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("signed_in_as", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</strong><br><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_info')['email']), ENT_QUOTES, 'UTF-8');?>
</a>
        </li>
        <li class="divider"></li>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"menu:profile"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

        <!--language-->
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('menu_languages')) > 1) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"dropdown",'link_tpl'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['current_url'],"sl="),'items'=>$_smarty_tpl->getValue('menu_languages'),'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>true,'key_name'=>"name",'key_selected'=>"lang_code",'class'=>"languages cm-dropdown-skip-processing",'is_submenu'=>true,'button_class'=>"languages-select-list-button",'dropdown_menu_class'=>"languages-select-list",'dropdown_menu_item_link_class'=>"languages-select-list-item-link",'pull_right'=>false), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <!--end language-->

        <!--Curriencies-->
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('sizeof')($_smarty_tpl->getValue('currencies')) > 1) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"dropdown",'link_tpl'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['current_url'],"currency="),'items'=>$_smarty_tpl->getValue('currencies'),'selected_id'=>$_smarty_tpl->getValue('secondary_currency'),'display_icons'=>false,'key_name'=>"description",'key_selected'=>"currency_code",'class'=>"curriencies cm-dropdown-skip-processing",'button_class'=>"curriencies-button",'dropdown_menu_item_link_class'=>"curriencies-item-link",'is_submenu'=>true,'dropdown_menu_class'=>"currencies-select-list",'pull_right'=>false), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <!--end curriencies-->

        <li><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.update?user_id=".((string)$_smarty_tpl->getValue('auth')['user_id']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("edit_profile", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && !$_smarty_tpl->getValue('runtime')['simple_ultimate'] && $_smarty_tpl->getValue('auth')['user_type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN") && $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')("companies.get_companies_list","GET") && $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')("profiles.login_as_vendor","POST")) {?>
            <li id="company_picker_dropdown_menu"
                class="js-company-switcher"
                data-ca-switcher-param-name="company_id"
                data-ca-switcher-data-name="company_id">
                <?php $_smarty_tpl->renderSubTemplate("tygh:views/companies/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>$_smarty_tpl->getValue('companies_picker_name'),'item_ids'=>array($_smarty_tpl->getValue('runtime')['company_data']['company_id']),'type'=>"list",'show_advanced'=>false,'selection_title_pre'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("log_in_as_vendor", [], $_smarty_tpl->getSmarty()->getLanguage()),'dropdown_parent_selector'=>"#company_picker_dropdown_menu"), (int) 0, $_smarty_current_dir);
?>
            </li>
        <?php }?>
         <!--Theme mode-->
        <?php if ($_smarty_tpl->getValue('backoffice_color_scheme_variants')) {?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"dropdown",'link_tpl'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_link_attach')($_smarty_tpl->getValue('config')['current_url'],"backoffice_color_scheme="),'items'=>$_smarty_tpl->getValue('backoffice_color_scheme_variants'),'selected_id'=>$_smarty_tpl->getValue('auth')['backoffice_color_scheme'],'display_icons'=>false,'key_name'=>"description",'key_selected'=>"type",'class'=>"theme-mode cm-dropdown-skip-processing",'button_class'=>"theme-mode-button",'dropdown_menu_item_link_class'=>"theme-mode-item-link",'is_submenu'=>true,'dropdown_menu_class'=>"theme-mode-select-list",'pull_right'=>false), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <!--end theme mode-->
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("MULTIVENDOR") && $_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::VENDOR") && $_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')("companies.update","GET")) {?>
            <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("companies.update&company_id=".((string)$_smarty_tpl->getValue('runtime')['company_id']));?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("seller_info", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
        <?php }?>
        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"menu:profile_menu_extra_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"menu:profile_menu_extra_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
        <li><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("auth.logout")), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("sign_out", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</a></li>
        <?php if (!$_smarty_tpl->getValue('runtime')['company_id']) {?>
            <li class="divider"></li>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_check_view_permissions')("upgrade_center.manage","POST")) {?>
                <li class="disabled">
                    <a><?php $_smarty_tpl->renderSubTemplate("tygh:common/product_release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_time_shown'=>false), (int) 0, $_smarty_current_dir);
?></a>
                </li>
            <?php }?>
            <li>
                <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"group".((string)$_smarty_tpl->getValue('id_prefix'))."feedback",'edit_onclick'=>$_smarty_tpl->getValue('onclick'),'text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("feedback_values", [], $_smarty_tpl->getSmarty()->getLanguage()),'act'=>"link",'picker_meta'=>"cm-clear-content",'link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("send_feedback", array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)), $_smarty_tpl->getSmarty()->getLanguage()),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'update_block'),'href'=>"feedback.prepare",'no_icon_link'=>true,'but_name'=>"dispatch[feedback.send]",'opener_ajax_class'=>"cm-ajax"), (int) 0, $_smarty_current_dir);
?>
            </li>
        <?php }?>
        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"menu:profile"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
    </ul>
</div>
<!--end user menu --><?php }
}
