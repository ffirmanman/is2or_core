<section class="hw-infocenter__landing">

<div class="row-fluid">
    <header class="span16">
        <span>{__('infocenter.homepage.hello')}</span>
        <h2>{__('infocenter.homepage.welcome')}</h2>
    </header>
</div>
<div class="row-fluid hw-infocenter__search">
    <div class="span10 offset3">
     {include file="addons/hw_infocenter/views/hw_infocenter/components/search.tpl"}
    </div>
</div>

<div class="row-fluid">
    <div class="span16">
        <h3>{__('infocenter.homepage.choose')}</h2>
    </div>
</div>

<div class="hw-infocenter__choose">
    <div class="row-fluid">
    {$i=0}
    {foreach from=$pages item=_page key=key}
        <div class="span5 item">    
            <a href="{"pages.view?page_id=`$_page.page_id`"|fn_url}">
                <span>
                    <img src="{$_page.main_pair.icon.image_path}" alt="{$_page.page}" width="250" height="250" />
                    {*include file="common/image.tpl" obj_id=$_page.page_id images=$_page.main_pair image_width=250 image_height=250*}
                </span>
                <bdi {live_edit name="page:page:{$_page.page_id}"}>{$_page.page}</bdi>
            </a>
        </div>
        {$i=$i+1}
        {if $i==3}
            {$i=0}
            </div>
            <div class="row-fluid">
        {/if}
    {/foreach}
    </div>
</div>

</section>