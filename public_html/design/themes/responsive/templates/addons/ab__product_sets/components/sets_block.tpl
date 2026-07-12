<div id="results_ab__product_sets">
    {include file="addons/ab__product_sets/components/results.tpl"}
</div>
<select id="ab__product_sets" multiple="multiple" name="ab__product_sets[]" data-ca-product-id="{$product.product_id}">
    {foreach $product.ab__product_sets as $set}
        <optgroup label="{$set.set}">
            {foreach $set.products as $p}
                <option value="{$p.product_id}">{$p.ab__pos_label nofilter}</option>
            {/foreach}
        </optgroup>
    {/foreach}
</select>