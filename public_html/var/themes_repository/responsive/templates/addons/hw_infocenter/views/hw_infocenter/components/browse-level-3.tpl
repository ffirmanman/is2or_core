{include file="addons/hw_infocenter/views/hw_infocenter/components/header.tpl"}

<div class="row-fluid">
    <div class="span5 hw-infocenter__sidebar simple hidden-phone">
        <nav>
            <ul>
                <li class="active"><a href="{"pages.view?page_id=`$page.parent_id`"|fn_url}">
                    <span class="icon arrow"><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 7.5L1 7.5M1 7.5L7.42857 14M1 7.5L7.42857 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                    <span>{__('infocenter.back')}</span>
                </a></li>
                {foreach from=$main_pages item=_page}
                <li class="item {if $_page.page_id == $smarty.request.page_id} on{/if}"><a href="{"pages.view?page_id=`$_page.page_id`"|fn_url}">
                    <span {live_edit name="page:page:{$_page.page_id}"}>{$_page.page}</span>
                </a></li>
                {/foreach}
            </ul>
        </nav>
    </div>
    
    {include file="addons/hw_infocenter/views/hw_infocenter/components/sidebar-mobile.tpl"}    
    
    <div class="span11">
        <div class="row-fluid hw-infocenter__choose">
        {$i=0}
        {foreach from=$pages item=_page key=key}
            <div class="span8 item more">    
                <a href="{"pages.view?page_id=`$_page.page_id`"|fn_url}">
                    <bdi {live_edit name="page:page:{$_page.page_id}"}>{$_page.page}</bdi>
                    <p>
                        <span class="icon"><svg width="13" height="9" viewBox="0 0 13 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 4.5H12M12 4.5L7.28571 1M12 4.5L7.28571 8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
                        <span>{__('infocenter.more')}</span>
                    </p>
                </a>
            </div>
            {$i=$i+1}
            {if $i==2}
                {$i=0}
                </div>
                <div class="row-fluid hw-infocenter__choose">
            {/if}            
        {/foreach}
        </div>
    </div>    
</div>