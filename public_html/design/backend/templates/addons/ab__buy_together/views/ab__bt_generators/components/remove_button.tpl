<button type="button"
name="remove_hidden"
id="{$item_id}"
class="btn {if $but_class} {$but_class}{/if}"
title="{__("remove")}"
{$attrs|default:[]|render_tag_attrs nofilter}
{if $but_onclick} onclick="{$but_onclick}"{/if}
>
<i class="icon-trash"></i>