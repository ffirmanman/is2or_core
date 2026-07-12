<?php

defined('BOOTSTRAP') or die('Access denied');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'add') {
        $_REQUEST['notification_products_simple'] = true;
    }
}