/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2022   *
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
$(_.doc).on('click', '.cm-ab-sr-show-more', function () {
var self = $(this);
$.ceAjax('request', fn_url('ab__seo_reviews.view_category'), {
method: 'get',
result_ids: 'ab_sr__posts_' + self.data('caAbSrProductId'),
append: true,
data: {
'ab__sr_product_id': self.data('caAbSrProductId'),
'ab__sr_posts_page': self.data('caAbSrPostsPage'),
'category_id': self.data('caCategoryId'),
},
callback: function (data) {
if (data.html) {
self.remove();
}
}
});
});
})(Tygh, Tygh.$);