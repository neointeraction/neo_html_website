<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php'; // Adjust path as necessary for PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;

// Function to send email
function sendCasestudyEmail($recipientEmail, $casestudyName, $casestudyLink) {
    $mail = new PHPMailer(true);

    try {
        $client_secret_path = __DIR__ . '/client_secret_oct30.json';
        $token_path = __DIR__ . '/token.json';

        if (!file_exists($client_secret_path)) {
            throw new Exception("client_secret.json not found.");
        }
        if (!file_exists($token_path)) {
            throw new Exception("token.json not found. Please generate it first.");
        }

        $client_secret_content = file_get_contents($client_secret_path);
        $client_secret_data = json_decode($client_secret_content, true);
        $client_config = $client_secret_data['web'];

        $token_content = file_get_contents($token_path);
        $accessToken = json_decode($token_content, true);

        if (json_last_error() !== JSON_ERROR_NONE || !isset($accessToken['access_token'])) {
            throw new Exception("Invalid token.json or missing access token.");
        }

        $client = new Google_Client();
        $client->setAuthConfig($client_secret_path);
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');
        $client->setAccessToken($accessToken);
        // Refresh the token if it's expired.
        if ($client->isAccessTokenExpired()) {
            if ($client->getRefreshToken()) {
                $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
                file_put_contents($token_path, json_encode($client->getAccessToken()));
            } else {
                throw new Exception("Refresh token not available. Please re-generate the token.");
            }
        }

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->AuthType = 'XOAUTH2';
        $mail->setOAuth(
            new OAuth([
                'provider' => new Google([
                'clientId' => $client_config['client_id'],
                'clientSecret' => $client_config['client_secret'],
            ]),
            'userName' => 'midhun@neointeraction.com', // Your Gmail address
            'accessToken' => $client->getAccessToken()['access_token'],
            'refreshToken' => $client->getRefreshToken(),
            'expires' => $client->getAccessToken()['expires_in']
        ])
    );

        //Recipients
        $mail->setFrom('midhun@neointeraction.com', 'Your Company Name');
        $mail->addAddress($recipientEmail);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Your Requested Case Study: ' . $casestudyName;
        $mail->Body    = "Dear User,<br><br>Thank you for your interest in our case study: <b>{$casestudyName}</b>.<br><br>You can download it from here: <a href='{$casestudyLink}'>{$casestudyLink}</a><br><br>Best Regards,<br>Your Company Name";
        $mail->AltBody = "Dear User,\n\nThank you for your interest in our case study: {$casestudyName}.\n\nYou can download it from here: {$casestudyLink}\n\nBest Regards,\nYour Company Name";

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        return false;
    }
}

// Example usage (for testing purposes, remove in production)
if (isset($_POST['submit_casestudy_email'])) {
    $recipient = $_POST['recipient_email'];
    $casestudy = $_POST['casestudy_name'];
    $link = $_POST['casestudy_link'];

    if (sendCasestudyEmail($recipient, $casestudy, $link)) {
        header('Location: http://localhost/neo_html_website/casestudy_email_setup/index.html?status=success');
        exit();
    } else {
        header('Location: http://localhost/neo_html_website/casestudy_email_setup/index.html?status=error');
        exit();
    }
}
?>
