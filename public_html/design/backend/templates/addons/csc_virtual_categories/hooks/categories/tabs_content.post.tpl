<div class="hidden" id="content_csc_virtual_categories">
	{if $category_data.is_virtual != $smarty.const.CVC_TRASH_TYPE}
        {include file="common/subheader.tpl" title=__("csc_virtual_categories")}
        
        <div class="control-group">
            <label class="control-label" for="elm_is_virtual">{__("cvc.is_virtual")}: {include file="common/tooltip.tpl" tooltip=__('cvc.is_virtual_tlp')}</label>
            <div class="controls">
                <input type="hidden" name="category_data[is_virtual]"   value="N"/>
                <input type="checkbox" name="category_data[is_virtual]" id="elm_is_virtual" {if $category_data.is_virtual=="Y"}checked="checked"{/if} value="Y" onclick="$('.cm-conditions-content').toggle();"/>
            </div>
        </div>
        
        
        <fieldset>
            <div class="conditions-tree cm-conditions-content" {if $category_data.is_virtual!="Y"} style="display:none"{/if}>
                {include file="addons/csc_virtual_categories/components/condition_group.tpl" prefix="category_data[virtual_conditions]" group=$category_data.virtual_conditions root=true no_ids=true zone=catalog hide_add_buttons=false} 
            </div>
        </fieldset>
    {/if}
</div>