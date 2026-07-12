{$product_obj_type = "Tygh\Enum\Addons\Ab_imagesSeo\ObjectTypes::PRODUCT"|constant}
{$category_obj_type = "Tygh\Enum\Addons\Ab_imagesSeo\ObjectTypes::CATEGORY"|constant}
{$feature_obj_type = "Tygh\Enum\Addons\Ab_imagesSeo\ObjectTypes::FEATURE"|constant}
{$hide_inputs = !"ab__is.manage"|fn_check_view_permissions}
{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="ab_is_manage_attrs_form" enctype="multipart/form-data" class="form-edit form-horizontal{if $hide_inputs} cm-hide-inputs{/if}">
<input type="hidden" name="selected_section" id="selected_section" value="{$selected_section}" />
<input type="hidden" name="storefront_id" value="{$app['storefront']->storefront_id}">
{if !$attributes_data}
<p>{__('ab__is.placeholders_list.empty')}</p>
{/if}
{capture name="tabsbox"}
<div class="hidden" id="content_products">
{hook name="ab__images_seo:content_products"}
{include file="addons/ab__images_seo/views/ab__is/components/attributes_table.tpl" type=$product_obj_type show_number_input=true}
{/hook}
<!--content_products--></div>
<div class="hidden" id="content_categories">
{hook name="ab__images_seo:content_categories"}
{include file="addons/ab__images_seo/views/ab__is/components/attributes_table.tpl" type=$category_obj_type}
{/hook}
<!--content_categories--></div>
<div class="hidden" id="content_features">
{hook name="ab__images_seo:content_features"}
{include file="addons/ab__images_seo/views/ab__is/components/attributes_table.tpl" type=$feature_obj_type}
{/hook}
<!--content_features--></div>
{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$smarty.request.selected_section track=true}
{capture name="buttons"}
{include file="buttons/save.tpl" but_role="submit-link" but_target_form="ab_is_manage_attrs_form" but_name="dispatch[ab__is.manage_attrs]" save=$id}
{/capture}
</form>
{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__images_seo"}
{include file="common/mainbox.tpl"
title_start=__("ab__images_seo")|truncate:40
title_end=__("ab__is.manage_attrs")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
sidebar=$smarty.capture.sidebar
adv_buttons=$smarty.capture.adv_buttons
select_storefront=true
show_all_storefront=false
select_languages=true}