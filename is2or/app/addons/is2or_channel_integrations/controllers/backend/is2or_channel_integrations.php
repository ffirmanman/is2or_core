<?php
if (!defined('BOOTSTRAP')) { die('Access denied'); }

use Tygh\Registry;
use Tygh\Http;

$ajax_modes = ['request_authorize_url', 'trigger_import', 'sync_history', 'request_authorize_url_zid', 'trigger_import_zid', 'sync_history_zid'];

if (in_array($mode, $ajax_modes, true)) {
    if (!defined('AJAX_REQUEST')) {
        define('AJAX_REQUEST', true);
    }
}

// Get default company_id from active admin/vendor session
$company_id = fn_get_runtime_company_id();

// ====================================================================
// 1. MODE: Request Authorize URL
// ====================================================================
if ($mode == 'request_authorize_url') {
    header('Content-Type: application/json');

    $sync_service_url = Registry::get('addons.is2or_channel_integrations.sync_service_base_url');
    $return_url = fn_url("is2or_channel_integrations.callback_result", "A", "https");

    $payload = json_encode([
        'company_id' => (int) $company_id,
        'return_url' => $return_url
    ]);

    $service_id = 'local-test';
    $hmac_key = Registry::get('addons.is2or_channel_integrations.internal_hmac_secret');
    $key_id     = 'key-v1';

    $timestamp = (string) time();
    $nonce     = bin2hex(random_bytes(16));
    
    $body_hash = hash('sha256', $payload);
    $message = $service_id . "\n"
             . $timestamp . "\n"
             . $nonce . "\n"
             . $body_hash;
    $signature = hash_hmac('sha256', $message, $hmac_key);

    $extra_options = [
        'headers' => [
            'Content-Type: application/json',
            'X-IS2OR-Service: ' . $service_id,
            'X-IS2OR-Timestamp: ' . $timestamp,
            'X-IS2OR-Nonce: ' . $nonce,
            'X-IS2OR-Signature: ' . $signature,
            'X-IS2OR-Key-ID: ' . $key_id
        ],
        'ch_options' => [
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false
        ]
    ];

    $response = Http::post(
        $sync_service_url . '/internal/platforms/salla/authorize-url',
        $payload,
        $extra_options
    );

    if (!is_string($response) || trim($response) === '') {
        echo json_encode([
            'error'   => true,
            'message' => 'No response received from integration server.'
        ]);
        exit;
    }

    $res_data = json_decode($response, true);

    if (json_last_error() !== JSON_ERROR_NONE || !is_array($res_data)) {
        echo json_encode([
            'error'   => true,
            'message' => 'Invalid response from integration server.',
            'debug'   => substr(strip_tags($response), 0, 200)
        ]);
        exit;
    }

    if (isset($res_data['authorization_url'])) {
        echo json_encode(['authorization_url' => $res_data['authorization_url']]);
    } else {
        echo json_encode([
            'error'   => true,
            'message' => isset($res_data['message']) ? $res_data['message'] : 'Failed to get authorization URL.'
        ]);
    }

    exit;
}

// ====================================================================
// 2. MODE: Manage
// ====================================================================
if ($mode == 'manage') {

    $sync_service_url = Registry::get('addons.is2or_channel_integrations.sync_service_base_url');
    $service_id       = 'local-test';
    $hmac_key         = Registry::get('addons.is2or_channel_integrations.internal_hmac_secret');
    $key_id           = 'key-v1';

    // ==========================================
    // Salla status check
    // ==========================================
    $connection = db_get_row(
        "SELECT connection_id, status FROM ?:is2or_channel_connections WHERE company_id = ?i AND platform = 'salla'",
        $company_id
    );

    if (!empty($connection) && $connection['status'] === 'active') {
        
        $connection_id = (int) $connection['connection_id'];

        $timestamp = (string) time();
        $nonce     = bin2hex(random_bytes(16));
        $body_hash = hash('sha256', '');
        $message   = $service_id . "\n" . $timestamp . "\n" . $nonce . "\n" . $body_hash;
        $signature = hash_hmac('sha256', $message, $hmac_key);

        $extra_options = [
            'headers' => [
                'Content-Type: application/json',
                'X-IS2OR-Service: '   . $service_id,
                'X-IS2OR-Timestamp: ' . $timestamp,
                'X-IS2OR-Nonce: '     . $nonce,
                'X-IS2OR-Signature: ' . $signature,
                'X-IS2OR-Key-ID: '    . $key_id
            ],
            'ch_options' => [
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_TIMEOUT        => 5,
                CURLOPT_CONNECTTIMEOUT => 3,
            ]
        ];

        $response = Http::post(
            $sync_service_url . '/internal/connections/' . $connection_id . '/refresh-token-check',
            [],
            $extra_options
        );

        $res_data = json_decode($response, true);

        if (is_string($response) && !empty($response) && json_last_error() === JSON_ERROR_NONE && is_array($res_data)) {
            if (isset($res_data['live']) && $res_data['live'] === false) {
                db_query("DELETE FROM ?:is2or_channel_connections WHERE company_id = ?i AND platform = 'salla'", $company_id);
                db_query("DELETE FROM ?:is2or_channel_sync_history WHERE company_id = ?i AND platform = 'salla'", $company_id);
                fn_set_notification('W', __('warning'), 'Your Salla connection has been disconnected from the integration server. Please reconnect.');
                $salla_status = 'disconnected';
            } else {
                $salla_status = $connection['status'];
            }
        } else {
            $salla_status = $connection['status'];
        }

    } else {
        $salla_status = !empty($connection['status']) ? $connection['status'] : 'disconnected';
    }

    // ==========================================
    // Zid status check
    // ==========================================
    $zid_connection = db_get_row(
        "SELECT connection_id, status FROM ?:is2or_channel_connections WHERE company_id = ?i AND platform = 'zid'",
        $company_id
    );

    if (!empty($zid_connection) && $zid_connection['status'] === 'active') {

        $zid_connection_id = (int) $zid_connection['connection_id'];

        $timestamp = (string) time();
        $nonce     = bin2hex(random_bytes(16));
        $body_hash = hash('sha256', '');
        $message   = $service_id . "\n" . $timestamp . "\n" . $nonce . "\n" . $body_hash;
        $signature = hash_hmac('sha256', $message, $hmac_key);

        $extra_options_zid = [
            'headers' => [
                'Content-Type: application/json',
                'X-IS2OR-Service: '   . $service_id,
                'X-IS2OR-Timestamp: ' . $timestamp,
                'X-IS2OR-Nonce: '     . $nonce,
                'X-IS2OR-Signature: ' . $signature,
                'X-IS2OR-Key-ID: '    . $key_id
            ],
            'ch_options' => [
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_TIMEOUT        => 5,
                CURLOPT_CONNECTTIMEOUT => 3,
            ]
        ];

        $zid_response = Http::post(
            $sync_service_url . '/internal/connections/' . $zid_connection_id . '/refresh-token-check', 
            [],
            $extra_options_zid
        );
        
        $zid_res_data = json_decode($zid_response, true);

        if (is_string($zid_response) && !empty($zid_response) && json_last_error() === JSON_ERROR_NONE && is_array($zid_res_data)) {
            if (isset($zid_res_data['live']) && $zid_res_data['live'] === false) {
                db_query("DELETE FROM ?:is2or_channel_connections WHERE company_id = ?i AND platform = 'zid'", $company_id);
                db_query("DELETE FROM ?:is2or_channel_sync_history WHERE company_id = ?i AND platform = 'zid'", $company_id);
                fn_set_notification('W', __('warning'), 'Your Zid connection has been disconnected from the integration server. Please reconnect.');
                $zid_status = 'disconnected';
            } else {
                $zid_status = $zid_connection['status'];
            }
        } else {
            $zid_status = $zid_connection['status'];
        }

    } else {
        $zid_status = !empty($zid_connection['status']) ? $zid_connection['status'] : 'disconnected';
    }

    $return_url = fn_url("is2or_channel_integrations.callback_result", "A", "https");

    Tygh::$app['view']->assign('salla_status', $salla_status);
    Tygh::$app['view']->assign('zid_status', $zid_status);
    Tygh::$app['view']->assign('sync_service_url', $sync_service_url);
    Tygh::$app['view']->assign('company_id', $company_id);
    Tygh::$app['view']->assign('return_url', $return_url);
}

// ====================================================================
// 3. MODE: Callback Result
// ====================================================================
if ($mode == 'callback_result') {
    $status    = !empty($_REQUEST['status']) ? $_REQUEST['status'] : 'error';
    $error_msg = !empty($_REQUEST['error_description']) ? $_REQUEST['error_description'] : '';
    $platform  = !empty($_REQUEST['platform']) ? $_REQUEST['platform'] : 'salla';

    $target_company_id = !empty($_REQUEST['company_id']) ? (int) $_REQUEST['company_id'] : $company_id;
    $connection_id     = !empty($_REQUEST['connection_id']) ? (int) $_REQUEST['connection_id'] : 0;

    $platform_label = strtoupper($platform); // 'SALLA' atau 'ZID'

    if ($status === 'success' && !empty($target_company_id)) {
        db_query(
            "INSERT INTO ?:is2or_channel_connections
                (connection_id, company_id, platform, status, created_at)
             VALUES
                (?i, ?i, ?s, 'active', ?i)
             ON DUPLICATE KEY UPDATE
                connection_id = VALUES(connection_id),
                status = 'active'",
            $connection_id,
            $target_company_id,
            $platform,
            time()
        );

        fn_set_notification('N', __('notice'), 'Your ' . $platform_label . ' store has been connected successfully!');

    } else {
        $msg = !empty($error_msg) ? $error_msg : $platform_label . ' authorization was cancelled or failed.';
        fn_set_notification('E', __('error'), $msg);
    }

    return [CONTROLLER_STATUS_REDIRECT, 'is2or_channel_integrations.manage'];
}

// ====================================================================
// HELPER: Build signed internal API headers (HMAC), reused across requests
// ====================================================================
if (!function_exists('fn_is2or_build_internal_extra_options')) {
    function fn_is2or_build_internal_extra_options($payload, $hmac_key)
    {
        $service_id = 'local-test';
        $key_id     = 'key-v1';

        $timestamp = (string) time();
        $nonce     = bin2hex(random_bytes(16));

        $body_hash = hash('sha256', $payload);
        $message = $service_id . "\n"
                 . $timestamp . "\n"
                 . $nonce . "\n"
                 . $body_hash;
        $signature = hash_hmac('sha256', $message, $hmac_key);

        return [
            'headers' => [
                'Content-Type: application/json',
                'X-IS2OR-Service: ' . $service_id,
                'X-IS2OR-Timestamp: ' . $timestamp,
                'X-IS2OR-Nonce: ' . $nonce,
                'X-IS2OR-Signature: ' . $signature,
                'X-IS2OR-Key-ID: ' . $key_id
            ],
            'ch_options' => [
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false
            ]
        ];
    }
}

// ====================================================================
// HELPER: Apply a single category result to a product (set as Main category)
// ====================================================================
if (!function_exists('fn_is2or_apply_category_to_product')) {
    function fn_is2or_apply_category_to_product($product_id, $category_id)
    {
        $product_id  = (int) $product_id;
        $category_id = (int) $category_id;

        // 1. Validate: Make sure the target category exists in the database
        $category_exists = db_get_field(
            "SELECT category_id FROM ?:categories WHERE category_id = ?i",
            $category_id
        );

        if (!$category_exists) {
            return false;
        }

        // 2. Get existing product categories before removing them (for recount synchronization)
        $old_categories = db_get_fields(
            "SELECT category_id FROM ?:products_categories WHERE product_id = ?i",
            $product_id
        );

        // 3. Remove all existing category relationships for this product
        db_query(
            "DELETE FROM ?:products_categories WHERE product_id = ?i",
            $product_id
        );

        // 4. Insert the new category as the Main Category ('M')
        db_query("INSERT INTO ?:products_categories ?e", [
            'product_id'  => $product_id,
            'category_id' => $category_id,
            'position'    => 0,
            'link_type'   => 'M'
        ]);

        // 5. Update product count for affected categories (old categories removed + new category added)
        $affected_categories = array_unique(array_merge($old_categories, [$category_id]));
        fn_update_product_count($affected_categories);

        return true;
    }
}

// ====================================================================
// HELPER: Call /features/categorize/bulk, poll until done, then apply categories
// ====================================================================
if (!function_exists('fn_is2or_run_bulk_categorization')) {
    function fn_is2or_run_bulk_categorization($connection_id, $company_id, $sync_service_url, $hmac_key)
    {
        // 1. Collect unique product_ids for this connection + company from the product mappings table
        $product_ids = db_get_fields(
            "SELECT DISTINCT product_id FROM ?:is2or_channel_product_mappings WHERE connection_id = ?i AND company_id = ?i",
            (int) $connection_id,
            (int) $company_id
        );

        $product_ids = array_values(array_unique(array_map('intval', $product_ids)));

        if (empty($product_ids)) {
            return;
        }

        // 2. Get product names from cscart_product_descriptions for those product_ids.
        //    Must filter by lang_code because the table has a composite PK (product_id, lang_code);
        //    without this filter MySQL returns an arbitrary language's name for each product.
        $descriptions = db_get_hash_single_array(
            "SELECT product_id, product FROM ?:product_descriptions WHERE product_id IN (?n) AND lang_code = ?s",
            ['product_id', 'product'],
            $product_ids,
            CART_LANGUAGE
        );

        $products_payload = [];
        foreach ($product_ids as $pid) {
            if (isset($descriptions[$pid]) && $descriptions[$pid] !== '') {
                $products_payload[] = [
                    'product_id' => $pid,
                    'name'       => $descriptions[$pid]
                ];
            }
        }

        if (empty($products_payload)) {
            return;
        }

        // NOTE: category_api_base_url / category_api_token are separate settings for the
        // categorization service. If it is the same service as $sync_service_url, set
        // category_api_base_url to the same value in the addon settings.
        $category_api_base  = Registry::get('addons.is2or_channel_integrations.category_api_base_url');
        $category_api_token = Registry::get('addons.is2or_channel_integrations.category_api_token');

        if (empty($category_api_base)) {
            $category_api_base = $sync_service_url;
        }

        $bulk_payload = json_encode([
            'review_required' => false,
            'products'        => $products_payload
        ]);

        $bulk_extra_options = [
            'headers' => [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $category_api_token
            ],
            'ch_options' => [
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false
            ]
        ];

        // 3. POST /features/categorize/bulk
        $bulk_response = Http::post(
            $category_api_base . '/features/categorize/bulk',
            $bulk_payload,
            $bulk_extra_options
        );

        if (!is_string($bulk_response) || trim($bulk_response) === '') {
            return;
        }

        $bulk_data = json_decode($bulk_response, true);

        if (!is_array($bulk_data) || empty($bulk_data['job_id'])) {
            return;
        }

        $categorize_job_id = $bulk_data['job_id'];

        // 4. Poll GET /features/categorize/bulk/{job_id} every 1 second until status = 'done'
        $max_attempts = 300; // safety cap (~5 minutes at 1s interval)
        $attempt      = 0;
        $status_data  = null;

        $get_extra_options = [
            'headers' => [
                'Authorization: Bearer ' . $category_api_token
            ],
            'ch_options' => [
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false
            ]
        ];

        while ($attempt < $max_attempts) {
            $attempt++;
            sleep(1);

            $status_response = Http::get(
                $category_api_base . '/features/categorize/bulk/' . $categorize_job_id,
                '',
                $get_extra_options
            );

            if (!is_string($status_response) || trim($status_response) === '') {
                return;
            }

            $status_data = json_decode($status_response, true);

            if (!is_array($status_data) || !isset($status_data['status'])) {
                return;
            }

            if ($status_data['status'] === 'done') {
                break;
            }
        }

        if (empty($status_data) || $status_data['status'] !== 'done' || empty($status_data['results'])) {
            return;
        }

        // 5. Apply each suggested category to its product
        foreach ($status_data['results'] as $result) {
            if (empty($result['product_id']) || empty($result['category_id'])) {
                continue;
            }
            if (!empty($result['error'])) {
                continue;
            }

            fn_is2or_apply_category_to_product($result['product_id'], $result['category_id']);
        }
    }
}

// ====================================================================
// HELPER: Poll the import job until it succeeds, then trigger bulk categorization
// ====================================================================
if (!function_exists('fn_is2or_poll_import_then_categorize')) {
    function fn_is2or_poll_import_then_categorize($job_id, $connection_id, $company_id, $sync_service_url, $hmac_key)
    {
        $max_attempts   = 150; // safety cap (~5 minutes at 2s interval)
        $attempt        = 0;
        $import_status  = null;

        while ($attempt < $max_attempts) {
            $attempt++;

            $extra_options = fn_is2or_build_internal_extra_options('', $hmac_key);

            $api_response = Http::get(
                $sync_service_url . '/internal/imports/' . (int) $job_id,
                '',
                $extra_options
            );

            if (!is_string($api_response) || trim($api_response) === '') {
                return;
            }

            $import_data = json_decode($api_response, true);

            if (!is_array($import_data) || !isset($import_data['status'])) {
                return;
            }

            $import_status = $import_data['status'];

            if ($import_status === 'succeeded') {
                break;
            }

            sleep(2);
        }

        if ($import_status !== 'succeeded') {
            return;
        }

        // Import succeeded -> run auto-categorization for all mapped products
        fn_is2or_run_bulk_categorization($connection_id, $company_id, $sync_service_url, $hmac_key);
    }
}

// ====================================================================
// 4. MODE: Trigger Import
// ====================================================================
if ($mode == 'trigger_import') {
    header('Content-Type: application/json');

    $connection = db_get_row(
        "SELECT connection_id, status FROM ?:is2or_channel_connections WHERE company_id = ?i AND platform = 'salla'",
        $company_id
    );

    if (empty($connection) || $connection['status'] !== 'active') {
        echo json_encode([
            'error'   => true,
            'message' => 'Vendor is not connected to Salla channel.'
        ]);
        exit;
    }

    $sync_service_url = Registry::get('addons.is2or_channel_integrations.sync_service_base_url');

    $payload = json_encode([
        'connection_id' => (int) $connection['connection_id'],
        'company_id'    => (int) $company_id,
        'import_type'   => 'products'
    ]);

    $service_id = 'local-test';
    $hmac_key = Registry::get('addons.is2or_channel_integrations.internal_hmac_secret');
    $key_id     = 'key-v1';

    $timestamp = (string) time();
    $nonce     = bin2hex(random_bytes(16));
    
    $body_hash = hash('sha256', $payload);
    $message = $service_id . "\n"
             . $timestamp . "\n"
             . $nonce . "\n"
             . $body_hash;
    $signature = hash_hmac('sha256', $message, $hmac_key);

    $extra_options = [
        'headers' => [
            'Content-Type: application/json',
            'X-IS2OR-Service: ' . $service_id,
            'X-IS2OR-Timestamp: ' . $timestamp,
            'X-IS2OR-Nonce: ' . $nonce,
            'X-IS2OR-Signature: ' . $signature,
            'X-IS2OR-Key-ID: ' . $key_id
        ],
        'ch_options' => [
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false
        ]
    ];

    $response = Http::post(
        $sync_service_url . '/internal/imports',
        $payload,
        $extra_options
    );

    if (!is_string($response) || trim($response) === '') {
        echo json_encode([
            'error'   => true,
            'message' => 'No response received from integration server.',
            'debug'   => 'Empty or non-string response from Http::post'
        ]);
        exit;
    }

    $res_data = json_decode($response, true);

    if (json_last_error() !== JSON_ERROR_NONE || !is_array($res_data)) {
        echo json_encode([
            'error'   => true,
            'message' => 'Invalid response from integration server. Possible Cloudflare block.',
            'debug'   => substr(strip_tags($response), 0, 200)
        ]);
        exit;
    }

    if (isset($res_data['job_id'])) {
        $insert_data = [
            'company_id'   => (int) $company_id,
            'platform' => 'salla',
            'job_id'       => (string) $res_data['job_id'],
            'status'       => (string) $res_data['status'],
            'created_at'   => time()
        ];

        db_query("INSERT INTO ?:is2or_channel_sync_history ?e", $insert_data);

        // ----------------------------------------------------------------
        // Send the response to the user immediately, then continue running
        // the import-status polling + auto-categorization in the background
        // so the user does not have to wait for it.
        // ----------------------------------------------------------------
        $response_body = json_encode([
            'error'   => false,
            'job_id'  => $res_data['job_id'],
            'message' => 'Data synchronization has been triggered successfully. Products will be imported gradually in the background.'
        ]);

        // CS-Cart uses nested output buffering, so we must loop to clear ALL levels,
        // not just one. Only after all levels are cleared will fastcgi_finish_request()
        // reliably flush the response body to the client.
        while (ob_get_level() > 0) {
            ob_end_clean();
        }

        header('Content-Type: application/json');
        header('Content-Length: ' . strlen($response_body));
        header('Connection: close');

        echo $response_body;

        if (function_exists('fastcgi_finish_request')) {
            fastcgi_finish_request();
        } else {
            flush();
        }

        // Make sure the background process is not cut off by PHP/web server timeouts
        if (function_exists('set_time_limit')) {
            set_time_limit(0);
        }
        ignore_user_abort(true);

        fn_is2or_poll_import_then_categorize(
            $res_data['job_id'],
            $connection['connection_id'],
            $company_id,
            $sync_service_url,
            $hmac_key
        );
    } else {
        echo json_encode([
            'error'   => true,
            'message' => 'Failed to trigger import: ' . (isset($res_data['message']) ? $res_data['message'] : 'Unknown API error')
        ]);
    }

    exit;
}

// ====================================================================
// 5. MODE: Sync History
// ====================================================================
if ($mode == 'sync_history') {
    header('Content-Type: application/json');

    $sync_service_url = Registry::get('addons.is2or_channel_integrations.sync_service_base_url');

    $histories = db_get_array(
        "SELECT id, job_id, status, attempt_count, success_count, failure_count, completed_at, created_at
         FROM ?:is2or_channel_sync_history
         WHERE company_id = ?i AND platform = 'salla'
         ORDER BY created_at DESC",
        $company_id
    );

    if (empty($histories)) {
        echo json_encode(['error' => false, 'data' => []]);
        exit;
    }

    $service_id = 'local-test';
    $hmac_key   = Registry::get('addons.is2or_channel_integrations.internal_hmac_secret');
    $key_id     = 'key-v1';

    foreach ($histories as &$row) {
        if ($row['status'] === 'pending' || $row['status'] === 'leased') {

            $timestamp  = (string) time();
            $nonce      = bin2hex(random_bytes(16));
            $body_hash  = hash('sha256', '');

            $message = $service_id . "\n"
                    . $timestamp . "\n"
                    . $nonce . "\n"
                    . $body_hash;

            $signature = hash_hmac('sha256', $message, $hmac_key);

            $extra_options = [
                'headers' => [
                    'Content-Type: application/json',
                    'X-IS2OR-Service: '   . $service_id,
                    'X-IS2OR-Timestamp: ' . $timestamp,
                    'X-IS2OR-Nonce: '     . $nonce,
                    'X-IS2OR-Signature: ' . $signature,
                    'X-IS2OR-Key-ID: '    . $key_id
                ],
                'ch_options' => [
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_SSL_VERIFYHOST => false
                ]
            ];

            $api_response = Http::get(
                $sync_service_url . '/internal/imports/' . (int) $row['job_id'],
                '',
                $extra_options
            );

            if (is_string($api_response) && !empty($api_response)) {
                $api_data = json_decode($api_response, true);

                if (json_last_error() === JSON_ERROR_NONE && is_array($api_data) && isset($api_data['status'])) {

                    $new_status     = $api_data['status'];
                    $attempt_count  = isset($api_data['attempt_count']) ? (int) $api_data['attempt_count'] : $row['attempt_count'];
                    $success_count  = isset($api_data['success_count']) ? (int) $api_data['success_count'] : $row['success_count'];
                    $failure_count  = isset($api_data['failure_count']) ? (int) $api_data['failure_count'] : $row['failure_count'];
                    
                    $completed_at   = !empty($api_data['completed_at']) ? (int) $api_data['completed_at'] : null;

                    if ($completed_at !== null) {
                        db_query(
                            "UPDATE ?:is2or_channel_sync_history
                            SET status = ?s, attempt_count = ?i, success_count = ?i, failure_count = ?i, completed_at = ?i
                            WHERE id = ?i",
                            $new_status, $attempt_count, $success_count, $failure_count, $completed_at, $row['id']
                        );
                    } else {
                        db_query(
                            "UPDATE ?:is2or_channel_sync_history
                            SET status = ?s, attempt_count = ?i, success_count = ?i, failure_count = ?i, completed_at = NULL
                            WHERE id = ?i",
                            $new_status, $attempt_count, $success_count, $failure_count, $row['id']
                        );
                    }

                    $row['status']        = $new_status;
                    $row['attempt_count'] = $attempt_count;
                    $row['success_count'] = $success_count;
                    $row['failure_count'] = $failure_count;
                    $row['completed_at']  = $completed_at;
                }
            }
        }
    }
    unset($row);

    echo json_encode(['error' => false, 'data' => $histories]);
    exit;
}

// ====================================================================
// 6. MODE: Disconnect (FIXED FOR BYPASS SIGNATURE)
// ====================================================================
if ($mode == 'disconnect') {
    $connection = db_get_row(
        "SELECT connection_id, status FROM ?:is2or_channel_connections WHERE company_id = ?i AND platform = 'salla'",
        $company_id
    );

    if (empty($connection)) {
        fn_set_notification('E', __('error'), 'Connection data not found.');
        return [CONTROLLER_STATUS_REDIRECT, 'is2or_channel_integrations.manage'];
    }

    $connection_id = (int) $connection['connection_id'];
    $sync_service_url = Registry::get('addons.is2or_channel_integrations.sync_service_base_url');

    $payload = json_encode([
        'connection_id' => $connection_id,
        'company_id'    => (int) $company_id,
        'platform'  => 'salla'
    ]);

    $service_id = 'local-test';
    $hmac_key   = Registry::get('addons.is2or_channel_integrations.internal_hmac_secret');
    $key_id     = 'key-v1';

    $timestamp = (string) time();
    $nonce     = bin2hex(random_bytes(16));
    
    $body_hash = hash('sha256', $payload);
    $message = $service_id . "\n"
             . $timestamp . "\n"
             . $nonce . "\n"
             . $body_hash;
    $signature = hash_hmac('sha256', $message, $hmac_key);

    $extra_options = [
        'headers' => [
            'Content-Type: application/json',
            'X-IS2OR-Service: ' . $service_id,
            'X-IS2OR-Timestamp: ' . $timestamp,
            'X-IS2OR-Nonce: ' . $nonce,
            'X-IS2OR-Signature: ' . $signature,
            'X-IS2OR-Key-ID: ' . $key_id
        ],
        'ch_options' => [
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false
        ]
    ];

    $disconnect_url = $sync_service_url . '/internal/connections/' . $connection_id . '/disconnect';
    
    $response = Http::post($disconnect_url, $payload, $extra_options);
    $res_data = json_decode($response, true);

    if (is_string($response) && !empty($response) && json_last_error() === JSON_ERROR_NONE && is_array($res_data)) {
        if (!isset($res_data['error']) || $res_data['error'] == false) {
            
            db_query(
                "DELETE FROM ?:is2or_channel_connections WHERE company_id = ?i AND platform = 'salla'",
                $company_id
            );

            db_query(
                "DELETE FROM ?:is2or_channel_sync_history WHERE company_id = ?i AND platform = 'salla'",
                $company_id
            );

            fn_set_notification('N', __('notice'), 'Vendor channel disconnected successfully.');
        } else {
            $msg = isset($res_data['message']) ? $res_data['message'] : 'Unknown error from integration server.';
            fn_set_notification('E', __('error'), 'Failed to disconnect: ' . $msg);
        }
    } else {
        fn_set_notification('E', __('error'), 'No valid response from integration server.');
    }

    return [CONTROLLER_STATUS_REDIRECT, 'is2or_channel_integrations.manage'];
}

// ====================================================================
// 7. MODE: Request Authorize URL - Zid
// ====================================================================
if ($mode == 'request_authorize_url_zid') {
    header('Content-Type: application/json');

    $sync_service_url = Registry::get('addons.is2or_channel_integrations.sync_service_base_url');
    $return_url = fn_url("is2or_channel_integrations.callback_result", "A", "https");

    $payload = json_encode([
        'company_id' => (int) $company_id,
        'return_url' => $return_url
    ]);

    $service_id = 'local-test';
    $hmac_key   = Registry::get('addons.is2or_channel_integrations.internal_hmac_secret');
    $key_id     = 'key-v1';

    $timestamp = (string) time();
    $nonce     = bin2hex(random_bytes(16));
    $body_hash = hash('sha256', $payload);
    $message   = $service_id . "\n" . $timestamp . "\n" . $nonce . "\n" . $body_hash;
    $signature = hash_hmac('sha256', $message, $hmac_key);

    $extra_options = [
        'headers' => [
            'Content-Type: application/json',
            'X-IS2OR-Service: '   . $service_id,
            'X-IS2OR-Timestamp: ' . $timestamp,
            'X-IS2OR-Nonce: '     . $nonce,
            'X-IS2OR-Signature: ' . $signature,
            'X-IS2OR-Key-ID: '    . $key_id
        ],
        'ch_options' => [
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false
        ]
    ];

    $response = Http::post(
        $sync_service_url . '/internal/platforms/zid/authorize-url',
        $payload,
        $extra_options
    );

    if (!is_string($response) || trim($response) === '') {
        echo json_encode(['error' => true, 'message' => 'No response received from integration server.']);
        exit;
    }

    $res_data = json_decode($response, true);

    if (json_last_error() !== JSON_ERROR_NONE || !is_array($res_data)) {
        echo json_encode(['error' => true, 'message' => 'Invalid response from integration server.', 'debug' => substr(strip_tags($response), 0, 200)]);
        exit;
    }

    if (isset($res_data['authorization_url'])) {
        echo json_encode(['authorization_url' => $res_data['authorization_url']]);
    } else {
        echo json_encode(['error' => true, 'message' => isset($res_data['message']) ? $res_data['message'] : 'Failed to get authorization URL.']);
    }

    exit;
}

// ====================================================================
// 8. MODE: Trigger Import - Zid
// ====================================================================
if ($mode == 'trigger_import_zid') {
    header('Content-Type: application/json');

    $connection = db_get_row(
        "SELECT connection_id, status FROM ?:is2or_channel_connections WHERE company_id = ?i AND platform = 'zid'",
        $company_id
    );

    if (empty($connection) || $connection['status'] !== 'active') {
        echo json_encode(['error' => true, 'message' => 'Vendor is not connected to Zid channel.']);
        exit;
    }

    $sync_service_url = Registry::get('addons.is2or_channel_integrations.sync_service_base_url');

    $payload = json_encode([
        'connection_id' => (int) $connection['connection_id'],
        'company_id'    => (int) $company_id,
        'import_type'   => 'products'
    ]);

    $service_id = 'local-test';
    $hmac_key   = Registry::get('addons.is2or_channel_integrations.internal_hmac_secret');
    $key_id     = 'key-v1';

    $timestamp = (string) time();
    $nonce     = bin2hex(random_bytes(16));
    $body_hash = hash('sha256', $payload);
    $message   = $service_id . "\n" . $timestamp . "\n" . $nonce . "\n" . $body_hash;
    $signature = hash_hmac('sha256', $message, $hmac_key);

    $extra_options = [
        'headers' => [
            'Content-Type: application/json',
            'X-IS2OR-Service: '   . $service_id,
            'X-IS2OR-Timestamp: ' . $timestamp,
            'X-IS2OR-Nonce: '     . $nonce,
            'X-IS2OR-Signature: ' . $signature,
            'X-IS2OR-Key-ID: '    . $key_id
        ],
        'ch_options' => [
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false
        ]
    ];

    $response = Http::post($sync_service_url . '/internal/imports', $payload, $extra_options);

    if (!is_string($response) || trim($response) === '') {
        echo json_encode(['error' => true, 'message' => 'No response received from integration server.']);
        exit;
    }

    $res_data = json_decode($response, true);

    if (json_last_error() !== JSON_ERROR_NONE || !is_array($res_data)) {
        echo json_encode(['error' => true, 'message' => 'Invalid response from integration server.', 'debug' => substr(strip_tags($response), 0, 200)]);
        exit;
    }

    if (isset($res_data['job_id'])) {
        db_query("INSERT INTO ?:is2or_channel_sync_history ?e", [
            'company_id'  => (int) $company_id,
            'platform'    => 'zid',
            'job_id'      => (string) $res_data['job_id'],
            'status'      => (string) $res_data['status'],
            'created_at'  => time()
        ]);

        // ----------------------------------------------------------------
        // Send the response to the user immediately, then continue running
        // the import-status polling + auto-categorization in the background
        // so the user does not have to wait for it.
        // ----------------------------------------------------------------
        $response_body = json_encode([
            'error'   => false,
            'job_id'  => $res_data['job_id'],
            'message' => 'Data synchronization has been triggered successfully. Products will be imported gradually in the background.'
        ]);

        // CS-Cart uses nested output buffering; loop to clear ALL levels
        while (ob_get_level() > 0) {
            ob_end_clean();
        }

        header('Content-Type: application/json');
        header('Content-Length: ' . strlen($response_body));
        header('Connection: close');

        echo $response_body;

        if (function_exists('fastcgi_finish_request')) {
            fastcgi_finish_request();
        } else {
            flush();
        }

        if (function_exists('set_time_limit')) {
            set_time_limit(0);
        }
        ignore_user_abort(true);

        fn_is2or_poll_import_then_categorize(
            $res_data['job_id'],
            $connection['connection_id'],
            $company_id,
            $sync_service_url,
            $hmac_key
        );
    } else {
        echo json_encode(['error' => true, 'message' => 'Failed to trigger import: ' . (isset($res_data['message']) ? $res_data['message'] : 'Unknown API error')]);
    }

    exit;
}

// ====================================================================
// 9. MODE: Sync History - Zid
// ====================================================================
if ($mode == 'sync_history_zid') {
    header('Content-Type: application/json');

    $sync_service_url = Registry::get('addons.is2or_channel_integrations.sync_service_base_url');

    $histories = db_get_array(
        "SELECT id, job_id, status, attempt_count, success_count, failure_count, completed_at, created_at
         FROM ?:is2or_channel_sync_history
         WHERE company_id = ?i AND platform = 'zid'
         ORDER BY created_at DESC",
        $company_id
    );

    if (empty($histories)) {
        echo json_encode(['error' => false, 'data' => []]);
        exit;
    }

    $service_id = 'local-test';
    $hmac_key   = Registry::get('addons.is2or_channel_integrations.internal_hmac_secret');
    $key_id     = 'key-v1';

    foreach ($histories as &$row) {
        if ($row['status'] === 'pending' || $row['status'] === 'leased') {

            $timestamp = (string) time();
            $nonce     = bin2hex(random_bytes(16));
            $body_hash = hash('sha256', '');
            $message   = $service_id . "\n" . $timestamp . "\n" . $nonce . "\n" . $body_hash;
            $signature = hash_hmac('sha256', $message, $hmac_key);

            $extra_options = [
                'headers' => [
                    'Content-Type: application/json',
                    'X-IS2OR-Service: '   . $service_id,
                    'X-IS2OR-Timestamp: ' . $timestamp,
                    'X-IS2OR-Nonce: '     . $nonce,
                    'X-IS2OR-Signature: ' . $signature,
                    'X-IS2OR-Key-ID: '    . $key_id
                ],
                'ch_options' => [
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_SSL_VERIFYHOST => false
                ]
            ];

            $api_response = Http::get(
                $sync_service_url . '/internal/imports/' . (int) $row['job_id'],
                '',
                $extra_options
            );

            if (is_string($api_response) && !empty($api_response)) {
                $api_data = json_decode($api_response, true);

                if (json_last_error() === JSON_ERROR_NONE && is_array($api_data) && isset($api_data['status'])) {
                    $new_status    = $api_data['status'];
                    $attempt_count = isset($api_data['attempt_count']) ? (int) $api_data['attempt_count'] : $row['attempt_count'];
                    $success_count = isset($api_data['success_count']) ? (int) $api_data['success_count'] : $row['success_count'];
                    $failure_count = isset($api_data['failure_count']) ? (int) $api_data['failure_count'] : $row['failure_count'];
                    $completed_at  = !empty($api_data['completed_at']) ? (int) $api_data['completed_at'] : null;

                    if ($completed_at !== null) {
                        db_query(
                            "UPDATE ?:is2or_channel_sync_history SET status = ?s, attempt_count = ?i, success_count = ?i, failure_count = ?i, completed_at = ?i WHERE id = ?i",
                            $new_status, $attempt_count, $success_count, $failure_count, $completed_at, $row['id']
                        );
                    } else {
                        db_query(
                            "UPDATE ?:is2or_channel_sync_history SET status = ?s, attempt_count = ?i, success_count = ?i, failure_count = ?i, completed_at = NULL WHERE id = ?i",
                            $new_status, $attempt_count, $success_count, $failure_count, $row['id']
                        );
                    }

                    $row['status']        = $new_status;
                    $row['attempt_count'] = $attempt_count;
                    $row['success_count'] = $success_count;
                    $row['failure_count'] = $failure_count;
                    $row['completed_at']  = $completed_at;
                }
            }
        }
    }
    unset($row);

    echo json_encode(['error' => false, 'data' => $histories]);
    exit;
}

// ====================================================================
// 10. MODE: Disconnect - Zid
// ====================================================================
if ($mode == 'disconnect_zid') {
    $connection = db_get_row(
        "SELECT connection_id, status FROM ?:is2or_channel_connections WHERE company_id = ?i AND platform = 'zid'",
        $company_id
    );

    if (empty($connection)) {
        fn_set_notification('E', __('error'), 'Connection data not found.');
        return [CONTROLLER_STATUS_REDIRECT, 'is2or_channel_integrations.manage'];
    }

    $connection_id    = (int) $connection['connection_id'];
    $sync_service_url = Registry::get('addons.is2or_channel_integrations.sync_service_base_url');

    $payload = json_encode([
        'connection_id' => $connection_id,
        'company_id'    => (int) $company_id,
        'platform'      => 'zid'
    ]);

    $service_id = 'local-test';
    $hmac_key   = Registry::get('addons.is2or_channel_integrations.internal_hmac_secret');
    $key_id     = 'key-v1';

    $timestamp = (string) time();
    $nonce     = bin2hex(random_bytes(16));
    $body_hash = hash('sha256', $payload);
    $message   = $service_id . "\n" . $timestamp . "\n" . $nonce . "\n" . $body_hash;
    $signature = hash_hmac('sha256', $message, $hmac_key);

    $extra_options = [
        'headers' => [
            'Content-Type: application/json',
            'X-IS2OR-Service: '   . $service_id,
            'X-IS2OR-Timestamp: ' . $timestamp,
            'X-IS2OR-Nonce: '     . $nonce,
            'X-IS2OR-Signature: ' . $signature,
            'X-IS2OR-Key-ID: '    . $key_id
        ],
        'ch_options' => [
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false
        ]
    ];

    $response = Http::post($sync_service_url . '/internal/connections/' . $connection_id . '/disconnect', $payload, $extra_options);
    $res_data = json_decode($response, true);

    if (is_string($response) && !empty($response) && json_last_error() === JSON_ERROR_NONE && is_array($res_data)) {
        if (!isset($res_data['error']) || $res_data['error'] == false) {
            db_query("DELETE FROM ?:is2or_channel_connections WHERE company_id = ?i AND platform = 'zid'", $company_id);
            db_query("DELETE FROM ?:is2or_channel_sync_history WHERE company_id = ?i AND platform = 'zid'", $company_id);
            fn_set_notification('N', __('notice'), 'Zid channel disconnected successfully.');
        } else {
            $msg = isset($res_data['message']) ? $res_data['message'] : 'Unknown error from integration server.';
            fn_set_notification('E', __('error'), 'Failed to disconnect: ' . $msg);
        }
    } else {
        db_query("DELETE FROM ?:is2or_channel_connections WHERE company_id = ?i AND platform = 'zid'", $company_id);
        db_query("DELETE FROM ?:is2or_channel_sync_history WHERE company_id = ?i AND platform = 'zid'", $company_id);
        fn_set_notification('W', __('warning'), 'Disconnected locally, but integration server did not respond. Please contact support if issues persist.');
    }

    return [CONTROLLER_STATUS_REDIRECT, 'is2or_channel_integrations.manage'];
}