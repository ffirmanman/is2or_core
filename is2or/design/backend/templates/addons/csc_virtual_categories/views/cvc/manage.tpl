{capture name="mainbox"}
	<form action="{""|fn_url}" method="get" name="settings_form" class="form-horizontal form-edit cm-check-changes" enctype="multipart/form-data">
        {include file="common/pagination.tpl" save_current_page=true save_current_url=true}

        {assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
        {assign var="c_icon" value="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
        {assign var="c_dummy" value="<i class=\"icon-dummy\"></i>"}
        
        {if $categories}
        <div class="table-responsive-wrapper">
            <table class="table table-middle table--relative table-responsive">
            <thead>
            <tr>
                <th class="mobile-hide" width="1%">
                    {include file="common/check_items.tpl"}
                </th>
                <th width="80%">
                    <a class="cm-ajax" href="{"`$c_url`&sort_by=name&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("name")}{if $search.sort_by == "name"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                <th width="15%" class="">{__('is_virtual')}</th>    
                
                <th width="15%" class="right"><a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("status")}{if $search.sort_by == "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
            </tr>
            </thead>
        
            {foreach from=$categories item=category}
        
            <tr class="cm-row-status-{$category.status|lower} {$additional_class}">
                <td class="mobile-hide">
                    <input name="category_ids[]" type="checkbox" value="{$category.category_id}" class="cm-item" /></td>
                <td data-th="{__("name")}">
                    <a class="row-status" href="{"categories.update?category_id=`$category.category_id`&selected_section=csc_virtual_categories"|fn_url}">{$category.category}</a>
                    <p>
                    	<small class="muted">{fn_get_category_path($category.category_id)}</small>
                    </p>
               <td class="nowrap" data-th="{__("is_virtual")}">
                    {if $category.is_virtual=="Y"}
                    	<div class="is_virtual">{__('yes')}</div>
                    {else}
                    	<div class="is_not_virtual">{__('no')}</div>
                    {/if}
                </td>
                
                <td class="nowrap right" data-th="{__("status")}">
                    {include file="common/select_popup.tpl" popup_additional_class="dropleft" display=$status_display id=$category.category_id status=$category.status hidden=true object_id_name="category_id" table="categories"}
                </td>
            </tr>
            {/foreach}
            </table>
        </div>
        {else}
            <p class="no-items">{__("no_data")}</p>
        {/if}
        
        {include file="common/pagination.tpl"}
       
    

	</form>    
    
    {capture name="buttons"}
    	{capture name="tools_list"}        	        
        {/capture}
       {dropdown content=$smarty.capture.tools_list}  
     
       {include file="buttons/save.tpl" but_name="dispatch[`$addon_short_name`.settings]" but_role="submit-link" but_target_form="settings_form"}       
    {/capture}
{/capture}
{capture name="sidebar"} 
	{include file="addons/`$addon_base_name`/components/submenu.tpl"}
    {include file="addons/`$addon_base_name`/views/cvc/components/search_form.tpl"}
    
    {include file="addons/`$addon_base_name`/components/reviews.tpl" addon=$addon_base_name prefix=$addon_short_name}      
{/capture}

{include file="common/mainbox.tpl" title=__($addon_base_name) content=$smarty.capture.mainbox buttons=$smarty.capture.buttons  content_id="`$addon_short_name`.settings" mainbox_content_wrapper_class="csc-settings" sidebar=$smarty.capture.sidebar}