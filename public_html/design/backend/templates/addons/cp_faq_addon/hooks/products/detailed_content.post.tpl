{if $cp_variation_active && $product_data.variation_group_id && !$product_data.variation_parent_product_id}
    {include file="common/subheader.tpl" title=__("cp_fq_faq_tab_text") target="#acc_cp_fq_faq_tab_text"}
    <div id="#acc_cp_fq_faq_tab_text" class="collapse in">
        <div class="control-group">
            <label class="control-label" for="cp_fq_variation_type">{__("cp_fq_variation_type")}:</label>
            <div class="controls">
                <select name="product_data[cp_fq_variation_type]" id="cp_fq_variation_type">
                    <option value="M" {if $product_data.cp_fq_variation_type == "M"}selected="selected"{/if}>{__("cp_fq_from_main_var")}</option>
                    <option value="C" {if $product_data.cp_fq_variation_type == "C"}selected="selected"{/if}>{__("cp_fq_custom_var")}</option>
                </select>
            </div>
        </div>
    </div>
{/if}
