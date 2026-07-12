<div id="content_adding_question_{$cp_index_faq}_{$sect_id}_{$quest_id}" class="cp-faq-quest-wisig-answ">
	{script src="js/tygh/exceptions.js"}
	<div class="cp-form-block clearfix">
		<form action="{""|fn_url}" method="post" id="add_edit_qu_form" name="product_faq_new_quest_{$cp_index_faq}_{$sect_id}_{$quest_id}" class="cm-ajax form-horizontal form-edit" >					
			<input type="hidden" name="cp_faq_new_quest[company_id]" value="{$back_comp_id}" />
			<input type="hidden" name="product_id" value="{$cp_index_faq}" />
			<input type="hidden" name="cp_faq_new_quest[for_product]" value="Y" />
			{if $prod_question_data}
				<input type="hidden" name="cp_faq_new_quest[faq_question_id]" value="{$prod_question_data.0.faq_question_id}" />
			{else}
				<input type="hidden" name="cp_faq_new_quest[faq_question_id]" value="0" />
			{/if}
			{if $prod_question_data && $prod_question_data.0.faq_section_id}
				<input type="hidden" name="cp_faq_new_quest[faq_section_id]" value="{$prod_question_data.0.faq_section_id}" />
				<input type="hidden" name="result_ids" value="prod_sec_quetions_block_{$prod_question_data.0.faq_section_id}" />
			{else}
				<input type="hidden" name="cp_faq_new_quest[faq_section_id]" value="{$cp_faq_sec_id}" />
				<input type="hidden" name="result_ids" value="prod_sec_quetions_block_{$cp_faq_sec_id}" />
			{/if}
			{if !$cp_faq_sec_id}
				<input type="hidden" name="cp_faq_new_quest[single]" value="Y" />
			{/if}
			{if !$prod_question_data}
				<div class="control-group">
					<label for="select_exist_question_{$sect_id}_{$quest_id}" class="control-label">{__("cp_choose_question")}:</label>
					<div class="controls">
						<select name="cp_faq_new_quest[selected_quest]" id="select_exist_question_{$sect_id}_{$quest_id}" class="cp-prod-qu-selector" data-quest-id="{$quest_id}" data-sec-qu-id="{$sect_id}">
							<option value="0">-{__("none")}-</option>
							{if $cp_faq_prod_question_selector}
								{foreach from=$cp_faq_prod_question_selector item="cp_quest"}
									<option value="{$cp_quest.faq_question_id}">{$cp_quest.faq_question}</option>
								{/foreach}
							{/if}
						</select>
						<div>{__("select_none_for_create_question")}	</div>
					</div>
				</div>
			{/if}
			<div class="control-group cp_fq_go_hide_{$sect_id}_{$quest_id}" id="faq_question_new_div">
				<label class="control-label cm-required" for="faq_sec_quest_new_qu_{$sect_id}_{$quest_id}">{__("faq_question")}:</label>
				<div class="controls">
					<input type="text" name="cp_faq_new_quest[faq_question]" id="faq_sec_quest_new_qu_{$sect_id}_{$quest_id}" size="25" value="{if $prod_question_data}{$prod_question_data.0.faq_question}{/if}" class="input-large" />
				</div>
			</div>
			<div class="control-group cp_fq_go_hide_{$sect_id}_{$quest_id}">
				<label for="faq_sec_quest_new_icon_{$sect_id}_{$quest_id}" class="control-label">{__("question_icon")}{include file="common/tooltip.tpl" tooltip={__("question_icon_descr")} params="ty-subheader__tooltip"}:</label>
				<div class="controls">
					<input type="text" data-sec-qu-id="{$sect_id}" data-quest-id="{$quest_id}" name="cp_faq_new_quest[qu_icon_class]" placeholder="{__("cp_enter_icon_clas_place")}" id="faq_sec_quest_new_icon_{$sect_id}_{$quest_id}" size="25" value="{if $prod_question_data}{$prod_question_data.0.qu_icon_class}{else}{$addons.cp_faq_addon.default_icon_for_question}{/if}" class="input-short cp-prod-faq-qu-icon" />&nbsp;
					<i id="cp_question_icon_new_{$sect_id}_{$quest_id}" class="{if $prod_question_data}{$prod_question_data.0.qu_icon_class}{else}{$addons.cp_faq_addon.default_icon_for_question}{/if} cp-icon_font_size cp-sect_icon_move"></i>
				</div>
			</div>
			<div class="control-group cp_fq_go_hide_{$sect_id}_{$quest_id}">
				<label for="faq_sec_quest_new_inchor_{$sect_id}_{$quest_id}" class="control-label">{__("faq_anchor")}{include file="common/tooltip.tpl" tooltip={__("faq_anchor_descr")} params="ty-subheader__tooltip"}:</label>
				<div class="controls">
					<input type="text" name="cp_faq_new_quest[qu_anchor]" id="faq_sec_quest_new_inchor_{$sect_id}_{$quest_id}" size="25" value="{if $prod_question_data}{$prod_question_data.0.qu_anchor}{/if}" class="input-short" />
					<a data-cp-id="{$quest_id}" data-cp-name-id="faq_sec_quest_new_qu_{$sect_id}_{$quest_id}" data-cp-anchor-id="faq_sec_quest_new_inchor_{$sect_id}_{$quest_id}" class="btn cp-fq-generate-anchor">{__("cp_fq_generate")}</a>
				</div>
			</div>
			<div class="control-group">
				<label for="faq_sec_quest_new_pos_{$sect_id}_{$quest_id}" class="control-label">{__("question_position")}{include file="common/tooltip.tpl" tooltip={__("question_position_descr")} params="ty-subheader__tooltip"}:</label>
				<div class="controls">
					<input type="text" name="cp_faq_new_quest[question_position]" id="faq_sec_quest_new_pos_{$sect_id}_{$quest_id}" size="25" value="{if $prod_question_data}{$prod_question_data.0.question_position}{/if}" class="input-short" />
				</div>
			</div>
			<div class="control-group cp_fq_go_hide_{$sect_id}_{$quest_id}">
				<label class="control-label cm-required" for="faq_sec_quest_new_answ_{$sect_id}_{$quest_id}">{__("faq_answer")}:</label>
				<div class="controls">
					<textarea id="faq_sec_quest_new_answ_{$sect_id}_{$quest_id}" name="cp_faq_new_quest[faq_answer]" cols="55" rows="8" class="cm-wysiwyg span9">{if $prod_question_data}{$prod_question_data.0.faq_answer}{/if}</textarea>
				</div>
			</div>
			<div class="cp_fq_go_hide_{$sect_id}_{$quest_id}">
                {if $prod_question_data}
                    {include file="common/select_status.tpl" input_name="cp_faq_new_quest[status]" id="quest_status_new_{$sect_id}_{$quest_id}" obj=$prod_question_data.0 hidden=false}
                {else}
                    {include file="common/select_status.tpl" input_name="cp_faq_new_quest[status]" id="quest_status_new_{$sect_id}_{$quest_id}" obj=$question_data hidden=false}
                {/if}
			</div>
			{if $prod_question_data}
				{assign var="cp_add_but_text" value=__("save")}
			{else}
				{assign var="cp_add_but_text" value=__("create")}
			{/if}
			<div class="buttons-container pull-right">
				<div class="controls">
					{include file="buttons/button.tpl" but_text=$cp_add_but_text but_role="submit" tabindex="`$sect_id`_`$quest_id`" but_name="dispatch[products.update]" but_meta="cp-prod-add-edit-quest-but" but_target_form="product_faq_new_quest_`$cp_index_faq`_`$sect_id`_`$quest_id`"}
				</div>
			</div>
		</form>
	</div>
	<script language="javascript">
		$.ceEvent('on', 'ce.commoninit', function(context) {
			context.find('.cp-prod-add-edit-quest-but').click(function() {
				var qu_id = $(this).attr("tabindex");
				if (!qu_id) {
					qu_id = 0;
				}
				var qu_name = $('#faq_sec_quest_new_qu_'+qu_id).val();
				var qu_answ = $('#faq_sec_quest_new_answ_'+qu_id).val();
				var sel_exist_qu = $('#select_exist_question_'+qu_id).val();
				if (qu_name.length > 0 && qu_answ.length > 0 || sel_exist_qu > 0) {
					$('.ui-icon-closethick').click();
				}
			});
			context.find('.cp-prod-qu-selector').change(function() {
				var qu_id = $(this).attr("data-quest-id");
				var sect_id = $(this).attr("data-sec-qu-id");
				var sel_ex_qu = $(this).val();
				if (sel_ex_qu && sel_ex_qu != 0) {
					$('label[for=faq_sec_quest_new_qu_'+sect_id+'_'+qu_id+']').removeClass('cm-required');
					$('label[for=faq_sec_quest_new_answ_'+sect_id+'_'+qu_id+']').removeClass('cm-required');
					$('.cp_fq_go_hide_' + sect_id + '_' + qu_id).hide();
				} else {
					$('label[for=faq_sec_quest_new_qu_'+sect_id+'_'+qu_id+']').addClass('cm-required');
					$('label[for=faq_sec_quest_new_answ_'+sect_id+'_'+qu_id+']').addClass('cm-required');
					$('.cp_fq_go_hide_' + sect_id + '_' + qu_id).show();
				}
			});
			context.find('.cp-prod-faq-qu-icon').on('keyup', function() {
				var qu_id = $(this).attr("data-quest-id");
				var sect_id = $(this).attr("data-sec-qu-id");
				var new_quest_icon = $(this).val();
				$('#cp_question_icon_new_'+sect_id+'_'+qu_id).attr("class", new_quest_icon+' cp-icon_font_size cp-sect_icon_move');
			})
		});
	</script>
<!--content_adding_question_{$cp_index_faq}_{$sect_id}_{$quest_id}--></div>
{* end *}