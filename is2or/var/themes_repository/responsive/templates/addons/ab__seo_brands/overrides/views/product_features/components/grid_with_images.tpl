<div class="ab__features-all">
    {foreach $variants as $variant}
        <div class="ab__features-all__group ty-column6">
            <a href="{"product_features.view?variant_id=`$variant.variant_id`"|fn_url}" class="ty-features-all__list-a">
                {if $variant.image_pair}
                    {include file="common/image.tpl" images=$variant.image_pair image_height=100 image_width=170}
                {/if}
                <span>{$variant.variant|fn_text_placeholders}</span>
                
            </a>
        </div>
    {/foreach}
</div>