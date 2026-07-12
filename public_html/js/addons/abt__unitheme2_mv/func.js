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

$(document).ready(function () {
fn__vendorMenu();
$(document).on('click.stop_propagation', '.ut2-mv-dp_vendor-cart__header.cm-combination a:not(js_stop-click-propagation)', function(event) {
event.stopPropagation();
});
$(window).on('scroll.global_mv', function (event) {
fn_debounced__closeAnyVendorMenuDropdown();
});
});


function fn__vendorMenu() {
if (_.abt__ut2.device !== 'mobile') {
$(document).on('ce:combination:switch', '.ut2__vendor-menu .ty-dropdown-box__title.cm-combination', function (event, container, flag) {
let $combi_toggler = $(event.target);
let $combi_dropdown = $combi_toggler.parent();
let fn__positionTracker = $combi_toggler.data('position_tracker');
let fn_callback__positionTracker = $combi_toggler.data('position_tracker_callback');
if (!flag) {
if (fn_callback__positionTracker == null) {
fn_callback__positionTracker = function (dom__toggler, flag__distanceChange, distanceLength, flag__is_initial_call) {
let dom__popup = dom__toggler.parentElement.querySelector('.ty-dropdown-box__content');
if (!dom__popup || !dom__popup.isConnected) return;
utility__pairPopupWithToggler(dom__toggler, dom__popup, flag__distanceChange, distanceLength);
if (!dom__popup.__adjustPositionScheduled) {
dom__popup.__adjustPositionScheduled = utility__callOncePerBurst(utility__adjustPopupPositionToStayWithinViewport);
}
utility__waitForElementLayoutReady(dom__popup, function () {
dom__popup.__adjustPositionScheduled(dom__popup, dom__toggler, flag__distanceChange);
});
}
$combi_toggler.data('position_tracker_callback', fn_callback__positionTracker);
}
if (fn__positionTracker == null) {
fn__positionTracker = utility_rt__trackDistanceChangeToViewportBoundary(event.target, fn_callback__positionTracker);
$combi_toggler.data('position_tracker', fn__positionTracker);
}
fn__positionTracker.enable();
} else {
if (fn__positionTracker != null) {
fn__positionTracker.disable();
}
}
});
}
fn_inner__closeDropdownAtPageScrollStart();
function fn_inner__closeDropdownAtPageScrollStart() {
$('.ut2__vendor-menu__list').each(function () {
let $scrollable_container = $(this);
let fn_callback__scroll;
let fn_debounced_callback__scroll;
if ($scrollable_container.has('.cm-combination').length > 0) {
fn_callback__scroll = function () {
$scrollable_container.find('.cm-popup-box.js_open').siblings('.cm-combination.open').trigger('click');
};
fn_debounced_callback__scroll = utility__debounce_withLeadingTrailing(fn_callback__scroll, undefined, {leading: true, trailing: false});
$scrollable_container.on('scroll', fn_debounced_callback__scroll);
}
});
}
}


const fn_debounced__closeAnyVendorMenuDropdown = utility__debounce_withLeadingTrailing(fn__closeAnyVendorMenuDropdown, undefined, {leading: true, trailing: false});
function fn__closeAnyVendorMenuDropdown() {
$('.ut2__vendor-menu__list .ty-dropdown-box__content.cm-popup-box.js_open').siblings('.cm-combination.open').trigger('click');
}


$.ceEvent('on', 'ce.abt__ut2_before_ajax_request', function(arguments){
if(arguments[2]?.data?._action_context === 'page_in_popup'){
arguments[2].full_render = true
}
});

}(Tygh, Tygh.$));
