{script src="js/addons/ab__seo_reviews/func.js"}

{$tmpl='products_multicolumns'}
{$ut2_load_more = $settings.abt__ut2.load_more.product_list == "YesNo::YES"|enum}

<div class="ut2-breadcrumbs__wrapper">
{hook name="products:ut2_main_info_breadcrumbs"}
    {include file="common/breadcrumbs.tpl"}
{/hook}
</div>

<div id="products_list">
    <div class="ty-wysiwyg-content">
        <div {live_edit name="ab__sr_reviews_pages:description:`$reviews_page.reviews_page_id`"} data-ca-live-editor-object-id="{$reviews_page.object_id}" data-ca-live-editor-object-type="{$reviews_page.object_type}">{$reviews_page.description nofilter}</div>
    </div>

    {if $products}
        {include file="common/pagination.tpl" id="pagination_contents" extra_url="" search=$search}

        {if $ut2_load_more}{include file="common/abt__ut2_pagination.tpl" type="`$runtime.controller`_`$runtime.mode`" position="top" object="products"}{/if}

        {foreach $products as $product}
            <div class="ab-sr__product">
                <div class="ab-sr__product-data">
                    {include
                        file="blocks/list_templates/grid_list.tpl"
                        columns=1
                        ut2_load_more=false
                        show_trunc_name=true
                        show_rating=true
                        show_old_price=true
                        show_price=true
                        show_clean_price=true
                        show_list_discount=$settings.abt__ut2.product_list.$tmpl.show_you_save[$settings.abt__device] == 'Y'
                        hide_qty_label=true
                        show_sku_label=true
                        show_amount_label=false
                        show_add_to_cart=$show_add_to_cart|default:true
                        show_sku=$settings.abt__ut2.product_list.$tmpl.show_sku[$settings.abt__device] == 'Y'
                        show_qty=$settings.abt__ut2.product_list.$tmpl.show_qty[$settings.abt__device] == 'Y'
                        show_brand_logo=$settings.abt__ut2.product_list.$tmpl.show_brand_logo[$settings.abt__device] == 'Y'
                        show_list_buttons=false
                        show_features=false
                        show_descr=false
                        show_product_labels=true
                        show_discount_label=true
                        show_shipping_label=true
                        
                        no_pagination=true
                        no_sorting=true
                        products=[$product]
                        but_role="action"
                    }
                </div>
                <div class="ab-sr__posts" id="ab_sr__posts_{$product.product_id}">
                    {foreach $product.ab__sr_posts as $post}
                        {include file="addons/product_reviews/views/product_reviews/components/post.tpl"
                            product_review=$post
                        }
                    {/foreach}

                    {if $product.ab__sr_next_posts_page}
                        <a class="cm-ab-sr-show-more" data-ca-category-id="{$reviews_page.object_id}" data-ca-ab-sr-product-id="{$product.product_id}" data-ca-ab-sr-posts-page="{$product.ab__sr_next_posts_page}">{__("ab__sr.show_more_reviews")}</a>
                    {/if}
                <!--ab_sr__posts_{$product.product_id}--></div>
            </div>
        {/foreach}

        {ab__hide_content bot_type="ALL"}
            {if $ut2_load_more}{include file="common/abt__ut2_pagination.tpl" type="`$runtime.controller`_`$runtime.mode`" position="bottom" object="products"}{/if}

            {include file="common/pagination.tpl" id="pagination_contents" extra_url="" search=$search}
        {/ab__hide_content}
    {else}
        <p class="ty-no-items">{__("no_posts_found")}</p>
    {/if}
<!--products_list--></div>

{include file="common/previewer.tpl"}

{script src="js/addons/ab__seo_reviews/func.js"}
{script src="js/addons/product_reviews/fallback.js"}
{script src="js/addons/product_reviews/index.js"}

{capture name="mainbox_title"}<span {live_edit name="ab__sr_reviews_pages:h1:`$reviews_page.reviews_page_id`"} data-ca-live-editor-object-id="{$reviews_page.object_id}" data-ca-live-editor-object-type="{$reviews_page.object_type}">{$reviews_page.h1}</span>{/capture}
