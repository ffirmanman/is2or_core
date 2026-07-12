{capture name="mainbox"}
      <div class="span6">
          <form action="{""|fn_url}" method="post" name="settings_form" class="form-horizontal form-edit cm-check-changes {if fn_check_form_permissions("")}cm-hide-inputs{/if}" enctype="multipart/form-data">
            <input type="hidden" name="selected_section">
            <input type="hidden" name="return_url"value="{$config.current_url}">
            <input type="hidden" name="redirect_url"value="{$config.current_url}">
        
            {if $allow_separate_storefronts && !$runtime.company_id}
               {assign var="disable_input" value=true}
               {assign var="show_update_for_all" value=true}          
            {/if}
            {if $fields}            	
                {include file="addons/`$addon_base_name`/components/options.tpl" param_name="settings" _params=$fields prefix=$lp}       
            {else}
                <p class="no-items">{__("no_data")}</p>       
            {/if}
        </form>
    </div>
    
     <div class="span6">
    	<div class="live_search_preview" id="clsPreview_tpl">
            <div class="clsActive">
                <div class="clsCss">
                    <div>
                        <ul>
                            <li class="clsGrayHeader">{__("cls.total_found")}: 18</li>
                            <li class="clsCloser"></li>
                            <li class="clsTitle">{__("cls.browse_products_by_category")} <strong>"play"</strong>:</li>
                            <li class="clsUnChecked" onClick="$(this).toggleClass('clsUnChecked clsChecked')">{__("cls.play_check1")}</li>
                            <li class="clsUnChecked" onClick="$(this).toggleClass('clsUnChecked clsChecked')">{__("cls.play_check2")}</li>
                            <li class="clsUnChecked" onClick="$(this).toggleClass('clsUnChecked clsChecked')">{__("cls.play_check3")}</li>
                            <li class="clsTitle">{__("cls.found_categories")}</li>
                            <li class="clsTree">{__("cls.play_category")}</li>
                            <li class="clsTitle">{__("cls.found_products")}</li>
                            <li pid="4">
                                <img src="data:image/png;base64,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">
                                <div class="clsItemData">
                                    <div class="clsProduct">{__("cls.play_product")}</div>
                                    <div class="clsFlex">
                                        <div class="clsArt">{__("cls.product_code")}psp563</div>                                        
                                        <span class="clsLabel">{__("cls.play_check1")}</span>
                                    </div>
                                    <div class="clsFlexReverse">
                                        <a type="cartAdd" state="0"></a>
                                        <a type="wishAdd" state="0"></a>
                                        <a type="compAdd" state="0"></a>
                                        <a type="viewAdd"></a>
                                        <div class="clsPrices">
                                            <div class="clsListPrice"></div>
                                            <div class="clsPrice">510$</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li pid="5">
                                <img src="data:image/jpg;base64,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">
                                <div class="clsItemData">
                                    <div class="clsProduct">{__("cls.play_product2")}</div>
                                    <div class="clsFlex">
                                        <div class="clsArt">{__("cls.product_code")}xbx360</div>
                                        <span class="clsLabel">{__("cls.play_check1")}</span>
                                    </div>
                                    <div class="clsFlexReverse">
                                        <a type="cartAdd" state="0"></a>
                                        <a type="wishAdd" state="0"></a>
                                        <a type="compAdd" state="0"></a>
                                        <a type="viewAdd"></a>
                                        <div class="clsPrices">
                                            <div class="clsListPrice"></div>
                                            <div class="clsPrice">520$</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="clsSm">
                                <span>{__("cls.show_more")}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>        
                    
            <div class="clsActive">
                <div class="clsCss">
                    <div>
                        <ul>
                            <li>{__("cls.nothing_found", ['[q]'=>'flayer'])}</li>
                            <li class="clsCloser"></li>
                            <li class="clsTitle light">{__("cls.porpose_correction")}</li>
                            <li class="clsChoice">player</li>
                            <li class="clsChoice">playset</li>
                            <li class="clsChoice">played</li>
                        </ul>
                    </div>
                </div>
            </div>
            
        <!--clsPreview_tpl--></div>
    
    </div>
        
    {capture name="buttons"}    	
        {dropdown content=$smarty.capture.tools_list}    
    	{if $fields}
       		{include file="buttons/save.tpl" but_name="dispatch[`$addon_base_name`.settings]" but_role="submit-link" but_target_form="settings_form"}
        {/if}      
    {/capture}
{/capture}

{capture name="sidebar"}
	{include file="addons/`$addon_base_name`/components/submenu.tpl"}
{/capture}


{include file="common/mainbox.tpl" title=__("`$lp`.`$runtime.mode`") content=$smarty.capture.mainbox buttons=$smarty.capture.buttons  content_id="`$addon_base_name`_`$runtime.mode`" mainbox_content_wrapper_class="csc-settings" sidebar=$smarty.capture.sidebar select_languages=$select_languages}


