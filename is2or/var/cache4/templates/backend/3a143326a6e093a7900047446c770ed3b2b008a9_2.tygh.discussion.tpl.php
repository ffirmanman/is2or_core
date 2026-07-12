<?php
/* Smarty version 4.3.0, created on 2025-05-26 05:25:25
  from '/srv/projects/is2or.com/public_html/design/backend/templates/addons/discussion/views/discussion_manager/components/discussion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_68345db5b78637_09864999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a143326a6e093a7900047446c770ed3b2b008a9' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/backend/templates/addons/discussion/views/discussion_manager/components/discussion.tpl',
      1 => 1728377995,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
    'tygh:common/pagination.tpl' => 2,
    'tygh:addons/discussion/views/discussion_manager/components/post.tpl' => 1,
  ),
),false)) {
function content_68345db5b78637_09864999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_post','add_post','add_post','no_data','text_enabled_testimonials_notice'));
if ($_smarty_tpl->tpl_vars['discussion']->value && $_smarty_tpl->tpl_vars['discussion']->value['object_type'] && !$_smarty_tpl->tpl_vars['discussion']->value['is_empty']) {?>

    <?php $_smarty_tpl->_assignInScope('is_allowed_to_add_reviews', (($tmp = $_smarty_tpl->tpl_vars['is_allowed_to_add_reviews']->value ?? null)===null||$tmp==='' ? fn_check_permissions("discussion","add","admin",'') ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('is_allowed_to_update_reviews', fn_check_permissions("discussion","update","admin"));?>
    <?php $_smarty_tpl->_assignInScope('is_allowed_to_bulk_delete_reviews', fn_check_permissions("discussion","m_delete","admin"));?>
    <?php $_smarty_tpl->_assignInScope('is_owned_object', $_smarty_tpl->tpl_vars['runtime']->value['company_id'] == $_smarty_tpl->tpl_vars['object_company_id']->value);?>
    <?php $_smarty_tpl->_assignInScope('is_company_reviews', $_smarty_tpl->tpl_vars['discussion']->value['object_type'] === smarty_modifier_enum("Addons\Discussion\DiscussionObjectTypes::COMPANY"));?>
    <?php $_smarty_tpl->_assignInScope('allow_save', $_smarty_tpl->tpl_vars['is_allowed_to_update_reviews']->value && !($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && (!$_smarty_tpl->tpl_vars['is_owned_object']->value || $_smarty_tpl->tpl_vars['is_company_reviews']->value)));?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "discussion" && $_smarty_tpl->tpl_vars['runtime']->value['controller'] !== "discussion") {?>hidden<?php }?>" id="content_discussion">
    <div class="clearfix">
        <div class="buttons-container buttons-bg pull-right">
            <?php if ($_smarty_tpl->tpl_vars['is_allowed_to_add_reviews']->value && !($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && (!$_smarty_tpl->tpl_vars['is_owned_object']->value || $_smarty_tpl->tpl_vars['is_company_reviews']->value))) {?>
                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['object_type'] == smarty_modifier_enum("Addons\Discussion\DiscussionObjectTypes::TESTIMONIALS_AND_LAYOUT")) {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_post",'title'=>$_smarty_tpl->__("add_post"),'link_text'=>$_smarty_tpl->__("add_post"),'icon'=>"icon-plus",'act'=>"general",'link_class'=>"btn-primary cm-dialog-switch-avail"), 0, false);
?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_post",'link_text'=>$_smarty_tpl->__("add_post"),'act'=>"general",'link_class'=>"btn-primary cm-dialog-switch-avail"), 0, true);
?>
                <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts'] && $_smarty_tpl->tpl_vars['is_allowed_to_update_reviews']->value) {?>
                <?php $_smarty_tpl->_assignInScope('show_save_btn', true ,false ,8);?>
                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['object_type'] == smarty_modifier_enum("Addons\Discussion\DiscussionObjectTypes::TESTIMONIALS_AND_LAYOUT")) {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons_insert", null, null);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['is_allowed_to_bulk_delete_reviews']->value) {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"delete_selected",'dispatch'=>"dispatch[discussion.m_delete]",'form'=>"update_posts_form"), true);?>
</li>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['object_type'] == smarty_modifier_enum("Addons\Discussion\DiscussionObjectTypes::TESTIMONIALS_AND_LAYOUT")) {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php }?>
            <?php }?>
        </div>
    </div><br>

    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>

        <?php echo smarty_function_script(array('src'=>"js/addons/discussion/discussion.js"),$_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'id'=>"pagination_discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0, false);
?>

        <div class="posts-container <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-no-hide-input<?php } else { ?>cm-hide-inputs<?php }?>">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discussion']->value['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                <div class="post-item <?php if ($_smarty_tpl->tpl_vars['discussion']->value['object_type'] == smarty_modifier_enum("Addons\Discussion\DiscussionObjectTypes::ORDER")) {
if ($_smarty_tpl->tpl_vars['post']->value['user_id'] == $_smarty_tpl->tpl_vars['user_id']->value) {?>incoming<?php } else { ?>outgoing<?php }
}?>">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"discussion:items_list_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['post']->value,'type'=>$_smarty_tpl->tpl_vars['discussion']->value['type']), 0, true);
?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0, true);
?>

    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>

    </div>

<?php } elseif ($_smarty_tpl->tpl_vars['discussion']->value['is_empty']) {?>

    <?php echo $_smarty_tpl->__("text_enabled_testimonials_notice",array("[link]"=>fn_url("addons.update&addon=discussion&selected_section=settings")));?>


<?php }
}
}
