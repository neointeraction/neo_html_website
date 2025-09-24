let isCaseStudySubmitting = false; // Renamed to avoid conflict

function submitCaseStudyForm() {
    console.log("submitCaseStudyForm function called.");
    // Prevent double submission
    if (isCaseStudySubmitting) { // Use new variable name
        console.log("Already submitting, please wait...");
        return;
    }

    const nameInput = document.getElementById("name-casestudy");
    const emailInput = document.getElementById("work_email-casestudy");
    const mobileInput = document.getElementById("mobile_number-casestudy");
    const submitBtn = document.getElementById("download-casestudy-submit-btn");

    const nameError = document.getElementById("name-error-casestudy");
    const emailError = document.getElementById("email-error-casestudy");
    const mobileError = document.getElementById("mobile-error-casestudy");

    const name = nameInput.value.trim();
    const email = emailInput.value.trim();
    const mobile = mobileInput.value.trim();

    // Clear previous validation styles
    nameInput.classList.remove("is-invalid");
    emailInput.classList.remove("is-invalid");
    mobileInput.classList.remove("is-invalid");
    nameError.textContent = "";
    emailError.textContent = "";
    mobileError.textContent = "";
    
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

    if (hasErrors) {
        return;
    }

    // Set submission flag
    isCaseStudySubmitting = true; // Use new variable name
    
    // Get enquiry type and case study URL from localStorage
    // These are set when the "Download case study" button is clicked
    const enquiryType = localStorage.getItem('enquiryType');
    const caseStudyUrl = localStorage.getItem('caseStudyUrl');
    
    // Fallback if localStorage items are not set (should not happen if button click is the entry point)
    if (!enquiryType) {
        console.warn("enquiryType not found in localStorage, defaulting.");
        enquiryType = 'Download Case Study';
    }
    if (!caseStudyUrl) {
        console.warn("caseStudyUrl not found in localStorage, defaulting.");
        caseStudyUrl = '#';
    }

    // Update button state
    submitBtn.disabled = true;
    submitBtn.textContent = "Submitting...";

    // Google Form submission
    const GOOGLE_FORM_URL = "https://docs.google.com/forms/d/e/1FAIpQLSdt4pIKzDRK50yFGFvanxa3P3RBsSqlwuP06HlgWtopQ-PAOA/formResponse";

    const formData = new FormData();
    formData.append("entry.1195398138", email);
    formData.append("entry.2044501982", name);
    formData.append("entry.943859299", mobile);
    formData.append("entry.628579240", enquiryType); // Now sends project title as requirement
    formData.append("entry.873621461", "Case Study Download"); // Now sends static string as enquiryType
    formData.append("entry.894386", new Date().toISOString());
    
    // Add tracking data
    // Debug logging (excluding tracking data as per user request)
    console.log("=== CASE STUDY SUBMISSION ===");
    console.log("Enquiry Type:", enquiryType);
    console.log("Timestamp:", new Date().toISOString());
    console.log("Case Study URL:", caseStudyUrl);

    // Single fetch request
    fetch(GOOGLE_FORM_URL, {
        method: "POST",
        mode: "no-cors",
        body: formData
    })
    .then(() => {
        console.log("Form submitted successfully");
        
        // Hide form and show success message
        document.getElementById("downloadCaseStudyForm").style.display = "none";
        document.getElementById("successMessage").style.display = "block";
        document.getElementById("download-casestudy-form-title").style.display = "none";
        document.querySelector(".modal-contact").style.backgroundColor = "white";

        // Set the download link
        const downloadButton = document.getElementById("downloadCaseStudyButton");
        if (downloadButton) {
            downloadButton.href = caseStudyUrl;
        }

        localStorage.removeItem('enquiryType');
        localStorage.removeItem('caseStudyUrl');
        
        // Clear validation styles after successful submission
        nameInput.classList.remove("is-invalid");
        emailInput.classList.remove("is-invalid");
        mobileInput.classList.remove("is-invalid");
    })
    .catch((error) => {
        console.log("Form submission completed (assuming success due to CORS)");
        
        // Hide form and show success message
        document.getElementById("downloadCaseStudyForm").style.display = "none";
        document.getElementById("successMessage").style.display = "block";
        document.getElementById("download-casestudy-form-title").style.display = "none";
        document.querySelector(".modal-contact").style.backgroundColor = "white";

        // Set the download link
        const downloadButton = document.getElementById("downloadCaseStudyButton");
        if (downloadButton) {
            downloadButton.href = caseStudyUrl;
        }

        localStorage.removeItem('enquiryType');
        localStorage.removeItem('caseStudyUrl');
        
        // Clear validation styles
        nameInput.classList.remove("is-invalid");
        emailInput.classList.remove("is-invalid");
        mobileInput.classList.remove("is-invalid");
    })
    .finally(() => {
        // Reset button and flag
        submitBtn.disabled = false;
        submitBtn.textContent = "Submit";
        isCaseStudySubmitting = false; // Use new variable name
        console.log("Submission completed");
    });
}

// Clear form when modal is closed and handle form submission
document.addEventListener('DOMContentLoaded', function() {
    // Event listener for "Download case study" buttons to set localStorage
    const downloadCaseStudyButtons = document.querySelectorAll('[data-bs-target="#downloadCaseStudyModal"]');
    downloadCaseStudyButtons.forEach(button => {
        button.addEventListener('click', function() {
            const projectTitle = this.dataset.projectTitle;
            const caseStudyUrl = this.dataset.caseStudyUrl;
            if (projectTitle) {
                localStorage.setItem('enquiryType', projectTitle);
            }
            if (caseStudyUrl) {
                localStorage.setItem('caseStudyUrl', caseStudyUrl);
            }
            console.log(`LocalStorage set: enquiryType = ${projectTitle}, caseStudyUrl = ${caseStudyUrl}`);
        });
    });

    // Handle form submission
    const downloadCaseStudyForm = document.getElementById("downloadCaseStudyForm");
    if (downloadCaseStudyForm) {
        console.log("downloadCaseStudyForm found, attaching submit listener.");
        downloadCaseStudyForm.addEventListener("submit", function(e) {
            e.preventDefault();
            console.log("Form submit event triggered, calling submitCaseStudyForm().");
            submitCaseStudyForm();
        });
    } else {
        console.error("downloadCaseStudyForm not found!");
    }

    // Real-time validation clearing
    const inputs = [
        { element: document.getElementById("name-casestudy"), type: "name" },
        { element: document.getElementById("work_email-casestudy"), type: "email" },
        { element: document.getElementById("mobile_number-casestudy"), type: "mobile" }
    ];

    inputs.forEach(input => {
        if (input.element) {
            input.element.addEventListener("input", function() {
                this.classList.remove("is-invalid");
                // Clear specific error messages
                if (this.id === "name-casestudy") document.getElementById("name-error-casestudy").textContent = "";
                if (this.id === "work_email-casestudy") document.getElementById("email-error-casestudy").textContent = "";
                if (this.id === "mobile_number-casestudy") document.getElementById("mobile-error-casestudy").textContent = "";
            });
        }
    });

    // Handle modal close
    const modal = document.getElementById('downloadCaseStudyModal'); // Corrected ID
    if (modal) {
        modal.addEventListener('hidden.bs.modal', function() {
            // Reset form and show it again
            document.getElementById("downloadCaseStudyForm").reset();
            document.getElementById("downloadCaseStudyForm").style.display = "block";
            document.getElementById("successMessage").style.display = "none";
            document.getElementById("download-casestudy-form-title").style.display = "block";
            document.querySelector(".modal-contact").style.backgroundColor = ""; // Reset background
            
            document.getElementById("download-casestudy-submit-btn").disabled = false;
            document.getElementById("download-casestudy-submit-btn").textContent = "Submit";
            
            // Clear validation styles
            inputs.forEach(input => {
                if (input.element) {
                    input.element.classList.remove("is-invalid");
                    input.element.style.borderColor = ""; // Also clear manual styles
                }
            });
            // Clear specific error messages
            document.getElementById("name-error-casestudy").textContent = "";
            document.getElementById("email-error-casestudy").textContent = "";
            document.getElementById("mobile-error-casestudy").textContent = "";
            
            // Removed localStorage.removeItem for enquiryType and caseStudyUrl as they are handled on submission
            isCaseStudySubmitting = false; // Use new variable name
        });
    }
});
