{$company_name = $product.company_name}

{if "MULTIVENDOR"|fn_allowed_for && ($company_name || $company_id) && $settings.Vendors.display_vendor == "Y"}

{$block_company_description = $company_data.ab__short_description|default:$company_data.company_description}
{$truncate_size = $settings.abt__ut2.products.vendor.truncate_short_description[$settings.abt__device]|default:0}
{$show_name_as_link = $settings.abt__ut2.products.vendor.show_name_as_link[$settings.abt__device] === "Y"}

	<div class="ut2-vendor-block{if !$block_company_description || !$truncate_size} compact{/if} clearfix">
		{if $settings.abt__ut2.products.vendor.show_logo[$settings.abt__device] == "Y"}
			<div class="ut2-vendor-block__logo">{include file="common/image.tpl" images=$company_data.logos.compact.image image_width="50" image_height="50"}</div>
		{/if}
		<div class="ut2-vendor-block__content">
			<div class="ut2-vendor-block__name">
				{if $show_name_as_link}<a href="{"companies.products?company_id=`$company_id`"|fn_url}">{/if}{if $company_name}{$company_name}{else}{$company_id|fn_get_company_name}{/if}{if $show_name_as_link}</a>{/if}
				{if $settings.abt__ut2.products.vendor.show_vendor_rating[$settings.abt__device] == "Y"}
					{include file="addons/vendor_rating/components/relative_vendor_rating.tpl"
					rating=$product.relative_vendor_rating
					}
				{/if}
			</div>
			{if $truncate_size && $block_company_description}
				<div class="ut2-vendor-block__info">{$block_company_description|strip_tags|truncate:$truncate_size:"...":true}</div>
			{/if}

			{capture name="vendor_contacts"}
				{if $company_data.country}{$company_data.country}, {/if}
				{if $company_data.city}{$company_data.city}{/if}
			{/capture}
			{if $settings.abt__ut2.products.vendor.show_vendor_address[$settings.abt__device] == "Y" && $smarty.capture.vendor_contacts|trim|rtrim:", "}
				<p>
					<span class="ty-muted">{__("city")}: </span>
					<span>{$smarty.capture.vendor_contacts|trim|rtrim:", "}</span>
				</p>
			{/if}
		</div>

		{capture name="product_vendor_contacts"}
			{hook name="abt__ut2_mv:product_vendor_contacts"}
				{if $settings.abt__ut2.products.vendor.show_vendor_panel[$settings.abt__device] == "Y"}
					<a href="{"companies.view?company_id=`$company_data.company_id`"|fn_url}" class="cm-dialog-opener vc__i" data-ca-dialog-class="abt__ut2_right-panel" data-ca-dialog-action-context="page_in_popup" data-ca-dialog-title="{__("abt__ut2_mv.about_vendor")}"><i class="ut2-icon ut2-icon-outline-info"></i><span>{__("abt__ut2_mv.about_vendor")}</span></a>
				{else}
					<a href="{"companies.view?company_id=`$company_data.company_id`"|fn_url}" class="vc__i" rel="nofollow"><i class="ut2-icon ut2-icon-outline-info"></i><span>{__("abt__ut2_mv.about_vendor")}</span></a>
				{/if}
			{/hook}
		{/capture}

		{if $smarty.capture.product_vendor_contacts|trim}
			<div class="ut2-vendor-block__contacts">
				{$smarty.capture.product_vendor_contacts nofilter}
			</div>
		{/if}
	</div>
{/if}
