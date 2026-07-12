<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'm_update' && Registry::isExist('addons.sd_vendor_products_database')) {
        if (ACCOUNT_TYPE == 'vendor' || ACCOUNT_TYPE == 'admin') {
            if (!empty($_REQUEST['products_data'])) {
                $productIds = array_unique(array_keys($_REQUEST['products_data']));

                if (!empty($productIds)) {
                    db_query('UPDATE ?:products set supplier_access_count = 0 WHERE supplier_access_count = -1 AND product_id IN (?a)', $productIds);
                }
            }
        }
    }
}
