
{include file="common/subheader.tpl" title=__("csc_live_search") target="#csc_live_search"}
<fieldset>
	<div id="csc_live_search" class="in collapse">
        <div class="control-group ">
            <label class="control-label" for="cls_category_status">{__('cls.category_hide_category')}:</label>
            <div class="controls">
                <select name="category_data[cls_hide]" id="cls_category_status">
                  <option value="0" {if !$category_data.cls_hide} selected{/if}>{__('no')}</option>
                  <option value="1" {if $category_data.cls_hide=='1'} selected{/if}>{__('cls.hide_cat_only_search')}</option>
                  <option value="2" {if $category_data.cls_hide=='2'} selected{/if}>{__('cls.hide_cat_only_filter')}</option>
                  <option value="3" {if $category_data.cls_hide=='3'} selected{/if}>{__('cls.hide_cat_both')}</option>
              </select>                
            </div>
        </div>
	</div>
</fieldset>
