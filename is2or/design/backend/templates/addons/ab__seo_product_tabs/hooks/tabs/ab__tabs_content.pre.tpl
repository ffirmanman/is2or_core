{if fn_check_view_permissions("ab__seo_product_tabs.view", "GET")}
{strip}
{$hide_inputs = !(fn_check_view_permissions("ab__seo_product_tabs.manage", "POST"))}
<div id="content_ab__spt_{$html_id}"{if $hide_inputs} class="cm-hide-inputs"{/if}>
<fieldset>
<div class="control-group">
{$is_enabled = ($addons.ab__seo_product_tabs.add_tabs_fixed_panel === 'Y') && ($settings.Appearance.product_details_in_tab === "YesNo::NO"|enum) && ($tab_data.show_in_popup|default:("YesNo::NO"|enum) === "YesNo::NO"|enum)}
<label class="control-label" for="elm_ab__spt_add_tab_to_floating_panel_{$html_id}">{__("ab__spt.product_tabs.add_tab_to_floating_panel")}:</label>
<div class="controls{if !$is_enabled} cm-hide-inputs{/if}">
<input type="hidden" name="tab_data[ab__spt_add_tab_to_floating_panel]" value="{"YesNo::NO"|enum}">
<input type="checkbox" name="tab_data[ab__spt_add_tab_to_floating_panel]" id="elm_ab__spt_add_tab_to_floating_panel_{$html_id}"{if $tab_data.ab__spt_add_tab_to_floating_panel == "YesNo::YES"|enum} checked="checked"{/if} value="{"YesNo::YES"|enum}">
{if !$is_enabled}
<p style="margin-top: 10px;">
{__('ab__spt.product_tabs.add_tab_to_floating_panel.why_disabled', [
'[link_1]' => 'settings.manage&section_id=Appearance'|fn_url,
'[link_2]' => 'addons.update&addon=ab__seo_product_tabs'|fn_url,
'[settings_1_status]' => fn_ab__spt_get_setting_status_str($settings.Appearance.product_details_in_tab),
'[settings_2_status]' => fn_ab__spt_get_setting_status_str($addons.ab__seo_product_tabs.add_tabs_fixed_panel),
'[settings_3_status]' => fn_ab__spt_get_setting_status_str($tab_data.show_in_popup)
])}
</p>
{/if}
</div>
</div>
{include file="common/subheader.tpl" title=__('ab__spt.product_tabs.advanced_settings') target="#ab__spt-advanced_{$html_id}"}
<div id="ab__spt-advanced_{$html_id}" class="in collapse">
<div class="control-group">
<label class="control-label" for="elm_ab__spt_activate_settings_{$html_id}">{__("ab__spt.product_tabs.activate_settings")}:</label>
<div class="controls">
<input type="hidden" name="tab_data[ab__spt_activate_settings]" value="{"YesNo::NO"|enum}">
<input type="checkbox" name="tab_data[ab__spt_activate_settings]" id="elm_ab__spt_activate_settings_{$html_id}"{if $tab_data.ab__spt_activate_settings == "YesNo::YES"|enum} checked="checked"{/if} value="{"YesNo::YES"|enum}">
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_ab__spt_tab_header_tag_{$html_id}">{__("ab__spt.product_tabs.tab_header_tag")}:</label>
<div class="controls">
<select name="tab_data[ab__spt_tab_header_tag]" id="elm_ab__spt_tab_header_tag_{$html_id}">
{foreach ['div', 'h2', 'h3', 'h4', 'h5', 'h6'] as $tag}
<option value="{$tag}"{if $tab_data.ab__spt_tab_header_tag == $tag} selected{/if}>{$tag}</option>
{/foreach}
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_ab__spt_tab_header_{$html_id}">{__("ab__spt.product_tabs.tab_header.tabs_enabled.{$settings.Appearance.product_details_in_tab}")}:</label>
<div class="controls form-edit">
<input style="margin-bottom: 10px;" type="text" class="input-large" id="elm_ab__spt_tab_header_{$html_id}" name="tab_data[ab__spt_tab_header]" value="{$tab_data.ab__spt_tab_header|default:$tab_data.name}">
{__('ab__spt.product_tabs.tab_header.description') nofilter}
</div>
</div>
</div>
</fieldset>
</div>
{/strip}
{/if}