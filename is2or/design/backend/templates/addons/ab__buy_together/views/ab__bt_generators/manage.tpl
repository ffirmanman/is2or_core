{if "MULTIVENDOR"|fn_allowed_for}
{$no_hide_input="cm-no-hide-input"}
{/if}
{capture name="mainbox"}
{$c_icon="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
{$c_dummy="<i class=\"icon-dummy\"></i>"}
<form action="{""|fn_url}" method="post" name="ab__bt_generators_list_form" id="ab__bt_generators_list_form" class="{if $runtime.company_id && !"ULTIMATE"|fn_allowed_for}cm-hide-inputs{/if}">
<input type="hidden" name="fake" value="1" />
{$return_current_url=$config.current_url|escape:url}
{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id}
{$c_url=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
{$rev=$smarty.request.content_id|default:"pagination_contents"}
{if $generators}
{capture name="ab__bt_generators_table"}
<div class="table-responsive-wrapper longtap-selection">
<table width="100%" class="table table--relative table-responsive">
<thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
<tr>
<th width="8%" class="center {$no_hide_input} mobile-hide">
{include file="common/check_items.tpl" check_statuses=""|fn_get_default_status_filters:true}
{if fn_check_view_permissions("orders.manage", "GET")
|| fn_check_view_permissions("profiles.export_range", "POST")
|| fn_check_permissions("profiles", "m_delete", "admin", "POST", ["user_type" => $smarty.request.user_type])
|| (fn_check_permissions("profiles", "m_activate", "admin", "POST", ["user_type" => $smarty.request.user_type])
&& fn_check_permissions("profiles", "m_disable", "admin", "POST", ["user_type" => $smarty.request.user_type]))
}
<input type="checkbox"
class="bulkedit-toggler hide"
data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
data-ca-bulkedit-dispatch-parameter="generator_ids[]"
/>
{/if}
</th>
<th class="nowrap" width="35%"><a class="cm-ajax" href="{"`$c_url`&sort_by=name&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("name")}{if $search.sort_by == "name"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
<th class="nowrap"><a class="cm-ajax" href="{"`$c_url`&sort_by=timestamp&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("ab__bt.updated")}{if $search.sort_by == "timestamp"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
<th class="nowrap"><a class="cm-ajax" href="{"`$c_url`&sort_by=last_generation_timestamp&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("ab__bt.last_generation")}{if $search.sort_by == "last_generation_timestamp"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
<th class="nowrap">{__("ab__bt.total_combinations")}</th>
<th width="10%" class="right mobile-hide">&nbsp;</th>
<th widht="10%" class="right"><a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("status")}{if $search.sort_by == "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
</tr>
</thead>
{foreach $generators as $generator}
{$allow_save=$user|fn_allow_save_object:"ab__bt_generators"}
{if !$allow_save && !"RESTRICTED_ADMIN"|defined && $auth.is_root != 'Y'}
{$link_text=__("view")}
{$popup_additional_class=""}
{elseif $allow_save || "RESTRICTED_ADMIN"|defined || $auth.is_root == 'Y'}
{$link_text=""}
{$popup_additional_class="cm-no-hide-input"}
{else}
{$popup_additional_class=""}
{$link_text=""}
{/if}
<tr class="cm-row-status-{$generator.status|lower} cm-longtap-target {if ("ULTIMATE"|fn_allowed_for)} cm-hide-inputs{/if}"
data-ca-longtap-action="setCheckBox"
data-ca-longtap-target="input.cm-item"
data-ca-id="{$user.user_id}"
>
<td width="8%" class="center {$no_hide_input} mobile-hide">
<input type="checkbox" name="generator_ids[]" value="{$generator.generator_id}" class="cm-item cm-item-status-{$generator.status|lower} hide" /></td>
<td class="row-status" data-th="{__("name")}">
<a href="{"ab__bt_generators.update?generator_id={$generator.generator_id}"|fn_url}">{$generator.name}</a>
</td>
<td class="row-status" data-th="{__("ab__bt.updated")}">
{$generator.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}
</td>
<td class="row-status" data-th="{__("ab__bt.last_generation")}">
{if $generator.last_generation_timestamp}
{$generator.last_generation_timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}
{else}
{__("ab__bt.no_generated_chains")}
{/if}
</td>
<td class="center">
{$generator.total_combinations}
</td>
<td widht="10%" class="right nowrap mobile-hide">
{capture name="tools_list"}
<li>{btn type="list" text=__("edit") href="ab__bt_generators.update?generator_id={$generator.generator_id}"|fn_url}</li>
<li>{btn type="list" text=__("delete") class="cm-confirm" href="ab__bt_generators.delete?generator_id=`$generator.generator_id`&redirect_url=`$return_current_url`" method="POST"}</li>
{/capture}
<div class="hidden-tools">
{dropdown content=$smarty.capture.tools_list}
</div>
</td>
<td widht="10%" class="right" data-th="{__("status")}">
<input type="hidden" name="user_types[{$user.user_id}]" value="{$user.user_type}" />
{include file="common/select_popup.tpl" id=$generator.generator_id status=$generator.status hidden="" object_id_name="generator_id" table="ab__bt_generators" popup_additional_class="`$popup_additional_class` dropleft"}
</td>
</tr>
{/foreach}
</table>
</div>
{/capture}
{include file="common/context_menu_wrapper.tpl"
form="ab__bt_generators_list_form"
object="ab__bt_generators"
items=$smarty.capture.ab__bt_generators_table
}
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
<a class="btn cm-tooltip" href="{"ab__bt_generators.update"|fn_url}" title="{__("ab__bt.add_generator")}"><i class="icon-plus"></i></a>
{/capture}
{capture name="sidebar"}
{include file="common/saved_search.tpl" dispatch="ab__bt_generators.manage"}
{include file="addons/ab__buy_together/views/ab__bt_generators/components/generators_search_form.tpl" dispatch="ab__bt_generators.manage" no_adv_link=true}
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__buy_together"}
{include file="common/mainbox.tpl" title_start=__("ab__buy_together")|truncate:40 title_end=__("ab__bt.generators_list") content=$smarty.capture.mainbox sidebar=$smarty.capture.sidebar adv_buttons=$smarty.capture.adv_buttons buttons=$smarty.capture.buttons content_id="manage_users"}
