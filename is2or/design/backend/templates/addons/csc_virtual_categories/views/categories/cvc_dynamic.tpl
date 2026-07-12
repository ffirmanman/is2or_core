<div id="container_{$elm_id}">
{if $smarty.request.condition}
    {include file="addons/csc_virtual_categories/components/conditions.tpl" picker_selected_companies=$picker_selected_companies}

{elseif $smarty.request.group}
    {include file="addons/csc_virtual_categories/components/condition_group.tpl" }
{/if}
<!--container_{$elm_id}--></div>