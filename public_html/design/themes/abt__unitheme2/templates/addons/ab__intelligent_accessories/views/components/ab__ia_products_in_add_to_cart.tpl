{$p_id=$smarty.request.dispatch|replace:"checkout.add..":""}
{if $p_id > 0}
    {$exclude_pid=array_keys(fn_array_value_to_key($smarty.session.cart.products, 'product_id'))}
    {$d=fn_ab__ia_get_join_list_by_product(['product_id' => $p_id], "in_add_to_cart", $addons.ab__intelligent_accessories.max_ia_tabs_in_added_to_cart|default:2)}
    {if $d[0] and $d[0]|is_array}
        <div class="ty-ab__ia_joins clearfix">
            <span>{__("ab__ia.products_in_add_to_cart")}</span>
            {script src="js/tygh/tabs.js"}
            <div class="ty-tabs cm-j-tabs cm-j-tabs-disable-convertation">
                <ul class="ty-tabs__list" style="padding-right:0">
                {foreach $d[0] as $j}
                    <li id="ab__ia_{$j@key}" class="abt__ut2_grid_tabs ty-tabs__item cm-js {if $j@first}active{/if}">
                        <span>{$j.name nofilter}</span>
                    </li>
                {/foreach}
                </ul>
            </div>

            <div class="cm-tabs-content ty-tabs__content clearfix">
                {foreach $d[0] as $j}
                    <div id="content_ab__ia_{$j@key}">
                        {include file="addons/ab__intelligent_accessories/views/components/product_list_templates/in_add_to_cart.tpl" no_pagination=true no_sorting=true products=['product_id'=>$p_id,'join_id'=>$j.join_id, 'exclude_pid' => $exclude_pid]|fn_ab__ia_get_products_by_join:$addons.ab__intelligent_accessories.max_products_of_ia_tab_in_added_to_cart|default:2}
                    </div>
                {/foreach}
            </div>
        </div>
        <script>
            Tygh.$.commonInit('div.ty-ab__ia_joins.clearfix');
        </script>
    {/if}
{/if}
