{* Vendor information block *}

{if $block.properties.abt__ut2_mv_type === "c"}
    {$mv_vendor_info_block_type = compact}

    {if $settings.abt__device != "mobile"}
        {$mv_logo_image_height = 50}
    {/if}

{elseif $block.properties.abt__ut2_mv_type === "f"}
    {$mv_vendor_info_block_type = full}

    {if $settings.abt__device != "mobile"}
        {$mv_logo_image_width = 100}
        {$mv_logo_image_height = 100}
    {/if}
{/if}

{if $settings.abt__device == "mobile"}
    {$mv_logo_image_width = 60}
    {$mv_logo_image_height = 60}
{/if}

<style>
    {capture name="vendor_vendor_info_styles"}
        {if $vendor_info.personal_design.vendor_info_background}--ut2-vendor-info-block-background: {$vendor_info.personal_design.vendor_info_background};{/if}
        {if $vendor_info.personal_design.vendor_info_font_main}--ut2-vendor-info-block-font-main-color: {$vendor_info.personal_design.vendor_info_font_main};{/if}
        {if $vendor_info.personal_design.vendor_info_font_additional}--ut2-vendor-info-block-font-additional-color: {$vendor_info.personal_design.vendor_info_font_additional};{/if}
        {if $vendor_info.personal_design.vendor_info_links}--ut2-vendor-info-block-links-color: {$vendor_info.personal_design.vendor_info_links};{/if}
        {if $vendor_info.personal_design.vendor_menu_background}--ut2-vendor-menu-background: {$vendor_info.personal_design.vendor_menu_background};{/if}
        {if $vendor_info.personal_design.vendor_menu_active_background}--ut2-vendor-menu-background-active: {$vendor_info.personal_design.vendor_menu_active_background};{/if}
        {if $vendor_info.personal_design.vendor_menu_item}--ut2-vendor-menu-item-color: {$vendor_info.personal_design.vendor_menu_item};{/if}
        {if $vendor_info.personal_design.vendor_menu_item_active}--ut2-vendor-menu-item-active-color: {$vendor_info.personal_design.vendor_menu_item_active};{/if}
        {if $vendor_info.personal_design.vendor_buttons_background}--ut2-vendor-buttons-background: {$vendor_info.personal_design.vendor_buttons_background};{/if}
        {if $vendor_info.personal_design.vendor_buttons_active_background}--ut2-vendor-buttons-background-active: {$vendor_info.personal_design.vendor_buttons_active_background};{/if}
        {if $vendor_info.personal_design.vendor_buttons_color}--ut2-vendor-buttons-color: {$vendor_info.personal_design.vendor_buttons_color};{/if}
        {if $vendor_info.personal_design.vendor_buttons_color_active}--ut2-vendor-buttons-color-active: {$vendor_info.personal_design.vendor_buttons_color_active};{/if}
    {/capture}
    {if $smarty.capture.vendor_vendor_info_styles|trim}
        :root {
            {$smarty.capture.vendor_vendor_info_styles nofilter}
        }
    {/if}
</style>

{$company_name = $vendor_info.i18n_company|default:$vendor_info.company}

<div class="ut2__vendor-info-b {$mv_vendor_info_block_type} {if $settings.abt__device === "mobile"}vib-mobile{/if}" style="{if $vendor_info.personal_design.abt__v_info_block_bg.detailed.image_path}background-image: url({$vendor_info.personal_design.abt__v_info_block_bg.detailed.image_path}){/if}">
    <div class="ut2__vendor-info-b--content">

        {if $block.properties.abt__ut2_mv_logo === "Y"}
            <div class="ut2__vendor-info-b--logo">
                <a href="{"companies.view?company_id=`$vendor_info.company_id`"|fn_url}" title="{$company_name}">
                {include file="common/image.tpl"
                obj_id=$vendor_info.company_id
                images=$vendor_info.logos.compact.image
                image_width=$mv_logo_image_width
                image_height=$mv_logo_image_height
                class="ty-company-image"
                show_no_image=false
                show_detailed_link=false
                capture_image=false
                }
                </a>
            </div>
        {/if}

        {capture name="discussion_and_rating"}
            {hook name="abt__ut2_mv:vendor_info_block_rating"}{/hook}
            {hook name="abt__ut2_mv:vendor_info_block_discussion"}{/hook}
        {/capture}

        <div class="ut2__vendor-info-b--wrap">

            <div class="ut2__vendor-info-b--name">
                <div class="vendor-name">
                    {if $block.properties.abt__ut2_mv_name_as_link === "Y"}
                        <a href="{"companies.view?company_id=`$vendor_info.company_id`"|fn_url}" title="">{$company_name}</a>
                    {else}
                        {$company_name}
                    {/if}
                </div>

                {if $block.properties.abt__ut2_mv_motivation === "Y" && $settings.abt__device === "mobile"}
                    <div class="ut2__vendor-info-b--motivation">
                        {include file="addons/abt__unitheme2_mv/blocks/components/buyer_motivation.tpl"}
                    </div>
                {/if}

                {if $settings.abt__device === "mobile" && $smarty.capture.discussion_and_rating|trim}
                    <div class="ut2__vendor-info-b--rating">
                        {$smarty.capture.discussion_and_rating nofilter}
                    </div>
                {/if}
            </div>

            {if $settings.abt__device !== "mobile"}
                {if $vendor_info.ab__short_description && $block.properties.abt__ut2_mv_type === "f"}
                    <div class="ut2__vendor-info-b--description">{$vendor_info.ab__short_description|strip_tags|truncate:$block.properties.abt__ut2_mv_description_length}</div>
                {elseif $vendor_info.company_description && $block.properties.abt__ut2_mv_type === "f"}
                    <div class="ut2__vendor-info-b--description">{$vendor_info.company_description|strip_tags|truncate:140:"...":true}</div>
                {/if}

                {if $smarty.capture.discussion_and_rating|trim}
                    <div class="ut2__vendor-info-b--rating">
                        {$smarty.capture.discussion_and_rating nofilter}
                    </div>
                {/if}
            {/if}

            {if $settings.abt__device === "mobile"}
                <div class="ut2__vendor-info-b--contacts">
                    {if $block.properties.abt__ut2_mv_contacts === "Y"}
                        <div class="ut2__vendor-info-b--address">
                            {include file="addons/abt__unitheme2_mv/blocks/components/vendor_contacts.tpl"}
                        </div>
                    {/if}

                    {hook name="abt__ut2_mv:vendor_info_block_contacts"}{/hook}

                    {if !$hide_vendor_store && !(strpos($smarty.request.dispatch,'companies.products')===0)}
                        <a href="{"companies.products?company_id=`$vendor_info.company_id`"|fn_url}" title="" class="ut2__vendor-info-b--button_products"><span class="ut2-icon ut2-icon-outline-archive"></span></a>
                    {/if}
                </div>
            {/if}
        </div>

        {if $block.properties.abt__ut2_mv_motivation === "Y" && $settings.abt__device !== "mobile"}
            <div class="ut2__vendor-info-b--motivation">
                {include file="addons/abt__unitheme2_mv/blocks/components/buyer_motivation.tpl"}
            </div>
        {/if}

        {if $settings.abt__device !== "mobile"}
            <div class="ut2__vendor-info-b--contacts">

                {if $block.properties.abt__ut2_mv_contacts === "Y"}
                    <div class="ut2__vendor-info-b--address">
                        {include file="addons/abt__unitheme2_mv/blocks/components/vendor_contacts.tpl"}
                    </div>
                {/if}

                {hook name="abt__ut2_mv:vendor_info_block_contacts"}{/hook}
            </div>
        {/if}
    </div>
</div>
