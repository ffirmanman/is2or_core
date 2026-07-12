<div class="control-group">
<label class="control-label" for="elm_abt__ut2_mv_allow_vendor_metadata_{$id}">{__("abt__ut2_mv.allow_vendor_metadata")}:</label>
<div class="controls">
<input type="hidden" name="plan_data[abt__ut2_mv_allow_vendor_metadata]" value="N" />
<input type="checkbox" id="elm_abt__ut2_mv_allow_vendor_metadata_{$id}" name="plan_data[abt__ut2_mv_allow_vendor_metadata]" size="10" value="Y"{if $plan.abt__ut2_mv_allow_vendor_metadata == 'Y'} checked="checked"{/if} />
<p class="muted description">{__("abt__ut2_mv.allow_vendor_metadata.tooltip") nofilter}</p>
<div class="privileges-custom-access{if $plan.abt__ut2_mv_allow_vendor_metadata != 'Y'} hidden{/if}">
{foreach ['about', 'products', 'reviews', 'store'] as $page}
{$field = "abt__ut2_mv_vendor_metadata_{$page}"}
<div>
<label class="checkbox inline" for="{$field}">
<input type="hidden" name="plan_data[{$field}]" value="N" />
<input type="checkbox"
name="plan_data[{$field}]"
value="Y"
id="{$field}"
{if $plan.$field == "Y"}checked="checked"{/if}
/>{__("abt__ut2_mv.vendor_metadata.page.{$page}")}</label>
</div>
{/foreach}
</div>
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_abt__ut2_mv_vendor_home_page_{$id}">{__("abt__ut2_mv.abt__ut2_mv_microstore_homepage")}:</label>
<div class="controls">
<input type="hidden" name="plan_data[abt__ut2_mv_vendor_home_page]" value="0" />
<input {if empty($plan.vendor_store)}disabled{/if} type="checkbox" id="elm_abt__ut2_mv_vendor_home_page_{$id}" name="plan_data[abt__ut2_mv_vendor_home_page]" size="10" value="1"{if $plan.abt__ut2_mv_vendor_home_page} checked="checked"{/if} />
<p class="muted description">{__("abt__ut2_mv.abt__ut2_mv_microstore_homepage.tooltip") nofilter}</p>
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_abt__ut2_mv_banners_for_products_{$id}">{__("abt__ut2_mv.abt__ut2_mv_banners_for_products")}:</label>
<div class="controls">
<input type="hidden" name="plan_data[abt__ut2_mv_banners_for_products]" value="0" />
<input type="checkbox" id="elm_abt__ut2_mv_banners_for_products_{$id}" name="plan_data[abt__ut2_mv_banners_for_products]" size="10" value="1"{if $plan.abt__ut2_mv_banners_for_products} checked="checked"{/if} />
<p class="muted description">{__("abt__ut2_mv.abt__ut2_mv_banners_for_products.tooltip") nofilter}</p>
</div>
</div>
<div class="control-group">
<label class="control-label" for="elm_abt__ut2_mv_personal_design_{$id}">{__("abt__ut2_mv.abt__ut2_mv_personal_design")}:</label>
<div class="controls">
<input type="hidden" name="plan_data[abt__ut2_mv_personal_design]" value="0" />
<input type="checkbox" id="elm_abt__ut2_mv_personal_design_{$id}" name="plan_data[abt__ut2_mv_personal_design]" size="10" value="1"{if $plan.abt__ut2_mv_personal_design} checked="checked"{/if} />
<p class="muted description">{__("abt__ut2_mv.abt__ut2_mv_personal_design.tooltip") nofilter}</p>
</div>
</div>
<script>
(function(_, $) {
$("#elm_vendor_store_{$id}").on('change', function (){
$("#elm_abt__ut2_mv_vendor_home_page_{$id}").attr('disabled', !this.checked)
});
$('#elm_abt__ut2_mv_allow_vendor_metadata_{$id}').on('change', function(){
$(this).siblings('.privileges-custom-access').toggleClass('hidden', !this.checked);
});
}(Tygh, Tygh.$));
</script>