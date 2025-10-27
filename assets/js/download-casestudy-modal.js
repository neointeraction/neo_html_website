let isCaseStudySubmitting = false; // Renamed to avoid conflict

function submitCaseStudyForm() {
    console.log("submitCaseStudyForm function called.");
    // Prevent double submission
    if (isCaseStudySubmitting) { // Use new variable name
        console.log("Already submitting, please wait...");
        return;
    }

    const cs_nameInput = document.getElementById("cs_name-casestudy");
    console.log("cs_nameInput:", cs_nameInput);
    const cs_emailInput = document.getElementById("cs_work_email-casestudy");
    console.log("cs_emailInput:", cs_emailInput);
    const cs_mobileInput = document.getElementById("cs_mobile_number-casestudy");
    console.log("cs_mobileInput:", cs_mobileInput);
    const cs_submitBtn = document.getElementById("cs_download-casestudy-submit-btn");
    console.log("cs_submitBtn:", cs_submitBtn);

    const cs_nameError = document.getElementById("cs_name-error-casestudy");
    console.log("cs_nameError:", cs_nameError);
    const cs_emailError = document.getElementById("cs_email-error-casestudy");
    console.log("cs_emailError:", cs_emailError);
    const cs_mobileError = document.getElementById("cs_mobile-error-casestudy");
    console.log("cs_mobileError:", cs_mobileError);

    const cs_name = cs_nameInput.value.trim();
    const cs_email = cs_emailInput.value.trim();
    const cs_mobile = cs_mobileInput.value.trim();

    // Clear previous validation styles
    cs_nameInput.classList.remove("is-invalid");
    cs_emailInput.classList.remove("is-invalid");
    cs_mobileInput.classList.remove("is-invalid");
    cs_nameError.textContent = "";
    cs_emailError.textContent = "";
    cs_mobileError.textContent = "";
    
    let cs_hasErrors = false;

    // Name validation - only letters and spaces, minimum 2 characters
    if (!cs_name || cs_name.length < 2 || !/^[a-zA-Z\s]+$/.test(cs_name)) {
        cs_nameInput.classList.add("is-invalid");
        cs_nameError.textContent = "Enter a valid name (letters only, minimum 2 characters)";
        cs_hasErrors = true;
    }

    // Email validation - proper email format
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!cs_email || !emailRegex.test(cs_email)) {
        cs_emailInput.classList.add("is-invalid");
        cs_emailError.textContent = "Enter a valid email address";
        cs_hasErrors = true;
    }

    // Phone validation - allows optional '+' and 10 to 15 digits
    const phoneRegex = /^\+?[0-9]{10,15}$/;
    if (!cs_mobile || !phoneRegex.test(cs_mobile)) {
        cs_mobileInput.classList.add("is-invalid");
        cs_mobileError.textContent = "Enter a valid mobile number (e.g., 9123456789)";
        cs_hasErrors = true;
    }

    if (cs_hasErrors) {
        return;
    }

    // Set submission flag
    isCaseStudySubmitting = true; // Use new variable name
    
    // Get enquiry type and case study URL from localStorage
    // These are set when the "Download case study" button is clicked
    let cs_enquiryType = localStorage.getItem('enquiryType');
    const caseStudyUrl = localStorage.getItem('caseStudyUrl');
    
    // Fallback if localStorage items are not set (should not happen if button click is the entry point)
    if (!cs_enquiryType) {
        console.warn("cs_enquiryType not found in localStorage, defaulting.");
        cs_enquiryType = 'Download Case Study';
    }
    if (!caseStudyUrl) {
        console.warn("caseStudyUrl not found in localStorage, defaulting.");
        caseStudyUrl = '#';
    }

    // Update button state
    cs_submitBtn.disabled = true;
    cs_submitBtn.textContent = "Submitting...";

    // Google Form submission
    const CS_GOOGLE_FORM_URL = "https://docs.google.com/forms/d/e/1FAIpQLSdt4pIKzDRK50yFGFvanxa3P3RBsSqlwuP06HlgWtopQ-PAOA/formResponse";
    // Local server-side script submission
    const CS_EMAIL_SUBMIT_URL ="../includes/send_casestudy_email.php"; // Path to your new PHP script

    const googleFormData = new FormData();
    googleFormData.append("entry.1195398138", cs_email);
    googleFormData.append("entry.2044501982", cs_name);
    googleFormData.append("entry.943859299", cs_mobile);
    googleFormData.append("entry.628579240", cs_enquiryType); // Now sends project title as requirement
    googleFormData.append("entry.873621461", "Case Study Download"); // Now sends static string as enquiryType
    googleFormData.append("entry.894386", new Date().toISOString());

    const emailFormData = new FormData();
    emailFormData.append("cs_name", cs_name);
    emailFormData.append("cs_work_email", cs_email);
    emailFormData.append("cs_mobile_number", cs_mobile);
    emailFormData.append("cs_enquiryType", cs_enquiryType);
    emailFormData.append("caseStudyUrl", caseStudyUrl); // Pass the case study URL

    console.log("=== CASE STUDY SUBMISSION ===");
    console.log("Enquiry Type:", cs_enquiryType);
    console.log("Case Study URL:", caseStudyUrl);

    // Perform both submissions concurrently
    Promise.all([
        fetch(CS_GOOGLE_FORM_URL, {
            method: "POST",
            mode: "no-cors", // Google Forms require no-cors
            body: googleFormData
        }),
        fetch(CS_EMAIL_SUBMIT_URL, {
            method: "POST",
            body: emailFormData
        }).then(response => response.json()) // Parse JSON response for our script
    ])
    .then(([googleResponse, emailData]) => {
        console.log("Google Form submission completed (assuming success due to CORS)");
        console.log("Email script server response:", emailData);

        // Check if email sending was successful
        if (emailData && emailData.status === 'success') {
            // Hide form and show success message
            document.getElementById("downloadCaseStudyForm").style.display = "none";
            document.getElementById("cs_successMessage").style.display = "block";
            document.getElementById("download-casestudy-form-title").style.display = "none";
            document.querySelector(".modal-contact").style.backgroundColor = "white";

            // Display the email address in the success message
            document.getElementById("cs_emailConfirmationMessage").textContent = `An email with the download link has been sent to ${cs_email}.`;

            localStorage.removeItem('enquiryType');
            localStorage.removeItem('caseStudyUrl');
            
            // Clear validation styles after successful submission
            cs_nameInput.classList.remove("is-invalid");
            cs_emailInput.classList.remove("is-invalid");
            cs_mobileInput.classList.remove("is-invalid");
        } else {
            // Handle error from our email script
            alert("Error sending email: " + (emailData ? emailData.message : "Unknown error"));
            console.error("Email script error:", emailData ? emailData.message : "Unknown error");
        }
    })
    .catch((error) => {
        console.error("One or more form submissions failed:", error);
        alert("An unexpected error occurred during submission. Please try again.");
    })
    .finally(() => {
        // Reset button and flag
        cs_submitBtn.disabled = false;
        cs_submitBtn.textContent = "Submit";
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
            // Check if dataset exists before accessing properties
            const projectTitle = this.dataset ? this.dataset.projectTitle : null;
            const caseStudyUrl = this.dataset ? this.dataset.caseStudyUrl : null;
            
            // Only set localStorage items if the data attributes exist
            if (projectTitle) {
                localStorage.setItem('enquiryType', projectTitle);
            } else {
                localStorage.removeItem('enquiryType'); // Clear if not present
            }
            if (caseStudyUrl) {
                localStorage.setItem('caseStudyUrl', caseStudyUrl);
            } else {
                localStorage.removeItem('caseStudyUrl'); // Clear if not present
            }
            console.log(`LocalStorage set: enquiryType = ${projectTitle}, caseStudyUrl = ${caseStudyUrl}`);
        });
    });

    // Real-time validation clearing
    const cs_inputs = [
        { element: document.getElementById("cs_name-casestudy"), type: "name" },
        { element: document.getElementById("cs_work_email-casestudy"), type: "email" },
        { element: document.getElementById("cs_mobile_number-casestudy"), type: "mobile" }
    ];
   // console.log("cs_inputs elements:", cs_inputs.map(input => input.element));

    cs_inputs.forEach(cs_input => {
        if (cs_input.element) {
            cs_input.element.addEventListener("input", function() {
                this.classList.remove("is-invalid");
                // Clear specific error messages
                if (this.id === "cs_name-casestudy") document.getElementById("cs_name-error-casestudy").textContent = "";
                if (this.id === "cs_work_email-casestudy") document.getElementById("cs_email-error-casestudy").textContent = "";
                if (this.id === "cs_mobile_number-casestudy") document.getElementById("cs_mobile-error-casestudy").textContent = "";
            });
        }
    });

    // Handle modal close and form submission when modal is shown
    const cs_modal = document.getElementById('downloadCaseStudyModal'); // Corrected ID
   // console.log("cs_modal:", cs_modal);
    if (cs_modal) {
        cs_modal.addEventListener('shown.bs.modal', function() {
            console.log("Download Case Study Modal shown event triggered.");
            const downloadCaseStudyForm = document.getElementById("downloadCaseStudyForm");
            console.log("downloadCaseStudyForm (inside shown.bs.modal):", downloadCaseStudyForm);
            if (downloadCaseStudyForm) {
                console.log("downloadCaseStudyForm found, attaching submit listener.");
                downloadCaseStudyForm.addEventListener("submit", function(e) {
                    e.preventDefault();
                    console.log("Form submit event triggered, calling submitCaseStudyForm().");
                    submitCaseStudyForm();
                });
            } else {
                console.error("downloadCaseStudyForm not found inside shown.bs.modal!");
            }
        });

        cs_modal.addEventListener('hidden.bs.modal', function() {
            console.log("Download Case Study Modal hidden event triggered.");
            // Reset form and show it again
            document.getElementById("downloadCaseStudyForm").reset();
            document.getElementById("downloadCaseStudyForm").style.display = "block";
            document.getElementById("cs_successMessage").style.display = "none";
            document.getElementById("download-casestudy-form-title").style.display = "block";
            document.querySelector(".modal-contact").style.backgroundColor = ""; // Reset background
            // Ensure the backdrop is removed by Bootstrap
            document.body.classList.remove('modal-open');
            document.querySelectorAll('.modal-backdrop').forEach(backdrop => backdrop.remove());
            
            document.getElementById("cs_download-casestudy-submit-btn").disabled = false;
            document.getElementById("cs_download-casestudy-submit-btn").textContent = "Submit";
            
            // Clear validation styles
            cs_inputs.forEach(cs_input => {
                if (cs_input.element) {
                    cs_input.element.classList.remove("is-invalid");
                    cs_input.element.style.borderColor = ""; // Also clear manual styles
                }
            });
            // Clear specific error messages
            document.getElementById("cs_name-error-casestudy").textContent = "";
            document.getElementById("cs_email-error-casestudy").textContent = "";
            document.getElementById("cs_mobile-error-casestudy").textContent = "";
            
            // Removed localStorage.removeItem for enquiryType and caseStudyUrl as they are handled on submission
            isCaseStudySubmitting = false; // Use new variable name
        });
    }
});
