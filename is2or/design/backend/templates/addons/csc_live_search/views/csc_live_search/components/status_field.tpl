{if $view_mode=='simple'}
<div class="control-group" id="container_elm_{$input_name}">
    <label class="control-label ">{$field_name nofilter} {if $field_name_ttl} <i class="cm-tooltip icon-question-sign" title="{$field_name_ttl}"></i>{/if}</label>
    <div class="controls">
        <label class="checkbox-green">
            <input type="checkbox" name="{$input_name}" value="1" {if $value}checked="checked"{/if} id="{$input_name|md5}"/>
            <span class="checkbox-green-switch" data-label-on="On" data-label-off="Off"></span>
        </label>                              
	</div>
<!--container_elm_{$input_name}--></div>
{else}
<ul class="unstyled">
    <li>
        <div class="list-description">
            {$field_name nofilter} {if $field_name_ttl} <i class="cm-tooltip icon-question-sign" title="{$field_name_ttl}"></i>{/if}
        </div>
        <label class="checkbox-green">
            <input type="checkbox" name="{$input_name}" value="1" {if $value}checked="checked"{/if} id="{$input_name|md5}"/>
            <span class="checkbox-green-switch" data-label-on="On" data-label-off="Off"></span>
        </label>
    </li>
</ul>
{/if}
<script type="text/javascript">
    (function (_, $) {
        $(_.doc).on('change', '#{$input_name|md5}', function (e) {			
            var value = $(e.target).val();
            $.ceAjax('request', fn_url("csc_live_search.{$mode}"), {
                method: 'post',
                data: {
                    name: $(e.target).prop('name'),
                    value: $(e.target).is(":checked") ? 1 : 0
                }
            });
        });
    }(Tygh, Tygh.$));
</script>

<hr>
