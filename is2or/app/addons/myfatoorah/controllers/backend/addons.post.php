<?php
defined('BOOTSTRAP') or die('Access denied');


$addon = mf_getRequestData('addon');
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $mode === 'update' && $addon === 'myfatoorah') {
    mf_update_settings();
}

return [CONTROLLER_STATUS_OK];

