{capture name="mainbox"}
<form action="{""|fn_url}" method="post" class="form-horizontal form-edit" name="ab__sf_pattern_form" enctype="multipart/form-data">
<input type="hidden" name="pattern" value="{$pattern}" />
<div id="content_general">
{assign var="elm" value="value"}{assign var="elm_id" value="elm_`$elm`"}{assign var="elm_name" value="ab__sf_pattern_data[`$elm`]"}
<div class="control-group">
<label for="{$elm_id}" class="control-label cm-trim">{__("ab__sf.pattern.`$elm`")}</label>
<div class="controls">
<input type="text" placeholder="[category] [variant]" name="{$elm_name}" id="{$elm_id}" value="{$patterns.$pattern.value}" class="input-large" />
</div>
</div>
</div>
</form>
{/capture}
{capture name="buttons"}
{include file="buttons/save_cancel.tpl" but_name="dispatch[ab__sf_patterns.update]" but_role="submit-link" but_target_form="ab__sf_pattern_form" hide_first_button=false hide_second_button=false save=$pattern}
{/capture}
{notes}{__("ab__sf.rule.notes")}{/notes}
{assign var="title" value="{__("ab__sf.pattern.edit")}: {__("ab__sf.name.`$pattern`")}"}
{include file="addons/ab__addons_manager/views/ab__am/components/menu.tpl" addon="ab__seo_filters" active_href="ab__sf_patterns.manage"}
{include file="common/mainbox.tpl" title_start=__("ab__seo_filters")|truncate:40 title_end=$title content=$smarty.capture.mainbox adv_buttons=$smarty.capture.adv_buttons buttons=$smarty.capture.buttons select_languages=true}
