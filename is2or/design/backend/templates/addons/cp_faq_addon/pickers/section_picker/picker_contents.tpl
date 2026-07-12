{if !$smarty.request.extra}
<script type="text/javascript">
(function(_, $) {
    _.tr('text_items_added', '{__("text_items_added")|escape:"javascript"}');

    $.ceEvent('on', 'ce.formpost_faq_sections_form', function(frm, elm) {

        var faq_sections = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                
                faq_sections[id] = $('#faq_section_' + id).text();
            });

            {literal}
            $.cePicker('add_js_item', frm.data('caResultId'), faq_sections, 's', {
                '{faq_section_id}': '%id',
                '{faq_section_name}': '%item'
                
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
<form action="{$smarty.request.extra|fn_url}" data-ca-result-id="{$smarty.request.data_id}" method="post" name="faq_sections_form">
    
    {include file="common/pagination.tpl" save_current_page=true div_id="pagination_`$smarty.request.data_id`"}
   
{if $faq_sections}
<table class="table table-middle">
    <thead>
        <tr>
            <th width="5%">
                {include file="common/check_items.tpl"}
            </th>
            <th width="8%">{__("icon")}</th>
            <th width="30%">{__("name")}</th>
            <th width="10%" class="nowrap center">{__("position")}</th>
            <th width="10%">&nbsp;</th>
            <th width="10%" class="right">{__("status")}</th>
        </tr>
    </thead>

    {foreach from=$faq_sections item=faq_sec}
    
        <tr class="cm-row-status-{$faq_sec.status|lower} {$additional_class}">
            <td>
                 <input type="checkbox" name="{$smarty.request.checkbox_name|default:"faq_section_ids"}[]" value="{$faq_sec.faq_section_id}" class="cm-item" /></td>
            <td>
                {if $faq_sec.icon_class}
                    <i class="{$faq_sec.icon_class} cp-icon_font_size"></i>
                {else}
                    {if $addons.cp_faq_addon.default_icon_for_section}
						<i class="{$addons.cp_faq_addon.default_icon_for_section} cp-icon_font_size"></i>
					{else}
						<span>{__("no_icon")}</span>
					{/if}
                {/if}
            </td>    
           <td id="faq_section_{$faq_sec.faq_section_id}" width="100%">
                <a class="row-status" href="{"cp_faq_addon.update?faq_section_id=`$faq_sec.faq_section_id`"|fn_url}">{$faq_sec.faq_section_name}</a>
            </td>
            <td class="center">
                <span>{$faq_sec.section_position}</span>
            </td>
            <td class="right">
                <div class="hidden-tools">
                {capture name="tools_list"}
                    <li>{btn type="list" text=$link_text href="cp_faq_addon.update?faq_section_id=`$faq_sec.faq_section_id`"}</li>
                    <li>{btn type="list" text=__("delete") class="cm-confirm" href="cp_faq_addon.section_delete?faq_section_id=`$faq_sec.faq_section_id`"}</li>
                {/capture}
                {dropdown content=$smarty.capture.tools_list}
                </div>
            </td>
            <td class="nowrap right">
                {include file="common/select_popup.tpl" popup_additional_class="dropleft" display=$status_display id=$faq_sec.faq_section_id status=$faq_sec.status hidden=false object_id_name="faq_section_id" table="faq_sections"}
            </td>
        </tr>
    {/foreach}
</table>
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}
{include file="common/pagination.tpl" div_id="pagination_`$smarty.request.data_id`"}
{if $faq_sections}
<div class="buttons-container">
    {include file="buttons/add_close.tpl" but_text=__("add_section") but_close_text=__("add_section_and_close") is_js=$smarty.request.extra|fn_is_empty}
</div>
{/if}
</form>
