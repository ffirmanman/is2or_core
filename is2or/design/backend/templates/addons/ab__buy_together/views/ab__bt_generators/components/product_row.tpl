{$section_id = $section_id|default:"ab__bt-base_products"}
{$title = $title|default:__("ab__bt.form.header.base_products")}
{$name_prefix = $name_prefix|default:"item_data[base_products]"}
<tbody class="{if !$base_product}sortable{/if}{if $base_product}base-product{/if}">
{$data_id = rand()}
<tr>
<td>
{if !$base_product}<span class="handler"></span>{/if}
</td>
<td class="ab-bt-combination-title">
<i id="on_{$section_id}" class="hand cm-combination icon-caret-right"></i>
<i id="off_{$section_id}" class="hand cm-combination hidden icon-caret-down"></i>
<a id="sw_{$section_id}" class="cm-combination">{$title}</a>
</td>
<td class="ab-bt-combination-additional-title">
<span class="muted-label">[{$smarty.const.CART_LANGUAGE}]:</span>
<input class="input-full-width{if $base_product} ab-bt-transparent{/if}" name="{$name_prefix}[translates][{$smarty.const.CART_LANGUAGE}][title]" value="{$pickers_data.translates[$smarty.const.CART_LANGUAGE].title}" type="text">
{if !$base_product}
{capture name="additional_langs"}
{strip}
{foreach $languages as $item}
{if $smarty.const.CART_LANGUAGE == $item.lang_code}
{continue}
{/if}
<div class="ab-bt-additional-title">
<label for="additional_language_{$item.lang_code}_{$data_id}">[{$item.lang_code}]:</label>
<input class="input-full-width {if $base_product}ab-bt-transparent{/if}" id="additional_language_{$item.lang_code}_{$data_id}" name="{$name_prefix}[translates][{$item.lang_code}][title]" value="{$pickers_data.translates[$item.lang_code].title}" type="text">
</div>
{/foreach}
{/strip}
{/capture}
{if $smarty.capture.additional_langs|trim}
<a id="sw_additional_languages_{$data_id}" class="btn cm-combination cm-tooltip" title="{__("ab__bt.form.header.additional_langs")}"><i class="icon-globe"></i></a>
<div id="additional_languages_{$data_id}" class="hidden">
{$smarty.capture.additional_langs nofilter}
</div>
{/if}
{/if}
</td>
<td class="center">
<input type="hidden" name="{$name_prefix}[required]" value="N">
<input type="checkbox" name="{$name_prefix}[required]" value="Y" {if $pickers_data.required|default:"Y" == "Y"}checked{/if} {if $base_product}checked disabled class="ab-bt-transparent" {/if}>
</td>
<td class="">
{if !$base_product}
{include file="buttons/remove_item.tpl" only_delete=true but_onclick="this.closest('tbody').remove()"}
{/if}
</td>
</tr>
<tr id="{$section_id}" class="no-hover hidden">
<td colspan="5" style="padding: 0 30px;">
<table class="table table-no-hover">
<tr>
<td class="no-border-td" width="10%" style="vertical-align: middle;">
<span>{__("products")}:</span>
</td>
<td width="85%" class="no-border-td">
{capture name="add_pickers"}
{if $addons.ab__intelligent_accessories.status == "A" && $type == "ia"}
<li class="{if $pickers_data.ab__ia_joins}disabled{/if}">{btn type="list" text=__("ab__bt.add_products_with_intelligent_accessories") data=["data-ca-type"=>"ab__ia_joins"] onclick="toggleVisibility(this)" process=true}</li>
{else}
<li class="{if $pickers_data.products}disabled{/if}">{btn type="list" text=__("ab__bt.add_products_with_picker") data=["data-ca-type"=>"products"] onclick="toggleVisibility(this)" process=true}</li>
<li class="{if $pickers_data.saved_search}disabled{/if}">{btn type="list" text=__("ab__bt.add_products_with_search") data=["data-ca-type"=>"saved_search"] onclick="toggleVisibility(this)" process=true}</li>
{/if}
{/capture}
{if $type == "ia" && $base_product}
<span class="muted">{__("ab__bt.products_will_be_added_from_joins")}.</span>
<br/>
<span class="ab__bt_ia_joins_list"></span>
{else}
{include
file="addons/ab__buy_together/views/ab__bt_generators/components/add_picker.tpl"
content=$smarty.capture.add_pickers
class="add_picker_container"
}
{/if}
</td>
<td class="no-border-td" width="10%"></td>
</tr>
{if $type == "ia" && $base_product}
{else}
{include
file="addons/ab__buy_together/views/ab__bt_generators/components/product_row_pickers.tpl"
data=$pickers_data
name_prefix=$name_prefix
}
{/if}
</table>
</td>
</tr>
</tbody>