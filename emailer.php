<?php
$to = "vmidhun@gmail.com"; // Replace with the recipient's email address "vmidhun@gmail.com";
$subject = "Test Email from PHP";
//$message = "This is a test email sent using the PHP mail() function.";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers = "From: info@neointeraction.com" . "\r\n" .
           "Reply-To: info@neointeraction.com" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();
           
$message = '
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
                     src="https://oranjdot.net/neo/assets/images/social/ig.svg" alt="ig" /></a>
                    <a href="https://www.facebook.com/Neointeraction/" target="_blank" rel="noopener noreferrer"><img 
                     src="https://oranjdot.net/neo/assets/images/social/fb.svg" alt="fb" /></a>
                    <a href="https://dribbble.com/neointeraction" target="_blank" rel="noopener noreferrer"><img 
                     src="https://oranjdot.net/neo/assets/images/social/db.svg" alt="db" /></a>
                    <a href="https://neointeraction-design.medium.com/" target="_blank" rel="noopener noreferrer"><img 
                     src="https://oranjdot.net/neo/assets/images/social/med.svg" alt="medium" /></a>
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

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
?>