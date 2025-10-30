<?php
// Remove PHP form handling since we're using Google Forms
$show_thank_you = false; // Always show the main form
?>
<?php
$url = $_SERVER['REQUEST_URI'];
$count = substr_count($url, '/');
$path = str_repeat('../', $count - 2);
// Include tracking functions
include_once $path . 'includes/tracking-functions.php';
?>

<!-- Registration Modal -->
<div class="modal fade" id="registerModal" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-body">
                <div class="contact-container">
                    <div class="row g-0">
                        <div class="col-lg-12">
                            <div class="modal-contact" style="min-height: 450px;">
                                <button type="button" class="btn-close modal-btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <h2 class="form-title" id="enquiry-form-title">Enquiry Form</h2>

                                <form id="enquiryForm" novalidate>
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" id="name" name="name" class="form-control custom-input"
                                            placeholder="Enter name" maxlength="20" pattern="[A-Za-z ]+" required>
                                        <div id="name-error-modal" class="text-danger"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="work_email" class="form-label">Work email</label>
                                        <input type="email" id="work_email" name="work_email"
                                            class="form-control custom-input" placeholder="Enter work email"
                                            pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" required>
                                        <div id="email-error-modal" class="text-danger"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="mobile_number" class="form-label">Mobile Number</label>
                                        <input type="tel" id="mobile_number" name="mobile_number"
                                            class="form-control custom-input"
                                            placeholder="Enter mobile number (e.g. +91 98765 43210)"
                                            pattern="^\+?[0-9]{10,15}$" maxlength="15" required
                                            oninput="this.value = this.value.replace(/[^0-9+]/g, '');">
                                        <div id="mobile-error-modal" class="text-danger"></div>
                                    </div>

                                    <input type="hidden" id="requirement" name="requirement" value="">
                                    <div id="requirement-error-modal" class="text-danger"></div>

                                    <div id="enquiry-status"></div>

                                    <div class="form-btn-container d-flex justify-content-end">
                                        <button type="submit" class="btn btn-custom" id="enquiry-submit-btn">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                                <div id="successMessage"
                                    style="display: none; text-align: center; background-color: white; padding: 20px;">
                                    <div class="email-icon">
                                        <img src="<?php echo $path; ?>assets/images/contact-feedback.svg"
                                            alt="feedback icon"
                                            style="width: 120px; height: auto; margin-bottom: 20px;" />
                                    </div>
                                    <h2 class="form-title">Thank <span class="highlight">you :)</span></h2>
                                    <p>Your message has been successfully sent.</p>
                                    <p>We will contact you very soon!</p>
                                    <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const enquiryForm = document.getElementById("enquiryForm");
    if (enquiryForm) {
        enquiryForm.addEventListener("submit", function(e) {
            e.preventDefault();
            submitEnquiry(window.trackingData);
        });
    }
});

var nameInput = document.getElementById('name');

nameInput.addEventListener("keypress", e => {
  const char = String.fromCharCode(e.which);
  if (!/[a-zA-Z ]/.test(char)) e.preventDefault();
});


document.getElementById('name').addEventListener('input', function() {        
    const name = document.getElementById('name').value;

    if (name.trim().length > 0 && /^[a-zA-Z\s]+$/.test(name)) {
        document.getElementById('name').classList.remove("is-invalid");
        document.getElementById('name-error-modal').innerHTML = '';
        document.getElementById('name-error-modal').classList.add('d-none');
    } else {
        document.getElementById('name').classList.add("is-invalid");
        document.getElementById('name-error-modal').innerHTML = 'Enter a valid name';
        document.getElementById('name-error-modal').classList.remove('d-none');
    }
}); 

document.getElementById('work_email').addEventListener('input', function() {        
    const email = document.getElementById('work_email').value.trim();

    if (email.length > 0 && /^\S+@\S+\.\S+$/.test(email)) {
        document.getElementById('work_email').classList.remove("is-invalid");
        document.getElementById('email-error-modal').innerHTML = '';
        document.getElementById('email-error-modal').classList.add('d-none');
    } else {
        document.getElementById('work_email').classList.add("is-invalid");
        document.getElementById('email-error-modal').innerHTML = 'Enter a valid email address';
        document.getElementById('email-error-modal').classList.remove('d-none');
    }
}); 

document.getElementById('mobile_number').addEventListener('input', function() {        
    const mobile = document.getElementById('mobile_number').value.trim();

    if (mobile.length > 0 && /^\+?[0-9]{10,15}$/.test(mobile)) {
        document.getElementById('mobile_number').classList.remove("is-invalid");
        document.getElementById('mobile-error-modal').innerHTML = '';
        document.getElementById('mobile-error-modal').classList.add('d-none');
    } else {
        document.getElementById('mobile_number').classList.add("is-invalid");   
        document.getElementById('mobile-error-modal').innerHTML = 'Enter a valid mobile number (e.g. +91 98765 43210)';
        document.getElementById('mobile-error-modal').classList.remove('d-none');
    }
}); 

</script>
