{if $settings.abt__ut2.products.addon_buy_together.view == 'as_tab_in_tabs' || ( $runtime.controller == 'products' && $runtime.mode == 'options' && "AJAX_REQUEST"|defined)}
    {include file="addons/ab__buy_together/components/buy_together_block.tpl"}
{/if}