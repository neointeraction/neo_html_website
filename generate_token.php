<?php

require __DIR__ . '/vendor/autoload.php';

// Path to your client_secret.json file
$clientSecretPath = __DIR__ . '/assets/js/client_secret.json';
// Path where the token.json file will be stored
$tokenPath = __DIR__ . '/token.json';

$client = new Google\Client();
$client->setApplicationName('Gmail API PHP Send Email');
$client->setScopes(Google\Service\Gmail::GMAIL_SEND);
$client->setAuthConfig($clientSecretPath);
$client->setAccessType('offline');
$client->setPrompt('select_account consent');

// If modifying these scopes, delete your previously saved tokens.
$client->setRedirectUri('https://oranjdot.net/neo/'); // IMPORTANT: This must match one of your Authorized redirect URIs in Google Cloud Console

// Load previously authorized credentials from a file.
if (file_exists($tokenPath)) {
    $accessToken = json_decode(file_get_contents($tokenPath), true);
    $client->setAccessToken($accessToken);
}

// If there is no previous token or it's expired.
if ($client->isAccessTokenExpired()) {
    // Refresh the token if possible, else fetch a new one.
    if ($client->getRefreshToken()) {
        $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
    } else {
        // Request authorization from the user.
        $authUrl = $client->createAuthUrl();
        printf("Open the following link in your browser:\n%s\n", $authUrl);
        printf("Enter verification code: ");
        $authCode = trim(fgets(STDIN));

        // Exchange authorization code for an access token.
        $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
        $client->setAccessToken($accessToken);

        // Check for errors
        if (array_key_exists('error', $accessToken)) {
            throw new Exception(join(', ', $accessToken));
        }
    }
    // Save the token to a file.
    if (!file_exists(dirname($tokenPath))) {
        mkdir(dirname($tokenPath), 0700, true);
    }
    file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    printf("Token saved to %s\n", $tokenPath);
} else {
    printf("Existing token is valid.\n");
}

echo "Authorization process complete. You can now use the Gmail API.\n";

?>
