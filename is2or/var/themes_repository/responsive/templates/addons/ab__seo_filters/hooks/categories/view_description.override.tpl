{strip}
    {hook name="categories:view_description"}
    {if $category_data.short_description}
        <div class="ty-wysiwyg-content ty-mb-s ab__sf_short_desc" {if $smarty.const.ABSF_NEW_VERSION_UT2}style="order: -1;"{else}style="order: 1;"{/if}>
            {$category_data.short_description|trim nofilter}
        </div>
    {/if}
    <div class="ab__sf_cat_desc" {if $runtime.customization_mode.live_editor}{live_edit name="category:description:{$category_data.category_id}"}{/if}>
            {if $category_data.description || $category_data.ab__mcd_descs}
                {if $ab__sf_seo_page == 'Y' && !$category_data.ab__mcd_descs}
                    <div class="ty-wysiwyg-content ty-mb-s">
                        {$category_data.description|trim nofilter}
                    </div>
                {else}
                    {hook name="ab__multiple_cat_descriptions:view_description"}
                    <div class="ty-wysiwyg-content ty-mb-s">
                        {$category_data.description|trim nofilter}
                    </div>
                    {/hook}
                {/if}
            {/if}
    </div>
    {/hook}
{/strip}