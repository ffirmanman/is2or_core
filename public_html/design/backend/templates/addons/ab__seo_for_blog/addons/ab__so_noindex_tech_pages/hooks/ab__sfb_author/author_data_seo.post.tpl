{if 'ab__so_noindex_tech_pages.view'|fn_check_view_permissions}
{include file="common/subheader.tpl" title=__("ab__so_noindex_tech_pages") target="#ab__so_ntp_ab__sfb_setting"}
<div id="ab__so_ntp_ab__sfb_setting" class="in collapse {if !'ab__so_noindex_tech_pages.manage'|fn_check_view_permissions}cm-hide-inputs{/if}">
{if (fn_get_runtime_company_id() && "ULTIMATE"|fn_allowed_for) || "MULTIVENDOR"|fn_allowed_for}
<fieldset>
{assign var="ab__so_ntp_index_data" value=$author_data.author_id|fn_ab__so_ntp_get_index_data:'ab__sfb_author'}
{include file="addons/ab__so_noindex_tech_pages/components/object_settings.tpl" prefix="author_data" data=$ab__so_ntp_index_data}
{capture name="canonical_selector_title"}
{__('ab__so_ntp.form.canonical')}{include file="common/tooltip.tpl" tooltip=__('ab__so_ntp.tooltip.from_4.3.6')}
{/capture}
{include
file="addons/ab__seo_for_blog/views/ab__sfb_authors/components/author_selector.tpl"
title=$smarty.capture.canonical_selector_title
id="author_id"
input_name="author_data[ab__so_ntp_index_data][canonical_id]"
selected_author=$ab__so_ntp_index_data.canonical_id
disabled=!'ab__so_noindex_tech_pages.manage'|fn_check_view_permissions
}
</fieldset>
{else}
<label class="control-label">{__('ab__so_ntp.form.chose_frontstore')}</label>
{/if}
</div>
{/if}