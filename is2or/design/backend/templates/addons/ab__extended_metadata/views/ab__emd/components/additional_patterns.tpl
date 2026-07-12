{include file="common/subheader.tpl" title=__("ab__emd.setting.header.additional_`$dispatch`") target="#ab__emd-setting_additional_`$tab_name`" notes=$smarty.capture.placeholders notes_id="additional_`$tab_name`"}
<div id="ab__emd-setting_additional_{$tab_name}" class="table-responsive-wrapper collapse in">
<table class="table table-middle table-responsive">
<thead class="cm-first-sibling">
<tr>
<th width="5%">{__("ab__emd.form.pattern.name")}</th>
<th width="50%">{__("ab__emd.setting.`$dispatch`.page_title")}</th>
<th width="50%">{__("ab__emd.setting.`$dispatch`.meta_description")}</th>
<th width="50%">{__("ab__emd.setting.`$dispatch`.meta_keywords")}</th>
<th width="15%">&nbsp;</th>
</tr>
</thead>
{foreach from=$ab__emd_patterns.$object item="pattern" key="_key"}
<tbody class="cm-row-item">
<tr>
<td data-th="{__('ab__emd.form.pattern.name')}">
<input type="hidden" name="ab__emd_patterns[{$object}][{$_key}][pattern_id]" value="{$pattern.pattern_id}" />
<input type="text" name="ab__emd_patterns[{$object}][{$_key}][name]" value="{$pattern.name}" class="input-large" />
</td>
<td data-th="{__("ab__emd.setting.`$object`_title_pattern")}">
<textarea name="ab__emd_patterns[{$object}][{$_key}][page_title]">{$pattern.page_title}</textarea>
</td>
<td data-th="{__("ab__emd.setting.`$object`_description_pattern")}">
<textarea name="ab__emd_patterns[{$object}][{$_key}][meta_description]">{$pattern.meta_description}</textarea>
</td>
<td data-th="{__("ab__emd.setting.`$object`_keywords_pattern")}">
<textarea name="ab__emd_patterns[{$object}][{$_key}][meta_keywords]">{$pattern.meta_keywords}</textarea>
</td>
<td class="nowrap right">
{include file="buttons/clone_delete.tpl" microformats="cm-delete-row" no_confirm=true}
</td>
</tr>
</tbody>
{/foreach}
{math equation="x+1" x=$_key|default:0 assign="new_key"}
<tbody id="box_add_ab__emd_{$object}_pattern">
<tr class="{cycle values="table-row , " reset=1}">
<td data-th="{__('ab__emd.form.pattern.name')}">
<input type="hidden" name="ab__emd_patterns[{$object}][{$new_key}][pattern_id]" value="" />
<input type="text" name="ab__emd_patterns[{$object}][{$new_key}][name]" value="" class="input-large" />
</td>
<td data-th="{__("ab__emd.setting.`$dispatch`.page_title")}"><textarea name="ab__emd_patterns[{$object}][{$new_key}][page_title]"></textarea></td>
<td data-th="{__("ab__emd.setting.`$dispatch`.meta_description")}"><textarea name="ab__emd_patterns[{$object}][{$new_key}][meta_description]"></textarea></td>
<td data-th="{__("ab__emd.setting.`$dispatch`.meta_keywords")}"><textarea name="ab__emd_patterns[{$object}][{$new_key}][meta_keywords]"></textarea></td>
<td></td>
<td class="right">
{include file="buttons/multiple_buttons.tpl" item_id="add_ab__emd_`$object`_pattern"}
</td>
</tr>
</tbody>
</table>
</div>