<?php
/* Smarty version 4.3.0, created on 2025-05-26 04:57:17
  from '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/cp_faq_addon/views/cp_faq_addon/product_tab_faq.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6834571d624d25_84354466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e86521e7f97ef4fe0c76e449e3de4d97dceb2a7' => 
    array (
      0 => '/srv/projects/is2or.com/public_html/design/themes/responsive/templates/addons/cp_faq_addon/views/cp_faq_addon/product_tab_faq.tpl',
      1 => 1747376510,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/magnifier.tpl' => 2,
  ),
),false)) {
function content_6834571d624d25_84354466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/srv/projects/is2or.com/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('search','search','no_data','search','search','no_data'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['faq_block_id']->value) {?>
	<?php $_smarty_tpl->_assignInScope('faq_pref', $_smarty_tpl->tpl_vars['faq_block_id']->value);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['variation_parent_product_id'] && $_smarty_tpl->tpl_vars['product']->value['variation_group_id']) {?>
        <?php $_smarty_tpl->_assignInScope('faq_pref', $_smarty_tpl->tpl_vars['product']->value['variation_parent_product_id']);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['product_id']) {?>
		<?php $_smarty_tpl->_assignInScope('faq_pref', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('faq_pref', "faq_pref");?>
	<?php }
}
if ($_smarty_tpl->tpl_vars['show_block_searh']->value) {?>
	<?php $_smarty_tpl->_assignInScope('show_block_searh', $_smarty_tpl->tpl_vars['show_block_searh']->value);
} else { ?>
	<?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_faq_addon']['show_search_on_tab'] == "Y") {?>
		<?php $_smarty_tpl->_assignInScope('show_block_searh', "Y");?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('show_block_searh', "N");?>
	<?php }
}
if ($_smarty_tpl->tpl_vars['req_no_hide_questions']->value) {?>
	<?php $_smarty_tpl->_assignInScope('req_no_h_quest', $_smarty_tpl->tpl_vars['req_no_hide_questions']->value);
} else { ?>
	<?php $_smarty_tpl->_assignInScope('req_no_h_quest', "N");
}
if ($_smarty_tpl->tpl_vars['req_no_hide_answers']->value) {?>
	<?php $_smarty_tpl->_assignInScope('req_no_h_answ', $_smarty_tpl->tpl_vars['req_no_hide_answers']->value);
} else { ?>
	<?php $_smarty_tpl->_assignInScope('req_no_h_answ', "N");
}
if ($_smarty_tpl->tpl_vars['no_hide_questions']->value) {?>
	<?php $_smarty_tpl->_assignInScope('no_hide_questions', $_smarty_tpl->tpl_vars['no_hide_questions']->value);
} else { ?>
	<?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_faq_addon']['show_expanded_sections_tab'] == "Y") {?>
		<?php $_smarty_tpl->_assignInScope('no_hide_questions', "Y");?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('no_hide_questions', "N");?>
	<?php }
}
if ($_smarty_tpl->tpl_vars['no_hide_answers']->value) {?>
	<?php $_smarty_tpl->_assignInScope('no_hide_answers', $_smarty_tpl->tpl_vars['no_hide_answers']->value);
} else { ?>
	<?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_faq_addon']['show_expanded_questions'] == "Y") {?>
		<?php $_smarty_tpl->_assignInScope('no_hide_answers', "Y");?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('no_hide_answers', "N");?>
	<?php }
}
if ($_smarty_tpl->tpl_vars['sect_back_items_ids']->value) {?> 
	<?php $_smarty_tpl->_assignInScope('sect_back_items_ids', $_smarty_tpl->tpl_vars['sect_back_items_ids']->value);
} elseif ($_smarty_tpl->tpl_vars['product']->value['cp_faq_sections']) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['cp_faq_sections'], 'sect');
$_smarty_tpl->tpl_vars['sect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->do_else = false;
?>
		<?php if (!$_smarty_tpl->tpl_vars['sect_back_items_ids']->value) {?>
			<?php $_smarty_tpl->_assignInScope('sect_back_items_ids', $_smarty_tpl->tpl_vars['sect']->value['back_items_ids']);?>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['quest_back_items_ids']->value) {?> 
	<?php $_smarty_tpl->_assignInScope('quest_back_items_ids', $_smarty_tpl->tpl_vars['quest_back_items_ids']->value);
} elseif ($_smarty_tpl->tpl_vars['product']->value['cp_faq_questions']) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['cp_faq_questions'], 'quest');
$_smarty_tpl->tpl_vars['quest']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['quest']->value) {
$_smarty_tpl->tpl_vars['quest']->do_else = false;
?>
		<?php if (!$_smarty_tpl->tpl_vars['block_items_ids']->value) {?>
			<?php $_smarty_tpl->_assignInScope('quest_back_items_ids', $_smarty_tpl->tpl_vars['quest']->value['back_items_ids']);?>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['faq_sections']->value) {?>
	<?php $_smarty_tpl->_assignInScope('faq_sections', $_smarty_tpl->tpl_vars['faq_sections']->value);
} elseif ($_smarty_tpl->tpl_vars['product']->value['cp_faq_sections']) {?>
	<?php $_smarty_tpl->_assignInScope('faq_sections', $_smarty_tpl->tpl_vars['product']->value['cp_faq_sections']);
}
if ($_smarty_tpl->tpl_vars['faq_questions']->value) {?>
	<?php $_smarty_tpl->_assignInScope('faq_questions', $_smarty_tpl->tpl_vars['faq_questions']->value);
} elseif ($_smarty_tpl->tpl_vars['product']->value['cp_faq_questions']) {?>
	<?php $_smarty_tpl->_assignInScope('faq_questions', $_smarty_tpl->tpl_vars['product']->value['cp_faq_questions']);
}?>

<?php if ($_smarty_tpl->tpl_vars['show_block_searh']->value && $_smarty_tpl->tpl_vars['show_block_searh']->value == "Y" && ($_smarty_tpl->tpl_vars['faq_sections']->value || $_smarty_tpl->tpl_vars['faq_questions']->value)) {?>
    <div class="ty-search-block cp-faq__search">
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="search_faq_quest_form" id="search_faq_quest_form" class="cm-ajax cm-submit">
            <input type="hidden" name="result_ids" value="cp_product_faq_tab_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
            
            <?php if ($_smarty_tpl->tpl_vars['no_hide_questions']->value) {?>
                <input type="hidden" id="faq_hide_questions" name="faq_hide_questions" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_questions']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['no_hide_answers']->value) {?>
                <input type="hidden" id="faq_hide_answers" name="faq_hide_answers" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_answers']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['faq_pref']->value) {?>
                <input type="hidden" id="faq_block_id" name="faq_block_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['sect_back_items_ids']->value) {?>
                <input type="hidden" id="faq_block_sections_items" name="block_sect_items_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sect_back_items_ids']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['quest_back_items_ids']->value) {?>
                <input type="hidden" id="faq_block_questions_items" name="block_quest_items_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['quest_back_items_ids']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['variation_parent_product_id'] && $_smarty_tpl->tpl_vars['product']->value['variation_group_id']) {?>
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['variation_parent_product_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value) {?>
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['show_block_searh']->value) {?>
                <input type="hidden" id="show_block_searh" name="show_block_searh" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_block_searh']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
                <div id="magnifere_but"><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"cp_faq_addon.tab_faq_search",'alt'=>$_smarty_tpl->__("search")), 0, false);
?></div><input type="text" name="faq_request" id="elm_faq_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_back']->value, ENT_QUOTES, 'UTF-8');?>
" size="5" placeholder="<?php echo $_smarty_tpl->__("search");?>
" class="ty-search-block__input cm-hint" />
        </form>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['faq_sections']->value || $_smarty_tpl->tpl_vars['faq_questions']->value || $_smarty_tpl->tpl_vars['search_done']->value) {?>
<div id="cp_product_faq_tab_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['faq_sections']->value || $_smarty_tpl->tpl_vars['faq_questions']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['faq_sections']->value) {?>
            <div class="cp-faq__list-block" id="all_faq_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['faq_sections']->value, 'faq_section', false, 'sect_id');
$_smarty_tpl->tpl_vars['faq_section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect_id']->value => $_smarty_tpl->tpl_vars['faq_section']->value) {
$_smarty_tpl->tpl_vars['faq_section']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['faq_section']->value['faq_questions']) {?>
                        <div class="cm-combination cp-faq__section <?php if ($_smarty_tpl->tpl_vars['no_hide_questions']->value && $_smarty_tpl->tpl_vars['no_hide_questions']->value == "N" && $_smarty_tpl->tpl_vars['req_no_h_quest']->value && $_smarty_tpl->tpl_vars['req_no_h_quest']->value == "N") {
} else { ?>open<?php }?>" id="sw_section_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_section']->value['faq_section_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <div class="cp-faq__section-element">
                                <?php if ($_smarty_tpl->tpl_vars['faq_section']->value['icon_class']) {?>
                                    <div class="cp-faq__section-icon">
                                        <span><i class="cp-faq__icon <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_section']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
"></i></span>
                                    </div>                                  
                                <?php }?>
                                <div class="cp-faq__section-name">
                                    <span><?php echo $_smarty_tpl->tpl_vars['faq_section']->value['faq_section_name'];?>
</span>
                                </div>
                            </div>
                        </div>                        
                        <div id="section_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_section']->value['faq_section_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['no_hide_questions']->value && $_smarty_tpl->tpl_vars['no_hide_questions']->value == "N" && $_smarty_tpl->tpl_vars['req_no_h_quest']->value && $_smarty_tpl->tpl_vars['req_no_h_quest']->value == "N") {?>hidden<?php }?>">
                            <div class="cp-faq__questions">
                                <span class=" caret-top"><span class=" caret-outer"></span><span class=" caret-inner"></span></span>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['faq_section']->value['faq_questions'], 'faq_question');
$_smarty_tpl->tpl_vars['faq_question']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['faq_question']->value) {
$_smarty_tpl->tpl_vars['faq_question']->do_else = false;
?>
                                    <div class="cp-faq__question-element">
                                        <div id="sw_sec_question_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_question']->value['faq_question_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination <?php if ($_smarty_tpl->tpl_vars['no_hide_answers']->value && $_smarty_tpl->tpl_vars['no_hide_answers']->value == "N" && $_smarty_tpl->tpl_vars['req_no_h_answ']->value && $_smarty_tpl->tpl_vars['req_no_h_answ']->value == "N") {
} else { ?>open<?php }?>">
                                            <?php if ($_smarty_tpl->tpl_vars['faq_question']->value['qu_icon_class']) {?>
                                                <div class="cp-faq__question-icon">
                                                    <span><i class="cp-faq__icon <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_question']->value['qu_icon_class'], ENT_QUOTES, 'UTF-8');?>
"></i></span>
                                                </div>
                                            <?php }?>
                                            <div class="cp-faq__question-name">
                                                <span <?php if ($_smarty_tpl->tpl_vars['faq_question']->value['qu_anchor']) {?>data-scroll-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_question']->value['qu_anchor'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-pref="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
" data-sec-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_section']->value['faq_section_id'], ENT_QUOTES, 'UTF-8');?>
" data-quest-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_question']->value['faq_question_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_question']->value['faq_question'], ENT_QUOTES, 'UTF-8');?>
</span>
                                            </div>
                                        </div>
                                        <div class="cp-faq__answer ty-wysiwyg-content <?php if ($_smarty_tpl->tpl_vars['no_hide_answers']->value && $_smarty_tpl->tpl_vars['no_hide_answers']->value == "N" && $_smarty_tpl->tpl_vars['req_no_h_answ']->value && $_smarty_tpl->tpl_vars['req_no_h_answ']->value == "N") {?>hidden<?php }?>" id="sec_question_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_question']->value['faq_question_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <span><?php echo $_smarty_tpl->tpl_vars['faq_question']->value['faq_answer'];?>
</span>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['faq_questions']->value) {?>
            <div class="cp-faq__questions" id="faq_questions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['faq_questions']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <div class="cp-faq__question-element">
                        <div id="sw_question_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['faq_question_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['qu_icon_class']) {?>
                                <div class="cp-faq__question-icon">
                                    <span><i class="cp-faq__icon <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['qu_icon_class'], ENT_QUOTES, 'UTF-8');?>
"></i></span>
                                </div>
                            <?php }?>
                            <div class="cp-faq__question-name">
                                 <span <?php if ($_smarty_tpl->tpl_vars['item']->value['qu_anchor']) {?>data-scroll-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['qu_anchor'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-pref="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
" data-quest-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['faq_question_id'], ENT_QUOTES, 'UTF-8');?>
" class="faq-landing-ico-list__item-title cp-faq-pointer"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['faq_question'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        </div>
                        <div class="cp-faq__answer ty-wysiwyg-content <?php if ($_smarty_tpl->tpl_vars['no_hide_answers']->value && $_smarty_tpl->tpl_vars['no_hide_answers']->value == "N" && $_smarty_tpl->tpl_vars['req_no_h_answ']->value && $_smarty_tpl->tpl_vars['req_no_h_answ']->value == "N") {?>hidden<?php }?>" id="question_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['faq_question_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <span><?php echo $_smarty_tpl->tpl_vars['item']->value['faq_answer'];?>
</span>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    <?php } else { ?>
        <div class="cp-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</div>
    <?php }?>
<!--cp_product_faq_tab_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
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
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_faq_addon/views/cp_faq_addon/product_tab_faq.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_faq_addon/views/cp_faq_addon/product_tab_faq.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['faq_block_id']->value) {?>
	<?php $_smarty_tpl->_assignInScope('faq_pref', $_smarty_tpl->tpl_vars['faq_block_id']->value);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['variation_parent_product_id'] && $_smarty_tpl->tpl_vars['product']->value['variation_group_id']) {?>
        <?php $_smarty_tpl->_assignInScope('faq_pref', $_smarty_tpl->tpl_vars['product']->value['variation_parent_product_id']);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['product_id']) {?>
		<?php $_smarty_tpl->_assignInScope('faq_pref', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('faq_pref', "faq_pref");?>
	<?php }
}
if ($_smarty_tpl->tpl_vars['show_block_searh']->value) {?>
	<?php $_smarty_tpl->_assignInScope('show_block_searh', $_smarty_tpl->tpl_vars['show_block_searh']->value);
} else { ?>
	<?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_faq_addon']['show_search_on_tab'] == "Y") {?>
		<?php $_smarty_tpl->_assignInScope('show_block_searh', "Y");?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('show_block_searh', "N");?>
	<?php }
}
if ($_smarty_tpl->tpl_vars['req_no_hide_questions']->value) {?>
	<?php $_smarty_tpl->_assignInScope('req_no_h_quest', $_smarty_tpl->tpl_vars['req_no_hide_questions']->value);
} else { ?>
	<?php $_smarty_tpl->_assignInScope('req_no_h_quest', "N");
}
if ($_smarty_tpl->tpl_vars['req_no_hide_answers']->value) {?>
	<?php $_smarty_tpl->_assignInScope('req_no_h_answ', $_smarty_tpl->tpl_vars['req_no_hide_answers']->value);
} else { ?>
	<?php $_smarty_tpl->_assignInScope('req_no_h_answ', "N");
}
if ($_smarty_tpl->tpl_vars['no_hide_questions']->value) {?>
	<?php $_smarty_tpl->_assignInScope('no_hide_questions', $_smarty_tpl->tpl_vars['no_hide_questions']->value);
} else { ?>
	<?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_faq_addon']['show_expanded_sections_tab'] == "Y") {?>
		<?php $_smarty_tpl->_assignInScope('no_hide_questions', "Y");?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('no_hide_questions', "N");?>
	<?php }
}
if ($_smarty_tpl->tpl_vars['no_hide_answers']->value) {?>
	<?php $_smarty_tpl->_assignInScope('no_hide_answers', $_smarty_tpl->tpl_vars['no_hide_answers']->value);
} else { ?>
	<?php if ($_smarty_tpl->tpl_vars['addons']->value['cp_faq_addon']['show_expanded_questions'] == "Y") {?>
		<?php $_smarty_tpl->_assignInScope('no_hide_answers', "Y");?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('no_hide_answers', "N");?>
	<?php }
}
if ($_smarty_tpl->tpl_vars['sect_back_items_ids']->value) {?> 
	<?php $_smarty_tpl->_assignInScope('sect_back_items_ids', $_smarty_tpl->tpl_vars['sect_back_items_ids']->value);
} elseif ($_smarty_tpl->tpl_vars['product']->value['cp_faq_sections']) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['cp_faq_sections'], 'sect');
$_smarty_tpl->tpl_vars['sect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->do_else = false;
?>
		<?php if (!$_smarty_tpl->tpl_vars['sect_back_items_ids']->value) {?>
			<?php $_smarty_tpl->_assignInScope('sect_back_items_ids', $_smarty_tpl->tpl_vars['sect']->value['back_items_ids']);?>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['quest_back_items_ids']->value) {?> 
	<?php $_smarty_tpl->_assignInScope('quest_back_items_ids', $_smarty_tpl->tpl_vars['quest_back_items_ids']->value);
} elseif ($_smarty_tpl->tpl_vars['product']->value['cp_faq_questions']) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['cp_faq_questions'], 'quest');
$_smarty_tpl->tpl_vars['quest']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['quest']->value) {
$_smarty_tpl->tpl_vars['quest']->do_else = false;
?>
		<?php if (!$_smarty_tpl->tpl_vars['block_items_ids']->value) {?>
			<?php $_smarty_tpl->_assignInScope('quest_back_items_ids', $_smarty_tpl->tpl_vars['quest']->value['back_items_ids']);?>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['faq_sections']->value) {?>
	<?php $_smarty_tpl->_assignInScope('faq_sections', $_smarty_tpl->tpl_vars['faq_sections']->value);
} elseif ($_smarty_tpl->tpl_vars['product']->value['cp_faq_sections']) {?>
	<?php $_smarty_tpl->_assignInScope('faq_sections', $_smarty_tpl->tpl_vars['product']->value['cp_faq_sections']);
}
if ($_smarty_tpl->tpl_vars['faq_questions']->value) {?>
	<?php $_smarty_tpl->_assignInScope('faq_questions', $_smarty_tpl->tpl_vars['faq_questions']->value);
} elseif ($_smarty_tpl->tpl_vars['product']->value['cp_faq_questions']) {?>
	<?php $_smarty_tpl->_assignInScope('faq_questions', $_smarty_tpl->tpl_vars['product']->value['cp_faq_questions']);
}?>

<?php if ($_smarty_tpl->tpl_vars['show_block_searh']->value && $_smarty_tpl->tpl_vars['show_block_searh']->value == "Y" && ($_smarty_tpl->tpl_vars['faq_sections']->value || $_smarty_tpl->tpl_vars['faq_questions']->value)) {?>
    <div class="ty-search-block cp-faq__search">
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="search_faq_quest_form" id="search_faq_quest_form" class="cm-ajax cm-submit">
            <input type="hidden" name="result_ids" value="cp_product_faq_tab_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
            
            <?php if ($_smarty_tpl->tpl_vars['no_hide_questions']->value) {?>
                <input type="hidden" id="faq_hide_questions" name="faq_hide_questions" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_questions']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['no_hide_answers']->value) {?>
                <input type="hidden" id="faq_hide_answers" name="faq_hide_answers" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_answers']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['faq_pref']->value) {?>
                <input type="hidden" id="faq_block_id" name="faq_block_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['sect_back_items_ids']->value) {?>
                <input type="hidden" id="faq_block_sections_items" name="block_sect_items_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sect_back_items_ids']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['quest_back_items_ids']->value) {?>
                <input type="hidden" id="faq_block_questions_items" name="block_quest_items_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['quest_back_items_ids']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['variation_parent_product_id'] && $_smarty_tpl->tpl_vars['product']->value['variation_group_id']) {?>
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['variation_parent_product_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value) {?>
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['show_block_searh']->value) {?>
                <input type="hidden" id="show_block_searh" name="show_block_searh" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_block_searh']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
                <div id="magnifere_but"><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"cp_faq_addon.tab_faq_search",'alt'=>$_smarty_tpl->__("search")), 0, true);
?></div><input type="text" name="faq_request" id="elm_faq_search_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_back']->value, ENT_QUOTES, 'UTF-8');?>
" size="5" placeholder="<?php echo $_smarty_tpl->__("search");?>
" class="ty-search-block__input cm-hint" />
        </form>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['faq_sections']->value || $_smarty_tpl->tpl_vars['faq_questions']->value || $_smarty_tpl->tpl_vars['search_done']->value) {?>
<div id="cp_product_faq_tab_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['faq_sections']->value || $_smarty_tpl->tpl_vars['faq_questions']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['faq_sections']->value) {?>
            <div class="cp-faq__list-block" id="all_faq_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['faq_sections']->value, 'faq_section', false, 'sect_id');
$_smarty_tpl->tpl_vars['faq_section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect_id']->value => $_smarty_tpl->tpl_vars['faq_section']->value) {
$_smarty_tpl->tpl_vars['faq_section']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['faq_section']->value['faq_questions']) {?>
                        <div class="cm-combination cp-faq__section <?php if ($_smarty_tpl->tpl_vars['no_hide_questions']->value && $_smarty_tpl->tpl_vars['no_hide_questions']->value == "N" && $_smarty_tpl->tpl_vars['req_no_h_quest']->value && $_smarty_tpl->tpl_vars['req_no_h_quest']->value == "N") {
} else { ?>open<?php }?>" id="sw_section_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_section']->value['faq_section_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <div class="cp-faq__section-element">
                                <?php if ($_smarty_tpl->tpl_vars['faq_section']->value['icon_class']) {?>
                                    <div class="cp-faq__section-icon">
                                        <span><i class="cp-faq__icon <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_section']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
"></i></span>
                                    </div>                                  
                                <?php }?>
                                <div class="cp-faq__section-name">
                                    <span><?php echo $_smarty_tpl->tpl_vars['faq_section']->value['faq_section_name'];?>
</span>
                                </div>
                            </div>
                        </div>                        
                        <div id="section_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_section']->value['faq_section_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['no_hide_questions']->value && $_smarty_tpl->tpl_vars['no_hide_questions']->value == "N" && $_smarty_tpl->tpl_vars['req_no_h_quest']->value && $_smarty_tpl->tpl_vars['req_no_h_quest']->value == "N") {?>hidden<?php }?>">
                            <div class="cp-faq__questions">
                                <span class=" caret-top"><span class=" caret-outer"></span><span class=" caret-inner"></span></span>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['faq_section']->value['faq_questions'], 'faq_question');
$_smarty_tpl->tpl_vars['faq_question']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['faq_question']->value) {
$_smarty_tpl->tpl_vars['faq_question']->do_else = false;
?>
                                    <div class="cp-faq__question-element">
                                        <div id="sw_sec_question_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_question']->value['faq_question_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination <?php if ($_smarty_tpl->tpl_vars['no_hide_answers']->value && $_smarty_tpl->tpl_vars['no_hide_answers']->value == "N" && $_smarty_tpl->tpl_vars['req_no_h_answ']->value && $_smarty_tpl->tpl_vars['req_no_h_answ']->value == "N") {
} else { ?>open<?php }?>">
                                            <?php if ($_smarty_tpl->tpl_vars['faq_question']->value['qu_icon_class']) {?>
                                                <div class="cp-faq__question-icon">
                                                    <span><i class="cp-faq__icon <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_question']->value['qu_icon_class'], ENT_QUOTES, 'UTF-8');?>
"></i></span>
                                                </div>
                                            <?php }?>
                                            <div class="cp-faq__question-name">
                                                <span <?php if ($_smarty_tpl->tpl_vars['faq_question']->value['qu_anchor']) {?>data-scroll-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_question']->value['qu_anchor'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-pref="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
" data-sec-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_section']->value['faq_section_id'], ENT_QUOTES, 'UTF-8');?>
" data-quest-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_question']->value['faq_question_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_question']->value['faq_question'], ENT_QUOTES, 'UTF-8');?>
</span>
                                            </div>
                                        </div>
                                        <div class="cp-faq__answer ty-wysiwyg-content <?php if ($_smarty_tpl->tpl_vars['no_hide_answers']->value && $_smarty_tpl->tpl_vars['no_hide_answers']->value == "N" && $_smarty_tpl->tpl_vars['req_no_h_answ']->value && $_smarty_tpl->tpl_vars['req_no_h_answ']->value == "N") {?>hidden<?php }?>" id="sec_question_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_question']->value['faq_question_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <span><?php echo $_smarty_tpl->tpl_vars['faq_question']->value['faq_answer'];?>
</span>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['faq_questions']->value) {?>
            <div class="cp-faq__questions" id="faq_questions_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['faq_questions']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <div class="cp-faq__question-element">
                        <div id="sw_question_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['faq_question_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['qu_icon_class']) {?>
                                <div class="cp-faq__question-icon">
                                    <span><i class="cp-faq__icon <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['qu_icon_class'], ENT_QUOTES, 'UTF-8');?>
"></i></span>
                                </div>
                            <?php }?>
                            <div class="cp-faq__question-name">
                                 <span <?php if ($_smarty_tpl->tpl_vars['item']->value['qu_anchor']) {?>data-scroll-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['qu_anchor'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-pref="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
" data-quest-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['faq_question_id'], ENT_QUOTES, 'UTF-8');?>
" class="faq-landing-ico-list__item-title cp-faq-pointer"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['faq_question'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        </div>
                        <div class="cp-faq__answer ty-wysiwyg-content <?php if ($_smarty_tpl->tpl_vars['no_hide_answers']->value && $_smarty_tpl->tpl_vars['no_hide_answers']->value == "N" && $_smarty_tpl->tpl_vars['req_no_h_answ']->value && $_smarty_tpl->tpl_vars['req_no_h_answ']->value == "N") {?>hidden<?php }?>" id="question_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['faq_question_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <span><?php echo $_smarty_tpl->tpl_vars['item']->value['faq_answer'];?>
</span>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    <?php } else { ?>
        <div class="cp-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</div>
    <?php }?>
<!--cp_product_faq_tab_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['faq_pref']->value, ENT_QUOTES, 'UTF-8');?>
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
