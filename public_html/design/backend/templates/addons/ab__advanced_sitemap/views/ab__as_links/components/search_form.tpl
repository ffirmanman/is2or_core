<div class="sidebar-row">
<h6>{__("search")}</h6>
<form action="{""|fn_url}" name="ab__as_links_search_form" method="get">
{capture name="simple_search"}
<div class="sidebar-field">
<label>{__("url")}</label>
<input type="text" name="q" size="20" value="{$search.q}" class="search-input-text" />
</div>
{/capture}
{include file="common/advanced_search.tpl" simple_search=$smarty.capture.simple_search no_adv_link=true dispatch=$dispatch in_popup=$in_popup}
</form>
</div>