{if !$smarty.request.extra}
<script type="text/javascript">
(function(_, $) {
    _.tr('text_items_added', '{__("text_items_added")|escape:"javascript"}');

    $.ceEvent('on', 'ce.formpost_faq_questions_form', function(frm, elm) {

        var faq_questions = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                
                faq_questions[id] = $('#faq_question_' + id).text();
            });

            {literal}
            $.cePicker('add_js_item', frm.data('caResultId'), faq_questions, 'q', {
                '{faq_question_id}': '%id',
                '{faq_question}': '%item'
                
            });
            {/literal}

            $.ceNotification('show', {
                type: 'N', 
                title: _.tr('notice'), 
                message: _.tr('text_items_added'), 
                message_state: 'I'
            });
        }

        return false;
    });

}(Tygh, Tygh.$));
</script>
{/if}
</head>
<form action="{$smarty.request.extra|fn_url}" data-ca-result-id="{$smarty.request.data_id}" method="post" name="faq_questions_form">
    
    {include file="common/pagination.tpl" save_current_page=true div_id="pagination_`$smarty.request.data_id`"}
   
{if $faq_questions}
<table class="table table-middle">
    <thead>
        <tr>
            <th width="5%">
                {include file="common/check_items.tpl"}
            </th>
            <th width="8%">{__("icon")}</th>
            <th width="30%">{__("faq_questions_picker")}</th>
            <th width="10%" class="nowrap center">{__("position")}</th>
            <th width="10%">&nbsp;</th>
            <th width="10%" class="right">{__("status")}</th>
        </tr>
    </thead>

    {foreach from=$faq_questions item=faq_quest}
        <tr class="cm-row-status-{$faq_quest.status|lower} {$additional_class}">
            <td>
                 <input type="checkbox" name="{$smarty.request.checkbox_name|default:"faq_question_ids"}[]" value="{$faq_quest.faq_question_id}" class="cm-item" /></td>
            <td>
                {if $faq_quest.qu_icon_class}
                    <i class="{$faq_quest.qu_icon_class} cp-icon_font_size"></i>
                {else}
                    {if $addons.cp_faq_addon.default_icon_for_question}
						<i class="{$addons.cp_faq_addon.default_icon_for_question} cp-icon_font_size"></i>
					{else}
						<span>{__("no_icon")}</span>
					{/if}
                {/if}
            </td>    
           <td id="faq_question_{$faq_quest.faq_question_id}" width="80%">
                {$faq_quest.faq_question}
            </td>
            <td class="center">
                <span>{$faq_quest.question_position}</span>
            </td>
            <td class="right">
                <a class="row-status" href="{"cp_faq_addon.update?faq_section_id=`$faq_quest.faq_section_id`"|fn_url}">{__("edit")}</a>
            </td>
            <td class="nowrap right">
                {include file="common/select_popup.tpl" popup_additional_class="dropleft" display=$status_display id=$faq_quest.faq_question_id status=$faq_quest.status hidden=false object_id_name="faq_question_id" table="faq_questions"}
            </td>
        </tr>
    {/foreach}
</table>

{else}
    <p class="no-items">{__("no_data")}</p>
{/if}
{include file="common/pagination.tpl" div_id="pagination_`$smarty.request.data_id`"}
{if $faq_questions}
<div class="buttons-container">
    {include file="buttons/add_close.tpl" but_text=__("add_question") but_close_text=__("add_question_and_close") is_js=$smarty.request.extra|fn_is_empty}
</div>
{/if}
</form>
