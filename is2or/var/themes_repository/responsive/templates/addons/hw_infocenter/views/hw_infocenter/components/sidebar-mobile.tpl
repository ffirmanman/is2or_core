<div class="span5 hidden-desktop hidden-tablet">
    <div class="hw-infocenter__sidebar_mobile">
        <a href="{"pages.view?page_id=`$id_path[0]`"|fn_url}"><svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28 14.7753V16.8288C28 22.0948 28 24.728 26.4183 26.3639C24.8368 28 22.2911 28 17.2 28H11.8C6.70883 28 4.16325 28 2.58162 26.3639C1 24.728 1 22.0948 1 16.8288V14.7753C1 11.6859 1 10.1412 1.70092 8.8607C2.40184 7.58018 3.68238 6.78544 6.24344 5.19598L8.94344 3.52027C11.6507 1.84009 13.0043 1 14.5 1C15.9957 1 17.3493 1.84009 20.0566 3.52027L22.7566 5.19596C25.3177 6.78544 26.5982 7.58018 27.2991 8.8607" stroke="#09304C" stroke-width="2" stroke-linecap="round"/><path d="M18.5501 22.6H10.4501" stroke="#09304C" stroke-width="2" stroke-linecap="round"/></svg></a>
        <div>
            <select onchange="window.location.href = this.value;">
            {foreach from=$main_pages item=_page}
            <option value="{"pages.view?page_id=`$_page.page_id`"|fn_url}" {if $_page.page_id == $smarty.request.page_id} selected{/if}>{$_page.page}</option>
            {/foreach}                
            </select>
        </div>
    </div>
</div>