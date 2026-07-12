/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2024   *
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
(function (_, $) {
let multipleOperators = ['in', 'nin'];
$.ceEvent('on', 'ce.commoninit', function (context) {
let rulesContainer = context.find('.ab__ia_rules');
if(!rulesContainer.length){
return true;
}
rulesContainer.on('change', '.ab__ai_conditions .ab__ia_operator', function (event) {
let currentVal = event.target.value,
isMultiple = multipleOperators.includes(currentVal),
isCorrespondingBase = $(event.target).find(':selected').attr('class') === 'corresponding_base',
$variantsSelect = $(event.target.parentElement.nextElementSibling.querySelector('select')),
$variantInput = $variantsSelect.next();
if (!isMultiple) {
$variantInput.val('');
$variantInput.autoNumeric('init')
} else {
$variantInput.autoNumeric('destroy')
$variantInput.off('.autoNumeric')
}
$variantsSelect.attr('multiple', isMultiple);
$variantsSelect.toggleClass('hide', isCorrespondingBase || !isMultiple);
if (isCorrespondingBase) {
$variantInput.val('corresponding-base');
} else {
$variantsSelect.trigger('change')
}
$variantInput.toggleClass('hide', isMultiple || isCorrespondingBase);
}).on('change', '.ab__ia_variant', function (event) {
let $elem = $(event.target),
serializedValue = $elem.val();
if (Array.isArray(serializedValue)) {
serializedValue = serializedValue.filter(Number).join(',')
}
if (serializedValue === '0') {
serializedValue = '';
}
$elem.next().val(serializedValue);
})
})
$(_.doc).on('click', '.btn-clone[id*="join_rules"], .btn-add[id*="join_rules"]', function (e) {
let idPattern = e.target.id;
$(`[id^="box_${idPattern}_"]`).find('input[name$="[rule_id]"]').val(0);
$(`[id^="box_${idPattern}_"]`).find('.ab--ia-test-rule').remove();
});
function onAddRule(addBtn) {
let $addedRuleRow = $(addBtn).closest('tbody').next();
$addedRuleRow.find('.ab__ai_conditions tbody:not(:first-of-type)').remove();
$addedRuleRow.find('select').trigger('change');
}
$.extend(_, {
ab__ia: {
onAddRule: onAddRule
}
});
})(Tygh, Tygh.$);