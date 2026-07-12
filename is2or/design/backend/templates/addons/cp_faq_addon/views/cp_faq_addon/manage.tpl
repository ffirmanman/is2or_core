{capture name="mainbox"}

<form action="{""|fn_url}" method="post" name="faq_sections_form" class="{if ""|fn_check_form_permissions} cm-hide-inputs{/if}" id="faq_sections_form" >

{include file="common/pagination.tpl" save_current_page=true save_current_url=true}

{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
{assign var="c_icon" value="<i class=\"exicon-`$search.sort_order_rev`\"></i>"}
{assign var="c_dummy" value="<i class=\"exicon-dummy\"></i>"}

{if $faq_sections}
	<table class="table table-middle">
		<thead>
			<tr>
				{if $cp_allow_save}
					<th width="1%">
						{include file="common/check_items.tpl"}
					</th>
				{/if}
				<th width="5%" class="nowrap center">
					<a class="cm-ajax" href="{"`$c_url`&sort_by=position&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("position")}{if $search.sort_by == "position"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
				<th width="5%">{__("icon")}</th>
				<th width="30%">
					<a class="cm-ajax" href="{"`$c_url`&sort_by=name&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("name")}{if $search.sort_by == "name"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
				<th width="10%">
                    <a class="cm-ajax" href="{"`$c_url`&sort_by=show_main&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("cp_fq_show_on_main")}{if $search.sort_by == "show_main"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
				<th width="10%">&nbsp;</th>
			
				<th width="10%" class="right"><a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("status")}{if $search.sort_by == "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
			</tr>
		</thead>

		{foreach from=$faq_sections item=faq_sec}
			
			{assign var="link_text" value=__("edit")}
			{assign var="additional_class" value="cm-no-hide-input"}
			{assign var="status_display" value=""}
			<tr class="cm-row-status-{$faq_sec.status|lower} {$additional_class}">
				{if $cp_allow_save}
					<td>
						<input name="faq_section_ids[]" type="checkbox" value="{$faq_sec.faq_section_id}" class="cm-item" />
					</td>
				{/if}
				<td class="center">
					{if !$cp_allow_save}
						{$faq_sec.section_position}
					{else}
						<input type="text" name="faq_sections[{$faq_sec.faq_section_id}][section_position]" size="6" value="{$faq_sec.section_position}" class="input-mini input-hidden"/>
					{/if}
				</td>
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
				<td>
					<a class="row-status" href="{"cp_faq_addon.update?faq_section_id=`$faq_sec.faq_section_id`"|fn_url}">{$faq_sec.faq_section_name}</a>
					{include file="views/companies/components/company_name.tpl" object=$faq_sec}
				</td>
				<td>{$faq_sec.show_on_main}</td>
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
					{if !$cp_allow_save}
						{if $faq_sec.status == "A"}
							{__("active")}
						{else}
							{__("disabled")}
						{/if}
					{else}
						{include file="common/select_popup.tpl" popup_additional_class="dropleft" display=$status_display id=$faq_sec.faq_section_id status=$faq_sec.status hidden=false object_id_name="faq_section_id" table="faq_sections"}
					{/if}
				</td>
			</tr>
		{/foreach}
	</table>
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

{include file="common/pagination.tpl"}

{capture name="buttons"}
    {capture name="tools_list"}
		{if $faq_sec}
			<li>{btn type="delete_selected" dispatch="dispatch[cp_faq_addon.m_delete_sections]" form="faq_sections_form"}</li>
		{/if}
    {/capture}
    {dropdown content=$smarty.capture.tools_list}
    {if $faq_sections}
        {include file="buttons/save.tpl" but_name="dispatch[cp_faq_addon.m_update_faq_sections]" but_role="submit-button" but_target_form="faq_sections_form"}
    {/if}
{/capture}

{capture name="adv_buttons"}
	{if $cp_allow_save}
		{include file="common/tools.tpl" tool_href="cp_faq_addon.add" title=__("add_section") link_text=false hide_tools=true icon="icon-plus"}
    {/if}
{/capture}
</form>

{/capture}
{include file="common/mainbox.tpl" title=__("faq_sections") content=$smarty.capture.mainbox tools=$smarty.capture.tools select_languages=true buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons}