{strip}
    {$show_short_descr      = $show_short_descr|default:"YesNo::YES"|enum}
    {$show_products_list    = $show_products_list|default:"YesNo::YES"|enum}
    {$show_date             = $show_date|default:"YesNo::YES"|enum}

    <div class="ab-ecw-pages ab-ecw-pages__extended" id="product_features_ab_ecw_comparison_{$block.block_id}_extended">
        {foreach $pages as $page}
            {$names = fn_ab__ecw_get_product_name($page.product_ids, $smarty.const.CART_LANGUAGE, true)}

            <div class="ab-ecw-pages__item">
                {hook name="ab__ecw_comparison_pages:item_heading"}
                    <a title="{$page.name}" class="ab-ecw-pages__item-image" href="{fn_url("ab__ecw_comparison_pages.view?page_id=`$page.page_id`")}">
                        {include file="common/image.tpl" images=$page.icon image_width=320 image_height=240}

                        <b>{$page.name|truncate:100}</b>

                        {hook name="ab__ecw_comparison_pages:item_date"}
                            {if $block.properties.ab__ecw_show_date|default:$show_date == "YesNo::YES"|enum}
                                {$date = $page.timestamp|date_format:$settings.Appearance.date_format}

                                <span class="ab-ecw-pages__date" title="{$date}">{$date}</span>
                            {/if}
                        {/hook}
                    </a>
                {/hook}

                {hook name="ab__ecw_comparison_pages:item_description"}
                    {if $block.properties.ab__ecw_show_short_descr|default:$show_short_descr == "YesNo::YES"|enum}
                        {$short_description = $page.short_description|strip_tags|trim}
                        {if $short_description}
                            <div class="ab-ecw-pages__item-descr">{$short_description|truncate:150}</div>
                        {/if}
                    {/if}
                {/hook}

                {hook name="ab__ecw_comparison_pages:item_products"}
                    {if $block.properties.ab__ecw_show_products_list|default:$show_products_list == "YesNo::YES"|enum}
                        <div class="ab-ecw-pages__item-products">
                        {if fn_is_lang_var_exists("ab__ecw.pages_extended.products_heading")}<span>{__("ab__ecw.pages_extended.products_heading")}</span>{/if}
                        {foreach $page.product_ids as $pid}
                            {$url = fn_url("products.view&product_id=`$pid`")}
                            {if $page.is_child_variation[$pid]}
                                {$url = fn_link_attach($url, "variation_id=`$pid`")}
                            {/if}

                            <a href="{$url}" target="_blank">{$names.{$pid}}</a>{if !$pid@last},{/if}
                        {/foreach}
                        </div>
                    {/if}
                {/hook}
            </div>
        {/foreach}
        <!--product_features_ab_ecw_comparison_{$block.block_id}_extended--></div>
{styles}
    {style src="tygh/mixins.less"}
    {style src="addons/ab__extended_comparison_wishlist/components/vars.less"}
    {style src="addons/ab__extended_comparison_wishlist/components/ab__ecw_pages_extended.less"}
{/styles}
{/strip}