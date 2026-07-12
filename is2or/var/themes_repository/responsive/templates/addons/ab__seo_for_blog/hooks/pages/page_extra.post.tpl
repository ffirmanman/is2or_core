{if $page.ab__sfb_microdata_schema_type && !$page.abt__ut2_microdata_schema_type && !defined("AJAX_REQUEST")}
    <script type="application/ld+json">
        {fn_ab__sfb_print_page_markup($page) nofilter}
    </script>
{/if}