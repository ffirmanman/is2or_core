<div class="hidden" id="content_faq_questions_picker">
    {if $cp_variation_active && $product_data.variation_group_id && $product_data.variation_parent_product_id && !$cp_fq_custom_var}
        <p>{__("cp_fq_variation_text_info", ["[link]" => "$cp_fq_variation_text_info"])|html_entity_decode}</p>
    {else}
        {if $cp_index_faq}
            {assign var="cp_index_faq" value=$cp_index_faq}
        {else}
            {assign var="cp_index_faq" value=$product_data.product_id}
        {/if}
        {assign var="comp_id" value=$back_comp_id}
        <div id="separated_faq_block">
            {include file="common/subheader.tpl" title=__("faq_sections_picker") target="#cp_all_prod_section"}
            <div id="cp_all_prod_section" class="collapse in">
                <div class="cp-prod-faq-add-sec-but">
                    {include file="common/popupbox.tpl" id="adding_section_{$cp_index_faq}_0" link_text=__("add_section") text=__("new_faq_section") href="cp_faq_addon.edit_prod_sect?product_id=`$cp_index_faq`&company_id=`$comp_id`" content="" act="general" icon="icon-plus"}
                </div>
                <div id="all_prod_sections_list_{$cp_index_faq}">
                    {if $product_data.cp_faq_prod_section}
                        <form action="{""|fn_url}" method="post" name="product_faq_sections_{$cp_index_faq}" class="cm-ajax form-horizontal form-edit">
                            <input type="hidden" name="result_ids" value="separated_faq_block" />
                            <input type="hidden" name="product_id" value="{$cp_index_faq}" />				
                            {foreach from=$product_data.cp_faq_prod_section item="faq_sect"}
                                <input type="hidden" name="cp_faq_product_data[faq_sections][{$faq_sect.faq_section_id}][faq_section_id]" value="{$faq_sect.faq_section_id}" />
                                <div class="cp-faq-row-inp-main clearfix control-group {if $faq_sect.status == 'D'}cm-row-status-d{/if}">
                                    <div class="{if $faq_sect.for_product && $faq_sect.for_product == "Y"}cp-icon_position-sec cm-combination{else}cp-icon_position-sec-not-point{/if}" data-cliked-id="{$faq_sect.faq_section_id}" id="sw_section_quest_{$faq_sect.faq_section_id}">{if $faq_sect.for_product && $faq_sect.for_product == "Y"}<i id="chnaged_icon_sect_{$faq_sect.faq_section_id}"class="cp-ic-right-dir cp-icon_font_size" ></i>{else}&nbsp;&nbsp;{/if}&nbsp;
                                        <span class="cp-quest-disp-icon">
                                            <i class="{if $faq_sect}{$faq_sect.icon_class}{/if} cp-icon_font_size cp-sect_icon_move"></i>
                                        </span>
                                        <input type="text" name="cp_faq_product_data[faq_sections][{$faq_sect.faq_section_id}][section_position]" id="section_position{$faq_sect.faq_section_id}" size="6" value="{$faq_sect.section_position}" class="input-micro input-hidden" />
                                    </div>
                                    <div class="controls">
                                        {if $faq_sect.for_product && $faq_sect.for_product == "N"}
                                            <a class="row-status" href="{"cp_faq_addon.update?faq_section_id=`$faq_sect.faq_section_id`"|fn_url}" target=_blank >{$faq_sect.faq_section_name}</a>
                                        {else}
                                            {include file="common/popupbox.tpl" id="adding_section_`$cp_index_faq`_`$faq_sect.faq_section_id`" link_text=$faq_sect.faq_section_name text=__("editing_faq_section") href="cp_faq_addon.edit_prod_sect?faq_section_id=`$faq_sect.faq_section_id`&product_id=`$cp_index_faq`&company_id=`$comp_id`" content="" act="edit" link_class="cp-refresh-sec row-status"}
                                        {/if}
                                    </div>
                                    <div class="cp-faq-remove">
                                        <a class="cp-icon_font_size-delete cm-ajax cm-tooltip cm-confirm cp-delete-product-sect" data-ca-target-id="separated_faq_block" href="{"products.update?delete_f_sec=Y&faq_section_id=`$faq_sect.faq_section_id`&product_id=`$id`&for_product=Y"|fn_url}" title="{__("delete")}"><i class="icon-remove"></i></a>
                                    </div>
                                </div>
                                <input type="hidden" name="cp_faq_product_data[faq_sections][{$faq_sect.faq_section_id}][faq_section_name]" value="{$faq_sect.faq_section_name}" />
                                <input type="hidden" name="cp_faq_product_data[faq_sections][{$faq_sect.faq_section_id}][icon_class]" value="{$faq_sect.icon_class}" />
                                <input type="hidden" name="cp_faq_product_data[faq_sections][{$faq_sect.faq_section_id}][status]" value="{$faq_sect.status}" />
                                <input type="hidden" name="cp_faq_product_data[faq_sections][{$faq_sect.faq_section_id}][for_product]" value="{$faq_sect.for_product}" />
                                
                                <div id="section_quest_{$faq_sect.faq_section_id}" class="hidden sect-quest-block">
                                    <div class="cp-section-questions-block clearfix">
                                        <div class="sect-quest-text">
                                            {__("questions")} 
                                        </div>
                                        <div class="cp-add-question-button">
                                            {include file="common/popupbox.tpl" id="adding_question_`$cp_index_faq`_`$faq_sect.faq_section_id`_0" link_text=__("add_question") text=__("cp_faq_new_question") href="cp_faq_addon.edit_prod_quest?product_id=`$cp_index_faq`&company_id=`$comp_id`&faq_section_id=`$faq_sect.faq_section_id`" content="" act="general" icon="icon-plus"}
                                        </div>									
                                        <div id="prod_sec_quetions_block_{$faq_sect.faq_section_id}">
                                            {if $faq_sect.faq_questions && $faq_sect.for_product == "Y"}
                                                {foreach from=$faq_sect.faq_questions item=faq_quest}
                                                    <input type="hidden" name="cp_faq_product_data[faq_sections][{$faq_sect.faq_section_id}][faq_questions][{$faq_quest.faq_question_id}][faq_question_id]" value="{$faq_quest.faq_question_id}" />
                                                    <div class="{if $faq_quest.status == 'D'}cm-row-status-d{/if} clearfix cp-faq-row-inp-main">
                                                        <div class="cp-icon_position-not-point-sec">&nbsp;
                                                            <span class="cp-quest-disp-icon">
                                                                <i class="{if $faq_quest}{$faq_quest.qu_icon_class}{/if} cp-icon_font_size cp-sect_icon_move"></i>
                                                            </span>
                                                            <input type="text" name="cp_faq_product_data[faq_sections][{$faq_sect.faq_section_id}][faq_questions][{$faq_quest.faq_question_id}][question_position]" id="prod_quest_pos_{$faq_sect.faq_section_id}_{$faq_quest.faq_question_id}" size="6" value="{$faq_quest.question_position}" class="input-micro input-hidden" />
                                                        </div>
                                                        <div class="controls">
                                                            {if $faq_quest.for_product && $faq_quest.for_product == "N"}
                                                                <a class="row-status" href="{"cp_faq_addon.update?faq_section_id=`$faq_quest.faq_section_id`"|fn_url}" target=_blank >{$faq_quest.faq_question}</a>
                                                            {else}
                                                                {include file="common/popupbox.tpl" id="adding_question_`$cp_index_faq`_`$faq_sect.faq_section_id`_`$faq_quest.faq_question_id`" link_text=$faq_quest.faq_question text=__("editing_faq_question") href="cp_faq_addon.edit_prod_quest?faq_question_id=`$faq_quest.faq_question_id`&product_id=`$cp_index_faq`&company_id=`$comp_id`&faq_section_id=`$faq_sect.faq_section_id`" content="" act="edit" link_class="cp-refresh-qu row-status"}
                                                            {/if}
                                                        </div>
                                                        <div class="cp-faq-remove">
                                                            {if $faq_quest.for_product && $faq_quest.for_product == "N"}
                                                                <a class="cp-icon_font_size-delete cm-ajax cm-tooltip cm-confirm cp-delete-product-quest" data-ca-target-id="prod_sec_quetions_block_{$faq_sect.faq_section_id}" href="{"products.update?delete_f_qu=Y&faq_question_id=`$faq_quest.faq_question_id`&product_id=`$id`&for_product=Y"|fn_url}" title="{__("delete")}"><i class="icon-remove"></i></a>
                                                            {else}
                                                                <a class="cp-icon_font_size-delete cm-ajax cm-tooltip cm-confirm cp-delete-product-quest" data-ca-target-id="prod_sec_quetions_block_{$faq_sect.faq_section_id}" href="{"products.update?delete_f_qu=Y&faq_question_id=`$faq_quest.faq_question_id`&product_id=`$id`&for_product=N"|fn_url}" title="{__("delete")}"><i class="icon-remove"></i></a>
                                                            {/if}
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="cp_faq_product_data[faq_sections][{$faq_sect.faq_section_id}][faq_questions][{$faq_quest.faq_question_id}][for_product]" value="{$faq_quest.for_product}" />
                                                {/foreach}
                                            {/if}										
                                        <!--prod_sec_quetions_block_{$faq_sect.faq_section_id}--></div>
                                    </div>
                                </div>
                            {/foreach}                       
                        {include file="buttons/button.tpl" but_text=__("save") but_role="submit" but_name="dispatch[products.update]" but_target_form="product_faq_sections_`$cp_index_faq`"}
                        </form>
                    {/if}
                <!--all_prod_sections_list_{$cp_index_faq}--></div>
            </div>
        {* single product questions *} 
            <div id="prod_sec_quetions_block_0">
                {include file="common/subheader.tpl" title=__("faq_questions_picker") target="#cp_all_prod_questions"}
                <div id="cp_all_prod_questions" class="collapse in">
                    <div class="cp-prod-faq-add-sec-but">
                        {include file="common/popupbox.tpl" id="adding_question_`$cp_index_faq`_0_0" link_text=__("add_question") text=__("cp_faq_new_question") href="cp_faq_addon.edit_prod_quest?product_id=`$cp_index_faq`&company_id=`$comp_id`" content="" act="general" icon="icon-plus"}
                    </div>
                    <div id="prod_single_questions">
                        {if $product_data.cp_faq_prod_questions}
                            <form action="{""|fn_url}" method="post" name="product_faq_question_{$cp_index_faq}" class="cm-ajax form-horizontal form-edit" >
                                <div class="cp-faq-questions-block">
                                    {foreach from=$product_data.cp_faq_prod_questions item=faq_quest}
                                        <input type="hidden" name="cp_faq_product_data[faq_questions][{$faq_quest.faq_question_id}][faq_question_id]" value="{$faq_quest.faq_question_id}" />
                                        <div class="{if $faq_quest.status == 'D'}cm-row-status-d{/if} clearfix cp-faq-row-inp-main">
                                            <div class="cp-icon_position-not-point">&nbsp;
                                                <span class="cp-quest-disp-icon">
                                                    <i class="{if $faq_quest}{$faq_quest.qu_icon_class}{/if} cp-icon_font_size cp-sect_icon_move"></i>
                                                </span>
                                                <input type="text" name="cp_faq_product_data[faq_questions][{$faq_quest.faq_question_id}][question_position]" id="prod_quest_pos_0_{$faq_quest.faq_question_id}" size="6" value="{$faq_quest.question_position}" class="input-micro input-hidden" />
                                            </div>
                                            <div class="controls">
                                                {if $faq_quest.for_product && $faq_quest.for_product == "N"}
                                                    <a class="row-status" href="{"cp_faq_addon.update?faq_section_id=`$faq_quest.faq_section_id`"|fn_url}" target=_blank >{$faq_quest.faq_question}</a>
                                                {else}
                                                    {include file="common/popupbox.tpl" id="adding_question_`$cp_index_faq`_0_`$faq_quest.faq_question_id`" link_text=$faq_quest.faq_question text=__("editing_faq_question") href="cp_faq_addon.edit_prod_quest?faq_section_id=`$faq_quest.faq_section_id`&faq_question_id=`$faq_quest.faq_question_id`&product_id=`$cp_index_faq`&company_id=`$comp_id`" content="" act="edit" link_class="cp-refresh-qu row-status"}
                                                {/if}
                                            </div>
                                            <div class="cp-faq-remove">
                                                {if $faq_quest.for_product && $faq_quest.for_product == "N"}
                                                    <a class="cp-icon_font_size-delete cm-ajax cm-tooltip cm-confirm cp-delete-product-quest" data-ca-target-id="prod_sec_quetions_block_0" href="{"products.update?delete_f_qu=Y&faq_question_id=`$faq_quest.faq_question_id`&product_id=`$id`&for_product=Y"|fn_url}" title="{__("delete")}"><i class="icon-remove"></i></a>
                                                {else}
                                                    <a class="cp-icon_font_size-delete cm-ajax cm-tooltip cm-confirm cp-delete-product-quest" data-ca-target-id="prod_sec_quetions_block_0" href="{"products.update?delete_f_qu=Y&faq_question_id=`$faq_quest.faq_question_id`&product_id=`$id`&for_product=N"|fn_url}" title="{__("delete")}"><i class="icon-remove"></i></a>
                                                {/if}
                                            </div>
                                        </div>
                                        <input type="hidden" name="cp_faq_product_data[faq_questions][{$faq_quest.faq_question_id}][faq_question]" size="25" value="{$faq_quest.faq_question}" class="input-large" />
                                        <input type="hidden" name="cp_faq_product_data[faq_questions][{$faq_quest.faq_question_id}][qu_icon_class]" size="25" value="{$faq_quest.qu_icon_class}" class="input-short cp-question_icon" />
                                        <input type="hidden" name="cp_faq_product_data[faq_questions][{$faq_quest.faq_question_id}][qu_anchor]" size="25" value="{$faq_quest.qu_anchor}" class="input-short" />
                                        <input type="hidden" name="cp_faq_product_data[faq_questions][{$faq_quest.faq_question_id}][faq_answer]" size="25" value="{$faq_quest.faq_answer}" class="input-short" />
                                        <input type="hidden" name="cp_faq_product_data[faq_questions][{$faq_quest.faq_question_id}][status]" size="25" value="{$faq_quest.status}" class="input-short" />
                                        <input type="hidden" name="cp_faq_product_data[faq_questions][{$faq_quest.faq_question_id}][for_product]" value="{$faq_quest.for_product}" />
                                    {/foreach}
                                    <input type="hidden" name="result_ids" value="prod_sec_quetions_block_0" />
                                    <input type="hidden" name="product_id" value="{$cp_index_faq}" />
                                </div>							
                                {include file="buttons/button.tpl" but_text=__("save") but_role="submit" but_name="dispatch[products.update]" but_target_form="product_faq_question_`$cp_index_faq`"}
                            </form>
                        {/if}
                    </div>
                </div>
            <!--prod_sec_quetions_block_0--></div>	
            <script language="javascript">
                $.ceEvent('on', 'ce.commoninit', function(context) {
                    context.find('.cp-icon_position-sec').click(function() {
                        var sect_id = $(this).attr("data-cliked-id");
                        if ($('#chnaged_icon_sect_'+sect_id).hasClass("cp-ic-right-dir")) {
                            $('#chnaged_icon_sect_'+sect_id).removeClass("cp-ic-right-dir");
                            $('#chnaged_icon_sect_'+sect_id).addClass("cp-ic-sort-down");
                        } else {
                            $('#chnaged_icon_sect_'+sect_id).removeClass("cp-ic-sort-down");
                            $('#chnaged_icon_sect_'+sect_id).addClass("cp-ic-right-dir");
                        }
                    });
                });
            </script>
        <!--separated_faq_block--></div>
    {/if}
</div>
