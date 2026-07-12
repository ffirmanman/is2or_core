<?php

use Tygh\Registry;

defined('BOOTSTRAP') or die('Access denied');

/**
 * dispatch=is2or_ai_integration.generate_listing
 *
 * AJAX-only endpoint called from the "Generate AI Product Detail" button on the
 * admin Add/Edit Product page. Proxies the request to the IS2OR AI service
 * (POST {api_base_url}/features/listing) so the API token never reaches the
 * browser, and returns a small JSON payload the frontend script can use to
 * fill in the product description field(s).
 *
 * Request params (all via POST):
 *   - product_name  string  required
 *   - brand         string  optional
 *   - notes         string  optional
 *   - features      string  optional, one feature per line
 *   - product_id    int     optional (omitted for a product that hasn't been saved yet)
 *
 * Response (JSON, always HTTP 200 — success/failure is signalled via "success"):
 *   { "success": true,  "output": {...}, "review_required": bool, "suggestion_id": int|null }
 *   { "success": false, "error": "human readable message" }
 */
if ($mode == 'generate_listing') {

    // Only logged-in backend users (store admins and, in Multi-Vendor, vendor admins)
    // may trigger this action. Adjust/extend with a permissions.xml schema
    // (e.g. tied to the "manage_products" permission) if you need finer-grained control.
    if (empty($auth['area']) || $auth['area'] !== 'A' || empty($auth['user_id'])) {
        header('Content-Type: application/json; charset=UTF-8');
        http_response_code(403);
        echo json_encode([
            'success' => false,
            'error'   => __('is2or_ai_integration.error_forbidden'),
        ]);
        exit;
    }

    $product_name = isset($_REQUEST['product_name']) ? trim((string) $_REQUEST['product_name']) : '';
    $brand        = isset($_REQUEST['brand']) ? (string) $_REQUEST['brand'] : '';
    $notes        = isset($_REQUEST['notes']) ? (string) $_REQUEST['notes'] : '';
    $product_id   = isset($_REQUEST['product_id']) ? (int) $_REQUEST['product_id'] : 0;

    $features = [];
    if (!empty($_REQUEST['features']) && is_string($_REQUEST['features'])) {
        // One feature per line from a simple textarea, e.g. "360° swivel\nAdjustable height"
        $features = preg_split('/[\r\n]+/', $_REQUEST['features']);
    } elseif (!empty($_REQUEST['features']) && is_array($_REQUEST['features'])) {
        $features = $_REQUEST['features'];
    }

    $result = fn_is2or_ai_integration_call_listing($product_name, $brand, $notes, (array) $features, $product_id);

    header('Content-Type: application/json; charset=UTF-8');

    if (empty($result['success'])) {
        echo json_encode([
            'success' => false,
            'error'   => $result['error'] ?: __('is2or_ai_integration.error_bad_response'),
        ]);
        exit;
    }

    echo json_encode([
        'success'         => true,
        'output'          => $result['output'],
        'review_required' => !empty($result['review_required']),
        'suggestion_id'   => $result['suggestion_id'] ?? null,
    ]);
    exit;
}
