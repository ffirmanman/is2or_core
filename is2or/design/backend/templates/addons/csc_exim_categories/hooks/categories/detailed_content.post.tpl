{include file="common/subheader.tpl" title=__("csc_exim_categories") target="#csc_exim_categories"}
<div id="csc_exim_categories" class="in collapse">
   <div class="control-group ">
        <label for="elm_category_code" class="control-label">{__("ceca.category_code")} {include file="common/tooltip.tpl" tooltip=__('ceca.category_code_tlp')}:</label>
        <div class="controls">
             <input type="text" name="category_data[category_code]" id="elm_category_code" value="{$category_data.category_code}" class="input-long"/>             
            </div>
    </div>
</div>

