<div id="add_condition_{$prefix_md5}" class="btn-toolbar pull-right">
{if !$hide_add_buttons}
{include file="common/tools.tpl" hide_tools=true tool_onclick="fn_ab__sft_add_condition(Tygh.$(this).parents('div[id^=add_condition_]').prop('id'), false, 'condition')" prefix="simple" link_text=__("add_condition")}
{/if}
</div>
{capture name="set"}
{if $group.set == "any"}
{assign var="selected_name" value=__("ab__seo_for_tags.conditions.any")}
{else}
{assign var="selected_name" value=__("ab__seo_for_tags.conditions.all")}
{/if}
{if $hide_add_buttons}
{$selected_name}
{else}
{include file="common/select_object.tpl" style="field" items=["all" => __("ab__seo_for_tags.conditions.all"), "any" => __("ab__seo_for_tags.conditions.any")] select_container_name="`$prefix`[set]" selected_key=$group.set selected_name=$selected_name}
{/if}
{/capture}
{capture name="set_value"}
{if !$group || $group.set_value}
{assign var="selected_name" value=__("ab__seo_for_tags.conditions.true")}
{else}
{assign var="selected_name" value=__("ab__seo_for_tags.conditions.false")}
{/if}
{if $hide_add_buttons}
{$selected_name}
{else}
{include file="common/select_object.tpl" style="field" items=["0" => __("ab__seo_for_tags.conditions.false"), "1" => __("ab__seo_for_tags.conditions.true")] select_container_name="`$prefix`[set_value]" selected_key=$group.set_value|default:1 selected_name=$selected_name}
{/if}
{/capture}
{__('ab__seo_for_tags.conditions.set', ["[set]" => $smarty.capture.set, "[set_value]" => $smarty.capture.set_value])}