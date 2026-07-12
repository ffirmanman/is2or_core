<?php
/**
 * cartrocks.com
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file CR-LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://cartrocks.com/CR-LICENSE.txt
 *
 * @copyright  Copyright (c) 2010 cartrocks.com
 * @license    https://cartrocks.com/CR-LICENSE.txt
 */

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode == 'products') {

    if (!empty($_REQUEST['company_id'])) {
        $company_data = !empty($_REQUEST['company_id']) ? fn_get_company_data($_REQUEST['company_id']) : array();

        $company_data['logos'] = fn_get_logos($_REQUEST['company_id']);

        Registry::set('navigation.tabs', array(
            'description' => array(
                'title' => __('description'),
                'js' => true
            )
        ));

        if (Registry::get('addons.discussion.status') == 'A') {
            $posts_total = db_get_field("SELECT COUNT(*) FROM ?:discussion d LEFT JOIN ?:discussion_posts dp ON d.thread_id = dp.thread_id WHERE d.object_type='M' AND dp.status = 'A' AND d.object_id = ?i", $_REQUEST['company_id']);

            Tygh::$app['view']->assign('posts_total', $posts_total);

            $discussion = fn_get_discussion($_REQUEST['company_id'], 'M', true, $_REQUEST);

            if (empty($discussion) || $discussion['type'] != 'D') {

                $navigation_tabs = Registry::get('navigation.tabs');
                $navigation_tabs['discussion'] = array(
                    'title' => __('discussion_title_company'),
                    'js' => true
                );

                Registry::set('navigation.tabs', $navigation_tabs);

                $company_data['discussion'] = $discussion;
            }
        }

        Tygh::$app['view']->assign('company_data', $company_data);
    }

}
