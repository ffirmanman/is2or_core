<?php

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}
header('Content-Type: application/json; charset=utf-8');
$intVals = ['warehouses_destination_id', 'page', 'runtime_company_id', 'runtime_uid', 'runtime_storefront_id'];
foreach ($intVals as $val) {
    if (!empty($_REQUEST[$val])) {
        $_REQUEST[$val] = abs((int) $_REQUEST[$val]);
    }
}
if (empty($_REQUEST['page']) || $_REQUEST['page'] < 1) {
    $_REQUEST['page'] = 1;
}
if (!empty($_REQUEST['lang_code'])) {
    $_REQUEST['lang_code'] = substr(preg_replace('/[^a-z]+/', '', $_REQUEST['lang_code']), 0, 2);
}
