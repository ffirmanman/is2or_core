<?php

use Tygh\RfStockParser\Process\ProcessFabric;
use Tygh\RfStockParser\Process\Process;
use Tygh\RfStockParser\Process\Execute;

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}

/*
 * @var string $mode
 * @var string $action
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode === 'update' && $_REQUEST['addon'] === 'rf_stock_parser') {
        try {
            fn_rf_stock_parser_before_install();
            $process = ProcessFabric::getProcess(Process::TYPE_TEST, 0);
            $result = (new Execute())->setProcess($process)->checkPhp(true);
        } catch (Throwable $e) {
            fn_set_notification('E', __('error'), $e->getMessage());
        }

        if ($result) {
            db_query('UPDATE ?:rf_stock_parser_process SET error_message = "" WHERE error_message LIKE "%PHP_CHECK%"');
        }
    }
}
