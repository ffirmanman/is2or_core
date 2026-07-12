{capture name="mainbox"}
<div class="table-responsive-wrapper">
<table class="table table-middle table--relative table-responsive" width="100%">
<thead>
<tr>
<th width="33%">{__('feature_name')}</th>
<th width="33%">{__('variant_name')}</th>
<th width="34%">{__('ab__ch1.feature_variant')}</th>
</tr>
</thead>
<tbody>
{foreach $entered_features_variants as $feature}
{foreach $feature.variants as $feature_variant}
<tr>
<td data-th="{__('feature_name')}">
<a href="{"product_features.update&feature_id={$feature.feature_id}"|fn_url}" target="_blank">{$feature.description}</a>
</td>
<td data-th="{__('variant_name')}">
{if $addons.ab__seo_brands.status == 'A'}<a href="{"ab__sb_feature_variants.update&variant_id={$feature_variant.variant_id}"|fn_url}" target="_blank">{/if}
{$feature_variant.variant}
{if $addons.ab__seo_brands.status == 'A'}</a>{/if}
</td>
<td data-th="{__('ab__ch1.feature_variant')}">
{$feature_variant.ab__custom_feature_variant_h1}
</td>
</tr>
{foreachelse}
<tr class="ty-table__no-items">
<td colspan="3"><p class="ty-no-items">{__("no_items")}</p></td>
</tr>
{/foreach}
{foreachelse}
<tr class="ty-table__no-items">
<td colspan="3"><p class="ty-no-items">{__("no_items")}</p></td>
</tr>
{/foreach}
</tbody>
</table>
</div>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__custom_h1"}
{include file="common/mainbox.tpl"
title_start=__("ab__custom_h1")|truncate:40
title_end=__("ab__ch1.features_list")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
sidebar=$smarty.capture.sidebar
select_languages=true
}
