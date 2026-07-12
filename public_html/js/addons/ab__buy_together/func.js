/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2021   *
* / /_\ | | _____  _| |_/ /_ __ __ _ _ __   __| |_ _ __   __ _   | |_ ___  __ _ _ __ ___   *
* |  _  | |/ _ \ \/ / ___ \ '__/ _` | '_ \ / _` | | '_ \ / _` |  | __/ _ \/ _` | '_ ` _ \  *
* | | | | |  __/>  <| |_/ / | | (_| | | | | (_| | | | | | (_| |  | ||  __/ (_| | | | | | | *
* \_| |_/_|\___/_/\_\____/|_|  \__,_|_| |_|\__,_|_|_| |_|\__, |  \___\___|\__,_|_| |_| |_| *
*                                                         __/ |                            *
*                                                        |___/                             *
* ---------------------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license and accept    *
* to the terms of the License Agreement can install and use this program.                  *
* ---------------------------------------------------------------------------------------- *
* website: https://cs-cart.alexbranding.com                                                *
*   email: info@alexbranding.com                                                           *
*******************************************************************************************/
let loadCombination = (data) => {
return new Promise((resolve, reject) => {
$.ceAjax('request', fn_url("ab__buy_together.get_combination"), {
method: 'get',
data: data,
hidden: true,
caching: true,
callback: function (response) {
resolve(response);
}
});
}
)
};
let getCombination = (form) => {
let updateChain = (parent, chainData,basePorductId) => {
parent.querySelector('.ab__bt_price-block .chain-old-line').innerHTML = chainData.total_price;
parent.querySelector('.ab__bt_price-block .price').innerHTML = chainData.chain_price;
let namePrefix = 'product_data['+basePorductId+'_'+chainData.chain_id+']';
let elem = parent.getElementsByClassName('ab__chain_id')[0];
elem.name = namePrefix+'[chain]';
elem.value = chainData.chain_id;
elem = parent.getElementsByClassName('ab__product_id')[0];
elem.name = namePrefix+'[product_id]';
elem.value = basePorductId;
};
let formData = new FormData(form);
let prefix = form.dataset.caChainId;
var inputs = $('[id^="content_buy_together_options_'+prefix+'"]').find('input[name*="product_options"],select[name*="product_options"]');
let data = {
generator_id: formData.get('generator_id'),
base_product_id: formData.get('base_product_id'),
products: formData.getAll('product_ids[]'),
};
Object.assign(data, inputs.serializeObject());
loadCombination(data).then(function (response) {
let storedChainData = response.chain_data;
updateChain(form, storedChainData,data.base_product_id);
});
};
(function (_, $) {
$.extend({
togglePositionAvailability: function togglePositionAvailability (elem) {
let container = elem.closest('.products_container');
container.classList.toggle('disallowed');
elem.classList.toggle('unchecked');
container.querySelector('input[name*=product_ids]').toggleAttribute('disabled');
let combinationContainer = container.closest('.ab__bt_box');
if(combinationContainer.querySelector('.products_container:not(.disallowed)') !== null){
combinationContainer.querySelector('.ab__bt_price-block').classList.remove('disallowed');
getCombination(elem.closest('form'));
}else{
combinationContainer.querySelector('.ab__bt_price-block').classList.add('disallowed');
}
}
});
$(".ab__bt_products a.cm-dialog-opener.ab__bt_link-sp,.ab__bt_products .ab__bt_product-options a.cm-dialog-opener").click(function () {
setTimeout(function () {
var overlay = $('.ui-widget-overlay');
var modal = overlay.next().detach();
overlay.detach();
overlay.insertBefore("#ab__buy-together");
modal.insertBefore("#ab__buy-together");
}, 0);
});
$.ceEvent('on', 'ce.product_option_changed_post', function (objId, id, optionId, updateIds, formData, data, params) {
var overlay = $(".ui-widget-overlay").detach();
overlay.insertBefore("#ab__buy-together");
});
$.ceEvent('on', 'ce.product_option_changed', function (objId, id, optionId, updateIds, formData) {
let parentForm = $('.cm-reload-'+objId).closest('.ab__bt_chain_form');
let chainId = parentForm.find('.ab__chain_id').val();
let containerId = parentForm.data('caChainId');
let pricesId = parentForm.find('.ab__bt_price').attr('id');
updateIds.push(pricesId);
formData.push({name:'appearance[bt_chain]',value:chainId});
formData.push({name:'force_chain_id',value:containerId});
formData.push({name:'force_chain_id',value:containerId});
});
$("#ab__buy-together form").each(function () {
let prefix = this.dataset.caChainId;
let initChainId = this.name;
$.ceEvent("on", "ce.formpre_" + initChainId, function (form, elm) {
var inputs = $('[id^="content_buy_together_options_'+prefix+'"]').find("input, select").serializeObject();
$.each(inputs, function (key, value) {
form.append('<input type="hidden" name="' + key + '" value="' + value + '" />');
});
});
})

}(Tygh, Tygh.$));
