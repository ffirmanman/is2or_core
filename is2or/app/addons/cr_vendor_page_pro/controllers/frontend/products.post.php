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

if ($mode == 'view') {
    $product_data = Registry::get('view')->getTemplateVars('product');
    if (!empty($product_data['company_id'])) {
        $company_data = !empty($product_data['company_id']) ? fn_get_company_data($product_data['company_id']) : array();

        $company_data['logos'] = fn_get_logos($product_data['company_id']);

        if (Registry::get('addons.discussion.status') == 'A') {

            $discussion = fn_get_discussion($product_data['company_id'], 'M', true);

            if (empty($discussion) || $discussion['type'] != 'D') {
                $company_data['discussion'] = $discussion;
            }
        }

        Tygh::$app['view']->assign('company_data', $company_data);
    }
}
