<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:23:42
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/notification_settings/components/receivers_editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345d4eba7734_97898153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a493febe3ca4c6c0d25fe4c282a926333629dbf' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/notification_settings/components/receivers_editor.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/notification_settings/components/receivers_picker.tpl' => 4,
  ),
),false)) {
function content_68345d4eba7734_97898153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('manage','view','usergroups','users','emails','vendor_emails','cancel','apply'));
$_smarty_tpl->_assignInScope('object_type', (($tmp = $_smarty_tpl->tpl_vars['object_type']->value ?? null)===null||$tmp==='' ? "group" ?? null : $tmp));?>
<div class="dropdown">
    <a class="btn dropdown-toggle notification-group__toggle-editor" data-toggle="dropdown">
        <?php if ($_smarty_tpl->tpl_vars['manage_button_text']->value) {?>
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manage_button_text']->value, ENT_QUOTES, 'UTF-8');?>

        <?php } elseif ($_smarty_tpl->tpl_vars['is_editable']->value) {?>
            <?php echo $_smarty_tpl->__("manage");?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("view");?>

        <?php }?>
        <span class="caret mobile-hide"></span>
    </a>
    <div class="dropdown-menu notification-group__editor cm-notification-receivers-editor pull-right"
         data-ca-notification-receivers-editor-cancel-button-selector="[data-ca-notification-receivers-editor-cancel]"
         data-ca-notification-receivers-editor-update-button-selector="[data-ca-notification-receivers-editor-update]"
         data-ca-notification-receivers-editor-receiver-picker-selector="[data-ca-notification-receivers-editor-picker]"
         data-ca-notification-receivers-editor-object-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-ca-notification-receivers-editor-object-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-ca-notification-receivers-editor-submit-url="<?php echo htmlspecialchars((string) fn_url("notification_settings.update_receivers?receiver_type=".((string)$_smarty_tpl->tpl_vars['receiver_type']->value)), ENT_QUOTES, 'UTF-8');?>
"
         data-ca-notification-receivers-editor-load-url="<?php echo htmlspecialchars((string) fn_url("notification_settings.manage?receiver_type=".((string)$_smarty_tpl->tpl_vars['receiver_type']->value)), ENT_QUOTES, 'UTF-8');?>
"
         data-ca-notification-receivers-editor-result-ids="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    >
        <div class="notification-group-editor__body">
            <?php $_smarty_tpl->_assignInScope('seleced_usergroups', array());?>
            <?php $_smarty_tpl->_assignInScope('selected_users', array());?>
            <?php $_smarty_tpl->_assignInScope('selected_emails', array());?>
            <?php $_smarty_tpl->_assignInScope('selected_fields', array());?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['receivers']->value, 'condition');
$_smarty_tpl->tpl_vars['condition']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['condition']->value) {
$_smarty_tpl->tpl_vars['condition']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['condition']->value->getMethod() === smarty_modifier_enum("ReceiverSearchMethods::USERGROUP_ID") || $_smarty_tpl->tpl_vars['condition']->value->getMethod() === smarty_modifier_enum("ReceiverSearchMethods::ORDER_MANAGER") || $_smarty_tpl->tpl_vars['condition']->value->getMethod() === smarty_modifier_enum("ReceiverSearchMethods::VENDOR_OWNER")) {?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['selected_usergroups']) ? $_smarty_tpl->tpl_vars['selected_usergroups']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['condition']->value->getCriterion();
$_smarty_tpl->_assignInScope('selected_usergroups', $_tmp_array);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['condition']->value->getMethod() === smarty_modifier_enum("ReceiverSearchMethods::USER_ID")) {?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['selected_users']) ? $_smarty_tpl->tpl_vars['selected_users']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['condition']->value->getCriterion();
$_smarty_tpl->_assignInScope('selected_users', $_tmp_array);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['condition']->value->getMethod() === smarty_modifier_enum("ReceiverSearchMethods::EMAIL")) {?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['selected_emails']) ? $_smarty_tpl->tpl_vars['selected_emails']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['condition']->value->getCriterion();
$_smarty_tpl->_assignInScope('selected_emails', $_tmp_array);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['condition']->value->getMethod() === smarty_modifier_enum("ReceiverSearchMethods::VENDOR_EMAIL")) {?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['selected_fields']) ? $_smarty_tpl->tpl_vars['selected_fields']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['condition']->value->getCriterion();
$_smarty_tpl->_assignInScope('selected_fields', $_tmp_array);?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"notification_settings:receiver_pickers"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"notification_settings:receiver_pickers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['receiver_search_methods']->value[smarty_modifier_enum("ReceiverSearchMethods::USERGROUP_ID")]) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/notification_settings/components/receivers_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_text'=>$_smarty_tpl->__("usergroups"),'receiver_search_method'=>smarty_modifier_enum("ReceiverSearchMethods::USERGROUP_ID"),'selected_items'=>$_smarty_tpl->tpl_vars['selected_usergroups']->value,'object_type'=>$_smarty_tpl->tpl_vars['object_type']->value,'object_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'load_items_url'=>"notification_settings.get_usergroups?type=".((string)$_smarty_tpl->tpl_vars['receiver_type']->value)."&group=".((string)$_smarty_tpl->tpl_vars['object_id']->value),'allow_add'=>false,'is_disabled'=>!$_smarty_tpl->tpl_vars['is_editable']->value), 0, false);
?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['receiver_search_methods']->value[smarty_modifier_enum("ReceiverSearchMethods::USER_ID")]) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/notification_settings/components/receivers_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_text'=>$_smarty_tpl->__("users"),'receiver_search_method'=>smarty_modifier_enum("ReceiverSearchMethods::USER_ID"),'selected_items'=>$_smarty_tpl->tpl_vars['selected_users']->value,'object_type'=>$_smarty_tpl->tpl_vars['object_type']->value,'object_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'load_items_url'=>"notification_settings.get_users?type=".((string)$_smarty_tpl->tpl_vars['receiver_type']->value)."&group=".((string)$_smarty_tpl->tpl_vars['object_id']->value),'allow_add'=>false,'template_result_selector'=>"#template_result_add_user",'is_disabled'=>!$_smarty_tpl->tpl_vars['is_editable']->value), 0, true);
?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['receiver_search_methods']->value[smarty_modifier_enum("ReceiverSearchMethods::USER_ID")]) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/notification_settings/components/receivers_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_text'=>$_smarty_tpl->__("emails"),'receiver_search_method'=>smarty_modifier_enum("ReceiverSearchMethods::EMAIL"),'selected_items'=>$_smarty_tpl->tpl_vars['selected_emails']->value,'object_type'=>$_smarty_tpl->tpl_vars['object_type']->value,'object_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'allow_add'=>true,'template_result_new_selector'=>"#template_result_add_email",'show_selected_items'=>true,'is_disabled'=>!$_smarty_tpl->tpl_vars['is_editable']->value), 0, true);
?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['receiver_search_methods']->value[smarty_modifier_enum("ReceiverSearchMethods::VENDOR_EMAIL")]) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/notification_settings/components/receivers_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_text'=>$_smarty_tpl->__("vendor_emails"),'receiver_search_method'=>smarty_modifier_enum("ReceiverSearchMethods::VENDOR_EMAIL"),'selected_items'=>$_smarty_tpl->tpl_vars['selected_fields']->value,'object_type'=>$_smarty_tpl->tpl_vars['object_type']->value,'object_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'load_items_url'=>"notification_settings.get_vendor_emails?type=".((string)$_smarty_tpl->tpl_vars['receiver_type']->value)."&group=".((string)$_smarty_tpl->tpl_vars['object_id']->value),'allow_add'=>false,'show_selected_items'=>true,'is_disabled'=>!$_smarty_tpl->tpl_vars['is_editable']->value), 0, true);
?>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"notification_settings:receiver_pickers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['is_editable']->value) {?>
            <div class="notification-group-editor__footer">
                <a class="btn dropdown-toggle notification-group-editor__btn"
                   data-ca-notification-receivers-editor-cancel
                ><?php echo $_smarty_tpl->__("cancel");?>
</a>
                <a class="btn btn-primary notification-group-editor__btn"
                   data-ca-notification-receivers-editor-update
                ><?php echo $_smarty_tpl->__("apply");?>
</a>
            </div>
        <?php }?>
    </div>
</div>
<?php }
}
