{if $page.description && $page.page_type == $smarty.const.PAGE_TYPE_BLOG}
    {if $page.main_pair}
        <div class="ty-blog__img-block">
            {include file="common/image.tpl" obj_id=$page.page_id images=$page.main_pair}
        </div>
    {/if}
    {if $settings.abt__device === "mobile"}
        <div>
            <p>
                {__("ab__sfb.contents")}
            </p>
            {include file="addons/ab__seo_for_blog/blocks/static_templates/ab__sfb_table_of_content.tpl"}
        </div>
    {/if}
{/if}
