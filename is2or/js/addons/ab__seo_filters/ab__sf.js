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
(function (_, $) {
$.ceEvent('on', 'ce.ajaxdone', function (elms, scripts, params, response_data, response_text) {
try {
if (typeof response_data !== 'undefined' && response_data !== null
&& typeof response_data.ab__sf_data !== 'undefined' && response_data.ab__sf_data !== null) {
var d = response_data.ab__sf_data;
if (typeof d.tag_h1 !== 'undefined' && d.tag_h1 !== null) {
if($("h1[class*=mainbox-title] > span:first-child").length){
$("h1[class*=mainbox-title] > span:first-child").text(d.tag_h1);
}else{
$("h1[class*=mainbox-title]").text(d.tag_h1);
}
}
if (typeof d.page_title !== 'undefined' && d.page_title !== null && d.replace_page_title == 'Y') {
document.title = d.page_title;
}
if (typeof d.description !== 'undefined' || d.description !== null) {
var desc = $("div.ab__sf_cat_desc");
desc.empty().html(d.description);
$.ceEvent('trigger', 'ce.commoninit', [desc]);
}
if (typeof d.short_description !== 'undefined' || d.short_description !== null) {
var s_desc = $("div.ab__sf_short_desc");
if(d.short_description === ''){
s_desc.remove();
}else{
if (s_desc.length) {
s_desc.empty().html(d.short_description);
} else {
s_desc = $(d.short_description).insertBefore("div.ab__sf_cat_desc").parent();
}
}
$.ceEvent('trigger', 'ce.commoninit', [s_desc]);
}
}
} catch (e) {
console.log(e);
return false;
}
});
$(_.doc).on('click', '.ab__sf_filter_url', function (e) {
var filterElement = $(e.currentTarget).find('input.cm-product-filters-checkbox')
if(!filterElement.is($(e.target))){
filterElement.checked = !filterElement.checked;
filterElement.prop("checked", !filterElement.prop("checked")).change();
return false;
}
})
}(Tygh, Tygh.$));
