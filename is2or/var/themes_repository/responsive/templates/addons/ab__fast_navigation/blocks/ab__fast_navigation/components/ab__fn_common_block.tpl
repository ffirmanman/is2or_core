{strip}
{if $items}
    {$properties = $block.properties}
    {$content = $block.content}
    {$first_level_icon_width=$properties.ab__fn_icon_width}
    {$second_level=$second_level|default:false}
    {$template_name=$template_name|default:'one_level'}

    {if $ab__fn_forced_one_level_view}
        {$second_level = false}
        {$template_name = 'one_level'}
    {/if}

    {$first_level_scroller = $properties.ab__fn_display_type == 'ab__fn_scroller' || $second_level}
    {$second_level_scroller = $properties.ab__fn_init_second_level_scroll == 'Y'}

    {$image_path = 'http_image_path'}
    {if $smarty.const.HTTPS === true}
        {$image_path = 'https_image_path'}
    {/if}

    {$object_type = 'static_data'}
    {$object_name_filed = 'descr'}
    {if $block.type == 'ab__fast_navigation_categories'}
        {$object_type = 'category'}
        {$object_name_filed = 'category'}
    {/if}

    <script>
        (function ( _, $ ) {
            _.ab__fn.blocks['{$block.grid_id}_{$block.block_id}'] = {
                block_type: "{$block.type}",
                columns: {
                    number_of_columns_desktop: {$properties.ab__fn_number_of_columns_desktop},
                    number_of_columns_desktop_small: {$properties.ab__fn_number_of_columns_desktop_small},
                    number_of_columns_tablet: {$properties.ab__fn_number_of_columns_tablet},
                    number_of_columns_tablet_small: {$properties.ab__fn_number_of_columns_tablet_small},
                    number_of_columns_mobile: {$properties.ab__fn_number_of_columns_mobile}
                },

                {if $first_level_scroller}
                    first_level_scroller: {
                        init_scrollbar: Boolean({$properties.ab__fn_init_scrollbar === 'Y'}),
                        inited: false,
                    },
                {/if}

                {if $second_level_scroller}
                    second_level_scroller: { }
                {/if}
            };
        })(Tygh, Tygh.$);
    </script>

    {assign var="cols_desktop"
    value=($block.properties.ab__fn_number_of_columns_desktop|intval > 0
    ? $block.properties.ab__fn_number_of_columns_desktop
    : 10)}

    {assign var="cols_desktop_small"
    value=($block.properties.ab__fn_number_of_columns_desktop_small|intval > 0
    ? $block.properties.ab__fn_number_of_columns_desktop_small
    : 6)}

    {assign var="cols_tablet"
    value=($block.properties.ab__fn_number_of_columns_tablet|intval > 0
    ? $block.properties.ab__fn_number_of_columns_tablet
    : 5)}

    {assign var="cols_tablet_small"
    value=($block.properties.ab__fn_number_of_columns_tablet_small|intval > 0
    ? $block.properties.ab__fn_number_of_columns_tablet_small
    : 4)}

    {assign var="cols_mobile"
    value=($block.properties.ab__fn_number_of_columns_mobile|intval > 0
    ? $block.properties.ab__fn_number_of_columns_mobile
    : 3)}

    <div
            class="ab-fn-parent ab-fn-block-{$block.grid_id}_{$block.block_id} {$block.user_class}{$first_level_scroller && $block.properties.ab__fn_init_scrollbar == 'YesNo::YES'|enum ? ' conf--scroll-progress-indicator' : ''}"
            style="
                    --cols-desktop:{$cols_desktop};
                    --cols-desktop-small:{$cols_desktop_small};
                    --cols-tablet:{$cols_tablet};
                    --cols-tablet-small:{$cols_tablet_small};
                    --cols-mobile:{$cols_mobile};
                    ">

        {if $first_level_scroller && $properties.ab__fn_init_scrollbar == 'Y'}
            <div id="ab__fn-scrollbar-{$block.grid_id}_{$block.block_id}" class="ab-fn-scrollbar">
                <div class="ab-fn-scrollbar-plate"></div>
            </div>
        {/if}

        <div class="ab-fn-levels-wrapper {if $second_level}is-multilevel{else}non-multilevel{/if}" style="--icon-width:{$block.properties.ab__fn_icon_width}px;">

        <div class="ab-fn-levels-inner-wrapper">

        <div class="ab-fn-levels-container">

        <div id="ab__fn-first-level-{$block.grid_id}_{$block.block_id}" class="ab-fn-one-of-levels ab-fn-first-level ab-fn-clipped {$properties.ab__fn_display_type} {$template_name} active">
            {foreach $items as $item}

                {assign var="has_subitems" value=!empty($item.subitems|default:[])}

                {if $second_level}
                    {$first_level_item_tag = 'div'}
                {else}
                    {$first_level_item_tag = 'a'}
                {/if}

                {hook name="ab__fast_navigation:first_level_item"}
                    <div data-item-id="{$item@key}" data-item-index="{$item@index}" class="ab-fn-level-item ab-fn-first-level-item{if $first_level_scroller} scroller-item{/if} ty-column{$properties.ab__fn_number_of_columns_desktop} {$item.class} {if $first_level_item_tag == 'a'}link-mode{else}expand-mode{/if}{if !empty($item.current)} current{/if}">
                        {hook name="ab__fast_navigation:first_level_item"}
                            <{$first_level_item_tag}{if $first_level_item_tag == 'a'} href="{$item.href|fn_url}"{/if} class="ab-fn-content ab-fn-fl-content">
                                {hook name="ab__fast_navigation:first_level_item_image"}
                                    <div class="ab-fn-image-wrap{if !$item.image || !$item.image.icon} ab-fn-no-image-wrapper{/if}" style="width: {$first_level_icon_width}px;">
                                        {if $item.image}
                                            {if $item.ab__fn_use_origin_image == 'Y'}
                                                {include file="common/image.tpl" ab__loading_spinner=true images=$item.image}
                                            {else}
                                                {include file="common/image.tpl" ab__loading_spinner=true image_height=$first_level_icon_width image_width=$first_level_icon_width images=$item.image}
                                            {/if}
                                        {else}
                                            <span class="ab-fn-no-image" style="width: {$first_level_icon_width}px"><i class="ty-no-image__icon ty-icon-image" title="{__("no_image")}"></i></span>
                                        {/if}
                                    </div>
                                {/hook}
                                <div class="ab-fn-item-header">
                                    <span class="ab-fn-caption" {live_edit name="`$object_type`:`$object_name_filed`:`$item@key`"}>{$item.item}</span>
                                    {if $item.ab__fn_label_text && $item.ab__fn_label_show == 'Y'}
                                        <span class="ab-fn-label" style="background: {$item.ab__fn_label_background};">
                                            <span style="color: {$item.ab__fn_label_color}" {live_edit name="`$object_type`:ab__fn_label_text:`$item@key`"}>{$item.ab__fn_label_text}</span>
                                        </span>
                                    {/if}
                                </div>
                            </{$first_level_item_tag}>
                        {/hook}
                    </div>
                {/hook}

            {/foreach}
        </div>

        {if $second_level}
            {foreach $items as $item}
                {$elem_id = "{$block.grid_id}_{$block.block_id}_{$item@key}"}
                {$is_first = false}{if $item@first}{$is_first = true}{/if}
                <div id="ab__fn-second-level-{$elem_id}_{$smarty.const.CART_LANGUAGE}" class="ab-fn-one-of-levels ab-fn-second-level{if $second_level_scroller} ab-fn-second-level-scroller{/if}{if $item.subitems} has-items{else} no-items{/if}{if $item.href} has-parent-href{else} no-parent-href{/if}" data-childs-count="{$item.subitems|count}" data-add-delimeter="{if $second_level_scroller}false{else}true{/if}">
                    {capture name="children"}
                        {if $is_first}
                            {include file="addons/ab__fast_navigation/blocks/ab__fast_navigation/components/second_level_block.tpl" item=$item scroller=$second_level_scroller}
                        {else}
                            {include file="addons/ab__fast_navigation/blocks/ab__fast_navigation/components/second_level_block.tpl" item=$item}
                        {/if}
                    {/capture}

                    {if $addons.ab__fast_navigation.load_by_ajax == 'Y'}
                        {$smarty.capture.children|fn_ab__fn_ajax_save:"ab__fn-second-level-{$elem_id}":$block.type}
                    {else}
                        {$smarty.capture.children nofilter}
                    {/if}
                </div>
            {/foreach}
        {/if}

        </div><!-- /.ab-fn-levels-container -->

        </div><!-- /.ab-fn-levels-inner-wrapper -->

        </div><!-- /.ab-fn-levels-wrapper -->

        {if $content.ab__fn_show_common_btn == 'Y'}
            <div class="ab-fn-common-link">
                {if $content.ab__fn_common_btn_type == 'ab__fn_cbt_btn'}
                    <a href="{$content.ab__fn_show_common_btn_link|fn_url}" class="ty-btn ty-btn__primary {$content.ab__fn_common_btn_class}">
                        <span>{$content.ab__fn_common_btn_text|default:__('ab__fn.front.button.defult_text')}</span>
                    </a>
                {else}
                    <a href="{$content.ab__fn_show_common_btn_link|fn_url}" class="ab-fn-common-text-link {$content.ab__fn_common_btn_class}">
                        <span>{$content.ab__fn_common_btn_text|default:__('ab__fn.front.button.defult_text')}</span>
                        <i class="{if $runtime.layout.theme_name == "abt__unitheme2"}ut2-icon-outline-arrow_forward{elseif $runtime.layout.theme_name == "abt__youpitheme"}ty-icon-right-open-thin{else}ty-product-switcher__icon ty-icon-right-circle{/if}"></i>
                    </a>
                {/if}
            </div>
        {/if}
    </div>
{/if}

{$suffix = ''}
{*{if !$config.tweaks.dev_js}
    {$suffix = '.min'}
{/if}*}

{script src="js/addons/ab__fast_navigation/ab__fn_customer`$suffix`.js"}
{/strip}