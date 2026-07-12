{if $block.properties.abt__ut2_mv_vendor_rating === "Y" && $vendor_info.average_rating > 0}
    <div class="ut2__vendor-info-b--rating-content">
        <div class="ut2__vendor-info-b--rating-average">
            <div>{__("abt__ut2_mv.of_stars",["[stars]" => $vendor_info.average_rating])}</div>
            <div>{include file="addons/discussion/views/discussion/components/stars.tpl" stars=$vendor_info.average_rating|fn_get_discussion_rating}
                {if $vendor_info.discussion.posts_count}<span>{__("abt__ut2_mv.n_reviews",[$vendor_info.discussion.posts_count])}</span>{/if}</div>
        </div>
        <div class="ut2__vendor-info-b--rating-statistic">
            {include file="addons/abt__unitheme2_mv/addons/discussion/components/discussion_statistic.tpl" statistic=$vendor_info.discussion.statistic}
        </div>
    </div>
    <div class="ut2__vendor-info-b--review-buttons">
        {include
        file="addons/discussion/views/discussion/components/new_post_button.tpl"
        name=__("write_review")
        obj_id=$vendor_info.company_id
        style="text"
        object_type="Addons\\Discussion\\DiscussionObjectTypes::COMPANY"|enum
        }
        {if !(strpos($smarty.request.dispatch,'companies.reviews')===0)}
            <a href="{"companies.reviews?company_id=`$vendor_info.company_id`"|fn_url}">{__("abt__ut2_mv.read_all")} {__("abt__ut2_mv.n_reviews",[$vendor_info.discussion.posts_count])}</a>
        {/if}
    </div>
{else}
    {hook name="abt__ut2_mv:vendor_info_block_discussion"}{/hook}
{/if}
