{if $tags}
    {$size = 4}
    {split data=$tags size=$size assign="splitted_filter" preverse_keys=true}

    <div class="ty-features-all">
        {foreach from=$splitted_filter item="group"}
            {foreach from=$group item="tags" key="index"}
                {strip}
                <div class="ty-features-all__group ty-column6">
                    {if $tags}
                        {include file="common/subheader.tpl" title=$index}
                        <ul class="ty-features-all__list">
                            {foreach from=$tags item="tag"}
                                <li class="ty-features-all__list-item"><a href="{"tags.view?tag_id=`$tag.tag_id`"|fn_url}" class="ty-features-all__list-a">{$tag.tag nofilter}</a></li>
                            {/foreach}
                        </ul>
                    {else}&nbsp;{/if}
                </div>
                {strip}
            {/foreach}
        {/foreach}
    </div>
{/if}
{capture name="mainbox_title"}{__('tags')}{/capture}