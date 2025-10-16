<?php
header('Content-Type: application/json');

// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

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

    $mail = new PHPMailer(true);

    try {
        // Disable verbose debug output for production
        $mail->SMTPDebug = 0; // Set to 0 for no output, or SMTP::DEBUG_SERVER for debugging
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'midhun@neointeraction.com';
        $mail->Password = ''; // Use your App Password, NOT your Gmail password!
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('midhun@neointeraction.com', 'Neointeraction');
        $mail->addAddress($email, $name); // User's email
        $mail->addReplyTo('midhun@neointeraction.com', 'Information');

        // Content - User Email (HTML)
        $mail->isHTML(true);
        $mail->Subject = "Your Case Study Download Link from Neointeraction";
        $mail->Body    = '
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
                    display: inline-block;
                    padding: 12px 25px;
                    background-color: #ff0000;
                    color: #ffffff;
                    text-decoration: none;
                    border-radius: 25px;
                    font-size: 16px;
                    border: 2px solid #ff0000;
                    transition: background-color 0.3s ease;
                }
                .button:hover {
                    background-color: #cc0000;
                    border-color: #cc0000;
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
                    <img src="https://www.neointeraction.com/assets/images/logo.svg" alt="Neointeraction Design Logo">
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
                            <a href="https://www.facebook.com/neointeraction" target="_blank"><img src="https://www.neointeraction.com/assets/images/facebook-icon.svg" alt="Facebook"></a>
                            <a href="https://www.instagram.com/neointeraction_design/" target="_blank"><img src="https://www.instagram.com/assets/images/instagram-icon.svg" alt="Instagram"></a>
                            <a href="https://www.linkedin.com/company/neointeraction/" target="_blank"><img src="https://www.linkedin.com/assets/images/linkedin-icon.svg" alt="LinkedIn"></a>
                        </div>
                        <div class="divider"></div>
                        <div class="footer-section website-link">
                            <a href="https://www.neointeraction.com" target="_blank">www.neointeraction.com <img src="https://www.neointeraction.com/assets/images/arrow-right.svg" alt="Arrow"></a>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>
        ';

       $mail->send();

        // Send admin notification
        $mail->clearAddresses();
        $mail->clearReplyTos();

        $mail->isHTML(false);
        $mail->addAddress('info@neointeraction.com', 'Admin');
        $mail->addReplyTo($email, $name);
        $mail->Subject = "New Case Study Download Request: " . $enquiryType;
        $mail->Body    = "A new case study download request has been submitted.\n\n";
        $mail->Body   .= "Name: " . $name . "\n";
        $mail->Body   .= "Email: " . $email . "\n";
        $mail->Body   .= "Mobile: " . $mobile . "\n";
        $mail->Body   .= "Case Study: " . $enquiryType . "\n";
        $mail->Body   .= "Download Link: " . $caseStudyUrl . "\n";
        $mail->Body   .= "Timestamp: " . date('Y-m-d H:i:s') . "\n";

        $mail->send();

        echo json_encode(['status' => 'success', 'message' => 'Email sent successfully.']);
    } catch (Exception $e) {
            error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
            echo json_encode([
                'status' => 'error',
                'message' => 'Mailer Error: ' . $mail->ErrorInfo // Make this visible
            ]);
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
