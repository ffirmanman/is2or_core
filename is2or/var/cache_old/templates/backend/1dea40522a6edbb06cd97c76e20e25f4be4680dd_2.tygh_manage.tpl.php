<?php
/* Smarty version 5.4.3, created on 2026-03-09 17:31:40
  from 'tygh:views/addons/manage.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69aed9cc85ef39_51762788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dea40522a6edbb06cd97c76e20e25f4be4680dd' => 
    array (
      0 => 'views/addons/manage.tpl',
      1 => 1767831035,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 1,
    'tygh:buttons/helpdesk.tpl' => 2,
    'tygh:views/addons/components/manage/addons_disabled_msg.tpl' => 1,
    'tygh:views/addons/components/addons_list.tpl' => 1,
    'tygh:views/addons/components/manage/manage_sidebar.tpl' => 1,
    'tygh:views/addons/components/manage/manage_adv_buttons.tpl' => 1,
    'tygh:views/addons/components/manage/manage_buttons.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
))) {
function content_69aed9cc85ef39_51762788 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/backend/templates/views/addons';
\Tygh\Languages\Helper::preloadLangVars(array('activate','helpdesk_account.activate_free_license_message','helpdesk_account.signed_out_message.marketplace','addons'));
$_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('states'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_all_states')(1)), (int) 0, $_smarty_current_dir);
?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/filter_table.js"), $_smarty_tpl);?>

<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/fileuploader_scripts.js"), $_smarty_tpl);?>


<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('script')->handle(array('src'=>"js/tygh/backend/addons_manage.js"), $_smarty_tpl);?>


<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox", null, null);?>

<div class="items-container" id="addons_list">
    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"addons:manage"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

    <?php if ($_smarty_tpl->getValue('auth')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN") && !$_smarty_tpl->getValue('auth')['helpdesk_user_id']) {?>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_allowed_for')("ULTIMATE:FREE") && $_smarty_tpl->getValue('is_activated_free') !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
            <?php if ($_smarty_tpl->getValue('auth')['is_root'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && !$_smarty_tpl->getValue('auth')['company_id'] && $_smarty_tpl->getValue('settings')['Upgrade_center']['license_number']) {?>
                <div class="well well-small help-block">
                    <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('btn_class'=>"pull-right cm-ajax",'btn_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("activate", [], $_smarty_tpl->getSmarty()->getLanguage()),'btn_href'=>"helpdesk_connector.activate_license_mail_request"), (int) 0, $_smarty_current_dir);
?>
                    <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("helpdesk_account.activate_free_license_message", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
                </div>
            <?php }?>
        <?php } else { ?>
            <div class="well well-small help-block">
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('btn_class'=>"pull-right"), (int) 0, $_smarty_current_dir);
?>
                <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("helpdesk_account.signed_out_message.marketplace", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
            </div>
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->renderSubTemplate("tygh:views/addons/components/manage/addons_disabled_msg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:views/addons/components/addons_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"addons:manage"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
<!--addons_list--></div>

<?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

<?php $_smarty_tpl->assign('saved_search', array('dispatch'=>"addons.manage",'view_type'=>"addons",'allow_new_search'=>false), false, NULL);?>

<?php ob_start();
$_smarty_tpl->renderSubTemplate("tygh:views/addons/components/manage/manage_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_prefixVariable1 = ob_get_clean();
ob_start();
$_smarty_tpl->renderSubTemplate("tygh:views/addons/components/manage/manage_adv_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_prefixVariable2 = ob_get_clean();
ob_start();
$_smarty_tpl->renderSubTemplate("tygh:views/addons/components/manage/manage_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->renderSubTemplate("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("addons", [], $_smarty_tpl->getSmarty()->getLanguage()),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'mainbox'),'sidebar'=>($_prefixVariable1),'saved_search'=>$_smarty_tpl->getValue('saved_search'),'adv_buttons'=>($_prefixVariable2),'buttons'=>($_prefixVariable3),'select_storefront'=>true,'show_all_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id"), (int) 0, $_smarty_current_dir);
}
}
