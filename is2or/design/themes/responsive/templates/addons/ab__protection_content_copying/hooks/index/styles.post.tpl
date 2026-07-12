{if ($addons.ab__protection_content_copying.non_protection_for_admin != 'Y' && $smarty.session.auth.user_type != 'A') || empty($smarty.session.ab__pcc_status) || $smarty.session.ab__pcc_status != 'DISABLED'}
    {style src="addons/ab__protection_content_copying/styles.less"}

    {if $addons.ab__protection_content_copying.non_protection_classes}
        <style>
            {foreach from=explode(',', trim($addons.ab__protection_content_copying.non_protection_classes)) item=item}
            .{trim($item)} *, .{trim($item)} {
                -moz-user-select: text !important;
                -webkit-user-select: text !important;
                -ms-user-select: text !important;
                -o-user-select: text !important;
                user-select: text !important;
            }
            {/foreach}
        </style>
    {/if}
{/if}