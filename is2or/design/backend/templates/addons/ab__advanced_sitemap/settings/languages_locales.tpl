{strip}
{$is_update_for_all_button_displayed = false}
{$is_update_for_all_available = !$selected_storefront_id && $app['storefront.repository']->getCount(['cache' => true]) > 1}
{foreach $ab__as_locales as $locale}
<div class="control-group setting-wide {$smarty.request.addon}">
<label for="addon_option_ab__advanced_sitemap_language_locale_{$locale@key}" class="control-label">{$ab__as_languages[$locale@key].name}:</label>
<div class="controls">
<input id="addon_option_ab__advanced_sitemap_language_locale_{$locale@key}"
type="text"
name="ab__as_locales[{$locale@key}]"
value="{$locale}"
{if $is_update_for_all_available}
disabled="disabled"
{/if}
>
{if $is_update_for_all_available && !$is_update_for_all_displayed}
{$is_update_for_all_displayed = true}
<div class="right">
{include file="buttons/update_for_all.tpl"
display=true
name="update_all_vendors[ab__as_locales]"
object_id="update_for_all_ab__as_locales"
component="ab__as.locales"
}
</div>
<script>
(function(_, $) {
$(_.doc).on('click', '[data-ca-update-for-all="ab__as.locales"]', function (e) {
var $controls = $('[name*="ab__as_locales"]');
var currentState = $controls.prop('disabled');
$controls.prop('disabled', currentState ? null : 'disabled');
});
})(Tygh, Tygh.$);
</script>
{/if}
</div>
</div>
{foreachelse}
<div class="no-items">{__("no_data")}</div>
{/foreach}
{/strip}