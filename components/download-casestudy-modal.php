<?php
$path = str_repeat('../', substr_count($_SERVER['REQUEST_URI'], '/') - 2); 
include_once $path . 'includes/tracking-functions.php';
?>

<!-- Download Case Study Modal -->

<div class="modal fade" id="downloadCaseStudyModal" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-body">
                <div class="contact-container">
                    <div class="row g-0">
                        <div class="col-lg-12">
                            <div class="modal-contact">
                                <button type="button" class="btn-close modal-btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <h2 class="form-title" id="download-casestudy-form-title">Download Case Study</h2>

                                <form id="downloadCaseStudyForm" novalidate>
                                    <div class="form-group">
                                        <label for="cs_name-casestudy" class="form-label">Name</label>
                                        <input type="text" id="cs_name-casestudy" name="cs_name"
                                            class="form-control custom-input" placeholder="Enter name" required>
                                        <div id="cs_name-error-casestudy" class="text-danger"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cs_work_email-casestudy" class="form-label">Work email</label>
                                        <input type="email" id="cs_work_email-casestudy" name="cs_work_email"
                                            class="form-control custom-input" placeholder="Enter work email"
                                            pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" required>
                                        <div id="cs_email-error-casestudy" class="text-danger"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cs_mobile_number-casestudy" class="form-label">Mobile Number</label>
                                        <input type="tel" id="cs_mobile_number-casestudy" name="cs_mobile_number"
                                            class="form-control custom-input"
                                            placeholder="Enter mobile number (e.g. +91 98765 43210)"
                                            pattern="^\+?[0-9]{10,15}$" required>
                                        <div id="cs_mobile-error-casestudy" class="text-danger"></div>
                                    </div>

                                    <div class="form-btn-container d-flex justify-content-end">
                                        <button type="submit" class="btn btn-custom"
                                            id="cs_download-casestudy-submit-btn">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                                <div id="cs_successMessage"
                                    style="display: none; text-align: center; background-color: white; padding: 20px;">
                                    <div class="email-icon">
                                        <img src="<?php echo $path; ?>assets/images/contact-feedback.svg"
                                            alt="feedback icon"
                                            style="width: 120px; height: auto; margin-bottom: 20px;" />
                                    </div>
                                    <h2 class="form-title">Thank you for your interest!</h2>
                                    <p id="cs_emailConfirmationMessage">An email with the download link is sent to "the
                                        validated email address".</p>
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