var isUxAuditSubmitting = false;
var event_current_url = window.location.href.split('/').slice(0, -1).join('/');
function submitUxAuditForm() {
    // Prevent double submission
    if (isUxAuditSubmitting) {
        console.log("UX Audit form already submitting, please wait...");
        return;
    }

    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("work_email");
    const mobileInput = document.getElementById("mobile_number");
    const designationInput = document.getElementById("designation");
    const submitBtn = document.getElementById("contact-submit-btn");
    const status = document.getElementById("contact-status");

    const nameError = document.getElementById("name-error");
    const emailError = document.getElementById("email-error");
    const mobileError = document.getElementById("mobile-error");
    const designationError = document.getElementById("designation-error");

    const name = nameInput.value.trim();
    const email = emailInput.value.trim();
    const mobile = mobileInput.value.trim();
    const designation = designationInput.value.trim();

    // Clear previous validation styles
    nameInput.classList.remove("is-invalid");
    emailInput.classList.remove("is-invalid");
    mobileInput.classList.remove("is-invalid");
    designationInput.classList.remove("is-invalid");
    nameError.textContent = "";
    emailError.textContent = "";
    mobileError.textContent = "";
    designationError.textContent = "";

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

    // Designation validation - check if empty
    if (!designation) {
        designationInput.classList.add("is-invalid");
        designationError.textContent = "Please enter your designation";
        hasErrors = true;
    }
    

    if (hasErrors) {
        return;
    }

    // Set submission flag
    isUxAuditSubmitting = true;
    
    // Set enquiry type for contact form
    const enquiryType = 'UX Audit Enquiry Form';

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
    formData.append("entry.628579240", designation);
    formData.append("entry.873621461", enquiryType);
    formData.append("entry.894386", new Date().toISOString());
    
    // Add tracking data
    formData.append("entry.338027777", trackingData.current_url); // URL tracking
    formData.append("entry.1290170642", trackingData.ip_address); // IP address tracking

    // Debug logging
    console.log("=== UX AUDIT FORM SUBMISSION ===");
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
        console.log("UX Audit form submitted successfully");
        status.innerHTML = '<small class="text-success">Thank you! Your enquiry has been submitted successfully. We will get back to you soon.</small>';
        document.getElementById("contactForm").reset();
        
        // Clear validation styles after successful submission
        nameInput.classList.remove("is-invalid");
        emailInput.classList.remove("is-invalid");
        mobileInput.classList.remove("is-invalid");
        designationInput.classList.remove("is-invalid");

        // Redirect to thank you page
         window.location.href = event_current_url + '/components/thank-you.php';
    })
    .catch((error) => {
        console.log("UX Audit form submission completed (assuming success due to CORS)");
        status.innerHTML = '<small class="text-success">Thank you! Your enquiry has been submitted successfully. We will get back to you soon.</small>';
        document.getElementById("contactForm").reset();
        
        // Clear validation styles
        nameInput.classList.remove("is-invalid");
        emailInput.classList.remove("is-invalid");
        mobileInput.classList.remove("is-invalid");
        designationInput.classList.remove("is-invalid");

        // Redirect to thank you page
         window.location.href = event_current_url + '/components/thank-you.php';
    })
    .finally(() => {
        // Reset button and flag
        submitBtn.disabled = false;
        submitBtn.textContent = "Get Started Now";
        isUxAuditSubmitting = false;
        console.log("UX Audit form submission completed");
    });
}

document.addEventListener('DOMContentLoaded', function() {
    // Real-time validation clearing
    const inputs = [
        document.getElementById("name"),
        document.getElementById("work_email"),
        document.getElementById("mobile_number"),
        document.getElementById("designation")
    ];

    inputs.forEach(input => {
        if (input) {
            input.addEventListener("input", function() {
                this.classList.remove("is-invalid");
                document.getElementById("contact-status").innerHTML = "";
            });
        }
    });
});
