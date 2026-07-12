/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2026   *
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
(function(_, $) {
$.ceEvent('on', 'ce.commoninit', function(context) {
let selectCityBlock = context.find('.cm-abt--ut2-select-city');
let $selectCityBlockProfile = context.find('.cm-abt--ut2-select-city-profile');
if (selectCityBlock.length) {
const countryElement = $('[data-ca-lite-checkout-element="country"]');
countryElement.on('change', function(e){
rebuildCities(selectCityBlock, e.target.value);
});
$('.cm-abt--ut2-select-city').on('click', function (e) {
if(e.target.classList.contains('city')){
const city = e.target.dataset.caSelectCity;
const stateCode = e.target.dataset.caStateCode;
const state = e.target.dataset.caState;
$.ceLiteCheckout('setLocation', city, stateCode,state);
}
});
}else if($selectCityBlockProfile.length){
const $container = $selectCityBlockProfile.closest('form');
const $countryElement = $container.find('.cm-country');
const cityInput = $container.find('[x-autocompletetype="city"]');
const stateInput = $container.find('[x-autocompletetype="state"]');
$countryElement.on('change', function(e){
rebuildCities($selectCityBlockProfile, e.target.value);
});
$selectCityBlockProfile.on('click', function (e) {
if(e.target.classList.contains('city')){
cityInput.val(e.target.dataset.caSelectCity);
stateInput?.val(e.target.dataset.caStateCode);
}
});
}
});
let rebuildCities = (container, country) => {
container.html("");
$elements = [];
if(Tygh.abt__ut2.checkout_cities[country] !== undefined){
for(let i in Tygh.abt__ut2.checkout_cities[country]){
let city = Tygh.abt__ut2.checkout_cities[country][i];
container.append('<span data-ca-select-city="'+city.city+'" data-ca-state-code="'+city.state_code+'" data-ca-state="'+city.state+'" class="city">'+city.city+'</span> ')
}
}
}
}(Tygh, Tygh.$));
