let isRegistrationSubmitting = false; // Renamed to avoid conflict

function submitEnquiry(trackingData) {
    // Prevent double submission
    if (isRegistrationSubmitting) { // Use new variable name
        console.log("Already submitting, please wait...");
        return;
    }

    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("work_email");
    const mobileInput = document.getElementById("mobile_number");
    const requirementInput = document.getElementById("requirement");
    const submitBtn = document.getElementById("enquiry-submit-btn");
    const status = document.getElementById("enquiry-status");

    const nameError = document.getElementById("name-error-modal");
    const emailError = document.getElementById("email-error-modal");
    const mobileError = document.getElementById("mobile-error-modal");
    const requirementError = document.getElementById("requirement-error-modal");

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
    isRegistrationSubmitting = true; // Use new variable name
    
    // Get enquiry type from localStorage
    const enquiryType = localStorage.getItem('enquiryType') || 'Request a Quote';

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

    // Debug logging (including tracking data)
    console.log("=== SINGLE SUBMISSION ===");
    console.log("Enquiry Type:", enquiryType);
    console.log("Current URL:", trackingData.current_url);
    console.log("IP Address:", trackingData.ip_address);
    console.log("User Agent:", trackingData.user_agent);
    console.log("Timestamp:", new Date().toISOString());

    // Single fetch request
    fetch(GOOGLE_FORM_URL, {
        method: "POST",
        mode: "no-cors",
        body: formData
    })
    .then(() => {
        console.log("Form submitted successfully");
        
        // Hide form and show success message
        document.getElementById("enquiryForm").style.display = "none";
        document.getElementById("successMessage").style.display = "block";
        document.getElementById("enquiry-form-title").style.display = "none";
        document.querySelector(".modal-contact").style.backgroundColor = "white";

        localStorage.removeItem('enquiryType');
        
        // Clear validation styles after successful submission
        nameInput.classList.remove("is-invalid");
        emailInput.classList.remove("is-invalid");
        mobileInput.classList.remove("is-invalid");
        requirementInput.classList.remove("is-invalid");
    })
    .catch((error) => {
        console.log("Form submission completed (assuming success due to CORS)");
        
        // Hide form and show success message
        document.getElementById("enquiryForm").style.display = "none";
        document.getElementById("successMessage").style.display = "block";
        document.getElementById("enquiry-form-title").style.display = "none";
        document.querySelector(".modal-contact").style.backgroundColor = "white";

        localStorage.removeItem('enquiryType');
        
        // Clear validation styles
        nameInput.classList.remove("is-invalid");
        emailInput.classList.remove("is-invalid");
        mobileInput.classList.remove("is-invalid");
        requirementInput.classList.remove("is-invalid");
    })
    .finally(() => {
        // Reset button and flag
        submitBtn.disabled = false;
        submitBtn.textContent = "Submit";
        isRegistrationSubmitting = false; // Use new variable name
        console.log("Submission completed");
    });
}

// Clear form when modal is closed and handle form submission
document.addEventListener('DOMContentLoaded', function() {
    // Initialize character counter
    const requirementField = document.getElementById("requirement");
    const charCounter = document.getElementById("char-counter");
    
    if (requirementField && charCounter) {
        // Set initial counter value
        charCounter.textContent = `0/200`;
    }
    
    // Handle form submission
    const enquiryForm = document.getElementById("enquiryForm");
    if (enquiryForm) {
        enquiryForm.addEventListener("submit", function(e) {
            e.preventDefault();
            submitEnquiry();
        });
    }

    // Real-time validation clearing and character counter
    const inputs = [
        { element: document.getElementById("name"), type: "name" },
        { element: document.getElementById("work_email"), type: "email" },
        { element: document.getElementById("mobile_number"), type: "mobile" },
        { element: document.getElementById("requirement"), type: "requirement" }
    ];

    inputs.forEach(input => {
        if (input.element) {
            input.element.addEventListener("input", function() {
                this.classList.remove("is-invalid");
                document.getElementById("enquiry-status").innerHTML = "";
                
                // Handle character counter for requirement field
                if (input.type === "requirement") {
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

    // Handle modal close
    const modal = document.getElementById('registerModal');
    if (modal) {
        modal.addEventListener('hidden.bs.modal', function() {
            // Reset form and show it again
            document.getElementById("enquiryForm").reset();
            document.getElementById("enquiryForm").style.display = "block";
            document.getElementById("successMessage").style.display = "none";
            document.querySelector(".modal-contact .form-title").style.display = "block";
            
            document.getElementById("enquiry-status").innerHTML = "";
            document.getElementById("enquiry-submit-btn").disabled = false;
            document.getElementById("enquiry-submit-btn").textContent = "Submit";
            
            // Clear validation styles
            inputs.forEach(input => {
                if (input.element) {
                    input.element.classList.remove("is-invalid");
                    input.element.style.borderColor = ""; // Also clear manual styles
                }
            });
            
            localStorage.removeItem('enquiryType');
            isRegistrationSubmitting = false; // Use new variable name
        });
    }
});

// Character counter for requirement textarea
document.addEventListener('DOMContentLoaded', function() {
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
});
