<?php
header('Content-Type: application/json');

require __DIR__ . '/../vendor/autoload.php'; // Adjust path to autoload.php
// Temporarily add a die statement to check if autoload.php is reached
// die('Autoload.php included successfully!');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Use safer sanitization for PHP 8+
    $name = htmlspecialchars(trim($_POST['cs_name'] ?? ''));
    $email = filter_input(INPUT_POST, 'cs_work_email', FILTER_SANITIZE_EMAIL);
    $mobile = htmlspecialchars(trim($_POST['cs_mobile_number'] ?? ''));
    $enquiryType = htmlspecialchars(trim($_POST['cs_enquiryType'] ?? ''));
    $caseStudyUrl = filter_input(INPUT_POST, 'caseStudyUrl', FILTER_SANITIZE_URL);

    // Basic validation
    if (empty($name) || empty($email) || empty($mobile) || empty($caseStudyUrl)) {
        echo json_encode(['status' => 'error', 'message' => 'Missing required fields.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email format.']);
        exit;
    }

    if (!preg_match('/^\+?[0-9]{10,15}$/', $mobile)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid mobile number format.']);
        exit;
    }

    // User Email (HTML)
    $userEmailBody = '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Form Submission</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
    }

    .email-container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .header {
        text-align: center;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }

    .header img {
        max-width: 150px;
    }

    .content {
        padding: 20px 0;
        text-align: center;
    }

    .content h1 {
        color: #000;
        font-size: 28px;
        margin-bottom: 20px;
    }

    .content p {
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 15px;
        text-align: left;
    }

    .button-container {
        text-align: center;
        margin: 30px 0;
    }

    .button {
  background-color: #2b2828;
  font-size: 16px;
  color: #fff;
  border: 1px solid #2b2828;
  padding: 11px 24px;
  font-weight: 600;
  transition: background-color 0.3s ease;
  border-radius: 0px;
  width: auto;
    }

    .button:hover {
          background-color: #555;
  color: #2b2828;
  transition: 0.3s all ease-in-out;
    }

    .footer {
        text-align: center;
        padding-top: 20px;
        border-top: 1px solid #eee;
        margin-top: 20px;
        font-size: 12px;
        color: #777;
    }

    .footer .social-icons img {
        width: 24px;
        margin: 0 5px;
    }

    .footer .social-icons a {
        text-decoration: none;
    }

    .footer .website-link {
        margin-top: 10px;
        font-size: 14px;
    }

    .footer .website-link a {
        color: #333;
        text-decoration: none;
        font-weight: bold;
    }

    .footer .website-link img {
        vertical-align: middle;
        margin-left: 5px;
    }

    .divider {
        width: 1px;
        background-color: #eee;
        height: 50px;
        display: inline-block;
        vertical-align: middle;
        margin: 0 20px;
    }

    .footer-content {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .footer-section {
        display: inline-block;
        vertical-align: middle;
    }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <img src="https://oranjdot.net/neo/assets/images/header_logo.png" alt="Neointeraction Design Logo"  width="239px" height="52px">
        </div>
        <div class="content">
            <h1>Thank You for Form Submission</h1>
            <p>Hi ' . $name . ',</p>
            <p>Thanks for form submission on Neointeraction Design. Your case study for ' . $enquiryType . ' is available for download.</p>
            <div class="button-container">
                <a href="' . $caseStudyUrl . '" class="button">Download Case Study</a>
            </div>
        </div>
        <div class="footer">
            <p>Visit our social accounts</p>
            <div class="footer-content">
                <div class="footer-section social-icons">
                    <a href="https://www.linkedin.com/company/neointeraction-designs/" target="_blank" rel="noopener noreferrer">
                    <img src="https://oranjdot.net/neo/assets/images/social/linkedin.svg" alt="linkedin" /></a>
                    <a href="https://www.instagram.com/neointeraction/" target="_blank" rel="noopener noreferrer"><img 
                     src="https://www.instagram.com/neointeraction/" alt="ig" /></a>
                    <a href="https://www.facebook.com/Neointeraction/" target="_blank" rel="noopener noreferrer"><img 
                     src="https://www.facebook.com/Neointeraction/" alt="fb" /></a>
                    <a href="https://dribbble.com/neointeraction" target="_blank" rel="noopener noreferrer"><img 
                     src="https://dribbble.com/neointeraction" alt="db" /></a>
                    <a href="https://neointeraction-design.medium.com/" target="_blank" rel="noopener noreferrer"><img 
                     src="https://neointeraction-design.medium.com/" alt="medium" /></a>
                </div>
                <div class="divider"></div>
                <div class="footer-section website-link">
                    <a href="https://www.neointeraction.com" target="_blank">www.neointeraction.com <img src="https://oranjdot.net/neo/assets/images/icons/arrow-right.png"
                            alt="Arrow"></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
';

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true); // Passing `true` enables exceptions

    try {
        // Load client secrets from client_secret.json
        $clientSecretPath = __DIR__ . 'https://oranjdot.net/neo/assets/js/client_secret.json'; // Adjust path
        $tokenPath = 'https://oranjdot.net/neo/token.json'; // Adjust path

        if (!file_exists($clientSecretPath)) {
            throw new Exception('client_secret.json not found at ' . $clientSecretPath);
        }
        if (!file_exists($tokenPath)) {
            throw new Exception('token.json not found at ' . $tokenPath . '. Please run generate_token.php first.');
        }

        $clientSecrets = json_decode(file_get_contents($clientSecretPath), true);
        $accessToken = json_decode(file_get_contents($tokenPath), true);

        $provider = new Google(
            [
                'clientId' => $clientSecrets['web']['client_id'],
                'clientSecret' => $clientSecrets['web']['client_secret'],
                'redirectUri' => 'https://oranjdot.net/neo/', // This should match the one in generate_token.php and Google Cloud Console
            ]
        );

        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->AuthType = 'XOAUTH2';
        $mail->setOAuth(
            new OAuth(
                [
                    'provider' => $provider,
                    'clientId' => $clientSecrets['web']['client_id'],
                    'clientSecret' => $clientSecrets['web']['client_secret'],
                    'refreshToken' => $accessToken['refresh_token'],
                    'userName' => 'midhun@neointeraction.com', // The email address you are sending from
                ]
            )
        );

        $mail->setFrom('midhun@neointeraction.com', 'Neointeraction Design');
        $mail->addReplyTo('midhun@neointeraction.com', 'Neointeraction Design');

        //Recipients
        $mail->addAddress($email, $name); // Add a recipient
        $mail->Subject = "Your Case Study Download Link from Neointeraction";
        $mail->isHTML(true);
        $mail->Body = $userEmailBody;

        $mail->send();

        // Clear all addresses and attachments for the next email
        $mail->clearAddresses();
        $mail->clearAttachments();

        // Admin notification email
        $adminEmailBody = "A new case study download request has been submitted.\n\n";
        $adminEmailBody .= "Name: " . $name . "\n";
        $adminEmailBody .= "Email: " . $email . "\n";
        $adminEmailBody .= "Mobile: " . $mobile . "\n";
        $adminEmailBody .= "Case Study: " . $enquiryType . "\n";
        $adminEmailBody .= "Download Link: " . $caseStudyUrl . "\n";
        $adminEmailBody .= "Timestamp: " . date('Y-m-d H:i:s') . "\n";

        $mail->addAddress('midhun@neointeraction.com'); // Admin email
        $mail->Subject = "New Case Study Download Request: " . $enquiryType;
        $mail->isHTML(false); // Admin email can be plain text
        $mail->Body = $adminEmailBody;

        $mail->send();
        echo json_encode(['status' => 'success', 'message' => 'Emails sent successfully.']);

    } catch (Exception $e) {
        error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        echo json_encode([
            'status' => 'error',
            'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo
        ]);
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
