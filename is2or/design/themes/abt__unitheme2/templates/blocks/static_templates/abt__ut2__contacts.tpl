{** block-description:tmpl_abt__ut2__contacts **}

{$dropdown_id=$block.snapping_id}
<div class="ut2-pn">
    <div class="ut2-pn__wrap ut2-pn__row cm-combination" id="sw_dropdown_{$dropdown_id}">
        <span><span class="ut2-pn__icon ut2-icon">&nbsp;</span><span class="ut2-pn__title"><bdo dir="ltr">{$settings.Company.company_phone}</bdo></span></span>
    </div>
    <div class="ut2-pn__contacts">
        <div id="dropdown_{$dropdown_id}" class="cm-popup-box ut2-pn__items-full ty-dropdown-box__content hidden" style="display:none;">
            <a href="javascript:void(0);" data-ca-external-click-id="sw_dropdown_{$dropdown_id}" rel="nofollow" class="cm-external-click ut2-btn-close hidden"><i class="ut2-icon-baseline-close"></i></a>
            <div class="ut2-pn__items">
                {hook name="abt__ut2_contacts_block:phones"}
                    <div>
                        {if $settings.Company.company_phone|trim}
                            <a href="tel:{$settings.Company.company_phone}" title=""><bdo dir="ltr">{$settings.Company.company_phone}</bdo></a>
                        {/if}
                        {if $settings.Company.company_phone_2|trim}
                            <a href="tel:{$settings.Company.company_phone_2}" title=""><bdo dir="ltr">{$settings.Company.company_phone_2}</bdo></a>
                        {/if}
                        <!-- Edit work time -->
                        <p><small>{__('call_request.work_time')}</small></p>
                    </div>
                {/hook}

                {if $block.properties.abt__ut2__block_contacts_show_social_buttons == "YesNo::YES"|enum}
                    <!-- Edit Social links -->
                    <div class="ut2-social-links">
                        {__('abt__ut2__block_contacts.social_links')}
                    </div>
                {/if}

                {if $block.properties.abt__ut2__block_contacts_show_email == "YesNo::YES"|enum && $settings.Company.company_orders_department|trim}
                    <div><small>{__("email")}</small><a href="mailto:{$settings.Company.company_orders_department|trim}" style="font-weight:normal;font-size: inherit;">{$settings.Company.company_orders_department}</a></div>
                {/if}

                {if $block.properties.abt__ut2__block_contacts_show_addres == "YesNo::YES"|enum && ($settings.Company.company_country|fn_get_country_name || $settings.Company.company_city || $settings.Company.company_address)}
                    <div><small>{__("address")}</small><span>{$settings.Company.company_country|fn_get_country_name}, {$settings.Company.company_city}, {$settings.Company.company_address}</span></div>
                {/if}
            </div>
        </div>
    </div>
</div>
