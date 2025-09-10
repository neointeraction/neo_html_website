<?php
// Handle form submission
$success_message = '';
$error_message = '';

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
        $success_message = "Thank you for your inquiry! We'll get back to you within 24 hours.";
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
            border-radius: 0px;
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
            border-radius: 0px;
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

        @media (max-width: 768px) {
            .contact-left, .contact-right {
                padding: 40px 30px;
            }
            
            .contact-title {
                font-size: 36px;
            }
        }
    </style>
</head>

<body>
    <?php $page="Contact Us"; ?>
    <?php include 'includes/body-additional-scripts.php'; ?>
    
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
                            
                            <?php if (!empty($success_message)): ?>
                                <div class="alert alert-success">
                                    <?php echo htmlspecialchars($success_message); ?>
                                </div>
                            <?php endif; ?>
                            
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

    <?php include 'components/footer.php'; ?>
    <?php include 'includes/footer-additional-scripts.php'; ?>
    <?php include 'includes/js.php'; ?>
    
</body>

</html>