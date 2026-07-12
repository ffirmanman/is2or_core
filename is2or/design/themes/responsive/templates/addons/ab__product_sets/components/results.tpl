{if $cart}
    <ul class="ab__ps-list">
        <input type="hidden" name="ab__ps_active" value="1">
        {foreach $cart.products as $key => $product}
            {if $product.product_id != $product_id && !$product.extra.exclude_from_calculate}
                <li class="ab__ps-item">
                    <input type="hidden" name="ab__ps_product_data[{$key}][product_id]" value="{$product.product_id}">
                    <input type="hidden" name="ab__ps_product_data[{$key}][amount]" value="1">
                    {foreach $product.extra.product_options as $option_id => $variant_id}
                        <input type="hidden" name="ab__ps_product_data[{$key}][product_options][{$option_id}]" value="{$variant_id}">
                    {/foreach}

                    <span class="ab__ps-item_price">+&nbsp;{include file="common/price.tpl" value=$product.price}</span>
                    <span class="ab__ps-item_title"><a href="{"products.view&product_id=`$product.product_id`"|fn_url}" target="_blank">{$product.product_id|fn_get_product_name}</a></span>
                    <span class="ab__ps-item_quick-delete" data-ca-ProductId="{$product.product_id}">×</span>
                </li>
            {/if}
        {/foreach}
    </ul>

    <div class="ab__ps-totals">
        <div class="ab__ps-totals_discount">
            <span class="ab__ps-totals_title">{__('ab__ps.results.subtotal')}:</span>
            <span class="ab__ps-totals_value">{include file="common/price.tpl" value=$cart.subtotal}</span>
        </div>

        {if $cart.subtotal_discount}
            <div class="ab__ps-totals_discount">
                <span class="ab__ps-totals_title">{__('ab__ps.results.discount')}:</span>
                <span class="ab__ps-totals_value">-&nbsp;{include file="common/price.tpl" value=$cart.subtotal_discount}</span>
            </div>
        {/if}

        <div class="ab__ps-totals_total">
            <span class="ab__ps-totals_title">{__('ab__ps.results.total')}:</span>
            <span class="ab__ps-totals_value">{include file="common/price.tpl" value=$cart.total}</span>
        </div>
    </div>
{else}
    <span>&nbsp;</span>
{/if}
