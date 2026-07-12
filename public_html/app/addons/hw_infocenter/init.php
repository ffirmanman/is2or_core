<?php
/*
 * © 2023 Hungryweb  
 */

defined('BOOTSTRAP') or die('Access denied');

 fn_register_hooks(
    'get_pages_pre',
    'add_discussion_post_post',
    'get_discussion_object_data',
    'get_discussion_titles',
    'get_discussion_objects',
    'get_locations_pre',
    'post_get_pages',
    'get_page_data',
    'update_page_post',
    'page_object_by_type',
    'get_pages'
);