{** block-description:infocenter **}

<div class="hw-infocenter__menu">
    <a class="back" href="{''|fn_url}">
        <span><svg width="16" height="16" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff"><path d="M67.5 30H42.5C35.5964 30 30 35.5964 30 42.5V117.5C30 124.404 35.5964 130 42.5 130H117.5C124.404 130 130 124.404 130 117.5V92.5M73.75 86.25L130 30M130 30V61.25M130 30H98.75" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <bdi>{$config.http_host|fn_hw_infocenter_domain_cleanup}</bdi>
    </a>
    <a class="menu" href="javascript:void(0)">
        <svg class="off" viewBox="0 0 25 18" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="25" height="4" rx="1" fill="white"/><rect y="14" width="22" height="4" rx="1" fill="white"/><rect y="7" width="17" height="4" rx="1" fill="white"/></svg>
        <svg class="on" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 2.00006L2.00006 17M2 2L17 17" stroke="#09304C" stroke-width="3" stroke-linecap="round"/></svg>
    </a>
</div>

<div class="hw-infocenter__mainmenu">
<div class="container-fluid">
<div class="container-fluid-row">
    <div class="row-fluid">
        <div class="span6">
            <nav>
                <ul>
                    {$nav_pages=""|fn_hw_infocenter_get_main_pages}
                    {foreach from=$nav_pages item=_page}
                    <li><a href="{"pages.view?page_id=`$_page.page_id`"|fn_url}">{$_page.page}</a></li>
                    {/foreach}
                </ul>
            </nav>
        </div>
        {$forms=""|fn_hw_infocenter_get_forms}
        {if $forms}
        <div class="span4 offset2">
            <ul>
                <li><strong>{__('infocenter.forms.list')}</strong>
                {foreach from=$forms item=_page}
                    <li><a href="{"pages.view?page_id=`$_page.page_id`"|fn_url}">{$_page.page}</a></li>
                {/foreach}
            </ul>
        </div>    
        {/if}
    </div>
</div>    
</div>
</div>
<script>
(function(_, $) {
    $(document).ready(function () {
        $('.hw-infocenter__menu .menu').click(function(){
            $('.hw-infocenter__mainmenu').toggleClass('open');
            $('.hw-infocenter__menu').toggleClass('open');
            $('body').toggleClass('infocenter_menu_open');
        });
    });
}(Tygh, Tygh.$));
</script>