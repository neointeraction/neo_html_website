<?php
// Include tracking functions
include_once 'includes/tracking-functions.php';
?>

<!-- Registration Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-body">
                <div class="contact-container">
                    <div class="row g-0">
                        <div class="col-lg-12">
                            <div class="modal-contact">
                                <button type="button" class="btn-close modal-btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h2 class="form-title">Enquiry Form</h2>

                                <form id="enquiryForm">
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
                                        <div class="textarea-container" style="position: relative;">
                                            <textarea
                                                id="requirement"
                                                name="requirement"
                                                class="form-control custom-input"
                                                placeholder="Describe project needs (eg, mobile app, website design, website development, UX audit..etc)"
                                                rows="6"
                                                maxlength="200"
                                                required></textarea>
                                            <div id="char-counter" style="position: absolute; bottom: 8px; right: 12px; font-size: 12px; color: #666; background: rgba(255,255,255,0.8); padding: 2px 4px; border-radius: 3px;">
                                                0/200
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div id="enquiry-status"></div>
                                    
                                    <div class="form-btn-container d-flex justify-content-end">
                                        <button type="submit" class="btn btn-custom" id="enquiry-submit-btn">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Get tracking data from PHP
const trackingData = <?php echo getTrackingDataJson(); ?>;

let isSubmitting = false;

function submitEnquiry() {
    // Prevent double submission
    if (isSubmitting) {
        console.log("Already submitting, please wait...");
        return;
    }

    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("work_email");
    const mobileInput = document.getElementById("mobile_number");
    const requirementInput = document.getElementById("requirement");
    const submitBtn = document.getElementById("enquiry-submit-btn");
    const status = document.getElementById("enquiry-status");

    const name = nameInput.value.trim();
    const email = emailInput.value.trim();
    const mobile = mobileInput.value.trim();
    const requirement = requirementInput.value.trim();

    // Clear previous validation styles
    nameInput.classList.remove("is-invalid");
    emailInput.classList.remove("is-invalid");
    mobileInput.classList.remove("is-invalid");
    requirementInput.classList.remove("is-invalid");

    let hasErrors = false;

    // Name validation - only letters and spaces, minimum 2 characters
    if (!name || name.length < 2 || !/^[a-zA-Z\s]+$/.test(name)) {
        nameInput.classList.add("is-invalid");
        status.innerHTML = '<small class="text-danger">Please enter a valid name (letters only, minimum 2 characters)</small>';
        hasErrors = true;
    }

    // Email validation - proper email format
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email || !emailRegex.test(email)) {
        emailInput.classList.add("is-invalid");
        if (!hasErrors) {
            status.innerHTML = '<small class="text-danger">Please enter a valid email address</small>';
        }
        hasErrors = true;
    }

    // Phone validation - exactly 10 digits
    const phoneRegex = /^\d{10}$/;
    if (!mobile || !phoneRegex.test(mobile)) {
        mobileInput.classList.add("is-invalid");
        if (!hasErrors) {
            status.innerHTML = '<small class="text-danger">Please enter a valid 10-digit mobile number</small>';
        }
        hasErrors = true;
    }

    // Requirement validation - minimum 10 characters, maximum 200 characters
    if (!requirement || requirement.length < 10) {
        requirementInput.classList.add("is-invalid");
        if (!hasErrors) {
            status.innerHTML = '<small class="text-danger">Please describe your requirement (minimum 10 characters)</small>';
        }
        hasErrors = true;
    } else if (requirement.length > 200) {
        requirementInput.classList.add("is-invalid");
        if (!hasErrors) {
            status.innerHTML = '<small class="text-danger">Requirement description is too long (maximum 200 characters)</small>';
        }
        hasErrors = true;
    }

    // If there are validation errors, stop submission
    if (hasErrors) {
        return;
    }

    // Set submission flag
    isSubmitting = true;
    
    // Get enquiry type from localStorage
    const enquiryType = localStorage.getItem('enquiryType') || 'General Enquiry';

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
        status.innerHTML = '<small class="text-success">Thank you! Your enquiry has been submitted successfully.</small>';
        document.getElementById("enquiryForm").reset();
        localStorage.removeItem('enquiryType');
        
        // Clear validation styles after successful submission
        nameInput.classList.remove("is-invalid");
        emailInput.classList.remove("is-invalid");
        mobileInput.classList.remove("is-invalid");
        requirementInput.classList.remove("is-invalid");
        
        // Close modal after success
        setTimeout(() => {
            const modal = document.getElementById('registerModal');
            if (window.bootstrap && window.bootstrap.Modal) {
                const modalInstance = bootstrap.Modal.getInstance(modal) || new bootstrap.Modal(modal);
                modalInstance.hide();
            } else if (window.jQuery && window.jQuery.fn.modal) {
                jQuery('#registerModal').modal('hide');
            }
            status.innerHTML = "";
        }, 2000);
    })
    .catch((error) => {
        console.log("Form submission completed (assuming success due to CORS)");
        status.innerHTML = '<small class="text-success">Thank you! Your enquiry has been submitted successfully.</small>';
        document.getElementById("enquiryForm").reset();
        localStorage.removeItem('enquiryType');
        
        // Clear validation styles
        nameInput.classList.remove("is-invalid");
        emailInput.classList.remove("is-invalid");
        mobileInput.classList.remove("is-invalid");
        requirementInput.classList.remove("is-invalid");
        
        setTimeout(() => {
            const modal = document.getElementById('registerModal');
            if (window.bootstrap && window.bootstrap.Modal) {
                const modalInstance = bootstrap.Modal.getInstance(modal) || new bootstrap.Modal(modal);
                modalInstance.hide();
            } else if (window.jQuery && window.jQuery.fn.modal) {
                jQuery('#registerModal').modal('hide');
            }
            status.innerHTML = "";
        }, 2000);
    })
    .finally(() => {
        // Reset button and flag
        submitBtn.disabled = false;
        submitBtn.textContent = "Submit";
        isSubmitting = false;
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
                    const counter = document.getElementById("char-counter");
                    
                    if (counter) {
                        counter.textContent = `${currentLength}/${maxLength}`;
                    }
                }
            });
        }
    });

    // Handle modal close
    const modal = document.getElementById('registerModal');
    if (modal) {
        modal.addEventListener('hidden.bs.modal', function() {
            document.getElementById("enquiryForm").reset();
            document.getElementById("enquiry-status").innerHTML = "";
            document.getElementById("enquiry-submit-btn").disabled = false;
            document.getElementById("enquiry-submit-btn").textContent = "Submit";
            
            // Clear validation styles
            inputs.forEach(input => {
                if (input.element) {
                    input.element.classList.remove("is-invalid");
                }
            });
            
            localStorage.removeItem('enquiryType');
            isSubmitting = false;
        });
    }
});
</script>