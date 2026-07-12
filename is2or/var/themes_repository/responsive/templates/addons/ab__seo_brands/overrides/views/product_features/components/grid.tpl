<div class="ty-features-all">
    {foreach $variants as $index => $variants_group}
        <div class="ty-features-all__group ty-column6">
            {if $variants_group}
                {include file="common/subheader.tpl" title=$index|default:"@"}
                <ul class="ty-features-all__list">
                    {foreach $variants_group as $variant}
                        <li class="ty-features-all__list-item">
                            <a href="{"product_features.view?variant_id=`$variant.variant_id`"|fn_url}" class="ty-features-all__list-a">{$variant.variant|fn_text_placeholders}</a>
                        </li>
                    {/foreach}
                </ul>
            {/if}
        </div>
    {/foreach}
</div>