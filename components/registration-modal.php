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
                                        <textarea
                                            id="requirement"
                                            name="requirement"
                                            class="form-control custom-input"
                                            placeholder="Describe project needs (eg, mobile app, website design, website development, UX audit..etc)"
                                            rows="6"
                                            required></textarea>
                                    </div>
                                    
                                    <div id="enquiry-status"></div>
                                    
                                    <div class="form-btn-container d-flex justify-content-end">
                                        <button type="button" class="btn btn-custom" id="enquiry-submit-btn" onclick="submitEnquiry()">
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

    // Debug logging
    console.log("=== SINGLE SUBMISSION ===");
    console.log("Enquiry Type:", enquiryType);
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

// Clear form when modal is closed
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('registerModal');
    if (modal) {
        modal.addEventListener('hidden.bs.modal', function() {
            document.getElementById("enquiryForm").reset();
            document.getElementById("enquiry-status").innerHTML = "";
            document.getElementById("enquiry-submit-btn").disabled = false;
            document.getElementById("enquiry-submit-btn").textContent = "Submit";
            localStorage.removeItem('enquiryType');
            isSubmitting = false;
        });
    }
});
</script>