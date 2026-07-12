{if $smarty.request.abt__ut2_mv_is_vendor_block}
<div class="control-group">
<label for="show_title" class="control-label">{__("abt__ut2_mv.show_title")}</label>
<div class="controls cm-no-hide-input">
<input type="hidden" name="block_data[properties][show_title]" value="N">
<input type="checkbox" name="block_data[properties][show_title]" id="show_title" value="Y"{if $block.properties.show_title === "Y"} checked{/if}>
</div>
</div>
<div class="control-group">
<label for="wrapper" class="control-label">{__("wrapper")}</label>
<div class="controls cm-no-hide-input">
<select name="block_data[properties][wrapper]" id="wrapper">
<option value="blocks/wrappers/abt__ut2__mainbox_general.tpl" {if $block.properties.wrapper === "blocks/wrappers/abt__ut2__mainbox_general.tpl"} selected = selected{/if}>{__("abt__ut2_mv.wrappers.main_block")}</option>
<option value="blocks/wrappers/abt__ut2__mainbox_general_gray.tpl" {if $block.properties.wrapper === "blocks/wrappers/abt__ut2__mainbox_general_gray.tpl"} selected = selected{/if}>{__("abt__ut2_mv.wrappers.main_block_with_background_gray")}</option>
<option value="blocks/wrappers/abt__ut2__mainbox_general_color.tpl" {if $block.properties.wrapper === "blocks/wrappers/abt__ut2__mainbox_general_color.tpl"} selected = selected{/if}>{__("abt__ut2_mv.wrappers.main_block_with_background_colored")}</option>
<option value="blocks/wrappers/abt__ut2__mainbox_simple.tpl" {if $block.properties.wrapper === "blocks/wrappers/abt__ut2__mainbox_simple.tpl"} selected = selected{/if}>{__("abt__ut2_mv.wrappers.simplified_block")}</option>
<option value="blocks/wrappers/abt__ut2__sidebox_general.tpl" {if $block.properties.wrapper === "blocks/wrappers/abt__ut2__sidebox_general.tpl"} selected = selected{/if}>{__("abt__ut2_mv.wrappers.secondary_block")}</option>
<option value="blocks/wrappers/abt__ut2__sidebox_important.tpl" {if $block.properties.wrapper === "blocks/wrappers/abt__ut2__sidebox_important.tpl"} selected = selected{/if}>{__("abt__ut2_mv.wrappers.secondary_framed_block")}</option>
</select>
</div>
</div>
<input type="hidden" name="abt__ut2_mv_is_vendor_block" value="1">
{/if}