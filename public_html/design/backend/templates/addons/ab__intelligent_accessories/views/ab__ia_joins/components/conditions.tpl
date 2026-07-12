{$multiple_operators = ["in", "nin"]}
{foreach from=['B','J'] item="t"}
{$current_cat_id=0}
{if $t == 'B'}
{$current_cat_id=$base_category_id}
<div class="type_of_conditions">
<div class="drop-grid">
{__("ab__ia_condition_base_products", ["[link]" => "categories.update&category_id=`$base_category_id`"|fn_url, "[name]" => $base_category_id|fn_get_category_name])}
</div>
<div class="drop-grid">
<select name="{$e_n_c}[conditions][{$t}][type]" onchange="fn_ab__ia_type_of_conditions($(this))">
<option {if isset($conditions.$t.type) and $conditions.$t.type == 'o'}selected="selected"{/if} value="o">{__("ab__ia_condition_base_products_with_options")}</option>
<option {if isset($conditions.$t.type) and $conditions.$t.type == 'c'}selected="selected"{/if} value="c">{__("ab__ia_condition_without_options")}</option>
</select>
{include file="common/tooltip.tpl" tooltip=__("ab__ia_fast_search")}
</div>
</div>
{/if}
{if $t == 'J'}
{$current_cat_id=$joined_category_id}
<div class="type_of_conditions">
<div class="drop-grid">
{__("ab__ia_condition_joined_products", ["[link]" => "categories.update&category_id=`$joined_category_id`"|fn_url, "[name]" => $joined_category_id|fn_get_category_name])}
</div>
<div class="drop-grid">
<select name="{$e_n_c}[conditions][{$t}][type]" onchange="fn_ab__ia_type_of_conditions($(this))">
<option {if isset($conditions.$t.type) and $conditions.$t.type == 'o'}selected="selected"{/if} value="o">{__("ab__ia_condition_joined_products_with_options")}</option>
<option {if isset($conditions.$t.type) and $conditions.$t.type == 'c'}selected="selected"{/if} value="c">{__("ab__ia_condition_without_options")}</option>
</select>
{include file="common/tooltip.tpl" tooltip=__("ab__ia_fast_search")}
</div>
</div>
{/if}
{assign var="e_n_cond" value="`$e_n_c`[conditions][`$t`][items]"}
{*Conditions*}
<table class="table table-middle ab__ai_conditions {if isset($conditions.$t.type) and $conditions.$t.type == 'c'}hidden{/if}">
{if isset($conditions.$t) and is_array($conditions.$t)}
{foreach from=$conditions.$t.items item="cond" name="fe_cond"}
{assign var="num_cond" value=$smarty.foreach.fe_cond.iteration}
{assign var="variants" value=""}
{$feature_is_numeric = false}
<tbody class="hover cm-row-item" id="cond_{$t}_{$rule_id}_{$num_cond}">
<tr>
<td class="cm-non-cb">
<select name="{$e_n_cond}[{$num_cond}][f]" onchange="fn_ab__ia_set_feature($(this), $(this).val(), {$current_cat_id|escape:javascript}, '{$t}')">
<option value="0">---</option>
{foreach from=$ab__ia_features.$t key="_k" item="v"}
{if $v.is_group}
<optgroup label="{$v.group}">
{foreach from=$v.items key="__k" item="__v"}
{assign var="selected" value=""}
{if $__k == $cond.f}
{assign var="selected" value="selected='selected'"}
{assign var="variants" value=$__v.variants}
{$feature_is_numeric=$__v.is_numeric}
{/if}
<option value="{$__k}" {$selected} {if $__v.is_numeric}data-ca-is-numeric="1"{/if}>{$__v.value}{if $__v.status != 'A'} {__("ab__ia_feature_not_active")}{/if}</option>
{/foreach}
</optgroup>
{else}
{assign var="selected" value=""}
{if $_k == $cond.f}
{assign var="selected" value="selected='selected'"}
{assign var="variants" value=$v.variants}
{$feature_is_numeric=$v.is_numeric}
{/if}
<option value="{$_k}" {$selected} {if $v.is_numeric}data-ca-is-numeric="1"{/if}>{$v.value}{if $v.status != 'A'} {__("ab__ia_feature_not_active")}{/if}</option>
{/if}
{/foreach}
</select>
</td>
<td class="cm-non-cb">
{if $feature_is_numeric}
{$operators = fn_ab__ia_get_available_operators()}
{else}
{$operators = fn_ab__ia_get_logical_operators()}
{/if}
<select class="ab__ia_operator" name="{$e_n_cond}[{$num_cond}][o]">
{* <option value="0">---</option>*}
{if $t === "J"}
<option class="corresponding_base" value="eq" {if $cond.v === "corresponding-base"}selected="selected"{/if}>{__('ab__ia.corresponding_base')}</option>
{/if}
{foreach from=$operators item="op"}
{assign var="l" value="ab__ia_operator_`$op`"}
<option value="{$op}" {if $cond.o == $op && $cond.v !== "corresponding-base"}selected="selected"{/if}>{__($l)}</option>
{/foreach}
</select>
</td>
<td class="cm-non-cb">
{$selected_variants = $cond.v}
{$multiple = ""}
{if in_array($cond.o, $multiple_operators)}
{$multiple = "multiple"}
{$selected_variants = explode(",",$cond.v)}
{/if}
<select {$multiple} class="ab__ia_variant{if $cond.v === "corresponding-base" || !$multiple} hide{/if}" name="{$e_n_cond}[{$num_cond}][v]">
<option value="0">---</option>
{foreach from=$variants key="k" item="v"}
<option value="{$k}" {if $k == $selected_variants || (is_array($selected_variants) && in_array($k, $selected_variants))}selected="selected"{/if}>{$v}</option>
{/foreach}
</select>
<input type="text" data-a-sep="" data-a-pad="false" class="{if $multiple || $cond.v === "corresponding-base"}hide{else}cm-numeric{/if}" name="{$e_n_cond}[{$num_cond}][v]" value="{$cond.v}">
</td>
<td class="right cm-non-cb">
{include file="buttons/multiple_buttons.tpl" item_id="cond_`$t`_`$rule_id`_`$num_cond`" tag_level="6" only_delete="Y"}
</td>
</tr>
</tbody>
{/foreach}
{/if}
{math equation="x + 1" assign="num_cond" x=$num_cond|default:0}
<tbody class="hover cm-row-item " id="box_add_cond_{$t}_{$rule_id}">
<tr>
<td class="cm-non-cb">
<select name="{$e_n_cond}[{$num_cond}][f]" onchange="fn_ab__ia_set_feature($(this), $(this).val(), {$current_cat_id|escape:javascript}, '{$t}')">
<option value="0">---</option>
{foreach from=$ab__ia_features.$t key="_k" item="v"}
{if $v.is_group}
<optgroup label="{$v.group}">
{foreach from=$v.items key="__k" item="__v"}
<option value="{$__k}">{$__v.value}{if $__v.status != 'A'} {__("ab__ia_feature_not_active")}{/if}</option>
{/foreach}
</optgroup>
{else}
<option value="{$_k}">{$v.value}{if $v.status != 'A'} {__("ab__ia_feature_not_active")}{/if}</option>
{/if}
{/foreach}
</select>
</td>
<td class="cm-non-cb">
<select class="ab__ia_operator " name="{$e_n_cond}[{$num_cond}][o]">
{* <option value="0">---</option>*}
{if $t === "J"}
<option class="corresponding_base" value="eq">{__('ab__ia.corresponding_base')}</option>
{/if}
{foreach from=$ab__ia_operators item="op"}
{assign var="l" value="ab__ia_operator_`$op`"}
<option value="{$op}">{__($l)}</option>
{/foreach}
</select>
</td>
<td class="cm-non-cb">
<select class="ab__ia_variant" name="{$e_n_cond}[{$num_cond}][v]">
<option value="0">---</option>
</select>
<input type="text" data-a-sep="" data-a-pad="false" class="hide" name="{$e_n_cond}[{$num_cond}][v]">
</td>
<td class="right cm-non-cb">
{include file="buttons/multiple_buttons.tpl" item_id="add_cond_`$t`_`$rule_id`" tag_level="6"}
</td>
</tr>
</tbody>
</table>
{/foreach}
