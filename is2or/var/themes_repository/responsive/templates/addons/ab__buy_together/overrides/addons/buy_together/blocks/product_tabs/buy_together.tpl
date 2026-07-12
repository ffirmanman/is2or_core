{** block-description:buy_together **}
{if $chains}
    {if !$config.tweaks.disable_dhtml && !$no_ajax}
        {assign var="is_ajax" value=true}
    {/if}
        {include file="addons/buy_together/components/buy_together_chain_form.tpl"}
{/if}
