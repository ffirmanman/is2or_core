{if $variant_data.variant_id}
{assign var="id" value=$variant_data.variant_id}
{/if}
{capture name="mainbox"}
{capture name="tabsbox"}
<form action="{""|fn_url}" method="post" name="variant_update_form" class="form-horizontal form-edit" enctype="multipart/form-data">
<div id="variant_update_form_{$variant_data.variant_id}">
<input type="hidden" class="cm-no-hide-input" id="selected_section" name="selected_section" value="{$selected_section}"/>
<input type="hidden" class="cm-no-hide-input" id="variant_id" name="variant_id" value="{$id}" />
<input type="hidden" class="cm-no-hide-input" name="result_ids" value="variant_update_form_{$variant_data.variant_id}"/>
<div id="content_general">
<div class="control-group">
<label for="elm_variant_name" class="control-label">{__("name")}:</label>
<div class="controls">
<input type="text" id="elm_variant_name" size="55" value="{$variant_data.variant}" class="input-large" readonly="readonly" />
</div>
</div>
<div class="control-group">
<label for="elm_feature_name" class="control-label">{__("feature")}:</label>
<div class="controls">
<input type="text" id="elm_feature_name" size="55" value="{$variant_data.feature_id|fn_get_feature_name}" class="input-large" readonly="readonly" />
</div>
</div>
<!--content_general--></div>
{hook name="variants:tabs_content"}
{/hook}
<!--variant_update_form_{$variant_data.variant_id}--></div>
</form>
{hook name="variants:tabs_extra"}
{/hook}
{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox track=true}
{capture name="buttons"}
{if $id}
{capture name="tools_list"}
<li>{btn type="list" target="_blank" text=__("preview") href="product_features.view?variant_id=`$id`"|fn_get_preview_url:$variant_data:$auth.user_id}</li>
{/capture}
{/if}
{dropdown content=$smarty.capture.tools_list}
{/capture}
{/capture}
{capture name="title_end"}{__("ab__sb.editing_layouts_for")}{$variant_data.variant}{/capture}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__seo_brands"}
{include
file="common/mainbox.tpl"
title_start=__("ab__seo_brands")|truncate:40
title_end=$smarty.capture.title_end
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
}
