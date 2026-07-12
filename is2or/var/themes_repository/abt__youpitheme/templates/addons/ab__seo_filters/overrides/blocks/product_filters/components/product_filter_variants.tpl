<ul class="ty-product-filters {if $collapse}hidden{/if}" id="content_{$filter_uid}">

    {if $filter.display_count && $filter.variants|count > $filter.display_count}
    <li>
        {script src="js/tygh/filter_table.js"}

        <div class="ty-product-filters__search">
        <input type="text" placeholder="{__("search")}" class="cm-autocomplete-off ty-input-text-medium" name="q" id="elm_search_{$filter_uid}" value="" />
        <i class="ty-product-filters__search-icon ty-icon-cancel-circle hidden" id="elm_search_clear_{$filter_uid}" title="{__("clear")}"></i>
        </div>
    </li>
    {/if}

    {$white_color = "#ffffff"}

    {if $filter.variants}
        {if $filter.filter_style == "ProductFilterStyles::COLOR"|enum}
            <div class="ty-product-filters__color-filter">
                {foreach $filter.variants as $variant}
                    <li class="ty-product-filters__color-list-item cm-product-filters-checkbox-container">
                        <label
                            id="elm_checkbox_{$filter_uid}_{$variant.variant_id}"
                            name="product_filters[{$filter.filter_id}]"
                            class="ty-product-filters__color-filter-item
                        {if $variant.disabled}{if $variant.selected}ty-product-filters__color-filter-item--selected{else}ty-product-filters__color-filter-item--disabled{/if}{/if}"
                            data-cm-product-color-filter="true"
                            data-ca-product-color-filter-checkbox-id="elm_checkbox_{$filter_uid}_{$variant.variant_id}"
                            title="{$filter.prefix}{$variant.variant|fn_text_placeholders}{$filter.suffix}">
                            {assign var="href" value="`$filter.filter_id`-`$variant.variant_id`"|fn_ab__seo_filters_prepare_filter_url}
                            {if !$variant.disabled and $href|strpos:"features_hash" === false and !empty($href) && !$variant.selected}<a class="ab__sf_filter_url" href="{$href}">{/if}

                            <input class="cm-product-filters-checkbox ty-product-filters__color-filter-checkbox"
                                type="checkbox" data-ca-filter-id="{$filter.filter_id}" value="{$variant.variant_id}"
                                    id="elm_checkbox_{$filter_uid}_{$variant.variant_id}"
                                    {if $variant.selected}checked{/if}
                                    {if $variant.disabled && !$variant.selected}disabled="disabled"{/if} />
                            <i class="ty-icon-ok ty-product-filters__color-filter-check{if $variant.selected} ty-product-filters__color-filter-check--selected{/if}{if $variant.color == $white_color} ty-product-filters__color-filter-check--invert{/if}"></i>
                            <div
                                    class="ty-product-filters__color-filter-swatch{if $variant.selected} ty-product-filters__color-filter-swatch--selected{/if}"
                                style="background-color:{$variant.color|default:$white_color}">
                            </div>
                            {if !$variant.disabled and $href|strpos:"features_hash" === false and !empty($href) && !$variant.selected}</a>{/if}
                        </label>
                    </li>
                {/foreach}
            </div>
        {else}
            <li class="ty-product-filters__item-more">
                <ul id="ranges_{$filter_uid}"{if $filter.display_count} style="max-height: {$filter.display_count * 26}px;"{/if} class="ty-product-filters__variants{if $filter.variants|@count > $filter.display_count} items-more{/if} cm-filter-table" data-ca-input-id="elm_search_{$filter_uid}" data-ca-clear-id="elm_search_clear_{$filter_uid}" data-ca-empty-id="elm_search_empty_{$filter_uid}">

                    {foreach $filter.variants as $variant}<li class="cm-product-filters-checkbox-container ty-product-filters__group">
                        {assign var="href" value="`$filter.filter_id`-`$variant.variant_id`"|fn_ab__seo_filters_prepare_filter_url}
                        {if !$variant.disabled and $href|strpos:"features_hash" === false and !empty($href) && !$variant.selected}
                        <a class="ab__sf_filter_url" href="{$href}">
                            {/if}
                        <input class="cm-product-filters-checkbox" type="checkbox"{if $variant.selected} checked="checked"{/if} name="product_filters[{$filter.filter_id}]" data-ca-filter-id="{$filter.filter_id}" value="{$variant.variant_id}" id="elm_checkbox_{$filter_uid}_{$variant.variant_id}" {if $variant.disabled}disabled="disabled"{/if}><label {if $variant.disabled}class="disabled"{/if} for="elm_checkbox_{$filter_uid}_{$variant.variant_id}"><span>{$filter.prefix}{$variant.variant|fn_text_placeholders}{$filter.suffix}</span></label>
                    {if !$variant.disabled and $href|strpos:"features_hash" === false and !empty($href)}</a>{/if}
                    </li>
                    {/foreach}
                </ul>
                {if $filter.variants|@count > $filter.display_count}
                    <a class="ty-btn ypi-more-btn" href="javascript:void(0)" onclick="$(this).prev().toggleClass('none-overflow'); $(this).toggleClass('open');">
                        <i class="material-icons">&#xE313;</i><span>{__("show_all")}</span><span>{__('hide')}</span><span>&nbsp;({$filter.variants|@count})</span>
                    </a>
                {/if}
            </li>
        {/if}
        <li><p id="elm_search_empty_{$filter_uid}" class="ty-product-filters__no-items-found hidden">{__("no_items_found")}</p></li>
    {/if}
</ul>
