<?php
/* Smarty version 4.3.0, created on 2025-05-27 06:20:43
  from '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/discussion/views/discussion/block_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6835bc2bbff701_84405817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e940eb451e149da3afce8977a197a867e74cf988' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/abt__unitheme2/templates/addons/discussion/views/discussion/block_view.tpl',
      1 => 1747376920,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:addons/discussion/views/discussion/components/stars.tpl' => 2,
    'tygh:addons/discussion/views/discussion/components/new_post_button.tpl' => 2,
    'tygh:common/scroller_init_with_quantity.tpl' => 2,
  ),
),false)) {
function content_6835bc2bbff701_84405817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.cycle.php','function'=>'smarty_function_cycle',),2=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),4=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),5=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.discussion.see_more','abt__ut2.discussion.see_less','no_data','write_review','new_post','write_review','abt__ut2.discussion.see_more','abt__ut2.discussion.see_less','no_data','write_review','new_post','write_review'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('discussion', fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value,true,$_REQUEST));?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value && $_smarty_tpl->tpl_vars['discussion']->value['type'] != "D") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>

    <div id="posts_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>
        <div class="ty-mb-l">
            <div class="ty-scroller-discussion-list">
                <div id="scroll_list_discussion" class="owl-carousel ty-scroller-list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discussion']->value['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                        <div class="ty-discussion-post__content ty-mb-l">

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"discussion:items_list_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                        <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION") || $_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING")) {?>
                                <div class="ty-discussion-post__message<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['highlight_administrator'] === "Y" && $_smarty_tpl->tpl_vars['post']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN")) {?> auth-admin<?php }?>">
                                    <div class="ty-discussion-post__message-author">
                                        <div class="ty-discussion-post__author">
                                            <div class="ty-discussion-post__avatar">
                                                                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['highlight_administrator'] === "Y" && $_smarty_tpl->tpl_vars['post']->value['user_type'] === "A") {?>
                                                    <i class="ut2-icon-outline-headset_mic"></i>
                                                <?php } else { ?>
                                                    <?php echo htmlspecialchars((string) fn_substr(trim($_smarty_tpl->tpl_vars['post']->value['name']),0,1), ENT_QUOTES, 'UTF-8');?>

                                                <?php }?>
                                            </div>
                                            <p><b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</b><br/>
                                            <span class="ty-discussion-post__date"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span></p>
                                        </div>
                                                                                <?php if ($_smarty_tpl->tpl_vars['post']->value['user_type'] !== "A") {?>
                                            <div class="ty-discussion-post__rating-stars">
                                                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_RATING") || $_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING") && $_smarty_tpl->tpl_vars['post']->value['rating_value'] > 0) {?>
                                                    <div class="clearfix ty-discussion-post__rating">
                                                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0, true);
?>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        <?php }?>
                                    </div>
                                    <div class="ty-discussion-post__message-text">
                                    <?php if (fn_strlen($_smarty_tpl->tpl_vars['post']->value['message']) > 300) {?>
                                            <div class="clipped">
                                                <p><?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true), (bool) 1);?>
</p>
                                            </div>
                                            <a class="ut2-more-btn" href="javascript:void(0);" onclick="$(this).prev().toggleClass('view');$(this).toggleClass('open');"><i class="ut2-icon-outline-expand_more"></i><span class="see-more"><?php echo $_smarty_tpl->__("abt__ut2.discussion.see_more");?>
</span><span class="see-less"><?php echo $_smarty_tpl->__("abt__ut2.discussion.see_less");?>
</span></a>
                                        <?php } else { ?>
                                            <p><?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true), (bool) 1);?>
</p>                                 
                                    <?php }?>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                        
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
    <!--posts_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if ($_smarty_tpl->tpl_vars['object_type']->value == "P") {?>
        <?php $_smarty_tpl->_assignInScope('new_post_title', $_smarty_tpl->__("write_review"));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('new_post_title', $_smarty_tpl->__("new_post"));?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] !== smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type']), 0, false);
?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('block', array("block_id"=>"discussion","properties"=>array("item_quantity"=>2,"scroll_per_page"=>"Y","not_scroll_automatically"=>"Y","outside_navigation"=>true)));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init_with_quantity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block'=>$_smarty_tpl->tpl_vars['block']->value,'itemsDesktop'=>3,'itemsDesktopSmall'=>2,'itemsTablet'=>2,'itemsTabletSmall'=>1,'itemsMobile'=>1), 0, false);
?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/block_view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/views/discussion/block_view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('discussion', fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value,true,$_REQUEST));?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value && $_smarty_tpl->tpl_vars['discussion']->value['type'] != "D") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, true);
?>

    <div id="posts_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>
        <div class="ty-mb-l">
            <div class="ty-scroller-discussion-list">
                <div id="scroll_list_discussion" class="owl-carousel ty-scroller-list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discussion']->value['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                        <div class="ty-discussion-post__content ty-mb-l">

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"discussion:items_list_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                        <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION") || $_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING")) {?>
                                <div class="ty-discussion-post__message<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['highlight_administrator'] === "Y" && $_smarty_tpl->tpl_vars['post']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN")) {?> auth-admin<?php }?>">
                                    <div class="ty-discussion-post__message-author">
                                        <div class="ty-discussion-post__author">
                                            <div class="ty-discussion-post__avatar">
                                                                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['addons']['discussion']['highlight_administrator'] === "Y" && $_smarty_tpl->tpl_vars['post']->value['user_type'] === "A") {?>
                                                    <i class="ut2-icon-outline-headset_mic"></i>
                                                <?php } else { ?>
                                                    <?php echo htmlspecialchars((string) fn_substr(trim($_smarty_tpl->tpl_vars['post']->value['name']),0,1), ENT_QUOTES, 'UTF-8');?>

                                                <?php }?>
                                            </div>
                                            <p><b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</b><br/>
                                            <span class="ty-discussion-post__date"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span></p>
                                        </div>
                                                                                <?php if ($_smarty_tpl->tpl_vars['post']->value['user_type'] !== "A") {?>
                                            <div class="ty-discussion-post__rating-stars">
                                                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_RATING") || $_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING") && $_smarty_tpl->tpl_vars['post']->value['rating_value'] > 0) {?>
                                                    <div class="clearfix ty-discussion-post__rating">
                                                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0, true);
?>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        <?php }?>
                                    </div>
                                    <div class="ty-discussion-post__message-text">
                                    <?php if (fn_strlen($_smarty_tpl->tpl_vars['post']->value['message']) > 300) {?>
                                            <div class="clipped">
                                                <p><?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true), (bool) 1);?>
</p>
                                            </div>
                                            <a class="ut2-more-btn" href="javascript:void(0);" onclick="$(this).prev().toggleClass('view');$(this).toggleClass('open');"><i class="ut2-icon-outline-expand_more"></i><span class="see-more"><?php echo $_smarty_tpl->__("abt__ut2.discussion.see_more");?>
</span><span class="see-less"><?php echo $_smarty_tpl->__("abt__ut2.discussion.see_less");?>
</span></a>
                                        <?php } else { ?>
                                            <p><?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true), (bool) 1);?>
</p>                                 
                                    <?php }?>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                        
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
    <!--posts_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if ($_smarty_tpl->tpl_vars['object_type']->value == "P") {?>
        <?php $_smarty_tpl->_assignInScope('new_post_title', $_smarty_tpl->__("write_review"));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('new_post_title', $_smarty_tpl->__("new_post"));?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] !== smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type']), 0, true);
?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('block', array("block_id"=>"discussion","properties"=>array("item_quantity"=>2,"scroll_per_page"=>"Y","not_scroll_automatically"=>"Y","outside_navigation"=>true)));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init_with_quantity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block'=>$_smarty_tpl->tpl_vars['block']->value,'itemsDesktop'=>3,'itemsDesktopSmall'=>2,'itemsTablet'=>2,'itemsTabletSmall'=>1,'itemsMobile'=>1), 0, true);
?>

<?php }
}
}
}
