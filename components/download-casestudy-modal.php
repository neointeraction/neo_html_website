<?php
$path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); 
include_once $path . 'includes/tracking-functions.php';
?>

<!-- Download Case Study Modal -->

<div class="modal fade" id="downloadCaseStudyModal" tabindex="-1" aria-labelledby="download-casestudy-form-title" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-body">
                <div class="contact-container">
                    <div class="row g-0">
                        <div class="col-lg-12">
                            <div class="modal-contact">
                                <button type="button" class="btn-close modal-btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h2 class="form-title" id="download-casestudy-form-title">Download Case Study</h2>

                                <form id="downloadCaseStudyForm" novalidate>
                                    <div class="form-group">
                                        <label for="name-casestudy" class="form-label">Name</label>
                                        <input
                                            type="text"
                                            id="name-casestudy"
                                            name="name"
                                            class="form-control custom-input"
                                            placeholder="Enter name"
                                            required>
                                        <div id="name-error-casestudy" class="text-danger"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="work_email-casestudy" class="form-label">Work email</label>
                                        <input
                                            type="email"
                                            id="work_email-casestudy"
                                            name="work_email"
                                            class="form-control custom-input"
                                            placeholder="Enter work email"
                                            pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$"
                                            required>
                                        <div id="email-error-casestudy" class="text-danger"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="mobile_number-casestudy" class="form-label">Mobile Number</label>
                                        <input
                                            type="tel"
                                            id="mobile_number-casestudy"
                                            name="mobile_number"
                                            class="form-control custom-input"
                                            placeholder="Enter mobile number (e.g. +1234567890)"
                                            pattern="^\+?[0-9]{10,15}$"
                                            required>
                                        <div id="mobile-error-casestudy" class="text-danger"></div>
                                    </div>
                                    
                                    <div class="form-btn-container d-flex justify-content-end">
                                        <button type="submit" class="btn btn-custom" id="download-casestudy-submit-btn">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                                 <div id="successMessage" style="display: none; text-align: center; background-color: white; padding: 20px;">
                                    <div class="email-icon">
                                        <img src="<?php echo $path; ?>assets/images/contact-feedback.svg" alt="feedback icon" style="width: 120px; height: auto; margin-bottom: 20px;" />
                                    </div>
                                    <h2 class="form-title">Thank you for your interest!</h2>
                                    <p>Your case study download is ready.</p>
                                    <a id="downloadCaseStudyButton" href="#" class="btn btn-custom" download>Download Case Study</a>
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
