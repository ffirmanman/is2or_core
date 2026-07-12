{capture name="mainbox"}
{$c_icon="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
{$c_dummy="<i class=\"icon-dummy\"></i>"}
<form action="{""|fn_url}" method="post" name="ab__gp_templates_list_form" id="ab__gp_templates_list_form" class="{if $runtime.company_id && !"ULTIMATE"|fn_allowed_for}cm-hide-inputs{/if}">
<input type="hidden" name="fake" value="1" />
{$return_current_url=$config.current_url|escape:url}
{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id}
{$c_url=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
{$rev=$smarty.request.content_id|default:"pagination_contents"}
{if $templates_list}
<div class="table-responsive-wrapper longtap-selection">
<table width="100%" class="table table--relative table-responsive">
<thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
<tr>
<th class="nowrap">{__("ab__gp.template.name")}</th>
<th width="10%" class="right mobile-hide">&nbsp;</th>
</tr>
</thead>
{foreach $templates_list as $template}
<tr class="cm-longtap-target {if ("ULTIMATE"|fn_allowed_for)} cm-hide-inputs{/if}">
<td>
<a href="{"ab__gp_templates.update?template_id={$template.template_id}"|fn_url}">{$template.template_name}</a>
</td>
<td widht="10%" class="right nowrap mobile-hide">
{capture name="tools_list"}
<li>{btn type="list" text=__("edit") href="ab__gp_templates.update?template_id={$template.template_id}"|fn_url}</li>
<li>{btn type="list" text=__("delete") class="cm-confirm" href="ab__gp_templates.delete?template_id=`$template.template_id`&redirect_url=`$return_current_url`" method="POST"}</li>
{/capture}
<div class="hidden-tools">
{dropdown content=$smarty.capture.tools_list}
</div>
</td>
</tr>
{/foreach}
</table>
</div>
{else}
<p class="no-items">{__("no_data")}</p>
{/if}
{include file="common/pagination.tpl" div_id=$smarty.request.content_id}
{capture name="buttons"}
{if $users}
{capture name="tools_list"}
{/capture}
{dropdown content=$smarty.capture.tools_list class="mobile-hide bulkedit-dropdown--legacy hide"}
{/if}
{/capture}
</form>
{/capture}
{capture name="adv_buttons"}
{include file="common/tools.tpl" tool_href="ab__gp_templates.add" prefix="top" hide_tools="true" title=__("add") icon="icon-plus"}
{/capture}
{capture name="sidebar"}
{include file="common/saved_search.tpl" dispatch="ab__gp_templates.manage"}
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__geo_pages"}
{include file="common/mainbox.tpl"
title_start=__("ab__geo_pages")|truncate:40
title_end=__("ab__gp.templates")
content=$smarty.capture.mainbox
sidebar=$smarty.capture.sidebar
adv_buttons=$smarty.capture.adv_buttons
buttons=$smarty.capture.buttons
content_id="ab__gp_templates_list"
select_languages=true
}
