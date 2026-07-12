<div class="ab__sb_t-variants">
    <div class="ab__sb_t-nav">
        {foreach $variants as $index => $group}
            <a class="ab__sb_t-nav_item cm-external-click" data-ca-scroll="#ab__sb_t_{$index|mb_strtolower}">{$index|default:"@"}</a>
        {/foreach}
    </div>
    <table class="ab__sb_t-table">
        {foreach $variants as $index => $group}
        <tr class="ab__sb_t-row" id="ab__sb_t_{$index|mb_strtolower}">
            <td>{$index|default:"@"}</td>
            <td>
                {foreach $group as $variant}
                    <a href="{"product_features.view?variant_id=`$variant.variant_id`"|fn_url}">{$variant.variant|fn_text_placeholders}</a>
                {/foreach}
            </td>
        </tr>
        {/foreach}
    </table>
</div>