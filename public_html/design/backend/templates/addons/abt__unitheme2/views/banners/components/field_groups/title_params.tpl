<h4 class="ty-subheader">{__("abt__ut2.banner.params_of_title")}</h4>
{$field="title"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls cm-trim abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="text" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="{$banner.$elm}" size="25" class="span10"/>
<p class="muted description">
<span style="opacity: 0.7">{__("abt__banner_title_presets")}:</span><br>
{foreach [__("abt__ut2.banner.pre_title") => '<small>Pre...</small>Title ...', __("abt__ut2.banner.another_color") => '<span style="color: red">Text..</span>', __("abt__ut2.banner.thin_font") => '<i>Text..</i>', __("abt__ut2.banner.new_row") => '<br>']
as $classes}
<input type="checkbox"
id="{$name}_{$classes@key}"
{if $banner.$elm && $banner.$elm|strpos:$classes !== false}checked="checked"{/if}
class="cm-text-toggle btn-group-checkbox__checkbox"
data-ca-toggle-text="{$classes}"
data-ca-toggle-text-target-elem-id="elm_banner_{$elm}"
/>
<label class="btn btn-group-checkbox__label" for="{$name}_{$classes@key}">
{$classes@key}
</label>
{/foreach}
</p>
</div>
</div>
{$field="title_font_size"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls cm-trim abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="text" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="{$banner.$elm|default:"24px"}" size="25" class="input-mini"/>
</div>
</div>
{$field="title_color"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label ">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="addons/abt__unitheme2/views/banners/components/colorpicker.tpl"}
</div>
</div>
{$field="title_font_weight"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label ">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{foreach ['900', '700', '400', '300'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{$field="title_tag"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label ">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{foreach ['div', 'h1', 'h2', 'h3'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{$field="title_shadow"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="hidden" name="banner_data[{$elm}]" value="N"/>
<input type="checkbox" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="Y" {if $banner.$elm == "YesNo::YES"|enum}checked="checked"{/if}/>
</div>
</div>