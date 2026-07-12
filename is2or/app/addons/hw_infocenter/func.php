<?php
/*
 * © 2023 Hungryweb  
 */

defined('BOOTSTRAP') or die('Access denied');

use Tygh\Registry;
use Tygh\Enum\SiteArea;
use Tygh\Enum\UserTypes;
use Tygh\Addons\Discussion\Notifications\EventIdProviders\DiscussionProvider;
use Tygh\Http;

function fn_hw_infocenter_domain_cleanup($domain)
{
    $domain = str_replace('www.', '', $domain);
    return $domain;
}

function fn_hw_infocenter_get_forms()
{
    if(!defined('PAGE_TYPE_FORM')) return [];

    list($pages, ) = fn_get_pages([
        'page_type' => PAGE_TYPE_FORM,
        'status' => 'A',
    ], 0);

    return $pages;
}

function fn_hw_infocenter_send_notification($data)
{
    $discussion_object = fn_discussion_get_object([
        'object_id' => $data['page_id'],
        'object_type' => PAGE_TYPE_INFOCENTER
    ]);

    $thread_id = $discussion_object['thread_id'] ?? 0;

    if(empty($thread_id)){
        $discussion = [
            'object_type' => PAGE_TYPE_INFOCENTER,
            'object_id'   => $data['page_id'],
            'type'        => 'C', //Comments
            'company_id'  => $data['company_id'],
        ];
        $thread_id = db_query('INSERT INTO ?:discussion ?e', $discussion);
    }

    $post_id = Tygh::$app['session']['infocenter'][$data['page_id'].'-'.$data['name']] ?? 0;
    if(empty($post_id)){
        $post_id = fn_add_discussion_post([
            'thread_id' => $thread_id,
            'name' => $data['name'],
            'message' => $data['message']
        ], true);
        Tygh::$app['session']['infocenter'][$data['page_id'].'-'.$data['name']] = $post_id;
    }else{
        $posts = [];
        $posts[$post_id] = [
            'post_id' => $post_id,
            'thread_id' => $thread_id,
            'name' => $data['name'],
            'message' => $data['message']
        ];
        fn_update_discussion_posts($posts);
        Tygh::$app['session']['infocenter'][$data['page_id']] = null;
    }
}

function fn_hw_infocenter_add_discussion_post_post($post_data, $send_notifications)
{
    $object = fn_discussion_get_object($post_data);
    if($send_notifications && !empty($object['object_type']) && $object['object_type'] == PAGE_TYPE_INFOCENTER){

        $discussion_object_types = fn_get_discussion_objects();

        $object_data = fn_get_discussion_object_data($object['object_id'], $object['object_type']);
        $object_name = $discussion_object_types[$object['object_type']];

        $fn_prepare_subject = function($type, $lang_code) {
            return __('discussion_title_' . $type, '', $lang_code) . ' - ' . __($type, '', $lang_code);
        };

        /** @var \Tygh\Notifications\EventDispatcher $event_dispatcher */
        $event_dispatcher = Tygh::$app['event.dispatcher'];

        $receivers = [
            UserTypes::ADMIN    => true,
            UserTypes::CUSTOMER => false,
        ];
        if (fn_allowed_for('MULTIVENDOR')) {
            $receivers[UserTypes::VENDOR] = false;
        }

        /** @var \Tygh\Notifications\Settings\Factory $notification_settings_factory */
        $notification_settings_factory = Tygh::$app['event.notification_settings.factory'];
        $notification_rules = $notification_settings_factory->create($receivers);

        $url = "discussion_manager.manage?object_type={$object['object_type']}&post_id={$post_data['post_id']}";
        $lang_code = fn_get_company_language(Registry::get('runtime.company_id'));
        $discussion_data = [
            'post_id'       => $post_data['post_id'],
            'object'        => $object,
            'object_data'   => $object_data,
            'post_data'     => $post_data,
            'object_name'   => $object_name,
            'subject'       => $fn_prepare_subject($discussion_object_types[$object['object_type']], $lang_code),
            'url'           => $url,
        ];

        $discussion_data['company_id'] = (int) fn_get_company_id('pages', 'page_id', $object['object_id']);
        $event_dispatcher->dispatch(
            'discussion.pages.new_post',
            $discussion_data,
            $notification_rules,
            new DiscussionProvider($discussion_data)
        );
    }
}

function fn_hw_infocenter_get_discussion_object_data(&$data, $object_id, $object_type)
{
    if(!empty($object_type) && $object_type == PAGE_TYPE_INFOCENTER){
        $data['url'] = fn_url('pages.update?page_id=' . $object_id);
        $data['description'] = fn_get_page_name($object_id);
    }
}

function fn_hw_infocenter_get_discussion_titles(&$discussion_object_titles)
{
    $discussion_object_titles[PAGE_TYPE_INFOCENTER] = 'discussion_tab_infocenter';
}

function fn_hw_infocenter_get_discussion_objects(&$discussion_object_types)
{
    $discussion_object_types[PAGE_TYPE_INFOCENTER] = 'infocenter';
}

function fn_hw_infocenter_get_pages(&$params, $join, &$condition, $fields, $group_by, &$sortings, $lang_code)
{
    if (!empty($params['page_type']) && $params['page_type'] == PAGE_TYPE_INFOCENTER) {
        if (!empty($params['get_tree'])) {
            $sortings['multi_level'] = [
                '?:pages.parent_id',
                '?:pages.timestamp',
            ];
        }
        db_sort($params, $sortings, 'timestamp', 'desc');
    }
}

function fn_hw_infocenter_page_object_by_type(&$types){

    $types[PAGE_TYPE_INFOCENTER] = [
        'content' => 'infocenter.content',
        'single' => 'infocenter.single',
        'name' => 'infocenter.name',
        'add_name' => 'infocenter.add',
        'edit_name' => 'infocenter.edit',
        'new_name' => 'infocenter.new',
        'exclusive' => true,
        'hide_fields' => [
            'position' => false
        ]
    ];

}

function fn_hw_infocenter_update_page_post($page_data, $page_id, $lang_code, $create, $old_page_data)
{
    if (!empty($page_data['page_type']) && $page_data['page_type'] == PAGE_TYPE_INFOCENTER) {
        fn_attach_image_pairs('infocenter_image', 'infocenter', $page_id, $lang_code);
    }
}

function fn_hw_infocenter_get_page_data(&$page_data, $lang_code, $preview, $area)
{
    if ($page_data['page_type'] == PAGE_TYPE_INFOCENTER) {
        $page_data['main_pair'] = fn_get_image_pairs($page_data['page_id'], 'infocenter', 'M', true, false, $lang_code);
    }
}

function fn_hw_infocenter_post_get_pages(&$pages, $params, $lang_code)
{
    if(!empty($params['get_image']) && $params['page_type'] == PAGE_TYPE_INFOCENTER){
        foreach ($pages as $idx => $page) {
            $pages[$idx]['main_pair'] = fn_get_image_pairs($page['page_id'], 'infocenter', 'M', true, false, $lang_code);
        }
    }
}

function fn_hw_infocenter_get_locations_pre(&$params, $lang_code)
{
    if(SiteArea::isStorefront(AREA)) {
        if(!empty($params['dispatch']) && $params['dispatch'] == 'pages.view' && !empty($params['dynamic_object']) && !empty($params['dynamic_object']['object_id'])){
            $page_type = db_get_field('SELECT page_type FROM ?:pages WHERE page_id=?i', $params['dynamic_object']['object_id']);
            if($page_type==PAGE_TYPE_INFOCENTER){
                $params['dispatch'] = 'hw_infocenter.search';
            }
        }
    }
}

function fn_hw_infocenter_get_main_pages()
{
    $infocenter_page_id = db_get_field("SELECT `page_id` FROM ?:pages WHERE `page_type` = ?s AND `parent_id` = ?i", PAGE_TYPE_INFOCENTER, 0);
    list($pages, ) = fn_get_pages([
        'parent_id' => $infocenter_page_id,
        'page_type' => PAGE_TYPE_INFOCENTER,
        'status' => 'A'
    ], 0);
    return $pages; 
}

function fn_hw_infocenter_get_pages_pre(&$params, $items_per_page, $lang_code)
{
    if(SiteArea::isStorefront(AREA) && !empty($params['page_type']) && $params['page_type'] == PAGE_TYPE_INFOCENTER && empty($params['sort_by'])){
        $params['sort_by'] = 'position';
        $params['sort_order'] = 'asc';
    }
}

function fn_hw_infocenter_license_info(){
    return '<div class="control-group setting-wide"><label class="control-label">&nbsp;</label><div class="controls"><p class="muted"><small>'.__('hw_license_generator_info').'</small></p><span><a href="https://www.hungryweb.net/generate-license.html" target="_blank">'.__('hw_license_generator').'</a></span></div></div>';
}

#Hungryweb add-on registration
function fn_hw_infocenter_install(){ fn_hw_addon_register('infocenter','i'); }
function fn_hw_infocenter_uninstall(){ fn_hw_addon_register('infocenter','u'); }
if (!function_exists('fn_hw_addon_register')){
	function fn_hw_addon_register($a,$t){
        Registry::set('log_cut', true);
		Http::post("https://www.hungryweb.net/ws/addons/$t/$a", [ 'a' => $a, 'd' => Registry::get('config.http_host'), 'p' => Registry::get('config.http_path'), 'l' => strtoupper(CART_LANGUAGE), 'pn' => PRODUCT_NAME, 'pv' => PRODUCT_VERSION, 'pb' => PRODUCT_BUILD, 'pe' => PRODUCT_EDITION ]);
	}
}