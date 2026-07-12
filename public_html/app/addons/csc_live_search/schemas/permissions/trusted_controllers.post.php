<?php

if (!defined('BOOTSTRAP')) {
    exit('Access denied');
}
$schema['csc_live_search']['allow']['cron'] = true;
$schema['csc_live_search']['allow']['clean_requests'] = true;
$schema['csc_live_search']['allow']['clear_turbo_cache'] = true;
return $schema;
