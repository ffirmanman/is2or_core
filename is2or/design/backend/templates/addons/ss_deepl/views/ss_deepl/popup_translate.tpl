<form action="{""|fn_url}" name="ss_order_threads_load_ready_file_{$product_id}" method="post" enctype="multipart/form-data" class="form-horizontal form-edit">
    <input type="hidden" name="object_id" value="{$object_id}">
    <input type="hidden" name="type" value="{$type}">
    <input type="hidden" name="field" value="{$field}">
     {assign var="from_language" value=1|fn_ss_deepl_ss_deepl_get_lang}
     <div class="control-group">
        <label class="control-label" for="ss_deepl_from_language">{__("ss_deepl_from_language")}{include file="common/tooltip.tpl" tooltip=__(ss_deepl_from_language_tooltip)}:</label>
        <div class="controls">
            <select name="ss_deepl_from_language" id="ss_deepl_from_language">
             {foreach from=$from_language item="fl_lang" key="fl_code"}
                <option value="{$fl_code}" {if 0|fn_ss_deepl_get_options:"ss_deepl_from_language" == $fl_code}selected="selected"{/if}>{$fl_lang}</option>
             {/foreach}
            </select>
        </div>
     </div>
     {*<div class="control-group">
         <label for="ss_deepl_detect_from_lang" class="control-label">{__("ss_deepl_detect_from_lang")}:</label>
         <div class="controls">
             <input type="hidden" name="ss_deepl_detect_from_lang" value="N"/>
             <input type="checkbox" name="ss_deepl_detect_from_lang" id="ss_deepl_detect_from_lang" value="Y" {if $addons.ss_deepl.ss_deepl_detect_from_lang == "Y"}checked="checked"{/if} class="checkbox" />
         </div>
     </div>*}
     <div class="control-group">
        <label class="control-label" for="ss_deepl_to_language">{__("ss_deepl_to_language")}{include file="common/tooltip.tpl" tooltip=__(ss_deepl_to_language_tooltip)}:</label>
        <div class="controls">
            <select name="ss_deepl_to_language" id="ss_deepl_to_language">
             {foreach from=$from_language item="tl_lang" key="tl_code"}
                <option value="{$tl_code}" {if 0|fn_ss_deepl_get_options:"ss_deepl_to_language" == $tl_code}selected="selected"{/if}>{$tl_lang}</option>
             {/foreach}
            </select>
        </div>
     </div>
    <div class="buttons-container buttons-container-picker">
        {include file="buttons/button.tpl" but_meta="ty-btn__secondary" but_text=__('ss_deepl_go_translate') but_name="dispatch[ss_deepl.translate.translate]"}
        <a class="btn cm-dialog-closer">{__('cancel')}</a>
    </div>
</form>