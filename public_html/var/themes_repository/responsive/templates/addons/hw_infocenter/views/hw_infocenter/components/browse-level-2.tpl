{include file="addons/hw_infocenter/views/hw_infocenter/components/header.tpl"}

<div class="row-fluid">
    <div class="span5 hw-infocenter__sidebar hidden-phone hidden-phone">
        <nav>
            <ul>
                <li class="first"><a href="{"pages.view?page_id=`$page.parent_id`"|fn_url}">
                    <span class="icon"><svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 14.7753V16.8288C28 22.0948 28 24.728 26.4183 26.3639C24.8368 28 22.2911 28 17.2 28H11.8C6.70883 28 4.16325 28 2.58162 26.3639C1 24.728 1 22.0948 1 16.8288V14.7753C1 11.6859 1 10.1412 1.70092 8.8607C2.40184 7.58018 3.68238 6.78544 6.24344 5.19598L8.94344 3.52027C11.6507 1.84009 13.0043 1 14.5 1C15.9957 1 17.3493 1.84009 20.0566 3.52027L22.7566 5.19596C25.3177 6.78544 26.5982 7.58018 27.2991 8.8607" stroke-width="2" stroke-linecap="round"/><path d="M18.5501 22.6H10.4501" stroke-width="2" stroke-linecap="round"/></svg></span>
                    <span>{__('infocenter.home')}</span>
                </a></li>
                {foreach from=$main_pages item=_page}
                <li {if $_page.page_id == $smarty.request.page_id}class="active"{/if}><a href="{"pages.view?page_id=`$_page.page_id`"|fn_url}">
                    <span class="icon arrow"><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 7.5H16M16 7.5L9.57143 1M16 7.5L9.57143 14" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
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
            <div class="span8 item">    
                <a href="{"pages.view?page_id=`$_page.page_id`"|fn_url}">
                    <span>
                        <img src="{$_page.main_pair.icon.image_path}" alt="{$_page.page}" width="250" height="250" />
                        {*include file="common/image.tpl" obj_id=$_page.page_id images=$_page.main_pair image_width=250 image_height=250*}
                    </span>
                    <bdi {live_edit name="page:page:{$_page.page_id}"}>{$_page.page}</bdi>
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