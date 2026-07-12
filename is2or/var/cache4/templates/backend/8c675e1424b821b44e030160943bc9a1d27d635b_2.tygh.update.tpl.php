<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:25:59
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/email_templates/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345dd722a2f7_83699421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c675e1424b821b44e030160943bc9a1d27d635b' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/email_templates/update.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_status.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:views/email_templates/preview.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_68345dd722a2f7_83699421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('subject','template','variables','edit','snippets','edit','documents','edit','send_test_email','preview','text_restore_question','restore'));
echo smarty_function_script(array('src'=>"js/tygh/template_editor.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
$_smarty_tpl->_assignInScope('return_url', $_smarty_tpl->tpl_vars['config']->value['current_url']);
$_smarty_tpl->_assignInScope('return_url_escape', rawurlencode((string)$_smarty_tpl->tpl_vars['return_url']->value));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['email_template']->value->getId());
$_smarty_tpl->_assignInScope('params', $_smarty_tpl->tpl_vars['email_template']->value->getParams());?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

<div id="content_general">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="email_template_form" class="form-horizontal">

    <input type="hidden" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars((string) $_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="result_ids" value="preview_dialog" />
    <input type="hidden" name="template_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="event_id" value="<?php echo htmlspecialchars((string) $_REQUEST['event_id'], ENT_QUOTES, 'UTF-8');?>
">

    <fieldset>
        <div class="control-group">
            <label for="elm_email_template_subject_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required control-label"><?php echo $_smarty_tpl->__("subject");?>
:</label>
            <div class="controls">
                <input id="elm_email_template_subject_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="email_template[subject]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email_template']->value->getSubject(), ENT_QUOTES, 'UTF-8');?>
" class="span9 cm-emltpl-set-active cm-focus">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_email_template_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("template");?>
:</label>
            <div class="controls">
                <textarea id="elm_email_template_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="email_template[template]" cols="55" rows="14" class="span9 cm-emltpl-set-active"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email_template']->value->getTemplate(), ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"email_template[status]",'id'=>"elm_email_template_status_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj'=>$_smarty_tpl->tpl_vars['email_template']->value->toArray(),'hidden'=>false), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['params_schema']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params_schema']->value, 'field', false, 'name');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                <div class="control-group">
                    <label class="control-label" for="elm_email_template_params_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['title']);?>
:</label>
                    <div class="controls">

                        <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'checkbox') {?>
                            <input type="hidden" name="email_template[params][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N">
                            <input type="checkbox" id="elm_email_template_params_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" name="email_template[params][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y"<?php if ($_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['name']->value] == "Y") {?> checked="checked"<?php }?> />
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'selectbox') {?>
                            <select name="email_template[params][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_email_template_params_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <option value=""> - </option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['variants'], 'variant_name', false, 'variant_key');
$_smarty_tpl->tpl_vars['variant_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant_key']->value => $_smarty_tpl->tpl_vars['variant_name']->value) {
$_smarty_tpl->tpl_vars['variant_name']->do_else = false;
?>
                                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_key']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['variant_key']->value == $_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['name']->value]) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'checkboxes') {?>
                            <input type="hidden" name="email_template[params][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['variants'], 'variant_name', false, 'variant_key');
$_smarty_tpl->tpl_vars['variant_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant_key']->value => $_smarty_tpl->tpl_vars['variant_name']->value) {
$_smarty_tpl->tpl_vars['variant_name']->do_else = false;
?>
                                <label class="checkbox inline" for="elm_email_template_params_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <input type="checkbox" id="elm_email_template_params_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_key']->value, ENT_QUOTES, 'UTF-8');?>
" name="email_template[params][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_key']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['variant_key']->value,$_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['name']->value])) {?> checked="checked"<?php }?> />
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_name']->value, ENT_QUOTES, 'UTF-8');?>

                                </label>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'textarea') {?>
                            <textarea id="elm_email_template_params_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" name="email_template[params][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" cols="55" rows="3" class="span9"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        <?php } else { ?>
                            <input type="text" id="elm_email_template_params_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" name="email_template[params][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
" />
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['description']) {?>
                            <p class="muted description"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</p>
                        <?php }?>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>

    </fieldset>

    </form>

</div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'track'=>true), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/email_templates/preview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('preview'=>array()), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("variables");?>
</h6>
        <ul class="nav nav-list variables-list variables-list--variables">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variables']->value, 'variable');
$_smarty_tpl->tpl_vars['variable']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variable']->value) {
$_smarty_tpl->tpl_vars['variable']->do_else = false;
?>
                <li class="variables-list__item">
                    <span class="cm-emltpl-insert-variable label hand"
                          data-ca-template-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variable']->value, ENT_QUOTES, 'UTF-8');?>
"
                    ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variable']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"email_templates:variable_link"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"email_templates:variable_link"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if ($_smarty_tpl->tpl_vars['variable']->value == "logos") {?>
                            <a class="variables-list__item__edit" href="<?php echo htmlspecialchars((string) fn_url("themes.manage?show_all_logos#attach_additional_logos"), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("edit");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-edit"),$_smarty_tpl);?>
</a>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"email_templates:variable_link"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>

    <div class="sidebar-row" id="sidebar_snippets">
        <h6><?php echo $_smarty_tpl->__("snippets");?>
</h6>
        <ul class="nav nav-list variables-list variables-list--snippets">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['snippets']->value, 'snippet');
$_smarty_tpl->tpl_vars['snippet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['snippet']->value) {
$_smarty_tpl->tpl_vars['snippet']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['snippet']->value->getStatus() == "A") {?>
                    <li class="variables-list__item">
                        <span class="cm-emltpl-insert-variable label label-info hand"
                              data-ca-template-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getCallTag(), ENT_QUOTES, 'UTF-8');?>
"
                        ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getCode(), ENT_QUOTES, 'UTF-8');?>

                        </span>
                        <a class="variables-list__item__edit" href="<?php echo htmlspecialchars((string) fn_url("snippets.update&snippet_id=".((string)$_smarty_tpl->tpl_vars['snippet']->value->getId())), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("edit");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-edit"),$_smarty_tpl);?>
</a>
                    </li>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <!--sidebar_snippets--></div>

    <div class="sidebar-row" id="sidebar_documents">
        <h6><?php echo $_smarty_tpl->__("documents");?>
</h6>
        <ul class="nav nav-list variables-list variables-list--documents">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['documents']->value, 'document');
$_smarty_tpl->tpl_vars['document']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['document']->value) {
$_smarty_tpl->tpl_vars['document']->do_else = false;
?>
                <li class="variables-list__item">
                    <span class="cm-emltpl-insert-variable label label-info hand"
                          data-ca-template-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['document']->value->getCallTag(), ENT_QUOTES, 'UTF-8');?>
"
                    ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['document']->value->getFullCode(), ENT_QUOTES, 'UTF-8');?>
</span>
                    <a class="variables-list__item__edit" href="<?php echo htmlspecialchars((string) fn_url("documents.update&document_id=".((string)$_smarty_tpl->tpl_vars['document']->value->getId())), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("edit");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-edit"),$_smarty_tpl);?>
</a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <!--sidebar_documents--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"email_templates:update_tools_list_general"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"email_templates:update_tools_list_general"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("send_test_email"),'class'=>"cm-ajax",'dispatch'=>"dispatch[email_templates.send]",'form'=>"email_template_form"), true);?>
</li>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("preview"),'class'=>"cm-ajax cm-form-dialog-opener",'dispatch'=>"dispatch[email_templates.preview]",'form'=>"email_template_form"), true);?>
</li>

            <?php if ($_smarty_tpl->tpl_vars['email_template']->value->isModified()) {?>
                <?php $_smarty_tpl->_assignInScope('r_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                <li><?php ob_start();
echo $_smarty_tpl->__("text_restore_question");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'href'=>"email_templates.restore?template_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_prefixVariable1),'text'=>$_smarty_tpl->__("restore"),'method'=>"POST"), true);?>
</li>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"email_templates:update_tools_list_general"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'class'=>"cm-tab-tools tab-tools",'id'=>"tools_general"), true);?>


    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit-link",'but_name'=>"dispatch[email_templates.update]",'but_target_form'=>"email_template_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['email_template']->value->getName(),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'sidebar_position'=>"left"), 0, false);
}
}
