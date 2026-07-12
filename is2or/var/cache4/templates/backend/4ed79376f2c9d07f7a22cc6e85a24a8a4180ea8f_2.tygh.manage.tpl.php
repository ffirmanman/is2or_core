<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:53:52
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/datakeeper/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_683464603784e2_00449834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ed79376f2c9d07f7a22cc6e85a24a8a4180ea8f' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/datakeeper/manage.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/fileuploader.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 2,
    'tygh:common/popupbox.tpl' => 2,
    'tygh:common/widget_copy.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_683464603784e2_00449834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.notes.php','function'=>'smarty_block_notes',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('current_database_size','current_database_size','bytes','current_database_size','filename','date','filesize','type','filename','date','filesize','bytes','type','tools','download','restore','delete','no_items','upload','upload_file','tip','datakeeper.run_backup_via_cron_message','backup_files','extra_folders','select_all','unselect_all','backup_data','select_tables','select_all','unselect_all','multiple_selectbox_notice','backup_options','backup_schema','tt_views_database_manage_backup_schema','backup_data','tt_views_database_manage_backup_data','backup_filename','text_backup_filename_hint','create_backup','create_backup','create_backup','backup_restore'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
$_smarty_tpl->_assignInScope('redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>


    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('notes', array('title'=>$_smarty_tpl->__("current_database_size")));
$_block_repeat=true;
echo smarty_block_notes(array('title'=>$_smarty_tpl->__("current_database_size")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <p><span><?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['database_size']->value), ENT_QUOTES, 'UTF-8');?>
</span> <?php echo $_smarty_tpl->__("bytes");?>
</p>
    <?php $_block_repeat=false;
echo smarty_block_notes(array('title'=>$_smarty_tpl->__("current_database_size")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <div id="backup_management">
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="backups_form">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"backups:manage"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"backups:manage"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_assignInScope('result_ids', "backup_management,actions_panel");?>
                <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <?php if ($_smarty_tpl->tpl_vars['backup_files']->value) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "datakeepers_table", null, null);?>
                    <div class="table-responsive-wrapper longtap-selection">
                        <table class="table table-middle table--relative table-responsive">
                            <thead
                                data-ca-bulkedit-default-object="true"
                                data-ca-bulkedit-component="defaultObject"
                            >
                            <tr>
                                <th width="6%" class="mobile-hide">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_check_all_shown'=>true), 0, false);
?>

                                    <input type="checkbox"
                                        class="bulkedit-toggler hide"
                                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                    />
                                </th>
                                <th width="40%">
                                    <a class="cm-ajax"
                                    href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-target-id="backup_management"><?php echo $_smarty_tpl->__("filename");?>

                                    <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?>
                                    </a>
                                </th>
                                <th width="15%">
                                    <a class="cm-ajax"
                                    href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=mtime&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-target-id="backup_management"><?php echo $_smarty_tpl->__("date");?>

                                    <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "mtime") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?>
                                    </a>
                                </th>
                                <th width="15%">
                                    <a class="cm-ajax"
                                    href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=size&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-target-id="backup_management"><?php echo $_smarty_tpl->__("filesize");?>

                                    <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "size") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?>
                                    </a>
                                </th>
                                <th width="10%"><?php echo $_smarty_tpl->__("type");?>
</th>
                                <th width="8%">&nbsp;</th>
                            </tr>
                            </thead>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['backup_files']->value, 'file', false, 'name');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
                                <tr class="cm-longtap-target"
                                    data-ca-longtap-action="setCheckBox"
                                    data-ca-longtap-target="input.cm-item"
                                    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                                >
                                    <td width="6%">
                                        <input type="checkbox" name="backup_files[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item mobile-hide hide"/>
                                    </td>
                                    <td width="40%" data-th="<?php echo $_smarty_tpl->__("filename");?>
"><a href="<?php echo htmlspecialchars((string) fn_url("datakeeper.getfile?file=".((string)$_smarty_tpl->tpl_vars['file']->value['name'])), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a></td>
                                    <td width="15%" data-th="<?php echo $_smarty_tpl->__("date");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['create'], ENT_QUOTES, 'UTF-8');?>
</td>
                                    <td width="15%" data-th="<?php echo $_smarty_tpl->__("filesize");?>
"><?php echo htmlspecialchars((string) smarty_modifier_number_format($_smarty_tpl->tpl_vars['file']->value['size']), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("bytes");?>
</td>
                                    <td width="10%" data-th="<?php echo $_smarty_tpl->__("type");?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['file']->value['type']);?>
</td>
                                    <td width="8%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                                        <div class="hidden-tools">
                                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("download"),'href'=>"datakeeper.getfile?file=".((string)$_smarty_tpl->tpl_vars['file']->value['name'])), true);?>
</li>
                                                <?php if ($_smarty_tpl->tpl_vars['file']->value['can_be_restored']) {?>
                                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("restore"),'href'=>"datakeeper.restore?backup_file=".((string)$_smarty_tpl->tpl_vars['file']->value['name']),'method'=>"POST"), true);?>
</li>
                                                <?php }?>
                                                <li class="divider"></li>
                                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm cm-ajax",'text'=>$_smarty_tpl->__("delete"),'href'=>"datakeeper.delete?backup_file=".((string)$_smarty_tpl->tpl_vars['file']->value['name']),'data'=>array("data-ca-target-id"=>$_smarty_tpl->tpl_vars['result_ids']->value),'method'=>"POST"), true);?>
</li>
                                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                                        </div>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </table>
                    </div>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"backups_form",'object'=>"datakeeper",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'datakeepers_table'),'is_check_all_shown'=>true), 0, false);
?>
            <?php } else { ?>
                <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"backups:manage"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </form>
        <!--backup_management--></div>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "upload_backup", null, null);?>
                <div class="install-addon" id="content_upload_backup">
            <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="upload_backup_form" class="form-horizontal"
                  enctype="multipart/form-data">
                <input type="hidden" name="result_ids" value="theme_upload_container"/>

                <div class="install-addon-wrapper">
                    <img class="install-addon-banner" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151px" height="141px"/>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"dump[0]",'allowed_ext'=>"zip,tgz,sql"), 0, false);
?>

                </div>

                <div class="buttons-container">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("upload"),'but_name'=>"dispatch[datakeeper.upload]",'cancel_action'=>"close",'but_role'=>"submit-link"), 0, false);
?>
                </div>
            </form>
        </div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"upload_backup",'text'=>$_smarty_tpl->__("upload_file"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'upload_backup'),'link_class'=>"cm-dialog-auto-size"), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
                        <div id="content_backup">

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/widget_copy.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('widget_copy_title'=>$_smarty_tpl->__("tip"),'widget_copy_text'=>$_smarty_tpl->__("datakeeper.run_backup_via_cron_message"),'widget_copy_code_text'=>fn_get_console_command("php /path/to/cart/",$_smarty_tpl->tpl_vars['config']->value['admin_index'],array("dispatch"=>"datakeeper.backup","backup_database"=>"Y","backup_files"=>"Y","dbdump_schema"=>"Y","dbdump_data"=>"Y","dbdump_tables"=>"all","extra_folders"=>array("var/files","var/attachments","var/langs","images"),"p"))), 0, false);
?>

                <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="backup_form"
                      class="form-horizontal form-edit cm-ajax cm-comet cm-form-dialog-closer">
                    <input type="hidden" name="selected_section" value="backup"/>
                    <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"/>

                    <div class="control-group">
                        <label class="control-label" for="elm_backup_files"><?php echo $_smarty_tpl->__("backup_files");?>
:</label>

                        <div class="controls">
                            <label class="checkbox">
                                <input type="hidden" name="backup_files" value="N"/>
                                <input type="checkbox" name="backup_files" id="elm_backup_files" value="Y"
                                       onclick="Tygh.$('#files_backup_options').toggleBy();"/>
                            </label>
                        </div>
                    </div>

                    <div id="files_backup_options" class="hidden">
                        <hr>
                        <div class="control-group">
                            <label for="extra_folders" class="control-label"><?php echo $_smarty_tpl->__("extra_folders");?>
:</label>

                            <div class="controls">
                                <select name="extra_folders[]" id="extra_folders" multiple="multiple" size="5">
                                    <option value="images">images</option>
                                    <option value="var/files">var/files</option>
                                    <option value="var/attachments">var/attachments</option>
                                    <option value="var/langs">var/langs</option>
                                </select>

                                <p><a onclick="Tygh.$('#extra_folders').selectOptions(true); return false;"
                                      class="underlined"><?php echo $_smarty_tpl->__("select_all");?>
</a> / <a
                                            onclick="Tygh.$('#extra_folders').selectOptions(false); return false;"
                                            class="underlined"><?php echo $_smarty_tpl->__("unselect_all");?>
</a></p>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="elm_backup_database"><?php echo $_smarty_tpl->__("backup_data");?>
:</label>

                        <div class="controls">
                            <label class="checkbox">
                                <input type="hidden" name="backup_database" value="N"/>
                                <input type="checkbox" name="backup_database" id="elm_backup_database" value="Y"
                                       checked="checked" onclick="Tygh.$('#database_backup_options').toggleBy();"/>
                            </label>
                        </div>
                    </div>

                    <div id="database_backup_options">
                        <hr>
                        <div class="control-group">
                            <label for="dbdump_tables" class="control-label"><?php echo $_smarty_tpl->__("select_tables");?>
:</label>

                            <div class="controls">
                                <select name="dbdump_tables[]" id="dbdump_tables" multiple="multiple" size="10">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_tables']->value, 'tbl');
$_smarty_tpl->tpl_vars['tbl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tbl']->value) {
$_smarty_tpl->tpl_vars['tbl']->do_else = false;
?>
                                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tbl']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['config']->value['table_prefix'] == '' || strpos($_smarty_tpl->tpl_vars['tbl']->value,$_smarty_tpl->tpl_vars['config']->value['table_prefix']) === 0) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tbl']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>

                                <p><a onclick="Tygh.$('#dbdump_tables').selectOptions(true); return false;"
                                      class="underlined"><?php echo $_smarty_tpl->__("select_all");?>
</a> / <a
                                            onclick="Tygh.$('#dbdump_tables').selectOptions(false); return false;"
                                            class="underlined"><?php echo $_smarty_tpl->__("unselect_all");?>
</a></p>

                                <div class="muted description"><?php echo $_smarty_tpl->__("multiple_selectbox_notice");?>
</div>
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="dbdump_filename" class="control-label">
                                <?php echo $_smarty_tpl->__("backup_options");?>
:
                            </label>

                            <div class="controls">
                                <label for="dbdump_schema" class="checkbox">
                                    <input type="checkbox" name="dbdump_schema" id="dbdump_schema" value="Y"
                                           checked="checked">
                                    <?php echo $_smarty_tpl->__("backup_schema");?>

                                    <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_database_manage_backup_schema");?>
</p>
                                </label>
                                <label for="dbdump_data" class="checkbox">
                                    <input type="checkbox" name="dbdump_data" id="dbdump_data" value="Y"
                                           checked="checked">
                                    <?php echo $_smarty_tpl->__("backup_data");?>

                                    <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_database_manage_backup_data");?>
</p>
                                </label>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="control-group">
                        <label for="dbdump_filename" class="control-label"><?php echo $_smarty_tpl->__("backup_filename");?>
:</label>

                        <div class="controls">
                            <div class="input-append">
                                <input type="text" name="dbdump_filename" id="dbdump_filename" size="30"
                                       value="backup_<?php echo htmlspecialchars((string) (defined('PRODUCT_VERSION') ? constant('PRODUCT_VERSION') : null), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) date("dMY_His",time()), ENT_QUOTES, 'UTF-8');?>
" class="input-text">
                                <span class="add-on">.zip</span>
                            </div>
                            <p class="muted description"><?php echo $_smarty_tpl->__("text_backup_filename_hint");?>
</p>
                        </div>
                    </div>

                    <div class="buttons-container">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[datakeeper.backup]",'cancel_action'=>"close",'but_role'=>"submit-link",'but_meta'=>"cm-comet"), 0, true);
?>
                    </div>
                </form>
            </div>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if ($_smarty_tpl->tpl_vars['backup_create_allowed']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"create_backup",'text'=>$_smarty_tpl->__("create_backup"),'title'=>$_smarty_tpl->__("create_backup"),'but_text'=>$_smarty_tpl->__("create_backup"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'act'=>"create",'icon'=>"icon-plus",'but_meta'=>"btn-primary nav__actions-btn-primary"), 0, true);
?>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("backup_restore"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')), 0, false);
}
}
