<?php
/* Smarty version 5.4.3, created on 2026-03-10 08:54:30
  from 'tygh:addons/discussion/views/discussion/block_view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69afb216e652b5_51656935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24fea6be53730451982c693afd3191e255892887' => 
    array (
      0 => 'addons/discussion/views/discussion/block_view.tpl',
      1 => 1767831045,
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
))) {
function content_69afb216e652b5_51656935 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/discussion/views/discussion';
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.discussion.verified_buyer_bp','abt__ut2.discussion.see_more','abt__ut2.discussion.see_less','no_data','write_review','new_post','write_review','abt__ut2.discussion.verified_buyer_bp','abt__ut2.discussion.see_more','abt__ut2.discussion.see_less','no_data','write_review','new_post','write_review'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('discussion', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion')($_smarty_tpl->getValue('object_id'),$_smarty_tpl->getValue('object_type'),true,$_REQUEST), false, NULL);?>

<?php if ($_smarty_tpl->getValue('discussion') && $_smarty_tpl->getValue('discussion')['type'] != "D") {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getValue('title')), (int) 0, $_smarty_current_dir);
?>

    <div id="posts_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->getValue('discussion')['posts']) {?>
        <div class="ty-mb-s">
            <div class="ut2-scroller-discussion-list">
                <div id="scroll_list_discussion" class="owl-carousel ty-scroller-list">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('discussion')['posts'], 'post');
$foreach22DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach22DoElse = false;
?>
                        <div class="ut2-discussion-post__content">

                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

                        <div class="ut2-discussion-post <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('cycle')->handle(array('values'=>", ut2-discussion-post_even"), $_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('post')['post_id']), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->getValue('discussion')['type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION") || $_smarty_tpl->getValue('discussion')['type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING")) {?>
                                <div class="ut2-discussion-post__message<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['highlight_administrator'] === "Y" && $_smarty_tpl->getValue('post')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN")) {?> auth-admin<?php }?>">
                                    <div class="ut2-discussion-post__message-author">
                                        <div class="ut2-discussion-post__message-author">
                                            <div class="ut2-discussion-post__author">
                                                <div class="ut2-discussion-post__avatar">
                                                                                                        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['highlight_administrator'] === "Y" && $_smarty_tpl->getValue('post')['user_type'] === "A") {?>
                                                        <i class="ut2-icon-outline-headset_mic"></i>
                                                    <?php } else { ?>
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_substr')($_smarty_tpl->getValue('post')['name'],0,1)), ENT_QUOTES, 'UTF-8');?>

                                                    <?php }?>
                                                </div>
                                                <div class="ut2-discussion-post__name">
                                                    <div>
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('post')['name']), ENT_QUOTES, 'UTF-8');?>

                                                                                                                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['verified_buyer'] === "Y" && $_smarty_tpl->getValue('post')['abt__is_buyer']) {?>
                                                            <span class="ut2-vr-user"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.verified_buyer_bp", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                                        <?php }?>
                                                    </div>

                                                                                                        <?php if ($_smarty_tpl->getValue('post')['user_type'] !== "A") {?>
                                                        <div class="ut2-discussion-post__rating-stars">
                                                            <?php if ($_smarty_tpl->getValue('discussion')['type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_RATING") || $_smarty_tpl->getValue('discussion')['type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING") && $_smarty_tpl->getValue('post')['rating_value'] > 0) {?>
                                                                <div class="clearfix ut2-discussion-post__rating">
                                                                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('post')['rating_value'])), (int) 0, $_smarty_current_dir);
?>
                                                                </div>
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="ut2-discussion-post__date"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')['timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']).", ".((string)$_smarty_tpl->getValue('settings')['Appearance']['time_format']))), ENT_QUOTES, 'UTF-8');?>
</div>
                                        </div>
                                    </div>
                                    <div class="ut2-discussion-post__message-text">
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_strlen')($_smarty_tpl->getValue('post')['message']) > 300) {?>
                                            <div class="clipped">
                                                <p><?php echo nl2br((string) $_smarty_tpl->getValue('post')['message'], (bool) 1);?>
</p>
                                            </div>
                                            <a class="ut2-more-btn" href="javascript:void(0);" onclick="$(this).prev().toggleClass('view');$(this).toggleClass('open');"><i class="ut2-icon-outline-expand_more"></i><span class="see-more"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.see_more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><span class="see-less"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.see_less", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
                                        <?php } else { ?>
                                            <p><?php echo nl2br((string) $_smarty_tpl->getValue('post')['message'], (bool) 1);?>
</p>                                 
                                    <?php }?>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                        
                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"discussion:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_data", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
    <?php }?>
    <!--posts_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if ($_smarty_tpl->getValue('object_type') == "P") {?>
        <?php $_smarty_tpl->assign('new_post_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("write_review", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('new_post_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("new_post", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('discussion')['type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("write_review", [], $_smarty_tpl->getSmarty()->getLanguage()),'obj_id'=>$_smarty_tpl->getValue('object_id'),'object_type'=>$_smarty_tpl->getValue('discussion')['object_type']), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <?php $_smarty_tpl->assign('block', array("block_id"=>"discussion","properties"=>array("item_quantity"=>2,"scroll_per_page"=>"Y","not_scroll_automatically"=>"Y","outside_navigation"=>true)), false, NULL);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/scroller_init_with_quantity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block'=>$_smarty_tpl->getValue('block'),'itemsDesktop'=>3,'itemsDesktopSmall'=>2,'itemsTablet'=>2,'itemsTabletSmall'=>1,'itemsMobile'=>1), (int) 0, $_smarty_current_dir);
?>

<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/block_view.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/discussion/views/discussion/block_view.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('discussion', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion')($_smarty_tpl->getValue('object_id'),$_smarty_tpl->getValue('object_type'),true,$_REQUEST), false, NULL);?>

<?php if ($_smarty_tpl->getValue('discussion') && $_smarty_tpl->getValue('discussion')['type'] != "D") {?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getValue('title')), (int) 0, $_smarty_current_dir);
?>

    <div id="posts_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->getValue('discussion')['posts']) {?>
        <div class="ty-mb-s">
            <div class="ut2-scroller-discussion-list">
                <div id="scroll_list_discussion" class="owl-carousel ty-scroller-list">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('discussion')['posts'], 'post');
$foreach23DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach23DoElse = false;
?>
                        <div class="ut2-discussion-post__content">

                        <?php $_block_repeat=true;
if (!$_smarty_tpl->getSmarty()->getBlockHandler('hook')) {
throw new \Smarty\Exception('block tag \'hook\' not callable or registered');
}

echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
  ob_start();
?>

                        <div class="ut2-discussion-post <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('cycle')->handle(array('values'=>", ut2-discussion-post_even"), $_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('post')['post_id']), ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->getValue('discussion')['type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION") || $_smarty_tpl->getValue('discussion')['type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING")) {?>
                                <div class="ut2-discussion-post__message<?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['highlight_administrator'] === "Y" && $_smarty_tpl->getValue('post')['user_type'] === $_smarty_tpl->getSmarty()->getModifierCallback('enum')("UserTypes::ADMIN")) {?> auth-admin<?php }?>">
                                    <div class="ut2-discussion-post__message-author">
                                        <div class="ut2-discussion-post__message-author">
                                            <div class="ut2-discussion-post__author">
                                                <div class="ut2-discussion-post__avatar">
                                                                                                        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['highlight_administrator'] === "Y" && $_smarty_tpl->getValue('post')['user_type'] === "A") {?>
                                                        <i class="ut2-icon-outline-headset_mic"></i>
                                                    <?php } else { ?>
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_substr')($_smarty_tpl->getValue('post')['name'],0,1)), ENT_QUOTES, 'UTF-8');?>

                                                    <?php }?>
                                                </div>
                                                <div class="ut2-discussion-post__name">
                                                    <div>
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('post')['name']), ENT_QUOTES, 'UTF-8');?>

                                                                                                                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['verified_buyer'] === "Y" && $_smarty_tpl->getValue('post')['abt__is_buyer']) {?>
                                                            <span class="ut2-vr-user"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.verified_buyer_bp", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                                        <?php }?>
                                                    </div>

                                                                                                        <?php if ($_smarty_tpl->getValue('post')['user_type'] !== "A") {?>
                                                        <div class="ut2-discussion-post__rating-stars">
                                                            <?php if ($_smarty_tpl->getValue('discussion')['type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_RATING") || $_smarty_tpl->getValue('discussion')['type'] == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING") && $_smarty_tpl->getValue('post')['rating_value'] > 0) {?>
                                                                <div class="clearfix ut2-discussion-post__rating">
                                                                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('post')['rating_value'])), (int) 0, $_smarty_current_dir);
?>
                                                                </div>
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="ut2-discussion-post__date"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')['timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']).", ".((string)$_smarty_tpl->getValue('settings')['Appearance']['time_format']))), ENT_QUOTES, 'UTF-8');?>
</div>
                                        </div>
                                    </div>
                                    <div class="ut2-discussion-post__message-text">
                                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_strlen')($_smarty_tpl->getValue('post')['message']) > 300) {?>
                                            <div class="clipped">
                                                <p><?php echo nl2br((string) $_smarty_tpl->getValue('post')['message'], (bool) 1);?>
</p>
                                            </div>
                                            <a class="ut2-more-btn" href="javascript:void(0);" onclick="$(this).prev().toggleClass('view');$(this).toggleClass('open');"><i class="ut2-icon-outline-expand_more"></i><span class="see-more"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.see_more", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span><span class="see-less"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.see_less", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
                                        <?php } else { ?>
                                            <p><?php echo nl2br((string) $_smarty_tpl->getValue('post')['message'], (bool) 1);?>
</p>                                 
                                    <?php }?>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                        
                        <?php $_block_repeat=false;
echo $_smarty_tpl->getSmarty()->getBlockHandler('hook')->handle(array('name'=>"discussion:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
?>

                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <p class="ty-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_data", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
    <?php }?>
    <!--posts_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if ($_smarty_tpl->getValue('object_type') == "P") {?>
        <?php $_smarty_tpl->assign('new_post_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("write_review", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
    <?php } else { ?>
        <?php $_smarty_tpl->assign('new_post_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("new_post", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);?>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('discussion')['type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("write_review", [], $_smarty_tpl->getSmarty()->getLanguage()),'obj_id'=>$_smarty_tpl->getValue('object_id'),'object_type'=>$_smarty_tpl->getValue('discussion')['object_type']), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <?php $_smarty_tpl->assign('block', array("block_id"=>"discussion","properties"=>array("item_quantity"=>2,"scroll_per_page"=>"Y","not_scroll_automatically"=>"Y","outside_navigation"=>true)), false, NULL);?>
    <?php $_smarty_tpl->renderSubTemplate("tygh:common/scroller_init_with_quantity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('block'=>$_smarty_tpl->getValue('block'),'itemsDesktop'=>3,'itemsDesktopSmall'=>2,'itemsTablet'=>2,'itemsTabletSmall'=>1,'itemsMobile'=>1), (int) 0, $_smarty_current_dir);
?>

<?php }
}
}
}
