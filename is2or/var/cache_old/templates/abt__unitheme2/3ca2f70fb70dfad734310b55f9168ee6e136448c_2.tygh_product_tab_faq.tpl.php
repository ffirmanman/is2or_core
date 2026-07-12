<?php
/* Smarty version 5.4.3, created on 2026-03-08 19:21:02
  from 'tygh:addons/cp_faq_addon/views/cp_faq_addon/product_tab_faq.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69ada1eee5c804_83688757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ca2f70fb70dfad734310b55f9168ee6e136448c' => 
    array (
      0 => 'addons/cp_faq_addon/views/cp_faq_addon/product_tab_faq.tpl',
      1 => 1767831052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/magnifier.tpl' => 2,
  ),
))) {
function content_69ada1eee5c804_83688757 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/is2or/design/themes/responsive/templates/addons/cp_faq_addon/views/cp_faq_addon';
\Tygh\Languages\Helper::preloadLangVars(array('search','search','no_data','search','search','no_data'));
if ($_smarty_tpl->getValue('runtime')['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->getSmarty()->getRuntime('Capture')->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->getValue('faq_block_id')) {?>
	<?php $_smarty_tpl->assign('faq_pref', $_smarty_tpl->getValue('faq_block_id'), false, NULL);
} else { ?>
    <?php if ($_smarty_tpl->getValue('product')['variation_parent_product_id'] && $_smarty_tpl->getValue('product')['variation_group_id']) {?>
        <?php $_smarty_tpl->assign('faq_pref', $_smarty_tpl->getValue('product')['variation_parent_product_id'], false, NULL);?>
	<?php } elseif ($_smarty_tpl->getValue('product')['product_id']) {?>
		<?php $_smarty_tpl->assign('faq_pref', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
	<?php } else { ?>
		<?php $_smarty_tpl->assign('faq_pref', "faq_pref", false, NULL);?>
	<?php }
}
if ($_smarty_tpl->getValue('show_block_searh')) {?>
	<?php $_smarty_tpl->assign('show_block_searh', $_smarty_tpl->getValue('show_block_searh'), false, NULL);
} else { ?>
	<?php if ($_smarty_tpl->getValue('addons')['cp_faq_addon']['show_search_on_tab'] == "Y") {?>
		<?php $_smarty_tpl->assign('show_block_searh', "Y", false, NULL);?>
	<?php } else { ?>
		<?php $_smarty_tpl->assign('show_block_searh', "N", false, NULL);?>
	<?php }
}
if ($_smarty_tpl->getValue('req_no_hide_questions')) {?>
	<?php $_smarty_tpl->assign('req_no_h_quest', $_smarty_tpl->getValue('req_no_hide_questions'), false, NULL);
} else { ?>
	<?php $_smarty_tpl->assign('req_no_h_quest', "N", false, NULL);
}
if ($_smarty_tpl->getValue('req_no_hide_answers')) {?>
	<?php $_smarty_tpl->assign('req_no_h_answ', $_smarty_tpl->getValue('req_no_hide_answers'), false, NULL);
} else { ?>
	<?php $_smarty_tpl->assign('req_no_h_answ', "N", false, NULL);
}
if ($_smarty_tpl->getValue('no_hide_questions')) {?>
	<?php $_smarty_tpl->assign('no_hide_questions', $_smarty_tpl->getValue('no_hide_questions'), false, NULL);
} else { ?>
	<?php if ($_smarty_tpl->getValue('addons')['cp_faq_addon']['show_expanded_sections_tab'] == "Y") {?>
		<?php $_smarty_tpl->assign('no_hide_questions', "Y", false, NULL);?>
	<?php } else { ?>
		<?php $_smarty_tpl->assign('no_hide_questions', "N", false, NULL);?>
	<?php }
}
if ($_smarty_tpl->getValue('no_hide_answers')) {?>
	<?php $_smarty_tpl->assign('no_hide_answers', $_smarty_tpl->getValue('no_hide_answers'), false, NULL);
} else { ?>
	<?php if ($_smarty_tpl->getValue('addons')['cp_faq_addon']['show_expanded_questions'] == "Y") {?>
		<?php $_smarty_tpl->assign('no_hide_answers', "Y", false, NULL);?>
	<?php } else { ?>
		<?php $_smarty_tpl->assign('no_hide_answers', "N", false, NULL);?>
	<?php }
}
if ($_smarty_tpl->getValue('sect_back_items_ids')) {?> 
	<?php $_smarty_tpl->assign('sect_back_items_ids', $_smarty_tpl->getValue('sect_back_items_ids'), false, NULL);
} elseif ($_smarty_tpl->getValue('product')['cp_faq_sections']) {?>
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['cp_faq_sections'], 'sect');
$foreach86DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sect')->value) {
$foreach86DoElse = false;
?>
		<?php if (!$_smarty_tpl->getValue('sect_back_items_ids')) {?>
			<?php $_smarty_tpl->assign('sect_back_items_ids', $_smarty_tpl->getValue('sect')['back_items_ids'], false, NULL);?>
		<?php }?>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->getValue('quest_back_items_ids')) {?> 
	<?php $_smarty_tpl->assign('quest_back_items_ids', $_smarty_tpl->getValue('quest_back_items_ids'), false, NULL);
} elseif ($_smarty_tpl->getValue('product')['cp_faq_questions']) {?>
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['cp_faq_questions'], 'quest');
$foreach87DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('quest')->value) {
$foreach87DoElse = false;
?>
		<?php if (!$_smarty_tpl->getValue('block_items_ids')) {?>
			<?php $_smarty_tpl->assign('quest_back_items_ids', $_smarty_tpl->getValue('quest')['back_items_ids'], false, NULL);?>
		<?php }?>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->getValue('faq_sections')) {?>
	<?php $_smarty_tpl->assign('faq_sections', $_smarty_tpl->getValue('faq_sections'), false, NULL);
} elseif ($_smarty_tpl->getValue('product')['cp_faq_sections']) {?>
	<?php $_smarty_tpl->assign('faq_sections', $_smarty_tpl->getValue('product')['cp_faq_sections'], false, NULL);
}
if ($_smarty_tpl->getValue('faq_questions')) {?>
	<?php $_smarty_tpl->assign('faq_questions', $_smarty_tpl->getValue('faq_questions'), false, NULL);
} elseif ($_smarty_tpl->getValue('product')['cp_faq_questions']) {?>
	<?php $_smarty_tpl->assign('faq_questions', $_smarty_tpl->getValue('product')['cp_faq_questions'], false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('show_block_searh') && $_smarty_tpl->getValue('show_block_searh') == "Y" && ($_smarty_tpl->getValue('faq_sections') || $_smarty_tpl->getValue('faq_questions'))) {?>
    <div class="ty-search-block cp-faq__search">
        <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" name="search_faq_quest_form" id="search_faq_quest_form" class="cm-ajax cm-submit">
            <input type="hidden" name="result_ids" value="cp_product_faq_tab_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
            
            <?php if ($_smarty_tpl->getValue('no_hide_questions')) {?>
                <input type="hidden" id="faq_hide_questions" name="faq_hide_questions" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('no_hide_questions')), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->getValue('no_hide_answers')) {?>
                <input type="hidden" id="faq_hide_answers" name="faq_hide_answers" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('no_hide_answers')), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->getValue('faq_pref')) {?>
                <input type="hidden" id="faq_block_id" name="faq_block_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->getValue('sect_back_items_ids')) {?>
                <input type="hidden" id="faq_block_sections_items" name="block_sect_items_ids" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sect_back_items_ids')), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->getValue('quest_back_items_ids')) {?>
                <input type="hidden" id="faq_block_questions_items" name="block_quest_items_ids" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('quest_back_items_ids')), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->getValue('product')['variation_parent_product_id'] && $_smarty_tpl->getValue('product')['variation_group_id']) {?>
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['variation_parent_product_id']), ENT_QUOTES, 'UTF-8');?>
">
            <?php } elseif ($_smarty_tpl->getValue('product')) {?>
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->getValue('show_block_searh')) {?>
                <input type="hidden" id="show_block_searh" name="show_block_searh" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_block_searh')), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
                <div id="magnifere_but"><?php $_smarty_tpl->renderSubTemplate("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"cp_faq_addon.tab_faq_search",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("search", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?></div><input type="text" name="faq_request" id="elm_faq_search_<?php echo $_smarty_tpl->getValue('faq_pref');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search_back')), ENT_QUOTES, 'UTF-8');?>
" size="5" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("search", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ty-search-block__input cm-hint" />
        </form>
    </div>
<?php }
if ($_smarty_tpl->getValue('faq_sections') || $_smarty_tpl->getValue('faq_questions') || $_smarty_tpl->getValue('search_done')) {?>
<div id="cp_product_faq_tab_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->getValue('faq_sections') || $_smarty_tpl->getValue('faq_questions')) {?>
        <?php if ($_smarty_tpl->getValue('faq_sections')) {?>
            <div class="cp-faq__list-block" id="all_faq_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('faq_sections'), 'faq_section', false, 'sect_id');
$foreach88DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sect_id')->value => $_smarty_tpl->getVariable('faq_section')->value) {
$foreach88DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('faq_section')['faq_questions']) {?>
                        <div class="cm-combination cp-faq__section <?php if ($_smarty_tpl->getValue('no_hide_questions') && $_smarty_tpl->getValue('no_hide_questions') == "N" && $_smarty_tpl->getValue('req_no_h_quest') && $_smarty_tpl->getValue('req_no_h_quest') == "N") {
} else { ?>open<?php }?>" id="sw_section_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_section')['faq_section_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
                            <div class="cp-faq__section-element">
                                <?php if ($_smarty_tpl->getValue('faq_section')['icon_class']) {?>
                                    <div class="cp-faq__section-icon">
                                        <span><i class="cp-faq__icon <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_section')['icon_class']), ENT_QUOTES, 'UTF-8');?>
"></i></span>
                                    </div>                                  
                                <?php }?>
                                <div class="cp-faq__section-name">
                                    <span><?php echo $_smarty_tpl->getValue('faq_section')['faq_section_name'];?>
</span>
                                </div>
                            </div>
                        </div>                        
                        <div id="section_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_section')['faq_section_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->getValue('no_hide_questions') && $_smarty_tpl->getValue('no_hide_questions') == "N" && $_smarty_tpl->getValue('req_no_h_quest') && $_smarty_tpl->getValue('req_no_h_quest') == "N") {?>hidden<?php }?>">
                            <div class="cp-faq__questions">
                                <span class=" caret-top"><span class=" caret-outer"></span><span class=" caret-inner"></span></span>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('faq_section')['faq_questions'], 'faq_question');
$foreach89DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('faq_question')->value) {
$foreach89DoElse = false;
?>
                                    <div class="cp-faq__question-element">
                                        <div id="sw_sec_question_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_question')['faq_question_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
" class="cm-combination <?php if ($_smarty_tpl->getValue('no_hide_answers') && $_smarty_tpl->getValue('no_hide_answers') == "N" && $_smarty_tpl->getValue('req_no_h_answ') && $_smarty_tpl->getValue('req_no_h_answ') == "N") {
} else { ?>open<?php }?>">
                                            <?php if ($_smarty_tpl->getValue('faq_question')['qu_icon_class']) {?>
                                                <div class="cp-faq__question-icon">
                                                    <span><i class="cp-faq__icon <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_question')['qu_icon_class']), ENT_QUOTES, 'UTF-8');?>
"></i></span>
                                                </div>
                                            <?php }?>
                                            <div class="cp-faq__question-name">
                                                <span <?php if ($_smarty_tpl->getValue('faq_question')['qu_anchor']) {?>data-scroll-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_question')['qu_anchor']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-pref="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
" data-sec-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_section')['faq_section_id']), ENT_QUOTES, 'UTF-8');?>
" data-quest-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_question')['faq_question_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_question')['faq_question']), ENT_QUOTES, 'UTF-8');?>
</span>
                                            </div>
                                        </div>
                                        <div class="cp-faq__answer ty-wysiwyg-content <?php if ($_smarty_tpl->getValue('no_hide_answers') && $_smarty_tpl->getValue('no_hide_answers') == "N" && $_smarty_tpl->getValue('req_no_h_answ') && $_smarty_tpl->getValue('req_no_h_answ') == "N") {?>hidden<?php }?>" id="sec_question_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_question')['faq_question_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
                                            <span><?php echo $_smarty_tpl->getValue('faq_question')['faq_answer'];?>
</span>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('faq_questions')) {?>
            <div class="cp-faq__questions" id="faq_questions_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('faq_questions'), 'item');
$foreach90DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach90DoElse = false;
?>
                    <div class="cp-faq__question-element">
                        <div id="sw_question_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['faq_question_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
" class="cm-combination">
                            <?php if ($_smarty_tpl->getValue('item')['qu_icon_class']) {?>
                                <div class="cp-faq__question-icon">
                                    <span><i class="cp-faq__icon <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['qu_icon_class']), ENT_QUOTES, 'UTF-8');?>
"></i></span>
                                </div>
                            <?php }?>
                            <div class="cp-faq__question-name">
                                 <span <?php if ($_smarty_tpl->getValue('item')['qu_anchor']) {?>data-scroll-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['qu_anchor']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-pref="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
" data-quest-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['faq_question_id']), ENT_QUOTES, 'UTF-8');?>
" class="faq-landing-ico-list__item-title cp-faq-pointer"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['faq_question']), ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        </div>
                        <div class="cp-faq__answer ty-wysiwyg-content <?php if ($_smarty_tpl->getValue('no_hide_answers') && $_smarty_tpl->getValue('no_hide_answers') == "N" && $_smarty_tpl->getValue('req_no_h_answ') && $_smarty_tpl->getValue('req_no_h_answ') == "N") {?>hidden<?php }?>" id="question_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['faq_question_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
                            <span><?php echo $_smarty_tpl->getValue('item')['faq_answer'];?>
</span>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    <?php } else { ?>
        <div class="cp-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_data", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
    <?php }?>
<!--cp_product_faq_tab_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php echo '<script'; ?>
 language="javascript">
    (function(_,$){
        $(document).ready(function(){
            var target= window.location.hash;
            var split = target.split("#");
            var data_id = split[1];
            var $target =  $('[data-scroll-id ='+data_id+']');
            var sec_id = $('[data-scroll-id ='+data_id+']').attr("data-sec-id");
            var quest_id = $('[data-scroll-id ='+data_id+']').attr("data-quest-id");
            var prefix = $('[data-scroll-id ='+data_id+']').attr("data-pref");
            $('#sec_question_'+quest_id+'_'+prefix).removeClass("hidden");
            if (sec_id) {
                $('#section_'+sec_id+'_'+prefix).removeClass("hidden");
            }
            if (quest_id) {
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top - 30
                }, 900, 'swing', function () {
                    window.location.hash = target;
                });
            }
        });
    })(Tygh,Tygh.$);
<?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->getSmarty()->getRuntime('Capture')->close($_smarty_tpl);
if ($_smarty_tpl->getSmarty()->getModifierCallback('trim')($_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->getValue('auth')['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_faq_addon/views/cp_faq_addon/product_tab_faq.tpl" id="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('set_id')->handle(array('name'=>"addons/cp_faq_addon/views/cp_faq_addon/product_tab_faq.tpl"), $_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->getSmarty()->getRuntime('Capture')->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->getValue('faq_block_id')) {?>
	<?php $_smarty_tpl->assign('faq_pref', $_smarty_tpl->getValue('faq_block_id'), false, NULL);
} else { ?>
    <?php if ($_smarty_tpl->getValue('product')['variation_parent_product_id'] && $_smarty_tpl->getValue('product')['variation_group_id']) {?>
        <?php $_smarty_tpl->assign('faq_pref', $_smarty_tpl->getValue('product')['variation_parent_product_id'], false, NULL);?>
	<?php } elseif ($_smarty_tpl->getValue('product')['product_id']) {?>
		<?php $_smarty_tpl->assign('faq_pref', $_smarty_tpl->getValue('product')['product_id'], false, NULL);?>
	<?php } else { ?>
		<?php $_smarty_tpl->assign('faq_pref', "faq_pref", false, NULL);?>
	<?php }
}
if ($_smarty_tpl->getValue('show_block_searh')) {?>
	<?php $_smarty_tpl->assign('show_block_searh', $_smarty_tpl->getValue('show_block_searh'), false, NULL);
} else { ?>
	<?php if ($_smarty_tpl->getValue('addons')['cp_faq_addon']['show_search_on_tab'] == "Y") {?>
		<?php $_smarty_tpl->assign('show_block_searh', "Y", false, NULL);?>
	<?php } else { ?>
		<?php $_smarty_tpl->assign('show_block_searh', "N", false, NULL);?>
	<?php }
}
if ($_smarty_tpl->getValue('req_no_hide_questions')) {?>
	<?php $_smarty_tpl->assign('req_no_h_quest', $_smarty_tpl->getValue('req_no_hide_questions'), false, NULL);
} else { ?>
	<?php $_smarty_tpl->assign('req_no_h_quest', "N", false, NULL);
}
if ($_smarty_tpl->getValue('req_no_hide_answers')) {?>
	<?php $_smarty_tpl->assign('req_no_h_answ', $_smarty_tpl->getValue('req_no_hide_answers'), false, NULL);
} else { ?>
	<?php $_smarty_tpl->assign('req_no_h_answ', "N", false, NULL);
}
if ($_smarty_tpl->getValue('no_hide_questions')) {?>
	<?php $_smarty_tpl->assign('no_hide_questions', $_smarty_tpl->getValue('no_hide_questions'), false, NULL);
} else { ?>
	<?php if ($_smarty_tpl->getValue('addons')['cp_faq_addon']['show_expanded_sections_tab'] == "Y") {?>
		<?php $_smarty_tpl->assign('no_hide_questions', "Y", false, NULL);?>
	<?php } else { ?>
		<?php $_smarty_tpl->assign('no_hide_questions', "N", false, NULL);?>
	<?php }
}
if ($_smarty_tpl->getValue('no_hide_answers')) {?>
	<?php $_smarty_tpl->assign('no_hide_answers', $_smarty_tpl->getValue('no_hide_answers'), false, NULL);
} else { ?>
	<?php if ($_smarty_tpl->getValue('addons')['cp_faq_addon']['show_expanded_questions'] == "Y") {?>
		<?php $_smarty_tpl->assign('no_hide_answers', "Y", false, NULL);?>
	<?php } else { ?>
		<?php $_smarty_tpl->assign('no_hide_answers', "N", false, NULL);?>
	<?php }
}
if ($_smarty_tpl->getValue('sect_back_items_ids')) {?> 
	<?php $_smarty_tpl->assign('sect_back_items_ids', $_smarty_tpl->getValue('sect_back_items_ids'), false, NULL);
} elseif ($_smarty_tpl->getValue('product')['cp_faq_sections']) {?>
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['cp_faq_sections'], 'sect');
$foreach91DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sect')->value) {
$foreach91DoElse = false;
?>
		<?php if (!$_smarty_tpl->getValue('sect_back_items_ids')) {?>
			<?php $_smarty_tpl->assign('sect_back_items_ids', $_smarty_tpl->getValue('sect')['back_items_ids'], false, NULL);?>
		<?php }?>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->getValue('quest_back_items_ids')) {?> 
	<?php $_smarty_tpl->assign('quest_back_items_ids', $_smarty_tpl->getValue('quest_back_items_ids'), false, NULL);
} elseif ($_smarty_tpl->getValue('product')['cp_faq_questions']) {?>
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('product')['cp_faq_questions'], 'quest');
$foreach92DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('quest')->value) {
$foreach92DoElse = false;
?>
		<?php if (!$_smarty_tpl->getValue('block_items_ids')) {?>
			<?php $_smarty_tpl->assign('quest_back_items_ids', $_smarty_tpl->getValue('quest')['back_items_ids'], false, NULL);?>
		<?php }?>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->getValue('faq_sections')) {?>
	<?php $_smarty_tpl->assign('faq_sections', $_smarty_tpl->getValue('faq_sections'), false, NULL);
} elseif ($_smarty_tpl->getValue('product')['cp_faq_sections']) {?>
	<?php $_smarty_tpl->assign('faq_sections', $_smarty_tpl->getValue('product')['cp_faq_sections'], false, NULL);
}
if ($_smarty_tpl->getValue('faq_questions')) {?>
	<?php $_smarty_tpl->assign('faq_questions', $_smarty_tpl->getValue('faq_questions'), false, NULL);
} elseif ($_smarty_tpl->getValue('product')['cp_faq_questions']) {?>
	<?php $_smarty_tpl->assign('faq_questions', $_smarty_tpl->getValue('product')['cp_faq_questions'], false, NULL);
}?>

<?php if ($_smarty_tpl->getValue('show_block_searh') && $_smarty_tpl->getValue('show_block_searh') == "Y" && ($_smarty_tpl->getValue('faq_sections') || $_smarty_tpl->getValue('faq_questions'))) {?>
    <div class="ty-search-block cp-faq__search">
        <form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('fn_url')('')), ENT_QUOTES, 'UTF-8');?>
" method="post" name="search_faq_quest_form" id="search_faq_quest_form" class="cm-ajax cm-submit">
            <input type="hidden" name="result_ids" value="cp_product_faq_tab_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
            
            <?php if ($_smarty_tpl->getValue('no_hide_questions')) {?>
                <input type="hidden" id="faq_hide_questions" name="faq_hide_questions" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('no_hide_questions')), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->getValue('no_hide_answers')) {?>
                <input type="hidden" id="faq_hide_answers" name="faq_hide_answers" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('no_hide_answers')), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->getValue('faq_pref')) {?>
                <input type="hidden" id="faq_block_id" name="faq_block_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->getValue('sect_back_items_ids')) {?>
                <input type="hidden" id="faq_block_sections_items" name="block_sect_items_ids" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('sect_back_items_ids')), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->getValue('quest_back_items_ids')) {?>
                <input type="hidden" id="faq_block_questions_items" name="block_quest_items_ids" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('quest_back_items_ids')), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->getValue('product')['variation_parent_product_id'] && $_smarty_tpl->getValue('product')['variation_group_id']) {?>
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['variation_parent_product_id']), ENT_QUOTES, 'UTF-8');?>
">
            <?php } elseif ($_smarty_tpl->getValue('product')) {?>
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('product')['product_id']), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->getValue('show_block_searh')) {?>
                <input type="hidden" id="show_block_searh" name="show_block_searh" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show_block_searh')), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
                <div id="magnifere_but"><?php $_smarty_tpl->renderSubTemplate("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"cp_faq_addon.tab_faq_search",'alt'=>$_smarty_tpl->getSmarty()->getModifierCallback("__")("search", [], $_smarty_tpl->getSmarty()->getLanguage())), (int) 0, $_smarty_current_dir);
?></div><input type="text" name="faq_request" id="elm_faq_search_<?php echo $_smarty_tpl->getValue('faq_pref');?>
" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('search_back')), ENT_QUOTES, 'UTF-8');?>
" size="5" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("search", [], $_smarty_tpl->getSmarty()->getLanguage());?>
" class="ty-search-block__input cm-hint" />
        </form>
    </div>
<?php }
if ($_smarty_tpl->getValue('faq_sections') || $_smarty_tpl->getValue('faq_questions') || $_smarty_tpl->getValue('search_done')) {?>
<div id="cp_product_faq_tab_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->getValue('faq_sections') || $_smarty_tpl->getValue('faq_questions')) {?>
        <?php if ($_smarty_tpl->getValue('faq_sections')) {?>
            <div class="cp-faq__list-block" id="all_faq_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('faq_sections'), 'faq_section', false, 'sect_id');
$foreach93DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sect_id')->value => $_smarty_tpl->getVariable('faq_section')->value) {
$foreach93DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('faq_section')['faq_questions']) {?>
                        <div class="cm-combination cp-faq__section <?php if ($_smarty_tpl->getValue('no_hide_questions') && $_smarty_tpl->getValue('no_hide_questions') == "N" && $_smarty_tpl->getValue('req_no_h_quest') && $_smarty_tpl->getValue('req_no_h_quest') == "N") {
} else { ?>open<?php }?>" id="sw_section_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_section')['faq_section_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
                            <div class="cp-faq__section-element">
                                <?php if ($_smarty_tpl->getValue('faq_section')['icon_class']) {?>
                                    <div class="cp-faq__section-icon">
                                        <span><i class="cp-faq__icon <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_section')['icon_class']), ENT_QUOTES, 'UTF-8');?>
"></i></span>
                                    </div>                                  
                                <?php }?>
                                <div class="cp-faq__section-name">
                                    <span><?php echo $_smarty_tpl->getValue('faq_section')['faq_section_name'];?>
</span>
                                </div>
                            </div>
                        </div>                        
                        <div id="section_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_section')['faq_section_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->getValue('no_hide_questions') && $_smarty_tpl->getValue('no_hide_questions') == "N" && $_smarty_tpl->getValue('req_no_h_quest') && $_smarty_tpl->getValue('req_no_h_quest') == "N") {?>hidden<?php }?>">
                            <div class="cp-faq__questions">
                                <span class=" caret-top"><span class=" caret-outer"></span><span class=" caret-inner"></span></span>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('faq_section')['faq_questions'], 'faq_question');
$foreach94DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('faq_question')->value) {
$foreach94DoElse = false;
?>
                                    <div class="cp-faq__question-element">
                                        <div id="sw_sec_question_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_question')['faq_question_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
" class="cm-combination <?php if ($_smarty_tpl->getValue('no_hide_answers') && $_smarty_tpl->getValue('no_hide_answers') == "N" && $_smarty_tpl->getValue('req_no_h_answ') && $_smarty_tpl->getValue('req_no_h_answ') == "N") {
} else { ?>open<?php }?>">
                                            <?php if ($_smarty_tpl->getValue('faq_question')['qu_icon_class']) {?>
                                                <div class="cp-faq__question-icon">
                                                    <span><i class="cp-faq__icon <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_question')['qu_icon_class']), ENT_QUOTES, 'UTF-8');?>
"></i></span>
                                                </div>
                                            <?php }?>
                                            <div class="cp-faq__question-name">
                                                <span <?php if ($_smarty_tpl->getValue('faq_question')['qu_anchor']) {?>data-scroll-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_question')['qu_anchor']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-pref="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
" data-sec-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_section')['faq_section_id']), ENT_QUOTES, 'UTF-8');?>
" data-quest-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_question')['faq_question_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_question')['faq_question']), ENT_QUOTES, 'UTF-8');?>
</span>
                                            </div>
                                        </div>
                                        <div class="cp-faq__answer ty-wysiwyg-content <?php if ($_smarty_tpl->getValue('no_hide_answers') && $_smarty_tpl->getValue('no_hide_answers') == "N" && $_smarty_tpl->getValue('req_no_h_answ') && $_smarty_tpl->getValue('req_no_h_answ') == "N") {?>hidden<?php }?>" id="sec_question_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_question')['faq_question_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
                                            <span><?php echo $_smarty_tpl->getValue('faq_question')['faq_answer'];?>
</span>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('faq_questions')) {?>
            <div class="cp-faq__questions" id="faq_questions_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('faq_questions'), 'item');
$foreach95DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach95DoElse = false;
?>
                    <div class="cp-faq__question-element">
                        <div id="sw_question_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['faq_question_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
" class="cm-combination">
                            <?php if ($_smarty_tpl->getValue('item')['qu_icon_class']) {?>
                                <div class="cp-faq__question-icon">
                                    <span><i class="cp-faq__icon <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['qu_icon_class']), ENT_QUOTES, 'UTF-8');?>
"></i></span>
                                </div>
                            <?php }?>
                            <div class="cp-faq__question-name">
                                 <span <?php if ($_smarty_tpl->getValue('item')['qu_anchor']) {?>data-scroll-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['qu_anchor']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-pref="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
" data-quest-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['faq_question_id']), ENT_QUOTES, 'UTF-8');?>
" class="faq-landing-ico-list__item-title cp-faq-pointer"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['faq_question']), ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        </div>
                        <div class="cp-faq__answer ty-wysiwyg-content <?php if ($_smarty_tpl->getValue('no_hide_answers') && $_smarty_tpl->getValue('no_hide_answers') == "N" && $_smarty_tpl->getValue('req_no_h_answ') && $_smarty_tpl->getValue('req_no_h_answ') == "N") {?>hidden<?php }?>" id="question_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['faq_question_id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
">
                            <span><?php echo $_smarty_tpl->getValue('item')['faq_answer'];?>
</span>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    <?php } else { ?>
        <div class="cp-no-items"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback("__")("no_data", [], $_smarty_tpl->getSmarty()->getLanguage());?>
</div>
    <?php }?>
<!--cp_product_faq_tab_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('faq_pref')), ENT_QUOTES, 'UTF-8');?>
--></div>
<?php echo '<script'; ?>
 language="javascript">
    (function(_,$){
        $(document).ready(function(){
            var target= window.location.hash;
            var split = target.split("#");
            var data_id = split[1];
            var $target =  $('[data-scroll-id ='+data_id+']');
            var sec_id = $('[data-scroll-id ='+data_id+']').attr("data-sec-id");
            var quest_id = $('[data-scroll-id ='+data_id+']').attr("data-quest-id");
            var prefix = $('[data-scroll-id ='+data_id+']').attr("data-pref");
            $('#sec_question_'+quest_id+'_'+prefix).removeClass("hidden");
            if (sec_id) {
                $('#section_'+sec_id+'_'+prefix).removeClass("hidden");
            }
            if (quest_id) {
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top - 30
                }, 900, 'swing', function () {
                    window.location.hash = target;
                });
            }
        });
    })(Tygh,Tygh.$);
<?php echo '</script'; ?>
>
<?php }
}
}
}
