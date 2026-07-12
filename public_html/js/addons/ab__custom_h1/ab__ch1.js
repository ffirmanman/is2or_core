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
(function(_, $) {
$(document).ready(function() {
_.ab__ch1.functions.toggle_elem_state = function ( event ) {
var $this = $(this);
var state = event.data.state;
var clear = event.data.clear;
var toggle_elem = $($this.data("ch1ToggleElem"));
if ($this.prop('checked')) {
toggle_elem.removeAttr(state);
} else {
toggle_elem.attr(state, '');
if (clear) {
toggle_elem.val('');
}
}
};
$("input[id^='ab__ch1_search_']:not([type='text'])").bind("change", { state: "disabled", clear: true }, _.ab__ch1.functions.toggle_elem_state);
});
}(Tygh, Tygh.$));