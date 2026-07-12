{$company_name = $vendor_info.i18n_company|default:$company_name}

<div class="ut2__vendor-info-b vib-vertical {if $settings.abt__device === "mobile"}vib-mobile{/if}">
    <div class="ut2__vendor-info-b--content">
        <div class="ut2__vendor-info-b--wrap">
            <div class="ut2__vendor-info-b--name-wrap">

                {if $block.properties.abt__ut2_mv_logo === "Y"}
                    <div class="ut2__vendor-info-b--logo">
                        <a href="{"companies.view?company_id=`$vendor_info.company_id`"|fn_url}">
                            {include file="common/image.tpl"
                            obj_id=$vendor_info.company_id
                            images=$vendor_info.logos.theme.image
                            image_width="150"
                            class="ty-company-image"
                            show_no_image=false
                            show_detailed_link=false
                            capture_image=false
                            }
                        </a>
                    </div>
                {/if}

                <div class="ut2__vendor-info-b--name">
                    <div class="vendor-name">{$company_name}</div>
                    {if $vendor_info.average_rating > 0}{hook name="abt__ut2_mv:vendor_info_block_rating"}{/hook}{/if}

                    {if $vendor_info.ab__short_description}
                        <div class="ut2__vendor-info-b--description">{$vendor_info.ab__short_description|truncate:$block.properties.abt__ut2_mv_description_length}</div>
                    {elseif $vendor_info.company_description}
                        {if !(strpos($smarty.request.dispatch,'companies.home')===0)}
                            <div class="ut2__vendor-info-b--description">{$vendor_info.company_description|strip_tags}</div>
                        {else}
                            <div class="ut2__vendor-info-b--description">{$vendor_info.company_description|strip_tags|truncate:300:"...":true}</div>
                        {/if}
                    {/if}

                    
                    {if $vendor_info.average_rating < 1}
                        {capture name="discussion_and_rating"}
                            {hook name="abt__ut2_mv:vendor_info_block_rating"}{/hook}
                            {hook name="abt__ut2_mv:vendor_info_block_discussion"}{/hook}
                        {/capture}
                        {if $smarty.capture.discussion_and_rating|trim}
                            <div class="ut2__vendor-info-b--rating compact">
                                {$smarty.capture.discussion_and_rating nofilter}
                            </div>
                        {/if}
                    {/if}
                    {if $vendor_info.average_rating > 0}
                        {capture name="discussion_and_rating"}
                            {hook name="abt__ut2_mv:vendor_info_block_discussion_full"}{/hook}
                        {/capture}

                        {if $smarty.capture.discussion_and_rating|trim}
                            <div class="ut2__vendor-info-b--rating {if $vendor_info.average_rating > 0}full{else}compact{/if}">
                                <div class="ut2__vendor-info-b--rating-title">{__("abt__ut2_mv_vendor_rating")}</div>
                                {$smarty.capture.discussion_and_rating nofilter}
                            </div>
                        {/if}
                    {/if}
                </div>
            </div>

            
            {if $block.properties.abt__ut2_mv_motivation === "Y"}
                <div class="ut2__vendor-info-b--motivation">
                    {include file="addons/abt__unitheme2_mv/blocks/components/buyer_motivation.tpl" hidden_homepage="true"}

                    <div class="ut2__vendor-info-b--contacts">
                    {hook name="abt__ut2_mv:vendor_info_block_contacts"}
                        {if !$hide_vendor_store && !(strpos($smarty.request.dispatch,'companies.products')===0)}
                        <a href="{"companies.products?company_id=`$vendor_info.company_id`"|fn_url}"><span class="ut2-icon ut2-icon-outline-archive"></span>{__("view_products")}</a>
                        {/if}

                        {if
                            !$hide_vendor_store && !(strpos($smarty.request.dispatch, 'companies.home') === 0) &&
                            fn_abt__ut2_mv_is_vendor_store_available($company_data.company_id) &&
                            fn__abt__ut2_mv_get_company_microstore_homepage_blocks(null, ['status' => 'ObjectStatuses::ACTIVE'|enum])
                        }
                            <a href="{"companies.home?company_id=`$company_data.company_id`"|fn_url}" class="ut2__visit-home-page-link"><span class="ut2-icon ut2-icon-home_page"></span>{__("abt__ut2_mv.view_vendor_home_page")}</a>
                        {/if}
                    {/hook}
                    </div>
                </div>
            {/if}
        </div>
    </div>
</div>