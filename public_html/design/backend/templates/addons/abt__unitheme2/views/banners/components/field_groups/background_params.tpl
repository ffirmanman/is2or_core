<h4 class="ty-subheader">{__("abt__ut2.banner.background")}</h4>
{** Control the type of background image **}
{$field="background_type"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
{$bg_type_field = $elm}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}" onchange="fn_ab__ut2_change_bg_type(this)">
<option value="image"{if $banner.{$bg_type_field}|default:"image" == "image"} selected{/if}>{__("ab__ut2.banners.background_type.image")}</option>
<option value="mp4_video"{if $banner.{$bg_type_field} == "mp4_video"} selected{/if}>{__("ab__ut2.banners.background_type.mp4_video")}</option>
</select>
</div>
</div>
<script>
function fn_ab__ut2_change_bg_type(elem)
{
var val = elem.value;
var clear_id_part = elem.id.slice(0, -('background_type'.length));
var image_wrap = $('#' + clear_id_part + 'background_image').parents('.control-group');
var mp4_wrap = $('#' + clear_id_part + 'background_mp4_video').parents('.control-group');
var bg_image_size = $('#' + clear_id_part + 'background_image_size').parents('.control-group');
var bg_image_position = $('#' + clear_id_part + 'background_image_position').parents('.control-group');
if (val === 'image') {
image_wrap.removeClass('hidden');
mp4_wrap.addClass('hidden');
bg_image_size.removeClass('hidden');
bg_image_position.removeClass('hidden');
} else if (val === 'mp4_video') {
image_wrap.addClass('hidden');
mp4_wrap.removeClass('hidden');
bg_image_size.addClass('hidden');
bg_image_position.addClass('hidden');
}
}
function fn_abt__ut2_change_products_template(e, device){
let val = e.value
const changes = {
grid_items : `small_items${ device }, .object-products.links_thumb${ device }`,
small_items: `links_thumb${ device }, .object-products.grid_items${ device }`,
links_thumb: `small_items${ device }, .object-products.grid_items${ device }`
}
$('.object-products.' + val+device).removeClass('hidden');
$('.object-products.' + changes[val]).addClass('hidden');
}
</script>
{$field="background_image"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner.{$bg_type_field}|default:"image" != "image"} hidden{/if}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<div id="elm_banner_{$elm}">
{include file="common/attach_images.tpl" image_name=$elm image_object_type="abt__ut2_banners" image_type="ImagePairTypes::ADDITIONAL"|enum image_pair=$banner.$elm image_object_id=$banner.abt__ut2_banner_image_id no_detailed=true hide_alt=true hide_titles=true}
</div>
</div>
</div>
{$field="background_mp4_video"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group{if $banner.{$bg_type_field}|default:"image" != "mp4_video"} hidden{/if}">
<label class="control-label">{__("abt__ut2.banner.params.background_mp4_video")}:</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="elm_banner_{$elm}" class="controls">
{if $banner.$elm}
<div style="width: 100%;" class="upload-file-section">
<p>
{$video_path = urlencode($banner.$elm)}
<a href="{"banners.delete_ut2_video?video_path=$video_path&banner_id=`$banner.banner_id`&type=$elm&redirect_url={$config.current_url|urlencode}"|fn_url}" class="image-delete cm-confirm cm-post delete cm-delete-image-link cm-tooltip" title="{__("delete")}"><span class="ty-icon ty-icon-cancel-circle"></span></a>
<span class="upload-filename">{$banner.$elm}</span>
</p>
</div>
{/if}
{include file="common/fileuploader.tpl" var_name="`$elm`[0]" prefix=$elm allowed_ext="mp4"}
</div>
</div>
{$field="background_image_size"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{foreach ['cover', 'contain'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{$field="background_color"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label ">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="addons/abt__unitheme2/views/banners/components/colorpicker.tpl"}
</div>
</div>
<div class="control-group">
{$field="background_v_position"}
{$elm="abt__ut2`$device_prefix`_`$field`"}
{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group abt__ut2_vertical_background_align">
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
{$field="background_h_position"}
{$elm="abt__ut2`$device_prefix`_`$field`"}
{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="abt__ut2_horizontal_background_align">
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