{if $vendor_block_settings.show_vendor_rating[$settings.abt__device] == "YesNo::YES"|enum}
    {if $vendor_info.average_rating > 0}
        <div class="ut2__vendor-info-b--rating-average">
            <p>{__("abt__ut2_mv.of_stars",["[stars]" => $vendor_info.average_rating])}</p>
            {include file="addons/discussion/views/discussion/components/stars.tpl" stars=$vendor_info.average_rating|fn_get_discussion_rating}
            {if $vendor_info.discussion.posts_count}
                <p>{__("abt__ut2_mv.n_reviews",[$vendor_info.discussion.posts_count])}</p>
            {/if}
        </div>
    {else}
        {include file="addons/vendor_rating/components/relative_vendor_rating.tpl"
        rating=$product.abt__ut2_mv_company_rating
        }
    {/if}
{/if}