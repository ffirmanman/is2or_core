{$rand=rand()}
{$prefix=$prefix|default:"template_data"}
{if !$no_template_id}
<input type="hidden" name="{$prefix}[template_id]" value="{$template_data.template_id|default:0}">
{/if}
<input type="hidden" name="{$prefix}[is_global]" value="{$template_data.is_global|default:"Y"}">
<input type="hidden" name="{$prefix}[object_id]" value="{$template_data.object_id|default:0}">
<input type="hidden" name="{$prefix}[object_type]" value="{$template_data.object_type|default:""}">
<div class="control-group">
<label class="control-label cm-required" for="template_name_{$rand}">{__("ab__gp.template.template_name")}</label>
<div class="controls">
<input id="template_name_{$rand}" type="text" name="{$prefix}[template_name]" value="{$template_data.template_name}">
</div>
</div>
<div class="control-group">
<label class="control-label" for="name_{$rand}">{__("ab__gp.template.name")}</label>
<div class="controls">
<input id="name_{$rand}" type="text" name="{$prefix}[name]" value="{$template_data.name}">
</div>
</div>
<div class="control-group ">
<label class="control-label" for="description_{$rand}">{__("ab__gp.template.description")}</label>
<div class="controls">
<textarea id="description_{$rand}" name="{$prefix}[description]"
cols="55" rows="8"
class="cm-wysiwyg input-textarea-long">{$template_data.description}</textarea>
</div>
</div>
<div class="control-group ">
<label class="control-label" for="title_{$rand}">{__("ab__gp.template.title")}</label>
<div class="controls">
<textarea id="title_{$rand}" name="{$prefix}[title]"
cols="55" rows="2"
class="input-textarea-long">{$template_data.title}</textarea>
</div>
</div>
<div class="control-group ">
<label class="control-label" for="meta_description_{$rand}">{__("ab__gp.template.meta_description")}</label>
<div class="controls">
<textarea id="meta_description_{$rand}" name="{$prefix}[meta_description]"
cols="55" rows="2"
class="input-textarea-long">{$template_data.meta_description}</textarea>
</div>
</div>