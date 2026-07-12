<h4 class="ty-subheader">{__("abt__ut2.banner.params_of_description")}</h4>
{$field="description"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls cm-trim abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<textarea id="elm_banner_{$elm}" name="banner_data[{$elm}]" cols="35" rows="6" class="span10">{$banner.$elm}</textarea>
</div>
</div>
{$field="description_font_size"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls cm-trim abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="text" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="{$banner.$elm|default:"16px"}" size="25" class="input-small"/>
</div>
</div>
{$field="description_color"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label ">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="addons/abt__unitheme2/views/banners/components/colorpicker.tpl"}
</div>
</div>
{$field="description_bg_color"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label ">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="addons/abt__unitheme2/views/banners/components/colorpicker.tpl"}
</div>
</div>