<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:58:37
  from 'tygh:views/profiles/update.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69adaabdabcbc1_31780157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4979431e0e74121926d078326fa0fa3912f6f80' => 
    array (
      0 => 'views/profiles/update.tpl',
      1 => 1767831049,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 2,
    'tygh:views/profiles/components/profile_fields.tpl' => 8,
    'tygh:views/profiles/components/profiles_account.tpl' => 4,
    'tygh:common/image_verification.tpl' => 4,
    'tygh:buttons/register_profile.tpl' => 4,
    'tygh:views/profiles/components/multiple_profiles.tpl' => 2,
    'tygh:buttons/save.tpl' => 2,
    'tygh:views/profiles/components/user_action_popup.tpl' => 2,
    'tygh:common/popupbox.tpl' => 2,
    'tygh:common/tabsbox.tpl' => 2,
  ),
))) {
function content_69adaabdabcbc1_31780157 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/views/profiles';
\Tygh\Languages\Helper::preloadLangVars(array('register_new_account','contact_information','text_multiprofile_notice','billing_address','shipping_address','shipping_address','billing_address','revert','delete_my_account_description','delete_my_account','delete_my_account','delete_my_account','usergroup','status','action','active','remove','available','join','declined','join','pending','cancel','profile_details','register_new_account','contact_information','text_multiprofile_notice','billing_address','shipping_address','shipping_address','billing_address','revert','delete_my_account_description','delete_my_account','delete_my_account','delete_my_account','usergroup','status','action','active','remove','available','join','declined','join','pending','cancel','profile_details'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->assign('dispatch', "profiles.update", false, NULL);?>

<?php if ($_smarty_tpl->getValue('runtime')['action']) {?>
    <?php $_smarty_tpl->assign('dispatch', "profiles.update.".((string)$_smarty_tpl->getValue('runtime')['action']), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('runtime')['mode'] == "add" && $_smarty_tpl->getValue('settings')['General']['quick_registration'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <div class="ty-account">

        <form name="profiles_register_form" enctype="multipart/form-data" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"C",'nothing_extra'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nothing_extra'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'location'=>"checkout"), (int) 0, $_smarty_current_dir);
?>

            <?php if ($_REQUEST['return_url']) {?>
                <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) ($_REQUEST['return_url']), ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:account_update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:account_update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            <?php ob_start();
$_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"register",'align'=>"left"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('image_verification', ob_get_clean(), false, 0);
?>
            <?php if ($_smarty_tpl->getValue('image_verification')) {?>
            <div class="ty-control-group">
                <?php echo $_smarty_tpl->getValue('image_verification');?>

            </div>
            <?php }?>

            <div class="ty-profile-field__buttons buttons-container">
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/register_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->getValue('dispatch'))."]"), (int) 0, $_smarty_current_dir);
?>
            </div>
        </form>
    </div>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("register_new_account", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
} else { ?>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tabsbox", null, null);?>
        <div class="ty-profile-field ty-account form-wrap" id="content_general">
            <form name="profile_form" enctype="multipart/form-data" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post">
                <input id="selected_section" type="hidden" value="general" name="selected_section"/>
                <input id="default_card_id" type="hidden" value="" name="default_cc"/>
                <input type="hidden" name="profile_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['profile_id']), ENT_QUOTES, 'UTF-8');?>
" />

                <?php if ($_REQUEST['return_url']) {?>
                    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) ($_REQUEST['return_url']), ENT_QUOTES, 'UTF-8');?>
" />
                <?php }?>

                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "group", null, null);?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"C",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("contact_information", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>

                    <?php if ($_smarty_tpl->getValue('profile_fields')['B'] || $_smarty_tpl->getValue('profile_fields')['S']) {?>
                        <?php if ($_smarty_tpl->getValue('settings')['General']['user_multiple_profiles'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('runtime')['mode'] == "update") {?>
                            <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_multiprofile_notice", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/multiple_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_id'=>$_smarty_tpl->getValue('user_data')['profile_id']), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('settings')['Checkout']['address_position'] == "billing_first") {?>
                            <?php $_smarty_tpl->assign('first_section', "B", false, NULL);?>
                            <?php $_smarty_tpl->assign('first_section_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("billing_address", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                            <?php $_smarty_tpl->assign('sec_section', "S", false, NULL);?>
                            <?php $_smarty_tpl->assign('sec_section_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_address", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                            <?php $_smarty_tpl->assign('body_id', "sa", false, NULL);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->assign('first_section', "S", false, NULL);?>
                            <?php $_smarty_tpl->assign('first_section_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_address", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                            <?php $_smarty_tpl->assign('sec_section', "B", false, NULL);?>
                            <?php $_smarty_tpl->assign('sec_section_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("billing_address", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                            <?php $_smarty_tpl->assign('body_id', "ba", false, NULL);?>
                        <?php }?>

                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->getValue('first_section'),'body_id'=>'','ship_to_another'=>true,'title'=>$_smarty_tpl->getValue('first_section_text')), (int) 0, $_smarty_current_dir);
?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->getValue('sec_section'),'body_id'=>$_smarty_tpl->getValue('body_id'),'ship_to_another'=>$_smarty_tpl->getValue('ship_to_another'),'title'=>$_smarty_tpl->getValue('sec_section_text'),'address_flag'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_compare_shipping_billing')($_smarty_tpl->getValue('profile_fields'))), (int) 0, $_smarty_current_dir);
?>
                    <?php }?>

                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:account_update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:account_update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"register",'align'=>"center"), (int) 0, $_smarty_current_dir);
?>

                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'group');?>


                <div class="ty-profile-field__buttons buttons-container">
                    <?php if ($_smarty_tpl->getValue('runtime')['mode'] == "add") {?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/register_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->getValue('dispatch'))."]",'but_id'=>"save_profile_but"), (int) 0, $_smarty_current_dir);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->getValue('dispatch'))."]",'but_meta'=>"ty-btn__secondary",'but_id'=>"save_profile_but"), (int) 0, $_smarty_current_dir);
?>
                        <input class="ty-profile-field__reset ty-btn ty-btn__tertiary" type="reset" name="reset" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("revert", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" id="shipping_address_reset"/>

                        <?php echo '<script'; ?>
>
                        (function(_, $) {
                            var address_switch = $('input:radio:checked', '.ty-address-switch');
                            $("#shipping_address_reset").on("click", function(e) {
                                setTimeout(function() {
                                    address_switch.click();
                                }, 50);
                            });
                        }(Tygh, Tygh.$));
                        <?php echo '</script'; ?>
>
                        <?php if ($_smarty_tpl->getValue('settings')['General']['show_delete_account_button'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNO::YES") && $_smarty_tpl->getValue('user_data')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::CUSTOMER")) {?>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "delete_my_account", null, null);?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/user_action_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"anonymization_request",'description'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("delete_my_account_description", [], $_smarty_tpl->getSmarty()->getLanguage()),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("delete_my_account", [], $_smarty_tpl->getSmarty()->getLanguage()),'id'=>$_smarty_tpl->getValue('block')['block_id']), (int) 0, $_smarty_current_dir);
?>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("delete_my_account", [], $_smarty_tpl->getSmarty()->getLanguage()),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("delete_my_account", [], $_smarty_tpl->getSmarty()->getLanguage()),'id'=>"anonymization_request_dialog_".((string)$_smarty_tpl->getValue('block')['block_id']),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'delete_my_account'),'link_meta'=>"ty-ml-s"), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>
                    <?php }?>
                </div>
            </form>
        </div>

        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "additional_tabs", null, null);?>
            <?php if ($_smarty_tpl->getValue('runtime')['mode'] == "update") {?>
                <?php if ($_smarty_tpl->getValue('usergroups') && !$_smarty_tpl->getSmarty()->getModifierCallback('fn_check_user_type_admin_area')($_smarty_tpl->getValue('user_data'))) {?>
                    <div id="content_usergroups">
                        <table class="ty-table">
                            <thead>
                                <tr>
                                    <th style="width: 30%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("usergroup", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                                    <th style="width: 30%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("status", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                                    <?php if ($_smarty_tpl->getValue('settings')['General']['allow_usergroup_signup'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                        <th style="width: 40%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("action", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                                    <?php }?>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('usergroups'), 'usergroup');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('usergroup')->value) {
$foreach0DoElse = false;
?>
                                    <?php if ($_smarty_tpl->getValue('user_data')['usergroups'][$_smarty_tpl->getValue('usergroup')['usergroup_id']]) {?>
                                        <?php $_smarty_tpl->assign('ug_status', $_smarty_tpl->getValue('user_data')['usergroups'][$_smarty_tpl->getValue('usergroup')['usergroup_id']]['status'], false, NULL);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->assign('ug_status', "F", false, NULL);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('settings')['General']['allow_usergroup_signup'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('settings')['General']['allow_usergroup_signup'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('ug_status') == "A") {?>
                                        <tr>
                                            <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('usergroup')['usergroup']), ENT_QUOTES, 'UTF-8');?>
</td>
                                            <td>
                                                <?php if ($_smarty_tpl->getValue('ug_status') == "A") {?>
                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("active", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                    <?php $_smarty_tpl->assign('_link_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("remove", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                                    <?php $_smarty_tpl->assign('_req_type', "cancel", false, NULL);?>
                                                <?php } elseif ($_smarty_tpl->getValue('ug_status') == "F") {?>
                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("available", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                    <?php $_smarty_tpl->assign('_link_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("join", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                                    <?php $_smarty_tpl->assign('_req_type', "join", false, NULL);?>
                                                <?php } elseif ($_smarty_tpl->getValue('ug_status') == "D") {?>
                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("declined", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                    <?php $_smarty_tpl->assign('_link_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("join", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                                    <?php $_smarty_tpl->assign('_req_type', "join", false, NULL);?>
                                                <?php } elseif ($_smarty_tpl->getValue('ug_status') == "P") {?>
                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("pending", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                    <?php $_smarty_tpl->assign('_link_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("cancel", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                                    <?php $_smarty_tpl->assign('_req_type', "cancel", false, NULL);?>
                                                <?php }?>
                                            </td>
                                            <?php if ($_smarty_tpl->getValue('settings')['General']['allow_usergroup_signup'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                                <td>
                                                    <a class="cm-ajax" data-ca-target-id="content_usergroups" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.usergroups?usergroup_id=".((string)$_smarty_tpl->getValue('usergroup')['usergroup_id'])."&type=".((string)$_smarty_tpl->getValue('_req_type')));?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_link_text')), ENT_QUOTES, 'UTF-8');?>
</a>
                                                </td>
                                            <?php }?>
                                        </tr>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    <!--content_usergroups--></div>
                <?php }?>

                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <?php }?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'additional_tabs');?>


    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'additional_tabs')) != '') {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section'],'track'=>true), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabsbox');?>

    <?php }?>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("profile_details", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/profiles/update.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"views/profiles/update.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->assign('dispatch', "profiles.update", false, NULL);?>

<?php if ($_smarty_tpl->getValue('runtime')['action']) {?>
    <?php $_smarty_tpl->assign('dispatch', "profiles.update.".((string)$_smarty_tpl->getValue('runtime')['action']), false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('runtime')['mode'] == "add" && $_smarty_tpl->getValue('settings')['General']['quick_registration'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
    <div class="ty-account">

        <form name="profiles_register_form" enctype="multipart/form-data" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"C",'nothing_extra'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nothing_extra'=>$_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES"),'location'=>"checkout"), (int) 0, $_smarty_current_dir);
?>

            <?php if ($_REQUEST['return_url']) {?>
                <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) ($_REQUEST['return_url']), ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>

            <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:account_update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
            <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:account_update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

            <?php ob_start();
$_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"register",'align'=>"left"), (int) 0, $_smarty_current_dir);
$_smarty_tpl->assign('image_verification', ob_get_clean(), false, 0);
?>
            <?php if ($_smarty_tpl->getValue('image_verification')) {?>
            <div class="ty-control-group">
                <?php echo $_smarty_tpl->getValue('image_verification');?>

            </div>
            <?php }?>

            <div class="ty-profile-field__buttons buttons-container">
                <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/register_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->getValue('dispatch'))."]"), (int) 0, $_smarty_current_dir);
?>
            </div>
        </form>
    </div>
    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("register_new_account", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
} else { ?>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "tabsbox", null, null);?>
        <div class="ty-profile-field ty-account form-wrap" id="content_general">
            <form name="profile_form" enctype="multipart/form-data" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post">
                <input id="selected_section" type="hidden" value="general" name="selected_section"/>
                <input id="default_card_id" type="hidden" value="" name="default_cc"/>
                <input type="hidden" name="profile_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('user_data')['profile_id']), ENT_QUOTES, 'UTF-8');?>
" />

                <?php if ($_REQUEST['return_url']) {?>
                    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) ($_REQUEST['return_url']), ENT_QUOTES, 'UTF-8');?>
" />
                <?php }?>

                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "group", null, null);?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profiles_account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>"C",'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("contact_information", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?>

                    <?php if ($_smarty_tpl->getValue('profile_fields')['B'] || $_smarty_tpl->getValue('profile_fields')['S']) {?>
                        <?php if ($_smarty_tpl->getValue('settings')['General']['user_multiple_profiles'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('runtime')['mode'] == "update") {?>
                            <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("text_multiprofile_notice", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/multiple_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_id'=>$_smarty_tpl->getValue('user_data')['profile_id']), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('settings')['Checkout']['address_position'] == "billing_first") {?>
                            <?php $_smarty_tpl->assign('first_section', "B", false, NULL);?>
                            <?php $_smarty_tpl->assign('first_section_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("billing_address", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                            <?php $_smarty_tpl->assign('sec_section', "S", false, NULL);?>
                            <?php $_smarty_tpl->assign('sec_section_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_address", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                            <?php $_smarty_tpl->assign('body_id', "sa", false, NULL);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->assign('first_section', "S", false, NULL);?>
                            <?php $_smarty_tpl->assign('first_section_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("shipping_address", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                            <?php $_smarty_tpl->assign('sec_section', "B", false, NULL);?>
                            <?php $_smarty_tpl->assign('sec_section_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("billing_address", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                            <?php $_smarty_tpl->assign('body_id', "ba", false, NULL);?>
                        <?php }?>

                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->getValue('first_section'),'body_id'=>'','ship_to_another'=>true,'title'=>$_smarty_tpl->getValue('first_section_text')), (int) 0, $_smarty_current_dir);
?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>$_smarty_tpl->getValue('sec_section'),'body_id'=>$_smarty_tpl->getValue('body_id'),'ship_to_another'=>$_smarty_tpl->getValue('ship_to_another'),'title'=>$_smarty_tpl->getValue('sec_section_text'),'address_flag'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_compare_shipping_billing')($_smarty_tpl->getValue('profile_fields'))), (int) 0, $_smarty_current_dir);
?>
                    <?php }?>

                    <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:account_update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                    <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:account_update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"register",'align'=>"center"), (int) 0, $_smarty_current_dir);
?>

                <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
                <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'group');?>


                <div class="ty-profile-field__buttons buttons-container">
                    <?php if ($_smarty_tpl->getValue('runtime')['mode'] == "add") {?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/register_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->getValue('dispatch'))."]",'but_id'=>"save_profile_but"), (int) 0, $_smarty_current_dir);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->getValue('dispatch'))."]",'but_meta'=>"ty-btn__secondary",'but_id'=>"save_profile_but"), (int) 0, $_smarty_current_dir);
?>
                        <input class="ty-profile-field__reset ty-btn ty-btn__tertiary" type="reset" name="reset" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("revert", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" id="shipping_address_reset"/>

                        <?php echo '<script'; ?>
>
                        (function(_, $) {
                            var address_switch = $('input:radio:checked', '.ty-address-switch');
                            $("#shipping_address_reset").on("click", function(e) {
                                setTimeout(function() {
                                    address_switch.click();
                                }, 50);
                            });
                        }(Tygh, Tygh.$));
                        <?php echo '</script'; ?>
>
                        <?php if ($_smarty_tpl->getValue('settings')['General']['show_delete_account_button'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNO::YES") && $_smarty_tpl->getValue('user_data')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::CUSTOMER")) {?>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "delete_my_account", null, null);?>
                                <?php $_smarty_tpl->renderSubTemplate("tygh:views/profiles/components/user_action_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>"anonymization_request",'description'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("delete_my_account_description", [], $_smarty_tpl->getSmarty()->getLanguage()),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("delete_my_account", [], $_smarty_tpl->getSmarty()->getLanguage()),'id'=>$_smarty_tpl->getValue('block')['block_id']), (int) 0, $_smarty_current_dir);
?>
                            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

                            <?php $_smarty_tpl->renderSubTemplate("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link_text'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("delete_my_account", [], $_smarty_tpl->getSmarty()->getLanguage()),'title'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("delete_my_account", [], $_smarty_tpl->getSmarty()->getLanguage()),'id'=>"anonymization_request_dialog_".((string)$_smarty_tpl->getValue('block')['block_id']),'content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'delete_my_account'),'link_meta'=>"ty-ml-s"), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>
                    <?php }?>
                </div>
            </form>
        </div>

        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "additional_tabs", null, null);?>
            <?php if ($_smarty_tpl->getValue('runtime')['mode'] == "update") {?>
                <?php if ($_smarty_tpl->getValue('usergroups') && !$_smarty_tpl->getSmarty()->getModifierCallback('fn_check_user_type_admin_area')($_smarty_tpl->getValue('user_data'))) {?>
                    <div id="content_usergroups">
                        <table class="ty-table">
                            <thead>
                                <tr>
                                    <th style="width: 30%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("usergroup", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                                    <th style="width: 30%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("status", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                                    <?php if ($_smarty_tpl->getValue('settings')['General']['allow_usergroup_signup'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                        <th style="width: 40%"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("action", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</th>
                                    <?php }?>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('usergroups'), 'usergroup');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('usergroup')->value) {
$foreach1DoElse = false;
?>
                                    <?php if ($_smarty_tpl->getValue('user_data')['usergroups'][$_smarty_tpl->getValue('usergroup')['usergroup_id']]) {?>
                                        <?php $_smarty_tpl->assign('ug_status', $_smarty_tpl->getValue('user_data')['usergroups'][$_smarty_tpl->getValue('usergroup')['usergroup_id']]['status'], false, NULL);?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->assign('ug_status', "F", false, NULL);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('settings')['General']['allow_usergroup_signup'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") || $_smarty_tpl->getValue('settings')['General']['allow_usergroup_signup'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES") && $_smarty_tpl->getValue('ug_status') == "A") {?>
                                        <tr>
                                            <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('usergroup')['usergroup']), ENT_QUOTES, 'UTF-8');?>
</td>
                                            <td>
                                                <?php if ($_smarty_tpl->getValue('ug_status') == "A") {?>
                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("active", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                    <?php $_smarty_tpl->assign('_link_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("remove", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                                    <?php $_smarty_tpl->assign('_req_type', "cancel", false, NULL);?>
                                                <?php } elseif ($_smarty_tpl->getValue('ug_status') == "F") {?>
                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("available", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                    <?php $_smarty_tpl->assign('_link_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("join", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                                    <?php $_smarty_tpl->assign('_req_type', "join", false, NULL);?>
                                                <?php } elseif ($_smarty_tpl->getValue('ug_status') == "D") {?>
                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("declined", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                    <?php $_smarty_tpl->assign('_link_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("join", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                                    <?php $_smarty_tpl->assign('_req_type', "join", false, NULL);?>
                                                <?php } elseif ($_smarty_tpl->getValue('ug_status') == "P") {?>
                                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("pending", [], $_smarty_tpl->getSmarty()->getLanguage());?>

                                                    <?php $_smarty_tpl->assign('_link_text', $_smarty_tpl->getSmarty()->getModifierCallback("__")("cancel", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
                                                    <?php $_smarty_tpl->assign('_req_type', "cancel", false, NULL);?>
                                                <?php }?>
                                            </td>
                                            <?php if ($_smarty_tpl->getValue('settings')['General']['allow_usergroup_signup'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("YesNo::YES")) {?>
                                                <td>
                                                    <a class="cm-ajax" data-ca-target-id="content_usergroups" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('fn_url')("profiles.usergroups?usergroup_id=".((string)$_smarty_tpl->getValue('usergroup')['usergroup_id'])."&type=".((string)$_smarty_tpl->getValue('_req_type')));?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('_link_text')), ENT_QUOTES, 'UTF-8');?>
</a>
                                                </td>
                                            <?php }?>
                                        </tr>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    <!--content_usergroups--></div>
                <?php }?>

                <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>
                <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"profiles:tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>
            <?php }?>
        <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'additional_tabs');?>


    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'additional_tabs')) != '') {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section'],'track'=>true), (int) 0, $_smarty_current_dir);
?>
    <?php } else { ?>
        <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'tabsbox');?>

    <?php }?>

    <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("profile_details", [], $_smarty_tpl->getSmarty()->getLanguage());
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
}
}
}
}
