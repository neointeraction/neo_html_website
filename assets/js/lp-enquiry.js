
let isLPContactSubmitting = false;

let lp_current_url = window.location.href.split('/').slice(0, -1).join('/');
function submitLPForm() {
    // Prevent double submission
    if (isLPContactSubmitting) {
        console.log("Contact form already submitting, please wait...");
        return;
    }

    const nameInput = document.getElementById("lp_name");
    const emailInput = document.getElementById("lp_work_email");
    const mobileInput = document.getElementById("lp_mobile_number");
    const requirementInput = document.getElementById("lp_designation");
    const submitBtn = document.getElementById("lp_contact-submit-btn");
    const status = document.getElementById("lp_contact-status");

    const nameError = document.getElementById("lp_name-error");
    const emailError = document.getElementById("lp_email-error");
    const mobileError = document.getElementById("lp_mobile-error");
    const requirementError = document.getElementById("lp_designation-error");

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
        nameError.textContent = "Enter a valid name";
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
        mobileError.textContent = "Enter a valid mobile number (e.g., +91 98765 43210)";
        hasErrors = true;
    }

    // Requirement validation - check if empty
    if (!requirement) {
        requirementInput.classList.add("is-invalid");
        requirementError.textContent = "Please describe your project details";
        hasErrors = true;
    }
    

    if (hasErrors) {
        return;
    }

    // Set submission flag
    isLPContactSubmitting = true;
    
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
        window.location.href = lp_current_url + '/components/thank-you.php';
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
        window.location.href =  lp_current_url + '/components/thank-you.php';
    })
    .finally(() => {
        // Reset button and flag
        submitBtn.disabled = false;
        submitBtn.textContent = "Submit";
        isLPContactSubmitting = false;
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
        document.getElementById("lp_name"),
        document.getElementById("lp_work_email"),
        document.getElementById("lp_mobile_number"),
        document.getElementById("lp_designation")
    ];

    inputs.forEach(input => {
        if (input) {
            input.addEventListener("input", function() {
                this.classList.remove("is-invalid");
                document.getElementById("lp_contact-status").innerHTML = "";
                
                // Update character count for requirement field
                if (this.id === "lp_designation") {
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
