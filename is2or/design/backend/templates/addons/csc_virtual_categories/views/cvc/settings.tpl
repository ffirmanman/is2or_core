{capture name="mainbox"}
	    <form action="{""|fn_url}" method="post" name="settings_form" class="form-horizontal form-edit cm-check-changes" enctype="multipart/form-data">
        <input type="hidden" name="selected_section">
       
    {capture name="tabsbox"}
    	{if $allow_separate_storefronts && !$runtime.company_id}
           {assign var="disable_input" value=true}
           {assign var="show_update_for_all" value=true}          
        {/if}
        {include file="addons/`$addon_base_name`/components/options.tpl" param_name="settings" _params=$fields prefix=$addon_short_name}
    {/capture}
    {include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$smarty.request.selected_section track=true}

	</form>    
    
    {capture name="buttons"}
    	{capture name="tools_list"} 
          {if fn_cvc_allow_linking()}
        	 <li>{btn type="list" text=__("cvc.run_linking") class="cm-confirm" href="cvc.run_linking"}</li>
          {/if}               	     
        {/capture}
       {dropdown content=$smarty.capture.tools_list}  
     
       {include file="buttons/save.tpl" but_name="dispatch[`$addon_short_name`.settings]" but_role="submit-link" but_target_form="settings_form"}       
    {/capture}
{/capture}
{capture name="sidebar"} 
	{include file="addons/`$addon_base_name`/components/submenu.tpl"}
    {include file="addons/`$addon_base_name`/components/reviews.tpl" addon=$addon_base_name prefix=$addon_short_name}
	{include file="addons/`$addon_base_name`/components/versions.tpl" lp=$addon_short_name}     	
{/capture}

{include file="common/mainbox.tpl" title=__($addon_base_name) content=$smarty.capture.mainbox buttons=$smarty.capture.buttons  content_id="`$addon_short_name`.settings" mainbox_content_wrapper_class="csc-settings" sidebar=$smarty.capture.sidebar}