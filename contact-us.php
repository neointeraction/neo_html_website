<?php
// Remove PHP form handling since we're using Google Forms
$show_thank_you = false; // Always show the main form
?>

<?php
// Include tracking functions
include_once 'includes/tracking-functions.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path.'includes/head-additional-scripts.php'; ?>
    <?php include $path.'includes/favicon.php'; ?>
    <?php include $path.'includes/css.php'; ?>
    <title>Contact Neointeraction Design | Design Systems & Digital Products in India</title>
    <meta name="description" content="Discover the best digital products in India, including software, apps, and online services, designed to enhance your digital lifestyle and business efficiency.">
    <meta name="keywords" content="contact, support, inquiry, neointeraction" />
    <link rel="canonical" href="<?php echo $base_url; ?>" >
    <meta property="og:title" content="UI UX Design Agency in India | UI UX Design Company | Neointeraction Design" >
    <meta property="og:description" content="Looking for the best UI UX design agency in India? Neointeraction Design is a trusted UI UX design company in India, creating innovative digital products and solutions." >
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/neointeraction-home-og.webp" >
    <meta property="og:image:width" content="1200" >
    <meta property="og:image:height" content="630" >
    <meta property="og:url" content="<?php echo $base_url; ?>" >
    <meta property="og:site_name" content="Neointeraction Design" >
    <meta property="og:type" content="website" >
    <meta name="google-site-verification" content="" >
    <meta name="twitter:card" content="summary_large_image" >
    <meta name="twitter:title" content="Neointeraction UX Designs & Front-End Development Blogs | Insights & Innovations" >
    <meta property="og:image" content="<?php echo $base_url; ?>assets/images/og/neointeraction-contact-us-og.webp" >
    <meta name="twitter:description" content="Looking for the best UI UX design agency in India? Neointeraction Design is a trusted UI UX design company in India, creating innovative digital products and solutions." >
    <meta name="twitter:image" content="<?php echo $base_url; ?>assets/images/og/neointeraction-contact-us-og.webp" >
</head>

<body>
    <?php $page = "Contact Us"; ?>
    <?php include $path.'includes/body-additional-scripts.php'; ?>

    <!-- navbar -->
    <div class="navbar-container-block">
        <?php include $path.'components/navigation.php'; ?>
        <?php include $path.'components/whatsapp.php'; ?>
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
                                Share Your <span class="highlight">Enquiry</span>
                            </h1>

                            <div class="contact-info d-none d-md-block">
                                <div class="ci-item">
                                     <p>Submit your inquiry — our team will get in touch with you shortly.</p> 
                                  </div>
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

                                <a href="https://www.google.com/maps/place/Neointeraction+UX+Design+Services/@12.9685287,77.6527232,17z/data=!3m1!4b1!4m6!3m5!1s0x3bae16ae4b33f91d:0x16ae479052c160f0!8m2!3d12.9685287!4d77.6527232!16s%2Fg%2F1tscmfns?entry=ttu&g_ep=EgoyMDI1MDkxNy4wIKXMDSoASAFQAw%3D%3D"  target="_blank" class="get-directions">Get Directions</a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <h2 class="form-title">Enquiry Form</h2>

                            <form id="contactForm">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        class="form-control custom-input"
                                        placeholder="Enter name"
                                        required>
                                    <div id="name-error" class="text-danger"></div>
                                </div>

                                <div class="form-group">
                                    <label for="work_email" class="form-label">Work email</label>
                                    <input
                                        type="email"
                                        id="work_email"
                                        name="work_email"
                                        class="form-control custom-input"
                                        placeholder="Enter work email"
                                        pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$"
                                        required>
                                    <div id="email-error" class="text-danger"></div>
                                </div>

                                <div class="form-group">
                                    <label for="mobile_number" class="form-label">Mobile Number</label>
                                    <input
                                        type="tel"
                                        id="mobile_number"
                                        name="mobile_number"
                                        class="form-control custom-input"
                                        placeholder="Enter mobile number (e.g. +91 98765 43210)"
                                        pattern="^\+?[0-9]{10,15}$"
                                        required
                                        oninput="this.value = this.value.replace(/[^0-9+]/g, '');">
                                    <div id="mobile-error" class="text-danger"></div>
                                </div>

                                <div class="form-group">
                                    <label for="requirement" class="form-label">Type your requirement</label>
                                    <textarea
                                        id="requirement"
                                        name="requirement"
                                        class="form-control custom-input"
                                        placeholder="I am looking to design a mobile app/web app, Web site, Ux Audit.."
                                        rows="4"
                                        maxlength="200"
                                        ></textarea>
                                    <div id="charCount" class="form-text text-muted text-end">0/200 characters</div>
                                    <div id="requirement-error" class="text-danger"></div>
                                </div>
                                
                                <div id="contact-status"></div>
                                
                                <div class="form-btn-container">
                                    <button type="button" class="btn btn-custom" id="contact-submit-btn" onclick="submitContactForm()">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="contact-info d-block d-md-none">
                        <div class="ci-item">
                                <p>Submit your inquiry — our team will get in touch with you shortly.</p> 
                            </div>
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

                        <a href="https://www.google.com/maps/place/Neointeraction+UX+Design+Services/@12.9685287,77.6527232,17z/data=!3m1!4b1!4m6!3m5!1s0x3bae16ae4b33f91d:0x16ae479052c160f0!8m2!3d12.9685287!4d77.6527232!16s%2Fg%2F1tscmfns?entry=ttu&g_ep=EgoyMDI1MDkxNy4wIKXMDSoASAFQAw%3D%3D"  target="_blank" class="get-directions">Get Directions</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include $path.'components/footer.php'; ?>
    
    <?php include $path.'includes/footer-additional-scripts.php'; ?>
    <?php include $path.'includes/js.php'; ?>

    <?php include 'includes/tracking-script.php'; ?>
   <script>

    let nameInput = document.getElementById('name');

    nameInput.addEventListener("keypress", e => {
    const char = String.fromCharCode(e.which);
    if (!/[a-zA-Z ]/.test(char)) e.preventDefault();
    });

    document.getElementById("name").addEventListener("input", function() {
        if (this.value.trim().length > 0 && /^\S+$/.test(this.value)) {
            document.getElementById("name").classList.remove("is-invalid");
            document.getElementById("name-error").innerHTML = "";
        } else {
            document.getElementById("name").classList.add("is-invalid");
            document.getElementById("name-error").innerHTML = "Enter a valid name";
        }
    });

    document.getElementById("work_email").addEventListener("input", function() {
        if (this.value.trim().length > 0 && /^\S+@\S+\.\S+$/.test(this.value)) {
            document.getElementById("work_email").classList.remove("is-invalid");
            document.getElementById("email-error").innerHTML = "";
        } else {
            document.getElementById("work_email").classList.add("is-invalid");
            document.getElementById("email-error").innerHTML = "Enter a valid email address";
        }
    });

    document.getElementById("mobile_number").addEventListener("input", function() {
        if (this.value.trim().length > 0 && /^\+?[0-9]{10,15}$/.test(this.value)) {
            document.getElementById("mobile_number").classList.remove("is-invalid");
            document.getElementById("mobile-error").innerHTML = "";
        } else {
            document.getElementById("mobile_number").classList.add("is-invalid");
            document.getElementById("mobile-error").innerHTML = "Enter a valid mobile number";
        }
    });
   </script>
</body>
</html>
