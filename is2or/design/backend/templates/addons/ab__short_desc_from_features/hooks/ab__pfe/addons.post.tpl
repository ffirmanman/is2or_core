{include file="common/subheader.tpl" title=__("ab__short_desc_from_features") target="#ab__short_desc_from_features"}
<div id="ab__short_desc_from_features" class="in collapse">
{if $addons.ab__short_desc_from_features.insert_type == 'var'}
{__('ab__sdff.ab__pfe_extending.var')}
{elseif $addons.ab__short_desc_from_features.insert_type == 'override_all'}
{__('ab__sdff.ab__pfe_extending.override_all')}
{else}
{__('ab__sdff.ab__pfe_extending.override_empty')}
{/if}
</div>