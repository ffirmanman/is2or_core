<?php
/* Smarty version 5.4.3, created on 2026-03-09 08:57:38
  from 'tygh:addons/discussion/views/discussion/view.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ae61526e3c25_64903133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f9ba4446bc9fa48d2b36a8a3dd0677a9b3c9820' => 
    array (
      0 => 'addons/discussion/views/discussion/view.tpl',
      1 => 1767831045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:addons/discussion/views/discussion/components/stars.tpl' => 10,
    'tygh:common/pagination.tpl' => 4,
    'tygh:addons/discussion/views/discussion/components/new_post_button.tpl' => 8,
  ),
))) {
function content_69ae61526e3c25_64903133 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/abt__unitheme2/templates/addons/discussion/views/discussion';
\Tygh\Languages\Helper::preloadLangVars(array('new_post','write_review','abt__ut2.discussion.asr_title','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','abt__ut2.discussion.asr_title','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','abt__ut2.discussion.star','abt__ut2.discussion.star','selected','abt__ut2.discussion.star','show_all','abt__ut2.discussion.verified_buyer','abt__ut2.discussion.verified_buyer_bp','abt__ut2.discussion.see_more','abt__ut2.discussion.see_less','abt__ut2.discussion.verified_buyer','abt__ut2.discussion.verified_buyer_bp','abt__ut2.discussion.new_post_title','abt__ut2.discussion.new_post_descr','no_posts_found','abt__ut2.discussion.new_post_title','abt__ut2.discussion.new_post_descr','no_posts_found','new_post','write_review','abt__ut2.discussion.asr_title','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','abt__ut2.discussion.asr_title','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','reviews','abt__ut2.discussion.avr_part1','abt__ut2.discussion.avr_part2','abt__ut2.discussion.star','abt__ut2.discussion.star','selected','abt__ut2.discussion.star','show_all','abt__ut2.discussion.verified_buyer','abt__ut2.discussion.verified_buyer_bp','abt__ut2.discussion.see_more','abt__ut2.discussion.see_less','abt__ut2.discussion.verified_buyer','abt__ut2.discussion.verified_buyer_bp','abt__ut2.discussion.new_post_title','abt__ut2.discussion.new_post_descr','no_posts_found','abt__ut2.discussion.new_post_title','abt__ut2.discussion.new_post_descr','no_posts_found'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->assign('discussion', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion')($_smarty_tpl->getValue('object_id'),$_smarty_tpl->getValue('object_type'),true,$_REQUEST), false, NULL);
if ($_smarty_tpl->getValue('object_type') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionObjectTypes::ORDER")) {?>
    <?php $_smarty_tpl->assign('new_post_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("new_post", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('new_post_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("write_review", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}
if ($_smarty_tpl->getValue('discussion') && $_smarty_tpl->getValue('discussion')['type'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
    <div class="discussion-block" id="<?php if ($_smarty_tpl->getValue('container_id')) {
echo $_smarty_tpl->getValue('container_id');
} else { ?>content_discussion<?php }?>">
        <?php if ($_smarty_tpl->getValue('wrap') == true) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "content", null, null);?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getValue('title')), (int) 0, $_smarty_current_dir);
?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('subheader')) {?>
            <h4><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subheader')), ENT_QUOTES, 'UTF-8');?>
</h4>
        <?php }?>

        <div id="posts_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->getValue('discussion')['posts']) {?>

                         
                       
                <?php if ($_smarty_tpl->getValue('object_type') == "P") {?>
                <div class="left-col">
                        <div class="abt__ut2_rb">
                            <div class="rb-ratings">
                                <div class="rb-rounded-overall">
                                    <?php if ($_smarty_tpl->getValue('object_type') == "E") {?>
                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('addons')['discussion']['home_page_testimonials'],array('B','R'))) {?>
                                            <?php if ($_smarty_tpl->getValue('discussion')['average_rating']) {?>
                                                <?php $_smarty_tpl->assign('average_rating', $_smarty_tpl->getValue('discussion')['average_rating'], false, NULL);?>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->getValue('average_rating') > 0) {?>
                                                <div class="rb-average-rating"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('average_rating')), ENT_QUOTES, 'UTF-8');?>
</div>
                                                <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?><div class="rb-average-rating-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.asr_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div><?php }?>
                                                <div class="rb-stars"><?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('average_rating'))), (int) 0, $_smarty_current_dir);
?></div>
                                                <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "desktop") {?>
                                                    <div class="rb-average-rating-comments mobile">
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('discussion')['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reviews", array($_smarty_tpl->getValue('discussion')['search']['total_items']), $_smarty_tpl->getSmarty()->getLanguage());?>
<br/><span class="rb-average-rating-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part1", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:<br/><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('average_rating')), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part2", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="rb-average-rating-comments">
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('discussion')['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reviews", array($_smarty_tpl->getValue('discussion')['search']['total_items']), $_smarty_tpl->getSmarty()->getLanguage());?>
 <span class="rb-average-rating-info cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part1", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('average_rating')), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part2", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><i class="ut2-icon-outline-info-circle"></i></span>
                                                    </div>
                                                <?php }?>
                                            <?php }?>
                                        <?php }?>
                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->getValue('discussion')['type'] == "R" || $_smarty_tpl->getValue('discussion')['type'] == "B") {?>
                                            <?php if ($_smarty_tpl->getValue('discussion')['average_rating']) {?>
                                                <?php $_smarty_tpl->assign('average_rating', $_smarty_tpl->getValue('discussion')['average_rating'], false, NULL);?>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->getValue('average_rating') > 0) {?>
                                                <div class="rb-average-rating"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('average_rating')), ENT_QUOTES, 'UTF-8');?>
</div>
                                                <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?><div class="rb-average-rating-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.asr_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div><?php }?>
                                                <div class="rb-stars"><?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('average_rating'))), (int) 0, $_smarty_current_dir);
?></div>
                                                <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "desktop") {?>
                                                    <div class="rb-average-rating-comments mobile">
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('discussion')['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reviews", array($_smarty_tpl->getValue('discussion')['search']['total_items']), $_smarty_tpl->getSmarty()->getLanguage());?>
<br/><span class="rb-average-rating-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part1", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:<br/><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('average_rating')), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part2", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="rb-average-rating-comments">
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('discussion')['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reviews", array($_smarty_tpl->getValue('discussion')['search']['total_items']), $_smarty_tpl->getSmarty()->getLanguage());?>
 <span class="rb-average-rating-info cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part1", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('average_rating')), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part2", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><i class="ut2-icon-outline-info-circle"></i></span>
                                                    </div>
                                                <?php }?>
                                            <?php }?>
                                        <?php }?>
                                    <?php }?>
                                </div>
                            </div>
        
                            <div class="rb-histogram">
                                <div class="rb-review-histogram">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('discussion')['search']['posts_rating_count'], 'post_qty', false, 'rating');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('rating')->value => $_smarty_tpl->getVariable('post_qty')->value) {
$foreach18DoElse = false;
?>
                                    <div class="rb-rating-filter">
                                        <?php if ($_smarty_tpl->getValue('post_qty')) {?>
                                            <a href="javascript:void(0);" class="rb-meter-inline cm-abt-filter-post link" data-ca-rating="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rating')), ENT_QUOTES, 'UTF-8');?>
" data-ca-product-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.star", array($_smarty_tpl->getValue('rating')), $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
                                            <div class="meter histogram"><span class="rb-meter-bar" style="width: <?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('post_qty')*100)/$_smarty_tpl->getValue('discussion')['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
%;"></span></div>
                                        <?php } else { ?>
                                            <span class="rb-meter-inline zero"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.star", array($_smarty_tpl->getValue('rating')), $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                            <div class="meter histogram"><span class="rb-meter-bar" style="width: 0%;"></span></div>
                                        <?php }?>
                                        <span class="<?php if ($_smarty_tpl->getValue('post_qty') == 0) {?>zero<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('post_qty')), ENT_QUOTES, 'UTF-8');?>
</span>
                                    </div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
        
                            <div class="rb-selected-filter" id="abt__discussion_buttons_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
">
                                <?php if ($_smarty_tpl->getValue('discussion')['search']['abt__rating']) {?>
                                    <div class="rb-stars">
                                        <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("selected", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.star", array($_smarty_tpl->getValue('discussion')['search']['abt__rating']), $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('discussion')['search']['abt__rating'])), (int) 0, $_smarty_current_dir);
?></p>
        
                                        <a href="javascript:void(0);" class="ty-btn cm-abt-filter-post" data-ca-rating="0" data-ca-product-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
">
                                            <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("show_all", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                        </a>
                                    </div>
                                <?php }?>
                            <!--abt__discussion_buttons_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
                        </div>
                    <?php }?>
                    
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->getValue('object_id')),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->getValue('discussion')['search']), (int) 0, $_smarty_current_dir);
?>
    
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('discussion')['posts'], 'post');
$foreach19DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach19DoElse = false;
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
                                    <div class="ut2-discussion-post__message <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['highlight_administrator'] === "Y" && $_smarty_tpl->getValue('post')['user_type'] === "A") {?>auth-admin<?php }?>">
                                        <div class="ut2-discussion-post__message-author">
                                            <div class="ut2-discussion-post__author">
                                                <div class="ut2-discussion-post__avatar">
                                                                                                        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['verified_buyer'] === "Y" && $_smarty_tpl->getValue('post')['abt__is_buyer']) {?>
                                                        <span class="ut2-verified cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.verified_buyer", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><i class="ut2-icon-outline-check-circle"></i></span>
                                                    <?php }?>
                                                                                                        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['highlight_administrator'] === "Y" && $_smarty_tpl->getValue('post')['user_type'] === "A") {?>
                                                        <i class="ut2-icon-outline-headset_mic"></i>
                                                    <?php } else { ?>
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_substr')($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('post')['name']),0,1)), ENT_QUOTES, 'UTF-8');?>

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
                                                                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('post')['rating_value'])), (int) 0, $_smarty_current_dir);
?>
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="ut2-discussion-post__date"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')['timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']).", ".((string)$_smarty_tpl->getValue('settings')['Appearance']['time_format']))), ENT_QUOTES, 'UTF-8');?>
</div>
                                        </div>
                                        <div class="ut2-discussion-post__message-text">
                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_strlen')($_smarty_tpl->getValue('post')['message']) > 530) {?>
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
                                <?php } else { ?>
                                    <div class="ut2-discussion-post__message">
                                        <div class="ut2-discussion-post__message-author">
                                            <div class="ut2-discussion-post__author">
                                                <div class="ut2-discussion-post__avatar">
                                                                                                        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['verified_buyer'] === "Y" && $_smarty_tpl->getValue('post')['abt__is_buyer']) {?>
                                                        <span class="ut2-verified cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.verified_buyer", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><i class="ut2-icon-outline-check-circle"></i></span>
                                                    <?php }?>
                                                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_substr')($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('post')['name']),0,1)), ENT_QUOTES, 'UTF-8');?>

                                                </div>
                                                <div class="ut2-discussion-post__name">
                                                    <div>
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('post')['name']), ENT_QUOTES, 'UTF-8');?>

                                                                                                                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['verified_buyer'] === "Y" && $_smarty_tpl->getValue('post')['abt__is_buyer']) {?>
                                                            <span class="ut2-vr-user"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.verified_buyer_bp", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                                        <?php }?>
                                                    </div>
                                                    <div class="ut2-discussion-post__rating-stars">
                                                        <div class="clearfix ut2-discussion-post__rating">
                                                            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('post')['rating_value'])), (int) 0, $_smarty_current_dir);
?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ut2-discussion-post__date"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')['timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']).", ".((string)$_smarty_tpl->getValue('settings')['Appearance']['time_format']))), ENT_QUOTES, 'UTF-8');?>
</div>
                                            </div>
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
    
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->getValue('object_id')),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->getValue('discussion')['search']), (int) 0, $_smarty_current_dir);
?>
                
                <?php if ($_smarty_tpl->getValue('object_type') == "P") {?></div>
                <?php }?>
                                
                <?php if ($_smarty_tpl->getValue('object_type') == "P") {?>
                    <div class="right-col">
                        <div class="rb-buttons">
                            <div class="rb-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.new_post_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                            <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.new_post_descr", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
                            <?php if ($_smarty_tpl->getValue('discussion')['type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getValue('new_post_title'),'obj_id'=>$_smarty_tpl->getValue('object_id'),'object_type'=>$_smarty_tpl->getValue('discussion')['object_type'],'locate_to_review_tab'=>$_smarty_tpl->getValue('locate_to_review_tab')), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                        </div>
                    </div>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->getValue('discussion')['type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getValue('new_post_title'),'obj_id'=>$_smarty_tpl->getValue('object_id'),'object_type'=>$_smarty_tpl->getValue('discussion')['object_type'],'locate_to_review_tab'=>$_smarty_tpl->getValue('locate_to_review_tab')), (int) 0, $_smarty_current_dir);
?>
                    <?php }?>              
                <?php }?>
                                
                <?php } else { ?>
                <div class="rb-no-items">
                    <?php if ($_smarty_tpl->getValue('object_type') == "P") {?>
                        <p class="ut2-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_posts_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
                        <div class="rb-buttons">
                            <div class="rb-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.new_post_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                            <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.new_post_descr", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
                            <?php if ($_smarty_tpl->getValue('discussion')['type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getValue('new_post_title'),'obj_id'=>$_smarty_tpl->getValue('object_id'),'object_type'=>$_smarty_tpl->getValue('discussion')['object_type'],'locate_to_review_tab'=>$_smarty_tpl->getValue('locate_to_review_tab')), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                        </div>
                    <?php } else { ?>
                        <p class="ut2-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_posts_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
                        <?php if ($_smarty_tpl->getValue('discussion')['type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getValue('new_post_title'),'obj_id'=>$_smarty_tpl->getValue('object_id'),'object_type'=>$_smarty_tpl->getValue('discussion')['object_type'],'locate_to_review_tab'=>$_smarty_tpl->getValue('locate_to_review_tab')), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>
                    <?php }?>
                </div>
            <?php }?>
        <!--posts_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php if ($_smarty_tpl->getValue('wrap') == true) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'content');?>

        <?php } else { ?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php }?>
    </div>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/view.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/discussion/views/discussion/view.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->assign('discussion', $_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion')($_smarty_tpl->getValue('object_id'),$_smarty_tpl->getValue('object_type'),true,$_REQUEST), false, NULL);
if ($_smarty_tpl->getValue('object_type') == $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionObjectTypes::ORDER")) {?>
    <?php $_smarty_tpl->assign('new_post_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("new_post", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
} else { ?>
    <?php $_smarty_tpl->assign('new_post_title', $_smarty_tpl->getSmarty()->getModifierCallback("__")("write_review", [], $_smarty_tpl->getSmarty()->getLanguage()), false, NULL);
}
if ($_smarty_tpl->getValue('discussion') && $_smarty_tpl->getValue('discussion')['type'] != $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
    <div class="discussion-block" id="<?php if ($_smarty_tpl->getValue('container_id')) {
echo $_smarty_tpl->getValue('container_id');
} else { ?>content_discussion<?php }?>">
        <?php if ($_smarty_tpl->getValue('wrap') == true) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "content", null, null);?>
            <?php $_smarty_tpl->renderSubTemplate("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->getValue('title')), (int) 0, $_smarty_current_dir);
?>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('subheader')) {?>
            <h4><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('subheader')), ENT_QUOTES, 'UTF-8');?>
</h4>
        <?php }?>

        <div id="posts_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->getValue('discussion')['posts']) {?>

                         
                       
                <?php if ($_smarty_tpl->getValue('object_type') == "P") {?>
                <div class="left-col">
                        <div class="abt__ut2_rb">
                            <div class="rb-ratings">
                                <div class="rb-rounded-overall">
                                    <?php if ($_smarty_tpl->getValue('object_type') == "E") {?>
                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('addons')['discussion']['home_page_testimonials'],array('B','R'))) {?>
                                            <?php if ($_smarty_tpl->getValue('discussion')['average_rating']) {?>
                                                <?php $_smarty_tpl->assign('average_rating', $_smarty_tpl->getValue('discussion')['average_rating'], false, NULL);?>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->getValue('average_rating') > 0) {?>
                                                <div class="rb-average-rating"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('average_rating')), ENT_QUOTES, 'UTF-8');?>
</div>
                                                <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?><div class="rb-average-rating-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.asr_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div><?php }?>
                                                <div class="rb-stars"><?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('average_rating'))), (int) 0, $_smarty_current_dir);
?></div>
                                                <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "desktop") {?>
                                                    <div class="rb-average-rating-comments mobile">
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('discussion')['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reviews", array($_smarty_tpl->getValue('discussion')['search']['total_items']), $_smarty_tpl->getSmarty()->getLanguage());?>
<br/><span class="rb-average-rating-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part1", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:<br/><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('average_rating')), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part2", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="rb-average-rating-comments">
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('discussion')['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reviews", array($_smarty_tpl->getValue('discussion')['search']['total_items']), $_smarty_tpl->getSmarty()->getLanguage());?>
 <span class="rb-average-rating-info cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part1", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('average_rating')), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part2", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><i class="ut2-icon-outline-info-circle"></i></span>
                                                    </div>
                                                <?php }?>
                                            <?php }?>
                                        <?php }?>
                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->getValue('discussion')['type'] == "R" || $_smarty_tpl->getValue('discussion')['type'] == "B") {?>
                                            <?php if ($_smarty_tpl->getValue('discussion')['average_rating']) {?>
                                                <?php $_smarty_tpl->assign('average_rating', $_smarty_tpl->getValue('discussion')['average_rating'], false, NULL);?>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->getValue('average_rating') > 0) {?>
                                                <div class="rb-average-rating"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('average_rating')), ENT_QUOTES, 'UTF-8');?>
</div>
                                                <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "mobile") {?><div class="rb-average-rating-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.asr_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div><?php }?>
                                                <div class="rb-stars"><?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('average_rating'))), (int) 0, $_smarty_current_dir);
?></div>
                                                <?php if ($_smarty_tpl->getValue('settings')['ab__device'] !== "desktop") {?>
                                                    <div class="rb-average-rating-comments mobile">
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('discussion')['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reviews", array($_smarty_tpl->getValue('discussion')['search']['total_items']), $_smarty_tpl->getSmarty()->getLanguage());?>
<br/><span class="rb-average-rating-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part1", [], $_smarty_tpl->getSmarty()->getLanguage());?>
:<br/><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('average_rating')), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part2", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="rb-average-rating-comments">
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('discussion')['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("reviews", array($_smarty_tpl->getValue('discussion')['search']['total_items']), $_smarty_tpl->getSmarty()->getLanguage());?>
 <span class="rb-average-rating-info cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part1", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('average_rating')), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.avr_part2", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><i class="ut2-icon-outline-info-circle"></i></span>
                                                    </div>
                                                <?php }?>
                                            <?php }?>
                                        <?php }?>
                                    <?php }?>
                                </div>
                            </div>
        
                            <div class="rb-histogram">
                                <div class="rb-review-histogram">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('discussion')['search']['posts_rating_count'], 'post_qty', false, 'rating');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('rating')->value => $_smarty_tpl->getVariable('post_qty')->value) {
$foreach20DoElse = false;
?>
                                    <div class="rb-rating-filter">
                                        <?php if ($_smarty_tpl->getValue('post_qty')) {?>
                                            <a href="javascript:void(0);" class="rb-meter-inline cm-abt-filter-post link" data-ca-rating="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('rating')), ENT_QUOTES, 'UTF-8');?>
" data-ca-product-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.star", array($_smarty_tpl->getValue('rating')), $_smarty_tpl->getSmarty()->getLanguage());?>
</span></a>
                                            <div class="meter histogram"><span class="rb-meter-bar" style="width: <?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('post_qty')*100)/$_smarty_tpl->getValue('discussion')['search']['total_items']), ENT_QUOTES, 'UTF-8');?>
%;"></span></div>
                                        <?php } else { ?>
                                            <span class="rb-meter-inline zero"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.star", array($_smarty_tpl->getValue('rating')), $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                            <div class="meter histogram"><span class="rb-meter-bar" style="width: 0%;"></span></div>
                                        <?php }?>
                                        <span class="<?php if ($_smarty_tpl->getValue('post_qty') == 0) {?>zero<?php }?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('post_qty')), ENT_QUOTES, 'UTF-8');?>
</span>
                                    </div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
        
                            <div class="rb-selected-filter" id="abt__discussion_buttons_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
">
                                <?php if ($_smarty_tpl->getValue('discussion')['search']['abt__rating']) {?>
                                    <div class="rb-stars">
                                        <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("selected", [], $_smarty_tpl->getSmarty()->getLanguage());?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.star", array($_smarty_tpl->getValue('discussion')['search']['abt__rating']), $_smarty_tpl->getSmarty()->getLanguage());?>
 <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('discussion')['search']['abt__rating'])), (int) 0, $_smarty_current_dir);
?></p>
        
                                        <a href="javascript:void(0);" class="ty-btn cm-abt-filter-post" data-ca-rating="0" data-ca-product-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
">
                                            <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("show_all", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                        </a>
                                    </div>
                                <?php }?>
                            <!--abt__discussion_buttons_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
--></div>
                        </div>
                    <?php }?>
                    
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->getValue('object_id')),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->getValue('discussion')['search']), (int) 0, $_smarty_current_dir);
?>
    
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('discussion')['posts'], 'post');
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach21DoElse = false;
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
                                    <div class="ut2-discussion-post__message <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['highlight_administrator'] === "Y" && $_smarty_tpl->getValue('post')['user_type'] === "A") {?>auth-admin<?php }?>">
                                        <div class="ut2-discussion-post__message-author">
                                            <div class="ut2-discussion-post__author">
                                                <div class="ut2-discussion-post__avatar">
                                                                                                        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['verified_buyer'] === "Y" && $_smarty_tpl->getValue('post')['abt__is_buyer']) {?>
                                                        <span class="ut2-verified cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.verified_buyer", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><i class="ut2-icon-outline-check-circle"></i></span>
                                                    <?php }?>
                                                                                                        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['highlight_administrator'] === "Y" && $_smarty_tpl->getValue('post')['user_type'] === "A") {?>
                                                        <i class="ut2-icon-outline-headset_mic"></i>
                                                    <?php } else { ?>
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_substr')($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('post')['name']),0,1)), ENT_QUOTES, 'UTF-8');?>

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
                                                                <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('post')['rating_value'])), (int) 0, $_smarty_current_dir);
?>
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="ut2-discussion-post__date"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')['timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']).", ".((string)$_smarty_tpl->getValue('settings')['Appearance']['time_format']))), ENT_QUOTES, 'UTF-8');?>
</div>
                                        </div>
                                        <div class="ut2-discussion-post__message-text">
                                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('fn_strlen')($_smarty_tpl->getValue('post')['message']) > 530) {?>
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
                                <?php } else { ?>
                                    <div class="ut2-discussion-post__message">
                                        <div class="ut2-discussion-post__message-author">
                                            <div class="ut2-discussion-post__author">
                                                <div class="ut2-discussion-post__avatar">
                                                                                                        <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['verified_buyer'] === "Y" && $_smarty_tpl->getValue('post')['abt__is_buyer']) {?>
                                                        <span class="ut2-verified cm-tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.verified_buyer", [], $_smarty_tpl->getSmarty()->getLanguage());?>
"><i class="ut2-icon-outline-check-circle"></i></span>
                                                    <?php }?>
                                                    <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_substr')($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getValue('post')['name']),0,1)), ENT_QUOTES, 'UTF-8');?>

                                                </div>
                                                <div class="ut2-discussion-post__name">
                                                    <div>
                                                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('post')['name']), ENT_QUOTES, 'UTF-8');?>

                                                                                                                <?php if ($_smarty_tpl->getValue('settings')['abt__ut2']['addons']['discussion']['verified_buyer'] === "Y" && $_smarty_tpl->getValue('post')['abt__is_buyer']) {?>
                                                            <span class="ut2-vr-user"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.verified_buyer_bp", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</span>
                                                        <?php }?>
                                                    </div>
                                                    <div class="ut2-discussion-post__rating-stars">
                                                        <div class="clearfix ut2-discussion-post__rating">
                                                            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->getSmarty()->getModifierCallback('fn_get_discussion_rating')($_smarty_tpl->getValue('post')['rating_value'])), (int) 0, $_smarty_current_dir);
?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ut2-discussion-post__date"><?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')['timestamp'],((string)$_smarty_tpl->getValue('settings')['Appearance']['date_format']).", ".((string)$_smarty_tpl->getValue('settings')['Appearance']['time_format']))), ENT_QUOTES, 'UTF-8');?>
</div>
                                            </div>
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
    
                    <?php $_smarty_tpl->renderSubTemplate("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->getValue('object_id')),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->getValue('discussion')['search']), (int) 0, $_smarty_current_dir);
?>
                
                <?php if ($_smarty_tpl->getValue('object_type') == "P") {?></div>
                <?php }?>
                                
                <?php if ($_smarty_tpl->getValue('object_type') == "P") {?>
                    <div class="right-col">
                        <div class="rb-buttons">
                            <div class="rb-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.new_post_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                            <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.new_post_descr", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
                            <?php if ($_smarty_tpl->getValue('discussion')['type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getValue('new_post_title'),'obj_id'=>$_smarty_tpl->getValue('object_id'),'object_type'=>$_smarty_tpl->getValue('discussion')['object_type'],'locate_to_review_tab'=>$_smarty_tpl->getValue('locate_to_review_tab')), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                        </div>
                    </div>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->getValue('discussion')['type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                    <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getValue('new_post_title'),'obj_id'=>$_smarty_tpl->getValue('object_id'),'object_type'=>$_smarty_tpl->getValue('discussion')['object_type'],'locate_to_review_tab'=>$_smarty_tpl->getValue('locate_to_review_tab')), (int) 0, $_smarty_current_dir);
?>
                    <?php }?>              
                <?php }?>
                                
                <?php } else { ?>
                <div class="rb-no-items">
                    <?php if ($_smarty_tpl->getValue('object_type') == "P") {?>
                        <p class="ut2-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_posts_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
                        <div class="rb-buttons">
                            <div class="rb-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.new_post_title", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
                            <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("abt__ut2.discussion.new_post_descr", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
                            <?php if ($_smarty_tpl->getValue('discussion')['type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                            <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getValue('new_post_title'),'obj_id'=>$_smarty_tpl->getValue('object_id'),'object_type'=>$_smarty_tpl->getValue('discussion')['object_type'],'locate_to_review_tab'=>$_smarty_tpl->getValue('locate_to_review_tab')), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                        </div>
                    <?php } else { ?>
                        <p class="ut2-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_posts_found", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</p>
                        <?php if ($_smarty_tpl->getValue('discussion')['type'] !== $_smarty_tpl->getSmarty()->getModifierCallback('enum')("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
                        <?php $_smarty_tpl->renderSubTemplate("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->getValue('new_post_title'),'obj_id'=>$_smarty_tpl->getValue('object_id'),'object_type'=>$_smarty_tpl->getValue('discussion')['object_type'],'locate_to_review_tab'=>$_smarty_tpl->getValue('locate_to_review_tab')), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>
                    <?php }?>
                </div>
            <?php }?>
        <!--posts_list_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('object_id')), ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php if ($_smarty_tpl->getValue('wrap') == true) {?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
            <?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'content');?>

        <?php } else { ?>
            <?php $_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) ($_smarty_tpl->getValue('title')), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);?>
        <?php }?>
    </div>
<?php }
}
}
}
