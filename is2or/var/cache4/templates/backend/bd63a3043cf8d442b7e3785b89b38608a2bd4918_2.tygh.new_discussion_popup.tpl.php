<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:25:25
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345db5b97b72_66007944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd63a3043cf8d442b7e3785b89b38608a2bd4918' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/calendar.tpl' => 1,
    'tygh:addons/discussion/views/discussion_manager/components/rate.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_68345db5b97b72_66007944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','name','creation_date','your_rating','your_message','add','new_post'));
if (fn_check_permissions("discussion","add","admin",'') && !(fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['runtime']->value['company_id'] && ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] != $_smarty_tpl->tpl_vars['object_company_id']->value || $_smarty_tpl->tpl_vars['discussion']->value['object_type'] === smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::COMPANY")))) {
$_smarty_tpl->_assignInScope('tabs_count', 1);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
        <div class="tabs cm-j-tabs tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabs_count']->value, ENT_QUOTES, 'UTF-8');?>
">
            <ul class="nav nav-tabs">
                <li id="tab_add_post" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
            </ul>
        </div>
        <form id='form' action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit cm-disable-empty-files" enctype="multipart/form-data">

            <div class="cm-tabs-content cm-no-hide-input" id="content_tab_add_post">
                <input type ="hidden" name="post_data[thread_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discussion']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
" />
                <input type ="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
&amp;selected_section=discussion" />

                <div class="control-group">
                    <label for="post_data_name" class="cm-required control-label"><?php echo $_smarty_tpl->__("name");?>
:</label>
                    <div class="controls">
                        <input type="text" name="post_data[name]" id="post_data_name" value="<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info']->value['lastname'], ENT_QUOTES, 'UTF-8');
}?>" disabled="disabled">
                    </div>
                </div>

                <div class="control-group">
                    <label for="post_data_timestamp" class="control-label"><?php echo $_smarty_tpl->__("creation_date");?>
:</label>
                    <div class="controls">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"post_data_timestamp",'date_name'=>"post_data[date]",'date_val'=>(($tmp = $_smarty_tpl->tpl_vars['post_data']->value['timestamp'] ?? null)===null||$tmp==='' ? (defined('TIME') ? constant('TIME') : null) ?? null : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'],'show_time'=>true,'time_name'=>"post_data[time]"), 0, false);
?>
                    </div>
                </div>

                <?php if (fn_check_view_permissions("discussion.update")) {?>
                    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "R" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B") {?>
                        <div class="control-group">
                            <label for="rating_value" class="control-label cm-required cm-multiple-radios"><?php echo $_smarty_tpl->__("your_rating");?>
</label>
                            <div class="controls clearfix">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/rate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rate_id'=>"rating_value",'rate_name'=>"post_data[rating_value]",'disabled'=>true), 0, false);
?>
                            </div>
                        </div>
                    <?php }?>
                <?php }?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"discussion:add_post"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"discussion:add_post"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "C" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B") {?>
                    <div class="control-group">
                        <label for="message" class="control-label"><?php echo $_smarty_tpl->__("your_message");?>
:</label>
                        <div class="controls">
                            <textarea name="post_data[message]" id="message" class="input-textarea-long" cols="70" rows="8" disabled="disabled"></textarea>
                        </div>
                    </div>
                <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"discussion:add_post"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>

            <div class="buttons-container">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("add"),'but_name'=>"dispatch[discussion.add]",'cancel_action'=>"close",'hide_first_button'=>false), 0, false);
?>
            </div>

        </form>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_post",'text'=>$_smarty_tpl->__("new_post"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'act'=>"fake"), 0, false);
}
}
}
