<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:27:15
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/templates/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bdb32514f6_85320704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7003538179823cb550c9161a39d2535f8e59e35' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/templates/manage.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 4,
    'tygh:common/fileuploader.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 3,
    'tygh:buttons/save_changes.tpl' => 1,
    'tygh:common/tools.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6835bdb32514f6_85320704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_restore_question','open_file_or_create_new','new_file','create_file','could_not_open_file','upload_file','upload','new_folder','name','new_file','name','on_site_template_editing','restore_from_repository','download','rename','delete','create_file','create_folder','upload_file','create','create','templates'));
echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/templates.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            text_restore_question : '<?php echo strtr((string)$_smarty_tpl->__("text_restore_question"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            text_enter_filename : '<?php echo $_smarty_tpl->__(strtr((string)"text_enter_filename", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )));?>
',
            text_are_you_sure_to_delete_file : '<?php echo $_smarty_tpl->__(strtr((string)"text_are_you_sure_to_delete_file", array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )));?>
'
        });

        <?php if ($_smarty_tpl->tpl_vars['selected_path']->value) {?>
        _.templates.selected_path = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_path']->value, ENT_QUOTES, 'UTF-8');?>
';
        <?php }?>
        _.templates.rel_path = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rel_path']->value, ENT_QUOTES, 'UTF-8');?>
';
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<div id="error_box" class="hidden">
    <div align="center" class="notification-e">
        <div id="error_status"></div>
    </div>
</div>

<div id="status_box" class="hidden">
    <div class="notification-n" align="center">
        <div id="status"></div>
    </div>
</div>

<div class="te-content-container">
    <!--Editor-->
    <div class="te-content cm-te-content">
        <div id="template_text" class="te-ace-editor"></div>
        <div id="template_image" class="te-template-image"></div>
    </div>

    <div class="cm-te-messages">
        <div class="te-empty-folder empty-text">
            <h2><?php echo $_smarty_tpl->__("open_file_or_create_new");?>
</h2>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_file",'text'=>$_smarty_tpl->__("new_file"),'content'=>'','link_text'=>$_smarty_tpl->__("create_file"),'act'=>"general",'link_class'=>"cm-dialog-auto-size btn-primary",'icon'=>"icon-plus"), 0, false);
?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"templates:directory_action"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"templates:directory_action"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"templates:directory_action"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
        <div class="te-unknown-file empty-text">
            <h2><?php echo $_smarty_tpl->__("could_not_open_file");?>
</h2>
        </div>
    </div>
</div>

<div class="hidden" id="content_upload_file" title="<?php echo $_smarty_tpl->__("upload_file");?>
">

    <div class="install-addon">
        <form name="upload_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" name="path" id="upload_path" />
            <div class="install-addon-wrapper">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-puzzle-piece install-addon-banner",'data'=>array("width"=>"151px","height"=>"141px")),$_smarty_tpl);?>


                <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"uploaded_data[0]"), 0, false);
?>
            </div>

            <div class="buttons-container">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[templates.upload_file]",'but_meta'=>"cm-te-upload-file",'cancel_action'=>"close",'but_text'=>$_smarty_tpl->__("upload")), 0, false);
?>

            </div>
        </form>
    </div>
</div>

<div class="hidden" id="content_add_new_folder" title="<?php echo $_smarty_tpl->__("new_folder");?>
">
    <form name="add_folder_form" class="form-horizontal form-edit">
    <div class="control-group">
        <label for="elm_new_folder" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
        <div class="controls">
            <input type="text" class="span4" name="new_folder" id="elm_new_folder" value="" />
        </div>
    </div>
    <div class="buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cancel_action'=>"close",'but_meta'=>"cm-te-create-folder cm-dialog-closer"), 0, true);
?>
    </div>
    </form>
</div>

<div class="hidden" id="content_add_new_file" title="<?php echo $_smarty_tpl->__("new_file");?>
">
    <form name="add_file_form" class="form-horizontal form-edit">
    <div class="control-group">
        <label for="elm_new_file" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
        <div class="controls">
            <input type="text" class="span4" name="new_file" id="elm_new_file" value="" />
        </div>
    </div>
    <div class="buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cancel_action'=>"close",'but_meta'=>"cm-dialog-closer cm-te-create-file"), 0, true);
?>
    </div>
    </form>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->_assignInScope('current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"templates:on_site_template_editing"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"templates:on_site_template_editing"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <li class="cm-te-onsite-editing"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("on_site_template_editing"),'href'=>fn_url("customization.update_mode?type=design&status=enable&return_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value)),'target'=>"_blank",'method'=>"POST"), true);?>
</li>
        <li class="divider"></li>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"templates:on_site_template_editing"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"templates:restore_from_repository"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"templates:restore_from_repository"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <li class="cm-te-restore"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("restore_from_repository")), true);?>
</li>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"templates:restore_from_repository"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <li class="cm-te-getfile"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("download")), true);?>
</li>
        <li class="cm-te-rename"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("rename")), true);?>
</li>
        <li class="cm-te-delete"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete")), true);?>
</li>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'class'=>"ce-te-actions"), true);?>


    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"templates:save_file"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"templates:save_file"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_meta'=>"cm-submit cm-te-save-file disabled",'but_role'=>"button_main"), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"templates:save_file"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"templates:tree"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"templates:tree"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="sidebar-row">
        <!--file tree-->
        <div id="filelist" class="cm-te-file-tree te-file-tree nested-list nested-list-folders"></div>
        <!--#file tree-->
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"templates:tree"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"templates:tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"templates:tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <li class="cm-te-create-file"><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_file",'content'=>'','link_text'=>$_smarty_tpl->__("create_file"),'act'=>"edit",'no_icon_link'=>"true",'link_class'=>"cm-dialog-auto-size"), 0, true);
?></li>
        <li class="cm-te-create-folder"><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_folder",'content'=>'','link_text'=>$_smarty_tpl->__("create_folder"),'act'=>"edit",'no_icon_link'=>"true",'link_class'=>"cm-dialog-auto-size"), 0, true);
?></li>
        <li><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"upload_file",'content'=>'','link_text'=>$_smarty_tpl->__("upload_file"),'act'=>"edit",'no_icon_link'=>"true",'link_class'=>"cm-dialog-auto-size"), 0, true);
?></li>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"templates:tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"main",'tool_meta'=>"cm-te-create",'override_meta'=>"btn btn-primary nav__actions-btn-primary",'hide_actions'=>true,'tools_list'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'display'=>"inline",'title'=>$_smarty_tpl->__("create"),'link_text'=>$_smarty_tpl->__("create"),'icon'=>"icon-plus",'icon_first_tools'=>true), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("templates");?>
<span class="muted f-small cm-te-path te-path"></span>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'title'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox_title'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'sidebar_position'=>"left"), 0, false);
}
}
