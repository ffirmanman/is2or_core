{$show_sticky_add_to_cart=false}
{if $b.type == 'abt__ut2'}
    {*workoround for product scroller initialization in same block (main)*}
    {$block_copy=$block}
    {$block_copy.properties=[]}
    {counter name="single_banner" assign="single_banner" print=false}
    {$block_copy.snapping_id = "`$block_copy.snapping_id`_`$single_banner`"}

    {include file="addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl" block=$block_copy }
{elseif $b.type == "G"}
    <div class="ut2-banner">
        {if $b.url}<a href="{$b.url|fn_url}"{if $b.target == "B"} target="_blank"{/if}>{/if}
            {include file="common/image.tpl" images=$b.main_pair image_auto_size=true}
            {if $b.url}</a>{/if}
    </div>
{else}
    <div class="ut2-banner ty-wysiwyg-content">
        {$b.description nofilter}
    </div>
{/if}