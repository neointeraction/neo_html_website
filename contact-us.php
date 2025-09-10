<?php
// Handle form submission
$success_message = '';
$error_message = '';
$show_thank_you = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name'] ?? '');
    $work_email = trim($_POST['work_email'] ?? '');
    $mobile_number = trim($_POST['mobile_number'] ?? '');
    $requirement = trim($_POST['requirement'] ?? '');
    
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($work_email) || !filter_var($work_email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid work email is required";
    }
    
    if (empty($mobile_number)) {
        $errors[] = "Mobile number is required";
    }
    
    if (empty($requirement)) {
        $errors[] = "Project requirement is required";
    }
    
    if (empty($errors)) {
        $show_thank_you = true;
        $name = $work_email = $mobile_number = $requirement = '';
    } else {
        $error_message = implode(', ', $errors);
    }
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Neointeraction - Contact Us</title>
    <meta name="description" content="Get in touch with neointeraction design for inquiries and support.">
    <meta name="keywords" content="contact, support, inquiry, neointeraction"/>
    
    <!-- Include the same CSS structure as blog page -->
    <?php include 'includes/favicon.php'; ?>
    <?php include 'includes/css.php'; ?>
    <?php include 'includes/head-additional-scripts.php'; ?>
    
    <!-- Additional AOS CSS if not included in css.php -->
    <link href="assets/css/vendor/aos.css" rel="stylesheet" />

    <style>
        .contact-section {
            padding: 100px 0;
            background: #f8f9fa;
        }

        .contact-container {
            margin: 0 auto;
            border-radius: 0;
            box-shadow: none;
            overflow: hidden;
        }

        .contact-left {
            color: #333;
            padding: 60px;
        }

        .contact-title {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 40px;
            line-height: 1.2;
            color: #333;
        }

        .contact-title .highlight {
            color: #e74c3c;
        }

        .contact-info h4 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 8px;
            color: #333;
        }

        .contact-info p {
            font-size: 16px;
            margin-bottom: 24px;
            color: #333;
            line-height: 1.5;
        }

        .get-directions {
            color: #333;
            text-decoration: underline;
            font-weight: 500;
        }

        .contact-right {
            padding: 60px;
            background: #EFEFEF;
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;   
        }

        .form-title {
            font-size: 32px;
            font-weight: 600;
            color: #666;
            margin-bottom: 40px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #333;
            font-size: 16px;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e9ecef;
            border-radius: 4px;
            font-size: 16px;
            background: #fff;
        }

        .form-control:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,0.25);
        }

        textarea.form-control {
            min-height: 100px;
            resize: vertical;
        }

        .submit-btn {
            background: #333;
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.3s ease;
            display: block;
            margin: 0 auto;
            width: fit-content;
        }

        .submit-btn:hover {
            background: #555;
        }

        .alert {
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }

        /* Thank You Page Styles */
        .thank-you-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f9fa;
            padding: 60px 20px;
        }

        .thank-you-container {
            text-align: center;
            max-width: 600px;
            width: 100%;
        }

        .thank-you-title {
            font-size: 72px;
            font-weight: 400;
            color: #333;
            margin-bottom: 40px;
            line-height: 1.1;
        }

        .thank-you-title .highlight {
            color: #e74c3c;
        }

        .email-icon {
            width: 240px;
            height: 120px;
            margin: 0 auto 40px;
            position: relative;
        }

        .email-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

 



 

        .thank-you-message {
            margin-bottom: 50px;
        }

        .thank-you-message p {
            font-size: 20px;
            color: #666;
            margin: 8px 0;
            font-weight: 400;
        }

        .back-btn {
            display: inline-block;
            padding: 12px 30px;
            border: 2px solid #333;
            color: #333;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: #333;
            color: #fff;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .contact-left, .contact-right {
                padding: 40px 30px;
            }
            
            .contact-title {
                font-size: 36px;
            }

            .thank-you-title {
                font-size: 48px;
            }

            .thank-you-message p {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            .thank-you-title {
                font-size: 36px;
            }

            .email-icon {
                width: 100px;
                height: 75px;
            }

            .email-envelope {
                width: 100px;
                height: 75px;
            }

            .thank-you-message p {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <?php $page="Contact Us"; ?>
    <?php include 'includes/body-additional-scripts.php'; ?>
    
    <?php if (!$show_thank_you): ?>
        <!-- navbar -->
        <div class="navbar-container-block">
            <?php include 'components/navigation.php'; ?>
            <?php include 'components/whatsapp.php'; ?>
        </div>

        <!-- Contact Section -->
        <section class="contact-section">
            <div class="container">
                <div class="contact-container">
                    <div class="row g-0">
                        <!-- Left Side -->
                        <div class="col-lg-6">
                            <div class="contact-left">
                                <h1 class="contact-title" style="font-weight: 600;">
                                    Book Your <span class="highlight">Free UI UX<br>Consultation</span>
                                </h1>
                                
                                <div class="contact-info">
                                    <h4>Mail</h4>
                                    <p>info@neointeraction.com</p>
                                    
                                    <h4>Phone</h4>
                                    <p>+91 95133 38744</p>
                                    
                                    <h4>Location</h4>
                                    <p>Neointeraction Designs, # M-98, 2nd Floor, LIC housing colony,<br>HAL 3rd stage, Jeevan Bhima Nagar, Bangalore - 560 075</p>
                                    
                                    <a href="#" class="get-directions">Get Directions</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Right Side -->
                        <div class="col-lg-6">
                            <div class="contact-right">
                                <h2 class="form-title">Get in Touch</h2>
                                
                                <?php if (!empty($error_message)): ?>
                                    <div class="alert alert-danger">
                                        <?php echo htmlspecialchars($error_message); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <form method="POST" action="">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input 
                                            type="text" 
                                            id="name" 
                                            name="name" 
                                            class="form-control" 
                                            placeholder="Enter name"
                                            value="<?php echo htmlspecialchars($name ?? ''); ?>"
                                            required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="work_email" class="form-label">Work email</label>
                                        <input 
                                            type="email" 
                                            id="work_email" 
                                            name="work_email" 
                                            class="form-control" 
                                            placeholder="Enter work email"
                                            value="<?php echo htmlspecialchars($work_email ?? ''); ?>"
                                            required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="mobile_number" class="form-label">Mobile Number</label>
                                        <input 
                                            type="tel" 
                                            id="mobile_number" 
                                            name="mobile_number" 
                                            class="form-control" 
                                            placeholder="Enter mobile number"
                                            value="<?php echo htmlspecialchars($mobile_number ?? ''); ?>"
                                            required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="requirement" class="form-label">Type your requirement</label>
                                        <textarea 
                                            id="requirement" 
                                            name="requirement" 
                                            class="form-control" 
                                            placeholder="Describe project needs (eg, mobile app, website design, website development, UX audit..etc)"
                                            required><?php echo htmlspecialchars($requirement ?? ''); ?></textarea>
                                    </div>
                                    
                                    <button type="submit" class="submit-btn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer -->
        <?php include 'components/footer.php'; ?>

    <?php else: ?>
        <!-- Thank You Page -->
        <section class="thank-you-section">
            <div class="thank-you-container">
                <h1 class="thank-you-title">
                    Thank <span class="highlight">you :)</span>
                </h1>
                
                <div class="email-icon">
                   <img src="./assets/images/contact-feedback.svg" alt="feedback icon" />
                </div>
                
                <div class="thank-you-message">
                    <p>Your message has been successfully sent.</p>
                    <p>We will contact you very soon!</p>
                </div>
                
                <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="back-btn">Back to Homepage</a>
            </div>
        </section>
    <?php endif; ?>

    <!-- script includes - match blog page structure -->
    <?php include 'includes/footer-additional-scripts.php'; ?>
    <?php include 'includes/js.php'; ?>
    
    <!-- Additional scripts if not included in js.php -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/aos.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>