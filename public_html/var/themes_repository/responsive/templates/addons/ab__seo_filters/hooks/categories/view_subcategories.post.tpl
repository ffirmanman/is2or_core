{foreach $ab__sf_pages_as_subcategories as $sp}
    <li class="ty-subcategories__item{if $sp.ab__sf_icon} cat-img{/if}">
        <a href="{"categories.view?category_id=`$sp.category_id`&features_hash=`$sp.features_hash`"|fn_url}">
        {if $sp.ab__sf_icon}
            {hook name="ab__sf:subcategory"}{/hook}
            {include file="common/image.tpl"
                show_detailed_link=false
                images=$sp.ab__sf_icon
                no_ids=true
                image_id="ab__sf_icon_`$sp.sf_id`"
                image_width=$settings.Thumbnails.category_lists_thumbnail_width
                image_height=$settings.Thumbnails.category_lists_thumbnail_height
                class="ty-subcategories-img"
            }
        {/if}
        <span>{$sp.name_in_subcategory_block}</span>
        </a>
    </li>
{/foreach}