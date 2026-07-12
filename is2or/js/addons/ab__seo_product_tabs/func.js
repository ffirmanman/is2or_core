/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2025   *
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
const doc_elem = $($.browser.opera ? "html" : "html,body");
let current_context = doc_elem;
let tabs = [];
let tabs_panel = $();
let tab_anchors = $();
let tabs_panel_position = 'after_h1';
let tabs_panel_fixed = false;
let scroll_in_process = false;
const main_container_id = 'tygh_main_container';
$.ceEvent("one", "ce.commoninit", function (e) {
$(_.doc).on('resize wheel mousewheel touchmove keydown', function (e) {
const keys = ['ArrowUp', 'ArrowDown', 'PageUp', 'PageDown', 'Home', 'End', 'Tab', ' '];
let allow_reset = scroll_in_process && (e.event !== 'keydown' || keys.includes(e.key));
if (allow_reset && ['wheel', 'mousewheel'].includes(e.type)) {
allow_reset = !$(e.target).hasClass('ab-spt-floating-panel') && !$(e.target).parents('.ab-spt-floating-panel').length;
}
if (allow_reset) {
_.ab__spt.functions.reset_scroll();
}
});
});
$.ceEvent("on", "ce.commoninit", function (context) {
_.ab__spt.functions.init(context);
if (tabs_panel.length) {
process_changes();
let last_scroll_top = 0;
let last_process_done = true;
$(window).on('scroll resize', function (e) {
if (e.type === 'scroll') {
const current_scroll_top = $(this).scrollTop();
if (current_scroll_top === last_scroll_top) {
return;
}
last_scroll_top = current_scroll_top;
}
if (last_process_done) {
last_process_done = false;
setTimeout(function () {
process_changes();
last_process_done = true;
}, 10);
}
});
}
});
const process_changes = function process_changes() {
const other_top_panels_height = _.ab__spt.functions.get_top_panels_height(['fixed', 'pseudo'], true);
tabs_panel.css('top', other_top_panels_height);
const pos_to_lock_top = _.ab__spt.functions.get_tabs_panel_lock_position();
const pos_to_lock_bottom = _.ab__spt.functions.get_tab_position(_.ab__spt.functions.get_tab('last').tab_id).bottom;
const doc_top_offset = _.ab__spt.functions.get_doc_top_offset(false, true);
if (!tabs_panel_fixed && doc_top_offset >= pos_to_lock_top && doc_top_offset < pos_to_lock_bottom) {
_.ab__spt.functions.set_tabs_panel_state(true);
} else if (tabs_panel_fixed && (doc_top_offset < pos_to_lock_top || doc_top_offset > pos_to_lock_bottom)) {
_.ab__spt.functions.set_tabs_panel_state(false);
}
if (!scroll_in_process) {
_.ab__spt.functions.highlight_tab_anchor();
}
};

if (typeof _.ab__spt === 'undefined') {
_.ab__spt = {};
}
if (typeof _.ab__spt.functions === 'undefined') {
_.ab__spt.functions = {};
}
_.ab__spt.functions.get_body_scroll_top = function get_body_scroll_top() {
return self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
};
_.ab__spt.functions.is_current_theme = function is_current_theme(theme) {
return ~_.ab__spt.params.theme_name.indexOf(theme);
};
_.ab__spt.functions.init = function init(context) {
const _tabs_panel = context.find('.ab-spt-floating-panel').first();
if (_tabs_panel.length) {
tabs_panel = _tabs_panel;
current_context = context;
doc_elem.addClass('ab-spt-panel-inited').removeClass('ab-spt-pos-after_h1 ab-spt-pos-before_tabs');
if ($('.ab-spt-floating-position-after_h1').length) {
_.ab__spt.functions.set_tabs_panel_position('after_h1');
} else {
_.ab__spt.functions.set_tabs_panel_position('before_tabs');
}
tab_anchors = tabs_panel.find('.ab-spt-anchors__item span');
tab_anchors.each(function (i, anchor) {
anchor = $(anchor);
anchor.on('click', function() {
let tab_id = anchor.data('ab-spt-target');
let anchor_target = tab_id;
if (anchor_target !== main_container_id) {
anchor_target = 'content_' + anchor_target;
}
const target_element = $('#' + anchor_target);
if (target_element.length) {
if (scroll_in_process) {
_.ab__spt.functions.reset_scroll();
}
_.ab__spt.functions.highlight_tab_anchor(tab_id)
_.ab__spt.functions.scroll_to_tab(tab_id);
}
});
});
tabs = [];
tab_anchors.each(function(i, anchor) {
anchor = $(anchor);
const anchor_id = anchor.data('ab-spt-target');
if (anchor_id !== main_container_id) {
let anchor_tab = $('#content_' + anchor_id);
if (!anchor_tab.length) {
anchor_tab = $('#' + anchor_id);
}
if (anchor_tab.length) {
tabs.push({
'tab_id': anchor_id,
'tab_anchor': anchor,
'tab_content': anchor_tab,
'tab_title': $('#' + anchor_id),
'tab_content_id': anchor_tab.attr('id')
});
}
}
});
}
};
_.ab__spt.functions.get_tabs = function get_tabs() {
return tabs;
};
_.ab__spt.functions.get_tab_anchors = function get_tab_anchors() {
return tab_anchors;
};
_.ab__spt.functions.get_tabs_panel_position = function get_tabs_panel_position() {
return tabs_panel_position;
};
_.ab__spt.functions.set_tabs_panel_position = function set_tabs_panel_position(position) {
tabs_panel_position = position;
doc_elem.removeClass('ab-spt-pos-after_h1 ab-spt-pos-before_tabs').addClass('ab-spt-pos-' + position);
};
_.ab__spt.functions.is_tabs_panel_fixed = function is_tabs_panel_fixed() {
return tabs_panel_fixed;
};
_.ab__spt.functions.set_tabs_panel_state = function set_tabs_panel_state(fixed = true) {
tabs_panel_fixed = fixed;
if (fixed) {
doc_elem.addClass('ab-spt-fixed');
} else {
doc_elem.removeClass('ab-spt-fixed');
}
};
_.ab__spt.functions.is_scroll_in_process = function is_scroll_in_process() {
return scroll_in_process;
};
_.ab__spt.functions.set_scroll_process_state = function set_scroll_process_state(in_process = true) {
scroll_in_process = in_process;
};
_.ab__spt.functions.get_tab = function get_tab(tab_id, only_element = false, position = 'current') {
let tab = undefined;
if (tab_id === 'first') {
tab = tabs.at(0);
} else if (tab_id === 'last') {
tab = tabs.at(-1);
} else if (tab_id === main_container_id) {
tab = {
'tab_id': tab_id,
'tab_anchor': tab_anchors.filter(`[data-ab-spt-target="${tab_id}"]`),
'tab_content': $('#' + tab_id),
'tab_title': $(),
'tab_content_id' : tab_id
};
} else {
for (let i in tabs) {
if (tabs[i].tab_id === tab_id) {
tab = tabs[i];
break;
}
}
}
if (tab_id !== 'main_container_id' && tab !== null && typeof tab === 'object' && ['prev', 'next'].includes(position)) {
tab_id = tab.tab_id;
let tab_i = undefined;
for (let i in tabs) {
if (tabs[i].tab_id === tab_id) {
tab_i = i;
break;
}
}
if (typeof tab_i !== 'undefined') {
if (position === 'prev') {
tab_i = tab_i >= 1 ? tab_i - 1 : undefined;
} else {
tab_i = tab_i < (tabs.length - 1) ? +tab_i + 1 : undefined;
}
tab = typeof tab_i === 'number' ? tabs[tab_i] : undefined;
} else {
tab = undefined;
}
}
if (tab === null || typeof tab !== 'object') {
tab = only_element ? $() : {};
} else if (only_element) {
tab = tab.tab_content;
}
return tab;
};
_.ab__spt.functions.get_tab_position = function get_tab_position(tab_id, with_offset = false, recursion = false) {
const tab = _.ab__spt.functions.get_tab(tab_id);
if (!Object.keys(tab).length) {
return {top: 0, bottom: 0};
}
const tab_content = tab.tab_content;
const positions = {
top: tab_content.offset().top,
bottom: tab_content.offset().top + tab_content.get(0).offsetHeight
};
if (tab.tab_id !== main_container_id) {
if (tab.tab_title.length) {
positions.top = tab.tab_title.offset().top;
}
if (with_offset) {
positions.top -=_.ab__spt.functions.get_top_panels_height('fixed');
const lock_pos = _.ab__spt.functions.get_tabs_panel_lock_position();
const tabs_panel_height = _.ab__spt.functions.get_top_panels_height('main');
let abt__ut2_offset = _.ab__spt.functions.abt__ut2_get_top_offset_to_add_to_cart(positions.top);
if (positions.top >= lock_pos) {
if (abt__ut2_offset && (positions.top - lock_pos + abt__ut2_offset) < tabs_panel_height) {
positions.top -= lock_pos;
} else {
positions.top -= tabs_panel_height;
}
} else {
positions.top -= tabs_panel_height - (lock_pos - positions.top);
}
abt__ut2_offset = _.ab__spt.functions.abt__ut2_get_top_offset_to_add_to_cart(positions.top);
if (abt__ut2_offset > 0) {
const pseudo_panels_height = _.ab__spt.functions.get_top_panels_height('pseudo');
if (pseudo_panels_height > abt__ut2_offset) {
positions.top -= abt__ut2_offset + abt__ut2_offset - Math.floor(abt__ut2_offset) + 1;
} else {
positions.top -= pseudo_panels_height + 1;
}
}
}
if (!recursion) {
const next_tab = _.ab__spt.functions.get_tab(tab_id, false, 'next');
if (Object.keys(next_tab).length) {
positions.bottom = _.ab__spt.functions.get_tab_position(next_tab.tab_id, with_offset, true).top;
}
}
}
positions.top = Math.floor(positions.top);
positions.bottom = Math.ceil(positions.bottom);
return positions;
};
_.ab__spt.functions.get_doc_top_offset = function get_doc_top_offset(inc_tabs_panel = false, inc_other_top_panels = false, precision = false) {
let doc_top_offset = $(_.doc).scrollTop();
if (inc_tabs_panel) {
doc_top_offset += _.ab__spt.functions.get_top_panels_height('main', true);
}
if (inc_other_top_panels) {
doc_top_offset += _.ab__spt.functions.get_top_panels_height(['fixed', 'pseudo'], true) ;
}
if (!precision) {
doc_top_offset = Math.ceil(doc_top_offset);
}
return doc_top_offset;
};
_.ab__spt.functions.get_tabs_panel_lock_position = function get_tabs_panel_lock_position() {
let position = current_context.find('#ab-spt-floating-placeholder').offset().top;
if (tabs_panel_position === 'after_h1' && !_.ab__spt.functions.is_current_theme('abt__youpitheme')) {
position += _.ab__spt.functions.get_top_panels_height('main');
}
position = Math.ceil(position);
return position;
};
_.ab__spt.functions.get_top_panels_height = function get_top_panels_height(type = 'all', only_active = false, panel_name = '') {
let other_top_panels_height = 0;
const other_top_panels = _.ab__spt.functions.get_top_panels(type, only_active, panel_name);
for (let top_panel in other_top_panels) {
if (!panel_name || panel_name === top_panel) {
const panel = $(other_top_panels[top_panel]);
if (panel.length) {
let height = +panel.get(0).offsetHeight;
if (height <= 0 && !only_active) {
height = panel.get(0).clientHeight;
}
other_top_panels_height += +height;
}
}
}
return other_top_panels_height;
};
_.ab__spt.functions.get_top_panels = function get_top_panels(type = 'all', only_active = false, panel_name = '') {
const other_top_panels = {};
if (!Array.isArray(type)) {
type = [type];
}
if ((!only_active || tabs_panel_fixed) && (type.includes('all') || type.includes('main')) && (!panel_name || panel_name === 'tabs_panel')) {
if (tabs_panel.length) {
other_top_panels.tabs_panel = tabs_panel;
}
}
if (_.ab__spt.functions.is_current_theme('abt__unitheme2')) {
if (
_.abt__ut2.settings.general?.top_sticky_panel?.enable[_.abt__ut2.device] === 'Y' &&
(type.includes('all') || type.includes('fixed')) && (!panel_name || panel_name === 'abt__ut2_sticky_header')
) {
let header_elem;
const _header = current_context.find('.header-grid');
if (_header.hasClass('default_header')) {
header_elem = _header.find(".search-grid");
} else if (_header.hasClass('advanced-header')) {
header_elem = _header.find(".top-menu-grid");
} else {
header_elem = $('.header-grid');
}
if (header_elem.length) {
other_top_panels.abt__ut2_sticky_header = header_elem;
}
}
if (
_.abt__ut2.settings.products?.view?.show_sticky_panel_add_to_cart[_.abt__ut2.device] === 'top' &&
(type.includes('all') || type.includes('pseudo')) && (!panel_name || panel_name === 'abt__ut2_sticky_add_to_cart')
) {
const local_context = only_active ? $('.sticky-add-to-cart') : current_context;
let selector = '.ut2-pb__sticky-add-to-cart.position-top';
if (only_active) {
selector += ':not(.ab-spt-hidden)';
}
const sticky_add_to_cart_top = local_context.find(selector);
if (sticky_add_to_cart_top.length) {
other_top_panels.abt__ut2_sticky_add_to_cart = sticky_add_to_cart_top;
}
}
} else if (~_.ab__spt.params.theme_name.indexOf('abt__youpitheme')) {
if (
window.innerWidth > 767 &&
(type.includes('all') || type.includes('fixed')) && (!panel_name || panel_name === 'abt__youpi_header')
) {
const header_elem = $('body.fixed-top .tygh-top-panel');
if (header_elem.length) {
other_top_panels.abt__youpi_header = header_elem;
}
}
}
return other_top_panels;
};
let scroll_to_tab_num = 0;
_.ab__spt.functions.scroll_to_tab = function scroll_to_tab(tab_id, duration = 700) {
let direction = null;
let start_time = null;
let last_frame = false;
let current_scroll_num = ++scroll_to_tab_num;
const tab = _.ab__spt.functions.get_tab(tab_id)
const start_pos = _.ab__spt.functions.get_doc_top_offset(false, false, true);
if (!Object.keys(tab).length) {
return;
}
_.ab__spt.functions.set_scroll_process_state(true);
function step(current_time) {
let allow_scroll = current_scroll_num === scroll_to_tab_num;
if (start_time === null) {
start_time = current_time;
}
const time_elapsed = current_time - start_time;
const progress = Math.min(time_elapsed / duration, 1);
const ease = ease_in_out_quad(progress);
let target_offset = _.ab__spt.functions.get_tab_position(tab_id, true).top;
if (target_offset < 0) {
target_offset = 0;
}
const current_distance = target_offset - start_pos;
const current_direction = current_distance > 0 ? 'down' : 'up';
if (direction === null) {
if (current_distance === 0) {
allow_scroll = false;
}
direction = current_direction;
}
let top_pos = start_pos + current_distance * ease;
allow_scroll = allow_scroll && direction === current_direction;
allow_scroll = allow_scroll && scroll_in_process && !last_frame;
if (time_elapsed >= duration) {
last_frame = true;
top_pos = target_offset;
}
if (allow_scroll) {
window.scrollTo(0, top_pos);
requestAnimationFrame(step);
} else {
if (scroll_in_process && current_scroll_num === scroll_to_tab_num) {
_.ab__spt.functions.reset_scroll();
}
}
}
function ease_in_out_quad(t) {
return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
}
requestAnimationFrame(step);
};
_.ab__spt.functions.highlight_tab_anchor = function highlight_tab_anchor(tab_id) {
let tab_anchor = $();
if (typeof tab_id !== 'string') {
const loc_top_scrolled = _.ab__spt.functions.get_doc_top_offset();
const tabs_position = _.ab__spt.functions.get_tab_position(_.ab__spt.functions.get_tab('first').tab_id, true);
if (loc_top_scrolled < tabs_position.top) {
const tab = _.ab__spt.functions.get_tab(main_container_id);
tab_id = tab.tab_id;
tab_anchor = tab.tab_anchor ? tab.tab_anchor : tab_anchor;
} else {
for (let i in tabs) {
const tab = tabs[i];
const tab_position = _.ab__spt.functions.get_tab_position(tab.tab_id, true);
if (loc_top_scrolled >= tab_position.top && loc_top_scrolled < tab_position.bottom) {
tab_id = tab.tab_id;
tab_anchor = tab.tab_anchor;
}
}
}
} else {
const tab = _.ab__spt.functions.get_tab(tab_id);
if (tab.tab_anchor) {
tab_anchor = tab.tab_anchor;
}
}
if (tab_anchor.length) {
if (!tab_anchor.hasClass('active')) {
tab_anchors.removeClass('active scrolling');
tab_anchor.addClass('active');
}
if (!tab_anchor.hasClass('scrolling')) {
_.ab__spt.functions.scroll_to_tab_anchor(tab_id);
}
}
};
let animation_num = 0;
_.ab__spt.functions.scroll_to_tab_anchor = function scroll_to_tab_anchor (tab_id) {
const anchors_wrap = tabs_panel.find('.ab-spt-anchors__wrap');
const anchors_wrap_width = anchors_wrap.get(0).offsetWidth;
const anchors_wrap_scroll_width = anchors_wrap.get(0).scrollWidth;
if (anchors_wrap_scroll_width > anchors_wrap_width) {
let offset_left = null;
let smooth_scroll = true;
const tab = _.ab__spt.functions.get_tab(tab_id);
if (tab.tab_anchor) {
const anchor = tab.tab_anchor;
const prev_anchors = anchor.parent().prevAll();
if (
tab.tab_id === main_container_id
&& _.ab__spt.functions.get_tabs_panel_lock_position() > _.ab__spt.functions.get_doc_top_offset(true, true)
) {
smooth_scroll = false;
}
const anchor_left_pos = Math.round(anchor.position().left - anchors_wrap.position().left);
const anchor_right_pos = anchor_left_pos + anchor.get(0).offsetWidth;
if (anchor_left_pos < 0 || (anchor_left_pos > 0 && anchor_right_pos > anchors_wrap_width)) {
offset_left = 0;
prev_anchors.each(function(i, e) {
e = $(e);
if (!e.hasClass('ab-spt-anchors__item') && e.parents('.ab-spt-anchors__item').length) {
e = e.parents('.ab-spt-anchors__item').first();
}
offset_left += $(e).outerWidth(true);
});
}
if (offset_left !== null) {
anchor.addClass('scrolling');
let current_animation_num = ++animation_num;
anchors_wrap.stop().animate({scrollLeft: offset_left}, {
duration: smooth_scroll ? 300 : 0,
easing: 'swing',
complete: function () {
if (current_animation_num === animation_num) {
anchor.removeClass('scrolling');
}
}
});
}
}
}
};
_.ab__spt.functions.reset_scroll = function reset_scroll() {
_.ab__spt.functions.set_scroll_process_state(false);
process_changes();
};
_.ab__spt.functions.abt__ut2_get_top_offset_to_add_to_cart = function abt__ut2_get_top_offset_to_add_to_cart(top_position) {
let offset = 0;
if (
_.ab__spt.functions.is_current_theme('abt__unitheme2') &&
_.abt__ut2.settings.products?.view?.show_sticky_panel_add_to_cart[_.abt__ut2.device] === 'top'
) {
const other_top_panels = _.ab__spt.functions.get_top_panels('pseudo', false, '');
if (other_top_panels.abt__ut2_sticky_add_to_cart) {
const add_to_cart_button = current_context.find('.ut2-pb__button.ty-product-block__button .ty-btn__add-to-cart');
if (add_to_cart_button.length) {
const add_to_cart_bottom_position = add_to_cart_button.offset().top + add_to_cart_button.get(0).offsetHeight;
offset = top_position - add_to_cart_bottom_position;
if (other_top_panels.abt__ut2_sticky_add_to_cart.find('.ut2-pb__sticky-add-to-cart_product-img').length) {
offset += _.ab__spt.functions.get_top_panels_height('fixed', true);
}
}
}
}
if (offset < 0) {
offset = 0;
}
return offset;
};
})(Tygh, Tygh.$);