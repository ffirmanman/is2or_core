<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:25:25
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345db5c14ce4_91595836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd6a234032b11bb8e1cd446e0107892980cf53d1' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_68345db5c14ce4_91595836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.contact_admin','vendor_communication.contact_vendor'));
if (!$_smarty_tpl->tpl_vars['title']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR")) {?>
        <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->__("vendor_communication.contact_admin"));?>
    <?php } elseif ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::ADMIN")) {?>
        <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->__("vendor_communication.contact_vendor"));?>
    <?php }
}?>

<?php if (!$_smarty_tpl->tpl_vars['communication_type']->value) {?>
    <?php $_smarty_tpl->_assignInScope('communication_type', smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_ADMIN"));
}
$_smarty_tpl->_assignInScope('allow_manage', fn_check_permissions("vendor_communication","create_thread","admin","GET",array("communication_type"=>$_smarty_tpl->tpl_vars['communication_type']->value)));
$_smarty_tpl->_assignInScope('allow_new_thread', fn_vendor_communication_is_communication_type_active($_smarty_tpl->tpl_vars['communication_type']->value));?>

<?php $_smarty_tpl->_assignInScope('but_icon', (($tmp = $_smarty_tpl->tpl_vars['but_icon']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('but_text', (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['title']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('menu_button', (($tmp = $_smarty_tpl->tpl_vars['menu_button']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('divider', (($tmp = $_smarty_tpl->tpl_vars['divider']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['but_icon']->value) {?>
    <?php $_smarty_tpl->_assignInScope('but_text', '');
}?>

<?php if ($_smarty_tpl->tpl_vars['object_type']->value) {?>
    <?php $_smarty_tpl->_assignInScope('href', "vendor_communication.create_thread?object_type=".((string)$_smarty_tpl->tpl_vars['object_type']->value)."&object_id=".((string)$_smarty_tpl->tpl_vars['object_id']->value)."&communication_type=".((string)$_smarty_tpl->tpl_vars['communication_type']->value));?>
    <?php $_smarty_tpl->_assignInScope('target_id', "vendor_communication_create_thread_".((string)$_smarty_tpl->tpl_vars['communication_type']->value)."_".((string)$_smarty_tpl->tpl_vars['object_id']->value));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('href', "vendor_communication.create_thread?communication_type=".((string)$_smarty_tpl->tpl_vars['communication_type']->value));?>
    <?php $_smarty_tpl->_assignInScope('target_id', "vendor_communication_create_thread_".((string)$_smarty_tpl->tpl_vars['communication_type']->value));
}?>

<?php if ($_smarty_tpl->tpl_vars['return_url']->value) {?>
    <?php ob_start();
echo htmlspecialchars((string) urlencode($_smarty_tpl->tpl_vars['return_url']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable11=ob_get_clean();
$_smarty_tpl->_assignInScope('href', ((string)$_smarty_tpl->tpl_vars['href']->value)."&return_url=".$_prefixVariable11);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "thread_button", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['object_type']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['title']->value,'class'=>"cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close",'href'=>$_smarty_tpl->tpl_vars['href']->value,'data'=>array("data-ca-dialog-title"=>$_smarty_tpl->tpl_vars['title']->value,"data-ca-target-id"=>$_smarty_tpl->tpl_vars['target_id']->value)), true);?>

    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_href'=>$_smarty_tpl->tpl_vars['href']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'but_text'=>$_smarty_tpl->tpl_vars['title']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_icon'=>$_smarty_tpl->tpl_vars['but_icon']->value,'but_target_id'=>$_smarty_tpl->tpl_vars['target_id']->value), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['allow_manage']->value && $_smarty_tpl->tpl_vars['allow_new_thread']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['object_type']->value && $_smarty_tpl->tpl_vars['menu_button']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['divider']->value) {?>
            <li class="divider"></li>
        <?php }?>
        <li><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'thread_button');?>
</li>
    <?php } else { ?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'thread_button');?>

    <?php }
}
}
}
