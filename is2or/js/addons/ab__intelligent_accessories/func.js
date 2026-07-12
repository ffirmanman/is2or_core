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
var cntrlIsPressed = false;
$(document).keydown(function(event){if(event.which=="17") { cntrlIsPressed = true; }});
$(document).keyup(function(){ cntrlIsPressed = false;});
function fn_ab__ia_type_of_conditions(selectbox){
var table = selectbox.parent().parent().next();
if (selectbox.val() == 'o') table.removeClass('hidden');
else table.addClass('hidden');
}
function fn_ab__ia_set_feature(selectbox,feature_id,category_id,type){
var selectbox_variants = selectbox.parent().next().next().find('select');
var selectbox_operators = selectbox.parent().next().find('select');
selectbox_variants.empty();
selectbox_operators.empty();
if (feature_id > 0){
var $ = Tygh.$;
$.ceAjax('request', fn_url('ab__ia_joins.get_variants'), {
caching: false,
force_exec: true,
method: 'post',
data: {
feature_id: feature_id,
category_id: category_id,
type: type
},
callback: function(data) {
selectbox_operators.append(data.operators)
selectbox_operators.val(selectbox_operators.find('option:first').val()).trigger('change');
selectbox_variants.append(data.variants);
},
});
}
}
function fn_ab__ia_test_rule(rule_id){
if (rule_id > 0){
var $ = Tygh.$;
$.ceAjax('request', fn_url('ab__ia_joins.test_rule'), {
caching: false,
force_exec: true,
method: 'post',
data: {
rule_id: rule_id,
},
});
}
}
function fn_ab__ia_update_cache (category_id){
if (category_id > 0){
var $ = Tygh.$;
$.ceAjax('request', fn_url('ab__ia_data.update_cache'), {
caching: false,
force_exec: true,
method: 'post',
data: {
category_id: category_id,
},
});
}
}
