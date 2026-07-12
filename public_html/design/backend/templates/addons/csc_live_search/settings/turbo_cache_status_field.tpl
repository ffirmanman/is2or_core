<p>{__('cls.turbo_cache_information')}</p>
<p></p>	
{if fn_cls_redis_available()}
    
    {include file="addons/csc_live_search/views/csc_live_search/components/status_field.tpl"
          field_name=__('cls.turbo_cache_status')
          field_name_ttl=__('cls.turbo_cache_status_ttl')
          input_name='use_turbo_cache'
          value=$options.use_turbo_cache
          mode='set_setting'
          view_mode='simple'
       }
       
{else}
	<div class="clsWarnBlock strong">{__('cls.turbo_cache_unavailable')}</div>
	<p></p>
{/if}
 