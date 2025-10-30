<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

session_start();

$client_secret_path = __DIR__ . '/client_secret_oct30.json';
$token_path = __DIR__ . '/token.json';

if (!file_exists($client_secret_path)) {
    die("client_secret.json not found at " . $client_secret_path);
}

$client_secret_content = file_get_contents($client_secret_path);
$client_secret_data = json_decode($client_secret_content, true);

if (json_last_error() !== JSON_ERROR_NONE || !isset($client_secret_data['web'])) {
    die("Invalid client_secret.json format.");
}

$client_config = $client_secret_data['web'];

$client = new Google_Client();
$client->setAuthConfig($client_secret_path);
$client->addScope(Google_Service_Gmail::GMAIL_SEND);
$client->setRedirectUri($client_config['redirect_uris'][0]);
$client->setAccessType('offline');
$client->setPrompt('select_account consent');

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    if (isset($token['error'])) {
        die('Error fetching access token: ' . $token['error_description']);
    }
    file_put_contents($token_path, json_encode($token));
    echo "Token generated and saved to token.json. You can now close this window.";
} else {
    $authUrl = $client->createAuthUrl();
    header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
}
?>
