<div class="ut2__vendor-menu">
    <div class="ut2__vendor-menu__container">
        <div class="ut2__vendor-menu__row">

            <div class="ut2__vendor-menu__list">
                {if $block.content.items.vendor_categories === "Y" && $items.vendor_categories}
                    {capture name="vendor_categories"}
                        {include file="blocks/abt__ut2_dropdown_vertical_mwi.tpl" items=$items.vendor_categories name="category" childs="subcategories"}
                    {/capture}
                    <div class="ut2__vendor-menu--item menu-vendor-categories">
                        {include
                        file="blocks/wrappers/onclick_dropdown.tpl"
                        content_class="cm-popup-box"
                        content=$smarty.capture.vendor_categories
                        block=[
                        "user_class" => "ut2-dropdown-box top-menu-grid-vertical compact{if $settings.ab__device === 'mobile'} cm-abt--ut2-move-bottom{/if}",
                        "snapping_id" => "categories_{$block.block_id}"
                        ]
                        title=__("categories")
                        }
                    </div>
                {/if}

                {if
                    $block.content.items.home_page === 'YesNo::YES'|enum &&
                    fn_abt__ut2_mv_is_vendor_store_available($smarty.request.company_id) &&
                    fn__abt__ut2_mv_get_company_microstore_homepage_blocks(null, ['status' => 'ObjectStatuses::ACTIVE'|enum])
                }
                    <div class="ut2__vendor-menu--item {if strpos($smarty.request.dispatch, 'companies.home') === 0}active{/if}">
                        <a href="{"companies.home?company_id=`$smarty.request.company_id`"|fn_url}"><i class="ut2-icon-home_page"></i>{__("home_page")}</a>
                    </div>
                {/if}

                <div class="ut2__vendor-menu--item {if strpos($smarty.request.dispatch,'companies.products')===0}active{/if}">
                    <a href="{"companies.products?company_id=`$smarty.request.company_id`"|fn_url}"><i class="ut2-icon-outline-archive"></i>{__("vendor_products")}</a>
                </div>

                {if
                    $block.content.items.vendor_reviews === 'YesNo::YES'|enum &&
                    fn__abt__ut2_mv_is_company_reviews_available($smarty.request.company_id, $block.content.items.hide_if_no_vendor_reviews)
                }
                    <div class="ut2__vendor-menu--item{if strpos($smarty.request.dispatch, 'companies.reviews') === 0} active{/if}">
                        <a href="{"companies.reviews?company_id=`$smarty.request.company_id`"|fn_url}"><i class="ut2-icon-chat"></i>{__("abt__ut2_mv.reviews")}</a>
                    </div>
                {/if}

                {if $block.content.items.about === "Y"}
                    <div class="ut2__vendor-menu--item">
                        <a href="{"companies.view?company_id=`$smarty.request.company_id`"|fn_url}"><i class="ut2-icon-about_page"></i>{__("abt__ut2_mv.about_vendor")}</a>
                    </div>
                {/if}

                {if $block.content.items.pages === "Y" && $items.pages}
                    {capture name="pages"}
                        {if $settings.abt__device === "mobile"}
                            {include file="blocks/abt__ut2_dropdown_vertical_mwi.tpl" items=$items.pages name="page" childs="subpages"}
                        {else}
                            {include file="blocks/topmenu_dropdown.tpl" items=$items.pages name="page" childs="subpages"}
                        {/if}
                    {/capture}
                    <div class="ut2__vendor-menu--item menu-vendor-pages">
                        {if $settings.abt__device === "mobile"}
                            {include file="blocks/wrappers/abt__ut2_onclick_dropdown_outside_position.tpl" content_class="cm-popup-box" content=$smarty.capture.pages block=["user_class" => "ut2-dropdown-box rt-position menu-vendor-pages", "snapping_id" => "pages_{$block.block_id}"] title=__("pages")}
                        {else}
                            {include file="blocks/wrappers/onclick_dropdown.tpl" content_class="cm-popup-box" content=$smarty.capture.pages block=["user_class" => "ut2-dropdown-box menu-vendor-pages", "snapping_id" => "pages_{$block.block_id}"] title=__("pages")}
                        {/if}
                    </div>
                {/if}
            </div>

        </div>
    </div>
</div>
