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
if($('.ty-product-reviews-view__main-content').length === 0) return;
$('body').on('click', '#reviews-loader-btn', function () {
const result_ids = $(this).closest('.ty-product-reviews-view__main-content').attr('id');
const container = $(`#${result_ids} .ty-product-review-view__posts`);
const loadMore = container.siblings('.ty-product-reviews-load-more');
this.disabled = true
$.ceAjax('request', this.dataset.loadMore, {
data: {
result_ids,
is_ajax: 1,
selected_section: 'product_reviews',
},
pre_processing: (data) => {
const posts = $(data.html[result_ids]).find('.ty-product-review-view__posts');
delete data.html;
container.append(posts.children());
const loadMoreContent = posts.siblings('.ty-product-reviews-load-more');
loadMore.html(loadMoreContent.children());
},
callback: () => {
this.disabled = false
}
});
});
})(Tygh, Tygh.$);
