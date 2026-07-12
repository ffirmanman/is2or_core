{if !fn_allowed_for('MULTIVENDOR') || !$runtime.company_id}
{if $subscription}
	{assign var="days_left" value = max(floor(($subscription.subscription_till-$smarty.const.TIME)/(60*60*24)), 0)}
    
    <div class="sidebar-row {if $days_left <= 0}{$lp}Red{else if $days_left > 30}{$lp}Green{else}{$lp}Yellow{/if}" id="{$lp}_versions">
        <h6>{__("`$lp`.addon_upgrades")}</h6>
        <ul class="unstyled sidebar-stat">
            {if $subscription.status == 'license_error'}
                <li class="{$lp}Red">{__("`$lp`.license_error")}</li>
            {else}   
                <li>{__("`$lp`.current_v")}<span>{$subscription.current_version}</span></li>
                {if $subscription.next_version && $subscription.next_version > $subscription.current_version}
                <li><a href="{$subscription.changelog}" target="_blank">{__("`$lp`.new_v")}<span>{$subscription.next_version}</span></a></li>
                {else if $subscription.latest_released && $subscription.latest_released > $subscription.current_version}<li>{__("`$lp`.new_v")}<span>{$subscription.latest_released}</span></li>
                {/if}
            {/if}
        </ul>
    
        {if $subscription.status == 'available' && $subscription.next_version && $subscription.next_version > $subscription.current_version}
            <p><a href="{"upgrade_center.refresh"|fn_url}" class="btn" target="_blank" style="display: block;">{__("`$lp`.upgrade")}</a></p>
        {else if $subscription.current_version >= $subscription.latest_version}
        	<p>{__("`$lp`.actual_version_installed")}</p>
        {/if}
        {if $days_left > 0}
            <p>{__("`$lp`.days_left", [$days_left])}</p>
        {else}
        	<p class="{$lp}Red">{__("`$lp`.subscription_expired")}</p>
        {/if}
        
        {if $days_left <= 30 && $subscription.subscription_till+60*60*24*3 >= $smarty.const.TIME}
        	<p>{__("`$lp`.prolongate_discount", ['[date]' => ($subscription.subscription_till+60*60*24*3)|date_format:"`$settings.Appearance.date_format`"])}</p>
        {/if}
        
        {if $days_left <= 30}
            <div><a href="{$subscription.upgrade_url}" class="btn btn-primary" target="_blank" style="display: block;">{__("`$lp`.prolongate")}</a></div>
        {/if}
        
    </div>
{/if}
{/if}