/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2021   *
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
function preventSelection(element) {
var preventSelection = false;
var classes_old = _.ab__pcc.non_protection_classes.split(',');
for (var class_old in classes_old) {
classes_old[class_old] = $.trim(classes_old[class_old]);
}
classes_old = classes_old.join(' ');
function addHandler(element, event, handler) {
if (element.attachEvent)
element.attachEvent('on' + event, handler);
else if (element.addEventListener)
element.addEventListener(event, handler, false);
}
function removeSelection() {
if (window.getSelection) {
window.getSelection().removeAllRanges();
}
else if (document.selection && document.selection.clear)
document.selection.clear();
}
function killCtrlA(event) {
var event = event || window.event;
var sender = event.target || event.srcElement;
if (sender.tagName.match(/INPUT|TEXTAREA/i) && !(classes_old.includes(sender.className)) && !(sender.className.includes(classes_old)))
return;
var key = event.keyCode || event.which;
if (event.ctrlKey && key == 'A'.charCodeAt(0))
{
removeSelection();
if (event.preventDefault)
event.preventDefault();
else
event.returnValue = false;
}
}
addHandler(element, 'mousemove', function () {
if (preventSelection) {
removeSelection();
}
});
addHandler(element, 'mousedown', function (event) {
var event = event || window.event;
var sender = event.target || event.srcElement;
preventSelection = !sender.tagName.match(/INPUT|TEXTAREA/i) && !(classes_old.includes(sender.className)) && !(sender.className.includes(classes_old));
});
addHandler(element, 'mouseup', function () {
var event = event || window.event;
var sender = event.target || event.srcElement;
preventSelection = !sender.tagName.match(/INPUT|TEXTAREA/i) && !(classes_old.includes(sender.className)) && !(sender.className.includes(classes_old));
if (preventSelection)
removeSelection();
preventSelection = false;
});
addHandler(element, 'keydown', killCtrlA);
addHandler(element, 'keyup', killCtrlA);
}
document.ondragstart = noselect;
function noselect() {
return false;
}
$(document).ready(function () {
preventSelection(document);
$('img').attr('oncontextmenu','return false;').attr('onselectstart','return false;').attr('ondragstart','return false;');
});
}(Tygh, Tygh.$));