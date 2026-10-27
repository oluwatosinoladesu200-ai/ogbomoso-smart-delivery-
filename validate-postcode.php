<?php
/**
 * Secure server-side integration placeholder.
 *
 * Do not guess the NIPOST endpoint or authentication format.
 * Once your account is approved, follow the exact endpoint, headers,
 * request schema, response schema and limits in the official API docs.
 *
 * Keep secret API credentials in environment variables or a private config
 * outside the public web root. Never put a secret key in app.js or HTML.
 */
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'message' => 'Use POST for postcode validation.']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
$postcode = strtoupper(preg_replace('/\s+/', '', (string)($input['postcode'] ?? '')));

if (!preg_match('/^[A-Z0-9]{11}$/', $postcode)) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'message' => 'Enter an 11-character alphanumeric postcode.']);
    exit;
}

// Deliberately not claiming the postcode is real. Format checks are not API validation.
http_response_code(503);
echo json_encode([
    'ok' => false,
    'verified' => false,
    'message' => 'Live NIPOST verification is not configured yet. Obtain authorised API credentials and configure the documented endpoint first.'
]);
