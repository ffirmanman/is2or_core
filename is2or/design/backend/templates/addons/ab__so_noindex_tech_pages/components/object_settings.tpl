<div class="control-group">
<label class="control-label" for="ab__so_ntp_noindex">{__('ab__so_ntp.form.noindex')}:</label>
<div class="controls">
<label class="checkbox">
<input type="hidden" name="{$prefix}[ab__so_ntp_index_data][noindex]" value="N" />
<input type="checkbox" name="{$prefix}[ab__so_ntp_index_data][noindex]" id="ab__so_ntp_noindex" value="Y"{if $data.noindex && $data.noindex == "Y"}checked="checked"{/if} />
</label>
</div>
</div>