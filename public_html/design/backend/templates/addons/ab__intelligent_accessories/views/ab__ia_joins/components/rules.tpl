{script src="js/addons/ab__intelligent_accessories/rules.js"}
<table class="table table-middle ab__ia_rules">
<thead>
<tr class="first-sibling">
<th class="cm-non-cb">{__("ab__ia_position_short")}</th>
<th class="cm-non-cb">{__("ab__ia_rule_name")}</th>
<th>{__("ab__ia_rule_max")}{include file="common/tooltip.tpl" tooltip=__("ab__ia.rule_max.tooltip")}</th>
<th class="cm-non-cb">{__("ab__ia_status")}</th>
<th>
<div id="on_st_{$join_id}" title="{__("expand_collapse_list")}" class="hand cm-combinations-options-{$join_id} exicon-expand"></div><div id="off_st_{$join_id}" title="{__("expand_collapse_list")}" class="hand hidden cm-combinations-options-{$join_id} exicon-collapse"></div>
</th>
<th class="cm-non-cb">{__("ab__ia_test")}{include file="common/tooltip.tpl" tooltip=__("ab__ia_test__tooltip")}</th>
<th class="cm-non-cb">&nbsp;</th>
</tr>
</thead>
{assign var="e_n" value="join_data[rules]"}
{foreach from=$rules item="r" name="fe_r"}
{assign var="num_rule" value=$smarty.foreach.fe_r.iteration}
<tbody class="hover cm-row-item" id="box_join_rules_{$join_id}_{$num_rule}">
<tr style="border-top: 2px solid #888">
<td class="cm-non-cb">
<input type="text" name="{$e_n}[{$num_rule}][position]" value="{$r.position}" size="3" class="input-micro" />
<input type="hidden" name="{$e_n}[{$num_rule}][rule_id]" value="{$r.rule_id}"/>
</td>
<td class="cm-non-cb">
<input type="text" name="{$e_n}[{$num_rule}][name]" value="{$r.name}" class="input-medium" />
</td>
<td class="cm-non-cb">
<select name="{$e_n}[{$num_rule}][max_view_products]" class="input-small">
{foreach from=1|range:$smarty.const.AB__IA_RULE_MAX_VIEW_PRODUCTS item='i'}
<option value="{$i}" {if $i == $r.max_view_products} selected="selected"{/if}>{$i}</option>
{/foreach}
</select>
</td>
<td class="cm-non-cb">
{include file="common/select_status.tpl" input_name="{$e_n}[`$num_rule`][status]" display="select" obj=$r meta="input-small"}
</td>
<td class="nowrap">
<span id="on_extra_join_rules_{$join_id}_{$num_rule}" title="{__("expand_collapse_list")}" class="hand cm-combination-options-{$join_id}"><span class="exicon-expand"></span></span>
<span id="off_extra_join_rules_{$join_id}_{$num_rule}" title="{__("expand_collapse_list")}" class="hand hidden cm-combination-options-{$join_id}"><span class="exicon-collapse"></span> </span>
<a id="sw_extra_join_rules_{$join_id}_{$num_rule}" class="cm-combination-options-{$join_id}">{__("ab__ia_conditions")}</a>
</td>
<td class="cm-non-cb">
{include file="buttons/button.tpl" but_onclick="fn_ab__ia_test_rule(`$r.rule_id`)" but_text="{__('ab__ia_test')}" but_role="button" but_meta="btn btn-primary ab--ia-test-rule"}
</td>
<td class="right cm-non-cb">
{include file="buttons/multiple_buttons.tpl" item_id="join_rules_`$join_id`_`$num_rule`" tag_level="2" simple=true on_add="Tygh.ab__ia.onAddRule(this)"}
</td>
</tr>
<tr id="extra_join_rules_{$join_id}_{$num_rule}" class="cm-ex-op hidden">
<td colspan="7">
{include file="addons/ab__intelligent_accessories/views/ab__ia_joins/components/conditions.tpl"
e_n_c="`$e_n`[`$num_rule`]"
rule_id=$r.rule_id
conditions=$r.conditions
base_category_id=$ab__ia_join.base_category_id
joined_category_id=$ab__ia_join.joined_category_id}
</td>
</tr>
</tbody>
{/foreach}
{math equation="x + 1" assign="num_rule" x=$num_rule|default:0}{assign var="r" value=""}
{if !$rules}
<tbody class="hover cm-row-item " id="box_add_rule_{$join_id}">
<tr style="border-top: 2px solid #888">
<td class="cm-non-cb">
<input type="text" name="{$e_n}[{$num_rule}][position]" value="0" size="3" class="input-micro" />
<input type="hidden" name="{$e_n}[{$num_rule}][rule_id]" value="0"/>
</td>
<td class="cm-non-cb">
<input type="text" name="{$e_n}[{$num_rule}][name]" value="" class="input-medium" />
</td>
<td class="cm-non-cb">
<select name="{$e_n}[{$num_rule}][max_view_products]" class="input-small">
{foreach from=1|range:$smarty.const.AB__IA_RULE_MAX_VIEW_PRODUCTS item='i'}
<option value="{$i}" {if $i == $addons.ab__intelligent_accessories.rule_max_view_products_default} selected="selected"{/if}>{$i}</option>
{/foreach}
</select>
</td>
<td class="cm-non-cb">
{include file="common/select_status.tpl" input_name="{$e_n}[`$num_rule`][status]" display="select" meta="input-small"}
</td>
<td>
<span id="on_extra_join_rules_{$join_id}_{$num_rule}" title="{__("expand_collapse_list")}" class="hand cm-combination-options-{$join_id}"><span class="exicon-expand"></span></span>
<span id="off_extra_join_rules_{$join_id}_{$num_rule}" title="{__("expand_collapse_list")}" class="hand hidden cm-combination-options-{$join_id}"><span class="exicon-collapse"></span></span>
<a id="sw_extra_join_rules_{$join_id}_{$num_rule}" class="cm-combination-options-{$join_id}">{__("ab__ia_conditions")}</a>
</td>
<td class="cm-non-cb">
&nbsp;
</td>
<td class="right cm-non-cb">
{include file="buttons/multiple_buttons.tpl" item_id="add_rule_`$join_id`" tag_level="2" on_add="Tygh.ab__ia.onAddRule(this)"}
</td>
</tr>
<tr id="extra_join_rules_{$join_id}_{$num_rule}" class="cm-ex-op hidden">
<td colspan="7">
{include file="addons/ab__intelligent_accessories/views/ab__ia_joins/components/conditions.tpl"
e_n_c="`$e_n`[`$num_rule`]"
rule_id=0
conditions=""
base_category_id=$ab__ia_join.base_category_id
joined_category_id=$ab__ia_join.joined_category_id}
</td>
</tr>
</tbody>
{/if}
</table>
