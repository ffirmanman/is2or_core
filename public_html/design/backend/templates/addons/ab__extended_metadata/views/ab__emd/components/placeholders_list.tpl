<div>
{* header *}
{__("ab__emd.placeholders.header")}
{* placeholder *}
{hook name="ab__extended_metadata:placeholders"}
<ul>
{foreach $placeholders as $placeholder => $schema}
{if $schema.admin_tooltip}
<li>{$schema.admin_tooltip nofilter}</li>
{else}
{foreach fn_ab__emd_generate_tooltip($placeholder, $schema) as $tooltip}
<li>{$tooltip nofilter}</li>
{/foreach}
{/if}
{/foreach}
</ul>
{/hook}
{* placeholders extra *}
{$placeholders_extra = "ab__emd.setting.`$dispatch`.extra"}
{if fn_is_lang_var_exists($placeholders_extra)}{__($placeholders_extra)}{/if}
</div>