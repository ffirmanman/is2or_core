{include file="common/subheader.tpl" title=__("ab__sr.settings.default_seo_names") target="#settings_ab__seo_reviews"}
<div class="collapse in" id="settings_ab__seo_reviews">
{foreach $app["languages"] as $lang_code => $language}
<div class="control-group">
<label for="addon_ab__sr_default_seo_names_{$lang_code}" class="control-label">{$language.name}:</label>
<div class="controls">
<input id="addon_ab__sr_default_seo_names_{$lang_code}" type="text" name="ab__sr_default_seo_names[{$lang_code}]" value="{$ab__sr_default_seo_names.$lang_code|default:"reviews"}" size="30" />
</div>
</div>
{/foreach}
</div>