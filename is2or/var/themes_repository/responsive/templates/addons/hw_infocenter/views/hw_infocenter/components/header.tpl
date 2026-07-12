{if $breadcrumbs && $breadcrumbs|@sizeof > 1}
<div class="hw-infocenter__breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    {strip}
        {foreach from=$breadcrumbs item="bc" name="bcn" key="key"}
            {if $key > 1}
            <span class="ty-breadcrumbs__slash" {if $breadcrumbs_hide_last && $smarty.foreach.bcn.last}style="display:none!important"{/if}>/</span>
            {/if}
            <span class="bread-{$key} {if $key == 0 || ($breadcrumbs_hide_last && $smarty.foreach.bcn.last)} hidden{/if}" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            {if $bc.link}
                <a itemprop="item" href="{$bc.link|fn_url}" class="ty-breadcrumbs__a{if $additional_class} {$additional_class}{/if}"{if $bc.nofollow} rel="nofollow"{/if}>
                    <meta itemprop="position" content="{$key+1}" />
                    <meta itemprop="name" content="{$bc.title|strip_tags|escape:"html" nofilter}" />
                    {$bc.title|strip_tags|escape:"html" nofilter}
                </a>
            {else}
                <span itemprop="item" class="ty-breadcrumbs__current">
                    <meta itemprop="position" content="{$key+1}" />
                    <meta itemprop="name" content="{$bc.title|strip_tags|escape:"html" nofilter}" />
                {$bc.title|strip_tags|escape:"html" nofilter}
                </span>
            {/if}
        </span>
        {/foreach}
    {/strip}
</div>
{/if}
<div class="hw-infocenter__heading">
    <h1 {live_edit name="page:page:{$page.page_id}"}>{$page.page}</h1>
</div>