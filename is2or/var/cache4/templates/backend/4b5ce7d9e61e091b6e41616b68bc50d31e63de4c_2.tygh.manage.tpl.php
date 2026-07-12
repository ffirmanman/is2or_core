<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:27:59
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/documents/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345e4fb227d0_81809601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b5ce7d9e61e091b6e41616b68bc50d31e63de4c' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/documents/manage.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/notification_settings/components/navigation_section.tpl' => 1,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/fileuploader.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_68345e4fb227d0_81809601 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('edit','view','name','code','name','code','export','no_data','import','import','import','documents'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/notification_settings/components/navigation_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active_section'=>$_smarty_tpl->tpl_vars['active_section']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->_assignInScope('r_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
$_smarty_tpl->_assignInScope('can_update', fn_check_permissions("snippets","update","admin","POST"));
$_smarty_tpl->_assignInScope('edit_link_text', $_smarty_tpl->__("edit"));?>

<?php if (!$_smarty_tpl->tpl_vars['can_update']->value) {?>
    <?php $_smarty_tpl->_assignInScope('edit_link_text', $_smarty_tpl->__("view"));
}?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_documents_form" id="manage_documents_form">
    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "documents_table", null, null);?>
        <div class="items-container longtap-selection table-responsive-wrapper table-responsive" id="documents_list">
            <?php if ($_smarty_tpl->tpl_vars['documents']->value) {?>
                <table width="100%" class="table table-middle table--relative">
                    <thead
                        data-ca-bulkedit-default-object="true" 
                        data-ca-bulkedit-component="defaultObject"
                    >
                        <tr>
                            <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                                <th width="6%" class="left">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_check_all_shown'=>true), 0, false);
?>

                                    <input type="checkbox"
                                        class="bulkedit-toggler hide"
                                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                    />
                                </th>
                            <?php }?>
                            <th width="50%"><?php echo $_smarty_tpl->__("name");?>
</th>
                            <th width="35%"><?php echo $_smarty_tpl->__("code");?>
</th>
                            <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                                <th width="8%">&nbsp;</th>
                            <?php }?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['documents']->value, 'document');
$_smarty_tpl->tpl_vars['document']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['document']->value) {
$_smarty_tpl->tpl_vars['document']->do_else = false;
?>
                        <tr class="cm-longtap-target cm-row-item"
                            <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                                data-ca-longtap-action="setCheckBox"
                                data-ca-longtap-target="input.cm-item"
                                data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['document']->value->getId(), ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                        >
                            <?php if ($_smarty_tpl->tpl_vars['can_update']->value) {?>
                                <td width="6%" class="left">
                                    <input type="checkbox" name="document_id[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['document']->value->getId(), ENT_QUOTES, 'UTF-8');?>
" class="cm-item hide" />
                                </td>
                            <?php }?>
                            <td width="50%" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                                <div class="object-group-link-wrap">
                                    <a href="<?php echo htmlspecialchars((string) fn_url("documents.update?document_id=".((string)$_smarty_tpl->tpl_vars['document']->value->getId())), ENT_QUOTES, 'UTF-8');?>
" class="link--monochrome"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['document']->value->getName(), ENT_QUOTES, 'UTF-8');?>
</a>
                                </div>
                            </td>
                            <td width="35%" data-th="<?php echo $_smarty_tpl->__("code");?>
">
                                <span class="block"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['document']->value->getFullCode(), ENT_QUOTES, 'UTF-8');?>
</span>
                            </td>
                            <td width="8%" class="nowrap mobile-hide">
                                <div class="hidden-tools">
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['edit_link_text']->value,'href'=>"documents.update?document_id=".((string)$_smarty_tpl->tpl_vars['document']->value->getId())), true);?>
</li>
                                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'text'=>$_smarty_tpl->__("export"),'href'=>"documents.export?document_id=".((string)$_smarty_tpl->tpl_vars['document']->value->getId()),'method'=>"POST"), true);?>
</li>
                                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                                </div>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            <?php } else { ?>
                <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
            <?php }?>
        <!--documents_list--></div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_documents_form",'object'=>"documents",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'documents_table'),'has_permission'=>$_smarty_tpl->tpl_vars['can_update']->value,'is_check_all_shown'=>true), 0, false);
?>
</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "import_form", null, null);?>
    <div class="install-addon">
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="import_documents" enctype="multipart/form-data">
            <div class="install-addon-wrapper">
                <img class="install-addon-banner" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151" height="141" />
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"filename[]",'allowed_ext'=>"xml"), 0, false);
?>
            </div>
            <div class="buttons-container">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("import"),'but_name'=>"dispatch[documents.import]",'cancel_action'=>"close"), 0, false);
?>
            </div>
        </form>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_items", null, null);?>
        <?php if (fn_check_permissions("documents","import","admin","POST")) {?>
            <li><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"import_form",'link_text'=>$_smarty_tpl->__("import"),'act'=>"link",'link_class'=>"cm-dialog-auto-size",'text'=>$_smarty_tpl->__("import"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'import_form'),'general_class'=>"action-btn"), 0, false);
?></li>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_items')), true);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("documents"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}
