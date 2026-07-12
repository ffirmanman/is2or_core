{if 'ab__so_noindex_tech_pages.view'|fn_check_view_permissions}
{include file="common/subheader.tpl" title=__("ab__so_noindex_tech_pages") target="#ab__so_ntp_product_feature_setting_`$num`"}
<div id="ab__so_ntp_product_feature_setting_{$num}" class="in collapse {if !'ab__so_noindex_tech_pages.manage'|fn_check_view_permissions}cm-hide-inputs{/if}">
{if (fn_get_runtime_company_id() && "ULTIMATE"|fn_allowed_for) || "MULTIVENDOR"|fn_allowed_for}
<fieldset>
{assign var="ab__so_ntp_index_data" value=$var.variant_id|fn_ab__so_ntp_get_index_data:'product_feature'}
{include file="addons/ab__so_noindex_tech_pages/components/object_settings.tpl" prefix="feature_data[variants][`$num`]" data=$ab__so_ntp_index_data}
</fieldset>
{/if}
</div>
{/if}