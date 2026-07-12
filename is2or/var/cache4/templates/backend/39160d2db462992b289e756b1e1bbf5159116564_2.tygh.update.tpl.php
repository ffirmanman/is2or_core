<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:26:50
  from '/srv/projects/is2or.com/public_html/design/backend/templates/views/snippets/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345e0a2e3b74_40306308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39160d2db462992b289e756b1e1bbf5159116564' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/views/snippets/update.tpl',
      1 => 1728377996,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_status.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 2,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_68345e0a2e3b74_40306308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','code','text_character_identifier_tooltip','template','text_restore_question','text_restore_question','restore'));
echo smarty_function_script(array('src'=>"js/tygh/template_editor.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['snippet']->value->getId());?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

    <div id="content_snippet_general">
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
              method="post"
              enctype="multipart/form-data"
              name="snippet_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
              class="<?php if ($_smarty_tpl->tpl_vars['target']->value == "popup") {?>cm-ajax cm-form-dialog-closer<?php }?> form-horizontal"
        >

            <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="snippet_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="snippet[type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="snippet[addon]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getAddon(), ENT_QUOTES, 'UTF-8');?>
" />

            <div id="content_tab_snippet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <fieldset>

                    <div class="control-group">
                        <label for="elm_snippet_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-focus control-label"><?php echo $_smarty_tpl->__("name");?>
:</label>
                        <div class="controls">
                            <input id="elm_snippet_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="snippet[name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getName(), ENT_QUOTES, 'UTF-8');?>
" class="span9 cm-emltpl-set-active">
                        </div>
                    </div>

                    <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                        <div class="control-group">
                            <label for="elm_snippet_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-focus control-label"><?php echo $_smarty_tpl->__("code");?>
:</label>
                            <div class="controls">
                                <input id="elm_snippet_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="snippet[code]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getCode(), ENT_QUOTES, 'UTF-8');?>
" class="span9 cm-emltpl-set-active">
                                <p class="muted description"><?php echo $_smarty_tpl->__("text_character_identifier_tooltip");?>
</p>
                            </div>
                        </div>
                    <?php }?>

                    <div class="control-group">
                        <label class="cm-required control-label" for="elm_snippet_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("template");?>
:</label>
                        <div class="controls">
                            <textarea id="elm_snippet_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="snippet[template]" cols="55" rows="14" class="span9 cm-emltpl-set-active"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getTemplate(), ENT_QUOTES, 'UTF-8');?>
</textarea>
                        </div>
                    </div>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"snippet[status]",'id'=>"elm_snippet_status_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj'=>$_smarty_tpl->tpl_vars['snippet']->value->toArray(),'hidden'=>false), 0, false);
?>

                </fieldset>
            <!--content_tab_snippet_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
                <?php if ($_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['snippet']->value->isModified()) {?>
                    <?php $_smarty_tpl->_assignInScope('r_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                    <?php if ($_smarty_tpl->tpl_vars['target']->value == "popup") {?>
                        <?php $_smarty_tpl->_assignInScope('restore_btn_class', "cm-confirm cm-ajax");?>
                        <?php $_smarty_tpl->_assignInScope('restore_btn_data', array("data-ca-target-id"=>"content_tab_snippet_".((string)$_smarty_tpl->tpl_vars['id']->value).",content_tab_snippet_buttons_".((string)$_smarty_tpl->tpl_vars['id']->value),"data-ca-confirm-text"=>$_smarty_tpl->__("text_restore_question")));?>
                        <?php $_smarty_tpl->_assignInScope('restore_btn_dropdown_class', "droptop");?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('restore_btn_class', "cm-confirm");?>
                        <?php $_smarty_tpl->_assignInScope('restore_btn_data', array("data-ca-confirm-text"=>$_smarty_tpl->__("text_restore_question")));?>
                        <?php $_smarty_tpl->_assignInScope('restore_btn_dropdown_class', '');?>
                    <?php }?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                        <li>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'href'=>"snippets.restore?snippet_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'class'=>$_smarty_tpl->tpl_vars['restore_btn_class']->value,'data'=>$_smarty_tpl->tpl_vars['restore_btn_data']->value,'text'=>$_smarty_tpl->__("restore"),'method'=>"POST"), true);?>

                        </li>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'class'=>"cm-tab-tools tab-tools ".((string)$_smarty_tpl->tpl_vars['restore_btn_dropdown_class']->value),'id'=>"tools_general"), true);?>

                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['target']->value == "popup") {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[snippets.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit-link",'but_name'=>"dispatch[snippets.update]",'but_target_form'=>"snippet_form_".((string)$_smarty_tpl->tpl_vars['id']->value),'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?>
                <?php }?>

            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['target']->value == "popup") {?>
                <div class="buttons-container" id="content_tab_snippet_buttons_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons');?>

                <!--content_tab_snippet_buttons_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
            <?php }?>
        </form>
    </div>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
        (function(_, $) {
            $.ceEvent('on', 'ce.formajaxpost_snippet_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', function(response_data, params) {
                if (response_data.failed_request) {
                    return false;
                }

                var $dialog = $.ceDialog('get_last');

                $dialog.ceDialog('destroy');
                $dialog.remove();
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"snippets:tabs_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"snippets:tabs_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"snippets:tabs_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'track'=>true), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['target']->value == "popup") {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox');?>

<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['snippet']->value->getName(),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
}
}
}
