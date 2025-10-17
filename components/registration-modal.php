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
                            <div class="modal-contact" style="min-height: 650px;">
                                <button type="button" class="btn-close modal-btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <h2 class="form-title" id="enquiry-form-title">Enquiry Form</h2>

                                <form id="enquiryForm" novalidate>
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" id="name" name="name" class="form-control custom-input"
                                            placeholder="Enter name" required>
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
                                            placeholder="Enter mobile number (e.g. +1234567890)"
                                            pattern="^\+?[0-9]{10,15}$" required
                                            oninput="this.value = this.value.replace(/[^0-9+]/g, '');">
                                        <div id="mobile-error-modal" class="text-danger"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="requirement" class="form-label">Type your requirement</label>
                                        <textarea id="requirement" name="requirement" class="form-control custom-input"
                                            placeholder="Describe project needs (eg, mobile app, website design, website development, UX audit..etc)"
                                            rows="6" maxlength="200" required></textarea>
                                        <div id="charCount" class="form-text text-muted text-end">0/200 characters</div>
                                        <div id="requirement-error-modal" class="text-danger"></div>
                                    </div>

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
            const trackingData = <?php echo getTrackingDataJson(); ?>;
            submitEnquiry(trackingData);
        });
    }
});
</script>