<h4 class="ty-subheader">{__("abt__ut2.banner.internal_content")}</h4>
{** Control the type of internal image **}
<script>
function fn_change_object_type{$device_prefix}(v) {
var img_obj = $('.control-group.object-image{$device_prefix}');
var vd_obj = $('.control-group.object-video{$device_prefix}');
var pr_obj = $('.control-group.object-products{$device_prefix|default:':not([class*="tablet"],[class*="mobile"])' nofilter}');
switch (v){
case 'image':
img_obj.removeClass('hidden');
vd_obj.addClass('hidden');
pr_obj.addClass('hidden');
break;
case 'video':
img_obj.addClass('hidden');
vd_obj.removeClass('hidden');
pr_obj.addClass('hidden');
break;
case 'products':
img_obj.addClass('hidden');
vd_obj.addClass('hidden');
pr_obj.removeClass('hidden');
fn_abt__ut2_change_products_template(document.getElementById('elm_banner_abt__ut2{$device_prefix}_products_template'),'{$device_prefix}')
break;
}
}
</script>
{$field="object"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label ">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}" onchange="fn_change_object_type{$device_prefix}(this.value);">
{foreach ["image", "video", "products"] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{$field="main_image"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner["abt__ut2`$device_prefix`_object"] != 'image' && $banner.banner_id} hidden{/if} object-image{$device_prefix}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<div id="elm_banner_{$elm}">
{include file="common/attach_images.tpl" image_name=$elm image_object_type="abt__ut2_banners" image_type="ImagePairTypes::MAIN"|enum image_pair=$banner.$elm image_object_id=$banner.abt__ut2_banner_image_id no_detailed=true hide_titles=true}
</div>
</div>
</div>
{$field="youtube_id"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner["abt__ut2`$device_prefix`_object"] != 'video'} hidden{/if} object-video{$device_prefix}">
<label for="elm_banner_{$elm}" class="control-label cm-trim {$elm}">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="text" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="{$banner.$elm}" size="25" class="span4"/>
<div class="img" style="margin-top: 10px">
{if strlen($banner.$elm)}
{if fn_abt__ut2_check_youtube_id($banner.$elm)}
<img src="https://img.youtube.com/vi/{$banner.$elm}/mqdefault.jpg" style="width: 160px;" alt="{$banner.$elm}">
{else}
<span class="alert">{__('Error')}</span>
{/if}
{/if}
</div>
</div>
</div>
{$field="youtube_autoplay"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
{*Value 0 (default): The video will not play automatically when the player loads.*}
{*Value 1: The video will play automatically when the player loads.*}
<div class="control-group{if $banner["abt__ut2`$device_prefix`_object"] != 'video'} hidden{/if} object-video{$device_prefix}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="hidden" name="banner_data[{$elm}]" value="N"/>
<input type="checkbox" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="Y" {if $banner.$elm == "YesNo::YES"|enum}checked="checked"{/if}/>
</div>
</div>
{$field="youtube_hide_controls"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
{*Value 0: Player controls does not display.*}
{*Value 1 (default): Player controls display.*}
<div class="control-group{if $banner["abt__ut2`$device_prefix`_object"] != 'video'} hidden{/if} object-video{$device_prefix}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="hidden" name="banner_data[{$elm}]" value="N"/>
<input type="checkbox" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="Y" {if $banner.$elm == "YesNo::YES"|enum}checked="checked"{/if}/>
</div>
</div>
{$field="products_template"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner["abt__ut2`$device_prefix`_object"] != 'products'} hidden{/if} object-products{$device_prefix}">
<label for="elm_banner_{$elm}_{$field}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}" onchange="fn_abt__ut2_change_products_template(this, '{$device_prefix}')">
<option value="grid_items"{if $banner.$elm === "grid_items"} selected{/if}>{__("abt__ut2.banner.{$field}.grid_items")}</option>
<option value="small_items"{if $banner.$elm === "small_items"} selected{/if}>{__("abt__ut2.banner.{$field}.small_items")}</option>
<option value="links_thumb"{if $banner.$elm === "links_thumb"} selected{/if}>{__("abt__ut2.banner.{$field}.links_thumb")}</option>
</select>
</div>
</div>
{$field="products_links_thumb_columns"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner["abt__ut2`$device_prefix`_object"] != 'products' || $banner.abt__ut2_products_template != 'links_thumb'} hidden{/if} object-products links_thumb{$device_prefix}">
<label for="elm_banner_{$elm}_{$field}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{for $i = 2 to 12}
<option value="{$i}"{if $banner.$elm == $i} selected{/if}>{$i}</option>
{/for}
</select>
</div>
</div>
{$field="products_links_thumb_rows"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner["abt__ut2`$device_prefix`_object"] != 'products' || $banner.abt__ut2_products_template != 'links_thumb'} hidden{/if} object-products links_thumb{$device_prefix}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
<option value="0"{if $banner.$elm == 0} selected{/if}>{__("abt__ut2.banner.params.{$field}.all")}</option>
<option value="1"{if $banner.$elm == 1} selected{/if}>{__("abt__ut2.banner.params.{$field}.one")}</option>
</select>
</div>
</div>
{$field="products_small_items_columns"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner["abt__ut2`$device_prefix`_object"] != 'products' || $banner.abt__ut2_products_template != 'small_items'} hidden{/if} object-products small_items{$device_prefix}">
<label for="elm_banner_{$elm}_{$field}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{for $i = 1 to 10}
<option value="{$i}"{if $banner.$elm == $i} selected{/if}>{$i}</option>
{/for}
</select>
</div>
</div>
{$field="products_small_items_rows"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner["abt__ut2`$device_prefix`_object"] != 'products' || $banner.abt__ut2_products_template != 'small_items'} hidden{/if} object-products small_items{$device_prefix}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
<option value="0"{if $banner.$elm == 0} selected{/if}>{__("abt__ut2.banner.params.{$field}.all")}</option>
<option value="1"{if $banner.$elm == 1} selected{/if}>{__("abt__ut2.banner.params.{$field}.one")}</option>
</select>
</div>
</div>
{$field="products_grid_columns"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner["abt__ut2`$device_prefix`_object"] != 'products' || $banner.abt__ut2_products_template != 'grid_items'} hidden{/if} object-products grid_items{$device_prefix}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{for $i = 1 to 10}
<option value="{$i}"{if $banner.$elm == $i} selected{/if}>{$i}</option>
{/for}
</select>
</div>
</div>
{$field="products_list"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner["abt__ut2`$device_prefix`_object"] != 'products' } hidden{/if} object-products{$device_prefix}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include
file="views/products/components/picker/picker.tpl"
item_ids=","|explode:$banner.$elm
multiple=true
view_mode="external"
show_positions=true
allow_clear=true
for_current_storefront=true
picker_id="elm_banner_{$elm}"
input_name="banner_data[{$elm}]"
}
</div>
<hr>
</div>
<div class="control-group">
{$field="image_v_position"}
{$elm="abt__ut2`$device_prefix`_`$field`"}
{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group abt__ut2_vertical_image_align">
{if !$banner.$elm}
{$banner.$elm = "center"}
{/if}
<label for="elm_banner_{$elm}" class="control-label{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls btn-group abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{foreach ['top', 'center', 'bottom'] as $e}
{assign var="radio_id" value="elm_banner_{$elm}_{$e}"}
<label for="{$radio_id}" class="btn"><i class="ut2-icon-align-vertical-{$e} cm-tooltip" title="{__("abt__ut2.banner.params.{$field}.variants.{$e}")}"></i><input type="radio" name="banner_data[{$elm}]" id="{$radio_id}" value="{$e}" {if $banner.$elm == $e}checked="checked"{/if} /></label>
{/foreach}
</div>
</div>
{$field="image_h_position"}
{$elm="abt__ut2`$device_prefix`_`$field`"}
{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group abt__ut2_horizontal_image_align">
{if !$banner.$elm}
{$banner.$elm = "center"}
{/if}
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls btn-group abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{foreach ['left', 'center', 'right'] as $e}
{assign var="radio_id" value="elm_banner_{$elm}_{$e}"}
<label for="{$radio_id}" class="btn"><i class="ut2-icon-align-horizontal-{$e} cm-tooltip" title="{__("abt__ut2.banner.params.{$field}.variants.{$e}")}"></i><input type="radio" name="banner_data[{$elm}]" id="{$radio_id}" value="{$e}" {if $banner.$elm == $e}checked="checked"{/if} /></label>
{/foreach}
</div>
</div>
</div>