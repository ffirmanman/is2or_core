<section class="hw-infocenter__landing">

    <div class="row-fluid">
        <header class="span16">
            <h2>{__('infocenter.search.title')}</h2>
            <p>{__('infocenter.search.results', ['[count]'=>$search.total_items])}
        </header>
    </div>

    <div class="row-fluid hw-infocenter__search">
        <div class="span10 offset3">
        {include file="addons/hw_infocenter/views/hw_infocenter/components/search.tpl"}
        </div>
    </div>

    <div class="row-fluid hw-infocenter__results">
        <div class="span10 offset3">
            <ul>
            {foreach from=$pages item=_page}
            <li><a href="{"pages.view?page_id=`$_page.page_id`"|fn_url}">
                <span class="icon arrow"><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 7.5H16M16 7.5L9.57143 1M16 7.5L9.57143 14" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                <span>{$_page.page}</span>
            </a></li>
            {foreachelse}
            <li><p>{__('infocenter.search.no.results')}</p></li>
            {/foreach}
        </ul>    
        </div>
    </div>

</section>