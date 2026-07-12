{$device_prefix=''}
{if $device}
{$device_prefix="_`$device`"}
<div class="abt-ut2-doc">{__('abt__ut2.banner.warning')}</div>
{/if}
{if !empty($banner.banner_id)}
<div class="control-group">
<label for="elm_banner_preview" class="control-label">{__('abt__ut2.banners.preview')}</label>
<div class="controls">
<a href="{"banners.preview&banner_id=`$banner.banner_id`&device=`$device`"|fn_url}" target="_blank" class="btn btn-primary">{__('abt__ut2.banners.view_preview')}</a>
</div>
</div>
{/if}
{include file="addons/abt__unitheme2/views/banners/components/field_groups/block_params.tpl"}
<hr>
{include file="addons/abt__unitheme2/views/banners/components/field_groups/title_params.tpl"}
<hr>
{include file="addons/abt__unitheme2/views/banners/components/field_groups/description_params.tpl"}
<hr/>
{include file="addons/abt__unitheme2/views/banners/components/field_groups/internal_content.tpl"}
<hr>
{include file="addons/abt__unitheme2/views/banners/components/field_groups/background_params.tpl"}
<hr>
{include file="addons/abt__unitheme2/views/banners/components/field_groups/button_params.tpl"}
<hr>
{include file="addons/abt__unitheme2/views/banners/components/field_groups/additional_params.tpl"}
