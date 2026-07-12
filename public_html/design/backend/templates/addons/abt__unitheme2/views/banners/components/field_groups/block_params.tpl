<h4 class="ty-subheader">{__("abt__ut2.banner.params_of_block")}</h4>
{$field="color_scheme"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label ">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{foreach ['light', 'dark'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{$field="content_valign"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
<option value="top" {if $banner.$elm == 'top'}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.top")}</option>
<option value="center" {if $banner.$elm == 'center' || !$banner.$elm} selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.center")}</option>
<option value="bottom" {if $banner.$elm == 'bottom'}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.bottom")}</option>
</select>
</div>
</div>
{$field="content_align"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
<option value="left" {if $banner.$elm == 'left'}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.left")}</option>
<option value="center" {if $banner.$elm == 'center' || !$banner.$elm}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.center")}</option>
<option value="right" {if $banner.$elm == 'right'}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.right")}</option>
</select>
</div>
</div>
{$field="padding"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{$explode_pd = explode(" ", $banner.$elm|default:"")}
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls cm-trim abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<span style="opacity: 0.5">{__("abt__ut2.banner.params.padding.label.top")}:</span>
<input type="text" name="pd_top_{$elm}" id="pd_top_{$elm}" value="{$explode_pd.0|default:"20px"}" size="5"/>
<span style="opacity: 0.5">{__("abt__ut2.banner.params.padding.label.right")}:</span>
<input type="text" name="pd_right_{$elm}" id="pd_right_{$elm}" value="{$explode_pd.1|default:"20px"}" size="5"/>
<span style="opacity: 0.5">{__("abt__ut2.banner.params.padding.label.bottom")}:</span>
<input type="text" name="pd_bottom_{$elm}" id="pd_bottom_{$elm}" value="{$explode_pd.2|default:"20px"}" size="5"/>
<span style="opacity: 0.5">{__("abt__ut2.banner.params.padding.label.left")}:</span>
<input type="text" name="pd_left_{$elm}" id="pd_left_{$elm}" value="{$explode_pd.3|default:"20px"}" size="5"/>
<input type="hidden" name="banner_data[{$elm}]" id="elm_banner_{$elm}" size="25"/>
<span class="muted description">{__("abt__ut2.banner.params.padding.label")}</span><br>
</div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
const pd_top = document.getElementById('pd_top_{$elm}');
const pd_right = document.getElementById('pd_right_{$elm}');
const pd_bottom = document.getElementById('pd_bottom_{$elm}');
const pd_left = document.getElementById('pd_left_{$elm}');
const combinedValues = document.getElementById('elm_banner_{$elm}');
function updateHiddenInput() {
combinedValues.value = pd_top.value + " " + pd_right.value + " " + pd_bottom.value + " " + pd_left.value;
}
pd_top.addEventListener('input', updateHiddenInput);
pd_right.addEventListener('input', updateHiddenInput);
pd_bottom.addEventListener('input', updateHiddenInput);
pd_left.addEventListener('input', updateHiddenInput);
updateHiddenInput();
});
</script>
{$field="content_full_width"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="hidden" name="banner_data[{$elm}]" value="N"/>
<input type="checkbox" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="Y" {if $banner.$elm == "YesNo::YES"|enum}checked="checked"{/if}/>
</div>
</div>