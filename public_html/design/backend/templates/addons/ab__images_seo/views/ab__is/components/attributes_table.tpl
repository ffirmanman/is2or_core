{$alt_attr_type = "Tygh\Enum\Addons\Ab_imagesSeo\AttributeTypes::ALT"|constant}
{$title_attr_type = "Tygh\Enum\Addons\Ab_imagesSeo\AttributeTypes::TITLE"|constant}
{$image_number_attr_type = "Tygh\Enum\Addons\Ab_imagesSeo\AttributeTypes::IMAGE_NUMBER"|constant}
{if $show_number_input}
<div class="control-group">
<label class="control-label cm-required" for="ab__is_{$type}_{$image_number_attr_type}">{__("ab__is.image_number")}{include file="common/tooltip.tpl" tooltip=__('ab__is.image_number.tooltip')}:</label>
<div class="controls">
<input type="text" name="ab__is[{$type}][{$image_number_attr_type}][text]" title="ab__is.image_number.hint" id="ab__is_{$type}_{$image_number_attr_type}" value="{$attributes_data.$type.$image_number_attr_type.text|default:__('ab__is.image_number.default')}" size="25" class="cm-hint" />
<span class="ab__is-hint" style="position: relative;top: 5px;left: 10px">{__('ab__is.image_number.hint')}</span>
<input type="hidden" value="{$attributes_data.$type.$image_number_attr_type.is_id|default:0}" name="ab__is[{$type}][{$image_number_attr_type}][is_id]">
<input type="hidden" value="{$attributes_data.$type.$image_number_attr_type.prefix}" name="ab__is[{$type}][{$image_number_attr_type}][prefix]">
<input type="hidden" value="{$attributes_data.$type.$image_number_attr_type.suffix}" name="ab__is[{$type}][{$image_number_attr_type}][suffix]">
</div>
</div>
{/if}
<p>{__('ab__is.placeholders_list', ['[object]' => __("ab__is.placeholders_list.`$type`")])}</p>
<div class="table-responsive-wrapper">
<table class="table table-middle table--relative table-responsive ty-center" width="100%">
<thead>
<tr>
<th width="15%">{__('ab__is.attribute')}</th>
<th width="25%">{__('prefix')}</th>
<th width="35%">{__('text')}</th>
<th width="25%">{__('suffix')}</th>
</tr>
</thead>
<tbody>
{foreach [$alt_attr_type, $title_attr_type] as $attr_type}
<tr>
<td data-th="{__('ab__is.attribute')}">{__("ab__is.attribute.`$attr_type`")}</td>
<td data-th="{__('prefix')}"><input type="text" name="ab__is[{$type}][{$attr_type}][prefix]" value="{$attributes_data.$type.$attr_type.prefix}" class="input-large"></td>
<td data-th="{__('text')}">
<label for="ab__is_{$type}_{$attr_type}_text" class="cm-required hidden">{__('text')}:</label>
<input type="text" id="ab__is_{$type}_{$attr_type}_text" name="ab__is[{$type}][{$attr_type}][text]" value="{$attributes_data.$type.$attr_type.text|default:__("ab__is.text.{$type}")}" class="input-large">
</td>
<td data-th="{__('suffix')}"><input type="text" name="ab__is[{$type}][{$attr_type}][suffix]" value="{$attributes_data.$type.$attr_type.suffix}" class="input-large"></td>
<input type="hidden" value="{$attributes_data.$type.$attr_type.is_id|default:0}" name="ab__is[{$type}][{$attr_type}][is_id]">
</tr>
{/foreach}
</tbody>
</table>
</div>