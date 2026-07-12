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
window.g__opened_dialog_counter = 0;
function g_fn__showDialog($this_dialog, modal_type) {
let $all_opened_except_this = {};
let $parent_opened = {};
let $new_active = {};
$all_opened_except_this = $('.js_dialog-state_-opened');
window.g__opened_dialog_counter = $all_opened_except_this.length;
if (window.g__opened_dialog_counter > 0) {
$parent_opened = $all_opened_except_this.filter('.js_dialog-state_-active').addClass('js_dialog-state_-parent');
$all_opened_except_this.not($parent_opened).removeClass('js_dialog-state_-parent');
$all_opened_except_this
.removeClass('js_dialog-state_-active')
.addClass('js_dialog-state_-ancestor');

} else {
if ($('body').is('.sticky-panel')) {
$('body').addClass('js_page-state_-dialog-with-sticky-bp');
}
g_fn__lockPage();
$('html').addClass('js_modal_-open');

}
window.g__opened_dialog_counter++;
$new_active = $this_dialog.addClass('js_dialog-state_-opened js_dialog-state_-active');
switch (modal_type) {
case 'type-_select-variation':
$('html').addClass('js_select-variation-dialog_-open');
$(document).on('click.add_to_cart_in_select_variation_dialog', '.select-variation-dialog .ty-btn__add-to-cart',
function () {
$.ceEvent('one', 'ce.ajaxdone', function () {
g_fn__hideDialog($new_active, 'type-_select-variation');
});
});
$new_active.find('.ut2-btn-close').on('click', function () {
event.stopPropagation();
event.preventDefault();
g_fn__hideDialog($new_active, 'type-_select-variation');
});
break;
case 'type-_notif-extended':
if ( !$('html').is('.js_notif-dialog_-open') ) {
$('html').addClass('js_notif-dialog_-open');
}
break;
}
}
window.g_fn__showDialog = g_fn__showDialog;
function g_fn__hideDialog($this_dialog, modal_type) {
let $all_opened = $('.js_dialog-state_-opened');
let $all_opened_except_this = {};
let $ancestors_opened = {};
let $parent_opened = {};
let $new_active = {};
let $child_active = {};
if (
(modal_type === 'type-_select-variation' && !$('html').is('.js_select-variation-dialog_-open') && !$all_opened.filter('.select-variation-dialog').length) ||
(modal_type === 'type-_notif-extended' && !$('html').is('.js_notif-dialog_-open') && !$all_opened.filter('.notification-content-extended').length) ||
(modal_type === 'type-_ui-dialog' && !$('html').is('.js_modal_-open'))
) {
return;
}
if ($this_dialog.length > 0) {
$this_dialog.removeClass('js_dialog-state_-active js_dialog-state_-opened js_dialog-state_-ancestor js_dialog-state_-parent');
if (modal_type === 'type-_select-variation') {
$this_dialog.remove();
}
}
$all_opened_except_this = $('.js_dialog-state_-opened');
window.g__opened_dialog_counter = $all_opened_except_this.length;
switch (modal_type) {
case 'type-_select-variation':
$(document).off('click.add_to_cart_in_select_variation_dialog');
$('html').removeClass('js_select-variation-dialog_-open');
break;
case 'type-_notif-extended':


if (!$all_opened_except_this.filter('.notification-content-extended').length) {
$('html').removeClass('js_notif-dialog_-open');
}
break;
}
if (window.g__opened_dialog_counter === 0) {
g_fn__unLockPage();
setTimeout(function () {
$('html').removeClass('js_modal_-open');
}, 200);
if ($('body').is('.js_page-state_-dialog-with-sticky-bp')) {
setTimeout(function () {
$('body').removeClass('js_page-state_-dialog-with-sticky-bp');
}, 0);
}

} else {
$ancestors_opened = $all_opened_except_this.not('.js_dialog-state_-active');
$child_active = $all_opened_except_this.filter('.js_dialog-state_-active');
if ($child_active.length > 0) {
if ($ancestors_opened.length > 0) {
$parent_opened = $ancestors_opened.last().addClass('js_dialog-state_-parent');

}
} else {
if ($ancestors_opened.length > 0) {
$new_active = $ancestors_opened
.last()
.removeClass('js_dialog-state_-ancestor js_dialog-state_-parent')
.addClass('js_dialog-state_-active');
$parent_opened = $ancestors_opened.not($new_active).last();
if ($parent_opened.length) {
$parent_opened.addClass('js_dialog-state_-parent');
}

}
}
}
}
window.g_fn__hideDialog = g_fn__hideDialog;
function utility__closeSystemUIDialog(dialog_content) {
let $dialog_content = null;
if (dialog_content && dialog_content.jquery) {
$dialog_content = dialog_content;
}
if (!$dialog_content && typeof dialog_content === 'string') {
$dialog_content = $(dialog_content).filter('.ui-dialog-content').first();
}
if ($dialog_content && $dialog_content.length) {
if ($dialog_content.data('ui-dialog')) {
$dialog_content.trigger('dialogclose');
$dialog_content.dialog('close');
} else {
if ($.popupStack && typeof $.popupStack.last_close === 'function') {
$.popupStack.last_close();
}
}
return true;
}
return false;
}
window.utility__closeSystemUIDialog = utility__closeSystemUIDialog;
$.ceEvent('on', 'ce.dialogshow', function ($d, e, u) {
let popup_id = $d.attr('id').replace('content_', '');
let $opener = $('#opener_' + popup_id);
if ($opener.length) {
let $qty = $opener.closest('form').find('input[name$="[amount]"]');
if ($qty.length) {
$d.find('input[name$="[amount]"]').val($qty.val());
}
}
g_fn__showDialog($d.parent('.ui-dialog'), 'type-_ui-dialog');
});

$.ceEvent('on', 'ce.dialogbeforeclose', function ($d) {
let $dialog = $d.parent('.ui-dialog');
if ($dialog.is(".abt__ut2_right-panel")) {
$dialog
.addClass('js_dialog-state_-closing')
.one('animationend', function (event) {
if (event.originalEvent.animationName === 'hide_inline_end_dialog') {
$dialog.removeClass('js_dialog-state_-closing');
}
});
}
});
$.ceEvent('on', 'ce.dialogclose', function ($d) {
g_fn__hideDialog($d.parent('.ui-dialog'), 'type-_ui-dialog');
});

$(document).on('click.ui_dialog_overlay', 'body > .ui-widget-overlay', function () {
let $overlay = $(this);
utility__closeSystemUIDialog($overlay.siblings('.abt__ut2_right-panel.js_dialog-state_-active').children('.ui-dialog-content'));
});
$(document).on('click.fix_closing_dialog_when_saving_params_of_product_from_set',
'.ty-product-bundles-get-option-variants .ty-btn[name*="product_bundles.change"],' +
'.ty-product-bundles-get-feature-variants .ty-btn[name*="product_bundles.change"]',
function () {
let $this_dialog = $(this).closest('.ui-dialog.ui-widget');
$.ceEvent('one', 'ce.ajaxdone', function () {
if ($('html').hasClass('js_modal_-open')) {
g_fn__hideDialog($this_dialog, 'type-_ui-dialog');
}
});
});
if ( window.g_mmq__mobile.matches ) {
$(document).on('click.before_open_notif_extended_dialog',
'body:not(.js_page-state_-locked) .ty-btn__add-to-cart[name*="checkout.add"]' + ',' +
'body:not(.js_page-state_-locked) .ty-btn__add-to-cart[data-ca-dispatch*="checkout.add"]' + ',' +
'body:not(.js_page-state_-locked) .ut2-add-to-wish[data-ca-dispatch*="wishlist.add"]:not(.active)' + ',' +
'body:not(.js_page-state_-locked) .ut2-add-to-compare[data-ca-target-id*="compar"]:not(.active)'
,
function () {
g_fn__lockPage();
$.ceEvent('one', 'ce.ajaxdone', function () {
setTimeout(function () {
if (!$('body').children('.notification-content-extended').length) {
g_fn__unLockPage();
}
}, 400);
});
});
$(document).on('click.fix_page_jump_bug', 'body:not(.js_page-state_-locked) .ut2-pb__button.ty-product-block__button .ut2-add-to-wish.active[data-ca-dispatch*="wishlist.delete"]',
function () {
g_fn__lockPage();
$.ceEvent('one', 'ce.ajaxdone', function () {
g_fn__unLockPage();
});
});
}
$.ceEvent('on', 'ce.notificationshow', function (t, e, u) {
const notificationExtended = Array.from(t).find((n)=>n.className.includes('cm-notification-content-extended'));
if (!notificationExtended) return;
g_fn__showDialog($(notificationExtended), 'type-_notif-extended');
const targetNode = notificationExtended.parentNode;
const config = { attributes: false, childList: true, subtree: false};
const callback = function(mutationList, observer) {
for (const mutation of mutationList) {
if (mutation.type !== 'childList') continue;
for (node of mutation.removedNodes) {
if (node === notificationExtended) {
g_fn__hideDialog($(notificationExtended), 'type-_notif-extended');
observer.disconnect();
return;
}
}
}
};
const observer = new MutationObserver(callback);
observer.observe(targetNode, config);
});
$(window).on('load.process_immediate_dialog', function () {
setTimeout(function () {
let $immediate_notif_dialog = $('body').children('.notification-content-extended').not('.js_dialog-state_-opened');
let $immediate_notif_dialog__close_btns;
if ($immediate_notif_dialog.length) {
$immediate_notif_dialog__close_btns = $immediate_notif_dialog.find('.cm-notification-close');
$immediate_notif_dialog__close_btns.one('click.close_immediate_notif_dialog', function() {
g_fn__hideDialog($immediate_notif_dialog, 'type-_notif-extended');
});
g_fn__showDialog($immediate_notif_dialog, 'type-_notif-extended');
}
}, 1000);
});
window.fn_alert = function (msg, not_strip) {
msg = not_strip ? msg : fn_strip_tags(msg);
$.ceNotification('show', {
type: 'I',
title: '',
message: '<div class="notification-extended-stuffing">' + msg + '</div>',
message_state: 'I'
});
}
}(Tygh, Tygh.$));