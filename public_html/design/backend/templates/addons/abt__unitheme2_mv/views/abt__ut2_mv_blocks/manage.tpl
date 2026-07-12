{$db_table = "abt__ut2_mv_vendor_blocks" }
{$no_popup = false}
{if !$no_popup}{$new_block_opener_class="cm-dialog-opener cm-dialog-destroy-on-close"}{/if}
{include file="addons/vendor_panel_configurator/config.tpl"}
{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="manage_vendor_blocks_form" class="form-horizontal form-edit cm-ajax"
id="manage_vendor_blocks_form">
<input type="hidden" name="redirect_url" value="{$config.current_url}"/>
{if $blocks}
{capture name="vendor_blocks_table"}
<div class="items-container">
<div class="table-responsive-wrapper longtap-selection">
<table class="table table-middle table--relative table-objects table-responsive table-responsive-w-titles cm-sortable"
data-ca-sortable-table="{$db_table}" data-ca-sortable-id-name="block_id">
<thead>
<tr>
<th width="1%"></th>
<th width="56%">{__("name")}</th>
<th width="12%">{__("type")}</th>
<th width="10%"></th>
<th width="12%" class="right">{__("status")}</th>
</tr>
</thead>
{foreach $blocks as $block}
{capture name="extra_data"}
{__("block_{$block.type}")}
{/capture}
{include file="common/object_group.tpl"
id=$block.block_id
id_prefix="_vendor_block_"
text=$block.name
status=$block.status
hidden=false
additional_class="cm-sortable-row cm-sortable-id-`$block.block_id`"
no_popup=$no_popup
href="block_manager.update_block?block_data[block_id]=`$block.block_id`&abt__ut2_mv_is_vendor_block=1&r_url={$config.current_url|escape:url}"
href_col_width="56%"
details=$smarty.capture.extra_data
details_col_width="12%"
object_id_name="block_id"
table=$db_table
delete_target_id="manage_vendor_blocks_form"
href_delete="abt__ut2_mv_blocks.delete?block_data[block_id]=`$block.block_id`"
header_text=$block.name
skip_delete=false
no_table=true
draggable=true
}
{/foreach}
</table>
</div>
</div>
{/capture}
{$smarty.capture.vendor_blocks_table nofilter}
{else}
<p class="no-items">{__("no_data")}</p>
{/if}
{capture name="adv_buttons"}
{capture name="tools_list"}
{foreach $allowed_blocks as $type}
<li>{btn type="list" text=__("block_{$type}") data=["data-ca-dialog-title"=>__("block_{$type}")] class=$new_block_opener_class href="block_manager.update_block?block_data[type]={$type}&abt__ut2_mv_is_vendor_block=1&r_url={$config.current_url|escape:url}"}</li>
{/foreach}
{/capture}
{dropdown content=$smarty.capture.tools_list icon="icon-plus" no_caret=true placement="right" title=__("abt__ut2_mv.add_block")}
{/capture}
<!--manage_vendor_blocks_form--></form>
{/capture}
{include file="common/mainbox.tpl"
title=__("abt__ut2_mv_home_blocks")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
adv_buttons=$smarty.capture.adv_buttons
sidebar=$smarty.capture.sidebar
}