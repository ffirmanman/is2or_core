<div class="control-group">
<label for="{$suffix}_wrapper" class="control-label">
{__("wrapper")}
</label>
<div class="controls">
<select name="category_banner_data[layout_data][{$suffix}_wrapper]" id="{$suffix}_wrapper">
<option value="">--</option>
{foreach $wrappers as $wrapper => $name}
<option value="{$wrapper}"{if $wrapper === $selected} selected{/if}>{$name.name}</option>
{/foreach}
</select>
</div>
</div>
