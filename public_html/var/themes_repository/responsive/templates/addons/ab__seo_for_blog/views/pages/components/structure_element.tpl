{if $structure_elements}
    {$link_key=$link_key|default:0}
    <ul id="ab-sfb-item-{$link_key}-{$block.snapping_id}">
        {foreach $structure_elements as $key=>$structure_element}
            {$link_key={counter name="`$block.block_id``$block.snapping_id`"}}
            <li class="ab--sfb-nav-item">
                <a class="ab--sfb-nav-link{if $structure_element.children} ab--sfb-nav-wchildren{/if} "
                   href="#ab-sfb-header-{$link_key}">{$structure_element.text}</a>
                {if $structure_element.children}
                    <span id="sw_ab-sfb-item-{$link_key}-{$block.snapping_id}"
                          class="cm-combination-sfb ab--sfb-toggle ty-float-right open"></span>
                    {include file="addons/ab__seo_for_blog/views/pages/components/structure_element.tpl" structure_elements=$structure_element.children}
                {/if}
            </li>
        {/foreach}
    </ul>
{/if}