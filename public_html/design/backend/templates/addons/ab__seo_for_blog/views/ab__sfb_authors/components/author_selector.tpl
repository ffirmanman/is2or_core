{$authors = fn_ab__sfb_authors_get_authors_list()}
<div class="control-group">
<label class="control-label" for="{$id|default:"author_id"}">{$title|default:__("ab__sfb.author") nofilter}:</label>
<div class="controls">
<select name="{$input_name}" id="{$id|default:"author_id"}" {if $disabled}disabled{/if}>
<option value="0">--</option>
{foreach $authors as $author}
<option value="{$author.author_id}"
{if $selected_author === $author.author_id}selected{/if}>{$author.name}</option>
{/foreach}
</select>
</div>
</div>