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
    <meta name="keywords" content="contact, support, inquiry, neointeraction" />

    <!-- Include the same CSS structure as blog page -->
    <?php include 'includes/favicon.php'; ?>
    <?php include 'includes/css.php'; ?>
    <?php include 'includes/head-additional-scripts.php'; ?>

</head>

<body>
    <?php $page = "Contact Us"; ?>
    <?php include 'includes/body-additional-scripts.php'; ?>

    <?php if (!$show_thank_you): ?>
        <!-- navbar -->
        <div class="navbar-container-block">
            <?php include 'components/navigation.php'; ?>
            <?php include 'components/whatsapp.php'; ?>
        </div>

        <!-- Contact Section -->
        <section class="contact-section section-padding">
            <div class="container">
                <div class="contact-container">
                    <div class="row g-0">
                        <!-- Left Side -->
                        <div class="col-lg-6">
                            <div class="contact-left">
                                <h1 class="banner-title">
                                    Book Your <span class="highlight">Free UI UX<br>Consultation</span>
                                </h1>

                                <div class="contact-info">
                                    <div class="ci-item">
                                        <h4>Mail</h4>
                                        <p>info@neointeraction.com</p>
                                    </div>
                                    <div class="ci-item">
                                        <h4>Phone</h4>
                                        <p>+91 95133 38744</p>
                                    </div>
                                    <div class="ci-item">
                                        <h4>Location</h4>
                                        <p>Neointeraction Designs, # M-98, 2nd Floor, LIC housing colony, HAL 3rd stage, Jeevan Bhima Nagar, Bangalore - 560 075</p>
                                    </div>

                                    <a href="#" class="get-directions">Get Directions</a>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side -->
                        <div class="col-lg-6">
                            <div class="contact-right">
                                <h2 class="form-title">Send Us Your Enquiry</h2>

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
                                            class="form-control custom-input"
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
                                            class="form-control custom-input"
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
                                            class="form-control custom-input"
                                            placeholder="Enter mobile number"
                                            value="<?php echo htmlspecialchars($mobile_number ?? ''); ?>"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="requirement" class="form-label">Type your requirement</label>
                                        <textarea
                                            id="requirement"
                                            name="requirement"
                                            class="form-control custom-input"
                                            placeholder="Describe project needs (eg, mobile app, website design, website development, UX audit..etc)"
                                            rows="6"
                                            required><?php echo htmlspecialchars($requirement ?? ''); ?></textarea>
                                    </div>
                                    <div class="form-btn-container">
                                        <button type="submit" class="btn btn-custom">
                                            Submit
                                        </button>
                                    </div>

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
        <?php include 'components/thank-you.php'; ?>
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