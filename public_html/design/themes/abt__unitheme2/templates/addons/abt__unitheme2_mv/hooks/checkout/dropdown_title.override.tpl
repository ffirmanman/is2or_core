{** hook into "direct_payments" module in file responsive/templates/addons/direct_payments/overrides/blocks/cart_content.tpl **}
{if $cart.amount}
    <i class="ut2-icon-use_icon_cart filled"><span class="ty-minicart-count">{$cart.amount}</span></i><span>{__("cart")}</span>
{elseif $smarty.session.cart.amount}
    <i class="ut2-icon-use_icon_cart filled"><span class="ty-minicart-count">{$smarty.session.cart.amount}</span></i><span>{__("cart")}</span>
{else}
    <i class="ut2-icon-use_icon_cart empty"><span class="ty-minicart-count ty-hand empty">0</span></i><span>{__("cart")}</span>
{/if}