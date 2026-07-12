/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2023   *
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
(function(_, $){
$.ceEvent('on', 'ce.ajaxdone', function(elms, inline_scripts, params, data, response_text) {
if (data.ab__ecw_comparison_list !== undefined) {
_.ab__ecw.comparison_list = data.ab__ecw_comparison_list;
run_ab__ecw_init($(_.doc));
}
});
$(document).ready(function(){
run_ab__ecw_init($(_.doc));
});
let run_ab__ecw_init = function(context){
if(!_.ab__ecw.settings.open_compare_page_with_add_button){
return false;
}
if (typeof _.ab__ecw.comparison_list === 'object' && Array.isArray(_.ab__ecw.comparison_list)) {
let link_selectors = [];
_.ab__ecw.comparison_list.forEach(product_id => {
let selector = 'a[href^="' + fn_url('product_features.add_product?product_id=' + product_id) + '&"]';
link_selectors.push(selector);
});
context.find(link_selectors.join(',')).each(function(){
if (!this.classList.contains('cm-ab-ec-reinited')) {
let new_link = 'product_features.compare';
if (_.ab__ecw.settings.group_comparison_lists) {
new_link += '?product_id=' + this.getAttribute('href').match(/product_id=(\d*)/)[1];
}
new_link = fn_url(new_link);
this.setAttribute('href', new_link);
this.classList.add('ty-btn__ab-ec-in-compare');
this.classList.remove('cm-ajax');
}
});
}
};

$.ceEvent('on', 'ce.commoninit', function(context) {
if (_.ab__ecw.settings.group_comparison_lists === true) {
_.ab__ecw.runtime.features_compare_url = _.ab__ecw.runtime.features_compare_url || fn_url('product_features.compare');
let compare_links = $('a[href^="' + _.ab__ecw.runtime.features_compare_url + '"]:not(.cm-ab-ec-reinited):not(.ty-breadcrumbs__a)');
let compare_popup = $('#account_info_ab__extended_comparison_wishlist_groups');
if (compare_popup && !compare_popup.find('.cm-ab-ec-empty-comparison_list').length) {
compare_links.addClass('cm-ab-ec-reinited');
compare_links.click(() => {
compare_popup.ceDialog('open', {
width: 'auto',
height: 'auto',
dialogClass: 'dialog-auto-sized',
title: _.tr('ab__ecw.comparison_lists'),
});
return false;
});
}
}
context.find('.cm-ab-ec-copy-to-clipboard').click(function(e){
e.preventDefault();
var attr_to_copy = this.getAttribute('data-cm-ab-ec-copy-from');
if (typeof attr_to_copy !== 'undefined' && attr_to_copy.length) {
ab__ecw_copy_to_clipboard(this.getAttribute(attr_to_copy));
$.ceNotification('show', {
type: 'N',
title: _.tr('notice'),
message: _.tr('ab__ecw.link_was_copied'),
});
}
});
setTimeout(function() {
if (_.ab__ecw.runtime.device !== 'mobile' && window.innerWidth >= 768 && window.innerHeight >= 500) {
var comparison_blocks = context.find('.ab-ec-comparison:not(.scroll-inited)').addClass('scroll-inited');
comparison_blocks.find('.ab-ec-comparison__header').each(function(){
var elem_height = this.offsetHeight;
if ((elem_height * 100) / window.innerHeight > 40) {
this.classList.add('not-sticky');
} else {
this.style.top = ($('body').data('ca-scroll-to-elm-offset') || 0) + 'px';
}
});
}
}, 100);
context.find('.ab-ec-filter-features.highlight').on('click', function() {
let all_features_class = 'ab-ec-all_features';
let different_only_class = 'ab-ec-different_only';
let highlight = false;
if (this.classList.contains(all_features_class)) {
this.classList.remove(all_features_class);
this.classList.add(different_only_class);
this.children[2].innerText = _.tr('ab__ecw.different_only');
highlight = true;
} else {
this.classList.remove(different_only_class);
this.classList.add(all_features_class);
this.children[2].innerText = _.tr('ab__ecw.all_features');
}
if (highlight === true) {
document.querySelectorAll('.ab-ec-comparison-features__item-content').forEach(item => {
let are_equals = true;
let first_val = item.querySelector('.ab-ec-comparison-features__variant .ab-ec-comparison-features__value').innerHTML;
item.querySelectorAll('.ab-ec-comparison-features__variant:not(:first-child) .ab-ec-comparison-features__value').forEach(subitem => {
if (are_equals === true) {
are_equals = first_val === subitem.innerHTML;
}
});
if (are_equals === false) {
item.classList.add('highlight');
}
});
} else {
document.querySelectorAll('.ab-ec-comparison-features__item-content.highlight').forEach(item => {
item.classList.remove('highlight');
});
}
});
});
function fallbackCopyTextToClipboard(text) {
var res = false;
var textArea = _.doc.createElement('textarea');
textArea.value = text;
textArea.style.top = '0';
textArea.style.left = '0';
textArea.style.position = 'fixed';
document.body.appendChild(textArea);
textArea.focus();
textArea.select();
try {
res = document.execCommand('copy');
} catch (err) {
console.error('Fallback: Oops, unable to copy', err);
return false;
}
document.body.removeChild(textArea);
return res;
}
function ab__ecw_copy_to_clipboard( text ) {
if (!navigator.clipboard) {
return fallbackCopyTextToClipboard(text);
}
navigator.clipboard.writeText(text).then(function() {
return true;
}, function(err) {
console.error('Async: Could not copy text: ', err);
return false;
});
}
})(Tygh, Tygh.$);