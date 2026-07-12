<div> 
	<p>{__('cls.about_cron_turbo_clear_cache')}</p>  
    <p>{__('css.cron_run_speedup_scaner')}:</p>
    <p class="cls-cmd">{fn_url("csc_live_search.clear_turbo_cache", 'A')}</p>
		
	<p>{__('css.example_run_php_script')}:</p>
    <p class="cls-cmd">/usr/bin/php {$smarty.const.DIR_ROOT}/{$config.admin_index} --dispatch=csc_live_search.clear_turbo_cache</p>
    
</div>