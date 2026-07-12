{if $non_editable || $display == "text"}
<span class="view-status">{$items.$value}</span>
{else}
{assign var="prefix" value=$prefix|default:"select"}
{assign var="btn_meta" value=$btn_meta|default:"btn-text"}
{assign var="popup_additional_class" value=$popup_additional_class}
<div class="cm-popup-box {if !$hide_for_vendor}dropdown{/if} {$popup_additional_class}">
{if !$hide_for_vendor}
<a href="#" {if $id}id="sw_{$prefix}_{$id}_wrap"{/if} class="{if $btn_meta}{$btn_meta}{/if} btn dropdown-toggle{if $id} cm-combination{/if} {if $text_wrap}dropdown-toggle--text-wrap{/if}" data-toggle="dropdown">
{/if}
{$items.$value|default:$default_status_text}
{if !$hide_for_vendor}
<span class="caret"></span>
</a>
{/if}
{if $id && !$hide_for_vendor}
<ul class="dropdown-menu">
{if $st_return_url}
{$return_url = $st_return_url|escape:url}
{$extra_params = "`$extra_params`&redirect_url=`$return_url`"}
{/if}
{if $items}
{foreach from=$items item="val" key="st"}
<li {if $value == $st}class="disabled"{/if}><a class="{if $text_wrap}dropdown--text-wrap{/if} {if $confirm}cm-confirm {/if}status-link-{$st|lower} {if $value == $st}active{else}cm-ajax cm-post{if $ajax_full_render} cm-ajax-full-render{/if}{/if} {if $status_meta}{$status_meta}{/if}"{if $status_target_id} data-ca-target-id="{$status_target_id}"{/if} href="{"`$update_controller`.`$update_mode`?table=`$object_table`&id_name=`$object_id_name`&id=`$object_id`&field=`$object_field_name`&value=`$st``$extra_params``$dynamic_object`"|fn_url}" onclick="return fn_check_object_status(this, '{$st|lower}', '{if $statuses}{$statuses[$st].params.color|default:''}{/if}');" {if $st_result_ids}data-ca-target-id="{$st_result_ids}"{/if} data-ca-event="ce.update_object_status_callback" title="{$val}">{$val}</a></li>
{/foreach}
{/if}
</ul>
{if !$smarty.capture.avail_box}
{script src="js/tygh/select_popup.js"}
{capture name="avail_box"}Y{/capture}
{/if}
{/if}
</div>
{/if}
