<?php

defined('BOOTSTRAP') or die('Access denied');

use Tygh\Registry;

/**
 *
 * @var array<string, int[]>
 */
$GLOBALS['is2or_ai_integration_order_cache'] = [];

/**
 * Hook: get_products_pre
 *
 *
 * @param array $params        CS-Cart product search params (by reference).
 * @param int   $items_per_page
 * @param string $lang_code
 */
function fn_is2or_ai_integration_get_products_pre(&$params, $items_per_page = 0, $lang_code = '')
{
    if (!isset($params['q']) || !is_string($params['q'])) {
        return;
    }
    $query = trim($params['q']);
    if ($query === '') {
        return;
    }

    $has_advanced_filters = !empty($params['feature'])
        || !empty($params['features_hash']);

    if ($has_advanced_filters) {
        return;
    }

    $api_base_url = trim((string) Registry::get('addons.is2or_ai_integration.api_base_url'));
    $api_token    = trim((string) Registry::get('addons.is2or_ai_integration.api_token'));

    // Silently skip if the addon is not configured yet
    if ($api_base_url === '' || $api_token === '') {
        return;
    }

    $limit = (int) Registry::get('addons.is2or_ai_integration.search_limit');
    if ($limit <= 0) {
        $limit = 10;
    }

    $product_ids = fn_is2or_ai_integration_call_search($query, $limit, $api_base_url, $api_token);

    if (empty($product_ids)) {
        // API failed, returned fallback_used=true, or returned no results — let CS-Cart handle it
        return;
    }

    unset(
        $params['q'],
        $params['pname'],
        $params['search_query'],
        $params['pkeywords'],
        $params['pshort'],
        $params['pfull']
    );

    // Restrict the result set to the AI-ranked product IDs.
    $params['pid'] = $product_ids;

    $cache_key = fn_is2or_ai_integration_cache_key($product_ids);
    $GLOBALS['is2or_ai_integration_order_cache'][$cache_key] = $product_ids;

    $params['is2or_ai_order_key'] = $cache_key;
}

/**
 * Hook: get_products_post
 *
 * @param array $products  Fetched products, keyed by numeric index or product_id
 *                          (by reference).
 * @param array $params    The same/derived $params array used for the query.
 */
function fn_is2or_ai_integration_get_products_post(&$products, $params)
{
    if (empty($products) || !is_array($products)) {
        return;
    }

    $cache_key = $params['is2or_ai_order_key'] ?? null;
    if ($cache_key === null || empty($GLOBALS['is2or_ai_integration_order_cache'][$cache_key])) {
        return;
    }

    $order = $GLOBALS['is2or_ai_integration_order_cache'][$cache_key];
    unset($GLOBALS['is2or_ai_integration_order_cache'][$cache_key]);

    // Index existing products by product_id for quick lookup
    $by_id = [];
    foreach ($products as $product) {
        if (!empty($product['product_id'])) {
            $by_id[(int) $product['product_id']] = $product;
        }
    }

    if (empty($by_id)) {
        return;
    }

    $sorted = [];
    foreach ($order as $pid) {
        if (isset($by_id[$pid])) {
            $sorted[] = $by_id[$pid];
            unset($by_id[$pid]);
        }
    }

    foreach ($by_id as $leftover) {
        $sorted[] = $leftover;
    }

    $products = $sorted;
}

/**
 * Calls POST /search on the IS2OR AI service.
 *
 * @param string $query
 * @param int    $limit
 * @param string $api_base_url  Full base URL, e.g. https://ai.example.com
 * @param string $api_token     Bearer token
 *
 * @return int[]
 */
function fn_is2or_ai_integration_call_search($query, $limit, $api_base_url, $api_token)
{
    $endpoint = rtrim($api_base_url, '/') . '/search';

    $payload = [
        'query' => $query,
        'limit' => $limit,
    ];

    $storefront_id = Registry::get('runtime.storefront_id');
    if (!empty($storefront_id)) {
        $payload['filters']['storefront_id'] = (int) $storefront_id;
    }

    $body = json_encode($payload);

    $ch = curl_init($endpoint);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $body,
        CURLOPT_CONNECTTIMEOUT => 2,
        CURLOPT_TIMEOUT        => 5, // hard 5-second timeout so storefront never hangs
        CURLOPT_HTTPHEADER     => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $api_token,
        ],
    ]);

    $raw       = curl_exec($ch);
    $http_code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_err  = curl_error($ch);
    curl_close($ch);

    // Any network error or non-200 response → fallback
    if ($curl_err !== '' || $http_code !== 200 || $raw === false) {
        return [];
    }

    $data = json_decode($raw, true);

    if (!is_array($data)) {
        return [];
    }

    // API signals no usable result — caller should use native search
    if (!empty($data['fallback_used'])) {
        return [];
    }

    if (empty($data['results']) || !is_array($data['results'])) {
        return [];
    }

    // Extract ordered product IDs from the ranked results
    $product_ids = [];
    foreach ($data['results'] as $hit) {
        if (!empty($hit['product_id'])) {
            $product_ids[] = (int) $hit['product_id'];
        }
    }

    return $product_ids;
}

/**
 * Builds a stable cache key for a given ordered list of product IDs.
 *
 * @param int[] $product_ids
 * @return string
 */
function fn_is2or_ai_integration_cache_key(array $product_ids)
{
    return md5(implode(',', $product_ids));
}

/**
 * Calls POST /features/listing on the IS2OR AI service to generate
 * AI-assisted product listing content (title/description/features)
 * from a product name and optional extra hints.
 *
 * @param string   $name        Product name (required by the AI service).
 * @param string   $brand       Optional brand name.
 * @param string   $notes       Optional free-text notes/hints.
 * @param string[] $features    Optional list of feature strings.
 * @param int      $product_id  Optional existing product id (omitted for new/unsaved products).
 *
 * @return array
 */
function fn_is2or_ai_integration_call_listing($name, $brand = '', $notes = '', array $features = [], $product_id = 0)
{
    $api_base_url = trim((string) Registry::get('addons.is2or_ai_integration.api_base_url'));
    $api_token    = trim((string) Registry::get('addons.is2or_ai_integration.api_token'));

    if ($api_base_url === '' || $api_token === '') {
        return [
            'success' => false,
            'output'  => null,
            'error'   => __('is2or_ai_integration.error_not_configured'),
        ];
    }

    $name = trim((string) $name);
    if ($name === '') {
        return [
            'success' => false,
            'output'  => null,
            'error'   => __('is2or_ai_integration.error_name_required'),
        ];
    }

    $timeout = (int) Registry::get('addons.is2or_ai_integration.listing_timeout');
    if ($timeout <= 0) {
        $timeout = 20;
    }

    $payload = [
        'name' => $name,
    ];

    $brand = trim((string) $brand);
    if ($brand !== '') {
        $payload['brand'] = $brand;
    }

    $notes = trim((string) $notes);
    if ($notes !== '') {
        $payload['notes'] = $notes;
    }

    $features = array_values(array_filter(array_map('trim', $features), function ($v) {
        return $v !== '';
    }));
    if (!empty($features)) {
        $payload['features'] = $features;
    }

    $product_id = (int) $product_id;
    if ($product_id > 0) {
        $payload['product_id'] = $product_id;
    }

    $endpoint = rtrim($api_base_url, '/') . '/features/listing';
    $body     = json_encode($payload);

    $ch = curl_init($endpoint);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $body,
        CURLOPT_CONNECTTIMEOUT => 3,
        CURLOPT_TIMEOUT        => $timeout,
        CURLOPT_HTTPHEADER     => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $api_token,
        ],
    ]);

    $raw       = curl_exec($ch);
    $http_code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_err  = curl_error($ch);
    curl_close($ch);

    $debug_mode = Registry::get('addons.is2or_ai_integration.debug_mode') === 'Y';
    if ($debug_mode) {
        fn_log_event('is2or_ai_integration', 'generate_listing', [
            'endpoint'  => $endpoint,
            'payload'   => $payload,
            'http_code' => $http_code,
            'curl_err'  => $curl_err,
            'response'  => $raw,
        ]);
    }

    if ($curl_err !== '') {
        return [
            'success' => false,
            'output'  => null,
            'error'   => __('is2or_ai_integration.error_connection'),
        ];
    }

    if ($raw === false || $http_code < 200 || $http_code >= 300) {
        return [
            'success' => false,
            'output'  => null,
            'error'   => __('is2or_ai_integration.error_bad_response') . ' (HTTP ' . $http_code . ')',
        ];
    }

    $data = json_decode($raw, true);

    if (!is_array($data)) {
        return [
            'success' => false,
            'output'  => null,
            'error'   => __('is2or_ai_integration.error_bad_response') . ' (HTTP ' . $http_code . ')',
        ];
    }

    if (!empty($data['error'])) {
        return [
            'success' => false,
            'output'  => null,
            'error'   => is_string($data['error']) ? $data['error'] : __('is2or_ai_integration.error_bad_response'),
        ];
    }

    if (empty($data['output']) || !is_array($data['output'])) {
        return [
            'success' => false,
            'output'  => null,
            'error'   => __('is2or_ai_integration.error_empty_output'),
        ];
    }

    return [
        'success'         => true,
        'output'          => $data['output'],
        'suggestion_id'   => $data['suggestion_id'] ?? null,
        'review_required' => !empty($data['review_required']),
        'error'           => null,
    ];
}