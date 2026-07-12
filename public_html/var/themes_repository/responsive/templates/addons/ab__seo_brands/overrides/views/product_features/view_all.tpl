{capture name="description"}
    <div class="ty-wysiwyg-content">
        <div {live_edit name="filter:ab__sb_description:{$filter.filter_id}"}>{$filter.ab__sb_description nofilter}</div>
    </div>
{/capture}

{if $filter.ab__sb_descr_position === "top"}
    {$smarty.capture.description nofilter}
{/if}

{if $variants}
    {include file="addons/ab__seo_brands/overrides/views/product_features/components/{$filter.ab__sb_variants_template|default:'grid'}.tpl"}
{/if}

{if $filter.ab__sb_descr_position === "bottom"}
    {$smarty.capture.description nofilter}
{/if}

{capture name="mainbox_title"}<span {live_edit name="filter:ab__sb_h1:{$filter.filter_id}"}>{$filter.ab__sb_h1|default:$filter.filter}</span>{/capture}
