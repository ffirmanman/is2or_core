<form action="{""|fn_url}" name="infocenter_search_form" method="get">

    {hook name="search:infocenter_additional_fields"}{/hook}

    {strip}
        <input type="text" name="q" value="{$search.q}" id="search_input_infocenter" placeholder="{__("infocenter.search.placeholder")}" />
        <input type="hidden" name="dispatch" value="hw_infocenter.search">        
        <button title="{__("search")}" type="submit"><svg width="40" height="40" viewBox="0 0 160 160"><use href="#icon-search--sprite"></use></svg></button>
    {/strip}
</form>
