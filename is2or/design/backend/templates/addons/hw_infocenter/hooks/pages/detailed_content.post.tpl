{if $page_type == $smarty.const.PAGE_TYPE_INFOCENTER}

{include file="common/subheader.tpl" title=__("infocenter") target="#infocenter_image"}
<div id="infocenter_image" class="in collapse">
    <fieldset>
        <div class="control-group">
            <label class="control-label">{__("image")}:</label>
            <div class="controls">
                {include file="common/attach_images.tpl" image_name="infocenter_image" image_object_type="infocenter" image_pair=$page_data.main_pair no_detailed=true hide_titles=true}
            </div>
        </div>
    </fieldset>
</div>

{/if}
