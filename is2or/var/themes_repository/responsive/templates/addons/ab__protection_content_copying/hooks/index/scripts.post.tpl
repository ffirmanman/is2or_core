{if ($addons.ab__protection_content_copying.non_protection_for_admin != "YesNo::YES"|enum && in_array($app["session"]["auth"]["user_type"], ["UserTypes::ADMIN"|enum, "UserTypes::VENDOR"|enum])) || empty($smarty.session.ab__pcc_status) || $smarty.session.ab__pcc_status != 'DISABLED'}
<script>
    (function (_, $) {
        $.extend(_, {
            ab__pcc: {
                non_protection_classes: '{$addons.ab__protection_content_copying.non_protection_classes|escape:"javascript"}',
            }
        });
    }(Tygh, Tygh.$));
</script>
{script src="js/addons/ab__protection_content_copying/func.js"}
{/if}