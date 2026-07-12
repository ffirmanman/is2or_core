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

defined('BOOTSTRAP') or die('Access denied');

fn_define('CR_LC_API_URL', 'https://cartrocks.com');

if (file_exists(dirname(__FILE__).'/cr_lic.php')) {
    require_once dirname(__FILE__).'/cr_lic.php';
} else {
    $addon_name = basename(dirname(__FILE__));

    fn_disable_addon($addon_name, $addon_name, false);
}