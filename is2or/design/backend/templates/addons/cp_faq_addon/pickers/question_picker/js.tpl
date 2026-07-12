
{if $faq_question_id == "0"}
    {assign var="faq_question" value=$default_name}
{else}
    {assign var="faq_question" value=$faq_question_id|fn_cp_faq_addon_get_faq_question_name|default:"`$ldelim`faq_question`$rdelim`"}
{/if}
<tr {if !$clone}id="{$holder}_{$faq_question_id}" {/if}class="cm-js-item{if $clone} cm-clone hidden{/if}">
   
    {if $position_field}
        <td>
            <input type="text" name="{$input_name}[{$faq_question_id}]" value="{math equation="a*b" a=$position b=10}" size="3" class="input-micro" {if $clone}disabled="disabled"{/if} />
        </td>
    {/if}
    
    <td>
        {$faq_question}</td>
    <td>
        {capture name="tools_list"}
            {if !$hide_delete_button && !$view_only}
                <li><a onclick="Tygh.$.cePicker('delete_js_item', '{$holder}', '{$faq_question_id}', 'q'); return false;">{__("delete")}</a></li>
            {/if}
        {/capture}
        <div class="hidden-tools">
            {dropdown content=$smarty.capture.tools_list}
        </div>
    </td>
</tr>
