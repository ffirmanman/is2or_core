<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:21:04
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/addons/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc400fa736_95097789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b6222ebe8ba09e0777ed16adbdd0d9bef9c0f12' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/addons/manage.tpl',
      1 => 1728377996,
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
),false)) {
function content_6835bc400fa736_95097789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('activate','helpdesk_account.activate_free_license_message','helpdesk_account.signed_out_message.marketplace','addons'));
$_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('states'=>fn_get_all_states(1)), 0, false);
?>

<?php echo smarty_function_script(array('src'=>"js/tygh/filter_table.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/backend/addons_manage.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<div class="items-container" id="addons_list">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"addons:manage"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"addons:manage"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") && !$_smarty_tpl->tpl_vars['auth']->value['helpdesk_user_id']) {?>
        <?php if (fn_allowed_for("ULTIMATE:FREE") && $_smarty_tpl->tpl_vars['is_activated_free']->value !== smarty_modifier_enum("YesNo::YES")) {?>
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['is_root'] === smarty_modifier_enum("YesNo::YES") && !$_smarty_tpl->tpl_vars['auth']->value['company_id'] && $_smarty_tpl->tpl_vars['settings']->value['Upgrade_center']['license_number']) {?>
                <div class="well well-small help-block">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('btn_class'=>"pull-right cm-ajax",'btn_text'=>$_smarty_tpl->__("activate"),'btn_href'=>"helpdesk_connector.activate_license_mail_request"), 0, false);
?>
                    <p><?php echo $_smarty_tpl->__("helpdesk_account.activate_free_license_message");?>
</p>
                </div>
            <?php }?>
        <?php } else { ?>
            <div class="well well-small help-block">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/helpdesk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('btn_class'=>"pull-right"), 0, true);
?>
                <p><?php echo $_smarty_tpl->__("helpdesk_account.signed_out_message.marketplace");?>
</p>
            </div>
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/manage/addons_disabled_msg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"addons:manage"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<!--addons_list--></div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('saved_search', array('dispatch'=>"addons.manage",'view_type'=>"addons",'allow_new_search'=>false));?>

<?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/addons/components/manage/manage_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/addons/components/manage/manage_adv_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable2 = ob_get_clean();
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/addons/components/manage/manage_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("addons"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'sidebar'=>($_prefixVariable1),'saved_search'=>$_smarty_tpl->tpl_vars['saved_search']->value,'adv_buttons'=>($_prefixVariable2),'buttons'=>($_prefixVariable3),'select_storefront'=>true,'show_all_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id"), 0, false);
}
}
