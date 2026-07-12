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
(function (_, $) {
$.ceEvent('on', 'ce.ab__fn_init', function (context) {
if (_.ab__fn !== undefined) {
Object.keys(_.ab__fn.blocks).forEach(function (__item_id) {
var __settings = _.ab__fn.blocks[__item_id];
(function () {
var parents = context.find(`.ab-fn-block-${__item_id}`);

if (!parents.length && context.hasClass(`ab-fn-block-${__item_id}`)) {
parents = context;
}
parents.each(function () {
var parent = $(this);
var first_level_container = parent.find(`#ab__fn-first-level-${__item_id}`);
var first_level_items = parent.find('.ab-fn-first-level-item');
var second_level_containers = parent.find('.ab-fn-second-level');
var levels_wrapper = parent.find('.ab-fn-levels-wrapper');
if (__settings.first_level_scroller !== undefined && first_level_container.length && !first_level_container.data('owlCarousel')) {
first_level_container.owlCarousel(__get_scroller_settings(__item_id, 1));
}
parent.find('.ab-fn-first-level').removeClass('ab-fn-clipped');
if (!second_level_containers.hasClass('ab-fn-second-level-scroller')) {
var columns_opt = _.ab__fn.blocks[__item_id].columns;
var resizeTimer;
if (columns_opt !== undefined) {
calculate_items_width(parent, columns_opt);

$(window)
.off('resize.ab__fn_' + __item_id)
.on('resize.ab__fn_' + __item_id, function () {
clearTimeout(resizeTimer);
resizeTimer = setTimeout(function () {
calculate_items_width(parent, columns_opt);
}, 120);
});
}
}
parent.off('click.abfn', '.ab-fn-first-level-item').on('click.abfn', '.ab-fn-first-level-item', function () {
var item = $(this);
var item_id = item.attr('data-item-id');
var subitems_wrap_id = 'ab__fn-second-level-' + __item_id + '_' + item_id + '_' + _.cart_language;
var subitem_wrap = parent.find('#' + subitems_wrap_id);
if (!item.hasClass('active')) {
if (_.ab__fn.settings.load_by_ajax === 'Y' && subitem_wrap.length && !subitem_wrap.is('.uploaded, .first')) {
if (subitem_wrap.data('loading')) return;
subitem_wrap.data('loading', true);
subitem_wrap.addClass('uploaded');
$.ceAjax('request', fn_url('ab__fast_navigation.load_subitems'), {
result_ids: subitems_wrap_id,
method: 'POST',
data: {
id: subitems_wrap_id,
block_type: __settings['block_type'],
},
hidden: false,
caching: true,
callback: function () {
subitem_wrap.data('loading', false);
$.ceEvent('trigger', 'ce.ab__fn_init', [parent]);
fn_helper__freezeHeight(levels_wrapper);
first_level_items.removeClass('active');
second_level_containers.removeClass('active');
item.addClass('active');
subitem_wrap.addClass('active');
fn_helper__waitAndReleaseHeight(subitem_wrap, levels_wrapper);
}
});
} else {
fn_helper__freezeHeight(levels_wrapper);
first_level_items.removeClass('active');
second_level_containers.removeClass('active');
item.addClass('active');
subitem_wrap.addClass('active');
fn_helper__waitAndReleaseHeight(subitem_wrap, levels_wrapper);
}
}
});
parent.find('.delimeter-block').off('click.abfn').on('click.abfn', delimeter_action);
});
})();
if (__settings.second_level_scroller !== undefined) {
var second_level_scrollers = context.find(`[id^='ab__fn-second-level-${__item_id}'][id$='${_.cart_language}']`);
second_level_scrollers.each(function () {
var wrapper = $(this);
if (!wrapper.children().length) return;
if (wrapper.data('owlCarousel')) return;

requestAnimationFrame(function () {
wrapper[0].offsetWidth;
requestAnimationFrame(function () {
wrapper.owlCarousel(__get_scroller_settings(__item_id, 2));
});
});
});
}
});
}
});
function fn_helper__freezeHeight(levels_wrapper) {
if (levels_wrapper.data('__height_state') === 'frozen') return;
var prev_height_raw = levels_wrapper[0].getBoundingClientRect().height;
var prev_height = Math.round(prev_height_raw * 10) / 10;
levels_wrapper.attr('data-prev-height', prev_height);
levels_wrapper.data('__prev_height', prev_height);
levels_wrapper.css('min-height', prev_height + 'px');
levels_wrapper.data('__height_state', 'frozen');
}
function fn_helper__waitAndReleaseHeight(subitem_wrap, levels_wrapper) {
var is_scroller = subitem_wrap.hasClass('ab-fn-second-level-scroller');
if (levels_wrapper.data('__height_state') === 'releasing') return;
levels_wrapper.data('__height_state', 'releasing');
var attempts_limit = 60;
var attempts_count = 0;
var item_last_width = null;
var stable_width_ticks = 0;
var tolerance = 1;
var wrapper_last_height = null;
var stable_height_ticks = 0;
if (!is_scroller) {
fn_helper__cleanup();
setTimeout(function () {
subitem_wrap[0].offsetHeight;
levels_wrapper.css('min-height', '');
}, 0);
return;
}
function fn__releaseHeight() {
if (levels_wrapper.data('__height_state') !== 'releasing') return;
levels_wrapper.css('min-height', '');
fn_helper__cleanup();
}
function fn__getItemWidth() {
var first_item = subitem_wrap.find('.owl-item').get(0);
if (!first_item) return 0;
var item_width_raw = first_item.getBoundingClientRect().width;
return Math.round(item_width_raw * 10) / 10;
}
function fn__getWrapperHeight() {
var wrapper_height_raw = levels_wrapper[0].getBoundingClientRect().height;
return Math.round(wrapper_height_raw * 10) / 10;
}
var interval = setInterval(function () {
if (!subitem_wrap[0].isConnected) {
levels_wrapper.css('min-height', '');
fn_helper__cleanup();
return;
}
var item_current_width = fn__getItemWidth();
var wrapper_current_height = fn__getWrapperHeight();
attempts_count++;
if (item_current_width <= 0) {
stable_width_ticks = 0;
stable_height_ticks = 0;
item_last_width = null;
wrapper_last_height = null;
if (attempts_count >= attempts_limit) {
fn__releaseHeight();
}
return;
}
if (item_last_width === null) {
item_last_width = item_current_width;
wrapper_last_height = wrapper_current_height;
stable_width_ticks = 0;
stable_height_ticks = 0;
return;
}
if (Math.abs(item_current_width - item_last_width) < tolerance) {
stable_width_ticks++;
} else {
stable_width_ticks = 0;
item_last_width = item_current_width;
}
if (Math.abs(wrapper_current_height - wrapper_last_height) < tolerance) {
stable_height_ticks++;
} else {
stable_height_ticks = 0;
wrapper_last_height = wrapper_current_height;
}
var width_ready = stable_width_ticks >= 3;
var height_ready = stable_height_ticks >= 3;
if (
(width_ready && height_ready) ||
attempts_count >= attempts_limit
) {
fn__releaseHeight();
}
}, 25);
levels_wrapper.data('__release_timer', interval);
function fn_helper__cleanup() {
var timer = levels_wrapper.data('__release_timer');
if (timer) {
clearInterval(timer);
levels_wrapper.removeData('__release_timer');
}
levels_wrapper.removeData('__height_state');
}
}
function calculate_items_width(parent, columns_opt) {
var window_width = $(window).width();
var columns = 0;
if (window_width >= 1230) {
columns = columns_opt.number_of_columns_desktop;
} else if (window_width >= 992 && window_width <= 1229) {
columns = columns_opt.number_of_columns_desktop_small;
} else if (window_width >= 768 && window_width <= 991) {
columns = columns_opt.number_of_columns_tablet;
} else if (window_width >= 576 && window_width <= 767) {
columns = columns_opt.number_of_columns_tablet_small;
} else {
columns = columns_opt.number_of_columns_mobile;
}
var subitems = parent.find('.ab-fn-second-level');
if (subitems.length) {
subitems.each(function () {
var subitem = $(this);
if (subitem.hasClass('clicked-delimeter')) return void (0);
subitem.find('.delimeter-block').detach();
var add_delimeter = ((!!(subitem.data('add-delimeter')) && !subitem.hasClass('clicked-delimeter')));
var subitem_siblings = subitem.find('.ab-fn-second-level-item');
var delimeter_iteration = 0;
if (add_delimeter && (subitem_siblings.length > columns)) {
subitem_siblings.each(function (index) {
var sibling = $(this);
var delimeter_str = this.className.split('delimeter-');
var second_part = ' ';
if (delimeter_str[1]) {
second_part += delimeter_str[1].substr(1);
}
this.className = delimeter_str[0] + ' delimeter-' + delimeter_iteration + second_part;
if (!(index === subitem_siblings.length - 1) &&
((index + 2) === (delimeter_iteration * columns + columns))) {
delimeter_iteration = delimeter_iteration + 1;
var x = 0;
var y = subitem_siblings.length;
if ((subitem_siblings.length - (index + 1)) >= columns) {
x = columns;
} else {
x = subitem_siblings.length - (index + 1);
}
sibling.after(
"<div class='ab-fn-level-item ab-fn-second-level-item ty-column" + columns + " delimeter-block' data-delimeter='" + delimeter_iteration + "'>" +
'<div class="ab-fn-content ab-fn-sl-content">' +
"<div class='ab-fn-item-header'><bdi class=\"ab-fn-caption\">" +
_.tr('ab__fn.delimeter_text').replace('[x]', x).replace('[y]', y) +
'</bdi></div>' +
"<div class='ab-fn-delimeter-plus'><div class='plus-itself'></div></div>" +
'</div>' +
'</div>'
);
}
});
} else {
subitem_siblings.addClass('delimeter-0');
}
});
}
parent.find('.delimeter-block').off('click.abfn').on('click.abfn', delimeter_action);
var children = parent.find('.ab-fn-first-level-item, .ab-fn-second-level-item');
var width = (100 / columns) + '%';

children.css('width', width);
}
function delimeter_action() {
var delimeter = $(this);
var delimeter_parent = delimeter.parents('.ab-fn-second-level');
var delimeter_id = Number(delimeter.attr('data-delimeter'));
delimeter_parent.addClass('clicked-delimeter');
delimeter_parent.find('.delimeter-' + delimeter_id).css('display', 'inline-flex');
delimeter_parent.find(".delimeter-block[data-delimeter='" + (delimeter_id + 1) + "']").css('display', 'inline-flex');
delimeter.detach();
}

$.ceEvent('on', 'ce.commoninit', function (context) {
if (!context.find('[class*="ab-fn-block-"]').length && !context.is('[class*="ab-fn-block-"]')) return;
$.ceEvent('trigger', 'ce.ab__fn_init', [context]);
});
function __get_scroller_settings(parent_id, level) {
return {
direction: _.language_direction,
navigation: true,
pagination: false,
navigationText: ["<i class='ty-icon-left-open-thin ab-fn-nav-buttons'></i>", "<i class='ty-icon-right-open-thin ab-fn-nav-buttons'></i>"],
items: _.ab__fn.blocks[parent_id].columns.number_of_columns_desktop,
itemsDesktopSmall: [1230, _.ab__fn.blocks[parent_id].columns.number_of_columns_desktop_small],
itemsTablet: [992, _.ab__fn.blocks[parent_id].columns.number_of_columns_tablet],
itemsTabletSmall: [768, _.ab__fn.blocks[parent_id].columns.number_of_columns_tablet_small],
itemsMobile: [576, _.ab__fn.blocks[parent_id].columns.number_of_columns_mobile],
afterInit: function () {
var scroller = $(this)[0];
var scroller_elem = scroller.$elem;
scroller_elem.addClass('inited-scroller');
},
afterMove: level === 1 ? function () {
var scroller = $(this)[0];
var block = scroller.$elem.closest(`.ab-fn-block-${parent_id}`);
var tabs_content = block.find(`.ab-fn-second-level[id^='ab__fn-second-level-${parent_id}_']`);
var visible_elems = scroller.visibleItems;
var customer_elements = scroller.$userItems;
var levels_wrapper = block.find('.ab-fn-levels-wrapper');
fn_helper__freezeHeight(levels_wrapper);
var active_item = customer_elements.filter('.active');
if (!active_item.length) {
return;
}
var active_index = customer_elements.index(active_item);
var active_index_of = visible_elems.indexOf(active_index);
if (active_index_of === -1) {
if (active_index > visible_elems[visible_elems.length - 1]) {
customer_elements.removeClass('active');
customer_elements.eq(visible_elems[visible_elems.length - 1]).click();
tabs_content.removeClass('active');
tabs_content.eq(visible_elems[visible_elems.length - 1]).addClass('active');
} else {
customer_elements.removeClass('active');
customer_elements.eq(visible_elems[0]).click();
tabs_content.removeClass('active');
tabs_content.eq(visible_elems[0]).addClass('active');
}
}
} : function () {
},
afterAction: function () {
var scroller = $(this)[0];
var scroller_elem = scroller.$elem;
if (!scroller_elem.hasClass('active') && level === 1)
return;
var visible_elems = scroller.visibleItems;
var customer_elements = scroller.$userItems;
if (visible_elems[0] === 0) {
scroller_elem.find('.owl-prev').addClass('ab-fn-hidden');
scroller_elem.addClass('js_start-pos');
if (visible_elems[visible_elems.length - 1] !== customer_elements.length - 1) {
scroller_elem.find('.owl-next').removeClass('ab-fn-hidden');
scroller_elem.removeClass('js_final-pos');
}
} else if (visible_elems[visible_elems.length - 1] === customer_elements.length - 1) {
scroller_elem.find('.owl-next').addClass('ab-fn-hidden');
scroller_elem.addClass('js_final-pos');
if (visible_elems[0] !== 0) {
scroller_elem.find('.owl-prev').removeClass('ab-fn-hidden');
scroller_elem.removeClass('js_start-pos');
}
} else {
scroller_elem.find('.owl-prev, .owl-next').removeClass('ab-fn-hidden');
scroller_elem.removeClass('js_start-pos js_final-pos');
}
if (_.ab__fn.blocks[parent_id].first_level_scroller.init_scrollbar === true && level === 1) {
var scrollbar = scroller_elem.closest('.ab-fn-parent').find('.ab-fn-scrollbar .ab-fn-scrollbar-plate');
var percents_by_item = 100 / (customer_elements.length - visible_elems.length);
var scroll_to = visible_elems[0] * percents_by_item;
scrollbar.css('width', Math.round(scroll_to) + '%');
}
},
}
}
})(Tygh, Tygh.$);