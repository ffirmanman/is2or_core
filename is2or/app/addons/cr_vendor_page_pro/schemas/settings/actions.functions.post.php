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

defined('BOOTSTRAP') or die('Access denied');

require_once (Registry::get('config.dir.addons') . 'cr_vendor_page_pro/config.php');

function fn_settings_actions_addons_cr_vendor_page_pro($new, $old) {

    if($new == "A") {
        fn_license_check_cr_vendor_page_pro();
    }
	
	return true;
}
