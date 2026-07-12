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
function fn_ab__ia_get_products(li, hidden_status) {
var b = li.data('b');
var j = parseInt(li.data('j'));
var p = parseInt(li.data('p'));
if (j > 0 && p > 0) {
$.ceAjax('request', fn_url('ab__ia_joins.get_join_products'), {
hidden: hidden_status,
force_exec: true,
method: 'post',
data: {block_id: b, join_id: j, product_id: p,},
callback: function (data) {
if (data.result === 'Y') {
$('li.btn-ab__ia_join',li.parent()).removeClass('active');
li.addClass('active');
var div_products_scroller = $('div#join_list_products_' + b);
div_products_scroller.empty().append(data.products_scroller).addClass('inited');
if ($.isFunction($.processForms)) {
$.processForms(div_products_scroller);
}
$.commonInit(div_products_scroller);
}
},
});
}
}
$.ceEvent('on', 'ce.notificationshow', function (context) {
if (context.find('.ty-ab__ia_joins').length){
if ($.fn.ceTabs) {
$('.cm-j-tabs', context).ceTabs();
}
if ($.fn.ceProductImageGallery) {
$('.cm-image-gallery', context).ceProductImageGallery();
}
$.processForms(context);
notify_before = context;
}
});
$.ceEvent('on', 'ce.commoninit', function (context) {
if (!context.find('.ty-ab__ia_joins-list-products.inited').length) {
$.each(['ab__ia_join', 'ab__ia_join_in_add_to_cart', 'ab__ia_join_in_cart'], function (i, type) {
var bf = context.find('.btn-' + type + ':first-child');
if (bf.length) {
$.each(bf, function (it, li) {
fn_ab__ia_get_products($(li), true);
})
$(_.doc).on('click', '.btn-' + type + ':not(.active)', function (e) {
fn_ab__ia_get_products($(this), false);
});
}
});
}
if(context.is('.ty-ab__ia_joins')){
context.find('.cm-ab-load-select-variation-content').on('click', function (){
$.ceNotification('close', $('.cm-notification-content-extended'));
})
}
});
})(Tygh, Tygh.$);
