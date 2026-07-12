{if $page.author_data && !$subpages}
    {$author_data = $page.author_data}
    <div class="ab--sfb-author{if $author_full} author-inline{/if}">
        {if $author_data.main_pair}
            {include file="common/image.tpl" obj_id=$author_data.author_id images=$author_data.main_pair class="ab--sfb-author-img"}
            {else}
            <span class="ty-icon ty-icon-user ab--sfb-author-img"></span>
        {/if}
        <div class="ab--sfb-author-name">{$author_data.name}</div>
        {if $author_data.author_rank}
        <div class="ab--sfb-author-rank">
            <span>{__("ab__sfb.author.rank")}: </span>{$author_data.author_rank}
        </div>
        {/if}
        {if $author_data.appointment}
            <div class="ab--sfb-author-appointment">
                <span>{__("ab__sfb.author.appointment")}: </span>{$author_data.appointment}
            </div>
        {/if}
        {if !$author_full && $author_data.short_description}
            <div class="ab--sfb-author-about-short">{$author_data.short_description}</div>
        {/if}
        {if $author_full && $author_data.full_description}
            <div class="ab--sfb-author-about ty-wysiwyg-content">{$author_data.full_description nofilter}</div>
        {/if}
        {if !$author_full}
            <a class="ab--sfb-author-link" href="{"ab__sfb_authors.view?author_id=`$author_data.author_id`"|fn_url}">{__("ab__sfb.all_authors_posts")}</a>
        {/if}
        {if $author_full && $author_data.author_url}
            <a class="ab--sfb-author-link" target="_blank" href="{$author_data.author_url}">{__('ab__sfb.author.url')}
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.33333 14.5C2.96667 14.5 2.65267 14.3693 2.39133 14.108C2.13 13.8467 1.99956 13.5329 2 13.1667V3.83333C2 3.46667 2.13067 3.15267 2.392 2.89133C2.65333 2.63 2.96711 2.49956 3.33333 2.5H8V3.83333H3.33333V13.1667H12.6667V8.5H14V13.1667C14 13.5333 13.8693 13.8473 13.608 14.1087C13.3467 14.37 13.0329 14.5004 12.6667 14.5H3.33333ZM6.46667 10.9667L5.53333 10.0333L11.7333 3.83333H9.33333V2.5H14V7.16667H12.6667V4.76667L6.46667 10.9667Z" fill="currentColor"/>
                </svg>
            </a>
        {/if}
    </div>
{/if}
