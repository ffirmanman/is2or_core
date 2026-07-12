<?php
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
if (!defined('BOOTSTRAP')) {
die('Access denied');
}
fn_register_hooks(
'get_page_data'
,'get_pages'
,'get_pages_after_sql'
,['ab__sfb_update_author_post', null, 'seo']
,['ab__sfb_get_authors_post', null, 'seo']
,['ab__sfb_delete_author_post', null, 'seo']
,'ab__as_other_objects'
,'sitemap_link_object'
,['ab__sfb_update_author_post', null, 'ab__so_noindex_tech_pages']
,['ab__sfb_delete_author_post', null, 'ab__so_noindex_tech_pages']
,['ab__sfb_get_authors_post', null, 'ab__so_noindex_tech_pages']
,['ab__seo_for_blog_ab__as_other_objects', null, 'ab__so_noindex_tech_pages']
);
