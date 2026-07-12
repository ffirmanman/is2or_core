{if 'ab__so_noindex_tech_pages.view'|fn_check_view_permissions}
{include file="common/subheader.tpl" title=__("ab__so_noindex_tech_pages") target="#ab__so_ntp_category_setting"}
<div id="ab__so_ntp_category_setting" class="in collapse {if !'ab__so_noindex_tech_pages.manage'|fn_check_view_permissions}cm-hide-inputs{/if}">
{if (fn_get_runtime_company_id() && "ULTIMATE"|fn_allowed_for) || "MULTIVENDOR"|fn_allowed_for}
<fieldset>
{assign var="ab__so_ntp_index_data" value=$category_data.category_id|fn_ab__so_ntp_get_index_data:'category'}
{include file="addons/ab__so_noindex_tech_pages/components/object_settings.tpl" prefix="category_data" data=$ab__so_ntp_index_data}
<div class="ty-control-group">
<label class="control-label" for="ab__canonical_id">{__('ab__so_ntp.form.canonical')}{include file="common/tooltip.tpl" tooltip=__('ab__so_ntp.tooltip.from_4.3.6')}:</label>
<div class="controls">
{if 'ab__so_noindex_tech_pages.manage'|fn_check_view_permissions}
{include file="pickers/categories/picker.tpl" data_id="ab__canonical_id" item_ids=$ab__so_ntp_index_data.canonical_id|default:$category_data.category_id input_name="category_data[ab__so_ntp_index_data][canonical_id]" but_text=__("ab__so_ntp.form.canonical.category")}
<div>
{include file="addons/ab__so_noindex_tech_pages/components/reset_button.tpl" object_id=$category_data.category_id prefix="c"}
</div>
{else}
{$ab__so_ntp_index_data.canonical_id|default:$category_data.category_id|fn_get_category_name nofilter}
{/if}
</div>
</div>
</fieldset>
{else}
<label class="control-label">{__('ab__so_ntp.form.chose_frontstore')}</label>
{/if}
</div>
{/if}