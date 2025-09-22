<?php
// Remove PHP form handling since we're using Google Forms
$show_thank_you = false; // Always show the main form
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php $path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); ?>
    <?php include $path.'includes/favicon.php'; ?>
    <?php include $path.'includes/css.php'; ?>
    <?php include $path.'includes/head-additional-scripts.php'; ?>
    <title>Neointeraction - Contact Us</title>
    <meta name="description" content="Get in touch with neointeraction design for inquiries and support.">
    <meta name="keywords" content="contact, support, inquiry, neointeraction" />

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

                            <div class="contact-info">
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
                                </div>

                                <div class="form-group">
                                    <label for="work_email" class="form-label">Work email</label>
                                    <input
                                        type="email"
                                        id="work_email"
                                        name="work_email"
                                        class="form-control custom-input"
                                        placeholder="Enter work email"
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
                                        required></textarea>
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
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include $path.'components/footer.php'; ?>
    
    <?php include $path.'includes/footer-additional-scripts.php'; ?>
    <?php include $path.'includes/js.php'; ?>

    <script>
    let isContactSubmitting = false;

    function submitContactForm() {
        // Prevent double submission
        if (isContactSubmitting) {
            console.log("Contact form already submitting, please wait...");
            return;
        }

        const nameInput = document.getElementById("name");
        const emailInput = document.getElementById("work_email");
        const mobileInput = document.getElementById("mobile_number");
        const requirementInput = document.getElementById("requirement");
        const submitBtn = document.getElementById("contact-submit-btn");
        const status = document.getElementById("contact-status");

        const name = nameInput.value.trim();
        const email = emailInput.value.trim();
        const mobile = mobileInput.value.trim();
        const requirement = requirementInput.value.trim();

        // Basic validation
        if (!name || !email || !mobile || !requirement) {
            status.innerHTML = '<small class="text-danger">Please fill all fields</small>';
            return;
        }

        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            status.innerHTML = '<small class="text-danger">Please enter a valid email address</small>';
            return;
        }

        // Set submission flag
        isContactSubmitting = true;
        
        // Set enquiry type for contact form
        const enquiryType = 'Contact Us Form';

        // Update button state
        submitBtn.disabled = true;
        submitBtn.textContent = "Submitting...";
        status.innerHTML = '<small class="text-info">Submitting your enquiry...</small>';

        // Google Form submission
        const GOOGLE_FORM_URL = "https://docs.google.com/forms/d/e/1FAIpQLSdt4pIKzDRK50yFGFvanxa3P3RBsSqlwuP06HlgWtopQ-PAOA/formResponse";

        const formData = new FormData();
        formData.append("entry.1195398138", email);
        formData.append("entry.2044501982", name);
        formData.append("entry.943859299", mobile);
        formData.append("entry.628579240", requirement);
        formData.append("entry.873621461", enquiryType);
        formData.append("entry.894386", new Date().toISOString());

        // Debug logging
        console.log("=== CONTACT FORM SUBMISSION ===");
        console.log("Enquiry Type:", enquiryType);
        console.log("Timestamp:", new Date().toISOString());

        // Single fetch request
        fetch(GOOGLE_FORM_URL, {
            method: "POST",
            mode: "no-cors",
            body: formData
        })
        .then(() => {
            console.log("Contact form submitted successfully");
            status.innerHTML = '<small class="text-success">Thank you! Your enquiry has been submitted successfully. We will get back to you soon.</small>';
            document.getElementById("contactForm").reset();
            
            // Optionally redirect to thank you page or keep on same page
            setTimeout(() => {
                status.innerHTML = "";
                // window.location.href = 'thank-you.php'; // Uncomment if you want to redirect
            }, 3000);
        })
        .catch((error) => {
            console.log("Contact form submission completed (assuming success due to CORS)");
            status.innerHTML = '<small class="text-success">Thank you! Your enquiry has been submitted successfully. We will get back to you soon.</small>';
            document.getElementById("contactForm").reset();
            
            setTimeout(() => {
                status.innerHTML = "";
                // window.location.href = 'thank-you.php'; // Uncomment if you want to redirect
            }, 3000);
        })
        .finally(() => {
            // Reset button and flag
            submitBtn.disabled = false;
            submitBtn.textContent = "Submit";
            isContactSubmitting = false;
            console.log("Contact form submission completed");
        });
    }
    </script>
</body>
</html>