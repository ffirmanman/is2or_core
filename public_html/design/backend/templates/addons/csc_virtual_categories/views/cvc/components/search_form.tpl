<div class="sidebar-row">
<h6>{__("search")}</h6>

<form action="{""|fn_url}" name="carts_search_form" method="get">
{capture name="simple_search"}

<div class="sidebar-field">
    <label for="cname">{__("category")}</label>
    <input type="text" name="search_query" id="cname" value="{$search.search_query}" size="30" />
</div>

<div class="sidebar-field">
    <label for="is_virtual" class="checkbox">{__("is_virtual")} <input type="checkbox" name="is_virtual" id="is_virtual" value="Y" {if $search.is_virtual=="Y"} checked{/if}/></label>
    
</div>


{/capture}



{include file="common/advanced_search.tpl" simple_search=$smarty.capture.simple_search dispatch="cvc.manage" no_adv_link=true}

</form>
</div>
<hr>
