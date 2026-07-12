{strip}
{if $item.subitems}
    {include file="addons/ab__fast_navigation/blocks/ab__fast_navigation/components/second_level_items.tpl" item=$item}
{/if}
{if ($item.subitems && $item.href && $properties.ab__fn_add_link == 'Y') || (!$item.subitems && $item.href)}
    <a href="{$item.href|fn_url}" class="ab-fn-level-item ab-fn-second-level-item link-mode ab-fn-common-item-link ty-column{$properties.ab__fn_number_of_columns_desktop}{if !$item.subitems} ab-fn-no-second-lvl{$min_height=$first_level_icon_width+48+14}{else}{$min_height=$first_level_icon_width}{/if}" style="min-height: {$min_height}px;">
        <div class="ab-fn-content ab-fn-sl-content">
            <div class="ab-fn-item-header">
                <span class="ab-fn-caption">{__("ab__fn.more")}</span>
            </div>
            <div class="ab-fn-arrow-more"><i class="ut2-icon-arrow_forward_black"></i></div>
        </div>
    </a>
{/if}
{/strip}