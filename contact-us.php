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
                                        placeholder="Enter mobile number (e.g. +1234567890)"
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
                                        placeholder="Describe project needs (eg, mobile app, website design, website development, UX audit..etc)"
                                        rows="6"
                                        maxlength="200"
                                        required></textarea>
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
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include $path.'components/footer.php'; ?>
    
    <?php include $path.'includes/footer-additional-scripts.php'; ?>
    <?php include $path.'includes/js.php'; ?>

    <script>
    // Get tracking data from PHP
    const trackingData = <?php echo getTrackingDataJson(); ?>;

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

        const nameError = document.getElementById("name-error");
        const emailError = document.getElementById("email-error");
        const mobileError = document.getElementById("mobile-error");
        const requirementError = document.getElementById("requirement-error");

        const name = nameInput.value.trim();
        const email = emailInput.value.trim();
        const mobile = mobileInput.value.trim();
        const requirement = requirementInput.value.trim();

        // Clear previous validation styles
        nameInput.classList.remove("is-invalid");
        emailInput.classList.remove("is-invalid");
        mobileInput.classList.remove("is-invalid");
        requirementInput.classList.remove("is-invalid");
        nameError.textContent = "";
        emailError.textContent = "";
        mobileError.textContent = "";
        requirementError.textContent = "";

        let hasErrors = false;

        // Name validation - only letters and spaces, minimum 2 characters
        if (!name || name.length < 2 || !/^[a-zA-Z\s]+$/.test(name)) {
            nameInput.classList.add("is-invalid");
            nameError.textContent = "Enter a valid name (letters only, minimum 2 characters)";
            hasErrors = true;
        }

        // Email validation - proper email format
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email || !emailRegex.test(email)) {
            emailInput.classList.add("is-invalid");
            emailError.textContent = "Enter a valid email address";
            hasErrors = true;
        }

        // Phone validation - allows optional '+' and 10 to 15 digits
        const phoneRegex = /^\+?[0-9]{10,15}$/;
        if (!mobile || !phoneRegex.test(mobile)) {
            mobileInput.classList.add("is-invalid");
            mobileError.textContent = "Enter a valid mobile number (e.g., +1234567890)";
            hasErrors = true;
        }

        // Requirement validation - check if empty
        if (!requirement) {
            requirementInput.classList.add("is-invalid");
            requirementError.textContent = "Please describe your project needs";
            hasErrors = true;
        }

        if (hasErrors) {
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
        
        // Add tracking data
        formData.append("entry.338027777", trackingData.current_url); // URL tracking
        formData.append("entry.1290170642", trackingData.ip_address); // IP address tracking

        // Debug logging
        console.log("=== CONTACT FORM SUBMISSION ===");
        console.log("Enquiry Type:", enquiryType);
        console.log("Current URL:", trackingData.current_url);
        console.log("IP Address:", trackingData.ip_address);
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
            
            // Clear validation styles after successful submission
            nameInput.classList.remove("is-invalid");
            emailInput.classList.remove("is-invalid");
            mobileInput.classList.remove("is-invalid");
            requirementInput.classList.remove("is-invalid");

            // Redirect to thank you page
            window.location.href = '<?php echo $path; ?>components/thank-you.php';
        })
        .catch((error) => {
            console.log("Contact form submission completed (assuming success due to CORS)");
            status.innerHTML = '<small class="text-success">Thank you! Your enquiry has been submitted successfully. We will get back to you soon.</small>';
            document.getElementById("contactForm").reset();
            
            // Clear validation styles
            nameInput.classList.remove("is-invalid");
            emailInput.classList.remove("is-invalid");
            mobileInput.classList.remove("is-invalid");
            requirementInput.classList.remove("is-invalid");

            // Redirect to thank you page
            window.location.href = '<?php echo $path; ?>components/thank-you.php';
        })
        .finally(() => {
            // Reset button and flag
            submitBtn.disabled = false;
            submitBtn.textContent = "Submit";
            isContactSubmitting = false;
            console.log("Contact form submission completed");
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Character counter for requirement textarea
        const requirementTextarea = document.getElementById('requirement');
        const charCountDisplay = document.getElementById('charCount');
        const maxLength = requirementTextarea.getAttribute('maxlength');

        if (requirementTextarea && charCountDisplay) {
            function updateCharCount() {
                const currentLength = requirementTextarea.value.length;
                charCountDisplay.textContent = `${currentLength}/${maxLength} characters`;
            }

            requirementTextarea.addEventListener('input', updateCharCount);

            // Initialize count on page load
            updateCharCount();
        }

        // Real-time validation clearing
        const inputs = [
            document.getElementById("name"),
            document.getElementById("work_email"),
            document.getElementById("mobile_number"),
            document.getElementById("requirement")
        ];

        inputs.forEach(input => {
            if (input) {
                input.addEventListener("input", function() {
                    this.classList.remove("is-invalid");
                    document.getElementById("contact-status").innerHTML = "";
                    
                    // Update character count for requirement field
                    if (this.id === "requirement") {
                        const currentLength = this.value.length;
                        const maxLength = 200;
                        const counter = document.getElementById("charCount");
                        if (counter) {
                            counter.textContent = `${currentLength}/${maxLength} characters`;
                        }
                    }
                });
            }
        });
    });
    </script>
</body>
</html>
