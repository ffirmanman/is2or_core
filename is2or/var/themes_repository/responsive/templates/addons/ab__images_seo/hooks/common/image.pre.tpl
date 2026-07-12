{$product_obj_type = "Tygh\Enum\Addons\Ab_imagesSeo\ObjectTypes::PRODUCT"|constant}
{$category_obj_type = "Tygh\Enum\Addons\Ab_imagesSeo\ObjectTypes::CATEGORY"|constant}
{$feature_obj_type = "Tygh\Enum\Addons\Ab_imagesSeo\ObjectTypes::FEATURE"|constant}

{$alt_attr_type = "Tygh\Enum\Addons\Ab_imagesSeo\AttributeTypes::ALT"|constant}
{$title_attr_type = "Tygh\Enum\Addons\Ab_imagesSeo\AttributeTypes::TITLE"|constant}
{$image_number_attr_type = "Tygh\Enum\Addons\Ab_imagesSeo\AttributeTypes::IMAGE_NUMBER"|constant}

{$image_object_type = fn_ab__is_get_image_object_type($images.pair_id)}

{if $image_object_type}
    {$alt = $image_additional_attrs.alt}
    {if !$alt|trim || $addons.ab__images_seo.override == 'always_generate'}
        {if $image_object_type.object_type == 'product'}
            {$num = 'alt'|fn_ab__is_get_image_count:$product.product_id:$images.pair_id}
            {if $num > 0}
                {$alt = fn_ab__is_generate_text($product_obj_type, $alt_attr_type, $product.product, $num, $product.variation_features)}
            {/if}
        {elseif $image_object_type.object_type == 'category'}
            {$alt = $ab__is_object_name|default:fn_ab__is_generate_text($category_obj_type, $alt_attr_type, $category.category)}
        {elseif $image_object_type.object_type == 'feature_variant'}
            {$alt = fn_ab__is_generate_text($feature_obj_type, $alt_attr_type, $variant_data.variant|default:$brand_feature.variant)}
        {elseif $image_object_type.object_type == 'variant_image'}
            {$alt = fn_ab__is_generate_text($product_obj_type, $alt_attr_type, fn_ab__is_get_product_option_variant_text($product, $image_object_type.object_id), 1)}
        {/if}
    {/if}

    {$title = $image_additional_attrs.title}
    {if !$title|trim || $addons.ab__images_seo.override == 'always_generate'}
        {if $image_object_type.object_type == 'product'}
            {$num = 'title'|fn_ab__is_get_image_count:$product.product_id:$images.pair_id}
            {if $num > 0}
                {$text = $product.product}
                {if $product.variation_features}
                    {foreach $product.variation_features as $feature}
                        {$text = "`$text`, `$feature.description`: `$feature.variant`"}
                    {/foreach}
                {/if}

                {$title = fn_ab__is_generate_text($product_obj_type, $title_attr_type, $text, $num)}
            {/if}
        {elseif $image_object_type.object_type == 'category'}
            {$title = $ab__is_object_name|default:fn_ab__is_generate_text($category_obj_type, $title_attr_type, $category.category)}
        {elseif $image_object_type.object_type == 'feature_variant'}
            {$title = fn_ab__is_generate_text($feature_obj_type, $title_attr_type, $variant_data.variant|default:$brand_feature.variant)}
        {elseif $image_object_type.object_type == 'variant_image'}
            {$title = fn_ab__is_generate_text($product_obj_type, $title_attr_type, fn_ab__is_get_product_option_variant_text($product, $image_object_type.object_id), 1)}
        {/if}
    {/if}

    {$detailed_title = $image_link_additional_attrs.title}
    {if !$detailed_title|trim || $addons.ab__images_seo.override == 'always_generate'}
        {if $image_object_type.object_type == 'product'}
            {$num = 'title'|fn_ab__is_get_image_count:$product.product_id:$images.pair_id}
            {if $num > 0}
                {$text = $product.product}
                {if $product.variation_features}
                    {foreach $product.variation_features as $feature}
                        {$text = "`$text`, `$feature.description`: `$feature.variant`"}
                    {/foreach}
                {/if}

                {$detailed_title = fn_ab__is_generate_text($product_obj_type, $title_attr_type, $text, $num)}
            {/if}
        {elseif $image_object_type.object_type == 'category'}
            {$detailed_title = fn_ab__is_generate_text($category_obj_type, $title_attr_type, $category.category)}
        {/if}
    {/if}

    {$image_additional_attrs.alt=$alt scope=parent}
    {$image_additional_attrs.title=$title scope=parent}
    {$image_link_additional_attrs.title=$detailed_title scope=parent}
{/if}