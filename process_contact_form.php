<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 0); // Don't display errors in browser
ini_set('log_errors', 1);

// Set JSON header first
header('Content-Type: application/json');

// Configuration
$config = [
    'google_form_url' => 'https://docs.google.com/forms/d/1PdVAaeNnXelsHKlu8lCPfkwWHr3gJfIP3G1vaf5rVJc/formResponse',
    
    'google_form_fields' => [
        'name' => 'entry.526277757',
        'email' => 'entry.927346931',
        'phone' => 'entry.140569442',
        'company' => 'entry.273023274',
        'subject' => 'entry.1251163963',
        'message' => 'entry.585741335',
        'formName' => 'entry.881772788'
    ],
    
    'team_email' => 'aditya@neointeraction.com',
    'from_email' => 'aditya@neointeraction.com',
    'company_name' => 'Neointeraction Design',
    'case_study_pdf' => '/files/case-study.pdf'
];

try {
    // Check if it's a POST request
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Only POST method allowed");
    }
    
    // Validate required fields
    $required_fields = ['name', 'email', 'subject', 'message', 'formName'];
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            throw new Exception("$field is required");
        }
    }
    
    // Sanitize input data
    $data = [
        'name' => htmlspecialchars(trim($_POST['name'])),
        'email' => filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL),
        'phone' => htmlspecialchars(trim($_POST['phone'] ?? '')),
        'company' => htmlspecialchars(trim($_POST['company'] ?? '')),
        'subject' => htmlspecialchars(trim($_POST['subject'])),
        'message' => htmlspecialchars(trim($_POST['message'])),
        'formName' => htmlspecialchars(trim($_POST['formName']))
    ];
    
    if (!$data['email']) {
        throw new Exception("Invalid email address");
    }
    
    // Step 1: Submit to Google Forms (continue even if this fails)
    $googleFormData = [];
    foreach ($config['google_form_fields'] as $field => $entry) {
        if (isset($data[$field]) && !empty($data[$field])) {
            $googleFormData[$entry] = $data[$field];
        }
    }
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $config['google_form_url']);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($googleFormData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    // Log Google Forms submission result but don't fail the whole process
    error_log("Google Forms submission - HTTP Code: $httpCode");
    
    // Step 2: Send alert email to team (optional - don't fail if mail server is down)
    $teamEmailSubject = "New Contact Form Submission - " . $data['formName'];
    $teamEmailBody = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #e74c3c; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background-color: #f9f9f9; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #333; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Contact Form Submission</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <span class='label'>Form Name:</span> {$data['formName']}
                </div>
                <div class='field'>
                    <span class='label'>Name:</span> {$data['name']}
                </div>
                <div class='field'>
                    <span class='label'>Email:</span> {$data['email']}
                </div>
                <div class='field'>
                    <span class='label'>Phone:</span> {$data['phone']}
                </div>
                <div class='field'>
                    <span class='label'>Company:</span> {$data['company']}
                </div>
                <div class='field'>
                    <span class='label'>Subject:</span> {$data['subject']}
                </div>
                <div class='field'>
                    <span class='label'>Message:</span><br>
                    " . nl2br($data['message']) . "
                </div>
                <div class='field'>
                    <span class='label'>Submitted:</span> " . date('Y-m-d H:i:s') . "
                </div>
            </div>
        </div>
    </body>
    </html>";
    
    $teamHeaders = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: ' . $config['from_email'],
        'Reply-To: ' . $data['email']
    ];
    
    // Try to send email but don't fail if it doesn't work
    @mail($config['team_email'], $teamEmailSubject, $teamEmailBody, implode("\r\n", $teamHeaders));
    
    // Step 3: Send confirmation email to user (optional)
    $userEmailSubject = "Thank you for contacting " . $config['company_name'];
    $userEmailBody = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #e74c3c; color: white; padding: 20px; text-align: center; }
            .content { padding: 30px; background-color: #ffffff; }
            .download-btn { 
                display: inline-block; 
                background-color: #e74c3c; 
                color: white; 
                padding: 15px 30px; 
                text-decoration: none; 
                border-radius: 5px; 
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Thank You, {$data['name']}!</h2>
            </div>
            <div class='content'>
                <p>We have received your message and will get back to you within 24 hours.</p>
                
                <p><strong>Your submission details:</strong></p>
                <p><strong>Subject:</strong> {$data['subject']}</p>
                <p><strong>Message:</strong><br>" . nl2br($data['message']) . "</p>
                
                <p>As a thank you, please download our exclusive case study:</p>
                <a href='{$config['case_study_pdf']}' class='download-btn'>Download Case Study PDF</a>
                
                <p>Best regards,<br>
                {$config['company_name']} Team</p>
            </div>
        </div>
    </body>
    </html>";
    
    $userHeaders = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: ' . $config['from_email'],
        'Reply-To: ' . $config['from_email']
    ];
    
    // Try to send user email but don't fail if it doesn't work
    @mail($data['email'], $userEmailSubject, $userEmailBody, implode("\r\n", $userHeaders));
    
    // Always return success if we got this far
    echo json_encode([
        'success' => true,
        'message' => 'Thank you for your message! We will get back to you soon.'
    ]);
    
} catch (Exception $e) {
    // Return error response
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
} catch (Error $e) {
    // Catch fatal errors too
    echo json_encode([
        'success' => false,
        'message' => 'Server error occurred. Please try again.'
    ]);
}

// Ensure no extra output
exit;
?>