<div id="content_adding_section_{$cp_index_faq}_{$sect_id}">
	<div class="cp-form-block clearfix">
		<form action="{""|fn_url}" method="post" name="product_faq_new_sec_{$cp_index_faq}" class="cm-ajax form-horizontal form-edit" >
			<input type="hidden" name="result_ids" value="separated_faq_block" />
			<input type="hidden" name="cp_faq_new_sec[company_id]" value="{$back_comp_id}" />
			<input type="hidden" name="product_id" value="{$cp_index_faq}" />
			<input type="hidden" name="cp_faq_new_sec[for_product]" value="Y" />
			{if $prod_section_data}
				<input type="hidden" name="faq_section_id" value="{$prod_section_data.faq_section_id}" />
			{/if}
			{if !$prod_section_data}
				<div class="control-group">
					<label for="select_exist_section_{$sect_id}" class="control-label">{__("cp_choose_section")}:</label>
					<div class="controls">
						<select name="cp_faq_new_sec[selected_sect]" id="select_exist_section_{$sect_id}" class="cp-prod-sect-selector" data-sec-id="{$sect_id}">
							<option value="0">-{__("none")}-</option>
							{if cp_faq_prod_sec_selector}
								{foreach from=$cp_faq_prod_sec_selector item="cp_sect"}
									<option value="{$cp_sect.faq_section_id}">{$cp_sect.faq_section_name} <i class="{$cp_sect.icon_class} cp-icon_font_size cp-sect_icon_move"></i></option>
								{/foreach}
							{/if}
						</select>
						<div>{__("select_none_for_create")}	</div>
					</div>
				</div>
			{/if}
			<div class="control-group cp_fq_go_hide_{$sect_id}">
				<label for="faq_section_name_new_{$sect_id}" class="control-label cm-required">{__("name")}:</label>
				<div class="controls">
					<input type="text" id="faq_section_name_new_{$sect_id}" name="cp_faq_new_sec[faq_section_name]" size="75" value="{if $prod_section_data}{$prod_section_data.faq_section_name}{/if}" class="input-large" />
				</div>
			</div>
			<div class="control-group cp_fq_go_hide_{$sect_id}">
				<label for="qu_sec_icon_class_new_{$sect_id}" class="control-label">{__("section_icon")}{include file="common/tooltip.tpl" tooltip={__("section_icon_descr")} params="ty-subheader__tooltip"}:</label>
				<div class="controls">
					<input type="text" placeholder="{__("cp_enter_icon_clas_place")}" name="cp_faq_new_sec[icon_class]" id="qu_sec_icon_class_new_{$sect_id}" size="25" value="{if $prod_section_data}{$prod_section_data.icon_class}{else}{$addons.cp_faq_addon.default_icon_for_section}{/if}" data-sec-id="{$sect_id}" class="input-short cp-prod-faq-sect-icon" />&nbsp;
					<i id="cp_section_icon_new_{$sect_id}" class="{if $prod_section_data}{$prod_section_data.icon_class}{else}{$addons.cp_faq_addon.default_icon_for_section}{/if} cp-icon_font_size cp-sect_icon_move"></i>
				</div>
			</div>
			<div class="control-group">
				<label for="section_position_new_{$sect_id}" class="control-label">{__("section_position")}{include file="common/tooltip.tpl" tooltip={__("section_position_descr")} params="ty-subheader__tooltip"}:</label>
				<div class="controls">
					<input type="text" id="section_position_new_{$sect_id}" size="25" name="cp_faq_new_sec[section_position]" value="{if $prod_section_data}{$prod_section_data.section_position}{else}0{/if}" class="input-short" />
				</div>
			</div>
			<div class="cp_fq_go_hide_{$sect_id}">
                {if $prod_section_data}
                    {include file="common/select_status.tpl" input_name="cp_faq_new_sec[status]" id="section_data_status_new_{$sect_id}" obj=$prod_section_data hidden=false}
                {else}
                    {include file="common/select_status.tpl" input_name="cp_faq_new_sec[status]" id="section_data_status_new_{$sect_id}" obj=$section_data hidden=false}
                {/if}
			</div>
			{if $prod_section_data}
				{assign var="cp_add_but_text" value=__("save")}
			{else}
				{assign var="cp_add_but_text" value=__("create")}
			{/if}
			<div class="buttons-container pull-right">
				<div class="controls">
					{include file="buttons/button.tpl" but_text=$cp_add_but_text but_role="submit" tabindex=$sect_id but_name="dispatch[products.update]" but_meta="cp-prod-add-new-sect-but" but_target_form="product_faq_new_sec_`$cp_index_faq`"}
				</div>
			</div>
		</form>
	</div>
	<script language="javascript">
		$.ceEvent('on', 'ce.commoninit', function(context) {
			context.find('.cp-prod-sect-selector').change(function() {
				var sect_id = $(this).attr("data-sec-id");
				var sel_ex_sec = $(this).val();
				if (sel_ex_sec && sel_ex_sec != 0) {
					$('label[for=faq_section_name_new_'+sect_id+']').removeClass('cm-required');
					$('.cp_fq_go_hide_' + sect_id).hide();
				} else {
					$('label[for=faq_section_name_new_'+sect_id+']').addClass('cm-required');
					$('.cp_fq_go_hide_' + sect_id).show();
				}
			});
			context.find('.cp-prod-add-new-sect-but').click(function() {
				var sect_id = $(this).attr("tabindex");
				if (!sect_id) {
					sect_id = 0;
				}
				var sec_name = $('#faq_section_name_new_'+sect_id).val();
				var sel_exist_sec = $('#select_exist_section_'+sect_id).val();
				if (sec_name.length > 0 || sel_exist_sec > 0) {
					$('.ui-icon-closethick').click();
				}
			});
			context.find('.cp-prod-faq-sect-icon').on('keyup', function() {
				var sect_id = $(this).attr("data-sec-id");
				var new_sect_icon = $(this).val();
				$('#cp_section_icon_new_'+sect_id).attr("class", new_sect_icon+' cp-icon_font_size cp-sect_icon_move');
			})
		});
	</script>
<!--content_adding_section_{$cp_index_faq}_{$sect_id}--></div>