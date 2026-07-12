<div class="row-fluid">
<div class="group span6 ">
<a id="sw_ab__buy_together_search" class="search-link cm-combination cm-save-state">
<span id="on_ab__buy_together_search" class="icon-caret-right{if $smarty.cookies.ab__buy_together_search} hidden{/if}"></span>
<span id="off_ab__buy_together_search" class="icon-caret-down{if !$smarty.cookies.ab__buy_together_search} hidden{/if}"></span>
{__('ab__buy_together')}
</a>
{$generators = []|fn_ab__bt_get_generators_list:$auth}
<div class="form-horizontal{if !$smarty.cookies.ab__buy_together_search} hidden{/if}" id="ab__buy_together_search">
<div class="control-group" style="margin-top: 15px;">
<label for="status" class="control-label">{__("ab__bt.search_generator")}</label>
<div class="controls">
<select name="ab__bt_generator" class="cm-object-picker" id="ab__bt_generator">
<option value="">--</option>
{foreach $generators[0] as $generator}
<option value="{$generator.generator_id}"
{if $search.ab__bt_generator === $generator.generator_id}
selected="selected"
{/if}
>{$generator.name}</option>
{/foreach}
</select>
</div>
</div>
</div>
</div>
</div>