{foreach $locations as $location}
{$block_title = $location.location}
{$disable_indexation_settings = $addons.ab__so_noindex_tech_pages.status != "A" && $addons.ab__advanced_sitemap.status != "A" }
{if $location.status === "D"}
{$block_title = $block_title|cat:"({__("off")})"}
{/if}
{$template_data = []}
{$hidden_class = ""}
{$no_template_id = true}
{$_template_data = $templates[$object_location_settings[$location.location_id]['template_id']]}
{if $_template_data['is_global'] == 'N'}
{$template_data = $_template_data}
{$no_template_id = false}
{else}
{$hidden_class = "hidden"}
{/if}
{include file="common/subheader.tpl" title=$block_title target="#ab__gp_location_{$location.location_id}"}
<div id="ab__gp_location_{$location.location_id}" class="in collapse control-group">
<div class="control-group">
<a href="{"`$preview_prefix`&ab__gp_location_id=`$location.location_id`"|fn_url:"C"}" target="_blank">{__("preview")}</a>
</div>
<div class="control-group">
<label class="control-label" for="ab__gp_location_template_enable">{__("ab__gp.template.enable")}</label>
<div class="controls">
<input type="hidden" name="{$prefix}[ab__gp_object_location_settings][{$location.location_id}][enable]" value="N">
<input type="checkbox" name="{$prefix}[ab__gp_object_location_settings][{$location.location_id}][enable]" id="ab__gp_location_template_enable" value="Y"{if $object_location_settings[$location.location_id]["enable"] === "Y"} checked="checked"{/if} />
</div>
</div>
<div>
<div class="control-group">
<label class="control-label" for="ab__gp_location_template_is_noindex">{__("ab__gp.template.is_noindex")}</label>
<div class="controls">
<input type="hidden" name="{$prefix}[ab__gp_object_location_settings][{$location.location_id}][is_noindex]" value="N" {if $disable_indexation_settings}disabled{/if}>
<input type="checkbox" name="{$prefix}[ab__gp_object_location_settings][{$location.location_id}][is_noindex]" id="ab__gp_location_template_is_noindex" value="Y"{if $object_location_settings[$location.location_id]["is_noindex"] === "Y"} checked="checked"{/if} {if $disable_indexation_settings}disabled{/if} />
<p class="muted description">{__("ab__gp.seo_addons_dependency")}</p>
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__gp_location_template_canonical_id">{__("ab__gp.template.canonical_id")}</label>
<div class="controls">
<input type="text" name="{$prefix}[ab__gp_object_location_settings][{$location.location_id}][canonical_id]" value="{$object_location_settings[$location.location_id]["canonical_id"]}" {if $disable_indexation_settings}disabled{/if}>
<p class="muted description">{__("ab__gp.seo_addons_dependency")}</p>
</div>
</div>
</div>
<label class="control-label" for="ab__gp_location_template_{$location.location_id}">
{__("ab__gp.template.select_template")}:
</label>
<div class="controls">
<select class="cm-ab--gp-template-selector" name="{$prefix}[ab__gp_object_location_settings][{$location.location_id}][template_id]" id="ab__gp_location_template_{$location.location_id}">
<option value="0">{__("ab__gp.template.default")}</option>
<option value="custom" {if $template_data.is_global == "N"}selected{/if}>{__("ab__gp.template.custom")}</option>
{if $templates}
<optgroup label="{__("ab__gp.template.existent_templates")}">
{foreach $templates as $template}
{if $template.is_global == "Y"}
<option value="{$template.template_id}" {if $object_location_settings[$location.location_id]["template_id"] == $template.template_id}selected{/if}>{$template.template_name}</option>
{/if}
{/foreach}
</optgroup>
{/if}
</select>
</div>
<div class="{$hidden_class} cm-skip-validation ab--gp-template-form">
{include
file="addons/ab__geo_pages/views/ab__gp_templates/components/category_templates.tpl"
prefix="`$prefix`[ab__gp_object_location_settings][`$location.location_id`]"
no_template_id=$no_template_id
}
</div>
</div>
{/foreach}
<script>
(function(_, $){
$(_.doc).on('change', '.cm-ab--gp-template-selector', function(e){
let elem = e.target
.parentNode
.parentNode
.querySelector('.ab--gp-template-form');
elem.querySelectorAll('input').forEach((i)=>{
if(e.target.value !== 'custom'){
i.setAttribute('disabled','disabled');
}else{
i.removeAttribute('disabled');
}
})
elem.classList.toggle('hidden', e.target.value !== 'custom');
elem.classList.toggle('cm-skip-validation', e.target.value !== 'custom');
});
})(Tygh, Tygh.$);
</script>