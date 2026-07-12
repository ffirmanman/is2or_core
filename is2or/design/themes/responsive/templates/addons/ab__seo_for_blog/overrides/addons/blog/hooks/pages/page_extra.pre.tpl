{if $page.page_type == $smarty.const.PAGE_TYPE_BLOG}

    {if $subpages}

        {capture name="mainbox_title"}{/capture}
        <div class="ab--sfb-articles">
            {include file="common/pagination.tpl"}
            {foreach from=$subpages item="subpage"}
                <div class="ab--sfb__item">
                    {if $subpage.main_pair}
                        <a href="{"pages.view?page_id=`$subpage.page_id`"|fn_url}" class="ab--sfb-post-image">
                            <div class="ab--sfb__img-block">
                                {include file="common/image.tpl" obj_id=$subpage.page_id images=$subpage.main_pair}
                            </div>
                        </a>
                    {/if}
                    <div>
                        {if $subpage.author_data}
                        <div>
                            {if $subpage.author_data.main_pair}
                                {include file="common/image.tpl" obj_id=$subpage.author_data.author_id images=$subpage.author_data.main_pair class="ab--sfb-author-img" image_width=60}
                            {else}
                                <span class="ty-icon ty-icon-user ab--sfb-author-img"></span>
                            {/if}

                            <span>&nbsp;&bullet;&nbsp;</span>
                            <a class="ab--sfb-author" href="{"ab__sfb_authors.view?author_id=`$subpage.author_data.author_id`"|fn_url}">{$subpage.author_data.name}</a>
                            <span>&nbsp;&bullet;&nbsp;</span>
                            <span class="ab--sfb__date">{$subpage.timestamp|date_format:"`$settings.Appearance.date_format`"}</span>
                        </div>
                        {else}
                            <div class="ab--sfb__date">{$subpage.timestamp|date_format:"`$settings.Appearance.date_format`"}</div>
                        {/if}


                        <a href="{"pages.view?page_id=`$subpage.page_id`"|fn_url}" class="ab--sfb-post-title">
                            <h2 class="ab--sfb__post-title">
                                {$subpage.page}
                            </h2>
                        </a>

                        <div class="ab--sfb__description">
                            <div class="ty-wysiwyg-content">
                                <div>{$subpage.spoiler|strip_tags|truncate:260}</div>
                            </div>
                            <div class="ab--sfb__read-more ty-mt-l">
                                <a class="ty-btn ty-btn__secondary"
                                   href="{"pages.view?page_id=`$subpage.page_id`"|fn_url}">{__("blog.read_more")}</a>
                            </div>
                        </div>
                    </div>
                </div>
                {if !$item@last}<hr/>{/if}
            {/foreach}

            {include file="common/pagination.tpl"}
        </div>
    {/if}

    {if $page.description}
        {capture name="mainbox_title"}<span
            class="ab--sfb__post-title" {live_edit name="page:page:{$page.page_id}"}>{$page.page}</span>{/capture}
    {/if}

{/if}