{if $block.properties.abt__ut2_mv_vendor_rating === "Y" && $addons.discussion.company_discussion_type != 'D'}
    {$dropdown_id="{$block.block_id}_{$vendor_info.company_id}"}
    <div class="ut2__vendor-info--reviews">
        <div class="ty-dropdown-box{if $settings.abt__device === "mobile"} cm-abt--ut2-move-bottom{/if}" id="dropdown-box">
            {if $vendor_info.discussion.posts_count > 0}
            <div class="cm-combination" id="sw_dropdown_{$dropdown_id}">
                <div class="ty-nowrap ty-stars">
                    <span class="ty-icon ty-icon-star ty-stars__icon"></span>
                </div>
                <span><strong>{($vendor_info.average_rating?:0)|number_format:1}</strong><span style="opacity: 0.6">/</span><small style="opacity: 0.6">5</small></span>
                {if $vendor_info.discussion.posts_count}
                    <span>({__("abt__ut2_mv.n_reviews",[$vendor_info.discussion.posts_count])})</span>
                {/if}
                {*{include file="addons/discussion/views/discussion/components/stars.tpl" stars=$vendor_info.average_rating|fn_get_discussion_rating}*}
            </div>
            {else}
                <div class="ut2-rating-stars">
                    <div class="ut2-rating-stars-empty"><div class="ty-product-review-reviews-stars ty-product-review-reviews-stars-one" data-ca-product-review-reviews-stars-full="0"></div><span class="ut2-rating-stars-num">0.0</span></div></div>
                    {include
                    file="addons/discussion/views/discussion/components/new_post_button.tpl"
                    name=__("write_review")
                    obj_id=$vendor_info.company_id
                    style="text"
                    object_type="Addons\\Discussion\\DiscussionObjectTypes::COMPANY"|enum
                    }
            {/if}
            {if $vendor_info.discussion.posts_count > 0}
                <div class="hidden cm-popup-box ty-dropdown-box__content"
                     id="dropdown_{$dropdown_id}">

                    <div class="ut2-popup-box-title">{__("abt__ut2_mv_vendor_rating")}<div class="cm-external-click ut2-btn-close" data-ca-external-click-id="sw_dropdown_{$dropdown_id}"><i class="ut2-icon-baseline-close"></i></div></div>

                    <div class="ut2__vendor-info--reviews-content">
                        <p>{__("abt__ut2_mv.of_stars",["[stars]" => $vendor_info.average_rating])}</p>
                        {include file="addons/abt__unitheme2_mv/addons/discussion/components/discussion_statistic.tpl" statistic=$vendor_info.discussion.statistic}
                        <div class="ut2__vendor-info--buttons-container">
                            <a href="{"companies.reviews?company_id=`$vendor_info.company_id`"|fn_url}">{__("abt__ut2_mv.read_all")} {__("abt__ut2_mv.n_reviews",[$vendor_info.discussion.posts_count])}</a>
                            {include
                                file="addons/discussion/views/discussion/components/new_post_button.tpl"
                                name=__("write_review")
                                obj_id=$vendor_info.company_id
                                style="text"
                                object_type="Addons\\Discussion\\DiscussionObjectTypes::COMPANY"|enum
                            }
                        </div>
                    </div>
                </div>
            {/if}
        </div>
    </div>
{/if}
