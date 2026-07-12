<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:23:39
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/notification_settings/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345d4b688bc6_13908171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd96d7f44bdc33e6bde094a18c84658c6f9c6e761' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/notification_settings/manage.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/notification_settings/components/navigation_section.tpl' => 1,
    'tygh:views/notification_settings/components/receivers_editor.tpl' => 2,
    'tygh:views/notification_settings/components/receivers.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_68345d4b688bc6_13908171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('customer_notifications','admin_notifications','vendor_notifications','event.notification_type','event.transport.','notification','event.transport.','receivers','receivers','other_notification','other_notifications.title','other_notifications.email_templates','other_notifications.internal_templates','add','notifications'));
$_smarty_tpl->_assignInScope('can_update_settings', fn_check_view_permissions("notification_settings.update","POST"));
$_smarty_tpl->_assignInScope('can_edit_email_templates', fn_check_view_permissions("email_templates.manage","GET"));
$_smarty_tpl->_assignInScope('can_edit_internal_templates', fn_check_view_permissions("internal_templates.manage","GET"));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/notification_settings/components/navigation_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active_section'=>$_smarty_tpl->tpl_vars['active_section']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"notification_settings:section_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"notification_settings:section_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['receiver_type']->value == smarty_modifier_enum("UserTypes::CUSTOMER")) {?>
        <?php $_smarty_tpl->_assignInScope('page_title', $_smarty_tpl->__("customer_notifications"));?>
    <?php } elseif ($_smarty_tpl->tpl_vars['receiver_type']->value == smarty_modifier_enum("UserTypes::ADMIN")) {?>
        <?php $_smarty_tpl->_assignInScope('page_title', $_smarty_tpl->__("admin_notifications"));?>
    <?php } elseif ($_smarty_tpl->tpl_vars['receiver_type']->value == smarty_modifier_enum("UserTypes::VENDOR")) {?>
        <?php $_smarty_tpl->_assignInScope('page_title', $_smarty_tpl->__("vendor_notifications"));?>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"notification_settings:section_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="notifications_form" class="form-horizontal form-edit form-setting">
        <input type="hidden" id="receiver_type" name="receiver_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['receiver_type']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php $_smarty_tpl->_assignInScope('rec', 70/count($_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value]));?>
        <table class="table table-responsive table--sticky notification-settings__table">
            <thead class="notification-settings__header">
            <tr>
                <th class="table__head-sticky" width="40%"><?php echo $_smarty_tpl->__("event.notification_type");?>
</th>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value], 'value', false, 'transport');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['transport']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <th class="table__head-sticky"><?php echo $_smarty_tpl->__("event.transport.".((string)$_smarty_tpl->tpl_vars['transport']->value));?>
</th>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <th class="table__head-sticky" width="15%"></th>
            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event_groups']->value, 'events', false, 'group_name');
$_smarty_tpl->tpl_vars['events']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_name']->value => $_smarty_tpl->tpl_vars['events']->value) {
$_smarty_tpl->tpl_vars['events']->do_else = false;
?>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "events_group", null, null);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['events']->value, 'event', false, 'event_id');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['event_id']->value => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>

                        <?php $_smarty_tpl->_assignInScope('array_transports', $_smarty_tpl->tpl_vars['event']->value["receivers"][$_smarty_tpl->tpl_vars['receiver_type']->value]);?>
                        <?php if (!$_smarty_tpl->tpl_vars['array_transports']->value) {?>
                            <?php continue 1;?>
                        <?php }?>
                        <?php $_smarty_tpl->_assignInScope('template_code', (($tmp = $_smarty_tpl->tpl_vars['event']->value["receivers"][$_smarty_tpl->tpl_vars['receiver_type']->value]["template_code"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>
                        <?php $_smarty_tpl->_assignInScope('template_area', (($tmp = $_smarty_tpl->tpl_vars['event']->value["receivers"][$_smarty_tpl->tpl_vars['receiver_type']->value]["template_area"] ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>
                        <tr>
                            <td class="notification-settings__name" data-th="<?php echo $_smarty_tpl->__("notification");?>
">
                                <?php if ($_smarty_tpl->tpl_vars['template_code']->value && $_smarty_tpl->tpl_vars['template_area']->value && $_smarty_tpl->tpl_vars['can_edit_email_templates']->value) {?>
                                    <a href="<?php echo htmlspecialchars((string) fn_url("email_templates.update?code=".((string)$_smarty_tpl->tpl_vars['template_code']->value)."&area=".((string)$_smarty_tpl->tpl_vars['template_area']->value)."&event_id=".((string)$_smarty_tpl->tpl_vars['event_id']->value)."&receiver=".((string)$_smarty_tpl->tpl_vars['receiver_type']->value)), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome">
                                <?php }?>
                                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['event']->value["name"]["template"],$_smarty_tpl->tpl_vars['event']->value["name"]["params"]);?>

                                <?php if (($_smarty_tpl->tpl_vars['template_code']->value) && $_smarty_tpl->tpl_vars['template_area']->value && $_smarty_tpl->tpl_vars['can_edit_email_templates']->value) {?>
                                    </a>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['event']->value['description']) {?>
                                    <p class="muted"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['event']->value['description']['template'],$_smarty_tpl->tpl_vars['event']->value['description']['params']);?>
</p>
                                <?php }?>
                            </td>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value], 'value', false, 'transport');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['transport']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                <td data-th="<?php echo $_smarty_tpl->__("event.transport.".((string)$_smarty_tpl->tpl_vars['transport']->value));?>
">
                                    <?php if (array_key_exists($_smarty_tpl->tpl_vars['transport']->value,$_smarty_tpl->tpl_vars['array_transports']->value)) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_transports']->value, 'is_enabled', false, 'transport_name');
$_smarty_tpl->tpl_vars['is_enabled']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['transport_name']->value => $_smarty_tpl->tpl_vars['is_enabled']->value) {
$_smarty_tpl->tpl_vars['is_enabled']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['transport_name']->value == $_smarty_tpl->tpl_vars['transport']->value) {?>
                                                <input type="hidden"
                                                    name="notification_settings[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['event_id']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['receiver_type']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['transport_name']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                                    value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
                                                />
                                                <input name="notification_settings[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['event_id']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['receiver_type']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['transport_name']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                                    class="checkbox--nomargin"
                                                    type="checkbox"
                                                    value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['is_enabled']->value) {?>checked<?php }?>
                                                    <?php if (!$_smarty_tpl->tpl_vars['can_update_settings']->value) {?>disabled<?php }?>
                                                />
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php } else { ?>
                                        <span>&mdash;</span>
                                    <?php }?>
                                </td>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <td data-th="">
                                <?php if ($_smarty_tpl->tpl_vars['event']->value['is_configurable'] && $_smarty_tpl->tpl_vars['group_settings']->value[$_smarty_tpl->tpl_vars['group_name']->value][$_smarty_tpl->tpl_vars['receiver_type']->value]['methods']) {?>
                                    <?php ob_start();
echo $_smarty_tpl->__("receivers");
$_prefixVariable1=ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['event']->value['receiver_search_conditions'][$_smarty_tpl->tpl_vars['receiver_type']->value]), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:views/notification_settings/components/receivers_editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_editable'=>$_smarty_tpl->tpl_vars['can_update_settings']->value,'object_type'=>"event",'object_id'=>$_smarty_tpl->tpl_vars['event_id']->value,'receivers'=>$_smarty_tpl->tpl_vars['event']->value['receiver_search_conditions'][$_smarty_tpl->tpl_vars['receiver_type']->value],'receiver_search_methods'=>$_smarty_tpl->tpl_vars['group_settings']->value[$_smarty_tpl->tpl_vars['group_name']->value][$_smarty_tpl->tpl_vars['receiver_type']->value]['methods'],'manage_button_text'=>$_prefixVariable1." (".$_prefixVariable2.")"), 0, true);
?>
                                <?php }?>
                            </td>
                        </tr>
                        <?php $_smarty_tpl->_assignInScope('event_receivers', array($_smarty_tpl->tpl_vars['group_name']->value=>$_smarty_tpl->tpl_vars['event']->value['receiver_search_conditions_readable'][$_smarty_tpl->tpl_vars['receiver_type']->value]));?>
                        <?php $_smarty_tpl->_assignInScope('event_receivers_search_conditions', array($_smarty_tpl->tpl_vars['group_name']->value=>$_smarty_tpl->tpl_vars['event']->value['receiver_search_conditions'][$_smarty_tpl->tpl_vars['receiver_type']->value]));?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'events_group'))) {?>
                <tbody>
                    <tr class="notification-settings__group">
                        <td data-th=""><h4><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['group_name']->value);?>
</h4></td>
                        <td data-th="" colspan="<?php echo htmlspecialchars((string) count($_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value]), ENT_QUOTES, 'UTF-8');?>
"></td>
                        <td data-th=""></td>
                    </tr>
                    <?php if ($_smarty_tpl->tpl_vars['group_settings']->value[$_smarty_tpl->tpl_vars['group_name']->value][$_smarty_tpl->tpl_vars['receiver_type']->value]['is_configurable'] && $_smarty_tpl->tpl_vars['group_settings']->value[$_smarty_tpl->tpl_vars['group_name']->value][$_smarty_tpl->tpl_vars['receiver_type']->value]['methods']) {?>
                        <tr class="row-gray notification-settings__receiver" id="group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_name']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <td data-th="" colspan="<?php echo htmlspecialchars((string) count($_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value])+1, ENT_QUOTES, 'UTF-8');?>
">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/notification_settings/components/receivers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>"group",'object_id'=>$_smarty_tpl->tpl_vars['group_name']->value,'show_heading'=>true,'receivers'=>$_smarty_tpl->tpl_vars['event_receivers_search_conditions']->value[$_smarty_tpl->tpl_vars['group_name']->value],'values'=>$_smarty_tpl->tpl_vars['event_receivers']->value[$_smarty_tpl->tpl_vars['group_name']->value]), 0, true);
?>
                            </td>
                            <td data-th="">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/notification_settings/components/receivers_editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_editable'=>$_smarty_tpl->tpl_vars['can_update_settings']->value,'object_type'=>"group",'object_id'=>$_smarty_tpl->tpl_vars['group_name']->value,'receivers'=>$_smarty_tpl->tpl_vars['event_receivers_search_conditions']->value[$_smarty_tpl->tpl_vars['group_name']->value],'receiver_search_methods'=>$_smarty_tpl->tpl_vars['group_settings']->value[$_smarty_tpl->tpl_vars['group_name']->value][$_smarty_tpl->tpl_vars['receiver_type']->value]['methods']), 0, true);
?>
                            </td>
                        <!--group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_name']->value, ENT_QUOTES, 'UTF-8');?>
--></tr>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['group_name']->value === 'profile') {?>
                        <tr class="row-gray notification-settings__receiver" id="group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_name']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <td data-th="" colspan="<?php echo htmlspecialchars((string) count($_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value])+1, ENT_QUOTES, 'UTF-8');?>
">
                                <div class="notification-group__existing-receivers">
                                    <strong><?php echo $_smarty_tpl->__("receivers");?>
:</strong>
                                    <span class="notification-group-existing-receivers__item">
                                        <?php echo $_smarty_tpl->__('notification_settings.profile.receivers');?>

                                    </span>
                                </div>
                            </td>
                            <td data-th=""></td>
                        </tr>
                    <?php }?>

                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'events_group');?>

                </tbody>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <tfoot>
            <?php if ($_smarty_tpl->tpl_vars['can_edit_email_templates']->value || $_smarty_tpl->tpl_vars['can_edit_internal_templates']->value) {?>
                <tr>
                    <td colspan="<?php echo htmlspecialchars((string) count($_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value])+2, ENT_QUOTES, 'UTF-8');?>
"><h4><?php echo $_smarty_tpl->__("other_notification");?>
</h4></td>
                </tr>
                <tr>
                    <td colspan="<?php echo htmlspecialchars((string) count($_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value])+2, ENT_QUOTES, 'UTF-8');?>
">
                        <p><?php echo $_smarty_tpl->__("other_notifications.title");?>
</p>
                        <?php if ($_smarty_tpl->tpl_vars['can_edit_email_templates']->value) {?>
                            <p>
                                <a href="<?php echo htmlspecialchars((string) fn_url("email_templates.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("other_notifications.email_templates");?>
</a>
                            </p>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['can_edit_internal_templates']->value) {?>
                            <p>
                                <a href="<?php echo htmlspecialchars((string) fn_url("internal_templates.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("other_notifications.internal_templates");?>
</a>
                            </p>
                        <?php }?>
                    </td>
                </tr>
            <?php }?>
            </tfoot>
        </table>
    </form>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[notification_settings.m_update]",'but_role'=>"submit-link",'but_target_form'=>"notifications_form",'but_meta'=>"nav__actions-btn-save"), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <template id="template_result_add_email">
        <div class="object-selector-result-wrapper">
            <span class="object-selector-result">
                <span class="object-selector-result__icon-wrapper">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-plus-sign object-selector-result__icon"),$_smarty_tpl);?>

                </span>
                <span class="object-selector-result__text">
                    <span class="object-selector-result__prefix"><?php echo $_smarty_tpl->__("add");?>
</span>
                    
                    <span class="object-selector-result__body">${data.text}</span>
                    
                </span>
            </span>
        </div>
    </template>

    <template id="template_result_add_user">
        <div class="object-selector-result-wrapper">
            <span class="object-selector-result">
                
                <span class="object-selector-result__text">
                    <span class="object-selector-result__body">${data.name}</span>
                </span>
                <span class="object-selector-result__append">${data.email}</span>
                
                <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
                
                    <div class="object-selector-result__group">${data.company_name}</div>
                
                <?php }?>
            </span>
        </div>
    </template>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>(($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("notifications") ?? null : $tmp),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'sidebar_position'=>"right",'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}
