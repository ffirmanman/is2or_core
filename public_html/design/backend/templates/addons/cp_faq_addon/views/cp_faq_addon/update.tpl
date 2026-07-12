{if $section_data}
    {assign var="id" value=$section_data.faq_section_id}
{else}
    {assign var="id" value=0}
{/if}
{assign var="allow_save" value=$section_data|fn_allow_save_object:"faq_sections"}

{capture name="mainbox"}
{capture name="tabsbox"}
    <form action="{""|fn_url}" method="post" name="update_form" class="form-horizontal form-edit  {if !$allow_save}cm-hide-inputs{/if}" >
    <input type="hidden" name="faq_section_id" value="{$id}" />
        <div id="content_general">
            <fieldset>
                <div class="control-group">
                    <label for="faq_section_name" class="control-label cm-required">{__("name")}:</label>
                    <div class="controls">
                        <input type="text" name="section_data[faq_section_name]" id="faq_section_name" size="25" value="{$section_data.faq_section_name}" class="input-large" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="icon_class" class="control-label">{__("section_icon")}{include file="common/tooltip.tpl" tooltip={__("section_icon_descr")} params="ty-subheader__tooltip"}:</label>
                    <div class="controls">
                        <input type="text" name="section_data[icon_class]" id="icon_class_{$id}" size="25" value="{if $section_data}{$section_data.icon_class}{else}{$addons.cp_faq_addon.default_icon_for_section}{/if}" class="input-short" placeholder="{__("cp_enter_icon_clas_place")}"/>&nbsp;
                        <i id="cp_section_icon_{$id}" class="{if $section_data}{$section_data.icon_class}{else}{$addons.cp_faq_addon.default_icon_for_section}{/if} cp-icon_font_size cp-sect_icon_move"></i>
                    </div>
                </div>
                <div class="control-group">
                    <label for="section_position" class="control-label">{__("section_position")}{include file="common/tooltip.tpl" tooltip={__("section_position_descr")} params="ty-subheader__tooltip"}:</label>
                    <div class="controls">
                        <input type="text" name="section_data[section_position]" id="section_position" size="25" value="{$section_data.section_position|default:"0"}" class="input-short" />
                    </div>
                </div>
                <div class="control-group">
                    <label for="sec_show_on_main" class="control-label">{__("cp_fq_show_on_main")}:</label>
                    <div class="controls">
                        <input type="hidden" name="section_data[show_on_main]" value="N" />
                        <input type="checkbox" name="section_data[show_on_main]" id="section_position" value="Y" {if $section_data.show_on_main == "Y" || !$id}checked="checked"{/if} />
                    </div>
                </div>
                {if "ULTIMATE"|fn_allowed_for}
                    {include file="views/companies/components/company_field.tpl"
                        name="section_data[company_id]"
                        id="elm_section_data_`$id`"
                        selected=$section_data.company_id
                    }
                {/if}
                {include file="common/select_status.tpl" input_name="section_data[status]" id="elm_section_data_status" obj=$section_data hidden=false}
                
                {if $addons.seo.status == "A" && $section_data}
                    {include file="addons/seo/common/seo_name_field.tpl" object_data=$section_data object_name="section_data" object_id=$section_data.faq_section_id object_type="q"}
                {/if}
                {include file="common/subheader.tpl" title=__("seo_meta_data") target="#acc_seo_meta"}
                <div id="acc_seo_meta" class="collapse in">
                    <div class="control-group">
                        <label class="control-label" for="elm_product_page_title">{__("page_title")}:</label>
                        <div class="controls">
                            <input type="text" name="section_data[page_title]" id="elm_product_page_title" size="55" value="{$section_data.page_title}" class="input-large" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="elm_product_meta_descr">{__("meta_description")}:</label>
                        <div class="controls">
                            <textarea name="section_data[meta_description]" id="elm_product_meta_descr" cols="55" rows="2" class="input-large">{$section_data.meta_description}</textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="elm_product_meta_keywords">{__("meta_keywords")}:</label>
                        <div class="controls">
                            <textarea name="section_data[meta_keywords]" id="elm_product_meta_keywords" cols="55" rows="2" class="input-large">{$section_data.meta_keywords}</textarea>
                        </div>
                    </div>
                </div>
            <!--content_general--></div>
            <div id="content_cp_sect_quest">
                {if $section_data.faq_questions}
                    <div class="collapse in" id="cp_faq_questions">
                        {foreach from=$section_data.faq_questions item=faq_quest}
                            <input type="hidden" name="section_data[faq_questions][{$faq_quest.faq_question_id}][faq_question_id]" value="{$faq_quest.faq_question_id}" />
                            <div class="control-group {if $faq_quest.status == 'D'}cm-row-status-d{/if} clearfix cp-faq-row-inp-main-manage">
                                <div class="cp-icon_position cm-combination" id="sw_question_{$faq_quest.faq_question_id}" data-cliked-id="{$faq_quest.faq_question_id}"><i id="chnaged_icon_quest_{$faq_quest.faq_question_id}" class="cp-ic-right-dir cp-icon_font_size" ></i>&nbsp;
                                    <span class="cp-quest-disp-icon">
                                        <i class="{if $faq_quest.qu_icon_class}{$faq_quest.qu_icon_class}{/if} cp-icon_font_size cp-sect_icon_move"></i>
                                    </span>
                                    <input type="text" name="section_data[faq_questions][{$faq_quest.faq_question_id}][question_position]" id="question_position_{$faq_quest.faq_question_id}" size="6" value="{$faq_quest.question_position}" class="input-micro input-hidden" />
                                </div>
                                <label class="control-label cm-required hidden" for="faq_question_{$faq_quest.faq_question_id}">{__("faq_question")}:</label>
                                <div class="controls">
                                    <input type="text" name="section_data[faq_questions][{$faq_quest.faq_question_id}][faq_question]" id="faq_question_{$faq_quest.faq_question_id}" size="25" value="{$faq_quest.faq_question}" class="input-large" />
                                </div>
                                {if $allow_save}
                                    <div class="cp-faq-remove-manage">
                                        <a class="cp-icon_font_size-delete cm-ajax cm-tooltip cm-confirm cm-post" data-ca-target-id="content_cp_sect_quest" href="{"cp_faq_addon.delete_question?faq_question_id=`$faq_quest.faq_question_id`?faq_section_id=`$id`"|fn_url}" title="{__("delete")}"><i class="icon-remove"></i></a>
                                    </div>
                                {/if}
                            </div>
                            <div id="question_{$faq_quest.faq_question_id}" class="hidden cp-question_border">
                                <div class="control-group">
                                    <label for="qu_icon_class_{$faq_quest.faq_question_id}" class="control-label">{__("question_icon")}{include file="common/tooltip.tpl" tooltip={__("question_icon_descr")} params="ty-subheader__tooltip"}:</label>
                                    <div class="controls">
                                        <input type="text" placeholder="{__("cp_enter_icon_clas_place")}" name="section_data[faq_questions][{$faq_quest.faq_question_id}][qu_icon_class]" data-id="{$faq_quest.faq_question_id}" id="qu_icon_class_{$faq_quest.faq_question_id}" size="25" value="{if $faq_quest}{$faq_quest.qu_icon_class}{else}{$addons.cp_faq_addon.default_icon_for_question}{/if}" class="input-short cp-question_icon" />&nbsp;
                                        <i id="cp_question_icon_{$faq_quest.faq_question_id}" class="{if $faq_quest}{$faq_quest.qu_icon_class}{else}{$addons.cp_faq_addon.default_icon_for_question}{/if} cp-icon_font_size cp-sect_icon_move"></i>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="faq_qu_anchor_{$faq_quest.faq_question_id}" class="control-label">{__("faq_anchor")}{include file="common/tooltip.tpl" tooltip={__("faq_anchor_descr")} params="ty-subheader__tooltip"}:</label>
                                    <div class="controls">
                                        <input type="text" name="section_data[faq_questions][{$faq_quest.faq_question_id}][qu_anchor]" id="faq_qu_anchor_{$faq_quest.faq_question_id}" size="25" value="{$faq_quest.qu_anchor}" class="input-short" />
                                        <a data-cp-id="{$faq_quest.faq_question_id}" data-cp-name-id="faq_question_{$faq_quest.faq_question_id}" data-cp-anchor-id="faq_qu_anchor_{$faq_quest.faq_question_id}" class="btn cp-fq-generate-anchor">{__("cp_fq_generate")}</a>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="qu_show_on_main_{$faq_quest.faq_question_id}" class="control-label">{__("cp_fq_show_on_main")}:</label>
                                    <div class="controls">
                                        <input type="hidden" name="section_data[faq_questions][{$faq_quest.faq_question_id}][show_on_main]" value="N" />
                                        <input type="checkbox" name="section_data[faq_questions][{$faq_quest.faq_question_id}][show_on_main]" id="qu_show_on_main_{$faq_quest.faq_question_id}" value="Y" {if $faq_quest.show_on_main == "Y"}checked="checked"{/if} />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label cm-required" for="faq_answer_{$faq_quest.faq_question_id}">{__("faq_answer")}:</label>
                                    <div class="controls">
                                        <textarea id="faq_answer_{$faq_quest.faq_question_id}" name="section_data[faq_questions][{$faq_quest.faq_question_id}][faq_answer]" style="max-width: 600px" cols="55" rows="8" class="cm-wysiwyg input-large">{$faq_quest.faq_answer}</textarea>
                                    </div>
                                </div>
                                {include file="common/select_status.tpl" input_name="section_data[faq_questions][{$faq_quest.faq_question_id}][status]" id="question_status_{$faq_quest.faq_question_id}" obj=$faq_quest hidden=false}
                            </div>
                        {/foreach}
                    </div>
                {/if}
                {if $id && $allow_save}
                    <div class="cp-prod-faq-add-sec-but">
                        <a data-ca-target-id="new_question_popup" class="cm-dialog-opener cm-dialog-auto-size btn pull-left"><i class="icon-plus"></i>{__("add_question")}</a>
                    </div>
                {/if}
            <!--content_cp_sect_quest--></div>           
        </fieldset>
    </form>
    {if $id && $allow_save}
        <div class="hidden" id="new_question_popup" title="{__("cp_faq_new_question")}">
            <div class="cp-form-block">
                <form action="{""|fn_url}" method="post" name="section_question_form" class="form-horizontal form-edit  {if !$allow_save}cm-hide-inputs{/if}" >
                <input type="hidden" name="section_data[faq_questions][new][faq_section_id]" value="{$id}" />
                <input type="hidden" name="section_data[faq_questions][new][faq_question_id]" value="0" />
                <input type="hidden" name="section_data[faq_questions][new][company_id]" value="{$section_data.company_id}" />    
                    <div class="control-group" id="faq_question_new_div">
                        <label class="control-label" for="faq_question_new">{__("faq_question")}:</label>
                        <div class="controls">
                            <input type="text" name="section_data[faq_questions][new][faq_question]" id="faq_question_new" size="25" value="" class="input-large" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="qu_icon_class_new" class="control-label">{__("question_icon")}{include file="common/tooltip.tpl" tooltip={__("question_icon_descr")} params="ty-subheader__tooltip"}:</label>
                        <div class="controls">
                            <input type="text" placeholder="{__("cp_enter_icon_clas_place")}" name="section_data[faq_questions][new][qu_icon_class]" id="qu_icon_class_new" size="25" value="{$addons.cp_faq_addon.default_icon_for_question}" class="input-short" />&nbsp;
                            <i id="cp_question_icon_new" class="{$addons.cp_faq_addon.default_icon_for_question} cp-icon_font_size cp-sect_icon_move"></i>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="faq_qu_anchor_new" class="control-label">{__("faq_anchor")}{include file="common/tooltip.tpl" tooltip={__("faq_anchor_descr")} params="ty-subheader__tooltip"}:</label>
                        <div class="controls">
                            <input type="text" name="section_data[faq_questions][new][qu_anchor]" id="faq_qu_anchor_new" size="25" value="" class="input-short" />
                            <a data-cp-name-id="faq_question_new" data-cp-anchor-id="faq_qu_anchor_new" class="btn cp-fq-generate-anchor">{__("cp_fq_generate")}</a>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="qu_show_on_main_new" class="control-label">{__("cp_fq_show_on_main")}:</label>
                        <div class="controls">
                            <input type="hidden" name="section_data[faq_questions][new][show_on_main]" value="N" />
                            <input type="checkbox" name="section_data[faq_questions][new][show_on_main]" id="qu_show_on_main_new" value="Y" checked="checked" />
                        </div>
                    </div>
                    <div class="control-group">
                            <label for="question_position_new" class="control-label">{__("question_position")}{include file="common/tooltip.tpl" tooltip={__("question_position_descr")} params="ty-subheader__tooltip"}:</label>
                            <div class="controls">
                                <input type="text" name="section_data[faq_questions][new][question_position]" id="question_position_new" size="25" value="" class="input-short" />
                            </div>
                        </div>
                    <div class="control-group" id="faq_answer_new_div">
                        <label class="control-label" for="faq_answer_new">{__("faq_answer")}:</label>
                        <div class="controls">
                            <textarea id="faq_answer_new" name="section_data[faq_questions][new][faq_answer]" cols="55" rows="8" class="cm-wysiwyg input-large"></textarea>
                        </div>
                    </div>
                    {include file="common/select_status.tpl" input_name="section_data[faq_questions][new][status]" id="question_status_new" obj=$section_data.faq_questions.new hidden=false}
                    <div class="buttons-container pull-right">
                        <div class="controls">
                            {include file="buttons/button.tpl" but_text=__("create") but_role="submit" but_name="dispatch[cp_faq_addon.add_question]" but_meta="faq-manager-add-new-qu" but_target_form="section_question_form"}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    {/if}
{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$smarty.request.selected_section track=true}

<script language="javascript">
   $.ceEvent('on', 'ce.commoninit', function(context) {
        setTimeout(function(){
            context.find('textarea.cm-wysiwyg').each(function() {
                $(this).ceEditor('destroy');
                $(this).ceEditor('recover');
            });
        }, 0);   
		var id = "{$id}";
		context.find('.faq-manager-add-new-qu').click(function() {
			var quest_name = $('#faq_question_new').val();
			var quest_answ = $('#faq_answer_new').val();
			if (quest_name == '') {
				$('label[for=faq_question_new]').addClass('cm-required');
			}
			if (quest_answ == '') {
				$('label[for=faq_answer_new]').addClass('cm-required');
			}
		});
		context.find('form[name=update_form]').submit(function() {
			$('label[for=faq_question_new]').removeClass('cm-required');
			$('label[for=faq_answer_new]').removeClass('cm-required');
		});
		context.find('#icon_class_'+id).on('keyup', function() {
			var sec_icon = $('#icon_class_'+id).val();
			$('#cp_section_icon_'+id).attr("class", sec_icon+' cp-icon_font_size cp-sect_icon_move');
		});
		context.find('.cp-question_icon').on('keyup', function() {
			var quest_id = $(this).attr("data-id");
			var quest_icon = $(this).val();
			$('#cp_question_icon_'+quest_id).attr("class", quest_icon+' cp-icon_font_size cp-sect_icon_move');
		});
		context.find('#qu_icon_class_new').on('keyup', function() {
			var new_quest_icon = $(this).val();
			$('#cp_question_icon_new').attr("class", new_quest_icon+' cp-icon_font_size cp-sect_icon_move');
		});
		context.find('.cp-icon_position').click(function() {
			var qst_id = $(this).attr("data-cliked-id");
			if ($('#chnaged_icon_quest_'+qst_id).hasClass("cp-ic-right-dir")) {
				$('#chnaged_icon_quest_'+qst_id).removeClass("cp-ic-right-dir");
				$('#chnaged_icon_quest_'+qst_id).addClass("cp-ic-sort-down");
			} else {
				$('#chnaged_icon_quest_'+qst_id).removeClass("cp-ic-sort-down");
				$('#chnaged_icon_quest_'+qst_id).addClass("cp-ic-right-dir");
			}
		});
	});
</script>

<script language="javascript">
        $.ceEvent('on', 'ce.dialogshow', function(context) {
            setTimeout(function(){
                context.find('textarea.cm-wysiwyg').each(function() {
                    $(this).ceEditor('destroy');
                    $(this).ceEditor('recover');
                });
            }, 0);      
        });
</script>

{capture name="buttons"}
    {if $section_data}
		<a class="btn" href="{$section_data.preview_url}" target="_blank">{__("preview")}</a>
    {/if}
    {if $allow_save}
		{include file="buttons/save_cancel.tpl" but_name="dispatch[cp_faq_addon.update]" hide_first_button=$hide_first_button hide_second_button=$hide_second_button but_target_form="update_form" save=$id}
	{/if}
{/capture}

{capture name="adv_buttons"}
    {if $id && $allow_save}
        <div class="btn-group ">
            <a data-ca-target-id="new_question_popup" class="btn cm-tooltip cm-dialog-opener cm-dialog-auto-size" title="{__("add_question")}">
                <i class="icon-plus"></i>
            </a>
        </div>
    {/if}
{/capture}

{/capture}

{if !$id}
    {assign var="title" value=__("new_faq_section")}
{else}
    {assign var="title" value="{__("editing_faq_section")}:&nbsp;`$section_data.faq_section_name`"}
{/if}
{include file="common/mainbox.tpl" title=$title content=$smarty.capture.mainbox adv_buttons=$smarty.capture.adv_buttons select_languages=true buttons=$smarty.capture.buttons}
