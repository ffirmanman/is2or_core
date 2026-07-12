<h4 class="ty-subheader">{__("abt__ut2.banner.params_additional")}</h4>
{$field="content_bg"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
{$content_bg = $banner.$elm}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}" onchange="fn_change_content_bg($(this));">
{foreach ['none', 'transparent', 'transparent_blur', 'transparent_gradient', 'colored'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{$field="content_bg_position"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group {$field} {if !in_array($content_bg, ['transparent', 'transparent_blur', 'transparent_gradient', 'colored'])}hidden{/if}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{foreach ['only_under_content', 'full_height', 'whole_banner'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{$field="content_bg_align"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group {$field} {if !in_array($content_bg, ['transparent_gradient'])}hidden{/if}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{foreach ['auto', 'left_to_right', 'right_to_left', 'top_to_bottom', 'bottom_to_top', 'center'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{$field="content_bg_opacity"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group {$field} {if !in_array($content_bg, ['transparent', 'transparent_blur', 'transparent_gradient'])}hidden{/if}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{foreach range(5, 100, 5) as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{$e}%</option>
{/foreach}
</select>
</div>
</div>
{$field="content_bg_color"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group {$field} {if !in_array($content_bg, ['transparent', 'transparent_blur', 'transparent_gradient', 'colored'])}hidden{/if}">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}{include file="common/tooltip.tpl" tooltip=__("abt__ut2.banner.params.{$field}.tooltip")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="addons/abt__unitheme2/views/banners/components/colorpicker.tpl"}
</div>
</div>
{** content_bg **}
<script language="javascript">
function fn_change_content_bg(e) {
var $ = Tygh.$;
var position = $('.content_bg_position');
var align = $('.content_bg_align');
var opacity = $('.content_bg_opacity');
var color = $('.content_bg_color');
switch (e.val()) {
case 'none':
position.addClass('hidden');
align.addClass('hidden');
opacity.addClass('hidden');
color.addClass('hidden');
break;
case 'transparent':
position.removeClass('hidden');
align.addClass('hidden');
opacity.removeClass('hidden');
color.removeClass('hidden');
break;
case 'transparent_blur':
position.removeClass('hidden');
align.addClass('hidden');
opacity.removeClass('hidden');
color.removeClass('hidden');
break;
case 'transparent_gradient':
position.removeClass('hidden');
align.removeClass('hidden');
opacity.removeClass('hidden');
color.removeClass('hidden');
break;
case 'colored':
position.removeClass('hidden');
align.addClass('hidden');
opacity.addClass('hidden');
color.removeClass('hidden');
break;
}
}
</script>
<hr>
{$field="class"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div class="controls cm-trim"><div id="overlay_{$elm}" class="abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}"></div>
<input type="text" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="{$banner.$elm}" size="25" class="span10"/>
<p class="muted description">
<span style="opacity: 0.7">{__("abt__banner_extra_functional")}</span><br>
{foreach [
__("abt__ut2.banner.button_position_bottom") => 'b--button-position-bottom',
__("abt__ut2.banner.image_oversize") => 'b--image-zoom',
__("abt__ut2.banner.image_fit") => 'b--image-fit',
__("abt__ut2.banner.image_align_to_edge") => 'b--image-align-to-edge',
__("abt__ut2.banner.background_fading") => 'b--background-fading',
__("abt__ut2.banner.mask_margin") => 'b--mask-margin',
__("abt__ut2.banner.column") => 'b--in-columnar',
__("abt__ut2.banner.column_reverse") => 'b--column-reverse'
] as $classes}
<input type="checkbox"
id="{$elm}_{$classes@key}"
class="cm-text-toggle btn-group-checkbox__checkbox"
{if $banner.$elm && $banner.$elm|strpos:$classes !== false}checked="checked"{/if}
data-ca-toggle-text="{$classes}"
data-ca-toggle-text-target-elem-id="elm_banner_{$elm}"
/>
<label class="btn btn-group-checkbox__label" for="{$elm}_{$classes@key}">
{$classes@key}
</label>
{/foreach}
</p>
</div>
</div>
<hr>
{** data type / URL **}
{$field="data_type"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group hidden">
<label for="elm_banner_{$elm}" class="control-label{if $disabled || $banner["`$elm`_use_own"] == 'N'} disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}" onchange="Tygh.$('div[id*=data_type_]').addClass('hidden');Tygh.$('div[id*=data_type_' + this.value + ']').removeClass('hidden');">
{foreach ['url'] as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
<div id="data_type_url" class="{if $banner.abt__ut2_data_type|default:'url' != 'url'}hidden{/if}">
{$field="url"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label cm-trim {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="text" name="banner_data[{$elm}]" id="elm_banner_{$elm}" value="{$banner.$elm}" size="25" class="span10"/>
</div>
</div>
</div>
{$field="how_to_open"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{$how_to_opens=['in_this_window', 'in_new_window']}
<select name="banner_data[{$elm}]" id="elm_banner_{$elm}">
{foreach $how_to_opens as $e}
<option value="{$e}" {if $banner.$elm == $e}selected="selected"{/if}>{__("abt__ut2.banner.params.{$field}.variants.{$e}")}</option>
{/foreach}
</select>
</div>
</div>
{** Set banner activity period **}
<script language="javascript">
function fn_activate_calendar(el) {
Tygh.$('#elm_banner_abt__ut2_avail_from').prop('disabled', !el.checked);
Tygh.$('#elm_banner_abt__ut2_avail_till').prop('disabled', !el.checked);
if (!el.checked){
Tygh.$('#period_abt__ut2_avail_from,#period_abt__ut2_avail_till').addClass('hidden');
}else{
Tygh.$('#period_abt__ut2_avail_from,#period_abt__ut2_avail_till').removeClass('hidden');
}
}
</script>
{$field="use_avail_period"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
<input type="hidden" name="banner_data[{$elm}]" value="N"/>
<input type="checkbox" name="banner_data[{$elm}]" id="elm_banner_{$elm}" {if $banner.$elm == "YesNo::YES"|enum}checked="checked"{/if} value="Y" onclick="fn_activate_calendar(this);"/>
</div>
</div>
{capture name="calendar_disable"}{if $banner.$elm != "YesNo::YES"|enum}disabled="disabled"{/if}{/capture}
{$field="avail_from"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group {if $banner.abt__ut2_use_avail_period == 'N'}hidden{/if}" id="period_{$elm}">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="common/calendar.tpl" date_id="elm_banner_{$elm}" date_name="banner_data[{$elm}]" date_val=$banner.$elm start_year=$settings.Company.company_start_year extra=$smarty.capture.calendar_disable}
</div>
</div>
{$field="avail_till"}{$elm="abt__ut2`$device_prefix`_`$field`"}{$disabled=$field|fn_abt__ut2_is_disabled_field:$enabled_fields}
<div class="control-group {if $banner.abt__ut2_use_avail_period == 'N'}hidden{/if}" id="period_{$elm}">
<label for="elm_banner_{$elm}" class="control-label {if $disabled || $banner["`$elm`_use_own"] == 'N'}disabled{/if}">{__("abt__ut2.banner.params.{$field}")}</label>
{include file="addons/abt__unitheme2/views/banners/components/use_own.tpl"}
<div id="overlay_{$elm}" class="controls abt-ut2-overlay{if $disabled || $banner["`$elm`_use_own"] == 'N'} active{/if}">
{include file="common/calendar.tpl" date_id="elm_banner_{$elm}" date_name="banner_data[{$elm}]" date_val=$banner.$elm start_year=$settings.Company.company_start_year extra=$smarty.capture.calendar_disable}
</div>
</div>