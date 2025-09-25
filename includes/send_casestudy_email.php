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
    $name = filter_input(INPUT_POST, 'cs_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'cs_work_email', FILTER_SANITIZE_EMAIL);
    $mobile = filter_input(INPUT_POST, 'cs_mobile_number', FILTER_SANITIZE_STRING);
    $enquiryType = filter_input(INPUT_POST, 'cs_enquiryType', FILTER_SANITIZE_STRING);
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

    // Sanitize mobile number further if needed, ensure it matches expected pattern
    if (!preg_match('/^\+?[0-9]{10,15}$/', $mobile)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid mobile number format.']);
        exit;
    }

    $mail = new PHPMailer(true); // Enable exceptions

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'midhun@neointeraction.com'; // Replace with your actual G Suite email address
        $mail->Password = 'w7fkdodu'; // Replace with your Gmail App Password (if 2FA is enabled) or regular password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use ENCRYPTION_SMTPS for port 465, PHPMailer::ENCRYPTION_STARTTLS for port 587
        $mail->Port = 587; // Use 465 for SMTPS, 587 for STARTTLS (Gmail)

        // Recipients
        $mail->setFrom('midhun@neointeraction.com'', 'Neointeraction'); // Replace with your actual G Suite email and name
        $mail->addAddress($email, $name); // Add a recipient (user's email)
        $mail->addReplyTo('midhun@neointeraction.com', 'Information'); // Replace with your actual G Suite email

        // Content - User Email
        $mail->isHTML(false); // Set email format to plain text
        $mail->Subject = "Your Case Study Download Link from Neointeraction";
        $mail->Body    = "Dear " . $name . ",\n\n";
        $mail->Body   .= "Thank you for your interest in our case study: " . $enquiryType . ".\n";
        $mail->Body   .= "You can download it here: " . $caseStudyUrl . "\n\n";
        $mail->Body   .= "If you have any questions, feel free to contact us.\n\n";
        $mail->Body   .= "Best regards,\nThe Neointeraction Team";

        $mail->send();

        // Clear addresses for the next email (admin notification)
        $mail->clearAddresses();
        $mail->clearReplyTos();

        // Admin Notification Email
        $mail->addAddress('info@neointeraction.com', 'Admin'); // Replace with actual admin email
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
        echo json_encode(['status' => 'error', 'message' => 'Failed to send email. Please check server logs for details.']);
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
