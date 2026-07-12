{if ($runtime.company_id && "ULTIMATE"|fn_allowed_for || "MULTIVENDOR"|fn_allowed_for || $runtime.simple_ultimate)}
    {if 1|fn_ss_deepl_check_access}
        {if $addons.ss_deepl.ss_deepl_auto_translate == "manual"}
            <div class="control-group">
                <label for="elm_ss_deepl_auto_translate_{$id}" class="control-label">{__("ss_deepl_auto_translate")}:</label>
                <div class="controls">
                    <input type="hidden" name="product_data[ss_deepl_auto_translate]" value="N" />
                    <input type="checkbox" name="product_data[ss_deepl_auto_translate]" id="product_data_ss_deepl_auto_translate" value="Y" {if $product_data.ss_deepl_auto_translate == "Y"}checked="checked"{/if}/>
                </div>
            </div>
        {/if}
    {/if}
{/if}