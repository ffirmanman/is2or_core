{$dropdown_id="contacts_{$block.block_id}_{$vendor_info.company_id}"}
<div class="ut2-pn">
    <div class="ut2-pn__combination cm-combination" id="sw_dropdown_{$dropdown_id}">
        {if $settings.abt__device != "mobile"}
            {if $mv_vendor_info_block_type == "f"}
                {$vendor_info.phone}
            {else}
                <div class="vc__c">{if $vendor_info.phone}<span class="ut2-icon ut2-icon-local_phone"></span>{else}<span class="ut2-icon ut2-icon-location"></span>{/if}{__("abt__ut2.contacts")}</div>
            {/if}
        {else}
            {if $vendor_info.phone}
                <span class="ut2-icon ut2-icon-local_phone"></span>
            {else}
                <span class="ut2-icon ut2-icon-location"></span>
            {/if}
        {/if}
    </div>
    <div class="hidden cm-popup-box ty-dropdown-box__content" id="dropdown_{$dropdown_id}" style="display:none;">
        <div class="ut2-popup-box-title">
            {__("vendor_communication.contact_vendor")}
            <a href="javascript:void(0);" data-ca-external-click-id="sw_dropdown_{$dropdown_id}" rel="nofollow"
               class="cm-external-click cm-combination ut2-btn-close"><i class="ut2-icon-baseline-close"></i></a>
        </div>

        <div class="ut2-pn__items">
            {capture name="vendor_contacts"}
                {if $vendor_info.city}{$vendor_info.city}, {/if}
                {if $vendor_info.country}{$vendor_info.country}, {/if}
                {$vendor_info.address}
            {/capture}

            {capture name="vendor_social_links"}
                {foreach $vendor_info.social_links as $type => $link}
                    {if $link}
                        <a href="{$link}" target="_blank"><i class="ut2-icon-{$type}"></i></a>
                    {/if}
                {/foreach}
            {/capture}

            {if $vendor_info.phone || $vendor_info.email || $smarty.capture.vendor_contacts|trim|rtrim:", " || $smarty.capture.vendor_social_links|trim}
                <div class="ut2-pn__other-contacts">
                    {if $vendor_info.phone}
                        <div class="ut2-pn__other-contacts__item phone">
                            <small>{__("phone")}</small>
                            <div><bdi><a href="tel:{$vendor_info.phone}">{$vendor_info.phone}</a></bdi></div>
                        </div>
                    {/if}

                    {if $vendor_info.email}
                        <div class="ut2-pn__other-contacts__item">
                            <small>{__("email")}</small>
                            <div><bdi><a href="mailto:{$vendor_info.email}">{$vendor_info.email}</a></bdi></div>
                        </div>
                    {/if}

                    {if $smarty.capture.vendor_contacts|trim|rtrim:", "}
                        <div class="ut2-pn__other-contacts__item">
                            <small>{__("address")}</small>
                            <div><bdi>{$smarty.capture.vendor_contacts|trim|rtrim:", "}</bdi></div>
                        </div>
                    {/if}

                    {if $smarty.capture.vendor_social_links|trim}
                        <div class="ut2-pn__other-contacts__item social">
                            <small>{__("abt__ut2_mv.vendor_social", ["[vendor]" => $company_data.company])}</small>
                            <div class="ut2-social-links">
                                {$smarty.capture.vendor_social_links nofilter}
                            </div>
                        </div>
                    {/if}
                </div>
            {/if}
        </div>
        <div class="buttons-container">
            <a class="ty-btn ty-btn__outline" href="{"companies.view?company_id=`$vendor_info.company_id`"|fn_url}#vendor-companies-contacts">{__("abt__ut2_mv.vendor_contact_page")}</a>
        </div>
    </div>
</div>
