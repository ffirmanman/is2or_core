{if $tabs}
    {foreach $tabs as $tab}
        {if empty($tab_id) || $tab_id == $tab.tab_id}
            {$capture_name = "ab__tab_content`$tab.tab_id`"}

            {if !isset($smarty.capture.$capture_name)}
                {capture name=$capture_name}
                    {if $tab.tab_type === 'B'}
                        {render_block block_id=$tab.block_id dispatch='products.view' use_cache=false parse_js=false}
                    {elseif $tab.tab_type === 'T'}
                        {include file=$tab.template product_tab_id=$tab.html_id}
                    {/if}
                {/capture}
            {/if}

            {if $render_tabs}
                {$smarty.capture.$capture_name nofilter}
            {/if}
        {/if}
    {/foreach}
{/if}